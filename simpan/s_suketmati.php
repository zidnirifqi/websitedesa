<?php
include '../koneksi.php';



$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nika'];
$nama 		= $_POST['namaa'];
$bin        = $_POST['bina'];
$jk         = $_POST['jka'];
$tmp_lahir  = $_POST['tmp_lahira'];
$tgl_lahir  = $_POST['tgl_lahira'];
$kwng       = $_POST['kwnga'];
$agama      = $_POST['agamaa'];
$pkjn       = $_POST['pkjna'];
$rt 		= $_POST['rta'];
$dusun 		= $_POST['dusuna'];

$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$bin1        = $_POST['bin1'];
$jk1         = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$kwng1       = $_POST['kwng1'];
$agama1      = $_POST['agama1'];
$pkjn1       = $_POST['pkjn1'];
$rt1        = $_POST['rt1'];
$dusun1     = $_POST['dusun1'];
$shdk       = $_POST['shdk'];
$sebab    = $_POST['sebab'];
$hari     = $_POST['hari'];
$tanggal     = $_POST['tanggal'];
$waktu  = $_POST['waktu'];
$tempat  = $_POST['tempat'];

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

   mysqli_query($con, "INSERT INTO t_suketmati values('','$kode','$kodejenis', '$nmsurat','$nosur','$nik','$nama', '$bin', '$jk','$tmp_lahir','$tgl_lahir', '$kwng', '$agama', '$pkjn', '$almt', '$nik1','$nama1', '$bin1', '$jk1','$tmp_lahir1','$tgl_lahir1', '$kwng1', '$agama1', '$pkjn1', '$almt1','$shdk','$sebab','$hari','$tanggal','$waktu','$tempat','".date('Y-m-d')."','$kades','".$nama_qr.".png','')");


echo "<script>alert('Surat Keterangan Kematian berhasil dibuat!'); window.location = '../cetak/c_suketmati.php?kode=$kode'</script>"; 
}
?>


