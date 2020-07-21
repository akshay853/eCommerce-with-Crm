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
        <form action="<?php echo base_url();?>seller/edit_profile" method="POST">
    <center>
        <table>
            <tr><th><h1><label>SELLER PROFILE</label></h1></th></tr>
            <tr><td><label>NAME:</label></td><td><label><?php echo $seller_profile_data['firstname']?></label></td></tr>
            <tr><td><label>COMPANY NAME:</label></td><td><label><?php echo $seller_profile_data['companyname']?></label></td></tr>
            <tr><td><label>PHONE NUMBER:</label></td><td><label><?php echo $seller_profile_data['phonenumber']?></label></td></tr>
               <tr><td><label>EMAIL:</label></td><td><label></label><?php echo $seller_profile_data['email']?></td></tr>
               <tr><td><label>USERNAME:</label></td><td><label></label><?php echo $seller_profile_data['username']?></td></tr>
            <tr><td><label>PASSWORD:</label></td><td><label></label><?php echo $seller_profile_data['password']?></td></tr>
            <tr><td><input type="submit" value="edit"></td></tr>
        </table>
    </center>
        </form>   
    </body>
</html>
