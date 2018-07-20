-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:04 PM
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
-- Database: `ffse1702`
--

-- --------------------------------------------------------

--
-- Table structure for table `lms_countries`
--

CREATE TABLE `lms_countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lms_countries`
--

INSERT INTO `lms_countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `lms_marks`
--

CREATE TABLE `lms_marks` (
  `id` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `subject_id` varchar(3) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_marks`
--

INSERT INTO `lms_marks` (`id`, `student_id`, `subject_id`, `mark`) VALUES
(1, 'FFSE1701001', 'LP1', 9),
(2, 'FFSE1701005', 'LP2', 9),
(3, 'FFSE1701002', 'LP1', 8),
(4, 'FFSE1701003', 'LP1', 9),
(5, 'FFSE1701001', 'LP2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `lms_students`
--

CREATE TABLE `lms_students` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'FFSE17',
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sex` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'M',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT '@fasttrack.edu.vn',
  `birth_day` int(15) DEFAULT NULL,
  `birth_month` int(11) DEFAULT NULL,
  `birth_year` int(11) DEFAULT '1999',
  `nationality` int(11) NOT NULL DEFAULT '237',
  `country` int(11) NOT NULL DEFAULT '237',
  `province` int(11) DEFAULT '56',
  `district` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `ward` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `street` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(250) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lms_students`
--

INSERT INTO `lms_students` (`id`, `code`, `first_name`, `sex`, `email`, `birth_day`, `birth_month`, `birth_year`, `nationality`, `country`, `province`, `district`, `ward`, `street`, `photo`) VALUES
(1, 'FFSE1701001', 'Thái Gia Bảo', 'm', 'FFSE1701001@st.fasttrack.edu.vn', 14, 11, 1992, 110, 237, 56, 'Hải Châu', 'Tân Chính', '247 Lê Duẩn', ''),
(2, 'FFSE1701002', 'Trần Xuân Đàn', 'm', 'FFSE1701002@st.fasttrack.edu.vn', 7, 11, 1997, 237, 237, 56, 'Liên Chiểu', 'Hòa Khánh Bắc', '15 Lạc Long Quân', ''),
(3, 'FFSE1701003', 'Trần Viết Hiệp', 'm', 'FFSE1701003@st.fasttrack.edu.vn', 6, 9, 1994, 237, 237, 18, 'Thường Tín', 'Tự Nhiên', 'xóm 4', ''),
(4, 'FFSE1701004', 'Lê Văn Hiếu', 'm', 'FFSE1701004@st.fasttrack.edu.vn', 22, 5, 1997, 237, 237, 56, 'Thanh Khê', 'Thanh Khê Tây', 'Kiệt 03/11 Dũng Sĩ Thanh Khê', ''),
(5, 'FFSE1701005', 'Trần Xuân Kỳ', 'm', 'FFSE1701005@st.fasttrack.edu.vn', 29, 8, 1998, 237, 237, 40, 'Núi Thành', 'Tam Hải', 'Thôn Đông Tuần', ''),
(6, 'FFSE1701006', 'Đặng Văn Quân', 'm', 'FFSE1701006@st.fasttrack.edu.vn', 27, 9, 1991, 237, 237, 56, 'Sơn Trà', 'An Hải Tây', '47 Hà Thị Thân', ''),
(7, 'FFSE1701007', 'Lê Trọng Quân', 'm', 'FFFSE1701007@fasttrack.edu.vn', 20, 3, 1998, 237, 237, 19, 'Can Lộc', 'Thượng Lộc', 'Đông Phong', ''),
(8, 'FFSE1701008', 'Nguyễn Xuân Túc', 'm', 'FFSE1701008@st.fasttrack.edu.vn', 25, 2, 1999, 237, 237, 38, 'Tuy Hòa', 'Hòa Đồng', 'Phú Diễn Ngoài', ''),
(9, 'FFSE1701009', 'Phan Hoàng Việt', 'm', 'FFSE1701009@st.fasttrack.edu.vn', 14, 6, 1994, 237, 237, 56, 'Liên Chiểu', 'Hòa Khánh Bắc', '196 Phạm Như Xương', ''),
(10, 'FFSE1701010', 'Phạm Nguyên Vũ', 'm', 'FFSE1701010@st.fasttrack.edu.vn', 15, 2, 1991, 1, 237, 56, 'Liên Chiểu', 'Khánh Hoà Bắc', '24 Đặng Dung', ''),
(12, 'FFSE1701011', 'Cao Ngọc Khánh', 'm', 'FFSE1701011@st.fasttrack.edu.vn', 11, 6, 1996, 237, 237, 39, 'Quảng Ninh', 'Hiền Ninh', 'Trường Dục', ''),
(15, 'FFSE1702054', 'Ngô Gia Vỹ', 'm', 'FFSE1702054@st.fasttrack.edu.vn', 14, 7, 1999, 237, 237, 56, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lms_subjects`
--

CREATE TABLE `lms_subjects` (
  `id` int(11) NOT NULL,
  `code` varchar(3) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lms_subjects`
--

INSERT INTO `lms_subjects` (`id`, `code`, `name`) VALUES
(1, 'LP1', 'Visual Programming with Scratch'),
(2, 'LP2', 'WEB Frontend with HTML, CSS & JS'),
(3, 'LP3', 'PHP & MySQL'),
(4, 'LP4', 'OOP with Java');

-- --------------------------------------------------------

--
-- Table structure for table `lms_vietnam`
--

CREATE TABLE `lms_vietnam` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) UNSIGNED NOT NULL DEFAULT '255'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lms_vietnam`
--

INSERT INTO `lms_vietnam` (`id`, `name`, `parent_id`, `sort_order`) VALUES
(1, 'Việt Nam', 0, 255),
(2, 'An Giang', 1, 255),
(3, 'Bà Rịa Vũng Tàu', 1, 255),
(4, 'Bình Dương', 1, 255),
(5, 'Bình Phước', 1, 255),
(6, 'Bình Thuận', 1, 255),
(7, 'Bình Định', 1, 255),
(8, 'Bắc Giang', 1, 255),
(9, 'Bắc Kạn', 1, 255),
(10, 'Bắc Ninh', 1, 255),
(11, 'Bến Tre', 1, 255),
(12, 'Cao Bằng', 1, 255),
(13, 'Cà Mau', 1, 255),
(14, 'Cần Thơ', 1, 255),
(15, 'Gia Lai', 1, 255),
(16, 'Hà Giang', 1, 255),
(17, 'Hà Nam', 1, 255),
(18, 'Hà Nội', 1, 255),
(19, 'Hà Tĩnh', 1, 255),
(20, 'Hòa Bình', 1, 255),
(21, 'Hưng Yên', 1, 255),
(22, 'Hải Dương', 1, 255),
(23, 'Hải Phòng', 1, 255),
(24, 'Hồ Chí Minh', 1, 255),
(25, 'Khánh Hòa', 1, 255),
(26, 'Kiên Giang', 1, 255),
(27, 'Kon Tum', 1, 255),
(28, 'Lai Châu', 1, 255),
(29, 'Long An', 1, 255),
(30, 'Lào Cai', 1, 255),
(31, 'Lâm Đồng', 1, 255),
(32, 'Lạng Sơn', 1, 255),
(33, 'Nam Định', 1, 255),
(34, 'Nghệ An', 1, 255),
(35, 'Ninh Bình', 1, 255),
(36, 'Ninh Thuận', 1, 255),
(37, 'Phú Thọ', 1, 255),
(38, 'Phú Yên', 1, 255),
(40, 'Quảng Nam', 1, 255),
(41, 'Quảng Ngãi', 1, 255),
(42, 'Quảng Ninh', 1, 255),
(43, 'Quảng Trị', 1, 255),
(44, 'Sơn La', 1, 255),
(45, 'Thanh Hóa', 1, 255),
(46, 'Thái Bình', 1, 255),
(47, 'Thái Nguyên', 1, 255),
(48, 'Thừa Thiên Huế', 1, 255),
(49, 'Tiền Giang', 1, 255),
(50, 'Trà Vinh', 1, 255),
(51, 'Tuyên Quang', 1, 255),
(52, 'Tây Ninh', 1, 255),
(53, 'Vĩnh Long', 1, 255),
(54, 'Vĩnh Phúc', 1, 255),
(55, 'Yên Bái', 1, 255),
(56, 'Đà Nẵng', 1, 255),
(57, 'Đắk Lắk', 1, 255),
(58, 'Đồng Nai', 1, 255),
(59, 'Đồng Tháp', 1, 255),
(60, 'Bạc Liêu', 1, 255),
(61, 'Sóc Trăng', 1, 255),
(62, 'Hậu Giang', 1, 255),
(63, 'Đắk Nông', 1, 255),
(2700, 'Điện Biên', 1, 255),
(39, 'Quảng Bình', 1, 255);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
