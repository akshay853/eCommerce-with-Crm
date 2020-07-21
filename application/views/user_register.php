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
        <form action="<?php echo base_url();?>register/user_registration" method="POST">
            <center><h1>USER REGISTER</h1></center>
            <center>   <label>first name</label><input type="text" name="firstname" id="firstname"><br><br>
                <label>second name</label><input type="text" name="secondname" id="secondname"><br><br>
            <label>gender</label><input type="radio" name="gender" id="gender"value="male">
            <label>male</label><input type="radio" name="gender" id="gender"value="female">
            <label>female</label><input type="radio" name="gender" id="gender"value="others">
            <label>other's</label><br><br>
            <label>address</label><textarea name="address" id="address"></textarea><br><br>
            <select name="state"><option>kerala</option>
                <option>karnataka</option>
                <option>maharastra</option>
                <option>andhra pradesh</option>
                <option>jammu kashmir</option>
            </select>
            <select name="district">
                <option>kannur</option>
                <option>bangalore</option>
                <option>bhopal</option>
                <option>hyderbad</option>
                <option>sreenaghar</option>
            </select>
            <br><br> <select name="state"><option>kerala</option>
                <option>karnataka</option>
                <option>maharastra</option>
                <option>andhra pradesh</option>
                <option>jammu kashmir</option>
            </select>
            <select name="district">
                <option>kannur</option>
                <option>bangalore</option>
                <option>bhopal</option>
                <option>hyderbad</option>
                <option>sreenaghar</option>
            </select><br><br>
            <label>phonenumber<input type="phonenumber" name="phonenumber"id="phonenumber"</label>
            <label>email</label><input type="email" name="email"id="email"><br><br>
            <label>username</label><input type="text" name="username" id="username"><br><br>
            <label>password</label><input type="password" name="password" id="password"><br><br>
            <label>conform password</label><input type="password" name="conformpassword" id="conformpassword"><br<br>
            <br><br><input type="submit"  value="submit"></center>                                 
                                          
            
        </form>
        
    </body>
</html>
