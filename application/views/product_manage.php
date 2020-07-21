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
        <form action="seller/product_edit" method="post">
        <table>
            <tr>
                <th>product name</th>
            <th>product cost</th>
            <th>product category</th>
            <th>product brand</th>
            <th>product description</th>
            <th>product discount</th>
            </tr>
            <?php foreach($all_product_data as $single_product){ ?>
                <tr>
             <td><?php echo $single_product['productname']; ?></td>
            <td><?php echo $single_product['productcost']; ?></td>
            <td><?php echo $single_product['productcategory']; ?></td>
            <td><?php echo $single_product['productbrand']; ?></td>
            <td><?php echo $single_product['productdescription']; ?></td>
            <td><?php echo $single_product['discount']; ?></td>
            <td><a href="<?php echo base_url();?>seller/product_edit/<?php echo $single_product['product_id']?>">edit</a></td>
            </tr>
            <?php } ?>
          
        </table>
        </form>
    </body>
</html>
