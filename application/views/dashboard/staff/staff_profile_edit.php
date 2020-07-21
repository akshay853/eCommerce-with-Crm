 <div class="page-content">
            
<div class="container-fluid container-fh" 
 <div class="main-container container-fh__content">
     <form action="<?php echo base_url();?>staff/edit_profile_action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="pattern-phone">NAME:</label>
          <input id="pattern-phone" type="text"name="firstname"id="firstname" class="form-control" value="<?php echo $staff_profile_data['firstname']?>">
        </div>
        <div class="form-group">
          <label for="number-mask">ADDRESS: </label>
          <input id="number-mask" type="text"name="address"id="address" class="form-control"value="<?php echo $staff_profile_data['address']?>">
        </div>
        <div class="form-group">
          <label for="date-mask">GENDER: </label>
          <input id="date-mask" type="text" name="gender" id="gender"class="form-control" value="<?php echo $staff_profile_data['gender']?>">
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