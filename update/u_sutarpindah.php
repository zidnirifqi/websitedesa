<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$tujuan 		= $_POST['tujuan'];
$jmlpindah 		= $_POST['jmlpindah'];




mysqli_query($con, "UPDATE t_sutarpindah SET no='$no', nik='$nik', nama='$nama', tujuan='$tujuan', jmlpindah='$jmlpindah' WHERE kode='$kode'");

echo "<script>alert('Surat Pengantar Pindah berhasil diupdate!'); window.location = '../cetak/c_sutarpindah.php?kode=$kode'</script>"; 

?>

