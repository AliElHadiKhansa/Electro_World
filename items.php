
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Electro World</title>
</head>
<body>



<?php
include "navbar_user.php";
include "db_config/connect.php";
// Assuming you have a database connection established
$query = "SELECT * FROM product ";
$result = mysqli_query($con, $query);

// Check if the query was successful
if ($result) {
  // Loop through the result and display products




  $count = 0;
  echo '<div class="row">';
  while ($row = mysqli_fetch_assoc($result)) {
    // Extract product information from the row
    $product_id = $row['id'];
    $product_name = $row['name'];
    $product_description = $row['description'];
    $product_image = $row['image']; // Assuming the image path is stored in the database

    // Construct the image URL by concatenating the base URL with the image path
    $image_url = './images/' . $product_image; // Modify this based on your image directory structure

    // Display the product information in a Bootstrap card
    ?>
    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $image_url; ?>" width="100px" height="150px" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product_name; ?></h5>
          <p class="card-text"><?php echo $product_description; ?></p>
          <!-- Add more card content if needed -->
        </div>
      </div>
    </div>
    <?php

    $count++;
    if ($count % 3 === 0) {
      // Close the current row and start a new row for every 3rd product
      echo '</div><div class="row">';
    }
  }

  // Close the row
  echo '</div>';
  
} else {
  // Handle query error
  echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
</body>
</html>
