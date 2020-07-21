<div class="page-content">
    
<div class="container-fluid container-fh">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Sellers</h2>
      
    </div>
  </div>
  <div class="container-fh__content">
    <div class="row">
      <div class="col-lg-10">
          <div class="main-container table-container">
              <table class="table table-no-border">
                  <thead>
                  <tr>
                      
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php if($all_sell){ foreach($all_sell as $staff){?>
                      <tr>
                          <td class="table__avatar">
                              <img src="<?php echo base_url()?>/upload/<?php echo $staff['sellerimage'];?>" alt="" width="34" height="34" class="rounded-circle">
                              <span><?php echo $staff['firstname']." ".$staff['secondname'];?></span>
                          </td>
                          <td>
                              <?php echo $staff['email'];?>
                          </td>
                          <td><strong><?php echo $staff['address'];?></strong></td>
                          <td><strong><?php echo $staff['phonenumber'];?></strong></td>

                      </tr>
                  <?php }}else{?>
                      <tr>

                          <td><strong>No Seller Registered</strong></td>

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