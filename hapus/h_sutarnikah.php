<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_sutarnikah WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_datacalon WHERE kode='$kode'");
echo "<script>alert('Surat Pengantar Pernikahan berhasil dihapus!'); window.location = '../suratpernikahan/sutarnikah.php?kode=$kode'</script>"; 

?>

