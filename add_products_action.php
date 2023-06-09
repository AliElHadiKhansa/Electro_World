
<?php
    

    include('db_config/connect.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price= $_POST['price']; 
    $quantity = $_POST['quantity'];

    $query="insert into product (name,description,price,quantity) values ('$name','$description','$price','$quantity')";
    mysqli_query($con,$query);

    header('location:view_products.php')




?>