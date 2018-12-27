-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2018 pada 17.00
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nim` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nim`, `nama`, `no_hp`, `email`, `alamat`) VALUES
(20001, '12177764', 'budi santosa\r\n', '89608960896\r', '', 'cilebut\r\n'),
(20002, '12177765', 'yuda\r\n', '89608960897\r', '', 'bogor\r\n'),
(20003, '12177766', 'aldi\r\n', '89608960898\r', '', 'dramga\r\n'),
(20004, '12177767', 'rahma\r\n', '89608960899\r', '', 'ciampea\r\n'),
(20005, '12177768', 'wati\r\n', '89608960900\r', '', 'ciomas\r\n'),
(20006, '12177769', 'adnin\r\n', '89608960901\r', '', 'kebon pedes\r\n'),
(20007, '12177770', 'rizal\r\n', '89608960902\r', '', 'ciluar\r\n'),
(20008, '12177771', 'yazid\r\n', '89608960903\r', '', 'cilebut\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `th_terbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `stok`, `th_terbit`, `id_kategori`) VALUES
(10001, 'pemrograman visual\r\n', 'tatang sutarbi\r\n', 'abdi jaya\r\n', 10, 2017, 1),
(10002, 'pemrograman visual\r\n', 'tatang sutarbi\r\n', 'abdi jaya\r\n', 10, 2017, 1),
(10004, 'pemrograman visual\r\n', 'tatang sutarbi\r\n', 'abdi jaya\r\n', 10, 2017, 1),
(10005, 'pemrograman visual\r\n', 'tatang sutarbi\r\n', 'abdi jaya\r\n', 10, 2017, 1),
(10006, 'pemrograman visual\r\n', 'jonsen', 'abdi jaya\r\n', 10, 2000, 1),
(10007, 'pemrograman visual\r\n', 'jonsen', 'abdi jaya\r\n', 10, 2000, 1),
(10008, 'pemrograman visual\r\n', 'jonsen', 'abdi jaya\r\n', 10, 2000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_transaksi` int(10) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jml_pinjam` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_transaksi`, `id_anggota`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `jml_pinjam`, `denda`) VALUES
(0, 20006, 10006, '0000-00-00', '0000-00-00', 2, 0),
(30001, 20001, 10001, '0000-00-00', '0000-00-00', 2, 0),
(30002, 20002, 10002, '0000-00-00', '0000-00-00', 2, 0),
(30003, 20003, 10003, '0000-00-00', '0000-00-00', 2, 0),
(30004, 20004, 10004, '0000-00-00', '0000-00-00', 2, 0),
(30005, 20005, 10005, '0000-00-00', '0000-00-00', 2, 0),
(30007, 20007, 10007, '0000-00-00', '0000-00-00', 2, 0),
(30008, 20008, 10008, '0000-00-00', '0000-00-00', 2, 0),
(30009, 20009, 10009, '0000-00-00', '0000-00-00', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`) VALUES
('zaelani', 'el', 'zaelaniel2181@gmail.com', 'satriamerah'),
('joko', 'joko', 'joko@gmail.com', 'jokojoko');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_userpinjam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_userpinjam` (
`id_anggota` int(10)
,`nama` varchar(50)
,`id_transaksi` int(10)
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`id_buku` int(10)
,`judul` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_userpinjam`
--
DROP TABLE IF EXISTS `v_userpinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_userpinjam`  AS  select `a`.`id_anggota` AS `id_anggota`,`a`.`nama` AS `nama`,`b`.`id_transaksi` AS `id_transaksi`,`b`.`tanggal_pinjam` AS `tanggal_pinjam`,`b`.`tanggal_kembali` AS `tanggal_kembali`,`c`.`id_buku` AS `id_buku`,`c`.`judul` AS `judul` from ((`anggota` `a` join `pinjam` `b` on((`a`.`id_anggota` = `b`.`id_anggota`))) join `buku` `c` on((`b`.`id_buku` = `c`.`id_buku`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
