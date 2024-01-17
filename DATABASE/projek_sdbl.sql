-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 03:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_sdbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_perusahaan`, `nama_barang`, `harga`, `stok`) VALUES
(5, 'Iphone', 'Iphone 12', 21000000, 21),
(6, 'Oppo', 'Oppo V5', 3500000, 25),
(7, 'Samsung', 'Samsung Z Flip', 10000000, 20),
(8, 'Samsung', 'Samsung Galaxy Note Series', 10000000, 40),
(9, 'Realme', 'Realme C11', 1500000, 50),
(10, 'Samsung', 'Samsung Galaxy M11', 1800000, 40),
(11, 'Oppo', 'Oppo A33', 1800000, 30),
(12, 'Redmi', 'Realme 9C', 1500000, 20),
(13, 'Samsung', 'Samsung A02S', 1980000, 40),
(14, 'Xiaomi', 'Xiaomi Redmi 9A', 1300000, 20),
(15, 'Samsung', 'Samsung Galaxy A01', 1250000, 30),
(16, 'Realme', 'Realme C15', 1999000, 30),
(17, 'Vivo', 'Vivo Y12', 1999000, 40),
(18, 'Infinix', 'Infinix Hot 9', 1899000, 20),
(19, 'Itel', 'Vision1 Pro', 1049000, 30),
(20, 'Realme', 'Realme 5i', 1999000, 30),
(21, 'Infinix', 'Infinix Hot 7 Pro', 1999000, 30),
(22, 'Samsung', 'Samsung Galaxy A11', 1799000, 50),
(23, 'Redmi', 'Redmi Note 8', 1949000, 40),
(24, 'Xiaomi', 'POCO M3', 1999000, 60),
(25, 'Realme', 'Realme Narzo 30A', 1899000, 20),
(26, 'Redmi', 'Redmi 9T', 1899000, 50),
(27, 'Infinix', 'Infinix Hot 10', 1749000, 30),
(28, 'Redmi', 'Redmi Note 10 s', 2500000, 60),
(29, 'Samsung', 'Samsung A03S', 1700000, 70),
(30, 'Samsung', 'Samsung Galaxy M22', 2600000, 50),
(31, 'Oppo', 'Oppo A16', 1600000, 50),
(32, 'Oppo', 'A15s', 1500000, 70),
(33, 'Xiaomi', 'POCO M3 Pro 5G', 2500000, 40),
(34, 'Realme', 'Realme C21', 1300000, 60),
(35, 'Realme', 'Realme C25', 1700000, 50),
(36, 'Vivo', 'Vivo Y21s', 2200000, 30),
(37, 'Vivo', 'Vivo Y51A', 2700000, 30),
(38, 'Infinix', 'Infinix Hot 11', 1680000, 50),
(39, 'Infinix', 'Infinix Hot 10 Pro NFC', 2300000, 60),
(40, 'Vivo', 'Vivo Y20', 1700000, 30),
(41, 'Samsung', 'Samsung M12', 1600000, 30),
(42, 'Samsung', 'Samsung Galaxy M02', 1200000, 40),
(43, 'Oppo', 'Oppo A12', 1350000, 60),
(44, 'Oppo', 'Oppo A12', 1350000, 60),
(45, 'Samsung', 'Samsung A15s', 1900000, 70),
(46, 'Samsung', 'Samsung A15s', 1900000, 70),
(47, 'Vivo', 'Vivo Y12s', 1700000, 50),
(48, 'Nokia', 'Nokia G300', 2500000, 40),
(49, 'Nokia', 'Nokia G50', 1500000, 50),
(50, 'Nokia', 'Nokia XR20', 1999000, 40),
(51, 'Apple', 'Iphone 13 Pro Max', 18400000, 40),
(52, 'Lenovo', 'Lenovo Legion Duel', 20000000, 30),
(53, 'Oppo', 'Oppo Find X3 Pro', 7000000, 50),
(54, 'Nokia', 'Nokia C30', 1800000, 20),
(55, 'Asus', 'Asus Zenfone 8', 7900000, 30),
(56, 'Apple', 'Iphone 13 Mini', 13000000, 50),
(57, 'Lenovo', 'Lenovo Legion Pro', 10000000, 20),
(58, 'Oppo', 'Oppo Find X3', 8000000, 60),
(59, 'Nokia', 'Nokia 6310', 200000, 30),
(60, 'Asus', 'Asus ROG Phone 5', 14700000, 30),
(61, 'Apple', 'Iphone 12 Pro Max', 12000000, 11),
(62, 'Lenovo', 'Lenovo Z6 Pro 5G', 3500000, 20),
(63, 'Oppo', 'Oppo Find X2 Pro', 3000000, 15),
(64, 'Nokia', 'Nokia C1 2nd Edition', 1500000, 14),
(65, 'Asus', 'Asus ROG Phone 3', 7100000, 21),
(66, 'Apple', 'Iphone 12 Mini', 14000000, 20),
(67, 'Lenovo', 'Lonovo Z5 Pro GT', 6000000, 25),
(68, 'Oppo', 'Oppo Find X2', 3500000, 21),
(69, 'Nokia', 'Nokia 110 4G', 1200000, 11),
(70, 'Asus', 'Asus ROG Phone 2', 5600000, 14),
(71, 'Apple', 'Iphone SE', 2100000, 19),
(72, 'Lenovo', 'Lenovo Z6 Pro', 4200000, 15),
(73, 'Oppo', 'Oppo Reno6 Pro', 4600000, 31),
(74, 'Nokia', 'Nokia 105 4G', 100000, 7),
(75, 'Asus', 'Asus Zenfone 6', 3599000, 27),
(76, 'Apple', 'Iphone 8', 2190000, 22),
(77, 'Lenovo', 'Lenovo Z6', 3550000, 25),
(78, 'Xiaomi', 'POCO F3', 2680000, 31),
(79, 'Nokia ', 'Nokia C20 Plus', 2370000, 26),
(80, 'Asus', 'Asus Zenfone Max Pro M2', 1210000, 8),
(81, 'Apple', 'Iphone XR', 4850000, 17),
(82, 'Lenovo', 'Lenovo Z6 Youth', 4570000, 15),
(83, 'Oppo', 'Oppo Ace2', 7450000, 35),
(84, 'Nokia', 'Nokia C01 Plus', 1510000, 37),
(85, 'Asus', 'Asus Zenfone Live L2', 950000, 5),
(86, 'Apple', 'Iphone X', 4150000, 12),
(87, 'Lenovo', 'Lenovo Z5 Pro', 1234500, 14),
(88, 'Oppo', 'Oppo Find X3 Neo 5G', 6599000, 16),
(89, 'Nokia ', 'Nokia 2720 V Flip', 1200000, 18),
(90, 'Asus ', 'Asus Zenfone 5Z', 2300000, 23),
(91, 'Xiaomi', 'POCO F2 Pro', 4699000, 50),
(92, 'Apple', 'Iphone 11 Pro Max', 11500000, 24),
(93, 'Lenovo', 'Lenovo Z5s', 2499000, 32),
(94, 'Oppo', 'Oppo Reno Ace', 2750000, 25),
(95, 'Nokia', 'Nokia X20', 3899000, 37),
(96, 'Asus', 'Asus Zenfone 5Q', 1500000, 11),
(97, 'Iphone', 'Iphone 11 Pro ', 13428000, 25),
(98, 'Lenovo', 'Lenovo S5 Pro', 2865000, 20),
(99, 'Nokia', 'Nokia X10', 3410000, 29),
(100, 'Asus', 'Asus Zenfone Live L1', 1769000, 18),
(101, 'Realme ', 'Realme GT 5G', 4678000, 15),
(102, 'Sony', 'Sony Xperia XZ3', 1500000, 30),
(103, 'Sony', 'Sony Xperia XZ2', 4490000, 40),
(104, 'Sony', 'Sony Xperia 1 III', 18790000, 20),
(105, 'Sony', 'Sony Xperia Z5', 1015000, 41),
(106, 'Sony', 'Sony Xperia XZ Premium', 7500000, 15),
(107, 'Samsung', 'Samsung J1 Prime', 3500000, 20),
(108, 'Vivo', 'Vivo Y33', 3099000, 3),
(109, 'Oppo', 'Oppo F1s', 500000, 7),
(110, 'Nokia', 'Sony Experia X Compact', 800000, 12),
(111, 'Iphone', 'Iphone 6', 2190000, 9),
(112, 'Iphone', 'Iphone 7', 1560000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`) VALUES
(8, 'Abid Tondi', 'nugraha@gmail.com', '$2y$10$ciT0u.xs5omHN5c1TVkET.wTkh/DzKg4vlKMCO77cJzGGUTZefIwu', 1),
(9, 'Abid Tondi Nugraha', 'tondi@gmail.com', '$2y$10$FxcZkjvzk9kskXleDESRCe3K/q0z12B5Lpawe4kS1uQZbVowo7AFS', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
