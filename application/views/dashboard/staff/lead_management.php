<div class="page-content">
    
<div class="container-fluid">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Lead Management</h2>
    </div>
  </div>
  <div id="draggable-grid" class="lt-container lt-xs-h-20 lt-sm-h-10 lt-md-h-20 lt-lg-h-10 draggable-grid" data-arrange="lt-grid">
    <div draggable="true" class="lt lt-xs-x-0 lt-xs-y-0 lt-xs-w-12 lt-xs-h-12 lt-sm-x-0 lt-sm-y-0 lt-sm-w-12 lt-sm-h-8 lt-md-x-0 lt-md-y-0 lt-md-w-6 lt-md-h-6 lt-lg-x-0 lt-lg-y-0  lt-lg-h-5">
      <div class="lt-body">
        <div class="panel-widget">
          <div class="panel-widget__header">
            <div>
              <span class="panel-widget__header-icon ua-icon-user-solid"></span> Contacts
            </div>
            <div class="panel-widget__header-controls">
              <span class="panel-widget__header-control ua-icon-search"></span>
              <span class="panel-widget__header-control ua-icon-sort"></span>
              <span class="panel-widget__header-control ua-icon-alert-close"></span>
            </div>
          </div>
          <div class="panel-widget__body">
            <div class="panel-widget__body-scrollpane js-scrollable">
              <div class="panel-widget__body-content">
                
                  <?php foreach($all_users as $user){?>
                <div class="widget-contacts__item">
                  <img src="<?php echo DASHBOARD_DESIGN_PATH;?>img/users/user-4.png" alt="" width="40" height="40" class="widget-contacts__item-avatar rounded-circle">
                  <div>
                       
                  
                    <a href="<?php echo base_url();?>staff/lead/<?php echo $user['user_id'];?>" class="widget-contacts__item-name"># <?php echo $user['firstname']." ".$user['secondname'];?></a>
                    <div class="widget-contacts__item-email"></div>
                  </div>
               
                </div>
                  <?php } ?>
                </div>
                  
              </div>
            </div>
          </div>

        </div>
      </div>
   

    <div draggable="true" style="margin-left: 50.53333%;" class="lt lt-xs-x-0 lt-xs-y-24 lt-xs-w-12 lt-xs-h-12 lt-sm-x-0 lt-sm-y-16 lt-sm-w-12 lt-sm-h-8 lt-md-x-0 lt-md-y-6 lt-md-w-6 lt-md-h-6 lt-lg-x-8 lt-lg-y-0 lt-lg-h-5">
      <div class="lt-body">
        <div class="panel-widget">
          <div class="panel-widget__header">
            <div>
              <span class="panel-widget__header-icon iconfont-deal"></span> LEADS
            </div>
            <div class="panel-widget__header-controls">
              <span class="panel-widget__header-control ua-icon-search">   <a href="<?php echo base_url();?>staff/add_new_lead" class="btn btn-info btn-rounded panel-widget__footer-action-link">ADD LEAD</a></span>

            </div>
          </div>
          <div class="panel-widget__body">
            <div class="panel-widget__body-scrollpane js-scrollable">
              <table class="table table-no-border table-striped panel-widget__body-table">
                <tbody>
                <tr>
                    <td class="table__datetime"><b>contact</b></td>
                    <td><span class="font-semibold color-info"><b>lead</b></span></td>
                    <td><span class="font-semibold"><b>mobile</b>b</span></td>
                </tr>
              
                <?php if(isset($single_lead_data)){foreach($single_lead_data as $lead){?>
                
                <tr>
                  <td class="table__datetime"><?php echo $lead['contact_name'];?></td>
                  <td><span class="font-semibold color-info"><?php echo $lead['add_lead'];?></span></td>
                  <td><span class="font-semibold"><?php echo $lead['phonenumber'];?></span></td>
                </tr>
                
                <?php } }else{?>
                
                    
               
                <tr>
                  <td class="table__datetime">Select a contact to see his Leads</td>
                  
                </tr>
                
                <?php } ?>
                
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

     </div>
</div>

  </div>