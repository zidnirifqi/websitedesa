<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketbedaid WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Beda Identitas berhasil dihapus!'); window.location = '../suratumum/suketbedaid.php?kode=$kode'</script>"; 

?>

