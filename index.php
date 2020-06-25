<?php
    include("includes/header.php");
?>
    <!---Image Sliding-->      
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/producer2.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Sambaza shop</h1>
                <h3>The Sambaza website</h3>
                <button type="button" class="btn btn-outline-light btn-lg">WELCOME</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div> <div class="carousel-item">
            <img src="images/shop.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Sambaza shop</h1>
                <h3>The Sambaza website</h3>
                <button type="button" class="btn btn-outline-light btn-lg">VIEW PAGE</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/customer1.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Sambaza shop</h1>
                <h3>The Sambaza website</h3>
                <button type="button" class="btn btn-outline-light btn-lg">VIEW PAGE</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
            
    </div>
    </div>
    <div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-10 col-sm-10 col-md-9 col-lg-5 col-xl-10">
            <p class="lead">Welcome to the site where you can easily trade with anyone and have </br>
            a wonderful momment while interacting with others</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Categories <svg class="bi bi-basket-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
              </svg></button></a>
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
   <?php
    include("includes/footer.php");
    ?>