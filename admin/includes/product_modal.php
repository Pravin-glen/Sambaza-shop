<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Product</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="addproduct.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="pname" class="col-sm-3 control-label">product name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="pname" name="pname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="price" class="col-sm-3 control-label">price</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="price" name="price" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="description" class="col-sm-3 control-label">description</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="description" id="description"></textarea>
                  	</div>
                </div>
                
               
                <div class="form-group">
                    <label for="featured" class="col-sm-3 control-label">Featured</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="featured" id="featured" required>
                        <option value="" selected>- Select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="categoryid" class="col-sm-3 control-label">CategoryId</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="categoryid" id="categoryid" required>
                        <option value="" selected>- Select -</option>
                        <?php
                        /*
                          $sql = "SELECT * FROM categories";
                          $query = $DBH->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                          */
                        ?>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="imgurl" class="col-sm-3 control-label">Product Image</label>

                    <div class="col-sm-9">
                      <input type="file" name="imgurl" id="imgurl">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="product_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="product_edit.php">
            		<input type="hidden" class="pid" name="id">
                <div class="form-group">
                  	<label for="edit_pname" class="col-sm-3 control-label">product name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_pname" name="pname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_price" class="col-sm-3 control-label">price</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_price" name="price" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_description" class="col-sm-3 control-label">description</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="description" id="edit_description"></textarea>
                  	</div>
                </div>
                
               
                <div class="form-group">
                    <label for="edit_featured" class="col-sm-3 control-label">Featured</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="featured" id="edit_featured" required>
                        <option value="" selected>- Select -</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_category" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="edit_category" required>
                        <option value="" selected>- Select -</option>
                        <?php
                        /*
                          $sql = "SELECT * FROM categories";
                          $query = $DBH->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                          */
                        ?>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="edit_imgurl" class="col-sm-3 control-label">Product Image</label>

                    <div class="col-sm-9">
                      <input type="file" name="imgurl" id="edit_imgurl">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="product_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="product_delete.php">
            		<input type="hidden" class="pid" name="id">
            		<div class="text-center">
	                	<p>DELETE Producr</p>
	                	<h2 class="bold del_product_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    