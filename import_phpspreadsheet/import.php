<?php
// Load file koneksi.php
include "../koneksi.php";

// Load file autoload.php
require 'vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = $_POST['namafile'];
    $path = 'tmp/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
    $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
                $nkk = $row['A']; // Ambil data nkk
                $nik = $row['B']; // Ambil data nik
                $nama = $row['C']; // Ambil data nama
                $jk = $row['D']; // Ambil data jk
                $tmp_lahir = $row['E']; // Ambil data tmp lahir
                $tgl_lahir = $row['F']; // Ambil data tgl lahir
                $kwng = $row['G']; // Ambil data kwng
                $agama = $row['H']; // Ambil data agama
                $status = $row['I']; // Ambil data status
                $pend = $row['J']; // Ambil data alamat
                $kerjaan = $row['K']; // Ambil data kerjaan
                $rt = $row['L']; // Ambil data rt
                $dusun = $row['M']; // Ambil data dusun
                $desa = $row['N']; // Ambil data desa
                $kec = $row['O']; // Ambil data kec
                $kab = $row['P']; // Ambil data kab
                $prov = $row['Q']; // Ambil data prov
                $hp = $row['R']; // Ambil data hp
                $shdk = $row['S']; // Ambil data shdk
                $foto = $row['T']; // Ambil data foto
                $ket = $row['U']; // Ambil data ket

		// Cek jika semua data tidak diisi
		if($nkk != "" && $nik != "" && $nama != "" && $jk != "" && $tmp_lahir != "" && $tgl_lahir != "" 
    && $kwng != "" && $agama != "" && $status != "" && $pend != "" && $kerjaan != "" && $rt != "" && $dusun != "" && $desa != ""&& $kec != ""&& $kab != ""&& $prov != "" && $hp != "" && $shdk != "" && $foto != "" && $ket != "")
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow = 1){
			// Buat query Insert
			$query = "INSERT INTO t_penduduk VALUES('','" . $nkk . "','" . $nik . "','" . $nama . "','" . $jk . "','" . $tmp_lahir . "','" . $tgl_lahir . "','" . $kwng . "','" . $agama . "','" . $status . "','" . $pend . "','" . $kerjaan . "','" . $rt . "','" . $dusun . "','" . $desa . "','" . $kec . "','" . $kab . "','" . $prov . "','" . $hp . "','" . $shdk . "','" . $foto . "','" . $ket . "')";

			// Eksekusi $query
			mysqli_query($con, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}

    unlink($path); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
}

header('location: ../data/penduduk.php'); // Redirect ke halaman awal
