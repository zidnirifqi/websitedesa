<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_ahliwaris WHERE kodeaw='$kode'");
mysqli_query($con, "DELETE  FROM t_suketaw WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Ahli Waris dihapus!'); window.location = '../suratpertanahan/suketaw.php?kode=$kode'</script>"; 

?>

