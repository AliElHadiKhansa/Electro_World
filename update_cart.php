<?php

include "db_config/connect.php";

$id=$_POST['id'];
$quantity= $_POST['quantity'];
$price =$_POST['price'];
$totalprice= $_POST ['totalprice'];
$totalprice= $totalprice + ($price * $quantity);
$query="UPDATE cart set quantity = $quantity, price= $totalprice WHERE id =$id";
$result = mysqli_query($con,$query);

header("Location:cart.php")

?>