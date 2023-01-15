<section class="section">
    <div class="section-header">
        <h5>Asesment Awal Medis Penyakit Dalam</h5>
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
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-tab="mygroup-tab" href="#tab1">Anamnesis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab2">Pemeriksaan Fisik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab3">Pemeriksaan Penunjang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab4">Diagnosa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab5">Terapi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-tab="mygroup-tab" href="#tab6">Anjuran</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab1" class="col-14 active" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>ANAMNESIS</h4>
                </div>
                <div class="row">
                    <div class="card-body col-12">
                        <div class="form-group">
                            <label>Auto Anamnesis</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Allo Anamnesis : Suami/Istri/Anak/Lainnya</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Alergi</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Obat yang dikonsumsi</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab2" class="col-14" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>PEMERIKSAAN FISIK</h4>
                </div>
                <div class="row">
                    <div class="card-body col-12">
                        <div class="form">
                            <label>Kondisi Umum</label>
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cukup" name="customRadio" class="custom-control-input" value="option1">
                                        <label class="custom-control-label" for="cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="lemah" name="customRadio" class="custom-control-input" value="option2">
                                        <label class="custom-control-label" for="lemah">Lemah</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <label>Kepala Leher</label>
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Anemis</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Icterus</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Cyanosis</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Dypsnea</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio5">Pembesaran Kelenjar Getah Bening</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio6">Lainnya</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <label>Thorax</label>
                            <div class="row">
                                <div class="card-body">
                                    <h6>- Cor</h6>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">S1-S2 tunggal</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Murmur</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Gallop</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Lainnya</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <h6>- Pulmo</h6>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Ves/ves</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Ronchi</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Wheezing</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Lainnya</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <label>Abdomen</label>
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Supel</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Meteorismus</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Hepar/Lien</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Bising usus</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Lainnya</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <label>Ekstremitas</label>
                            <div class="row">
                                <div class="card-body">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Oedem</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Akral</label>
                                        </div>
                                        <div class="form" style="margin-left: 10px;">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab3" class="col-14" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>PEMERIKSAAN PENUNJANG</h4>
                </div>
                <div class="row">
                    <div class="card-body col-12">
                        <div class="form-group">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab4" class="col-14" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>DIAGNOSA</h4>
                </div>
                <div class="row">
                    <div class="card-body col-12">
                        <div class="form-group">
                            <label>Diagnosa Kerja</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Diagnosa Banding</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab5" class="col-14" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>TERAPI</h4>
                </div>
                <div class="row">
                    <div class="card-body col-sm-3 col-md-6">
                        <div class="form">
                            <label>Terapi</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-body col-sm-3 col-md-6">
                        <div class="form">
                            <label>Tindakan/rencana tindakan</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab6" class="col-14" data-tab-group="mygroup-tab">
            <div class="card">
                <div class="card-header">
                    <h4>Anjuran Kontrol Kembali</h4>
                </div>
                <div class="row">
                    <div class="card-body col-sm-3 col-md-6">
                        <div class="form">
                            <label>Anjuran Kontrol Kembali</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-body col-sm-3 col-md-6">
                        <h7>Rawat Inap</h7>
                        <div class="form">
                            <label>Indikasi:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <br>
                        <h7>Rujuk Ke</h7>
                        <div class="form">
                            <label>Indikasi:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>