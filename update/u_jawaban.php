<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$hal 		= $_POST['perihal'];
$lam		= $_POST['lampiran'];
$dasar      = $_POST['dasar'];
$lbg 	    = $_POST['lbg'];
$almt	    = $_POST['almt'];
$jawaban    = $_POST['jawaban'];




mysqli_query($con, "UPDATE t_jawaban SET no='$no', perihal='$hal', lampiran='$lam', dasar='$dasar', lbg='$lbg', almt='$almt', jawaban='$jawaban' WHERE kode='$kode'");

echo "<script>alert('Surat Jawaban berhasil diupdate!'); window.location = '../cetak/c_jawaban.php?kode=$kode'</script>"; 

?>

