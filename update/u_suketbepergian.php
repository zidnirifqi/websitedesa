<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$tujuan 	= $_POST['tujuan'];
$keg 		= $_POST['keg'];
$tgl 		= $_POST['tgl'];
$brg 		= $_POST['brg'];




mysqli_query($con, "UPDATE t_suketbepergian SET no='$no', nik='$nik', nama='$nama', tujuan='$tujuan', keg='$keg', tgl='$tgl', brg='$brg' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Bepergian berhasil diupdate!'); window.location = '../cetak/c_suketbepergian.php?kode=$kode'</script>"; 

?>

