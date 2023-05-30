<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketpnikah WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Pernah Menikah berhasil dihapus!'); window.location = '../suratpernikahan/suketpernahnikah.php?kode=$kode'</script>"; 

?>

