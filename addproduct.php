<?php
include("includes/header.php");
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
        <style>
            login-box {
width:333px;
height: 352px;
padding: 58px 76px 0 76px;
color: #ebebeb;
font: 12px Arial, Helvetica, sans-serif;
background: url(images/login-box-backg.png) no-repeat left top;
margin-left:150px;
}

#login-box img {
border:none;
}

#login-box h2 {
padding:0;
margin:0;
color: #ebebeb;
font: bold 44px "Calibri", Arial;
}


#login-box-name {
float: left;
display:inline;
width:80px;
text-align: right;
padding: 14px 10px 0 0;
margin:0 0 7px 0;
}

#login-box-field {
float: left;
display:inline;
width:230px;
margin:0;
margin:0 0 7px 0;
}


.form-login {
width: 205px;
padding: 10px 4px 6px 3px;
border: 1px solid #0d2c52;
background-color:#1e4f8a;
font-size: 16px;
color: #ebebeb;
}


.login-box-options {
clear:both;
padding-left:87px;
font-size: 11px;
}

.login-box-options a {
color: #ebebeb;
font-size: 11px;
}
body {

background-image:images/flower.jpg;
}
        </style>
    </head>
    <body>
        <div>
        <img src="images/avatar.jpg" alt="Avatar" style="width:100%">            
        </div>
        <div style="padding: 100px 0 0 250px;">
        <div id="login-box">
        <h1>Admin Login</h1>
        <br />
        <br />
        <div id="login-box-name" style="margin-top:20px;">Email:</div><div id="login-box-field" style="margin-top:20px;"><input name="q" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
        <div id="login-box-name">Password:</div><div id="login-box-field"><input name="q" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
        <br />
        <span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>
        <br />
        <br />
        <a href="#"><img src="images/login.jpg" width="103" height="42" style="margin-left:90px;" /></a>
        </div>
        </div>
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
    </body>
</html>        