<section class="section">
    <div class="section-header">
        <h5>CPPT</h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
</section>

<section class="content">
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
                                <td><?php echo $this->session->userdata('umurthn'); ?></td>
                                <td><?php echo $this->session->userdata('nama'); ?></td>
                                <td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-footer text-right">
                                    <a class="btn btn-primary" href="<?= site_url('Ccppt/create') ?>"><i class="fas fa-plus"></i> Tambah CPPT</a>
                                </div>
                                <div class="card-header">
                                    <h4>CATATAN PERKEMBANGAN PASIEN TERINTEGRASI RAWAT JALAN</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md">
                                            <tr>
                                                <th>Tanggal/Jam</th>
                                                <th>PPA</th>
                                                <th>Subyektif-Obyektif-Asesmen-Planning</th>
                                                <th>Intruksi</th>
                                                <th>Verifikasi DPJP</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="datetime-local" class="form-control datepicker">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>Dokter</option>
                                                            <option>Perawat</option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </td>
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
                </div>
            </div>
        </div>

</section>