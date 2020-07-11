<?php
if(isset($_POST['add'])){
    $pname=$_POST['pname'];
    $description=$_POST['description'];
    $imageurl=$_POST['imageurl'];
    $price=$_POST['price'];
    $featured=$_POST['featured'];
    $cartid=1;
    include("includes/conn.php");
    try{
        $STH=$DBH->prepare("insert into products(name,description,imgurl,price,categoryid,featured) values(?,?,?,?,?,?)");
        $STH->bindParam(1,$pname);
        $STH->bindParam(2,$description);
        $STH->bindParam(3,$imgurl);
        $STH->bindParam(4,$price);
        $STH->bindParam(5,$cartid);
        $STH->bindParam(6,$featured);
        $STH->execute();

    }
    catch(PDOExcecution $e){
        echo $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Add product</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>name</td>
                    <td><input type="text" name="pname"/></td>
                </tr>
                <tr>
                    <td>description</td>
                    <td><input type="text" name="description"/></td>
                </tr>
                <tr>
                    <td>imageurl</td>
                    <td><input type="text" name="imageurl"/></td>
                </tr>
                <tr>
                    <td>price</td>
                    <td><input type="text" name="price"/></td>
                </tr>
                <tr>
                    <td>featured</td>
                    <td><input type="text" name="featured"/></td>
                </tr>
            </table>
            <input type="submit" name="add" value="add"/>
</form>    
<h1>Categories</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>id</td>
                    <td><input type="integer" name="id"/></td>
                </tr>
                <tr>
                    <td>description</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td>imageurl</td>
                    <td><input type="integer" name="item order"/></td>
                </tr>
               
            </table>
            <input type="submit" name="add" value="add"/>
</form>    
    </body>
</html>        