<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $feedback_count; ?></h3>

                <p>Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-chatbubbles"></i>
              </div>
              <a href="<?= base_url() ?>dash/feedback" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $views ?></h3>

                <p>Views</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="" class="small-box-footer">&nbsp;</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $enquiry_count; ?></h3>

                <p>Enquiry</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url() ?>dash/enquiry" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $enquiry_count; ?></h3>

                <p>Connected People</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="<?= base_url() ?>dash/people" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        <div class="col-lg-6 col-12">
        <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Feedbacks</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <?php foreach($feedbacks as $feed): ?>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?= $feed['name'] ?></span>
                      <span class="direct-chat-timestamp float-right"><?= date('F d, Y h:mA', strtotime($feed['added_at'])) ?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?= base_url() ?>assets/dashboard/dist/img/avatar.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?= $feed['feedback']; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <?php endforeach; ?>
                  <!-- /.direct-chat-msg -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
            </div>
            <!--/.direct-chat -->
            </div>

            <!-- Enquiry Box -->
            <div class="col-lg-6 col-12">
        <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Enquiry</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <?php foreach($enquiries as $enquiry): ?>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?= $enquiry['name'] ?></span>
                      <span class="direct-chat-timestamp float-right"><?= date('F d, Y h:mA', strtotime($enquiry['added_at'])) ?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?= base_url() ?>assets/dashboard/dist/img/avatar5.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?= $enquiry['text']; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <?php endforeach; ?>
                  <!-- /.direct-chat-msg -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
            </div>
            <!--/.direct-chat -->
            </div>
          </div>
        <script>
        /*<div class="row">
          <!-- Left col -->
          <section class="col-sm-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Views Analysis So Far.
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->*/
            </script>
