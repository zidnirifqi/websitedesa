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
    <title>ABS||Aplikasi Buat Surat - Digital ||</title>
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

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../petugas.php"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
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
                            <li><a href="#">Form</a></li>
                            <li class="active">Pelayanan Pertanahan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons">
          <!-- Left Block -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body alert-success alert-dismissible fade show" role="alert">
                    <button type="button" id="buatSurat" data-toggle="modal" data-target="#modalSurat"  class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Buat Surat Keterangan Kepemilikan Tanah</button>
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div><!-- /# card -->
            </div>
        </div>
<!-- MODAL SURAT KETERANGAN UMUM -->

        <div class="modal zoomIn" id="modalSurat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">BUAT SURAT KETERANGAN KEPEMILIKAN TANAH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php
                                $query = mysqli_query($con, "SELECT max(kode) as kodeTerbesar FROM t_datasurat");
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
                                $huruf = "SR";
                                $kodesurat = $huruf . sprintf("%03s", $urutan);
                                ?>

                                <form action="../simpan/s_sukettanah.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $kodesurat ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmsurat" class=" form-control-label">Jenis / Nama Surat</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="nmsurat" id="nmsurat" onchange="isiredaksi()" class="form-control">
                                                <option value="">Pilih Jenis atau Nama Surat</option>
                                    <?php 
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS024' ORDER BY id ASC ");
                                    while ($r = mysqli_fetch_array($query)){
                                    ?>
                                                <option value="<?php echo $r['nmsurat'];?>"><?php echo $r['kode'];?>--><?php echo $r['nmsurat'];?></option>
                                    
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    $query = mysqli_query ($con, "SELECT * FROM t_desa WHERE id='1'");
                                    while ($rdes = mysqli_fetch_array($query)){
                                    ?>
   

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nosurat" class=" form-control-label">No. Surat</label></div>
                                        <input type="hidden" id="kode_klasi" name="kode_klasi">
                                       <input type="hidden" id="blnr" name="blnr" value="<?php echo getRomawi(date('m'));?>" >
                                        <input type="hidden" id="kades" name="kades" value="<?php echo $rdes['kades']; ?>" >
                                        <input type="hidden" id="kodejenis" name="kodejenis" value="<?php echo $r['kode']; ?>" >
                                        <div class="col-12 col-md-9"><input type="text" id="nosurat" name="nosurat" maxlength="3" class="form-control" placeholder="Masukan Nomor Surat" ><small class="form-text text-muted">Contoh : 001</small></div>
                                    </div>
                                <?php }}?>
                                <hr>
                                <h6 class="label">IDENTITAS PEMILIK TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="Nomor Induk Kependudukan" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jk" id="jk" readonly="readonly" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwng" name="kwng" placeholder="Kewarganegaraan" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agama" id="agama" readonly="readonly" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pkjn" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pkjn" name="pkjn" placeholder="Pekerjaan" readonly="readonly" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rt" class=" form-control-label">Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="rt" name="rt"  readonly="readonly" placeholder="Rt. xxx/Rw. xxx" class="form-control"><small class="form-text text-muted">Contoh : Rt. 001/Rw. 002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusun" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusun" name="dusun"  readonly="readonly" placeholder="Dusun" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                <hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="luas" name="luas" placeholder="Isi Luas Tanah dalam M2 "  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" placeholder="Isi Lokasi / Alamat Tanah"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="asaltanah" class=" form-control-label">Asal Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="asaltanah" name="asaltanah" placeholder="Asal muasal perolehan tanah"  class="form-control"><small class="form-text text-muted">Contoh : Pembelian dari Bpk. Anu</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" placeholder="Batas sebelah Barat berbatasan dengan ?"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" placeholder="Batas sebelah Utara berbatasan dengan ?"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" placeholder="Batas sebelah Timur berbatasan dengan ?"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" placeholder="Batas sebelah Selatan berbatasan dengan ?"  class="form-control"></div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm">Cetak</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
<!-- END MODAL SUKET UMUM -->


        <div class="content mt-3">
            <div class="animated fadeIn">
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
                                            <th>Tanggal</th>
                                            <th>Nama </th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT t_sukettanah.*, t_penduduk.* FROM t_sukettanah, t_penduduk WHERE t_sukettanah.kodejenis='JS024' AND t_sukettanah.nik=t_penduduk.nik ORDER BY t_sukettanah.id DESC ");
                            $no=1;
                            while ($data = mysqli_fetch_assoc($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['no'];?></td>
                                            <td><?php echo $data['tanggal'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['rt'];?></td>
                                            <td>
                                                <a href="../cetak/c_sukettanah.php?kode=<?php echo $data['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a>
                                                <a href="../edit/edit_sukettanah.php?kode=<?php echo "$data[kode]";?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a href="../hapus/h_sukettanah.php?kode=<?php echo $data['kode'];?>" class="btn"><i class="fa fa-trash"></i></a>
                                            </td>
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

         <!-- Konten popup, silahkan ganti sesuai kebutughan -->


<div class="popup-wrapper gulung" id="popup">

    <div class="popup-container modal-lg"> 
        <a class="popup-close" href="../suratpertanahan/sukettanah.php"><span aria-hidden="true">&times;</span></a>                              
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">EDIT SURAT KETERANGAN KEPEMILIKAN TANAH</h5>
 
                            </div>
        <div class="input-group ">
                <div class="col-md-12">
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_sukettanah  where kode='$_GET[kode]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                    <form action="../update/u_sukettanah.php"  method="POST" enctype="multipart/form-data" class="form-horizontal">

                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row ['kode']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Jenis / Nama Surat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nmsurat" name="nmsurat" value="<?php echo $row ['nmsurat']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nosurat" class=" form-control-label">No. Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nosurat" name="nosurat" class="form-control" value="<?php echo $row ['no']; ?>" ></div>
                                </div>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik" class="form-control" maxlength="16"  value="<?php echo $row ['nik']; ?>"  ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control"></div>
                                    </div>

<hr>
                                <h6 class="label">KETERANGAN TANAH</h6>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="luas" class=" form-control-label">Luas (M2)</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="luas" name="luas" value="<?php echo $row ['luas']; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="letak" class=" form-control-label">Letak Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="letak" name="letak" value="<?php echo $row ['letak']; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="asaltanah" class=" form-control-label">Asal Tanah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="asaltanah" name="asaltanah" value="<?php echo $row ['asaltanah']; ?>"  class="form-control"><small class="form-text text-muted">Contoh : Pembelian dari Bpk. Anu</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="barat" class=" form-control-label">Batas Barat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="barat" name="barat" value="<?php echo $row ['barat']; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="utara" class=" form-control-label">Batas Utara</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="utara" name="utara" value="<?php echo $row ['utara']; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="timur" class=" form-control-label">Batas Timur</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="timur" name="timur" value="<?php echo $row ['timur']; ?>"   class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selatan" class=" form-control-label">Batas Selatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="selatan" name="selatan" value="<?php echo $row ['selatan']; ?>"   class="form-control"></div>
                                    </div>                                    <div class="row form-group">
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


<!-- jQuery 3 -->
<script src="../assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->




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

 
        <script type="text/javascript">
            function isinik(){
                var nik = $("#nik").val();
                $.ajax({
                    url: '../data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jk').val(obj.jk);
                    $('#tmp_lahir').val(obj.tmp_lahir);
                    $('#tgl_lahir').val(obj.tgl_lahir);
                    $('#kwng').val(obj.kwng);
                    $('#agama').val(obj.agama);
                    $('#pkjn').val(obj.kerjaan);
                    $('#status').val(obj.status);
                    $('#pend').val(obj.pend);
                    $('#kerjaan').val(obj.kerjaan);
                    $('#rt').val(obj.rt);
                    $('#dusun').val(obj.dusun);
                });
            }
        </script>


        <script type="text/javascript">
            function isiredaksi(){
                var nmsurat = $("#nmsurat").val();
                $.ajax({
                    url: '../data/panggiljenissurat.php',
                    data:"nmsurat="+nmsurat ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#kode_klasi').val(obj.kode_klasi);
                    $('#rdawal').val(obj.rdawal);
                    $('#rdtengah').val(obj.rdtengah);
                    $('#rdakhir').val(obj.rdakhir);
                });
            }
        </script>
<script type="text/javascript">
        $(document).ready(function(){
            $('#buatSurat').click(function(){
                $('#modalSurat , #bg').fadeIn("slow");
            });
            $('#tombol-tutup').click(function(){
                $('#modalSurat , #bg').fadeOut("slow");
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#editSurat').click(function(){
                $('#modalEditSurat , #bg').fadeIn("slow");
            });
            $('#tombol-tutup').click(function(){
                $('#modalEditSurat , #bg').fadeOut("slow");
            });
        });
    </script>



<script type="text/javascript">
function validasi_input(form){
  var mincar = 16;
  var minruf = 3;
  if (form.nmsurat.value=="") {
      alert('Jenis Surat harus dipilih!');
      form.nmsurat.focus();
      return false;
    }else if(form.nosurat.value=="") {
      alert('Nomor Surat harus di isi !');
      form.nosurat.focus();
      return false;
    }else if (form.nik.value.length < mincar){
    alert("Panjang NIK Minimal 16 Karater!");
    form.nik.focus();
    return (false);
  }else if (form.nosurat.value.length < minruf){
    alert("Panjang Nomor Surat Minimal 3 Angka!");
    form.nosurat.focus();
    return (false);
  }
   return (true);
}
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>


</body>

</html>