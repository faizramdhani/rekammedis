<section class="section">
    <div class="section-header">
        <h5>Dokter Rawat Inap</h5>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pasien Rawat Inap</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Alamat</th>
                                        <th>Asal</th>
                                        <th>No.Rawat Inap</th>
                                        <th>No.Rawat Jalan</th>
                                        <th>No MRM</th>

                                        <th>Kelas</th>
                                        <th>Kamar</th>

                                        <th>Konsumen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pasinap as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['nmpasien'] ?></td>
                                            <td><?= $row['alamat'] ?></td>
                                            <td><?= $row['asal'] ?></td>
                                            <td><?= $row['nori'] ?></td>
                                            <td><?= $row['norj'] ?></td>
                                            <td><?= $row['nomrm'] ?></td>


                                            <!-- <td><?= $row['nmdokter'] ?></td> -->

                                            <td><?= $row['kdkelas'] ?></td>
                                            <td><?= $row['nmkamar'] ?></td>

                                            <td><?= $row['nmkons'] ?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="buttons">
                                                        <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                        <a href="<?= site_url('rawatinap/rawatinapDokter') ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                        <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>
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