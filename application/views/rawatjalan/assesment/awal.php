<section class="section">
    <div class="section-header">
        <h5>Pengkajian Awal Medis Rawat Jalan</h5>
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

            <!-- tab 2 -->
            <div id="tab2" class="col-14" data-tab-group="mygroup-tab">
                <div class="card">
                    <div class="card-header">
                        <h4>II. PEMERIKSAAN FISIK</h4>
                    </div>
                    <div class="row">
                        <div class="card-body col-12">
                            <div class="form">
                                <label>1. Keadaan Umum :</label>
                                <div class="row">
                                    <div class="card-body">
                                        <div class="form">
                                            <label>TB</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>BB</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>GCS</label>
                                            <input type="text" class="form-control">
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
                                            <input type="text" class="form-control">
                                            <p>mmhg</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>Suhu</label>
                                            <input type="text" class="form-control">
                                            <p>Celcius</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>Nadi</label>
                                            <input type="text" class="form-control">
                                            <p>x/mnt</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>RR</label>
                                            <input type="text" class="form-control">
                                            <p>x/mnt</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>GDA</label>
                                            <input type="text" class="form-control">
                                            <p>mg/dl</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form">
                                            <label>SpO2</label>
                                            <input type="text" class="form-control">
                                            <p>%</p>
                                        </div>

                                        <!-- button  -->
                                        <div class="form-group row">
                                            <div class="col-md"></div>
                                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab1">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                                            <div class="col-lg-4 col-md-5 text-right">
                                                <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab3">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
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

        <!-- tab 3 -->
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
                        <!-- button  -->
                        <div class="form-group row">
                            <div class="col-md"></div>
                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab3">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                            <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                            <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab4">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tab 4 -->
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
                    <!-- button  -->
                    <div class="form-group row">
                        <div class="col-md"></div>
                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab4">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab5">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tab 5 -->
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
                    <!-- button  -->
                    <div class="form-group row">
                        <div class="col-md"></div>
                        <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab5">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                        <!-- <div class="col-lg-4 col-md-5 text-right"> -->
                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab6">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tab 6 -->
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

                    <!-- button  -->
                    <div class="form-group row">
                        <div class="col-md"></div>
                        <div class="col-lg-4 col-md-5 text-right">
                            <a button class="btn btn-outline-warning" data-tab="mygroup-tab" role="tablist" href="#tab6">Kembali <i class="fas fa-arrow-left"></i></a> </button>
                            <!-- <div class="col-lg-4 col-md-5 text-right">
                        <a button class="btn btn-outline-primary" data-tab="mygroup-tab" role="tablist" href="#tab7">Selanjutnya <i class="fas fa-arrow-right"></i></a> </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>