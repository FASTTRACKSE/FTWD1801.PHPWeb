-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:26 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tratienhuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id_aboutme` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id_aboutme`, `name`, `detail`, `phone`, `address`, `email`, `facebook`) VALUES
(1, 'Trà Tiên Hưởng Đà Nẵng', 'Trà sữa Tiên Hưởng xin kính chào quý khách hàng gần xa. Hương vị trà đến từ Đài Loan nay đã có mặt tại Việt Nam với nguyên liệu được lựa chọn kỹ càng và được pha chế ngay tại quán (không pha chế trước hoặc để qua ngày). Đến với trà sữa Tiên Hưởng, quý khách sẽ được thưởng thức những loại thức uống thanh khiết tốt nhất cho sức khoẻ. Chúng tôi sử dụng trà được chiết xuất từ trà tươi núi cao Đài Loan, sữa pha chế dùng từ sữa bột nhập khẩu từ Hoa Kỳ, và nước dùng để pha đều được thanh lọc qua máy lọc nước 3M của Hoa Kỳ. Khi quý khách đến thưởng thức tại quán, quý khách sẽ được phục vụ một cách chu đáo. Chúng tôi sẽ cho quý khách thử thức uống mà quý khách đã chọn để phù hợp với khẩu vị (vị ngọt, vị chua, đá viên nhiều hoặc ít). Thế mạnh của chúng tôi là những thức uống trà: trà A-li-shan, trà Ô-long. Với mong muốn là mang đến cho quý khách thức uống (hơn hết là các loại trà, trà sữa) tốt nhất nên chúng tôi pha các sản phẩm ngay tại quán nên sẽ hơi lâu, mong quý khách thông cảm cho sự chậm trễ này của chúng tôi. Xin mời quý khách gần xa hãy đến và thưởng thức những thức uống bổ dưỡng và thanh khiết cho cơ thể tại địa chỉ: 380A Nguyễn Thị Thập, Phường Tân Hưng, Quận 7, tp.Hồ Chí Minh. Và nếu quý khách cần giao hàng tận nơi, xin hãy gọi: 0937 951 414 (trên 5ly/lần giao).\r\nCơ hội hợp tác:\r\nTrong bối cảnh năng động của nền kinh tế thời kỳ hội nhập, Trà Tiên Hưởng sẵn sàng chào đón và hợp tác có chọn lọc với tất cả các nhà đầu tư muốn trở thành đại lý nhượng quyền kinh doanh tất cả các sản phẩm của Trà Tiên Hưởng. Trà Tiên Hưởng cũng cam kết hỗ trợ các đại lý phát triển doanh số bán hàng bằng các chiến lược phát triển dịch vụ khách hàng và marketing trong toàn hệ thống. Bên cạnh đó, Trà sữa Tiên Hưởng cũng mong muốn trở thành đối tác tin cậy và chiến lược trong nhiều lĩnh vực của tất cả các tổ chức uy tín trong và ngoài nước đang hoạt động tại thị trường Việt Nam trên tinh thần hợp tác cùng phát triển.', '01666637622', 'Số 32 Lê Đình Dương , Hải Châu, Đà Nẵng', 'lamnguyen24794@gmail.com', 'https://www.facebook.com/tratienhuongdanang/?ref=br_rs');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id_branch` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id_branch`, `name`, `address`, `phone`, `status`) VALUES
(1, 'Chi nhánh 1', '380a Nguyễn Thị Thập, P.Tân Hưng, Quận 7, Tp.HCM', '0866757640', 1),
(2, 'Chi nhánh 2', '175b Cmt8, Phường 5, Quận 3, Tp.HCM', '0866804241', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cid`, `name`, `status`, `parent_id`) VALUES
(2, 'Tin News', 1, 0),
(3, 'Khuyến mãi', 1, 2),
(4, 'Tuyển dụng', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `address`, `phone`, `content`, `status`) VALUES
(1, 'Mỹ Linh', 'lnguyen240794@gmail.com', 'Thanh Trà, Hà Nội', '0931234560', '', 1),
(2, 'Hồng Nhung', 'hongnhungtran@gmail.com', 'Quảng Nam', '05113345636', '', 1),
(3, 'trần Thu hà', 'thuha12@gmail.com', 'Thanh Khê, Đà Nẵng', '0909324678', '', 1),
(8, 'Bạn quen thời phổ thông', 'lnguyen240794@gmail.com', 'Số 7 Phần Lăng 8  Thanh Khê , Đà Nẵng', '12345678', 'Hi', 1),
(9, 'Nguyễn Thành Lâm', 'lnguyen240794@gmail.com', 'Số 7 Phần Lăng 8  Thanh Khê , Đà Nẵng', '0986373562', 'HI', 1),
(10, 'Bạn quen thời phổ thông', 'lnguyen24794@gmail.com', '#10-01 Crosscoop Office', '12345678', '12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detail`, `id_product`, `id_order`, `id_size`, `qty`) VALUES
(1, 7, 9, 4, 1),
(2, 7, 10, 4, 1),
(3, 7, 11, 4, 1),
(4, 6, 12, 3, 2),
(5, 5, 12, 3, 3),
(6, 4, 12, 1, 1),
(7, 6, 13, 4, 1),
(8, 7, 14, 3, 1),
(9, 6, 14, 4, 1),
(10, 6, 15, 4, 1),
(11, 7, 16, 4, 1),
(12, 7, 17, 4, 1),
(13, 7, 19, 4, 1),
(14, 29, 20, 4, 1),
(15, 26, 21, 4, 1),
(16, 29, 22, 4, 4),
(17, 28, 22, 4, 2),
(18, 27, 22, 4, 1),
(19, 29, 22, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `id_kind` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`id_kind`, `name`, `status`) VALUES
(2, 'Kem Tuyết', 1),
(3, 'Trà sữa', 1),
(4, 'Trà xanh', 1),
(5, 'Cafe', 1),
(6, 'Nước mía', 1),
(7, 'Nước bi dao', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `preview_text` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cid` int(11) NOT NULL,
  `count_number` int(11) NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `name`, `preview_text`, `detail_text`, `create_at`, `updated_at`, `cid`, `count_number`, `picture`, `status`, `id_user`) VALUES
(1, 'Tuyển dụng tháng 10', 'Tuyển nv \r\nCa sáng: 1 người\r\nTglv: 7-12h\r\nCa tối : 1 người\r\n17-23 hoặc 18-23h', '<p>Tuyển nv&nbsp;<br />\r\nCa s&aacute;ng: 1 người<br />\r\nTglv: 7-12h<br />\r\nCa tối : 1 người<br />\r\n17-23 hoặc 18-23h</p>', '2017-10-30 15:03:01', '2017-10-30 15:03:01', 4, 0, 'g5e2NhbTIGCzi5iSbWKjsaJGKVQ4ECD9njK3DKOq.jpeg', 1, 1),
(2, 'Giám giá ngày 31/10/2018', 'Hãy đến tham gia Halloween Ở Tiên Hưởng nào', '<p><img alt=\"\" src=\"/storage/app/files/images/c-o-fanart-na-863.jpg\" style=\"height:900px; margin-left:100px; margin-right:100px; width:1600px\" /><img alt=\"\" src=\"/storage/app/files/images/905ae746ce0825567c19.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>', '2018-05-28 03:48:41', '2018-05-28 03:48:41', 4, 0, '3UIV4fVzUzvRyHvOpDW7VvCLoiFVhhRbjHxI3czq.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pay` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_ship` time DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `status`, `create_at`, `updated_at`, `id_pay`, `total`, `address`, `date_ship`, `phone`, `email`, `cname`) VALUES
(17, 1, 1, '2017-10-30 04:23:01', '2017-10-30 04:23:01', NULL, 55000, '123', '04:22:27', '123', 'lnguyen24794@gmail.com', 'Lam'),
(19, 1, 1, '2017-10-30 10:06:18', '2017-10-30 10:06:18', NULL, 55000, '123', '10:04:59', '123', 'lnguyen24794@gmail.com', 'Lam'),
(20, 1, 1, '2017-10-30 18:37:58', '2017-10-30 18:37:58', NULL, 57000, 'Số 7 Phần Lăng 8', '18:37:03', '0986373562', 'lnguyen24794@gmail.com', 'Nguyễn Thành Lâm'),
(21, NULL, 1, '2017-11-09 11:30:42', '2017-11-09 11:30:42', NULL, 55000, 'sdfsdf', '11:27:59', '0986373562', 'longht@vinaenter.com', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id_pay` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `code` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id_pay`, `name`, `create_at`, `updated_at`, `status`, `detail`, `code`) VALUES
(1, 'Paypal', '2017-10-28 02:47:48', '2017-10-28 02:47:48', 1, 'Thanh toán trực tiếp qua paypal', ' <div id=\"paypal-button-container\"></div>'),
(2, 'Trực tiếp', '2017-10-28 03:01:46', '2017-10-28 02:47:48', 0, 'Thanh toán khi nhận hàng', ' <input type=\"radio\" required name=\"payment\" value=\"2\">');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `list_pro` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `count_number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `in_slide` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_kind` int(11) NOT NULL,
  `top` int(11) NOT NULL DEFAULT '1',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `list_size` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `detail`, `list_pro`, `picture`, `count_number`, `price`, `in_slide`, `status`, `id_kind`, `top`, `create_at`, `updated_at`, `list_size`) VALUES
(1, 'Kem tuyết dâu tằm', 'Kem tuyết dâu tằm được pha chế từ trà xanh , sirup dâu tằm và đá tạo nên hương vị ngọt , chua và lạnh rất là đặc biệt', '3,5,7', 'Xf6wBx4CychWgBibT3ivr9z8oXQxQQRaUUgtzhtU.jpeg', 0, 45000, 1, 0, 2, 1, '2018-07-18 12:14:44', '2017-10-28 03:33:01', '1,2,3,4'),
(2, 'Kem tuyết mun', 'Kem tuyết mun', '', 'hT2F3hZ80lBC2YBYHh00AM8XOwecyOrtBkq25zNB.jpeg', 0, 45000, 1, 0, 2, 2, '2018-07-18 12:14:44', '2017-10-21 02:21:01', ''),
(3, 'Kem tuyết browni', 'Kem tuyết', '5,7', 'o0UuTtgqcS0Aqxj7RAalPZr0TxRtqgIz1OvOMaW6.jpeg', 0, 45000, 1, 0, 2, 3, '2018-07-18 12:14:44', '2017-10-28 03:32:41', '1,2,3,4'),
(4, 'Kem tuyết chocolate', 'Kem tuyết chocolate', '5,7', '9XZhaMHAqrYEbeNcXsVwjDXWDRkEW3XWrjFv30vw.jpeg', 0, 45000, 1, 0, 2, 3, '2018-07-18 12:14:44', '2017-10-28 03:32:24', '1,2,3,4'),
(5, 'Kem tuyết cherry', 'Kem tuyết cherry', '3,5,7', 'YhJnfqA1hBpMpyFgTEcL4V88valkEabbkhWDI7tF.jpeg', 0, 30000, 1, 0, 8, 2, '2018-07-20 12:23:03', '2017-10-28 03:32:10', '1,2,3,4'),
(6, 'Kem tuyết chanh', 'Kem tuyết chanh', '5,7', 'WxU6OkUtqiiDobgEwrqmoHz3ZqB8qsfLKwesTt04.jpeg', 0, 35000, 1, 0, 2, 4, '2018-01-24 13:46:20', '2018-01-24 13:46:20', '1,2,3,4'),
(7, 'Kem tuyết trà xanh Nhật Bản', '123123', '2,3', '91hNjxbvPEORLhGU0gAICQPGZ0MsuHkeO2sySpIc.jpeg', 1, 35000, 1, 0, 2, 4, '2017-12-25 07:54:11', '2017-12-25 07:54:11', '3,4'),
(8, 'Trà xanh thơm', 'Trà xanh thơm', '5,7', 'FzrAqZmR164nbwbWhKveg4T7euT18nO7iJxnD5wQ.jpeg', 0, 30000, 1, 1, 4, 1, '2017-10-30 16:19:10', '2017-10-30 16:19:10', '1,2,3,4'),
(9, 'Trà phỉ thúy bí đao', 'Trà phỉ thúy bí đao', '', 'Oy4eT5cVdVblOQQhRvXhvcfRonQw4yO4ALP4xN3R.jpeg', 0, 32000, 1, 1, 4, 1, '2017-10-30 16:26:59', '2017-10-30 09:26:59', '1,2,3,4'),
(10, 'Trà ba', 'Trà ba', '', 'GqGAEK7feWZB19VDbVYM5Dpjvh7gOLqjNQ9z2Vu7.jpeg', 0, 32000, 1, 1, 4, 1, '2017-10-30 16:25:57', '2017-10-30 16:25:57', '1,2,3,4'),
(11, 'Trà xanh vải', 'Trà xanh vải', '5,7', 'UGhdjYOIf9PUDwlzVPo8sGQxgn1470hhGyerniaB.jpeg', 0, 32000, 1, 1, 4, 1, '2017-10-30 16:28:15', '2017-10-30 16:28:15', '1,2,3,4'),
(12, 'Trà xuân tắc bạc hà', 'Trà xuân tắc bạc hà', '', 'QSX8E995rGEXrEZR20igsNGWU4Gcujqog7Cq6Z7H.jpeg', 0, 35000, 1, 1, 4, 1, '2017-10-30 16:29:04', '2017-10-30 16:29:04', '1,2,3,4'),
(13, 'Trà xanh đậu đỏ Nhật Bản', 'Trà xanh đậu đỏ Nhật Bản', '', 'xCLNDaqak3bcOPAgQllr4VXoYYhMY8QBt2UUPmjo.jpeg', 0, 35000, 1, 1, 4, 1, '2017-10-30 16:30:20', '2017-10-30 16:30:20', '1,2,3,4'),
(14, 'Trà xanh nho Mỹ', 'Trà xanh nho Mỹ', '', 'Lrm8GTRcKc42JAYwMy101XEbZ12PwU6OBUJvm4fo.jpeg', 0, 30000, 1, 1, 4, 1, '2017-10-30 16:31:08', '2017-10-30 16:31:08', '1,2,3,4'),
(15, 'Trà xanh táo', 'Trà xanh táo', '', '2BQAfd71RfikltDJVEXKWGbnqRbUNbkZ26ubI9S6.jpeg', 0, 30000, 1, 1, 4, 1, '2017-10-30 16:31:38', '2017-10-30 16:31:38', '1,2,3,4'),
(16, 'Trà sữa dâu tằm', 'Trà sữa dâu tằm', '3,5,7', 'ADgW4nxfEVQv8ppPTbMRfUCZLz6cDeUyuDUJP6HW.jpeg', 0, 32000, 1, 1, 3, 1, '2017-10-30 16:32:45', '2017-10-30 16:32:45', '1,2,3,4'),
(17, 'Sữa mẹ', 'Sữa mẹ', '', 'vj0qbLNxfVU3Y87NGb28cYIiUANSylS9T2QfmsyC.jpeg', 0, 40000, 1, 1, 3, 2, '2017-10-30 16:33:18', '2017-10-30 16:33:18', '1,2,3,4'),
(18, 'Trà sữa mè đen', 'Trà sữa mè đen', '5', 'BZFDACizSOwXttwX4WlCYEu61wh1Hzp2xXG4i1jI.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:34:17', '2017-10-30 16:34:17', '1,2,3,4'),
(19, 'Trà sữa Paris', 'Trà sữa mè đen', '5', 'pE0jiSOQRBYltKCptxtoh45uWxKbOTfyDtayg8wZ.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:34:53', '2017-10-30 16:34:53', '1,2,3,4'),
(20, 'Trà sữa Vải', 'Trà sữa Vải', '5', 'RlcSBGRxbaK3AaOqk7opuL8vdx93PcNY8pXII6fE.jpeg', 0, 35000, 1, 0, 3, 2, '2017-12-22 03:42:45', '2017-12-22 03:42:45', '1,2,3,4'),
(21, 'Trà sữa tiramisu', 'Trà sữa tiramisu', '5', 'x5hX5sOjIOD4FaFl1kcril3vM141aQYV6PuXZrDC.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:35:56', '2017-10-30 16:35:56', '1,2,3,4'),
(22, 'Trà sữa nhẫn nhục táo đỏ', 'Trà sữa nhẫn nhục táo đỏ', '5', 'i9vb60qonxVu9D8QkZ7YUj2EjvsBpgIkVVQedFiX.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:36:56', '2017-10-30 16:36:56', '1,2,3,4'),
(23, 'Trà sữa Ireland', 'Trà sữa Ireland', '4,5', 'LQxOHHv1Vg567GX05zCWidvcG6JTp7v4tV2DH6sk.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:37:40', '2017-10-30 16:37:40', '1,2,3,4'),
(24, 'Trà sữa sương sáo', 'Trà sữa sương sáo', '4,5', 'AX5MKpvMKLkXV5hiqd2rihFHuCXDx1qg66TlppXI.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:38:09', '2017-10-30 16:38:09', '1,2,3,4'),
(25, 'Trà sữa hoa hồng', 'Trà sữa hoa hồng', '4,5', 'dJW4d02qDuf6oSstAXt4SYAJgkNQvAZzN6fRyUAh.jpeg', 0, 35000, 1, 1, 3, 2, '2017-10-30 16:44:04', '2017-10-30 16:44:04', '1,2,3,4'),
(26, 'Trà sữa dừa', 'Trà sữa dừa', '4,5', 'IpcXxiK7snX4mUYVcE5DmVjhQlUtOSI5VkfSFjal.jpeg', 1, 35000, 1, 1, 3, 2, '2017-11-09 11:30:42', '2017-11-09 11:30:42', '1,2,3,4'),
(27, 'Trà sữa dưa lưới', 'Trà sữa dưa lưới', '4,5', 'm3v9PQIaOXL9z1RNNUM9HT2fDcQnT4sThG0VUQEp.jpeg', 0, 35000, 0, 1, 3, 2, '2018-03-22 07:42:44', '2018-03-22 07:42:44', '1,2,3,4'),
(28, 'Trà sữa dâu tây', 'Trà sữa dâu tây', '3,5', 'xHG77tFkr5DeUKZnplbN30RDSHcuucsQ3apDGfUr.jpeg', 0, 30000, 1, 1, 3, 2, '2017-12-21 02:17:44', '2017-12-21 02:17:44', '1,2,3,4'),
(29, 'Kem tuyết khoai', 'Kem tuyết khoai môn1', '', '4wHr673ywMWXdVodEc4lY3whW6nXV1lYZEH9IUcx.jpeg', 1, 37000, 1, 1, 4, 3, '2018-07-18 12:10:18', '2018-01-02 08:18:54', '1,2,3,4');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id_proper` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id_proper`, `name`, `create_at`, `updated_at`, `status`) VALUES
(2, 'Màu xanh', '2017-10-23 14:05:54', '2017-10-23 14:05:54', 1),
(3, 'Màu đỏ', '2017-10-23 14:06:03', '2017-10-23 14:06:03', 1),
(4, 'Nóng', '2017-10-23 14:06:07', '2017-10-23 14:06:07', 1),
(5, 'Lạnh', '2017-10-23 14:06:12', '2017-10-23 14:06:12', 1),
(6, 'Giảm mỡ', '2017-10-26 02:15:52', '2017-10-26 02:15:52', 1),
(7, 'Ít đường', '2018-01-04 04:35:10', '2018-01-04 04:35:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `name`, `price`, `status`) VALUES
(1, 'Ly nhỏ', 0, 1),
(2, 'Ly lớn', 5000, 1),
(3, 'Ly nhựa 5000', 10000, 1),
(4, 'Ly lớn 15000', 20000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `vip` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `role`, `status`, `address`, `phone`, `vip`, `score`, `email`, `create_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$PYiwnKFfsYX2nouuPD.X0eGPfTglD1RhYZrhhvhfkfcOWkDKtC7T2', 'Nguyễn Thành Lâm', 'admin', 1, 'Số 7 Phần Lăng 8', 986373562, 0, 0, 'lnguyen24794@gmail.com', '2018-01-08 04:34:51', '2017-10-23 02:28:58'),
(2, 'mod', '$2y$10$iVUFMU.S7eAKWtUP7bHDD.ss2vyE12X45EaEWOkk.6tnvuAJ1Ad5K', 'Mod Vinaenter', 'mod', 1, '', 0, 0, 0, '', '2017-10-30 18:44:04', '2017-10-23 02:28:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id_aboutme`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id_branch`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`id_kind`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id_pay`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id_proper`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id_aboutme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id_branch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `id_kind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id_proper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
