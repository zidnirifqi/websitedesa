<?php
include '../koneksi.php';


$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$objek 		= $_POST['objek'];
$banyak		= $_POST['banyak'];
$dasar 		= $_POST['dasar'];
$lbg 	     = $_POST['lbg'];
$almt	   = $_POST['almt'];


$blnr	= $_POST['blnr'];

$kades	 	= $_POST['kades'];

	$thn = date('Y');
	
                                                                    
   $slash	= '/';
   $nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
   mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");
    mysqli_query($con, "INSERT INTO t_pengantar values('','$kode','$kodejenis','$nmsurat','$nosur','$objek','$banyak','$dasar','$lbg','$almt','".date('Y-m-d')."','$kades','')");


		
echo "<script>alert('Surat Pengantar berhasil dibuat!'); window.location = '../cetak/c_pengantar.php?kode=$kode'</script>"; 



?>


