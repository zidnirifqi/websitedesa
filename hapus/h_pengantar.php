<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_pengantar WHERE kode='$kode'");
echo "<script>alert('Surat Pengantar berhasil dihapus!'); window.location = '../tatausaha/pengantar.php?kode=$kode'</script>"; 

?>

