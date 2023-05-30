<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketternak WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Pengantar Ternak berhasil dihapus!'); window.location = '../suratumum/suketternak.php?kode=$kode'</script>"; 

?>

