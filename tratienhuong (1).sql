-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 03:10 PM
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
(4, 'Tuyển dụng', 1, 2),
(5, 'Nguyễn Thành Lâm', 1, 0);

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
(10, 'Bạn quen thời phổ thông', 'lnguyen24794@gmail.com', '#10-01 Crosscoop Office', '12345678', '12', 0),
(11, 'Nguyễn Thành Lâm', 'lamnt@fasttrack.edu.vn', '214/12 Thanh Thủy Đà Nẵng', '935162124', 'Tra ngon', 1);

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
(19, 29, 22, 4, 1),
(20, 28, 22, 4, 1),
(21, 27, 22, 4, 1),
(22, 26, 22, 4, 1),
(23, 29, 23, 4, 1),
(24, 29, 23, 4, 1);

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
(1, 'Tuyển dụng tháng 10', 'Tuyển nv \r\nCa sáng: 1 người\r\nTglv: 7-12h\r\nCa tối : 1 người\r\n17-23 hoặc 18-23h', '<p><strong>Tuyển nv&nbsp;</strong><br />\r\nCa s&aacute;ng: 1 người<br />\r\nTglv: 7-12h<br />\r\nCa tối : 1 người<br />\r\n17-23 hoặc 18-23h</p>', '2018-07-27 12:19:58', '2018-07-27 05:18:40', 5, 0, 'g5e2NhbTIGCzi5iSbWKjsaJGKVQ4ECD9njK3DKOq.jpeg', 1, 1),
(3, 'Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu”', 'Hàng trăm học sinh Lai Châu dự lễ khai giảng bên bờ suối; “Soái ca” áo trắng hạ đo ván nam thanh niên vì tội đánh phụ nữ giữa đường; miền Bắc giảm đột ngột 5-10 độ C trong đợt gió lạnh đầu mùa sắp tới… là những tin tức nổi bật 24 giờ qua.', '<p><strong>H&agrave;ng trăm học sinh Lai Ch&acirc;u dự lễ khai giảng b&ecirc;n bờ suối</strong></p>\r\n\r\n<p>Mới đ&acirc;y, facebooker Nguyễn Long Kh&aacute;nh chia sẻ l&ecirc;n mạng x&atilde; hội một d&ograve;ng trạng th&aacute;i: &ldquo;Người ta khai giảng tưng bừng. T&ocirc;i nay khai giảng rưng rưng lệ sầu&rdquo;. K&egrave;m theo đ&oacute; l&agrave; những h&igrave;nh ảnh h&agrave;ng trăm em học sinh tiểu học, trung học cơ sở phải dự&nbsp;<a href=\"https://www.24h.com.vn/tin-tuc-trong-ngay/xot-long-truoc-le-khai-giang-ben-bo-suoi-cua-hang-tram-hoc-sinh-c46a987994.html\">lễ khai giảng b&ecirc;n bờ suối</a>.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/app/files/images/1536151905-755-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-0-1536151842-width960height720.jpg\" style=\"height:720px; width:960px\" /></p>\r\n\r\n<p>Kh&ocirc;ng kh&iacute; ch&agrave;o cờ trang nghi&ecirc;m của thầy v&agrave; tr&ograve; trường Nậm Ng&agrave; trong lễ khai giảng b&ecirc;n bờ suối. Ảnh: Nguyễn Long Kh&aacute;nh.</p>\r\n\r\n<p>Theo chia sẻ của anh Nguyễn Long Kh&aacute;nh, lễ khai giảng tr&ecirc;n diễn ra tại điểm trường Phổ th&ocirc;ng d&acirc;n tộc b&aacute;n tr&uacute; &ndash; trung học cơ sở Nậm Ng&agrave; (x&atilde; T&agrave; Tổng, huyện Mường T&egrave;, tỉnh Lai Ch&acirc;u).</p>\r\n\r\n<p>Anh Kh&aacute;nh l&agrave; thầy gi&aacute;o đang dạy tại trường. Theo anh Kh&aacute;nh, điểm trường đang c&oacute; 243 học sinh khối trung học v&agrave; 315 học sinh khối tiểu học theo học. 3 năm nay, c&aacute;c em học sinh phải khai giảng ở s&acirc;n b&atilde;i n&agrave;y v&igrave; số học sinh đ&ocirc;ng, s&acirc;n trường ở ph&iacute;a tr&ecirc;n kh&ocirc;ng đủ.</p>\r\n\r\n<p>S&aacute;ng 5/9, &ocirc;ng L&yacute; Ch&ugrave;y Hừ - Chủ tịch UBND x&atilde; T&agrave; Tổng (huyện Mường T&egrave;, Lai Ch&acirc;u) cũng cho hay, đ&oacute; vừa l&agrave; s&acirc;n chơi, cũng l&agrave; s&acirc;n thể thao của trường. S&acirc;n nằm cạnh bờ suối. Trong c&aacute;c đợt mưa lũ vừa qua, s&acirc;n chơi bị lũ c&agrave;n qu&eacute;t qua, phủ đầy đất đ&aacute;. Ch&iacute;nh quyền phối hợp c&ugrave;ng một số doanh nghiệp v&agrave; nh&agrave; trường phải dọn dẹp để lấy s&acirc;n cho c&aacute;c em khai giảng v&agrave; học tập.</p>\r\n\r\n<p><strong>&ldquo;So&aacute;i ca&rdquo; &aacute;o trắng hạ đo v&aacute;n nam thanh ni&ecirc;n v&igrave; tội đ&aacute;nh phụ nữ giữa đường</strong></p>\r\n\r\n<p>Mới đ&acirc;y, tr&ecirc;n mạng x&atilde; hội xuất hiện đoạn clip d&agrave;i gần 30 gi&acirc;y ghi lại cảnh thanh ni&ecirc;n (khoảng 30 tuổi) kẹp c&ocirc; g&aacute;i ngồi ph&iacute;a trước y&ecirc;n xe m&aacute;y v&agrave; li&ecirc;n tục d&ugrave;ng tay đấm v&agrave;o mặt nạn nh&acirc;n.&nbsp;</p>\r\n\r\n<p><img alt=\"Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu” - 2\" src=\"https://cdn.24h.com.vn/upload/3-2018/images/2018-09-05/1536151905-72-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-1-1536151842-width369height564.jpg\" style=\"margin-left:85px; margin-right:85px\" /></p>\r\n\r\n<p>&ldquo;So&aacute;i ca&rdquo; mặc &aacute;o thun trắng lao v&agrave;o dạy cho nam thanh ni&ecirc;n đ&aacute;nh phụ nữ một b&agrave;i học. Ảnh cắt từ clip.</p>\r\n\r\n<p>C&ocirc; g&aacute;i lu&ocirc;n miệng g&agrave;o kh&oacute;c, cầu cứu. Một số người đi đường v&agrave; người d&acirc;n chứng kiến sự việc lao v&agrave;o can ngăn nhưng kh&ocirc;ng th&agrave;nh.</p>\r\n\r\n<p>L&uacute;c n&agrave;y, một thanh ni&ecirc;n kh&aacute;c mặc &aacute;o thun trắng xuất hiện đ&atilde; lao v&agrave;o đ&aacute;nh thanh ni&ecirc;n kia ng&atilde; xuống xe. Thậm ch&iacute;,&nbsp;<a href=\"https://www.24h.com.vn/tin-tuc-trong-ngay/danh-co-gai-giua-duong-thanh-nien-bi-soai-ca-ao-trang-ha-do-van-c46a988006.html\">&ldquo;so&aacute;i ca&rdquo; &aacute;o trắng</a>&nbsp;c&ograve;n đ&egrave; nam thanh ni&ecirc;n xuống đường, chỗ vũng nước khiến người n&agrave;y ướt, bẩn hết quần &aacute;o.</p>\r\n\r\n<p>Sau khi được mọi người can ngăn, đ&ocirc;i nam nữ sau đ&oacute; l&ecirc;n xe bỏ đi.</p>\r\n\r\n<p>Sự việc được cho l&agrave; xảy ra v&agrave;o chiều ng&agrave;y 4/9 trước cổng Bệnh viện đa khoa Đồng Nai (TP Bi&ecirc;n H&ograve;a, Đồng Nai).</p>\r\n\r\n<p><strong>Tịch thu gần 400 tỷ đồng của ba nh&agrave; mạng li&ecirc;n quan đường d&acirc;y đ&aacute;nh bạc ngh&igrave;n tỷ</strong></p>\r\n\r\n<p>Li&ecirc;n quan đến đường d&acirc;y đ&aacute;nh bạc ngh&igrave;n tỷ, Viện KSND tỉnh Ph&uacute; Thọ đ&atilde; ho&agrave;n tất c&aacute;o trạng truy tố &ocirc;ng Phan Văn Vĩnh &ndash; cựu Tổng cục trưởng Cảnh s&aacute;t, &ocirc;ng Nguyễn Thanh H&oacute;a - cựu Cục trưởng Cục Cảnh s&aacute;t ph&ograve;ng chống tội phạm c&ocirc;ng nghệ cao - C50, Bộ C&ocirc;ng an v&agrave; 90 bị can trong&nbsp;<a href=\"https://www.24h.com.vn/tin-tuc-trong-ngay/duong-day-danh-bac-lien-quan-tuong-cong-an-yeu-cau-tich-thu-gan-400-ty-dong-cua-ba-nha-mang-c46a987880.html\">đường d&acirc;y đ&aacute;nh bạc trực tuyến</a>&nbsp;dưới dạng game b&agrave;i.</p>\r\n\r\n<p>Tổng số tiền m&agrave; đường d&acirc;y cờ bạc n&agrave;y thu lời bất ch&iacute;nh qua hoạt động nạp tiền, thẻ c&agrave;o l&agrave; hơn 9.853 tỷ đồng. Trong đ&oacute;, tổng số tiền m&agrave; ba nh&agrave; mạng Viettel, Vinanphone, Mobiphone được hưởng lợi l&agrave; 1.232 tỷ đồng.</p>\r\n\r\n<p><img alt=\"Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu” - 3\" src=\"https://cdn.24h.com.vn/upload/3-2018/images/2018-09-05/1536151905-470-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-2-1536151842-width665height449.jpg\" /></p>\r\n\r\n<p>Tr&ograve; chơi đ&aacute;nh bạc dưới dạng game b&agrave;i trực tuyến. Ảnh TPO.</p>\r\n\r\n<p>Nhận thấy, số tiền n&agrave;y c&aacute;c nh&agrave; mạng thu lời do đ&aacute;nh bạc m&agrave; c&oacute; n&ecirc;n cơ quan tố tụng tỉnh Ph&uacute; Thọ y&ecirc;u cầu phải truy thu của 3 nh&agrave; mạng l&agrave; 372,3 tỷ đồng (sau khi đ&atilde; giảm trừ tiền c&aacute;c khoản thuế đ&atilde; nộp như: thuế GTGT; thuế thu nhập doanh nghiệp; chiết khấu thẻ c&agrave;o v&agrave; tiền đ&atilde; nộp ng&acirc;n s&aacute;ch trước đ&oacute;). Trong đ&oacute;, số tiền phải tịch thu của nh&agrave; mạng Viettel l&agrave; 274,2 tỷ đồng; Vinaphone l&agrave; 60,1 tỷ đồng; Mobifone l&agrave; hơn 38 tỷ đồng.</p>\r\n\r\n<p>Viện KSND tỉnh Ph&uacute; Thọ cũng y&ecirc;u cầu tịch thu c&aacute;c khoản hưởng lợi bất ch&iacute;nh từ hoạt động cờ bạc dưới h&igrave;nh thức game b&agrave;i Rikvip/Tip.club của c&aacute;c c&ocirc;ng ty trung gian thanh to&aacute;n như C&ocirc;ng ty VTC online 14,4 tỷ đồng; VNG 163 triệu đồng; ng&acirc;n h&agrave;ng Vietcombank 140 triệu đồng; 33 ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh thẻ ATM hưởng lợi 965 triệu đồng; C&ocirc;ng ty Napas hưởng lợi hơn 1,5 tỷ đồng&hellip;</p>\r\n\r\n<p><strong>Miền Bắc giảm đột ngột 5-10 độ C trong đợt gi&oacute; lạnh đầu m&ugrave;a sắp tới</strong></p>\r\n\r\n<p>Theo đại diện Trung t&acirc;m Dự b&aacute;o kh&iacute; tượng thủy văn Quốc gia, khoảng ng&agrave;y v&agrave; đ&ecirc;m 7/9 tới đ&acirc;y, một đợt&nbsp;<a href=\"https://www.24h.com.vn/tin-tuc-trong-ngay/gio-lanh-dau-mua-sap-tran-ve-nhiet-do-giam-dot-ngot-5-10-do-c-c46a987959.html\">kh&ocirc;ng kh&iacute; lạnh</a>c&oacute; cường độ mạnh sẽ ảnh hưởng đến c&aacute;c tỉnh Bắc Bộ, sau đ&oacute; mở rộng ảnh hưởng xuống c&aacute;c tỉnh bắc v&agrave; trung Trung Bộ. Đ&acirc;y l&agrave; đợt gi&oacute; m&ugrave;a đ&ocirc;ng bắc đầu ti&ecirc;n trong m&ugrave;a thu &ndash; đ&ocirc;ng 2018.</p>\r\n\r\n<p><img alt=\"Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu” - 4\" src=\"https://cdn.24h.com.vn/upload/3-2018/images/2018-09-05/1536151905-590-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-3-1536151842-width650height432.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng kh&iacute; lạnh tr&agrave;n xuống khiến miền Bắc chuyển mưa, nhiệt độ giảm.</p>\r\n\r\n<p>Trước khi kh&ocirc;ng kh&iacute; lạnh ảnh hưởng, do sự tranh chấp giữa hai khối kh&iacute; n&oacute;ng ẩm ở ph&iacute;a Nam v&agrave; kh&ocirc;ng kh&iacute; lạnh ở ph&iacute;a Bắc n&ecirc;n từ đ&ecirc;m mai (6/9) c&aacute;c tỉnh Bắc Bộ sẽ c&oacute; mưa. Tuy nhi&ecirc;n, thời gian c&oacute; mưa nhiều nhất v&agrave; tập trung nhất c&oacute; khả năng xảy ra trong ng&agrave;y 7/9, ở hầu hết c&aacute;c tỉnh ph&iacute;a đ&ocirc;ng Bắc Bộ.</p>\r\n\r\n<p>Với Thủ đ&ocirc; H&agrave; Nội, nhiệt độ cao nhất trong ng&agrave;y c&oacute; thể giảm từ mức 33-35 độ C trong ng&agrave;y 5 v&agrave; 6/9 xuống mức 29-31 độ C trong ng&agrave;y 8 v&agrave; 9/9. Sau đ&oacute;, từ ng&agrave;y 10/9 nhiệt độ lại tăng dần. Thủ đ&ocirc; H&agrave; Nội nhiều khả năng sẽ hửng nắng v&agrave; trời kh&ocirc; r&aacute;o từ ng&agrave;y 8/9.</p>\r\n\r\n<p>Kh&ocirc;ng kh&iacute; lạnh cũng c&oacute; thể ảnh hưởng v&agrave; g&acirc;y một đợt mưa vừa, mưa to ở bắc Trung Bộ. Do mưa lớn n&ecirc;n c&aacute;c tỉnh Trung Bộ nhiệt độ cao nhất trong ng&agrave;y sẽ giảm nhiều hơn, từ mức nắng n&oacute;ng (35-36 độ C) trong ng&agrave;y 5 v&agrave; 6/9, xuống mức 26-28 độ C trong ng&agrave;y 8 v&agrave; 9/9.</p>\r\n\r\n<p><strong>Sức khỏe &ldquo;hotgirl Bella&rdquo; tiến triển tốt sau 2 th&aacute;ng nhập viện t&acirc;m thần</strong></p>\r\n\r\n<p>PGS T&ocirc; Thanh Phương - Ph&oacute; Gi&aacute;m đốc Bệnh viện T&acirc;m thần Trung ươngcho biết, khi bệnh viện tiếp nhận Bella n&oacute;i nhảm nhiều, c&oacute; dấu hiệu hoang tưởng ảo gi&aacute;c&hellip; Đ&acirc;y l&agrave; biểu hiện của rối loạn t&acirc;m thần. Sau &iacute;t ng&agrave;y điều trị, t&igrave;nh h&igrave;nh bệnh của Bella đ&atilde; c&oacute; dấu hiệu thuy&ecirc;n giảm. C&ocirc; n&oacute;i năng điềm đạm, chậm r&atilde;i hơn v&agrave; đặc biệt l&agrave; đ&atilde; biết nghe lời b&aacute;c sĩ.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, theo PGS.TS Phương, để điều trị bệnh n&agrave;y, ngo&agrave;i liệu ph&aacute;p điều trị t&acirc;m l&yacute; th&igrave; Bella c&ograve;n được ti&ecirc;m thuốc h&agrave;ng ng&agrave;y. Thời gian điều trị &iacute;t nhất phải mất 1 th&aacute;ng, c&oacute; thể l&agrave; sẽ d&agrave;i hơn.</p>\r\n\r\n<p>C&ograve;n con trai của Bella - b&eacute; Peter đang được hot mom Hằng T&uacute;i chăm s&oacute;c. B&eacute; khỏe mạnh v&agrave; vui đ&ugrave;a b&igrave;nh thường.</p>\r\n\r\n<p><img alt=\"Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu” - 5\" src=\"https://cdn.24h.com.vn/upload/3-2018/images/2018-09-05/1536151905-528-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-4-1536151842-width500height667.jpg\" /></p>\r\n\r\n<p>Bệnh t&igrave;nh của Bella tiến triển tốt sau 2 th&aacute;ng điều trị tại BV t&acirc;m thần trung ương. Ảnh Gai đ&igrave;nh v&agrave; x&atilde; hội.</p>\r\n\r\n<p>Trước đ&oacute;, ng&agrave;y 9/7, bệnh nh&acirc;n Đo&agrave;n Th&uacute;y H&agrave; (32 tuổi, qu&ecirc; gốc ở x&atilde; Kiến Quốc, huyện Ninh Giang, tỉnh Hải Dương) được người th&acirc;n đưa v&agrave;o bệnh viện Bệnh viện T&acirc;m thần Trung ương điều trị.</p>\r\n\r\n<p>Th&uacute;y H&agrave; được d&acirc;n mạng đặt cho biệt danh l&agrave; &ldquo;hot girl&rdquo;&nbsp; Bella. Bella nổi tiếng khắp tr&ecirc;n cộng đồng mạng bởi khả năng n&oacute;i nhanh như chớp, n&oacute;i kh&ocirc;ng ngừng nghỉ v&agrave; đặc biệt l&agrave; tuyệt chi&ecirc;u &ldquo;quỵt tiền&rdquo;.</p>\r\n\r\n<p>Sau khi c&oacute; con, Bella thường xuy&ecirc;n mang con đi khắp nơi bất kể thời tiết. Ngo&agrave;i ra, Bella c&ograve;n c&oacute; những h&agrave;nh động ngược đ&atilde;i ch&aacute;u b&eacute; như: h&uacute;t thuốc l&aacute; rồi phả kh&oacute;i v&agrave;o mặt ch&aacute;u; để nhiều đồ đạc đ&egrave; l&ecirc;n người ch&aacute;u; đặt ch&aacute;u nằm tại những nơi nguy hiểm (như l&ograve;ng đường, vị tr&iacute; che khuất tầm nh&igrave;n ph&iacute;a trước đầu xe tải); c&oacute; những lời n&oacute;i đe dọa, x&uacute;c phạm, lăng mạ ch&aacute;u b&eacute;&hellip;</p>\r\n\r\n<p><strong>Hai thanh ni&ecirc;n bịt mặt nổ s&uacute;ng cướp ng&acirc;n h&agrave;ng giữa trưa ở Kh&aacute;nh H&ograve;a</strong></p>\r\n\r\n<p>Trưa 5/9, hai thanh ni&ecirc;n đi xe m&aacute;y bịt k&iacute;n mặt dừng trước chi nh&aacute;nh ng&acirc;n h&agrave;ng Ngoại thương (Vietcombank) tr&ecirc;n đường 2 Th&aacute;ng 4 (thị x&atilde; Ninh H&ograve;a, tỉnh Kh&aacute;nh H&ograve;a). Một trong hai đối tượng v&agrave;o b&ecirc;n trong ph&ograve;ng giao dịch, chĩa s&uacute;ng ngắn y&ecirc;u cầu nh&acirc;n vi&ecirc;n ng&acirc;n h&agrave;ng đưa tiền. Thời điểm n&agrave;y, chu&ocirc;ng b&aacute;o động ng&acirc;n h&agrave;ng vang l&ecirc;n.</p>\r\n\r\n<p><img alt=\"Nóng 24h qua: Trường học khai giảng bên bờ suối khiến dân mạng “rưng rưng lệ sầu” - 6\" src=\"https://cdn.24h.com.vn/upload/3-2018/images/2018-09-05/1536151905-420-nong-24h-qua-truong-hoc-khai-giang-ben-bo-suoi-khien-dan-mang-rung-rung-le-sau-5-1536151842-width660height440.jpg\" /></p>\r\n\r\n<p>Hiện trường nơi 2 đối tượng nổ s&uacute;ng định cướp ng&acirc;n h&agrave;ng ở Kh&aacute;nh H&ograve;a.</p>\r\n\r\n<p>Đối tượng chờ b&ecirc;n ngo&agrave;i cũng cầm khẩu s&uacute;ng ngắn uy hiếp. Bị h&ocirc; ho&aacute;n v&agrave; bảo vệ chống trả, một trong hai đối tượng đ&atilde; giương s&uacute;ng bắn một ph&aacute;t đạn nhưng may mắn kh&ocirc;ng tr&uacute;ng ai. Hai đối tượng sau đ&oacute; l&ecirc;n xe tẩu tho&aacute;t.</p>\r\n\r\n<p>Nhận tin b&aacute;o, C&ocirc;ng an thị x&atilde; Ninh H&ograve;a c&ugrave;ng c&aacute;c đơn vị nghiệp vụ C&ocirc;ng an tỉnh c&oacute; mặt phong tỏa, kh&aacute;m nghiệm hiện trường, lấy lời khai c&aacute;c nh&acirc;n chứng cũng như tr&iacute;ch xuất camera.</p>\r\n\r\n<p>Tại hiện trường, c&ocirc;ng an đ&atilde; thu giữ 1 khẩu s&uacute;ng tự chế v&agrave; vi&ecirc;n đạn.</p>', '2018-09-05 14:26:55', '2018-09-05 07:26:55', 5, 0, '0gYtR3eZJNFW9ynBYPN2bkz4GtOmy5S5Qjl8ZKIm.jpeg', 1, 1);

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
(21, NULL, 1, '2017-11-09 11:30:42', '2017-11-09 11:30:42', NULL, 55000, 'sdfsdf', '11:27:59', '0986373562', 'longht@vinaenter.com', 'ad'),
(22, NULL, 1, '2018-07-20 13:00:36', '2018-07-20 12:56:59', 1, 160000, '214/12 Thanh Thủy Đà Nẵng', '12:56:44', '935162124', 'lamnt@fasttrack.edu.vn', 'Nguyễn Thành Lâm'),
(23, NULL, 1, '2018-09-07 12:11:10', '2018-09-07 12:09:42', 1, 114000, '214/12 Thanh Thủy Đà Nẵng', '12:07:50', '935162124', 'lamnt@fasttrack.edu.vn', 'Nguyễn Thành Lâm');

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
(26, 'Trà sữa dừa', 'Trà sữa dừa', '4,5', 'IpcXxiK7snX4mUYVcE5DmVjhQlUtOSI5VkfSFjal.jpeg', 2, 35000, 1, 1, 3, 2, '2018-07-20 13:00:37', '2018-07-20 06:00:37', '1,2,3,4'),
(27, 'Trà sữa dưa lưới', 'Trà sữa dưa lưới', '4,5', 'm3v9PQIaOXL9z1RNNUM9HT2fDcQnT4sThG0VUQEp.jpeg', 2, 35000, 0, 1, 3, 2, '2018-07-20 13:00:37', '2018-07-20 06:00:37', '1,2,3,4'),
(28, 'Trà sữa dâu tây', 'Trà sữa dâu tây', '3,5', '2EKtxeEHYVYEfqYRlp7SN3UEJ3WFFyUDqLy66wJJ.jpeg', 3, 30000, 1, 1, 7, 2, '2018-08-01 11:45:13', '2018-08-01 04:45:13', '1,2,3,4'),
(29, 'Kem tuyết khoai Ngon', 'Kem tuyết khoai môn1', '', '4wHr673ywMWXdVodEc4lY3whW6nXV1lYZEH9IUcx.jpeg', 8, 37000, 1, 1, 7, 3, '2018-09-07 12:11:12', '2018-09-07 05:11:12', '1,2,3,4');

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
(2, 'Màu xanh', '2018-07-20 13:02:09', '2018-07-20 06:02:09', 1),
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
(1, 'admin', '$2y$10$PYiwnKFfsYX2nouuPD.X0eGPfTglD1RhYZrhhvhfkfcOWkDKtC7T2', 'Nguyễn Thành Lâm', 'admin', 1, 'Số 7 Phần Lăng 8', 986373562, 0, 0, 'lnguyen24794@gmail.com', '2018-08-16 09:50:23', '2017-10-23 02:28:58'),
(2, 'mod', '$2y$10$iVUFMU.S7eAKWtUP7bHDD.ss2vyE12X45EaEWOkk.6tnvuAJ1Ad5K', 'Mod Vinaenter', 'mod', 1, '', 0, 0, 0, '', '2018-08-16 09:35:57', '2017-10-23 02:28:58');

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `id_kind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
