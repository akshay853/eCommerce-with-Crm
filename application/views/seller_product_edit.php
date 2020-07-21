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
        <form action="<?php echo base_url();?>seller/edit_product_action" method="post">
        <input name="selected_product_id" id="selected_product_id" type="hidden" value="<?php echo $selected_product_id;?>">
        <table>
            <tr><td><label>product name</label></td><td><input type="text" name="productname"id="productname"value="<?php echo $product_data['productname']; ?>"</td></tr>
            <tr><td><label>product cost</label></td><td><input type="text" name="productcost"id="productcost"value="<?php echo $product_data['productcost']; ?>"</td></tr>
         <tr><td><label>product category</label></td><td><input type="text" name="productcategory"id="productcategory"value="<?php echo $product_data['productcategory']; ?>"</td></tr>
          <tr><td><label>product brand</label></td><td><input type="text" name="productbrand"id="productbrand"value="<?php echo $product_data['productbrand']; ?>"</td></tr>
          <tr><td><label>product description</label></td><td><input type="text" name="productdescription"id="productdescription"value="<?php echo $product_data['productdescription']; ?>"</td></tr>
          <tr><td><label>discount</label></td><td><input type="text" name="discount"id="discount"value="<?php echo $product_data['discount']; ?>"</td></tr>
          <tr><td><input type="submit" value="save"</td></tr>
       </table>
        </form>
    </body>
</html>
