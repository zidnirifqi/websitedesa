    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel penjualan
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_sutarnikah.* from t_jenissurat, t_datasurat, t_sutarnikah 
WHERE t_sutarnikah.kode='$kodesurat'");
while ($r = mysqli_fetch_array($query)){
  $tgl = $r['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_desa");
while ($rd = mysqli_fetch_array($query)){
?>
<html>
<head>
<title></title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="window.print()" >
<h1 align="center">
<table width="97%" align="center" border="0" cellspacing="1" cellpadding="1" class="table-print">
  <tr>
    <td colspan="3"><small>LAMPIRAN IV
<br>KEPUTUSAN DIREKTUR JENDERAL BIMBINGAN MASYARAKAT ISLAM
<br>NOMOR 473 TAHUN 2020
<br>TENTANG
<br>PETUNJUK TEKNIS PELAKSANAAN PENCATATAN PERNIKAHAN</small></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black">FORMULIR SURAT IZIN ORANG TUA</font>
    </strong></td>
  </tr>
    <tr>
    <td></td><td></td><td align="right">Model N5 &nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black"><u>SURAT IZIN ORANG TUA</u></font>
    </strong></td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="5">Yang bertanda tangan dibawah ini:</td>
  </tr>
  <tr>
    <td>A.</td><td>1. </td><td>Nama</td><td>:</td><td><?php echo $r['namaayah'];?></td>
  </tr>
      <tr>
    <td></td><td>2. </td><td>Bin</td><td>:</td><td><?php echo $r['binayah'];?></td>
  </tr>
  <tr>
    <td></td><td>3. </td><td>NIK</td><td>:</td><td><?php echo $r['nikayah'];?></td>
  </tr>
  <tr>
    <td></td><td>4. </td><td>Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $r['tmp_lahirayah'];?>, <?php echo $r['tgl_lahirayah'];?></td>
  </tr>
  <tr>
    <td></td><td>5. </td><td>Kewarganegaraan</td><td>:</td><td><?php echo $r['kwngayah'];?></td>
  </tr>
    <tr>
    <td></td><td>6. </td><td>Agama</td><td>:</td><td><?php echo $r['agamaayah'];?></td>
  </tr>
  <tr>
    <td></td><td>7. </td><td>Pekerjaan</td><td>:</td><td><?php echo $r['pkjnayah'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8. </td><td valign="top">Alamat</td><td valign="top">:</td><td><?php echo $r['alamatayah'];?>  Desa <?php echo $r['desaayah'];?> <br>Kec. <?php echo $r['kecayah'];?> Kab. <?php echo $r['kabayah'];?> Prov. <?php echo $r['provayah'];?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>B. </td><td>1. </td><td>Nama</td><td>:</td><td><?php echo $r['namaibu'];?></td>
  </tr>
      <tr>
    <td></td><td>2. </td><td>Binti</td><td>:</td><td><?php echo $r['binibu'];?></td>
  </tr>
  <tr>
    <td></td><td>3. </td><td>NIK</td><td>:</td><td><?php echo $r['nikibu'];?></td>
  </tr>

  <tr>
    <td></td><td>4. </td><td>Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $r['tmp_lahiribu'];?>, <?php echo $r['tgl_lahiribu'];?></td>
  </tr>
  <tr>
    <td></td><td>5. </td><td>Kewarganegaraan</td><td>:</td><td><?php echo $r['kwngibu'];?></td>
  </tr>
    <tr>
    <td></td><td>6. </td><td>Agama</td><td>:</td><td><?php echo $r['agamaibu'];?></td>
  </tr>
  <tr>
    <td></td><td>7. </td><td>Pekerjaan</td><td>:</td><td><?php echo $r['pkjnibu'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8. </td><td valign="top">Alamat</td><td valign="top">:</td><td><?php echo $r['alamatibu'];?> Desa <?php echo $r['desa1'];?> <br>Kec. <?php echo $r['kec1'];?> Kab. <?php echo $r['kab1'];?> Prov. <?php echo $r['prov1'];?></td>
  </tr>
    <tr>
    <td colspan="5">Adalah ayah dan Ibu Kandung / wali / pengampu dari :</td>
  </tr>

  <?php
  $querycalon = mysqli_query ($con, "SELECT t_sutarnikah.*, t_datacalon.* from  t_sutarnikah, t_datacalon 
WHERE t_datacalon.status_na='TN' AND t_sutarnikah.kode=t_datacalon.kode AND t_datacalon.kode='$_GET[kode]'");
while ($rc = mysqli_fetch_array($querycalon)){
?>

  <tr>
    <td></td><td>1.</td><td> Nama</td><td>:</td><td><?php echo $rc['nama'];?></td>
  </tr>
    <tr>
    <td></td><td>2.</td><td> Bin</td><td>:</td><td><?php echo $rc['binbinti'];?></td>
  </tr>
  <tr>
  <tr>
    <td></td><td>3.</td><td> NIK</td><td>:</td><td><?php echo $rc['nik'];?></td>
  </tr>

    <td></td><td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $rc['tmp_lahir'];?>, <?php echo $rc['tgl_lahir'];?></td>
  </tr>
  <tr>
    <td></td><td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $rc['kwng'];?></td>
  </tr>
    <tr>
    <td></td><td>6.</td><td> Agama</td><td>:</td><td><?php echo $rc['agama'];?></td>
  </tr>
  <tr>
    <td></td><td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $rc['pkjn'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $rc['alamat'];?> Desa <?php echo $rc['desa'];?> <br>Kec. <?php echo $rc['kec'];?> Kab. <?php echo $rc['kab'];?> Prov. <?php echo $rc['prov'];?></td>
  </tr>
<?php }?>


    <?php
  $querycalon = mysqli_query ($con, "SELECT t_sutarnikah.*, t_datacalon.* from  t_sutarnikah, t_datacalon 
WHERE t_datacalon.status_na='NP' AND t_sutarnikah.kode=t_datacalon.kode AND t_datacalon.kode='$_GET[kode]'");
while ($rc = mysqli_fetch_array($querycalon)){
?>


  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
<td colspan="5">Memberikan izin kepada anak kami untuk melakukan pernikahan dengan : </td> 
    <tr>
    <td></td><td>1.</td><td> Nama</td><td>:</td><td><?php echo $rc['nama'];?></td>
  </tr>
  <tr>
    <td></td><td>2.</td><td> Bin</td><td>:</td><td><?php echo $rc['binbinti'];?></td>
  </tr>
  <tr>
    <td></td><td>3.</td><td> NIK</td><td>:</td><td><?php echo $rc['nik'];?></td>
  </tr>
  <tr>
    <td></td><td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $rc['tmp_lahir'];?>, <?php echo $rc['tgl_lahir'];?></td>
  </tr>
  <tr>
    <td></td><td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $rc['kwng'];?></td>
  </tr>
    <tr>
    <td></td><td>6.</td><td> Agama</td><td>:</td><td><?php echo $rc['agama'];?></td>
  </tr>
  <tr>
    <td></td><td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $rc['pkjn'];?></td>
  </tr>
    <tr>
    <td></td><td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $rc['alamat'];?> Desa <?php echo $rc['desa'];?> <br>Kec. <?php echo $rc['kec'];?> Kab. <?php echo $rc['kab'];?> Prov. <?php echo $rc['prov'];?></td>
  </tr>
<?php }?>

    <tr>
    <td colspan="5">Demikian Surat izin ini di buat dengan kesadaran tanpa ada paksaan dari siapapun dan untuk digunakan seperlunya..</td>
  </tr>
</table>
<tr><td colspan="3">
<table width="100%" align="right" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td><td align="center" class="pull pull-right"> <?php echo $rd['desa'];?>, <?php echo $bulan;?></td>
  </tr>    <tr>
    <td align="center">Ayah,</td><td></td><td align="center" class="pull pull-right">Ibu,</td>
  </tr>
    <tr>
    <td></td><td rowspan="4" align="center"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 0em; margin-top: -2em;"></td> <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><?php echo $r['namaayah'];?></u></td><td align="center" class="pull pull-right"><u><?php echo $r['namaibu'];?></u></td>
  </tr>
</table>
</td>
</tr>
</table>
  <?php }} ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>