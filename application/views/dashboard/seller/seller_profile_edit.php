 <div class="page-content">

     <div class="container-fluid container-fh">
         <div class="page-content__header">
             <div>
                 <h2 class="page-content__header-heading">Edit Profile</h2>
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="index.html">Home</a>
                     </li>
                     <li class="breadcrumb-item">
                         <a href="#">Form</a>
                     </li>
                     <li class="breadcrumb-item active">Float Labels</li>
                 </ol>
             </div>
         </div>
         <div class="container-fh__content">
             <div class="row">
                 <div class="col-lg-10">

                     <form class="main-container" action="<?php echo base_url();?>seller/edit_profile_action" method="POST"enctype="multipart/form-data">
                         <div class="row">
                             <div class="col-lg-4">
                                 <div class="form-group">
                                     <label for="pattern-phone">NAME:</label>
                                     <input required id="pattern-phone" type="text"name="firstname"id="firstname" class="form-control" value="<?php echo $seller_profile_data['firstname']?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="number-mask">COMPANY NAME: </label>
                                     <input required id="number-mask" type="text"name="companyname"id="companyname" class="form-control"value="<?php echo $seller_profile_data['companyname']?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="date-mask">PHONE NUMBER: </label>
                                     <input required id="date-mask" type="number" maxlength="12" minlength="10" name="phonenumber" id="phonenumber"class="form-control" value="<?php echo $seller_profile_data['phonenumber']?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="dynamic-mask">EMAIL: </label>
                                     <input required id="dynamic-mask" type="email" name="email" id="email"class="form-control" value="<?php echo $seller_profile_data['email']?>">
                                 </div>

                                 <div>
                                     upload picture<input type="file"name="image">
                                     <label><?php if(isset($upload_error)){print_r($upload_error);}?>
                                 </div>

                                 <button type="submit"  class="btn btn-info m-social-profile__info-user-action">ADD</button>

                             </div>
                         </div>
                     </form>

                 </div>

             </div>
         </div>
     </div>

 </div>
