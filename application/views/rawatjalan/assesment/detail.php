<section class="section">
 	<div class="section-header">
 		<h1>Dashboard</h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-md table-responsive">
                            <tr>
                            <th>Nama Pasien</th>
                            <th>Nomor Rawat Jalan</th>
                            <th>Nomor MR</th>
                            <th>Konsumen</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            </tr>
                            <tr>
                            <td>Irwansyah Saputra</td>
                            <td>000000</td>
                            <td>123456</td>
                            <td>BPJS</td>
                            <td>12 TAHUN</td>
                            <td>Laki - laki</td>
                            </tr>
                            <tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-body">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Profil Ringkas Medis Rawat Jalan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab2">Riwayat Penyakit Kronis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3">Riwayat</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tab1" class="col-12 active" data-tab-group="mygroup-tab">
                    <div class="card">
                        <div class="card-header">
                        <h4>Profil Ringkas Medis Rawat Jalan</h4>
                        </div>
                        <div class="row">
                            <div class="card-body col-12">
                                    <div class="form">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="Irwansyah Saputra">
                                    </div>
                                    <div class="form">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-body col-sm-3 col-md-6">
                                <div class="form">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Bangsa</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Keluarga/Penanggung Jawab</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Asuransi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="card-body col-sm-3 col-md-6">
                                <div class="form">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Agama</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Perkawinan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>Telp</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form">
                                    <label>No. Asuransi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="col-12" data-tab-group="mygroup-tab">
                    <div class="row">
                    <div class="col-6">
                    <div class="card">
                            <div class="card-header">
                            <h4>Riwayat Penyakit Kronis</h4>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                <div class="form">
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form">
                                    <label>Alergi</label>
                                    <input type="text" class="form-control">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="card">
                            <div class="card-header">
                            <h4>Untuk Anak-Anak : Riwayat Kelahiran</h4>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                <div class="form">
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form">
                                    <label>Imunisasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="tab3" class="col-12" data-tab-group="mygroup-tab"">
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Riwayat</h4>
                                <div class="card-header-action">
                                <form>
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                    </div>
                                </form>
                                </div>
                            </div>
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
                                    <th>Nama Dokter</th>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</section>