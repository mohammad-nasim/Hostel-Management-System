-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 12:03 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bazar`
--

CREATE TABLE `bazar` (
  `id` int(11) NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bazar`
--

INSERT INTO `bazar` (`id`, `date`, `name`, `total`) VALUES
(1, '2018-11-06', 'nasim and tanvir', 3400),
(2, '2018-11-27', 'Ashanur and Tanvir', 5422),
(3, '2018-11-14', 'Ashik and Rasel', 2300),
(4, '2018-11-22', 'Nayem and Zesan', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `feb`
--

CREATE TABLE `feb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meal` int(150) NOT NULL,
  `role` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jan`
--

CREATE TABLE `jan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meal` int(150) NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jan`
--

INSERT INTO `jan` (`id`, `name`, `meal`, `role`) VALUES
(1, 'Rukaya', 5, ''),
(2, 'nabil', 0, ''),
(3, 'adib', 0, ''),
(4, 'sakib', 0, ''),
(5, 'abdullah', 0, ''),
(6, 'abdullah', 0, ''),
(7, 'riyan', 0, ''),
(8, 'nasim', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `picture`, `created`) VALUES
(1, 'nasim', 'be2e24f4b2268c57df3ed8f8ce023bf0', 'd.jpg', '2018-11-27 07:04:20'),
(4, 'zesan', '01cfcd4f6b8770febfb40cb906715822', '12088426_434917870034601_3324671406825033318_n.png', '2018-11-27 14:29:07'),
(6, 'à¦†à¦¶à¦¾à¦¨à§à¦°', 'e6366d5e284915139decdfd0bcf07fb6', '45767864_2235781730036377_4438835721024831488_n.jpg', '2018-11-27 15:29:38'),
(7, 'Tanvir', '73882ab1fa529d7273da0db6b49cc4f3', '47069105_758212164533093_2701269489831378944_n.png', '2018-11-28 04:16:21'),
(8, 'Tanvir', '93279e3308bdbbeed946fc965017f67a', '47069105_758212164533093_2701269489831378944_n.png', '2018-11-28 04:17:19'),
(10, 'mahadi', 'aca41e5ea7b8f650de6451323120b854', 'm.jpg', '2018-11-28 09:40:52'),
(11, 'Ridoy', 'bf1767a59ff145946ad7fa0183f8a6f9', '46811559_2386339388073873_1925763546256244736_n.jpg', '2018-11-29 06:03:23'),
(12, 'admin', '222ac40c46080e7303ebd7c0c57befd5', '', '2018-12-02 09:26:21'),
(13, 'Xesan', '435f8899b22712f1e633f3cfe2d61bf9', '0b357632843e83900c4385922c8a9379.jpg', '2018-12-02 09:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(6) NOT NULL,
  `intotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `name`, `total`, `intotal`) VALUES
(1, 'Nasim', 2000, 0),
(2, 'Adib', 1500, 0),
(3, 'nasim', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(13) NOT NULL,
  `education` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `name`, `mobile`, `education`, `address`, `role`) VALUES
(1, 'Mohammad Nasim', 1817712483, 'Faridpur Polytechnic Institute', 'Kazikanda,Rajbari', 'user'),
(2, 'Mohammad Nasim', 1817712483, 'Faridpur Polytechnic Institute', 'Kazikanda,Rajbari', 'user'),
(3, 'public', 32435678, 'kakakaa', 'nanana', 'user'),
(4, 'dfgyu', 345678, 'dffgrhc', 'dgetyy', 'user'),
(5, 'fngn', 2356, 'bgnhm', 'tydszz', 'user'),
(6, 'Asanur', 3454656, 'fpi', 'rajbari', ''),
(7, 'xesan', 456349736, 'Play', 'kawarchor', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bazar`
--
ALTER TABLE `bazar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feb`
--
ALTER TABLE `feb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jan`
--
ALTER TABLE `jan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bazar`
--
ALTER TABLE `bazar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feb`
--
ALTER TABLE `feb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jan`
--
ALTER TABLE `jan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
