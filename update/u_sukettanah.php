<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$luas 		= $_POST['luas'];
$letak 		= $_POST['letak'];
$asal 		= $_POST['asaltanah'];
$b 			= $_POST['barat'];
$u 			= $_POST['utara'];
$t 			= $_POST['timur'];
$s 			= $_POST['selatan'];




mysqli_query($con, "UPDATE t_sukettanah SET no='$no', nik='$nik', nama='$nama', luas='$luas', letak='$letak', asaltanah='$asal', barat='$b', utara='$u', timur='$t', selatan='$s' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Kepemilikan Tanah berhasil diupdate!'); window.location = '../cetak/c_sukettanah.php?kode=$kode'</script>"; 

?>

