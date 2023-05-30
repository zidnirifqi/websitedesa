<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketortu WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Orang Tua berhasil dihapus!'); window.location = '../suratumum/suketortu.php?kode=$kode'</script>"; 

?>

