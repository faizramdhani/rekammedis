<section class="section">
    <div class="section-header">
        <h1>Formulir Input Catatan Terintegrasi (SOAP)</h1>
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
                        <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
                            <div class="card-body">
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
                                <div class="card-header">
                                    <h4>SUBYEKTIF(S)</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <input type="hidden" name="subyektif" value="<?= set_value('subyektif') ?>">
                                            <div id="subyektif" style="min-height: 160px;"><?= set_value('subyektif') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>OBJEKTIF(O)</h4>
                                </div>
                                <div class="row">
                                    <div class="card col-3">
                                        <div class="card-body">
                                            <label>Kepala</label>
                                            <div class="input-group">
                                                <input type="text" name="kepala" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Rambut</label>
                                            <div class="input-group">
                                                <input type="text" name="rambut" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Langit - Langit</label>
                                            <div class="input-group">
                                                <input type="text" name="langitlangit" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Dada</label>
                                            <div class="input-group">
                                                <input type="text" name="dada" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Genital</label>
                                            <div class="input-group">
                                                <input type="text" name="genital" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Jari tangan</label>
                                            <div class="input-group">
                                                <input type="text" name="jaritangan" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Tungkai bawah</label>
                                            <div class="input-group">
                                                <input type="text" name="tungkaibawah" class="form-control phone-number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-body">
                                            <label>Mata</label>
                                            <div class="input-group">
                                                <input type="text" name="mata" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Bibir</label>
                                            <div class="input-group">
                                                <input type="text" name="bibir" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Leher</label>
                                            <div class="input-group">
                                                <input type="text" name="leher" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Payudara</label>
                                            <div class="input-group">
                                                <input type="text" name="payudara" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Anus/Dubur</label>
                                            <div class="input-group">
                                                <input type="text" name="anus" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Kuku tangan</label>
                                            <div class="input-group">
                                                <input type="text" name="kukutangan" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Jari kaki</label>
                                            <div class="input-group">
                                                <input type="text" name="jarikaki" class="form-control phone-number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-body">
                                            <label>Telinga</label>
                                            <div class="input-group">
                                                <input type="text" name="telinga" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Gigi Geligi</label>
                                            <div class="input-group">
                                                <input type="text" name="gigigeligi" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Tenggorokan</label>
                                            <div class="input-group">
                                                <input type="text" name="tenggorokan" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Punggung</label>
                                            <div class="input-group">
                                                <input type="text" name="punggung" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Lengan atas</label>
                                            <div class="input-group">
                                                <input type="text" name="lenganatas" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Persendian tangan</label>
                                            <div class="input-group">
                                                <input type="text" name="persendiantangan" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Kuku kaki</label>
                                            <div class="input-group">
                                                <input type="text" name="kukukaki" class="form-control phone-number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-body">
                                            <label>Hidung</label>
                                            <div class="input-group">
                                                <input type="text" name="hidung" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Lidah</label>
                                            <div class="input-group">
                                                <input type="text" name="lidah" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Tonsil</label>
                                            <div class="input-group">
                                                <input type="text" name="tonsil" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Perut</label>
                                            <div class="input-group">
                                                <input type="text" name="perut" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Lengan bawah</label>
                                            <div class="input-group">
                                                <input type="text" name="lenganbawah" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Tungkai atas</label>
                                            <div class="input-group">
                                                <input type="text" name="tungkaiatas" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <label>Persendian kaki</label>
                                            <div class="input-group">
                                                <input type="text" name="persendiankaki" class="form-control phone-number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>PENILAIAN(A)</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <input type="hidden" name="penilaian" value="<?= set_value('penilaian') ?>">
                                            <div id="penilaian" style="min-height: 160px;"><?= set_value('penilaian') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>ICD-10</h4>
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
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>PERENCANAAN(P)</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <input type="hidden" name="perencanaan" value="<?= set_value('perencanaan') ?>">
                                            <div id="perencanaan" style="min-height: 160px;"><?= set_value('perencanaan') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4>INSTRUKSI(I)</h4>
                                </div>
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label>Intruksi Perawat</label>
                                            <textarea class="form-control" name="rawatinap_indikasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label>Resep Obat</label>
                                            <textarea class="form-control" name="rawatinap_indikasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label>Penunjang Medis Laboratorium</label>
                                            <textarea class="form-control" name="rawatinap_indikasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label>Penunjang Medis Radiologi</label>
                                            <textarea class="form-control" name="rawatinap_indikasi"></textarea>
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