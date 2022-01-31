-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2022 pada 15.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat_luar`
--

CREATE TABLE `alamat_luar` (
  `id_alamat` int(11) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `jalan` varchar(225) NOT NULL,
  `rt` varchar(225) NOT NULL,
  `no_rmh` varchar(225) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat_luar`
--

INSERT INTO `alamat_luar` (`id_alamat`, `no_kk`, `jalan`, `rt`, `no_rmh`, `kelurahan`, `kecamatan`) VALUES
(2, '0987654321234567', 'jend.Sutoyo', '17', '2', 'batu ampar', 'balikpapan utara'),
(4, '6767545600012347', 'sutoyo', '14', '6', 'muara rapak', 'balikpapan utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_dalam`
--

CREATE TABLE `kk_dalam` (
  `id_kk` int(11) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_kepala` varchar(225) NOT NULL,
  `jalan` varchar(225) NOT NULL,
  `no_rt` varchar(11) NOT NULL,
  `no_rumah` varchar(11) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kk_dalam`
--

INSERT INTO `kk_dalam` (`id_kk`, `no_kk`, `nama_kepala`, `jalan`, `no_rt`, `no_rumah`, `kelurahan`, `kecamatan`) VALUES
(1, '1234567891234567', 'mamat', 'kesesatan', '15', '666', 'Karang Rejo', 'Balikpapan Tenggara'),
(2, '1234567891234568', 'diva', 'indrakila', '15', '2', 'karang rejo', 'balikpapan tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_luar`
--

CREATE TABLE `kk_luar` (
  `id_kk` int(11) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_kepala` varchar(225) NOT NULL,
  `jalan` varchar(225) NOT NULL,
  `no_rt` varchar(11) NOT NULL,
  `no_rumah` varchar(11) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kk_luar`
--

INSERT INTO `kk_luar` (`id_kk`, `no_kk`, `nama_kepala`, `jalan`, `no_rt`, `no_rumah`, `kelurahan`, `kecamatan`) VALUES
(1, '0987654321234567', 'juanidi', 'insan', '15', '2', 'telaga sari', 'balikpapan kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('rt','sekertaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id_user`, `nama`, `password`, `level`) VALUES
(1, 'mmt', '$2y$10$iIYGGeinP/fVd/E2eRfGUOgg0ysoL/9CBoxCI.X68Ko1kLiiDBwDu', 'rt'),
(2, 'nana', '$2y$10$6wpRw.Fv3ULLpPMf2v0IBeoJXvMhPIiqxxYxMr0fGgYuv5qfiKXkW', 'rt'),
(4, 'md', '123', 'sekertaris'),
(5, 'jane', '$2y$10$vZGTy0imO4F8Sqj.Z.Gn1.OGLeySuPGN2Fw3t83z2hMueSyycCO6m', 'sekertaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_dalam`
--

CREATE TABLE `warga_dalam` (
  `id_masyarakat` int(11) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `nik` char(16) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` varchar(225) NOT NULL,
  `agama` varchar(225) NOT NULL,
  `pendidikan` varchar(225) NOT NULL,
  `jenis_pekerjaan` varchar(225) NOT NULL,
  `status_pernikahan` varchar(225) NOT NULL,
  `status_hubungan` varchar(225) NOT NULL,
  `kewarganegaraan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga_dalam`
--

INSERT INTO `warga_dalam` (`id_masyarakat`, `no_kk`, `nama_lengkap`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `status_pernikahan`, `status_hubungan`, `kewarganegaraan`) VALUES
(1, '1234567891234567', 'Budi', '647112345678910', 'laki_laki', 'balikpapan', '2022-01-21', 'kristen', 'smk', 'pelajar', 'belum kawin', 'anak', 'WNI'),
(2, '1234567891234568', 'Sintia', '647112345678910', 'perempuan', 'balikpapan', '2022-01-21', 'kristen', 'smk', 'pelajar', 'belum kawin', 'anak', 'WNI'),
(3, '1234567891234568', 'danang', '647112345678910', 'laki_laki', 'balikpapan', '2022-01-21', 'kristen', 'smk', 'pelajar', 'belum kawin', 'anak', 'WNI'),
(4, '1234567891234568', 'tsuimin', '6471042910030033', 'laki_laki', 'balikpapan', '2022-01-17', 'kristen', 'smk', 'pelajar', 'belum kawin', 'anak', 'WNI'),
(5, '0987654321234567', 'junaidi', '1111111111111111', 'laki-laki', 'balikpapan', '2022-01-11', 'islam', 'smk', 'Buruh', 'Kawin', 'Kepala Keluarga', 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_luar`
--

CREATE TABLE `warga_luar` (
  `id_masyarakat` int(11) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `nik` char(16) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` varchar(225) NOT NULL,
  `agama` varchar(225) NOT NULL,
  `pendidikan` varchar(225) NOT NULL,
  `jenis_pekerjaan` varchar(225) NOT NULL,
  `status_pernikahan` varchar(225) NOT NULL,
  `status_hubungan` varchar(225) NOT NULL,
  `kewarganegaraan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga_luar`
--

INSERT INTO `warga_luar` (`id_masyarakat`, `no_kk`, `nama_lengkap`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `status_pernikahan`, `status_hubungan`, `kewarganegaraan`) VALUES
(1, '0987654321234567', 'junaidi', '8787678765455543', 'laki-laki', 'balikpapan', '2022-01-14', 'islam', 'smk', 'Buruh', 'Kawin', 'Kepala Keluarga', 'WNI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat_luar`
--
ALTER TABLE `alamat_luar`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `kk_dalam`
--
ALTER TABLE `kk_dalam`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `kk_luar`
--
ALTER TABLE `kk_luar`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga_dalam`
--
ALTER TABLE `warga_dalam`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indeks untuk tabel `warga_luar`
--
ALTER TABLE `warga_luar`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat_luar`
--
ALTER TABLE `alamat_luar`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kk_dalam`
--
ALTER TABLE `kk_dalam`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kk_luar`
--
ALTER TABLE `kk_luar`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `warga_dalam`
--
ALTER TABLE `warga_dalam`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `warga_luar`
--
ALTER TABLE `warga_luar`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
