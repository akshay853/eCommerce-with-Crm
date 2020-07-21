 <div class="page-content">
            
<div class="container-fluid container-fh" 
 <div class="main-container container-fh__content">
     
     <form action="<?php echo base_url();?>staff/add_new_action" method="POST"enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="pattern-phone">CONTACT:</label>
          <select name='contact' class="form-control">
               <option value=''>Select a contact</option>
              <?php foreach($all_contact as $contact){?>
             
              <option value='<?php echo $contact['user_id'];?>'><?php echo $contact['firstname']." ".$contact['secondname'];?></option>
              <?php }?>
          </select>
        </div>
          
          <div class="form-group">
          <label for="pattern-phone">ADD NEW LEAD:</label>
          <input id="pattern-phone" required type="text"name="add_lead"id="add_lead" class="form-control" value="">
        </div>
          
        <div class="form-group">
          <label for="number-mask">MOBILE NUMBER: </label>
          <input id="number-mask" required type="number"name="phonenumber"id="phonenumber" class="form-control"value="">
        </div>
        
        
        
          
         
              <button type="submit"  class="btn btn-info m-social-profile__info-user-action">ADD</button>
          
      </div>
    </div>
     </form>
  </div>
    
  </div>