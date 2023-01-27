<!DOCTYPE html>
<html lang="en">

<!-- header -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E - Rekam Medis</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/select2/dist/css/select2.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>

                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= site_url() ?>template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"></div><?= ucfirst($this->fungsi->user_login()->nmlevel_erm)   ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title"><i class="fas fa-circle text-success"></i> Online</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> <?= ucfirst($this->fungsi->user_login()->nmpeg)   ?>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger" id="logout" data-confirm="Logout|Yakin akan Logout?" data-confirm-yes="returnLogout()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href=""> E-Rekam Medis</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">E-RM</a>
                    </div>

                    <!-- Level 3 perawat -->
                    <?php if ($this->session->userdata('level_erm') == 3) { ?>
                        <ul class="sidebar-menu">
                            <li><a class="nav-link" href="<?= site_url('pasien/paslama') ?>"><i class="fas fa-arrow-left"></i> <span>Kembali</span></a></li>

                            <li><a class="nav-link" href="<?= site_url('Cprofilringkas/index/') ?>"><i class="fas fa-user-injured"></i> <span>Profil Ringkas</span></a></li>
                            
                            <li class="menu-header">KEPERAWATAN</li>
                            <li><a class="nav-link" href="<?= site_url('Cassessmentawalperawat/index') ?>"><i class="fas fa-user-injured"></i> <span>Assesment Awal</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('Ccppt/index') ?>"><i class="fas fa-user-injured"></i> <span>CPPT</span></a></li>


                            <li class="menu-header">PENGKAJIAN AWAL MEDIS</li>


                        </ul>
                    <?php } ?>

                    <!-- Level dokter 2 -->
                    <?php if ($this->session->userdata('level_erm') == 2) { ?>
                        <ul class="sidebar-menu">
                            <li><a class="nav-link" href="<?= site_url('pasien/paslama') ?>"><i class="fas fa-arrow-left"></i> <span>Kembali</span></a></li>

                            <li><a class="nav-link" href="<?= site_url('Cprofilringkas/index/') ?>"><i class="fas fa-user-injured"></i> <span>Profil Ringkas</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('Ccppt/index') ?>"><i class="fas fa-user-injured"></i> <span>CPPT</span></a></li>

                            <li class="menu-header">PENGKAJIAN AWAL KEPERAWATAN</li>

                            <li><a class="nav-link" href="<?= site_url('Cassessmentawalperawat/index') ?>"><i class="fas fa-user-injured"></i> <span>Assesment Awal</span></a></li>


                            <li class="menu-header">ASSESMENT AWAL MEDIS</li>
                            <li><a class="nav-link" href="<?= site_url('rawatjalan/awal') ?>"><i class="fas fa-user-injured"></i> <span>Pengkajian Awal</span></a></li>


                            <!-- poli umumm -->
                            <li class="dropdown">
                                <a class="nav-link has-dropdown"><i class="far fa-address-book"></i> <span>Poli Umum</span></a>
                                <ul class="dropdown-menu">

                                </ul>
                            </li>

                            <!-- poli spesialis -->
                            <li class="dropdown">
                                <a class="nav-link has-dropdown"><i class="far fa-address-book"></i> <span>Poli Spesialis</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?= site_url('Cpenyakitdalam/index') ?>"><i class="fas fa-user-injured"></i> <span>Penyakit Dalam</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Canak/index') ?>"><i class="fas fa-user-injured"></i> <span>Anak</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Cbedahumum/index') ?>"><i class="fas fa-user-injured"></i> <span>Bedah Umum</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Cobstetriginekologi/index') ?>"><i class="fas fa-user-injured"></i> <span>Obstetri&Ginekologi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Cnefrologi/index') ?>"><i class="fas fa-user-injured"></i> <span>Nefrologi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Cjantung/index') ?>"><i class="fas fa-user-injured"></i> <span>Jantung & Pembuluh Darah</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('Ckulitkelamin/index') ?>"><i class="fas fa-user-injured"></i> <span>Kulit & Kelamin</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/mata') ?>"><i class="fas fa-user-injured"></i> <span>Mata</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/neurologi') ?>"><i class="fas fa-user-injured"></i> <span>Neurologi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/onkologi') ?>"><i class="fas fa-user-injured"></i> <span>Onkologi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/paru') ?>"><i class="fas fa-user-injured"></i> <span>Paru</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/rehabmedik') ?>"><i class="fas fa-user-injured"></i> <span>Rehab Medik</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/tht') ?>"><i class="fas fa-user-injured"></i> <span>THT</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/urologi') ?>"><i class="fas fa-user-injured"></i> <span>Urologi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/gigi') ?>"><i class="fas fa-user-injured"></i> <span>Gigi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/hd') ?>"><i class="fas fa-user-injured"></i> <span>HD</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/hdulang') ?>"><i class="fas fa-user-injured"></i> <span>Ulang HD</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/bedahsyaraf') ?>"><i class="fas fa-user-injured"></i> <span>Bedah Syaraf</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/ortopedi') ?>"><i class="fas fa-user-injured"></i> <span>Ortopedi</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/btkv') ?>"><i class="fas fa-user-injured"></i> <span>Bedah Thorax dan Kardiovaskuler</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/bedahplastik') ?>"><i class="fas fa-user-injured"></i> <span>Bedah Plastik</span></a></li>
                                    <li><a class="nav-link" href="<?= site_url('rawatjalan/kesehatanjiwa') ?>"><i class="fas fa-user-injured"></i> <span>Kesehatan Jiwa</span></a></li>

                                </ul>
                            </li>

                        </ul>
                    <?php } ?>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $content ?>
            </div>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.datatables.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/mainchart.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#anamnesis', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='anamnesis']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayat_penyakit', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_penyakit']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayat_alergi', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_alergi']").value = quill.root.innerHTML;
    });
    </script>
    
    <script>
    var quill = new Quill('#riwayat_kandungan', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_kandungan']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayat_kelahiran', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_kelahiran']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayat_tumbuh', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_tumbuh']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayat_imunisasi', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayat_imunisasi']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#obat_dikonsumsi', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='obat_dikonsumsi']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#keluhanutama', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='keluhanutama']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayatkehamilan', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatkehamilan']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayatpersalinan', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatpersalinan']").value = quill.root.innerHTML;
    });
    </script>
    
    <script>
    var quill = new Quill('#riwayatanc', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatanc']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayatpenyakitlain', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatpenyakitlain']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayatpenyakitkeluarga', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatpenyakitkeluarga']").value = quill.root.innerHTML;
    });
    </script>

    <script>
    var quill = new Quill('#riwayatkb', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='riwayatkb']").value = quill.root.innerHTML;
    });
    </script>
</body>

</html>