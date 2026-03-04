<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Struktur Organisasi - TK Kasih Karunia </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />



</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Struktur Organisasi TK Kasih Karunia
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Struktur Organisasi</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <?php foreach ($data->result_array() as $i) :
                $struktur_id = $i['struktur_id'];
                $struktur_nama = $i['struktur_nama'];
                $struktur_gambar = $i['struktur_gambar'];
              ?>

                <div class="box">
                  <div class="box-header">
                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalEdit<?php echo $struktur_id; ?>"><span class="fa fa-plus"></span> Perbarui Data</a>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-striped" style="font-size:15px;">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Gambar Struktur</th>

                        </tr>
                      </thead>
                      <tbody>

                        <tr>


                          <td><?php echo $struktur_nama; ?></td>
                          <td><img src="<?php echo base_url() . 'assets/images/struktur/' . $struktur_gambar; ?>" style="width:80px;"></td>

                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    $this->load->view('admin/v_footer');
    ?>
  </div>
  <!-- ./wrapper -->



  <!--Modal Edit struktur-->
  <?php foreach ($data->result_array() as $i) :
    $struktur_id = $i['struktur_id'];
    $struktur_nama = $i['struktur_nama'];
    $struktur_gambar = $i['struktur_gambar'];
  ?>

    <div class="modal fade" id="ModalEdit<?php echo $struktur_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Struktur Organisasi</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/struktur_organisasi/edit' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $struktur_id; ?>" />
              <input type="hidden" value="<?php echo $struktur_gambar; ?>" name="gambar">
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                <div class="col-sm-7">
                  <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Keterangan" value="<?php echo $struktur_nama; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">File Struktur Organisasi</label>
                <div class="col-sm-7">
                  <input type="file" name="filefoto" />
                  NB: file gambar harus bertype jpg | png | jpeg.
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-success btn-flat" id="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!--Modal Edit Album-->





  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <?php if ($this->session->flashdata('msg') == 'error') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Error',
        text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
        showHideTransition: 'slide',
        icon: 'error',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#FF4859'
      });
    </script>

  <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Struktur Organisasi Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Info',
        text: "Struktur organisasi berhasil di update",
        showHideTransition: 'slide',
        icon: 'info',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Album Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php else : ?>

  <?php endif; ?>
</body>

</html>