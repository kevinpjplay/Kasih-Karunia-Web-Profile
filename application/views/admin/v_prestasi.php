<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Prestasi - TK Kasih Karunia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">


  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Prestasi TK Kasih Karunia

        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Prestasi</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Data</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:15px;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th class="text-center">Judul Prestasi</th>
                        <th class="text-center">Diraih Oleh</th>
                        <th class="text-center">Peringkat</th>
                        <th class="text-center">Tingkat</th>
                        <th class="text-center">Tahun Diraih</th>
                        <th class="text-center">Foto</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($data->result_array() as $i) :
                        $prestasi_id = $i['prestasi_id'];
                        $prestasi_judul = $i['prestasi_judul'];
                        $prestasi_oleh = $i['prestasi_oleh'];
                        $prestasi_peringkat = $i['prestasi_peringkat'];
                        $prestasi_tingkat = $i['prestasi_tingkat'];
                        $prestasi_tgl = $i['prestasi_tgl'];
                        $prestasi_foto = $i['prestasi_foto'];
                      ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td class="text-center"><?php echo $prestasi_judul; ?></td>
                          <td class="text-center"><?php echo $prestasi_oleh; ?></td>
                          <td class="text-center"><?php echo $prestasi_peringkat; ?></td>
                          <td class="text-center"><?php echo $prestasi_tingkat; ?></td>
                          <td class="text-center"><?php echo $prestasi_tgl; ?></td>
                          <?php if (empty($prestasi_foto)) : ?>
                            <td class="text-center"><img width="100" height="100" src="<?php echo base_url() . 'assets/images/prestasi/empty.jpg'; ?>"></td>
                          <?php else : ?>
                            <td class="text-center"><img width="100" height="100" src="<?php echo base_url() . 'assets/images/prestasi/' . $prestasi_foto; ?>"></td>
                          <?php endif; ?>
                          <td style="text-align:right;">
                            <a class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit<?php echo $prestasi_id; ?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $prestasi_id; ?>"><span class="fa fa-trash"></span></a>
                          </td>
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

  <!--Modal Add Pengguna-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Data Prestasi</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'admin/prestasi/tambah' ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Prestasi</label>
              <div class="col-sm-7">
                <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Diraih Oleh</label>
              <div class="col-sm-7">
                <input type="text" name="xperaih" class="form-control" id="inputUserName" placeholder="Masukan nama / status (cth: murid/guru)">
              </div>
            </div>

            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Peringkat</label>
              <div class="col-sm-7">
                <input type="number" name="xperingkat" class="form-control" id="inputUserName" placeholder="Hanya input angka (1 - 9)" min="1" max="9">
              </div>
            </div>
            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Tingkat</label>
              <div class="col-sm-7">
                <input type="text" name="xtingkat" class="form-control" id="inputUserName" placeholder="cth: kelurahan/provinsi">
              </div>
            </div>
            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Tahun Diraih</label>
              <div class="col-sm-7">
                <input type="text" name="xtgl_diraih" class="form-control" id="inputUserName" placeholder="Input Tahun Diraih" onkeypress="return hanyaAngka(event)">
              </div>
            </div>
            <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">Foto</label>
              <div class="col-sm-7">
                <input type="file" name="filefoto" />
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

  <?php foreach ($data->result_array() as $i) :
    $prestasi_id = $i['prestasi_id'];
    $prestasi_judul = $i['prestasi_judul'];
    $prestasi_oleh = $i['prestasi_oleh'];
    $prestasi_peringkat = $i['prestasi_peringkat'];
    $prestasi_tingkat = $i['prestasi_tingkat'];
    $prestasi_tgl = $i['prestasi_tgl'];
    $prestasi_foto = $i['prestasi_foto'];
  ?>

    <div class="modal fade" id="ModalEdit<?php echo $prestasi_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Prestasi</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/prestasi/update' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $prestasi_id; ?>" />
              <input type="hidden" value="<?php echo $prestasi_foto; ?>" name="foto">
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Prestasi</label>
                <div class="col-sm-7">
                  <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" value="<?php echo $prestasi_judul; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Diraih Oleh</label>
                <div class="col-sm-7">
                  <input type="text" name="xperaih" class="form-control" id="inputUserName" placeholder="Masukan nama / status (cth: murid/guru)" value="<?php echo $prestasi_oleh; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Peringkat</label>
                <div class="col-sm-7">
                  <input type="number" name="xperingkat" class="form-control" id="inputUserName" placeholder="Hanya input angka (1 - 9)" min="1" max="9" value="<?php echo $prestasi_peringkat; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tingkat</label>
                <div class="col-sm-7">
                  <input type="text" name="xtingkat" class="form-control" id="inputUserName" placeholder="cth: kelurahan/provinsi" value="<?php echo $prestasi_tingkat; ?>">
                </div>
              </div>


              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tahun Diraih</label>
                <div class="col-sm-7">
                  <input type="text" name="xtgl_diraih" class="form-control" id="inputUserName" placeholder="Input Tahun Diraih" onkeypress="return hanyaAngka(event)" value="<?php echo $prestasi_tgl; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Foto</label>
                <div class="col-sm-7">
                  <input type="file" name="filefoto" />
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

  <?php foreach ($data->result_array() as $i) :
    $prestasi_id = $i['prestasi_id'];
    $prestasi_judul = $i['prestasi_judul'];
    $prestasi_oleh = $i['prestasi_oleh'];
    $prestasi_peringkat = $i['prestasi_peringkat'];
    $prestasi_tingkat = $i['prestasi_tingkat'];
    $prestasi_tgl = $i['prestasi_tgl'];
    $prestasi_foto = $i['prestasi_foto'];
  ?>

    <div class="modal fade" id="ModalHapus<?php echo $prestasi_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data Prestasi</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/prestasi/hapus' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $prestasi_id; ?>" />
              <input type="hidden" value="<?php echo $prestasi_foto; ?>" name="foto">
              <p>Apakah Anda yakin mau menghapus data prestasi <b><?php echo $prestasi_judul; ?></b> ?</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger btn-flat" id="simpan">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>





  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>

  <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>

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

      $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
      });
      $(".timepicker").timepicker({
        showInputs: true
      });
    });
  </script>
  <script>
    function hanyaAngka(event) {
      var angka = (event.which) ? event.which : event.keyCode
      if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
        return false;
      return true;
    }
  </script>
  <?php if ($this->session->flashdata('msg') == 'error') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Pemberitahuan',
        text: "Data Prestasi Gagal disimpan.",
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
        heading: 'Pemberitahuan',
        text: "Data Prestasi Berhasil disimpan.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: true,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>

  <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Pemberitahuan',
        text: "Data Prestasi berhasil diupdate",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Pemberitahuan',
        text: "Data Prestasi Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: true,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php else : ?>

  <?php endif; ?>
</body>

</html>