-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 03:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webbasesurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(150) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `uname`, `email`, `hp`, `desa`, `pass`, `tgl`, `foto`, `level`) VALUES
(1, 'adminsurat', 'sdccreator12@gmail.com', '082278183799', 'Dagelan', '72d8cec7ea0a29973fb23b25d2f80eea', '2021-08-15', 'admin.png', 'admin'),
(2, 'sdccreator', '', '082278183799', '', '72d8cec7ea0a29973fb23b25d2f80eea', '2021-08-15', 'petugas.png', 'staff'),
(3, 'udman', 'jhanecyx@gmail.com', '083191422930', '', '72d8cec7ea0a29973fb23b25d2f80eea', '2022-10-18', '31IMG20201125100555.jpg', 'admin'),
(4, 'MARSIH', 'marsihsih@gmail.com', '083824344430', 'Dagelan', '827ccb0eea8a706c4c34a16891f84e7b', '2022-10-18', '9883b14d94-40fb-45c5-a4d2-84d10a672dc8.jpg', 'admin'),
(13, 'adminkua', 'kua@gmail.com', '082278183799', 'Pamulihan', '202cb962ac59075b964b07152d234b70', '2022-12-05', '25d83e47755748365.602f678804330.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_ahliwaris`
--

CREATE TABLE `t_ahliwaris` (
  `id` int(4) NOT NULL,
  `kodeaw` varchar(5) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `lp` varchar(15) NOT NULL,
  `umur` varchar(15) NOT NULL,
  `shdk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_datacalon`
--

CREATE TABLE `t_datacalon` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `binbinti` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `kwng` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pkjn` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_na` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_datapdinas`
--

CREATE TABLE `t_datapdinas` (
  `id` int(5) NOT NULL,
  `kodepd` varchar(8) CHARACTER SET latin1 NOT NULL,
  `nm` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_datasurat`
--

CREATE TABLE `t_datasurat` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_dataundangan`
--

CREATE TABLE `t_dataundangan` (
  `id` int(5) NOT NULL,
  `kodeu` varchar(8) CHARACTER SET latin1 NOT NULL,
  `nm` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_desa`
--

CREATE TABLE `t_desa` (
  `id` int(4) NOT NULL,
  `kodedesa` varchar(4) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kodekec` varchar(6) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kodekab` varchar(4) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kodeprov` varchar(4) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kantor` varchar(150) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kades` varchar(100) NOT NULL,
  `nipkades` varchar(30) NOT NULL,
  `sekdes` varchar(50) NOT NULL,
  `nipsekdes` varchar(30) NOT NULL,
  `bendahara` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jangan dihapus';

--
-- Dumping data for table `t_desa`
--

INSERT INTO `t_desa` (`id`, `kodedesa`, `desa`, `kodekec`, `kec`, `kodekab`, `kab`, `kodeprov`, `prov`, `kantor`, `telp`, `kades`, `nipkades`, `sekdes`, `nipsekdes`, `bendahara`, `email`, `logo`) VALUES
(1, '2004', 'Pamulihan', '23', 'Way Sulan', '01', 'Lampung Selatan', '18', 'Lampung', 'Jl. Pemuda No. 01 Desa Pamulihan Kec. Way Sulan Kab. Lampung Selatan, POS : 35555', '0822-7818-3799', 'HERI JAHRI', '19821220 199015 1 003', 'SAMANI, S.Kom', '19850412 199615 1 005', 'MARSIH', 'desapml@gmail.com', '40LOGO KABUPATEN LAMPUNG SELATAN.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_f121`
--

CREATE TABLE `t_f121` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `permohonan` varchar(25) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_himbauan`
--

CREATE TABLE `t_himbauan` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `lampiran` varchar(25) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jawaban`
--

CREATE TABLE `t_jawaban` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `lampiran` varchar(25) NOT NULL,
  `dasar` varchar(150) NOT NULL,
  `lbg` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `jawaban` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jenissurat`
--

CREATE TABLE `t_jenissurat` (
  `id` int(4) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kode_klasi` varchar(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `awal` text NOT NULL,
  `tengah` text NOT NULL,
  `akhir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jenissurat`
--

INSERT INTO `t_jenissurat` (`id`, `kode`, `kode_klasi`, `jenis`, `nmsurat`, `awal`, `tengah`, `akhir`) VALUES
(1, 'JS001', '475.43', 'Keterangan', 'Surat Keterangan Usaha', 'Yang bertanda tangan dibawah ini Kepala Desa', 'Warga yang namanya tersebut diatas adalah benar warga Desa', 'Demikian surat ini dibuat,untuk dipergunakan sebagaimana mestinya.'),
(2, 'JS002', '475.43', 'Keterangan', 'Surat Keterangan Tempat Usaha', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa :', 'adalah benar Tempat Usaha yang berlokasi di Desa Pamulihan yang merupakan milik :', 'Demikian keterangan ini dibuat dengan sebenar - benarnya, untuk dapat dipergunakan sebagaimana mestinya.'),
(3, 'JS003', '500', 'Keterangan', 'Surat Keterangan Pengantar Barang', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa :', 'Barang tersebut diatas adalah benar milik :', 'Demikian keterangan ini dibuat dengan sebenar - benarnya, untuk dapat dipergunakan sebagaimana mestinya.'),
(4, 'JS004', '500', 'Keterangan', 'Surat Keterangan Pengantar Ternak', 'Yang bertanda tangan dibawah ini Kepala Desa _______________ Kecmatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa : ', 'Ternak tersebut diatas adalah benar milik : ', 'Demikian keterangan ini dibuat, kepada Petugas mohon periksa dan maklum adanya. '),
(5, 'JS005', '401', 'Keterangan', 'Surat Keterangan Tidak Mampu', 'Yang bertanda tangan dibawah ini Kepala Desa _____________ Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa :', 'warga tersebut diatas adalah benar warga Desa ________________ yang masuk dalam kategori Keluarga Tidak Mampu.', 'Demikian keterangan ini dibuat,untuk dapat dipergunakan sebagaimana mestinya.'),
(6, 'JS006', '401', 'Keterangan', 'Surat Keterangan Keluarga Tidak Mampu', 'Yang bertanda tangan dibawah ini Kepala Desa _____________ Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa :', 'Warga tersebut diatas adalah benar warga Desa Pamulihan yang masuk dalam kategori Keluarga Tidak Mampu sesuai Data Terpadu Kesejahteraan Sosial (DTKS).', 'Demikian keterangan ini dibuat dengan sebenar - benarnya dan untuk dapat dipergunakan sebagaimana mestinya.'),
(7, 'JS007', '401', 'Keterangan', 'Surat Keterangan Rumah Tangga Miskin', 'Yang bertanda tangan dibawah ini Kepala Desa _________________ Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan bahwa :', 'Warga tersebut diatas adalah bernar Warga Desa ______________ yang termasuk kategori Rumah Tangga Miskin.', 'Demikian keterangan ini dibuat dengan sebenar - benarnya untuk dapat dipergunakan sebagaimana mestinya.'),
(8, 'JS008', '500', 'Keterangan', 'Surat Keterangan Penghasilan', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Menerangkan dengan sebenar - benarnya bahwa :', 'Warga tersebut diatas adalah benar Warga Desa ', 'Demikian keterangan ini dibuat, untuk dipergunakan sebagaimana mestinya.'),
(9, 'JS009', '471.1', 'Keterangan', 'Keterangan Orang Tua/Wali', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan dengan sebenarnya bahwa : ', 'Warga yang namanya tersebut diatas adalah benar Orang Tua/wali dari :', 'Demikian keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.'),
(10, 'JS010', '471.1', 'Keterangan', 'Surat Keterangan Anak', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan dengan sebenar - benarnya bahwa : ', 'Warga yang namanya tersebut diatas adalah benar Anak dari Pasangan :', 'Demikian surat ini dibuat,untuk dipergunakan sebagaimana mestinya.'),
(11, 'JS011', '472.2', 'Keterangan', 'Surat Keterangan Menikah', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan, menerangkan dengan sebenar - benarnya bahwa : ', 'Warga tersebut diatas adalah Pasangan Suami - Istri, sbb :', 'Demikian keterangan ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.'),
(12, 'JS012', '472.12', 'Keterangan', 'Surat Keterangan Kematian', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan dengan sebenar - benarnya bahwa :', 'Warga yang namanya tersebut diatas telah Meninggal Dunia / Mati Pada : ', 'Demikian keterangan ini dibuat dengan sebenar - benarnya berdasarkan pernyataan tertulis Kedua Orang Tua sebagaimana tersebut diatas. '),
(13, 'JS013', '471.1', 'Keterangan', 'Surat Keterangan Bepergian', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan dengan sebenar - benarnya bahwa :', '', 'Demikian keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.'),
(14, 'JS014', '471.1', 'Keterangan', 'Surat Keterangan Perbedaan Identitas', 'Yang bertanda tangan dibawah ini Kepala Desa Pamulihan Kecamatan Way Sulan Kabupaten Lampung Selatan, menerangkan dengan sebenarnya bahwa : ', 'Warga tersebut diatas adalah benar warga Desa Pamulihan yang sudah Menikah sejak ____________________', 'Demikian keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.'),
(15, 'JS015', '470', 'Keterangan', 'Surat Keterangan Domisili', '', '', ''),
(16, 'JS016', '471.2', 'Pengantar', 'Surat Pengantar Pindah WNI', 'Yang bertanda tangan dibawah ini ', '', ''),
(17, 'JS017', '472.11', 'Keterangan', 'Surat Keterangan Kelahiran', '', '', ''),
(18, 'JS018', '469', 'Keterangan', 'Surat Keterangan Penguburan', '', '', ''),
(19, 'JS019', '472.2', 'Pengantar', 'Surat Pengantar Nikah', '', '', ''),
(20, 'JS020', '472.2', 'Keterangan', 'Surat Keterangan Pernah Menikah', '', '', ''),
(21, 'JS021', '472.2', 'Keterangan', 'Surat Keterangan Belum Pernah Menikah', '', '', ''),
(22, 'JS022', '472.2', 'Keterangan', 'Surat Keterangan Duda / Janda', '', '', ''),
(23, 'JS023', '470', 'Keterangan', 'Surat Keterangan Ahli Waris', '', '', ''),
(24, 'JS024', '593', 'Keterangan', 'Surat Keterangan Kepemilikan Tanah', '', '', ''),
(25, 'JS025', '005', 'Undangan', 'Surat Undangan', '', '', ''),
(26, 'JS026', '140', 'Pengantar', 'Surat Pengantar', '', '', ''),
(27, 'JS027', '140', 'Pemberitahuan', 'Surat Pemberitahuan', '', '', ''),
(28, 'JS028', '140', 'Himbauan', 'Surat Himbauan', '', '', ''),
(29, 'JS029', '141', 'Perjalan Dinas', 'Surat Perintah Perjalan Dinas', '', '', ''),
(30, 'JS030', '140', 'Jawaban', 'Surat Jawaban', '', '', ''),
(31, 'JS031', '470', 'KETERANGAN', 'SURAT KETERANGAN DOMISILI LEMBAGA', '', '', ''),
(32, 'JS032', '470', 'Permohonan', 'Permohonan KTP', '', '', ''),
(98, 'JS098', '000', 'Pernyataan', 'Surat Pernyataan Status Perkawinan', '', '', ''),
(99, 'JS099', '470', 'Keterangan', 'Surat Keterangan Lain', '', '', ''),
(101, 'JS100', '141', 'Undangan', 'Surat Undangan', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_klasifikasi`
--

CREATE TABLE `t_klasifikasi` (
  `id` int(4) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `klasifikasi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_klasifikasi`
--

INSERT INTO `t_klasifikasi` (`id`, `kode`, `klasifikasi`) VALUES
(1, '00', 'UMUM'),
(2, '001', 'Lambang'),
(3, '001.1', 'Garuda'),
(4, '001.2', 'Bendera Kebangsaan'),
(5, '001.3', 'Lagu Kebangsaan'),
(6, '001.4', 'Daerah'),
(7, '001.31', 'Provinsi'),
(8, '001.32', 'Kabupaten/Kota'),
(9, '002', 'Tanda Kehormatan/Penghargaan untuk pegawai lihat 861.1'),
(10, '002.1', 'Bintang'),
(11, '002.2', 'Satyalencana'),
(12, '002.3', 'Samkarya Nugraha'),
(13, '002.4', 'Monumen'),
(14, '002.5', 'Penghargaan Secara Adat'),
(15, '002.6', 'Penghargaan lainnya'),
(16, '003', 'Hari Raya/Besar'),
(17, '003.1', 'Nasional 17 Agustus, Hari Pahlawan, dan sebagainya'),
(18, '003.2', 'Hari Raya Keagamaan'),
(19, '003.3', 'Hari Ulang Tahun'),
(20, '003.4', 'Hari-hari Besar Internasional'),
(21, '004', 'Ucapan'),
(22, '004.1', 'Ucapan Terima Kasih'),
(23, '004.2', 'Ucapan Selamat'),
(24, '004.3', 'Ucapan Belasungkawa'),
(25, '004.4', 'Ucapan Lainnya'),
(26, '005', 'Undangan'),
(27, '006', 'Tanda Jabatan'),
(28, '006.1', 'Pamong Praja'),
(29, '006.2', 'Tanda Pengenal'),
(30, '006.3', 'Pejabat lainnya'),
(31, '010', 'URUSAN DALAM'),
(32, '011', 'Gedung Kantor/Termasuk Instalasi Prasarana Fisik Pamong/Kantor Dinas'),
(33, '012', 'Rumah Dinas'),
(34, '012.1', 'Tanah Untuk Rumah Dinas'),
(35, '012.2', 'Perabot Rumah Dinas'),
(36, '012.3', 'Rumah Dinas Golongan 1'),
(37, '012.4', 'Rumah Dinas Golongan 2'),
(38, '012.5', 'Rumah Dinas Golongan 3'),
(39, '012.6', 'Rumah/Bangunan Lainnya'),
(40, '012.7', 'Rumah Pejabat Negara'),
(41, '013', 'Mess/Guest House'),
(42, '014', 'Rumah Susun/Apartemen'),
(43, '015', 'Penerangan Listrik/Jasa Listrik'),
(44, '016', 'Telepon/Faximile/Internet'),
(45, '017', 'Keamanan/Ketertiban Kantor'),
(46, '018', 'Kebersihan Kantor'),
(47, '019', 'Protokol'),
(48, '019.1', 'Upacara Bendera'),
(49, '019.2', 'Tata Tempat'),
(50, '019.21', 'Pemasangan Gambar Presiden/Wakil Presiden'),
(51, '019.3', 'Audiensi / Menghadap Pimpinan'),
(52, '019.4', 'Alamat-Alamat Kantor Pejabat'),
(53, '019.5', 'Bandir/Umbul-Umbul/Spanduk'),
(54, '020', 'PERALATAN'),
(55, '020.1', 'Penawaran'),
(56, '021', 'Alat Tulis'),
(57, '022', 'Mesin Kantor'),
(58, '023', 'Perabot Kantor'),
(59, '024', 'Alat Angkutan'),
(60, '025', 'Pakaian Dinas'),
(61, '026', 'Senjata'),
(62, '027', 'Pengadaan'),
(63, '028', 'Inventaris'),
(64, '030', 'KEKAYAAN DAERAH'),
(65, '031', 'Sumber Daya Alam'),
(66, '032', 'Asset Daerah'),
(67, '040', 'PERPUSTAKAAN DOKUMENTASI / KEARSIPAN / SANDI'),
(68, '041', 'Perpustakaan'),
(69, '041.1', 'Umum'),
(70, '041.2', 'Khusus'),
(71, '041.3', 'Perguruan Tinggi'),
(72, '041.4', 'Sekolah'),
(73, '041.5', 'Keliling'),
(74, '042', 'Dokumentasi'),
(75, '045', 'Kearsipan'),
(76, '045.1', 'Pola Klasifikasi'),
(77, '045.2', 'Penataan Berkas'),
(78, '045.3', 'Penyusutan Arsip'),
(79, '045.31', 'Jadwal Retensi Arsip'),
(80, '045.32', 'Pemindahan Arsip'),
(81, '045.33', 'Penilaian Arsip'),
(82, '045.34', 'Pemusnahan Arsip'),
(83, '045.35', 'Penyerahan Arsip'),
(84, '045.36', 'Berita Acara Penyusutan Arsip'),
(85, '045.37', 'Daftar Pencarian Arsip'),
(86, '045.4', 'Pembinaan Kearsipan'),
(87, '045.41', 'Bimbingan Teknis'),
(88, '045.5', 'Pemeliharaan /Perawatan Arsip'),
(89, '045.6', 'Pengawetan/Fumigasi'),
(90, '046', 'Sandi'),
(91, '047', 'Website'),
(92, '048', 'Pengelolaan Data'),
(93, '049', 'Jaringan Komunikasi Data'),
(94, '050', 'PERENCANAAN'),
(95, '050.1', 'Repelita/8 Sukses'),
(96, '050.11', 'Pelita Daerah'),
(97, '050.12', 'Bantuan Pembangunan Daerah'),
(98, '050.13', 'Bappeda'),
(99, '051', 'Proyek Bidang Pemerintahan, Klasifikasikan Disini :'),
(100, '052', 'Bidang Politik'),
(101, '053', 'Bidang Keamanan Dan Ketertiban Tambhkan Perincian 300'),
(102, '054', 'Bidang Kesejahteraan Rakyat Tambahkan Peincian 400 pada 054'),
(103, '055', 'Bidang Perekonomian Tambahkan Perincian 500 Pada 055'),
(104, '056', 'Bidang Pekerjaan Umum Tambahkan Perincian 600 pada 056'),
(105, '057', 'Bidang Pengawasan'),
(106, '058', 'Bidang Kepegawaian'),
(107, '059', 'Bidang Keuangan'),
(108, '060', 'ORGANISASI / KETATALAKSANAAN'),
(109, '060.1', 'Program Kerja'),
(110, '061', 'Organisasi Instansi Pemerintah (struktur organisasi)'),
(111, '061.1', 'Susunan dan Tata Kerja'),
(112, '061.2', 'Tata Tertib Kantor, Jam Kerja di Bulan Puasa'),
(113, '062', 'Organisasi Badan Non Pemerintah'),
(114, '063', 'Organisasi Badan Internasional'),
(115, '064', 'Organisasi Semi Pemerintah, BKS-AKSI'),
(116, '065', 'Ketatalaksanaan / Tata Naskah / Sistem'),
(117, '066', 'Stempel Dinas'),
(118, '067', 'Pelayanan Umum / Pelayanan Publik / Analisis'),
(119, '068', 'Komputerisasi / Siskomdagri'),
(120, '069', 'Standar Pelayanan Minimal'),
(121, '070', 'PENELITIAN'),
(122, '071', 'Riset'),
(123, '072', 'Survey'),
(124, '073', 'Kajian'),
(125, '074', 'Kerjasama Penelitian Dengan Perguruan Tinggi'),
(126, '075', 'Kementerian Lainnya'),
(127, '076', 'Non Kementerian'),
(128, '077', 'Provinsi'),
(129, '078', 'Kabupaten/Kota'),
(130, '079', 'Kecamatan /Desa'),
(131, '080', 'KONFERENSI / RAPAT / SEMINAR'),
(132, '081', 'Gubernur'),
(133, '082', 'Bupati / Walikota'),
(134, '083', 'Komponen, Eselon Lainnya'),
(135, '084', 'Instansi Lainnya'),
(136, '085', 'Internasional Di Dalam Negeri'),
(137, '086', 'Internasional Di Luar Negeri'),
(138, '090', 'PERJALANAN DINAS'),
(139, '091', 'Perjalanan Presiden/Wakil Presiden Ke Daerah'),
(140, '092', 'Perjalanan Menteri Ke Daerah'),
(141, '093', 'Perjalanan Pejabat Tinggi (Pejabat Eselon 1)'),
(142, '094', 'Perjalanan Pegawai Termasuk Pemanggilan Pegawai'),
(143, '095', 'Perjalanan Tamu Asing Ke Daerah'),
(144, '096', 'Perjalanan Presiden/Wakil Presiden Ke Luar Negeri'),
(145, '097', 'Perjalanan Menteri Ke Luar Negeri'),
(146, '098', 'Perjalanan Pejabat Tinggi Ke Luar Negeri'),
(147, '099', 'Perjalanan Pegawai ke Luar Negeri'),
(148, '100', 'PEMERINTAHAN'),
(149, '101', 'Meliputi: Tata Praja, Legislatif, Yudikatif, Hubungan luar negeri'),
(150, '102', 'GDN'),
(151, '110', 'PEMERINTAHAN PUSAT'),
(152, '111', 'Presiden'),
(153, '111.1', 'Pertanggung jawaban presiden kpd MPR'),
(154, '111.2', 'Amanat Presiden/Amanat Kenegaraan/Pidato'),
(155, '112', 'Wakil Presiden'),
(156, '112.1', 'Pertanggung jawaban wakil presiden kepada MPR'),
(157, '112.2', 'Amanat Wakil Presiden/Amanat Kenegaraan/Pidato'),
(158, '113', 'Susunan Kabinet'),
(159, '113.1', 'Reshuffle'),
(160, '113.2', 'Penunjukan Menteri ad interim'),
(161, '113.3', 'Sidang Kabinet'),
(162, '114', 'Kementerian Dalam Negeri'),
(163, '114.1', 'Amanat Menteri Dalam Negeri/Sambutan'),
(164, '115', 'Kementerian lainnya'),
(165, '116', 'Lembaga Tinggi Negara'),
(166, '117', 'Lembaga Non Kementerian'),
(167, '118', 'Otonomi/Desentralisasi/Dekonsentrasi'),
(168, '119', 'Kerjasama Antar Kementerian'),
(169, '120', 'PEMERINTAH PROVINSI'),
(170, '120.4', 'Laporan daerah'),
(171, '120.042', 'Monografi tambahkan kode wilayah'),
(172, '120.1', 'Koordinasi'),
(173, '120.2', 'Instansi Tingkat Provinsi'),
(174, '120.21', 'Dinas Otonomi'),
(175, '120.22', 'Instansi Vertikal'),
(176, '120.23', 'Kerjasama antar Provinsi/Daerah'),
(177, '121', 'Gubernur tambahkan kode wilayah, meliputi: Pencalonan, Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan dan sebagainya.'),
(178, '122', 'Wakil Gubernur meliputi:  tambahkan kode wilayah pencalonan, Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan  dan sebagainya.'),
(179, '123', 'Sekretaris Wilayah tambahkan kode wilayah, meliputi: Pencalonan, Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan dan sebagainya.'),
(180, '124', 'Pembentukan/Pemekaran Wilayah'),
(181, '124.1', 'Pembinaan/Perubahan Nama kepada: Daerah, Kota,Benda Geografis, Gunung, Sungai, Pulau, Selat, Batas laut, dan sebagainya'),
(182, '124.2', 'Pemekaran  Wilayah'),
(183, '124.3', 'Forum Koordinasi lainnya'),
(184, '125', 'Pembentukan Pemekaran Wilayah'),
(185, '125.2', 'Pembentukan Wialayah'),
(186, '125.3', 'Pemindahan Ibukota'),
(187, '125.4', 'Perubahan batas Wilayah'),
(188, '125.5', 'Pemekaran Wialayah'),
(189, '126', 'Pembagian Wilayah'),
(190, '127', 'Penyerahan Urusan'),
(191, '128', 'Swaparaja/Penataan Wilayah/Daerah'),
(193, '130', 'PEMERINTAH KABUPATEN / KOTA'),
(194, '130', 'Bupati /Walikota, Tambahkan Kode Wilayah, Meliputi: Pencalonan,Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan, dsb'),
(195, '132', 'Wakil Bupati /Walikota, Tambahkan Kode Wilayah, Meliputi: Pencalonan, Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan'),
(196, '133', 'Sekretaris Daerah Kabupaten/Kota, Tambahkan Kode Wilayah, Meliputi: Pencalonan, Pengangkatan, Meninggal, Pelantikan, Pemberhentian, Serah Terima Jabatan'),
(197, '134', 'Forum Koordinasi Pemerintah Di Daerah'),
(198, '134.1', 'Muspida'),
(199, '134.2', 'Forum PAN (Panitian Anggaran Nasional)'),
(200, '134.3', 'Forum Koordinasi Lainnya'),
(201, '134.4', 'Kerjasama antar Kabupaten/Kota'),
(202, '135', 'Pembentukan / Pemekaran Wilayah'),
(203, '135.1', 'Pemindahan Ibukota'),
(204, '135.2', 'Pembentukan Wilayah Pembantu Bupati/Walikota'),
(205, '135.3', 'Pemabagian Wilayah Kabupaten/Kota'),
(206, '135.4', 'Perubahan Batas Wilayah'),
(207, '135.5', 'Pemekaran Wilayah'),
(208, '135.6', 'Permasalahan Batas Wilayah'),
(209, '135.7', 'Pembentukan Ibukota Kabupaten/Kota'),
(210, '135.8', 'Pemberian dan Penggantian Nama Kabupaten/Kota, Daerah, Jalan'),
(211, '136', 'Pembagian Wilayah'),
(212, '137', 'Penyerahan Urusan'),
(213, '138', 'Pemerintah Wilayah Kecamatan'),
(214, '138.1', 'Sambutan / Pengarahan / Amanat'),
(215, '138.2', 'Pembentukan Kecamatan'),
(216, '138.3', 'Pemekaran Kecamatan'),
(217, '138.4', 'Perluasan/Perubahan Batas Wilayah Kecamatan'),
(218, '138.5', 'Pembentukan Perwakilan Kecamatan/Kemantren'),
(219, '140', 'PEMERINTAHAN DESA / KELURAHAN'),
(220, '141', 'Pamong Desa, Meliputi: Pencalonan, Pemilihan, Meninggal, Pengangkatan, Pemberhenian, dan sebagainya'),
(221, '142', 'Penghasilan Pamong Desa'),
(222, '143', 'Kekayaan Desa'),
(223, '144', 'Dewan Tingkat Desa, Dewan Marga, Rembug Desa'),
(224, '145', 'Administrasi Desa'),
(225, '146', 'Kewilayahan'),
(226, '146.1', 'Pembentukan Desa/Kelurahan'),
(227, '146.2', 'Pemekaran Desa/Kelurahan'),
(228, '146.3', 'Perubahan Batas Wilayah / Perluasan Desa / Kelurahan'),
(229, '146.4', 'Perubahan Nama Desa / Kelurahan'),
(230, '146.5', 'Kerjasama Antar Desa / Kelurahan'),
(231, '147', 'Lembaga-lembaga Tingkat Desa'),
(232, '148', 'Perangkat Kelurahan'),
(233, '148.1', 'Kepala Kelurahan'),
(234, '148.2', 'Sekretaris Kelurahan'),
(235, '148.3', 'Staf Kelurahan'),
(236, '149', 'Dewan Kelurahan'),
(237, '149.1', 'Rukun Tetangga'),
(238, '149.2', 'Rukun Warga'),
(239, '149.3', 'Rukun Kampung'),
(240, '150', 'LEGISLATIF MPR / DPR / DPD'),
(241, '151', 'Keanggotaan MPR'),
(242, '151.1', 'Pencalonan'),
(243, '151.2', 'Pemberhentian'),
(244, '151.3', 'Recall'),
(245, '151.4', 'Pelanggaran'),
(246, '152', 'Persidangan'),
(247, '153', 'Kesejahteraan'),
(248, '153.1', 'Keuangan'),
(249, '153.2', 'Penghargaan'),
(250, '154', 'Hak'),
(251, '155', 'Keanggotaan DPR Pencalonan Pengangkatan'),
(252, '156', 'Persidangan Sidang Pleno Dengar Pendapat/Rapat Komisi Reses'),
(253, '157', 'Kesejahteraan'),
(254, '157.1', 'Keuangan'),
(255, '157.2', 'Penghargaan'),
(256, '158', 'Jawaban Pemerintah'),
(257, '159', 'Hak'),
(258, '160', 'DPRD PROVINSI TAMBAHKAN KODE WILAYAH'),
(259, '161', 'Keanggotaan'),
(260, '161.1', 'Pencalonan'),
(261, '161.2', 'Pengangkatan'),
(262, '161.3', 'Pemberhentian'),
(263, '161.4', 'Recall'),
(264, '161.5', 'Meninggal'),
(265, '161.6', 'Pelanggaran'),
(266, '162', 'Persidangan'),
(267, '162.1', 'Reses'),
(268, '163', 'Kesejahteraan'),
(269, '163.1', 'Keuangan'),
(270, '163.2', 'Penghargaan'),
(271, '164', 'Hak'),
(272, '165', 'Sekretaris DPRD Provinsi'),
(273, '170', 'DPRD KABUPATEN TAMBAHKAN KODE WILAYAH'),
(274, '171', 'Keanggotaan'),
(275, '171.1', 'Pencalonan'),
(276, '171.2', 'Pengangkatan'),
(277, '171.3', 'Pemberhentian'),
(278, '171.4', 'Recall'),
(279, '171.5', 'Pelanggaran'),
(280, '172', 'Persidangan'),
(281, '173', 'Kesejahteraan'),
(282, '173.1', 'Keuangan'),
(283, '173.2', 'Penghargaan'),
(284, '174', 'Hak'),
(285, '175', 'Sekretaris DPRD Kabupaten/Kota'),
(286, '180', 'HUKUM'),
(287, '180.1', 'Kontitusi'),
(288, '180.11', 'Dasar Hukum'),
(289, '180.12', 'Undang-Undang Dasar'),
(290, '180.2', 'GBHN'),
(291, '180.3', 'Amnesti, Abolisi dan Grasi'),
(292, '181', 'Perdata'),
(293, '181.1', 'Tanah'),
(294, '181.2', 'Rumah'),
(295, '181.3', 'Utang/Piutang'),
(296, '181.31', 'Gadai'),
(297, '181.32', 'Hipotik'),
(298, '181.4', 'Notariat'),
(299, '182', 'Pidana'),
(300, '182.1', 'Penyidik Pegawai Negeri Sipil (PPNS)'),
(301, '183', 'Peradilan'),
(302, '183.1', 'Bantuan Hukum'),
(303, '184', 'Hukum Internasional'),
(304, '185', 'Imigrasi'),
(305, '185.1', 'Visa'),
(306, '185.2', 'Pasport'),
(307, '185.3', 'Exit'),
(308, '185.4', 'Reentry'),
(309, '185.5', 'Lintas Batas/Batas Antar Negara'),
(310, '186', 'Kepenjaraan'),
(311, '187', 'Kejaksaan'),
(312, '188', 'Peraturan Perundang-Undangan'),
(313, '188.1', 'TAP MPR'),
(314, '188.2', 'Undang-Undang Dasar'),
(315, '188.3', 'Peraturan'),
(316, '188.31', 'Peraturan Pemerintah'),
(317, '188.32', 'Peraturan Menteri'),
(318, '188.33', 'Peraturan Lembaga Non Departemen'),
(319, '188.34', 'Peraturan Daerah'),
(320, '188.341', 'Peraturan Provinsi'),
(321, '188.342', 'Peraturan Kabupaten/Kota'),
(322, '188.4', 'Keputusan'),
(323, '188.41', 'Presiden'),
(324, '188.42', 'Menteri'),
(325, '188.43', 'Lembaga Non Departemen'),
(326, '188.44', 'Gubernur'),
(327, '188.45', 'Bupati/Walikota'),
(328, '188.5', 'Instruksi'),
(329, '188.51', 'Presiden'),
(330, '188.52', 'Menteri'),
(331, '188.53', 'Lembaga Non Departemen'),
(332, '188.54', 'Gubernur'),
(333, '188.55', 'Bupati/Walikota'),
(334, '189', 'Hukum Adat'),
(335, '189.1', 'Tokoh Adat/Masyarakat'),
(336, '190', 'HUBUNGAN LUAR NEGERI'),
(337, '191', 'Perwakilan Asing'),
(338, '192', 'Tamu Negara'),
(339, '193', 'Kerjasama Dengan Negara Asing'),
(340, '193.1', 'Asean'),
(341, '193.2', 'Bantuan Luar Negeri/Hibah'),
(342, '194', 'Perwakilan RI Di Luar Negeri/Hibah'),
(343, '195', 'PBB'),
(344, '196', 'Laporan Luar Negeri'),
(345, '197', 'Hutang Luar Negeri PHLN/LOAN'),
(346, '200', 'POLITIK'),
(347, '201', 'Kebijaksanaan umum'),
(348, '202', 'Orde baru'),
(349, '203', 'Reformasi'),
(350, '210', 'KEPARTAIAN'),
(351, '211', 'Lambang partai'),
(352, '212', 'Kartu tanda anggota'),
(353, '213', 'Bantuan keuangan parpol'),
(354, '220', 'ORGANISASI KEMASYARAKATAN'),
(355, '221', 'Berdasarkan perjuangan'),
(356, '221.1', 'Perintis kemerdekaan'),
(357, '221.2', 'angkatan 45'),
(358, '221.3', 'Veteran'),
(359, '222', 'Berdasarkan Kekaryaan'),
(360, '222.1', 'PEPABRI'),
(361, '222.2', 'Wredatama'),
(362, '223', 'Berdasarkan kerohanian'),
(363, '224', 'Lembaga adat'),
(364, '225', 'Lembaga Swadaya Masyarakat'),
(365, '230', 'ORGANISASI PROFESI DAN FUNGSIONAL'),
(366, '231', 'Ikatan Dokter Indonesia'),
(367, '232', 'Persatuan Guru Republik Indonesia'),
(368, '233', 'PERSATUAN SARJANA HUKUM INDONESIA'),
(369, '234', 'Persatuan Advokat Indonesia'),
(370, '235', 'Lembaga Bantuan Hukum Indonesia'),
(371, '236', 'Korps Pegawai Republik Indonesia'),
(372, '237', 'Persatuan Wartawan Indonesia'),
(373, '238', 'Ikatan Cendikiawan Muslim Indonesia'),
(374, '239', 'Organisasi Profesi Dan Fungsional Lainnya'),
(375, '240', 'ORGANISASI PEMUDA'),
(376, '241', 'Komite Nasional Pemuda Indonesia'),
(377, '242', 'Organisasi Mahasiswa'),
(378, '243', 'Organisasi Pelajar'),
(379, '244', 'Gerakan Pemuda Ansor'),
(380, '245', 'Gerakan Pemuda Islam Indonesia'),
(381, '246', 'Gerakan Pemuda Marhaenis'),
(382, '250', 'ORGANISASI BURUH, TANI, NELAYAN DAN ANGKUTAN'),
(383, '251', 'Federasi Buruh Seluruh Indonesia'),
(384, '252', 'Organisasi Buruh Internasional'),
(385, '253', 'Himpunan Kerukunan Tani'),
(386, '254', 'Himpunan Nelayan Seluruh Indonesia'),
(387, '255', 'Keluarga Sopir Proporsional Indonesia'),
(388, '260', 'ORGANISASI WANITA'),
(389, '261', 'Dharma Wanita'),
(390, '262', 'Persatuan Wanita Indonesia'),
(391, '263', 'Pemberdayaan Perempuan (wanita)'),
(392, '264', 'Kongres Wanita'),
(393, '270', 'PEMILIHAN UMUM'),
(394, '271', 'Pencalonan'),
(395, '272', 'Nomor Urut Partai / Tanda Gambar'),
(396, '273', 'Kampanye'),
(397, '274', 'Petugas Pemilu'),
(398, '275', 'Pemilih / Daftar Pemilih'),
(399, '276', 'Sarana'),
(400, '276.1', 'TPS'),
(401, '276.2', 'Kendaraan'),
(402, '276.3', 'Surat Suara'),
(403, '276.4', 'Kotak Suara'),
(404, '276.5', 'Dana'),
(405, '277', 'Pemungutan Suara / Perhitungan Suara'),
(406, '278', 'Penetapan Hasil Pemilu'),
(407, '279', 'Penetapan Perolehan Jumlah Kursi Dan Calon Terpilih'),
(408, '280', 'Pengucapan Sumpah Janji MPR,DPR,DPD'),
(409, '300', 'KEAMANAN / KETERTIBAN'),
(410, '301', 'Keamanan'),
(411, '302', 'Ketertiban'),
(412, '310', 'PERTAHANAN'),
(413, '311', 'Darat'),
(414, '312', 'Laut'),
(415, '313', 'Udara'),
(416, '314', 'Perbatasan'),
(417, '320', 'KEMILITERAN'),
(418, '321', 'Latihan Militer'),
(419, '322', 'Wajib Militer'),
(420, '323', 'Operasi Militer'),
(421, '324', 'Kekaryaan TNI Pejabat Sipil dari TNI'),
(422, '324.1', 'TMD'),
(423, '330', 'KEAMANAN'),
(424, '331', 'Kepolisian'),
(425, '331.1', 'Polisi Pamong Praja'),
(426, '331.2', 'Kamra'),
(427, '331.3', 'Kamling'),
(428, '331.4', 'Jaga Wana'),
(429, '332', 'Huru-Hara / Demonstrasi'),
(430, '333', 'Senjata Api Tajam'),
(431, '334', 'Bahan Peledak'),
(432, '335', 'Perjudian'),
(433, '336', 'Surat-Surat Kaleng'),
(434, '337', 'Pengaduan'),
(435, '338', 'Himbauan / Larangan'),
(436, '339', 'Teroris'),
(437, '340', 'PERTAHANAN SIPIL'),
(438, '341', 'Perlindungan Sipil'),
(439, '350', 'KEJAHATAN'),
(440, '351', 'Makar / Pemberontak'),
(441, '352', 'Pembunuhan'),
(442, '353', 'Penganiayaan, Pencurian'),
(443, '354', 'Subversi / Penyelundupan / Narkotika'),
(444, '355', 'Pemalsuan'),
(445, '356', 'Korupsi / Penyelewengan / Penyalahgunaan Jabatan / KKN'),
(446, '357', 'Pemerkosaan / Perbuatan Cabul'),
(447, '358', 'Kenakalan'),
(448, '359', 'Kejahatan Lainnya'),
(449, '360', 'BENCANA'),
(450, '361', 'Gunung Berapi / Gempa'),
(451, '362', 'Banjir / Tanah Longsor'),
(452, '363', 'Angin Topan'),
(453, '364', 'Kebakaran'),
(454, '364.1', 'Pemadam Kebakaran'),
(455, '365', 'Kekeringan'),
(456, '366', 'Tsunami'),
(457, '370', 'KECELAKAAN / SAR'),
(458, '371', 'Darat'),
(459, '372', 'Udara'),
(460, '373', 'Laut'),
(461, '374', 'Sungai / Danau'),
(462, '400', 'KESEJAHTERAAN RAKYAT'),
(463, '401', 'Keluarga Miskin'),
(464, '402', 'PNPM Mandiri Pedesaan'),
(465, '410', 'PEMBANGUNAN DESA'),
(466, '411', 'Pembinaan Usaha Gotong Royong'),
(467, '411.1', 'Swadaya Gotong Royong'),
(468, '411.11', 'Penataan Gotong Royong'),
(469, '411.12', 'Gotong Royong Dinamis'),
(470, '411.13', 'Gotong Royong Statis'),
(471, '411.14', 'Pungutan'),
(472, '411.2', 'Lembaga Sosial Desa (LSD)'),
(473, '411.21', 'Pembinaan'),
(474, '411.22', 'Klasifikasi'),
(475, '411.23', 'Proyek'),
(476, '411.24', 'Musyawarah'),
(477, '411.3', 'Latihan Kerja Masyarakat'),
(478, '411.31', 'Kader Masyarakat'),
(479, '411.32', 'Kuliah Kerja Nyata (KKN)'),
(480, '411.33', 'Pusat Latihan'),
(481, '411.34', 'Kursus-Kursus'),
(482, '411.35', 'Kurikulum / Sylabus'),
(483, '411.36', 'Ketrampilan'),
(484, '411.37', 'Pramuka'),
(485, '411.4', 'Pembinaan Kesejahteraan Keluarga (PKK)'),
(486, '411.41', 'Program'),
(487, '411.42', 'Pembinaan Organisasi'),
(488, '411.43', 'Kegiatan'),
(489, '411.5', 'Penyuluhan'),
(490, '411.51', 'Publikasi'),
(491, '411.52', 'Peragaan'),
(492, '411.53', 'Sosio Drama'),
(493, '411.54', 'Siaran Pedesaan'),
(494, '411.55', 'Penyuluhan Lapangan'),
(495, '411.6', 'Kelembagaan Desa'),
(496, '411.61', 'Kelompok Tani'),
(497, '411.62', 'Rukun Tani'),
(498, '411.63', 'Subak'),
(499, '411.64', 'Dharma Tirta'),
(500, '412', 'Perekonomian Desa'),
(501, '412.1', 'Produksi Desa'),
(502, '412.11', 'Pengolahan'),
(503, '412.12', 'Pemasaran'),
(504, '412.2', 'Keuangan Desa'),
(505, '412.21', 'Perkreditan Desa'),
(506, '412.22', 'Inventarisasi Data'),
(507, '412.23', 'Perkembangan / Pelaksanaan'),
(508, '412.24', 'Bantuan / Stimulans'),
(509, '412.25', 'Petunjuk / Pembinaan Pelaksanaan'),
(510, '412.3', 'Koperasi Desa'),
(511, '412.31', 'Badan Usaha Unit Desa (BUUD)'),
(512, '412.32', 'Koperasi Usaha Desa'),
(513, '412.4', 'Penataan Bantuan Pembangunan Desa'),
(514, '412.41', 'Jumlah Desa Yang Diberi Bantuan'),
(515, '412.42', 'Pengarahan'),
(516, '412.43', 'Pusat'),
(517, '412.44', 'Daerah'),
(518, '412.5', 'Alokasi Bantuan Pembangunan Desa'),
(519, '412.51', 'Pusat'),
(520, '412.52', 'Daerah'),
(521, '412.6', 'Pelaksanaan Bantuan Pembangunan Desa'),
(522, '412.61', 'Bantuan Langsung'),
(523, '412.62', 'Bantuan Keserasian'),
(524, '412.63', 'Bantuan Juara Lomba Desa'),
(525, '413', 'Prasarana Desa'),
(526, '413.1', 'Prasarana Desa'),
(527, '413.11', 'Pembinaan'),
(528, '413.12', 'Bimbingan Teknis'),
(529, '413.2', 'Pemukiman Kembali Penduduk'),
(530, '413.21', 'Lokasi'),
(531, '413.22', 'Diskusi'),
(532, '413.23', 'Pelaksanaan'),
(533, '413.3', 'Masyarakat Pradesa'),
(534, '413.31', 'Pembinaan'),
(535, '413.32', 'Penyuluhan'),
(536, '413.4', 'Pemugaran Perumahan Dan Lingkungan Desa'),
(537, '413.41', 'Rumah Sehat'),
(538, '413.42', 'Proyek Perintis'),
(539, '413.43', 'Pelaksanaan'),
(540, '413.44', 'Pengembangan'),
(541, '413.45', 'Perbaikan Kampung'),
(542, '414', 'Pengembangan Desa'),
(543, '414.1', 'Tingkat Perkembangan Desa'),
(544, '414.11', 'Jumlah Desa'),
(545, '414.12', 'Pemekaran Desa'),
(546, '414.13', 'Pembentukan Desa Baru'),
(547, '414.14', 'Evaluasi'),
(548, '414.15', 'Bagan'),
(549, '414.2', 'Unit Desa Kerja Pembangunan (UDKP)'),
(550, '414.21', 'Penyuluhan Program'),
(551, '414.22', 'Lokasi UDKP'),
(552, '414.23', 'Pelaksanaan'),
(553, '414.24', 'Bimbingan/Pembinaan'),
(554, '414.25', 'Evaluasi'),
(555, '414.3', 'Tata Desa'),
(556, '414.31', 'Inventarisasi'),
(557, '414.32', 'Penyusunan Pola Tata Desa'),
(558, '414.33', 'Aplikasi Tata Desa'),
(559, '414.34', 'Pemetaan'),
(560, '414.35', 'Pedoman Pelaksanaan'),
(561, '414.36', 'Evaluasi'),
(562, '414.4', 'Perlombaan Desa'),
(563, '414.41', 'Pedoman'),
(564, '414.42', 'Penilaian'),
(565, '414.43', 'Kejuaraan'),
(566, '414.44', 'Piagam'),
(567, '415', 'Koordinasi'),
(568, '415.1', 'Sektor Khusus'),
(569, '415.2', 'Rapat Koordinasi Horizontal (RKH)'),
(570, '415.3', 'Tim Koordinasi Pusat (TKP)'),
(571, '415.4', 'Kerjasama'),
(572, '415.41', 'Luar Negeri (UNICEF)'),
(573, '415.42', 'Perguruan Tinggi'),
(574, '415.43', 'Kementerian / Lembaga Non Kementerian'),
(575, '420', 'PENDIDIKAN'),
(576, '420.1', 'Pendidikan Khusus Klasifikasi Disini Pendidikan Putra/I Irja'),
(577, '421', 'Sekolah'),
(578, '421.1', 'Pra Sekolah'),
(579, '421.2', 'Sekolah Dasar'),
(580, '421.3', 'Sekolah Menengah'),
(581, '421.4', 'Sekolah Tinggi'),
(582, '421.5', 'Sekolah Kejuruan'),
(583, '421.6', 'Kegiatan Sekolah, Dies Natalis Lustrum'),
(584, '421.7', 'Kegiatan Pelajar'),
(585, '421.71', 'Reuni Darmawisata'),
(586, '421.72', 'Pelajar Teladan'),
(587, '421.73', 'Resimen Mahasiswa'),
(588, '421.8', 'Sekolah Pendidikan Luar Biasa'),
(589, '421.9', 'Pendidikan Luar Sekolah / Pemberantasan Buta Huruf'),
(590, '422', 'Administrasi Sekolah'),
(591, '422.1', 'Persyaratan Masuk Sekolah, Testing, Ujian, Pendaftaran, Mapras, Perpeloncoan'),
(592, '422.2', 'Tahun Pelajaran'),
(593, '422.3', 'Hari Libur'),
(594, '422.4', 'Uang Sekolah, Klasifikasi Disini SPP'),
(595, '422.5', 'Beasiswa'),
(596, '423', 'Metode Belajar'),
(597, '423.1', 'Kuliah'),
(598, '423.2', 'Ceramah, Simposium'),
(599, '423.3', 'Diskusi'),
(600, '423.4', 'Kuliah Lapangan, Widyawisata, KKN, Studi Tur'),
(601, '423.5', 'Kurikulum'),
(602, '423.6', 'Karya Tulis'),
(603, '423.7', 'Ujian'),
(604, '424', 'Tenaga Pengajar, Guru, Dosen, Dekan, Rektor'),
(605, '425', 'Sarana Pendidikan'),
(606, '425.1', 'Gedung'),
(607, '425.11', 'Gedung Sekolah'),
(608, '425.12', 'Kampus'),
(609, '425.13', 'Pusat Kegiatan Mahasiswa'),
(610, '425.2', 'Buku'),
(611, '425.3', 'Perlengkapan Sekolah'),
(612, '426', 'Keolahragaan'),
(613, '426.1', 'Cabang Olah Raga'),
(614, '426.2', 'Sarana'),
(615, '426.21', 'Gedung Olah Raga'),
(616, '426.22', 'Stadion'),
(617, '426.23', 'Lapangan'),
(618, '426.24', 'Kolam renang'),
(619, '426.3', 'Pesta Olah Raga, Klasifikasi Disini: PON, Porsade, Olimpiade, dsb'),
(620, '426.4', 'KONI'),
(621, '427', 'Kepramukaan Meliputi: Organisasi Dan Kegiatan Remaja'),
(622, '428', 'Kepramukaan'),
(623, '429', 'Pendidikan  Kedinasan Untuk Depdagri, Lihat 890'),
(624, '430', 'KEBUDAYAAN'),
(625, '431', 'Kesenian'),
(626, '431.1', 'Cabang Kesenian'),
(627, '431.2', 'Sarana'),
(628, '431.21', 'Gedung Kesenian'),
(629, '432', 'Kepurbakalaan'),
(630, '432.1', 'Museum'),
(631, '432.2', 'Peninggalan Kuno'),
(632, '432.21', 'Candi Termasuk Pemugaran'),
(633, '432.22', 'Benda'),
(634, '433', 'Sejarah'),
(635, '434', 'Bahasa'),
(636, '435', 'Usaha Pertunjukan, Hiburan, Kesenangan'),
(637, '436', 'Kepercayaan'),
(638, '440', 'KESEHATAN'),
(639, '441', 'Pembinaan Kesehatan'),
(640, '441.1', 'Gizi'),
(641, '441.2', 'Mata'),
(642, '441.3', 'Jiwa'),
(643, '441.4', 'Kanker'),
(644, '441.5', 'Usaha Kegiatan Sekolah (UKS)'),
(645, '441.6', 'Perawatan'),
(646, '441.7', 'Penyuluhan Kesehatan Masyarakat (PKM)'),
(647, '441.8', 'Pekan Imunisasi Nasional'),
(648, '442', 'Obat-obatan'),
(649, '442.1', 'Pengadaan'),
(650, '442.2', 'Penyimpanan'),
(651, '443', 'Penyakit Menular'),
(652, '443.1', 'Pencegahan'),
(653, '443.2', 'Pemberantasan dan Pencegahan Penyakit Menular Langsung (P2ML)'),
(654, '443.21', 'Kusta'),
(655, '443.22', 'Kelamin'),
(656, '443.23', 'Frambosia'),
(657, '443.24', 'TBC / AIDS / HIV'),
(658, '443.3', 'Epidemiologi dan Karantina (Epidka)'),
(659, '443.31', 'Kholera'),
(660, '443.32', 'Imunisasi'),
(661, '443.33', 'Survailense'),
(662, '443.34', 'Rabies (Anjing Gila) Antraks'),
(663, '443.4', 'Pemberantasan & Pencegahan Penyakit Menular Sumber Binatang (P2B)'),
(664, '443.41', 'Malaria'),
(665, '443.42', 'Dengue Faemorrhagic Fever (Demam Berdarah HDF)'),
(666, '443.43', 'Filaria'),
(667, '443.44', 'Serangga'),
(668, '443.5', 'Hygiene Sanitasi'),
(669, '443.51', 'Tempat-tempat Pembuatan Dan Penjualan Makanan dan Minuman (TPPMM)'),
(670, '443.52', 'Sarana Air Minum Dan Jamban Keluarga (Samijaga)'),
(671, '443.53', 'Pestisida'),
(672, '444', 'Gizi'),
(673, '444.1', 'Kekurangan Makanan Bahaya Kelaparan, Busung Lapar'),
(674, '444.2', 'Keracunan Makanan'),
(675, '444.3', 'Menu Makanan Rakyat'),
(676, '444.4', 'Badan Perbaikan Gizi Daerah (BPGD)'),
(677, '444.5', 'Program Makanan Tambahn Anak Sekolah (PMT-AS)'),
(678, '445', 'Rumah Sakit, Balai Kesehatan, PUSKESMAS, PUSKESMAS Keliling, Poliklinik'),
(679, '446', 'Tenaga Medis'),
(680, '448', 'Pengobatan Tadisional'),
(681, '448.1', 'Pijat'),
(682, '448.2', 'Tusuk Jarum'),
(683, '448.3', 'Jamu Tradisional'),
(684, '448.4', 'Dukun / Paranormal'),
(685, '450', 'AGAMA'),
(686, '451', 'Islam'),
(687, '451.1', 'Peribadatan'),
(688, '451.11', 'Sholat'),
(689, '451.12', 'Zakat Fitrah'),
(690, '451.13', 'Puasa'),
(691, '451.14', 'MTQ'),
(692, '451.2', 'Rumah Ibadah'),
(693, '451.3', 'Tokoh Agama'),
(694, '451.4', 'Pendidikan'),
(695, '451.41', 'Tinggi'),
(696, '451.42', 'Menengah'),
(697, '451.43', 'Dasar'),
(698, '451.44', 'Pondok Pesantren'),
(699, '451.45', 'Gedung Sekolah'),
(700, '451.46', 'Tenaga Pengajar'),
(701, '451.47', 'Buku'),
(702, '451.48', 'Dakwah'),
(703, '451.49', 'Organisasi / Lembaga Pendidikan'),
(704, '451.5', 'Harta Agama Wakaf, Baitulmal, dsb'),
(705, '451.6', 'Peradilan'),
(706, '451.7', 'Organisasi Keagamaan Bukan Politik Majelis Ulama'),
(707, '451.8', 'Mazhab'),
(708, '452', 'Protestan'),
(709, '452.1', 'Peribadatan'),
(710, '452.2', 'Rumah Ibadah'),
(711, '452.2', 'Tokoh Agama, Rohaniawan, Pendeta, Domine'),
(712, '452.4', 'Mazhab'),
(713, '452.5', 'Organisasi Gerejani'),
(714, '453', 'Katolik'),
(715, '453.1', 'Peribadatan'),
(716, '453.2', 'Rumah Ibadah'),
(717, '453.3', 'Tokoh Agama, Rohaniawan, Pendeta, Pastor'),
(718, '453.4', 'Mazhab'),
(719, '453.5', 'Organisasi Gerejani'),
(720, '454', 'Hindu'),
(721, '454.1', 'Peribadatan'),
(722, '454.2', 'Rumah Ibadah'),
(723, '454.3', 'Tokoh Agama, Rohaniawan'),
(724, '454.4', 'Mazhab'),
(725, '454.5', 'Organisasi Keagamaan'),
(726, '455', 'Budha'),
(727, '455.1', 'Peribadatan'),
(728, '455.2', 'Rumah Ibadah'),
(729, '455.3', 'Tokoh Agama, Rohaniawan'),
(730, '455.4', 'Mazhab'),
(731, '455.5', 'Organisasi Keagamaan'),
(732, '456', 'Urusan Haji'),
(733, '456.1', 'ONH'),
(734, '456.2', 'Manasik'),
(735, '457', '-'),
(736, '458', '-'),
(737, '458', '-'),
(738, '460', 'SOSIAL'),
(739, '461', 'Rehabilitasi Penderita Cacat'),
(740, '461.1', 'Cacat Maat'),
(741, '461.2', 'Cacat Tubuh'),
(742, '461.3', 'Cacat Mental'),
(743, '461.4', 'Bisul/Tuli'),
(744, '462', 'Tuna Sosial'),
(745, '462.1', 'Gelandangan'),
(746, '462.2', 'Pengemis'),
(747, '462.3', 'Tuna Susila'),
(748, '462.4', 'Anak Nakal'),
(749, '463', 'Kesejahteraan Anak / Keluarga'),
(750, '463.1', 'Anak Putus Sekolah'),
(751, '463.2', 'Ibu Teladan'),
(752, '463.3', 'Anak Asuh'),
(753, '464', 'Pembinaan Pahlawan'),
(754, '464.1', 'Pahlawan Meliputi: Penghargaan Kepada Pahlawan, Tunjangan Kepada Pahlawan Dan Jandanya'),
(755, '464.2', 'Perintis Kemerdekaan Meliputi: Pembinaan, Penghargaan Dan Tunjangan Kepada Perintis'),
(756, '464.3', 'Cacat Veteran'),
(757, '465', 'Kesejahteraan Sosial'),
(758, '465.1', 'Lanjut Usia'),
(759, '465.2', 'Korban Kekacauan, Pengungsi, Repatriasi'),
(760, '466', 'Sumbangan Sosial'),
(761, '466.1', 'Korban Bencana'),
(762, '466.2', 'Pencarian Dana Untuk Sumbangan'),
(763, '466.3', 'Meliputi: Penyelenggaraan Undian, Ketangkasan, Bazar, dsb'),
(764, '466.4', 'Panti Asuhan'),
(765, '466.5', 'Panti Jompo'),
(766, '467', 'Bimbingan Sosial'),
(767, '467.1', 'Masyarakat Suku Terasing Meliputi: Bimbingan, Pendidikan, Kesehatan, Pemukiman'),
(768, '468', 'PMI'),
(769, '469', 'Makam'),
(770, '469.1', 'Umum'),
(771, '469.2', 'Pahlawan Meliputi: Penghargaan Kepada Pahlawan, Tunjangan Kpd Pahlawan Dan Jandanya'),
(772, '469.3', 'Khusus Keluarga Raja'),
(773, '469.4', 'Krematorium'),
(774, '470', 'KEPENDUDUKAN'),
(775, '471', 'Pendaftaran Penduduk'),
(776, '471.1', 'Identitas Penduduk'),
(777, '471.11', 'Biodata'),
(778, '471.12', 'Nomor Induk Kependudukan'),
(779, '471.13', 'Kartu Tanda Penduduk'),
(780, '471.14', 'Kartu Keluarga'),
(781, '471.15', 'Advokasi Indentitas Penduduk'),
(782, '471.2', 'Perpindahan Penduduk Dalam Wilayah Indonesia'),
(783, '471.21', 'Perpindahan Penduduk WNI'),
(784, '471.22', 'Perpindahan Penduduk WNA Dalam Wilayah Indonesia'),
(785, '471.23', 'Perpindahan Penduduk WNA dan WNI Tinggal Sementara'),
(786, '471.24', 'Daerah Terbelakan'),
(787, '471.25', 'Bedol Desa'),
(788, '471.3', 'Perpindahan Penduduk Antar Negara'),
(789, '471.31', 'Penduduk Indonesia Ke Luar Negeri'),
(790, '471.32', 'Orang Asing Tinggal Sementara'),
(791, '471.33', 'Orang Asing Tinggal Tetap'),
(792, '471.34', 'Perpindahan Penduduk Antar Negara Di Wilayah Pembatasan Antar Negara (Pelintas Batas Tradisional)'),
(793, '471.4', 'Pendaftaran Pengungsi Dan Penduduk Rentan'),
(794, '471.41', 'Akibat Bencana Alam'),
(795, '471.42', 'Akibat Kerusuhan Sosial'),
(796, '471.43', 'Pendaftaran Penduduk Daerah Terbelakang'),
(797, '471.44', 'Pendaftaran Penduduk Rentan'),
(798, '472', 'Pencatatan Sipil'),
(799, '472.1', 'Kelahiran, Kematian Dan Advokasi'),
(800, '472.11', 'Kelahiran'),
(801, '472.12', 'Kematian'),
(802, '472.13', 'Advokasi Kelahiran Dan Kematian'),
(803, '472.2', 'Perkawinan, Peceraian Dan Advokasi'),
(804, '472.21', 'Perkawinan Agama Islam'),
(805, '472.22', 'Perkawinan Agama Non Islam'),
(806, '472.23', 'Perceraian Agama Islam'),
(807, '472.24', 'Perceraian Agama Non Islam'),
(808, '472.25', 'Advokasi Perkawinan Dan Perceraian'),
(809, '472.3', 'Pengangkatan, Pengakuan, Dan Pengesahan Anak Serta Perubahan Dan Pembatalan Akta Dan Advokasi Pengangkatan Anak'),
(810, '472.31', 'Pengangkatan Anak'),
(811, '472.32', 'Pengakuan Anak'),
(812, '472.33', 'Pengesahan Anak'),
(813, '472.34', 'Perubahan Anak'),
(814, '472.35', 'Pembatalan Anak'),
(815, '472.36', 'Advokasi Pengurusan Pengangkatan, Pengakuan Dan Pengesahan Anak Serta Perubahan Dan Pembatalan Akta'),
(816, '472.4', 'Pencatatan Kewarganegaraan'),
(817, '472.41', 'Akibat Perkawinan'),
(818, '472.42', 'Akibat Kelahiran'),
(819, '472.43', 'Non Perkawinan'),
(820, '472.44', 'Non Kelahiran'),
(821, '472.45', 'Perubahan WNI ke WNA'),
(822, '473', 'Informasi Kependudukan'),
(823, '473.1', 'Teknologi Informasi'),
(824, '473.11', 'Perangkat Keras'),
(825, '473.12', 'Perangkat Lunak'),
(826, '473.13', 'Jaringan Komunikasi Data'),
(827, '473.2', 'Kelembagaan Dan Sumber Daya Informasi'),
(828, '473.21', 'Daerah Maju'),
(829, '473.22', 'Daerah Berkembang'),
(830, '473.23', 'Daerah Terbelakang'),
(831, '473.3', 'Pengolahan Data Kependudukan'),
(832, '473.31', 'Pendaftaran Penduduk'),
(833, '473.32', 'Kejadian Vital Penduduk'),
(834, '473.33', 'Penduduk Non Registrasi'),
(835, '473.4', 'Pelayanan Informasi Kependudukan'),
(836, '473.41', 'Media Elektronik'),
(837, '473.42', 'Media Cetak'),
(838, '473.43', 'Outlet'),
(839, '474', 'Perkembangan Penduduk'),
(840, '474.1', 'Pengarahan Kuantitas Penduduk'),
(841, '474.11', 'Struktur Jumlah'),
(842, '474.12', 'Komposisi'),
(843, '474.13', 'Fertilitas'),
(844, '474.14', 'Kesehatan Reproduksi'),
(845, '474.15', 'Morbiditas Penduduk'),
(846, '474.16', 'Mortalitas Penduduk'),
(847, '474.2', 'Pengembangan Kuantitas Penduduk'),
(848, '474.21', 'Anak dan Remaja'),
(849, '474.22', 'Penduduk Usia Produktif'),
(850, '474.23', 'Penduduk Lanjut Usia'),
(851, '474.24', 'Gender'),
(852, '474.3', 'Penataan Persebaran Penduduk'),
(853, '474.31', 'Migrasi Antar Wilayah'),
(854, '474.32', 'Migrasi Internasional'),
(855, '474.33', 'Urbanisasi'),
(856, '474.34', 'Sementara'),
(857, '474.35', 'Migrasi Non Permanen'),
(858, '474.4', 'Perlindungan Pemberdayaan Penduduk'),
(859, '474.41', 'Pengembangan Sistem Pelindungan Penduduk'),
(860, '474.42', 'Pelayanan Kelembagaan Ekonomi'),
(861, '474.43', 'Pelayanan Kelembagaan Sosial Budaya'),
(862, '474.44', 'Partisipasi Masyarakat'),
(863, '474.5', 'Pengembangan Wawasan Kependudukan'),
(864, '474.51', 'Pendidikan Jalur Sekolah'),
(865, '474.52', 'Pendidikan Jalur Luar Sekolah'),
(866, '474.53', 'Pendidikan Jalur Masyarakat'),
(867, '474.54', 'Pembangunan Berwawasan Kependudukan'),
(868, '475', 'Proyeksi Dan Penyerasian Kebijakan Kependudukan'),
(869, '475.1', 'Indikator Kependudukan'),
(870, '475.11', 'Perumusan Penetapan Dan Pengembangan Indikator Kependudukan'),
(871, '475.12', 'Pemanfaatan Indikator Kependudukan'),
(872, '475.13', 'Sosialisasi Indikator Kependudukan'),
(873, '475.2', 'Proyeksi Kependudukan'),
(874, '475.21', 'Penyusunan Dan Pengembangan Proyeksi Kependudukan'),
(875, '475.22', 'Pemanfaatan Proyeksi Kependudukan'),
(876, '475.3', 'Analisis Dampak Kependudukan'),
(877, '475.31', 'Penyusunan Dan Pengembangan'),
(878, '475.32', 'Pemanfaatan Analisis Dampak Kependudukan'),
(879, '475.4', 'Penyerasian Kebijakan Lembaga Non Pemerintah'),
(880, '475.41', 'Lembaga Internasioanal'),
(881, '475.42', 'Lembaga Masyarakat Dan Nirlaba'),
(882, '475.43', 'Lembaga Usaha Swasta'),
(883, '475.5', 'Penyerasian Kebijakan Lembaga Pemerintah'),
(884, '475.51', 'Lembaga Pemerintah'),
(885, '475.52', 'Pemerintah Provinsidan Kota'),
(886, '475.53', 'Pemerintah Kabupaten'),
(887, '475.6', 'Analisis'),
(888, '476', 'Monitoring'),
(889, '477', 'Evaluasi'),
(890, '478', 'Dokumentasi'),
(891, '480', 'MEDIA MASSA'),
(892, '481', 'Penerbitan'),
(893, '481.1', 'Surat Kabar'),
(894, '481.2', 'Majalah'),
(895, '481.3', 'Buku'),
(896, '481.4', 'Penerjemahan'),
(897, '482', 'Radio'),
(898, '482.1', 'RRI'),
(899, '482.11', 'Siaran Pedesaan Jgn Diklasifikasikan Disini'),
(900, '482.2', 'Non RRI'),
(901, '482.3', 'Luar Negeri'),
(902, '483', 'Televisi'),
(903, '484', 'Film'),
(904, '485', 'Pers'),
(905, '485.1', 'Kewartawanan'),
(906, '485.2', 'Wawancara'),
(907, '485.3', 'Informasi Nasional'),
(908, '486', 'Grafika'),
(909, '487', 'Penerangan'),
(910, '487.1', 'Pameran Non Komersil'),
(911, '488', 'Operation Room'),
(912, '489', 'Hubungan Masyarakat'),
(913, '490', 'Pengaduan Masyarakat'),
(914, '500', 'PEREKONOMIAN'),
(915, '500.1', 'Dewan Stabilisasi'),
(916, '501', 'Pengadaan Pangan'),
(917, '502', 'Pengadaan Sandang'),
(918, '503', 'Perizinan Pada Umumnya Untuk Perizinan Suatu Bidang, Kalsifikasikan Masalahnya'),
(919, '510', 'PERDAGANGAN'),
(920, '510.1', 'Promosi Perdagangan'),
(921, '510.11', 'Pekan Raya'),
(922, '510.12', 'Iklan'),
(923, '510.13', 'Pameran Non Komersil'),
(924, '510.2', 'Pelelangan'),
(925, '510.3', 'Tera'),
(926, '511', 'Pemasaran'),
(927, '511.1', 'Sembilan Bahan Pokok, Tambahkan Kode Wilayah : Beras, Garam, Tanah, Minyak Goreng'),
(928, '511.2', 'Pasar'),
(929, '511.3', 'Pertokoan, Kaki Lima, Kios'),
(930, '512', 'Ekspor'),
(931, '513', 'Impor'),
(932, '514', 'Perdagangan Antar Pulau'),
(933, '515', 'Perdagangan Luar Negeri'),
(934, '516', 'Pergudangan'),
(935, '517', 'Aneka Usaha Perdagangan'),
(936, '518', 'Koperasi untuk BUUD, KUD lihat ( 412.31-412.32)'),
(937, '520', 'PERTANIAN'),
(938, '521', 'Tanaman Pangan'),
(939, '521.1', 'Program'),
(940, '521.11', 'Bimas / Inmas Termasuk Kredit'),
(941, '521.12', 'Penyuluhan'),
(942, '521.2', 'Produksi'),
(943, '521.21', 'Padi / Panen'),
(944, '521.22', 'Palawija'),
(945, '521.23', 'Jagung'),
(946, '521.24', 'Ketela Pohon / Ubi-Ubian'),
(947, '521.25', 'Hortikultura'),
(948, '521.26', 'Sayuran / Buah-Buahan'),
(949, '521.27', 'Tanaman Hias'),
(950, '521.28', 'Pembudidayaan Rumput Laut'),
(951, '521.3', 'Saran Usaha Pertanian'),
(952, '521.31', 'Peralatan Meliputi: Traktor Dan Peralatan Lainya'),
(953, '521.33', 'Pembibitan'),
(954, '521.34', 'Pupuk'),
(955, '521.4', 'Perlindungan Tanaman'),
(956, '521.41', 'Penyakit, Penyakit Daun, Penyakit Batang'),
(957, '521.42', 'Hama, Serangga, Wereng, Walang Sangit, Tungru, Tikus Dan Sejenisnya'),
(958, '521.43', 'Pemberantasan Hama Meliputi: Penyemprotan, Penyiangan, Geropyokan, Sparayer, Pemberantasan Melalui Udara'),
(959, '521.44', 'Pestisida'),
(960, '521.5', 'Tanah Pertanian Pangan'),
(961, '521.51', 'Persawahan'),
(962, '521.52', 'Perladangan'),
(963, '521.53', 'Kebun'),
(964, '521.54', 'Rumpun Ikan Laut'),
(965, '521.55', 'KTA/Lahan Kritis'),
(966, '521.6', 'Pengusaha Petani'),
(967, '521.7', 'Bina Usaha'),
(968, '521.71', 'Pasca Panen'),
(969, '521.72', 'Pemasaran Hasil'),
(970, '522', 'Kehutanan'),
(971, '522.1', 'Program'),
(972, '522.11', 'Hak Pengusahaan Hutan'),
(973, '522.12', 'Tata Guna Hutan'),
(974, '522.13', 'Perpetaan Hutan'),
(975, '522.14', 'Tumpangsari'),
(976, '522.2', 'Produksi'),
(977, '522.21', 'Kayu'),
(978, '522.22', 'Non Kayu'),
(979, '522.3', 'Sarana  Usaha  Kehutanan'),
(980, '522.4', 'Penghijauan, Reboisasi'),
(981, '522.5', 'Kelestarian'),
(982, '522.51', 'Cagar Alam, Marga Satwa, Suaka Marga Satwa'),
(983, '522.52', 'Berburu Meliputi Larangan Dan Ijin Berburu'),
(984, '522.53', 'Kebun Binatang'),
(985, '522.54', 'Konservasi Lahan'),
(986, '522.6', 'Penyakit/Hama'),
(987, '522.7', 'Jenis-jenis Hutan'),
(988, '522.71', 'Hutan Hidup'),
(989, '522.72', 'Hutan Wisata'),
(990, '522.73', 'Hutan Produksi'),
(991, '522.74', 'Hutan Lindung'),
(992, '523', 'Perikanan'),
(993, '523.1', 'Program'),
(994, '523.11', 'Penyuluhan'),
(995, '523.12', 'Teknologi'),
(996, '523.2', 'Produksi'),
(997, '523.21', 'Pelelangan'),
(998, '523.3', 'Usaha Perikanan'),
(999, '523.31', 'Pembibitan'),
(1000, '523.32', 'Daerah Penagkapan'),
(1001, '523.33', 'Pertambakan Meliputi: ( Tambak Ikan Air Deras, Tambak Udang dll )'),
(1002, '523.34', 'Jaring Terapung'),
(1003, '523.4', 'Sarana'),
(1004, '523.41', 'Peralatan'),
(1005, '523.42', 'Kapal'),
(1006, '523.43', 'Pelabuhan'),
(1007, '523.5', 'Pengusaha'),
(1008, '523.6', 'Nelayan'),
(1009, '524', 'Peternakan'),
(1010, '524.1', 'Produksi'),
(1011, '524.11', 'Susu Ternak Rakyat'),
(1012, '524.12', 'Telur'),
(1013, '524.13', 'Daging'),
(1014, '524.14', 'Kulit'),
(1015, '524.2', 'Sarana Usaha Ternak'),
(1016, '524.21', 'Pembibitan'),
(1017, '524.22', 'Kandang Ternak'),
(1018, '524.3', 'Kesehatan Hewan'),
(1019, '524.31', 'Penyakit Hewan'),
(1020, '524.32', 'Pos Kesehatan Hewan'),
(1021, '524.33', 'Tesi Pullorum'),
(1022, '524.34', 'Karantina'),
(1023, '524.35', 'Pemberantasan Penyakit Hewan Termasuk Usaha Pencegahannya'),
(1024, '524.4', 'Perunggasan'),
(1025, '524.5', 'Pengembangan Ternak'),
(1026, '524.51', 'Inseminasi Buatan'),
(1027, '524.52', 'Pembibitan / Bibit Unggul'),
(1028, '524.53', 'Penyebaran Ternak'),
(1029, '524.6', 'Makanan Ternak'),
(1030, '524.7', 'Tempat Pemotongan Hewan'),
(1031, '524.8', 'Data Peternakan'),
(1032, '524', 'Perkebunan'),
(1033, '524.1', 'Program'),
(1034, '524.2', 'Produksi'),
(1035, '524.21', 'Karet'),
(1036, '524.22', 'The'),
(1037, '524.23', 'Tembakau'),
(1038, '524.24', 'Tebu'),
(1039, '524.25', 'Cengkeh'),
(1040, '524.26', 'Kopra'),
(1041, '524.27', 'Kopi'),
(1042, '524.28', 'Coklat'),
(1043, '524.29', 'Aneka Tanaman'),
(1044, '530', 'PERINDUSTRIAN'),
(1045, '530.08', 'Undang-Undang Gangguan'),
(1046, '531', 'Industri Logam'),
(1047, '532', 'Industri Mesin/Elektronik'),
(1048, '533', 'Industri Kimia/Farmasi'),
(1049, '534', 'Industri Tekstil'),
(1050, '535', 'Industri Makanan / Minuman'),
(1051, '536', 'Aneka Industri / Perusahaan'),
(1052, '537', 'Aneka Kerajinan'),
(1053, '538', 'Usaha Negara / BUMN'),
(1054, '538.1', 'Perjan'),
(1055, '538.2', 'Perum'),
(1056, '538.3', 'Persero / PT, CV'),
(1057, '539', 'Perusahaan Daerah / BUMD/BULD'),
(1058, '540', 'PERTAMBANGAN / KESAMUDRAAN'),
(1059, '541', 'Minyak Bumi / Bensin'),
(1060, '541.1', 'Pengusahaan'),
(1061, '542', 'Gas bumi'),
(1062, '542.1', 'Eksploitasi / Pengeboran'),
(1063, '542.11', 'Kontrak Kerja'),
(1064, '542.2', 'Penogolahan,Meliputi :Tangki, Pompa, Tanker'),
(1065, '543', 'Aneka Tambang'),
(1066, '543.1', 'Timah'),
(1067, '543.2', 'Alumunium, Boxit'),
(1068, '543.3', 'Besi Termasuk Besi Tua'),
(1069, '543.4', 'Tembaga'),
(1070, '543.5', 'Batu Bara'),
(1071, '544', 'Logam Mulia,Emas,Intan,Perak'),
(1072, '545', 'Logam'),
(1073, '546', 'Geologi'),
(1074, '546.1', 'Vulkanologi'),
(1075, '546.11', 'Pengawasan Gunung Berapi'),
(1076, '546.2', 'Sumur Artesis, Air Bawah Tanah'),
(1077, '547', 'Hidrologi'),
(1078, '548', 'Kesamudraan'),
(1079, '549', 'Pesisir Pantai'),
(1080, '550', 'PERHUBUNGAN'),
(1081, '551', 'Perhubungan Darat'),
(1082, '551.1', 'Lalu Lintas Jalan Raya, Sungai, Danau'),
(1083, '551.11', 'Keamanan Lalu Lintas, Rambu-Rambu'),
(1084, '551.2', 'Angkutan Jalan Raya'),
(1085, '551.21', 'Perizinan'),
(1086, '551.22', 'Terminal'),
(1087, '551.23', 'Alat Angkutan'),
(1088, '551.3', 'Angkutan Sungai'),
(1089, '551.31', 'Perizinan'),
(1090, '551.32', 'Terminal'),
(1091, '551.33', 'Pelabuhan'),
(1092, '551.4', 'Angkutan Danau'),
(1093, '551.41', 'Perizinan'),
(1094, '551.42', 'Terminal'),
(1095, '551.43', 'Pelabuhan'),
(1096, '551.5', 'Feri'),
(1097, '551.51', 'Perizinan'),
(1098, '551.52', 'Terminal'),
(1099, '551.53', 'Pelabuhan'),
(1100, '551.6', 'Perkereta-Apian'),
(1101, '552', 'Perhubungan Laut'),
(1102, '552.1', 'Lalu Lintas Angkutan Laut, Pelayanan Umum'),
(1103, '552.11', 'Keamanan Lalu Lintas, Rambu-Rambu'),
(1104, '552.12', 'Pelayaran Dalam Negeri'),
(1105, '552.13', 'Pelayaran Luar Negeri'),
(1106, '552.2', 'Perkapalan Alat Angkutan'),
(1107, '552.3', 'Pelabuhan'),
(1108, '552.4', 'Pengerukan'),
(1109, '552.5', 'Penjagaan Pantai'),
(1110, '553', 'Perhubungan Udara'),
(1111, '553.1', 'Lalu Lintas Udara / Keamanan Lalu Lintas Udara'),
(1112, '553.2', 'Pelabuhan Udara'),
(1113, '553.3', 'Alat Angkutan'),
(1114, '554', 'Pos'),
(1115, '555', 'Telekomunikasi'),
(1116, '555.1', 'Telepon'),
(1117, '555.2', 'Telegram'),
(1118, '555.3', 'Telex / SSB, Faximile'),
(1119, '555.4', 'Satelit, Internet'),
(1120, '555.5', 'Stasiun Bumi, Parabola'),
(1121, '556', 'Pariwisata dan Rekreasi'),
(1122, '556.1', 'Obyek Kepariwisataan Taman Mini Indonesia Indah'),
(1123, '556.2', 'Perhotelan'),
(1124, '556.3', 'Travel service'),
(1125, '556.4', 'Tempat Rekreasi'),
(1126, '557', 'Meteorologi'),
(1127, '557.1', 'Ramalan Cuaca'),
(1128, '557.2', 'Curah Hujan'),
(1129, '557.3', 'Kemarau Panjang'),
(1130, '560', 'TENAGA KERJA'),
(1131, '560.1', 'Pengangguran'),
(1132, '561', 'Upah'),
(1133, '562', 'Penempatan Tenaga Kerja, TKI'),
(1134, '563', 'Latihan Kerja'),
(1135, '564', 'Tenaga Kerja'),
(1136, '564.1', 'Butsi'),
(1137, '564.2', 'Padat Karya'),
(1138, '565', 'Perselisihan Perburuhan'),
(1139, '566', 'Keselamatan Kerja'),
(1140, '567', 'Pemutusan Hubungan Kerja'),
(1141, '568', 'kesejahteraan Buruh'),
(1142, '569', 'Tenaga Orang Asing'),
(1143, '570', 'PERMODALAN'),
(1144, '571', 'Modal Domestik'),
(1145, '572', 'Modal Asing'),
(1146, '573', 'Modal Patungan (Joint Venture) / Penyertaan Modal'),
(1147, '574', 'Pasar Uang Dan Modal'),
(1148, '575', 'Saham'),
(1149, '576', 'Belanja Modal'),
(1150, '577', 'Modal Daerah'),
(1151, '580', 'PERBANKAN / MONETER'),
(1152, '581', 'Kredit'),
(1153, '582', 'Investasi'),
(1154, '583', 'Pembukaan ,Perubahan,Penutupan Rekening, Deposito'),
(1155, '584', 'Bank Pembangunan Daerah'),
(1156, '585', 'Asuransi Dana Kecelakaan Lalu Lintas'),
(1157, '586', 'Alat Pembayaran, Cek, Giro, Wesel, Transfer'),
(1158, '587', 'Fiskal'),
(1159, '588', 'Hutang Negara'),
(1160, '589', 'Moneter'),
(1161, '590', 'AGRARIA'),
(1162, '591', 'Tataguna Tanah'),
(1163, '591.1', 'Pemetaan dan Pengukuran'),
(1164, '591.2', 'Perpetaan'),
(1165, '591.3', 'penyediaan Data'),
(1166, '591.4', 'Fatwa Tata Guna Tanah'),
(1167, '591.5', 'Tanah Kritis'),
(1168, '592', 'Landreform'),
(1169, '592.1', 'Redistribusi'),
(1170, '592.11', 'Pendaftaran Pemilikan Dan Pengurusan'),
(1171, '592.12', 'Penentuan Tanah Obyek Landreform'),
(1172, '592.13', 'Pembagian Tanah Obyek Landreform'),
(1173, '592.14', 'Sengketa Redistribusi Tanah Obyek Landreform'),
(1174, '592.2', 'Ganti Rugi'),
(1175, '592.21', 'Ganti Rugi Tanah Kelebihan'),
(1176, '592.22', 'Ganti Rugi Tanah Absentee'),
(1177, '592.23', 'Ganti Rugi Tanah Partikelir'),
(1178, '592.3', 'Bagi Hasil'),
(1179, '592.31', 'Penetapan Imbangan Bagi Hasil'),
(1180, '592.32', 'Pelaksanaan Perjanjian Bagi Hasil'),
(1181, '592.33', 'Sengketa Perjanjian Bagi Hasil'),
(1182, '592.4', 'Gadai Tanah'),
(1183, '592.41', 'Pendaftaran Pemilikan Dan Pengurusan'),
(1184, '592.42', 'Pelaksanaan Gadai Tanah'),
(1185, '592.43', 'Sengketa Gadai Tanah'),
(1186, '592.5', 'Bimbingan dan Penyuluhan'),
(1187, '592.6', 'Pengembangan'),
(1188, '592.7', 'Yayasan Dana Landreform'),
(1189, '593', 'Pengurusan Hak-Hak Tanah'),
(1190, '593.01', 'Penyusunan Program Dan Bimbingan Teknis'),
(1191, '593.1', 'Sewa Tanah'),
(1192, '593.11', 'Sewa Tanah Untuk Tanaman Tertentu, Tebu, Tembakau, Rosela, Chorcorus'),
(1193, '593.2', 'Hak Milik'),
(1194, '593.21', 'Perorangan'),
(1195, '593.22', 'Badan Hukum'),
(1196, '593.3', 'Hak Pakai'),
(1197, '593.31', 'Perorangan'),
(1198, '593.311', 'Warga Negara Indonesia'),
(1199, '593.312', 'Warga Negara Asing'),
(1200, '593.32', 'Badan Hukum'),
(1201, '593.321', 'Badan Hukum Indonesia'),
(1202, '593.322', 'Badan Hukum Asing, Kedutaan, Konsulat Kantor Dagang Asing'),
(1203, '593.33', 'Tanah Gedung-Gedung Negara'),
(1204, '593.4', 'Guna Usaha'),
(1205, '593.41', 'Perkebunan Besar'),
(1206, '593.42', 'Perkebunan Rakyat'),
(1207, '593.43', 'Peternakan'),
(1208, '593.44', 'Perikanan'),
(1209, '593.45', 'Kehutanan'),
(1210, '593.5', 'Hak Guna Bangunan'),
(1211, '593.51', 'Perorangan'),
(1212, '593.52', 'Badan Hukum'),
(1213, '593.53', 'P3MB (Panitia Pelaksana Penguasaan Milik Belanda)'),
(1214, '593.54', 'Badan Hukum Asing Belanda-Prrk No 5165'),
(1215, '593.55', 'Pemulihan Hak (Pen Pres 4/1960)'),
(1216, '593.6', 'Hak Pengelolaan'),
(1217, '593.61', 'PN Perumnas, Bonded Ware House, Industrial Estate, Real Estate'),
(1218, '593.62', 'Perusahaan Daerah Pembangunan Perumahan'),
(1219, '593.7', 'Sengketa Tanah'),
(1220, '593.71', 'Peradilan Perkara Tanah'),
(1221, '593.8', 'Pencabutan dan Pembebasan Tanah'),
(1222, '593.81', 'Pencabutan Hak'),
(1223, '593.82', 'Pembebasan Tanah'),
(1224, '593.83', 'Ganti Rugi Tanah'),
(1225, '594', 'Pendaftaran Tanah'),
(1226, '594.1', 'Pengukuran / Pemetaan'),
(1227, '594.11', 'Fotogrametri'),
(1228, '594.12', 'Terristris'),
(1229, '594.13', 'Triangulasi'),
(1230, '594.14', 'Peralatan'),
(1231, '594.2', 'Dana Pengukuran (Permen Agraria No. 61/1965)'),
(1232, '594.3', 'Sertifikat'),
(1233, '594.4', 'Pejabat Pembuat Akta Tanah (PPAT)'),
(1234, '595', 'Lahan Transmigrasi'),
(1235, '595.1', 'Tataguna Tanah'),
(1236, '595.2', 'Landreform'),
(1237, '595.3', 'Pengurusan Hak-Hak Tanah'),
(1238, '595.4', 'Pendaftaran Tanah'),
(1239, '600', 'PEKERJAAN UMUM DAN KETENAGAKERJAAN'),
(1240, '601', 'Tata Bangunan Konstruksi Dan Industri Konstruksi'),
(1241, '602', 'Kontraktor Pemborong'),
(1242, '602.1', 'Tender'),
(1243, '602.2', 'Pennunjukan'),
(1244, '602.3', 'Prakualifikasi'),
(1245, '602.31', 'Daftar Rekanan Mampu (DRM)'),
(1246, '602.32', 'Tanda Daftar Rekanan'),
(1247, '603', 'Arsitektur'),
(1248, '604', 'Bahan Bangunan'),
(1249, '604.1', 'Tanah Dan Batu Seperti: Batu Belah, Steen Slaag, Split dsb'),
(1250, '604.2', 'Aspal, Aspal Buatan, Aspal Alam (butas)'),
(1251, '604.3', 'Besi Dan Logam Lainnya'),
(1252, '604.31', 'Besi Beton'),
(1253, '604.32', 'Besi Profil'),
(1254, '604.33', 'Paku'),
(1255, '604.34', 'Alumunium, Profil'),
(1256, '604.4', 'Bahan-Bahan Pelindung Dan Pengawet (Cat, Tech Til, Pengawet Kayu)'),
(1257, '604.5', 'Semen'),
(1258, '604.6', 'Kayu'),
(1259, '604.7', 'Bahan Penutup Atap ( Genting, Asbes Gelombang, Seng Dan Sebagainya)'),
(1260, '604.8', 'Alat-Alat Penggantung Dan Pengunci'),
(1261, '604.9', 'Bahan-Bahan Bangunan Lainnya'),
(1262, '605', 'Instalasi'),
(1263, '605.1', 'Instalasi Bangunan'),
(1264, '605.2', 'Instalasi Listrik'),
(1265, '605.3', 'Instalasi Air Sanitasi'),
(1266, '605.4', 'Instalasi Pengatur Udara'),
(1267, '605.5', 'Instalasi Akustik'),
(1268, '605.6', 'Instalasi Cahaya / Penerangan'),
(1269, '606', 'Konstruksi Pencegahan'),
(1270, '606.1', 'Konstruksi Pencegahan Terhadap Kebakaran'),
(1271, '606.2', 'Konstruksi Pencegahan Terhadap Gempa'),
(1272, '606.3', 'Konstruksi Penegahan Terhadap Angin Udara/Panas'),
(1273, '606.4', 'Konstruksi Pencegahan Terhadap Kegaduhan'),
(1274, '606.5', 'Konstruksi Pencegahan Terhadap Gas/Explosive'),
(1275, '606.6', 'Konstruksi Pencegahan Terhadap Serangga'),
(1276, '606.7', 'Konstruksi Pencegahan Terhadap Radiasi Atom'),
(1277, '610', 'PENGAIRAN'),
(1278, '611', 'Irigasi'),
(1279, '611.1', 'Bangunan Waduk'),
(1280, '611.11', 'Bendungan'),
(1281, '611.12', 'Tanggul'),
(1282, '611.13', 'Pelimpahan Banjir'),
(1283, '611.14', 'Menara Pengambilan'),
(1284, '611.2', 'Bangunan Pengambilan'),
(1285, '611.21', 'Bendungan'),
(1286, '611.22', 'Bendungan Dengan Pintu Bilas'),
(1287, '611.23', 'Bendungan Dengan Pompa'),
(1288, '611.24', 'Pengambilan Bebas'),
(1289, '611.25', 'Pengambilan Bebas Dengan Pompa'),
(1290, '611.26', 'Sumur Dengan Pompa'),
(1291, '611.27', 'Kantung Lumpur'),
(1292, '611.28', 'Slit Ekstrator'),
(1293, '611.29', 'Escope Channel'),
(1294, '611.3', 'Bangunan Pembawa'),
(1295, '611.31', 'Saluran'),
(1296, '611.311', 'Saluran Induk'),
(1297, '611.312', 'Saluran Sekunder'),
(1298, '611.313', 'Suplesi'),
(1299, '611.314', 'Tersier'),
(1300, '611.315', 'Saluran Kwarter'),
(1301, '611.316', 'Saluran Pasangan'),
(1302, '611.317', 'Saluran Tertutup / Terowongan'),
(1303, '611.32', 'Bangunan'),
(1304, '611.321', 'Bangunan Bagi'),
(1305, '611.322', 'Bangunan Bagi Dan Sadap'),
(1306, '611.323', 'Bangunan Sadap'),
(1307, '611.324', 'Bangunan Check'),
(1308, '611.325', 'Bangunan Terjun'),
(1309, '611.33', 'Box Tersier'),
(1310, '611.34', 'Got Miring'),
(1311, '611.35', 'Talang'),
(1312, '611.36', 'Syphon'),
(1313, '611.37', 'Gorong-Gorong'),
(1314, '611.38', 'Pelimpah Samping'),
(1315, '611.4', 'Bangunan Pembuang'),
(1316, '611.41', 'Saluran'),
(1317, '611.411', 'Saluran Pembuang Induk'),
(1318, '611.412', 'Saluran Pembuang Sekunder'),
(1319, '611.413', 'Saluran Tersier'),
(1320, '611.42', 'Bangunan'),
(1321, '611.421', 'Bangunan Outlet'),
(1322, '611.422', 'Bangunan Terjun'),
(1323, '611.423', 'Bangunan Penahan Banjir'),
(1324, '611.43', 'Gorong-Gorong Pembuang'),
(1325, '611.44', 'Talang Pembuang'),
(1326, '611.45', 'Syphon Pembuang'),
(1327, '611.5', 'Bangunan Lainnya'),
(1328, '611.51', 'Jalan'),
(1329, '611.511', 'Jalan Inspeksi'),
(1330, '611.512', 'Jalan Logistik Waduk Lapangan'),
(1331, '611.52', 'Jembatan'),
(1332, '611.521', 'Jembatan Inspeksi'),
(1333, '611.522', 'Jembatan Hewan');
INSERT INTO `t_klasifikasi` (`id`, `kode`, `klasifikasi`) VALUES
(1334, '611.53', 'Tangga Cuci'),
(1335, '611.54', 'Kubangan Kerbau'),
(1336, '611.55', 'Waduk Lapangan'),
(1337, '611.56', 'Bangunan Penunjang'),
(1338, '611.57', 'Jaringan Telepon'),
(1339, '611.58', 'Stasiun Agro'),
(1340, '612', 'Folder'),
(1341, '612.1', 'Tanggul Keliling'),
(1342, '612.11', 'Tanggul'),
(1343, '612.12', 'Bangunan Penutup Sungai'),
(1344, '612.13', 'Jembatan'),
(1345, '612.2', 'Bangunan Pembawa'),
(1346, '612.21', 'Saluran'),
(1347, '612.211', 'Saluran Muka'),
(1348, '612.212', 'Saluran Pembawa Waduk'),
(1349, '612.213', 'Saluran Pembawa Sekunder'),
(1350, '612.22', 'Stasiun Pompa Pemasukan'),
(1351, '612.23', 'Bangunan Bagi'),
(1352, '612.24', 'Gorong-Gorong'),
(1353, '612.25', 'Syphon'),
(1354, '612.3', 'Bangunan Pembuang'),
(1355, '612.31', 'Stasiun Pompa Pembuang'),
(1356, '612.32', 'Saluran'),
(1357, '612.321', 'Saluran Pembuang Induk'),
(1358, '612.322', 'Saluran Pembuang Sekunder'),
(1359, '612.33', 'Pintu Air Pembuangan'),
(1360, '612.34', 'Gorong-Gorong Pembuangan'),
(1361, '612.35', 'Syphon Pembuangan'),
(1362, '612.4', 'Bangunan Lainnya'),
(1363, '612.41', 'Bangunan'),
(1364, '612.411', 'Bangunan Pengukur Air'),
(1365, '612.412', 'Bangunan Pengukur Curah Hujan'),
(1366, '612.413', 'Bangunan Gudang Stasiun Pompa'),
(1367, '612.414', 'Bangunan Listrik Stasiun Pompa'),
(1368, '612.42', 'Rumah Petugas Aksploitasi'),
(1369, '613', 'Pasang Surut'),
(1370, '613.1', 'Bangunan Pembawa'),
(1371, '613.11', 'Saluran'),
(1372, '613.111', 'Saluran Pembawa Induk'),
(1373, '613.112', 'Saluran Pembawa Sekunder'),
(1374, '613.113', 'Saluran Pembawa Tersier'),
(1375, '613.114', 'Saluran penyimpanan air'),
(1376, '613.12', 'Bangunan Pintu Pemasukan'),
(1377, '613.2', 'Bangunan Pembuang'),
(1378, '613.21', 'Saluran'),
(1379, '613.211', 'Saluran Pembuang Induk'),
(1380, '613.212', 'Saluran Pembuang Sekunder'),
(1381, '613.213', 'Saluran Pembuang Tersier'),
(1382, '613.214', 'Saluran Pengumpul Air'),
(1383, '613.22', 'Bangunan Pintu Pembuang'),
(1384, '613.3', 'Bangunan Lainnya'),
(1385, '613.31', 'Kolam Pasang'),
(1386, '613.32', 'Saluran'),
(1387, '613.321', 'Saluran Lalu Lintas'),
(1388, '613.322', 'Saluran Muka'),
(1389, '613.33', 'Bangunan'),
(1390, '613.331', 'Bangunan Penangkis Kotoran'),
(1391, '613.332', 'Bangunan Pengukur Muka Air'),
(1392, '613.333', 'Bangunan Pengukur Curah Hujan'),
(1393, '613.34', 'Jalan'),
(1394, '613.35', 'Jembatan'),
(1395, '614', 'Pengendalian Sungai'),
(1396, '614.1', 'Bangunan Pengaman'),
(1397, '614.11', 'Tanggul Banjir'),
(1398, '614.12', 'Pintu Pengatur Banjir'),
(1399, '614.13', 'Klep Pengatur Banjir'),
(1400, '614.14', 'Tembok Pengaman Talud'),
(1401, '614.15', 'Krib'),
(1402, '614.16', 'Kantung Lumpur'),
(1403, '614.17', 'Check-Dam'),
(1404, '614.18', 'Syphon'),
(1405, '614.2', 'Saluran Pengaman'),
(1406, '614.21', 'Saluran Banjir'),
(1407, '614.22', 'Saluran Drainage'),
(1408, '614.23', 'Corepure'),
(1409, '614.3', 'Bangunan Lainnya'),
(1410, '614.31', 'Warning System'),
(1411, '614.32', 'Stasiun'),
(1412, '614.321', 'Stasiun Pengukur Curah Hujan'),
(1413, '614.322', 'Stasiun Pengukur Air'),
(1414, '614.323', 'Stasiun Pengukur Cuaca'),
(1415, '614.324', 'Stasiun Pos Penjagaan'),
(1416, '615', 'Pengamanan Pantai'),
(1417, '615.1', 'Tanggul'),
(1418, '615.2', 'Krib'),
(1419, '615.3', 'Bangunan Lainnya'),
(1420, '616', 'Air Tanah'),
(1421, '616.1', 'Stasiun Pompa\\'),
(1422, '616.2', 'Bangunan Pembawa'),
(1423, '616.3', 'Bangunan Pembuang'),
(1424, '616.4', 'Bangunan Lainnya'),
(1425, '620', 'JALAN'),
(1426, '621', 'Jalan Kota'),
(1427, '621.1', 'Daerah Penguasaan'),
(1428, '621.11', 'Tanah'),
(1429, '621.12', 'Tanaman'),
(1430, '621.13', 'Bangunan'),
(1431, '621.2', 'Bangunan Sementara'),
(1432, '621.21', 'Jalan Sementara'),
(1433, '621.22', 'Jembatan Sementara'),
(1434, '621.23', 'Kantor Proyek'),
(1435, '621.24', 'Gedung Proyek'),
(1436, '621.25', 'Barak Kerja'),
(1437, '621.26', 'Laboratorium Lapangan'),
(1438, '621.27', 'Rumah'),
(1439, '621.3', 'Badan Jalan'),
(1440, '621.31', 'Pekerjaan Tanah (Earth Work)'),
(1441, '621.32', 'Stabilisasi'),
(1442, '621.4', 'Perkerasan'),
(1443, '621.41', 'Lapis Pondasi Bawah'),
(1444, '621.42', 'Lapis Pondasi'),
(1445, '621.43', 'Lapis Permukaan'),
(1446, '621.5', 'Drainage'),
(1447, '621.51', 'Parit Tanah'),
(1448, '621.52', 'Gorong-Gorong (Culvert)'),
(1449, '621.6', 'Buku Trotuir'),
(1450, '621.61', 'Tanah'),
(1451, '621.62', 'Perkerasan'),
(1452, '621.63', 'Pasangan'),
(1453, '621.7', 'Median'),
(1454, '621.71', 'Tanah'),
(1455, '621.72', 'Tanaman'),
(1456, '621.73', 'Perkerasan'),
(1457, '621.74', 'Pasangan'),
(1458, '621.8', 'Daerah Samping'),
(1459, '621.82', 'Tanaman'),
(1460, '621.83', 'Pagar'),
(1461, '621.9', 'Bangunan Pelengkap Dan Pengamanan'),
(1462, '621.91', 'Rambu-Rambu/Tanda-Tanda Lalu Lintas'),
(1463, '621.92', 'Lampu Penerangan'),
(1464, '621.93', 'Lampu Pengatur Lalu Lintas'),
(1465, '621.94', 'Patok-Patok KM'),
(1466, '621.95', 'Patok-Patok ROW (Sempadan)'),
(1467, '621.96', 'Rel Pengamanan'),
(1468, '621.97', 'Pagar'),
(1469, '621.98', 'Turap Penahan'),
(1470, '621.99', 'Bronjong'),
(1471, '622', 'Jalan Luar Kota'),
(1472, '622.1', 'Daerah Penguasaan'),
(1473, '622.11', 'Tanah'),
(1474, '622.12', 'Tanaman'),
(1475, '622.13', 'Bangunan'),
(1476, '622.2', 'Bangunan Sementara'),
(1477, '622.21', 'Jalan Sementara'),
(1478, '622.22', 'Jembatan Sementara'),
(1479, '622.23', 'Kantor Proyek'),
(1480, '622.24', 'Gudang Proyek'),
(1481, '622.25', 'Barak Kerja'),
(1482, '622.26', 'Laboratorium Lapangan'),
(1483, '622.27', 'Rumah'),
(1484, '622.3', 'Badan Jalan'),
(1485, '622.31', 'Pekerjaan Tanah (Earth Work)'),
(1486, '622.32', 'Stabilisasi'),
(1487, '622.4', 'Perkerasan'),
(1488, '622.41', 'Lapis Pondasi Bawah'),
(1489, '622.42', 'Lapis Pondasi'),
(1490, '622.43', 'Lapis Permukaan'),
(1491, '622.5', 'Drainage'),
(1492, '622.51', 'Parit'),
(1493, '622.52', 'Gorong-Gorong (Culvert)'),
(1494, '622.53', 'Sub Drainage'),
(1495, '622.6', 'Trotoar'),
(1496, '622.61', 'Tanah'),
(1497, '622.62', 'Perkerasan'),
(1498, '622.7', 'Median'),
(1499, '622.71', 'Tanah'),
(1500, '622.72', 'Tanaman'),
(1501, '622.73', 'Perkerasan'),
(1502, '622.74', 'Pasangan'),
(1503, '622.8', 'Daerah Samping'),
(1504, '622.81', 'Tanaman'),
(1505, '622.82', 'Pagar'),
(1506, '622.9', 'Bangunan Pelengkap Dan Pengamanan'),
(1507, '622.91', 'Rambu-Rambu/Tanda-Tanda Lalu Lintas'),
(1508, '622.92', 'Lampu Penerangan'),
(1509, '622.93', 'Lampu Pengatur Lalu Lintas'),
(1510, '622.94', 'Patok-Patok KM'),
(1511, '622.95', 'Patok-Patok ROW (Sempadan)'),
(1512, '622.96', 'Rel Pengamanan'),
(1513, '622.97', 'Pagar'),
(1514, '622.98', 'Turap Penahan'),
(1515, '622.99', 'Bronjong'),
(1516, '630', 'JEMBATAN'),
(1517, '631', 'Jembatan Pada Jalan Kota'),
(1518, '631.1', 'Daerah Penguasaan'),
(1519, '631.11', 'Tanah'),
(1520, '631.12', 'Tanaman'),
(1521, '631.13', 'Bangunan'),
(1522, '631.2', 'Bangunan Sementara'),
(1523, '631.21', 'Jalan Sementara'),
(1524, '631.22', 'Jembatan Sementara'),
(1525, '631.23', 'Kantor Proyek'),
(1526, '631.24', 'Gudang Proyek'),
(1527, '631.25', 'Barak Kerja'),
(1528, '631.26', 'Laboratorium Lapangan'),
(1529, '631.27', 'Rumah'),
(1530, '631.3', 'Pekerjaan Tanah (Earth Work)'),
(1531, '631.31', 'Galian Tanah'),
(1532, '631.32', 'Timbunan Tanah'),
(1533, '631.4', 'Pondasi'),
(1534, '631.41', 'Pondasi Kepala Jalan'),
(1535, '631.42', 'Pondasi Pilar'),
(1536, '631.43', 'Angker'),
(1537, '631.5', 'Bangunan Bawah'),
(1538, '631.51', 'Kepala Jembatan'),
(1539, '631.52', 'Pilar'),
(1540, '631.53', 'Piloon'),
(1541, '631.54', 'Landasan'),
(1542, '631.6', 'Bangunan'),
(1543, '631.61', 'Gelagar'),
(1544, '631.62', 'Lantai'),
(1545, '631.63', 'Perkerasan'),
(1546, '631.64', 'Jalan Orang / Trotoar'),
(1547, '631.65', 'Sandaran'),
(1548, '631.66', 'Talang air'),
(1549, '631.7', 'Bangunan / Pengaman'),
(1550, '631.71', 'Turap Penahan'),
(1551, '631.72', 'Bronjong'),
(1552, '631.74', 'Kist Dam'),
(1553, '631.75', 'Corepure'),
(1554, '631.76', 'Krib'),
(1555, '631.8', 'Bangunan Pelengkap'),
(1556, '631.81', 'Rambu-Rambu/Tanda-Tanda Lalu Lintas'),
(1557, '631.82', 'Lampu Penerangan'),
(1558, '631.83', 'Lampu Pengatur Lalu Lintas'),
(1559, '631.84', 'Patok Pengaman'),
(1560, '631.85', 'Patok ROW (Sempadan)'),
(1561, '631.86', 'Pagar'),
(1562, '631.9', 'Oprit'),
(1563, '631.91', 'Badan'),
(1564, '631.92', 'Perkerasan'),
(1565, '631.93', 'Drainage'),
(1566, '631.94', 'Baku'),
(1567, '631.95', 'Median'),
(1568, '632', 'Jembatan Pada Jalan Luar Kota'),
(1569, '632.1', 'Daerah Penguasaan'),
(1570, '632.11', 'Tanah'),
(1571, '632.12', 'Tanaman'),
(1572, '632.13', 'Bangunan'),
(1573, '632.2', 'Bangunan Sementara'),
(1574, '632.21', 'Jalan Sementara'),
(1575, '632.22', 'Jembatan Sementara'),
(1576, '632.23', 'Kantor Proyek'),
(1577, '632.24', 'Gudang Proyek'),
(1578, '632.25', 'Barak Kerja'),
(1579, '632.26', 'Laboratorium Lapangan'),
(1580, '632.27', 'Rumah'),
(1581, '632.3', 'Pekerjaan Tanah (Earth Work)'),
(1582, '632.31', 'Galian Tanah'),
(1583, '632.32', 'Timnunan Tanah'),
(1584, '632.4', 'Pondasi'),
(1585, '632.41', 'Pondasi Kepala Jembatan'),
(1586, '632.42', 'Pondasi Pilar'),
(1587, '632.43', 'Pondasi Angker'),
(1588, '632.5', 'Bangunan Bawah'),
(1589, '632.51', 'Kepala Jembatan'),
(1590, '632.52', 'Pilar'),
(1591, '632.53', 'Piloon'),
(1592, '632.54', 'Landasan'),
(1593, '632.6', 'Bangunan Atas'),
(1594, '632.61', 'Gelagar'),
(1595, '632.62', 'Lantai'),
(1596, '632.63', 'Perkerasan'),
(1597, '632.64', 'Jalan Orang / Trotoar'),
(1598, '632.65', 'Sandaran'),
(1599, '632.66', 'Talang Air'),
(1600, '632.7', 'Bangunan Pengaman'),
(1601, '632.71', 'Turap / Penahan'),
(1602, '632.72', 'Bronjong'),
(1603, '632.73', 'Stek Dam'),
(1604, '632.74', 'Kist Dam'),
(1605, '632.75', 'Corepure'),
(1606, '632.76', 'Krib'),
(1607, '632.8', 'Bangunan Pelengkap'),
(1608, '632.81', 'Rambu-Rambu/Tanda-Tanda Lalu Lintas'),
(1609, '632.82', 'Lampu Penerangan'),
(1610, '632.83', 'Lampu Pengatur Lalu Lintas'),
(1611, '632.84', 'Patok Pengaman'),
(1612, '632.85', 'Patok ROW (Sempadan)'),
(1613, '632.86', 'Pagar'),
(1614, '632.9', 'Oprit'),
(1615, '632.91', 'Badan'),
(1616, '632.92', 'Perkerasan'),
(1617, '632.93', 'Drainage'),
(1618, '632.94', 'Baku'),
(1619, '632.95', 'Median'),
(1620, '640', 'BANGUNAN'),
(1621, '640.1', 'Gedung Pengadilan'),
(1622, '640.2', 'Rumah Pejabat Negara'),
(1623, '640.3', 'Gedung DPR'),
(1624, '640.4', 'Gedung Balai Kota'),
(1625, '640.5', 'Penjara'),
(1626, '640.6', 'Perkantoran'),
(1627, '642', 'Bangunan Pendidikan'),
(1628, '642.1', 'Taman Kanak-Kanak'),
(1629, '642.2', 'SD & SEKOLAH MENENGAH'),
(1630, '642.3', 'Perguruan Tinggi'),
(1631, '643', 'Bangunan Rekreasi'),
(1632, '643.1', 'BANGUNAN OLAH RAGA'),
(1633, '643.2', 'Gedung Kesenian'),
(1634, '643.3', 'Gedung Pemancar'),
(1635, '644', 'Bangunan Perdagangan'),
(1636, '644.1', 'Pusat Perbelanjaan'),
(1637, '644.2', 'Gedung Perdagangan'),
(1638, '644.3', 'Bank'),
(1639, '644.4', 'Pekantoran'),
(1640, '645', 'Bangunan Pelayanan Umum'),
(1641, '645.1', 'MCK'),
(1642, '645.2', 'Gedung Parkir'),
(1643, '645.3', 'Rumah Sakit'),
(1644, '645.4', 'Gedung Telkom'),
(1645, '645.5', 'Terminal Angkutan udara'),
(1646, '645.6', 'Terminal Angkutan udara'),
(1647, '645.7', 'Terminal Angkutan Darat'),
(1648, '645.8', 'Bangunan Keagamaan'),
(1649, '646', 'Bangunan Peninggalan Sejarah'),
(1650, '646.1', 'Monumen'),
(1651, '646.2', 'Candi'),
(1652, '646.3', 'Keraton'),
(1653, '646.4', 'Rumah Tradisional'),
(1654, '647', 'Bangunan Industri'),
(1655, '648', 'Bangunan Tempat Tinggal'),
(1656, '648.1', 'Rumah Perkotaan'),
(1657, '648.11', 'Inti / Sederhana'),
(1658, '648.12', 'Sedang / Mewah'),
(1659, '648.2', 'Rumah Pedesaan'),
(1660, '648.21', 'Rumah Contoh'),
(1661, '648.3', 'Real Estate'),
(1662, '648.4', 'Bapetarum'),
(1663, '649', 'Elemen Bangunan'),
(1664, '649.1', 'Pondasi'),
(1665, '649.11', 'Di Atas Tiang'),
(1666, '649.2', 'Dinding'),
(1667, '649.21', 'Penahan Beban'),
(1668, '649.22', 'Tidak Menahan Beban'),
(1669, '649.3', 'Atap'),
(1670, '649.4', 'Lantai / Langit-Langit'),
(1671, '649.41', 'Supended'),
(1672, '649.42', 'Solit'),
(1673, '649.5', 'Pintu / Jendela'),
(1674, '649.51', 'Pintu Harmonik'),
(1675, '649.52', 'Pintu Biasa'),
(1676, '649.53', 'Pintu Sorong'),
(1677, '649.54', 'Pintu Kayu'),
(1678, '649.55', 'Jendela Sorong'),
(1679, '649.56', 'Jendela Vertikal'),
(1680, '650', 'TATA KOTA'),
(1681, '651', 'Daerah Perdagangan / Pelabuhan'),
(1682, '651.1', 'Daerah Pusat Perbelanjaan'),
(1683, '651.2', 'Daerah Perkotaan'),
(1684, '652', 'Daerah Pemerintah'),
(1685, '653', 'Daerah Perumahan'),
(1686, '653.1', 'Kepadatan Rendah'),
(1687, '653.2', 'Kepadatan Tinggi'),
(1688, '654', 'Daerah Industri'),
(1689, '654.1', 'Industri Berat'),
(1690, '654.2', 'Industri Ringan'),
(1691, '654.3', 'Industri Ringan (Home Industry)'),
(1692, '655', 'Daerah Rekreasi'),
(1693, '655.1', 'Public Garden'),
(1694, '655.2', 'Sport & Playing Fields'),
(1695, '655.3', 'Open Space'),
(1696, '656', 'Transportasi (Tata Letak)'),
(1697, '656.1', 'Jaringan Jalan'),
(1698, '656.11', 'Penerangan Jalan'),
(1699, '656.2', 'Jaringan Kereta Api'),
(1700, '656.3', 'Jaringan Sungai'),
(1701, '657', 'Assaineering'),
(1702, '657.1', 'Saluran Pengumpulan'),
(1703, '657.2', 'Instalasi Pengolahan'),
(1704, '657.21', 'Bangunan'),
(1705, '657.211', 'Bangunan Penyaringan'),
(1706, '657.212', 'Bangunan Penghancur Kotoran / Sampah'),
(1707, '657.213', 'Bangunan Pengendap'),
(1708, '657.214', 'Bangunan Pengering Lumpur'),
(1709, '657.22', 'Unit Densifektan'),
(1710, '657.23', 'Unit Perpompaan'),
(1711, '658', 'Kesehatan Lingkungan'),
(1712, '658.1', 'Persampahan'),
(1713, '658.11', 'Bangunan Pengumpul'),
(1714, '658.12', 'Bangunan Pemusnahan'),
(1715, '658.2', 'Pengotoran Udara'),
(1716, '658.3', 'pengotoran Air'),
(1717, '658.31', 'Air Buangan Industri Limbah'),
(1718, '658.4', 'Kegaduhan'),
(1719, '658.5', 'Kebersihan Kota'),
(1720, '660', 'TATA LINGKUNGAN'),
(1721, '660.1', 'Persampahan'),
(1722, '660.2', 'Kebersihan Lingkungan'),
(1723, '660.3', 'Pencemaran'),
(1724, '660.31', 'Pecemaran Air'),
(1725, '660.32', 'Pencemaran Udara'),
(1726, '661', 'Daerah Hutan'),
(1727, '662', 'Daerah Pertanian'),
(1728, '663', 'Daerah Pemikiman'),
(1729, '664', 'Pusat Pertumbuhan'),
(1730, '665', 'Transportasi'),
(1731, '665.1', 'Jaringan Jalan'),
(1732, '665.2', 'Jaringan Kereta Api'),
(1733, '665.3', 'Jaringan Sungai'),
(1734, '670', 'KETENAGAAN'),
(1735, '671', 'Listrik'),
(1736, '671.1', 'Kelistrikan'),
(1737, '671.11', 'Kelisrikan PLN'),
(1738, '671.12', 'Kelistrikan Non PLN'),
(1739, '671.2', 'Pembangkit Tenaga Listrik'),
(1740, '671.21', 'PLTA  (Pembangkit  Listrik Tenaga Air)'),
(1741, '671.22', 'PLTD  (Pembangkit Listrik Tenaga Diesel)'),
(1742, '671.23', 'PLTG P (Pembangkit Listrik Tenaga Gas)'),
(1743, '671.24', 'PLTM (Pembangkit  Listrik Tenaga Matahari)'),
(1744, '671.25', 'PLTN (Pembangkit Listrik Tenaga Nuklir)'),
(1745, '671.26', 'PLTPB (Pembangkit Listrik Tenaga Uap)'),
(1746, '671.3', 'Transmisi Tenaga Listrik'),
(1747, '671.31', 'Gardu Induk/Gardu Penghubung/Gardu Trafo'),
(1748, '671.32', 'Saluran Udara Tegangan Tinggi'),
(1749, '671.33', 'Kabel Bawah Tanah'),
(1750, '671.4', 'Distribusi Tenaga Listrik'),
(1751, '671.41', 'Gardu Distribusi'),
(1752, '671.42', 'Tegangan Rendah'),
(1753, '671.43', 'Tegangan Menengah'),
(1754, '671.44', 'Jaringan Bawah Tanah'),
(1755, '671.5', 'Pengusahaan Listrik'),
(1756, '671.51', 'Sambungan Listrik'),
(1757, '671.52', 'Penjualan Tenaga Listrik'),
(1758, '671.53', 'Tarif Listrik'),
(1759, '672', 'Tenaga Air'),
(1760, '673', 'Tenaga Minyak'),
(1761, '674', 'Tenaga Gas'),
(1762, '675', 'Tenaga Matahari'),
(1763, '676', 'Tenaga Nuklir'),
(1764, '677', 'Tenaga Panas Bumi'),
(1765, '678', 'Tenaga Uap'),
(1766, '679', 'Tenaga Lainya'),
(1767, '680', 'PERALATAN'),
(1768, '690', 'AIR MINUM'),
(1769, '691', 'Intake'),
(1770, '691.1', 'Broncaptering'),
(1771, '691.2', 'Sumur'),
(1772, '691.3', 'Bendungan'),
(1773, '691.4', 'Saringan (screen)'),
(1774, '691.5', 'Pintu air'),
(1775, '691.6', 'Saluran Pembawa'),
(1776, '691.7', 'Alat Ukur'),
(1777, '691.8', 'Perpompaan'),
(1778, '692', 'Transmisi Air Baku'),
(1779, '692.1', 'Perpipaan'),
(1780, '692.2', 'Katup Udara (Air Relief)'),
(1781, '692.3', 'Katup Penguras (Blow Off)'),
(1782, '692.4', 'Bak Pelepas Tekanan'),
(1783, '692.5', 'Jembatan Pipa'),
(1784, '692.6', 'Syphon'),
(1785, '693', 'Instalasi Pengelolaan'),
(1786, '693.1', 'Bangunan Ukur'),
(1787, '693.2', 'Bangunan Aerasi'),
(1788, '693.3', 'Bangunan Pengendapan'),
(1789, '693.4', 'Bangunan Pembubuh Bahan Kimia'),
(1790, '693.5', 'Bangunan Pengaduk'),
(1791, '693.6', 'Bangunan Saringan'),
(1792, '693.7', 'Perpompaan'),
(1793, '693.8', 'Clear Hell'),
(1794, '694', 'Distribusi'),
(1795, '694.1', 'Reservoir Menara Bawah Tanah'),
(1796, '694.11', 'Menara'),
(1797, '694.12', 'reservoir di Bawah Tanah'),
(1798, '694.2', 'Perpipaan'),
(1799, '694.3', 'Perpompaan'),
(1800, '694.4', 'Jembatan Pipa'),
(1801, '694.5', 'Syphon'),
(1802, '694.6', 'Hydran'),
(1803, '694.61', 'Hydran Umum'),
(1804, '694.62', 'Hydran Kebakaran'),
(1805, '694.7', 'Katup'),
(1806, '694.71', 'Katup Udara (Air Relief)'),
(1807, '694.72', 'Katup Pelepas (Blow Off)'),
(1808, '694.8', 'Bak Pelepas Tekanan'),
(1809, '700', 'PENGAWASAN'),
(1810, '701', 'Bidang Urusan Dalam'),
(1811, '702', 'Bidang Peralatan'),
(1812, '703', 'Bidang Kekayaan Daerah'),
(1813, '704', 'Bidang Perpustakaan / Dokumentasi / Kearsipan Sandi'),
(1814, '705', 'Bidang Perencanaan'),
(1815, '706', 'Bidang Organisasi / Ketatalaksanaan'),
(1816, '707', 'Bidang Penelitian'),
(1817, '708', 'Bidang Konferensi'),
(1818, '709', 'Bidang Perjalanan Dinas'),
(1819, '710', 'BIDANG PEMERINTAHAN'),
(1820, '711', 'Bidang Pemerintahan Pusat'),
(1821, '712', 'Bidang Pemerintahan Provinsi'),
(1822, '713', 'Bidang Pemerintahan Kabupaten / Kota'),
(1823, '714', 'Bidang Pemerintahan Desa'),
(1824, '715', 'Bidang MPR / DPR'),
(1825, '716', 'Bidang DPRD Provinsi'),
(1826, '717', 'Bidang DPRD Kabupaten / Kota'),
(1827, '718', 'Bidang Hukum'),
(1828, '719', 'Bidang Hubungan Luar Negeri'),
(1829, '720', 'BIDANG POLITIK'),
(1830, '721', 'Bidang Kepartaian'),
(1831, '722', 'Bidang Organisasi Kemasyarakatan'),
(1832, '723', 'Bidang Organisasi Profesi Dan Fungsional'),
(1833, '724', 'Bidang Organisasi Pemuda'),
(1834, '725', 'Bidang Organisasi Buruh, Tani, Dan Nelayan'),
(1835, '726', 'Bidang Organisasi Wanita'),
(1836, '727', 'Bidang Pemilihan Umum'),
(1837, '730', 'BIDANG KEAMANAN/KETERTIBAN'),
(1838, '731', 'Bidang Pertahanan'),
(1839, '732', 'Bidang Kemiliteran'),
(1840, '733', 'Bidang Perlindungan Masyarakat'),
(1841, '734', 'Bidang Kemanan'),
(1842, '735', 'bidang Kejahatan'),
(1843, '736', 'Bidang Bencana'),
(1844, '737', 'Bidang Kecelakaan'),
(1845, '740', 'BIDANG KESEJAHTERAAN RAKYAT'),
(1846, '741', 'Bidang Pembagunan Desa'),
(1847, '742', 'Bidang Pendidikan'),
(1848, '743', 'Bidang Kebudayaan'),
(1849, '744', 'Bidang Kesehatan'),
(1850, '745', 'Bidang Agama'),
(1851, '746', 'Bidang Sosial'),
(1852, '747', 'Bidang Kependudukan'),
(1853, '748', 'Bidang Media Massa'),
(1854, '750', 'BIDANG PEREKONOMIAN'),
(1855, '751', 'Bidang Perdagangan'),
(1856, '752', 'Bidang Pertanian'),
(1857, '753', 'Bidang Perindustrian'),
(1858, '754', 'Bidang Pertambangan / Kesamudraan'),
(1859, '755', 'Bidang Perhubungan'),
(1860, '756', 'Bidang Tenaga Kerja'),
(1861, '757', 'Bidang Permodalan'),
(1862, '758', 'Bidang Perbankan / Moneter'),
(1863, '759', 'Bidang Agraria'),
(1864, '760', 'BIDANG PEKERJAAN UMUM'),
(1865, '761', 'Bidang Pengairan'),
(1866, '762', 'Bidang Jalan'),
(1867, '763', 'Bidang Jembatan'),
(1868, '764', 'Bidang Bangunan'),
(1869, '765', 'Bidang Tata Kota'),
(1870, '766', 'Bidang Lingkungan'),
(1871, '767', 'Bidang Ketenagaan'),
(1872, '768', 'Bidang Peralatan'),
(1873, '769', 'Bidang Air Minum'),
(1874, '780', 'BIDANG KEPEGAWAIAN'),
(1875, '781', 'Bidang Pengadaan Pegawai'),
(1876, '782', 'Bidang Mutasi Pegawai'),
(1877, '783', 'Bidang Kedudukan Pegawai'),
(1878, '784', 'Bidang Kesejahteran Pegawai'),
(1879, '785', 'Bidang Cuti'),
(1880, '786', 'Bidang Penilaian'),
(1881, '787', 'Bidang Tata Usaha Kepegawaian'),
(1882, '788', 'Bidang Pemberhentian Pegawai'),
(1883, '789', 'Bidang Pendidikan Pegawai'),
(1884, '790', 'BIDANG KEUANGAN'),
(1885, '791', 'Bidang Anggaran'),
(1886, '792', 'Bidang Otorisasi'),
(1887, '793', 'Bidang Verifikasi'),
(1888, '794', 'Bidang Pembukuan'),
(1889, '795', 'Bidang Perbendaharaan'),
(1890, '796', 'Bidang Pembina Kebendaharaan'),
(1891, '797', 'Bidang Pendapatan'),
(1892, '799', 'Bidang Bendaharaan'),
(1893, '800', 'KEPEGAWAIAN'),
(1894, '800.1', 'Perencanaan'),
(1895, '800.2', 'Penelitian'),
(1896, '800.043', 'Pengaduan'),
(1897, '800.05', 'Tim'),
(1898, '800.07', 'Statistik'),
(1899, '800.08', 'Peraturan Perundang-Undangan'),
(1900, '810', 'PENGADAAN'),
(1901, '811', 'Lamaran'),
(1902, '811.1', 'Testing'),
(1903, '811.2', 'Screening'),
(1904, '811.3', 'Panggilan'),
(1905, '812', 'Pengujian Kesehatan'),
(1906, '813', 'Pengangkatan Calon Pegawai'),
(1907, '813.1', 'Pengangkatan Calon Pegawai Golongan 1'),
(1908, '813.2', 'Pengangkatan Calon Pegawai Golongan II'),
(1909, '813.3', 'Pengangkatan Calon Pegawai Golongan III'),
(1910, '813.4', 'Pengangkatan Calon Pegawai Golongan IV'),
(1911, '813.5', 'Pengangkatan Calon Guru Inpres'),
(1912, '814', 'Pengangkatan Tenaga Lepas'),
(1913, '814.1', 'Pengangkatan Tenaga Bulanan / Tenaga Kontrak'),
(1914, '814.2', 'Pengangkatan Tenaga Harian'),
(1915, '814.3', 'Pengangkatan Tenaga Pensiunan'),
(1916, '820', 'MUTASI'),
(1917, '821', 'Pengangkatan'),
(1918, '821.1', 'Pengangkatan Menjadi Pegawai Negeri Tetap'),
(1919, '821.11', 'Pengangkatan Menjadi Pegawai Negeri Golongan 1'),
(1920, '821.12', 'Pengangkatan Menjadi Pegawai Negeri Golongan 2'),
(1921, '821.13', 'Pengangkatan Menjadi Pegawai Negeri Golongan 3'),
(1922, '821.14', 'Pengangkatan Menjadi Pegawai Negeri Golongan 4'),
(1923, '821.15', 'Pengangkatan Menjadi Pegawai Negeri Sipil Yang Cuti Di Luar Tanggungan Negara'),
(1924, '821.2', 'Pengangkatan Dalam Jabatan, Pembebasan Dari Jabatan, Berita Acara Serah Terima Jabatan'),
(1925, '821.21', 'Sekjen/Dirjen/Irjen/Kabag'),
(1926, '821.22', 'Kepala Biro/Direktur/Inspektur/Kepala Pusat/Sekretaris/Kepala Dinas/Asisten Sekwilda'),
(1927, '821.23', 'Kepala Bagian/Kepala Sub Direktorat/Kepala Bidang/Inspektur Pembantu'),
(1928, '821.24', 'Kepala Subbagian/Kepala Seksi/Kepala Sub Bidang/Pemeriksa'),
(1929, '821.25', 'Residen/Pembantu Gubernur'),
(1930, '821.26', 'Wedana/Pembantu Bupati'),
(1931, '821.27', 'Camat'),
(1932, '821.28', 'Lurah Administratif (Lurah Desa)'),
(1933, '821.29', 'Jabatan Lainnya'),
(1934, '822', 'Kenaikan Gaji Berkala'),
(1935, '822.1', 'Pegawai Golongan 1'),
(1936, '822.2', 'Pegawai Golongan 2'),
(1937, '822.3', 'Pegawai Golongan 3'),
(1938, '822.4', 'Pegawai Golongan 4'),
(1939, '823', 'Kenaikan Pangkat / Pengangkatan'),
(1940, '823.1', 'Pegawai Golongan 1'),
(1941, '823.2', 'Pegawai Golongan 2'),
(1942, '823.3', 'Pegawai Golongan 3'),
(1943, '823.4', 'Pegawai Golongan 4'),
(1944, '824', 'Pemindahan / Pelimpahan / Perbantuan'),
(1945, '824.1', 'Pegawai Golongan 1'),
(1946, '824.2', 'Pegawai Golongan 2'),
(1947, '824.3', 'Pegawai Golongan 3'),
(1948, '824.4', 'Pegawai Golongan 4'),
(1949, '824.5', 'Lolos Butuh'),
(1950, '824.6', 'Kurikulum dan Silabi'),
(1951, '824.7', 'Proposal (TOR)'),
(1952, '825', 'Datasering dan Penempatan Kembali'),
(1953, '826', 'Penunjukan Tugas Belajar'),
(1954, '826.1', 'Dalam Negeri'),
(1955, '826.2', 'Luar Negeri'),
(1956, '826.3', 'Tunjangan Belajar'),
(1957, '826.4', 'Penempatan Kembali'),
(1958, '827', 'Wajib Militer'),
(1959, '828', 'Mutasi Dengan Instansi Lain'),
(1960, '829', '-'),
(1961, '830', 'KEDUDUKAN'),
(1962, '831', 'Perhitungan Masa Kerja'),
(1963, '832', 'Penyesuaian Pangkat / Gaji'),
(1964, '832.1', 'Pegawai Golongan 1'),
(1965, '832.2', 'Pegawai Golongan 2'),
(1966, '832.3', 'Pegawai Golongan 3'),
(1967, '832.4', 'Pegawai Golongan 4'),
(1968, '833', 'Penghargaan Ijazah / Penyesuaian'),
(1969, '834', 'Jenjang Pangkat / Eselonering'),
(1970, '840', 'KESEJAHTERAAN PEGAWAI'),
(1971, '841', 'Tunjangan'),
(1972, '841.1', 'Jabatan'),
(1973, '841.2', 'Kehormatan'),
(1974, '841.3', 'Kematian/Uang Duka'),
(1975, '841.4', 'Tunjangan Hari Raya'),
(1976, '841.5', 'Perjalanan Dinas Tetap/Cuti/Pindah'),
(1977, '841.6', 'Keluarga'),
(1978, '841.7', 'Sandang, Pangan, Papan (Bapertarum)'),
(1979, '842', 'Dana'),
(1980, '842.1', 'Taspen'),
(1981, '842.2', 'Kesehatan'),
(1982, '842.3', 'Asuransi'),
(1983, '843', 'Perawatan Kesehatan'),
(1984, '843.1', 'Poliklinik'),
(1985, '843.2', 'Perawatan Dokter'),
(1986, '843.3', 'Obat-Obatan'),
(1987, '843.4', 'Keluarga Berencana'),
(1988, '844', 'Koperasi / Distribusi'),
(1989, '844.1', 'Distribusi Pangan'),
(1990, '844.2', 'Distribusi Sandang'),
(1991, '844.3', 'Distribusi Papan'),
(1992, '845', 'Perumahan/Tanah'),
(1993, '845.1', 'Perumahan Pegawai'),
(1994, '845.2', 'Tanah Kapling'),
(1995, '845.3', 'Losmen/Hotel'),
(1996, '846', 'Bantuan Sosial'),
(1997, '846.1', 'Bantuan Kebakaran'),
(1998, '846.2', 'Bantuan Kebanjiran'),
(1999, '850', 'CUTI Meliputi Cuti Tahunan, Cuti Besar, Cuti Sakit, Cuti Hamil, Cuti Naik Haji, Cuti'),
(2000, '851', 'Cuti Tahunan'),
(2001, '852', 'Cuti Besar'),
(2002, '853', 'Cuti Sakit'),
(2003, '854', 'Cuti Hamil'),
(2004, '855', 'Cuti Naik Haji/Umroh'),
(2005, '856', 'Cuti Di Luar Tangungan Neagara'),
(2006, '857', 'Cuti Alasan Lain/Alasan Penting'),
(2007, '860', 'PENILAIAN'),
(2008, '861', 'Penghargaan'),
(2009, '861.1', 'Bintang/Satyalencana'),
(2010, '861.2', 'Kenaikan Pangkat Anumerta'),
(2011, '861.3', 'Kenaikan Gaji Istimewa'),
(2012, '861.4', 'Hadiah Berupa Uang'),
(2013, '861.5', 'Pegawai Teladan'),
(2014, '862', 'Hukuman'),
(2015, '862.1', 'Teguran Peringatan'),
(2016, '862.2', 'Penundaan Kenaikan Gaji'),
(2017, '862.3', 'Penurunan Pangkat'),
(2018, '862.4', 'Pemindahan'),
(2019, '863', 'Konduite, DP3, Disiplin Pegawai'),
(2020, '864', 'Ujian Dinas'),
(2021, '864.1', 'Tingkat 1'),
(2022, '864.2', 'Tingkat 2'),
(2023, '864.3', 'Tingkat 3'),
(2024, '865', 'Penilaian Kehidupan Pegawai Negeri'),
(2025, '866', 'Rehabilitasi / Pengaktifan Kembali'),
(2026, '870', 'TATA USAHA KEPEGAWAIAN'),
(2027, '871', 'Formasi'),
(2028, '872', 'Bezetting/Daftar Urut Kepegawaian'),
(2029, '873', 'Registrasi'),
(2030, '873.1', 'NIP'),
(2031, '873.2', 'KARPEG'),
(2032, '873.3', 'Legitiminasi/Tanda Pengenal'),
(2033, '873.4', 'Daftar Keluarga, Perkawinan, Perceraian, Karis, Karsu'),
(2034, '874', 'Daftar Riwayat Pekerjaan'),
(2035, '874.1', 'Tanggal Lahir'),
(2036, '874.2', 'Penggantian Nama'),
(2037, '874.3', 'Izin kepartaian Organisasi'),
(2038, '875', 'Kewenangan Mutasi Pegawai'),
(2039, '875.1', 'Pelimpahan Wewenang'),
(2040, '875.2', 'Specimen Tanda Tangan'),
(2041, '876', 'Penggajian'),
(2042, '876.1', 'SKPP'),
(2043, '877', 'Sumpah/Janji'),
(2044, '878', 'Korps Pegawai'),
(2045, '880', 'PEMBERHENTIAN PEGAWAI'),
(2046, '881', 'Permintaan Sendiri'),
(2047, '882', 'Dengan Hak Pensiun'),
(2048, '882.1', 'Pemberhentian Dengan Hak Pensiun Pegawai Negeri Golongan 1'),
(2049, '882.2', 'Pemberhentian Dengan Hak Pensiun Pegawai Negeri Golongan 2'),
(2050, '882.3', 'Pemberhentian Dengan Hak Pensiun Pegawai Negeri Golongan 3'),
(2051, '882.4', 'Pemberhentian Dengan Hak Pensiun Pegawai Negeri Golongan 4'),
(2052, '882.5', 'Pensiun Janda / Duda'),
(2053, '882.6', 'Pensiun Yatim Piatu'),
(2054, '882.7', 'Uang Muka Pensiun'),
(2055, '883', 'Karena Meninggal'),
(2056, '883.1', 'Karena Meninggal Dalam Tugas'),
(2057, '884', 'Alasan Lain'),
(2058, '885', 'Uang Pesangon'),
(2059, '886', 'Uang Tunggu'),
(2060, '887', 'Untuk Sementara Waktu'),
(2061, '888', 'Tidak Dengan Hormat'),
(2062, '890', 'PENDIDIKAN PEGAWAI'),
(2063, '891', 'Perencanaan'),
(2064, '891.1', 'Program'),
(2065, '891.2', 'Kurikulum dan Silabi'),
(2066, '891.3', 'Proposal ( TOR )'),
(2067, '892', 'Pendidikan _Egular / Kader'),
(2068, '892.1', 'IPDN / APDN'),
(2069, '892.2', 'Kursus-Kursus Reguler'),
(2070, '893', 'Pendidikan dan Pelatihan / Non Reguler'),
(2071, '893.1', 'LEMHANAS'),
(2072, '893.2', 'Pendidikan dan Pelatihan Struktural, SPATI, SPAMEN, SPAMA, ADUMLA, ADUM'),
(2073, '893.3', 'Kursus-Kursus / Penataran'),
(2074, '893.4', 'Diklat Tehnik, Fungsional Dan Manajemen Pemerintahan'),
(2075, '893.5', 'Diklat Lainnya'),
(2076, '894', 'Pendidikan Luar Negeri'),
(2077, '894.1', 'Berkesinambungan / Berkala / Bergelar'),
(2078, '894.2', 'Non Gelar / Diploma'),
(2079, '895', 'Metode'),
(2080, '895.1', 'Kuliah'),
(2081, '895.2', 'Ceramah, Simposium'),
(2082, '895.3', 'Diskusi, Raker, Seminar, Lokakarya, Orientasi'),
(2083, '895.4', 'Studi Lapangan, Kkn, Widyawisata'),
(2084, '895.5', 'Tanya Jawab / Sylabi / Modul / Kursil'),
(2085, '895.7', 'Penugasan'),
(2086, '895.8', 'Gladi'),
(2087, '896', 'Tenaga Pengajar / Widyaiswara/Narasumber'),
(2088, '896.1', 'Moderator'),
(2089, '897', 'Administrasi Pendidikan'),
(2090, '897.1', 'Tahun Pelajaran'),
(2091, '897.2', 'Persyaratan, Pendaftaran, Testing, Ujian'),
(2092, '897.3', 'STTP'),
(2093, '897.4', 'Penilaian Angka Kredit'),
(2094, '897.5', 'Laporan Pendidikan Dan Pelatihan'),
(2095, '898', 'Fasilitas Belajar'),
(2096, '898.1', 'Tunjangan Belajar'),
(2097, '898.2', 'Asrama'),
(2098, '898.3', 'Uang Makan'),
(2099, '898.4', 'Uang Transport'),
(2100, '898.5', 'Uang Buku'),
(2101, '898.6', 'Uang Ujian'),
(2102, '898.7', 'Uang Semester / Uang Kuliah'),
(2103, '898.8', 'Uang Saku'),
(2104, '899', 'Sarana'),
(2105, '899.1', 'Bantuan Sarana Belajar'),
(2106, '899.2', 'Bantuan Alat-Alat Tulis'),
(2107, '899.3', 'Bantuan Sarana Belajar Lainnya'),
(2108, '900', 'KEUANGAN'),
(2109, '901', 'Nota Keuangan'),
(2110, '902', 'APBN'),
(2111, '903', 'APBD'),
(2112, '904', 'APBN-P'),
(2113, '905', 'Dana Alokasi Umum'),
(2114, '906', 'Dana Alokasi Khusus'),
(2115, '907', 'Dekonsentrasi (Pelimpahan Dana Dari Pusat Ke Daerah)'),
(2116, '910', 'ANGGARAN'),
(2117, '911', 'Rutin'),
(2118, '912', 'Pembangunan'),
(2119, '913', 'Anggaran Belanja Tambahan'),
(2120, '914', 'Daftar Isian Kegiatan (DIK)'),
(2121, '914.1', 'Daftar Usulan Kegiatan (DUK)'),
(2122, '915', 'Daftar Isian Poyek (DIP)'),
(2123, '915.1', 'Daftar Usulan Proyek (DUP)'),
(2124, '915.2', 'Daftar Isian Pengguna Anggaran (DIPA)'),
(2125, '916', 'Revisi Anggaran'),
(2126, '920', 'OTORISASI / SKO'),
(2127, '921', 'Rutin'),
(2128, '922', 'Pembangunan'),
(2129, '923', 'SIAP'),
(2130, '924', 'Ralat SKO'),
(2131, '930', 'VERIFIKASI'),
(2132, '931', 'SPM Rutin (daftar p8)'),
(2133, '932', 'SPM Pembangunan (daftar p8)'),
(2134, '933', 'Penerimaan (daftar p6. p7'),
(2135, '934', 'SPJ Rutin'),
(2136, '935', 'SPJ Pembangunan'),
(2137, '936', 'Nota Pemeriksaan'),
(2138, '937', 'SP Pemindahan Pembukuan'),
(2139, '940', 'PEMBUKUAN'),
(2140, '941', 'Penyusunan Perhitungan Anggaran'),
(2141, '942', 'Permintaan  Data Anggaran Laporan Fisik Pembangunan'),
(2142, '943', 'Laporan Fisik Pembangunan'),
(2143, '950', 'PERBENDAHARAAN'),
(2144, '951', 'Tuntutan Ganti Rugi (ICW Pasal 74)'),
(2145, '952', 'Tuntutan Bendaharawan'),
(2146, '953', 'Penghapusan Kekayaan Negara'),
(2147, '954', 'Pengangkatan/Penggantian Pemimpin Proyak Dan Pengangkatan/Pemberhentian Bendaharawan'),
(2148, '955', 'Spesimen Tanda Tangan'),
(2149, '956', 'Surat Tagihan Piutang, Ikhtisar Bulanan'),
(2150, '960', 'PEMBINAAN KEBENDAHARAAN'),
(2151, '961', 'Pemeriksaan Kas Dan Hasil Pemeriksaan Kas'),
(2152, '962', 'Pemeriksaan Administrasi Bendaharawan'),
(2153, '963', 'Laporan Keuangan Bendaharawan'),
(2154, '970', 'PENDAPATAN'),
(2155, '971', 'Perimbangan Keuangan'),
(2156, '972', 'Subsidi'),
(2157, '973', 'Pajak,Ipeda, IHH,IHPH'),
(2158, '974', 'Retribusi'),
(2159, '975', 'Bea'),
(2160, '976', 'Cukai'),
(2161, '977', 'Pungutan / PNBP'),
(2162, '978', 'Bantuan Presiden, Menteri Dan Bantuan Lainnya'),
(2163, '990', 'BENDAHARAWAN'),
(2164, '991', 'SKPP / SPP'),
(2165, '992', 'Teguran SPJ');

-- --------------------------------------------------------

--
-- Table structure for table `t_kua`
--

CREATE TABLE `t_kua` (
  `id` int(4) NOT NULL,
  `nm_kepala` varchar(50) NOT NULL,
  `nip_kepala` varchar(22) NOT NULL,
  `pangjab_kepala` varchar(50) NOT NULL,
  `almt_kantor` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jangan dihapus';

--
-- Dumping data for table `t_kua`
--

INSERT INTO `t_kua` (`id`, `nm_kepala`, `nip_kepala`, `pangjab_kepala`, `almt_kantor`, `kec`, `kab`, `prov`, `telp`, `email`, `logo`) VALUES
(1, 'MUNIR, S.Ag', '19671102 199003 1 005', 'Pembina', 'Jl. Gatot Subroto No. 12 Desa Kr. Pucung Kec. Way Sulan, Lam-Sel', 'Way Sulan', 'Lampung Selatan', 'Lampung', '082278183799', 'kuawaysulan@gmail.com', 'ikhlas-beramal.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_n7`
--

CREATE TABLE `t_n7` (
  `id` int(4) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `no` varchar(50) NOT NULL,
  `nokua` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `syarat` varchar(300) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `jab` varchar(25) NOT NULL,
  `cek` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_n8`
--

CREATE TABLE `t_n8` (
  `id` int(4) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nokua` varchar(100) NOT NULL,
  `hr` varchar(25) NOT NULL,
  `tglp` varchar(25) NOT NULL,
  `tgl` varchar(4) NOT NULL,
  `bln` varchar(25) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `jab` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pdinas`
--

CREATE TABLE `t_pdinas` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pang` varchar(20) NOT NULL,
  `jab` varchar(100) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `nip1` varchar(25) NOT NULL,
  `pang1` varchar(20) NOT NULL,
  `jab1` varchar(100) NOT NULL,
  `tugas` varchar(150) NOT NULL,
  `tmp` varchar(100) NOT NULL,
  `berangkat` varchar(50) NOT NULL,
  `kembali` varchar(50) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `uh` int(11) NOT NULL,
  `trans` int(11) NOT NULL,
  `inap` int(11) NOT NULL,
  `rep` int(11) NOT NULL,
  `sewa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pemberitahuan`
--

CREATE TABLE `t_pemberitahuan` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `lampiran` varchar(25) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_penduduk`
--

CREATE TABLE `t_penduduk` (
  `id` int(4) NOT NULL,
  `nkk` varchar(17) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `kwng` varchar(25) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `pend` varchar(25) NOT NULL,
  `kerjaan` varchar(50) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `dusun` varchar(25) NOT NULL,
  `rt` varchar(70) NOT NULL,
  `hp` varchar(16) NOT NULL,
  `shdk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`id`, `nkk`, `nik`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `kwng`, `agama`, `status`, `pend`, `kerjaan`, `prov`, `kab`, `kec`, `desa`, `dusun`, `rt`, `hp`, `shdk`, `foto`, `ket`) VALUES
(553, '1801082303083712', '1801230609640001', 'M.ALI MUKHTAR', 'Laki-laki', 'LAMPUNG SELATAN', '06/09/1964', 'Indonesia', 'Islam', 'Kawin', 'SD', 'Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '004/001', '0', '', '', ' -'),
(554, '1801082303083712', '1801235605640002', 'RUSMINI', 'Perempuan', 'LAMPUNG SELATAN', '16/05/1964', 'Indonesia', 'Islam', 'Kawin', 'SD', 'Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Mekar Sari', '004/001', '0', '', '', ' -'),
(594, '1801082303083712', '1801231612900001', 'MUNIR', 'Laki-laki', 'LAMPUNG SELATAN', '16/12/1990', 'Indonesia', 'Islam', 'Belum Kawin', 'SMP', 'Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '004/001', '0', '', '', ' -'),
(803, '1801082303085203', '1801081011470002', 'SURNAJA', 'Laki-laki', 'PANDEGLANG', '10/11/1947', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '00', '', '', 'Alm'),
(837, '180108230308', '1801235103720001', 'SITIAEMUNAH', 'Perempuan', 'PEINGSEWU', '11/03/1972', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '001/002', '00', '', '', ' -'),
(984, '1801082303085208', '1801081701690003', 'NURJEN', 'Laki-laki', 'TALANG PADANG', '17/01/1969', 'Indonesia', 'Islam', 'Kawin', ' SD', 'Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '00', '', '', ' -'),
(985, '1801082303085208', '1801236108730001', 'ARNIMAH', 'Perempuan', 'TELUK BETUNG', '21/08/1973', 'Indonesia', 'Islam', 'Kawin', ' SD', 'Mengurus Rumah Tangga', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '00', '', '', ' -'),
(986, '1801082303085208', '1801232010050001', 'HAMDAN', 'Laki-laki', 'PAMULIHAN', '20/10/2005', 'Indonesia', 'Islam', 'Belum Kawin', 'SMA', 'Tidak/Belum Bekerja', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '00', '', '', ' -'),
(1038, '1801062303085183', '1801065501770005', 'SUMIYATI', 'Perempuan', 'PEMULIHAN', '15/01/1977', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '001/001', '00', '', '', ' -'),
(1084, '1801062303085183', '1801232406990002', 'DONI WANDIKA', 'Laki-laki', 'KALIANDA', '24/06/1999', 'Indonesia', 'Islam', 'Belum Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '001/001', '00', '', '', ' -'),
(1092, '1801062303085183', '1801230809060004', 'INDRI DAMAYANTI', 'Perempuan', 'PAMULIHAN', '28/09/2006', 'Indonesia', 'Islam', 'Belum Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '00', '', '', ' -'),
(1220, '1801082303085195', '1801081003620002', 'MARYONO', 'Laki-laki', 'BANYUWANGI', '10/03/1962', 'Indonesia', 'Islam', 'Belum Kawin', 'SD', 'Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '001/003', '00', '', '', ' -'),
(1305, '1801081808160011', '1801082507900006', 'TRI SUTRISNO', 'Laki-laki', 'PARDASUKA', '25/06/1990', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1306, '1801081808160011', '1801235402170001', 'INDRA CAHYANI ATHIFAH', 'Perempuan', 'LAMPUNG SELATAN', '14/02/2017', 'Indonesia', 'Islam', 'Belum Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1323, '1801081808160011', '1801235009930001', 'SITI NUR JAMILAH', 'Perempuan', 'PEMULIHAN', '10/09/1993', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1341, '1801082209140002', '1801086005150003', 'SALSABILA NADHIFA', 'Perempuan', 'SUMBER JAYA', '20/05/2015', 'Indonesia', 'Islam', 'Belum Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '005/002', '0', '', '', ' -'),
(1342, '1801082209140002', '1801082006840003', 'MUHAMAD MASYANTO', 'Laki-laki', 'TALANG WAYSULAN', '20/06/1984', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '005/002', '0', '', '', ' -'),
(1343, '1801082209140002', '1801086004910011', 'SUMIRAH', 'Perempuan', 'SUMBER JAYA', '20/04/1991', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Tegal Sari', '005/002', '0', '', '', ' -'),
(1384, '1801082303085206', '1801084211730001', 'FATIMAH', 'Perempuan', 'TALANG PADANG', '02/11/1973', 'Indonesia', 'Islam', 'Kawin', 'SD', 'Mengurus Rumah Tangga', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1488, '1801082303085206', '1801084202010002', 'NUR BAETI', 'Perempuan', 'PAMULIHAN', '02/02/2001', 'Indonesia', 'Islam', 'Belum Kawin', 'SMA', 'Pelancong', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1489, '1801082303085206', '1801082601960002', 'AHMAD FAUZI', 'Laki-laki', 'PAMULIHAN', '26/01/1996', 'Indonesia', 'Islam', 'Belum Kawin', 'SMA', 'Wiraswasta', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Mekar Sari', '001/001', '0', '', '', ' -'),
(1491, '1801082303085206', '1801230808690002', 'BADIYANTO', 'Laki-laki', 'BANYUWANGI', '08/08/1969', 'Indonesia', 'Islam', 'Kawin', 'SD', ' Petani/Pekebun', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '001/001', '0', '', '', ' -'),
(1499, '180108230305522', '1801231501800001', 'JAMAR', 'Laki-laki', 'PAMULIHAN', '15/01/1980', 'Indonesia', 'Islam', 'Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Mekar Sari', '003/003', '0', '', '', ' -'),
(1530, '1801080706180004', '1801232410170002', 'MUHAMMAD RIFQI PRATAMA', 'Laki-laki', 'PEMULIHAN', '24/10/2017', 'Indonesia', 'Islam', 'Belum Kawin', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '005/001', '0', '', '', ' -'),
(1531, '1801080706180004', '1801235901990001', 'SITI JARMAYA', 'Perempuan', 'PEMULIHAN', '19/01/1999', 'Indonesia', 'Islam', 'Cerai Hidup', ' -', ' -', 'Lampung', 'Lampung Selatan', 'Way Sulan', 'Pamulihan', 'Dusun Sinar Jaya', '005/001', '0', '', '', ' -');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengantar`
--

CREATE TABLE `t_pengantar` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `objek` varchar(100) NOT NULL,
  `banyak` varchar(25) NOT NULL,
  `dasar` varchar(250) NOT NULL,
  `lbg` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_petugaskua`
--

CREATE TABLE `t_petugaskua` (
  `id` int(4) NOT NULL,
  `nm_petugas` varchar(50) NOT NULL,
  `nip_petugas` varchar(25) NOT NULL,
  `jab_petugas` varchar(50) NOT NULL,
  `almt_petugas` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_petugaskua`
--

INSERT INTO `t_petugaskua` (`id`, `nm_petugas`, `nip_petugas`, `jab_petugas`, `almt_petugas`, `foto`) VALUES
(1, 'SYAMSUDDIN', '18244', 'Pembina', 'Jl. Anu no 1221', 'fotopetugas.jpg'),
(2, 'MIFTAHUDIN', '12544', 'Pembina', 'Jl. Anu juga no 22144', 'petugas.jpg'),
(3, 'DABREH', '195821245235441', 'Pranata', 'Desa Pamulihan', '12man-hello.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_pstatus`
--

CREATE TABLE `t_pstatus` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_rpengantar`
--

CREATE TABLE `t_rpengantar` (
  `id` int(5) NOT NULL,
  `r_awal` varchar(150) NOT NULL,
  `r_tengah` varchar(150) NOT NULL,
  `r_akhir` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_rpengantar`
--

INSERT INTO `t_rpengantar` (`id`, `r_awal`, `r_tengah`, `r_akhir`) VALUES
(1, 'Menindak lanjuti Surat ', 'Data dimkasud sebagaimana terlampir.', 'Demikian kami sampaikan, mohon periksa dan maklum adanya.'),
(2, 'Untuk memenuhi permintaan ', 'Data dimkasud sebagaimana terlampir.', 'Demikian kami sampaikan, mohon periksa dan maklum adanya.');

-- --------------------------------------------------------

--
-- Table structure for table `t_saran`
--

CREATE TABLE `t_saran` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `tgl` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketanak`
--

CREATE TABLE `t_suketanak` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nikanak` varchar(16) NOT NULL,
  `namaanak` varchar(100) NOT NULL,
  `jkanak` varchar(15) NOT NULL,
  `tmp_lahiranak` varchar(100) NOT NULL,
  `tgl_lahiranak` varchar(16) NOT NULL,
  `agamaanak` varchar(15) NOT NULL,
  `alamatanak` varchar(100) NOT NULL,
  `nikayah` varchar(16) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `jkayah` varchar(15) NOT NULL,
  `tmp_lahirayah` varchar(100) NOT NULL,
  `tgl_lahirayah` varchar(16) NOT NULL,
  `agamaayah` varchar(15) NOT NULL,
  `alamatayah` varchar(100) NOT NULL,
  `nikibu` varchar(16) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `jkibu` varchar(15) NOT NULL,
  `tmp_lahiribu` varchar(100) NOT NULL,
  `tgl_lahiribu` varchar(16) NOT NULL,
  `agamaibu` varchar(15) NOT NULL,
  `alamatibu` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketaw`
--

CREATE TABLE `t_suketaw` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketbarang`
--

CREATE TABLE `t_suketbarang` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nmbrg` varchar(100) NOT NULL,
  `jnbrg` varchar(100) NOT NULL,
  `jmlbrg` varchar(6) NOT NULL,
  `pemilikbrg` varchar(50) NOT NULL,
  `asalbrg` varchar(100) NOT NULL,
  `tujuanbrg` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketbedaid`
--

CREATE TABLE `t_suketbedaid` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik1` varchar(16) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `jk1` varchar(15) NOT NULL,
  `tmp_lahir1` varchar(100) NOT NULL,
  `tgl_lahir1` varchar(16) NOT NULL,
  `agama1` varchar(15) NOT NULL,
  `alamat1` varchar(100) NOT NULL,
  `nik2` varchar(16) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `jk2` varchar(15) NOT NULL,
  `tmp_lahir2` varchar(100) NOT NULL,
  `tgl_lahir2` varchar(20) NOT NULL,
  `agama2` varchar(15) NOT NULL,
  `alamat2` varchar(100) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `id2` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketbepergian`
--

CREATE TABLE `t_suketbepergian` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `keg` varchar(100) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `brg` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketbnikah`
--

CREATE TABLE `t_suketbnikah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketdj`
--

CREATE TABLE `t_suketdj` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketdomisili`
--

CREATE TABLE `t_suketdomisili` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sejak` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketdomisililbg`
--

CREATE TABLE `t_suketdomisililbg` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nama_lbg` varchar(100) NOT NULL,
  `bidang_lbg` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `sejak` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketlahir`
--

CREATE TABLE `t_suketlahir` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nikanak` varchar(16) NOT NULL,
  `namaanak` varchar(100) NOT NULL,
  `jkanak` varchar(15) NOT NULL,
  `tmp_lahiranak` varchar(100) NOT NULL,
  `tgl_lahiranak` varchar(16) NOT NULL,
  `agamaanak` varchar(15) NOT NULL,
  `alamatanak` varchar(100) NOT NULL,
  `anake` varchar(8) NOT NULL,
  `nikayah` varchar(16) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `jkayah` varchar(15) NOT NULL,
  `tmp_lahirayah` varchar(100) NOT NULL,
  `tgl_lahirayah` varchar(16) NOT NULL,
  `agamaayah` varchar(15) NOT NULL,
  `alamatayah` varchar(100) NOT NULL,
  `nikibu` varchar(16) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `jkibu` varchar(15) NOT NULL,
  `tmp_lahiribu` varchar(100) NOT NULL,
  `tgl_lahiribu` varchar(16) NOT NULL,
  `agamaibu` varchar(15) NOT NULL,
  `alamatibu` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketlain`
--

CREATE TABLE `t_suketlain` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `ns` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `redaksi_awal` text NOT NULL,
  `redaksi_tengah` text NOT NULL,
  `redaksi_akhir` text NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketmati`
--

CREATE TABLE `t_suketmati` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nikalm` varchar(16) NOT NULL,
  `namaalm` varchar(100) NOT NULL,
  `binbintialm` varchar(50) NOT NULL,
  `jkalm` varchar(15) NOT NULL,
  `tmp_lahiralm` varchar(100) NOT NULL,
  `tgl_lahiralm` varchar(16) NOT NULL,
  `kwngalm` varchar(50) NOT NULL,
  `agamaalm` varchar(15) NOT NULL,
  `pkjnalm` varchar(50) NOT NULL,
  `alamatalm` varchar(100) NOT NULL,
  `nikpelapor` varchar(16) NOT NULL,
  `namapelapor` varchar(100) NOT NULL,
  `binbintipelapor` varchar(50) NOT NULL,
  `jkpelapor` varchar(15) NOT NULL,
  `tmp_lahirpelapor` varchar(100) NOT NULL,
  `tgl_lahirpelapor` varchar(16) NOT NULL,
  `kwngpelapor` varchar(50) NOT NULL,
  `agamapelapor` varchar(15) NOT NULL,
  `pkjnpelapor` varchar(50) NOT NULL,
  `alamatpelapor` varchar(100) NOT NULL,
  `shdkpelapor` varchar(16) NOT NULL,
  `sebab` varchar(100) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `waktu` varchar(16) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketmenikah`
--

CREATE TABLE `t_suketmenikah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nikistri` varchar(16) NOT NULL,
  `namaistri` varchar(100) NOT NULL,
  `jkistri` varchar(15) NOT NULL,
  `tmp_lahiristri` varchar(100) NOT NULL,
  `tgl_lahiristri` varchar(20) NOT NULL,
  `agamaistri` varchar(15) NOT NULL,
  `provi` varchar(50) NOT NULL,
  `kabi` varchar(50) NOT NULL,
  `keci` varchar(50) NOT NULL,
  `desai` varchar(50) NOT NULL,
  `alamatistri` varchar(100) NOT NULL,
  `tgl_nikah` varchar(20) NOT NULL,
  `secara` varchar(50) NOT NULL,
  `mahar` varchar(50) NOT NULL,
  `saksi1` varchar(25) NOT NULL,
  `saksi2` varchar(25) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketortu`
--

CREATE TABLE `t_suketortu` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nikibu` varchar(16) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `jkibu` varchar(15) NOT NULL,
  `tmp_lahiribu` varchar(100) NOT NULL,
  `tgl_lahiribu` varchar(16) NOT NULL,
  `agamaibu` varchar(15) NOT NULL,
  `alamatibu` varchar(100) NOT NULL,
  `nikanak` varchar(16) NOT NULL,
  `namaanak` varchar(100) NOT NULL,
  `jkanak` varchar(15) NOT NULL,
  `tmp_lahiranak` varchar(100) NOT NULL,
  `tgl_lahiranak` varchar(16) NOT NULL,
  `agamaanak` varchar(15) NOT NULL,
  `alamatanak` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketpenghasilan`
--

CREATE TABLE `t_suketpenghasilan` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jmlhasil` varchar(25) NOT NULL,
  `sumberhasil` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketpenguburan`
--

CREATE TABLE `t_suketpenguburan` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tglpenguburan` varchar(25) NOT NULL,
  `nmmakam` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketpnikah`
--

CREATE TABLE `t_suketpnikah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `kwng` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pkjn` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nik1` varchar(16) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `jk1` varchar(15) NOT NULL,
  `tmp_lahir1` varchar(100) NOT NULL,
  `tgl_lahir1` varchar(20) NOT NULL,
  `kwng1` varchar(50) NOT NULL,
  `agama1` varchar(15) NOT NULL,
  `pkjn1` varchar(50) NOT NULL,
  `prov1` varchar(50) NOT NULL,
  `kab1` varchar(50) NOT NULL,
  `kec1` varchar(50) NOT NULL,
  `desa1` varchar(50) NOT NULL,
  `alamat1` varchar(100) NOT NULL,
  `tgl_nikah` varchar(20) NOT NULL,
  `secara` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketrtms`
--

CREATE TABLE `t_suketrtms` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nikistri` varchar(16) NOT NULL,
  `namaistri` varchar(100) NOT NULL,
  `jkistri` varchar(15) NOT NULL,
  `tmp_lahiristri` varchar(100) NOT NULL,
  `tgl_lahiristri` varchar(16) NOT NULL,
  `agamaistri` varchar(15) NOT NULL,
  `alamatistri` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sukettanah`
--

CREATE TABLE `t_sukettanah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `luas` varchar(25) NOT NULL,
  `letak` varchar(100) NOT NULL,
  `asaltanah` varchar(100) NOT NULL,
  `barat` varchar(50) NOT NULL,
  `utara` varchar(50) NOT NULL,
  `timur` varchar(50) NOT NULL,
  `selatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketternak`
--

CREATE TABLE `t_suketternak` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nmternak` varchar(100) NOT NULL,
  `jnternak` varchar(50) NOT NULL,
  `ciriternak` varchar(100) NOT NULL,
  `pemilikternak` varchar(50) NOT NULL,
  `asalternak` varchar(100) NOT NULL,
  `tujuanternak` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sukettmampu`
--

CREATE TABLE `t_sukettmampu` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `untuk` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sukettmampuu`
--

CREATE TABLE `t_sukettmampuu` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(16) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nikistri` varchar(16) NOT NULL,
  `namaistri` varchar(100) NOT NULL,
  `jkistri` varchar(15) NOT NULL,
  `tmp_lahiristri` varchar(100) NOT NULL,
  `tgl_lahiristri` varchar(16) NOT NULL,
  `agamaistri` varchar(15) NOT NULL,
  `alamatistri` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sukettmpusaha`
--

CREATE TABLE `t_sukettmpusaha` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nmusaha` varchar(100) NOT NULL,
  `bdgusaha` varchar(100) NOT NULL,
  `thnberdiri` varchar(6) NOT NULL,
  `pemilikusaha` varchar(50) NOT NULL,
  `jmlpekerja` int(4) NOT NULL,
  `izinusaha` varchar(100) NOT NULL,
  `alamatusaha` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_suketusaha`
--

CREATE TABLE `t_suketusaha` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jnusaha` varchar(50) NOT NULL,
  `mulaiusaha` varchar(25) NOT NULL,
  `lokusaha` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sutarnikah`
--

CREATE TABLE `t_sutarnikah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nikca` varchar(16) NOT NULL,
  `namaca` varchar(100) NOT NULL,
  `binbintica` varchar(50) NOT NULL,
  `jkca` varchar(15) NOT NULL,
  `tmp_lahirca` varchar(100) NOT NULL,
  `tgl_lahirca` varchar(16) NOT NULL,
  `kwngca` varchar(20) NOT NULL,
  `agamaca` varchar(15) NOT NULL,
  `pkjnca` varchar(50) NOT NULL,
  `prova` varchar(50) NOT NULL,
  `kaba` varchar(50) NOT NULL,
  `keca` varchar(50) NOT NULL,
  `desaa` varchar(50) NOT NULL,
  `alamatca` varchar(100) NOT NULL,
  `statusca` varchar(20) NOT NULL,
  `status_naca` varchar(8) NOT NULL,
  `nikcb` varchar(16) NOT NULL,
  `namacb` varchar(50) NOT NULL,
  `binbinticb` varchar(50) NOT NULL,
  `jkcb` varchar(15) NOT NULL,
  `tmp_lahircb` varchar(50) NOT NULL,
  `tgl_lahircb` varchar(20) NOT NULL,
  `kwngcb` varchar(25) NOT NULL,
  `agamacb` varchar(20) NOT NULL,
  `pkjncb` varchar(50) NOT NULL,
  `provb` varchar(50) NOT NULL,
  `kabb` varchar(50) NOT NULL,
  `kecb` varchar(50) NOT NULL,
  `desab` varchar(50) NOT NULL,
  `alamatcb` varchar(100) NOT NULL,
  `statuscb` varchar(25) NOT NULL,
  `status_nacb` varchar(8) NOT NULL,
  `nikayah` varchar(16) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `binayah` varchar(50) NOT NULL,
  `jkayah` varchar(15) NOT NULL,
  `tmp_lahirayah` varchar(100) NOT NULL,
  `tgl_lahirayah` varchar(16) NOT NULL,
  `kwngayah` varchar(25) NOT NULL,
  `agamaayah` varchar(15) NOT NULL,
  `pkjnayah` varchar(50) NOT NULL,
  `provayah` varchar(50) NOT NULL,
  `kabayah` varchar(50) NOT NULL,
  `kecayah` varchar(50) NOT NULL,
  `desaayah` varchar(50) NOT NULL,
  `alamatayah` varchar(100) NOT NULL,
  `statusayah` varchar(20) NOT NULL,
  `nikibu` varchar(16) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `binibu` varchar(50) NOT NULL,
  `jkibu` varchar(15) NOT NULL,
  `tmp_lahiribu` varchar(100) NOT NULL,
  `tgl_lahiribu` varchar(16) NOT NULL,
  `kwngibu` varchar(25) NOT NULL,
  `agamaibu` varchar(15) NOT NULL,
  `pkjnibu` varchar(50) NOT NULL,
  `prov1` varchar(50) NOT NULL,
  `kab1` varchar(50) NOT NULL,
  `kec1` varchar(50) NOT NULL,
  `desa1` varchar(50) NOT NULL,
  `alamatibu` varchar(100) NOT NULL,
  `statusibu` varchar(25) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tgl_akad` varchar(50) NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `tmpt` varchar(100) NOT NULL,
  `maskawin` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_sutarpindah`
--

CREATE TABLE `t_sutarpindah` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(5) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jmlpindah` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_undangan`
--

CREATE TABLE `t_undangan` (
  `id` int(4) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `kodejenis` varchar(8) NOT NULL,
  `nmsurat` varchar(100) NOT NULL,
  `no` varchar(70) NOT NULL,
  `keg` varchar(100) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `wkt` varchar(15) NOT NULL,
  `tmp` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_wali`
--

CREATE TABLE `t_wali` (
  `id` int(4) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `no` varchar(50) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `nikwali` varchar(25) NOT NULL,
  `sebab_wali` varchar(100) NOT NULL,
  `hub_wali` varchar(50) NOT NULL,
  `almt_wali` varchar(100) NOT NULL,
  `hr` varchar(25) NOT NULL,
  `tglp` varchar(25) NOT NULL,
  `tgl` varchar(4) NOT NULL,
  `bln` varchar(25) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_wali`
--

INSERT INTO `t_wali` (`id`, `kode`, `no`, `wali`, `nikwali`, `sebab_wali`, `hub_wali`, `almt_wali`, `hr`, `tglp`, `tgl`, `bln`, `thn`, `petugas`) VALUES
(1, 'SR073', '472.2/073/I/2023', 'PAIJO', '180123548755466', 'Tidak ada wali nasab', 'Wali Hakim', 'Desa Pamulihan', 'Jum\'at', '12/01/2023', '12', '01', '2023', 'SYAMSUDIN'),
(3, 'SR093', '472.2/093/I/2023', 'PAIJO', '180123548755466', 'Tidak ada wali nasab', 'Wali Hakim', 'Kp. Durian Runtuh RT/RW. 001/002', 'Jum\'at', '12/01/2023', '12', '01', '2023', 'SYAMSUDIN'),
(4, 'SR092', '472.2/092/I/2023', 'PAIJO', '180123548755466', 'Tidak ada wali nasab', 'Wali Hakim', 'Kp. Durian Runtuh RT/RW. 001/002', 'Jum\'at', '12/01/2023', '12', '01', '2023', 'SYAMSUDIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `t_ahliwaris`
--
ALTER TABLE `t_ahliwaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_datacalon`
--
ALTER TABLE `t_datacalon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_datapdinas`
--
ALTER TABLE `t_datapdinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_datasurat`
--
ALTER TABLE `t_datasurat`
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `t_dataundangan`
--
ALTER TABLE `t_dataundangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_desa`
--
ALTER TABLE `t_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_f121`
--
ALTER TABLE `t_f121`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_himbauan`
--
ALTER TABLE `t_himbauan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jenissurat`
--
ALTER TABLE `t_jenissurat`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `t_klasifikasi`
--
ALTER TABLE `t_klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kua`
--
ALTER TABLE `t_kua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_n7`
--
ALTER TABLE `t_n7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_n8`
--
ALTER TABLE `t_n8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pdinas`
--
ALTER TABLE `t_pdinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pemberitahuan`
--
ALTER TABLE `t_pemberitahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengantar`
--
ALTER TABLE `t_pengantar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_petugaskua`
--
ALTER TABLE `t_petugaskua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pstatus`
--
ALTER TABLE `t_pstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rpengantar`
--
ALTER TABLE `t_rpengantar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_saran`
--
ALTER TABLE `t_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketanak`
--
ALTER TABLE `t_suketanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketaw`
--
ALTER TABLE `t_suketaw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketbarang`
--
ALTER TABLE `t_suketbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketbedaid`
--
ALTER TABLE `t_suketbedaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketbepergian`
--
ALTER TABLE `t_suketbepergian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketbnikah`
--
ALTER TABLE `t_suketbnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketdj`
--
ALTER TABLE `t_suketdj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketdomisili`
--
ALTER TABLE `t_suketdomisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketdomisililbg`
--
ALTER TABLE `t_suketdomisililbg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketlahir`
--
ALTER TABLE `t_suketlahir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketlain`
--
ALTER TABLE `t_suketlain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketmati`
--
ALTER TABLE `t_suketmati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketmenikah`
--
ALTER TABLE `t_suketmenikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketortu`
--
ALTER TABLE `t_suketortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketpenghasilan`
--
ALTER TABLE `t_suketpenghasilan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_suketpenguburan`
--
ALTER TABLE `t_suketpenguburan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketpnikah`
--
ALTER TABLE `t_suketpnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketrtms`
--
ALTER TABLE `t_suketrtms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sukettanah`
--
ALTER TABLE `t_sukettanah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_suketternak`
--
ALTER TABLE `t_suketternak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sukettmampu`
--
ALTER TABLE `t_sukettmampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_sukettmampuu`
--
ALTER TABLE `t_sukettmampuu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sukettmpusaha`
--
ALTER TABLE `t_sukettmpusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suketusaha`
--
ALTER TABLE `t_suketusaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_sutarnikah`
--
ALTER TABLE `t_sutarnikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sutarpindah`
--
ALTER TABLE `t_sutarpindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_undangan`
--
ALTER TABLE `t_undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_wali`
--
ALTER TABLE `t_wali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_ahliwaris`
--
ALTER TABLE `t_ahliwaris`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_datacalon`
--
ALTER TABLE `t_datacalon`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_datapdinas`
--
ALTER TABLE `t_datapdinas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_datasurat`
--
ALTER TABLE `t_datasurat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_dataundangan`
--
ALTER TABLE `t_dataundangan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_desa`
--
ALTER TABLE `t_desa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_f121`
--
ALTER TABLE `t_f121`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_himbauan`
--
ALTER TABLE `t_himbauan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jenissurat`
--
ALTER TABLE `t_jenissurat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `t_klasifikasi`
--
ALTER TABLE `t_klasifikasi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2166;

--
-- AUTO_INCREMENT for table `t_kua`
--
ALTER TABLE `t_kua`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_n7`
--
ALTER TABLE `t_n7`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_n8`
--
ALTER TABLE `t_n8`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pdinas`
--
ALTER TABLE `t_pdinas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pemberitahuan`
--
ALTER TABLE `t_pemberitahuan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1624;

--
-- AUTO_INCREMENT for table `t_pengantar`
--
ALTER TABLE `t_pengantar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_petugaskua`
--
ALTER TABLE `t_petugaskua`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_pstatus`
--
ALTER TABLE `t_pstatus`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_rpengantar`
--
ALTER TABLE `t_rpengantar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_saran`
--
ALTER TABLE `t_saran`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketanak`
--
ALTER TABLE `t_suketanak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketaw`
--
ALTER TABLE `t_suketaw`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketbarang`
--
ALTER TABLE `t_suketbarang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketbedaid`
--
ALTER TABLE `t_suketbedaid`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketbepergian`
--
ALTER TABLE `t_suketbepergian`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketbnikah`
--
ALTER TABLE `t_suketbnikah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketdj`
--
ALTER TABLE `t_suketdj`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketdomisili`
--
ALTER TABLE `t_suketdomisili`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketdomisililbg`
--
ALTER TABLE `t_suketdomisililbg`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketlahir`
--
ALTER TABLE `t_suketlahir`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketlain`
--
ALTER TABLE `t_suketlain`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketmati`
--
ALTER TABLE `t_suketmati`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketmenikah`
--
ALTER TABLE `t_suketmenikah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketortu`
--
ALTER TABLE `t_suketortu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketpenghasilan`
--
ALTER TABLE `t_suketpenghasilan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketpenguburan`
--
ALTER TABLE `t_suketpenguburan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketpnikah`
--
ALTER TABLE `t_suketpnikah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketrtms`
--
ALTER TABLE `t_suketrtms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sukettanah`
--
ALTER TABLE `t_sukettanah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketternak`
--
ALTER TABLE `t_suketternak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sukettmampu`
--
ALTER TABLE `t_sukettmampu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sukettmampuu`
--
ALTER TABLE `t_sukettmampuu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sukettmpusaha`
--
ALTER TABLE `t_sukettmpusaha`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_suketusaha`
--
ALTER TABLE `t_suketusaha`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sutarnikah`
--
ALTER TABLE `t_sutarnikah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_sutarpindah`
--
ALTER TABLE `t_sutarpindah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_undangan`
--
ALTER TABLE `t_undangan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_wali`
--
ALTER TABLE `t_wali`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
