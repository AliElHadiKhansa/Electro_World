

<?php
    

    include('db_config/connect.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="insert into user (username,email,password,roleid) values ('$username','$email','$password',2)";
    mysqli_query($con,$query);

    header('location:login.php')




?>
