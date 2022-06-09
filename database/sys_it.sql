-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220519.4c1c1fcc18
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sys_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id_analysis` int(11) NOT NULL,
  `id_author` int(10) NOT NULL,
  `id_receipt` int(10) NOT NULL,
  `divisi` text NOT NULL,
  `dmg_analysis` text NOT NULL,
  `itm_replacement` text NOT NULL,
  `date_an` datetime NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exit_item`
--

CREATE TABLE `exit_item` (
  `id_item` int(11) NOT NULL,
  `id_author` int(10) NOT NULL,
  `nama_pengirim` text NOT NULL,
  `nama_penerima` text NOT NULL,
  `date` datetime NOT NULL,
  `jabatan` text NOT NULL,
  `nama_barang` text NOT NULL,
  `jumlah_unit` text NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exit_item`
--

INSERT INTO `exit_item` (`id_item`, `id_author`, `nama_pengirim`, `nama_penerima`, `date`, `jabatan`, `nama_barang`, `jumlah_unit`, `author`) VALUES
(13, 2, 'muhammad rafi hadi kesuma', 'welchi ', '2022-06-08 15:29:42', 'Krani OP 97 d', 'keyboard logitech mk120', '1', 'muhammad rafi hadi kesuma');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id_logbook` int(10) NOT NULL,
  `id_author` int(10) NOT NULL,
  `areal` text NOT NULL,
  `date` datetime NOT NULL,
  `kategori` text NOT NULL,
  `user` text NOT NULL,
  `kasus` text NOT NULL,
  `penyelesaian` text NOT NULL,
  `keterangan` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id_master` int(11) NOT NULL,
  `divisi` text NOT NULL,
  `type` text NOT NULL,
  `merk` text NOT NULL,
  `tgl_beli` date NOT NULL,
  `user` text NOT NULL,
  `mainboard` text NOT NULL,
  `processor` text NOT NULL,
  `ram` text NOT NULL,
  `harddisk` text NOT NULL,
  `casing` text NOT NULL,
  `wdw_edition` text NOT NULL,
  `wdw_version` text NOT NULL,
  `licenses_pc` text NOT NULL,
  `office` text NOT NULL,
  `licenses_office` text NOT NULL,
  `other_spec` text NOT NULL,
  `status` text NOT NULL,
  `age` text NOT NULL,
  `ups` text NOT NULL,
  `printer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id_master`, `divisi`, `type`, `merk`, `tgl_beli`, `user`, `mainboard`, `processor`, `ram`, `harddisk`, `casing`, `wdw_edition`, `wdw_version`, `licenses_pc`, `office`, `licenses_office`, `other_spec`, `status`, `age`, `ups`, `printer`) VALUES
(1, 'RO', 'Tablet', 'Samsung', '2021-06-20', 'Komaruzzaman', '', '', '', '', '', 'Android', '', '', '', '', 'Samsung Galaxy TAB S7+ 8/256 GB', 'Active', '0', '', ''),
(2, 'RO', 'PC', 'Acer', '2019-01-01', 'Ir.Bahrumsyah Usar', 'PC All In One Acer', 'Intel Core i5', 'DDR4 4GB', '1 TB', 'AIO', 'WIndows 10', '64 bit', 'Yes', 'Office2010', 'No', '', 'Active', '3', 'ICA 602B', 'Epson L3110'),
(3, 'Finance & Accounting', 'PC', 'ASUS', '2020-10-01', 'Yatiman, SE. Ak.', 'PC All In One Asus V241FFT-BA7', 'Intel Core i7 Gen 8', 'DDR4 4GB', '1 TB', 'AIO', 'WIndows 10', '64 bit', 'Yes', 'Office2010', 'No', 'VGA Nvidia Geforce MX 130 2GB. Display 23.8 (1920x1080)touchscren, No DVD RW', 'Active', '1', 'ICA CE600', 'Epson L3110'),
(4, 'Finance & Accounting', 'Laptop', 'Dell', '2021-10-01', 'Yatiman, SE. Ak.', '', 'Intel Core i5', '8GB DDR 4', '512 SSD', '', 'WIndows 10', '64 bit', 'Yes', 'Office2010', 'No', 'NB DELL INSPIRON 5402 I5-1135G7/8GB/512GB SSD/W10 ', 'Active', '0', '', ''),
(5, 'Finance & Accounting', 'PC', 'HP', '2011-01-01', 'Priyono, SE', 'Socket LGA 1155', 'Intel Core i7', 'DD3 6 GB', '1 TB', 'HP-1070d', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '11', 'ICA 602B', 'Epson L565'),
(6, 'Finance & Accounting', 'Laptop', 'Macbook', '2017-01-01', 'Priyono, SE', '', '', '', '', 'Laptop', '', '', 'Yes', '', 'Yes', '', 'Active', '5', '', ''),
(7, 'Finance & Accounting', 'PC', 'HP', '2011-01-01', 'Andi Wibowo, SE', 'Socket LGA 1155', 'Intel Core i7', 'DD3 6 GB', 'SSD 240 x 2pcs', 'HP-1070d', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '11', 'ICA 602B', 'Epson L360'),
(8, 'Finance & Accounting', 'Laptop', 'Macbook', '2016-01-01', 'Andi Wibowo, SE', '', 'Intel Core i7', '16 GB DDR 3', '256 GB', '', 'MacOS Sierra', 'Versi 10.12.6', 'Yes', 'Office 15.38', 'Yes', 'Grafis Intel Iris Pro 1536 MB', 'Active', '6', '', ''),
(9, 'Finance & Accounting', 'PC', 'HP', '2011-01-01', 'Ana Tatalina, SE', 'Socket LGA 1155', 'Intel Core i7', 'DD3 4 GB', '500 GB', 'HP-1070d', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '11', 'ICA 602B', 'L360 & LX310'),
(10, 'Finance & Accounting', 'PC', 'HP', '2018-01-01', 'Andi Hudaya, SE', 'HP Pavillion 270-P041D', 'Core i7', '8GB DDR 4', '1 TB', 'HP', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'VGA 4 GB', 'Active', '4', 'ICA 602B', 'Epson L360'),
(11, 'Finance & Accounting', 'PC', 'HP-1070d', '2011-01-01', 'Sarman, SE', 'Socket LGA 1155', 'Intel Core i7', 'DDR3 4GB', '500 GB', 'Build Up', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '11', 'ICA 1022B', 'Epson L360'),
(12, 'Finance & Accounting', 'PC', 'Rakitan', '2015-01-01', 'Ryan Nirwanda, S.Kom.', 'Socket LGA 1151', 'Core i5', 'DDR3 4 GB', '1 TB', 'Rakitan', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'AMD Radeon HD 7700', 'Active', '7', 'ICA 602B', 'Epson L3110'),
(13, 'Finance & Accounting', 'PC', 'Rakitan', '2015-01-01', 'Bayu Kadharusman, Amd.', 'Socket LGA 1155 - Gigabyte H61M', 'Intel Core i5', 'DDR3 4 GB', '500 GB', 'Rakitan', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '7', 'ICA 602B', 'Epson L3110'),
(14, 'Finance & Accounting', 'PC', 'HP', '2014-01-01', 'Ria Aminarti', 'All In One HP HWP4219', 'Core i3', 'DDR3 2 GB', '500 GB', 'all in one', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'No VGA - Build In - AIO', 'Active', '8', 'ICA 602B', 'Epson L360'),
(15, 'Finance & Accounting', 'PC', 'HP', '2014-01-01', 'Sepita Wahyuni', 'All In One HP HWP4219', 'Intel Core i3', 'DDR3 2 GB', '500 GB', 'all in one', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'No VGA - Build In - AIO', 'Active', '8', 'ICA 602B', 'Epson L360'),
(16, 'Finance & Accounting', 'PC', 'Rakitan', '2020-01-01', 'Tengku Siti Sandra, SE', 'LGA 1155', 'Core i3', 'DDR3 4GB', '500 GB', 'Rakitan', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '2', 'ICA 602B', 'Epson L3110'),
(17, 'Finance & Accounting', 'PC', 'HP', '2011-01-01', 'Erwita Gratika', 'Socket LGA 1155', 'Intel Core i7', 'DD3 6 GB PC 12800', '1 TB', 'HP-1070d', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'VGA 1 GB NVIDIA GTX 460', 'Active', '11', 'ICA 602B', 'Epson L3110'),
(18, 'Finance & Accounting', 'PC', 'Rakitan', '2019-01-01', 'Fery Syahputra, SP', 'LGA 1155', 'Core i3', 'DDR3 4GB', '500 GB', 'Armagedon', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'VGA 2GB', 'Active', '3', 'gabung deng pak sarman', 'Epson L3110'),
(19, 'Kebun', 'PC', 'HP', '2014-01-01', 'Juli Hamdani', 'LGA 1155', 'Intel Core i5', 'DD3 6 GB PC 12800', '500 GB', 'Build Up', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '8', 'ICA 602B', 'Epson L360'),
(20, 'Personalia', 'PC', 'HP', '2017-05-05', 'Khaidir, SH', 'Socket LGA 1155', 'Intel Core i5', 'DDR4 4GB', '1 TB', 'AIO', 'WIndows 10', '64 bit', 'Yes', 'Office2010', 'No', 'Pavilion 24B121D - VGA NVIDIA GeForce 930MX 2 GB', 'Active', '4', 'ICA 602B', 'Epson L365'),
(21, 'Personalia', 'PC', 'HP', '2014-01-01', 'Edward S. Manurung, SH', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '1 TB', 'p6-2242I', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'AMD Radeon HD 7400 Series 1 GB', 'Active', '8', 'ICA 602B', 'Epson L360'),
(22, 'Personalia', 'PC', 'Rakitan', '2014-01-01', 'Dea', '', '', '', '', '', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '8', '', 'Cannon MP273'),
(23, 'Personalia', 'PC', 'HP', '2014-01-01', 'Dedi Syahfutra, S.Kom', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '500 GB', 'p6-2242I', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'AMD Radeon HD 7400 Series 1 GB', 'Active', '8', 'ICA 602B', 'Epson L360'),
(24, 'Personalia', 'PC', 'HP', '2014-01-01', 'Tia Pratiwi, SE', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '1 TB', 'p6-2242I', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'No VGA', 'Active', '8', 'ICA 602B', 'Epson L360'),
(25, 'Personalia', 'PC', 'HP', '2014-01-01', 'Dian Anggraini, SH', 'Socket LGA 1155', 'Core i3', 'DDR3 2 GB', '500 GB', 'p2-1350I', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'No VGA', 'Active', '8', 'ICA 602B', 'Epson L3110'),
(26, 'ISPO', 'PC', 'Rakitan', '2015-01-01', 'Indra', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 4 GB', '500 GB', 'Rakitan', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'VGA 4 GB NVIDIA', 'Active', '7', 'ICA CE600', 'Cannon MP273'),
(27, 'Humas', 'PC', 'HP', '2018-01-01', 'Syehubaini', 'HP Pavilion 20.C039D', 'Core i3', '', '', 'all in one', 'Windows 10', '64 bit', 'Yes', 'Office2010', 'No', 'HP AIO', 'Active', '4', 'ICA 602B', 'Epson L360'),
(28, 'Humas', 'PC', 'Rakitan', '2018-09-25', 'Amir Suyanto', 'Socket LGA 1155', 'Intel Core i3', 'DDR3 2 GB PC12800', '320 GB', 'Rakitan', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '3', 'ICA 602B', 'Epson L365'),
(29, 'Gudang Induk', 'PC', 'Compac', '2015-01-01', 'Timbangan Gudang Induk', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 5 GB', '500 GB', 'CQ3685L', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '7', 'ICA 602B', 'Epson LX310'),
(30, 'Gudang Induk', 'PC', 'Rakitan', '2015-01-01', 'Junaidi', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 4 GB', '500 GB', 'Rakitan', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '7', 'ICA CE600', 'Epson L3110'),
(31, 'Gudang Induk', 'PC', 'Rakitan', '2021-09-01', 'Jimmy', 'LGA 1155', 'Intel Core i3', 'DDR3 6GB', '500 GB', 'Lenovo', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '0', 'ICA 602B', 'Epson L360'),
(32, 'Gudang Induk', 'PC', 'Rakitan', '2020-01-01', 'Roni', 'LGA 1155', 'Intel Pentium G645', 'DDR3 4GB', '500 GB', 'Rakitan', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '2', 'ICA CE600', 'Epson L360'),
(33, 'Poliklinik', 'PC', 'HP', '2017-03-17', 'Tri Widodo', 'Socket LGA 1155', 'Intel Core i5', 'DDR4 4GB', '1 TB', 'HP 510-p050d', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'HP Pavilion', 'Active', '5', 'ICA 602B', 'Epson L360'),
(34, 'Poliklinik', 'PC', 'Rakitan', '2020-01-01', 'Tiara', 'LGA 1155', 'Core i3', 'DDR3 4GB', '500 GB', 'Rakitan', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '2', 'ICA CE600', 'Epson LX310'),
(35, 'Transport', 'PC', 'HP', '2014-01-01', 'M. Asep SE', 'Socket LGA 1155', 'Intel Core i3', 'DDR3 2 GB', '500 GB', 'p2-1250I', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '8', 'ICA 602B', 'HP 2060'),
(36, 'Transport', 'PC', 'HP', '2014-01-01', 'Jadiman Hadi', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '500 GB', 'Rakitan', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'Build UP - VGA AMD Radeon HD 7450', 'Active', '8', 'ICA 602B', 'Epson L360'),
(37, 'Transport', 'PC', 'Rakitan', '2019-01-01', 'Taka', 'Socket LGA 1155', 'Intel Core', 'DDR3 4GB', '500 GB', 'Rakitan', 'Windows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '3', 'ICA CE600', 'Epson L3110'),
(38, 'Transport', 'PC', 'Rakitan', '2019-01-08', 'Leonardo FS', 'Socket LGA 1155', 'Intel Core i3', 'DDR3 2 GB', '500 GB', 'Rakitan', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '3', 'ICA CE600', 'Epson L360'),
(39, 'Workshop', 'PC', 'HP-1070d', '2011-01-01', 'Robby', 'Socket LGA 1155', 'Intel Core i7', 'DDR3 4GB', '500 GB', 'Build Up', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '11', 'ICA 602B', 'Epson L360'),
(40, 'Bangunan', 'PC', 'Rakitan', '2020-11-24', 'Rizaldi Saputra', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '500 GB', 'Rakitan', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'VGA DDR3 1 GB', 'Active', '1', 'ICA CE600', 'Cannon MP 280'),
(41, 'Bangunan', 'PC', 'HP', '2011-01-01', 'Ria Erlina', 'Socket LGA 1155', 'Intel Core i5', 'DDR3 2 GB', '1 TB', 'p6-2242I', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', 'VGA AMD Radeon DH 7450', 'Active', '11', 'ICA CE600', 'Epson L3110'),
(42, 'Elektrikal', 'PC', 'Rakitan', '2019-06-13', 'Yudison', 'Socket LGA 1151', 'Intel Core i3', 'DDR3 4 GB', '500 GB', 'Futura', 'Windows 7', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '2', 'ICA 602B', 'Cannon MP 280'),
(43, 'OP 96', 'PC', 'Lenovo', '2017-01-01', 'Iwan', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Lenovo 10093', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '5', 'ICA CE600', 'Epson L360'),
(44, 'OP 97B', 'PC', 'Rakitan', '2014-01-01', 'Mela', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Rakitan', 'Windows XP', '32 bit', 'No', 'Office2007', 'No', '', 'Active', '8', '', 'Epson L360'),
(45, 'OP 97B', 'PC', 'Rakitan', '2014-01-01', 'Edgar', 'Socket LGA 1155', 'Intel Core', 'DDR3 4GB', '500 GB', 'Rakitan', 'Windows XP', '32 bit', 'No', 'Office2010', 'No', 'No VGA', 'Active', '8', 'ICA CE600', 'Epson L360'),
(46, 'OP 97C', 'PC', 'Lenovo', '2014-01-01', 'Iis', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Rakitan', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '8', 'ICA 602B', 'Epson L360'),
(47, 'OP 97D', 'PC', 'Lenovo', '2014-01-01', 'Yuli Pandiangan', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Lenovo 10093', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', 'kebakaran', 'Active', '8', 'ICA 602B', 'Epson L360'),
(48, 'OP 98A', 'PC', 'Lenovo', '2014-01-01', 'Haris', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Lenovo 10093', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '8', 'ICA 1022B', 'Epson L360'),
(49, 'OP 98B', 'PC', 'Lenovo', '2014-01-01', 'Taming', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Lenovo 10093', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '8', 'gabung dengan harsi', 'Epson L360'),
(50, 'OP 98C', 'PC', 'Lenovo', '2014-01-01', 'Zainal', 'Socket LGA 1155', 'Intel Pentium G645', 'DDR3 2 GB', '500 GB', 'Lenovo 10093', 'WIndows 10', '64 bit', 'No', 'Office2010', 'No', '', 'Active', '8', 'ICA CE600', 'Epson L360');

-- --------------------------------------------------------

--
-- Table structure for table `order_local`
--

CREATE TABLE `order_local` (
  `id_order` int(10) NOT NULL,
  `id_author` int(10) NOT NULL,
  `date` date NOT NULL,
  `nama_barang` text NOT NULL,
  `satuan` text NOT NULL,
  `divisi` text NOT NULL,
  `user` text NOT NULL,
  `remark` text NOT NULL,
  `status_order` text NOT NULL,
  `status_cerf` varchar(20) NOT NULL,
  `status_po` text NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `id_planning` int(11) NOT NULL,
  `id_author` int(12) NOT NULL,
  `date` date NOT NULL,
  `kegiatan` text NOT NULL,
  `status` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`id_planning`, `id_author`, `date`, `kegiatan`, `status`, `author`) VALUES
(2, 1, '2022-06-09', 'test', 'waiting', 'Admin'),
(3, 1, '2022-06-09', 'test', 'Test', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id_receipt` int(11) NOT NULL,
  `id_author` int(10) NOT NULL,
  `nama_pengirim` text NOT NULL,
  `nama_penerima` text NOT NULL,
  `date` datetime NOT NULL,
  `jabatan` text NOT NULL,
  `nama_barang` text NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `kerusakan` text NOT NULL,
  `status` text NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `jabatan` text NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `jabatan`, `level`) VALUES
(1, 'Admin', 'admin', '$2y$10$.v2LZUQfvdXD0B7/168bI.Kf6vGnkugCc4D4qJNo3v/pr6ADtzzJq', 'admin', 'admin'),
(2, 'muhammad rafi hadi kesuma', 'rafi', '$2y$10$BKQIj9YPWrYNXUI0xCR2.OLdkjVcHsTpxHdmK6BeqIRMmHL8J9O0e', 'Staff', 'staff'),
(3, 'ryan nirwanda', 'ryan', '$2y$10$lTPLuBYtvtp49AIfCl6whu/BHX1wjMFe.inwxhns3unZ.CBfsyDXS', 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id_analysis`);

--
-- Indexes for table `exit_item`
--
ALTER TABLE `exit_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id_logbook`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `order_local`
--
ALTER TABLE `order_local`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id_planning`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id_receipt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id_analysis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `exit_item`
--
ALTER TABLE `exit_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id_logbook` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `order_local`
--
ALTER TABLE `order_local`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `id_planning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id_receipt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



