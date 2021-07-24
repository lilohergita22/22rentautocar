--
-- Database: `db_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `nama_lengkap` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(25) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `nama_lengkap`, `email`) VALUES
('ananda', '12192249', 'Ananda Pradipta Putra Nugraha', 'anandasolo@gmail.com'),
('admin', 'admin', 'Pemilik Rental Mobil Jaya Sentosa', 'rentalmobil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(12) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_ktp` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `username`, `password`, `no_ktp`, `nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`) VALUES
(1, 'budi', 'budi', '12121212', 'budi saputra', '2000-01-01', 'laki-laki', 'solo', 'islam', '08989898989'),
(2, 'joko', 'joko', '13131415', 'joko sidik', '2000-02-02', 'laki-laki', 'semarang', 'islam', '0888888880');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id_mobil` int(11) NOT NULL,
  `merk` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ulasan` text COLLATE latin1_general_ci NOT NULL,
  `tahun` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `harga` int(25) DEFAULT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id_mobil`, `merk`, `ulasan`, `tahun`, `harga`, `gambar`) VALUES
(1, 'Avanza', 'Cocok untuk keluarga tersayang\r\nfasilitas mobil lengkap', '2016', 500000, 's3.jpg'),
(2, 'Panther', 'Mobil dengan mesin yang gagah, sesuai kebutuhan untuk berpergian jauh dan dengan medan yang sulit.', '2010', 500000, 's5.jpg'),
(3, 'mpv', 'Cocok digunakan oleh keluarga besar, kapasitas kursi lebih banyak, fasilitas terbaik', '2020', 300000, 'mpv.png'),
(4, 'suv', 'cocok berkendara bersama keluarga besar, kapasitas kursi lebih banyak. baik untuk jarak jauh', '2018', 300000, 'suv.jpeg'),
(5, 'BIS Pariwisata', 'Cocok untuk berpergian jauh seperti berwisata luar kota,\r\nfasilitas terbaik FULL AC, ada Toilet juga lhoo ', '2017', 400000, 'bus.jpeg'),
(6, 'Mini Bus', 'Cocok untuk berwisata di dalam kota,\r\ncocok untuk medan yang berkelok kelok, Full AC', '2015', 200000, 'mini.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` int(10) DEFAULT NULL,
  `id_mobil` int(10) DEFAULT NULL,
  `merk` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tahun` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `harga` int(25) DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `lama_sewa` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_mobil`, `merk`, `tahun`, `harga`, `tanggal_sewa`, `lama_sewa`, `total_harga`) VALUES
(11, 2, 5, 'BIS Pariwisata', '2017', 400000, '2020-12-17', 3, 1200000),
(9, 2, 4, 'suv', '2018', 300000, '2020-12-03', 5, 1500000),
(10, 2, 5, 'BIS Pariwisata', '2017', 400000, '2020-12-29', 5, 2000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
