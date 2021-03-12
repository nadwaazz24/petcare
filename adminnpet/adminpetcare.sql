-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2020 pada 14.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpetcare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `tgl`, `gambar`) VALUES
(4, 'kucing', 'Jenis kucing anggora memang dikenal dengan tampilannya yang cantik dan anggun. Namun ternyata kucing anggora juga memiliki kecerdasan yang cukup tinggi. Kucing ini mempunyai berbagai macam cara dalam menghadapi setiap masalah yang dia temukan. Bukan hanya itu, kucing anggora juga memiliki sifat atletis.\r\n       Jenis kucing anggora ini juga mempunyai jiwa sosial yang tinggi dan mudah beradaptasi dengan lingkungan sekitar. Kucing ini dengan ramah akan menyambut teman atau tamu yang datang ke rumah. Tidak hanya itu, kucing anggora juga dapat berteman baik dengan hewan peliharaan lain di sekitar lingkungan. Seperti anjing maupun jenis kucing lain\r\n   Meskipun begitu, kecerdasan kucing anggora memang menjadi tantangan tersendiri. Dengan kemampuan ini, kucing anggora bisa melakukan berbagai macam hal yang terlintas di kepalanya. Tidak jarang, kucing ini bertingkah gaduh ketika kita tidak bisa mengendalikannya. Untuk itu, diperlukan kesabaran yang cukup tinggi untuk menghadapi jenis kucing anggora ini.\r\n', '2020-12-29', 'image_9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sebagai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `email`, `username`, `password`, `sebagai`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelkomentar`
--

CREATE TABLE `tabelkomentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelkomentar`
--

INSERT INTO `tabelkomentar` (`id`, `nama`, `email`, `komentar`, `tgl`, `aktif`) VALUES
(11, 'aleyy', 'aley@gmail.com', 'mantappjiwaa', '2020-12-16', 'Y'),
(12, 'imam', 'imam@koplok.com', 'crot', '2020-12-28', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelpelayanan`
--

CREATE TABLE `tabelpelayanan` (
  `idbooking` int(11) NOT NULL,
  `namapemilik` varchar(50) NOT NULL,
  `namahewan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tanggal` text NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelpelayanan`
--

INSERT INTO `tabelpelayanan` (`idbooking`, `namapemilik`, `namahewan`, `jenis`, `sakit`, `nohp`, `tanggal`, `waktu`, `keterangan`) VALUES
(5, 'aak', 'asu', 'anjing', 'flu', '08973306918', '12/16/2020', '12:30:00', 'okayy'),
(6, 'rakhmat', 'suyo', 'kucing', 'kaki sakit', '08973306609', '12/17/2020', '01:00:00', 'segera di rawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'admin', '$2y$10$4axA3ermZ3.cYsLd2eGM5u.jR.7BbnpAdvKTwkhhwzTDZNQTz9w4O', 'admin@gmail.com', '2020-12-15 02:29:04'),
(2, 'mamat', '$2y$10$j5reGRPcrYbyySDAEKgQl.TFDnM6UK/LUtP68gPQTVrourJjlU6Me', 'mamat@gmail.com', '2020-12-15 02:35:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `namapemilik` varchar(200) NOT NULL,
  `namahewan` varchar(200) NOT NULL,
  `jenishewan` varchar(200) NOT NULL,
  `jeniskel` enum('Jantan','Betina') NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `namapemilik`, `namahewan`, `jenishewan`, `jeniskel`, `gejala`, `alamat`) VALUES
(1, 'mamat', 'mimit', 'kucing', 'Betina', 'flu', 'cirebon'),
(2, 'sakti', 'dimas', 'kucing', 'Jantan', 'kaki sakit', 'celeng');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabelpelayanan`
--
ALTER TABLE `tabelpelayanan`
  ADD PRIMARY KEY (`idbooking`);

--
-- Indeks untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabelpelayanan`
--
ALTER TABLE `tabelpelayanan`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
