<?php
    include("../includes/header.php");
?>
    <body>
    <div class="content-wrapper">
        <header>
            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Sambaza Shop</a>
                <ul class="nav nav-pills">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#one">Update profile</a>
                      <a class="dropdown-item" href="#two">Settings</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#three">Logout</a>
                    </div>
                  </li>
                </ul>
              </nav>

        </header>
        <main>
            <aside>
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">Dashboard</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Sellers.php">Seller</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="buyers.html">Buyers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.html">Orders</a>
                        </li>
                      </ul>
                </nav>

            </aside>
            <article>
             

            </article>
        </main>
        <footer>

        </footer>
    </div>

   
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    <?php
    include("../includes/footer.php");
    ?>