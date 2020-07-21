<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo base_url();?>register/seller_registration" method="POST">
            <center><h1>SELLER</h1> 
                <label>firstname</label><input type="text" name="firstname" id="firstname"><br><br>
                <label>secondname</label><input type="text" name="secondname" id="secondname"><br><br>
                <label>companyname</label><input type="text" name="companyname" id="companyname"><br><br>
                <label>username</label><input type="text" name="username" id="username"><br><br>
                <label>password</label><input type="password" name="password" id="password"><br><br>
                <label>conform password</label><input type="password" name="conformpassword" id="conformpassword"><br><br>
                <label>email</label><input type="text" name="email" id="email"><br><br>
                <label>phonenumber</label><input type="phonenumber" name="phonenumber" id="phonenumber"><br><br>
            <input type="submit" value="submit"></center>
            </form>
    </body>
</html>
