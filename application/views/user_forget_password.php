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
    <center>
        <form action="<?php echo base_url();?>user/forget_password_setting" method="POST">
        <h1>forget password</h1>
        <label>email</label><input type="text" name="email" id="email"><br>
      
        <input type="submit" value="OK">
        </form>
    </center>
    </body>
</html>
