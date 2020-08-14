<?php
    include('includes/session.php');
    include("includes/header.php");
    include("includes/conn.php");
?>
<!-- navbar begin -->

<!-- navbar end -->

<main class="top-section">
    <nav class="vertical-menu nav flex-column bg-success">
      <?php
        $STH = $DBH->query('SELECT categories.id as id,categories.name as name,categories.itemorder as itemorder FROM `categories`,subcategories WHERE categories.id = subcategories.category ORDER BY itemorder' );

        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $STH->fetch()){
          $catid=$row['id'];
      ?>
        <div class="dropdown">
          <button class="dropbtn dropdown-toggle"><?php echo $row['name'];?></button>
          <div class="dropdown-menu">
          <?php
            $STH1 = $DBH->query("SELECT * FROM subcategories where category=$catid");

            $STH1->setFetchMode(PDO::FETCH_ASSOC);
              while($row1 = $STH1->fetch()){
                ?>
                <a class="dropdown-item" href="produce.php?catid=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
              <?php }?>
          </div>
        </div>
              <?php }?>
        
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
            <img src="images/wheat.jpg" style="width=88%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><p class="text-body bg-success">Sambaza Shop</p></h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/display.jpg" style="width=88%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h2><p class="text-body bg-success">We deliver the best products</p></h2>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/deals.jpg" style="width=88%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h2><p class="text-body bg-success">SHOP WITH SAMBAZA</p></h2>
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
      <?php
          include('includes/conn.php');
          $STH = $DBH->query('SELECT * FROM products');

          $STH->setFetchMode(PDO::FETCH_ASSOC);
          while($row = $STH->fetch()) {
            if($row['featured']){

        ?>
       <div class="col-md-3">
        <img src="images/<?php echo $row['imgurl'];?>" alt="Avatar" style="width:100%">
        
        <div class="container">
          <h5><b><?php echo $row['name'];?></b></h5> 
          <p>PRICE <?php echo $row['price'];?>ksh</p> 
          <div class="overlay">
            <a href="details.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></a>
            <a href="cart.php?action=add&id=<?php echo $row['id'];?>" role="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i> add to cart</a>
          </div>
        </div>
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        </div>
            <?php
            }}
            ?>
            </div>


      

  <section class="featured-products">
  
   
  </section>    
   <?php
    include("includes/footer.php");
    ?>
    </div>