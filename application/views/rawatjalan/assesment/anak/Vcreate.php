<section class="section">
    <div class="section-header">
        <h1>Asesment Awal Medis Anak</h1>
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
</section>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link show active" data-tab="mygroup-tab" href="#tab1" aria-selected="true">Anamnesis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-tab="mygroup-tab" href="#tab2" aria-selected="false">Pemeriksaan Fisik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-tab="mygroup-tab" href="#tab3" aria-selected="false">Pemeriksaan Spesialistik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-tab="mygroup-tab" href="#tab4" aria-selected="false">Diagnosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-tab="mygroup-tab" href="#tab5" aria-selected="false">Terapi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-tab="mygroup-tab" href="#tab6" aria-selected="false">Anjuran</a>
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
                                        <label for="riwayat_kandungan">Riwayat dalam Kandungan</label>
                                        <input type="hidden" name="riwayat_kandungan" value="<?= set_value('riwayat_kandungan') ?>">
                                        <div id="riwayat_kandungan" style="min-height: 160px;"><?= set_value('riwayat_kandungan') ?></div>
                                    </div>
                                    <br>
                                    <div class="form">
                                        <label for="riwayat_kelahiran">Riwayat Kelahiran</label>
                                        <input type="hidden" name="riwayat_kelahiran" value="<?= set_value('riwayat_kelahiran') ?>">
                                        <div id="riwayat_kelahiran" style="min-height: 160px;"><?= set_value('riwayat_kelahiran') ?></div>
                                    </div>
                                    <br>
                                    <div class="form">
                                        <label for="riwayat_tumbuh">Riwayat Tumbuh Kembang</label>
                                        <input type="hidden" name="riwayat_tumbuh" value="<?= set_value('riwayat_tumbuh') ?>">
                                        <div id="riwayat_tumbuh" style="min-height: 160px;"><?= set_value('riwayat_tumbuh') ?></div>
                                    </div>
                                    <br>
                                    <div class="form">
                                        <label for="riwayat_imunisasi">Riwayat Imunisasi</label>
                                        <input type="hidden" name="riwayat_imunisasi" value="<?= set_value('riwayat_imunisasi') ?>">
                                        <div id="riwayat_imunisasi" style="min-height: 160px;"><?= set_value('riwayat_imunisasi') ?></div>
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
                                                <label>TB/PB</label>
                                                <div class="input-group">
                                                    <input type="text" name="tb" class="form-control phone-number">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        Cm
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <label>Lingkar Kepala</label>
                                                <div class="input-group">
                                                    <input type="text" name="lingkar_kepala" class="form-control phone-number">
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
                                    <div class="card">
                                        <label>Kepala Leher</label>
                                        <div class="row">
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="normal" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="normal">Normal</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="anemis" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="anemis">Anemis</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="icterus" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="icterus">Icterus</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cyanosis" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="cyanosis">Cyanosis</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="dypsnea" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="dypsnea">Dypsnea</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="kelenjargetah" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="kelenjargetah">Pembesaran Kelenjar Getah Bening</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="kepalalainnya" onclick="javascript:kepalaleherCheck();" name="kepala_leher" class="custom-control-input">
                                                    <label class="custom-control-label" for="kepalalainnya">Lainnya</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="kepala_leherlainnya" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="kepala_leher" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <label>Thorax</label>
                                        <div class="row">
                                            <div class="card-body col-2">
                                                <h6>- Cor</h6>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="tunggal" onclick="javascript:corCheck();" name="cor" class="custom-control-input">
                                                    <label class="custom-control-label" for="tunggal">S1-S2 tunggal</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="murmur" onclick="javascript:corCheck();" name="cor" class="custom-control-input">
                                                    <label class="custom-control-label" for="murmur">Murmur</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="gallop" onclick="javascript:corCheck();" name="cor" class="custom-control-input">
                                                    <label class="custom-control-label" for="gallop">Gallop</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="corlainnya" onclick="javascript:corCheck();" name="cor" class="custom-control-input">
                                                    <label class="custom-control-label" for="corlainnya">Lainnya</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="cor2lainnya" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="cor" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-2">
                                                <h6>- Pulmo</h6>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="ves" name="pulmo" class="custom-control-input">
                                                    <label class="custom-control-label" for="ves">Ves/ves</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="ronchi" name="pulmo" class="custom-control-input">
                                                    <label class="custom-control-label" for="ronchi">Ronchi</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="wheezing" name="pulmo" class="custom-control-input">
                                                    <label class="custom-control-label" for="wheezing">Wheezing</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="pulmolainnya" onclick="javascript:pulmoCheck();" name="pulmo" class="custom-control-input">
                                                    <label class="custom-control-label" for="pulmolainnya">Lainnya</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="pulmo2lainnya" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="cor" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <label>Abdomen</label>
                                        <div class="row">
                                            <div class="card-body col-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="supel" name="abdomen" class="custom-control-input">
                                                    <label class="custom-control-label" for="supel">Supel</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="meteorismus" name="abdomen" class="custom-control-input">
                                                    <label class="custom-control-label" for="meteorismus">Meteorismus</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-3">
                                                <div class="row">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="hepar" name="abdomen" class="custom-control-input">
                                                        <label class="custom-control-label" for="hepar">Hepar/Lien</label>
                                                    </div>
                                                    <div class="form" id="hepartext" style="margin-left: 10px; visibility:hidden">
                                                        <input type="text" name="abdomen" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body col-3">
                                                <div class="row">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="bisingusus" name="abdomen" class="custom-control-input">
                                                        <label class="custom-control-label" for="bisingusus">Bising usus</label>
                                                    </div>
                                                    <div class="form" id="bisingusustext" style="margin-left: 10px; visibility:hidden">
                                                        <input type="text" name="abdomen" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body col-3">
                                                <div class="row">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="abdomenlain" name="abdomen" class="custom-control-input">
                                                        <label class="custom-control-label" for="abdomenlain">Lainnya</label>
                                                    </div>
                                                    <div class="form" id="abdomenlainnya" style="margin-left: 10px; visibility:hidden">
                                                        <input type="text" name="abdomen" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <label>Ekstremitas</label>
                                        <div class="row">
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="oedem" onclick="javascript:ekstremitasCheck();" name="ekstremitas" class="custom-control-input">
                                                    <label class="custom-control-label" for="oedem">Oedem</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="akral" onclick="javascript:ekstremitasCheck();" name="ekstremitas" class="custom-control-input">
                                                    <label class="custom-control-label" for="akral">Akral</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="ekstremitaslainnya" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="ekstremitas" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <label>Alat Kelamin</label>
                                        <div class="row">
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="normalkelamin" name="alat_kelamin" class="custom-control-input">
                                                    <label class="custom-control-label" for="normalkelamin">Normal</label>
                                                </div>
                                            </div>
                                            <div class="card-body col-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="abnormalkelamin" onclick="javascript:alatkelaminCheck();" name="alat_kelamin" class="custom-control-input">
                                                    <label class="custom-control-label" for="abnormalkelamin">Abnormal</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="alatkelaminlainnya" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="alat_kelamin" class="form-control">
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
                                <h4>PEMERIKSAAN SPESIALISTIK</h4>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Riwayat Penggunaan Obat</div>
                                <div class="card">
                                    <div class="card-body">
                                        <label>Nama Obat</label>
                                        <div class="input-group">
                                            <input type="text" name="namaobat" class="form-control phone-number">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <label>Dosis</label>
                                        <div class="input-group">
                                            <input type="text" name="dosis" class="form-control phone-number">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <label>Waktu Penggunaan</label>
                                        <div class="input-group">
                                            <input type="text" name="waktupenggunaan" class="form-control phone-number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0">Pilih Pemeriksaan Penunjang</div>
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