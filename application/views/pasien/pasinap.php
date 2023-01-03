<section class="section">
    <div class="section-header">
        <h1>Pasien</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Pasien Rawat Inap</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>

                                        <th>Tanggal Masuk</th>
                                        <th>Jam Masuk</th>
                                        <th>No.Rawat Inap</th>
                                        <th>No.Rawat Jalan</th>
                                        <th>No MRM</th>
                                        <th>Nama Pasien</th>
                                        <th>Alamat</th>
                                        <th>Asal</th>

                                        <th>Nama Dokter</th>


                                        <th>Kode Kelas</th>
                                        <th>Nama Kamar</th>
                                        <th>No Bed</th>



                                        <th>Nama Konsumen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pasinap as $row) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>

                                            <td><?= $row['tglmasuk'] ?></td>
                                            <td><?= $row['jam'] ?></td>
                                            <td><?= $row['nori'] ?></td>
                                            <td><?= $row['norj'] ?></td>
                                            <td><?= $row['nomrm'] ?></td>
                                            <td><?= $row['nmpasien'] ?></td>
                                            <td><?= $row['alamat'] ?></td>
                                            <td><?= $row['asal'] ?></td>

                                            <td><?= $row['nmdokter'] ?></td>

                                            <td><?= $row['kdkelas'] ?></td>
                                            <td><?= $row['nmkamar'] ?></td>
                                            <td><?= $row['nobed'] ?></td>



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