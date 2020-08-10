<?php
include('adminheader.php');
include('../includes/session.php');
include('../includes/conn.php');
$STH = $DBH->query('SELECT * FROM products');

$STH->setFetchMode(PDO::FETCH_ASSOC);

?>
<article>
                <h1>Products</h1>
                <?php
                if (isset($_SESSION['success'])){
                    echo "
                        <div class='alert alert-success alert-dismisable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times;</button>
                            <h4>success!</h4>".
                            $_SESSION['success']."
                        </div>
                    ";
                    unset($_SESSION['success']);
                }
                if (isset($_SESSION['error'])){
                    echo "
                        <div class='alert alert-danger alert-dismisable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times;</button>
                            <h4>error!</h4>".
                            $_SESSION['error']."
                        </div>
                    ";
                    unset($_SESSION['error']);
                }
                ?>
                <!-- Button trigger modal -->
                <a href="#addnew" class="btn btn-primary" data-toggle="modal">
                    Add New
                </a>

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n=0;
                            while($row = $STH->fetch()) {
                                $n++;
                                ?>
                      <tr>
                        <th scope="row"><?php echo $n; ?> </th>
                        <td><img src="../images/<?php echo $row['imgurl'];?>" width="30" height="30"/></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td>  <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Delete</button></td>
                      </tr>
                            <?php }
                            ?>
                    </tbody>
                  </table>

            </article>
        </main>
        <footer>

        </footer>
    </div>
    <?php
    include("includes/product_modal.php");
    ?>

    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'product_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.pid').val(response.id);
      $('.product_id').html(response.id);
      $('.del_product_name').html(response.name);
      $('#edit_pname').html(response.name);
      $('#edit_price').val(response.price);
      $('#edit_description').val(response.description);
      $('#edit_featured').val(response.featured);
      $('#edit_category').val(response.categoryid);
      $('#edit_imgurl').val(response.imgurl);
     
    }
  });
}
</script>
    </body>
</html>