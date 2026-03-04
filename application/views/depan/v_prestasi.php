<!--============================= PRESTASI =============================-->




<section class="content welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0">
                <h2 class="mb-5 text-center">Prestasi </h2>
            </div>
        </div>
        <section class="content">

            <div class="row col-12 d-flex justify-content-center">
                <?php
                foreach ($data->result_array() as $i) :
                    $prestasi_id = $i['prestasi_id'];
                    $prestasi_judul = $i['prestasi_judul'];
                    $prestasi_oleh = $i['prestasi_oleh'];
                    $prestasi_peringkat = $i['prestasi_peringkat'];
                    $prestasi_tingkat = $i['prestasi_tingkat'];
                    $prestasi_tgl = $i['prestasi_tgl'];
                    $prestasi_foto = $i['prestasi_foto'];
                ?>
                    <div class=" col-sm-6 col-md-4 d-flex align-items-stretch flex-column  mb-5">

                        <div class=" card card-header text-center" style="font-size: 22px; font-weight: bold; ">
                            JUARA <?php echo $prestasi_peringkat; ?>
                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="prestasi col-12 pt-3 pl-5 pr-5 pb-3 center data-tilt">
                                    <img src=" <?php echo base_url() . 'assets/images/prestasi/' . $prestasi_foto; ?>" width="200px" height="250px">
                                </div>
                                <div class="col-12 text-center">
                                    <h2 class="lead" style=" font-size: 21px;"><b><?php echo $prestasi_judul; ?></b></h2>
                                    <p class="text-muted text-sm" style="font-size: 20px;"><b>Oleh : </b> <?php echo $prestasi_oleh; ?>
                                        <br>
                                        <b>Tingkat : </b><?php echo $prestasi_tingkat; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right " style="font-weight: bold; font-size: 20px;">

                                <?php echo $prestasi_tgl; ?>

                            </div>
                        </div>


                    </div>
                <?php endforeach; ?>



            </div>
            <nav><?php echo $page; ?></nav>

        </section>
    </div>

</section>



<!--============================= END VISI DAN MISI =============================-->