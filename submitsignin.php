<?php
    include("includes/session.php");
    include("includes/conn.php");
if(isset($_POST['register'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=password_hash($password,PASSWORD_DEFAULT);
    
    
    try{
        $STH=$DBH->prepare("insert into users(firstname,lastname,username,email,password) values(?,?,?,?,?)");
        $STH->bindParam(1,$fname);
        $STH->bindParam(2,$lname);
        $STH->bindParam(3,$username);
        $STH->bindParam(4,$email);
        $STH->bindParam(5,$password);
        $STH->execute();
        $_SESSION['success']= "Regestration succesful";

    }
    catch(PDOExcecution $e){
        $_SESSION['error']= $e->getMessage();
    }
}
    else{
        echo"click register button first";
        echo"click login button first";
    }
    