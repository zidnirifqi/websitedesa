<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_himbauan WHERE kode='$kode'");
echo "<script>alert('Surat Himbauan berhasil dihapus!'); window.location = '../tatausaha/himbauan.php?kode=$kode'</script>"; 

?>

