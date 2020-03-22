-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aniruddh`
--

CREATE TABLE `aniruddh` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aniruddh`
--

INSERT INTO `aniruddh` (`id`, `name`, `mobile`, `email`) VALUES
(1, 'Aniruddh', '9879859050', 'aniruddh@gmail.com'),
(2, 'Ninja', '7048888184', 'codingninjaait@gmail.com'),
(3, 'raj', '9033339598', 'RK@gmail.com'),
(4, 'anirudddh', '9898963389', 'AA@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `aniruddh2`
--

CREATE TABLE `aniruddh2` (
  `id` bigint(15) NOT NULL,
  `user_nm` varchar(100) NOT NULL,
  `full_nm` varchar(100) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `study` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aniruddh2`
--

INSERT INTO `aniruddh2` (`id`, `user_nm`, `full_nm`, `mobile`, `email`, `age`, `study`) VALUES
(1, 'ANIruddh_99', 'Aniruddh Ratanpara', 7048888184, 'Aniruddh@gmail.com', 22, 'BCA'),
(2, 'AP_Patel', 'Arpan Ranoliya', 9033339598, 'AP@outlook.com', 25, 'BscIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aniruddh2`
--
ALTER TABLE `aniruddh2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aniruddh2`
--
ALTER TABLE `aniruddh2`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
