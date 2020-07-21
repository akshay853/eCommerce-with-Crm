  <div class="page-content">
    
<div class="container-fluid m-mail">
  <div class="main-container m-mail__container">
    <div class="m-mail__nav">
      <ul class="m-mail__menu">
        <li class="m-mail__menu-item">
          <a href="#" class="m-mail__menu-link is-active">
            <span class="m-mail__menu-icon ua-icon-inbox"></span> Contact List
          </a>
        </li>
        
      </ul>
      
      <ul class="m-mail__channels">
          <?php foreach($all_users as $user){?>
        <li class="m-mail__channel-item">
            <a href="<?php echo base_url();?>staff/contact/<?php echo $user['user_id'];?>" class="m-mail__channel-link"># <?php echo $user['firstname']." ".$user['secondname'];?></a>
        </li>
          <?php }?>
       
      </ul>
     
    </div>
    <div class="m-mail__emails">
      
      <div class="m-mail__emails-list">
        <div class="m-mail__emails-scrollpane js-scrollable">
            <?php if($user_history){foreach($user_history as $user){?>
                <div class="m-mail__email">
                    <div class="m-mail__email-body">
                        <h5 class="m-mail__email-heading"><?php echo $user['action'];?> - <?php echo $user['product'];?></h5>
                        <div class="m-mail__email-text">Status : <?php echo $user['status'];?></div>
                    </div>
                    <div class="m-mail__email-extra">
                        <span class="m-mail__email-time"><?php echo $user['date'];?></span>
                        <img src="img/users/user-4.png" alt="" width="34" height="34" class="rounded-circle">
                    </div>
                </div>
            <?php }}else{?>
           <div class="m-mail__email">
            <div class="m-mail__email-body">
              <h5 class="m-mail__email-heading">No history Available For user</h5>
                          </div>

          </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <div class="m-mail__content">
      <div class="m-mail__content-header">
        <div>
          <h5 class="m-mail__content-heading">contact Details</h5>
          <div class="m-mail__content-heading-desc"></div>
        </div>
        <div class="m-mail__content-header-controls">
          <span class="ua-icon-star-outline m-mail__content-header-control"></span>
          <div class="dropdown no-arrow">
            <a href="#" class="btn btn-link dropdown-toggle m-mail__content-header-control" data-toggle="dropdown">
              <span class="ua-icon-dots"></span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Mark as read</a>
              <a class="dropdown-item" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>
      <div class="m-mail__content-scroll js-scrollable">
        <div class="m-mail__content-wrap">
            <?php if(isset($single_user_data)){?>
          <div class="m-mail__content-body">
           
           <div class="form-group">
               <label>Username :</label>
               <label><?php echo $single_user_data['username'];?></label>
               </div>
              
              <div class="form-group">
               <label>Gender :</label>
               <label><?php echo $single_user_data['gender'];?></label>
               </div>
              
              <div class="form-group">
               <label> State:</label>
               <label><?php echo $single_user_data['state'];?></label>
               </div>
              
              <div class="form-group">
               <label>District :</label>
               <label><?php echo $single_user_data['district'];?></label>
               </div>
              
              <div class="form-group">
               <label>Phonenumber :</label>
               <label><?php echo $single_user_data['phonenumber'];?></label>
               </div>
              
              <div class="form-group">
               <label>Email:</label>
               <label><?php echo $single_user_data['email'];?></label>
               </div>
              

            <div class="m-mail__content-separator"><span>New messages</span></div>

            
          </div>
            <?php }else{?>
             <div class="m-mail__content-body">
           
           <div class="form-group">
              
               <label>Select a User To view Details</label>
               </div>

            <div class="m-mail__content-separator"><span>New messages</span></div>

            
          </div>
            <?php }?>
          <div class="m-mail__content-footer">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>