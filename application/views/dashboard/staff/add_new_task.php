 <div class="page-content">
            
<div class="container-fluid container-fh" 
 <div class="main-container container-fh__content">
     
     <form action="<?php echo base_url();?>staff/add_new_task_action" method="POST"enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="pattern-phone">TITLE:</label>
          <input id="pattern-phone" required type="text"name="title"id="title" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="number-mask">DESCRIPTION: </label>
          <input id="number-mask" required type="text"name="description"id="description" class="form-control"value="">
        </div> 
          
              <button type="submit"  class="btn btn-info m-social-profile__info-user-action">ADD</button>
          
      </div>
    </div>
     </form>
  </div>
    
  </div>