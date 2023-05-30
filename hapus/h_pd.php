<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_pdinas WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_datapdinas WHERE kodepd='$kode'");
echo "<script>alert('Surat Perjalanan Dinas berhasil dihapus!'); window.location = '../tatausaha/perjalanandinas.php?kode=$kode'</script>"; 

?>

