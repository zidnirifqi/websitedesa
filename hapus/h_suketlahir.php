<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_suketlahir WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Kelahiran berhasil dihapus!'); window.location = '../suratkependudukan/suketkelahiran.php?kode=$kode'</script>"; 

?>

