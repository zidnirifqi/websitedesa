<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
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
$almt		= $_POST['alamat'];

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
$almti		= $_POST['alamati'];

$tgl_nikah 		= $_POST['tgl_nikah'];
$secara 		= $_POST['secara'];
$mahar 			= $_POST['mahar'];
$saksi1 		= $_POST['saksi1'];
$saksi2 		= $_POST['saksi2'];
$alasan 		= $_POST['alasan'];





mysqli_query($con, "UPDATE t_suketmenikah SET no='$no', nik='$nik', nama='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', prov='$prov', kab='$kab', kec='$kec', desa='$desa', alamat='$almt', nikistri='$niki', namaistri='$namai', jkistri='$jki', tmp_lahiristri='$tmp_lahiri', tgl_lahiristri='$tgl_lahiri', agamaistri='$agamai', provi='$provi', kabi='$kabi', keci='$keci', desai='$desai', alamatistri='$almti', tgl_nikah='$tgl_nikah', secara='$secara', mahar='$mahar', saksi1='$saksi1', saksi2='$saksi2', alasan='$alasan' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Menikah berhasil diupdate!'); window.location = '../cetak/c_suketmenikah.php?kode=$kode'</script>"; 

?>

