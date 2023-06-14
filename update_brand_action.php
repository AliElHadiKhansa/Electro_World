<?php

include "db_config/connect.php";

$AID=$_POST['ID'];
$name= $_POST['name'];

$sql = "UPDATE brand SET name='$name' WHERE id=$AID";

// this function is used to execute the query and returns a 2d array
mysqli_query($con, $sql) or die(mysqli_error($con));

header("location:view_brand.php")


?>