<DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <tittle></title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <script src="https:use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
          <link rel="stylesheet" href="styles/styles.css" />
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <link rel="stylesheet" href="styles/categories.css" />
          <link rel="javascript" href="shopping.js" />
             
                
    <head>
    <body>
        
        
    <!--navigation -->
  <div class="my-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#"><img src="images/Sambaza logo.jpeg" Sambaza shop website/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
           
            <li class="nav-item">
            <div class="dropdown">
            <a class="nav-link" href="login.php"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                </svg>Accounts </a>
              
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="login.php">login</a>
               <a class="dropdown-item" href="signin.php">sign up</a>
            </div>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">feeback</a>
           
            </li><li class="nav-item">
                <a class="nav-link" href="shoppingcart.html">Cart</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <!-- Navbar -->
      <div class="d-flex align-items-center bg-warning">
        <div class="container text-center bg-success">
          <h3 class="mb-0">Shopping cart</h3>
        </div>
      </div>
    </div>
  </header>
  <!--Main Navigation-->

  <body>
    
    <div class="breadcrumb-container">      
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Need help in shopping</li>
          <li class="breadcrumb-item">0758467696</li>
          <li class="breadcrumb-item">0718747687</li>
        </ol>
      </nav>
    </div>
   
      <div class="card-body">
      <?php
    session_start() ;
     $items = array($_SESSION['cart']);
      foreach ($_SESSION['cart'] as $item) {
        echo $item."<br>";

      }

    ?>
           <!-- PRODUCT -->
           <div class="row">
            <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src="images/broccoli.jpg" alt="prewiew" width="120" height="80">
            </div>
            <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                <h4 class="product-name"><strong>Broccli</strong></h4>
                <h4>
                    <small>Broccoli is a good source of fibre and protein, and contains iron, potassium, calcium, selenium and magnesium <br>as well as the vitamins A, C, E, K and a good array of B vitamins including folic acid.</small>
                </h4>
            </div>
            <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                    <h6><strong>Ksh 25.00 <span class="text-muted">x</span></strong></h6>
                </div>
                <div class="col-4 col-sm-4 col-md-4">
                    <div class="quantity">
                        <input type="button" value="+" class="plus">
                        <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                               size="4">
                        <input type="button" value="-" class="minus">
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 text-right">
                    <button type="button" class="btn btn-outline-danger btn-xs">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <hr>
        <!-- END PRODUCT -->
        <!-- PRODUCT -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src="images/APPLES.jpg" alt="prewiew" width="120" height="80">
            </div>
            <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                <h4 class="product-name"><strong>Apples</strong></h4>
                <h4>
                    <small>Apples are a popular fruit, containing antioxidants, vitamins, dietary fiber, <br>and a range of other nutrients. Due to their varied nutrient content, they may help prevent several health conditions.</small>
                </h4>
            </div>
            <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
             <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                 <h6><strong>Ksh 25.00 <span class="text-muted">x</span></strong></h6>
             </div>
             <div class="col-4 col-sm-4 col-md-4">
                 <div class="quantity">
                     <input type="button" value="+" class="plus">
                     <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                            size="4">
                     <input type="button" value="-" class="minus">
                 </div>
             </div>
             <div class="col-2 col-sm-2 col-md-2 text-right">
                 <button type="button" class="btn btn-outline-danger btn-xs">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                 </button>
             </div>
         </div>
        </div>
        <hr>
        <!-- END PRODUCT -->
    <div class="pull-right">
        <a href="index.php" class="btn btn-outline-secondary pull-right">
            Continue shopping
        </a>
    </div>
</div>
    <div class="pull-right" style="margin: 10px">
        <a href="checkout.html" class="btn btn-success pull-right">Checkout</a>
        <div class="pull-right" style="margin: 5px">
            Total price: <b>ksh 50.00</b>
        </div>
    </div>
</div>
</div>            
   </div>
  </body>
  <!-- Footer -->
  <footer class="page-footer font-small bg-success">

    <!-- Footer Elements -->
    <div class="container ">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Sambazashop.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->  
</div> 
<!-- Footer -->  


</html>