<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul; ?></title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/lightbox.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/aos.css' ?>">
    <link href="<?php echo base_url() . 'theme/css/dataTables.bootstrap4.min.css' ?>" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/magnific-popup.css' ?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/normalize.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/set2.css' ?>" />
    <!-- Masonry Gallery -->
    <link href="<?php echo base_url() . 'theme/css/animated-masonry-gallery.css' ?>" rel="stylesheet" type="text/css" />

    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f17620594e.js" crossorigin="anonymous"></script>
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>

    <style>
        .lihat-sel:hover {
            background: #125D98;
            color: #fff;
            cursor: pointer;
        }

        #myBtn {
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #3C8DAD;
            color: #fff;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            display: none;

        }

        #myBtn:hover {
            background-color: #125D98;
        }

        .border {
            border: 1px solid black;
        }

        .sharePopup {
            font-size: 11px;
        }

        .sharePopup a {
            font-size: 11px;
            color: #fff;
            text-decoration: none;
        }

        .jumbotron {
            background-image: url("<?php echo base_url() . 'theme/images/bg.jpg' ?>");
            background-size: cover;
        }
    </style>
</head>

<body>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img style="width: 94px; height: 67px; margin-right: 15px;" class="img img-responsive" src="<?php echo base_url() . 'theme/images/logo.png' ?>"></a>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2 mb-1" style="color: #fff;">TK Kasih Karunia Kupang</a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?php echo site_url(''); ?>">BERANDA</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                        PROFIL
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('profil'); ?>">Profil Sekolah</a>
                                        <a class="dropdown-item" href="<?= site_url('visi_misi'); ?>">Visi Misi &amp; Tujuan</a>
                                        <a class="dropdown-item" href="<?= site_url('sarana'); ?>">Sarana & Prasarana</a>
                                        <a class="dropdown-item" href="<?= site_url('prestasi'); ?>">Prestasi</a>


                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                        ORGANISASI
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= site_url('struktur_organisasi'); ?>">Struktur Organisasi</a>
                                        <a class="dropdown-item" href="<?php echo site_url('guru'); ?>">Tenaga Pendidik &amp; Kependidikan</a>


                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                        INFORMASI
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                                        <a class="dropdown-item" href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a>
                                        <a class="dropdown-item" href="<?php echo site_url('berita'); ?>">Berita Sekolah</a>
                                        <a class="dropdown-item" href="<?php echo site_url('download'); ?>">Download</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">GALERI</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= site_url('pendaftaran'); ?>">PENDAFTARAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">BUKU TAMU</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>