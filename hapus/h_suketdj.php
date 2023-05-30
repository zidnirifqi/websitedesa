<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketdj WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Duda atau Janda berhasil dihapus!'); window.location = '../suratpernikahan/suketdudajanda.php?kode=$kode'</script>"; 

?>

