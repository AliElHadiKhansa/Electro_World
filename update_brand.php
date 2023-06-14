<?php

include "db_config/connect.php";

$AID=$_GET['ID'];



$sql = "SELECT * FROM brand where id =$AID"  ;

// this function is used to execute the query and returns a 2d array
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Brand</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
 
    <div class="col-6">
        <h1> Update Brand </h1>
<form class="user" action="update_brand_action.php" method="POST">
                           <div class="form-group">
                             <input type="text" class="form-control form-control-user"
                                          id="exampleInputname" aria-describedby="categorylHelp" name="name"
                                          value="<?php echo $row['name']  ?>"     required     placeholder="Enter brand Name...">
                                          
                                    <input type="hidden" name="ID" value="<?php echo $row['id']  ?>">
                         </div>
                                       
                                    
                                        <button class="btn btn-primary btn-user btn-block">
                                            Update
</a>
</button>
                                    </form>
</div>
</body>
</html>
<?php
}?>