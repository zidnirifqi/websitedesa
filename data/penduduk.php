<!doctype html>
<?php 
include '../sesi.php';
include '../koneksi.php';
?>
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
                            <li><a href="#">Penduduk</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <button type="button" data-toggle="modal" data-target="#modalPenduduk" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah Data Penduduk</button>
                    <a href="../import_phpspreadsheet/importpenduduk.php" type="button" class="btn btn-primary"><i class="fa fa-upload"></i>&nbsp; Import Data Penduduk</a>
                    <a href="datapenduduk.php" type="button" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp; Download Data Penduduk</a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="modal" id="modalPenduduk" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Tambah Data Penduduk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../simpan/s_penduduk.php" method="post" name="form" id="form" onSubmit="return validasi(this)" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="nkk" class=" form-control-label">No. KK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nkk" name="nkk" maxlength="16" class="form-control" placeholder="Nomor Kartu Keluarga" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nik" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik" name="nik" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" ></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Nama lengkap"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="" disabled="disabled" selected="selected">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tmp_lahir" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="tgl_lahir" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="tgl/bln/thn" class="form-control"><small class="form-text text-muted">Contoh : 30/12/1990</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kwng" class=" form-control-label">Kewarganegaraan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kwng" name="kwng" placeholder="Kewarganegaraan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="agama" id="agama"  class="form-control">
                                                <option value="" disabled="disabled" selected="selected">Agama</option>
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
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status Perkawinan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" class="form-control">
                                                <option value="" disabled="disabled" selected="selected">Status Perkawinan</option>
                                                <option value="Kawin">Kawin</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Cerai Hidup">Cerai Hidup</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="pend" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="pend" id="pend"  class="form-control">
                                                <option value="" disabled="disabled" selected="selected">Pendidikan</option>
                                                <option value="SD">SD</option>
                                                <option value="SLTP">SLTP</option>
                                                <option value="SLTA">SLTA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="T/B. Sekolah">T/B. Sekolah</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kerjaan" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="kerjaan" name="kerjaan"  placeholder="Pekerjaan" class="form-control"></div>
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
                                        <div class="col-12 col-md-9"><input type="text" id="almt" name="almt"  placeholder="Contoh : Kp. Durian Runtuh, RT./RW. 001/002" class="form-control"><small class="form-text text-muted">Contoh : Kp. Durian Runtuh, RT./RW. 001/002</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hp" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="hp" name="hp"  placeholder="No. HP" class="form-control"><small class="form-text text-muted">Contoh : 082212345678</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="shdk" class=" form-control-label">SHDK</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="shdk" id="shdk"  class="form-control">
                                                <option value="" disabled="disabled" selected="selected">SHDK</option>
                                                <option value="Kepala keluarga">Kepala keluarga</option>
                                                <option value="Suami">Suami</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                                <option value="Ayah">Ayah</option>
                                                <option value="Ibu">Ibu</option>
                                                <option value="Famili lain">Famili lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file" name="file" id="file" placeholder="Pas photo" class="form-control"><small class="form-text text-muted">Ukuran : 3x4 cm, Max 500 KB</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="ket" class=" form-control-label">Keterangan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ket" name="ket"  placeholder="Keterangan tambahan" class="form-control"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-6"><button type="submit" name="simpan" in="simpan" class="btn btn-primary btn-sm">Simpan</button></div>
                                        <div class="col col-md-6"><button type="reset" class="btn btn-primary btn-sm pull pull-right">Reset</button></div>
                                    </div>
                            </div>
                        </form>
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
                                <strong class="card-title">Data Penduduk</strong>
                            </div>

                            <div class="card-body scroll">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Jk</th>
                                            <th>Tmp./Tgl. Lahir</th>
                                            <th>Status</th>
                                            <th>Alamat</th>
                                            <th>HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                        <?php 
                            $query = mysqli_query ($con, "SELECT * FROM t_penduduk ORDER BY id ASC ");
                            while ($r = mysqli_fetch_array($query)){
                         ?>
                                        <tr>
                                            <td><?php echo $r['id'];?></td>
                                            <td><?php echo substr($r['nik'],0,6);?>***</td>
                                            <td><?php echo $r['nama'];?></td>
                                            <td><?php echo substr($r['jk'],0,1);?></td>
                                            <td><?php echo $r['tmp_lahir'];?>,&nbsp;
                                            <?php echo $r['tgl_lahir'];?></td>
                                            <td><?php echo $r['status'];?></td>
                                            <td><?php echo $r['rt'];?>&nbsp;<?php echo $r['dusun'];?></td>
                                            <td><a href="https://api.whatsapp.com/send?phone=62<?php echo $r['hp'];?>"><?php echo substr($r['hp'],0,6);?>***</a>
                                            </td>
                                            <td><a href="../cetak/c_penduduk.php?nik=<?php echo $r['nik'];?>" target="_BLANK" class="btn"><i class="fa fa-search"></i></a>
                                            &nbsp;<a href="../edit/edit_penduduk.php?nik=<?php echo $r['nik'];?>"><i class="fa fa-edit"></i></a>&nbsp;<a href="../hapus/h_penduduk.php?nik=<?php echo $r['nik'];?>"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table> 
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
<!-- Ini merupakan script yang terpenting -->

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#modalview').on('show.bs.modal', function (e) {
            var nik = $(e.relatedTarget).data('nik');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : '../views/viewsp.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :'nik='+ nik,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.fetch-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>   
<!--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript">
            function isinik(){
                var nik = $("#nik").val();
                $.ajax({
                    url: 'panggildatawarga.php',
                    data:"nik="+nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#tmp_lahir').val(obj.tmp_lahir);
                    $('#tgl_lahir').val(obj.tgl_lahir);
                    $('#jk').val(obj.jk);
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
                    url: 'panggiljenissurat.php',
                    data:"nmsurat="+nmsurat ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#rdawal').val(obj.rdawal);
                    $('#rdtengah').val(obj.rdtengah);
                    $('#rdakhir').val(obj.rdakhir);
                });
            }
        </script>  

 -->

<script type="text/javascript">
  function validasi(form) {  
    if (form.nkk.value=="") {
      alert('NKK / Nomor Kartu Keluarga  harus di isi !');
      form.nkk.focus();
      return false;
    }else if(form.nik.value=="") {
      alert('NIK / Nomor Induk Kependudukan harus di isi !');
      form.nik.focus();
      return false;
    }else if(form.nama.value=="") {
      alert('Nama harus di isi !');
      form.nama.focus();
      return false;
    }else if(form.jk.value=="") {
      alert('Jenis Kelamin harus di dipilih !');
      form.jk.focus();
      return false;
    }else if(form.tmp_lahir.value=="") {
      alert('Tempat Lahir harus di isi !');
      form.tmp_lahir.focus();
      return false;
    }else if(form.tgl_lahir.value=="") {
      alert('Tanggal Lahir harus di isi !');
      form.tgl_lahir.focus();
      return false;
    }else if(form.agama.value=="") {
      alert('Agama harus di pilih !');
      form.agama.focus();
      return false;
    }else if(form.status.value=="") {
      alert('Status harus di pilih !');
      form.status.focus();
      return false;
    }else if(form.pend.value=="") {
      alert('Pendidikan harus di pilih !');
      form.pend.focus();
      return false;
    }else if(form.kerjaan.value=="") {
      alert('Pekerjaan harus di isi !');
      form.kerjaan.focus();
      return false;
    }else if(form.almt.value=="") {
      alert('Alamat Rt./Rw. harus di isi !');
      form.almt.focus();
      return false;
    }else if(form.dusun.value=="") {
      alert('Dusun harus di isi !');
      form.dusun.focus();
      return false;
    }

  }
</script>

<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
</body>

</html>
