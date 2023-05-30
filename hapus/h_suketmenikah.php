<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketmenikah WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Menikah berhasil dihapus!'); window.location = '../suratumum/suketmenikah.php?kode=$kode'</script>"; 

?>

