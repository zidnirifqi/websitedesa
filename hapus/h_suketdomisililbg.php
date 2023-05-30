<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketdomisililbg WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Domisili berhasil dihapus!'); window.location = '../suratumum/suketdomisililbg.php?kode=$kode'</script>"; 

?>

