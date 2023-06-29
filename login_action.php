<?php
session_start();

include('db_config/connect.php');
$email = $_POST["email"];
$pass = $_POST["password"];
$query = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_info'] = $row;
    
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];     
  
    if ($row['roleid'] == 1) {
        header("location: index.php");     } 
        else {
        header("location: home.php");     }
    exit();
} else {
    header("Location: login.php?error=1"); 
    exit();
}
?>

