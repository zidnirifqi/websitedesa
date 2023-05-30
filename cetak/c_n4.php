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
    <td colspan="3" align="center"><strong><font size=3 color="black">FORMULIR PERSETUJUAN CALON PENGANTIN
      
    </font>
    </strong></td>
  </tr>
    <tr>
    <td></td><td></td><td align="right">Model N4 &nbsp;&nbsp;&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><strong><font size=3 color="black">SURAT PERSETUJUAN PENGANTIN
      </font>
    </strong><br><small><?php echo $r['no'];?></small></td>
  </tr>
      <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">Yang bertanda tangan dibawah ini  :</td>
  </tr>
</table>
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr><td colspan="4">A. Calon Suami :</td>
  </tr>
  <tr>
    <td>1.</td><td>Nama</td><td>:</td><td><?php echo $r['namaca'];?></td>
  </tr>
  <tr>
    <td>2.</td><td>Bin</td><td>:</td><td><?php echo $r['binbintica'];?></td>
  </tr>
  <tr>
    <td>3.</td><td> NIK</td><td>:</td><td><?php echo $r['nikca'];?></td>
  </tr>
  <tr>
    <td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $r['tmp_lahirca'];?>, <?php echo $r['tgl_lahirca'];?></td>
  </tr>
  <tr>
    <td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $r['kwngca'];?></td>
  </tr>
    <tr>
    <td>6.</td><td> Agama</td><td>:</td><td><?php echo $r['agamaca'];?></td>
  </tr>
  <tr>
    <td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $r['pkjnca'];?></td>
  </tr>
    <tr>
    <td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $r['alamatca'];?> Desa <?php echo $r['desaa'];?> <br>Kec. <?php echo $r['keca'];?> Kab. <?php echo $r['kaba'];?> Prov. <?php echo $r['prova'];?></td>
  </tr>
      <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
<tr><td colspan="4">B. Calon Istri :</td>
  </tr>
    <tr>
    <td>1.</td><td>Nama</td><td>:</td><td><?php echo $r['namacb'];?></td>
  </tr>
  <tr>
    <td>2.</td><td>Binti</td><td>:</td><td><?php echo $r['binbinticb'];?></td>
  </tr>
  <tr>
    <td>3.</td><td> NIK</td><td>:</td><td><?php echo $r['nikcb'];?></td>
  </tr>
  <tr>
    <td>4.</td><td> Tmp. & Tgl. Lahir </td><td>:</td><td><?php echo $r['tmp_lahircb'];?>, <?php echo $r['tgl_lahircb'];?></td>
  </tr>
  <tr>
    <td>5.</td><td> Kewarganegaraan</td><td>:</td><td><?php echo $r['kwngcb'];?></td>
  </tr>
    <tr>
    <td>6.</td><td> Agama</td><td>:</td><td><?php echo $r['agamacb'];?></td>
  </tr>
  <tr>
    <td>7.</td><td> Pekerjaan</td><td>:</td><td><?php echo $r['pkjncb'];?></td>
  </tr>
    <tr>
    <td valign="top">8.</td><td valign="top"> Alamat</td><td valign="top">:</td><td><?php echo $r['alamatcb'];?>  Desa <?php echo $r['desab'];?> <br>Kec. <?php echo $r['kecb'];?> Kab. <?php echo $r['kabb'];?> Prov. <?php echo $r['provb'];?></td>
  </tr>
  </table>
  
<table align="center" class="table-list" width="97%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri, tanpa ada paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.
    <br>Demikian Surat persetujuan ini di buat untuk digunakan seperlunya.</td>
  </tr>

<tr><td></td><td></td><td></td></tr>
</table>
<table width="100%" align="center" border="0" cellspacing="1" cellpadding="0" class="table-print">
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td></td><td></td></data><td align="center" class="pull pull-right"> <?php echo $rd['desa'];?>, <?php echo $bulan;?></td>
  </tr>    <tr>
    <td align="center">Calon Suami,</td><td></td><td align="center" class="pull pull-right">Calon Istri,</td>
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
    <td align="center"><u><?php echo $r['namaca'];?></u></td><td align="center" class="pull pull-right"><u><?php echo $r['namacb'];?></u></td>
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