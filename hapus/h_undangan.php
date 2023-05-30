<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_undangan WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_dataundangan WHERE kodeu='$kode'");
echo "<script>alert('Surat Undangan berhasil dihapus!'); window.location = '../tatausaha/undangan.php?kode=$kode'</script>"; 

?>

