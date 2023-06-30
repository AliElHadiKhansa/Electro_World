<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
    <?php
    include "navbar.php";
    include "db_config/connect.php";


    $query = "Select * from brand";
    
    // this function is used to execute the query and returns a 2d array
    $result = mysqli_query($con, $query);
  
    $query2 = "Select * from category";

    $result2 = mysqli_query($con, $query2);

    ?>
  <div class="col-8 m-5">
<center> <h1> Add Products </h1>
<form class="user" action="add_products_action.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                           <div class="col-6 m-3 ">
                             <input type="text" class="form-control form-control-user"
                                          id="exampleInputname" aria-describedby="categorylHelp" name="name"
                                           required     placeholder="Enter Product Name...">
                         </div>




                         <div class="col-6 m-3">
                       
                         <input type="text" class="form-control form-control-user"
                                          id="exampleInputname" aria-describedby="categorylHelp" name="description"
                                           required     placeholder="Enter Product description...">
                         </div>




                         <div class="col-6 m-3">
                        
                         <input type="text" class="form-control form-control-user"
                                          id="exampleInputname" aria-describedby="categorylHelp" name="price"
                                           required     placeholder="Enter Product price...">
                         </div>

                         <div class="col-6 m-3">
                        
                        <input type="text" class="form-control form-control-user"
                                         id="exampleInputname" aria-describedby="categorylHelp" name="quantity"
                                          required     placeholder="Enter Product quantity...">
</div>

<div class="form-group col-6 m-3">
            
            <select class="form-control" name="brand" id="brand">
                <?php
                // Loop through the retrieved options and create dropdown list options
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group col-6 m-3">
            
            <select class="form-control" name="category" id="category">
                <?php
                // Loop through the retrieved options and create dropdown list options
                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        echo "<option value='" . $row2['id'] . "'>" . $row2['name'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>

<div class="col-6 m-3">
                        
                        <input type="file" 
                                         id="exampleInputimage" aria-describedby="ImageHelp" name="image"
                                          required   >
</div>


<div class="col-6 m-3">
                         
   <button class="btn btn-primary btn-user btn-block">
   Add
</a>

</button>
</div>
</div>     
                            </form>
            </center>
            </div>
</body>
</html>