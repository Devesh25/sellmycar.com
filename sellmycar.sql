-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 02:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellmycar`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_dealers`
--

CREATE TABLE `car_dealers` (
  `id` int(255) NOT NULL,
  `dealer_name` varchar(255) NOT NULL,
  `Dealer_mobile_number` varchar(255) NOT NULL,
  `Dealer_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_dealers`
--

INSERT INTO `car_dealers` (`id`, `dealer_name`, `Dealer_mobile_number`, `Dealer_email`) VALUES
(1, 'ABC', '0987654321', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `marketplaces_inventories`
--

CREATE TABLE `marketplaces_inventories` (
  `id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_year` year(4) NOT NULL,
  `km_on_odometer` varchar(255) NOT NULL,
  `major_scrathes` varchar(255) NOT NULL,
  `original_paint` varchar(255) NOT NULL,
  `number_of_accidents` varchar(255) NOT NULL,
  `number_of_previous_buyers` int(255) NOT NULL,
  `registration_place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplaces_inventories`
--

INSERT INTO `marketplaces_inventories` (`id`, `model_name`, `model_year`, `km_on_odometer`, `major_scrathes`, `original_paint`, `number_of_accidents`, `number_of_previous_buyers`, `registration_place`) VALUES
(1, 'Honda City', 2015, '35000', 'yes', 'red', '2', 2, 'India'),
(2, 'Hyndai i20', 2019, '25000', 'no', 'red', '2', 2, 'Bhopal'),
(3, 'Hyndai i10', 2019, '25000', 'no', 'red', '2', 2, 'Bhopal');

-- --------------------------------------------------------

--
-- Table structure for table `oem_specs`
--

CREATE TABLE `oem_specs` (
  `id` int(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_year` year(4) NOT NULL,
  `price_of_new_vehical` varchar(255) NOT NULL,
  `available_colors` varchar(255) NOT NULL,
  `milege` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `max_speed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oem_specs`
--

INSERT INTO `oem_specs` (`id`, `model_name`, `model_year`, `price_of_new_vehical`, `available_colors`, `milege`, `power`, `max_speed`) VALUES
(1, 'honda city', 2015, '1500000', 'red,black,white,silver', '20', '500 bhp', '160');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_dealers`
--
ALTER TABLE `car_dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplaces_inventories`
--
ALTER TABLE `marketplaces_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oem_specs`
--
ALTER TABLE `oem_specs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_dealers`
--
ALTER TABLE `car_dealers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marketplaces_inventories`
--
ALTER TABLE `marketplaces_inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oem_specs`
--
ALTER TABLE `oem_specs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
