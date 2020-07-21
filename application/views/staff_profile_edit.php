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
        <form action="<?php echo base_url(); ?>staff/edit_profile_action" method="POST">
       <center><table>
            <tr><th><label>STAFF PROFILE</label></th></tr>
            <tr><td><label>Name:</label></td><td><input type="text" id="firstname" name="firstname"value="<?php echo $staff_profile_data["firstname"];?>"></td></tr>
            <tr><td><label>Address:</label></td><td><input type="text" id="address" name="address" value="<?php echo $staff_profile_data["address"];?>"></td></tr>
            <tr><td><label>Gender:</label></td><td><input type="text" id="gender" name="gender"value="<?php echo $staff_profile_data["gender"];?>"></td></tr>
            <tr><td><label>username:</label></td><td><input type="text" id="username" name="username" value="<?php echo $staff_profile_data["username"];?>"></td></tr>
            <tr><td><label>password:</label></td><td><input type="text" id="password" name="password" value="<?php echo $staff_profile_data["password"];?>"></td></tr>
            <tr><td><input type="submit"value="edit"></td></tr>
           </table></center></form>
    </body>
</html>
