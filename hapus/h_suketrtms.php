<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketrtms WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Rumah Tangga Miskin berhasil dihapus!'); window.location = '../suratumum/suketrtms.php?kode=$kode'</script>"; 

?>

