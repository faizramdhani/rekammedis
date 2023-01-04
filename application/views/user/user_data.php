 <section class="section">
     <div class="section-header">
         <h1>Master</h1>
         <div class="section-header-breadcrumb">
             <div class="breadcrumb-item active"><a href="<?= site_url('dashboard') ?>">Dashboard</a></div>
             <div class="breadcrumb-item"><a href="#">Master Pengguna</a></div>
             <div class="breadcrumb-item">User</div>
         </div>
     </div>
 </section>

 <!-- Main content -->
 <div class="section-body">
     <div class="row">
         <div class="col-12 ">
             <div class="card">
                 <div class="card-header">
                     <h4>Data User</h4>
                     <div class="card-header-action">
                         <a href="<?= site_url('user/add') ?>" class="btn btn-primary" data-target="#addUser" data-toggle="modal">Tambah User</a>
                     </div>
                 </div>

                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-striped table-md" id="table1">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Username</th>
                                     <th>Nama</th>
                                     <th>Level</th>
                                     <th>Unit</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>

                             <tbody>
                                 <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                     <tr>
                                         <td><?= $no++ ?></td>
                                         <td><?= $data->nmuser ?></td>
                                         <td><?= $data->nmpeg ?></td>
                                         <td>
                                             <div class="badge badge-pill badge-primary mb-1"><?= $data->nmlevel_erm ?></div>
                                         </td>
                                         <td>Unit</td>

                                         <td>
                                             <form method="POST" action="">
                                                 <span data-target="" data-toggle="modal" data-id="1" data-nama="">
                                                     <a class="btn btn-primary btn-action mr-1" title="Edit" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
                                                 </span>
                                                 <input type="hidden" name="id" value="">
                                                 <button type="submit" class="btn btn-info btn-action mr-1" title="Lihat" data-toggle="tooltip" name="submit"><i class="fas fa-info-circle"></i></button>
                                             </form>
                                         </td>
                                         <!-- <td>
                                             <div class="row">
                                                 <div class="buttons">
                                                     <a href="" class="btn btn-icon btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                                     <a href="" class="btn btn-icon btn-sm btn-primary"><i class="far fa-eye"></i></a>
                                                 </div>
                                             </div>
                                         </td> -->
                                     <?php
                                    } ?>

                             </tbody>
                         </table>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <div class="modal fade" tabindex="-1" role="dialog" id="addUser">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Tambah User</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="" method="POST" class="needs-validation" novalidate="">
                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Username</label>
                         <div class="col-sm-9">
                             <input type="text" class="form-control" name="nama" required="" disabled>
                             <div class="invalid-feedback">
                                 Mohon data diisi!
                             </div>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-9">
                             <input type="password" name="password" class="form-control">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Nama</label>
                         <div class="col-sm-9">
                             <input type="password" name="password" class="form-control" required="" disabled>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Level</label>
                         <select class="form-control selectric" name="pekerjaan">
                             <option value="1">Pilih</option>
                             <option value="2">Admin</option>
                             <option value="2">Dokter</option>
                             <option value="3">Perawat</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label>Unit</label>
                         <select class="form-control selectric" name="pekerjaan">
                             <option value="1">Pilih</option>
                             <option value="2">RS Gatoel</option>
                             <option value="3">RS HVA</option>
                             <option value="4">RS Perkebunan</option>
                             <option value="5">RS Medika Utama</option>
                         </select>
                     </div>




             </div>
             <div class="modal-footer bg-whitesmoke br">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                 <button type="submit" class="btn btn-primary" name="submit2">Tambah</button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 </section>