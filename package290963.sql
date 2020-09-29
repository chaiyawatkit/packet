-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `package`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_package`
--

CREATE TABLE `detail_package` (
  `id_log` int(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `id_package` int(10) NOT NULL,
  `id_rounter` int(10) NOT NULL,
  `download` varchar(10) NOT NULL,
  `upload` varchar(10) NOT NULL,
  `data_mobile` varchar(10) NOT NULL,
  `min_mobile` varchar(10) NOT NULL,
  `sim_mobile` varchar(10) NOT NULL,
  `credit_phone` varchar(10) NOT NULL,
  `min_phone` varchar(10) NOT NULL,
  `network_phone` varchar(10) NOT NULL,
  `detail` text NOT NULL,
  `detail_promotion` text NOT NULL,
  `detail_contract` text NOT NULL,
  `discount` varchar(10) NOT NULL,
  `price_setup` double NOT NULL,
  `price_register` double NOT NULL,
  `price_equip` double NOT NULL,
  `price_month` double NOT NULL,
  `date_start_pro` date NOT NULL,
  `date_end_pro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_package`
--

INSERT INTO `detail_package` (`id_log`, `id_service`, `id_package`, `id_rounter`, `download`, `upload`, `data_mobile`, `min_mobile`, `sim_mobile`, `credit_phone`, `min_phone`, `network_phone`, `detail`, `detail_promotion`, `detail_contract`, `discount`, `price_setup`, `price_register`, `price_equip`, `price_month`, `date_start_pro`, `date_end_pro`) VALUES
(1, 5050, 1000, 1, '1000', '100', '20', '', '4', '', '', '', 'TrueID TV Uitimate,TrueID Application Unlimited HD,FUP 128Kbps\n', '', '24 เดือน', '0%', 890, 0, 0, 1250, '2020-09-24', '2021-07-15'),
(2, 5050, 1000, 1, '200', '100', '15', '60', '2', '', '', '', 'TrueID TV Uitimate,TrueID Application Unlimited HD,FUP 128Kbps', '', '12 เดือน', '0%', 890, 0, 0, 1000, '2020-09-24', '2022-10-12'),
(3, 5050, 1001, 1, '100', '100', '10', '', '', '', '', '', 'TrueID TV Uitimate,TrueID Application Unlimited HD,FUP 128Kbps\n,EPL 100 คู่', '', '12 เดือน', '0%', 890, 0, 0, 599, '2020-09-24', '2022-10-26'),
(4, 5060, 1015, 7, '200', '200', '', '', '', '', '', '', 'กล้องวงจรปิด,กล่องรับสัญญาณดาวเทียม PSI S3 , บัตร PSI,กล้องวงจรปิด,กล่องรับสัญญาณดาวเทียม PSI S3 , บัตร PSI,Wifi Router,Printer\n,*Public IPv4 +200 บาท/เดือน\n\n', '', '12 เดือน', '0%', 2000, 0, 0, 899, '2020-09-24', '2023-10-24'),
(5, 5050, 1030, 8, '200', '200', '10', '500', '', '', '', '', 'Promote Facebook Ads 3M,Growbiz 1Y,ค่าบริการส่วนเกิน ค่าโทรทุกเครือข่าย นาทีละ 0.99 บาท, VDO Call นาทีละ 1.50 บาท, SMS ข้อความละ 2 บาท และ MMS ข้อความละ 4 บาท FUP 384 Kbps\n\n\n\n\n\n', 'Ulimited Social App for Facebook ,Line Intragram,Whatsapp SIM 10 GB,โทรฟรีทุกเครือข่าย 500 นาที\n\n', '12 เดือน', '0%', 0, 0, 0, 599, '2020-09-24', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(10) NOT NULL,
  `id_login` varchar(10) NOT NULL,
  `password_login` varchar(10) NOT NULL,
  `name_login` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `id_login`, `password_login`, `name_login`, `status`) VALUES
(1, 'admin', 'admin', 'LUCIFERADUTL', 'admin'),
(2, 'user', 'user', 'เป็นแค่ us', 'user'),
(3, '123', '123', 'สัมมะกิงกุ่งไก่สัมมาไกลกุ่งกริ่ง', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `name_package`
--

CREATE TABLE `name_package` (
  `id_package` int(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `name_pack` varchar(50) NOT NULL,
  `type_package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บชื่อ package';

--
-- Dumping data for table `name_package`
--

INSERT INTO `name_package` (`id_package`, `id_service`, `name_pack`, `type_package`) VALUES
(1000, 5050, 'True Family Plus', 'Official Package'),
(1001, 5050, 'True GIGATEX Fiber', 'Official Package'),
(1002, 5050, 'True Super Speed Fiber', 'Official Package'),
(1003, 5050, 'True Super Speed Fiber + 4G Convergences', 'Official Package'),
(1004, 5050, 'True Super Speed Fiber', 'Official Package'),
(1005, 5050, 'True Super Fiber Gamer Pro Pack', 'Official Package'),
(1006, 5050, 'GIGATEX Biz Plus', 'Official Package'),
(1007, 5050, 'Fiber Plus', 'Official Package'),
(1008, 5050, 'True Extra Speed', 'Official Package'),
(1009, 5050, 'Fixed-IP', 'Official Package'),
(1010, 5060, 'Price for AIS Postpaid (Baht)', 'Official Package'),
(1011, 5060, 'Price for AIS Serenade (Baht)', 'Official Package'),
(1012, 5060, 'eSport  Package ', 'Official Package'),
(1013, 5060, 'power4maxx Package', 'Official Package'),
(1014, 5060, 'Beacon Package', 'Official Package'),
(1015, 5060, 'SME Office Broadband', 'Official Package'),
(1016, 5070, 'GIGA Sim 10GB', 'Official Package'),
(1017, 5070, 'GIGA TAINMENT', 'Official Package'),
(1018, 5070, 'GIGA FIBER', 'Official Package'),
(1019, 5080, 'Work all DAY', 'Official Package'),
(1020, 5080, 'Play all NIGHT', 'Official Package'),
(1021, 5080, 'EXTRA HOME WORK ALL DAY', 'Official Package'),
(1022, 5080, 'EXTRA HOME WORK ALL NIGHT', 'Official Package'),
(1023, 5080, 'SUPER SPEED PLUS', 'Official Package'),
(1024, 5080, 'นัดเต็ม MAX Package Home', 'Official Package'),
(1025, 5080, 'นัดเต็ม MAX Package Business', 'Official Package'),
(1026, 5080, 'Smart Choice HOME', 'Official Package'),
(1027, 5080, 'แรงทุกตารางนิ้ว', 'Official Package'),
(1028, 5090, 'Work@home', 'Official Package'),
(1029, 5090, 'GIGABOLT', 'Official Package'),
(1030, 5060, 'SME Pro Social', 'Official Package'),
(1031, 5050, 'ทอสอบ', 'Official Package');

-- --------------------------------------------------------

--
-- Table structure for table `name_rounter`
--

CREATE TABLE `name_rounter` (
  `id_rounter` int(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `detail_rounter` text NOT NULL,
  `type_rounter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `name_rounter`
--

INSERT INTO `name_rounter` (`id_rounter`, `id_service`, `detail_rounter`, `type_rounter`) VALUES
(1, 5050, 'Gigatex Fiber Router', 'Fiber Router'),
(2, 5050, 'WiFi Router 4 Ports', 'ADSL/VDSL Router'),
(3, 5050, 'Dual Band WiFi Router ', 'ADSL/VDSL Router'),
(4, 5050, 'INO Hybrid +', 'ADSL/VDSL Router'),
(5, 5050, 'WiFi Router 4 Ports', 'Fiber Router'),
(6, 5050, 'Dual Band WiFi Router ', 'ADSL/VDSL Router'),
(7, 5060, 'SuperMESH WiFi Router', 'ADSL/VDSL Router'),
(8, 5050, 'Next G AisWiFi', 'Fiber Router'),
(9, 5050, 'ONU 4 Port Wireless', 'Fiber Router'),
(10, 5070, 'Router 3BB ADSL / VDSL', 'ADSL/VDSL Router'),
(11, 5070, 'Router 3BB Fiber ', 'Fiber Router');

-- --------------------------------------------------------

--
-- Table structure for table `name_service`
--

CREATE TABLE `name_service` (
  `id_service` int(10) NOT NULL,
  `name_ser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บชื่อผู้ให้บริการ package';

--
-- Dumping data for table `name_service`
--

INSERT INTO `name_service` (`id_service`, `name_ser`) VALUES
(5050, 'True'),
(5060, 'AIS Fiber'),
(5070, '3BB'),
(5080, 'Cat '),
(5090, 'TOT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_package`
--
ALTER TABLE `detail_package`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `name_package`
--
ALTER TABLE `name_package`
  ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `name_rounter`
--
ALTER TABLE `name_rounter`
  ADD PRIMARY KEY (`id_rounter`);

--
-- Indexes for table `name_service`
--
ALTER TABLE `name_service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_package`
--
ALTER TABLE `detail_package`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `name_package`
--
ALTER TABLE `name_package`
  MODIFY `id_package` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032;

--
-- AUTO_INCREMENT for table `name_rounter`
--
ALTER TABLE `name_rounter`
  MODIFY `id_rounter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
