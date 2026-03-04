<!--============================= HEADER - CAROUSEL =============================-->

<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url() . 'assets/images/slider/slider.jpeg' ?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1><br>A Good Education Is A Foundation For A Better Future.</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'assets/images/slider/slider-2.jpeg' ?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1><br>Teachers Who Love Teaching, Teach Children To Love Learning.</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url() . 'assets/images/slider/slider-3.jpg' ?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1><br>Play, Learn &amp; Grow Together.</h1>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!--============================= END HEADER - CAROUSEL =============================-->


<!--============================= KATA SAMBUTAN KEPSEK =============================-->

<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8" data-aos="fade-right">
                <h2>Kata Sambutan Kepala Sekolah TK Kasih Karunia</h2>
                <?php foreach ($konfig->result_array() as $i) :
                    $konfig_ktsambutan = $i['konfig_ktsambutan'];
                ?>
                    <p style="text-align: justify;">"<?php echo $konfig_ktsambutan; ?>" </p>
                <?php endforeach; ?>
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <?php foreach ($data->result_array() as $i) :
                ?>
                    <img src="<?php echo base_url() . 'assets/images/guru/' . $i['guru_photo'] ?>" class="img-fluid about-img" alt="#">
                    <br>
                    <h5 class="text-center"><b><?= $i['guru_nama'] ?></b></h5>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<!--============================= END KATA SAMBUTAN KEPSEK =============================-->


<!--============================= PROFIL SEKOLAH =============================-->

<section class="sejarah">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section_header" data-aos="zoom-in" data-aos-duration="1000">
                <h2>PROFIL SEKOLAH</h2>
                <hr class="style">
                <p style="text-align: center; font-size: 22px">TK Kasih Karunia adalah sebuah Yayasan yang di bentuk oleh Pendeta Hotni Ida Nababan, S. Th dan Bapak George Ferdinand Nisnoni.<br> Yayasan ini berdiri sejak tahun ajaran 2005/2006 <strong><a href="<?php echo site_url('profil'); ?>">Baca Selengkapnya ... </a></strong> </p><br>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-4" style="border-right: 1px solid #555">
                <div class="sejarah text-center">
                    <h2 style="font-size: 30px">VISI MISI &amp; TUJUAN</>
                    </h2>
                    <h1 class="mb-3"><i class="fa fa-briefcase" style="color: #3C8DAD"></i></h1><br>
                    <!-- <div class="lihat-sel p-2" style="border:1px solid black; border-radius:1em"> -->
                    <a href="<?= site_url('visi_misi'); ?>" class="lihat-sel" style="border:1px solid #125D98; border-radius:1em; padding: 10px 100px 10px 100px">Selengkapnya</a>
                    <!-- </div> -->
                </div>
            </div>
            <div class="col-md-4" style="border-right: 1px solid #555">
                <div class="sejarah text-center">
                    <h2 style="font-size: 30px">SARANA &amp; PRASARANA</h2>
                    <h1 class="mb-3"><i class="fa fa-cogs" style="color: #3C8DAD"></i></h1><br>
                    <a href="<?= site_url('sarana'); ?>" class="lihat-sel" style="border:1px solid #125D98; border-radius:1em; padding: 10px 100px 10px 100px">Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sejarah text-center">
                    <h2 style="font-size: 30px">PRESTASI SEKOLAH</h2>
                    <h1 class="mb-3"><i class="fas fa-award" style="color: #3C8DAD"></i></h1><br>
                    <a href="<?= site_url('prestasi'); ?>" class="lihat-sel" style="border:1px solid #125D98; border-radius:1em; padding: 10px 100px 10px 100px">Selengkapnya</a>
                </div>
            </div>
        </div>
</section>

<!--============================= END PROFIL SEKOLAH =============================-->


<!--============================= KESISWAAN =============================-->

<section class="kurikulum" id="kurikulum" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 section_header">
                <br><br>
                <h2>STRUKTUR KURIKULUM</h2>
                <hr class="style">
                <p style="text-align: justify; font-size: 20px">Pendidikan usia dini memerlukan program pendidikan yang terstruktur, terencana dan bersifat holistik integratif agar anak dapat memperoleh stimulasi yang utuh sesuai minat dan bakatnya. Kurikulum diperlukan sebagai media pendekatan pembelajaran yang tepat yang disertai dengan strategi penataan lingkungan yang sesuai dengan tahap perkembangan anak. Struktur Kurikulum 2013 Pendidikan Anak Usia Dini (PAUD) di TK Kasih Karunia merupakan pengorganisasian Muatan Kurikulum, Kompetensi Inti (KI) dan Kompetensi Dasar (KD) dan Lama Belajar. </p><br><br>
                <a href="<?php echo site_url('download'); ?>" class="lihat-sel" style="border:1px solid #125D98; border-radius:1em; padding: 10px 100px 10px 100px">Selengkapnya</a>
            </div>
        </div>
        <!-- <div class="row">
               
                    <div class=" col-md-6">
                    <i class="fa fa-briefcase fa-4x"><h4 class="title_sec"><a href="#">Muatan Kurikulum</a></h4></i>
                        <p class="description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit numquam itaque libero, ut dignissimos nemo neque debitis dolorem adipisci! Repudiandae nihil doloribus voluptatibus iusto sequi esse. Quas, tempore. Non, doloremque?</p><br>
                    </div>
                    <div class=" col-md-6">
                    <i class="fa fa-briefcase fa-4x"><h4 class="title_sec"><a href="#">Kompetensi Inti</a></h4></i>
                        <p class="description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit numquam itaque libero, ut dignissimos nemo neque debitis dolorem adipisci! Repudiandae nihil doloribus voluptatibus iusto sequi esse. Quas, tempore. Non, doloremque?</p><br>
                    </div>
                    <div class=" col-md-6">
                    <i class="fa fa-briefcase fa-4x"><h4 class="title_sec"><a href="#">Kompetensi Dasar</a></h4></i>
                        <p class="description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit numquam itaque libero, ut dignissimos nemo neque debitis dolorem adipisci! Repudiandae nihil doloribus voluptatibus iusto sequi esse. Quas, tempore. Non, doloremque?</p><br>
                    </div>
                    <div class=" col-md-6">
                    <i class="fa fa-briefcase fa-4x"><h4 class="title_sec"><a href="#">Lama Belajar</a></h4></i>
                        <p class="description"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit numquam itaque libero, ut dignissimos nemo neque debitis dolorem adipisci! Repudiandae nihil doloribus voluptatibus iusto sequi esse. Quas, tempore. Non, doloremque?</p><br>
                    </div>
            </div> -->
    </div>
</section>
<!--============================= END KESISWAAN =============================-->





<!--============================= AGENDA DAN PENGUMUMAN SEKOLAH =============================-->

<section class="event" id="agenda_pengumuman">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section_header">
                <h2>AGENDA DAN PENGUMUMAN</h2>
                <hr class="style">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 " data-aos="fade-right">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="row">
                            <div class="col-sm-3"> <img src="<?php echo base_url() . 'theme/images/announcement-icon.png' ?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h3>
                                <span><?php echo $row->tanggal; ?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-left">
                        <?php foreach ($agenda->result() as $row) : ?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_mulai)); ?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_mulai)); ?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                                <hr class="event_line">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--============================= END AGENDA DAN PENGUMUMAN SEKOLAH =============================-->

<!--============================= KEGIATAN SEKOLAH =============================-->

<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section_header">
                <h2>BERITA SEKOLAH</h2>
                <hr class="style">
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="zoom-in">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img src="<?php echo base_url() . 'assets/images/berita/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                            <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>


<!--============================= END KEGIATAN SEKOLAH =============================-->