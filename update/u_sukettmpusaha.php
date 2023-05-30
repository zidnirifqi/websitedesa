<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nmusaha 	= $_POST['nmusaha'];
$bdgusaha 	= $_POST['bdgusaha'];
$thnberdiri = $_POST['thnberdiri'];
$pemilikusaha = $_POST['pemilikusaha'];
$jmlpekerja = $_POST['jmlpekerja'];
$izinusaha 	= $_POST['izinusaha'];
$alamatusaha= $_POST['alamatusaha'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

mysqli_query($con, "UPDATE t_sukettmpusaha SET no='$no', nmusaha='$nmusaha', bdgusaha='$bdgusaha', thnberdiri='$thnberdiri', pemilikusaha='$pemilikusaha', jmlpekerja='$jmlpekerja', izinusaha='$izinusaha', alamatusaha='$alamatusaha', nik='$nik', nama='$nama' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Tempat Usaha berhasil diupdate!'); window.location = '../cetak/c_sukettmpusaha.php?kode=$kode'</script>"; 

?>

