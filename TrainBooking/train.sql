-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2018 at 08:28 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainsch`
--

CREATE TABLE `trainsch` (
  `trainname` varchar(50) NOT NULL,
  `trainnumber` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `seats` int(50) NOT NULL,
  `pnr` bigint(50) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`pnr`),
  UNIQUE KEY `pnr` (`pnr`)
) TYPE=InnoDB  AUTO_INCREMENT=10000041 ;

--
-- Dumping data for table `trainsch`
--

INSERT INTO `trainsch` (`trainname`, `trainnumber`, `name`, `from`, `to`, `date`, `seats`, `pnr`, `email`) VALUES
('h', '1', 'y', 'Gaya', 'Saharanpur', '0000-00-00', 10, 10000001, 'aloo@kachra.com'),
('BIHAR S KRANTI', '12565', 'komal', 'Lucknow', 'New Delhi', '2018-12-08', 100, 10000027, 'komal@gmail.com'),
('MAHABODHI EXP', '12398', 'komal', 'New Delhi', 'Gaya', '2018-12-13', 52, 10000028, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000029, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000030, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000031, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000032, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000033, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-20', 0, 10000034, 'komal@gmail.com'),
('GOMTI EXP', '12420', 'saras', 'New Delhi', 'Lucknow', '2018-12-20', 10, 10000038, 'saras@gmail.com'),
('GOMTI EXP', '12420', 'saras', 'New Delhi', 'Lucknow', '2018-12-21', 10, 10000039, 'saras@gmail.com'),
('GOMTI EXP', '12420', 'komal', 'New Delhi', 'Lucknow', '2018-12-21', 2, 10000040, 'komal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `trainschedule`
--

CREATE TABLE `trainschedule` (
  `trainname` varchar(50) NOT NULL,
  `trainnumber` int(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `departuretime` varchar(50) NOT NULL,
  `arrivaltime` varchar(50) NOT NULL,
  `available` int(50) NOT NULL,
  `cost` int(50) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `trainschedule`
--

INSERT INTO `trainschedule` (`trainname`, `trainnumber`, `from`, `to`, `day`, `departuretime`, `arrivaltime`, `available`, `cost`) VALUES
('GOLDNTEMPLE ML', 12904, 'Saharanpur', 'Mumbai Central', 'all', '3:40', '5:05', 100, 640),
('DEHRADUN EXP', 19019, 'Mumbai Central', 'Saharanpur', 'all', '00:05', '12:10', 100, 610),
('KOLKATA MAIL', 12322, 'Mumbai  Central', 'Gaya', 'all', '21:30', '2:20', 100, 675),
('HWH MUMBAI MAIL', 12321, 'Gaya', 'Mumbai Central', 'all', '05:24', '11:25', 100, 675),
('NAUCHANDI EXP', 14512, 'Saharanpur', 'Lucknow', 'all', '16:50', '05:05', 100, 305),
('DOON EXPRESS', 13009, 'Gaya', 'Lucknow', 'all', '5:00', '18:00', 100, 315),
('KOLKATA EXP', 13152, 'Lucknow', 'Gaya', 'all', '17:20', '06:02', 100, 480),
('KOLKATA EXP', 13152, 'Saharanpur', 'Gaya', 'all', '06:05', '06:05', 100, 480),
('GANGA SATLUJ EXP', 13307, 'Gaya', 'Saharanpur', 'all', '00:55', '02:42', 100, 480),
('AMRITSAR MAIL', 13005, 'Lucknow', 'Saharanpur', 'all', '16:00', '01:35', 100, 305),
('PUNJAB MAIL', 12138, 'New Delhi', 'Mumbai Central', 'all', '05:15', '07:35', 100, 1670),
('GOMTI EXP', 12420, 'New Delhi', 'Lucknow', 'all', '12:25', '21:25', 78, 705),
('BIHAR S KRANTI', 12565, 'Lucknow', 'New Delhi', 'all', '21:15', '05:30', 100, 870),
('DEHRADUN SHTBDI', 12017, 'New Delhi', 'Sahranpur', 'all', '06:45', '09:50', 100, 510),
('DEHRADUN SHTBDI', 12018, 'Sahranpur', 'New Delhi', 'all', '19:55', '22:50', 100, 550),
('MAHABODHI EXP', 12398, 'New Delhi', 'Gaya', 'all', '12:10', '03:20', 48, 490),
('PURUSHOTTAM EXP', 12801, 'Gaya', 'New Delhi', 'all', '14:02', '04:20', 100, 490),
('MUMBAI RAJDHANI', 12951, 'Mumbai Central', 'New Delhi', 'all', '17:00', '08:35', 100, 1795),
('PUSHPAK EXPRESS', 12534, 'Mumbai Central', 'Lucknow', 'all', '08:25', '08:40', 100, 600),
('PUSHPAK EXP', 12533, 'Lucknow ', 'Mumbai Central', 'all', '19:45', '20:15', 100, 600);

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`name`, `email`, `password`, `phone`, `city`) VALUES
('sarso', 'aloo@kachra.com', 'sarso', '9999', 'Gaya'),
('khush', 'khush8@gmail.com', 'khush', '7895', 'lucknow'),
('saras', 'sa@gmail.com', 'saras', '5568', 'ALLAHABAD'),
('Saraswati kumari', 'sa@gmail.com', 'saraswati', '59553655', 'ALLAHABAD'),
('komal', 'komal@gmail.com', 'komal', '99', 'mumbai'),
('komal', 'ab@gmail.com', 'ab', '9122545212', 'ALLAHABAD');
