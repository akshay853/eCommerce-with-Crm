<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="row clearfix">
<div class="col-md-9">

<div class="heading-block noborder">
    <h3><?php echo $user_profile_data['firstname'];?>&nbsp;<?php echo $user_profile_data['secondname'];?></h3>
<span>Your Profile Bio</span>
</div>
<div class="clear"></div>
<table class="table table-bordered table-striped">

<tbody>
<tr>
<td>
<code>ADDRESS</code>
</td>
<td><?php echo $user_profile_data['address'];?></td>
</tr>
<tr>
<td>
<code>GENDER</code>
</td>
<td><?php echo $user_profile_data['gender'];?></td>
</tr>
<tr>
<td>
<code>STATE</code>
</td>
<td><?php echo $user_profile_data['state'];?></td>
</tr>
<tr>
<td>
<code>DISTRICT</code>
</td>
<td><?php echo $user_profile_data['district'];?></td>
</tr>
<tr>
<td>
<code>EMAIL</code>
</td>
<td><?php echo $user_profile_data['email'];?></td>
</tr>
<tr>
<td>
<code>PHONENUMBER</code>
</td>
<td><?php echo $user_profile_data['phonenumber'];?></td>
</tr>
<tr>
<td></td>
    <td><a href="<?php echo base_url();?>user/edit_profile">Edit</a></td>
</tr>
</tbody>
</table>
</div>
<div class="w-100 line d-block d-md-none"></div>
<div class="col-md-3 clearfix">



</div>
</div>
</div>
</div>
</section>