<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="col-6">
<center> <h1> Add Category </h1></center>
<form class="user" action="add_category_action.php" method="POST">
                           <div class="form-group">
                             <input type="text" class="form-control form-control-user"
                                          id="exampleInputname" aria-describedby="categorylHelp" name="name"
                                           required     placeholder="Enter Category Name...">
                         </div>
                                       
                                    
                                        <button class="btn btn-primary btn-user btn-block">
                                            Add
</a>
</button>
                                    </form>
</div>
</body>
</html>