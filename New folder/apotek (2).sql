-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2023 pada 03.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(2, 'doni', '12345678', 'doni harisandi'),
(3, 'yeni', '123456', 'yeni'),
(4, 'yeni', '123456', 'yeni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id` int(4) NOT NULL,
  `kode_pesan` varchar(7) NOT NULL,
  `kode_obat` char(5) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id`, `kode_pesan`, `kode_obat`, `jumlah`) VALUES
(7, 'LDX74GI', 'A0001', 1),
(8, 'JMKSAEM', 'A0001', 1),
(9, '0QXXA9B', 'A0001', 1),
(10, '4QEP2AU', 'A0001', 1),
(11, 'BQSVB5A', 'A0001', 1),
(12, 'Z4KL9D5', 'A0001', 1),
(13, 'JL8QS86', 'A0001', 1),
(14, 'J2EV2YH', 'A0001', 2),
(15, 'ZBRZPKK', 'A0001', 1),
(16, '7SOJQBU', 'A0004', 1),
(17, 'NEJNAUH', 'A', 2),
(18, 'F1A7DP9', '00122', 2),
(19, 'WNU76TP', 'A0001', 1),
(20, 'J8VVSTT', '00122', 2),
(21, 'SM6ABZL', 'A', 4),
(22, '4CLF071', 'A0001', 3),
(23, 'YGF4VG2', '00122', 1),
(24, 'YVM0XEW', 'A', 1),
(25, 'TFGIDKP', 'A0004', 1),
(26, 'TF7787C', 'A0001', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(4) NOT NULL,
  `kode_obat` char(5) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_session` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `kode_obat`, `jumlah`, `id_session`) VALUES
(3, 'A0004', 1, 'rdaduzzs4rx9rze9x337ujkdy60sxfu6s8i5ckqu'),
(4, 'A0001', 2, 'oh0rj21cqlfg5zzr9el9s3fzt4yl0n8z835e67uy'),
(5, 'A0001', 1, 'm5lc7ueibrx4y58wijy31ihqzqplsjapxtq3os32'),
(6, 'A0001', 1, 'qpnnsjjmcefxht653evwgj0vuwpgxe1csb6pa9g9'),
(10, 'A0001', 1, 'mb2qse9z88oqjnfwuv8f6fs6ei9pb4fyi86oytpa'),
(12, '00122', 1, '1aqtgo7j57ppn11vu9b7jhwgr65nywkk79nu4i2v'),
(23, '00122', 1, 'ft9jjwx4rmuondrwgqovx6d6vx22lyj9t2ifokd5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kode_obat` char(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bentuk` varchar(100) NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `manfaat` varchar(200) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama`, `bentuk`, `konsumen`, `manfaat`, `harga`) VALUES
('00122', 'Promag', 'Tabel', 'Dewasa', 'Meredekan Asam Lambung', 10000),
('A', 'H', 'TABLET', 'Dewasa', 'HJJJ', 3),
('A0001', 'Paracetamol', 'Tablet', 'Dewasa', 'Meredakan pusing, demam dan sebagainya', 20000),
('A0002', 'coba ya', 'Tablet', 'Dewasa', 'eeee', 122222),
('A0003', 'Amoxilin', 'Sirup', 'Anak-anak dan Dewasa', 'Banyak banget', 20000),
('A0004', 'Diapet', 'Tablet ', 'Dewasa', 'Banyak banget guys', 30000),
('dccs', 'czxc', 'zxczxcc', '12w', 'zxczx', 22134100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`) VALUES
('0101', 'wahyu'),
('0987', 'doni'),
('098765', 'Paracetamolll'),
('10', 'untung'),
('11111', 'Ayu'),
('121212', 'Anugrah'),
('123', 'Paracetamol'),
('123123', 'Elin '),
('123345678909876543', 'admin'),
('123345678j', 'admin'),
('123456', 'sandi'),
('12345678', 'yeni Asmaayani'),
('22222', 'fauzan'),
('345678', 'yeni Asmaayani'),
('4321', 'doni'),
('5252', 'doni'),
('asssss', 'admin'),
('doni', 'doni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesan` varchar(7) NOT NULL,
  `id_pemesan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('B','L') NOT NULL DEFAULT 'B',
  `konfirmasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesan`, `id_pemesan`, `harga`, `tanggal`, `status`, `konfirmasi`) VALUES
('0QXXA9B', '123', 20000, '2023-06-11', 'B', NULL),
('4CLF071', '12345678', 60000, '2023-08-24', 'L', '2023-08-24'),
('4QEP2AU', 'doni', 20000, '2023-06-12', 'B', NULL),
('7SOJQBU', '11111', 30000, '2023-07-21', 'L', '2023-07-21'),
('BQSVB5A', '4321', 20000, '2023-06-12', 'L', '2023-06-12'),
('F1A7DP9', '10', 20000, '2023-08-09', 'B', NULL),
('J2EV2YH', '12345678', 40000, '2023-07-18', 'L', '2023-07-18'),
('J8VVSTT', '345678', 20000, '2023-08-10', 'B', NULL),
('JL8QS86', '12345678', 20000, '2023-07-16', 'L', '2023-07-16'),
('JMKSAEM', '123456', 20000, '2023-06-11', 'B', NULL),
('LDX74GI', '0987', 20000, '2023-06-11', 'B', NULL),
('NEJNAUH', '345678', 6, '2023-08-09', 'B', NULL),
('SM6ABZL', '12345678', 12, '2023-08-24', 'B', NULL),
('TF7787C', '22222', 20000, '2023-09-12', 'B', NULL),
('TFGIDKP', '0101', 30000, '2023-08-29', 'B', NULL),
('WNU76TP', '121212', 20000, '2023-08-09', 'L', '2023-08-09'),
('YGF4VG2', '123123', 10000, '2023-08-29', 'L', '2023-08-29'),
('YVM0XEW', '123123', 3, '2023-08-29', 'B', NULL),
('Z4KL9D5', '5252', 20000, '2023-06-22', 'L', '2023-06-22'),
('ZBRZPKK', '345678', 20000, '2023-07-18', 'B', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_obat` (`kode_obat`),
  ADD KEY `kode_pesan` (`kode_pesan`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kode_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`kode_pesan`) REFERENCES `pemesanan` (`kode_pesan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
