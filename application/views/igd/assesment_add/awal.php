<section class="section">
    <div class="section-header">
        <h5>Asesment Medis</h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
</section>

<!-- content -->
<section class="content">
    <div class="section-body">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                    </table>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1" role="tab" aria-selected="true">Anamnesis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab2" role="tab" aria-selected="false">Pemeriksaan Fisik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3" role="tab" aria-selected="false">Pemeriksaan Penunjang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab4" role="tab" aria-selected="false">Rencana Asuhan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab5" role="tab" aria-selected="false">Intruksi Tindak Lanjut</a>
                            </li>
                           
                        </ul>

                        <!-- tab 1 -->
                        <div id="tab1" class="col-12 active" data-tab-group="mygroup-tab">

                            <!-- card 1 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">

                                            <!-- 1 -->
                                            <tr>
                                                <td>Tanggal</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <label>
                                                            <input type="datetime-local" class="form-control datetimepicker">
                                                        </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        <center>Jam Datang</center>
                                                        <input type="datetime-local" class="form-control datetimepicker">
                                                    </label>
                                                </td>

                                                <td>
                                                    <label>
                                                        <center>Jam Dilayani</center>
                                                        <input type="datetime-local" class="form-control datetimepicker">
                                                    </label>
                                                </td>
                                                <td></td>
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
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Kuning</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Hijau</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
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
                                                    <label class="col-20">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

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
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Lemah/kesakitan</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Cukup</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Meninggal</center>
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
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>21-30x/m</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>12-20x/m</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Kaku Mayat</center>
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
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>101-150x/m</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>50-100x/m</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Lebam Mayat</center>
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
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Dingin</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Hangat</center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Refleks Kornea (-)</center>
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
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                kurang 2 detik</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                kurang 2 detik</center>
                                                        </label>
                                                    </div>
                                                </td>

                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- card 2 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">
                                            <!-- 9 -->
                                            <tr>
                                                <td><b>Date Pre Hospital</b></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <!-- 11 -->
                                            <tr>
                                                <td>Rujukan</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            Ya : Dokter/Puskesmas/Klinik/RS
                                                            <label class="col-5">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            Tidak : Datang sendiri diantar oleh
                                                            <label class="col-5">
                                                                <input type="text" class="form-control">
                                                            </label>
                                                        </label>
                                                    </div>

                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <!-- 12 -->
                                            <tr>
                                                <td>Tanda Tanda Vital</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <label class="col-3">
                                                            <input type="text" class="form-control">
                                                        </label>

                                                        <label>TD</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>

                                                        <label>/</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>mmHg</label>


                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>x/menit</label>

                                                        <label>RR</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>x/menit</label>

                                                        <label>S</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>°C</label>


                                                    </div>
                                                </td>
                                                <td></td>

                                            </tr>

                                            <!-- 13 -->
                                            <tr>
                                                <td>Tindakan&Pengobatan yang telah dilakukan</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <label>a. </label>
                                                        <label class="col-9">
                                                            <input type="text" class="form-control col-8">
                                                        </label>
                                                        <label class="col">Jam </label>
                                                        <input type="datetime-local" class="form-control datetimepicker col">

                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label>b. </label>
                                                        <label class="col-9">
                                                            <input type="text" class="form-control col-8">
                                                        </label>
                                                        <label class="col">Jam </label>
                                                        <input type="datetime-local" class="form-control datetimepicker col">

                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label>c. </label>
                                                        <label class="col-9">
                                                            <input type="text" class="form-control col-8">
                                                        </label>
                                                        <label class="col">Jam </label>
                                                        <input type="datetime-local" class="form-control datetimepicker col">

                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label>d. </label>
                                                        <label class="col-9">
                                                            <input type="text" class="form-control col-8">
                                                        </label>
                                                        <label class="col">Jam </label>
                                                        <input type="datetime-local" class="form-control datetimepicker col">

                                                        </label>
                                                    </div>


                                                </td>
                                                <td></td>

                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- tab 2 -->
                        <div id="tab2" class="col-12 " data-tab-group="mygroup-tab">

                            <!-- card 1 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">
                                            <!-- 1 -->
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <b>
                                                        <center>SURVEI PRIMER</center>
                                                    </b>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>Airway</td>
                                                <td>Breathing</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Circulation</td>


                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">
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
                                                        <label class="form-check-label" for="inlineCheckbox3">
                                                            <center>Snooring</center>
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                        <label class="form-check-label" for="inlineCheckbox4">
                                                            <center>Stridor</center>
                                                        </label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <label>RR </label>
                                                </td>
                                                <td>
                                                    <label class="col-4">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>x/menit</label>
                                                </td>
                                                <td></td>

                                                <td></td>
                                                <td></td>


                                                <!-- batas -->
                                                <td>Nadi</td>
                                                <td>
                                                    <label class="col-5">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>x/menit</label>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td></td>
                                                <td>Warna Kulit</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Normal
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Cyanosis
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <!-- batas -->
                                                <td>Kwalitas Nadi</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Kuat
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Lemah
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Pola Nafas</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Normal
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Kussmaul
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Cheyne Stoke
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Gasping
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>

                                                <td>Irama</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Reguler
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Ireguler
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Kerja Nafas</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Normal
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Takipnea
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Dyspnea
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>CRT</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Kurang 2 detik
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Lebih 2 detik
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Otot bantu nafas</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Warni</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Normal
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Pucat
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Suara Nafas</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Vesikuler
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Wheezing
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Ronchi
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Stridor
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>Akral</td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Hangat
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Dingin
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Jejas</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Ya
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Tidak
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Deviasi Trakhea</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Ya
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Tidak
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Pengembangan dada</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Simetris
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Tidak
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Distensi vena jugularis</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Ya
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>Tidak
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <label>SpO2</label>
                                                </td>
                                                <td>
                                                    <label class="col-4">
                                                        <input type="text" class="form-control">
                                                    </label>
                                                    <label>%</label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div id="tab3" class="col-12 " data-tab-group="mygroup-tab">
                            <!-- card 1 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">

                                            <!-- 1 -->
                                            <tr>
                                                <td><b>
                                                        <center>KEPERAWATAN</center>
                                                    </b></td>
                                                </td>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>Keluhan Utama</td>
                                                <td>
                                                    <label>
                                                        <input type="text" class="form-control">
                                                    </label>

                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <!-- 3 -->
                                            <tr>
                                                <td>Tekanan Darah</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <label class="col-3">
                                                            <input type="text" class="form-control">
                                                        </label>

                                                        <label>TD</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>

                                                        <label>/</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>mmHg</label>

                                                        <!-- nadi -->
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>x/menit</label>

                                                        <!-- RR -->
                                                        <label>RR</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>x/menit</label>

                                                        <!-- Suhu -->
                                                        <label>S</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>°C</label>

                                                        <!-- BB -->
                                                        <label>BB</label>
                                                        <label class="col-2">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                        <label>Kg</label>
                                                    </div>
                                                <td></td>
                                                <td></td>


                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- card 2 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <b>
                                                        Psiko-sosio-Spiritual
                                                    </b>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>Tempat Tinggal</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Bersama orang tua
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Bersama nenek/kakek
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Lainnya
                                                            </center>
                                                        </label>
                                                        <label class="col-10">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                    </div>

                                                </td>
                                            </tr>

                                            <!-- 3 -->
                                            <tr>
                                                <td>Status Emosional</td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Tenang
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Cemas
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Marah
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Sedih
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Takut
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td>Masalah perilaku</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Tidak ada
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Ada
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Agama
                                                            </center>
                                                        </label>
                                                        <label class="col-10">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                    </div>

                                                </td>
                                                <td></td>
                                            </tr>

                                            <!-- 5 -->
                                            <tr>
                                                <td>Hubungan pasien antar keluarga</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Baik
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Tidak
                                                            </center>
                                                        </label>
                                                    </div>

                                                <td>
                                                    <label>
                                                        Perlu dibantu dalam ibadah
                                                    </label>

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
                                                            <center>
                                                                Tidak
                                                            </center>
                                                        </label>
                                                    </div>
                                                </td>

                                    </div>


                                    </table>
                                </div>
                            </div>

                            <!-- card 3 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">

                                            <!-- 1 -->
                                            <tr>
                                                <td>
                                                    <b>
                                                        Ekonomi
                                                    </b>
                                                </td>
                                                <td>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <!-- 2 -->
                                            <tr>
                                                <td>Penanggung Jawab</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Orang tua
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Asuransi
                                                            </center>
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>
                                                                Lainnya
                                                            </center>
                                                        </label>
                                                        <label class="col-10">
                                                            <input type="text" class="form-control">
                                                        </label>
                                                    </div>

                                                </td>
                                            </tr>


                                            <!-- tab -->
                                            <!-- 3 -->
                                            <tr>
                                                <td><b>
                                                        Riwayat Kesehatan Pasien
                                                    </b>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td>Riwayat Penyakit Sekarang</td>


                                            </tr>

                                            <!-- 4 -->
                                            <tr>
                                                <td>Riwayat Penyakit Keluarga</td>
                                                <td></td>
                                            </tr>

                                            <!-- 5 -->
                                            <tr>
                                                <td>Hubungan pasien antar keluarga</td>
                                            </tr>

                                            <!-- 6 -->
                                            <tr>
                                                <td>Riwayat Alergi</td>
                                            </tr>



                                    </div>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 4 -->
                    <div id="tab4" class="col-12" data-tab-group="mygroup-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>IV. SKRINING GIZI AWAL</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body col-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>NO</th>
                                                <th>
                                                    <center>PARAMETER</center>
                                                </th>
                                                <th>
                                                    <center>Skor</center>
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>
                                                    <center>Ya</center>
                                                </th>
                                                <th>
                                                    <center>Tidak</center>
                                                </th>
                                            </tr>


                                            <tr>
                                                <td>1</td>
                                                <td>Apakah pasien mengalami penurunan/peningkatan BB yang tidak di inginkan dalam 6 bulan terakhir?</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>2</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>0</center>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Apakah asupan makan berkurang karena tidak nafsu makan?</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>1</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>0</center>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pasien dengan diagnosa khusus/ kondisi khusus</td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">
                                                            <center>2</center>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">
                                                            <center>0</center>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>(Penyakit: DM/kemoterapi/hemodalisa/geriatari/imunitas menurun/lain-lain, sebutkan <input type="text" class="form-control"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><b>Total Skor = </b></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>
                                    </div>
                                    </table>
                                    <div class="form-group row">
                                        <div class="col-md"></div>
                                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab4 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab5">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 5 -->
                    <div id="tab5" class="col-12" data-tab-group="mygroup-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>V. ASESMEN RESIKO JATUH</h4>
                            </div>
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="form">
                                        <label>Apakah anda merasa tidak stabil saat berdiri atau berjalan ?</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <label>Apakah anda khawatir akan jatuh ?</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <label>Apakah anda pernah jatuh dalam setahun terakhir ?</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md"></div>
                                                    <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab5 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                    <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab6">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
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