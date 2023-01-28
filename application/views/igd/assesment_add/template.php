<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E - Rekam Medis</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/template/assets/img/icon-nmu.png" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <!-- CSS Libraries -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.css"> -->


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
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
                            <li><a class="nav-link" href="<?= site_url('dashboard') ?>"><i class="fas fa-arrow-left"></i> <span>Kembali</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('igd/igdDokter') ?>"><i class="far fa-user"></i> <span>Profil Ringkas</span></a></li>

                            <li class="menu-header">KEPERAWATAN</li>

                            <li><a class="nav-link" href="<?= site_url('igd/perawatigd') ?>"><i class="far fa-file-alt"></i> <span>Asesment Awal</span></a></li>


                            <li class="menu-header">PENGKAJIAN MEDIS</li>
                            <li><a class="nav-link" href="<?= site_url('igd/awal') ?>"><i class="far fa-file-alt"></i> <span>Pengkajian Awal</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('igd/igdCPPT') ?>"><i class="far fa-file-alt"></i> <span>CPPT</span></a></li>

                        </ul>
                    <?php } ?>

                    <!-- Level dokter 2 -->
                    <?php if ($this->session->userdata('level_erm') == 2) { ?>
                        <ul class="sidebar-menu">
                        <li><a class="nav-link" href="<?= site_url('dashboard') ?>"><i class="fas fa-arrow-left"></i> <span>Kembali</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('igd/igdDokter') ?>"><i class="fas fa-fire"></i> <span>Profil Ringkas</span></a></li>

                            <li class="menu-header">KEPERAWATAN</li>

                            <li><a class="nav-link" href="<?= site_url('igd/perawatigd') ?>"><i class="far fa-square"></i> <span>Asesment Awal</span></a></li>


                            <li class="menu-header">PENGKAJIAN MEDIS</li>
                            <li><a class="nav-link" href="<?= site_url('igd/awal') ?>"><i class="far fa-square"></i> <span>Pengkajian Awal</span></a></li>
                            <li><a class="nav-link" href="<?= site_url('igd/igdCPPT') ?>"><i class="fas fa-user-injured"></i> <span>CPPT</span></a></li>

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
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

    <!-- Data Tables -->
    <!-- <script src="<?= base_url() ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script> -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

</body>

</html>