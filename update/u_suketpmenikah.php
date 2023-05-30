<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$tmp_lahir 	= $_POST['tmp_lahir'];
$tgl_lahir	= $_POST['tgl_lahir'];
$kwng 		= $_POST['kwng'];
$agama 		= $_POST['agama'];
$pkjn 		= $_POST['pkjn'];
$prov 		= $_POST['prov'];
$kab       = $_POST['kab'];
$kec       = $_POST['kec'];
$desa       = $_POST['desa'];
$almt		= $_POST['alamat'];

$nik1 		= $_POST['nik1'];
$nama1 		= $_POST['nama1'];
$jk1 		= $_POST['jk1'];
$tmp_lahir1 = $_POST['tmp_lahir1'];
$tgl_lahir1	= $_POST['tgl_lahir1'];
$kwng1 		= $_POST['kwng1'];
$agama1 	= $_POST['agama1'];
$pkjn1 		= $_POST['pkjn1'];
$prov1       = $_POST['prov1'];
$kab1       = $_POST['kab1'];
$kec1       = $_POST['kec1'];
$desa1       = $_POST['desa1'];
$almt1		= $_POST['alamat1'];

$tgl_nikah 		= $_POST['tgl_nikah'];
$secara 		= $_POST['secara'];

mysqli_query($con, "UPDATE t_suketpnikah SET no='$no', nik='$nik', nama='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kwng='$kwng', agama='$agama', pkjn='$pkjn', prov='$prov', kab='$kab', kec='$kec', desa='$desa', alamat='$almt', nik1='$nik1', nama1='$nama1', jk1='$jk1', tmp_lahir1='$tmp_lahir1', tgl_lahir1='$tgl_lahir1', kwng1='$kwng1', agama1='$agama1', pkjn1='$pkjn1', prov1='$prov1', kab1='$kab1', kec1='$kec1', desa1='$desa1', alamat1='$almt1', tgl_nikah='$tgl_nikah', secara='$secara' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Pernah Menikah berhasil diupdate!'); window.location = '../cetak/c_suketpmenikah.php?kode=$kode'</script>"; 

?>

