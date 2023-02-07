-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2023 at 05:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cripto`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bitcoin`
--

CREATE TABLE `Bitcoin` (
  `ID` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bitcoin`
--

INSERT INTO `Bitcoin` (`ID`, `value`) VALUES
(18, 24049),
(19, 22904);

-- --------------------------------------------------------

--
-- Table structure for table `BitcoinWallet`
--

CREATE TABLE `BitcoinWallet` (
  `ID` int(11) NOT NULL,
  `ammount` int(11) DEFAULT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BitcoinWallet`
--

INSERT INTO `BitcoinWallet` (`ID`, `ammount`, `Address`) VALUES
(1, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `BTCC`
--

CREATE TABLE `BTCC` (
  `ID` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BTCC`
--

INSERT INTO `BTCC` (`ID`, `value`) VALUES
(1, 91),
(2, 90);

-- --------------------------------------------------------

--
-- Table structure for table `Ccard`
--

CREATE TABLE `Ccard` (
  `ID` int(11) NOT NULL,
  `NameHolder` varchar(10) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `expiration` varchar(5) DEFAULT NULL,
  `cvc` int(3) DEFAULT NULL,
  `Zip` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Etherium`
--

CREATE TABLE `Etherium` (
  `ID` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Etherium`
--

INSERT INTO `Etherium` (`ID`, `value`) VALUES
(1, 1635),
(2, 1632);

-- --------------------------------------------------------

--
-- Table structure for table `EtheriumWallet`
--

CREATE TABLE `EtheriumWallet` (
  `ID` int(11) NOT NULL,
  `ammount` int(11) DEFAULT NULL,
  `Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `EtheriumWallet`
--

INSERT INTO `EtheriumWallet` (`ID`, `ammount`, `Address`) VALUES
(1, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `LiteCoin`
--

CREATE TABLE `LiteCoin` (
  `ID` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LiteCoin`
--

INSERT INTO `LiteCoin` (`ID`, `value`) VALUES
(1, 99),
(2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `LiteCoinWallet`
--

CREATE TABLE `LiteCoinWallet` (
  `ID` int(11) DEFAULT NULL,
  `ammount` int(11) DEFAULT NULL,
  `Adress` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LiteCoinWallet`
--

INSERT INTO `LiteCoinWallet` (`ID`, `ammount`, `Adress`) VALUES
(1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(13) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `FullName`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `logsUser`
--

CREATE TABLE `logsUser` (
  `ID` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `text` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `UserInfo`
--

CREATE TABLE `UserInfo` (
  `ID` int(11) NOT NULL,
  `birthDate` date DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `ZipCode` int(11) DEFAULT NULL,
  `Country` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bitcoin`
--
ALTER TABLE `Bitcoin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BitcoinWallet`
--
ALTER TABLE `BitcoinWallet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BTCC`
--
ALTER TABLE `BTCC`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Ccard`
--
ALTER TABLE `Ccard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Etherium`
--
ALTER TABLE `Etherium`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `EtheriumWallet`
--
ALTER TABLE `EtheriumWallet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `LiteCoin`
--
ALTER TABLE `LiteCoin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `UserInfo`
--
ALTER TABLE `UserInfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bitcoin`
--
ALTER TABLE `Bitcoin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Etherium`
--
ALTER TABLE `Etherium`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `LiteCoin`
--
ALTER TABLE `LiteCoin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
