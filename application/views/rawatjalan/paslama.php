<section class="section">
    <div class="section-header">
        <h1>Pasien</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pasien Rawat Inap</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Masuk</th>
                                        <th>No MRM</th>
                                        <th>Nama Pasien</th>
                                        <th>Alamat</th>
                                        <th>No Asuransi</th>
                                        <th>No SEP</th>
                                        <th>No Rawat Jalan</th>

                                        <th>Nama Dokter</th>
                                        <th>Nama Kons</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $no = 1;
                                    foreach ($paslama as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['tanggal'] ?></td>
                                            <td><?= $row['nomrm'] ?></td>
                                            <td><?= $row['nmpasien'] ?></td>
                                            <td><?= $row['alamat'] ?></td>

                                            <td><?= $row['noasuransi'] ?></td>
                                            <td><?= $row['nosep'] ?></td>
                                            <td><?= $row['norj'] ?></td>


                                            <td><?= $row['nmdokter'] ?></td>
                                            <td><?= $row['nmkons'] ?></td>


                                            <td>
                                                <div class="row">
                                                    <div class="buttons">
                                                        <a href="" class="btn btn-icon btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                                        <a href="<?= base_url('rawatjalan/rawatjalanDokter') ?>" class="btn btn-icon btn-sm btn-primary"><i class="far fa-eye"></i></a>
                                                    </div>
                                                </div>
                                            </td>


                                        <?php endforeach ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>