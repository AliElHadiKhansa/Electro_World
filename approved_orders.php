<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Brand</title>
</head>
<body>
    <?php
include "navbar.php";

include "db_config/connect.php";


$query = "Select * from orders where status ='approved'";

// this function is used to execute the query and returns a 2d array
$result = mysqli_query($con, $query);

?>

<center>
    
    <h1 style="margin-top: 30px;"> <b> Orders Approved </b></h1>
    <table  class="container table table-hover m-5">
<thead bgcolor=lightgrey> 
        <th scope="col">Name</th>
        <th scope="col">Shipping Address</th>
          <th scope="col">Phone</th>
            <th scope="col">Price</th>
      
        
</thead>
<?php
if(mysqli_num_rows($result)>0){ 

    while($row = mysqli_fetch_assoc($result)){
       

        echo"<tr> 
                
               
                 <td> ".$row['user_id'] ." </td>
                 <td> ".$row['shippingaddress'] ." </td>
                 <td> ".$row['phone'] ." </td>
                 <td> ".$row['price'] ." </td>
                
        </tr>";
          
                   
                   
                   
                   
         
    }


}
else{
    echo"No records found";
}


?>

    </table>
</center>
</div>


</body>
</html>