 <div class="page-content">
     <form action="<?php echo base_url();?>staff/edit_profile" method="POST">
<div class="container-fluid container-fh">
  <div class="main-container container-fh__content m-social-profile">
    <div class="m-social-profile__cover" >
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--green">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-users-group widget-beta__heading-icon"></span> New Clients
                        </div>
                        <div class="widget-beta__amount">459</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 15% from yesterday</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-new-clients" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--seance">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-wallet widget-beta__heading-icon"></span> Total Sales
                        </div>
                        <div class="widget-beta__amount">$8990.63</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 70% last month</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-total-sales" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--lynch">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-rating-up widget-beta__heading-icon"></span> Total Sales
                        </div>
                        <div class="widget-beta__amount">$806,52</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-up widget-beta__desc-icon"></span> 80% from yesterday</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-total-sales2" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-beta widget-beta--purple">
                    <div class="widget-beta__body">
                        <div class="widget-beta__heading">
                            <span class="ua-icon-blank-document widget-beta__heading-icon"></span> New Invoice
                        </div>
                        <div class="widget-beta__amount">1806</div>
                        <div class="widget-beta__desc"><span class="ua-icon-chart-arrow-down widget-beta__desc-icon"></span> 3% from last month</div>
                    </div>
                    <div class="widget-beta__chart">
                        <div id="sparkline-chart-new-invoices" class="widget-beta__chart-container"></div>
                    </div>
                </div>
            </div>
        </div>
      <div class="m-social-profile__profile-image">
        <img src="http://localhost/crm/upload/<?php echo $staff_profile_data['staffimage'];?>" alt="Image"alt="" class=" rounded-circle">
      </div>
    </div>
    <div class="m-social-profile__content" aligin="center">
        <div class="m-social-profile__info" aligin="center">
            <div class="m-social-profile__info-user">
                <div class="m-social-profile__info-username"aligin="center"><?php echo $staff_profile_data['firstname']?></div>
                <div class="m-social-profile__info-user-actions">
                    <button class="btn btn-success m-social-profile__info-user-action">Follow</button>
                    <button class="btn btn-info m-social-profile__info-user-action">Message</button>
                    <div>

                        <div class="postcontent nobottommargin clearfix">
                            <div class="form-group col-md-12">
                                <table class="table">
                                    <tr><td>Address</td><td><?php echo $staff_profile_data['address']?></td></tr>
                                    <tr><td>Gender</td><td><?php echo $staff_profile_data['gender']?></td></tr>
                                    <tr><td>E-mail</td><td><?php echo $staff_profile_data['email']?></td></tr>
                                </table>

                                <br><button type="submit"  class="btn btn-info m-social-profile__info-user-action">edit</button><br><br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
  </div>
</div>

  </div>