<section class="section">
    <div class="section-header">
        <h1>Surat Keterangan Pulang Permintaan Sendiri</h1>
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
                                <td></td>
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
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Surat Keterangan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-tab="mygroup-tab" href="#tab2">Riwayat Penyakit Kronis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3">Riwayat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- tab 1 -->
            <div id="tab1" class="col-12 active" data-tab-group="mygroup-tab">
                <div class="card">

                    <div class="row">
                        <div class="card-body col-12">
                            <div class="form">
                                <label class="col-md-3">Yang bertanda tangan dibawah ini :</label>
                                <div class="row">
                                    <div class="card-body col-sm-4 col-md-6">
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3">Nama </label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Tanggal Lahir</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="datetime-local" class="form-control datetimepicker">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Umur</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="bangsa">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="col"><b>Menyatakan sesungguhnya memberikan persetujuan untuk pulang atas Permintaan sendiri dari RS Gatoel :</b></label>
                                <label class="col">diri sendiri/istri/suami/orangtua/anak :</label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="row">
                                    <div class="card-body col-sm-4 col-md-6">
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3">Nama </label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Tanggal Lahir</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="datetime-local" class="form-control datetimepicker">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Umur</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="bangsa">
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Ruang Perawatan</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="bangsa">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">NO RM</label>
                                            <div class="col-lg-9 col-md-9">
                                                <input type="text" class="form-control" name="bangsa" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3 ">Alasan</label>

                                        </div>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Dirawat dirumah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Tidak mampu dalam hal biaya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Pengobatan alternatif</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Alasan lain</label>
                                                <div class="col-lg-8 col-md-8">
                                                    <input type="text" class="form-control" name="bangsa">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <label class="col">Bahwa saya telah diberikan edukasi tentang resiko medis akibat asuhan medis yang belum lengkap, dan saya bersedia mengikuti proses pemulangan pasien, sesuai prosesdur yang ada di Rumah Sakit segala sesuatu yang timbul dikemudian hari merupakan tanggung jawab pribadi</label>
                                <label class="col">Demikian surat Keterangan ini dibuat dalam keadaan sadar dan tanpa ada paksaan dari pihak lain </label>
                            </div>
                            <div class="form-group">
                                <label class="col">Dokter</label>
                                <label class="col">Pemberi penjelasan</label>
                                <div class="col-lg-3 col-md-3">
                                    <input type="text" class="form-control" name="bangsa">
                                    <label class="col">Nama Terang</label>
                                </div>

                            </div>

                            <tr>



                            </tr>




                            <!-- tab 2 -->
                            <div id="tab2" class="col-12" data-tab-group="mygroup-tab">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>RIWAYAT PENYAKIT KRONIS</h4>
                                            </div>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="form">
                                                        <input type="text" class="form-control" placeholder="1">
                                                    </div>
                                                    <div class="form">
                                                        <input type="text" class="form-control" placeholder="2">
                                                    </div>
                                                    <div class="form">
                                                        <input type="text" class="form-control" placeholder="3">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>UNTUK ANAK ANAK : RIWAYAT KELAHIRAN</h4>
                                            </div>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="form">
                                                        <textarea class="form-control"></textarea>
                                                    </div>

                                                    <label>Imunisasi</label>
                                                    <input type="text" class="form-control">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>ALERGI</h4>
                                            </div>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="1">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="2">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="3">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="4">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="5">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input type="text" class="form-control" name="" placeholder="6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab 3 -->
                            <div id="tab3" class="col-12" data-tab-group="mygroup-tab">
                                <div class=" row">
                                    <div class="col-12">
                                        <div class="card">

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
                                                            <th>TTD & Nama Dokter</th>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

</section>