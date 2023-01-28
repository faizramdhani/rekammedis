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
                            <th>Poliklinik</th>
                            <th>Kode Rumah Sakit</th>
                        </tr>
                        <tr>
                            <td><?php echo $this->session->userdata('identitas'); ?></td>
                            <td><?php echo $this->session->userdata('umurthn'); ?></td>
                            <td><?php echo $this->session->userdata('nama'); ?></td>
                            <td></td>

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
                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="observasi-tab1" data-toggle="tab" href="#observasi1" role="tab" aria-controls="observasi" aria-selected="true">Observasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="parameter-tab1" data-toggle="tab" href="#parameter1" role="tab" aria-controls="parameter" aria-selected="false">Parameter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monitoring-tab1" data-toggle="tab" href="#monitoring1" role="tab" aria-controls="monitoring" aria-selected="false">Monitoring</a>
                            </li>

                        </ul>

                        <!-- tab 1 -->
                        <div class="tab-content" id="myTab3">
                            <div class="tab-pane fade show active" id="observasi1" role="tablist" aria-controls="observasi" aria-labelledby="observasi-tab1" aria-selected="true">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0">Tanggal MRS</th>
                                            <th style="border:0">Tanggal / Jam</th>
                                            <th style="border:0">Skor</th>

                                        </tr>
                                    </thead>

                                    <!-- baris 1 -->
                                    <tbody>

                                        <tr>
                                            <th class="col-sm-3"></th>
                                            <td class="col-sm-7"></td>


                                        </tr>

                                        <tr>
                                            <th></th>
                                            <td>Perilaku</td>
                                            <td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <td>Perilaku</td>
                                            <td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td>

                                            </td>
                                        </tr>

                                    <tbody></tbody>

                                    <!-- baris 2 -->
                                    <tr>
                                        <th>Perilaku/ Keadaan Umum</th>
                                        <td>Alert / Sadar Penuh</td>
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
                                        <td>Somnolen / Cenderung Tidur / Rewel</td>
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
                                        <td>Iritabel / Gelisah</td>
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
                                        <td>Letargi / Respon Nyeri Menurun</td>
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

                                    <!-- baris 2 -->
                                    <tr>
                                        <th>Kasdiovaskuler</th>
                                        <td>Merah, CRT < 2 Detik</td> <td>
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
                                        <td>Pucat, CRT > 3 Detik</td>
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
                                        <td>Sinosis, CRT > 4 Detik, Takikardi > 20 diatas Normal</td>
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
                                        <td>Sinosis, CRT > 5 Detik, Takikardi > 30 diatas Normal</td>
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


                                    <!-- baris 3 -->
                                    <tr>
                                        <th>Respirasi</th>
                                        <td>Normal sesuai usia, tidak ada retraksi</td>
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
                                        <td>RR > 10x/menit diatas parameter normal sesuai usia atau menggunakan otot bantu nafas atau butuh oksigen FiO2 30% (Setara 3 lpm nasal anul)</td>
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
                                        <td>RR > 20x/menit diatas parameter normal sesuai usia atau menggunakan otot bantu nafas atau butuh oksigen FiO2 40% (Setara 6 lpm simple mask)</td>
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
                                        <td>RR < 10x/menit diatas parameter normal sesuai usia atau menggunakan otot bantu nafas atau butuh oksigen FiO2 40% (Setara 8 lpm simple mask), merintih</td> <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height:20px;width:20px">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        <center>3</center>
                                                    </label>
                                                </div>
                                        </td>
                                    </tr>
                                    <tbody></tbody>


                                    <!-- baris 4 -->
                                    <tr>
                                        <th></th>
                                        <td>Skor 2 tambahan jika pasien 1/4 jam nebulasi (terus menerus) atau muntah persisten setelah operasi</td>
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


                                    <!-- baris 5 -->
                                    <tr>
                                        <th>Total Skor PEWS </th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>

                                    <!-- baris 6 -->
                                    <tr>
                                        <th>Pernafasan / RR </th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>

                                    <!-- baris 7 -->
                                    <tr>
                                        <th>Suhu</th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>

                                    <!-- baris 8 -->
                                    <tr>
                                        <th>Nadi </th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>

                                    <!-- baris 9 -->
                                    <tr>
                                        <th>SpO2 </th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>

                                    <!-- baris 10 -->
                                    <tr>
                                        <th>Tekanan Darah</th>
                                        <td>

                                        </td>

                                        <td><input type="text" class="form-control col-8"></td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>

                            <!-- tab2 -->
                            <div class="tab-pane fade " id="parameter1" role="tablist" aria-controls="parameter" aria-labelledby="parameter-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0">Tabel Parameter Normal</th>
                                            <th style="border:0"></th>

                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th style="border:0">Usia</th>
                                            <th style="border:0">Nadi</th>
                                            <th style="border:0">Pernafasan</th>

                                        </tr>
                                    </thead>

                                    <!-- baris 1 -->
                                    <tbody>

                                        <tr>
                                            <th class="col-sm-4"></th>
                                            <td class="col-sm-4"></td>
                                        </tr>

                                    <tbody></tbody>

                                    <!-- baris 2 -->
                                    <tr>
                                        <th>0 - 28 Hari</th>
                                        <td>100 - 160h</td>
                                        <td>30 - 50</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>1 - 12 Bulan</th>
                                        <td>90 - 150</td>
                                        <td>25 - 40</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>1 - 3 Tahun</th>
                                        <td>80 - 130</td>
                                        <td>20 - 30</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>4 - 5 Tahun</th>
                                        <td>80 - 120</td>
                                        <td>20 - 30</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>6 - 10 Tahun</th>
                                        <td>70 - 110</td>
                                        <td>15 - 30</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>11 - 14 Tahun</th>
                                        <td>60 - 105</td>
                                        <td>12 - 20</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th> > 15 Tahun</th>
                                        <td>60 - 100</td>
                                        <td>12 - 20</td>
                                    </tr>
                                    <tbody></tbody>



                                    </tbody>
                                </table>
                            </div>

                            <!-- tab3 -->
                            <div class="tab-pane fade" id="monitoring1" role="tablist" aria-labelledby="monitoring-tab1">
                                <table class="table table-hover table-sm col-12">
                                    <thead>
                                        <tr>
                                            <th style="border:0"></th>
                                            <th style="border:0">Monitoring</th>
                                            <th style="border:0"></th>

                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th class="col-sm-4" style="border:0">Skor</th>
                                            <th style="border:0">Monitoring</th>
                                            <th style="border:0">Respon</th>

                                        </tr>
                                    </thead>

                                    <!-- baris 1 -->
                                    <tbody>

                                        <tr>
                                            <th class="col-sm-4"></th>
                                            <td class="col-sm-4"></td>
                                        </tr>

                                    <tbody></tbody>

                                    <!-- baris 2 -->
                                    <tr>
                                        <th>0 - 2</th>
                                        <td>Penilaian PEWS tiap 4 jam</td>
                                        <td>Lanjutkan monitoring</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th>3 - 4</th>
                                        <td>Penilaian PEWS tiap 2 jam</td>
                                        <td>Perawat Lapor Dokter Jaga / DPJD</td>
                                    </tr>
                                    <tbody></tbody>

                                    <tr>
                                        <th> > 5</th>
                                        <td>Penilaian PEWS tiap 1 jam</td>
                                        <td>Perawat Lapor Dokter Jaga /DPJD</td>
                                    </tr>
                                    <tbody></tbody>

                                 


                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


</section>