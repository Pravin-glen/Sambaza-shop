<?php
    include("includes/header.php");
    
?>
<!-- navbar begin -->

<!-- navbar end -->
<main class="top-section">
    <nav class="vertical-menu nav flex-column bg-warning">
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle>Electronics</button>
          <div class="dropdown-menu">
            <a class="dropdown-item"href="products.html">Phone and Phones acessories</a>
            <a class="dropdown-item"href="products.html">Appliances</a>
            <a class="dropdown-item" href="products.html">Computing and computing accessories</a>
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
            <img src="images/producer2.jpg" style="width=100;" alt="...">
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