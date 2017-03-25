-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2017 pada 07.08
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `antrian_rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `Id_dokter` int(11) NOT NULL,
  `Nama_dokter` text NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Spesialis` text NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `JK` text NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Status` text NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Hari_hadir` varchar(100) NOT NULL,
  `Jam` varchar(100) NOT NULL,
  `Libur` varchar(100) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Id_Penyakit` int(200) NOT NULL,
  `Image` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`Id_dokter`, `Nama_dokter`, `Username`, `Password`, `Spesialis`, `Alamat`, `JK`, `Tanggal_lahir`, `Status`, `Telepon`, `Hari_hadir`, `Jam`, `Libur`, `NIK`, `Id_Penyakit`, `Image`) VALUES
(1, 'dr.Naily Ais Hanani, Sp.A', '', '', 'Spesialis Anak', 'Jl.Danau Maninjau g2 f.no.10', 'Perempuan', '1994-02-06', 'single', '082232878521', 'Senin-Jumat', '08.00 AM - 04.00 PM', 'Sabtu - Minggu,\r\nHari Libur Nasional', '3523074310940002', 1, 0xffd8ffe000104a46494600010100000100010000fffe003e43524541544f523a2067642d6a7065672076312e3020287573696e6720494a47204a50454720763830292c2064656661756c74207175616c6974790affdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffc2001108017502a103012200021101031101ffc4001b00010100030101010000),
(2, 'dr. Ghifary Maulana Fanony, Sp.B', '', '', 'Spesialis Bedah', 'Jl.Danau Poso 1 G2 F no.16', 'Laki-Laki', '1993-09-17', 'Single', '082232868534', 'Senin - Kamis', '08.00 AM- 05.00 PM', 'Sabtu - Minggu\r\nHari Libur Nasional', '3505066109980006', 2, 0xffd8ffe000104a46494600010101006000600000ffe110b24578696600004d4d002a000000080002876900040000000100000832ea1c00070000080c00000026000000001cea0000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE IF NOT EXISTS `gejala_penyakit` (
  `id_gejala_penyakit` int(200) NOT NULL,
  `Id_Penyakit` int(200) NOT NULL,
  `id_gejala` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE IF NOT EXISTS `tbl_gejala` (
  `id_gejala` varchar(200) NOT NULL,
  `nama_gejala` text NOT NULL,
  `ket_gejala` text NOT NULL,
  `NIK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `nama_gejala`, `ket_gejala`, `NIK`) VALUES
('1Q', 'Diare anak', '1. Buang air besar encer dan sering.\r\n2. feses anak diare dapat mengandung lendir dan darah, tergantung pada penyebabnya.\r\n3. demam dan muntah. \r\n4. Terkadang gejala muntah dan demam mendahului mencret.\r\n', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE IF NOT EXISTS `tbl_penyakit` (
  `id_penyakit` int(200) NOT NULL,
  `nama_penyakit` text NOT NULL,
  `ket_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `nama_penyakit`, `ket_penyakit`) VALUES
(1, 'Kolera', 'Kolera merupakan penyakit infeksi usus yang bersifat akut atau dapat memburuk dengan cepat. Penyakit ini disebabkan oleh bakteri Vibrio cholerae yang berkembang biak dan menyebar melalui kotoran manusia.\r\n\r\nKolera menyebabkan muntah parah, diare, dan jika yang bersangkutan tidak mendapatkan pengganti cairan tubuh, kolera dapat menyebabkan dehidrasi dan kematian. Untuk mengatasinya, bisa dengan terapi rehidrasi oral, di mana pasien diberi larutan air yang terbuat dari kombinasi garam meja, soda bikarbonat, dan gula. Untuk pencegahan, selain menjaga kebersihan, vaksinasi juga perlu diberikan.'),
(2, 'Retinoblastoma', 'Retinoblastoma merupakan tumor ganas di dalam mata yang paling sering terjadi pada anak di bawah usia lima tahun. Dua gejala yang paling sering dialami adalah manik putih pada mata dan mata kucing.\r\n\r\nGejala lain retinoblastoma yang patut diwaspadai adalah mata merah dan mata juling. Sebab, jika sudah membesar, tumor ini bisa menyebar ke sumsum tulang dan sel otak, akan berakibat fatal pada kondisi anak dan bisa menyebabkan kematian.'),
(3, 'Diare', 'Diare pada anak adalah keadaan buang-buang air yang merupakan gejala dari penyakit tertentu atau gangguan lain yang terjadi pada anak. Kasus ini banyak terjadi di beberapa negara berkembang dengan standar hidup yang rendah. Dehidrasi akibat diare merupakan salah satu penyebab kematian pada anak-anak.'),
(4, 'Ruam Popok', 'Ruam popok adalah peradangan pada area kulit bayi yang tertutup popok, seperti bokong. Ruam ini biasanya terjadi karena reaksi kulit terhadap urine dan tinja. Awalnya ditandai dengan kemunculan kulit kemerahan pada bokong bayi. \r\n\r\nBayi yang memakai popok, hampir semua pernah mengalami ruam popok. Ruam ini umumnya tidak berbahaya. Meski demikian, ruam popok dapat mengganggu kenyamanan sehingga bayi cenderung menjadi lebih rewel.'),
(5, 'Disentri', 'Disentri merupakan salah satu jenis diare akut, umumnya banyak dialami pada anak usia balita. Penyebab disentri yakni infeksi kuman Shigella (Disentri basiler)å dan parasit Entamoeba histolitiyca (disentri amoeba). Gejala disentri pada anak biasanya didahului demam (pada disentri basiler), ada gejala sakit perut ketika BAB dan setelahnya rasa sakit tersebut hilang. Kondisi feses berlendir dan berdarah.\r\n'),
(6, 'Pneumonia', 'neumonia adalah radang paru-paru yang biasanya disebabkan oleh infeksi. Tiga penyebab utama pneumonia adalah bakteri, virus dan fungi. Yang berisiko tinggi menderita infeksi ini adalah anak-anak di bawah 2 tahun dan manula. \r\n\r\nGejala pneumonia bervariasi, mulai dari pernapasan yang cepat sampai kegagalan pernapasan dan tekanan darah yang sangat rendah atau dikenal dengan istilah shock septik. Jika pneumonia terjadi setelah bayi lahir, gejalanya akan timbul secara bertahap. Terkadang bayi tiba-tiba menjadi sakit yang disertai dengan turun-naiknya suhu tubuh.'),
(7, 'Flu Singapura', 'Flu Singapura atau juga disebut dengan HMFD (Hand, Mouth, Foot Disease) ini sangat menular dan sering terjadi saat musim kemarau. Biasanya HMFD menyerang anak usia 1-4 tahun, namun terkadang juga dialami oleh anak-anak yang lebih besar. \r\n\r\nDiawali dengan demam sedang (di bawah 39 derajat C) selama 2-3 hari, yang diikuti rasa sakit pada leher dan nafsu makan berkurang. Selanjutnya, muncul sekitar 3 - 10 bintil kecil di dalam mulut yang menyerupai sariawan dan terasa nyeri. Di telapak tangan, telapak kaki, dan terkadang di daerah bokong muncul ruam kemerahan atau bintil kecil yang tidak gatal.'),
(8, 'TBC', 'Tuberkulosis adalah penyakit menular yang disebabkan oleh kuman Mycobacterium tuberculossis, penyakit ini biasanya menyerang paru, namun dapat juga mengenai hampir semua organ tubuh.\r\n\r\nPenyakit ini bisa menulari anak lewat kontak dahak dan juga akibat menghirup titik-titik air dan juga bersin atau penularan lewat batuk yang mengalami infeksi penyakit TBC. Anak-anak biasanya tertular dari orang dewasa, lingkungan dan kendaraan umum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Nama_user` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Tgl_Register` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
`No.Antri` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Nama_user`, `NIK`, `Status`, `JK`, `Username`, `Password`, `Tgl_lahir`, `Tgl_Register`, `Alamat`, `Telepon`, `No.Antri`) VALUES
('ccccc', '3505066109980001', 'aa', 'aa', 'aa', 'aa', '2017-02-08', '2017-02-23', 'aaaaa', '', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`Id_dokter`);

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
 ADD PRIMARY KEY (`id_gejala_penyakit`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
 ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
 ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`NIK`), ADD UNIQUE KEY `No.Antri` (`No.Antri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `No.Antri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
