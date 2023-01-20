<section class="section">
   <div class="section-header">
      <h5>Rawat Jalan</h5>
      <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="<?= site_url('dashboard') ?>">Dashboard</a></div>
         <div class="breadcrumb-item"><a href="<?= site_url('rawatjalan/listpasien') ?>">Rawat Jalan</a></div>

      </div>
   </div>
</section>

<section class="content">
   <div class="section-body">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4>Data Pasien Rawat Jalan</h4>
               </div>

               <div class="form-group">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="table-responsive">
                                 <form class="form-horizontal style-form" id="pencarianantrian" method="post">
                                    <div class="table-responsive">
                                       <p>Poliklinik:</p>
                                       <select name="poli" id="poli" class="form-control" required onchange="inputpoli()">
                                          <option value="">---Pilih---</option>
                                       <?php foreach ($poli as $key => $value) { ?>
                                       <option value="<?php echo $value['kode1']; ?>" class="option"><?php echo $value['nama']; ?></option>
                                       <?php } ?> 
                                       </select>
                                    </div>
                                    <div class="table-responsive" id='divkodepoli'>
                                       <p>Dokter :</p>
                                       <select name="dokterpoli" id="dokterpoli" class="form-control" required>
                                       </select>
                                    </div>
                                    <div class="table-responsive">
                                       <p>Tanggal Perawatan :</p>
                                       <input type="date" id="tanggal" name="tanggal" class="form-control" value="">
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                       <button onclick="cariantrianpoli()" type="submit" class="btn btn-primary"><i class="fa fa-search"> Cari Pasien</i></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Nama Pasien</th>

                                 <th>No MRM</th>

                                 <th>Alamat</th>
                                 <th>No Asuransi</th>
                                 <th>No SEP</th>
                                 <th>No Rawat Jalan</th>


                                 <th>Konsumen</th>


                                 <th>Action</th>
                              </tr>
                           </thead>


                           <tbody>
                              <?php $no = 1;
                              foreach ($paslama as $row) : ?>
                                 <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nmpasien'] ?></td>
                                    <td><?= $row['nomrm'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['noasuransi'] ?></td>
                                    <td><?= $row['nosep'] ?></td>
                                    <td><?= $row['norj'] ?></td>

                                    <td><?= $row['nmkons'] ?></td>


                                    <td>
                                       <div class="row">
                                          <div class="buttons">
                                             <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                             <a href="<?= site_url('rawatjalan/rawatjalanDokter/' . $row['nomrm']) ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                             <a href="#" title="Tambah" class="btn btn-icon btn-warning"><i class="far fa-file"></i></a>

                                          </div>
                                       </div>
                                    </td>

                                 <?php endforeach ?>


                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url('assets/js/mainchart.js');?>"></script>
</section>