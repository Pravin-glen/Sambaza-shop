<?php
    $host="localhost";
    $dbname="e_commerce";
    $username="root";
    $password="";
    try{
        $DBH=new PDO("mysql:host=$host; dbname=$dbname", $username,$password);
        $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "connection okay";
    }
    catch(PDOException $e){
        echo"connection failed:".$e->getMessage();

    }


?>