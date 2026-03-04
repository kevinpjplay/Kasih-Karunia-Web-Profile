<!--============================= Gallery =============================-->
<div class="gallery-wrap">
    <div class="container">
        <!-- Style 2 -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="gallery-style">Galeri</h2>
            </div>
        </div><br>
        <div class="row d-flex justify-content-center">
            <!-- <div class="col-md-12">
                    <div class="row p-2"> -->
            <!-- <div id="gallery-content"> -->
            <?php foreach ($all_galeri->result() as $row) : ?>
                <div class="col-md-3 card m-2">
                    <a href="<?php echo base_url() . 'assets/images/galeri_foto/' . $row->galeri_gambar; ?>" class="image-link2 mt-3 mb-3"><img src="<?php echo base_url() . 'assets/images/galeri_foto/' . $row->galeri_gambar; ?>" class="all img-fluid" title="<?php echo $row->galeri_judul; ?>" alt="#" /></a>
                </div>
            <?php endforeach; ?>
            <!-- </div> -->
            <!-- </div>
                </div> -->
        </div>
    </div>
</div>
<!--//End Style 2 -->
<!--//End Gallery -->