<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_sukettmpusaha WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Tempat Usaha berhasil dihapus!'); window.location = '../suratumum/sukettmpusaha.php?kode=$kode'</script>"; 

?>

