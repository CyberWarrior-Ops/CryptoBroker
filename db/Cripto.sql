-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 03:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Bitcoin`
--

INSERT INTO `Bitcoin` (`ID`, `value`) VALUES
(18, 24049);

-- --------------------------------------------------------

--
-- Table structure for table `BitcoinWallet`
--

CREATE TABLE `BitcoinWallet` (
  `ID_Client` int(11) NOT NULL,
  `ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Etherium`
--

CREATE TABLE `Etherium` (
  `ID` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `EtheriumWallet`
--

CREATE TABLE `EtheriumWallet` (
  `ID_Client` int(11) NOT NULL,
  `ammount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(13) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `FullName`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`ID_Client`);

--
-- Indexes for table `Etherium`
--
ALTER TABLE `Etherium`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `EtheriumWallet`
--
ALTER TABLE `EtheriumWallet`
  ADD PRIMARY KEY (`ID_Client`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Etherium`
--
ALTER TABLE `Etherium`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
