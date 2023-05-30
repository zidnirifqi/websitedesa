<?php
include '../koneksi.php';


$kodejenis  = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$hal 		= $_POST['perihal'];
$lam		= $_POST['lampiran'];
$dasar        = $_POST['dasar'];
$lbg 	    = $_POST['lbg'];
$almt	    = $_POST['almt'];
$jawaban    = $_POST['jawaban'];


$blnr	= $_POST['blnr'];
$kades	 	= $_POST['kades'];

	$thn = date('Y');
	
                                                                    
   $slash	= '/';
   $nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
   mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");
    mysqli_query($con, "INSERT INTO t_jawaban values('','$kode','$kodejenis','$nmsurat','$nosur','$hal','$lam', '$dasar','$lbg','$almt', '$jawaban','".date('Y-m-d')."','$kades','')");


		
echo "<script>alert('Surat Jawaban berhasil dibuat!'); window.location = '../cetak/c_jawaban.php?kode=$kode'</script>"; 



?>


