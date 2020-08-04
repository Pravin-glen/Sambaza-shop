<?php
	include("includes/header.php");
	include("includes/conn.php");
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $STH=$DBH->prepare("select username,password from admin where username=?");
  $STH->bindParam(1,$username);
  $STH->execute();
  if($STH->rowCount()>=1){
    $row=$STH->fetch();
    if(password_verify($password,$row['password'])){
      header('location: produce.php');
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
     <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Log In</h3>
				
			</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="icons">
					<a class="btn-floating btn-lg btn-fb bg-success" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
					<a class="btn-floating btn-lg btn-tw bg-success" type="button" role="button"><i class="fab fa-twitter"></i></a>
					<a class="btn-floating btn-lg btn-ins bg-success" type="button" role="button"><i class="fab fa-instagram"></i></a>
					</div>
					
					<div class="form-group">
						<button type="submit" name="login" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signin.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
