<section class="section">
    <div class="section-header">
        <h1>Asesment Awal Medis Kulit Kelamin</h1>
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
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Anamnesis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab2">Pemeriksaan Fisik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3">Pemeriksaan Penunjang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab4">Diagnosa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab5">Terapi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab6">Anjuran</a>
                            </li>
                        </ul>
                        <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>ANAMNESIS</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label for="anamnesis">Anamnesis</label>
                                            <input type="hidden" name="anamnesis" value="<?= set_value('anamnesis') ?>">
                                            <div id="anamnesis" style="min-height: 160px;"><?= set_value('anamnesis') ?></div>
                                        </div>
                                        <br>
                                        <div class="form">
                                            <label for="riwayat_penyakit">Riwayat Penyakit Dahulu</label>
                                            <input type="hidden" name="riwayat_penyakit" value="<?= set_value('riwayat_penyakit') ?>">
                                            <div id="riwayat_penyakit" style="min-height: 160px;"><?= set_value('riwayat_penyakit') ?></div>
                                        </div>
                                        <br>
                                        <div class="form">
                                            <label for="riwayat_alergi">Riwayat Alergi</label>
                                            <input type="hidden" name="riwayat_alergi" value="<?= set_value('riwayat_alergi') ?>">
                                            <div id="riwayat_alergi" style="min-height: 160px;"><?= set_value('riwayat_alergi') ?></div>
                                        </div>
                                        <br>
                                        <div class="form">
                                            <label for="obat_dikonsumsi">Obat yang dikonsumsi</label>
                                            <input type="hidden" name="obat_dikonsumsi" value="<?= set_value('obat_dikonsumsi') ?>">
                                            <div id="obat_dikonsumsi" style="min-height: 160px;"><?= set_value('obat_dikonsumsi') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>PEMERIKSAAN FISIK</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="card">
                                            <div class="form">
                                                <label>Pemeriksaan Fisik/Status Lokalis</label>
                                                <textarea class="form-control" name="pemeriksaan_fisik"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-body col-sm-3 col-md-6">
                                            <div class="gallery gallery-fw" data-item-height="500">
                                                <div class="gallery-item" data-image="<?= base_url() ?>/template/assets/img/assesment/anatomi.png" data-title="Image 1"></div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="card-body col-2">
                                                    <label>BB</label>
                                                    <div class="input-group">
                                                        <input type="text" name="bb" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            Kg
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>TB</label>
                                                    <div class="input-group">
                                                        <input type="text" name="tb" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            Cm
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <label>Kondisi Umum</label>
                                            <div class="row">
                                                <div class="card-body col-1">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="cukup" name="kondisi_umum" class="custom-control-input" value="Cukup">
                                                        <label class="custom-control-label" for="cukup">Cukup</label>
                                                    </div>
                                                </div>
                                                <div class="card-body col-1">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="lemah" name="kondisi_umum" class="custom-control-input" value="Lemah">
                                                        <label class="custom-control-label" for="lemah">Lemah</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <label>Tanda Vital</label>
                                            <div class="row">
                                                <div class="card-body col-3">
                                                    <label>TD</label>
                                                    <div class="input-group">
                                                        <input type="text" name="tds" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            /
                                                        </div>
                                                        </div>
                                                        <input type="text" name="tdd" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            mmHG
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>Suhu</label>
                                                    <div class="input-group">
                                                        <input type="text" name="suhu" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            °C
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>Nadi</label>
                                                    <div class="input-group">
                                                        <input type="text" name="nadi" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            x/mnt
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>RR</label>
                                                    <div class="input-group">
                                                        <input type="text" name="rr" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            x/mnt
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>GDA</label>
                                                    <div class="input-group">
                                                        <input type="text" name="gda" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            mg
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body col-2">
                                                    <label>Sp02</label>
                                                    <div class="input-group">
                                                        <input type="text" name="spo2" class="form-control phone-number">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            %
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>PEMERIKSAAN PENUNJANG</h4>
                                </div>
                                <div class="card-body">
                                    <div class="section-title mt-0">Pilih</div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Laboratorium</option>
                                            <option>Radiologi</option>
                                            <option>Obat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>DIAGNOSA</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form-group">
                                        <label>ICD-10 Primer</label>
                                        <select name="icdprimer" id="icdprimer" class="form-control select2">
                                            <option value="">---Pilih---</option>
                                            <?php foreach ($icd as $key => $value) { ?>
                                            <option value="<?php echo $value['code']; ?>" class="option"><?php echo $value['code']; ?> - <?php echo $value['name_en']; ?></option>
                                            <?php } ?> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>ICD-10 Sekunder</label>
                                        <select name="icdsekun" id="icdsekun" class="form-control select2">
                                            <option value="">---Pilih---</option>
                                            <?php foreach ($icd as $key => $value) { ?>
                                            <option value="<?php echo $value['code']; ?>" class="option"><?php echo $value['code']; ?> - <?php echo $value['name_en']; ?></option>
                                            <?php } ?> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa Kerja</label>
                                            <textarea class="form-control" name="diagnosa_kerja"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Diagnosa Banding</label>
                                            <textarea class="form-control" name="diagnosa_banding"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>TERAPI</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-sm-3 col-md-6">
                                        <div class="form">
                                            <label>Terapi</label>
                                            <textarea class="form-control" name="terapi"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body col-sm-3 col-md-6">
                                        <div class="form">
                                            <label>Tindakan/rencana tindakan</label>
                                            <textarea class="form-control" name="tindakan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4>ANJURAN</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-sm-3">
                                        <div class="form">
                                            <label>Anjuran Kontrol Kembali</label>
                                            <input type="date" name="tanggal" class="form-control date">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h7>Rawat Inap</h7>
                                        <div class="form">
                                            <label>Indikasi:</label>
                                            <textarea class="form-control" name="rawatinap_indikasi"></textarea>
                                        </div>
                                        <br>
                                        <h7>Rujuk Ke</h7>
                                        <div class="form">
                                            <label>Indikasi:</label>
                                            <textarea class="form-control" name="rujukke_indikasi"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>