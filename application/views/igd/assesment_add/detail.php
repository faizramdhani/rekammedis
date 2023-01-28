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
      <div class="col-12 col-md-5 col-lg-5">
         <div class="card card-primary">
            <div class="card-header">
               <h4>Identitas Pasien</h4>
            </div>
            <table class="table striped">
               <tr>
                  <th>Nama </th>
                  <th>No. RM</th>
                  <th>No. RJ</th>
                  <th>Jenis Kelamin</th>
               </tr>

               <tr>
                  <tr>
                     <td><?php echo $this->session->userdata('nmpasien'); ?></td>
                     <td><?php echo $this->session->userdata('nomrm'); ?></td>
                     <td><?php echo $this->session->userdata('norj'); ?></td>
                     <td><?php echo $this->session->userdata('kelamin'); ?></td>
                  </tr>
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
                  <th>No. Asuransi </th>
                  <th>Kode Rumah Sakit</th>
               </tr>
               <tr>
                  <td><?php echo $this->session->userdata('identitas'); ?></td>
                  <td><?php echo $this->session->userdata('umurthn'); ?></td>
                  <td><?php echo $this->session->userdata('noasuransi'); ?></td>
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
               <div class="card-header">
                  <ul class="nav nav-pills" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link " data-tab="mygroup-tab" href="#tab1">Riwayat Penyakit Kronis</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-tab="mygroup-tab" href="#tab2">Riwayat</a>
                     </li>
                  </ul>
               </div>


               <!-- tab 1 -->
               <div id="tab1" class="col-12" data-tab-group="mygroup-tab">
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

               <!-- tab 2 -->
               <div id="tab2" class="col-12" data-tab-group="mygroup-tab">
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

</section>