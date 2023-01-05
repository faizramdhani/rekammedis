<section class="section">
    <div class="section-header">
        <h1>Master</h1>
    </div>

    <!-- Main Content -->
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Dokter</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Dokter</th>
                                <th>Nama Dokter</th>
                                <th>Alamat</th>
                                <th>Kode Ahli</th>
                                <th>Spesialis</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $dktr) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dktr['kddokter'] ?></td>
                                    <td><?= $dktr['nmdokter'] ?></td>
                                    <td><?= $dktr['alamat'] ?></td>
                                    <td><?= $dktr['kdahli'] ?></td>
                                    <td><?= $dktr['nmahli'] ?></td>



                                    <!-- <td align="center">
                                        <form method="POST" action="text-center">
                                            <span data-target="" data-toggle="modal" data-id="">
                                                <a class="btn btn-primary btn-action mr-1" title="Edit" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                                            </span>
                                            <a class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Hapus" data-confirm="Hapus Data|Apakah anda ingin menghapus data ini?" data-confirm-yes="window.location.href = ''" ;><i class="fas fa-trash"></i></a>
                                            <input type="hidden" name="id" value="">
                                            <button type="submit" class="btn btn-info btn-action mr-1" title="Detail" data-toggle="tooltip" name="submit"><i class="fas fa-info-circle"></i></button>
                                        </form>
                                    </td> -->
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
</section>