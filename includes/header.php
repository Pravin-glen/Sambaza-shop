<?php
  session_start();
?>

<DOCTYPE html>
    <html lang="en">
    <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no">
        
          <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
          <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    

          <link rel="stylesheet" href="styles/styles.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <link rel="stylesheet" href="styles/categories.css">    
                
    <head>
    <body>
        
        
    <!--navigation -->
  <div class="my-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#"><img src="images/Sambaza logo.jpeg " Sambaza shop website/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
           
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
                <a class="nav-link" href="admin/index.php">Admin</a>
            </li>
            <li class="nav-item">
            <div class="dropdown">
            <a class="nav-link" href="#"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                </svg>Customer service</a>
              
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="feedback.php">Needhelp?</a>
               <a class="dropdown-item" href="feedback.php">contacts</a>
            </div>
            </div>
            </li>
            
          </ul>
         
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" action="search.php" type="search" placeholder="Search" aria-label="Search">
          </form>

          <span class="navbar-text mr-1">
            <a class="nav-link" href="shoppingcart.html">
            <i class="fa fa-shopping-cart fa-lg"></i>&nbsp;<span class="sup bg-warning">
              <?php if(isset($_SESSION['çart'])){
                    echo sizeof($_SESSION['çart']);
                    }
                    else{
                      echo '0';
                    } 
              ?>
              
              
              </span>
          </a></span>
        </div>
      </nav>

