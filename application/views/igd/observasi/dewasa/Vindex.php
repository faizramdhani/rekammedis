<section class="section">
    <div class="section-header">
        <h5>Early Warning System Dewasa</h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
</section>

<!-- Header content -->
<div class="section-header">
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
                            <td><?php echo $this->session->userdata('umurthn'); ?></td>
                            <td><?php echo $this->session->userdata('nama'); ?></td>
                            <td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-footer text-right">
                        <a class="btn btn-primary" href="<?= site_url('Cobservasiigd/createdewasa') ?>"><i class="fas fa-plus"></i> Tambah EWS</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode EWS</th>
                                    <th>Anamnesis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>



                            <!-- <tbody>
                            <?php $no = 1;
                            foreach ($assessmentawalperawat as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['id_pengkajianawalperawat'] ?></td>
                                        <td><?= $row['anamnesis'] ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="buttons">
                                                    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary" title="Edit"><i class="far fa-edit"></i></a>
                                                    <a href="<?= site_url('Cassessmentawalperawat/show/' . $row['id_pengkajianawalperawat']) ?>" title="Lihat" class="btn btn-icon btn-info "><i class="far fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>