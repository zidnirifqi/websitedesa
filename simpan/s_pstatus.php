<?php
include '../koneksi.php';
$kodejenis	= $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];

$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];

$kades	 	= $_POST['kades'];

$thn = date('Y');

	//mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");

mysqli_query($con, "INSERT INTO t_pstatus values('','$kode','$kodejenis','$nmsurat','$nik', '$nama','".date('Y-m-d')."','$kades','')");

echo "<script>alert('Surat Pernyataan Status berhasil dibuat!'); window.location = '../cetak/c_pstatus.php?kode=$kode'</script>"; 

?>

