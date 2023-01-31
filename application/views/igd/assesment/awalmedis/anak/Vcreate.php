<section class="section">
    <div class="section-header">
        <h5>Asessment Awal Medis</h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
</section>


<!-- Main content -->
<section class="content">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Identitas Pasien</h4>
                    </div>
                    <table class="table table-md">
                        <tr>
                            <th>Nama </th>
                            <th>No. RM</th>
                            <th>No. RJ</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                        <tr>
                            <td><?php echo $this->session->userdata('nmpasien'); ?></td>
                            <td><?php echo $this->session->userdata('nomrm'); ?></td>
                            <td><?php echo $this->session->userdata('norj'); ?></td>
                            <td><?php echo $this->session->userdata('kelamin'); ?></td>

                        </tr>
                        <tr>
                    </table>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Pasien</h4>
                    </div>
                    <table class="table table-md">
                        <tr>
                            <th>NIK</th>
                            <th>Umur</th>
                            <th>Poliklinik</th>
                            <th>Kode Rumah Sakit</th>
                        </tr>
                        <tr>
                            <td><?php echo $this->session->userdata('identitas'); ?></td>
                            <td><?php echo $this->session->userdata('umurthn'); ?></td>
                            <td><?php echo $this->session->userdata('nama'); ?></td>
                            <td></td>

                        </tr>
                        <tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1" role="tab" aria-selected="true">Anamnesis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab2" role="tab" aria-selected="false">Pemeriksaan Fisik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3" role="tab" aria-selected="false">Pemeriksaan Penunjang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab4" role="tab" aria-selected="false">Rencana Asuhan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab5" role="tab" aria-selected="false">Intruksi Tindak Lanjut</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab6" role="tab" aria-selected="false">Kondisi saat keluar</a>
                            </li>
                        </ul>

                        <form action="<?php echo site_url('Cassessmentawalmedisigd/insert') ?>" method="post" enctype="multipart/form-data">
                            <!-- tab 1 -->
                            <div id="tab1" class="col-12 active" data-tab-group="mygroup-tab">
                                <div class="form-group-row">
                                    <div class="col-12">
                                        <div class="card-body col-12">
                                            <div class="form-group">
                                                <label for="keluhanutama">Keluhan Utama</label>
                                                <textarea class="form-control" name="keluhanutama" rows="1"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="riwayatpenyakit">Riwayat Penyakit</label>
                                                <textarea class="form-control" name="riwayatpenyakit" rows="1"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="riwayatalergi">Riwayat Alergi</label>
                                                <textarea class="form-control" name="riwayatalergi" rows="1" placeholder="Obat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="pengobatan">Riwayat Pengobatan</label>
                                                <textarea class="form-control" name="pengobatan" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- tab 2 -->
                            <div id="tab2" class="col-12" data-tab-group="mygroup-tab">
                                <div class="row">
                                    <div class="card-body col-sm-3 col-md-6">
                                        <div class="form">
                                            <label>Keadaan Umum</label>
                                            <textarea class="form-control" name="keadaanumum"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>GCS</label>
                                            <textarea class="form-control" name="keadaan_gcs"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Kepala</label>
                                            <textarea class="form-control" name="keadaan_kepala"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Leher</label>
                                            <textarea class="form-control" name="keadaan_leher"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Thorax</label>
                                            <textarea class="form-control" name="keadaan_thorax"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Abdomen & Pelvis</label>
                                            <textarea class="form-control" name="keadaan_abdomen"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Punggung dan Pinggang</label>
                                            <textarea class="form-control" name="keadaan_punggung"></textarea>
                                        </div>
                                        <div class="form">
                                            <label>Ekstrimitas</label>
                                            <textarea class="form-control" name="keadaan_ekstrimitas"></textarea>
                                        </div>

                                    </div>

                                    <div class="card-body col-sm-3 col-md-6">
                                        <div class="gallery gallery-fw" data-item-height="500">
                                            <div class="gallery-item" data-image="http://localhost/e-rekammedis//template/assets/img/assesment/fisik.png" width="205" height="205" data-title="fisik"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 3 -->
                            <div id="tab3" class="col-12" data-tab-group="mygroup-tab">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0">Hasil Pemeriksaan Penunjang</th>
                                            <th style="border:0"></th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th style="border:0">Laboratorium</th>
                                            <th style="border:0">Radiologi</th>
                                            <th style="border:0">EKG</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                </table>

                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0"></th>
                                            <th style="border:0"></th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th style="border:0">Diagnosa Kerja dan Diagnosa Banding</th>
                                            <th style="border:0"></th>
                                            <th style="border:0"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <div for="sasaran">Sasaran</div>
                                    <input type="text" id="sasaran" rows="2" class="form-control" placeholder="">
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-2">Hasil Skrining</div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="hasildilayani">
                                            <label class="form-check-label" for="hasildilayani">
                                                Dapat dilayani
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="hasiltidakdialayani">
                                            <label class="form-check-label" for="hasiltidakdialayani">
                                                Tidak dilayani
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="lainnya" placeholder="Lainnya">
                                    </div>

                                </div>
                            </div>

                            <!-- tab 4 -->
                            <div id="tab4" class="col-12" data-tab-group="mygroup-tab">
                                <div class="form-group-row">
                                    <div class="col-12">
                                        <div class="card-body col-12">

                                            <div class="form-group">
                                                <label for="keluhan">Terapi</label>
                                                <textarea class="form-control" id="terapi" rows="1"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="tindakan">Tindakan</label>
                                                <textarea class="form-control" id="tindakan" rows="1"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="diet">Diet</label>
                                                <textarea class="form-control" id="diet" rows="1"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 5 -->
                            <div id="tab5" class="col-12" data-tab-group="mygroup-tab">
                                <div class="form-gorup-row">
                                    <label class="col-sm-3">1. Rawat Inap, indikasi</label>
                                    <div class="row">
                                        <div class="card-body col-sm-5">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Ya">Preventif</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Paliatif</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Kuratif</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Rehabilitatif</label>
                                                            <div class="card-footer text-center">
                                                                <a class="btn btn-primary" href="<?= site_url('Cassessmentawalmedisigd/permintaanrawatinap') ?>"><i class="fas fa-plus"></i> Permintaan Rawat Inap</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-gorup-row">
                                    <label class="col-sm-3">2. Pulang atas persetujuan dokter</label>
                                    <div class="row">
                                        <div class="card-body col-sm-5">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Ya">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Tidak</label>
                                                            <div class="card-footer text-center">
                                                                <a class="btn btn-primary" href="<?= site_url('Cassessmentawalmedisigd/resumemedis') ?>"><i class="fas fa-plus"></i> Resume Medis</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-gorup-row">
                                    <label class="col-sm-3">3. Pulang karena meninggal</label>
                                    <div class="row">
                                        <div class="card-body col-sm-5">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Ya">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Tidak</label>
                                                            <div class="card-footer text-center">
                                                                <a class="btn btn-primary" href="<?= site_url('Cassessmentawalmedisigd/suratkematian') ?>"><i class="fas fa-plus"></i> Surat Kematian</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-gorup-row">
                                    <label class="col-sm-3">4. Dirujuk ke</label>
                                    <div class="row">
                                        <div class="card-body col-sm-5">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Ya">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="Tidak">Tidak</label>
                                                            <div class="card-footer text-center">
                                                                <a class="btn btn-primary" href="<?= site_url('Cassessmentawalmedisigd/suratrujukan') ?>"><i class="fas fa-plus"></i> Surat Rujukan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-gorup-row">
                                    <label class="col-sm-3">5. Pulang atas permintaan sendiri</label>
                                    <div class="row">
                                        <div class="card-body col-sm-5">
                                            <div class="form">
                                                <div class="form-group row">
                                                    <div for="kontroltanggal" class="col-sm-4 col-form-label">Kontrol tanggal</div>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control">
                                                    </div>

                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="Tidak">Ke</label>
                                                    <div class="card-footer text-center">
                                                        <a class="btn btn-primary" href="<?= site_url('Cassessmentawalmedisigd/penolakanrawatinap') ?>"><i class="fas fa-plus"></i> Penolakan rawat inap</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 6 -->
                            <div id="tab6" class="col-12" data-tab-group="mygroup-tab">
                                <div class="row">
                                    <div class="card-body col-sm-3 col-md-6">
                                        <div class="form-group-row">
                                            <label>Keadaan Umum</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group-row">
                                            <label>Kesadaran</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group-row">
                                            <div class="card-body col-12">
                                                <!-- <table class="table col-12">
                                                    <tr>
                                                        <td>Tanda Tanda Vital</td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <label for="tandavital" class="col-3">
                                                                    <input type="text" class="form-control" id="tandavital">
                                                                </label>

                                                                <label>TD</label>
                                                                <label class="col-2">
                                                                    <input type="text" class="form-control">
                                                                </label>

                                                                <label>/</label>
                                                                <label class="col-2">
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                                <label>mmHg</label>

                                                                <label class="col-2">
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                                <label>x/menit</label>

                                                                <label>RR</label>
                                                                <label class="col-2">
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                                <label>x/menit</label>

                                                                <label>S</label>
                                                                <label class="col-2">
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                                <label>°C</label>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </table> -->
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Tanda Vital</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">TD</span>
                                                    </div>
                                                    <input type="text" class="form-control col-sm-3" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <span class="input-group-text" id="basic-addon1">/</span>
                                                    <input type="text" class="form-control col-sm-3" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <span class="input-group-text" id="basic-addon1">mmHg</span>
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">N</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">x/menit</span>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">RR</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">x/menit</span>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">S</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Celcius</span>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div for="tanggalkeluar" class="col-sm-4 col-form-label">Tanggal Keluar</div>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div for="jamkeluar" class="col-sm-4 col-form-label">Jam Keluar</div>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
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
    </div>

</section>