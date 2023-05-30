<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_pemberitahuan WHERE kode='$kode'");
echo "<script>alert('Surat Pemberitahuan berhasil dihapus!'); window.location = '../tatausaha/pemberitahuan.php?kode=$kode'</script>"; 

?>

