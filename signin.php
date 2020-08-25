<?php
    include("includes/header.php");
?>
<div class="container-fluid">;
     <h2>Register</h2>

<form action="submitsignin.php" method="post">
<div class="form-group row">
  <label for="name" class="col-12 col-md-2 col-form-label ml-3">First name:</label><br>
  <div class="col-12 col-md-10">
    <input class="form-control"type="text" id="first_name" name="first_name"  required><br>
  </div>
</div>

  <label for="last_name">Last name:</label><br>
  <input type="text" id="last_name" name="last_name"  required><br><br>
  <label for="username">username:</label><br>
  <input type="text" id="username" name="username"  required><br><br>
  <label for="email">email:</label><br>
  <input type="email" id="email" name="email"  required><br><br>
  <label for="password">password:</label><br>
  <input type="password" id="password" name="password"  required><br><br>
  <label for="confirm_password">confirm password:</label><br>
  <input type="password" id="confirm_password" name="confirm_password"  required><br><br>
  <input type="submit" name="register" class="btn btn-primary" value="register">
</form> 
      <?php
    include("includes/footer.php");
    ?>