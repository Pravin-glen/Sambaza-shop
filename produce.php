<?php
  include("includes/header.php");
?>

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


      

  <section class="featured-products">
      </body>
      </html>