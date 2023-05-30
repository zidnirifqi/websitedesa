<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketdomisili WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Domisili berhasil dihapus!'); window.location = '../suratkependudukan/suketdomisili.php?kode=$kode'</script>"; 

?>

