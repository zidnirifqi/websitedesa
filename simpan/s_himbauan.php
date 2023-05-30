<?php
include '../koneksi.php';


$kodejenis  = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$hal 		= $_POST['perihal'];
$lam		= $_POST['lampiran'];
$tujuan 	= $_POST['tujuan'];
$almt	    = $_POST['almt'];
$detail     = $_POST['detail'];

$blnr	= $_POST['blnr'];

$kades	 	= $_POST['kades'];
$thn = date('Y');
                                                            
$slash	= '/';
$nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
               
        
   mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");
    mysqli_query($con, "INSERT INTO t_himbauan values('','$kode','$kodejenis','$nmsurat','$nosur','$hal','$lam','$tujuan','$almt', '$detail','".date('Y-m-d')."','$kades','')");


		
echo "<script>alert('Surat Himbauan berhasil dibuat!'); window.location = '../cetak/c_himbauan.php?kode=$kode'</script>"; 



?>


