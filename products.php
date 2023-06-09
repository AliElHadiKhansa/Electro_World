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
    ?>


 <h1> Add Products </h1>
<form class="user" action="add_products_action.php" method="POST">
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



  



<div class="col-6 m-3">
                         
   <button class="btn btn-primary btn-user btn-block">
   Add
</a>

</button>
</div></div>     
                            </form>

</body>
</html>