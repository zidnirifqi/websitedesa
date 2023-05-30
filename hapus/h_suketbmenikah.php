<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketbnikah WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Belum Pernah Menikah berhasil dihapus!'); window.location = '../suratpernikahan/suketbelumnikah.php?kode=$kode'</script>"; 

?>

