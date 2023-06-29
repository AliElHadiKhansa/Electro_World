
<?php
session_start();

include "db_config/connect.php";

$id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
if (!isset($_SESSION['id'])) {
   
    header("Location: login.php?error=2");
    exit();
}

$user_id = $_SESSION['id'];
$totalprice =$price * $quantity;
$query1= "SELECT * from cart WHERE userid=$user_id AND productid=$id";
$result1= mysqli_query($con,$query1);
if( mysqli_num_rows($result1) > 0){
    $row1 = mysqli_fetch_assoc($result1);
    $qty= $row1['quantity'] + $quantity;
    $price1 = $row1['price'] * $qty;
    $query = "UPDATE cart set quantity=$qty, price =$price1 WHERE userid=$user_id AND productid=$id";
    $result = mysqli_query($con, $query);  
}else{
$query = "INSERT INTO cart (userid, productid, quantity, price) VALUES ($user_id, $id, $quantity,$totalprice)";
$result = mysqli_query($con, $query);
}
 header("Location: cart.php");


?>