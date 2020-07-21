0<!DOCTYPE html>
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
        <form action="<?php echo base_url();?>staff/edit_profile" method="POST">
    <center>
        <table>
            <tr><th><h1><label>STAFF PROFILE</label></h1></th></tr>
            <tr><td><label>Name:</label></td><td><i><?php echo $staff_profile_data['firstname']?></i></td></tr>
            <tr><td><label>Address:</label><td><i><?php echo $staff_profile_data['address']?></i></td></tr>
            <tr><td><label>Gender:</label><td><i><?php echo $staff_profile_data['gender']?></i></td><td></td></tr>
            <tr><td><label>username:</label><td><i><?php echo $staff_profile_data['username']?></i></td><td></td></tr>
            <tr><td><label>password:</label><td><i><?php echo $staff_profile_data['password']?></i></td><td></td></tr>
         
            <tr><td><input type="submit"value="edit"></td></tr>
        </table>
        
    </center>
        </form>
    </body>
</html>
