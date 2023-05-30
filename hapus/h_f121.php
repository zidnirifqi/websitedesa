<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_f121 WHERE kode='$kode'");
echo "<script>alert('Surat Permohonan KTP berhasil dihapus!'); window.location = '../suratkependudukan/f121.php?kode=$kode'</script>"; 

?>

