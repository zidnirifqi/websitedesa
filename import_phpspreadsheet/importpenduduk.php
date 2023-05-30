<!doctype html>
<?php 
include '../sesi.php';
include '../koneksi.php';
// Load file autoload.php
require 'vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
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
                            <li><a href="#">Data</a></li>
                            <li class="#">Import</li><li class="active">Data Penduduk</li>
                        </ol>
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
                                <strong class="card-title">Import Data Penduduk</strong>
                            </div>

                            <div class="card-body scroll">


    <form method="post" action="importpenduduk.php" enctype="multipart/form-data">
        <a href="formatdatapenduduk.xls">Download Format</a> &nbsp;|&nbsp;
        <a href="../data/penduduk.php">Kembali</a>
        <br><br>
        <div class="row form-group">
        <div class="col col-md-6"><input type="file" name="file" class="form-control"></div>
        <div class="col col-md-6"><button type="submit" name="preview" class="btn btn-primary">Lihat Data</button></div>
        </div>
    </form>
    <hr>

    <?php
    // Jika user telah mengklik tombol Preview
    if (isset($_POST['preview'])) {
        $tgl_sekarang = date('YmdHis'); // Ini akan mengambil waktu sekarang dengan format yyyymmddHHiiss
        $nama_file_baru = 'data' . $tgl_sekarang . '.xls';

        // Cek apakah terdapat file data.xls pada folder tmp
        if (is_file('tmp/' . $nama_file_baru)) // Jika file tersebut ada
            unlink('tmp/' . $nama_file_baru); // Hapus file tersebut

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];

        // Cek apakah file yang diupload adalah file Excel (.xls)
        if ($ext == "xls") {
            // Upload file yang dipilih ke folder tmp
            // dan rename file tersebut menjadi data{tglsekarang}.xls
            // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
            // Contoh nama file setelah di rename : data20210814192500.xls
            move_uploaded_file($tmp_file, 'tmp/' . $nama_file_baru);

            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            $spreadsheet = $reader->load('tmp/' . $nama_file_baru); // Load file yang tadi diupload ke folder tmp
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            // Buat sebuah tag form untuk proses import data ke database
            echo "<form method='post' action='import.php'>";

            // Disini kita buat input type hidden yg isinya adalah nama file excel yg diupload
            // ini tujuannya agar ketika import, kita memilih file yang tepat (sesuai yg diupload)
            echo "<input type='hidden' name='namafile' value='" . $nama_file_baru . "'>";

            // Buat sebuah div untuk alert validasi kosong
            echo "<div id='kosong' style='color: red;margin-bottom: 10px;'>
                    Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                </div>";

            echo "<table id='bootstrap-data-table-export' class='table table-striped table-bordered'>

                    <tr>
                        <th>Nkk</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Jk</th>
                        <th>Tmp. Lahir</th>
                        <th>Tgl. Lahir</th>
                        <th>Warga negara</th>
                        <th>Agama</th>
                        <th>Status</th>
                        <th>Pend</th>
                        <th>Kerjaan</th>
                        <th>RT</th>
                        <th>Dusun</th>
                        <th>Desa</th>
                        <th>Kec</th>
                        <th>Kab</th>
                        <th>Prov</th>
                        <th>HP</th>
                        <th>SHDK</th>
                        <th>Foto</th>
                        <th>Ket</th>
                    </tr>";

            $numrow = 1;
            $kosong = 0;
            foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                // Ambil data pada excel sesuai Kolom
                $nkk = $row['A']; // Ambil data nkk
                $nik = $row['B']; // Ambil data nik
                $nama = $row['C']; // Ambil data nama
                $jk = $row['D']; // Ambil data jk
                $tmp_lahir = $row['E']; // Ambil data tmp lahir
                $tgl_lahir = $row['F']; // Ambil data tgl lahir
                $kwng = $row['G']; // Ambil data kwng
                $agama = $row['H']; // Ambil data agama
                $status = $row['I']; // Ambil data status
                $pend = $row['J']; // Ambil data alamat
                $kerjaan = $row['K']; // Ambil data kerjaan
                $rt = $row['L']; // Ambil data rt
                $dusun = $row['M']; // Ambil data dusun
                $desa = $row['N']; // Ambil data desa
                $kec = $row['O']; // Ambil data kec
                $kab = $row['P']; // Ambil data kab
                $prov = $row['Q']; // Ambil data prov
                $hp = $row['R']; // Ambil data hp
                $shdk = $row['S']; // Ambil data shdk
                $foto = $row['T']; // Ambil data foto
                $ket = $row['U']; // Ambil data ket

                // Cek jika semua data tidak diisi
                if ($nkk != "" && $nik != "" && $nama != "" && $jk != "" && $tmp_lahir != "" && $tgl_lahir != "" 
    && $kwng != "" && $agama != "" && $status != "" && $pend != "" && $kerjaan != "" && $rt != "" && $dusun != "" && $desa != ""&& $kec != ""&& $kab != ""&& $prov != "" && $hp != "" && $shdk != "" && $foto != "" && $ket != "")
                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if ($numrow = 1) {
                    // Validasi apakah semua data telah diisi
                    $nkk_td = (!empty($nkk)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                    $nik_td = (!empty($nik)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $jk_td = (!empty($jk)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $tmp_lahir_td = (!empty($tmp_lahir)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $tgl_lahir_td = (!empty($tgl_lahir)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kwng_td = (!empty($kwng)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $agama_td = (!empty($agama)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $status_td = (!empty($status)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $pend_td = (!empty($pend)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kerjaan_td = (!empty($kerjaan)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $rt_td = (!empty($rt)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $dusun_td = (!empty($dusun)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $desa_td = (!empty($desa)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kec_td = (!empty($kec)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $kab_td = (!empty($kab)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $prov_td = (!empty($prov)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $hp_td = (!empty($hp)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $shdk_td = (!empty($shdk)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $foto_td = (!empty($foto)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                    $ket_td = (!empty($ket)) ? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah


                    // Jika salah satu data ada yang kosong
                    if ($nkk == "" or $nik == "" or $nama == "" or $jk == "" or $tmp_lahir == "" or $tgl_lahir == ""  or $kwng == "" or $agama == "" or $status == "" or $pend == "" or $kerjaan == "" or $rt == "" or $dusun == "" or $desa == ""or $kec == ""or $kab == ""or $prov == "" or $hp == ""  or $shdk == "" or $foto == "" ) {
                        $kosong++; // Tambah 1 variabel $kosong
                    }

                    echo "<tr>";
                    echo "<td" . $nkk_td . ">" . $nkk . "</td>";
                    echo "<td" . $nik_td . ">" . $nik . "</td>";
                    echo "<td" . $nama_td . ">" . $nama . "</td>";
                    echo "<td" . $jk_td . ">" . $jk . "</td>";
                    echo "<td" . $tmp_lahir_td . ">" . $tmp_lahir . "</td>";
                    echo "<td" . $tgl_lahir_td . ">" . $tgl_lahir . "</td>";
                    echo "<td" . $kwng_td . ">" . $kwng . "</td>";
                    echo "<td" . $agama_td . ">" . $agama . "</td>";
                    echo "<td" . $status_td . ">" . $status . "</td>";
                    echo "<td" . $pend_td . ">" . $pend . "</td>";
                    echo "<td" . $kerjaan_td . ">" . $kerjaan . "</td>";
                    echo "<td" . $rt_td . ">" . $rt . "</td>";
                    echo "<td" . $dusun_td . ">" . $dusun . "</td>";
                    echo "<td" . $desa_td . ">" . $desa . "</td>";
                    echo "<td" . $kec_td . ">" . $kec . "</td>";
                    echo "<td" . $kab_td . ">" . $kab . "</td>";
                    echo "<td" . $prov_td . ">" . $prov . "</td>";
                    echo "<td" . $hp_td . ">" . $hp . "</td>";
                    echo "<td" . $shdk_td . ">" . $shdk . "</td>";
                    echo "<td" . $foto_td . ">" . $foto . "</td>";
                    echo "<td" . $ket_td . ">" . $ket . "</td>";
                    echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
            }

            echo "</table>";

            // Cek apakah variabel kosong lebih dari 0
            // Jika lebih dari 0, berarti ada data yang masih kosong
            if ($kosong > 0) {
    ?>
                <script>
                    $(document).ready(function() {
                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                        $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                </script>
    <?php
            } else { // Jika semua data sudah diisi
                echo "<hr>";

                // Buat sebuah tombol untuk mengimport data ke database
                echo "<button type='submit' name='import' class='btn btn-primary'>Import Data</button>";
            }

            echo "</form>";
        } else { // Jika file yang diupload bukan File Excel 2007 (.xlsx)
            // Munculkan pesan validasi
            echo "<div style='color: red;margin-bottom: 10px;'>
                    Hanya File Excel (.xls) yang diperbolehkan
                </div>";
        }
    }
    ?>			
							
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

    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
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
