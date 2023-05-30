<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketbepergian WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Bepergian berhasil dihapus!'); window.location = '../suratumum/suketbepergian.php?kode=$kode'</script>"; 

?>

