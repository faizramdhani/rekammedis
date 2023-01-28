<section class="section">
    <div class="section-header">
        <h5>Asessment Awal</h5>
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
            <div class="col-12 col-md-5 col-lg-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Identitas Pasien</h4>
                    </div>
                    <table class="table striped">
                        <tr>
                            <th>Nama Lengkap </th>
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

            <div class="col-12 col-md-6 col-lg-6">
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



        <div class="row">
            <div class="col-12 ">
                <div class="card">

                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab10" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="triase-tab1" data-toggle="tab" href="#triase1" role="tab" aria-controls="triase" aria-selected="true">Triase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="survei-tab1" data-toggle="tab" href="#survei1" role="tab" aria-controls="survei" aria-selected="false">Survei Primer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="anamnesis-tab1" data-toggle="tab" href="#anamnesis1" role="tab" aria-controls="anamnesis" aria-selected="false">Anamnesis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="asesmentnyeri-tab1" data-toggle="tab" href="#asesmentnyeri1" role="tab" aria-controls="asesmentnyeri" aria-selected="false">Asesment Nyeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="asesmentresikojatuh-tab1" data-toggle="tab" href="#asesmentresikojatuh1" role="tab" aria-controls="asesmentresikojatuh" aria-selected="false">Asesment Resiko Jatuh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="statusfungsional-tab1" data-toggle="tab" href="#statusfungsional1" role="tab" aria-controls="statusfungsional" aria-selected="false">Status Fungsional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="skriningnutrisional-tab1" data-toggle="tab" href="#skriningnutrisional1" role="tab" aria-controls="skriningnutrisional" aria-selected="false">Skrining Resiko Nutrisional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="kebutuhanedukasi-tab1" data-toggle="tab" href="#kebutuhanedukasi1" role="tab" aria-controls="kebutuhanedukasi" aria-selected="false">Kebutuhan Edukasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="diagnosiskeperawatan-tab1" data-toggle="tab" href="#diagnosiskeperawatan1" role="tab" aria-controls="diagnosiskeperawatan" aria-selected="false">Diagnosis Keperawatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rencanaasuhan-tab1" data-toggle="tab" href="#rencanaasuhan1" role="tab" aria-controls="rencanaasuhan" aria-selected="false">Rencana Asuhan</a>
                            </li>
                        </ul>

                        <!-- tab 1 -->
                        <div class="tab-content" id="myTab10">
                            <div class="tab-pane fade show active" id="triase1" role="tablist" aria-controls="triase" aria-labelledby="triase-tab1" aria-selected="true">
                                <div class="form-group-row">
                                    <div class="col-12">
                                        <div class="card-body">
                                           
                                            <form>
                                                <div class="form-group row">
                                                    <div for="tanggal" class="col-sm-2 col-form-label">Tanggal</div>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div for="inputPassword3" class="col-sm-2 col-form-label">Jam Masuk</div>
                                                    <div class="col-sm-10">
                                                        <input type="time" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div for="inputPassword3" class="col-sm-2 col-form-label">Keluhan Utama</div>
                                                    <div class="col-sm-10">
                                                        <textarea name="keluhan" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">TRIASE</th>
                                                            <th scope="col">
                                                                <div class="col-auto">
                                                                    <label class="colorinput">
                                                                        <input name="color" type="checkbox" value="danger" class="colorinput-input" / style="height:20px;width:20px">
                                                                        <span class="colorinput-color bg-danger"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="col-auto">
                                                                    <label class="colorinput">
                                                                        <input name="color" type="checkbox" value="warning" class="colorinput-input" / style="height:20px;width:20px">
                                                                        <span class="colorinput-color bg-warning"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="col-auto">
                                                                    <label class="colorinput">
                                                                        <input name="color" type="checkbox" value="success" class="colorinput-input" / style="height:20px;width:20px">
                                                                        <span class="colorinput-color bg-success"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="col-auto">
                                                                    <label class="colorinput">
                                                                        <input name="color" type="checkbox" value="dark" class="colorinput-input" / style="height:20px;width:20px">
                                                                        <span class="colorinput-color bg-dark"></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Keadaan Umum</th>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Gelisah / Koma
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Lemah Kesakitan
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Cukup
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Meninggal
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Pernafasan</th>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            < 12 /> 30x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            21 - 30x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            12-20 x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Kaku Mayat
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Nadi</th>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            < 50 /> 150x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            101 - 150x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            50 - 100 x/m
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Lebam mayat
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Akral</th>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Dingin
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Dingin
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Hangat
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Refleks Kornea (-)
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">CRT</th>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Lebih 2 Detik
                                                                        </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Kurang 2 Detik </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                                        <center>
                                                                            Kurang 2 Detik </center>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="row">
                                                    <div class="card-body col-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-md col-12">

                                                                <tr>
                                                                    <td><b>Date Pre Hospital</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>


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


                                                                <tr>
                                                                    <td>Tindakan&Pengobatan yang telah dilakukan</td>
                                                                    <td>
                                                                        <div class="form-check form-check-inline">
                                                                            <label>a. </label>
                                                                            <label class="col-9">
                                                                                <input type="text" class="form-control col-9">
                                                                            </label>
                                                                            <label class="col">Jam </label>
                                                                            <input type="time" class="form-control datetimepicker col">

                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check form-check-inline">
                                                                            <label>b. </label>
                                                                            <label class="col-9">
                                                                                <input type="text" class="form-control col-9">
                                                                            </label>
                                                                            <label class="col">Jam </label>
                                                                            <input type="time" class="form-control datetimepicker col">

                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check form-check-inline">
                                                                            <label>c. </label>
                                                                            <label class="col-9">
                                                                                <input type="text" class="form-control col-9">
                                                                            </label>
                                                                            <label class="col">Jam </label>
                                                                            <input type="time" class="form-control datetimepicker col">

                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check form-check-inline">
                                                                            <label>d. </label>
                                                                            <label class="col-9">
                                                                                <input type="text" class="form-control col-9">
                                                                            </label>
                                                                            <label class="col">Jam </label>
                                                                            <input type="time" class="form-control datetimepicker col">

                                                                            </label>
                                                                        </div>


                                                                    </td>
                                                                    <td></td>

                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab2 -->
                            <div class="tab-pane fade " id="survei1" role="tablist" aria-controls="survei" aria-labelledby="survei-tab1">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox1">
                                                                <center>Paten</center>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Gurgling</center>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox3">
                                                                <center>Snooring</center>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Kuat
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Kussmaul
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Cheyne Stoke
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Reguler
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Takipnea
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Kurang 2 detik
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Normal
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Vesikuler
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Wheezing
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>Ronchi
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Hangat
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Simetris
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
                                                            <label class="form-check-label" for="inlineCheckbox2">
                                                                <center>
                                                                    Ya
                                                                </center>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="height:20px;width:20px">
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

                            <!-- tab3 -->
                            <div class="tab-pane fade" id="anamnesis1" role="tablist" aria-labelledby="anamnesis-tab1">
                                <div class="form-group-row">
                                    <div class="col-12">
                                        <form>

                                            <div class="form-group row">
                                                <div for="inputPassword3" class="col-sm-2 col-form-label">Keluhan Utama</div>
                                                <div class="col-sm-10">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div for="inputPassword3" class="col-sm-2 col-form-label">Riwayat Penyakit</div>
                                                <div class="col-sm-10">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div for="inputPassword3" class="col-sm-2 col-form-label">Riwayat Alergi</div>
                                                <div class="col-sm-10">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div for="inputPassword3" class="col-sm-2 col-form-label">Riwayat Pengobatan</div>
                                                <div class="col-sm-10">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 4 -->
                            <div class="tab-pane fade" id="asesmentnyeri1" role="tablist" aria-labelledby="asesmentnyeri-tab1">
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label class="col-sm-3">Nyeri?</label>
                                            <div class="row">
                                                <div class="card-body col-sm-5">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" id="nyeri" name="nyeri" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                                <label class="form-check-label" for="Ya">Ya</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" id="nyeri" name="nyeri" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                                <label class="form-check-label" for="Tidak">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row gutters-sm">
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr type=" checkbox" value="1" class="imagecheck-input" />
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/tidak-nyeri.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Tidak Nyeri</p>
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr" type="checkbox" value="2" class="imagecheck-input" / style="height:20px;width:20px">
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-ringan.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Nyeri Ringan</p>
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr" type="checkbox" value="3" class="imagecheck-input" / style="height:20px;width:20px">
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-mengganggu.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Nyeri yang Mengganggu</p>
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr" type="checkbox" value="3" class="imagecheck-input" / style="height:20px;width:20px">
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-menyusahkan.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Nyeri yang Menyusahkan</p>
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr" type="checkbox" value="3" class="imagecheck-input" / style="height:20px;width:20px">
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-hebat.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Nyeri Hebat</p>
                                                    </label>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <label class="imagecheck mb-4">
                                                        <input name="nyeri_gmbr" id="nyeri_gmbr" type="checkbox" value="3" class="imagecheck-input" / style="height:20px;width:20px">
                                                        <figure class="imagecheck-figure">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-sangat-hebat.png" alt="}" class="imagecheck-image">
                                                        </figure>
                                                        <p style="text-align: center;">Nyeri Sangat Hebat</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <label class="col-sm-3">Nyeri?</label>
                                            <div class="row">
                                                <div class="card-body">
                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/range-nyeri.png" alt="}" class="imagecheck-image">
                                                    <input type="range" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <label class="col-sm-3">Skala</label>
                                            <div class="row">
                                                <div class="card-body col-sm-5">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Ya" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="Ya">Ya</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" id="skala" name="skala" type="checkbox" value="Tidak" style="height:20px;width:20px">
                                                                    <label class="form-check-label" for="Tidak">Tidak</label>
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

                            <!-- tab 5 -->
                            <div class="tab-pane fade" id="asesmentresikojatuh1" role="tablist" aria-labelledby="asesmentresikojatuh-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0">Resiko Jatuh</th>
                                            <th style="border:0">Skor</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- 1 -->
                                        <tr>
                                            <th class="col-sm-3">Usia</th>
                                            <td>5 - 3 tahun</td>
                                            <td class="col-sm-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>4</center>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>3 - 7 tahun</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>3</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>8 - 13 tahun</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <td>14 - 18 tahun</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>1</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    <tbody></tbody>

                                    <!-- 2 -->
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>Laki - Laki </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Perempuan</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 3 -->
                                    <tr>
                                        <th>Diagnosis</th>
                                        <td>Kelainan neurologi</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>4</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td>Ggn Oks (Dypsnoe, Anemia, Sinkop, Dehidrasi, Anoreksis, Sakit kepala)</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>3</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td>Kelemahan Fisik</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td>Diagnosis Lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>


                                    <tbody></tbody>
                                    <tr>
                                        <th>Lingkungan</th>
                                        <td>Riwayat jatuh dari tempat tidur saat bayi/anak</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>4</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- 3 -->
                                    <tr>
                                        <th></th>
                                        <td>Memakai alat bantu (Box/Mebel)</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>3</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Berada di tempat tidur</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Berada di luar ruang perawatan</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                        <tbody></tbody>

                                        <!-- 4 -->
                                    <tr>
                                        <th>Respon Operasi / Sedasi / Anastesi</th>
                                        <td>
                                            < 24 Jam</td> <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>
                                            < 48 Jam</td> <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>1</center>
                                                    </label>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td> > 48 Jam</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 5 -->
                                    <tr>
                                        <th>Penggunaan Obat</th>
                                        <td>Obat sedactive (Kecuali pasien ICU yang tersedasi) dan paralyzed, Mipnotik, Phenotiazin, Barbuturat, Anti Depresan, Diurostik, Narkotik</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Salah satu obat di atas</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Pengobatan Lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>



                                    <tr>
                                        <th>Total Skor </th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Resiko Rendah : 7 - 11</b></center>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Resiko Tinggi : > 12</b></center>
                                                </label>
                                            </div>
                                        </td>

                                        <td><input type="text" class="form-control col-6"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- tab 6 -->
                            <div class="tab-pane fade" id="statusfungsional1" role="tablist" aria-labelledby="statusfungsional-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0">Status Fungsional</th>
                                            <th style="border:0">Skor</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- 1 -->
                                        <tr>
                                            <th class="col-sm-3">Mengendalikan rangsang defaksi</th>
                                            <td class="col-sm-4">Tak terkendali / tak teratur (perlu pencahar)</td>
                                            <td class="col-sm-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>4</center>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Kadang - kadang tak terkendali</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>3</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Terkendali Teratur</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>


                                    <tbody></tbody>

                                    <!-- 2 -->
                                    <tr>
                                        <th>Mengendalikan rangsang berkemih</th>
                                        <td>Tak Terkendali pakai ketater</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Kadang kadang tak terkendali (1 x 24 Jam)</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 3 -->
                                    <tr>
                                        <th>Membersihkan diri (cuci muka, sisir rambut, sikat gigi)</th>
                                        <td>Butuh pertolongan orang lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>4</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>3</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tbody></tbody>
                                    <tr>
                                        <th>Penggunaan jamban masuk dan keluar (melepaskan memakai celana membersihkan menyiram)</th>
                                        <td>Tergantung pertolongan orang lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>4</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- 3 -->
                                    <tr>
                                        <th></th>
                                        <td>Perlu pertolongan pada beberapa kegiatan tetapi dapat mengerjakan sendiri kegiatan lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>3</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <tbody></tbody>

                                        <!-- 4 -->
                                    <tr>
                                        <th>Makan</th>
                                        <td>
                                            Tidak mampu
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>
                                            Perlu pertolongan memotong makan</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td> Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 5 -->
                                    <tr>
                                        <th>Berubah sikap dan berbaring ke duduk</th>
                                        <td>Tidak mampu</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Bisa (pindah) dengan bantuan 1 orang</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 6 -->
                                    <tr>
                                        <th>Berpindah / Berjalan</th>
                                        <td>Tidak mampu</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Bisa (pindah) dengan kursi roda</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Berjalan dengan bantuan 1 orang</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 7 -->
                                    <tr>
                                        <th>Memakai baju</th>
                                        <td>Tergantung orang lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Sebagian dibantu (misalnya mengancing baju)</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 8 -->
                                    <tr>
                                        <th>Naik turun tangga</th>
                                        <td>Tidak mampu</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Butuh pertolongan</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>2</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>

                                    <!-- 9 -->
                                    <tr>
                                        <th>Mandi</th>
                                        <td>Tergantung orang lain</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>0</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>Mandiri</td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center>1</center>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tbody></tbody>

                                    <!-- skor -->
                                    <tr>
                                        <th>Kesimpulan</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Mandiri (20)</b></center>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Ketergantungan Ringan (12-19)</b></center>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Ketergantungan Sedang (9-11)</b></center>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Ketergantungan Berat (5-10)</b></center>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <center><b>Ketergantungan Total < 5 </b> </center> </label> </div> </td> <td><input type="text" class="form-control col-6">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- tab 7 -->
                            <div class="tab-pane fade" id="skriningnutrisional1" role="tablist" aria-labelledby="skriningnutrisional-tab1">
                                <!-- <table class="table table-hover col-12">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Resiko Nutrisional</th>
                                            <th scope="col">Skor</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1. Apakah pasien mengalami penurunan berat badan yang tidak direncanakan/tidak diinginkan dalam 6 bulan terakhir ?</th>
                                            <td class="col-sm-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>4</center>
                                                    </label>
                                                </div>
                                            </td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2. Apakah asupan makan pasien berkurang karena penurunan nafsu makan/kesulitan menerima makanan?</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>

                                        </tr>
                                    </tbody>
                                </table> -->
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Resiko Nutrisional</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Parameter</th>
                                            <th scope="col"></th>
                                            <th scope="col">Skor</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <th class="col-1">1</th>
                                        <td class="col-5">Apakah pasien mengalami penurunan berat badan yang tidak direncanakan/tidak diinginkan dalam 6 bulan terakhir ?</td>
                                        <td class="col-2 col-sm-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Tidak
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Turun BB sebanyak
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    1 - 5 kg
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    6 - 10 kg
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    11- 15 kg
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    > 15 kg
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Tidak tahu berapa kg penurunannya
                                                </label>
                                            </div>
                                        </td>

                                        <td class="col-2 col-sm-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    0
                                                </label>
                                            </div>
                                        </td>


                                        <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Apakah asupan makan pasien berkurang karena penurunan nafsu makan/kesulitan menerima makanan?</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Tidak</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Ya</center>
                                                    </label>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- tab 8 -->
                            <div class="tab-pane fade" id="kebutuhanedukasi1" role="tablist" aria-labelledby="kebutuhanedukasi-tab1">
                                <div class="form-group-row">
                                    <div class="col-12">
                                        <form>
                                            <div class="form-group row">
                                                <div for="" class="col-sm-2 col-form-label">Bicara</div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Normal</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Gangguan Bicara</center>
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div for="" class="col-sm-2 col-form-label">Perlu Penerjemah</div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Tidak</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Ya , Bahasa</center>
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div for="" class="col-sm-2 col-form-label">Hambatan Belajar</div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Tidak</center>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>Ya , Bahasa</center>
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <textarea name="keluhan" class="form-control"></textarea>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- tab 9 -->
                            <div class="tab-pane fade" id="diagnosiskeperawatan1" role="tablist" aria-labelledby="diagnosiskeperawatan-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col-4"></th>
                                                <th scope="col-4">Diagnosis Keperawatan</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                        <tbody></tbody>
                                        <td></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Bersihan jalan nafas berhubungan dengan spasme jalan nafas
                                                </label>
                                            </div>
                                        </td>


                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Gangguan pertukaran gas berhubungan dengan ketidakseimbangan ventilasi perfusi
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Pola nafas tidak efektif berhubungan dengan hambatan upaya nafas
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko aspirasi berhubungan dengan penurunan kesadaran.
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Penurunan curah jantung berhubungan dengan perubahan frekuensi jantung
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Perfusi jaringan berhubungan dengan aliran arteri/vena
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Hipovolemik berhubungan dengan gangguan mekanisme regulasi
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Hipertermi berhubungan dengan proses infeksi
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Diare berhubungan dengan inflamasi gastrointestinal
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Nausea berhubungan dengan distensi lambung
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Nyeri akut berhubungan dengan agen pencedera
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko perdarahan berhubungan dengan trauma
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko defisit cairan berhubungan dengan pengeluaran berlebihan melalui kulit,hipermetabolisme
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko infeksi berhubungan dengan hilangnya proteksi primer
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Perubahan pola nafas berhubungan dengan efek racun dalam tubuh
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko terjadi disfungsi neurovaskuler perifer berhubungan dengan adanya racun di tubuh,
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Icterus neonatus berhubungan dengan kesulitan transisi ke kehidupan
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </table>
                            </div>

                            <!-- tab 10  -->
                            <div class="tab-pane fade" id="rencanaasuhan1" role="tablist" aria-labelledby="rencanaasuhan-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col-4"></th>
                                                <th scope="col-4">Rencana Asuhan</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                        <tbody></tbody>
                                        <td></td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Pemberian oksigen (nasal, kanul, masker sederhana, masker nonre brething, reabreathing, dan ventilator)
                                                </label>
                                            </div>
                                        </td>


                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memasang oksimetri
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Melakukan suction melalui mulut/hidung
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memberikan bantuan nafas melalui BVM/Pocket Mask
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memasang OPA (Oropharungeal airway)
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memasang EKG
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memasang infus dan resultiasi cairan
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Melakukan resultasi jantung pulmional
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        pemasangan collar leher
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Memberikan insulin
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Melakukan pembidaian
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Melakukan perawatan luka
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Perawatan luka bakar
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Melakukan kumbah lambung
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Manajemen nyeri
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <!-- <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Risiko terjadi disfungsi neurovaskuler perifer berhubungan dengan adanya racun di tubuh,
                                                    </label>
                                                </div>
                                            </td>
                                           
                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Icterus neonatus berhubungan dengan kesulitan transisi ke kehidupan
                                                    </label>
                                                </div>
                                            </td>
                                           
                                        </tr> -->

                                        </tbody>
                                    </table>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>




</section>