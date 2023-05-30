<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketlain WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan berhasil dihapus!'); window.location = '../suratumum/suketlain.php?kode=$kode'</script>"; 

?>

