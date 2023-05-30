<?php
include '../koneksi.php';


$kodejenis      = $_POST['kodejenis'];
$kode		= $_POST['kodesurat'];
$kode_klasi	= $_POST['kode_klasi'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];


$nama 		= $_POST['nama'];
$nip 		= $_POST['nip'];
$pang 	    = $_POST['pang'];
$jab	    = $_POST['jab'];
$nama1       = $_POST['nama1'];
$nip1        = $_POST['nip1'];
$pang1       = $_POST['pang1'];
$jab1        = $_POST['jab1'];

$tugas 		= $_POST['tugas'];
$tmp 		= $_POST['tmp'];
$brkt 		= $_POST['berangkat'];
$kmbl       = $_POST['kembali'];

$tingkat    = $_POST['tingkat'];
$uh         = $_POST['uh'];
$trans        = $_POST['trans'];
$inap       = $_POST['inap'];
$rep        = $_POST['rep'];
$sewa       = $_POST['sewa'];


$blnr	= $_POST['blnr'];
$kades	 	= $_POST['kades'];

	$thn = date('Y');
	
                                                               
   $slash	= '/';
   $nosur = $kode_klasi.$slash.$no.$slash.$blnr.$slash.$thn;
   mysqli_query($con, "INSERT INTO t_datasurat values('','$kode','$kodejenis','$nmsurat','$nosur','".date('Y-m-d')."','$kades','')");
    mysqli_query($con, "INSERT INTO t_pdinas values('','$kode','$kodejenis','$nmsurat','$nosur','$nama','$nip','$pang','$jab','$nama1','$nip1','$pang1','$jab1','$tugas', '$tmp','$brkt','$kmbl','$tingkat','$uh','$trans','$inap','$rep','$sewa','".date('Y-m-d')."','$kades')");

if (isset($_POST['cetak'])){
$kodepd		= $_POST['kodesuratpd'];
$nm	 		= $_POST['nm'];
$tgl_lahir 	= $_POST['tgl_lahir'];
$ket	 	= $_POST['ket'];

var_dump($kodepd);
var_dump($nm);
var_dump($tgl_lahir);
var_dump($ket);


$kodepd		= array_filter($kodepd);
$nm			= array_filter($nm);
$tgl_lahir	= array_filter($tgl_lahir);
$ket		= array_filter($ket);



$jumlah_pilih = count($nm);
for ($i=0; $i<$jumlah_pilih;$i++){
        mysqli_query($con, "INSERT INTO t_datapdinas SET
        	kodepd 	= '$kodepd[$i]',
            nm    	= '$nm[$i]',
            tgl_lahir= '$tgl_lahir[$i]',
            ket  	= '$ket[$i]'
        ");
	}
		
echo "<script>alert('Surat Perjalanan Dinas berhasil dibuat!'); window.location = '../cetak/c_pd.php?kode=$kode'</script>"; 
}


else {
	echo 'Gagal';
}
?>


