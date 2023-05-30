<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_pstatus WHERE kode='$kode'");
echo "<script>alert('Surat Pernyataan Status berhasil dihapus!'); window.location = '../suratpernikahan/pstatus.php?kode=$kode'</script>"; 

?>

