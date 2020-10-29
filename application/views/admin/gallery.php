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
            <h1><?= $title; ?></h1>
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
      <!-- Services -->
      <form role="form" action="gallery" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Share Us Your Photos That You Wanna Show. That Would Add A Good Expression.
              </h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body pad">
              <div class="form-group">
                    <label for="image">Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="userfiles[]" value="<?= set_value('userfiles[]'); ?>" multiple required>
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                    <?= form_error("userfiles[]", "<p class='text-danger'>", "</p>"); ?>
                </div>
              </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  