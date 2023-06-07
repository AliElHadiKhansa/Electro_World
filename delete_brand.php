<?php

include "db_config/connect.php";

$AID=$_GET['ID'];

$query = "DELETE From brand where id='$AID'";


// this function is used to execute the query and returns a 2d array
mysqli_query($con, $query) or die(mysqli_error($con));

header("location:view_brand.php")

?>