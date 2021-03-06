<div class="page-content">
    
<div class="container-fluid container-fh">
  <div class="page-content__header">
    <div>
      <h2 class="page-content__header-heading">Float Labels</h2>
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
          <form class="main-container"method="post" action="<?php echo base_url()?>seller/seller_feedback_action">
          <div class="form-group">
            <label>Title</label>
            <input required type="text" class="form-control"  name="title"id="title"  placeholder="title" value="">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea  required class="form-control" name="content" id="content" rows="10"></textarea>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </form>
        
      </div>
   
    </div>
  </div>
</div>

  </div>