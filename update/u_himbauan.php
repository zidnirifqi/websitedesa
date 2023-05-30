<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$hal 		= $_POST['perihal'];
$lam		= $_POST['lampiran'];
$tujuan 	= $_POST['tujuan'];
$almt	    = $_POST['almt'];
$detail     = $_POST['detail'];




mysqli_query($con, "UPDATE t_himbauan SET no='$no', perihal='$hal', lampiran='$lam', tujuan='$tujuan', almt='$almt', detail='$detail' WHERE kode='$kode'");

echo "<script>alert('Surat Himbauan berhasil diupdate!'); window.location = '../cetak/c_himbauan.php?kode=$kode'</script>"; 

?>

