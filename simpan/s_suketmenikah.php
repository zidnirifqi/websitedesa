<?php
include '../koneksi.php';
$kodejenis		= $_POST['kodejenis'];
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
$prov       = $_POST['prov'];
$kab       = $_POST['kab'];
$kec       = $_POST['kec'];
$desa       = $_POST['desa'];
$rt 		= $_POST['almt'];
$dusun 		= $_POST['dusun'];

$niki 		= $_POST['niki'];
$namai 		= $_POST['namai'];
$jki 		= $_POST['jki'];
$tmp_lahiri = $_POST['tmp_lahiri'];
$tgl_lahiri	= $_POST['tgl_lahiri'];
$agamai 	= $_POST['agamai'];
$provi       = $_POST['provi'];
$kabi       = $_POST['kabi'];
$keci       = $_POST['keci'];
$desai       = $_POST['desai'];
$rti 		= $_POST['almti'];
$dusuni 	= $_POST['dusuni'];

$tgl_nikah 		= $_POST['tgl_nikah'];
$secara 		= $_POST['secara'];
$mahar 			= $_POST['mahar'];
$saksi1 		= $_POST['saksi1'];
$saksi2 		= $_POST['saksi2'];
$alasan 		= $_POST['alasan'];
$almt 			= $rt.' '.$dusun;
$almti 			= $rti.' '.$dusuni;

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

mysqli_query($con, "INSERT INTO t_suketmenikah (kode, kodejenis, nmsurat, no, nik, nama, jk, tmp_lahir, tgl_lahir, agama, prov, kab, kec, desa, alamat, nikistri, namaistri, jkistri, tmp_lahiristri, tgl_lahiristri, agamaistri, provi, kabi, keci, desai, alamatistri, tgl_nikah, secara, mahar, saksi1, saksi2, alasan, tanggal, ttd, qrcode) values('$kode','$kodejenis','$nmsurat','$nosur','$nik', '$nama','$jk','$tmp_lahir','$tgl_lahir','$agama', '$prov', '$kab', '$kec', '$desa', '$almt','$niki', '$namai','$jki','$tmp_lahiri','$tgl_lahiri','$agamai','$provi','$kabi','$keci','$desai', '$almti','$tgl_nikah', '$secara','$mahar', '$saksi1', '$saksi2', '$alasan','".date('Y-m-d')."','$kades','".$nama_qr.".png')");

echo "<script>alert('Surat Keterangan Menikah berhasil dibuat!'); window.location = '../cetak/c_suketmenikah.php?kode=$kode'</script>"; 
}
?>

