-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 10:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id_aboutme` int(50) NOT NULL,
  `name_aboutme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail_aboutme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_aboutme` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address_aboutme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_aboutme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar_aboutme` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id_aboutme`, `name_aboutme`, `detail_aboutme`, `phone_aboutme`, `address_aboutme`, `email_aboutme`, `avatar_aboutme`) VALUES
(1, 'Phạm Trung Nam', 'Bóc phốt chứ đừng có bóc phét , sở trường của tao là bóc nát bét mấy thằng nhóc ác', '0905123456', 'Đà Nẵng', 'trungnam2101998@gmail.com', '2diwi4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `id_edu` int(10) NOT NULL,
  `name_edu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_edu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_edu` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id_edu`, `name_edu`, `address_edu`, `time_edu`) VALUES
(5, 'Hổ báo trường mẫu giáo', 'Anh không sợ yêu em , anh chỉ cần có lý do thôi', '2000-2004'),
(6, 'Cấp 1 ngoan hiền ', 'Em xin lỗi vì lỡ đánh bạn hộc máu mỏ', '2004-2009'),
(8, 'Cấp 2 ngây thơ ', 'Trùm trường đéo nói nhiều ', '2009-2013'),
(9, 'Cấp 3 em đâu biết gì ', 'Đóng phim ở TOCOTOCO :))', '2013-2016'),
(10, 'Đại Học', 'Ghét mấy thằng tên Tùng,Thắng đang ngồi đọc chùa mà không like', '2016-20xx');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id_exp` int(10) NOT NULL,
  `name_exp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail_exp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_exp` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id_exp`, `name_exp`, `detail_exp`, `time_exp`) VALUES
(18, 'Thợ sửa ống nước', 'Thợ sửa ống nước lâu năm :))', '2013-2014'),
(19, 'Anh đưa thư', 'Anh đưa thư lâu năm ', '2015-1016'),
(20, 'Nhân viên TOCOTOCO', 'Có link full :))))))', '2017-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id_aboutme`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id_edu`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id_exp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id_aboutme` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `id_edu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id_exp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
