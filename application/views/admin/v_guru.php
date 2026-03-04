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
    <title>Data Tenaga Pendidik dan Kependidikan - TK Kasih Karunia</title>
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

        <!-- Left side column. contains the logo and sidebar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tenaga Pendidik &amp; Kependidikan TK Kasih Karunia
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Tenaga Pendidik dan Kependidikan</li>
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
                                                <th>NUPTK</th>
                                                <th>Nama</th>
                                                <th>Tempat/Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Foto</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data->result_array() as $i) :

                                                $id = $i['guru_id'];
                                                $nip = $i['guru_nip'];
                                                $nama = $i['guru_nama'];
                                                $jenkel = $i['guru_jenkel'];
                                                $tmp_lahir = $i['guru_tmp_lahir'];
                                                $tgl_lahir = $i['guru_tgl_lahir'];
                                                $jabatan = $i['guru_jabatan'];
                                                $photo = $i['guru_photo'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $nip; ?></td>
                                                    <td><?php echo $nama; ?></td>
                                                    <td><?php echo $tmp_lahir . ', ' . $tgl_lahir; ?></td>
                                                    <?php if ($jenkel == 'L') : ?>
                                                        <td>Laki-Laki</td>
                                                    <?php else : ?>
                                                        <td>Perempuan</td>
                                                    <?php endif; ?>
                                                    <td><?php echo $jabatan; ?></td>
                                                    <?php if (empty($photo)) : ?>
                                                        <td><img width="100" height="100" class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"></td>
                                                    <?php else : ?>
                                                        <td><img width="100" height="100" class="img-circle" src="<?php echo base_url() . 'assets/images/guru/' . $photo; ?>"></td>
                                                    <?php endif; ?>
                                                    <td style="text-align:right;">
                                                        <a class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
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
        <!-- Control Sidebar -->
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Tenaga Pendidik dan Kependidikan</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/simpan_guru' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">NUPTK</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnip" class="form-control" id="inputUserName" placeholder="NIP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                    <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                    <label for="inlineRadio2"> Perempuan </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                            <div class="col-sm-7">
                                <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="xtgl_lahir" class="form-control pull-right" id="datepicker" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Jabatan</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="xjabatan" required>
                                    <option value="" selected disabled hidden>-Pilih Jabatan</option>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Guru Kelas A">Guru Kelas A</option>
                                    <option value="Guru Kelas B">Guru Kelas B </option>
                                    <option value="Staf Sekolah">Staf Sekolah </option>
                                    <option value="Tata Usaha">Tata Usaha </option>
                                    <option value="Penjaga Sekolah">Penjaga Sekolah </option>


                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">foto</label>
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

    <!--Modal Edit Album-->
    <?php foreach ($data->result_array() as $i) :
        $id = $i['guru_id'];
        $nip = $i['guru_nip'];
        $nama = $i['guru_nama'];
        $jenkel = $i['guru_jenkel'];
        $tmp_lahir = $i['guru_tmp_lahir'];
        $tgl_lahir = $i['guru_tgl_lahir'];
        $jabatan = $i['guru_jabatan'];
        $photo = $i['guru_photo'];
    ?>

        <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data Tenaga Pendidik dan Kependidikan</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/update_guru' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                            <input type="hidden" value="<?php echo $photo; ?>" name="gambar">
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">NUPTK</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xnip" value="<?php echo $nip; ?>" class="form-control" id="inputUserName" placeholder="NIP" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xnama" value="<?php echo $nama; ?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-7">
                                    <?php if ($jenkel == 'L') : ?>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                            <label for="inlineRadio1"> Laki-Laki </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                            <label for="inlineRadio2"> Perempuan </label>
                                        </div>
                                    <?php else : ?>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                            <label for="inlineRadio1"> Laki-Laki </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                            <label for="inlineRadio2"> Perempuan </label>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir; ?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                <div class="col-sm-7">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir; ?>" class="form-control pull-right datepicker2" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jabatan</label>

                                <div class="col-sm-7">
                                    <?php if ($jabatan == 'Kepala Sekolah') : ?>
                                        <div><select class="form-control" name="xjabatan" required>

                                                <option value="Kepala Sekolah" selected>Kepala Sekolah</option>
                                                <option value="Guru Kelas A">Guru Kelas A</option>
                                                <option value="Guru Kelas B">Guru Kelas B </option>
                                                <option value="Staf Sekolah">Staf Sekolah </option>
                                                <option value="Tata Usaha">Tata Usaha </option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah </option>
                                            </select></div>

                                    <?php elseif ($jabatan == 'Guru Kelas A') : ?>
                                        <div><select class="form-control" name="xjabatan" required>
                                                <option value="Guru Kelas A" selected>Guru Kelas A</option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Guru Kelas B">Guru Kelas B </option>
                                                <option value="Staf Sekolah">Staf Sekolah </option>
                                                <option value="Tata Usaha">Tata Usaha </option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah </option>
                                            </select></div>

                                    <?php elseif ($jabatan == 'Guru Kelas B') : ?>
                                        <div><select class="form-control" name="xjabatan" required>
                                                <option value="Guru Kelas B" selected>Guru Kelas B</option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Guru Kelas A">Guru Kelas A</option>
                                                <option value="Staf Sekolah">Staf Sekolah </option>
                                                <option value="Tata Usaha">Tata Usaha </option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah </option>
                                            </select></div>

                                    <?php elseif ($jabatan == 'Staf Sekolah') : ?>
                                        <div><select class="form-control" name="xjabatan" required>
                                                <option value="Staf Sekolah" selected>Staf Sekolah </option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Guru Kelas A">Guru Kelas A</option>
                                                <option value="Guru Kelas B">Guru Kelas B</option>
                                                <option value="Tata Usaha">Tata Usaha </option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah </option>
                                            </select></div>

                                    <?php elseif ($jabatan == 'Tata Usaha') : ?>
                                        <div><select class="form-control" name="xjabatan" required>
                                                <option value="Tata Usaha" selected>Tata Usaha </option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Guru Kelas A">Guru Kelas A</option>
                                                <option value="Guru Kelas B">Guru Kelas B</option>
                                                <option value="Staf Sekolah">Staf Sekolah </option>
                                                <option value="Penjaga Sekolah">Penjaga Sekolah </option>
                                            </select></div>

                                    <?php else : ?>
                                        <div><select class="form-control" name="xjabatan" required>
                                                <option value="Penjaga Sekolah" selected>Penjaga Sekolah </option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Guru Kelas A">Guru Kelas A</option>
                                                <option value="Guru Kelas B">Guru Kelas B</option>
                                                <option value="Staf Sekolah">Staf Sekolah </option>
                                                <option value="Tata Usaha">Tata Usaha </option>
                                            </select></div>

                                    <?php endif; ?>
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
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!--Modal Edit Album-->

    <?php foreach ($data->result_array() as $i) :
        $id = $i['guru_id'];
        $nip = $i['guru_nip'];
        $nama = $i['guru_nama'];
        $jenkel = $i['guru_jenkel'];
        $tmp_lahir = $i['guru_tmp_lahir'];
        $tgl_lahir = $i['guru_tgl_lahir'];
        $jabatan = $i['guru_jabatan'];
        $photo = $i['guru_photo'];
    ?>
        <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Tenaga Pendidik dan Kependidikan</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/guru/hapus_guru' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                            <input type="hidden" value="<?php echo $photo; ?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus <b><?php echo $nama; ?></b> ?</p>

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
            $('.datepicker2').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });

            $(".timepicker").timepicker({
                showInputs: true
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
                heading: 'Pemberitahuan',
                text: "Data tenaga pendidik dan kependidikan Berhasil disimpan ke database.",
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
                heading: 'Pemberitahuan',
                text: "Data tenaga pendidik dan kependidikan berhasil di update",
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
                heading: 'Pemberitahuan',
                text: "Data tenaga pendidik dan kependidikan Berhasil dihapus.",
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