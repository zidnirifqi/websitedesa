<?php
include '../koneksi.php';


$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$agama 		= $_POST['agama'];
$rt 		= $_POST['rt'];
$dusun 		= $_POST['dusun'];

$nik1    = $_POST['nik1'];
$nama1     = $_POST['nama1'];
$jk1     = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$agama1    = $_POST['agama1'];
$rt1     = $_POST['rt1'];
$dusun1    = $_POST['dusun1'];

$nik2    = $_POST['nik2'];
$nama2     = $_POST['nama2'];
$jk2     = $_POST['jk2'];
$tmp_lahir2  = $_POST['tmp_lahir2'];
$tgl_lahir2  = $_POST['tgl_lahir2'];
$agama2    = $_POST['agama2'];
$rt2     = $_POST['rt2'];
$dusun2    = $_POST['dusun2'];
$almt = 'Rt./Rw. '.$rt.' '.$dusun;  
$almt1 = 'Rt./Rw. '.$rt1.' '.$dusun1;
$almt2 = 'Rt./Rw. '.$rt2.' '.$dusun2; 

$blnr       = $_POST['blnr'];
$kades      = $_POST['kades'];
$thn        = date('Y');
$almt       = 'Rt./Rw. '.$rt.' '.$dusun;                                                                      
$slash      = '/';
$nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
        if(isset($_POST['cetak'])){

            // isi qrcode yang ingin dibuat. akan muncul saat di scan
            $isi = $nosur.'nik:'.$nik.'nama:'.$nama;
            $nama_qr =md5($isi);
            // memanggil library php qrcode
            include "../phpqrcode/qrlib.php"; 

            // nama folder tempat penyimpanan file qrcode
            $penyimpanan = "../qrcode/";

            // membuat folder dengan nama "temp"
            if (!file_exists($penyimpanan))
             mkdir($penyimpanan);

            // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
            // atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
            // atur pixel qrcode pada parameter ke 4
            // atur jarak frame pada parameter ke 5
            QRcode::png($isi, $penyimpanan.$nama_qr.'.png', QR_ECLEVEL_L, 10, 5); 
         
            // menampilkan qrcode 
            echo '<img src="'.$penyimpanan.$nama_qr.'.png">';
   mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");

   mysqli_query($con, "INSERT INTO t_suketortu values('','$kode','$kodejenis','$nmsurat','$nosur','$nik','$nama','$jk','$tmp_lahir','$tgl_lahir','$agama', '$almt', '$nik1','$nama1','$jk1','$tmp_lahir1','$tgl_lahir1','$agama1', '$almt1','$nik2','$nama2','$jk2','$tmp_lahir2','$tgl_lahir2','$agama2', '$almt2', '".date('Y-m-d')."','$kades','".$nama_qr.".png','')");


echo "<script>alert('Surat Keterangan Orang Tua berhasil dibuat!'); window.location = '../cetak/c_suketortu.php?kode=$kode'</script>"; 
}
?>


