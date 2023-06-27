<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
      <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Products
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    
      <select class="form-control" name="category" id="category">
      <?php
    include "db_config/connect.php";

    $query = "SELECT * FROM category";
    $result = mysqli_query($con, $query);

    // Loop through the retrieved categories and create dropdown list options
    if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
      }
    } else {
      echo "<option value=''>No categories found</option>";
    }
    ?>
  </select>

 </ul>
</li>
      <li class="nav-item">
        <a class="nav-link " href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact us</a>
      </li>
    </ul>

  </div>
</nav>
</body>
</html>
