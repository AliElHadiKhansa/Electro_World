
<?php
    

    include('db_config/connect.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price= $_POST['price']; 
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $category = $_Post['category'];
$file_name=$_FILES['image']['name'];


$file_name=$_FILES['image']['name'];
$file_type=$_FILES['image']['type'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];

$extensions=array("jpg","jpeg","png","pdf");

    $ext=explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($ext));



    if(in_array($file_ext,$extensions)=== false){
        $errors= "Extensions not allowed, please choose a JPEG or PNG file.<br>";
    }
  
    if($file_size>2097152){
        $errors =$errors . " file size sould be exactly 2MB";
    }


    if(!isset($errors)){
        move_uploaded_file($file_tmp, "./images/".$file_name);
 
       
 
    $query="insert into product (name,description,price,quantity,image, brandid,categoryid) values ('$name','$description','$price','$quantity','$file_name','$brand','$category')";
    mysqli_query($con,$query);

    header('location:view_products.php');
    }


?>