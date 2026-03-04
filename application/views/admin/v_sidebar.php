    <!--Counter Inbox-->
    <?php
    error_reporting(0);
    $query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment = $query2->num_rows();
    $jum_pesan = $query->num_rows();
    ?>


    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"> ADMIN AREA </li>
                <li class="active">
                    <a href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="fa fa-home"></i> <span> BERANDA </span><span class="pull-right-container"><small class="label pull-right"></small></span></a>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-newspaper-o"></i><span> PROFIL </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url() . 'admin/profil' ?>"><i class="fa fa-briefcase"></i> Data Profil Sekolah</a></li>
                        <li><a href="<?php echo base_url() . 'admin/sarana' ?>"><i class="fa fa-building"></i> Sarana &amp; Prasarana</a></li>
                        <li><a href="<?php echo base_url() . 'admin/prestasi' ?>"><i class="fa fa-trophy"></i> Prestasi</a></li>
                        <li><a href="<?php echo base_url() . 'admin/struktur_organisasi' ?>"><i class="fa fa-sitemap"></i> Struktur Organisasi</a></li>
                        <li><a href="<?php echo base_url() . 'admin/guru' ?>"><i class="fa fa-cogs"></i> Tenaga Pendidik &amp; <br>Kependidikan</a></li>
                    </ul>
                </li>




                <li class="treeview">
                    <a href="#"><i class="fa fa-info-circle"></i><span> INFORMASI </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url() . 'admin/agenda' ?>"><i class="fa fa-calendar"></i> <span> Agenda </span><span class="pull-right-container"><small class="label pull-right"></small></span></a></li>
                        <li><a href="<?php echo base_url() . 'admin/pengumuman' ?>"><i class="fa fa-bullhorn"></i> <span> Pengumuman </span><span class="pull-right-container"><small class="label pull-right"></small></span></a></li>
                        <li><a href="<?php echo base_url() . 'admin/files' ?>"><i class="fa fa-download"></i> <span> File Download </span><span class="pull-right-container"><small class="label pull-right"></small></span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-newspaper-o"></i><span> BERITA </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url() . 'admin/berita' ?>"><i class="fa fa-list"></i> Daftar Berita </a></li>
                        <li><a href="<?php echo base_url() . 'admin/berita/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Tambah Berita </a></li>
                        <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori </a></li>
                        <li><a href="<?php echo base_url() . 'admin/komentar' ?>"><i class="fa fa-comments"></i> <span> Komentar </span><span class="pull-right-container"><small class="labelpull-right bg-green"><?php echo $jum_comment; ?></small></span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-camera"></i><span> GALERI </span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album </a></li>
                        <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i> Foto </a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'admin/pendaftaran' ?>"><i class="fa fa-book"></i> <span> PENDAFTARAN</span><span class="pull-right-container">
                            <small class="label pull-right"></small></span></a>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'admin/buku_tamu' ?>">
                        <i class="fa fa-envelope"></i> <span> BUKU TAMU </span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'admin/konfigurasi_admin' ?>"><i class="fas fa-user-cog"></i> <span> DATA ADMIN </span> <span class="pull-right-container">
                            <small class="label pull-right"></small></span></a>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'admin/login/logout' ?>"><i class="fa fa-sign-out"></i> <span> LOGOUT </span><span class="pull-right-container"><small class="label pull-right"></small></span></a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>