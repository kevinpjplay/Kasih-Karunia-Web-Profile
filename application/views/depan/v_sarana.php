<!--============================= SARANA DAN PRASARANA =============================-->

<section class=" welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-5 text-center">Sarana dan Prasarana </h2>
            </div>
        </div>
        <section>
            <div class="cards ">
                <div class="cards-body">
                    <div class="row col-12 d-flex justify-content-center">
                        <?php

                        foreach ($data->result_array() as $i) :
                            $sarana_id = $i['sarana_id'];
                            $sarana_judul = $i['sarana_judul'];
                            $sarana_keterangan = $i['sarana_keterangan'];
                            $sarana_kondisi = $i['sarana_kondisi'];
                            $sarana_foto = $i['sarana_foto'];
                        ?>
                            <div class="col-md-3 card m-2 data-tilt">
                                <div class="mt-2 mb-2 bg-gradient-dark ">
                                    <div class="sarana data-tilt"> <img class="card-img-top" height="250px" width="200px" src="<?php echo base_url() . 'assets/images/sarana/' . $sarana_foto; ?>"></div>


                                </div>
                                <div class="text-center mb-5">
                                    <h4><b><?php echo $sarana_judul; ?></b></h4>
                                    <p>Kondisi : <?php echo $sarana_kondisi; ?></p>
                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
            <nav class="mt-3"><?php echo $page; ?></nav>

        </section>
    </div>

</section>
<!--============================= END SARANA=============================-->