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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/agricfield.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/supermarket.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mega-discount2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
            <button type="button" class="btn btn-secondary" title="more like this"><i class="fa fa-eye"></i></button>
            <button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart"></i></button>
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
          </div>


      

  <section class="featured-products">
   
  </section>    
   <?php
    include("includes/footer.php");
    ?>