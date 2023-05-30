<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];
$nmlbg 		= $_POST['namalbg'];
$bdglbg		= $_POST['bidanglbg'];
$nmket 		= $_POST['namaketua'];
$almt 		= $_POST['almt'];

$sejak 		= $_POST['sejak'];

mysqli_query($con, "UPDATE t_suketdomisililbg SET nama_lbg='$nmlbg', bidang_lbg='$bdglbg', nama_ketua='$nmket', alamat='$almt', sejak='$sejak' WHERE kode='$kode'");

echo "<script>alert('Surat Keterangan Domisili Lembaga berhasil diupdate!'); window.location = '../cetak/c_suketdomisililbg.php?kode=$kode'</script>"; 

?>

