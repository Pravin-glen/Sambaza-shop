<?php
include('adminheader.php');
include('../includes/session.php');
include('../includes/conn.php');
$STH = $DBH->query('SELECT * FROM sellers');

$STH->setFetchMode(PDO::FETCH_ASSOC);

?>
   
            <article>
                <h1>Sellers</h1>
                <?php
                if (isset($_SESSION['success'])){
                    echo "
                        <div class='alert alert-success alert-dismisable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times;</button>
                            <h4>success!</h4>".
                            $_SESSION['success']."
                        </div>
                    ";
                }
                if (isset($_SESSION['error'])){
                    echo "
                        <div class='alert alert-danger alert-dismisable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times;</button>
                            <h4>error!</h4>".
                            $_SESSION['error']."
                        </div>
                    ";
                }
                ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">
                    Add New
                </button>

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Sellers ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contacts</th>
                        <th scope="col">Price</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php
                        $n=0;
                            while($row = $STH->fetch()) {
                                $n++;
                                ?>
                      <tr>
                        <th scope="row"><?php echo $n; ?> </th>
                        <td><?php echo $row['sellerId'];?>></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['contacts'];?></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addproduct">
                            Edit
                        </button><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addproduct">
                            Delete
                        </button></td>
                      </tr>
                      <?php }
                            ?>
                      <tr>
                    </tbody>
                  </table>

            </article>
        </main>
        <footer>

        </footer>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="addproduct">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="addseller.php" method="post">
                    <table>
                        <tr>
                            <td>Seller Id</td>
                            <td><input type="text" name="Seller Id"/></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"/></td>
                        </tr>
                        <tr>
                            <td>Contacts</td>
                            <td><input type="tel" name="Contacts"/></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="Address"/></td>
                        </tr>
                        <tr>
                            <td>featured</td>
                            <td><input type="text" name="featured"/></td>
                        </tr>
                    </table>    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="add" class="btn btn-primary">Add</button>
            </div>
          </form>
          </div>
        </div>
      </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>