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
        <form action="<?php echo base_url();?>register/staff_registration" method="POST">
            <center><h1>STAFF</h1>
                <label>firstname</label><input type="text" name="firstname" id="firstname"><br><br>
                <label>secondname</label><input type="text" name="secondname" id="secondname"><br><br>
                <label>address</label><textarea name="address"id="address"></textarea><br><br>
                <label>gender</label><input type="radio" name="gender" id="gender"value="male">
            <label>male</label><input type="radio" name="gender" id="gender" value="female">
            <label>female</label><input type="radio" name="gender" id="gender"value="others">
            <label>other</label><br><br>
            
            <label>username</label><input type="text" name="username" id="username"><br><br>
            <label>password</label><input type="password" name="password" id="password"><br><br>
            <label>conform password</label><input type="cpassword" name="conformpassword" id="conformpassword"><br><br>
             <label>email</label><input type="text" name="email" id="email"><br><br>
            
            <input type="submit" value="submit"></center>
        </form>
        
    </body>
</html>
