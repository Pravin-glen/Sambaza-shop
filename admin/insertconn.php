<?php
$connect= mysqli_connect("localhost","root","",e_commerce);
$sql= "INSERT INTO products(name,description,imgurl,price,categoryid,featured) VALUES('".$_POST["name"]."' '".$_POST["description"]."' '".$_POST["imgurl"]."' '".$_POST["price"]."' '".$_POST["categoryid"]."' '".$_POST["featured"]."')";
if(mysqli_query(connect, $sql))
{
    echo 'Data inserted';
} 
?>