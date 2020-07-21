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
        <form action="<?php echo base_url();?>user/edit_profile" method="POST">
    <center><table>
            <tr><th><h1>USER PROFILE</h1></th></tr>
            <tr><td><label>Name:</label></td><td><label><?php echo $user_profile_data['firstname']?></label></td></tr>
            <tr><td><label>Gender:</label></td><td><label><?php echo $user_profile_data['gender']?></label></td></tr>
            <tr><td><label> Address:</label></td><td><label><?php echo $user_profile_data['address']?></label></td></tr>
            <tr><td><label>State:</label></td><td><label><?php echo $user_profile_data['state']?></label></td></tr>
            <tr><td><label>District</label></td><td><label><?php echo $user_profile_data['district']?></label></td></tr>
            <tr><td><label>Phone number:</label></td><td><label><?php echo $user_profile_data['phonenumber']?></label></td></tr>
            <tr><td><label>email:</label></td><td><label><?php echo $user_profile_data['email']?></label></td></tr>
            <tr><td><label>Password:</label></td><td><label><?php echo $user_profile_data['password']?></label></td></tr>
            <tr><td><input type="submit" value="Edit"></td></tr>
        </table>      
    </center>
        </form>   
    </body>
</html>
