<?php
include '../koneksi.php';

$kode		= $_GET['kode'];


mysqli_query($con, "DELETE  FROM t_datasurat WHERE kode='$kode'");
mysqli_query($con, "DELETE  FROM t_sukettmampuu WHERE kode='$kode'");
echo "<script>alert('Surat Keterangan Tidak Mampu berhasil dihapus!'); window.location = '../suratumum/sukettmampuu.php?kode=$kode'</script>"; 

?>

