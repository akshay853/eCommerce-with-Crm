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
        <form action="<?php echo base_url();?>product/add_product_action" method="POST" enctype="multipart/form-data">
            <h1> product add</h1>   <br>
            <table>
                <tr><td>  <label> product name</label><input type="text" name="productname" id="productname"></td></tr><br>
                <tr><td> <label> product cost</label><input type="text" name="productcost" id="productcost"></td></tr><br>
                <tr><td> <label> product category</label><input type="text" name="productcategory" id="productcategory"></td></tr><br>
                 <tr><td> <label> product brand</label><input type="text" name="productbrand" id="productbrand"></td></tr><br>
                <tr><td> <label> product description</label><input type="text" name="productdescription" id="productdescription"></td></tr><br>
                 <tr><td> <label> product discount</label><input type="text" name="discount" id="discount"></td></tr><br>
                 <tr><td>upload picture<input type="file"name="image">
                         <label><?php if(isset($upload_error)){print_r($upload_error);}?></label></td></tr>
                <tr><td><input type="submit" value="submit"></td></tr></table>
        </form></center>
    </body>
</html>
