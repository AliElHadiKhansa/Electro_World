<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Add any additional CSS or scripts as needed -->
    <style>
        /* Custom styles for the dropdown menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
    <title>Electro World</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg p-3">
  <a class="navbar-brand" href="#">Electro World</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link" >Products</a>
        <div class="dropdown-content">
          <?php
            include "db_config/connect.php";
            $query = "SELECT * FROM category";
            $result = mysqli_query($con, $query);

            if ($result && mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='product_filtered.php?category=" . $row['id'] . "'>" . $row['name'] . "</a>";
              }
            } else {
              echo "No categories found";
            }
          ?>
        </div>
      </li>
 <?php    // Check if a session ID exists
    if (isset($_SESSION['id'])) {
      echo '<li class="nav-item">
        <a class="nav-link " href="cart.php">Cart</a>
      </li>';
    }
  ?>
      
      <li class="nav-item">
        <a class="nav-link " href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact us</a>
      </li>
   
  </div>
  
  <div class="pull-right">

 <?php

    // Check if a session ID exists
    if (isset($_SESSION['id'])) {
      echo '<a href="logout.php" class="btn btn-default btn-flat">Logout</a>';
    }else{
   echo '<a href="login.php" class="btn btn-default btn-flat">Login</a>';
}
  ?>
 


          </div>
          </ul>
</nav>
</body>
</html>