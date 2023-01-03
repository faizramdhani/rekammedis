 <section class="section">
     <div class="section-header">
         <h1>Pengguna</h1>
         <div class="section-header-breadcrumb">
             <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item"><a href="#">Layout</a></div>
             <div class="breadcrumb-item">Default Layout</div>
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
                 </div>

                 <div class="card-body">
                     <div class="table-responsive">

                         <table class="table table-striped" id="table1">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Username</th>
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
                                         <td><?= $data->level_erm ?></td>
                                         <td>Unit</td>
                                         <td>
                                             <form method="POST" action="">
                                                 <span data-target="" data-toggle="modal" data-id="1" data-nama="">
                                                     <a class="btn btn-primary btn-action mr-1" title="Edit Data" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></a>
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


 </section>