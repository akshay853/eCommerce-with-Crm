<div class="page-content">
    
<div class="container-fluid container-fh">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Feedbacks</h2>
      
    </div>
  </div>
  <div class="container-fh__content">
    <div class="row">
      <div class="col-lg-10">
          <div class="main-container table-container">
              <table class="table table-no-border">
                  <thead>
                  <tr>
                      <th class="table__datetime">User</th>
                      <th>title</th>
                      <th>Content</th>

                  </tr>
                  </thead>
                  <tbody>

                  <?php if($all_feed){ foreach($all_feed as $staff){?>
                      <tr> <td>
                              <?php echo $staff['username'];?>
                          </td>

                          <td>
                              <?php echo $staff['title'];?>
                          </td>
                          <td><strong><?php echo $staff['content'];?></strong></td>

                      </tr>
                  <?php }}else{?>
                      <tr>

                          <td><strong>No Feeds</strong></td>

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