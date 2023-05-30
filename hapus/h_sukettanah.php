<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_sukettanah WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Tanah dihapus!'); window.location = '../suratpertanahan/sukettanah.php?kode=$kode'</script>"; 

?>

