-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 10:59 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `salePrice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `category`, `salePrice`) VALUES
(22, 'bottleGreentrouser', 'ethnic', 780),
(23, 'rosepinksaree', 'casuals', 1200),
(24, 'snowWhitetrouser', 'formal', 1530),
(25, 'rosepinksaree', 'ethnic', 1650),
(26, 'yellowdress', 'western', 1950);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(15) NOT NULL,
  `productId` int(15) NOT NULL,
  `firmName` varchar(200) NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(500) NOT NULL,
  `invoiceNo` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `discount` int(15) NOT NULL,
  `finalPrice` int(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `productId`, `firmName`, `purchaseDate`, `address`, `invoiceNo`, `quantity`, `discount`, `finalPrice`, `price`) VALUES
(51, 22, 'kailashManfacturer', '2022-06-23 08:35:12', 'gandhiNagar,Delhi', 23, 15, 45, 5363, 650),
(52, 23, 'kailashManfacturer', '2022-06-23 08:35:29', 'gandhiNagar,Delhi', 23, 23, 15, 15445, 790),
(53, 23, 'riadmanufactures', '2022-06-23 08:37:34', 'surajmalvihar', 23, 16, 19, 10109, 780),
(54, 23, 'riadmanufactures', '2022-06-23 08:37:49', 'surajmalvihar', 23, 16, 19, 10109, 780),
(55, 23, 'riadmanufactures', '2022-06-23 08:37:49', 'surajmalvihar', 23, 16, 19, 10109, 780),
(56, 26, 'ajiolyf', '2022-06-23 08:38:18', '54gaziabad', 24, 19, 55, 7610, 890);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(15) NOT NULL,
  `productId` int(15) NOT NULL,
  `customerName` varchar(200) NOT NULL,
  `saleDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `customerAddress` varchar(500) NOT NULL,
  `invoiceNo` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `discount` int(15) DEFAULT NULL,
  `finalPrice` int(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `productId`, `customerName`, `saleDate`, `customerAddress`, `invoiceNo`, `quantity`, `discount`, `finalPrice`, `price`) VALUES
(57, 1, 'Ishita gupta ', '2022-06-22 23:45:58', '35krishnanagar', 24, 1, NULL, 1700, 1700),
(60, 23, 'Ishita', '2022-06-23 08:41:59', '35krishnanagar', 25, 1, NULL, 1200, 1200),
(61, 23, 'aleena', '2022-06-23 08:42:26', '14rajouriGarden', 26, 1, NULL, 1200, 1200),
(62, 26, 'kriti', '2022-06-23 08:42:43', '34vikasMarg', 27, 1, NULL, 1950, 1950);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
