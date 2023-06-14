<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/logo2.png" >
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Contact Us</title>


  </style>
</head>
<body>
<?php
    require "navbar_user.php" ;
    ?>
    
      <div class="content mt-5 ">
        <img src="images/logo.jpg" class="rounded mx-auto d-block" style="margin-top:100px;" >
           </div>

<div  style="display: flex; align-items: center; justify-content: center; "class="container-fluid p-5 bg-primary text-white">
         

    <form  class="col-5">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name">
              </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="subject">Subject:</label>
              <input type="subject" class="form-control" id="subject">
            </div>
           
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="submit" class="btn btn-default mt-3 bg-info">Submit</button>
        </form>
    </div>
           
<img  class = "col-4"style="max-width: 100%; height: 300px;margin-left:50px" src="/images/aboutus.jpg">
        </div>
        </div>
        <footer class="text-center text-lg-start bg-light ">
          
            
            <section class="p-3">
              <div class="container text-center text-md-start mt-5">
               
                <div class="row mt-3">
                
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>DW
                    </h6>
                    <p>
                        Don't waste website is an online platform that reserves your time and money by offering you several used and new items with the best deal you can have.
                    </p>
                  </div>
                  
          
                  
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                    <h6 class="text-uppercase fw-bold mb-4">
                      Products
                    </h6>
                    <p>
                      <a href="items.html" class="text-reset">New</a>
                    </p>
                    <p>
                      <a href="items.html" class="text-reset">Used</a>
                    </p>
                    <p>
                      <a href="items.html" class="text-reset">Discounted</a>
                    </p>
                 
                  </div>
                  
          
                 
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                   
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>
                    <p>
                      <a href="index.html" class="text-reset">Home</a>
                    </p>
                    <p>
                      <a href="aboutus.html" class="text-reset">About Us</a>
                    </p>
                    <p>
                      <a href="ContactUs.html"class="text-reset">ContactUs</a>
                    </p>
                  
                  </div>
                  
          
                  
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                   
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Beirut,LB</p>
                    <p>
                      <i class="fas fa-envelope me-3"></i>
                      ali@dw.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 0961 776895632</p>
                  
                  </div>
                  
                </div>
               
              </div>
            </section>
            
          
            
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2023 Copyright:
              <a class="text-reset fw-bold" href="https://mdbootstrap.com/">www.dw.com</a>
            </div>
            
          </footer>
</body>
</html>