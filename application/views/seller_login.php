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
        <form action="<?php echo base_url();?>login/seller_login_action" method="POST"</form>
         <center> <h1> LOGIN</h1></center>
         <label> username</label><input type="text" name="username" id="username"><br><br>
         <label>password</label><input type="password" name="password" id="password"> <br><br>
        <input type="submit" value="submit"><br><br>
        <a href="<?php echo base_url();?>password/password_reset/seller">forget password</a><br><br>
        <a href="<?php echo base_url();?>register/seller_register">register</a>          
    </center>

    </body>
</html>
