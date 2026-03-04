    <!--============================= STRUKTUR ORGANISASI =============================-->

    <section class="welcome_about">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <?php foreach ($data->result_array() as $i) :
                    $struktur_id = $i['struktur_id'];
                    $struktur_nama = $i['struktur_nama'];
                    $struktur_gambar = $i['struktur_gambar'];
                ?>
                    <div class="col-md-8">


                        <h2 class="mt-n4 pt-n4 text-center mb-5">Struktur Organisasi</h2>
                        <img src="<?php echo base_url() . 'assets/images/struktur/' . $struktur_gambar; ?>" class="border" alt="struktur-organisasi">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    

    <!--============================= END STRUKTUR ORGANISASI  =============================-->