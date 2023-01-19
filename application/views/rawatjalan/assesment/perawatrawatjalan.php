<section class="section">
    <div class="section-header">
        <h5>Pengkajian Awal Keperawatan Rawat Jalan</h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
</section>


<!-- Main content -->
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
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3" role="tab" aria-selected="false">Psiko Sosial Spiritual dan Ekonomi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab4" role="tab" aria-selected="false">Skrining Gizi Awal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab5" role="tab" aria-selected="false">Asesmen Resiko Jatuh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab6" role="tab" aria-selected="false">Asesmen Nyeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab7" role="tab" aria-selected="false">Status Fungsional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab8" role="tab" aria-selected="false">Kebutuhan Edukasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab9" role="tab" aria-selected="false">Diagnosa Keparawatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab=" mygroup-tab" href="#tab10" role="tab" aria-selected="false">Rencana Asuhan Keperawatan</a>
                            </li>
                        </ul>

                        <!-- tab 1 -->
                        <div id="#tab1" class="col-12 active" data-tab-group="mygroup-tab">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form">
                                        <label class="col-sm-9"><b>Asal Pasien</b></label>
                                        <label class="col-2"> Tanggal / Jam</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Datang Sendiri</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Dirujuk Dari</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form">
                                                    <input type="text" class="form-control col-sm-10">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="datetime-local" class="form-control datepicker">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4>I. ANAMNESIS</h4>
                                    </div>

                                    <div class="card-body col-12">
                                        <div class="form-group">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form">
                                            <label class="col-sm-3">1. Riwayat Penyakit Dahulu</label>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Tidak Ada</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Ada, sebutkan</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form col-sm-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <label class="col-sm-3">2. Riwayat Penggunaan Obat</label>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Tidak Ada</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Ada, sebutkan</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form">
                                            <label class="col-sm-3">3. Riwayat Alergi</label>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Tidak Ada</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Ada, sebutkan</label>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md"></div>
                                            <!-- <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button> -->
                                            <div class="col-lg-4 col-md-5 text-right">
                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab2">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- tab 2 -->
                        <div id="tab2" class="col-12 " data-tab-group="mygroup-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4>II. PEMERIKSAAN FISIK</h4>
                                </div>

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
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div id="tab3" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>III. PSIKO SOSIAL SPIRITUAL DAN EKONOMI</h4>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-12">
                                                <div class="form">
                                                    <label>1. Persepsi pasien terhadap penyakitnya</label>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Cobaan Tuhan</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Hukuman</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Lainnya</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>2. Ekspresi pasien terhadap penyakitnya</label>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Murung/diam</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Gelisah</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Lainnya</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>3. Gangguan konsep diri</label>
                                                    <div class="card-body col-12">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>4. Reaksi anak interaksi (Khusus pasien anak)</label>
                                                    <div class="card-body col-12">
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Kooperatif</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Tidak Kooperatif</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox3">Curiga</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form">
                                                        <label>5. Pendidikan</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>6. Pekerjaan</label>
                                                    <input type="text" class="form-control">
                                                </div>


                                                <!-- button  -->
                                                <!-- <div class="form-group row">
                                                <div class="col-md"></div>
                                                <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab3">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                
                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab4">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                            </div> -->
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

                                <!-- tab 6 -->
                                <div id="tab6" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>VI. ASESMEN NYERI</h4>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-12">
                                                <div class="form">
                                                    <label>Nyeri ?</label>
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
                                                <div class="form-group">
                                                    <div class="row gutters-sm">
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/tidak-nyeri.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Tidak Nyeri</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input" checked />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-ringan.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Nyeri Ringan</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input" />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-mengganggu.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Nyeri yang Mengganggu</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input" checked />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-menyusahkan.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Nyeri yang Menyusahkan</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input" />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-hebat.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Nyeri Hebat</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-sm-4">
                                                            <label class="imagecheck mb-4">
                                                                <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input" />
                                                                <figure class="imagecheck-figure">
                                                                    <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-sangat-hebat.png" alt="}" class="imagecheck-image">
                                                                </figure>
                                                                <p style="text-align: center;">Nyeri Sangat Hebat</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>Nyeri ?</label>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/range-nyeri.png" alt="}" class="imagecheck-image">
                                                            <input type="range" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <label>Skala</label>
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Akut</label>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Kronis</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md"></div>
                                                                <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab6 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                                <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab7">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div id="tab7" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>VII. Status Fungsional</h4>
                                        </div>
                                        <div class="card-body">

                                            <table class="table table-bordered table-md">
                                                <!-- 1 -->
                                                <tr>
                                                    <th>Mengendalikan rangsang defaksi</th>
                                                    <td>Tak terkendali / tak teratur(perlu pencahar)</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Kadang-kadang tak terkendali</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Terkendali teratur</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 2 -->
                                                <tr>
                                                    <th>Mengendalikan rangsang berkemih</th>
                                                    <td>Tak terkendali pakai kateter</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Kadang Kadang tak terkendali (1x24 jam)</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <tr>
                                                    <th>Membersihkan diri(cuci muka, sisir rambut, sikat gigi)</th>
                                                    <td>Butuh pertolongan orang lain</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>1</td>
                                                </tr>


                                                <!-- 3 -->
                                                <tr>
                                                    <th>Penggunaan jamban masuk dan keluar (melepaskan, memakai, celanan, membersihkan, menyiram)</th>
                                                    <td>Tergantung pertolongan orang lain</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Perlu pertolongan pada beberapa kegiatan tetapi dapat mengerjakan sendiri kegiatan lain</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 4 -->
                                                <tr>
                                                    <th>Makan</th>
                                                    <td>Tidak mampu</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Perlu pertolongan memotong makan</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 5 -->
                                                <tr>
                                                    <th>Berubah sikap dan berbaring duduk</th>
                                                    <td>Tidak mampu</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Perlu banyak bantuan untuk bisa duduk(2 orang)</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 6 -->
                                                <tr>
                                                    <th>Berpindah / berjalan</th>
                                                    <td>Tidak mampu</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Bisa (pindah) dengan bantuan 1 orang</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 7 -->
                                                <tr>
                                                    <th>Memakai baju</th>
                                                    <td>Tergantung orang lain</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Sebagian dibantu (misalnya mengancing baju)</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>2</td>
                                                </tr>

                                                <!-- 8 -->
                                                <tr>
                                                    <th>Mandi</th>
                                                    <td>Tergantung orang lain</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mandiri</td>
                                                    <td>1</td>
                                                </tr>

                                                <tr>
                                                    <th>Total Skor : </th>
                                                    <td></td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>

                                            </table>
                                            <div class="form">
                                                <label>Kesimpulan :</label>
                                                <div class="form">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Mandiri (20)</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Ringan(12-19)</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Sedang (9-11)</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Berat (5-10)</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Total (5)</label>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md"></div>
                                                                    <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab7 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                                    <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab8">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- tab 8 -->
                                <div id="tab8" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>VIII. Kebutuhan Edukasi</h4>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-sm-4 col-md-6">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3">Bicara </label>
                                                    <div class="col-lg-9 col-md-9">
                                                        <input type="text" class="form-control" name="nama">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-3">Gangguan bicara </label>
                                                    <div class="col-lg-9 col-md-9">
                                                        <input type="text" class="form-control" name="nama">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4">Perlu Penerjemah:</label>
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">Tidak</label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">Ya, bahasa</label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4">Hambatan Belajar:</label>
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">Tidak</label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">Ya</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Pendengaran</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Agama</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Penglihatan</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Emosi</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Kognotif</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Bahasa</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Fisik</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Lainnya</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Budaya</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4">Kebutuhan Pembelajaran :</label>
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">Proses Penyakit</label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">Manajemen nyeri</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Terapi/obat</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Diet/nutrisi</label>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio3">Rehabiliasi lainnya</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md"></div>
                                                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab8 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                            <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                            <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab9">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 9 -->
                                <div id="tab9" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>IX. Diagnosa Keperawatan</h4>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md"></div>
                                                    <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab9 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                    <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab10">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 10 -->
                                <div id="tab10" class="col-12" data-tab-group="mygroup-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>X. Rencana Asuhan Keperawatan</h4>
                                        </div>
                                        <div class="row">
                                            <div class="card-body col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md"></div>
                                                    <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab10 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                    <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab1">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
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
<<<<<<< HEAD
=======
        </div>
    </div>

    <!-- tab 6 -->
    <div id="tab6" class="col-14" data-tab-group="mygroup-tab">
        <div class="card">
            <div class="card-header">
                <h4>VI. ASESMEN NYERI</h4>
            </div>
            <div class="row">
                <div class="card-body col-12">
                    <div class="form">
                        <label>Nyeri ?</label>
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
                    <div class="form-group">
                        <div class="row gutters-sm">
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/tidak-nyeri.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Tidak Nyeri</p>
                                </label>
                            </div>
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input" checked />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-ringan.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Nyeri Ringan</p>
                                </label>
                            </div>
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input" />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-mengganggu.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Nyeri yang Mengganggu</p>
                                </label>
                            </div>
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input" checked />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-menyusahkan.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Nyeri yang Menyusahkan</p>
                                </label>
                            </div>
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input" />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-hebat.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Nyeri Hebat</p>
                                </label>
                            </div>
                            <div class="col-2 col-sm-2">
                                <label class="imagecheck mb-4">
                                    <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input" />
                                    <figure class="imagecheck-figure">
                                        <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/nyeri-sangat-hebat.png" alt="}" class="imagecheck-image">
                                    </figure>
                                    <p style="text-align: center;">Nyeri Sangat Hebat</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form">
                        <label>Nyeri ?</label>
                        <div class="row">
                            <div class="card-body">
                                <img src="<?= base_url() ?>/template/assets/img/assesment-nyeri/range-nyeri.png" alt="}" class="imagecheck-image">
                                <input type="range" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form">
                        <label>Skala</label>
                        <div class="row">
                            <div class="card-body">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Akut</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Kronis</label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md"></div>
                                    <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab6 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                    <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                    <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab7">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tab 7 -->
    <div id="tab7" class="col-14" data-tab-group="mygroup-tab">
        <div class="card">
            <div class="card-header">
                <h4>VII. Status Fungsional</h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-md">
                    <!-- 1 -->
                    <tr>
                        <th>Mengendalikan rangsang defaksi</th>
                        <td>Tak terkendali / tak teratur(perlu pencahar)</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Kadang-kadang tak terkendali</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Terkendali teratur</td>
                        <td>2</td>
                    </tr>

                    <!-- 2 -->
                    <tr>
                        <th>Mengendalikan rangsang berkemih</th>
                        <td>Tak terkendali pakai kateter</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Kadang Kadang tak terkendali (1x24 jam)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <th>Membersihkan diri(cuci muka, sisir rambut, sikat gigi)</th>
                        <td>Butuh pertolongan orang lain</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>1</td>
                    </tr>


                    <!-- 3 -->
                    <tr>
                        <th>Penggunaan jamban masuk dan keluar (melepaskan, memakai, celanan, membersihkan, menyiram)</th>
                        <td>Tergantung pertolongan orang lain</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Perlu pertolongan pada beberapa kegiatan tetapi dapat mengerjakan sendiri kegiatan lain</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <!-- 4 -->
                    <tr>
                        <th>Makan</th>
                        <td>Tidak mampu</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Perlu pertolongan memotong makan</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <!-- 5 -->
                    <tr>
                        <th>Berubah sikap dan berbaring duduk</th>
                        <td>Tidak mampu</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Perlu banyak bantuan untuk bisa duduk(2 orang)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <!-- 6 -->
                    <tr>
                        <th>Berpindah / berjalan</th>
                        <td>Tidak mampu</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Bisa (pindah) dengan bantuan 1 orang</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <!-- 7 -->
                    <tr>
                        <th>Memakai baju</th>
                        <td>Tergantung orang lain</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Sebagian dibantu (misalnya mengancing baju)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>2</td>
                    </tr>

                    <!-- 8 -->
                    <tr>
                        <th>Mandi</th>
                        <td>Tergantung orang lain</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Mandiri</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <th>Total Skor : </th>
                        <td></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                </table>
                <div class="form">
                    <label>Kesimpulan :</label>
                    <div class="form">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Mandiri (20)</label>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Ringan(12-19)</label>
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Sedang (9-11)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Berat (5-10)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Total (5)</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md"></div>
                                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab7 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab8">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- tab 8 -->
    <div id="tab8" class="col-14" data-tab-group="mygroup-tab">
        <div class="card">
            <div class="card-header">
                <h4>VIII. Kebutuhan Edukasi</h4>
            </div>
            <div class="row">
                <div class="card-body col-sm-4 col-md-6">
                    <div class="form-group row align-items-center">
                        <label class="col-md-3">Bicara </label>
                        <div class="col-lg-9 col-md-9">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-3">Gangguan bicara </label>
                        <div class="col-lg-9 col-md-9">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-4">Perlu Penerjemah:</label>
                        <div class="form">
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Tidak</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Ya, bahasa</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-4">Hambatan Belajar:</label>
                        <div class="form">
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Tidak</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Ya</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Pendengaran</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Agama</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Penglihatan</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Emosi</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Kognotif</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Bahasa</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Fisik</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Lainnya</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Budaya</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-md-4">Kebutuhan Pembelajaran :</label>
                        <div class="form">
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Proses Penyakit</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Manajemen nyeri</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Terapi/obat</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Diet/nutrisi</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Rehabiliasi lainnya</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-md"></div>
                                <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab8 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab9">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tab9" class="col-14" data-tab-group="mygroup-tab">
        <div class="card">
            <div class="card-header">
                <h4>IX. Diagnosa Keperawatan</h4>
            </div>
            <div class="row">
                <div class="card-body col-12">
                    <div class="form-group">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md"></div>
                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab9 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab10">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="tab10" class="col-14" data-tab-group="mygroup-tab">
        <div class="card">
            <div class="card-header">
                <h4>X. Rencana Asuhan Keperawatan</h4>
            </div>
            <div class="row">
                <div class="card-body col-12">
                    <div class="form-group">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md"></div>
                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab10 ">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab1">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


>>>>>>> 60225908c2f252724285da730a57bcc7b3467015


</section>