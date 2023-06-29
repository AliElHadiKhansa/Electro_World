<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/logo2.png" >
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Confirm order</title>


  </style>
</head>
<body>
<?php
    require "navbar_user.php" ;
    require "db_config/connect.php" ;
$price = $_GET['price'];
    $encodedCartIds = $_GET['cartIds']; // Retrieve the serialized cart IDs from the query string

// URL decode the cart IDs
$decodedCartIds = urldecode($encodedCartIds);

// Unserialize the cart IDs into an array
$cartIds = unserialize($decodedCartIds);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){



foreach($cartIds as $cartId){
    $updateCartSql = "UPDATE cart SET _deleted = 1 WHERE cart_id = '$cartId'";
    $result = mysqli_query($con,$updateCartSql);
    
    $cart = "SELECT * from cart where id = $cartId";
    $result1 = mysqli_query($con, $cart);
$row= mysqli_fetch_assoc($result1);
$qty = $row['quantity'];

$product_id = $row['productid'];
$query = "Select * from product where id =$product_id";
$res = mysqli_query($con,$query);
$real = $row['quantity'] - $qty;
$sql = "Update product set quantity= $real where id =$product_id";
$res1 = mysqli_query($con,$sql);
}
$user_id = $_SESSION['id'];
$address = $_POST['address'];
$phone = $_POST['number'];
   $ordersql="INSERT INTO order (userid,shippingaddress,phone,price, status) Values ($user_id,'$address','$phone',$price,'pending')"; 
   $resorder = mysqli_query($con,$ordersql);
}
 ?>
    
      

<div  style="display: flex; align-items: center; justify-content: center; "class="container-fluid p-5 bg-primary text-white">
         

    <form  action ="order.php?action=submit" method="POST" class="col-5">

            
            <div class="form-group">
              <label for="address"> address:</label>
              <input type="text" class="form-control" id="address" name="address"require>
            </div>

            <div class="form-group">
              <label for="number"> Phone Number:</label>
              <input type="text" class="form-control" id="number" name="number" require>
            </div>
            
            
            <button type="submit" class="btn btn-default mt-3 bg-info">Order Now!</button>
        </form>
    </div>