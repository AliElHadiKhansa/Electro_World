
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    require "navbar_user.php" ;
    ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  style="height: 500px;"src="images/slider1.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block" >
              <h1 >Welcome To Electro World!</h1>
              <h4 style="font-family: 'Lobster', cursive;">Your Happy Place!</h4>
           
            </div>
          </div>
          <div class="carousel-item">
            <img  style="height: 500px;"src="images/slider2.jpg" class="container-fluid" >
            <div class="carousel-caption d-none d-md-block">
         
            
            </div>
          
          </div>
          <div class="carousel-item">
            <img  style="height: 500px;" src="images/slider3.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
              <h1>Shop Now!</h1>
             
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </body>
</html>
