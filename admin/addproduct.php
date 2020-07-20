<?php
if(isset($_POST['add'])){
    $pname=$_POST['pname'];
    $description=$_POST['description'];
    $imageurl=$_FILES['imageurl']['name'];
    echo $imageurl;
    if(!empty($imageurl))
    {
        move_uploaded_file($_FILES['imageurl']['tmp_name'],'../images/'.$imageurl);
    }
    $price=$_POST['price'];
    $featured=$_POST['featured'];
    $cartid=1;
    include("../includes/session.php");
    include("../includes/conn.php");
    try{
        $STH=$DBH->prepare("insert into products(name,description,imgurl,price,categoryid,featured) values(?,?,?,?,?,?)");
        $STH->bindParam(1,$pname);
        $STH->bindParam(2,$description);
        $STH->bindParam(3,$imageurl);
        $STH->bindParam(4,$price);
        $STH->bindParam(5,$cartid);
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
    echo"click delete button first";
}
header('location: products.php');
?>
