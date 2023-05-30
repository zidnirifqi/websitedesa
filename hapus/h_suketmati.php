<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketmati WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Kematian berhasil dihapus!'); window.location = '../suratumum/suketmati.php?kode=$kode'</script>"; 

?>

