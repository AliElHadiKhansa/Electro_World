<?php
include "navbar.php";
include "db_config/connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
        <div class="row m-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Number of Categories</h5>
                        <p class="card-text">
                            <?php
                                $query = "SELECT COUNT(*) AS categoryCount FROM category";
                                $result = mysqli_query($con,$query);
                                $row = mysqli_fetch_assoc($result);
                                $categoryCount = $row['categoryCount'];
                                echo "<h6> $categoryCount </h6>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Number of Brands</h5>
                        <p class="card-text">
                            <?php
                                $query1 = "SELECT COUNT(*) AS BrandCount FROM brand";
                                $result1 = mysqli_query($con,$query1);
                                $row1 = mysqli_fetch_assoc($result1);
                                $BrandCount = $row1['BrandCount'];
                                echo "<h6> $BrandCount </h6>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Number of Products</h5>
                        <p class="card-text">
                            <?php
                                $query2 = "SELECT COUNT(*) AS productCount FROM product";
                                $result2 = mysqli_query($con,$query2);
                                $row2 = mysqli_fetch_assoc($result2);
                                $productCount = $row2['productCount'];
                                echo "<h6> $productCount </h6>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Number of Orders</h5>
                        <p class="card-text">
                            <?php
                                $query3 = "SELECT COUNT(*) AS orderCount FROM orders";
                                $result3 = mysqli_query($con,$query3);
                                $row3 = mysqli_fetch_assoc($result3);
                                $orderCount = $row3['orderCount'];
                                echo "<h6> $orderCount </h6>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>