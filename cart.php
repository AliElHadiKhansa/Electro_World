<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<?php
include "navbar_user.php";
include "db_config/connect.php";

$id = $_SESSION['id'];

$query = "SELECT cart.*, product.name AS product_name, product.price AS product_price 
          FROM cart 
          INNER JOIN product ON cart.productid = product.id 
          WHERE cart.userid = $id";

$result = mysqli_query($con, $query);
$cartIds = array();

if (mysqli_num_rows($result) > 0) {
    echo "<form method='POST' action='update_cart.php'>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead class='table-primary'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th >Unit Price</th>";
    echo "<th >Quantity</th>";
    echo "<th>Sub Total</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $totalAmount = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['productid'];
        $cartIds[] = $row['id'];
        $product_name = $row['product_name'];
        $quantity = $row['quantity'];
        $product_price = $row['product_price'];
        $subtotal = $quantity * $product_price;
$cart_id = $row['id'];
        echo "<tr>";
        echo "<td>{$product_name}</td>";
        echo "<td class='text-right'>{$product_price}</td>";
        echo "<td class='text-right'>";
        echo "<input type='hidden' value='$cart_id' name='id'>";
        echo "<input type='hidden' value='$product_price' name='price'>";
        echo "<input type='hidden' value='$subtotal' name='totalprice'>";

        echo "<input type='number' name='quantity' value='$quantity' min='1' class='form-control'>  <button type='submit' class='btn btn-primary'>Update Cart</button>";
        echo "</td>";
        echo "<td class='text-right'>{$subtotal}</td>";
        echo"<td > <a href='delete_cart.php?ID=$cart_id' style='color:white'> <button type='submit' class='btn btn-primary'>Delete</a>";
        echo "</tr>";

        $totalAmount += $subtotal;
    }
    // Serialize the array into a string
$serializedCartIds = serialize($cartIds);

// URL encode the serialized cart IDs
$encodedCartIds = urlencode($serializedCartIds);



    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr>";
    echo "<td class='text-right' colspan='3'>Total:</td>";
    echo "<td class='text-right'>{$totalAmount}</td>";
    echo "</tr>";
    echo "</tfoot>";
    echo "</table>";
   
    echo "</form>";
    echo"<a href ='order.php?cartIds=$encodedCartIds&price=$totalAmount' style='text_decoration:none; color:white' > <button class='btn btn-primary btn-user btn-block text-white' > Confirm </a>

</a>";
} else {
    echo "No items found in the cart.";
}
?>


</body>
