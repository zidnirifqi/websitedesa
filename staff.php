<?php
include 'cek.php';
include 'koneksi.php';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website Desa Kramat Kabupaten Tegal</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
.container{background-color: #DD4814;width: 100%;height: 100%;}
/* Ikon media sosial */
.sticky-container{ padding:0px; margin:0px; position:fixed; right:-170px;top:230px; width:210px; z-index: 1100;}
.sticky li{list-style-type:none;background-color:#fff;color:#efefef;height:43px;padding:0px;margin:0px 0px 1px 0px; -webkit-transition:all 0.25s ease-in-out;-moz-transition:all 0.25s ease-in-out;-o-transition:all 0.25s ease-in-out; transition:all 0.25s ease-in-out; cursor:pointer;}
.sticky li:hover{margin-left:-115px;}
.sticky li img{float:left;margin:5px 4px;margin-right:5px;}
.sticky li p{padding-top:5px;margin:0px;line-height:16px; font-size:11px;}
.sticky li p a{ text-decoration:none; color:#2C3539;}
.sticky li p a:hover{text-decoration:underline;}
</style>

</head>

<body>



    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo2.png" width="35" height="35" alt="Logo">Permohonan Surat Desa</a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title bayangan">Desa Kramat</h3><!-- /.menu-title -->
                    <li>
                        <a href="../home.php"> <i class="menu-icon fa fa-dashboard"></i>Desa Kramat</a>
                    </li>
                   <h3 class="menu-title bayangan">SURAT</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tata Usaha</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/undangan.php">Undangan</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/pengantar.php">Pengantar</a></li>
                            <!-- <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/pemberitahuan.php">Pemberitahuan</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/himbauan.php">Himbauan</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/perjalanandinas.php">Perjalan Dinas</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/jawaban.php">Jawaban</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Umum</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketusaha.php">Usaha</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sukettmpusaha.php">Tempat Usaha</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketbarang.php">Pengantar Barang</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketternak.php">Pengantar Ternak</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sukettmampu.php">Tdk. Mampu V1</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sukettmampuu.php">Tdk. Mampu V2</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketrtms.php">RTM</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketpenghasilan.php">Penghasilan</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketortu.php">Orang Tua</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketanak.php">Anak</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketmenikah.php">Menikah</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketmati.php">Kematian</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketbepergian.php">Bepergian</a></li>
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketbedaid.php">Beda Id</a></li>
                        <!-- <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketdomisililbg.php">Domisili Lembaga</a></li> -->
                        <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketlain.php">Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Kependudukan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketdomisili.php">Domisili</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sutarpindah.php">Pindah</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketkelahiran.php">Kelahiran</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketpenguburan.php">Penguburan</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/f121.php">Permohonan KTP</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Pernikahan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sutarnikah.php">Surat Nikah</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketpernahnikah.php">Pernah Nikah</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketbelumnikah.php">Belum Pernah Nikah</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketdudajanda.php">Duda/Janda</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/pstatus.php">Pernyataan Status</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Pertanahan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/sukettanah.php">Tanah</a></li>
                            <li><i class="menu-icon fa fa-file-text-o"></i><a href="staff/suketaw.php">Ahli Waris</a></li>
                        </ul>
                    </li>
                    
                    <!-- <h3 class="menu-title bayangan">DATA</h3>/.menu-title -->
                            <!-- <li><a href="staff/penduduk.php"> <i class="menu-icon fa fa-group"></i>Penduduk </a></li> -->
                    <h3 class="menu-title bayangan">Warga</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Warga</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-out"></i><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
          <?php 
            $use=$_SESSION['uname'];
            $fo=mysqli_query($con, "SELECT id, foto FROM t_admin WHERE uname='$use'");
            while($f=mysqli_fetch_array($fo)){
                ?>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="foto/<?php echo $f['foto'];  ?> " class="user-avatar rounded-circle" style="border: 1px solid white;">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="petugas.php?id=<?php echo $f['id'];?>"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            <?php } ?>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <?php 
 $use=$_SESSION['uname'];
            $fo=mysqli_query($con, "SELECT * FROM t_admin WHERE uname='$use'");
            while($ff=mysqli_fetch_array($fo)){
                ?>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success blink">Selamat Datang</span> <b><?php echo $ff['uname'];?></b> dari Desa <?php echo $ff['desa'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
<?php } ?>



           <div class="animated zoomIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Surat</strong>
                            </div>

                            <div class="card-body scroll">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Surat</th>
                                            <th>Kode Surat</th>
                                            <th>Nama Surat</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_datasurat ORDER BY id ASC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo $data['nmsurat'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>

                                        </tr>
    
                                     <?php }?>    

                                    </tbody>
                                </table>
                            </div>      
                        </div>
                    </div>
                </div>

            </div><!-- .animated -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
