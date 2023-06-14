<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body>
    <?php
include "navbar.php";

include "db_config/connect.php";


$query = "Select * from product";

// this function is used to execute the query and returns a 2d array
$result = mysqli_query($con, $query);

?>


    
    <h1 style="margin-top: 30px;"> <b> Products</b></h1>
    <table  class="container-fluid table table-hover">
<thead bgcolor=lightgrey> 
        <th scope="col">Name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th scope="col">quantity</th>
        <th scope="col">Action</th>
        
</thead>
<?php
if(mysqli_num_rows($result)>0){ //function to count the number of rows in the 2d array

    while($row = mysqli_fetch_assoc($result)){// to fetch in the 2d array row by row($row in the 1d)

       

        echo"<tr> 
                
               
                 <td> ".$row['name'] ." </td>
                 <td> ".$row['description'] ." </td>
                 <td> ".$row['price'] ." </td>
                 <td> ".$row['quantity'] ." </td>
                 <td><a href=delete_products.php?ID=".$row['id']."> <img src=images/Remove.png width=30px></a><a href=update_products.php?ID=".$row['id']."> <img src=images/Edit.png width=30px ></a></td>
                 
        </tr>";
          
                   
                   
                   
                   
         
    }


}
else{
    echo"No records found";
}


?>

    </table>

</div>


</body>
</html>