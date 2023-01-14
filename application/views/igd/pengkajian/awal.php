<section class="section">
    <div class="section-header">
        <h1>Pengkajian Awal IGD</h1>
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
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Pengkajian Awal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-tab="mygroup-tab" href="#tab2">Survei Primer</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- tab 1 -->
            <div id="tab1" class="col-12 active" data-tab-group="mygroup-tab">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="card-body col-14">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md col-14">
                                                <!-- 1 -->
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <label>
                                                                <center>Jam Datang</center>
                                                                <input type="datetime-local" class="form-control datetimepicker">
                                                            </label>
                                                            <label>
                                                                <center>Jam Dilayani</center>
                                                                <input type="datetime-local" class="form-control datetimepicker">
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <!-- 2 -->
                                                <tr>
                                                    <td>TRIASE</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Merah</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Kuning</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Hijau</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Hitam</center>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <!-- 3 -->
                                                <tr>
                                                    <td>Keluhan Utama</td>
                                                    <td>

                                                    </td>
                                                </tr>

                                                <!-- 4 -->
                                                <tr>
                                                    <td>Keadaan Umum</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Gelisah/koma</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Lemah/kesakitan</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Cukup</center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 5 -->
                                                <tr>
                                                    <td>Pernafasan</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    < 12 /> 30x/m
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>21-30x/m</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>12-20x/m</center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 6 -->
                                                <tr>
                                                    <td>Nadi</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    <50 /> 150x/m
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>101-150x/m</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>50-100x/m</center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 7 -->
                                                <tr>
                                                    <td>Akral</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Dingin
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Dingin</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Hangat</center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 8 -->
                                                <tr>
                                                    <td>CRT</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    lebih 2 detik
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    kurang 2 detik</center>
                                                            </label> </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    kurang 2 detik</center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 9 -->
                                                <tr>
                                                    <td><b>Date Pre Hospital</b></td>
                                                    <td>

                                                    </td>
                                                </tr>

                                                <!-- 10 -->
                                                <tr>
                                                    <td>Cara Tiba Ke RS</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ambulance
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Kendaraan Pribadi
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Lain-lain
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- 11 -->
                                                <tr>
                                                    <td>Rujukan</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                Ya: Dokter/Puskesmas/Klinik/RS
                                                                <label>
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                Tidak: Datang sendiri diantar oleh
                                                                <label>
                                                                    <input type="text" class="form-control">
                                                                </label>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <!-- 12 -->
                                                <tr>
                                                    <td>Tanda Tanda Vital</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <label class="col-2">
                                                                <input type="text" class="form-control">
                                                            </label>

                                                            <label>TD :</label>
                                                            <label class="col-1">
                                                                <input type="text" class="form-control">
                                                            </label>

                                                            <label>/</label>
                                                            <label class="col-1">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                            <label>mmHg</label>



                                                            <label class="col-1">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                            <label>x/menit</label>

                                                            <label>RR</label>
                                                            <label class="col-1">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                            <label>x/menit</label>

                                                            <label>S</label>
                                                            <label class="col-1">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                            <label>°C</label>


                                                        </div>
                                                    </td>



                                                </tr>

                                                <!-- 13 -->
                                                <tr>
                                                    <td>Tindakan&Pengobatan yang telah dilakukan</td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <label>a. </label>
                                                            <label class="col-6">
                                                                <input type="text" class="form-control col-8">
                                                            </label>
                                                            <label class="col">Jam </label>
                                                            <input type="datetime-local" class="form-control datetimepicker col">

                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <label>b. </label>
                                                            <label class="col-6">
                                                                <input type="text" class="form-control col-8">
                                                            </label>
                                                            <label class="col">Jam </label>
                                                            <input type="datetime-local" class="form-control datetimepicker col">

                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <label>c. </label>
                                                            <label class="col-6">
                                                                <input type="text" class="form-control col-8">
                                                            </label>
                                                            <label class="col">Jam </label>
                                                            <input type="datetime-local" class="form-control datetimepicker col">

                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <label>d. </label>
                                                            <label class="col-6">
                                                                <input type="text" class="form-control col-8">
                                                            </label>
                                                            <label class="col">Jam </label>
                                                            <input type="datetime-local" class="form-control datetimepicker col">

                                                            </label>
                                                        </div>


                                                    </td>
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

            <!-- tab 2 -->
            <div id="tab2" class="col-12 " data-tab-group="mygroup-tab">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="card-body col-12">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <!-- 1 -->
                                                <tr>
                                                    <td></td>
                                                    <td><b>
                                                            <center>SURVEI PRIMER</center>
                                                        </b>
                                                    </td>
                                                    <td></td>
                                                </tr>


                                                <!-- 2 -->
                                                <tr>
                                                    <td>
                                                        <center>Airway</center>
                                                    </td>
                                                    <td>
                                                        <center>Breathing</center>
                                                    </td>
                                                    <td>
                                                        <center>Circulation</center>
                                                    </td>
                                                </tr>

                                                <!-- 3 -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Paten</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Gurgling</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Snooring</center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option3">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Stridor</center>
                                                            </label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <label>RR :</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>x/menit</label>
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <!-- 4 -->
                                                <tr>
                                                    <td></td>
                                                    <td>Warna Kulit :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Cyanosis
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Pola Nafas :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Kussmaul
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Cheyne Stoke
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Gasping
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Kerja Nafas :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Takipnea
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Dyspnea
                                                                </center>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Otot bantu nafas :

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Suara Nafas :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Vesikuler
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Wheezing
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Ronchi
                                                                </center>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Stridor
                                                                </center>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Jejas :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Tidak
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Deviasi Trakhea :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Tidak
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Pengembangan dada :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Simetris
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Tidak
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>Distensi vena jugularis :
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Tidak
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <label>SpO2</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>%</label>
                                                    </td>

                                                </tr>

                                        </div>



                                        <!-- 5 -->
                                        <tr>
                                            <td>Pernafasan</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            < 12 /> 30x/m
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>21-30x/m</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>12-20x/m</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 6 -->
                                        <tr>
                                            <td>Nadi</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            <50 /> 150x/m
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>101-150x/m</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>50-100x/m</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 7 -->
                                        <tr>
                                            <td>Akral</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            Dingin
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>Dingin</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>Hangat</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 8 -->
                                        <tr>
                                            <td>CRT</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            lebih 2 detik
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            kurang 2 detik</center>
                                                    </label> </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            kurang 2 detik</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 9 -->
                                        <tr>
                                            <td><b>Date Pre Hospital</b></td>
                                            <td>

                                            </td>
                                        </tr>

                                        <!-- 10 -->
                                        <tr>
                                            <td>Cara Tiba Ke RS</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            Ambulance
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            Kendaraan Pribadi
                                                        </center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        <center>
                                                            Lain-lain
                                                        </center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 11 -->
                                        <tr>
                                            <td>Rujukan</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        Ya: Dokter/Puskesmas/Klinik/RS
                                                        <label>
                                                            <input type="text" class="form-control">
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        Tidak: Datang sendiri diantar oleh
                                                        <label>
                                                            <input type="text" class="form-control">
                                                        </label>
                                                    </label>
                                                </div>

                                            </td>
                                        </tr>

                                        <!-- 12 -->
                                        <tr>
                                            <td>Tanda Tanda Vital</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <label class="col-2">
                                                        <input type="text" class="form-control">
                                                    </label>

                                                    <label>TD :</label>
                                                    <label class="col-1">
                                                        <input type="text" class="form-control">
                                                    </label>

                                                    <label>/</label>
                                                    <label class="col-1">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>mmHg</label>



                                                    <label class="col-1">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>x/menit</label>

                                                    <label>RR</label>
                                                    <label class="col-1">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>x/menit</label>

                                                    <label>S</label>
                                                    <label class="col-1">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>°C</label>


                                                </div>
                                            </td>



                                        </tr>

                                        <!-- 13 -->
                                        <tr>
                                            <td>Tindakan&Pengobatan yang telah dilakukan</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <label>a. </label>
                                                    <label class="col-6">
                                                        <input type="text" class="form-control col-8">
                                                    </label>
                                                    <label class="col">Jam </label>
                                                    <input type="datetime-local" class="form-control datetimepicker col">

                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label>b. </label>
                                                    <label class="col-6">
                                                        <input type="text" class="form-control col-8">
                                                    </label>
                                                    <label class="col">Jam </label>
                                                    <input type="datetime-local" class="form-control datetimepicker col">

                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label>c. </label>
                                                    <label class="col-6">
                                                        <input type="text" class="form-control col-8">
                                                    </label>
                                                    <label class="col">Jam </label>
                                                    <input type="datetime-local" class="form-control datetimepicker col">

                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label>d. </label>
                                                    <label class="col-6">
                                                        <input type="text" class="form-control col-8">
                                                    </label>
                                                    <label class="col">Jam </label>
                                                    <input type="datetime-local" class="form-control datetimepicker col">

                                                    </label>
                                                </div>


                                            </td>
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