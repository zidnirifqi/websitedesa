<?php
include '../koneksi.php';
$kodejenis		= $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$jmlhasil 	= $_POST['jmlhasil'];
$sumberhasil= $_POST['sumberhasil'];

$blnr		= $_POST['blnr'];
$kades	 	= $_POST['kades'];
$thn 		= date('Y');
                                                                      
$slash		= '/';
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

mysqli_query($con, "INSERT INTO t_suketpenghasilan values('','$kode','$kodejenis','$nmsurat','$nosur','$nik', '$nama','$jmlhasil','$sumberhasil','".date('Y-m-d')."','$kades','".$nama_qr.".png')");

echo "<script>alert('Surat Keterangan Penghasilan berhasil dibuat!'); window.location = '../cetak/c_suketpenghasilan.php?kode=$kode'</script>"; 
}
?>

