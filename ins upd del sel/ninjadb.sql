-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 10:53 AM
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
-- Database: `ninjadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodb`
--

CREATE TABLE `prodb` (
  `id` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodb`
--

INSERT INTO `prodb` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'anirudddh', 7048888184, 'AA@mail.com', '123456789'),
(3, 'Aniruddh Ratanpara', 7574062007, 'AA@mail.com', '7600526667'),
(4, 'viral', 8080909050, 'viral@it.com', 'ititititititi'),
(5, 'raj', 7048888184, 'RK@gmail.com', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodb`
--
ALTER TABLE `prodb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodb`
--
ALTER TABLE `prodb`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
