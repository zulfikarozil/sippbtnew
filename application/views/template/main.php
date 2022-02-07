<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Puskesmas Baru Tengah</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Owesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/fontawesome.min.css" type="text/css">
    <!-- memindahkan file javascrip jquery ke dalam tag head agar bisa terpanggil oleh semua file view -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Sweet Alert -->
    <link href="<?= base_url() ?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Sweet-Alert  -->
    <script src="<?= base_url() ?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>assets/pages/sweet-alert.init.js"></script>

    <!-- Plugins css -->
    <!-- <link href="<?= base_url() ?>assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> -->

    <!-- tambahan -->
    <!-- <link rel="stylesheet" type="text/css" href="https://sistemit.com/demo/daterange/jquery-ui.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/tgl/jquery-ui.css') ?>">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!-- <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Annex</a> -->
                    <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/frontend/img/login.png" height="50" alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">Main</li> -->

                        <li>
                            <a href="<?= site_url('dashboard') ?>" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?= site_url('pemeriksaan') ?>" class="waves-effect">
                                <i class="fa fa-pencil-square-o"></i>
                                <span>Kelola Pemeriksaan </span>
                            </a>
                        </li> -->
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Kelola Pemeriksaan </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= base_url('pemeriksaan/list') ?>">List Periksa</a></li>
                                <li><a href="<?= base_url('pemeriksaan/belum') ?>">Belum Periksa</a></li>
                                <li><a href="<?= base_url('pemeriksaan/sudah') ?>">Sudah Periksa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= site_url('pasien') ?>" class="waves-effect">
                                <i class="fa fa-users"></i>
                                <span>Kelola Pasien </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('obat') ?>" class="waves-effect">
                                <i class="fa fa-medkit"></i>
                                <span> Kelola Obat </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('poli') ?>" class="waves-effect">
                                <i class="fa fa-building"></i>
                                <span> Kelola Unit Poli </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('dokter') ?>" class="waves-effect">
                                <i class="fa fa-user"></i>
                                <span> Kelola Dokter </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('laporan') ?>" class="waves-effect">
                                <i class="fa fa-book"></i>
                                <span> Laporan </span>
                            </a>
                        </li>



                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url() ?>assets/images/favicon.ico" alt="user" class="rounded-circle">
                                    <img src="<?= base_url() ?>assets/images/users/admin.png" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Admin</h5>
                                    </div>
                                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= site_url('auth/logout') ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <!-- <li class="hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <!-- <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">starter</li>
                                        </ol>
                                    </div> -->
                                    <h4 class="page-title"><?= (!empty($title) ? $title : ''); ?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <?= (!empty($content) ? $content : ''); ?>
                        </div>

                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer">
                © 2021 Puskesmas Baru Tengah.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/modernizr.min.js"></script>
    <script src="<?= base_url() ?>assets/js/detect.js"></script>
    <script src="<?= base_url() ?>assets/js/fastclick.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url() ?>assets/js/waves.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="<?= base_url() ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url() ?>assets/pages/datatables.init.js"></script>



    <!-- Plugins js -->
    <script src="<?= base_url() ?>assets/plugins/timepicker/moment.js"></script>
    <script src="<?= base_url() ?>assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="<?= base_url() ?>assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/colorpicker/jquery-asColor.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/colorpicker/jquery-asGradient.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/colorpicker/jquery-asColorPicker.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>

    <!-- <script src="<?= base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script> -->

    <!-- Plugins Init js -->
    <!-- <script src="<?= base_url() ?>assets/pages/form-advanced.js"></script> -->

    <!-- App js -->
    <!-- Parsley js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/plugins/parsleyjs/parsley.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <!-- Plugins Init js -->
    <script src="<?= base_url() ?>assets/pages/form-advanced.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable2').DataTable();
        });

        $('.hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            swal({
                    title: "Apakah anda yakin?",
                    text: "Peringatan, Data akan di hapus secara permanet!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.location.href = href;
                    }
                });
        });
    </script>

    <!-- tambahan -->
    <!-- <script src="<?= base_url('assets/tgl/jquery-min.js') ?>"></script> -->
    <script src="<?= base_url('assets/tgl/jquery-ui.js') ?>"></script>
    <!-- <script src="https://sistemit.com/demo/daterange/jquery.min.js"></script>
    <script src="https://sistemit.com/demo/daterange/jquery-ui.js"></script> -->
    <script>
        $(function() {
            $("#from").datepicker({
                // gunakan dateFormat:"dd-mm-yy", untuk mengubah format tanggal format tanggal sengaja saya matikan
                // dateFormat:"dd-mm-yy", 
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(selectedDate) {
                    $("#to").datepicker("option", "minDate", selectedDate);
                }
            });
            $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(selectedDate) {
                    $("#from").datepicker("option", "maxDate", selectedDate);
                }
            });
        });
    </script>


</body>

</html>