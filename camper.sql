-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 12:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camper`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors_data`
--

CREATE TABLE `visitors_data` (
  `id` int(11) NOT NULL,
  `vistor_ip` varchar(256) NOT NULL,
  `timestamp` varchar(256) NOT NULL,
  `http_user_agent` varchar(256) DEFAULT NULL,
  `http_referer` varchar(256) DEFAULT NULL,
  `http_accept` varchar(256) DEFAULT NULL,
  `http_accept_encoding` varchar(256) DEFAULT NULL,
  `http_accept_language` varchar(256) DEFAULT NULL,
  `http_sec_fetch_site` varchar(256) DEFAULT NULL,
  `http_sec_fetch_mode` varchar(256) DEFAULT NULL,
  `http_sec_fetch_user` varchar(256) DEFAULT NULL,
  `http_sec_fetch_dest` varchar(256) DEFAULT NULL,
  `http_sec_ch_ua` varchar(256) DEFAULT NULL,
  `http_sec_ch_ua_mobile` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors_data`
--
ALTER TABLE `visitors_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors_data`
--
ALTER TABLE `visitors_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
