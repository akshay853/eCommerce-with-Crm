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
      <form action="<?php echo base_url();?>notification/notification_action" method="POST">
            <center>
                <label>TITLE</label><input type="text" name="title"id="title" value=" "><br><br>
                <label>CONTENT</label><input type="text"name="content" id="content"value=" "><br><br>
                <input type="submit" value="submit">
            </center>
        </form>
     </body>
</html>
