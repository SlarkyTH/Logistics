-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2018 at 02:26 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--
CREATE DATABASE IF NOT EXISTS `logistic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `logistic`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Car_Id` int(11) NOT NULL,
  `Car_License` varchar(50) NOT NULL,
  `Car_Type` varchar(50) NOT NULL,
  `Car_Brand` varchar(50) NOT NULL,
  `Car_Model` varchar(50) NOT NULL,
  `Car_Year` int(4) NOT NULL,
  `Car_Color` varchar(20) NOT NULL,
  `Car_Picture` varchar(100) NOT NULL,
  `Driver_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_Id` int(11) NOT NULL,
  `Cus_Name` varchar(50) NOT NULL,
  `Cus_Address` varchar(50) NOT NULL,
  `Cus_District` varchar(50) NOT NULL,
  `Cus_Area` varchar(50) NOT NULL,
  `Cus_Province` varchar(50) NOT NULL,
  `Cus_Code` int(5) NOT NULL,
  `Cus_Tel` varchar(15) NOT NULL,
  `Cus_Fax` varchar(15) NOT NULL,
  `Cus_Email` varchar(50) NOT NULL,
  `Cus_Website` varchar(50) NOT NULL,
  `Cus_Contacts` varchar(50) NOT NULL,
  `Cus_Telcontacts` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Driver_Id` int(11) NOT NULL,
  `Driver_Name` varchar(50) NOT NULL,
  `Driver_Lastname` varchar(50) NOT NULL,
  `Driver_Nickname` varchar(50) NOT NULL,
  `Driver_Birthday` date NOT NULL,
  `Driver_License` varchar(50) NOT NULL,
  `Driver_Allowed` date NOT NULL,
  `Driver_Expired` date NOT NULL,
  `Driver_Startwork` date NOT NULL,
  `Enter_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneur`
--

CREATE TABLE `entrepreneur` (
  `Enter_Id` int(11) NOT NULL,
  `Enter_Name` varchar(50) NOT NULL,
  `Enter_Company` varchar(50) NOT NULL,
  `Enter_Address` varchar(50) NOT NULL,
  `Enter_District` varchar(50) NOT NULL,
  `Enter_Area` varchar(50) NOT NULL,
  `Enter_Province` varchar(50) NOT NULL,
  `Enter_Code` int(5) NOT NULL,
  `Enter_Tel` varchar(15) NOT NULL,
  `Enter_Fax` varchar(15) NOT NULL,
  `Enter_Email` varchar(50) NOT NULL,
  `Enter_Website` varchar(50) NOT NULL,
  `Enter_user_ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entrepreneur`
--

INSERT INTO `entrepreneur` (`Enter_Id`, `Enter_Name`, `Enter_Company`, `Enter_Address`, `Enter_District`, `Enter_Area`, `Enter_Province`, `Enter_Code`, `Enter_Tel`, `Enter_Fax`, `Enter_Email`, `Enter_Website`, `Enter_user_ref`) VALUES
(2, 'วิศวะ สื่อสุวรรณ', 'CoAivy Co.,LTD.', '248 หมู่4 ต.โรงเข้', 'ต.โรงเข้', 'อ.บ้านแพ้ว', 'จ.สมุทรสาคร', 74120, '0829776767', '829776767', 'wisawa.ws@gmail.com', 'http://www.myweb.com', '334807850838962');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `Expen_Id` int(11) NOT NULL,
  `Expen_Oil` int(5) NOT NULL,
  `Expen_Gas` int(5) NOT NULL,
  `Expen_Tickets` int(5) NOT NULL,
  `Expen_Freeway` int(5) NOT NULL,
  `Expen_Shop` int(5) NOT NULL,
  `Expen_Weight` int(5) NOT NULL,
  `Expen_Overtime` int(5) NOT NULL,
  `Expen_Accom` int(5) NOT NULL,
  `Expen_Fine` int(5) NOT NULL,
  `Expen_Allowan` int(5) NOT NULL,
  `Expen_Other` int(5) NOT NULL,
  `Car_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `log_user` varchar(20) NOT NULL,
  `log_passwd` varchar(20) NOT NULL,
  `log_user_ref` varchar(20) NOT NULL,
  `log_user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `log_user`, `log_passwd`, `log_user_ref`, `log_user_type`) VALUES
(1, 'admin', 'admin', '334807850838962', 'entrepreneur'),
(2, 'user', 'user', '361335737757339', 'sender');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(50) NOT NULL,
  `Pro_Shipping` varchar(50) NOT NULL,
  `Pro_Namesource` varchar(50) NOT NULL,
  `Pro_Provisource` varchar(50) NOT NULL,
  `Pro_Deltime` varchar(50) NOT NULL,
  `Pro_Deldate` date NOT NULL,
  `Pro_Destination` varchar(50) NOT NULL,
  `Pro_Prodestination` varchar(50) NOT NULL,
  `Pro_Sendtime` datetime NOT NULL,
  `Enter_Id` int(11) NOT NULL,
  `Cus_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_quantity`
--

CREATE TABLE `product_quantity` (
  `ProQ_Id` int(11) NOT NULL,
  `ProQ_Typebox` varchar(50) NOT NULL,
  `ProQ_Weight` int(3) NOT NULL,
  `ProQ_Size` varchar(10) NOT NULL,
  `Pro_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `sen_id` int(11) NOT NULL,
  `sen_name` varchar(20) NOT NULL,
  `sen_company` varchar(30) NOT NULL,
  `sen_address` varchar(20) NOT NULL,
  `sen_district` varchar(20) NOT NULL,
  `sen_area` varchar(20) NOT NULL,
  `sen_province` varchar(20) NOT NULL,
  `sen_code` int(5) NOT NULL,
  `sen_tel` varchar(15) NOT NULL,
  `sen_fax` varchar(15) NOT NULL,
  `sen_email` varchar(50) NOT NULL,
  `sen_website` varchar(100) NOT NULL,
  `sen_user_ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`sen_id`, `sen_name`, `sen_company`, `sen_address`, `sen_district`, `sen_area`, `sen_province`, `sen_code`, `sen_tel`, `sen_fax`, `sen_email`, `sen_website`, `sen_user_ref`) VALUES
(1, 'รวิวรรณ', 'กุ๊กกู๋', '1111', 'โรงเข้', 'บ้านแพ้ว', 'สมุทรสาคร', 73000, '0863938435', '-', 'aivy_black@hotmal.com', 'http://www.myweb.net', '361335737757339');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_Id`),
  ADD UNIQUE KEY `Driver_Id` (`Driver_Id`),
  ADD KEY `Driver_Id_2` (`Driver_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_Id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_Id`),
  ADD KEY `Enter_Id` (`Enter_Id`);

--
-- Indexes for table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  ADD PRIMARY KEY (`Enter_Id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`Expen_Id`),
  ADD KEY `Car_Id` (`Car_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pro_Id`),
  ADD KEY `Enter_Id` (`Enter_Id`),
  ADD KEY `Cus_Id` (`Cus_Id`);

--
-- Indexes for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD PRIMARY KEY (`ProQ_Id`),
  ADD KEY `Pro_Id` (`Pro_Id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`sen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Car_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Driver_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entrepreneur`
--
ALTER TABLE `entrepreneur`
  MODIFY `Enter_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `Expen_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Pro_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_quantity`
--
ALTER TABLE `product_quantity`
  MODIFY `ProQ_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `sen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`Driver_Id`) REFERENCES `driver` (`Driver_Id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`Enter_Id`) REFERENCES `entrepreneur` (`Enter_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`Car_Id`) REFERENCES `car` (`Car_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Enter_Id`) REFERENCES `entrepreneur` (`Enter_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Cus_Id`) REFERENCES `customer` (`Cus_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`Pro_Id`) REFERENCES `product` (`Pro_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
