<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$sejak 		= $_POST['sejak'];





mysqli_query($con, "UPDATE t_suketdomisili SET no='$no', nik='$nik', nama='$nama', sejak='$sejak' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Domisili berhasil diupdate!'); window.location = '../cetak/c_suketdomisili.php?kode=$kode'</script>"; 

?>

