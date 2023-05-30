<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketbarang WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Pengantar Barang berhasil dihapus!'); window.location = '../suratumum/suketbarang.php?kode=$kode'</script>"; 

?>

