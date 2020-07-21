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
    <body><center>
        <h1>HOME</h1>
        <a href="<?php echo base_url();?>user/view_profile">profile</a><br> 
         <a href="<?php echo base_url();?>login/logout">logout</a>
        <a href="<?php echo base_url();?>cart/add_cart">cart</a><br>
        <table> <tr>
        <select>
            
            <option id="forty">40% discount</option>
            <option id="fifty">50% discount</option>
            <option id="sixty">600% discount</option>
        </select><br><br></tr>
        <?php foreach($all_product as $single_products){ ?>
        <tr> <td><label><?php echo $single_products['productname'];?></label></td>
        <td> <label><?php echo $single_products['productcost'];?></label></td>
        <td> <label><?php echo $single_products['productbrand'];?></label></td>
        <td><label><?php echo $single_products['productdescription'];?></label></td>
        <td><label><?php echo $single_products['discount'];?></label></td>
        <td> <a href="<?php echo base_url();?>cart/add_cart<?php echo $single_products['productname'];?>">cart</a></td>
        <td> <a href="<?php echo base_url();?>buy/buynow<?php echo $single_products['productname'];?>">buynow</a></td></tr>
        <?php } ?>
        </table>
    </center>
    </body>
</html>
