<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketusaha WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Usaha berhasil dihapus!'); window.location = '../suratumum/suketusaha.php?kode=$kode'</script>"; 

?>

