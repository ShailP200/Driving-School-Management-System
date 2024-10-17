-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 03:41 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `driving`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `srno` int(11) NOT NULL,
  `batchid` int(11) NOT NULL,
  `adate` date NOT NULL,
  `enrollid` text NOT NULL,
  `presenty` text NOT NULL,
  `totalkm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`srno`, `batchid`, `adate`, `enrollid`, `presenty`, `totalkm`) VALUES
(6, 2, '2021-05-05', '4', 'P', 6),
(5, 2, '2021-05-05', '2', 'P', 6),
(4, 2, '2021-05-05', '4', 'P', 6),
(3, 2, '2021-05-05', '2', 'P', 6),
(2, 1, '2021-05-05', '3', 'P', 6),
(1, 1, '2021-05-05', '1', 'P', 6),
(8, 2, '2021-05-05', '4', 'P', 12),
(7, 2, '2021-05-05', '2', 'A', 12);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batchid` int(11) NOT NULL,
  `vehclass` text NOT NULL,
  `stdate` date NOT NULL,
  `enddate` date NOT NULL,
  `fromtime` text NOT NULL,
  `totime` text NOT NULL,
  `dcode` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `occupy` int(11) NOT NULL,
  `btype` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchid`, `vehclass`, `stdate`, `enddate`, `fromtime`, `totime`, `dcode`, `capacity`, `occupy`, `btype`) VALUES
(1, 'LMV', '2020-12-16', '2021-01-15', '10 am', '12 pm', '1', 4, 0, 'male'),
(2, 'LMV', '2020-12-17', '2021-01-16', '4 pm', '6 pm', '2', 4, 0, 'male'),
(3, 'LMV', '2020-12-17', '2020-01-17', '2PM', '4PM', '3', 4, 0, 'female'),
(4, 'MCWG', '2021-05-06', '2021-06-05', '10AM', '12PM', '1', 2, 0, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `dcode` text NOT NULL,
  `drname` text NOT NULL,
  `daddr` text NOT NULL,
  `city` text NOT NULL,
  `contno` text NOT NULL,
  `emailid` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `licno` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dcode`, `drname`, `daddr`, `city`, `contno`, `emailid`, `gender`, `age`, `exp`, `licno`, `password`) VALUES
('1', 'nitin rajput', 'mohadi, dhule', 'dhule', '9638520147', 'mitinrajput01@gmail.com', 'male', 30, 4, 'licence30', 'nitin'),
('2', 'abhijit patil', 'agrawal nagar, dhule', 'dhule', '9764310258', 'patilabhijit11@gmail.com', 'male', 36, 6, 'licence36', 'abhijit'),
('3', 'Rajesh Salukhe', 'jaihind colony', 'dhule', '9871230456', 'rajesh123@gmail.com', 'male', 32, 6, 'licence32', 'Rajesh');

-- --------------------------------------------------------

--
-- Table structure for table `expenditive`
--

CREATE TABLE IF NOT EXISTS `expenditive` (
  `expno` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `amt` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditive`
--

INSERT INTO `expenditive` (`expno`, `expdate`, `amt`, `remark`) VALUES
(2, '2020-12-22', 2000, 'maintenance DEZIRE'),
(1, '2020-12-16', 1500, 'fuel');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `srno` int(11) NOT NULL,
  `vehclass` text NOT NULL,
  `totalfees` int(11) NOT NULL,
  `licfees` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`srno`, `vehclass`, `totalfees`, `licfees`) VALUES
(1, 'LMV', 4000, 1500),
(2, '3W-Nt', 2000, 1100),
(3, 'MCWG', 1000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `paidfees`
--

CREATE TABLE IF NOT EXISTS `paidfees` (
  `vid` int(11) NOT NULL,
  `vdate` date NOT NULL,
  `enrollid` text NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paidfees`
--

INSERT INTO `paidfees` (`vid`, `vdate`, `enrollid`, `fees`) VALUES
(7, '2021-05-06', '5', 1000),
(5, '2021-05-05', '4', 2500),
(4, '2021-05-05', '3', 1500),
(8, '2021-05-06', '6', 500),
(6, '2021-05-06', '1', 500),
(3, '2021-05-05', '2', 1000),
(2, '2021-05-05', '1', 1000),
(1, '2021-05-05', '1', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `enrollid` int(11) NOT NULL,
  `enrolldate` date NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `birtdate` date NOT NULL,
  `addr` text NOT NULL,
  `contno` text NOT NULL,
  `emailid` text NOT NULL,
  `photo` text NOT NULL,
  `ageproof` text NOT NULL,
  `addrproof` text NOT NULL,
  `card` text NOT NULL,
  `balfees` int(11) NOT NULL,
  `batchid` int(11) NOT NULL,
  `vehclass` text NOT NULL,
  `existlicense` text NOT NULL,
  `license` text NOT NULL,
  `extralicense` text NOT NULL,
  `balkm` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollid`, `enrolldate`, `name`, `gender`, `birtdate`, `addr`, `contno`, `emailid`, `photo`, `ageproof`, `addrproof`, `card`, `balfees`, `batchid`, `vehclass`, `existlicense`, `license`, `extralicense`, `balkm`, `password`) VALUES
(5, '2021-05-06', 'hetvi patel', 'Female', '2021-05-06', 'vaibhav nagar', '9876543000', 'hetvi@gmail.com', '2016-05-26-20-55-03-744.jpg', '2016-05-26-17-38-59-139.jpg', '2016-05-26-22-55-05-934.jpg', '2016-05-29-18-28-11-129.jpg', 3000, 3, 'LMV', 'no', 'no', 'no', 156, 'hetu'),
(4, '2021-05-05', 'siddhesh Anturlikar', 'Male', '2021-05-05', 'juna dhuliya', '8765432199', 'siddhesh@gmail.com', 'IMG_20180510_093955.jpg', '2016-05-26-20-55-45-761.jpg', 'IMG-20160530-WA0005.jpg', 'sis n bro.jpg', 1500, 2, 'LMV', 'no', 'no', 'no', 132, 'siddhesh'),
(6, '2021-05-06', 'Shail Patel', 'Male', '2021-05-06', 'vaibhav nagar', '9876543210', 'patelshail200@gmail.com', '2016-05-26-20-10-00-160.jpg', '2016-05-26-20-55-03-744.jpg', '2016-05-26-20-20-19-210.jpg', '2016-05-29-18-25-23-079.jpg', 500, 4, 'MCWG', 'no', 'no', 'no', 52, 'shail'),
(3, '2021-05-05', 'kalpesh khairnar', 'Male', '2021-05-05', 'jayshankar colony', '5556667778', 'kalpesh@gmail.com', '2016-05-26-20-20-19-210.jpg', '2016-05-26-20-55-45-761.jpg', '2016-05-29-18-25-23-079.jpg', '2016-05-29-18-28-11-129.jpg', 2500, 1, 'LMV', 'no', 'no', 'no', 150, 'kalpesh'),
(2, '2021-05-05', 'Pandya Paresh', 'Male', '2021-05-05', 'vaibhav nagar', '6666666666', 'pareshpandya026@gmail.com', '2016-05-26-20-17-46-412.jpg', '2016-05-26-20-18-56-273.jpg', '2016-05-26-20-55-03-744.jpg', '2016-05-26-22-55-05-934.jpg', 3000, 2, 'LMV', 'no', 'no', 'no', 144, 'paresh'),
(1, '2021-05-05', 'Shail Patel', 'Male', '2021-05-05', 'vaibhav nagar', '8456789566', 'patelshail200@gmail.com', '2016-05-26-17-38-59-139.jpg', '2016-05-26-20-08-18-316.jpg', '2016-05-26-20-09-03-576.jpg', '2016-05-26-20-10-00-160.jpg', 500, 1, 'LMV', 'no', 'no', 'no', 150, 'shail');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `emailid` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailid`, `password`) VALUES
('pareshpandya026@gmail.com', 'paresh'),
('patelshail200@gmail.com', 'shail'),
('kalpesh@gmail.com', 'kalpesh'),
('siddhesh@gmail.com', 'siddhesh'),
('hetvi@gmail.com', 'hetvi'),
('patel@gmail.com', 'patel');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehno` text NOT NULL,
  `vehclass` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehno`, `vehclass`, `make`, `model`) VALUES
('MH18B1234', 'LMV', '2015', 'SWIFT DEZIRE ZDI'),
('MH18H4568', 'LMV', '2011', 'SWIFT VDI'),
('MH18Q9510', 'LMV', '2018', 'NEXON VDI'),
('MH18AJ9701', 'MCWG', '2017', 'suzuki Access 125');
