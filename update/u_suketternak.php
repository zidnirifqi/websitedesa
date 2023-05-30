<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nmternak 	= $_POST['nmternak'];
$jnternak 	= $_POST['jnternak'];
$ciriternak = $_POST['ciriternak'];
$pemilikternak = $_POST['pemilikternak'];
$asalternak = $_POST['asalternak'];
$tujuanternak 	= $_POST['tujuanternak'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

mysqli_query($con, "UPDATE t_suketternak SET no='$no', nmternak='$nmternak', jnternak='$jnternak', ciriternak='$ciriternak', pemilikternak='$pemilikternak', asalternak='$asalternak', tujuanternak='$tujuanternak', nik='$nik', nama='$nama' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Pengantar Ternak berhasil diupdate!'); window.location = '../cetak/c_suketternak.php?kode=$kode'</script>"; 

?>

