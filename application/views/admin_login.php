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
        <form action="<?php echo base_url();?>admin/admin_login_setup" method="post">
        <label> user name</label><input type="text" name="username"id="username"><br>
         <label> password</label><input type="password" name="password"id="password"><br>
         <input type="submit" value="login">
        </form>
    </center>
    </body>
</html>
