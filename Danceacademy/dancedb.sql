-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 05:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'sona', 'Sona@2', 0, 0),
(2, 'tinu', 'tinu@123', 0, 0),
(3, 'sona', 'Sona@2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE `tbl_studreg` (
  `reg_id` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `file` varchar(20) NOT NULL,
  `status` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`reg_id`, `login_id`, `name`, `address`, `gender`, `DOB`, `contactno`, `email`, `file`, `status`) VALUES
(1, 0, 'aparna', 'nanthikattu', 'Female', '1995-02-04', '9554551174', 'aparna@gmail.com', '', 0),
(2, 0, 'sona', 'kunnel', 'Female', '2020-10-07', '9455645465', 'sona@gmail.com', '', 0),
(3, 0, 'tina tomy', 'pulikal', 'Female', '2020-10-06', '9632548529', 'tinatomy@gmail.com', '', 0),
(4, 0, 'anitta maria joseph', 'vadkakoratty', 'Female', '2020-10-21', '9563248562', 'anittamaria@gmail.co', '', 0),
(5, 0, 'avinash', 'lfjldjfjkah', 'Male', '2020-10-07', '9744526301', 'aparna@gmail.com', 'p807.jpg', 0),
(6, 1, 'aparna', 'nanthikattu', 'Male', '2020-10-06', '9874563210', 'aparna@gmail.com', 'p807.jpg', 0),
(7, 2, 'tnu', 'mbhjghgg', 'Female', '2020-10-14', '9236548712', 'tinu@gmai.com', 'p807 (1).jpg', 0),
(8, 3, 'nadhu', 'vadkakoratty', 'Female', '2020-10-26', '9785422365', 'anittamaria@gmail.co', 'p807.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
