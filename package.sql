-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:29 AM
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
(4, 5050, 1057, 7, '1000', '1000', '40', '110', '30', '10', '12', '23', 'ใช้ได้5วินาทีนะ', 'ได้ระเบิดไว้ออกรบกับอิรัก', 'ใช้จนกว่าไดโนเสาร์จะกำเนิดใหม่อีกครั้ง', '60%', 1300, 500, 750, 30, '2020-09-15', '2020-09-30'),
(5, 5060, 1057, 5, '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '00000000000000000', '0000000000', 'http0000000000', '85%', 0, 0, 0, 0, '2020-09-16', '2020-09-30'),
(9, 5050, 1054, 5, '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '50%', 10, 10, 10, 10, '2020-09-16', '2020-09-30'),
(10, 5050, 1001, 2, '1000', '100', '20', '', '4', '', '', '', 'EPL 380 คู๋,FUP 128Kbps,ค่าแรกเข้า 890\n', 'Ultimate,True ID ระดับ Unlimited HD\n\n', '12เดือน', '0%', 1250, 0, 0, 0, '2020-02-20', '2020-09-30'),
(11, 5050, 1005, 3, '200', '100', '15', '60', '2', '', '', '', '380คู๋,ค่าแรกเข้า 890 บาท \n', '', '12 เดือน\n', '0%', 0, 890, 0, 1000, '2020-01-16', '2027-09-30'),
(12, 5050, 1004, 5, '', '', '', '', '', '', '', '', 'ค่าแรกเข้า 890 บาท', 'True ID TV Uitimate, TrueID ApplecationระดับUnlimited HD', '12เดือน', '0%', 0, 890, 0, 799, '2020-09-16', '2024-10-16'),
(13, 5050, 1003, 11, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '0%', 100, 100, 100, 100, '2020-09-17', '2020-09-30'),
(14, 5050, 1003, 1, '100', '100', '', '', '', '', '', '', '', '', '', '0%', 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(15, 5050, 1003, 6, '200', '200', '', '', '', '', '', '', 'True ID ระดับ Unlimited HD\n', '', 'สัญญา 12 เดือน', '0%', 890, 0, 0, 0, '2020-09-17', '2021-09-17'),
(16, 5050, 1004, 6, '100', '50', '10', '60', '', '', '', '', '\n\n', 'TrueID TV ระดับUltimate,ซิมมือถือไม่ลดสปีด นาน 12 เดือน', '12เดือน', '0%', 890, 0, 0, 699, '2020-09-17', '2021-09-17'),
(17, 5050, 1003, 2, '1000', '500', '', '', '', '300', '', '9999999', 'ครั้งละ 2 บาทต่อ 1 นาทีใช้ได้ 24ชั่วโมง,Free Call 5 number TrueMove H\n', '', '24เดือน', '0%', 0, 0, 0, 1299, '2020-09-17', '2022-09-17'),
(18, 5050, 1020, 1, '1000', '1000', '', '', '', '', '', '', '', 'HBOGO(HBOHITS,HBO SIGNATURE,HBO FAMILY,RED,CINEMAX) + MONOMAX + OKE	\n	\n	\n	\n', '', '0%', 0, 0, 0, 1239, '2020-09-17', '2020-09-30'),
(19, 5050, 1021, 1, '1000', '500', '', '', '', '', '', '', '', '', 'HBOGO(HBOHITS,HBO SIGNATURE,HBO FAMILY,RED,CINEMAX) + MONOMAX + OKE	\n	\n	\n	\n', '0%', 0, 0, 0, 900, '2020-09-17', '2020-09-30'),
(22, 5050, 1003, 1, '75', '10', '', '', '', '', '', '', '', '', '', '0%', 0, 0, 0, 200, '0000-00-00', '0000-00-00'),
(23, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0000-00-00', '0000-00-00'),
(24, 5050, 1034, 2, '1000000 MB', '10000000', '10000', '10', '0.5', '191', '0.1', '0.1', 'giga', 'giga', 'ทดสอบ 1000 ปี', '100%', 2000000, 10000000, 50000, 70000000, '2020-09-21', '2020-09-21');

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
(1, 'admin', 'admin', 'admin นะจ๊ะ', 'admin'),
(2, 'user', 'user', 'เป็นแค่ us', 'user'),
(3, '123', '123', 'สัมมะกิงกุ่งไก่สัมมาไกลกุ่งกริ่ง', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `name_package`
--

CREATE TABLE `name_package` (
  `id_package` int(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `name_pack` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บชื่อ package';

--
-- Dumping data for table `name_package`
--

INSERT INTO `name_package` (`id_package`, `id_service`, `name_pack`) VALUES
(1003, 5050, 'True Super Speed Fiber'),
(1004, 5050, 'True Super Speed Fiber + 4G Convergences'),
(1005, 5050, 'True Super Fiber Gamer Pro Pack'),
(1006, 5050, 'True Gigatex Fiber'),
(1007, 5050, 'GIGATEX Biz Plus'),
(1008, 5050, 'Fiber Plus'),
(1009, 5050, 'True Extra Speed'),
(1010, 5070, 'Fixed-IP'),
(1011, 5060, 'Price for AIS Postpaid (Baht)'),
(1013, 5060, 'eSport  Package '),
(1014, 5060, 'power4maxx Package'),
(1015, 5060, 'Beacon Package'),
(1016, 5060, 'SME Office Broadband'),
(1017, 5060, 'SME Pro Social'),
(1018, 5050, 'Work from Home Package'),
(1019, 5070, 'GIGA Sim 10GB'),
(1020, 5070, 'GIGA TAINMENT'),
(1021, 5070, 'GIGA FIBER'),
(1022, 5080, 'Work all DAY'),
(1023, 5080, 'Play all NIGHT'),
(1024, 5080, 'EXTRA HOME WORK ALL DAY'),
(1025, 5080, 'EXTRA HOME WORK ALL NIGHT'),
(1026, 5080, 'SUPER SPEED PLUS'),
(1027, 5080, 'นัดเต็ม MAX Package Home'),
(1028, 5080, 'นัดเต็ม MAX Package Business'),
(1029, 5080, 'Smart Choice HOME'),
(1030, 5080, 'แรงทุกตารางนิ้ว'),
(1031, 5090, 'แรงทุกตารางนิ้ว'),
(1032, 5090, 'GIGABOLT'),
(1033, 5050, 'test'),
(1034, 5080, 'เว้นว่าง');

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
(5, 5050, 'WiFi Router 4 Ports', 'ADSL/VDSL Router');

-- --------------------------------------------------------

--
-- Table structure for table `name_service`
--

CREATE TABLE `name_service` (
  `id_service` int(10) NOT NULL,
  `name_ser` varchar(20) NOT NULL
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
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `name_package`
--
ALTER TABLE `name_package`
  MODIFY `id_package` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT for table `name_rounter`
--
ALTER TABLE `name_rounter`
  MODIFY `id_rounter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
