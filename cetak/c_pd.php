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

    <link rel="stylesheet" href="../assets/tambahdata.css">

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

    @media (min-width: 768px){
        .popup-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup-container {
            width:100%;
        }
    }
    .popup-container {
        position: relative;
        margin:7% auto;
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
         height: 100%;
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
                            <li><a href="#">Surat</a></li>
                            <li class="#">Program Desa</li><li class="active">Surat Perjalanan Dinas</li>
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

                    <button type="button" id="buatAw" data-toggle="modal" data-target="#modalAw" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Buat Surat Perjalanan Dinas</button>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div><!-- /# card -->
            </div>
        </div>

        <div class="modal" id="modalAw" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">BUAT SURAT KETERANGAN AHLI WARIS</h5>
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

                        <form action="../simpan/s_pd.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS029' ORDER BY id ASC ");
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
                                    <h6 class="label">PEJABAT BERWENANG YG MEMBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama Pejabat / Kepala Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama Pejabat / Kepala Desa"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" placeholder="NIP (Nomor Induk Pegawai)" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pang" name="pang" placeholder="Pangkat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jab" name="jab" placeholder="Jabatan" class="form-control"></div>
                                    </div>
                                                                                                        <hr>
                                    <h6 class="label">PEJABAT YG DIBERI TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama1" class=" form-control-label">Nama </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama1" name="nama1" placeholder="Nama Lengkap"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nip1" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nip1" name="nip1" placeholder="NIP (Nomor Induk Pegawai)" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pang1" class=" form-control-label">Pangkat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pang1" name="pang1" placeholder="Pangkat" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jab1" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="jab1" name="jab1" placeholder="Jabatan" class="form-control"></div>
                                    </div>

                                                                                                        <hr>
                                    <h6 class="label">KETERANGAN TUGAS PERJALANAN DINAS:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tugas" class=" form-control-label">Uraian Tugas</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tugas" name="tugas" placeholder="Uraian Tugas yang diberikan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp" class=" form-control-label">Tempat Tujuan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp" name="tmp" placeholder="Tempat Tujuan Tugas" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="berangkat" class=" form-control-label">Tanggal Berangkat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="berangkat" name="berangkat" placeholder="Tanggal Keberangkatan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kembali" class=" form-control-label">Tanggal Kembali</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kembali" name="kembali" placeholder="Tanggal Harus Kembali" class="form-control"></div>
                                    </div>

                                    <hr>
                                    <h6 class="label">KETERANGAN BIAYA PERJALANAN DINAS :</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tingkat" class=" form-control-label">Tingkat Biaya</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="tingkat" id="tingkat" class="form-control" data-toggle="tooltip" data-placement="left" title="Sesuaikan tingkatan biaya sesuai PMK : 07/PMK.05/2008">
                                                <option value="-" disabled="disabled" selected="selected">Pilih Tingkat Biaya</option>
                                                <option value="A">Tingkat A</option>
                                                <option value="B">Tingkat B</option>
                                                <option value="C">Tingkat C</option>
                                                <option value="D">Tingkat D</option>
                                                <option value="E">Tingkat E</option>
                                                <option value="F">Tingkat F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="uh" class=" form-control-label">Uang Harian</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="uh" name="uh" placeholder="Jumlah uang harian" class="form-control"><small class="form-text text-muted">Berupa :Uang Makan, Uang Saku dan Tranfort Lokal</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="trans" class=" form-control-label">Transfort</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="trans" name="trans" placeholder="Jumlah uang transfort" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="inap" class=" form-control-label">Penginapan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="inap" name="inap" placeholder="Jumlah uang penginapan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="rep" class=" form-control-label">Representatif</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="rep" name="rep" placeholder="Jumlah uang Representatif"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sewa" class=" form-control-label">Sewa Kendaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="sewa" name="sewa" placeholder="Jumlah uang sewa dalam kota" class="form-control">
                                    </div>
</div>


                                <div class="panel-body">
                                    <hr>
                                    <h6 class="label">PENGIKUT :</h6>
                                    <hr>       
                                  <div class="control-group after-add-more">
                                    <table class="">
                                    <tr>
                                        <td width="400">Nama</td>
                                        <td width="135">Tanggal Lahir</td>
                                        <td width="135">Keterangan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $kodesurat ?>" class="form-control">
                                            <td width="400"><input type="text" name="nm[]" class="form-control"></td>
                                            <td width="135"><input type="text" name="tgl_lahir[]" class="form-control"></td>
                                            <td width="145"><input type="text" name="ket[]" class="form-control"></td>
                                            <td><button class="btn btn-success add-more" type="button"><i class="fa fa-plus"></i>
                                    </button></td>
                                    </tr>

                                    </table>
                                  </div>
                                                                  <div class="copy invisible">
                                <div class="control-group">
                                <table class="">
                                        <tr>
                                        <input type="hidden" name="kodesuratpd[]" value="<?php echo $kodesurat ?>" class="form-control" >
                                        <td width="400"><input type="text" name="nm[]" class="form-control"></td>
                                        <td width="135"><input type="text" name="tgl_lahir[]" class="form-control"></td>
                                        <td width="145"><input type="text" name="ket[]" class="form-control"></td>
                                        <td><button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                </table>
                                </div>
                              </div>
                                  <br>
                                <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" name="cetak" class="btn btn-primary btn-sm">Cetak</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                                </form>                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                            <th>Tugas </th>
                                            <th>Tempat </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_pdinas WHERE kodejenis='JS029' ORDER BY id DESC ");
                            while ($r = mysqli_fetch_array($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['no'];?></td>
                                            <td><?php echo $r['tanggal'];?></td>
                                            <td><?php echo $r['nama1'];?></td>
                                            <td><?php echo $r['tugas'];?></td>
                                            <td><?php echo $r['tmp'];?></td>
                                            <td><a href="../cetak/c_pd.php?kode=<?php echo $r['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a><a href="../edit/edit_pd.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                            <a href="../hapus/h_pd.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- .animated -->


            <div class="popup-wrapper" id="popup">

    <div class="popup-container"> 
        <a class="popup-close" href="../tatausaha/perjalanandinas.php"><span aria-hidden="true">&times;</span></a>                              
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">CETAK SPT, SPPD & LAMPIRAN</h5>
 
                            </div>
        <div class="input-group ">
                <div class="col-md-12">
            <?php
            $data=mysqli_query($con, "SELECT * FROM t_pdinas  where kode='$_GET[kode]' ");
            $no=1;
            while($row =mysqli_fetch_array($data)){ 
            ?>  
                        <form action="../update/u_pd.php"  method="post" onsubmit="return validasi_input(this)"  enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="kodesurat" class="form-control-label">Kode Surat</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kodesurat" name="kodesurat" value="<?php echo $row ['kode']; ?>" readonly="readonly" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="nosurat" class=" form-control-label">No. Surat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nosurat" name="nosurat" class="form-control" value="<?php echo $row ['no']; ?>" readonly="readonly" ></div>
                                </div>
                                                                    <hr>


                                <div class="card">
                                    <div class="card-body">
                                        <a href="c_spt.php?kode=<?php echo $row['kode'];?>" type="button" class="btn btn-primary" target='_BLANK'><i class="fa fa-print"></i>SPT</a>
                                        <a href="c_sppd.php?kode=<?php echo $row['kode'];?>" type="button" class="btn btn-secondary" target='_BLANK'><i class="fa fa-print"></i>SPPD</a>
                                        <a href="c_l1.php?kode=<?php echo $row['kode'];?>" type="button" class="btn btn-success" target='_BLANK'><i class="fa fa-print"></i>Lamp. 1</a>

                                        <a href="c_l2.php?kode=<?php echo $row['kode'];?>" type="button" class="btn btn-warning" target='_BLANK'><i class="fa fa-print"></i>Lamp. 2 </a>
                                        <a href="c_l3.php?kode=<?php echo $row['kode'];?>" type="button" class="btn btn-danger" target='_BLANK'><i class="fa fa-print"></i>Lamp. 3</a>
                                        
                                    </div>
                                </div><!-- /# card -->
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
        </div><!-- .content -->

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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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

 <script src="../assets/js/jquery.min.js"></script>
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
                    $('#agama').val(obj.agama);
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
