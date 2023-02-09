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

<section class="header">
   <div class="section-body">
      <div class="row">
         <div class="col-12 md-6">
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

                     <th>NIK</th>
                     <th>Umur</th>
                     <th>Poliklinik</th>
                     <th>Kode Rumah Sakit</th>
                  </tr>

                  <tbody>
                     <tr>
                        <td><?php echo $this->session->userdata('nmpasien'); ?></td>
                        <td><?php echo $this->session->userdata('nomrm'); ?></td>
                        <td><?php echo $this->session->userdata('norj'); ?></td>
                        <td><?php echo $this->session->userdata('kelamin'); ?></td>

                        <td><?php echo $this->session->userdata('identitas'); ?></td>
                        <td><?php echo $this->session->userdata('umurthn'); ?> thn</td>
                        <td><?php echo $this->session->userdata('nama'); ?></td>
                        <td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Main content -->
<section class="content">
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
                        <div class="card-footer text-right">
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>