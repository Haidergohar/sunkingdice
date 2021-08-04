-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:26 PM
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
  `visited_1kn4ti6_page` varchar(5) DEFAULT 'NO',
  `visited_index_page` varchar(5) DEFAULT 'NO',
  `visited_404_page` varchar(5) DEFAULT 'NO',
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
  `transaction_number` varchar(255) DEFAULT NULL,
  `list_of_stolen_valuables_btn_clicked` varchar(5) DEFAULT 'NO',
  `video_clicked` varchar(5) DEFAULT 'NO',
  `watch_surveillance_video_btn_clicked` varchar(5) DEFAULT 'NO',
  `message` text DEFAULT NULL,
  `isp` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors_data`
--

INSERT INTO `visitors_data` (`id`, `vistor_ip`, `visited_1kn4ti6_page`, `visited_index_page`, `visited_404_page`, `timestamp`, `http_user_agent`, `http_referer`, `http_accept`, `http_accept_encoding`, `http_accept_language`, `http_sec_fetch_site`, `http_sec_fetch_mode`, `http_sec_fetch_user`, `http_sec_fetch_dest`, `http_sec_ch_ua`, `http_sec_ch_ua_mobile`, `device_screen_resolution`, `transaction_number`, `list_of_stolen_valuables_btn_clicked`, `video_clicked`, `watch_surveillance_video_btn_clicked`, `message`, `isp`, `city`, `country`) VALUES
(1, '103.161.154.117', 'YES', 'YES', 'YES', '1628092678', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'gzip, deflate, br', 'en-US,en;q=0.9', 'none', 'navigate', '?1', 'document', '\"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"', '?0', '1366 x 768', 'this is transacrion', 'YES', 'YES', 'YES', 'this is message', 'AS132165 Connect Communications', 'Karachi', 'PK');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
