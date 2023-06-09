<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electro World</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                    <img src="./images/logo2.png" width=100 height=100>
                </div>
                <div class="sidebar-brand-text mx-3">Electro World</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ProductsTwo"
                    aria-expanded="true" aria-controls="ProductsTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Products</span>
                </a>
                <div id="ProductsTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Products:</h6>
                        <a class="collapse-item" href="add_products.php">Add Products</a>
                        <a class="collapse-item" href="view_products.php">View Products</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Category</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom CATGEORY:</h6>
                        <a class="collapse-item" href="category.php">Add Category</a>
                        <a class="collapse-item" href="view_category.php">View Category</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#headingBrand"
                    aria-expanded="true" aria-controls="headingBrand">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Brand</span>
                </a>
                <div id="headingBrand" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Brand:</h6>
                        <a class="collapse-item" href="brand.php">Add Brand</a>
                        <a class="collapse-item" href="view_brand.php">View Brand</a>
                    </div>
                </div>
</li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#OrdersTwo"
                    aria-expanded="true" aria-controls="OrdersTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Orders</span>
                </a>
                <div id="OrdersTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Orders:</h6>
                        <a class="collapse-item" href="pending_orders.php">Pending Orders</a>
                        <a class="collapse-item" href="approved_orders.php">Approved Orders</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">

<a href = "logout.php" style="margin:20px;color:white">LogOut </a>
</li>

                    </ul>

                </nav>
<?php $name= $_SESSION['name']; e ?>
<h1> Hello, <?php echo "$name"; ?></h1>
                <!-- End of Topbar -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>