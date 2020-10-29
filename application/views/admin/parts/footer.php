<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>My Card</b>
    </div>
    <strong>Copyright &copy; 2020</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="<?= base_url(); ?>assets/dashboard/plugins/moment/moment.min.js"></script>
<!-- jQuery -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dashboard/dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dashboard/dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
  <?php 

    if($this->session->flashdata('disable_navs'))
    {?>

      $("#dash").css('display', 'none');
      $("#create1").attr('href', '');

      $("#feedback").css('display', 'none');
      $("#create2").attr('href', '');

      $("#enquiry").css('display', 'none');
      $("#create3").attr('href', '');

      $("#people").css('display', 'none');
      $("#create4").attr('href', '');

    <?php }
  
    if($this->session->flashdata('create')){?>
      $("#create").addClass('menu-open');
      var subnavId = "#create"+<?= $this->session->flashdata('create') ?>;
      $(subnavId).addClass('active');
    <?php }

    if($this->session->flashdata('error')){?>
      $("#error_toast").addClass('show');
    <?php }
     
    if($this->session->flashdata('dash')){?>
      $("#dash").addClass('active');
    <?php }

    if($this->session->flashdata('feedback')){?>
      $("#feedback").addClass('active');
    <?php }

    if($this->session->flashdata('enquiry')){?>
      $("#enquiry").addClass('active');
    <?php }

    if($this->session->flashdata('people')){?>
      $("#people").addClass('active');
    <?php }

  ?>

  $('.textarea').summernote({
        toolbar: [
          // [groupName, [list of button]]
          ['style', ['bold', 'clear']],
          ['font', ['superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
    });

  $('#example2').DataTable({
        "ordering": true,
        "pageLength": 5,
        "lengthChange": true,
        "searching": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "ServerSide": true,
        "ajax": {
            url: '<?= base_url(); ?>dash/feeds',
            type: 'POST'
        },
  });

  $('#enquiry_table').DataTable({
        "ordering": true,
        "pageLength": 5,
        "lengthChange": true,
        "searching": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "ServerSide": true,
        "ajax": {
            url: '<?= base_url(); ?>dash/enqs',
            type: 'POST'
        },
  });

  $('#people_table').DataTable({
        "ordering": true,
        "pageLength": 5,
        "lengthChange": true,
        "searching": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "ServerSide": true,
        "ajax": {
            url: '<?= base_url(); ?>dash/people_data',
            type: 'POST',
        },
  });

});

function deleteFeed(feed_id) {
    if(confirm("Are You Sure?"))
    {
      $.ajax({
        url: "<?= base_url() ?>dash/delete_feed/"+parseInt(feed_id),
        success: function(data){
          if(data == 1){
            alert('data deleted');
            $('#example2').DataTable().ajax.reload();
          }
        }
      });     
    }
  }

</script>
<!-- custom JS -->
<script src="<?= base_url(); ?>assets/dashboard/dist/js/pages/common.js"></script>
</body>
</html>
