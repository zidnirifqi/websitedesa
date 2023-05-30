    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat lain
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_suketbedaid.* from t_jenissurat, t_datasurat, t_suketbedaid WHERE t_suketbedaid.kode='$kodesurat'");
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
<table width="800" align="center" border="0" cellspacing="1" cellpadding="4" class="table-print">
  <tr>
    <td rowspan="3" width="70"><img src="../images/<?php echo $rd['logo'];?>" width="60" height="60"></td>
    <td colspan="" align="center"><strong><font size=2 color="black">PEMERINTAH KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td><td></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KECAMATAN <?php echo strtoupper($rd['kec']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=5 color="black">DESA <?php echo strtoupper($rd['desa']);?></font></strong></td>
    <td width="70"></td>
  </tr>
    <tr>
   <td colspan="3" align="center"><hr><font size=2 color="black"><i>Sekretariat : <?php echo $rd['kantor'];?></i><hr size="3"></td>
  </tr>
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u><?php echo strtoupper($r['nmsurat']); ?> </u></font></a>
    </strong><br><font size=2 color="black">Nomor : <?php echo $r['no']; ?></font></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="3" align="justify">Yang bertanda tangan dibawah ini Kepala Desa <?php echo $rd['desa'];?> Kecamatan <?php echo $rd['kec'];?> Kabupaten <?php echo $rd['kab'];?>, menerangkan bahwa Identitas Warga Desa <?php echo $rd['desa'];?>  dibawah ini terdapat perbedaan antara <?php echo $r['id1'];?>  dengan <?php echo $r['id2'];?>  sebagai berikut :</td>
  </tr>
    <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">IDENTITAS DI  <?php echo $r['id1'];?> :</td>
  </tr>
  <tr>
    <td>Nama</td><td>:</td><td><?php echo $r['nama1'];?></td>
  </tr>
  <tr>
    <td>NIK</td><td>:</td><td><?php echo $r['nik1'];?></td>
  </tr>
    <tr>
    <td>Tmp.&Tgl. Lahir</td><td>:</td><td><?php echo $r['tmp_lahir1'];?>, &nbsp;<?php echo $r['tgl_lahir1'];?></td>
  </tr>
    <tr>
    <td>Agama</td><td>:</td><td><?php echo $r['agama1'];?></td>
  </tr>
    <tr>
    <td>Alamat</td><td>:</td><td><?php echo $r['alamat1'];?></td>
  </tr>
<tr>
    <td colspan="3">&nbsp;</td>
  </tr>

      <tr>
    <td colspan="3">IDENTITAS DI <?php echo $r['id2'];?>  :</td>
  </tr>
    <tr>
    <td>Nama </td><td>:</td><td><?php echo $r['nama2'];?></td>
  </tr>
  <tr>
    <td>NIK</td><td>:</td><td><?php echo $r['nik2'];?></td>
  </tr>
    <tr>
    <td>Tmp.&Tgl. Lahir</td><td>:</td><td><?php echo $r['tmp_lahir2'];?>, &nbsp; <?php echo $r['tgl_lahir2'];?></td>
  </tr>
    <tr>
    <td>Agama</td><td>:</td><td><?php echo $r['agama2'];?></td>
  </tr>
    <tr>
    <td>Alamat</td><td>:</td><td><?php echo $r['alamat2'];?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>


    <tr>
    <td colspan="3">Warga dengan Identitas tersebut diatas adalah benar <b>Orang yang sama</b> yang merupakan Warga Desa <?php echo $rd['desa'];?>.</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="3">Demikian keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.</td>
  </tr>

<tr><td colspan="4">
<table width="90%" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
    <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td align="center" class="pull pull-right"><?php echo $rd['desa'];?>,&nbsp;<?php echo $bulan;?></td>
  </tr>
  <tr>
    <td rowspan="3"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 10em; margin-top: 0em;"></td><td align="center" valign="top" class="pull pull-right">Kepala Desa <?php echo $rd['desa'];?></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"><br><br><br><u><b><?php echo $r['ttd'];?></b></u><br>NIP. <?php echo $rd['nipkades'];?></td>
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