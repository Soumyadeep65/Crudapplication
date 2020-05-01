-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 07:20 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpwork1`
--

-- --------------------------------------------------------

--
-- Table structure for table `oap`
--

CREATE TABLE `oap` (
  `id` int(11) NOT NULL,
  `Option1` varchar(999) NOT NULL,
  `type` varchar(999) NOT NULL,
  `Name` varchar(999) NOT NULL,
  `Cost` int(11) NOT NULL,
  `OptionHours` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `shopping_site` varchar(100) NOT NULL,
  `tech_talk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oap`
--

INSERT INTO `oap` (`id`, `Option1`, `type`, `Name`, `Cost`, `OptionHours`, `Weight`, `shopping_site`, `tech_talk`) VALUES
(2, 'Test-420', '21-Audio Dist', 'Test-420', 111, 1, 0, 'No', 'No'),
(3, '320606', '99-custom', 'custom option 320606', 111, 1, 2, 'no', 'no'),
(4, '320627', '99-custom', 'chps', 111, 1, 1, 'no', 'no'),
(5, '320635', '99-custom', 'cgdscds', 111, 1, 1, 'no', 'no'),
(6, '321028', '99-custom', 'Custom Option', 111, 1, 1, 'no', 'no'),
(7, '321259', '99-custom', 'sccacs', 111, 1, 1, 'no', 'no'),
(8, '321392', '99-custom', 'scslt', 111, 1, 1, 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oap`
--
ALTER TABLE `oap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oap`
--
ALTER TABLE `oap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
