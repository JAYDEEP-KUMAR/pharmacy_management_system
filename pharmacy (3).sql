-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 06:08 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billno` int(5) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `sid` int(5) NOT NULL,
  `bdate` date NOT NULL,
  `netamount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billno`, `mobileno`, `sid`, `bdate`, `netamount`) VALUES
(69, 7895426717, 5, '2018-11-12', 222),
(70, 7895426717, 5, '2018-11-12', 222),
(71, 7425148541, 6, '2018-11-12', 74),
(72, 7425148541, 6, '2018-11-12', 74),
(73, 8084822841, 13, '2018-11-12', 74),
(74, 8084822841, 13, '2018-11-12', 74),
(75, 7023966544, 17, '2018-11-12', 74),
(76, 7023966544, 17, '2018-11-12', 74),
(77, 9003371310, 18, '2018-11-13', 148),
(78, 9003371310, 18, '2018-11-13', 148),
(79, 9585464906, 19, '2018-11-13', 74),
(80, 7023966544, 19, '2018-11-13', 74),
(81, 9585464906, 19, '2018-11-13', 74),
(82, 9585464906, 19, '2018-11-13', 74),
(83, 7896541023, 20, '2018-11-13', 90),
(84, 7896541023, 20, '2018-11-13', 90),
(85, 7896541023, 20, '2018-11-13', 90),
(86, 7012547896, 21, '2018-11-13', 74),
(87, 7012547896, 21, '2018-11-13', 74);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `age`, `mobileno`) VALUES
('anik', 20, 7012547896),
('hhhhhhhhh', 19, 7023966544),
('customer', 15, 7023966576),
('huhjy', 74, 7423635214),
('priya ranjan', 21, 7425148541),
('anuj', 19, 7845123697),
('priya', 21, 7895426717),
('mahika', 19, 7896541023),
('hulu', 42, 8084822841),
('Anik', 20, 9003371310),
('Rahul', 18, 9585464906);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemno` int(5) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `mfgdate` date NOT NULL,
  `expdate` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(5) UNSIGNED NOT NULL,
  `supid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemno`, `itemname`, `mfgdate`, `expdate`, `price`, `quantity`, `supid`) VALUES
(32, 'paracetamols', '2018-11-09', '2018-11-10', '74', 689, 1),
(33, 'aspirin', '2018-11-01', '2054-01-06', '9', 689, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `who_are_you` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `name`, `username`, `password`, `who_are_you`, `email`, `mobileno`, `gender`, `address`) VALUES
(20, 'jay', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'chotahaathisouthindian@gmail.com', '7023966576', 'Male', 'hu'),
(21, 'hanuman', 'hanu', '9ad966ac695af70105ba724036c6f65a', 'Admin', 'hanu@gmail.com', '7023965478', 'Male', 'vit'),
(22, 'salesman', 'salesman', '1ee726b084cffbc96a6163d65f885d64', 'Salesman', 'salesman@gmail.com', '7845963214', 'Male', 'none'),
(23, 'manager', 'manager', '1d0258c2440a8d19e716292b231e3190', 'Manager', 'manager@gmail.com', '4175854875', 'Male', 'none'),
(25, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(5) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `itemno` int(5) NOT NULL,
  `sdate` date NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `mobileno`, `itemno`, `sdate`, `quantity`) VALUES
(1, 7023966576, 32, '2018-11-12', 1),
(2, 8084822841, 32, '2018-11-12', 3),
(3, 7423635214, 32, '2018-11-12', 7),
(4, 7845123697, 32, '2018-11-12', 3),
(5, 7895426717, 32, '2018-11-12', 3),
(6, 7425148541, 32, '2018-11-12', 1),
(17, 7023966544, 32, '2018-11-12', 1),
(18, 9003371310, 32, '2018-11-13', 2),
(19, 9585464906, 32, '2018-11-13', 1),
(20, 7896541023, 33, '2018-11-13', 10),
(21, 7012547896, 32, '2018-11-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salesreturn`
--

CREATE TABLE `salesreturn` (
  `srid` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `srdate` date NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supid` int(5) NOT NULL,
  `supname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supid`, `supname`, `address`, `city`, `state`, `mobileno`) VALUES
(1, 'priya', 'kutiya bazar', 'gandipet', 'mizoram', 7041745674);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billno`),
  ADD KEY `hh` (`sid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`mobileno`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemno`),
  ADD KEY `rft` (`supid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `mo_ck` (`mobileno`);

--
-- Indexes for table `salesreturn`
--
ALTER TABLE `salesreturn`
  ADD PRIMARY KEY (`srid`),
  ADD KEY `mo_ck1` (`mobileno`),
  ADD KEY `czc` (`sid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `salesreturn`
--
ALTER TABLE `salesreturn`
  MODIFY `srid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `hh` FOREIGN KEY (`sid`) REFERENCES `sales` (`sid`) ON DELETE NO ACTION;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `rft` FOREIGN KEY (`supid`) REFERENCES `supplier` (`supid`) ON DELETE NO ACTION;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `mo_ck` FOREIGN KEY (`mobileno`) REFERENCES `customer` (`mobileno`);

--
-- Constraints for table `salesreturn`
--
ALTER TABLE `salesreturn`
  ADD CONSTRAINT `czc` FOREIGN KEY (`sid`) REFERENCES `sales` (`sid`) ON DELETE NO ACTION,
  ADD CONSTRAINT `mo_ck1` FOREIGN KEY (`mobileno`) REFERENCES `customer` (`mobileno`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
