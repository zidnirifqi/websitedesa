<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketpenghasilan WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Penghasilan berhasil dihapus!'); window.location = '../suratumum/suketpenghasilan.php?kode=$kode'</script>"; 

?>

