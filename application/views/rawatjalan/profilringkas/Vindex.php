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

<section class="content">
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

               <tbody>
                  <tr>
                     <td><?php echo $this->session->userdata('nmpasien'); ?></td>
                     <td><?php echo $this->session->userdata('nomrm'); ?></td>
                     <td><?php echo $this->session->userdata('norj'); ?></td>
                     <td><?php echo $this->session->userdata('kelamin'); ?></td>
                  </tr>
               </tbody>
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
                  <td>
                     <!-- kode rumah sakit tidak ditemukan -->
                  </td>

               </tr>
               <tr>
            </table>

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
                     <!-- card 1 -->
                     <div class="row">
                        <div class="card-body col-12">
                           <div class="row">
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Nama Lengkap</label>
                                       <div class="input-group">
                                             <input type="text" name="namalengkap" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>NIK</label>
                                       <div class="input-group">
                                             <input type="text" name="nik" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Tempat Lahir</label>
                                       <div class="input-group">
                                             <input type="text" name="tempatlahir" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Jenis Kelamin</label>
                                       <div class="input-group">
                                       <select class="form-control">
                                          <option>Tidak diketahui</option>
                                          <option>Laki-laki</option>
                                          <option>Perempuan</option>
                                          <option>Tidak dapat ditentukan</option>
                                          <option>Tidak mengisi</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Suku</label>
                                       <div class="input-group">
                                             <input type="text" name="suku" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <label>Nama Ibu Kandung</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-6">
                                       <label>Nomor Rekam Medis</label>
                                       <div class="input-group">
                                             <input type="text" name="nomrm" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Nomor Identitas Lain (Khusus WNA)</label>
                                       <div class="input-group">
                                             <input type="text" placeholder="Nomor Paspor / KITAS" name="bibir" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Tanggal Lahir</label>
                                       <div class="input-group">
                                             <input type="date" name="leher" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Agama</label>
                                       <div class="input-group">
                                       <select class="form-control">
                                          <option>Islam</option>
                                          <option>Kristen (Protestan)</option>
                                          <option>Katolik</option>
                                          <option>Hindu</option>
                                          <option>Budha</option>
                                          <option>Konghucu</option>
                                          <option>Penghayat</option>
                                          <option>Lain-lain</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Bahasa yang Dikuasai</label>
                                       <div class="input-group">
                                             <input type="text" name="anus" class="form-control phone-number">
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
                                          <textarea class="form-control" name="alamatlengkap"></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="nik" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="tempatlahir" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa</label>
                                       <div class="input-group">
                                             <input type="text" name="suku" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body">
                                       <label>Alamat Domisili</label>
                                       <div class="input-group">
                                          <textarea class="form-control" name="alamatlengkap"></textarea>
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Tetangga / RT</label>
                                       <div class="input-group">
                                             <input type="text" name="nik" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-5">
                                       <label>Rukun Warga / RW</label>
                                       <div class="input-group">
                                             <input type="text" name="tempatlahir" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kelurahan / Desa Domisili</label>
                                       <div class="input-group">
                                             <input type="text" name="suku" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kecamatan</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Kotamadya / Kabupaten</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-4">
                                       <label>Kode Pos</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Provinsi</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Negara</label>
                                       <div class="input-group">
                                             <input type="text" name="jaritangan" class="form-control phone-number">
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
                                             <input type="text" name="namalengkap" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Pendidikan</label>
                                       <div class="input-group">
                                       <select class="form-control">
                                          <option>Tidak sekolah</option>
                                          <option>SD</option>
                                          <option>SLTP sederajat</option>
                                          <option>SLTA sederajat</option>
                                          <option>D1-D3 sederajat</option>
                                          <option>D4</option>
                                          <option>S1</option>
                                          <option>S2</option>
                                          <option>S3</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="card-body col-6">
                                       <label>Status Pernikahan</label>
                                       <div class="input-group">
                                       <select class="form-control">
                                          <option>Belum Kawin</option>
                                          <option>Kawin</option>
                                          <option>Cerai Hidup</option>
                                          <option>Cerai Mati</option>
                                       </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card col-6">
                                    <div class="card-body col-8">
                                       <label>Nomor Telepon Selular Pasien</label>
                                       <div class="input-group">
                                             <input type="text" name="nomrm" class="form-control phone-number">
                                       </div>
                                    </div>
                                    <div class="card-body col-8">
                                       <label>Pekerjaan</label>
                                       <div class="input-group">
                                             <input type="text" name="pekerjaan" class="form-control phone-number">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md"></div>
                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button>
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