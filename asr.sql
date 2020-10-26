-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 02:04 PM
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
-- Database: `asr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `invoice` int(100) NOT NULL,
  `dop` date NOT NULL,
  `dor` date NOT NULL,
  `qty` int(100) NOT NULL,
  `dis` bigint(99) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `lot` int(100) NOT NULL,
  `total_amount` float NOT NULL,
  `hns` text NOT NULL,
  `igst` bigint(100) NOT NULL,
  `cgst` bigint(100) NOT NULL,
  `sgst` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`invoice`, `dop`, `dor`, `qty`, `dis`, `unit_price`, `lot`, `total_amount`, `hns`, `igst`, `cgst`, `sgst`) VALUES
(6, '2020-10-19', '2020-10-19', 2, 0, 100, 12, 196, 'SDAC', 21, 1212121212, 121212121112),
(7, '2020-10-19', '2020-10-19', 133, 0, 41, 3, 5289.41, '23', 12, 21, 121212121112),
(8, '2020-10-19', '2020-10-19', 133, 3, 41, 3, 5289.41, '23', 12, 21, 121212121112),
(9, '2020-10-19', '2020-10-19', 55, 2, 36, 2, 1940.4, '212', 321, 321, 321),
(10, '2020-10-19', '2020-10-19', 0, 0, 0, 2, 2, '2', 2, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(70) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mname` varchar(90) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(53) NOT NULL,
  `password` varchar(123) NOT NULL,
  `status` varchar(115) NOT NULL,
  `type` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `fname`, `mname`, `lname`, `contact`, `email`, `password`, `status`, `type`) VALUES
(87, 'nayan01', 'nayan', '', 'das', 1234, 'nayandasagt04@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'accountant'),
(94, 'nayan01', 'sd', '', 'sd', 0, '', '7815696ecbf1c96e6894b779456d330e', '', 'One'),
(95, 'sda', 'sad', '', 'asd', 0, '', 'f970e2767d0cfe75876ea857f92e319b', 'N', 'accountant'),
(96, 'nayan01', 'nayan', '', 'das', 75567576, 'nayandasagt04@gmail.com', '7ef9254a9a6b0e34c80d6886e296c6b0', 'N', 'accountant'),
(98, 'Admin01', 'Admin', '', 'Admin', 1234, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Y', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`invoice`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `invoice` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
