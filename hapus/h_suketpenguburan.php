<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketpenguburan WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Penguburan berhasil dihapus!'); window.location = '../suratkependudukan/suketpenguburan.php?kode=$kode'</script>"; 

?>

