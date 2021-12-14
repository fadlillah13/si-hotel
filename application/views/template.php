<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PENGINAPAN HOTEL 333</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


</head>

<body>

    <!-- jQuery Js -->
    <script src="<?php echo base_url() ?>assets/js/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap Js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>

    <!-- proses Lunas -->
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">PENGINAPAN HOTEL 333</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url() . 'transaksi' ?>"><i class="fa fa-edit"></i>Reservasi Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'barang' ?>"><i class="fa fa-bar-chart-o"></i>Daftar Ketersediaan Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'kategori' ?>"><i class="fa fa-desktop"></i>Master Type Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'operator' ?>"><i class="fa fa-qrcode"></i>Pengguna Aplikasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-fw fa-file"></i> Keluar</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php echo $contents; ?>
            </div>
            <!-- /. PAGE INNER  -->
            <footer>
            <center><?php echo "Copyright © " . (int)date('Y') . " FADLILLAH"; ?></center>
            </footer>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>