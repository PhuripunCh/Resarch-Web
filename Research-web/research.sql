-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 07:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` int(11) NOT NULL,
  `Re_title` text NOT NULL,
  `Re_Res` text NOT NULL,
  `Re_Uname` varchar(50) NOT NULL,
  `Re_num` text NOT NULL,
  `Re_email` text NOT NULL,
  `Redetail` text NOT NULL,
  `Stat` enum('CHECK','NON') DEFAULT 'NON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Re_title`, `Re_Res`, `Re_Uname`, `Re_num`, `Re_email`, `Redetail`, `Stat`) VALUES
(4, 'dsadasd', '', 'test1', '', 'fsdfsdf@mail.com', 'sdfsdfsdf', 'CHECK');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `Research_ID` int(11) NOT NULL,
  `Research_Name` text NOT NULL,
  `Researcher_Name` text NOT NULL,
  `Teacher_name` text NOT NULL,
  `Research_Year` varchar(20) NOT NULL,
  `Research_Abstract` text NOT NULL,
  `Research_File` varchar(100) NOT NULL,
  `Branch` text NOT NULL,
  `Research_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`Research_ID`, `Research_Name`, `Researcher_Name`, `Teacher_name`, `Research_Year`, `Research_Abstract`, `Research_File`, `Branch`, `Research_img`) VALUES
(1, 'ระบบการขายอุปกรณ์คอมพิวเตอร์ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear', 'นายภูริปัญญ์ ชัยชัชวาล ', 'อาจารย์สิริณา  ช่วยเต็ม', '2566', 'โครงงานฉบับนี้มีวัตถุประสงค์เพื่อสร้างเพื่อพัฒนาระบบร้านขายอุปกรณ์คอมพิวเตอร์ ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear เพื่อเพิ่มช่องทางการจัดจำหน่ายสินค้าและการให้ข้อมูล รายละเอียดสินค้าเพื่อตอบสนองต่อ ความต้องการของผู้ใช้งาน การพัฒนาระบบฐานข้อมูลช่วยลด ปัญหาความซับซ้อนในการจัดเก็บข้อมูลการตรวจสอบรายละเอียดและจำนวนสินค้าในคลัง การเก็บ ข้อมูลประวัติการซื้อของลูกค้า และการเก็บข้อมูลประวัติการสั่งซื้อสินค้า รวมทั้งการ เก็บข้อมูล ยอดขายสินค้า ให้ระบบงานของร้านมีประสิทธิภาพและรวดเร็วในการดำเนินงานเพิ่มมากขึ้น ', 'ระบบการขายอุปกรณ์คอมพิวเตอร์ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear.pdf', 'sci', '../uploads/img_653939d582c8e.png'),
(2, 'test1', 'test1', 'test1', '2566', 'test1', '../Resfile/Mini_Project_1.pdf', 'sci', '../uploads/img_65393af07669a.jpg'),
(13, 'test34', 'test34', 'test34', '2566', 'asdasd', 'F_65200cfd9d3ff.pdf', 'sci', '../uploads/img_653950381e988.jpg'),
(14, 'ระบบการขายอุปกรณ์คอมพิวเตอร์ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear HARDWARE COMPUTER SYSTEM ONLINE CASE STUDY : THEFAST GAMING GEAR', 'นายนที กำปั่นทอง,นายภูริปัญญ์ ชัยชัชวาล ', 'อาจารย์สิริณา  ช่วยเต็ม', '2566', 'โครงงานวิจัยฉบับนี้มีวัตถุประสงค์เพื่อสร้างเพื่อพัฒนาระบบร้านขายอุปกรณ์คอมพิวเตอร์ ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear เพื่อเพิ่มช่องทางการจัดจำหน่ายสินค้าและการให้ข้อมูล รายละเอียดสินค้าเพื่อตอบสนองต่อ ความต้องการของผู้ใช้งาน การพัฒนาระบบฐานข้อมูลช่วยลด ปัญหาความซับซ้อนในการจัดเก็บข้อมูลการตรวจสอบรายละเอียดและจำนวนสินค้าในคลัง การเก็บ ข้อมูลประวัติการซื้อของลูกค้า และการเก็บข้อมูลประวัติการสั่งซื้อสินค้า รวมทั้งการ เก็บข้อมูล ยอดขายสินค้า ให้ระบบงานของร้านมีประสิทธิภาพและรวดเร็วในการดำเนินงานเพิ่มมากขึ้น ', 'ระบบการขายอุปกรณ์คอมพิวเตอร์ออนไลน์ กรณีศึกษาร้าน The Fast Gaming Gear.pdf', 'sci', 'img_65201097f3e6d.png'),
(16, 'test5', 'test5', 'test5', '2566', 'asdasd', 'ข้อสอบวิชาซอฟต์แวร์พัฒนาระบบฐานข้อมูล..pdf', 'sci', 'img_65393b8303b62.jpg'),
(17, 'TestResearch1234', 'นายภูริปัญญ์ ชัยชัชวาล', 'ยกตัวอย่าง', '2566', 'Research', 'TheFast Gaming Gear.pdf', 'Com Sci', '../uploads/img_654b56dd18ba3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_name` varchar(30) NOT NULL,
  `User_psw` varchar(30) NOT NULL,
  `num_std` text NOT NULL,
  `User_Fname` varchar(100) NOT NULL,
  `User_Lname` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_name`, `User_psw`, `num_std`, `User_Fname`, `User_Lname`, `email`, `status`) VALUES
(3, 'admin', '55555', '1111111111', 'asd', 'asd', 'admin@mail.com', 'ADMIN'),
(4, 'phuripun11', '0863257830', '116310905116-4', 'Bhuripun', 'Chaichatchawal', 'punrc240066@gmail.com', 'USER'),
(5, 'admin2', '12345', '1234567890', 'ad', 'min2', 'admin2@mail.com', 'ADMIN'),
(6, 'skadoosh', '111', '1111111111', 'Bhuripun', 'Chaichatchawal', 'punrc240066@gmail.com', 'USER'),
(7, 'test2', '222', '1111111111', 'test2', 'abcd', 'test2@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`Research_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `Research_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
