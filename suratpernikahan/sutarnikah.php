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
                            <li class="#">Pernikahan</li><li class="active">Surat Pengantar Nikah</li>
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

                    <button type="button" id="sutarnikah" data-toggle="modal" data-target="#modalSurat" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Buat Surat Pengantar Nikah</button>
                    <button type="button" id="walinikah" data-toggle="modal" data-target="#modalWali" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Formulir Wali Nikah</button>
                    <a href="../data/profile_kua.php" type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Data KUA</a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div><!-- /# card -->
            </div>
        </div>


        <div class="modal" id="modalSurat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">BUAT SURAT PENGANTAR NIKAH </h5>
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

                                <form action="../simpan/s_sutarnikah.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    $query = mysqli_query ($con, "SELECT * FROM t_jenissurat WHERE kode='JS019' ORDER BY id ASC ");
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
                                    <h6 class="label">IDENTITAS CALON SUAMI :</h6>
                                    <hr>       
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nika" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nika" name="nika" onkeyup="isinika()" class="form-control" maxlength="16"  placeholder="Ketikan NIK " ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namaa" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="namaa" name="namaa" placeholder="Nama " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayaha" class=" form-control-label">Bin / Binti</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmayaha" name="nmayaha" placeholder="Nama Ayah Kandung" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jka" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jka" id="jka" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahira" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahira" name="tmp_lahira" placeholder="Tempat Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahira" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahira" name="tgl_lahira" placeholder="Tanggal Lahir " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwnga" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwnga" name="kwnga" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamaa" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agamaa" id="agamaa" class="form-control">
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
                                        <div class="col col-md-3"><label for="pkjna" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pkjna" name="pkjna" placeholder="Pekerjaan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prova" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="prova" name="prova"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Lampung</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kaba" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kaba" name="kaba"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Lampung Selatan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="keca" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="keca" name="keca"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Way Sulan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desaa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="desaa" name="desaa"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Pamulihan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusuna" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusuna" name="dusuna"  placeholder="Dusun" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almta" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almta" name="almta"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Durian Runtuh, RT./RW. 001/002</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusa" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="statusa" name="statusa" placeholder="Status Pernikahan" class="form-control"><small class="form-text text-muted">Contoh : Perjaka atau Duda</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusna" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="statusna" id="statusna" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Status NA</option>
                                                <option value="TN">Tidak Numpang</option>
                                                <option value="NP">Numpang Nikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="label">IDENTITAS CALON ISTRI :</h6>
                                    <hr>       
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nikb" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nikb" name="nikb" onkeyup="isinikb()" class="form-control" maxlength="16"  placeholder="Ketikan NIK " ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="namab" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="namab" name="namab" placeholder="Nama "  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nmayahb" class=" form-control-label">Bin / Binti</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nmayahb" name="nmayahb" placeholder="Nama Ayah Kandung" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="jkb" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jkb" id="jkb" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahirb" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahirb" name="tmp_lahirb" placeholder="Tempat Lahir "  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahirb" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahirb" name="tgl_lahirb" placeholder="Tanggal Lahir"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwngb" class=" form-control-label">Kewarga negaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwngb" name="kwngb" placeholder="Kewarga negaraan"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agamab" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agamab" id="agamab" class="form-control">
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
                                        <div class="col col-md-3"><label for="pkjnb" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pkjnb" name="pkjnb" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="provb" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="provb" name="provb"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Lampung</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kabb" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kabb" name="kabb"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Lampung Selatan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kecb" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kecb" name="kecb"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Way Sulan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desab" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="desab" name="desab"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Pamulihan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusunb" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusunb" name="dusunb"  placeholder="Dusun" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almtb" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almtb" name="almtb"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Durian Runtuh, RT./RW. 001/002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusb" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="statusb" name="statusb" placeholder="Status Pernikahan" class="form-control"><small class="form-text text-muted">Contoh : Gadis atau Janda</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="statusnb" class=" form-control-label">Status NA</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="statusnb" id="statusnb" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Status NA</option>
                                                <option value="TN">Tidak Numpang</option>
                                                <option value="NP">Numpang Nikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="label">IDENTITAS AYAH : <small class="form-text text-muted">Ayah dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik" onkeyup="isinik()" class="form-control" maxlength="16"  placeholder="Ketikan NIK Ayah" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bin" class=" form-control-label">Bin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="bin" name="bin" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarga Negaraan </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwng" name="kwng"  placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agama" id="agama" class="form-control">
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
                                        <div class="col col-md-3"><label for="pkjn" class=" form-control-label">Pekerjaan </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pkjn" name="pkjn" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="prov" name="prov"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Lampung</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kab" name="kab"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Lampung Selatan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kec" name="kec"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Way Sulan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="desa" name="desa"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Pamulihan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusun" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusun" name="dusun"  placeholder="Dusun" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Durian Runtuh, RT./RW. 001/002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="status" name="status" placeholder="Status" class="form-control"></div>
                                    </div>
                                    
                                    <hr>
                                    <h6 class="label">IDENTITAS IBU : <small class="form-text text-muted">Ibu dari Calon yang tidak Numpang NA</small></h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik1" name="nik1" onkeyup="isinik1()" class="form-control" maxlength="16"  placeholder="Ketikan NIK Ibu" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama1" name="nama1" placeholder="Nama Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bin1" class=" form-control-label">Binti</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="bin1" name="bin1" placeholder="Nama Ayah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk1" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jk1" id="jk1" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahir1" name="tmp_lahir1" placeholder="Tempat Lahir Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir1" name="tgl_lahir1" placeholder="Tanggal Lahir Ibu" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng1" class=" form-control-label">Kewarga Negaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwng1" name="kwng1" placeholder="Kewarga Negaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agama1" id="agama1" class="form-control">
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
                                        <div class="col col-md-3"><label for="pkjn1" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="pkjn1" name="pkjn1" placeholder="Pekerjaan" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="prov1" class=" form-control-label">Provinsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="prov1" name="prov1"  placeholder="Provinsi" class="form-control"><small class="form-text text-muted">Contoh : Lampung</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kab1" class=" form-control-label">Kabupaten/Kota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kab1" name="kab1"  placeholder="Kabupaten/Kota" class="form-control"><small class="form-text text-muted">Contoh : Lampung Selatan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kec1" class=" form-control-label">Kecamatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kec1" name="kec1"  placeholder="Kecamatan" class="form-control"><small class="form-text text-muted">Contoh : Way Sulan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desa1" class=" form-control-label">Desa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="desa1" name="desa1"  placeholder="Desa" class="form-control"><small class="form-text text-muted">Contoh : Pamulihan</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="dusun1" class=" form-control-label">Dusun</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dusun1" name="dusun1"  placeholder="Dusun" class="form-control"><small class="form-text text-muted">Contoh : Dusun Tegal Sari</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almt1" class=" form-control-label">Alamat/Rt./Rw.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almt1" name="almt1"  placeholder="xxx/xxx" class="form-control"><small class="form-text text-muted">Contoh : Kp. Durian Runtuh, RT./RW. 001/002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status1" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="status1" name="status1"  placeholder="Status" class="form-control"></div>
                                    </div>
<hr>
                                    <h6 class="label">PELAKSANAAN AKAD NIKAH:</h6>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hari" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jum\'at">Jum'at</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>      
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl" class=" form-control-label">Tanggal</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl" name="tgl" onkeyup="isinika()" class="form-control" placeholder="Tanggal Pelaksanaan Akad Nikah (hh/bb/tttt) " ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="waktu" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="waktu" name="waktu" placeholder="Waktu Pelaksanaan Akad (jj:mm) " class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmpt" class=" form-control-label">Tempat</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmpt" name="tmpt" placeholder="Tempat Pelaksanaan Akad Nikah" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="maskawin" class=" form-control-label">Maskawin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="maskawin" name="maskawin" class="form-control" placeholder="Maskawin" ></div>
                                    </div>

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

<div class="modal" id="modalWali" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">FORMULIR PEMERIKSAAN WALI NIKAH </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="../simpan/s_wali.php" onsubmit="return validasi_input(this)" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="no" class=" form-control-label">Pilih NA</label></div>
                                        <div class="col-12 col-md-9">
                                        <select name="no" id="no" onchange="isikode()" class="form-control">
                                                <option value="">Pilih NA</option>
                                                <?php 
                                                $query = mysqli_query ($con, "SELECT * FROM t_sutarnikah");
                                                while ($rw = mysqli_fetch_array($query)){
                                                ?>
                                                <option value="<?php echo $rw['no'];?>"><?php echo $rw['no'];?>--><?php echo $rw['namaca'];?> dan <?php echo $rw['namacb'];?>
                                                </option><?php }?>
                                            </select> 
                                            
                                        </div>
                                    </div>
                                    <input type="hidden" id="kodesuratw" name="kodesuratw" class="form-control">
                                    <?php
                                    $query = mysqli_query ($con, "SELECT * FROM t_desa WHERE id='1'");
                                    while ($rdes = mysqli_fetch_array($query)){
                                    ?>
                                <?php }?>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="harib" class=" form-control-label">Hari</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="harib" id="harib" class="form-control">
                                                <option value="-" disabled="disabled" selected="selected">Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jum\'at">Jum'at</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal</label></div>
                                        <div class="col-12 col-md-9 input-group date" id="tglp" data-target-input="nearest">
                                            <input type="text" name="tglp" id="tglp" class="form-control datetimepicker-input" data-target="#tglp" placeholder="Format : hh/bb/tttt"/>
                                            <div class="input-group-append" data-target="#tglp" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="petugas" class=" form-control-label">Petugas KUA</label></div>
                                        <div class="col-12 col-md-9 input-group date" id="tglp" data-target-input="nearest">
                                            <input type="text" name="petugas" id="petugas" class="form-control" placeholder="Nama Petugas KUA"/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jwali" class=" form-control-label">Jenis Wali</label></div>
                                        <div class="col-12 col-md-9">
                                    
                                            <select name="jwali" id="jwali" class="form-control" onchange="if(this.selectedIndex==0){{document.getElementById('swali').style.display = 'none' }  {document.getElementById('nwali').style.display = 'none' }  {document.getElementById('phwali').style.display = 'none' }} else if(this.selectedIndex==1){{document.getElementById('phwali').style.display = 'inline' } {document.getElementById('swali').style.display = 'none' }} else if(this.selectedIndex==2){{document.getElementById('swali').style.display = 'inline' } {document.getElementById('nwali').style.display = 'inline' }{document.getElementById('phwali').style.display = 'none' }} ;">
                                                <option value="">Pilih Jenis Wali</option>
                                                <option value="Wali Nasab">Wali Nasab</option>
                                                <option value="Wali Hakim">Wali Hakim</option>
                                            </select>
                                        </div>
                                    </div>
                                     <span id="phwali" style="display: none;">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hubwali" class=" form-control-label">Hubungan Wali</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="hubwali" id="hubwali" class="form-control" onchange="if(this.selectedIndex==0){{document.getElementById('nwali').style.display = 'none' }{document.getElementById('awali').style.display = 'none' }}  
                                else if (this.selectedIndex==1){{document.getElementById('nwali').style.display = 'inline' } {document.getElementById('swali').style.display = 'none' }} 
                                else if (this.selectedIndex==2){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}
                                else if (this.selectedIndex==3){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}
                                else if (this.selectedIndex==4){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}
                                else if (this.selectedIndex==5){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}
                                else if (this.selectedIndex==6){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}
                                else if (this.selectedIndex==7){{document.getElementById('nwali').style.display = 'inline'}{document.getElementById('swali').style.display = 'none' }}

                                        ;">
                                                <option value="">Pilih Hubungan Wali</option>
                                                <option value="Ayah Kandung">Ayah Kandung</option>
                                                <option value="Kakek">Kakek (Ayahnya ayah)</option>
                                                <option value="Saudara Laki-laki">Saudara Laki-laki</option>
                                                <option value="Anak Laki-laki Saudara Laki-laki">Anak Laki-laki Saudara Laki-laki</option>
                                                <option value="Paman dari Pihak Ayah">Paman dari Pihak Ayah</option>
                                                <option value="Anak Lai-laki Paman dari Pihak Ayah">Anak Laki-laki Paman dari Pihak Ayah</option>
                                            </select>
                                        </div>
                                    </div>
                                </span>
                                        <hr>
                                    <h6 class="label">WALI NIKAH:</h6>
                                    <hr>

                                <span id="nwali" style="display: none;">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="wali" class=" form-control-label">Nama Wali Nikah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="wali" name="wali" class="form-control" placeholder="Nama Wali Nikah" ></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nikwali" class=" form-control-label">NIK Wali Nikah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nikwali" name="nikwali" class="form-control" placeholder="Nomor Induk Kependudukan Wali Nikah" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="almtwali" class=" form-control-label">Alamat Wali Nikah</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="almtwali" name="walmtwali" class="form-control" placeholder="Alamat Wali Nikah" ></div>
                                    </div>
                                </span>
                                <span id="swali" style="display: none;">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sebabwalih" class=" form-control-label">Sebab Wali Hakim</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="sebabwalih" name="sebabwalih" class="form-control" placeholder="Sebab Wali Hakim" ></div>
                                    </div>
                                </span>
                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" name="simpanwali" class="btn btn-primary btn-sm">Cetak</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                                </form>                        

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
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_sutarnikah WHERE kodejenis='JS019' ORDER BY id DESC ");
                            while ($r = mysqli_fetch_array($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo $r['no'];?></td>
                                            <td><?php echo $r['tanggal'];?></td>
                                            <td><?php echo $r['namaca'];?></td>
                                            <td><a href="../cetak/c_sutarnikah.php?kode=<?php echo $r['kode'];?>" target="_BLANK" class="btn"><i class="fa fa-print"></i></a><a href="../edit/edit_sutarnikah.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-edit"></i></a>
                                            <a href="../hapus/h_sutarnikah.php?kode=<?php echo $r['kode'];?>" class="btn"><i class="fa fa-trash"></i></a></td>
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

<script src="../assets/js/jquery.min.js"></script> <!-- untuk Pemanggilan data penduduk -->
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
            function isinik1(){
                var nik = $("#nik1").val();
                $.ajax({
                    url: '../data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama1').val(obj.nama);
                    $('#jk1').val(obj.jk);
                    $('#tmp_lahir1').val(obj.tmp_lahir);
                    $('#tgl_lahir1').val(obj.tgl_lahir);
                    $('#kwgn1').val(obj.kwgn);
                    $('#agama1').val(obj.agama);
                    $('#status1').val(obj.status);
                    $('#pend1').val(obj.pend);
                    $('#kerjaan1').val(obj.kerjaan);
                    $('#rt1').val(obj.rt);
                    $('#dusun1').val(obj.dusun);
                });
            }

        </script>
                <script type="text/javascript">
            function isinika(){
                var nik = $("#nika").val();
                $.ajax({
                    url: '../data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#namaa').val(obj.nama);
                    $('#jka').val(obj.jk);
                    $('#tmp_lahira').val(obj.tmp_lahir);
                    $('#tgl_lahira').val(obj.tgl_lahir);
                    $('#kwgna').val(obj.kwgn);
                    $('#agamaa').val(obj.agama);
                    $('#statusa').val(obj.status);
                    $('#penda').val(obj.pend);
                    $('#kerjaana').val(obj.kerjaan);
                    $('#rta').val(obj.rt);
                    $('#dusuna').val(obj.dusun);
                });
            }
        </script>

        <script type="text/javascript">
            function isinikb(){
                var nik = $("#nikb").val();
                $.ajax({
                    url: '../data/panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#namab').val(obj.nama);
                    $('#jkb').val(obj.jk);
                    $('#tmp_lahirb').val(obj.tmp_lahir);
                    $('#tgl_lahirb').val(obj.tgl_lahir);
                    $('#kwgnb').val(obj.kwgn);
                    $('#agamab').val(obj.agama);
                    $('#statusb').val(obj.status);
                    $('#pendb').val(obj.pend);
                    $('#kerjaanb').val(obj.kerjaan);
                    $('#rtb').val(obj.rt);
                    $('#dusunb').val(obj.dusun);
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
            function isikode(){
                var no = $("#no").val();
                $.ajax({
                    url: '../data/panggilkodesurat.php',
                    data:"no="+no ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#kodesuratw').val(obj.kode);

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
