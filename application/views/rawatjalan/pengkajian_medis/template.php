<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <!-- CSS Libraries -->

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
                            <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><?= $this->fungsi->user_login()->level_erm    ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title"><i class="fas fa-circle text-success"></i> <?= $this->fungsi->user_login()->level_erm  ?>
                            </div>


                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger" id="logout" data-confirm="Logout|Yakin akan Logout?" data-confirm-yes="returnLogout()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-1">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url('dashboard') ?>"> E-Rekam Medis</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url('dashboard') ?>">E-RM</a>
                    </div>

                    <!-- level admin 1 -->
                    <?php if ($this->session->userdata('level_erm') == 2) { ?>
                        <ul class="sidebar-menu">
                            <li><a class="nav-link" href="<?= site_url('rawatjalan/listpasien') ?>"><i class="fas fa-arrow-left"></i> <span>Kembali</span></a></li>
                            </li>

                            <li class="menu-header">DOKUMEN</li>
                            <!-- <li><a class="nav-link" href="<?= site_url('pasien/index') ?>"><i class="fas fa-user-injured"></i> <span>Pasien</span></a></li> -->

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-address-book"></i> <span>Assesment</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?= base_url('rawatjalan/index') ?>">Penyakit Dalam</a></li>
                                    <li><a class="nav-link" href="<?= base_url('rawatinap/index') ?>">Mata</a></li>
                                    <li><a class="nav-link" href="<?= base_url('') ?>">Gigi</a></li>
                                    <li><a class="nav-link" href="<?= base_url('') ?>">Jantung</a></li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-stethoscope"></i> <span>Perawat</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url() ?>">Rawat Inap</a></li>
                                <li><a class="nav-link" href="<?= base_url() ?>">Rawat Jalan</a></li>
                                <li><a class="nav-link" href="<?= base_url() ?>">Rekam Medis</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-stethoscope"></i> <span>Dokter</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url() ?>">Rawat Inap</a></li>
                                <li><a class="nav-link" href="<?= base_url('rawatjalan/listpasien') ?>">Rawat Jalan</a></li>
                                <li><a class="nav-link" href="<?= base_url() ?>">Rekam Medis</a></li>
                            </ul>
                        </li> -->

                        </ul>
                    <?php } ?>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $content ?>
            </div>

            <!-- footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y'); ?> <div class="bullet"></div> <a href="">IT NMU</a>
                </div>

            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.datatables.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>





</body>

</html>