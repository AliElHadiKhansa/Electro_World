<?php
include "db_config/connect.php";
$id = $_GET['ID'];

$query="DELETE from cart where id=$id";
$result = mysqli_query($con,$query);
header("location:cart.php");

?>