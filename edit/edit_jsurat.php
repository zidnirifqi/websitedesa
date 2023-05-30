<?php
include '../sesi.php';
include '../koneksi.php';
include_once "../assets/inc.php";
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
    <title>ABS||Aplikasi Buat Surat||</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style type="text/css">
    /* style untuk link popup */
    a.popup-link {
        padding:17px 0;
        text-align: center;
        margin:10% auto;
        position: relative;
        width: 200px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.popup-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/
    /* animasi popup */

    @-webkit-keyframes autopopup {
        from {opacity: 0;margin-top:-200px;}
        to {opacity: 1;}
    }
    @-moz-keyframes autopopup {
        from {opacity: 0;margin-top:-200px;}
        to {opacity: 1;}
    }
    @keyframes autopopup {
        from {opacity: 0;margin-top:-200px;}
        to {opacity: 1;}
    }
    /* end animasi popup */
    /*style untuk popup */  
    #popup {
        background-color: rgba(0,0,0,0.6);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        -webkit-animation:autopopup 2s;
        -moz-animation:autopopup 2s;
        animation:autopopup 2s;
    }
    #popup:target {
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
        opacity: 0;
        visibility: hidden;
    }

   @media only screen and (min-width: 480px) {
        .popup-container {
        width: 95%;
        }
    }
    @media only screen and (max-width: 480px) {
        .popup-container {
        width: 95%;
        }
    }

    .popup-container {
        position: relative;
        margin:1% auto;
        padding:10px 20px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup-close {
        position: absolute;
        top:20px;
        right:3px;
        background-color: ;
        padding:7px 10px;
        font-weight: 22x;
        text-decoration: none;
        line-height: 1;
        color:#000f;
    }
    /* end style popup */

    /* style untuk isi popup */
    .popup-form {
        margin:10px auto;
    }
        .popup-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup-form .input-group {
            margin:10px auto;
        }
            .popup-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }
    /* end style isi popup */

    </style>

    <style type="text/css">
    .gulung{
         width: 100%;
         overflow: scroll;
         padding: 0px;
         background: ;
        }
</style>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <?php include "../navigasi.php"; ?>
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
                            <img src="../foto/<?php echo $f['foto'];  ?> " class="user-avatar rounded-circle" style="border: 1px solid white;">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../petugas.php?id=<?php echo $f['id'];?>"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
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
                            <li><a href="#">Data</a></li>
                            <li class="active">Jenis Surat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <button type="button" data-toggle="modal" data-target="#modalSurat" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah Jenis Surat</button>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal zoomOut" id="modalSurat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Input Jenis Surat </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                $query = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM t_jenissurat");
                                $data = mysqli_fetch_array($query);
                                $kodesurat = $data['kodeTerbesar'];
                                 
                                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                // dan diubah ke integer dengan (int)
                                $urutan = (int) substr($kodesurat, 2, 3);
                                 
                                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                $urutan++;
                                 
                                // membentuk kode surat baru
                                // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                $huruf = "JS";
                                $kodesurat = $huruf . sprintf("%03s", $urutan);
                                ?>
                                <form action="../simpan/s_jsurat.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kodesurat" class=" form-control-label">Kode Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $kodesurat ?>" class="form-control" readonly="readonly"></div>
                                    </div>

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="klasifikasi" class=" form-control-label">Klasifikasi Surat</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="klasifikasi" id="klasifikasi" class="form-control">
                                                <option value="0">Pilih Klasifikasi Surat</option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_klasifikasi ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['kode'];?>"><?php echo $r['kode'];?> --> <?php echo substr($r['klasifikasi'],0,50);?>***</option>
                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jenis" class=" form-control-label">Jenis Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jenis" name="jenis" placeholder="Masukan Jenis Surat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Nama Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" placeholder="Masukan Nama Surat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Awal</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdawal" id="rdawal" rows="3" placeholder="Redaksi Awal" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Tengah</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdtengah" id="rdtengah" rows="3" placeholder="Redaksi Tengah" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Akhir</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdakhir" id="rdakhir" rows="3" placeholder="Redaksi Akhir"  class="form-control"></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" class="btn btn-primary btn-sm">Simpan</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DATA JENIS SURAT</strong>
                            </div>

                            <div class="card-body scroll">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Surat</th>
                                            <th>Klasifikasi Surat</th>
                                            <th>Jenis</th>
                                            <th>Nama Surat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_jenissurat ORDER BY id DESC ");
                            while ($r = mysqli_fetch_array($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['kode'];?></td>
                                            <td><?php echo $r['kode_klasi'];?></td>
                                            <td><?php echo $r['jenis'];?></td>
                                            <td><?php echo $r['nmsurat'];?></td>
                                            <td><a href="../edit/edit_jsurat.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="../hapus/h_jsurat.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<div class="popup-wrapper gulung" id="popup">

    <div class="popup-container modal-lg"> 
        <a class="popup-close" href="#popup"><span aria-hidden="true">&times;</span></a>                              
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">EDIT JENIS SURAT</h5>
 
                            </div>
        <div class="input-group ">
            <div class="col-md-12">
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_jenissurat  where kode='$_GET[kode]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                    <form action="../update/u_jsurat.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class=" form-control-label">Kode Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row['kode']; ?>" class="form-control" readonly="readonly"></div>
                                    </div>

                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="klasifikasi" class=" form-control-label">Klasifikasi Surat</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="klasifikasi" id="klasifikasi" class="form-control">
                                                <option value="<?php echo $row['kode_klasi']; ?>"><?php echo $row['kode_klasi']; ?></option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_klasifikasi ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['kode'];?>"><?php echo $r['kode'];?> --> <?php echo substr($r['klasifikasi'],0,50);?>***</option>
                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jenis" class=" form-control-label">Jenis Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Nama Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row['nmsurat']; ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Awal</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdawal" id="rdawal" rows="3" class="form-control"><?php echo $row['awal']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Tengah</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdtengah" id="rdtengah" rows="3" class="form-control"><?php echo $row['tengah']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rdtengah" class=" form-control-label">Redaksi Akhir</label></div>
                                        <div class="col-12 col-md-9"><textarea name="rdakhir" id="rdakhir" rows="3" class="form-control"><?php echo $row['akhir']; ?></textarea></div>
                                    </div>
<hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" name="update" class="btn btn-primary btn-sm pull pull-left">Update</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                            </div>
                          </form>
                    </div>
                     <?php 
                        }
                                                //mysql_close($host);
                        ?>
            </div>
        </div>

    </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../assets/js/init-scripts/data-table/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>



</body>

</html>
