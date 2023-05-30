<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nmbrg 	= $_POST['nmbrg'];
$jnbrg 	= $_POST['jnbrg'];
$jmlbrg = $_POST['jmlbrg'];
$pemilikbrg = $_POST['pemilikbrg'];
$asalbrg = $_POST['asalbrg'];
$tujuanbrg 	= $_POST['tujuanbrg'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

mysqli_query($con, "UPDATE t_suketbarang SET no='$no', nmbrg='$nmbrg', jnbrg='$jnbrg', jmlbrg='$jmlbrg', pemilikbrg='$pemilikbrg', asalbrg='$asalbrg', tujuanbrg='$tujuanbrg', nik='$nik', nama='$nama' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Pengantar Barang berhasil diupdate!'); window.location = '../cetak/c_suketbarang.php?kode=$kode'</script>"; 

?>

