<section class="section">
    <div class="section-header">
        <h5>Rawat Inap</h5>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pasien Rawat Inap</h4>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form class="form-horizontal style-form" id="pencarianantrian" method="post">

                                                <div class="table-responsive">
                                                    <p>Poliklinik :</p>
                                                    <select name="poli" id="poli" class="form-control" onchange="inputpoli()">
                                                        <option value="">---Pilih---</option>
                                                        <?php foreach ($poli as $key => $value) { ?>
                                                            <option value="<?php echo $value['kode1']; ?>" class="option">
                                                                <?php echo $value['nama']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="table-responsive" id='divkodepoli'>
                                                    <p>Dokter :</p>
                                                    <select name="dokterpoli" id="dokterpoli" class="form-control"></select>
                                                </div>
                                                <div class="table-responsive">
                                                    <p>Tanggal Perawatan :</p>
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="">
                                                </div>
                                                <br>
                                                <div class="table-responsive">
                                                    <button onclick="cariantrianpoli()" type="submit" class="btn btn-primary"><i class="fa fa-search"> Cari Pasien</i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No.Rawat Inap</th>
                                            <th>No.Rawat Jalan</th>
                                            <th>No MRM</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>Asal</th>
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

                                                <td><?= $row['tglmasuk'] ?></td>

                                                <td><?= $row['nori'] ?></td>
                                                <td><?= $row['norj'] ?></td>
                                                <td><?= $row['nomrm'] ?></td>
                                                <td><?= $row['nmpasien'] ?></td>
                                                <td><?= $row['alamat'] ?></td>
                                                <td><?= $row['asal'] ?></td>



                                                <td><?= $row['kdkelas'] ?></td>
                                                <td><?= $row['nmkamar'] ?></td>

                                                <td><?= $row['nmkons'] ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="buttons">
                                                            <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                            <a href="<?= site_url('rawatinap/rawatinapDokter/' . $row['nomrm']) ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                           
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