<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Profil Sekolah - TK Kasih Karunia</title>
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
                    Profil Sekolah TK Kasih Karunia
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Profil</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Data</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:16px;">
                                        <tbody>
                                            <?php
                                            foreach ($data->result_array() as $i) :
                                                $profil_id = $i['profil_id'];
                                                $profil_judul = $i['profil_judul'];
                                                $profil_konten = $i['profil_konten'];
                                            ?>
                                                <tr>
                                                    <td style="font-weight:bold"><?php echo $profil_judul; ?></td>
                                                    <td>:</td>
                                                    <td><?php echo $profil_konten; ?></td>
                                                    <td style="text-align:right;">
                                                        <a class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit<?php echo $profil_id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $profil_id; ?>"><span class="fa fa-trash"></span></a>
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
                    </div>
                    <div class="col-xs-6">




                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">KONFIGURASI</h3>
                                <!-- <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalEdit<?php echo $profil_id; ?>"><span class="fa fa-plus"></span> Tambah Data</a> -->
                                <!-- <h4>KONFIGURASI</h4> -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-striped" style="font-size:16px;">
                                    <tbody>
                                        <?php
                                        foreach ($konfig->result_array() as $i) :
                                            $konfig_id = $i['konfig_id'];
                                            $konfig_alamat = $i['konfig_alamat'];
                                            $konfig_telepon = $i['konfig_telepon'];
                                            $konfig_email = $i['konfig_email'];
                                            $konfig_ktsambutan = $i['konfig_ktsambutan'];
                                        ?>

                                            <tr>
                                                <td style="font-weight:bold">Alamat</td>
                                                <td>:</td>
                                                <td><?php echo $konfig_alamat; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold">Email</td>
                                                <td>:</td>
                                                <td><?php echo $konfig_email; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold">Telepon</td>
                                                <td>:</td>
                                                <td><?php echo $konfig_telepon; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold">Kata Sambutan</td>
                                                <td>:</td>
                                                <td><?php echo $konfig_ktsambutan; ?></td>
                                            </tr>




                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>

                            <div class="box-footer  card text-right">
                                <div class="d-flex justify-content-center">

                                    <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $konfig_id; ?>">Edit Data</a>
                                </div>
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
        <!-- ./wrapper -->


        <!-- Modal Tambah Identitas -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Identitas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/profil/tambah' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Atribut</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Nama Atribut" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nilai</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" name="xkonten" placeholder="Deskripsi Nilai Atribut ..." required></textarea>
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

        <!-- modal edit identitas -->

        <?php
        foreach ($data->result_array() as $i) :
            $profil_id = $i['profil_id'];
            $profil_judul = $i['profil_judul'];
            $profil_konten = $i['profil_konten'];
        ?>

            <div class="modal fade" id="ModalEdit<?php echo $profil_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Data Identitas</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/profil/edit' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">


                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Atribut</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="kode" value="<?php echo $profil_id; ?>" />
                                        <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Nama Atribut" value="<?= $profil_judul; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Nilai</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="3" name="xkonten" placeholder="Deskripsi Nilai Atribut ..." required><?= $profil_konten; ?></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


        <!-- Modal Hapus Data identitas -->
        <?php
        foreach ($data->result_array() as $i) :
            $profil_id = $i['profil_id'];
            $profil_judul = $i['profil_judul'];
            $profil_konten = $i['profil_konten'];
        ?>
            <div class="modal fade" id="ModalHapus<?php echo $profil_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Hapus Data Identitas</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/profil/hapus' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $profil_id; ?>" />

                                <p>Apakah Anda Yakin Untuk Menghapus Atribut <b><?php echo $profil_judul; ?></b> ?</p>

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

        <!-- modal edit konfigurasi -->
        <?php
        foreach ($konfig->result_array() as $i) :
            $konfig_id = $i['konfig_id'];
            $konfig_alamat = $i['konfig_alamat'];
            $konfig_telepon = $i['konfig_telepon'];
            $konfig_email = $i['konfig_email'];
            $konfig_ktsambutan = $i['konfig_ktsambutan'];
        ?>
            <div class="modal fade" id="ModalEdit<?php echo $konfig_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Data Konfigurasi</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'admin/profil/editkonfig' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $konfig_id; ?>" />

                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="4" name="xalamat" placeholder="Alamat Sekolah" required><?= $konfig_alamat; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-7">

                                        <input type="email" name="xemail" class="form-control" id="inputUserName" placeholder="Email Sekolah" value="<?= $konfig_email; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Telepon</label>
                                    <div class="col-sm-7">

                                        <input type="tel" name="xtelepon" class="form-control" id="inputUserName" placeholder="08xxxxxxxxx (maks 12-digit)" value="<?= $konfig_telepon; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Kata Sambutan</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="6" name="xktsambutan" placeholder="Kata Sambutan Kepala Sekolah" required><?= $konfig_ktsambutan; ?></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
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
                    text: "Data Profil Gagal disimpan.",
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
                    text: "Data Profil Berhasil disimpan.",
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
                    text: "Data Profil berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
            </script>
        <?php elseif ($this->session->flashdata('msg') == 'info2') : ?>
            <script type="text/javascript">
                $.toast({
                    heading: 'Pemberitahuan',
                    text: "Data Konfigurasi berhasil di update",
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
                    text: "Data Profil Berhasil dihapus.",
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