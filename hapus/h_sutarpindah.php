<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_sutarpindah WHERE kode='$kode'");
echo "<script>alert('Surat Pengantar Pindah berhasil dihapus!'); window.location = '../suratkependudukan/sutarpindah.php?kode=$kode'</script>"; 

?>

