<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$jp         = $_POST['jp'];
$nik 		= $_POST['nik'];

mysqli_query($con, "UPDATE t_f121 SET no='$no', nik='$nik' WHERE kode='$kode'");

echo "<script>alert('Surat Permohonan KTP berhasil diupdate!'); window.location = '../cetak/c_f121.php?kode=$kode'</script>"; 

?>

