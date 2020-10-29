
<style>
  .padd{
    padding:30px;
  }
</style>
<div id="toastsContainerTopRight" class="toasts-top-right fixed">
  <div id="error_toast" class="toast bg-danger fade" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="mr-auto">Error</strong>
      <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="toast-body">
      <?= $this->session->flashdata('error');?>
    </div>
  </div>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
            <h5 class="text-danger"><?= @$step_no ?><?= @$step ?></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row padd">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= @$step ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="create" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="<?= $user_data['company_name']; ?>" placeholder="Enter Company Name">
                    <?php echo form_error('company_name');?>
                  </div>
                  <div class="form-group">
                    <label for="address">Company Address</label>
                    <input type="text" class="form-control" name="address" value="<?= $user_data['address']; ?>" placeholder="Enter Address">
                    <?php echo form_error('address');?>
                  </div>
                  <div class="form-group">
                    <label for="nature_business">Nature Of Business</label>
                    <input type="text" class="form-control" name="nature_business" value="<?= $user_data['nature_business']; ?>" placeholder="eg. IT/Software">
                    <?php echo form_error('nature_business');?>
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" value="<?= $user_data['email']; ?>" placeholder="Enter email">
                    <?php echo form_error('email');?>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" value="<?= $user_data['phone']; ?>" placeholder="Enter phone">
                    <?php echo form_error('phone');?>
                  </div>
                  <div class="form-group">
                    <label for="owner">Owner's Name</label>
                    <input type="text" class="form-control" name="owner" value="<?= $user_data['owner']; ?>" placeholder="Enter Owner Name">
                    <?php echo form_error('owner')?>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label><br>
                    <img src="<?= base_url(); ?>uploads/<?= $user_data['image']; ?>" alt="image" width="300", height="300">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="userfile">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" value="<?= $user_data['website']; ?>" placeholder="eg. www.example.com">
                    <?php echo form_error('website');?>
                  </div>
                  <div class="form-group">
                    <label for="facebook_link">Facebook Profile</label>
                    <input type="text" class="form-control" name="facebook_link" value="<?= $user_data['facebook_link']; ?>">
                    <?php echo form_error('facebook_link');?>
                  </div>
                  <div class="form-group">
                    <label for="insta_link">Instagram Profile</label>
                    <input type="text" class="form-control" name="insta_link" value="<?= $user_data['insta_link']; ?>">
                    <?php echo form_error('insta_link');?>
                  </div>
                  <div class="form-group">
                    <label for="twitter_link">Twitter Profile</label>
                    <input type="text" class="form-control" name="twitter_link" value="<?= $user_data['twitter_link']; ?>">
                    <?php echo form_error('twitter_link');?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->