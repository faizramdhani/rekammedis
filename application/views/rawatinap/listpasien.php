<section class="section">
    <div class="section-header">
        <h1>Dokter Rawat Inap</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url('dashboard/') ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('rawatjalan/listpasien') ?>">Rawat Inap</a></div>

        </div>
    </div>
</section>

<section class="content">
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-panel">
                    <form class="form-horizontal style-form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <form class="form-horizontal style-form" id="pencarianantrian" method="post">
                                                    <label class="control-label col-md-10">
                                                        <h4>Daftar Pasien Rawat Inap</h4>
                                                    </label>
                                                    <div class="table-responsive">
                                                        <p>Poliklinik :</p>
                                                        <select name="poli" id="poli" class="form-control" onchange="inputpoli()">
                                                            <option value="">---Pilih---</option>
                                                            <?php foreach ($poli as $key => $value) { ?>
                                                                <option value="<?php echo $value['kode1']; ?>" class="option"><?php echo $value['nama']; ?></option>
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

                            <!-- table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4><?php echo date('l jS \of F Y'); ?></h4>
                                            <div class="card-header-action">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-md" id="table1">
                                                    <tr>
                                                        <th>Nomor</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Nomor Rawat Jalan</th>
                                                        <th>Nomor MR</th>
                                                        <th>Konsumen</th>
                                                        <th>Umur</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Tindakan</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Irwansyah Saputra</td>
                                                        <td>000000</td>
                                                        <td>123456</td>
                                                        <td>BPJS</td>
                                                        <td>12 TAHUN</td>
                                                        <td>Laki - laki</td>

                                                        <td>
                                                            <div class="row">
                                                                <div class="buttons">
                                                                    <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> -->
                                                                    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                                    <a href="<?= site_url('rawatinap/rawatinapDokter') ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                                    <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Hasan Basri</td>
                                                        <td>000000</td>
                                                        <td>123456</td>
                                                        <td>BPJS</td>
                                                        <td>12 TAHUN</td>
                                                        <td>Laki - laki</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="buttons">
                                                                    <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> -->
                                                                    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                                    <a href="<?= site_url('rawatinap/rawatinapDokter') ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                                    <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Kusnadi</td>
                                                        <td>000000</td>
                                                        <td>123456</td>
                                                        <td>BPJS</td>
                                                        <td>12 TAHUN</td>
                                                        <td>Laki - laki</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="buttons">
                                                                    <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> -->
                                                                    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                                    <a href="<?= site_url('rawatinap/rawatinapDokter') ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                                    <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Rizal Fakhri</td>
                                                        <td>000000</td>
                                                        <td>123456</td>
                                                        <td>BPJS</td>
                                                        <td>12 TAHUN</td>
                                                        <td>Laki - laki</td>


                                                        <td>
                                                            <div class="row">
                                                                <div class="buttons">
                                                                    <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> -->
                                                                    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                                    <a href="<?= site_url('rawatinap/rawatinapDokter') ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                                    <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="card-footer text-right">
                                            <nav class="d-inline-block">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>