<?php
include("../includes/conn.php");
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $STH=$DBH->prepare("select username,password from admin where username=?");
  $STH->bindParam(1,$username);
  $STH->execute();
  if($STH->rowCount()>=1){
    $row=$STH->fetch();
    if(password_verify($password,$row['password'])){
      header('location: dashboard.php');
    }
    else{
      echo "incorrect password";
    }
  }
  else{
    echo "account not found";
  }
}
else{
  echo "click login button";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sambaza shop: Admin Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            form{
                margin:30px auto;
                width: 350px;
                border: 1px solid grey;
                padding: 10px;
            }
            h1{
                font-size: 14px;
            }
        </style>
    </head>
    <body>


        <form action="" method="post">
            <h1>Login to Continue</h1>
            <div class="form-group">
              <label for="exampleInputusername">username</label>
              <input type="text" name="username"class="form-control" id="exampleInputusername" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password"class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
          </form>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>         
