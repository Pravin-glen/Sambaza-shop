<?php
if(isset($_POST['add'])){
    $sellersId=$_POST['add'];
    $name=$_POST['name'];
    $address=['address'];
    $contacts=['contacts'];
    $featured=$_POST['featured'];
    include("../includes/session.php");
    include("../includes/conn.php");
    try{
        $STH=$DBH->prepare("insert into sellers(sellerId,name,address,contacts,featured) values(?,?,?,?,?,?)");
        $STH->bindParam(1,$sellersId);
        $STH->bindParam(2,$name);
        $STH->bindParam(3,$address);
        var_dump($address);
        $STH->bindParam(4,$contacts);
        $STH->bindParam(6,$featured);
        $STH->execute();
        $_SESSION['success']= "Product added succesfully";
    }
    catch(PDOExcecution $e){
        $_SESSION['error']= $e->getMessage();
    }

}
else{
    echo"click add button first";
}

?>