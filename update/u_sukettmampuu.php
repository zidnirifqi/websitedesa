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

$niki 		= $_POST['niki'];
$namai 		= $_POST['namai'];
$jki 		= $_POST['jki'];
$tmp_lahiri = $_POST['tmp_lahiri'];
$tgl_lahiri	= $_POST['tgl_lahiri'];
$agamai 	= $_POST['agamai'];
$almti		= $_POST['alamati'];




mysqli_query($con, "UPDATE t_sukettmampuu SET no='$no', nik='$nik', nama='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$almt', nikistri='$niki', namaistri='$namai', jkistri='$jki', tmp_lahiristri='$tmp_lahiri', tgl_lahiristri='$tgl_lahiri', agamaistri='$agamai', alamatistri='$almti' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Keluarga Tidak Mampu berhasil diupdate!'); window.location = '../cetak/c_sukettmampuu.php?kode=$kode'</script>"; 

?>

