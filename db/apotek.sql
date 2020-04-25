-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 10:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'tyorevandi', '1301180314', 'TYO REVANDI'),
(2, 'lolo', 'lolo', 'lolo'),
(3, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id` int(4) NOT NULL,
  `kode_pesan` varchar(7) NOT NULL,
  `kode_obat` char(5) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(4) NOT NULL,
  `kode_obat` char(5) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_session` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` char(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bentuk` varchar(100) NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `manfaat` varchar(200) NOT NULL,
  `harga` float NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama`, `bentuk`, `konsumen`, `manfaat`, `harga`, `gambar`) VALUES
('A0001', 'Acarbose', 'Tablet, Kapsul', 'Dewasa', 'Mengontrol kadar gula dalam darah', 5000, 'Acarbose.jpg'),
('A0002', 'Albumin', 'Obat infus', 'Dewasa', 'Menangani defisiensi albumin', 10000, 'Albumin.jpg'),
('A0003', 'Amfetamin', 'Tablet, kapsul, dan puyer', 'Dewasa dan anak-anak', 'Menangani ADHD, mengobati narkolepsi, menurunkan berat badan', 12500, 'Amfetamin.jpg'),
('A0004', 'Atenolol', 'Tablet', 'Dewasa', 'Mengobati angina, gangguan detak jantung, dan hipertensi. Menjaga kesehatan jantung Menjaga kesehatan jantu setelah serangan jantung', 25000, 'Atenolol.jpg'),
('B0001', 'Bacitracin', 'Biocream', 'Dewasa dan anak-anak', 'Mencegah infeksi bakteri pada luka ringan di kulit', 15000, 'Bacitracin.jpg'),
('B0002', 'Baclofen', 'Tablet', 'Dewasa dan anak-anak', 'Meredakan kejang otot', 32000, 'Baclofen.jpg'),
('C0001', 'Captopril', 'Tablet', 'Dewasa', 'Menangani hipertensi, mencegah komplikasi setelah serangan jantung', 52000, 'Captopril.jpg'),
('D0001', 'Diazepam', 'Tablet, Obat cair, Suntikan', 'Dewasa dan anak-anak', 'Mengatasi insomnia, serangan kecemasan, melemaskan otot kejang', 12000, 'Diazepam.jpg'),
('G0001', 'Gliserol', 'tablet', 'Dewasa dan Anak-anak', 'mengatasi konstipasi atau kesulitan buang air besar secara sementara', 35000, 'Gliserol.jpg'),
('G0002', 'Gliserol TOpikal', 'Biocream', 'Dewasa', 'melembapkan kulit, mencegah kulit kering, kasar, bersisik, gatal, dan iritasi kulit ringan', 30000, 'Gliserol_Topikal.jpg'),
('H0001', 'Herbapain', 'Tablet', 'Dewasa', 'Untuk meredakan sakit kepala', 15000, 'Herbapain.jpg'),
('H0002', 'Holisticare Ester C', 'Tablet', 'Dewasa dan Anak-anak', 'menambah imunitas tubuh, memenuhi vitamin c di dalam tubuh', 25000, 'Holisticare_Ester_C.jpg'),
('I0001', 'Imboost', 'Tablet', 'Dewasa', 'meredakan flu dan sakit kepala', 15000, 'Imboost.jpg'),
('I0002', 'Insto', 'Obat Tetes', 'Dewasa dan Anak-anak', 'meredakan gejala iritasi mata ringan, seperti mata merah, gatal, atau kering.', 13500, 'Insto.jpg'),
('K0001', 'Kalpanax', 'Biocream', 'Dewasa', 'mengatasi infeksi kulit akibat jamur, seperti kutu air dan panu.', 25000, 'Kalpanax.jpg'),
('K0002', 'Kamulvit', 'Tablet', 'Dewasa dan Anak-anak', 'membantu memenuhi kebutuhan multivitamin dan mineral yang dibutuhkan di masa pertumbuhan serta membantu pertumbuhan tulang dan gigi.', 55000, 'Kamulvit.jpg'),
('K0003', 'Ketamine', 'Cairaqn', 'Pasien Resep Dokter', 'anestesi umum atau obat bius total', 47500, 'Ketamine.jpg'),
('M0001', 'Mederma', 'Biocream', 'Dewasa', 'membantu menyamarkan struktur bekas luka secara nyata, allantoin yang mendorong proses penyembuhan, mengurangi gatal-gatal', 22500, 'Mederma.jpg'),
('M0002', 'Mycoral', 'Biocream', 'Dewasa', 'perkembangan jamur di kulit dan kuku tangan', 25000, 'Mycoral.jpg'),
('M0003', 'Melanox', 'Biocream', 'Dewasa', 'Mengatasi hiperpigmentasi kulit (misalnya flek hitam atau bekas jerawat)', 25000, 'Melanox.jpg'),
('M0004', 'Mixagrip', 'Tablet', 'Dewasa', 'Meredakan gejala flu.', 12500, 'Mixagrip.jpg'),
('N0001', 'Natur-E', 'Tablet', 'Dewasa', 'enjaga kesehatan kulit dan mata, mencegah penuaan dini, meningkatkan sistem kekebalan tubuh', 22500, 'Natur_E.jpg'),
('N0002', 'Neozep Forte', 'Tablet', 'Dewasa', 'Mengobati gejala flu, seperti: hidung tersumbat, demam, pusing, dan bersin-bersin', 15000, 'Neozep_Forte.jpg'),
('N0003', 'Neurobion', 'Tablet', 'Dewasa', 'menjaga kesehatan sistem saraf', 20000, 'Neurobion.jpg'),
('N0004', 'Nevirapine', 'Tablet', 'Dewasa dan Anak-anak', 'Mengatasi infeksi HIV', 35000, 'Nevirapine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesan` varchar(7) NOT NULL,
  `id_pemesan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('B','L') NOT NULL DEFAULT 'B',
  `konfirmasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `nm_review` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `kode_obat` char(5) CHARACTER SET latin1 NOT NULL,
  `isi` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_obat` (`kode_obat`),
  ADD KEY `kode_pesan` (`kode_pesan`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`kode_pesan`) REFERENCES `pemesanan` (`kode_pesan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
