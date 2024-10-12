-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2018 pada 10.31
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_oke`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `kodebarang` char(4) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `kodejenis` char(4) NOT NULL,
  `harga` double NOT NULL,
  `stok` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`kodebarang`, `namabarang`, `kodejenis`, `harga`, `stok`) VALUES
('001', 'Cireng Keju', '2', 9000, 20),
('002', 'Cireng coklat', '4', 8000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_customer`
--

CREATE TABLE `t_customer` (
  `idcustomer` char(10) NOT NULL,
  `namacustomer` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_customer`
--

INSERT INTO `t_customer` (`idcustomer`, `namacustomer`, `alamat`, `email`, `notlp`) VALUES
('001', 'asdj', 'jl.kemayoran', '20@gmail.com', '526351263');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail`
--

CREATE TABLE `t_detail` (
  `notransaksi` char(20) NOT NULL,
  `tanggalpemesanan` date NOT NULL,
  `idcustomer` char(50) NOT NULL,
  `namacustomer` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodebarang` char(20) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `qtypemesanan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_detail`
--

INSERT INTO `t_detail` (`notransaksi`, `tanggalpemesanan`, `idcustomer`, `namacustomer`, `alamat`, `kodebarang`, `namabarang`, `harga`, `qtypemesanan`, `total`, `grandtotal`) VALUES
('001', '2002-04-05', '', 'udin', 'Jl. utan panjang', '002', 'udin', 9000, 1, 9000, 9000),
('004', '2002-04-05', '', 'udin', 'Jl. utan panjang', '002', 'udin', 9000, 1, 9000, 9000),
('005', '0000-00-00', '', 'rima', 'jl.kemayoran', '003', 'rima', 9000, 2, 18000, 18000),
('q', '0000-00-00', '', 'w', 'ad', 'asd', 'asd', 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_header`
--

CREATE TABLE `t_header` (
  `notransaksi` char(11) NOT NULL,
  `tanggalpemesanan` date NOT NULL,
  `idcustomer` char(11) NOT NULL,
  `idpetugas` char(11) NOT NULL,
  `kodebarang` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jenis`
--

CREATE TABLE `t_jenis` (
  `kodejenis` char(4) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_masuk`
--

CREATE TABLE `t_masuk` (
  `kodebarang` char(10) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `namasupplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `jumlahmasuk` int(11) NOT NULL,
  `stokakhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_masuk`
--

INSERT INTO `t_masuk` (`kodebarang`, `namabarang`, `namasupplier`, `tanggal`, `harga`, `stok`, `jumlahmasuk`, `stokakhir`) VALUES
('003', 'Tepung Terigu', 'PT. Pundi Kencana', '0000-00-00', 250000, 200, 20, 220);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `iduser` char(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`iduser`, `username`, `password`, `email`, `level`) VALUES
('001', 'imam', '123', 'a@gmail.com', 'admin'),
('002', 'udin', '123', 'a@gmail.com', 'kasir'),
('003', 'maman', '321', 'h@gmail.com', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `t_detail`
--
ALTER TABLE `t_detail`
  ADD PRIMARY KEY (`notransaksi`);

--
-- Indexes for table `t_header`
--
ALTER TABLE `t_header`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `kodebarang` (`kodebarang`);

--
-- Indexes for table `t_jenis`
--
ALTER TABLE `t_jenis`
  ADD PRIMARY KEY (`kodejenis`);

--
-- Indexes for table `t_masuk`
--
ALTER TABLE `t_masuk`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_header`
--
ALTER TABLE `t_header`
  ADD CONSTRAINT `t_header_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `t_barang` (`kodebarang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
