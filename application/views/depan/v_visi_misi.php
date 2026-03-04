<!--============================= VISI DAN MISI =============================-->

<section class="welcome_about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2 class="mt-n4 pt-n4 text-center mb-5">Visi Misi dan Tujuan</h2>
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>

                            <th class="text-center">Visi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($visi->result() as $key => $value) : ?>
                            <tr class="text-center">

                                <td>
                                    <?= $value->konten ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Misi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($misi->result() as $key => $value) : ?>
                            <tr>
                                <td> <?= $key + 1; ?></td>
                                <td>
                                    <?= $value->konten ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tujuan->result() as $key => $value) : ?>
                            <tr>
                                <td> <?= $key + 1; ?></td>
                                <td>
                                    <?= $value->konten ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--============================= END VISI DAN MISI =============================-->