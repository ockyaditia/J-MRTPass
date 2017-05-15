-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2015 pada 19.16
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `j-mrtpass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kemacetan`
--

CREATE TABLE IF NOT EXISTS `data_kemacetan` (
`no` int(11) NOT NULL,
  `jakarta_timur` varchar(250) NOT NULL,
  `jakarta_selatan` varchar(250) NOT NULL,
  `jakarta_utara` varchar(250) NOT NULL,
  `jakarta_pusat` varchar(250) NOT NULL,
  `jakarta_barat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kemacetan`
--

INSERT INTO `data_kemacetan` (`no`, `jakarta_timur`, `jakarta_selatan`, `jakarta_utara`, `jakarta_pusat`, `jakarta_barat`) VALUES
(1, 'JL. Supriyadi / Putaran 03', 'TL. Radio Dalam', 'JL. Yos Sudarso', 'TL. Carolus', 'JL. Tomang Raya'),
(2, 'JL. Raya Bogor / Kramat Jati', 'JL. Pangeran Antasari', 'JL. Gunung Sahari', 'TL. Pintu Besi', 'TL. Tomang'),
(3, 'JL. Mayjend. Sutoyo / Uki', 'JL. Kapten Tendean', 'JL. Raya Lodan', 'TL. Roxy', 'STKA Kota / Beos'),
(4, 'JL. Raya Kalimalang', 'JL. DR. Satrio', 'JL. RE Martadinata', 'TL. Caringin', 'Pos Pengumben'),
(5, 'JL. I Gusti Ngurah Rai', 'JL. Casablanca', 'JL. Danau Sunter UTR / SEL', 'Simpang 5 Senen', 'JL. Panjang'),
(6, 'Terbus KP. Melayu', 'DPN Terbus LB. Bulus', 'JL. Raya Cacing', 'TL. Bungur', 'Palmerah'),
(7, 'JL. Kolonel Sugiono', 'JL. Ciputat Raya', 'TL. Enggano', 'JL. Cokroaminoto', 'TL. Slipi'),
(8, 'TL. Jambul', 'Pasar PD. Labu', 'Tanjung Priok', 'TL. Raden Saleh', 'TL. Grogol'),
(9, 'JL. Raya Condet', 'JL. DR. Supomo', 'Pertigaan Boulevard Barat', 'T. Benyamin Sueb', 'JL. Daan Mogot\r\n'),
(10, 'Cibubur Junction', 'JL. Raya PS. Minggu', 'JL. Pluit Raya (Depan Dipo)', 'TL. Jembatan Serong', ''),
(11, 'TL. Kebon Nanas', 'JL. Buncit Raya', 'Marunda', 'TL. Jatibaru ', ''),
(12, 'JL. Jatinegata Barat', 'JL. Ciledug Raya', 'JL. Kebon Baru', '', ''),
(13, 'Jl. Raya Pondok Kopi', 'TL. Tarkindo', 'Gaya Motor', '', ''),
(14, 'JL. Raya Pondok Gede', 'TL. Pertanian', 'JL. Raya Cacing', '', ''),
(15, 'Terbus Pulo Gadung', 'JL. Raya Fatmawati', '', '', ''),
(16, 'JL. Raya Bekasi / Cakung', '', '', '', ''),
(17, 'JL. Urip Sumoharjo / DPN Polres\r\n', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kendaraan`
--

CREATE TABLE IF NOT EXISTS `data_kendaraan` (
`id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `mobil_penumpang` int(11) NOT NULL,
  `bis` int(11) NOT NULL,
  `truk` int(11) NOT NULL,
  `sepeda_motor` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kendaraan`
--

INSERT INTO `data_kendaraan` (`id`, `tahun`, `mobil_penumpang`, `bis`, `truk`, `sepeda_motor`, `total`) VALUES
(1, 2000, 3038913, 666280, 1707134, 13563017, 18975344),
(2, 2001, 3189319, 680550, 1777293, 15275073, 20922235),
(3, 2002, 3403433, 714222, 1865398, 17002130, 22985183),
(4, 2003, 3792510, 798079, 2047022, 19976376, 26613987),
(5, 2004, 4231901, 933251, 2315781, 23061021, 30541954),
(6, 2005, 5078230, 1110255, 2875116, 28531831, 37623432),
(7, 2006, 6035291, 1350047, 3398958, 32528758, 43313052),
(8, 2007, 6877229, 1736087, 4234238, 41955128, 54802680),
(9, 2008, 7489852, 2059187, 4452343, 47683681, 61685063),
(10, 2009, 7910407, 2160973, 4452343, 52767093, 67336644),
(11, 2010, 8891041, 2250109, 4687789, 61078188, 76907127),
(12, 2011, 9548866, 2254408, 4958738, 68839341, 85601351),
(13, 2012, 10432259, 2273821, 5286061, 76381183, 94373324);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_dki`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_dki` (
`no` int(11) NOT NULL,
  `wilayah` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_dki`
--

INSERT INTO `data_kondisi_jalan_dki` (`no`, `wilayah`, `luas`) VALUES
(1, 'Jakarta Selatan', 145.73),
(2, 'Jakarta Timur', 188.19),
(3, 'Jakarta Pusat', 48.08),
(4, 'Jakarta Barat', 127.11),
(5, 'Jakarta Utara', 143.21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_jakbar`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_jakbar` (
`no` int(11) NOT NULL,
  `jakarta_barat` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_jakbar`
--

INSERT INTO `data_kondisi_jalan_jakbar` (`no`, `jakarta_barat`, `luas`) VALUES
(1, 'Taman Sari', 4.36),
(2, 'Tambora', 5.48),
(3, 'Palmerah', 7.52),
(4, 'Grogol Petamburan', 11.46),
(5, 'Kebon Jeruk', 16.64),
(6, 'Kembangan', 24.64),
(7, 'Cengkareng', 27.93),
(8, 'Kali Deres', 29.08);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_jakpus`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_jakpus` (
`no` int(11) NOT NULL,
  `jakarta_pusat` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_jakpus`
--

INSERT INTO `data_kondisi_jalan_jakpus` (`no`, `jakarta_pusat`, `luas`) VALUES
(1, 'Gambir', 7.6),
(2, 'Tanah Abang', 9.3),
(3, 'Menteng', 6.53),
(4, 'Senen', 4.23),
(5, 'Cempaka Putih', 4.69),
(6, 'Kemayoran', 7.13),
(7, 'Sawah Besar', 6.22),
(8, 'Johar Baru', 2.38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_jaksel`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_jaksel` (
`no` int(11) NOT NULL,
  `jakarta_selatan` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_jaksel`
--

INSERT INTO `data_kondisi_jalan_jaksel` (`no`, `jakarta_selatan`, `luas`) VALUES
(1, 'Tebet', 9.53),
(2, 'Kebayoran Baru', 12.91),
(3, 'Pesanggrahan', 13.47),
(4, 'Cilandak', 18.2),
(5, 'Pasar Minggu', 21.91),
(6, 'Jagakarsa', 25.38),
(7, 'Mampang Prapatan', 7.74),
(8, 'Pancoran', 8.23),
(9, 'Setiabudi', 9.05);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_jaktim`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_jaktim` (
`no` int(11) NOT NULL,
  `jakarta_timur` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_jaktim`
--

INSERT INTO `data_kondisi_jalan_jaktim` (`no`, `jakarta_timur`, `luas`) VALUES
(1, 'Matraman', 4.85),
(2, 'Pulo Gadung', 14.98),
(3, 'Jatinegara', 10.64),
(4, 'Duren Sawit', 22.81),
(5, 'Kramat Jati', 13.34),
(6, 'Makasar', 21.64),
(7, 'Pasar Rebo', 12.94),
(8, 'Ciracas', 16.08),
(9, 'Cipayung', 28.44),
(10, 'Cakung', 42.47);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kondisi_jalan_jakut`
--

CREATE TABLE IF NOT EXISTS `data_kondisi_jalan_jakut` (
`no` int(11) NOT NULL,
  `jakarta_utara` varchar(250) NOT NULL,
  `luas` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kondisi_jalan_jakut`
--

INSERT INTO `data_kondisi_jalan_jakut` (`no`, `jakarta_utara`, `luas`) VALUES
(1, 'Cilincing', 42.56),
(2, 'Koja', 11.74),
(3, 'Kelapa Gading', 16.12),
(4, 'Tanjung Priok', 24.9),
(5, 'Pademangan', 11.91),
(6, 'Penjaringan', 35.98);

-- --------------------------------------------------------

--
-- Struktur dari tabel `umpan_balik`
--

CREATE TABLE IF NOT EXISTS `umpan_balik` (
`no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pesan` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umpan_balik`
--

INSERT INTO `umpan_balik` (`no`, `nama`, `email`, `judul`, `pesan`) VALUES
(1, 'Ocky Aditia Saputra', 'ocky.aditia@gmail.com', 'Map', 'Map Belum Visualisasi Data');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kemacetan`
--
ALTER TABLE `data_kemacetan`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kondisi_jalan_dki`
--
ALTER TABLE `data_kondisi_jalan_dki`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kondisi_jalan_jakbar`
--
ALTER TABLE `data_kondisi_jalan_jakbar`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kondisi_jalan_jakpus`
--
ALTER TABLE `data_kondisi_jalan_jakpus`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kondisi_jalan_jaksel`
--
ALTER TABLE `data_kondisi_jalan_jaksel`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kondisi_jalan_jaktim`
--
ALTER TABLE `data_kondisi_jalan_jaktim`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_kondisi_jalan_jakut`
--
ALTER TABLE `data_kondisi_jalan_jakut`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kemacetan`
--
ALTER TABLE `data_kemacetan`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_dki`
--
ALTER TABLE `data_kondisi_jalan_dki`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_jakbar`
--
ALTER TABLE `data_kondisi_jalan_jakbar`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_jakpus`
--
ALTER TABLE `data_kondisi_jalan_jakpus`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_jaksel`
--
ALTER TABLE `data_kondisi_jalan_jaksel`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_jaktim`
--
ALTER TABLE `data_kondisi_jalan_jaktim`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data_kondisi_jalan_jakut`
--
ALTER TABLE `data_kondisi_jalan_jakut`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
