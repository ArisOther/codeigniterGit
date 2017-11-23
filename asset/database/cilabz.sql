-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 10:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cilabz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `ID` int(255) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(75) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`ID`, `title`, `author`, `date`, `content`) VALUES
(1, 'blablabla', 'aris wong', '2017-11-20', 'teroswae'),
(2, 'blablabla', 'aris wong', '2017-11-20', 'teroswae'),
(3, 'kuliah nyata', 'aris w', '2017-11-21', 'ini adalah pesan dan kesan KKN'),
(4, 'kuliah nyata', 'aris w', '2017-11-21', 'ini adalah pesan dan kesan KKN'),
(5, 'dewa', 'dani', '2017-11-21', 'ini adalah dani dewa'),
(6, 'street fighter', 'ryu', '2017-11-21', 'ini adalah pertarungan'),
(7, 'street fighter', 'ryu', '2017-11-21', 'ini adalah pertarungan'),
(8, 'sdafgdf', 'bla bla bla', '2017-11-21', 'dfgfdhhjadgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
