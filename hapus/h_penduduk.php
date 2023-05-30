<?php
include '../koneksi.php';

$nik		= $_GET['nik'];


mysqli_query($con, "DELETE  FROM t_penduduk WHERE nik='$nik'");
echo "<script>alert('Data Penduduk berhasil dihapus!'); window.location = '../data/penduduk.php?nik=$nik'</script>"; 

?>

