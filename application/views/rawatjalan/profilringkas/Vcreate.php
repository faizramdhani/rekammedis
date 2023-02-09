<section class="section">
   <div class="section-header">
      <h5>Profil Ringkas</h5>
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

<section class="content">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <form action="<?php echo site_url('Cprofilringkas/insert') ?>" method="post" enctype="multipart/form-data" >
                  <!-- tab 1 -->
                  <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
                     <div class="card-header">
                        <h4>IDENTITAS UMUM PASIEN</h4>
                     </div>
                     <!-- card 1 -->
                     <div class="row">
                        <div class="card-body col-12">
                           <div class="row">
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Nama Lengkap</label>
                                       <div class="input-group">
                                             <input type="text" name="namalengkap" class="form-control phone-number" value="<?php echo $this->session->userdata('nmpasien'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>NIK</label>
                                       <div class="input-group">
                                             <input type="text" name="nik" class="form-control phone-number" value="<?php echo $this->session->userdata('identitas'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Tempat Lahir</label>
                                       <div class="input-group">
                                             <input type="text" name="tempatlahir" class="form-control phone-number" value="<?php echo $this->session->userdata('temlahir'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Jenis Kelamin</label>
                                       <div class="input-group">
                                       <select name="kelamin" class="form-control">
                                          <option value="Tidak Diketahui">Tidak diketahui</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                          <option value="Tidak dapat ditentukan">Tidak dapat ditentukan</option>
                                          <option value="Tidak mengisi">Tidak mengisi</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Suku</label>
                                       <div class="input-group">
                                             <input type="text" name="suku" class="form-control phone-number" value="<?php echo $this->session->userdata('suku'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Nama Ibu Kandung</label>
                                       <div class="input-group">
                                             <input type="text" name="namaibukandung" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-6">
                                       <label>Nomor Rekam Medis</label>
                                       <div class="input-group">
                                             <input type="text" name="nomrm" class="form-control phone-number" value="<?php echo $this->session->userdata('nomrm'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Nomor Identitas Lain (Khusus WNA)</label>
                                       <div class="input-group">
                                             <input type="text" placeholder="Nomor Paspor / KITAS" name="noidentitaslain" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Tanggal Lahir</label>
                                       <div class="input-group">
                                             <input type="date" name="tgllahir" class="form-control phone-number" value="<?php echo $this->session->userdata('tgllahir'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Agama</label>
                                       <div class="input-group">
                                       <select name="agama" class="form-control">
                                          <option value="Islam">Islam</option>
                                          <option value="Kristen (Protestan)">Kristen (Protestan)</option>
                                          <option value="Katolik">Katolik</option>
                                          <option value="Hindu">Hindu</option>
                                          <option value="Budha">Budha</option>
                                          <option value="Konghucu">Konghucu</option>
                                          <option value="Penghayat">Penghayat</option>
                                          <option value="Lain-lain">Lain-lain</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Bahasa yang Dikuasai</label>
                                       <div class="input-group">
                                             <input type="text" name="bahasa" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-header">
                        <h4>ALAMAT</h4>
                     </div>
                     <!-- card 1 -->
                     <div class="row">
                        <div class="card-body col-12">
                           <div class="row">
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Alamat Lengkap</label>
                                       <div class="input-group">
                                          <textarea class="form-control" name="alamatlengkap"><?php echo $this->session->userdata('alamat'); ?></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="rt" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="rw" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa</label>
                                       <div class="input-group">
                                             <input type="text" name="kel" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="kec" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="kab" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="kodepos" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="provinsi" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="negara" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Alamat Domisili</label>
                                       <div class="input-group">
                                          <textarea class="form-control" name="alamatdom"></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="rtdom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="rwdom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa Domisili</label>
                                       <div class="input-group">
                                             <input type="text" name="keldom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="kecdom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="kabdom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="kodeposdom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="provinsidom" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="negaradom" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="card-body col-12">
                           <div class="row">
                                 <div class="card col-6">
                                    <div class="card-body col-8">
                                       <label>Nomor Telepon Rumah / Tempat Tinggal</label>
                                       <div class="input-group">
                                             <input type="text" name="telponrumah" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Pendidikan</label>
                                       <div class="input-group">
                                       <select name="pendidikan" class="form-control">
                                          <option value="Tidak sekolah">Tidak sekolah</option>
                                          <option value="SD">SD</option>
                                          <option value="SLTP sederajat">SLTP sederajat</option>
                                          <option value="SLTA sederajat">SLTA sederajat</option>
                                          <option value="D1-D3 sederajat">D1-D3 sederajat</option>
                                          <option value="D4">D4</option>
                                          <option value="S1">S1</option>
                                          <option value="S2">S2</option>
                                          <option value="S3">S3</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Status Pernikahan</label>
                                       <div class="input-group">
                                       <select name="statkawin" class="form-control">
                                          <option value="Belum Kawin">Belum Kawin</option>
                                          <option value="Kawin">Kawin</option>
                                          <option value="Cerai Hidup">Cerai Hidup</option>
                                          <option value="Cerai Mati">Cerai Mati</option>
                                       </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-8">
                                       <label>Nomor Telepon Selular Pasien</label>
                                       <div class="input-group">
                                             <input type="text" name="telpon" class="form-control phone-number" value="<?php echo $this->session->userdata('telpon'); ?>">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Pekerjaan</label>
                                       <div class="input-group">
                                             <input type="text" name="pekerjaan" class="form-control phone-number" value="<?php echo $this->session->userdata('pekerjaan'); ?>">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-footer text-right">
                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>