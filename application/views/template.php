<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Layout &rsaquo; Default &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">



</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
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
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
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
                        <a href="">E-Rekam Medis</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">E - RM</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="<?= site_url('dashboard/') ?>"><i class="far fa-square"></i> <span>Dashboard</span></a></li>

                        <li class="menu-header">Menu</li>
                        <li><a class="nav-link" href="<?= site_url('rawatjalan/listpasien') ?>"><i class="far fa-square"></i> <span>Rawat Jalan</span></a></li>
                        <li><a class="nav-link" href=""><i class="far fa-square"></i> <span>Rawat Inap</span></a></li>
                        <li><a class="nav-link" href=""><i class="far fa-square"></i> <span>IGD</span></a></li>

                        <!-- Level dokter 2 -->
                        <?php if ($this->session->userdata('level_erm') == 2) { ?>
                            <ul class="sidebar-menu">

                                <li class="menu-header">PENGKAJIAN AWAL</li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-address-book"></i> <span>Assesment</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="">Penyakit Dalam</a></li>
                                        <li><a class="nav-link" href="">Mata</a></li>
                                        <li><a class="nav-link" href="">Gigi</a></li>
                                        <li><a class="nav-link" href="">Jantung</a></li>
                                    </ul>
                                </li>

                                <li><a class="nav-link" href="<?= site_url('rawatjalan/rawatjalanCPPT') ?>"><i class="fas fa-user-injured"></i> <span>CPPT</span></a></li>

                                <li><a class="nav-link" href="<?= site_url('rawatjalan/perawatrawatjalan') ?>"><i class="fas fa-user-injured"></i> <span>Assesment Awal</span></a></li>

                            </ul>
                        <?php } ?>

                        <!-- Level 3 perawat -->
                        <?php if ($this->session->userdata('level_erm') == 3) { ?>
                            <ul class="sidebar-menu">

                                <li class="menu-header">PENGKAJIAN AWAL</li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-address-book"></i> <span>Assesment</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="">Penyakit Dalam</a></li>
                                        <li><a class="nav-link" href="">Mata</a></li>
                                        <li><a class="nav-link" href="">Gigi</a></li>
                                        <li><a class="nav-link" href="">Jantung</a></li>
                                    </ul>
                                </li>

                                <li><a class="nav-link" href="<?= site_url('rawatjalan/rawatjalanCPPT') ?>"><i class="fas fa-user-injured"></i> <span>CPPT</span></a></li>

                                <li><a class="nav-link" href="<?= site_url('rawatjalan/perawatrawatjalan') ?>"><i class="fas fa-user-injured"></i> <span>Assesment Awal</span></a></li>

                            </ul>
                        <?php } ?>

                        <!-- level admin 1 -->
                        <?php if ($this->session->userdata('level_erm') == 1) { ?>

                            <!-- Master Medis -->
                            <li class="menu-header">Master Medis</li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Pasien</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?= site_url('pasien/pasinap') ?>">Rawat Inap</a></li>
                                    <li><a class="nav-link" href="<?= site_url('pasien/paslama') ?>">Rawat Jalan</a></li>
                                    <li><a class="nav-link" href="<?= site_url('pasien/pasigd') ?>">IGD</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Kamar</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?= site_url('kamar/') ?>">Data Kamar</a></li>
                                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                                </ul>
                            </li>

                            <!-- Master tindakan -->
                            <li class="menu-header">Master Tindakan</li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Fisioterapi</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="auth-forgot-password.html">Admin</a></li>
                                    <li><a href="auth-login.html">Dokter</a></li>
                                    <li><a href="auth-register.html">Perawat</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Hemodalisa</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="errors-503.html">503</a></li>
                                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Poli</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="utilities-contact.html">Contact</a></li>
                                    <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Hemodalisa</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="utilities-contact.html">Contact</a></li>
                                    <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                                </ul>
                            </li>


                            <!-- Master penunjang -->
                            <li class="menu-header">Master Penunjang Medis</li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Lab</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="auth-forgot-password.html">Admin</a></li>
                                    <li><a href="auth-login.html">Dokter</a></li>
                                    <li><a href="auth-register.html">Perawat</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Radiologi</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="errors-503.html">503</a></li>
                                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Obat</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="auth-forgot-password.html">Admin</a></li>
                                    <li><a href="auth-login.html">Dokter</a></li>
                                    <li><a href="auth-register.html">Perawat</a></li>
                                </ul>


                                <!-- Master pengguna/user -->
                            <li class="menu-header">Master Pengguna</li>

                            <li class="dropdown">
                                <a href="" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('user/') ?>">Admin</a></li>
                                    <li><a href="<?= site_url('dokter/') ?>">Dokter</a></li>
                                    <li><a href="">Perawat</a></li>

                                </ul>
                            </li>

                        <?php } ?>


                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $content  ?>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y'); ?> <div class="bullet"></div> <a href="">IT NMU</a>
                </div>
                <div class="footer-right">
                    <label>E - Rekam Medis</label>
                </div>
            </footer>
        </div>



        <!-- General JS Scripts -->
        <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.datatables.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

        <!-- Sweet Alert -->
        <script src="<?= base_url() ?> /template/node_modules/sweetalert/sweetalert.min.js"></script>

        <!-- Page Specific JS File -->
        <script src="<?= base_url() ?> /template/node_modules/sweetalert/modules-sweetalert.js"></script>


        <!-- Template JS File -->
        <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
        <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>


</body>

</html>