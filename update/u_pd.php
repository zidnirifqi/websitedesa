<?php
include '../koneksi.php';

$kode		= $_POST['kodesurat'];
$nmsurat	= $_POST['nmsurat'];
$no 		= $_POST['nosurat'];

$nama       = $_POST['nama'];
$nip        = $_POST['nip'];
$pang       = $_POST['pang'];
$jab        = $_POST['jab'];
$nama1       = $_POST['nama1'];
$nip1        = $_POST['nip1'];
$pang1       = $_POST['pang1'];
$jab1        = $_POST['jab1'];

$tugas      = $_POST['tugas'];
$tmp        = $_POST['tmp'];
$brkt       = $_POST['berangkat'];
$kmbl       = $_POST['kembali'];

$tingkat    = $_POST['tingkat'];
$uh         = $_POST['uh'];
$trans        = $_POST['trans'];
$inap       = $_POST['inap'];
$rep        = $_POST['rep'];
$sewa       = $_POST['sewa'];

    mysqli_query($con, "DELETE FROM t_datapdinas WHERE kodepd='$kode'");

    mysqli_query($con, "UPDATE t_pdinas SET no='$no', nama='$nama', nip='$nip', pang='$pang', jab='$jab', nama1='$nama1', nip1='$nip1', pang1='$pang1', jab1='$jab1', tugas='$tugas', tmp='$tmp', berangkat='$brkt', kembali='$kmbl', tingkat='$tingkat', uh='$uh', trans='$trans', inap='$inap', rep='$rep', sewa='$sewa' WHERE kode='$kode'");

if (isset($_POST['cetak'])){
$kodepd		= $_POST['kodesuratpd'];
$nm	 		= $_POST['nm'];
$tgll	 	= $_POST['tgl_lahir'];
$ket	 	= $_POST['ket'];
var_dump($kodepd);
var_dump($nm);
var_dump($tgll);
var_dump($ket);

$kodepd		= array_filter($kodepd);
$nm			= array_filter($nm);
$tgll		= array_filter($tgll);
$ket		= array_filter($ket);

$jumlah_pilih = count($nm);
for ($i=0; $i<$jumlah_pilih;$i++){
        mysqli_query($con, "INSERT INTO t_datapdinas SET
            kodepd      = '$kodepd[$i]',
            nm          = '$nm[$i]',
            tgl_lahir   = '$tgll[$i]',
            ket         = '$ket[$i]'
        ");
    }
        

echo "<script>alert('Surat Perjalanan Dinas berhasil diupdate!'); window.location = '../cetak/c_pd.php?kode=$kode'</script>"; 		

}


else {
	echo 'Gagal';
}
?>


