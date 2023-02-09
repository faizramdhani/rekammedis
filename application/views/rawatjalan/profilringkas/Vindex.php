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
                  <ul class="nav nav-pills" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Identitas Pasien</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-tab="mygroup-tab" href="#tab2">Riwayat Penyakit Kronis</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-tab="mygroup-tab" href="#tab3">Riwayat</a>
                     </li>
                  </ul>
                  <!-- tab 1 -->
                  <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
                     <div class="card-header">
                        <h4>IDENTITAS UMUM PASIEN</h4>
                     </div>
                     <div class="card-footer text-right">
                        <a class="btn btn-primary" href="<?= site_url('Cprofilringkas/create/') ?>"><i class="fas fa-plus"></i> Lengkapi Identitas</a>
                     </div>
                     <!-- card 1 -->
                     <div class="row">
                        <div class="card-body col-12">
                           <div class="row">
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Nama Lengkap</label>
                                       <div class="input-group">
                                             <input type="text" name="namalengkap" class="form-control phone-number" value="<?php echo $this->session->userdata('nmpasien'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>NIK</label>
                                       <div class="input-group">
                                             <input type="text" name="nik" class="form-control phone-number" value="<?php echo $this->session->userdata('identitas'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Tempat Lahir</label>
                                       <div class="input-group">
                                             <input type="text" name="tempatlahir" class="form-control phone-number" value="<?php echo $this->session->userdata('temlahir'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Jenis Kelamin</label>
                                       <div class="input-group">
                                             <input type="text" name="kelamin" class="form-control phone-number" value="<?php echo $this->session->userdata('kelamin'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Suku</label>
                                       <div class="input-group">
                                             <input type="text" name="suku" class="form-control phone-number" value="<?php echo $this->session->userdata('suku'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Nama Ibu Kandung</label>
                                       <div class="input-group">
                                             <input type="text" name="namaibukandung" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-6">
                                       <label>Nomor Rekam Medis</label>
                                       <div class="input-group">
                                             <input type="text" name="nomrm" class="form-control phone-number" value="<?php echo $this->session->userdata('nomrm'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Nomor Identitas Lain (Khusus WNA)</label>
                                       <div class="input-group">
                                             <input type="text" placeholder="Nomor Paspor / KITAS" name="noidentitaslain" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Tanggal Lahir</label>
                                       <div class="input-group">
                                             <input type="date" name="tgllahir" class="form-control phone-number" value="<?php echo $this->session->userdata('tgllahir'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Agama</label>
                                       <div class="input-group">
                                             <input type="text" name="agama" class="form-control phone-number" value="<?php echo $this->session->userdata('agama'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Bahasa yang Dikuasai</label>
                                       <div class="input-group">
                                             <input type="text" name="bahasa" class="form-control phone-number" readonly>
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
                                          <textarea class="form-control" name="alamatlengkap" readonly><?php echo $this->session->userdata('alamat'); ?></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="rt" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="rw" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa</label>
                                       <div class="input-group">
                                             <input type="text" name="kel" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="kec" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="kab" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="kodepos" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="provinsi" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="negara" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Alamat Domisili</label>
                                       <div class="input-group">
                                          <textarea class="form-control" name="alamatdom" readonly></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="rtdom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="rwdom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa Domisili</label>
                                       <div class="input-group">
                                             <input type="text" name="keldom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="kecdom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="kabdom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="kodeposdom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="provinsidom" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="negaradom" class="form-control phone-number" readonly>
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
                                             <input type="text" name="telepon" class="form-control phone-number" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Pendidikan</label>
                                       <div class="input-group">
                                             <input type="text" name="pendidikan" class="form-control phone-number" value="<?php echo $this->session->userdata('pendidikan'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Status Pernikahan</label>
                                       <div class="input-group">
                                             <input type="text" name="agama" class="form-control phone-number" value="<?php echo $this->session->userdata('statkawin'); ?>" readonly>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-8">
                                       <label>Nomor Telepon Selular Pasien</label>
                                       <div class="input-group">
                                             <input type="text" name="nomrm" class="form-control phone-number" value="<?php echo $this->session->userdata('telpon'); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Pekerjaan</label>
                                       <div class="input-group">
                                             <input type="text" name="pekerjaan" class="form-control phone-number" value="<?php echo $this->session->userdata('pekerjaan'); ?>" readonly>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md"></div>
                        <div class="col-lg-4 col-md-5 text-right">
                           <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab3">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                        </div>
                     </div>
                  </div>
                  
                  <!-- tab 2 -->
                  <div id="tab2" class="col-14" data-tab-group="mygroup-tab">
                     <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="card-body">
                              <!-- tabel 1 -->
                              <div class="table-responsive">
                                 <table class="table table-striped table-md">
                                    <tr>
                                       <th>
                                          <center>NO</center>
                                       </th>
                                       <th>
                                          <center>RIWAYAT PENYAKIT KRONIS</center>
                                       </th>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>1</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <center>2</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>


                                    </tr>
                                    <tr>
                                       <td>
                                          <center>3</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>4</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>5
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>
                                 </table>
                              </div>

                              <!-- tabel 2 -->
                              <div class="table-responsive">
                                 <table class="table table-striped table-md">
                                    <tr>
                                       <th>
                                          <center>NO</center>
                                       </th>
                                       <th>
                                          <center>ALERGI</center>
                                       </th>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>1</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <center>2</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>


                                    </tr>
                                    <tr>
                                       <td>
                                          <center>3</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>4</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>5
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
                        </div>

                        <!-- TABEL untuk anak anak -->
                        <div class="col-12 col-md-6 col-lg-6">
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-striped table-md">
                                    <tr>
                                       <th>
                                          <center><u>UNTUK ANAK ANAK</u></center>
                                          <center>RIWAYAT KELAHIRAN</center>
                                       </th>
                                    </tr>
                                    <tr>
                                       <td> <textarea class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                       <td><textarea class="form-control"></textarea></td>
                                    </tr>

                                 </table>
                              </div>

                              <div class="table-responsive">
                                 <table class="table table-striped table-md">
                                    <tr>
                                       <th>
                                       </th>
                                       <th>
                                          <center><u>IMUNISASI</u></center>
                                       </th>
                                    </tr>
                                    <tr>
                                       <td>
                                          <center>1</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <center>2</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>


                                    </tr>
                                    <tr>
                                       <td>
                                          <center>3</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>4</center>
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>5
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>6
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                       <td>
                                          <center>7
                                       </td>
                                       <td><input type="text" class="form-control"></td>
                                    </tr>

                                 </table>
                              </div>

                              <!-- button  -->
                              <div class="form-group row">
                                 <div class="col-md"></div>
                                 <!-- <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button> -->
                                 <div class="col-lg-4 col-md-5 text-right">
                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab2">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>

                  </div>

                  <!-- tab 3 -->
                  <div id="tab3" class="col-14" data-tab-group="mygroup-tab">
                     <div class=" row">
                        <div class="col-12">
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-striped table-md">
                                    <tr>
                                       <th>Tanggal</th>
                                       <th>Poliklinik</th>
                                       <th>Diagnosa</th>
                                       <th>Pemeriksaan Penunjang</th>
                                       <th>Riwayat Rawat Inap</th>
                                       <th>Pengobatan</th>
                                       <th>Tindakan Operasi</th>
                                       <th>TTD</th>

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
                                 <!-- button  -->
                                 <div class="form-group row">
                                    <div class="col-md"></div>
                                    <div class="col-lg-4 col-md-5 text-right">
                                       <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                       <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab2">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
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

</section>