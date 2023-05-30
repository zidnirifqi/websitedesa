<?php
include '../koneksi.php';



$kode    = $_POST['kodesurat'];
$nmsurat = $_POST['nmsurat'];
$no      = $_POST['nosurat'];

$nika       = $_POST['nika'];
$namaa      = $_POST['namaa'];
$nmayaha    = $_POST['nmayaha'];
$jka        = $_POST['jka'];
$tmp_lahira = $_POST['tmp_lahira'];
$tgl_lahira = $_POST['tgl_lahira'];
$kwnga      = $_POST['kwnga'];
$agamaa     = $_POST['agamaa'];
$pkjna      = $_POST['pkjna'];
    $desaa           = $_POST['desaa'];
    $keca            = $_POST['keca'];
    $kaba            = $_POST['kaba'];
    $prova           = $_POST['prova'];
$alamata    = $_POST['alamata'];
$statusa    = $_POST['statusa'];
$nna        = $_POST['statusna'];

$nikb       = $_POST['nikb'];
$namab      = $_POST['namab'];
$nmayahb    = $_POST['nmayahb'];
$jkb        = $_POST['jkb'];
$tmp_lahirb = $_POST['tmp_lahirb'];
$tgl_lahirb = $_POST['tgl_lahirb'];
$kwngb      = $_POST['kwngb'];
$agamab     = $_POST['agamab'];
$pkjnb      = $_POST['pkjnb'];
    $desab           = $_POST['desab'];
    $kecb            = $_POST['kecb'];
    $kabb           = $_POST['kabb'];
    $provb           = $_POST['provb'];
$alamatb    = $_POST['alamatb'];
$statusb    = $_POST['statusb'];
$nnb        = $_POST['statusnb'];

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$binayah    = $_POST['binayah'];
$jk         = $_POST['jk'];
$tmp_lahir  = $_POST['tmp_lahir'];
$tgl_lahir  = $_POST['tgl_lahir'];
$kwng       = $_POST['kwng'];
$agama      = $_POST['agama'];
$pkjn       = $_POST['pkjn'];
    $desa           = $_POST['desa'];
    $kec            = $_POST['kec'];
    $kab            = $_POST['kab'];
    $prov           = $_POST['prov'];
$alamat      = $_POST['alamat'];
$status     = $_POST['status'];

$nik1       = $_POST['nik1'];
$nama1      = $_POST['nama1'];
$binibu      = $_POST['binibu'];
$jk1        = $_POST['jk1'];
$tmp_lahir1  = $_POST['tmp_lahir1'];
$tgl_lahir1  = $_POST['tgl_lahir1'];
$kwng1      = $_POST['kwng1'];
$agama1     = $_POST['agama1'];
$pkjn1      = $_POST['pkjn1'];
    $desa1           = $_POST['desa1'];
    $kec1            = $_POST['kec1'];
    $kab1            = $_POST['kab1'];
    $prov1           = $_POST['prov1'];
$alamat1     = $_POST['alamat1'];
$status1    = $_POST['status1'];


$hari       = $_POST['hari'];
$tgl        = $_POST['tgl'];
$wkt        = $_POST['waktu'];
$tmpt       = $_POST['tmpt'];
$maskawin   = $_POST['maskawin'];


mysqli_query($con, "UPDATE t_datacalon SET  nik='$nika', nama='$namaa', binbinti='$nmayaha', jk='$jka', tmp_lahir='$tmp_lahira', tgl_lahir='$tgl_lahira', kwng='$kwnga', agama='$agamaa', pkjn='$pkjna', prov='$prova', kab='$kaba', kec='$keca', desa='$desaa', alamat='$alamata', status='$statusa', status_na='$nna' WHERE kode='$kode' AND nik='$nika'");

mysqli_query($con, "UPDATE t_datacalon SET  nik='$nikb', nama='$namab', binbinti='$nmayahb', jk='$jkb', tmp_lahir='$tmp_lahirb', tgl_lahir='$tgl_lahirb', kwng='$kwngb', agama='$agamab', pkjn='$pkjnb', prov='$provb', kab='$kabb', kec='$kecb', desa='$desab',alamat='$alamatb', status='$statusb', status_na='$nnb' WHERE kode='$kode' AND nik='$nikb'");

   mysqli_query($con, "UPDATE t_sutarnikah SET no='$no', nikca='$nika', namaca='$namaa', binbintica='$nmayaha', jkca='$jka', tmp_lahirca='$tmp_lahira', tgl_lahirca='$tgl_lahira', kwngca='$kwnga', agamaca='$agamaa', pkjnca='$pkjna', prova='$prova', kaba='$kaba', keca='$keca', desaa='$desaa', alamatca='$alamata', statusca='$statusa', nikcb='$nikb',namacb='$namab', binbinticb='$nmayahb', jkcb='$jkb', tmp_lahircb='$tmp_lahirb', tgl_lahircb='$tgl_lahirb', kwngcb='$kwngb', agamacb='$agamab', pkjncb='$pkjnb', provb='$provb', kabb='$kabb', kecb='$kecb', desab='$desab', alamatcb='$alamatb', statuscb='$statusb', nikayah='$nik', namaayah='$nama', binayah='$binayah', jkayah='$jk', tmp_lahirayah='$tmp_lahir', tgl_lahirayah='$tgl_lahir', kwngayah='$kwng', agamaayah='$agama', pkjnayah='$pkjn', provayah='$prov', kabayah='$kab', kecayah='$kec', desaayah='$desa', alamatayah='$alamat', statusayah='$status', nikibu='$nik1', namaibu='$nama1', binibu='$binibu', jkibu='$jk1', tmp_lahiribu='$tmp_lahir1', tgl_lahiribu='$tgl_lahir1', kwngibu='$kwng1', agamaibu='$agama1', pkjnibu='$pkjn1', prov1='$prov1', kab1='$kab1', kec1='$kec1', desa1='$desa1', alamatibu='$alamat1', statusibu='$status1', hari='$hari', tgl_akad='$tgl', waktu='$wkt', tmpt='$tmpt', maskawin='$maskawin' WHERE kode='$kode' ");


echo "<script>alert('Surat Pengantar Nikah berhasil diupdate!'); window.location = '../cetak/c_sutarnikah.php?kode=$kode'</script>"; 

?>


