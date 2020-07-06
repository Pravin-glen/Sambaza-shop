<?php
    include("includes/header.php");
    
?>
<!-- navbar begin -->

<!-- navbar end -->
<main class="top-section">
    <nav class="vertical-menu nav flex-column bg-warning">
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle">Electronics</button>
          <div class="dropdown-menu">
            <a class="dropdown-item"href="#">Phone and Phones acessories</a>
            <a class="dropdown-item"href="#">Appliances</a>
            <a class="dropdown-item" href="#">Computing and computing accessories</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle">Produces</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Vegetables</a>
            <a class="dropdown-item" href="#">Fruits</a>
            <a class="dropdown-item" href="#">Dairy products</a>
            <a class="dropdown-item" href="#">Cereals</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle">Household supplies</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">luandry </a>
            <a class="dropdown-item" href="#">House cleaners</a>
            <a class="dropdown-item" href="#">Bulbs and batteries</a>
          </div>
        </div>  
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle">Fashion/Lifestyle</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Mens Fashion</a>
            <a class="dropdown-item" href="#">Womens Fashion</a>
            <a class="dropdown-item" href="#">Kids Fashion</a>
            <a class="dropdown-item" href="#">Exclusive Fashion</a>
          </div>
        </div>
    </nav>
    <!---Image Sliding-->
    <article class="slides">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/producer2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>The Sambaza shop website</h1>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/shop.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/supermarket.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </article>

    <aside class="adverts">
    </aside>

  </main>


<ol>
  <h2>Top selling items</h2>
</ol>
<div class="row">
  <div class="col-sm-3">
      <div class="card-body" Style="width: 100%">
        <img class="card-img-top" src="images/picture1.jpg" style="width:50%"> 
        <h5 class="card-title">Samsung tv</h5>
        <p class="card-text">Ksh 50000</p>
        <a href="#" class="btn btn-primary">BUY</a>
      </div>
  </div>

  <div class="col-sm-3">
      <div class="card-body" Style="width: 100%">
        <img class="card-img-top" src="images/picture1.jpg" style="width:50%"> 
        <h5 class="card-title">Samsung tv</h5>
        <p class="card-text">Ksh 50000</p>
        <a href="#" class="btn btn-primary">BUY</a>
      </div>
  </div>



  <section class="about-us">
      <div class="container">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="images/picture1.jpg" alt="MISSION" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">MISSION</h4>
            <p class="card-text">Samabaza shop kenya is aimed at ensuring that the lives of people </br>
            in the trading sector get to sell products that is at their disposal</p>
            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="images/picture1.jpg" alt="MISSION" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Vision</h4>
            <p class="card-text">Samabaza shop kenya is aimed at ensuring that the lives of people </br>
            in the trading sector get to sell products that is at their disposal</p>
            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="images/picture1.jpg" alt="MISSION" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">MISSION</h4>
            <p class="card-text">Samabaza shop kenya is aimed at ensuring that the lives of people </br>
            in the trading sector get to sell products that is at their disposal</p>
            <a href="#" class="btn btn-primary stretched-link">See Profile</a>
          </div>
        </div>
      </div>
  </section>


  <section class="featured-products">
   
  </section>    
   <?php
    include("includes/footer.php");
    ?>





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
    <head>
    <body>
        
        
    <!--navigation -->
  <div class="my-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#"><img src="images/tea2.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signin.php"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  </svg>signin 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">feeback</a>
            </li><li class="nav-item">
                <a class="nav-link" href="About.html">About</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

