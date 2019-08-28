-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2019 at 07:42 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globaltravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `ClientId` int(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `HomePhoneNumber` varchar(10) NOT NULL,
  `OfficePhoneNumber` varchar(10) NOT NULL,
  `OtherPhoneNumber` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `ClientId` (`ClientId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Id`, `ClientId`, `Address`, `City`, `Department`, `HomePhoneNumber`, `OfficePhoneNumber`, `OtherPhoneNumber`) VALUES
(1, 2, 'Res. Suyapita', 'Tegucigalpa', 'Francisco Morazan', '22348976', '22330033', '99873546');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `BankId` int(20) NOT NULL AUTO_INCREMENT,
  `BankName` varchar(20) NOT NULL,
  `State` int(11) NOT NULL,
  PRIMARY KEY (`BankId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`BankId`, `BankName`, `State`) VALUES
(1, 'Ficohsa', 0),
(2, 'BAC Credomatic', 0),
(3, 'Banco Atlantida', 0);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
CREATE TABLE IF NOT EXISTS `beneficiary` (
  `BeneficiaryId` int(20) NOT NULL AUTO_INCREMENT,
  `ClientId` int(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `IdNumber` varchar(20) NOT NULL,
  `CivilStatusId` int(20) NOT NULL,
  PRIMARY KEY (`BeneficiaryId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cardinfo`
--

DROP TABLE IF EXISTS `cardinfo`;
CREATE TABLE IF NOT EXISTS `cardinfo` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `ClientId` int(11) NOT NULL,
  `ExpirationDate` date NOT NULL,
  `Digits` varchar(20) NOT NULL,
  `BankId` int(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `ClientId` (`ClientId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cardinfo`
--

INSERT INTO `cardinfo` (`Id`, `ClientId`, `ExpirationDate`, `Digits`, `BankId`) VALUES
(1, 3, '2019-09-01', '12345678910', 3),
(2, 2, '2019-09-08', '12347859049', 2),
(4, 5, '2019-09-05', '12347584497', 3),
(5, 10, '2019-09-08', '12347584', 2);

-- --------------------------------------------------------

--
-- Table structure for table `civilstatus`
--

DROP TABLE IF EXISTS `civilstatus`;
CREATE TABLE IF NOT EXISTS `civilstatus` (
  `CivilStatusId` int(20) NOT NULL AUTO_INCREMENT,
  `CivilStatusName` varchar(20) NOT NULL,
  PRIMARY KEY (`CivilStatusId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `civilstatus`
--

INSERT INTO `civilstatus` (`CivilStatusId`, `CivilStatusName`) VALUES
(1, 'Casado/a'),
(2, 'Soltero/a'),
(3, 'Divorciado/a'),
(4, 'Viudo/a');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `UserId` int(20) NOT NULL,
  `PartnerNumber` int(20) NOT NULL,
  `IsCompany` int(20) NOT NULL,
  `MembershipId` int(20) NOT NULL,
  `AffiliationDate` date NOT NULL,
  `CargoDate` date NOT NULL,
  `ExpirationDate` date NOT NULL,
  `Company` varchar(30) DEFAULT NULL,
  `Job` varchar(20) DEFAULT NULL,
  `Anniversary` date NOT NULL,
  `Birthday` date NOT NULL,
  UNIQUE KEY `UserId` (`UserId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`UserId`, `PartnerNumber`, `IsCompany`, `MembershipId`, `AffiliationDate`, `CargoDate`, `ExpirationDate`, `Company`, `Job`, `Anniversary`, `Birthday`) VALUES
(2, 201983, 1, 3, '2019-08-22', '2019-08-23', '2019-09-08', '1998', 'Gerente', '2019-08-20', '2019-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `clientoperation`
--

DROP TABLE IF EXISTS `clientoperation`;
CREATE TABLE IF NOT EXISTS `clientoperation` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `PackageId` int(20) NOT NULL,
  `Date` date NOT NULL,
  `ClientId` int(10) NOT NULL,
  `SellerId` int(10) NOT NULL,
  `State` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientoperation`
--

INSERT INTO `clientoperation` (`Id`, `PackageId`, `Date`, `ClientId`, `SellerId`, `State`) VALUES
(1, 1, '2019-08-22', 2, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `GenderId` int(20) NOT NULL AUTO_INCREMENT,
  `GenderName` varchar(20) NOT NULL,
  PRIMARY KEY (`GenderId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GenderId`, `GenderName`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `MembershipId` int(20) NOT NULL AUTO_INCREMENT,
  `MembershipName` varchar(20) NOT NULL,
  `State` int(11) NOT NULL,
  PRIMARY KEY (`MembershipId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`MembershipId`, `MembershipName`, `State`) VALUES
(1, 'Basica', 0),
(2, 'Platinum', 0),
(3, 'Gold', 0),
(4, 'Diamond', 0);

-- --------------------------------------------------------

--
-- Table structure for table `observations`
--

DROP TABLE IF EXISTS `observations`;
CREATE TABLE IF NOT EXISTS `observations` (
  `ObservationId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `ObservationDescription` mediumtext NOT NULL,
  `Date` date NOT NULL,
  `State` int(11) NOT NULL,
  PRIMARY KEY (`ObservationId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `observations`
--

INSERT INTO `observations` (`ObservationId`, `UserId`, `ObservationDescription`, `Date`, `State`) VALUES
(1, 2, 'tiene hambre', '2019-08-13', 0),
(2, 2, 'no ceno', '2019-08-15', 0),
(3, 2, 'holaa', '2019-08-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` int(8) NOT NULL,
  `Observations` mediumtext NOT NULL,
  `State` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`Id`, `Name`, `Price`, `Observations`, `State`) VALUES
(1, 'Paquete 1', 299, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `name`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin'),
(3, 'Seller'),
(4, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) NOT NULL,
  `GenderId` int(20) NOT NULL,
  `CivilStatusId` int(20) NOT NULL,
  `IdNumber` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CellPhoneNumber` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `State` int(11) NOT NULL,
  `Info` int(11) NOT NULL,
  PRIMARY KEY (`IdUser`),
  UNIQUE KEY `username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `FullName`, `GenderId`, `CivilStatusId`, `IdNumber`, `Username`, `Email`, `CellPhoneNumber`, `password`, `rol_id`, `State`, `Info`) VALUES
(1, 'root', 0, 0, '0', 'root', 'root@gmail.com', '', 'f72b8794d3f268f4f770e8aaa0a6e71f0ff06a56', 1, 0, 0),
(2, 'Bryan Canales', 1, 2, '0801199901218', 'BKD', 'bkdcanales@gmail.com', '99017648', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 0),
(3, 'Christian Gabo', 0, 0, '0', 'cris', 'cris@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 1),
(4, 'Gisela Canales', 0, 0, '0', 'gisela', 'gisel@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 0),
(5, 'Godoy Canales', 0, 0, '0', 'Godoy', 'godoy@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 0),
(13, 'Godoy Canales', 0, 0, '0', 'BKDasd', 'gccaasdn2000@yahoo.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 3, 0, 0),
(10, '123123', 0, 0, '0', '123123123', '123@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 0),
(11, 'Gabriel', 0, 0, '0', 'gabo', 'gabo@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 4, 0, 0),
(14, 'Cesy Banegas', 0, 0, '0', 'cesy', 'cesy@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 3, 0, 0),
(15, 'Allison Mariela', 0, 0, '0', 'Allie', 'Allie@gmail.com', '', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 2, 0, 0),
(16, 'Melissa', 1, 1, '0204199976337', 'Mely', 'Mely@gmail.com', '32894006', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 3, 0, 0),
(17, 'qas', 3, 4, '1weqwe', 'qweqwe', 'qweq@gmail.com', 'weqwdqw', 'd51844846d55fc5d30bb6eb39b3759697d9b77ef', 2, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
