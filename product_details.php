<?php
include "navbar_user.php";
include "db_config/connect.php";

// Assuming you have a database connection established
$id = $_GET['ID'];
$query = "SELECT * FROM product WHERE id = $id";
$result = mysqli_query($con, $query);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the product details from the result
    $row = mysqli_fetch_assoc($result);
    $product_name = $row['name'];
    $product_price = $row['price'];
    $product_quantity = $row['quantity'];
    $product_image = $row['image'];
    $category_id = $row['categoryid'];
    $query1 = "SELECT * FROM category WHERE id = $category_id";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    $categoryname=$row1['name'];

    $brand_id = $row['brandid'];
    $query2 = "SELECT * FROM brand WHERE id = $brand_id";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_assoc($result2);

    $brandname=$row2['name'];
        // Construct the image URL by concatenating the base URL with the image path
    $image_url = './images/' . $product_image; // Modify this based on your image directory structure
?>


<div class="container">
    <h1>Product Details</h1>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $image_url; ?>" class="card-img" alt="Product Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product_name; ?></h5>
                 
                    <p class="card-text"><strong>Price:</strong> <?php echo $product_price; ?></p>
                    <p class="card-text"><strong>Quantity:</strong> <?php echo $product_quantity; ?></p>
                    <p class="card-text"><strong>Category :</strong> <?php echo $categoryname; ?></p>
                    <p class="card-text"><strong>Brand:</strong> <?php echo $brandname; ?></p>
                </div>
                <div class="col-6 m-3">
    <form method="POST" action="add_to_Cart.php">  
    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
    <input type="hidden" name="price" value="<?php echo $product_price;?>">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="<?php echo $product_quantity; ?>">               
   <button class="btn btn-primary btn-user btn-block">   
   Buy 
</a>
</div>
            </div>
        </div>
    </div>
</div>

<?php
} else {
    echo "Product not found.";
}
?>


