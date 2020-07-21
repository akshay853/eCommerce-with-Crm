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
        <form action="<?php echo base_url();?>seller/edit_profile_action" method="POST">
    <center>
        <table>
            <tr><td><h1><label>SELLER PROFILE</label></h1></td></tr>
            <tr><td><label>NAME:</label></td><td><label><input type="text" id="firstname"  name="firstname" value="<?php echo $seller_profile_data['firstname']?>"></label></td></tr>
            <tr><td><label>COMPANY NAME:</label></td><td><label><input type="text" id="companyname" name="companyname" value="<?php echo $seller_profile_data['companyname']?>"></label></td></tr>
            <tr><td><label>PHONE NUMBER:</label></td><td><input type="text" id="phonenumber" name="phonenumber"value="<?php echo $seller_profile_data['phonenumber']?>"></td></tr>
            <tr><td><label>email:</label></td><td><label><input type="text" id="email"name="email" value="<?php echo $seller_profile_data['email']?>"></label></td></tr>
            <tr><td><label>Password:</label></td><td><label><input type="text" id="password"name="password" value="<?php echo $seller_profile_data['password']?>"</label></td></tr>
            <tr><td><input type="submit" value="save"></td></tr>
        </table>
   </center>
        </form>
</body>
</html>
