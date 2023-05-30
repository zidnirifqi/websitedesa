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
$alamat 	= $_POST['alamat'];


$nik1    = $_POST['nik1'];
$nama1     = $_POST['nama1'];
$jk1     = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$agama1    = $_POST['agama1'];
$alamat1     = $_POST['alamat1'];


$nik2    = $_POST['nik2'];
$nama2     = $_POST['nama2'];
$jk2     = $_POST['jk2'];
$tmp_lahir2  = $_POST['tmp_lahir2'];
$tgl_lahir2  = $_POST['tgl_lahir2'];
$agama2    = $_POST['agama2'];
$alamat2     = $_POST['alamat2'];






   mysqli_query($con, "UPDATE t_suketortu SET no='$no', nik='$nik', nama='$nama', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', nikibu='$nik1', namaibu='$nama1', jkibu='$jk1', tmp_lahiribu='$tmp_lahir1', tgl_lahiribu='$tgl_lahir1', agamaibu='$agama1', alamatibu='$alamat1', nikanak='$nik2', namaanak='$nama2', jkanak='$jk2', tmp_lahiranak='$tmp_lahir2', tgl_lahiranak='$tgl_lahir2', agamaanak='$agama2', alamatanak='$alamat2' WHERE kode='$kode'");


echo "<script>alert('Surat Keterangan Orang Tua berhasil diupdate!'); window.location = '../cetak/c_suketortu.php?kode=$kode'</script>"; 

?>



