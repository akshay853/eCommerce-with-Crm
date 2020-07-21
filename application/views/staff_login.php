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
             <form action="<?php echo base_url();?>login/staff_login_action" method="POST">
                  <center> <h1> LOGIN</h1></center>
         <label> usernames</label><input type="text" name="username" id="username"><br><br>
         <label>password</label><input type="password" name="password" id="password"> <br><br>
        <input type="submit" value="submit"><br><br>
        <a href="<?php echo base_url();?>password/password_reset/staff">forget password</a><br><br>
        <a href="<?php echo base_url();?>register/staff_register">register</a> 
             </form>
             </body>
</html>
