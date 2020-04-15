-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 02:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cost_price` float DEFAULT NULL,
  `sell_price` float DEFAULT NULL,
  `production_date` varchar(50) DEFAULT NULL,
  `production_month` varchar(50) DEFAULT NULL,
  `production_year` varchar(50) DEFAULT NULL,
  `expire_date` varchar(50) DEFAULT NULL,
  `expiry_month` varchar(50) DEFAULT NULL,
  `expiry_year` varchar(50) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `quantity`, `cost_price`, `sell_price`, `production_date`, `production_month`, `production_year`, `expire_date`, `expiry_month`, `expiry_year`, `purchase_id`, `medicine_id`, `supplier_id`) VALUES
(1, 545645, 545, 545, '6', 'April', '2020', '30', 'April', '2019', 7685454, NULL, NULL),
(2, 545645, 545, 545, '6', 'April', '2020', '30', 'April', '2019', 7685454, NULL, NULL),
(3, 54, 87654, 6656, '16', 'March', '2019', '14', 'September', '2020', 545646, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_information`
--

CREATE TABLE `bill_information` (
  `invoice_no` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `discount` varchar(10) DEFAULT NULL,
  `discount_amount` varchar(25) DEFAULT NULL,
  `total_payable` float DEFAULT NULL,
  `paid` float DEFAULT NULL,
  `returned` float DEFAULT NULL,
  `Tdate` varchar(50) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_information`
--

INSERT INTO `bill_information` (`invoice_no`, `id`, `total_amount`, `discount`, `discount_amount`, `total_payable`, `paid`, `returned`, `Tdate`, `month`, `year`) VALUES
(18, NULL, 20, '5', '1', 19, 20, 1, '11', 'April', '2020'),
(123, NULL, 20, '5', '', 19, 20, 1, '11', 'April', '2020'),
(189, NULL, 20, '5', '1', 19, 20, 1, '11', 'April', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `m_category` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `m_category`) VALUES
(1, 'Antipyretics'),
(2, 'Analgesics'),
(3, 'Antibiotics'),
(4, 'Antiseptics'),
(5, 'Transquilizers'),
(6, 'Oral Contraceptives'),
(7, 'Antihistamines'),
(8, 'Anaesthetics'),
(9, 'Antidepressants'),
(10, 'Antacids');

-- --------------------------------------------------------

--
-- Table structure for table `generic_names`
--

CREATE TABLE `generic_names` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generic_names`
--

INSERT INTO `generic_names` (`id`, `medicine_name`, `generic_name`, `Category`) VALUES
(1, 'Aspirin', 'lkj', 'antipyre');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `manufacturer_name` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `manufacturer_name`) VALUES
(1, 'abc Company'),
(2, 'abc Company'),
(3, 'abc Company'),
(4, 'abc Company'),
(5, 'abc Company'),
(6, 'abc Company'),
(7, 'abc Company');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_information`
--

CREATE TABLE `medicine_information` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `generic_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_information`
--

INSERT INTO `medicine_information` (`id`, `medicine_name`, `category`, `generic_id`, `manufacturer_id`, `category_id`) VALUES
(1, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(2, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(3, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(4, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(5, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(6, 'Aspirin', 'Antipyretics', NULL, NULL, NULL),
(7, 'Aspirin', 'Antipyretics', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(35) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `contact`, `email`) VALUES
(1, 'wxy ', '08052224682', 'khushi1211@gmail.com'),
(2, 'wxy ', '08052224682', 'khushi1211@gmail.com'),
(3, 'wxy ', '08052224682', 'khushi1211@gmail.com'),
(4, 'wxy ', '08052224682', 'khushi1211@gmail.com'),
(5, 'wxy ', '08052224682', 'khushi1211@gmail.com'),
(6, 'wxy ', '08052224682', 'mahima246.m.a@gmail.com'),
(7, 'wxy ', '08052224682', 'mahima246.m.a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE `useraccess` (
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `usertype` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`email_id`, `password`, `usertype`) VALUES
('bk@gmail.com', 'ma246kd1211', NULL),
('jaya242.j.a@gmail.com', 'jaya242', NULL),
('khushi1211@gmail.com', 'mahima246', NULL),
('khushi@gmail.com', 'khushi1211', NULL),
('Kothari', 'yugeshk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(35) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `date_of_birth` varchar(10) DEFAULT NULL,
  `month_of_birth` varchar(10) DEFAULT NULL,
  `year_of_birth` varchar(10) DEFAULT NULL,
  `age` varchar(11) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `name`, `email_id`, `gender`, `date_of_birth`, `month_of_birth`, `year_of_birth`, `age`, `contact`, `blood_group`, `marital_status`, `password`) VALUES
(8, 'Khushi Dubey', 'khushi1211@gmail.com', 'Female', '12', 'November', '2000', '19', '8052224682', 'A+', 'Unmarried', 'mahima246'),
(9, 'khushi', 'khushi@gmail.com', 'Female', '12', 'November', '2000', '19', '6388886858', 'A+', 'Unmarried', 'khushi1211'),
(10, 'jaya arora', 'jaya242.j.a@gmail.com', 'Female', '24', 'February', '2006', '14', '8858754558', 'B+', 'Unmarried', 'jaya242'),
(11, 'Bharat Kevinson', 'bk@gmail.com', 'Male', '12', 'November', '2001', '19', '6388868558', 'A-', 'Married', 'ma246kd1211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `MUL` (`medicine_id`),
  ADD KEY `MULT` (`supplier_id`);

--
-- Indexes for table `bill_information`
--
ALTER TABLE `bill_information`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `MUL` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generic_names`
--
ALTER TABLE `generic_names`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicine_name` (`medicine_name`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_information`
--
ALTER TABLE `medicine_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in` (`generic_id`),
  ADD KEY `ind` (`manufacturer_id`),
  ADD KEY `inde` (`category_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccess`
--
ALTER TABLE `useraccess`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MUL` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `generic_names`
--
ALTER TABLE `generic_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicine_information`
--
ALTER TABLE `medicine_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
