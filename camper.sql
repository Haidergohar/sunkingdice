-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 11:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_data`
--

CREATE TABLE `visitors_data` (
  `id` int(11) NOT NULL,
  `vistor_ip` varchar(256) NOT NULL,
  `page` varchar(255) NOT NULL,
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
  `http_sec_ch_ua_mobile` varchar(256) DEFAULT NULL,
  `device_screen_resolution` varchar(256) DEFAULT NULL,
  `button_clicked_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors_data`
--

INSERT INTO `visitors_data` (`id`, `vistor_ip`, `page`, `timestamp`, `http_user_agent`, `http_referer`, `http_accept`, `http_accept_encoding`, `http_accept_language`, `http_sec_fetch_site`, `http_sec_fetch_mode`, `http_sec_fetch_user`, `http_sec_fetch_dest`, `http_sec_ch_ua`, `http_sec_ch_ua_mobile`, `device_screen_resolution`, `button_clicked_count`) VALUES
(1, '::1', '', '1627844015', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 0),
(2, '::1', '', '1627844065', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 0),
(3, '::1', '', '1627844070', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 0),
(4, '::1', '', '1627844480', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 8),
(5, '::1', '1kn4ti68', '1627938802', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 0),
(6, '::1', '1kn4ti68', '1627938835', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 3),
(7, '::1', 'index', '1627938882', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', NULL, 0),
(8, '::1', 'index', '1627938904', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', NULL, 0),
(9, '::1', 'index', '1627938918', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 0),
(10, '::1', '404 page', '1627938950', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors_data`
--
ALTER TABLE `visitors_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors_data`
--
ALTER TABLE `visitors_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
