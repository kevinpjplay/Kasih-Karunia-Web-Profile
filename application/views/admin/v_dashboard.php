<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Area - TK Kasih Karunia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/Ionicons/css/ionicons.min.css' ?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <!-- <script src="https://kit.fontawesome.com/f17620594e.js" crossorigin="anonymous"></script> -->
  <?php
  /* Mengambil query report*/
  foreach ($visitor as $result) {
    $bulan[] = $result->tgl; //ambil bulan
    $value[] = (float) $result->jumlah; //ambil nilai
  }
  /* end mengambil query*/

  ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">

      <section class="content-header">

        <h1><b>SELAMAT DATANG DI HALAMAN ADMIN</b></h1>
        <ol class="breadcrumb">
          <li class="active"><a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
          <!-- <li class="active">Dashboard</li> -->
        </ol>

      </section>

      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- <div class="col-lg-3 col-xs-6">
            small box
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>1</h3>

                <p>IDENTITAS SEKOLAH</p>
              </div>
              <div class="icon">
                    <i class="ion ion-briefcase" ></i>
                  </div>
              <a href="<?php echo base_url() . 'admin/profil' ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $guru; ?></h3>

                <p>TENAGA PENDIDIK &amp; KEPENDIDIKAN</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url() . 'admin/guru' ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $sarana; ?></h3>

                <p>SARANA &amp; PRASARANA</p>
              </div>
              <div class="icon">
                <i class="fa fa-building" style="user-select: auto;"></i>
              </div>
              <a href="<?php echo base_url() . 'admin/sarana' ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $prestasi; ?></h3>

                <p>PRESTASI SISWA</p>
              </div>
              <div class="icon">
                <i class="fa fa-trophy" style="user-select: auto;"></i>
              </div>
              <a href="<?php echo base_url() . 'admin/prestasi' ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-xs-6">
            small box
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $struktur_organisasi; ?></h3>

                <p>STRUKTUR ORGANISASI</p>
              </div>
              <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
              <a href="<?php echo base_url() . 'admin/struktur_organisasi' ?>" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->


        <div class="row">
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Berita Populer</h3>

                <table class="table">
                  <?php
                  $query = $this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC");
                  foreach ($query->result_array() as $i) :
                    $tulisan_id = $i['tulisan_id'];
                    $tulisan_judul = $i['tulisan_judul'];
                    $tulisan_views = $i['tulisan_views'];
                  ?>
                    <tr>
                      <td><?php echo $tulisan_judul; ?></td>
                      <td><?php echo $tulisan_views . ' kali dilihat'; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>

              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">AGENDA</span>
                <span class="info-box-number"><?php echo $agenda; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fa fa-bullhorn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">PENGUMUMAN</span>
                <span class="info-box-number"><?php echo $pengumuman; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">FILE DOWNLOAD</span>
                <span class="info-box-number"><?php echo $files; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fa fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">BUKU TAMU</span>
                <span class="info-box-number"><?php echo $buku_tamu; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
      </section>

    </div>
    <?php
    $this->load->view('admin/v_footer');
    ?>
  </div>

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() . 'assets/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url() . 'assets/plugins/chartjs/Chart.min.js' ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . 'assets/dist/js/pages/dashboard2.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>


</body>

</html>