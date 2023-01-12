 <div id="tab2" class="col-12 " data-tab-group="mygroup-tab">
     <div class="card">
         <div class="card-header">
             <h4>Diagnosa</h4>
         </div>
         <div class="card-body">

             <table class="table table-bordered table-md">
                 <tr>
                     <td>Diagnosa Kerja</td>
                     <td><b>DIAGNOSA</b></td>
                     <td><b>KODE ICD 100</b></td>

                 </tr>
                 <tr>
                     <th></th>
                     <td>Utama : <input type="text" name="futama"></td>
                     <td><input type="text" name="futama"></td>

                 </tr>
                 <tr>
                     <th></th>
                     <td>Sekunder : <input type="text" name="futama"></td>
                     <td><input type="text" name="futama"></td>

                 </tr>
             </table>

             <div class="row">
                 <div class="card-body col-12">
                     <div class="form">
                         <label>Kesimpulan</label>
                         <div class="row">
                             <div class="card-body">
                                 <div class="custom-control custom-radio">
                                     <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                     <label class="custom-control-label" for="customRadio1">Mandiri (20)</label>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="custom-control custom-radio">
                                     <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                     <label class="custom-control-label" for="customRadio2">Ketergantungan ringan (12-19)</label>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="custom-control custom-radio">
                                     <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                     <label class="custom-control-label" for="customRadio3">Ketergantungan sedang (9-11)</label>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="custom-control custom-radio">
                                     <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                     <label class="custom-control-label" for="customRadio4">Ketergantungan Berat(5-10)</label>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="custom-control custom-radio">
                                     <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                     <label class="custom-control-label" for="customRadio5">Ketergantungan Total (<5) </label> </div> </div> </div> </div> </div> </div> </div> </div> </div> <div id="tab6" class="col-14" data-tab-group="mygroup-tab">
                                             <div class="card">
                                                 <div class="card-header">
                                                     <h4>ASESMEN NYERI</h4>
                                                 </div>
                                                 <div class="row">
                                                     <div class="card-body col-12">
                                                         <div class="form">
                                                             <label>Nyeri ?</label>
                                                             <div class="row">
                                                                 <div class="card-body">
                                                                     <div class="custom-control custom-radio">
                                                                         <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                         <label class="custom-control-label" for="customRadio1">Ya</label>
                                                                     </div>
                                                                 </div>
                                                                 <div class="card-body">
                                                                     <div class="custom-control custom-radio">
                                                                         <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                         <label class="custom-control-label" for="customRadio2">Tidak</label>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="form-group">
                                                             <div class="row gutters-sm">
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/tidak-nyeri.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Tidak Nyeri</p>
                                                                     </label>
                                                                 </div>
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input" checked />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-ringan.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Nyeri Ringan</p>
                                                                     </label>
                                                                 </div>
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input" />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-mengganggu.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Nyeri yang Mengganggu</p>
                                                                     </label>
                                                                 </div>
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input" checked />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-menyusahkan.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Nyeri yang Menyusahkan</p>
                                                                     </label>
                                                                 </div>
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input" />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-hebat.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Nyeri Hebat</p>
                                                                     </label>
                                                                 </div>
                                                                 <div class="col-6 col-sm-4">
                                                                     <label class="imagecheck mb-4">
                                                                         <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input" />
                                                                         <figure class="imagecheck-figure">
                                                                             <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-sangat-hebat.png" alt="}" class="imagecheck-image">
                                                                         </figure>
                                                                         <p style="text-align: center;">Nyeri Sangat Hebat</p>
                                                                     </label>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="form">
                                                             <label>Nyeri ?</label>
                                                             <div class="row">
                                                                 <div class="card-body">
                                                                     <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/range-nyeri.png" alt="}" class="imagecheck-image">
                                                                     <input type="range" class="form-control">
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="form">
                                                             <label>Skala</label>
                                                             <div class="row">
                                                                 <div class="card-body">
                                                                     <div class="custom-control custom-radio">
                                                                         <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                         <label class="custom-control-label" for="customRadio1">Akut</label>
                                                                     </div>
                                                                 </div>
                                                                 <div class="card-body">
                                                                     <div class="custom-control custom-radio">
                                                                         <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                         <label class="custom-control-label" for="customRadio2">Kronis</label>
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
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>


 <div id="tab3" class="col-12" data-tab-group="mygroup-tab">
     <div class=" row">
         <div class="col-12">
             <div class="card">

                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered table-md">
                             <tr>
                                 <th>Tanggal</th>
                                 <th>Poliklinik</th>
                                 <th>Diagnosa</th>
                                 <th>Pemeriksaan Penunjang</th>
                                 <th>Riwayat Rawat Inap</th>
                                 <th>Pengobatan</th>
                                 <th>Tindakan Operasi</th>
                                 <th>TTD & Nama Dokter</th>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                             <tr>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                                 <td><input type="text" class="form-control"></td>
                             </tr>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>