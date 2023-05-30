<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nik 		   = $_POST['nika'];
$nama 		= $_POST['namaa'];
$bin       = $_POST['bina'];
$jk 		   = $_POST['jka'];
$tmp_lahir 	= $_POST['tmp_lahira'];
$tgl_lahir	= $_POST['tgl_lahira'];
$kwng       = $_POST['kwnga'];
$agama 		= $_POST['agamaa'];
$pkjn       = $_POST['pkjna'];
$almt 	   = $_POST['alamata'];

$nik1        = $_POST['nik1'];
$nama1       = $_POST['nama1'];
$bin1        = $_POST['bin1'];
$jk1         = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$kwng1       = $_POST['kwng1'];
$agama1      = $_POST['agama1'];
$pkjn1       = $_POST['pkjn1'];
$alamat1     = $_POST['alamat1'];

$shdk        = $_POST['shdk'];

$sebab      = $_POST['sebab'];
$hari       = $_POST['hari'];
$tanggal    = $_POST['tanggal'];
$waktu      = $_POST['waktu'];
$tempat     = $_POST['tempat'];



   mysqli_query($con, "UPDATE t_suketmati SET no='$no', nikalm='$nik', namaalm='$nama', binbintialm='$bin', jkalm='$jk', tmp_lahiralm='$tmp_lahir', tgl_lahiralm='$tgl_lahir', kwngalm='$kwng', agamaalm='$agama', pkjnalm='$pkjn', alamatalm='$almt', nikpelapor='$nik1', namapelapor='$nama1', binbintipelapor='$bin1', jkpelapor='$jk1', tmp_lahirpelapor='$tmp_lahir1', tgl_lahirpelapor='$tgl_lahir1', kwngpelapor='$kwng1', agamapelapor='$agama1', pkjnpelapor='$pkjn1', alamatpelapor='$alamat1', shdkpelapor='$shdk', sebab='$sebab', hari='$hari', tgl='$tanggal', waktu='$waktu', tempat='$tempat' WHERE kode='$kode'");


echo "<script>alert('Surat Keterangan Kematian berhasil diupdate!'); window.location = '../cetak/c_suketmati.php?kode=$kode'</script>"; 

?>


