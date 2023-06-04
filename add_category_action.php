

<?php
    

    include('db_config/connect.php');

    $name = $_POST['name'];
   

    $query="insert into category (name) values ('$name')";
    mysqli_query($con,$query);

    header('location:view_category.php')




?>