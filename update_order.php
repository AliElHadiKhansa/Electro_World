<?php
include "db_config/connect.php";
$id = $_GET['ID'];
$query = "UPDATE orders set status='approved' WHERE id = $id";
$res = mysqli_query($con,$query);
header("location:pending_orders.php");
?>