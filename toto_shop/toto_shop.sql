-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 02:12 PM
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
-- Database: `toto_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(10) NOT NULL,
  `id_hd` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hd`, `id_sp`, `soluong`, `id_size`) VALUES
(0, 2, 2, '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cuahang`
--

CREATE TABLE `cuahang` (
  `id_cuahang` int(10) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cuahang`
--

INSERT INTO `cuahang` (`id_cuahang`, `ten`, `diachi`, `sdt`) VALUES
(1, 'hoa hồng1', 'Đà Nẵng', '01678594736');

-- --------------------------------------------------------

--
-- Table structure for table `ds_size`
--

CREATE TABLE `ds_size` (
  `id_size` int(10) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ds_size`
--

INSERT INTO `ds_size` (`id_size`, `ten`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(10) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `huyen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kh` int(10) NOT NULL,
  `trangthai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_giao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cuahang_giao` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `hoten`, `sdt`, `email`, `thanhpho`, `huyen`, `diachi`, `hinhthuc`, `tongtien`, `ngay_tao`, `id_kh`, `trangthai`, `ngay_giao`, `id_cuahang_giao`) VALUES
(1, 'abc', 2147483647, 'vothihoai170798@gmail.com', 'qt', 'giolin', 'thị trấn gio linh -gio linh-quảng trị', 'qưee', '123', '0000-00-00 00:00:00', 1, 'Đã giao hàng', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `id_huyen` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`id_huyen`, `ten`, `id_tinh`) VALUES
(1, 'gio linh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(10) NOT NULL,
  `tenkh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `diachi`, `sdt`, `cmnd`, `email`, `level`) VALUES
(1, 'võ thị hoài1', 'Đà Nẵng', '17366827', '17366827', '', 'bạn thân');

-- --------------------------------------------------------

--
-- Table structure for table `kho_sp`
--

CREATE TABLE `kho_sp` (
  `id` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cuahang` int(10) NOT NULL,
  `soluong_con` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kho_sp`
--

INSERT INTO `kho_sp` (`id`, `id_sp`, `soluong`, `ngay_nhap`, `id_cuahang`, `soluong_con`) VALUES
(1, 22, '2', '2012-02-17 17:00:00', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `giamgia`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_cha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `tenloai`, `gioitinh`, `id_cha`) VALUES
(1, 'Áo Thun', 'nam', 0),
(2, 'Quần Kaki', 'nam', 0),
(3, 'Quần Jean', 'nam', 0),
(4, 'Quần Jogger', 'nam', 0),
(5, 'Áo Sơ Mi Nam', 'nam', 0),
(6, 'Quần Short', 'nam', 0),
(7, 'Thun Tay Ngắn', 'nam', 1),
(8, 'Thun Tay Dài', 'nam', 1),
(9, 'Sơ Mi Tay Ngắn', 'nam', 5),
(10, 'Sơ Mi Tay Dài', 'nam', 5),
(11, 'Short Kaki', 'nam', 6),
(12, 'Short Jean', 'nam', 6),
(13, 'Short Thun', 'nam', 6),
(14, 'Áo Khoác Nam', 'nam', 0),
(15, 'Áo Khoác Hoodie', 'nam', 14),
(16, 'Áo Khoác Nữ', 'nu', 0),
(17, 'Áo Khoác Hoodie', 'nu', 16),
(18, 'Áo Kiểu', 'nu', 0),
(19, 'Đầm Nữ', 'nu', 0),
(20, 'Chân Váy', 'nu', 0),
(21, 'Quần Short', 'nu', 0),
(22, 'Quần Jean', 'nu', 0),
(23, 'Quần Thun', 'nu', 0),
(24, 'Áo Thun', 'nu', 0),
(25, 'Áo Sơmi', 'nu', 0),
(26, 'Thun Tay Ngắn', 'nu', 24),
(27, 'Thun Tay Dài', 'nu', 24),
(28, 'Sơmi Tay Ngắn', 'nu', 25),
(29, 'Sơmi Tay Dài', 'nu', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loai_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `loai_sp`, `rating`, `gia`, `chitiet`) VALUES
(1, 'THUN NAM 088019WH', '7', 'ATB088019WH', '245,000 VNĐ', 'abc'),
(2, 'THUN NAM 088019MS', '7', 'ATB088019MS', '245,000 VNĐ', ''),
(3, 'THUN NAM 088019NV', '7', 'ATB088019NV', '245,000 VNĐ', ''),
(4, 'THUN NAM 088019RD', '7', 'ATB088019RD', '245,000 VNĐ', ''),
(5, 'THUN NAM 088019GN', '7', 'ATB088019GN', '245,000 VNĐ', ''),
(6, 'THUN NAM 088019BU', '7', 'ATB088019BU', '245,000 VNĐ', ''),
(7, 'THUN NAM 088018', '7', 'ATB088018', '245,000 VNĐ', ''),
(8, 'THUN NAM 088017WH', '7', 'ATB088017WH', '245,000 VNĐ', ''),
(9, 'THUN NAM 088017BL', '7', 'ATB088017BL', '245,000 VNĐ', ''),
(10, 'THUN NAM 088016WH', '7', 'ATB088016WH', '245,000 VNĐ', ''),
(11, 'THUN NAM 088016BL', '7', 'ATB088016BL', '245,000 VNĐ', ''),
(12, 'THUN NAM 088015WH', '7', 'ATB088015WH', '245,000 VNĐ', ''),
(13, 'THUN NAM 088015BL', '7', 'ATB088015BL', '245,000 VNĐ', ''),
(14, 'THUN NAM 088014', '7', 'ATB088014', '235,000 VNĐ', ''),
(15, 'THUN NAM 088008', '7', 'ATB088008', '245,000 VNĐ', ''),
(16, 'THUN NAM 088005BL', '7', 'ATB088005BL', '150,000 VNĐ', ''),
(17, 'THUN NAM 088003BL', '7', 'ATB088003BL', '245,000 VNĐ', ''),
(18, 'THUN NAM 088003WH', '7', 'ATB088003WH', '245,000 VNĐ', ''),
(19, 'THUN NAM 088002NV', '7', 'ATB088002NV', '215,000 VNĐ', ''),
(20, 'THUN NAM 088002GR', '7', 'ATB088002GR', '215,000 VNĐ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `id_tinh` int(10) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`id_tinh`, `ten`) VALUES
(1, 'quảng trị');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `id_cuahang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_cuahang`) VALUES
(1, 'vohoai', 12345, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`id_cuahang`);

--
-- Indexes for table `ds_size`
--
ALTER TABLE `ds_size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`id_huyen`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `kho_sp`
--
ALTER TABLE `kho_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`id_tinh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `id_cuahang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ds_size`
--
ALTER TABLE `ds_size`
  MODIFY `id_size` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `id_huyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kho_sp`
--
ALTER TABLE `kho_sp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tinh`
--
ALTER TABLE `tinh`
  MODIFY `id_tinh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
