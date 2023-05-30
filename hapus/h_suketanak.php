<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketanak WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Anak berhasil dihapus!'); window.location = '../suratumum/suketanak.php?kode=$kode'</script>"; 

?>

