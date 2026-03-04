<!--============================= SEJARAH SEKOLAH =============================-->




<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class=" jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">TK Kasih Karunia</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <h2>Sejarah Sekolah TK Kasih Karunia</h2>
                <p style="text-align: justify">Pencetus awal untuk pendirian yayasan adalah Pdt. Hotni Ida Nababan, S.Th., lahir di Tarutung, pada tanggal 01 Maret 1971 dan Bapak George Ferdinand Nisnoni, lahir di Kupang, pada tanggal 07 April 1937. Yayasan ini berdiri sejak tahun ajaran 2005/2006 dengan Akta Notaris 20 Februari 2006, No. 70, dengan nama Yayasan Kasih Karunia, yang berkedudukan di kota Kupang, propinsi Nusa Tenggara Timur.
                </p>
                <p style="text-align: justify">Yayasan Kasih Karunia dibentuk oleh beberapa Orang yang memiliki beban yang sama untuk anak-anak, khususnya dalam bidang pendidikan anak usia dini (PAUD). Beban yang sama tersebut disatukan dalam visi "Memberkati Kota Dalam Pendidikan."
            </div>
            <div class="col-md-5">
                <img src="<?php echo base_url() . 'theme/images/profilsekolah-img.jpeg' ?>" class="img-fluid" alt="#">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Identitas Sekolah</h4>
                    </div>
                    <div class=" card m-2 card-body p-2">
                        <?php foreach ($data->result_array() as $i) :
                            $profil_id = $i['profil_id'];
                            $profil_judul = $i['profil_judul'];
                            $profil_konten = $i['profil_konten'];
                        ?>
                            <p><b><?= $profil_judul; ?> :</b> <?= $profil_konten; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <h4>Kontak &amp; Alamat</h4>
                    </div>
                    <div class="card-body p-2 card m-2">
                        <?php foreach ($konfig->result_array() as $i) :
                            $konfig_id = $i['konfig_id'];
                            $konfig_alamat = $i['konfig_alamat'];
                            $konfig_email = $i['konfig_email'];
                            $konfig_telepon = $i['konfig_telepon'];
                        ?>
                            <p><b>Alamat :</b> <?= $konfig_alamat; ?></p>
                            <p><b>Email :</b> <?= $konfig_email; ?></p>
                            <p><b>Telepon :</b> <?= $konfig_telepon; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header bg-primary text-white">
                        <h4>Peta Lokasi</h4>
                    </div>
                    <div class="card-body p-2">
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.43933861116747!2d123.59261911899699!3d-10.178264160001527!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569d755288e077%3A0x2cc5f6ddc9307c56!2sGereja%20Kasih%20Karunia%20Filipi%20Kupang!5e0!3m2!1sid!2sid!4v1647175207173!5m2!1sid!2sid" allowfullscreen="true" width="100%" title="Peta Lokasi TK Kasih Karunia" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<!-- <section>
    <div class="container">

        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="card">

                    <div class="row">
                        <div class="container">
                            <div class="col-12 text-center mb-3 pt-2">
                                <img style="background-color: #125D98; width: 100px; height: 70px;" src="<?php echo base_url() . 'theme/images/logo.png'; ?>" alt=" user-avatar">
                            </div>
                            <div class="col-12 justify-content-center">
                                <h2 style=" font-size: 21px;"><b>Nama sekolah</b></h2>
                                <p style="font-size: 20px;"><b>Oleh : </b></p>
                                <ul style="list-style:none;">
                                    <li>
                                        <a href="#">Kepsek : </a>
                                    </li>
                                    <li>
                                        <a href="#">Kepsek : </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->


<!--============================= END SEJARAH SEKOLAH =============================-->