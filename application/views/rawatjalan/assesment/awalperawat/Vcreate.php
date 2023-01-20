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
                            <td><?php echo $this->session->userdata('nmpasien'); ?></td>
                            <td><?php echo $this->session->userdata('nomrm'); ?></td>
                            <td><?php echo $this->session->userdata('norj'); ?></td>
                            <td><?php echo $this->session->userdata('kelamin'); ?></td>

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
                            <td><?php echo $this->session->userdata('identitas'); ?></td>
                            <td><?php echo $this->session->userdata('umurthn'); ?></td>
                            <td><?php echo $this->session->userdata('noasuransi'); ?></td>
                            <td></td>

                        </tr>
                        <tr>
                    </table>

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
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab10" role="tab" aria-selected="false">Rencana Asuhan Keperawatan</a>
                            </li>
                        </ul>
                        <form action="<?php echo site_url('Cassessmentawalperawat/insert') ?>" method="post" enctype="multipart/form-data" >
                        <!-- tab 1 -->
                        <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
                            <div class="col-12">
                                <div class="row">
                                    <div class="card-body col-12">
                                        <div class="form">
                                            <label><b>Asal Pasien</b></label>
                                            <div class="row">
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="datangsendiri" onclick="javascript:asalpasienCheck();" name="asalpasien" class="custom-control-input" value="Datang Sendiri">
                                                        <label class="custom-control-label" for="datangsendiri">Datang Sendiri</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="card-body" id="ifYess" style="visibility:hidden">
                                                    <div class="form">
                                                        <input type="text" id="return" name="asalpasien" class="form-control" value="Datang Sendiri">
                                                    </div>
                                                </div> -->
                                                <div class="card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="dirujukdari" onclick="javascript:asalpasienCheck();" name="asalpasien" class="custom-control-input">
                                                        <label class="custom-control-label" for="dirujukdari">Dirujuk Dari</label>
                                                    </div>
                                                </div>
                                                <div class="card-body" id="ifYes" style="visibility:hidden">
                                                    <div class="form">
                                                        <input type="text" id="return" name="asalpasien" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal/Jam</label>
                                                <input type="datetime-local" name="tanggal" class="form-control datetimepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-header">
                                    <h4>I. ANAMNESIS</h4>
                                </div>
                                <div class="card-body col-12">
                                    <div class="form-group">
                                        <textarea name="anamnesis" class="form-control"></textarea>
                                    </div>
                                    <div class="form">
                                        <label>1. Riwayat Penyakit Dahulu</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="tidakadapenyakit" onclick="javascript:riwayatpenyakitCheck();" name="riwayat_penyakit" class="custom-control-input">
                                                    <label class="custom-control-label" for="tidakadapenyakit">Tidak Ada</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="adapenyakit" onclick="javascript:riwayatpenyakitCheck();" name="riwayat_penyakit" class="custom-control-input">
                                                    <label class="custom-control-label" for="adapenyakit">Ada, sebutkan</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="adapenyakityes" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="riwayat_penyakit" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <label>2. Riwayat Penggunaan Obat</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="tidakadaobat" onclick="javascript:riwayatobatCheck();" name="riwayat_penggunaan_obat" class="custom-control-input">
                                                    <label class="custom-control-label" for="tidakadaobat">Tidak Ada</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="adaobat" onclick="javascript:riwayatobatCheck();" name="riwayat_penggunaan_obat" class="custom-control-input">
                                                    <label class="custom-control-label" for="adaobat">Ada, sebutkan</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="adaobatyes" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="riwayat_penggunaan_obat" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <label>3. Riwayat Alergi</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="tidakadaalergi" onclick="javascript:riwayatalergiCheck();" name="riwayat_alergi" class="custom-control-input">
                                                    <label class="custom-control-label" for="tidakadaalergi">Tidak Ada</label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="adaalergi" onclick="javascript:riwayatalergiCheck();" name="riwayat_alergi" class="custom-control-input">
                                                    <label class="custom-control-label" for="adaalergi">Ada, sebutkan</label>
                                                </div>
                                            </div>
                                            <div class="card-body" id="adaalergiyes" style="visibility:hidden">
                                                <div class="form">
                                                    <input type="text" name="riwayat_alergi" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- button  -->
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
                        <!-- tab 2 -->
                        <div id="tab2" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-header">
                                <h4>II. PEMERIKSAAN FISIK</h4>
                            </div>
                            <!-- card 1 -->
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md col-12">
                                            <div class="form">
                                                <label>1. Keadaan Umum </label>
                                                <div class="row">
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>TB</label>
                                                        </div>
                                                        <input type="text" name="tb" class="form-control col-6">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>BB</label>
                                                            <input type="text" name="bb" class="form-control col-5">
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>GCS</label>
                                                            <input type="text" name="gcs" class="form-control col-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form">
                                                <label>2. Tanda Vital</label>
                                                <div class="row">
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>TD</label>
                                                            <input type="text" name="td" class="form-control col-5">
                                                            <p>mmhg</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>Suhu</label>
                                                            <input type="text" name="suhu" class="form-control col-5">
                                                            <p>oC</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>Nadi</label>
                                                            <input type="text" name="nadi" class="form-control col-5">
                                                            <p>x/mnt</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>RR</label>
                                                            <input type="text" name="rr" class="form-control col-5">
                                                            <p>x/mnt</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>GDA</label>
                                                            <input type="text" name="gda" class="form-control col-3">
                                                            <p>mg/dl</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form">
                                                            <label>SpO2</label>
                                                            <input type="text" name="spo2" class="form-control col-3">
                                                            <p>%</p>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md"></div>
                                                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                            <div class="col-lg-4 col-md-5 text-right">
                                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab3">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- tab 3 -->
                        <div id="tab3" class="col-14" data-tab-group="mygroup-tab">
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

                                    <div class="form">
                                        <label>5. Pendidikan</label>
                                        <div class="card-body col-12">
                                            <div class="form">
                                                <input type="text" name="pendidikan" class="form-control col-5">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form">
                                        <label>6. Pekerjaan</label>
                                        <div class="card-body col-12">
                                            <div class="form">
                                                <input type="text" name="pekerjaan" class="form-control col-5">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- button  -->
                                    <div class="form-group row">
                                        <div class="col-lg-4 col-md-5 text-right">
                                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab3">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                            <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab4">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 4 -->
                        <div id="tab4" class="col-14" data-tab-group="mygroup-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>IV. SKRINING GIZI AWAL</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-body col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-md">
                                                        <tr>
                                                            <th>
                                                                <center>
                                                                    No
                                                                </center>
                                                            </th>
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
                                                            <td><b>Total Skor </b></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                        </tr>
                                                    </table>
                                                </div>
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
                            </div>
                        </div>
                        <!-- tab 5 -->
                        <div id="tab5" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-header">
                                <h4>V. ASESMEN RESIKO JATUH</h4>
                            </div>
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="form">
                                        <label class="col-5">Apakah anda merasa tidak stabil saat berdiri atau berjalan ?</label>
                                        <div class="row">
                                            <div class="card-body col-sm-5">
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
                                    </div>
                                    <div class="form">
                                        <label class="col-5">Apakah anda khawatir akan jatuh ?</label>
                                        <div class="row">
                                            <div class="card-body col-sm-5">
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
                                    </div>
                                    <div class="form">
                                        <label class="col-5">Apakah anda pernah jatuh dalam setahun terakhir ?</label>
                                        <div class="row">
                                            <div class="card-body col-sm-5">
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
                                        <!-- button  -->
                                        <div class="form-group row">
                                            <div class="col-lg-5 col-md-10 text-right">
                                                <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab5">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab6">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 6 -->
                        <div id="tab6" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card-header">
                                <h4 class="col-sm-3">VI. ASESMEN NYERI</h4>
                            </div>
                            <div class="row">
                                <div class="card-body col-12">
                                    <div class="form">
                                        <label class="col-sm-3">Nyeri?</label>
                                        <div class="row">
                                            <div class="card-body col-sm-5">
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
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                                        </div>
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

                                    <table class="table table-striped table-md">
                                        <!-- 1 -->
                                        <tr>
                                            <th>Mengendalikan rangsang defaksi</th>
                                            <td>Tak terkendali / tak teratur(perlu pencahar)</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Kadang-kadang tak terkendali</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>1</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Terkendali teratur</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 2 -->
                                        <tr>
                                            <th>Mengendalikan rangsang berkemih</th>
                                            <td>Tak terkendali pakai kateter</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Kadang Kadang tak terkendali (1x24 jam)</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Membersihkan diri(cuci muka, sisir rambut, sikat gigi)</th>
                                            <td>Butuh pertolongan orang lain</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>1</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>


                                        <!-- 3 -->
                                        <tr>
                                            <th>Penggunaan jamban masuk dan keluar (melepaskan, memakai, celanan, membersihkan, menyiram)</th>
                                            <td>Tergantung pertolongan orang lain</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Perlu pertolongan pada beberapa kegiatan tetapi dapat mengerjakan sendiri kegiatan lain</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 4 -->
                                        <tr>
                                            <th>Makan</th>
                                            <td>Tidak mampu</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Perlu pertolongan memotong makan</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 5 -->
                                        <tr>
                                            <th>Berubah sikap dan berbaring duduk</th>
                                            <td>Tidak mampu</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>0</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>Perlu banyak bantuan untuk bisa duduk(2 orang)</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 6 -->
                                        <tr>
                                            <th>Berpindah / berjalan</th>
                                            <td>Tidak mampu</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 7 -->
                                        <tr>
                                            <th>Memakai baju</th>
                                            <td>Tergantung orang lain</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>2</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- 8 -->
                                        <tr>
                                            <th>Mandi</th>
                                            <td>Tergantung orang lain</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>1</center>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Total Skor </th>
                                            <td></td>
                                            <td><input type="text" class="form-control col-10"></td>
                                        </tr>

                                    </table>
                                    <div class="form">
                                        <label>Kesimpulan </label>
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
                                                            <label class="form-check-label" for="inlineCheckbox2">Ketergantungan Total (Kurang 5)</label>
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
                                    <h4>VIII Kebutuhan Edukasi</h4>
                                </div>

                                <div class="form">
                                    <label class="col">Bicara</label>
                                    <div class="form">
                                        <div class="card-body">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Normal</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Gangguan bicara </label> <input type="text" class="form-control col-5">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form">
                                        <label class="col">Perlu Penerjemah</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="form">
                                                    <div class="form-group-rpw">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Tidak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Ya : </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-row">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Pendengaran</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Agama</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Penglihatan</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Kognotif</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Fisik</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Budaya</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-row">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Agama</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Emosi</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Bahasa</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form">
                                        <label class="col">Kebutuhan Pembelajaran</label>
                                        <div class="row">
                                            <div class="card-body">
                                                <div class="form">
                                                    <div class="form-group-rpw">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Proses penyakit</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">Manajemen Nyeri</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox3">Terpai/Obat</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox4">Diet/Nurisi</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox5">Rehabiliasi</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox6">Lainnya</label>
                                                            <input type="text" class="form-control col-5">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 9 -->
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
                        <!-- tab 10 -->
                        <div id="tab10" class="col-14" data-tab-group="mygroup-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4>X Rencana Asuhan Keperawatan</h4>
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
</section>

<script type="text/javascript">
    $(document).on('change', 'input:radio[name=asalpasien]', function() {
        $('div[id^="try"]').toggle(); // toggle all DIVs begining with "my_radio_"
        $('#' + $(this).attr('id') + '_text').show(); // show the current one
    });
</script>