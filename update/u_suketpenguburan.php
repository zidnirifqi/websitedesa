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
$agama 		= $_POST['agama'];
$almt		= $_POST['alamat'];
$tgl 		= $_POST['tgl'];
$nmmakam	= $_POST['nmmakam'];





mysqli_query($con, "UPDATE t_suketpenguburan SET no='$no', nik='$nik', nama='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$almt', tglpenguburan='$tgl', nmmakam='$nmmakam' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Penguburan berhasil diupdate!'); window.location = '../cetak/c_suketpenguburan.php?kode=$kode'</script>"; 

?>

