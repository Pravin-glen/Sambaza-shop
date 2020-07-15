<?php
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contacts=$_POST['contacts'];
    include("../includes/session.php");
    include("../includes/conn.php");
    try{
        $STH=$DBH->prepare("insert into sellers(name,address,contacts) values(?,?,?)");
        $STH->bindParam(1,$name);
        $STH->bindParam(2,$address);
        $STH->bindParam(3,$contacts);
   
        $STH->execute();
        $_SESSION['success']= "seller added succesfully";
    }
    catch(PDOExcecution $e){
        $_SESSION['error']= $e->getMessage();
    }

}
else{
    echo"click add button first";
}
header('location: Sellers.php');
?>