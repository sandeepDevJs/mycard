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
      <!-- Specialities -->
      <form role="form" action="about" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Your Business's Specialities.
              </h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea name="specialities" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= set_value("specialities"); ?>
                  </textarea>
                  <?= form_error('specialities', '<p class="text-danger">', '</p>'); ?>
                </div>
              </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      <!-- Mission -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Your Missions
              </h3>
            </div>
            <!-- /.card-header -->
            
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea name="mission" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= set_value("mission"); ?>
                  </textarea>
                  <?= form_error('mission', '<p class="text-danger">', '</p>'); ?>
                </div>
              </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

      <!-- Apporoach -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Your Apporoach.
              </h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea name="approach" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= set_value("approach"); ?>
                  </textarea>
                  <?= form_error('approach', '<p class="text-danger">', '</p>'); ?>
                </div>
              </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

      <!-- own words -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Tell Us About Your Business In Your Own Words.
              </h3>
            </div>
            <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea name="own_words" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= set_value("own_words"); ?>
                  </textarea>
                  <?= form_error('own_words', '<p class="text-danger">', '</p>'); ?>
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
  