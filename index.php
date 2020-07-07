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
            <a class="dropdown-item"href="products.html">Phone and Phones acessories</a>
            <a class="dropdown-item"href="products.html">Appliances</a>
            <a class="dropdown-item" href="products.html">Computing and computing accessories</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle">Produces</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="produce.html">Vegetables</a>
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
            <img src="images/mega-discount.jpg" style="width=88%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>The Sambaza shop website</h1>
              <p>Smart and convinient shopping.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mega-discount2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/mega-discount3.jpg" class="d-block w-100" alt="...">
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


  <div class="container">
        <h1>TOP SELLING PRODUCTS</h1>
      </div>
      <div class="grid-container">
      <div class="row">
       <div class="col-md-3">
        <img src="images/2018 apple macbook air (499$).jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h5><b>2018 apple macbook air</b></h5> 
          <p>PRICE 50000ksh</p> 
          <div class="overlay">
            <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
            <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        </div>
        <div class="col-md-3">
          <img src="images/DIGITAL-MICROWAVE.jpg" alt="Avatar" style="width:100%">
          <div class="container">
            <h5><b>Digital Microwave</b></h5> 
            <p>PRICE 7000ksh</p> 
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="more like this "><i class="fa fa-eye"></i></button>
              <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product-bottom text-center">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          </div>
          <div class="col-md-3">
            <img src="images/DOUBLE-DOOR-FRIDGE.jpg" alt="Avatar" style="width:100%">
            <div class="container">
              <h5><b>Double door fridge </b></h5> 
              <p>PRICE 60000ksh</p> 
              <div class="overlay">
                <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
            <div class="product-bottom text-center">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
            </div>
            <div class="col-md-3">
              <img src="images/HD-DIGITAL-TV.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h5><b>HD digital tv</b></h5> 
                <p>PRICE 20000ksh</p> 
                <div class="overlay">
                  <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
                  <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
                </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              </div>
      </div>
      <div class="row">
        <div class="col-md-3">
         <img src="images/MULTIMEDIA SUBWOOFER.jpg" alt="Avatar" style="width:100%">
         <div class="container">
           <h5><b>Multimedia Subwoofer</b></h5> 
           <p>PRICE 3000ksh</p> 
           <div class="overlay">
             <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
             <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
           </div>
         </div>
         <div class="product-bottom text-center">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star-half-o"></i>
           <i class="fa fa-star-o"></i>
         </div>
         </div>
         <div class="col-md-3">
          <img src="images/CCTV SECURITY CAMERAS.jpg" alt="Avatar" style="width:100%">
          <div class="container">
            <h5><b>CCTV security CAMERAS</b></h5> 
            <p>PRICE 10000ksh</p> 
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
              <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="product-bottom text-center">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          </div>
          <div class="col-md-3">
            <img src="images/SAMSUNG-GALAXY-A11.jpg" alt="Avatar" style="width:100%">
            <div class="container">
              <h5><b>SAMSUNG-GALAXY-A11 PHONE brand new</b></h5> 
              <p>PRICE 11000ksh</p> 
              <div class="overlay">
                <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
              </div>
            </div>
            <div class="product-bottom text-center">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
            </div>
            <div class="col-md-3">
              <img src="images/sony-ps4-console+fifa.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h5><b>sony-ps4-console plus fifa 20 game included</b></h5> 
                <p>PRICE 70000ksh</p> 
                <div class="overlay">
                  <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
                  <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
                </div>
              </div>
              <div class="product-bottom text-center">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
         </div>
         </div>


  <section class="featured-products">
   
  </section>    
   <?php
    include("includes/footer.php");
    ?>