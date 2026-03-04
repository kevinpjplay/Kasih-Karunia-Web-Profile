<!--============================= VISI DAN MISI =============================-->

<section class="welcome_about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2 class="mt-n4 pt-n4 text-center mb-5">Prosedur Pendaftaran</h2>
                <table class="table mt-n5 pt-n5 table-bordered text-center table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Prosedur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1;
                            foreach ($data->result_array() as $i) :
                                $pendaftaran_id = $i['pendaftaran_id'];
                                $pendaftaran_konten = $i['pendaftaran_konten'];
                            ?>

                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $pendaftaran_konten; ?></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</section>