-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2018 lúc 01:22 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `toto_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(10) NOT NULL,
  `id_hd` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hd`, `id_sp`, `soluong`, `id_size`) VALUES
(1, 2, 2, '2', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `màu sắc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `số lượng` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cuahang`
--

CREATE TABLE `cuahang` (
  `id_cuahang` int(10) NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cuahang`
--

INSERT INTO `cuahang` (`id_cuahang`, `diachi`, `sdt`) VALUES
(1, '19 Nguyễn Trãi P.2, Q.5, Tp.HCM', ' 0938803633 '),
(2, '439 Nguyễn Trãi, P.7, Q.5, Tp.HCM', '0938803633 '),
(3, '412 Lê Văn Sỹ, P.14, Q.3, Tp.HCM', ' 0938803633 '),
(4, '55 Quang Trung, P.10, Q.Gò vấp, Tp.HCM', '0938803633 '),
(5, '170 Võ Văn Ngân, Thủ Đức, Tp.HCM', ' 0938803633 '),
(6, '504 Cách Mạng Tháng 8, P.11, Q.3, Tp.HCM', '0938803633 '),
(7, '16D Nguyễn Ảnh Thủ, P. Trung Mỹ Tây, Q.12, Tp.HCM', '0938803633 '),
(8, '1364 Phạm Văn Thuận, P.Tân Tiến, Tp.Biên Hòa', '0938803633 '),
(9, '44 YerSin P Hiệp Thành, Thủ Dầu Một, Tỉnh Bình Dương', '0938803633 '),
(10, '60 Ấp Bắc, Thành phố Mỹ Tho, Tiền Giang', '0938803633 '),
(11, '51 Nguyễn Việt Hồng, Ninh Kiều, Tp.Cần Thơ', '0938803633 '),
(12, '92 Trần Hưng Đạo, P5, Tp.Cà Mau', '0938803633 '),
(13, '203 - 205 Hoà Bình, P.Hiệp Tân, Q.Tân Phú, Tp.HCM', '0938803633 '),
(14, '193 Đại lộ Đồng Khởi, P.Phú Tân, Tp.Bến Tre', '0938803633 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_size`
--

CREATE TABLE `ds_size` (
  `id_size` int(10) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_size`
--

INSERT INTO `ds_size` (`id_size`, `ten`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
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
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `hoten`, `sdt`, `email`, `thanhpho`, `huyen`, `diachi`, `hinhthuc`, `tongtien`, `ngay_tao`, `id_kh`, `trangthai`, `ngay_giao`, `id_cuahang_giao`) VALUES
(1, 'abc', 2147483647, 'vothihoai170798@gmail.com', 'qt', 'giolin', 'thị trấn gio linh -gio linh-quảng trị', 'qưee', '123', '0000-00-00 00:00:00', 1, 'Đã giao hàng', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huyen`
--

CREATE TABLE `huyen` (
  `id_huyen` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huyen`
--

INSERT INTO `huyen` (`id_huyen`, `ten`, `id_tinh`) VALUES
(1, 'gio linh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
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
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `diachi`, `sdt`, `cmnd`, `email`, `level`) VALUES
(1, 'võ thị hoài1', 'Đà Nẵng', '17366827', '17366827', '', 'bạn thân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_sp`
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
-- Đang đổ dữ liệu cho bảng `kho_sp`
--

INSERT INTO `kho_sp` (`id`, `id_sp`, `soluong`, `ngay_nhap`, `id_cuahang`, `soluong_con`) VALUES
(1, 22, '2', '2012-02-17 17:00:00', 3, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `giamgia`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_image`
--

CREATE TABLE `list_image` (
  `id` int(10) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_sp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `list_image`
--

INSERT INTO `list_image` (`id`, `image`, `tensanpham`, `id_sp`) VALUES
(1, 'sb_1523959267_1852.jpg', '', 0),
(2, 'sb_1536807809_4321.png', 'abc', 0),
(3, 'sb_1536895944_5861.jpg', 'abc', 0),
(4, 'sb_1536822910_6271.jpg', 'a', 0),
(6, 'THUN_NAM_088002BL_(thun_nam_2_(2))21.jpg', 'ảnh chi tiết sản phẩm', 22),
(7, '72882_1526283740_do-nam-869-x-4001.jpg', 'ảnh đồ nam', 0),
(8, 'THUN_NAM_088001_(thun_nam_30_(2))2.jpg', 'abv', 23),
(9, 'THUN_NAM_078003_(thun_nam_21_(2))2.jpg', 'abc', 24),
(10, 'LEN_NAM_088034BL_(ao_len_co_tru_nam_16_(2))11.jpg', 'acv', 25),
(11, 'LEN_NAM_088034NV_(ao_len_co_tru_nam_12_(2))11.jpg', 'dxv', 26),
(12, 'LEN_NAM_088034RD_(ao_len_co_tru_nam_13_(2))2.jpg', 'dsv z', 27),
(13, 'LEN_NAM_088034GR_(ao_len_co_tru_nam_15_(2))11.jpg', 'zsxc', 28),
(14, 'LEN_NAM_088034WH_(ao_len_co_tru_nam_11_(3))2.jpg', 'xdcv ', 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_cha` int(10) NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `tenloai`, `gioitinh`, `id_cha`, `size`) VALUES
(1, 'Áo Thun', 'nam', 0, ''),
(2, 'Quần Kaki', 'nam', 0, ''),
(3, 'Quần Jean', 'nam', 0, ''),
(4, 'Quần Jogger', 'nam', 0, ''),
(5, 'Áo Sơ Mi Nam', 'nam', 0, ''),
(6, 'Quần Short', 'nam', 0, ''),
(7, 'Thun Tay Ngắn', 'nam', 1, ''),
(8, 'Thun Tay Dài', 'nam', 1, ''),
(9, 'Sơ Mi Tay Ngắn', 'nam', 5, ''),
(10, 'Sơ Mi Tay Dài', 'nam', 5, ''),
(11, 'Short Kaki', 'nam', 6, ''),
(12, 'Short Jean', 'nam', 6, ''),
(13, 'Short Thun', 'nam', 6, ''),
(14, 'Áo Khoác Nam', 'nam', 0, ''),
(15, 'Áo Khoác Hoodie', 'nam', 14, ''),
(16, 'Áo Khoác Nữ', 'nu', 0, ''),
(17, 'Áo Khoác Hoodie', 'nu', 16, ''),
(18, 'Áo Kiểu', 'nu', 0, ''),
(19, 'Đầm Nữ', 'nu', 0, ''),
(20, 'Chân Váy', 'nu', 0, ''),
(21, 'Quần Short', 'nu', 0, ''),
(22, 'Quần Jean', 'nu', 0, ''),
(23, 'Quần Thun', 'nu', 0, ''),
(24, 'Áo Thun', 'nu', 0, ''),
(25, 'Áo Sơmi', 'nu', 0, ''),
(26, 'Thun Tay Ngắn', 'nu', 24, ''),
(27, 'Thun Tay Dài', 'nu', 24, ''),
(28, 'Sơmi Tay Ngắn', 'nu', 25, ''),
(29, 'Sơmi Tay Dài', 'nu', 25, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loai_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `loai_sp`, `rating`, `gia`, `hinhanh`, `size`) VALUES
(2, 'THUN NAM 088019MS', '7', 'ATB088019MS', '245,000 VNĐ', 'thun_nam_15000__1__500x7501.jpg', ''),
(3, 'THUN NAM 088019NV', '7', 'ATB088019NV', '245,000 VNĐ', 'thun_nam_13000__1__500x7501.jpg', ''),
(4, 'THUN NAM 088019RD', '7', 'ATB088019RD', '245,000 VNĐ', 'thun_nam_11000__1__500x7502.jpg', ''),
(5, 'THUN NAM 088019GN', '7', 'ATB088019GN', '245,000 VNĐ', 'thun_nam_12000__1__500x7501.jpg', ''),
(6, 'THUN NAM 088019BU', '7', 'ATB088019BU', '245,000 VNĐ', 'thun_nam_10000__1__thumb_400x6001.jpg', ''),
(7, 'THUN NAM 088018', '7', 'ATB088018', '245,000 VNĐ', 'thun_nam_14__1__500x7501.jpg', ''),
(8, 'THUN NAM 088017WH', '7', 'ATB088017WH', '245,000 VNĐ', 'thun_nam_18000__1__500x7501.jpg', ''),
(9, 'THUN NAM 088017BL', '7', 'ATB088017BL', '245,000 VNĐ', 'thun_nam_22__1__thumb_400x6002.jpg', ''),
(10, 'THUN NAM 088016WH', '7', 'ATB088016WH', '245,000 VNĐ', 'thun_nam_20__1__500x7502.jpg', ''),
(11, 'THUN NAM 088016BL', '7', 'ATB088016BL', '245,000 VNĐ', 'thun_nam_14__1__500x7502.jpg', ''),
(12, 'THUN NAM 088015WH', '7', 'ATB088015WH', '245,000 VNĐ', 'thun_nam_18000__1__500x7502.jpg', ''),
(13, 'THUN NAM 088015BL', '7', 'ATB088015BL', '245,000 VNĐ', 'thun_nam_21__1__500x7501.jpg', ''),
(14, 'THUN NAM 088014', '7', 'ATB088014', '235,000 VNĐ', 'thun_nam_33__1__500x7501.jpg', ''),
(15, 'THUN NAM 088008', '7', 'ATB088008', '245,000 VNĐ', 'thun_nam_36__1__500x7501.jpg', ''),
(16, 'THUN NAM 088005BL', '7', 'ATB088005BL', '150,000 VNĐ', 'thun_nam_37__1__500x7501.jpg', ''),
(17, 'THUN NAM 088003BL', '7', 'ATB088003BL', '245,000 VNĐ', 'thun_nam_23__1__500x7501.jpg', ''),
(18, 'THUN NAM 088003WH', '7', 'ATB088003WH', '245,000 VNĐ', 'thun_nam_22__1__500x7501.jpg', ''),
(19, 'THUN NAM 088002NV', '7', 'ATB088002NV', '215,000 VNĐ', 'thun_nam_3__1__500x7501.jpg', ''),
(20, 'THUN NAM 088002GR', '7', 'ATB088002GR', '215,000 VNĐ', 'thun_nam_4__1__500x7501.jpg', ''),
(21, 'THUN NAM 088002WH', '7', 'ATB088002WH', '215,000 VNĐ', 'thun_nam_1__1__500x75041.jpg', 'XL'),
(22, 'THUN NAM 088002BL', '7', 'ATB088002BL', '215,000 VNĐ', 'thun_nam_2__1__500x7501.jpg', ''),
(23, 'THUN NAM 088001', '7', 'ATB088001', '235,000 VNĐ', 'thun_nam_30__1__500x7501.jpg', ''),
(24, 'THUN NAM 078003', '7', 'ATB078003', '195,000 VNĐ', 'thun_nam_21__1__thumb_400x6001.jpg', ''),
(25, 'LEN NAM 088034BL', '8', 'ATB088034BL', '295,000 VNĐ', 'ao_len_co_tru_nam_16__1__500x7501.jpg', ''),
(26, 'LEN NAM 088034NV', '8', 'ATB088034NV', '295,000 VNĐ', 'ao_len_co_tru_nam_12__1__500x7501.jpg', ''),
(27, 'LEN NAM 088034RD', '8', 'ATB088034RD', '295,000 VNĐ', 'ao_len_co_tru_nam_13__1__500x7501.jpg', ''),
(28, 'LEN NAM 088034GR', '8', 'ATB088034GR', '295,000 VNĐ', 'ao_len_co_tru_nam_15__1__500x7501.jpg', ''),
(29, 'LEN NAM 088034WH', '8', 'ATB088034WH', '295,000 VNĐ', 'ao_len_co_tru_nam_11__1__500x7501.jpg', ''),
(30, 'LEN NAM 088034MS', '8', 'ATB088034MS', '295,000 VNĐ', 'ao_len_co_tru_nam_14__1__500x7501.jpg', ''),
(31, 'LEN NAM 088033BL', '8', 'ATB088033BL', '295,000 VNĐ', 'thun_len_co_tru_18__1__500x7501.jpg', ''),
(32, 'LEN NAM 088033NV', '8', 'ATB088033NV', '285,000 VNĐ', 'thun_len_co_tru_21__1__500x7501.jpg', ''),
(33, 'LEN NAM 088033WH', '8', 'ATB088033WH', '285,000 VNĐ', 'thun_len_co_tru_19__1__500x7501.jpg', ''),
(34, 'LEN NAM 088033RD', '8', 'ATB088033RD', '285,000 VNĐ', 'thun_len_co_tru_20__1__500x7501.jpg', ''),
(35, 'LEN NAM 088033GR', '8', 'ATB088033GR', '285,000 VNĐ', 'thun_len_co_tru_17__1__500x7501.jpg', ''),
(36, 'SO MI NAM 088030RD', '9', 'SMB088030RD', '225,000 VNĐ', 'somi_nam_33__1__thumb_400x6001.jpg', ''),
(37, 'SO MI NAM 088030BU', '9', 'SMB088030BU', '225,000 VNĐ', 'somi_nam_32__1__500x7501.jpg', ''),
(38, 'SO MI NAM 088029', '9', 'SMB088029', '245,000 VNĐ', 'somi_nam_19__1__500x7501.jpg', ''),
(39, 'SO MI NAM 088010NV', '9', 'SMB088010NV', '225,000 VNĐ', 'somi_nam_11__1__500x7501.jpg', ''),
(40, 'SO MI NAM 088010GN', '9', 'SMB088010GN', '225,000 VNĐ', 'somi_nam_12__1__500x7501.jpg', ''),
(41, 'SO MI NAM 088010PP', '9', 'SMB088010PP', '225,000 VNĐ', 'somi_nam_15__1__500x7501.jpg', ''),
(42, 'SO MI NAM 088010YL', '9', 'SMB088010YL', '225,000 VNĐ', 'somi_nam_13__1__500x7501.jpg', ''),
(43, 'SO MI NAM 088010BU', '9', 'SMB088010BU', '225,000 VNĐ', 'somi_nam_14__1__500x7501.jpg', ''),
(44, 'SO MI NAM 078009', '9', 'SMB078009', '245,000 VNĐ', 'somi_mi_nam_5__1__thumb_400x6001.jpg', ''),
(45, 'SO MI NAM 078004', '9', 'SMB078004', '245,000 VNĐ', 'somi_nam_1__1__500x7501.jpg', ''),
(46, 'SO MI NAM 078003PP', '9', 'SMB078003PP', '245,000 VNĐ', 'somi_nam_3__1__500x7501.jpg', ''),
(47, 'SO MI NAM 078003WH', '9', 'SMB078003WH', '245,000 VNĐ', 'somi_nam_2__1__500x7501.jpg', ''),
(48, 'SO MI NAM 068025', '9', 'SMB068025', '245,000 VNĐ', 'somi_nam_31__1__500x7501.jpg', ''),
(49, 'SO MI NAM 068023WH', '9', 'SMB068023WH', '245,000 VNĐ', 'somi_nam_33__1__500x7501.jpg', ''),
(50, 'SO MI NAM 068023NV', '9', 'SMB068023NV', '245,000 VNĐ', 'somi_nam_38__1__500x7501.jpg', ''),
(51, 'SO MI NAM 098004NV', '10', 'SMB098004NV', '285,000 VNĐ', 'khoac_nam_37__1__500x7501.jpg', ''),
(52, 'SO MI NAM 098004BU', '10', 'SMB098004BU', '285,000 VNĐ', 'khoac_nam_34__1__500x7501.jpg', ''),
(53, 'SO MI NAM 088031RD', '10', 'SMB088031RD', '245,000 VNĐ', 'somi_nam_33__1__thumb_400x6002.jpg', ''),
(54, 'SO MI NAM 088031BU', '10', 'SMB088031BU', '245,000 VNĐ', 'somi_nam_34__1__thumb_400x6001.jpg', ''),
(55, 'SO MI NAM 088028', '10', 'SMB088028', '265,000 VNĐ', 'somi_nam_26__1__500x7501.jpg', ''),
(56, 'SO MI NAM 088027WH', '10', 'SMB088027WH', '285,000 VNĐ', 'somi_nam_25__1__500x7501.jpg', ''),
(57, 'SO MI NAM 088027BU', '10', 'SMB088027BU', '285,000 VNĐ', 'somi_nam_20__1__500x7501.jpg', ''),
(58, 'SO MI NAM 088026WH', '10', 'SMB088026WH', '285,000 VNĐ', 'somi_nam_26__1__500x75011.jpg', ''),
(59, 'SO MI NAM 088026BL', '10', 'SMB088026BL', '285,000 VNĐ', 'somi_nam_21__1__500x7501.jpg', ''),
(60, 'SO MI NAM 088024GN', '10', 'SMB088024GN', '315,000 VNĐ', 'somi_nam_37__1__thumb_400x6001.jpg', ''),
(61, 'SO MI NAM 088024BL', '10', 'SMB088024BL', '315,000 VNĐ', 'somi_nam_35__1__500x75011.jpg', ''),
(62, 'SHORT KAKI NAM 078010', '11', 'QSB078010', '245,000 VNĐ', 'short_kaki_nam_12__1__500x7501.jpg', ''),
(63, 'SHORT KAKI NAM 078007', '11', 'QSB078007', '245,000 VNĐ', 'short_kaki_nam_16__1__500x7501.jpg', ''),
(64, 'SHORT KAKI NAM 078006', '11', 'QSB078006', '245,000 VNĐ', 'short_kaki_nam_11__1__500x7501.jpg', ''),
(65, 'SHORT KAKI NAM 078005', '11', 'QSB078005', '245,000 VNĐ', 'short_kaki_nam_9__1__500x7501.jpg', ''),
(66, 'SHORT KAKI NAM 078004', '11', 'QSB078004', '245,000 VNĐ', 'short_kaki_nam_10__1__500x7501.jpg', ''),
(67, 'SHORT KAKI NAM 078003', '11', 'QSB078003', '245,000 VNĐ', 'short_kaki_nam_12__1__500x7502.jpg', ''),
(68, 'SHORT KAKI NAM 078002', '11', 'QSB078002', '245,000 VNĐ', 'short_kaki_nam_13__1__500x7501.jpg', ''),
(69, 'SHORT KAKI NAM 068006MS', '11', 'QSB068006MS', '245,000 VNĐ', 'short_nam_14__1__500x750_(1).jpg', ''),
(70, 'SHORT KAKI NAM 068006PK', '11', 'QSB068006PK', '245,000 VNĐ', 'short_nam_12__1__500x7501.jpg', ''),
(71, 'SHORT JEAN NAM 088005', '12', 'QSB088005', '265,000 VNĐ', 'short_nam_31__1__500x7501.jpg', ''),
(72, 'SHORT JEAN NAM 088003', '12', 'QSB088003', '265,000 VNĐ', 'short_nam_32__1__500x7501.jpg', ''),
(73, 'SHORT JEAN NAM 088001', '12', 'QSB088001', '265,000 VNĐ', 'short_nam_33__1__500x7501.jpg', ''),
(74, 'SHORT JEAN NAM 078011', '12', 'QSB078011', '245,000 VNĐ', 'short_jean_nam_8__1__500x7501.jpg', ''),
(75, 'SHORT JEAN NAM 068004', '12', 'QSB068004', '275,000 VNĐ', 'short_jean_nam_23__1__500x7501.jpg', ''),
(76, 'SHORT JEAN NAM 068003', '12', 'QSB068003', '245,000 VNĐ', 'short_jean_nam_24__1__500x7501.jpg', ''),
(77, 'SHORT JEAN NAM 068001', '12', 'QSB068001', '265,000 VNĐ', 'short_jean_nam_19__1__500x7501.jpg', ''),
(78, 'SHORT JEAN 058013', '12', 'QSB058013', '265,000 VNĐ', 'short_jean_nam_17__1__500x7501.jpg', ''),
(79, 'SHORT JEAN NAM 058015', '12', 'QSB058015', '315,000 VNĐ', 'short_jean_nam_18__1__500x7501.jpg', ''),
(80, 'SHORT JEAN NAM 058003', '12', 'QSB058003', '265,000 VNĐ', 'short_jean_nam_26__1__500x7501.jpg', ''),
(81, 'SHORT THUN NAM 088006GR', '13', 'QSB088006GR', '160,000 VNĐ', 'short_nam_23__1__500x7501.jpg', ''),
(82, 'SHORT THUN NAM 088006WH', '13', 'QSB088006WH', '160,000 VNĐ', 'short_nam_28__1__500x7501.jpg', ''),
(83, 'SHORT THUN NAM 088006RD', '13', 'QSB088006RD', '160,000 VNĐ', 'short_nam_30__1__500x7501.jpg', ''),
(84, 'SHORT THUN NAM 088006BL', '13', 'QSB088006BL', '160,000 VNĐ', 'short_nam_29__1__500x7501.jpg', ''),
(85, 'SHORT THUN NAM 088004RD', '13', 'QSB088004RD', '160,000 VNĐ', 'short_nam_24__1__500x7501.jpg', ''),
(86, 'SHORT THUN NAM 088004BU', '13', 'QSB088004BU', '160,000 VNĐ', 'short_nam_27__1__500x7501.jpg', ''),
(87, 'SHORT THUN NAM 068002LG', '13', 'QSB068002LG', '160,000 VNĐ', 'short_thun_nam_26__1__500x7501.jpg', ''),
(88, 'SHORT THUN NAM 068002BL', '13', 'QSB068002BL', '160,000 VNĐ', 'short_thun_nam_27__1__500x7501.jpg', ''),
(89, 'SHORT THUN NAM 068002GR', '13', 'QSB068002GR', '160,000 VNĐ', 'short_thun_nam_25__1__500x7501.jpg', ''),
(90, 'SHORT THUN NAM 088004BL', '13', 'QSB088004BL', '160,000 VNĐ', 'short_nam_29__1__500x75011.jpg', ''),
(91, 'THUN NU 088028OR', '26', 'ATG088028OR', '185,000 VNĐ', 'thun_nu_25__1__thumb_400x6001.jpg', ''),
(92, 'THUN NU 088028YL', '26', 'ATG088028YL', '185,000 VNĐ', 'thun_nu_26__1__500x7501.jpg', ''),
(93, 'THUN NU 088028PK', '26', 'ATG088028PK', '185,000 VNĐ', 'thun_nu_24__1__500x7501.jpg', ''),
(94, 'THUN NU 088028BL', '26', 'ATG088028BL', '185,000 VNĐ', 'thun_nu_23__1__500x7501.jpg', ''),
(95, 'THUN NU 088028WH', '26', 'ATG088028WH', '185,000 VNĐ', 'thun_nu_21__1__500x7501.jpg', ''),
(96, 'THUN NU 088027PK', '26', 'ATG088027PK', '185,000 VNĐ', 'thun_nu_27__1__500x7501.jpg', ''),
(97, 'THUN NU 088027WH', '26', 'ATG088027WH', '185,000 VNĐ', 'thun_nu_30__1__thumb_400x6001.jpg', ''),
(98, 'THUN NU 088027BL', '26', 'ATG088027BL', '185,000 VNĐ', 'thun_nu_28__1__500x7501.jpg', ''),
(99, 'THUN NU 088023', '26', 'ATG088023', '165,000 VNĐ', 'thun_nu_8__1__500x7501.jpg', ''),
(100, 'THUN NU 088022', '26', 'ATG088022', '165,000 VNĐ', 'thun_nu_9__1__500x7501.jpg', ''),
(101, 'THUN NU 088032BL', '27', 'ATG088032BL', '225,000 VNĐ', 'thun_nu_11__1__500x7501.jpg', ''),
(102, 'THUN NU 088032WH', '27', 'ATG088032WH', '225,000 VNĐ', 'thun_nu_10__1__500x7501.jpg', ''),
(103, 'THUN NU 088032PK', '27', 'ATG088032PK', '225,000 VNĐ', 'thun_nu_9__1__thumb_400x6001.jpg', ''),
(104, 'THUN NU 088032RD', '27', 'ATG088032RD', '225,000 VNĐ', 'thun_nu_8__1__thumb_400x6001.jpg', ''),
(105, 'THUN NU 088032YL', '27', 'ATG088032YL', '225,000 VNĐ', 'thun_nu_6__1__500x7501.jpg', ''),
(106, 'THUN NU 088031RD', '27', 'ATG088031RD', '225,000 VNĐ', 'thun_nu_13__1__500x7501.jpg', ''),
(107, 'THUN NU 088031YL', '27', 'ATG088031YL', '225,000 VNĐ', 'thun_nu_15__1__500x7501.jpg', ''),
(108, 'THUN NU 088031PK', '27', 'ATG088031PK', '225,000 VNĐ', 'thun_nu_7__1__500x7501.jpg', ''),
(109, 'THUN NU 088031WH', '27', 'ATG088031WH', '225,000 VNĐ', 'thun_nu_12__1__500x7501.jpg', ''),
(110, 'THUN NU 088031BL', '27', 'ATG088031BL', '225,000 VNĐ', 'thun_nu_14__1__500x7501.jpg', ''),
(111, 'SO MI NU 078012BL', '28', 'SMG078012BL', '195,000 VNĐ', 'ao_somi_nu_7__1__500x7501.jpg', ''),
(112, 'SO MI NU 078006YL', '28', 'SMG078006YL', '195,000 VNĐ', 'ao_somi_nu_8__1__500x7501.jpg', ''),
(113, 'SO MI NU 078006PK', '28', 'SMG078006PK', '195,000 VNĐ', 'ao_somi_nu_6__1__500x7501.jpg', ''),
(114, 'SO MI NU 058002PK', '28', 'SMG058002PK', '175,000 VNĐ', 'somi_nu_37__1__500x7501.jpg', ''),
(115, 'SO MI NU 058006BR', '28', 'SMG058006BR', '265,000 VNĐ', 'somi_nu_7__1__500x7501.jpg', ''),
(116, 'SO MI NU 058006PK', '28', 'SMG058006PK', '265,000 VNĐ', 'somi_nu_9__1__500x7501.jpg', ''),
(117, 'SO MI NU 058005YL', '28', 'SMG058005YL', '245,000 VNĐ', 'somi_nu_30__1__500x7501.jpg', ''),
(118, 'SO MI NU 058005GN', '28', 'SMG058005GN', '245,000 VNĐ', 'somi_nu_27__1__500x7501.jpg', ''),
(119, 'SO MI NU 058005WH', '28', 'SMG058005WH', '245,000 VNĐ', 'somi_nu_24__1__500x7501.jpg', ''),
(120, 'SO MI NU 058004BL', '28', 'SMG058004BL', '225,000 VNĐ', 'somi_nu_1__1__500x7501.jpg', ''),
(121, 'SO MI 098004NV-01', '29', 'SMB098004NV-01', '285,000 VNĐ', 'somi_nu_35__1__500x7501.jpg', ''),
(122, 'SO MI 098004BU-01', '29', 'SMB098004BU-01', '285,000 VNĐ', 'thun_nu_32__1__thumb_400x6001.jpg', ''),
(123, 'SO MI NU 088017', '29', 'SMG088017', '175,000 VNĐ', 'somi_nu_12__1__500x7501.jpg', ''),
(124, 'SO MI NU 088013WH', '29', 'SMG088013WH', '215,000 VNĐ', 'somi_nu_14__1__500x7501.jpg', ''),
(125, 'SO MI NU 088013BU', '29', 'SMG088013BU', '215,000 VNĐ', 'somi_nu_19__1__500x7501.jpg', ''),
(126, 'SO MI NU 088011', '29', 'SMG088011', '215,000 VNĐ', 'somi_nu_13__1__500x7501.jpg', ''),
(127, 'SO MI NU 088012BU', '29', 'SMG088012BU', '215,000 VNĐ', 'somi_nu_20__1__500x7501.jpg', ''),
(128, 'SO MI NU 088012WH', '29', 'SMG088012WH', '215,000 VNĐ', 'somi_nu_15__1__500x7501.jpg', ''),
(129, 'SO MI NU 088009', '29', 'SMG088009', '195,000 VNĐ', 'somi_nu_32__1__500x7501.jpg', ''),
(130, 'SO MI NU 078023', '29', 'SMG078023', '275,000 VNĐ', 'somi_nu_27__1__500x750_(1).jpg', ''),
(131, 'HOODIE NAM 098001GR', '15', 'ATB098001GR', '195,000 VNĐ', 'khoac_nam_7__1__thumb_400x6001.jpg', ''),
(132, 'HOODIE NAM 098001BL', '15', 'ATB098001BL', '195,000 VNĐ', 'khoac_hoddie_2__1__500x7501.jpg', ''),
(133, 'HOODIE NAM 098001RD', '15', 'ATB098001RD', '195,000 VNĐ', 'khoac_nam_10__1__500x7501.jpg', ''),
(134, 'HOODIE NAM 098001BX', '15', 'ATB098001BX', '195,000 VNĐ', 'khoac_nam_13__1__500x7501.jpg', ''),
(135, 'HOODIE NAM 098001GN', '15', 'ATB098001GN', '195,000 VNĐ', 'khoac_hoddie_4__1__500x7501.jpg', ''),
(136, 'HOODIE NAM 098001BU', '15', 'ATB098001BU', '195,000 VNĐ', 'khoac_hoddie_7__1__500x7501.jpg', ''),
(137, 'HOODIE NAM 088032GR', '15', 'ATB088032GR', '215,000 VNĐ', 'thun_nam_23__1__500x750_(1).jpg', ''),
(138, 'HOODIE NAM 088032WH', '15', 'ATB088032WH', '215,000 VNĐ', 'thun_nam_24__1__500x7501.jpg', ''),
(139, 'HOODIE NAM 088032BL', '15', 'ATB088032BL', '215,000 VNĐ', 'thun_nam_22__1__500x750_(1).jpg', ''),
(140, 'HOODIE NAM 048022WH', '15', 'ATB048022WH', '215,000 VNĐ', 'khoac_nam_41__1__thumb_400x6001.jpg', ''),
(141, 'HOODIE NỮ 098001BX-01', '17', 'ATB098001BX-01', '195,000 VNĐ', 'khoac_nu_15__1__500x7501.jpg', ''),
(142, 'HOODIE NỮ 098001RD-01', '17', 'ATB098001RD-01', '195,000 VNĐ', 'khoac_nu_12__1__500x7501.jpg', ''),
(143, 'HOODIE NỮ 098001GR-01', '17', 'ATB098001GR-01', '195,000 VNĐ', 'khoac_nu_9__1__500x7501.jpg', ''),
(144, 'HOODIE NỮ 098001LB-01', '17', 'ATB098001LB-01', '195,000 VNĐ', 'khoac_nu_6000__1__500x7501.jpg', ''),
(145, 'HOODIE NỮ 098001BU-01', '17', 'ATB098001BU-01', '390,000 VNĐ', 'khoac_hoddie_8__1__500x7501.jpg', ''),
(146, 'HOODIE NỮ 098001GN-01', '17', 'ATB098001GN-01', '195,000 VNĐ', 'khoac_hoddie_6__1__500x7501.jpg', ''),
(147, 'HOODIE NỮ 098001BL-01', '17', 'ATB098001BL-01', '195,000 VNĐ', 'khoac_hoddie_3__1__500x7501.jpg', ''),
(148, 'HOODIE NỮ 048021WH-1', '17', 'ATB048021WH-1', '195,000 VNĐ', 'khoac_nu_25__1__500x7501.jpg', ''),
(149, 'HOODIE NỮ 048021GR-1', '17', 'ATB048021GR-1', '195,000 VNĐ', 'khoac_nu_29__2__500x7501.jpg', ''),
(150, 'HOODIE NỮ 117014NV-1', '17', 'ATB117014NV-1', '345,000 VNĐ', 'ao_khoac_nu_21__1__500x7501.jpg', ''),
(151, 'KAKI NAM 088013', '2', 'KKB088013', '365,000 VNĐ', 'quan_tay_nam_1__1__500x7501.jpg', ''),
(152, 'KAKI NAM 088012', '2', 'KKB088012', '385,000 VNĐ', 'quan_tay_nam_2__1__500x7501.jpg', ''),
(153, 'KAKI NAM 088011', '2', 'KKB088011', '385,000 VNĐ', 'quan_tay_nam_3__1__500x7501.jpg', ''),
(154, 'KAKI NAM 088010', '2', 'KKB088010', '385,000 VNĐ', 'quan_tay_nam_25__1__thumb_400x6001.jpg', ''),
(155, 'KAKI NAM 088009BL', '2', 'KKB088009BL', '385,000 VNĐ', 'quan_tay_nam_12__1__500x7501.jpg', ''),
(156, 'KAKI NAM 088004BL', '2', 'KKB088004BL', '385,000 VNĐ', 'quan_tay_nam_12__1__500x75011.jpg', ''),
(157, 'KAKI NAM 038006GR', '2', 'KKB038006GR', '385,000 VNĐ', 'quan_nam_21__2__500x7501.jpg', ''),
(158, 'KAKI NAM 038005GR', '2', 'KKB038005GR', '385,000 VNĐ', 'quan_nam_18__2__500x7501.jpg', ''),
(159, 'KAKI NAM 038004BL', '2', 'KKB038004BL', '385,000 VNĐ', 'quan_nam_20__2__500x7501.jpg', ''),
(160, 'KAKI NAM 038002NV', '2', 'KKB038002NV', '345,000 VNĐ', 'quan_tay_nam_1__1__500x7502.jpg', 'XL'),
(161, 'JEAN NAM 088009', '3', 'QJB088009', '340,000 VNĐ', 'jean_nam_1__1__500x7501.jpg', ''),
(162, 'JEAN NAM 088007', '3', 'QJB088007', '345,000 VNĐ', 'jean_nam_2__1__500x7501.jpg', ''),
(163, 'JEAN NAM 088006', '3', 'QJB088006', '345,000 VNĐ', 'jean_nam_16__1__500x7501.jpg', ''),
(164, 'JEAN NAM 088005', '3', 'QJB088005', '340,000 VNĐ', 'jean_nam_21__1__500x7501.jpg', ''),
(165, 'JEAN NAM 088002', '3', 'QJB088002', '375,000 VNĐ', 'jean_nam_19__1__500x7501.jpg', ''),
(166, 'JEAN NAM 088001', '3', 'QJB088001', '375,000 VNĐ', 'jean_nam_17__1__500x7501.jpg', ''),
(167, 'JEAN NAM 078003', '3', 'QJB078003', '365,000 VNĐ', 'jeans_nam_4__1__500x7501.jpg', ''),
(168, 'JEAN NAM 078002', '3', 'QJB078002', '355,000 VNĐ', 'jeans_nam_1__1__500x7501.jpg', ''),
(169, 'JEAN NAM 078001', '3', 'QJB078001', '345,000 VNĐ', 'jeans_nam_7__1__500x7501.jpg', ''),
(170, 'JEAN NAM 068021', '3', 'QJB068021', '355,000 VNĐ', 'jena_nam_3__1__500x7501.jpg', ''),
(171, 'QUAN THUN NAM 088001BU', '4', 'QTB088001BU', '195,000 VNĐ', 'jogger_nam_32__1__500x7501.jpg', ''),
(172, 'QUAN THUN NAM 088001GR', '4', 'QTB088001GR', '195,000 VNĐ', 'jogger_nam_29__1__500x7501.jpg', ''),
(173, 'QUAN THUN NAM 088001RD', '4', 'QTB088001RD', '195,000 VNĐ', 'jogger_nam_34__1__500x7502.jpg', 'XL'),
(174, 'QUAN THUN NAM 088001BL', '4', 'QTB088001BL', '195,000 VNĐ', 'jogger_nam_34__1__500x7501.jpg', ''),
(175, 'QUAN THUN 068001BL', '4', 'QTB068001BL', '170,000 VNĐ', 'jogger_nam_35__1__500x750_(1).jpg', ''),
(176, 'QUAN THUN NAM 048003GR', '4', 'QTB048003GR', '195,000 VNĐ', 'jogger_nam_37__1__500x7501.jpg', ''),
(177, 'QUAN THUN 068001LG', '4', 'QTB068001LG', '170,000 VNĐ', 'quan_thun_nam_30__1__500x7501.jpg', ''),
(178, 'QUAN THUN 068001GR', '4', 'QTB068001GR', '170,000 VNĐ', 'quan_thun_nam_29__1__500x7501.jpg', ''),
(179, 'QUAN THUN NAM 048002LG', '4', 'QTB048002LG', '195,000 VNĐ', 'quan_thun_nam_30__1__500x75011.jpg', ''),
(180, 'QUẦN JORGER 067001BR', '4', 'KKB067001BR', '245,000 VNĐ', 'do_nam_24__1__500x750_thumb_205x3061.jpg', ''),
(181, 'SO MI NU 078022WH', '18', 'SMG078022WH', '245,000 VNĐ', 'ao_somi_nu_11__1__500x7501.jpg', ''),
(182, 'SO MI NU 078022BU', '18', 'SMG078022BU', '245,000 VNĐ', 'ao_somi_nu_10__1__500x7501.jpg', ''),
(183, 'SO MI NU 078022RD', '18', 'SMG078022RD', '245,000 VNĐ', 'ao_somi_nu_9__1__500x7501.jpg', ''),
(184, 'SO MI NU 078020PK', '18', 'SMG078020PK', '205,000 VNĐ', 'somi_nu_2300__1__500x7501.jpg', ''),
(185, 'SO MI NU 078007PK', '18', 'SMG078007PK', '185,000 VNĐ', 'ao_somi_nu_4__1__500x7501.jpg', ''),
(186, 'SO MI NU 078007BU', '18', 'SMG078007BU', '185,000 VNĐ', 'ao_somi_nu_3__1__500x7501.jpg', ''),
(187, 'SO MI NU 078007WH', '18', 'SMG078007WH', '185,000 VNĐ', 'ao_somi_nu_5__1__500x7501.jpg', ''),
(188, 'THUN NU 048016PK', '18', 'ATG048016PK', '185,000 VNĐ', 'ao_kieu_18__2__500x7501.jpg', ''),
(189, 'THUN NU 048016BU', '18', 'ATG048016BU', '185,000 VNĐ', 'ao_kieu_16__2__500x7501.jpg', ''),
(190, 'THUN NU 048014BU', '18', 'ATG048014BU', '165,000 VNĐ', 'ao_kieu_30__2__500x7501.jpg', ''),
(191, 'DAM NU 088001RD', '19', 'DNG088001RD', '315,000 VNĐ', 'set_do_nu_11__1__500x7501.jpg', ''),
(192, 'DAM NU 088001YL', '19', 'DNG088001YL', '315,000 VNĐ', 'set_do_nu_10__1__500x7501.jpg', ''),
(193, 'THUN NU 088011BU', '19', 'ATG088011BU', '235,000 VNĐ', 'dam_nu_24__1__500x7501.jpg', ''),
(194, 'THUN NU 088011RD', '19', 'ATG088011RD', '235,000 VNĐ', 'dam_nu_23__1__500x7501.jpg', ''),
(195, 'DAM NU 078012', '19', 'DNG078012', '315,000 VNĐ', 'dam_nu_14__1__500x7501.jpg', ''),
(196, 'SET NU 078011', '19', 'DNG078011', '325,000 VNĐ', 'jumsuit_13__1__500x7501.jpg', ''),
(197, 'SET NU 078009YL', '19', 'DNG078009YL', '325,000 VNĐ', 'set_vay_nu_1__1__500x7501.jpg', ''),
(198, 'DAM NU 078007PK', '19', 'DNG078007PK', '255,000 VNĐ', 'dam_nu_24__1__500x750_(1).jpg', ''),
(199, 'DAM NU 078007BU', '19', 'DNG078007BU', '225,000 VNĐ', 'dam_nu_26__1__500x7501.jpg', ''),
(200, 'DAM NU 078007WH', '19', 'DNG078007WH', '255,000 VNĐ', 'dam_nu_16__1__500x7501.jpg', ''),
(201, 'CHAN VAY 088004CR', '20', 'QSG088004CR', '215,000 VNĐ', 'chan_vay_30__1__500x7501.jpg', ''),
(202, 'CHAN VAY 088004BL', '20', 'QSG088004BL', '215,000 VNĐ', 'chan_vay_31__1__500x7501.jpg', ''),
(203, 'CHAN VAY 088003WH', '20', 'QSG088003WH', '215,000 VNĐ', 'chan_vay_27__1__500x7501.jpg', ''),
(204, 'CHAN VAY 088003BR', '20', 'QSG088003BR', '215,000 VNĐ', 'chan_vay_25__2__500x7501.jpg', ''),
(205, 'CHAN VAY 088003MS', '20', 'QSG088003MS', '215,000 VNĐ', 'chan_vay_29__1__500x7501.jpg', ''),
(206, 'CHAN VAY 088003YL', '20', 'QSG088003YL', '215,000 VNĐ', 'chan_vay_26__1__500x7501.jpg', ''),
(207, 'CHAN VAY 088002', '20', 'QSG088002', '275,000 VNĐ', 'short_jean_26__1__500x7501.jpg', ''),
(208, 'CHAN VAY 068005PK', '20', 'QSG068005PK', '245,000 VNĐ', 'chan_vay_12__1__500x7501.jpg', ''),
(209, 'CHAN VAY 068005YL', '20', 'QSG068005YL', '245,000 VNĐ', 'chan_vay_16__1__500x7501.jpg', ''),
(210, 'CHAN VAY 088001RD', '20', 'QSG088001RD', '225,000 VNĐ', 'chan_vay_13000__1__500x7501.jpg', ''),
(211, 'SHORT JEAN NU 088006BL', '21', 'QSG088006BL', '235,000 VNĐ', 'short_jean_23__1__500x7501.jpg', ''),
(212, 'SHORT JEAN NU 088006PK', '21', 'QSG088006PK', '235,000 VNĐ', 'short_jean_24__1__500x7501.jpg', ''),
(213, 'SHORT JEAN NU 088006WH', '21', 'QSG088006WH', '235,000 VNĐ', 'short_jean_22__1__500x7501.jpg', ''),
(214, 'SHORT JEAN NU 088005BU', '21', 'QSG088005BU', '235,000 VNĐ', 'short_jean_25__1__500x7501.jpg', ''),
(215, 'SHORT JEAN NU 088005BL', '21', 'QSG088005BL', '235,000 VNĐ', 'short_jean_21__1__500x7501.jpg', ''),
(216, 'SHORT JEAN NU 078007', '21', 'QSG078007', '235,000 VNĐ', 'short_jean_19__1__500x7501.jpg', ''),
(217, 'SHORT NU 058003', '21', 'QSG058003', '235,000 VNĐ', 'short_nam_19__2__500x7501.jpg', ''),
(218, 'SHORT NU 058004', '21', 'QSG058004', '235,000 VNĐ', 'short_nam_20__2__500x7501.jpg', ''),
(219, 'SHORT JEAN NU 048014', '21', 'QSG048014', '275,000 VNĐ', 'jean_nu_62__2__500x7501.jpg', ''),
(220, 'SHORT NU 058002WH', '21', 'QSG058002WH', '235,000 VNĐ', 'short_nam_6__2__500x7501.jpg', ''),
(221, 'JEAN NU 088005', '22', 'QJG088005', '360,000 VNĐ', 'jean_nu_27__1__500x7501.jpg', ''),
(222, 'JEAN NU 088004', '22', 'QJG088004', '360,000 VNĐ', 'jean_nu_7__1__500x7501.jpg', ''),
(223, 'JEAN NU 088001', '22', 'QJG088001', '360,000 VNĐ', 'jean_nu_13__1__thumb_400x6001.jpg', ''),
(224, 'JEAN NU 078007', '22', 'QJG078007', '295,000 VNĐ', 'jean_nu_17__1__500x7501.jpg', ''),
(225, 'JEAN NU 078006', '22', 'QJG078006', '295,000 VNĐ', 'jean_nu_21__1__500x7501.jpg', ''),
(226, 'JEAN NU 078005', '22', 'QJG078005', '235,000 VNĐ', 'jean_nu_20__1__500x7501.jpg', ''),
(227, 'JEAN NU 068011', '22', 'QJG068011', '360,000 VNĐ', 'jeans_nu_4__1__500x750_(1).jpg', ''),
(228, 'JEAN NU 068004', '22', 'QJG068004', '360,000 VNĐ', 'jeans_nu_6__1__500x7501.jpg', ''),
(229, 'JEAN NU 068003', '22', 'QJG068003', '315,000 VNĐ', 'quan_jeans_nu_34__1__500x7501.jpg', ''),
(230, 'JEAN NU 068002', '22', 'QJG068002', '375,000 VNĐ', 'jeans_nu_57__1__500x7501.jpg', ''),
(231, 'QUAN THUN NU 088005', '23', 'QTG088005', '265,000 VNĐ', 'legging_4__1__500x7501.jpg', ''),
(232, 'QUAN THUN NU 088004', '23', 'QTG088004', '265,000 VNĐ', 'legging_1__1__500x7501.jpg', ''),
(233, 'QUAN THUN NU 088003', '23', 'QTG088003', '265,000 VNĐ', 'legging_2__1__500x7501.jpg', ''),
(234, 'QUAN THUN NU 088001', '23', 'QTG088001', '275,000 VNĐ', 'jogger_nu_14__1__500x7501.jpg', ''),
(235, 'QUAN THUN NU 068001', '23', 'QTG068001', '255,000 VNĐ', 'jogger_nu_1__1__500x7501.jpg', ''),
(236, 'QUAN THUN NU 048002', '23', 'QTG048002', '235,000 VNĐ', 'jogger_nu_29__1__500x7501.jpg', ''),
(237, 'QUAN THUN NU 048001', '23', 'QTG048001', '235,000 VNĐ', 'jogger_nu_34__1__500x7501.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinkhachhang`
--

CREATE TABLE `thongtinkhachhang` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `xaphuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `huyenquan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhthanhpho` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucgiaohang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinkhachhang`
--

INSERT INTO `thongtinkhachhang` (`id`, `id_sp`, `hovaten`, `sodienthoai`, `diachi`, `xaphuong`, `huyenquan`, `tinhthanhpho`, `hinhthucgiaohang`) VALUES
(1, 1, 'Lê Văn Tùng', '01223932767', '21 aaa', 'bbb', 'ccc', 'dd', '1'),
(2, 2, 'Lê Văn T', '01223932745', 'qqq', 'ww', 'ee', 'tttttttttt', '2'),
(3, 0, 'qwe', 'ewq', 'ewq', 'ewq', 'ewq', 'ewq', '1'),
(4, 0, 'Le van tung', '0905794743', 'phan chu trinh', 'tan taa', 'hai chau', 'da nag', '1'),
(5, 0, 'Le van tung', '0905794743', 'phan chu trinh', 'tan taa', 'hai chau', 'da nag', '1'),
(6, 0, 'Le van tung', '0905794743', 'phan chu trinh', 'tan taa', 'hai chau', 'da nag', '1'),
(7, 0, 'Le van tung', '0905794743', 'phan chu trinh', 'tan taa', 'hai chau', 'da nag', '1'),
(8, 0, 'Le van tung', '0973574290', '134 phan chu trinh', 'aaaaaaaaaaa', 'bbbbbbbbbbb', 'ccccccccccccccccc', '2'),
(9, 0, 'Le van tung', '0973574290', '134 phan chu trinh', 'aaaaaaaaaaa', 'bbbbbbbbbbb', 'ccccccccccccccccc', '2'),
(10, 0, 'Le van tung', '0973574290', '134 phan chu trinh', 'aaaaaaaaaaa', 'bbbbbbbbbbb', 'ccccccccccccccccc', '2'),
(11, 0, 'hoai', '123', 'aaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaaa', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `id_tinh` int(10) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`id_tinh`, `ten`) VALUES
(1, 'quảng trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `noidung`, `tieude`, `anh`) VALUES
(2, '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/sweater_nam_totoshop_(9).jpg\" style=\"height:869px; width:800px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/sweater_nam_totoshop_(12).jpg\" style=\"height:993px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '<p>CẬP NHẬT NHỮNG MẨU SWEATE CHO CH&Agrave;NG CH&Agrave;O THU</p>\r\n', 'article_1536315471_627.jpg'),
(3, '<p>&nbsp;</p>\r\n\r\n<p>Đơn giản, thoải m&aacute;i kh&ocirc;ng thể kh&ocirc;ng nhắc đến items m&agrave; c&ocirc; n&agrave;ng n&agrave;o cũng y&ecirc;u th&iacute;ch - Đầm su&ocirc;ng dễ mặc, hợp trend lại mang đến vẻ ngo&agrave;i cực y&ecirc;u cho bất cứ c&ocirc; n&agrave;ng n&agrave;o diện n&oacute;. M&ugrave;a Back to school chọn cho m&igrave;nh một chiếc T-shirt Dress kết hợp với chiếc t&uacute;i tote hay ho sẽ gi&uacute;p bạn nổi bật giữa đ&aacute;m đ&ocirc;ng ng&agrave;y nhập học.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/mix_do_don_gian_back_to_school_(7).jpg\" style=\"height:1171px; width:800px\" /></p>\r\n\r\n<p>Một ch&uacute;t điệu đ&agrave; trong ng&agrave;y Back to school với set v&aacute;y của&nbsp;<strong>Totoshop</strong>&nbsp;sẽ gi&uacute;p n&agrave;ng giải quyết b&agrave;i to&aacute;n mix đồ ngay tức khắc. Set v&aacute;y đ&atilde; bao gồm &aacute;o T-shirt v&agrave; ch&acirc;n v&aacute;y, bạn chỉ cần kết hợp th&ecirc;m đ&ocirc;i sandal hoặc sneaker l&agrave; c&oacute; ngay combo đến trường rồi nh&eacute;!</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/mix_do_don_gian_back_to_school_(9).jpg\" style=\"height:1171px; width:800px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/mix_do_don_gian_back_to_school_(1).jpg\" style=\"height:808px; width:800px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/mix_do_don_gian_back_to_school_(8).jpg\" style=\"height:1171px; width:800px\" /></p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '<p>C&Ocirc;NG THỨC MIX ĐỒ ĐƠN GIẢN M&Agrave; ĐẸP D&Agrave;NH CHO C&Ocirc; N&Agrave;NG M&Ugrave;A BAC', '<p><img src=\"http://cdn.nhanh.vn/cdn/store/7136/art/article_1534847488_125.jpg\" /></p>\r\n'),
(4, '<p>Link&nbsp;v&agrave; đừng ngần ngại&nbsp;<a href=\"https://www.facebook.com/Totoshop.com.vn/\">Đặt h&agrave;ng nhanh</a>&nbsp;để sở hữu những set đồ cực ưng &yacute; với gi&aacute; cực hời hoặc gh&eacute; ngay đến cửa h&agrave;ng&nbsp;<strong>Totoshop</strong>&nbsp;gần nhất để thả ga shopping m&agrave; kh&ocirc;ng lo về gi&aacute;, cơ hội&nbsp;<strong>Mua C&agrave;ng Nhiều, Giảm C&agrave;ng Phi&ecirc;u</strong>đến hết ng&agrave;y 5/9, gh&eacute; sớm để rinh đồ đẹp v&agrave; rẻ th&ocirc;i n&agrave;o!!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(*) &Aacute;p dụng cho một sản phẩm c&oacute; gi&aacute; trị thấp nhất</p>\r\n\r\n<p>(*) Kh&ocirc;ng &aacute;p dụng đổi h&agrave;ng cho Sản phẩm giảm gi&aacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>MUA C&Agrave;NG NHIỀU GIẢM C&Agrave;NG PHI&Ecirc;U</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://cdn.nhanh.vn/cdn/store/7136/art/article_1534321770_638.png\" /><'),
(5, '<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f6b/1/16/1f333.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/ship_0_dong.png\" style=\"height:315px; width:851px\" /></p>\r\n\r\n<p>Quay lại trường học c&oacute; bao nhi&ecirc;u việc phải lo l&agrave;m bạn kh&ocirc;ng c&oacute; thời gian sắm sửa quần &aacute;o tụ tập bạn b&egrave; sau bao ng&agrave;y xa c&aacute;ch. H&atilde;y để&nbsp;<a href=\"https://www.facebook.com/hashtag/totoshop?source=feed_text\">#Totoshop</a>&nbsp;gi&uacute;p bạn tư vấn chọn đồ chỉ bằng 1 c&uacute; &quot;click&quot; l&agrave; c&oacute; ngay trang phục ưng &yacute; với&nbsp;<strong>PH&Iacute;</strong><strong>SHIP 0 ĐỒNG</strong>&nbsp;- QU&Agrave; TẶNG BẤT NGỜ CHO M&Ugrave;A&nbsp;<strong>BACK TO SCHOOL</strong>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fdd/1/16/1f6f5.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f6b/1/16/1f333.png\" style=\"height:16px; width:16px\" /><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fdd/1/16/274c.png\" style=\"height:16px; width:16px\" /><em><strong>Freeship cho Đơn h&agrave;ng c&oacute; 2 SP trở l&ecirc;n nội th&agrave;nh HCM</strong></em><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fdd/1/16/274c.png\" style=\"height:16px; width:16px\" /><em><strong>Freeship cho Đơn H&agrave;ng c&oacute; 3 SP trở l&ecirc;n ngoại th&agrave;nh HCM</strong></em><br />\r\n&Aacute;p dụng từ ng&agrave;y&nbsp;<strong>10/8 đến 10/9&nbsp;</strong>đối với tất cả Đơn h&agrave;ng&nbsp;<strong>khu vực Tp. Hồ Ch&iacute; Minh</strong>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2/1/16/1f60d.png\" style=\"height:16px; width:16px\" /><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fdf/1/16/274e.png\" style=\"height:16px; width:16px\" />Chương tr&igrave;nh kh&ocirc;ng &aacute;p dụng chung với Thẻ VIP v&agrave; c&aacute;c CTKM kh&aacute;c (nếu c&oacute;)<br />\r\nNgay b&acirc;y giờ, h&atilde;y lưu nhanh c&aacute;ch thức mua h&agrave;ng Online v&agrave; sẵn s&agrave;ng&nbsp;<a href=\"https://www.facebook.com/hashtag/shopping?source=feed_text\">#Shopping</a>&nbsp;phũ ph&ecirc; m&agrave; kh&ocirc;ng lo về ph&iacute;&nbsp;<a href=\"https://www.facebook.com/hashtag/ship?source=feed_text\">#Ship</a>&nbsp;c&ugrave;ng Totoshop n&agrave;o<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f77/1/16/203c.png\" style=\"height:16px; width:16px\" /><br />\r\n____________________________________<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4d/1/16/1f4de.png\" style=\"height:16px; width:16px\" />&nbsp;Đặt h&agrave;ng Hotline: 0938.803.633<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fd8/1/16/1f4f2.png\" style=\"height:16px; width:16px\" />&nbsp;Đặt h&agrave;ng Website:&nbsp;<a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Ftotoshop.vn%2F&amp;h=AT0Ba0fJ7Wo137xQalFRqAW_wXH8QgZTJqDxwEHKmlTNwz6siKN03MBHFWG849sz5XRwcuHOAwoEjJ8ATUXqWosXeL6DRPa36yQpjpu2qyjLbqJLGYNmZaHTkG1ZDsR5zx-4edmZ\" target=\"_blank\">http://totoshop.vn/</a><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fd8/1/16/1f4f2.png\" style=\"height:16px; width:16px\" />&nbsp;Đặt h&agrave;ng Fanpage:&nbsp;<a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fbit.ly%2FDatHangOnl&amp;h=AT1FzJ6NfkpUgoQMvScV8q2khtnPN5CZ20MQPxxSHoWH01tG7h5b54wetMLZqCCqhovwODWGUFSS_DuN1ENZPhgEzUNOsG80hodR_Le00nXrV9RMLo_ZsktmR-oWqAp044gXD1s5\" target=\"_blank\">http://bit.ly/DatHangOnl</a></p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '<p>SHIP 0 ĐỒNG ĐƠN H&Agrave;NG TP.HCM</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://cdn.nhanh.vn/cdn/store/7136/art/article_1533699170_189.png\" /><'),
(6, '<p>‼️GIẢM&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣️️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️% TẤT CẢ SẢN PHẨM<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fca/1/16/2795.png\" style=\"height:16px; width:16px\" />➕&nbsp;TẶNG&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />2️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️ T&Uacute;I VẢI XINH XẮN&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fb/1/16/1f388.png\" style=\"height:16px; width:16px\" />????<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fb/1/16/1f388.png\" style=\"height:16px; width:16px\" />????<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fb/1/16/1f388.png\" style=\"height:16px; width:16px\" />????<br />\r\n<img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/coverfb(1).png\" style=\"height:315px; width:851px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fbd/1/16/1f4a2.png\" style=\"height:16px; width:16px\" />????&nbsp;Chương tr&igrave;nh chỉ &aacute;p dụng tại cửa h&agrave;ng&nbsp;<a href=\"https://www.facebook.com/hashtag/totoshop?source=feed_text\">#Totoshop</a>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2b/1/16/1f3aa.png\" style=\"height:16px; width:16px\" />????&nbsp;<strong>124 Thủ Khoa Hu&acirc;n, P. Ph&uacute; Thủy, TP. Phan Thiết</strong>&nbsp;từ ng&agrave;y&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />5️⃣/️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/38_20e3.png\" style=\"height:16px; width:16px\" />8️⃣️ đến&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣/️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/38_20e3.png\" style=\"height:16px; width:16px\" />8️⃣️<br />\r\nĐể ch&agrave;o mừng sự c&oacute; mặt của th&agrave;nh vi&ecirc;n thứ 17 tại th&agrave;nh phố xinh đẹp&nbsp;<a href=\"https://www.facebook.com/hashtag/phan_thi%E1%BA%BFt?source=feed_text\">#Phan_Thiết</a>, Totoshop c&oacute; rất nhiều&nbsp;<a href=\"https://www.facebook.com/hashtag/qu%C3%A0_t%E1%BA%B7ng?source=feed_text\">#Qu&agrave;_Tặng</a>&nbsp;h&acirc;n hoan gởi đến c&aacute;c bạn<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"height:16px; width:16px\" />????&nbsp;Tặng voucher giảm&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣️️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️% cho 10 Kh&aacute;ch h&agrave;ng đầu ti&ecirc;n<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"height:16px; width:16px\" />????&nbsp;Tặng voucher giảm&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />5️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣% cho 15 Kh&aacute;ch h&agrave;ng tiếp theo<br />\r\n️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"height:16px; width:16px\" />????&nbsp;Tặng voucher giảm&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fb8/1/16/33_20e3.png\" style=\"height:16px; width:16px\" />3️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️% cho 20 Kh&aacute;ch h&agrave;ng kế tiếp<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"height:16px; width:16px\" />????&nbsp;Tặng&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />2️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣&nbsp;t&uacute;i canvas cho H&oacute;a đơn từ 300K<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f84/1/16/1f381.png\" style=\"height:16px; width:16px\" />????&nbsp;Tặng 4 Sản Phẩm bất k&igrave; tại cửa h&agrave;ng cho Kh&aacute;ch h&agrave;ng may mắn tham gia&nbsp;<a href=\"https://www.facebook.com/hashtag/livestream?source=feed_text\">#Livestream</a>&nbsp;v&agrave;o ng&agrave;y khai trương tr&ecirc;n fanpage&nbsp;<a href=\"https://www.facebook.com/Totoshop.com.vn/\">Totoshop</a><br />\r\nĐặc biệt, Totoshop sẽ&nbsp;<a href=\"https://www.facebook.com/hashtag/saleoff?source=feed_text\">#SALEoff</a>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f7a/1/16/31_20e3.png\" style=\"height:16px; width:16px\" />1️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />0️⃣️%&nbsp;<strong>all items</strong>&nbsp;từ ng&agrave;y 5-7/8/2018&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f8c/1/16/1f389.png\" style=\"height:16px; width:16px\" />????<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f8c/1/16/1f389.png\" style=\"height:16px; width:16px\" />????<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f45/1/16/1f6a8.png\" style=\"height:16px; width:16px\" />????&nbsp;&Aacute;p dụng<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />▪️Duy nhất tại cửa h&agrave;ng&nbsp;<a href=\"https://www.facebook.com/hashtag/totoshop_phan_thi%E1%BA%BFt?source=feed_text\">#Totoshop_Phan_Thiết</a><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />▪️Kh&ocirc;ng &aacute;p dụng chung với thẻ VIP v&agrave; c&aacute;c CTKM kh&aacute;c (nếu c&oacute;)<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />▪️H&oacute;a đơn sau chiết khấu tr&ecirc;n 300K được tặng 1 t&uacute;i canvas &quot;I&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f6c/1/16/2764.png\" style=\"height:16px; width:16px\" />&lt;3&nbsp;TOTOSHOP&quot; đến khi hết qu&agrave; tặng<br />\r\n<br />\r\n<a href=\"https://www.facebook.com/hashtag/team_phan_thi%E1%BA%BFt?source=feed_text\">#Team_Phan_Thiết</a>&nbsp;ơi, c&aacute;c bạn đ&atilde; sẵn s&agrave;ng ch&agrave;o đ&oacute;n v&agrave; quẫy tưng bừng với&nbsp;<a href=\"https://www.facebook.com/hashtag/toto?source=feed_text\">#TOTO</a>&nbsp;chưa nhỉ<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fec/1/16/2049.png\" style=\"height:16px; width:16px\" />⁉️&nbsp;H&atilde;y nhanh ch&oacute;ng c&ugrave;ng&nbsp;đồng bọn tiến đến&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2b/1/16/1f3aa.png\" style=\"height:16px; width:16px\" />????&nbsp;124 Thủ Khoa Hu&acirc;n, P. Ph&uacute; Thủy, TP. Phan Thiết để nhận&nbsp;<a href=\"https://www.facebook.com/hashtag/qu%C3%A0_xinh?source=feed_text\">#QU&Agrave;_XINH</a>&nbsp;từ ng&agrave;y&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />5️⃣/️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/38_20e3.png\" style=\"height:16px; width:16px\" />8️⃣️ đến&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣/️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/38_20e3.png\" style=\"height:16px; width:16px\" />8️⃣️ nh&eacute;&nbsp;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2/1/16/1f60d.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2/1/16/1f60d.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '<h2>OPENING! TẶNG QU&Agrave; XINH</h2>\r\n', '<p><img src=\"http://cdn.nhanh.vn/cdn/store/7136/art/article_1533180845_797.png\" /></p>\r\n'),
(8, '<h2><strong>KHUYẾN M&Atilde;I KHAI TRƯƠNG TOTOSHOP B&Igrave;NH DƯƠNG-UPTO 70%</strong></h2>\r\n\r\n<h3>Ng&agrave;y đăng : 19-07-2018</h3>\r\n\r\n<p style=\"text-align:center\"><strong>TỪNG BỪNG KHAI TRƯƠNG -&nbsp;KHUYẾN M&Atilde;I CỰC CHẤT 3 IN 1&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f8c/1/16/1f389.png\" style=\"height:16px; width:16px\" />????<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f8c/1/16/1f389.png\" style=\"height:16px; width:16px\" />????</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/FTWD1801.PHPWeb/toto_shop/upload/images/totoshop_khuyen_mai_khai_truong_di_an.png\" style=\"height:315px; width:851px\" /></strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f7a/1/16/31_20e3.png\" style=\"height:16px; width:16px\" />1️⃣&nbsp;<strong>XẾP H&Agrave;NG NHANH-GIẢM THẢ PHANH&nbsp;</strong><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fe0/1/16/1f31f.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm 70% cho 5 Kh&aacute;ch h&agrave;ng đầu ti&ecirc;n<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fe0/1/16/1f31f.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm 50% cho 10 Kh&aacute;ch h&agrave;ng tiếp theo<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fe0/1/16/1f31f.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm 30% cho 15 Kh&aacute;ch h&agrave;ng kế tiếp<br />\r\n<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />2️⃣&nbsp;<strong>V&Ograve;NG QUAY MAY MẮN</strong><br />\r\nVới mỗi H&oacute;a đơn từ 300k, bạn sẽ c&oacute; 1 lượt quay may mắn&nbsp;<a href=\"https://www.facebook.com/hashtag/tr%C3%BAng?source=feed_text\">#TR&Uacute;NG</a>&nbsp;100% c&aacute;c qu&agrave; tặng:<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Voucher giảm 70%&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm ngay 100k&nbsp;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Voucher giảm 50%&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm ngay 50k&nbsp;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Voucher giảm 30%&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm ngay 20k&nbsp;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm ngay 10%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f50/1/16/1f525.png\" style=\"height:16px; width:16px\" />????&nbsp;Giảm ngay 10k&nbsp;<br />\r\n<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fb8/1/16/33_20e3.png\" style=\"height:16px; width:16px\" />3️⃣&nbsp;<strong>GIẢM TH&Ecirc;M 5% CHO THẺ VIP</strong><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f40/1/16/25b6.png\" style=\"height:16px; width:16px\" />▶️&nbsp;VIP 5% + 5% = Giảm 10%<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f40/1/16/25b6.png\" style=\"height:16px; width:16px\" />▶️&nbsp;VIP 7% + 5% = Giảm 12%<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f40/1/16/25b6.png\" style=\"height:16px; width:16px\" />▶️&nbsp;VIP 10% + 5% = Giảm 15%<br />\r\nChương tr&igrave;nh khai trương&nbsp;<strong>&ldquo;Khuyến M&atilde;i Cực Chất&rdquo;</strong>&nbsp;&aacute;p dụng duy nhất tại&nbsp;<u><a href=\"https://www.facebook.com/hashtag/totoshop_b%E1%BA%BFn_tre?source=feed_text\">#TotoShop_</a>B&igrave;nh_Dương&nbsp;</u><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2d/1/16/1f4cd.png\" style=\"height:16px; width:16px\" />????&nbsp;97H Nguyễn An Ninh, Dĩ An, B&igrave;nh Dương&nbsp;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f7a/1/16/26f3.png\" style=\"height:16px; width:16px\" />⛳&nbsp;Thời gian:&nbsp;️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />2️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fd7/1/16/34_20e3.png\" style=\"height:16px; width:16px\" />4️⃣.️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣️ -&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />2️⃣️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f15/1/16/36_20e3.png\" style=\"height:16px; width:16px\" />6️⃣️.️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f34/1/16/37_20e3.png\" style=\"height:16px; width:16px\" />7️⃣️<br />\r\nNếu bạn chưa c&oacute; c&aacute;i hẹn n&agrave;o cuối th&aacute;ng 7 th&igrave; đừng ngại ngần xếp lịch &ldquo;hẹn h&ograve;&rdquo; với&nbsp;<strong>Totoshop</strong>. Một c&aacute;i hẹn sẽ thật lung linh với những item đ&igrave;nh đ&aacute;m &ldquo;chất ph&aacute;t ngất&rdquo; trong một kh&ocirc;ng gian mua sắm mới tinh, đầy &ldquo;chất trẻ&rdquo; v&agrave; một &ldquo;khuyến m&atilde;i khai trương cực chất&rdquo; cho h&egrave; th&ecirc;m rực rỡ&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f6d/1/16/2600.png\" style=\"height:16px; width:16px\" />☀️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fee/1/16/2601.png\" style=\"height:16px; width:16px\" />☁️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fec/1/16/1f334.png\" style=\"height:16px; width:16px\" />????<br />\r\n<a href=\"https://www.facebook.com/hashtag/tag?source=feed_text\">#TAG</a>&nbsp;ngay c&aacute;i đứa m&agrave; bạn muốn n&oacute; đi &ldquo;hẹn h&ograve;&rdquo; với m&igrave;nh ngay nh&eacute;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f0/1/16/1f60b.png\" style=\"height:16px; width:16px\" />????<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f0/1/16/1f60b.png\" style=\"height:16px; width:16px\" />????<br />\r\n<a href=\"https://www.facebook.com/hashtag/totoshop?source=feed_text\">#totoshop</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/khaitr%C6%B0%C6%A1ng?source=feed_text\">#khaitrương</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/opening?source=feed_text\">#opening</a>&nbsp;<u><a href=\"https://www.facebook.com/hashtag/b%E1%BA%BFntre?source=feed_text\">#b</a>&igrave;nhdương</u></p>\r\n', '', ''),
(10, '<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fab/1/16/1f3ee.png\" style=\"height:16px; width:16px\" />Trung Thu N&agrave;y...<br />\r\n<a href=\"https://www.facebook.com/hashtag/tr%C3%BAng_th%E1%BB%8F_l%C4%A9nh_th%C6%B0%E1%BB%9Fng?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">TR&Uacute;NG THỎ LĨNH THƯỞNG</a>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fd3/1/16/1f407.png\" style=\"height:16px; width:16px\" /><br />\r\n<a href=\"https://www.facebook.com/hashtag/chia_%C4%91%C3%B4i_h%C3%B3a_%C4%91%C6%A1n?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">CHIA Đ&Ocirc;I H&Oacute;A ĐƠN</a>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f20/1/16/2b07.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />️%<br />\r\nC&ugrave;ng&nbsp;<a href=\"https://www.facebook.com/hashtag/totoshop?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">#TOTOSHOP</a>&nbsp;Kh&ocirc;ng N&agrave;o<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fec/1/16/2049.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"trúng thỏ lĩnh thưởng, chia đổi hóa đơn\" src=\"http://cdn.nhanh.vn/cdn/store/7136/artCT/37900/coverfb.png\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f29/1/16/1f430.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fae/1/16/1f5ef.png\" style=\"height:16px; width:16px\" />&nbsp;<strong>Hướng Dẫn Tham Gia</strong><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f51/1/16/2714.png\" style=\"height:16px; width:16px\" />&nbsp;Đến ngay cửa h&agrave;ng Totoshop gần nhất, thỏa th&iacute;ch rinh h&agrave;ng loạt item &ldquo;cực hot&rdquo; l&ecirc;n đồ đ&oacute;n Trung Thu &ldquo;cực chất&rdquo;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f51/1/16/2714.png\" style=\"height:16px; width:16px\" />&nbsp;T&iacute;nh tiền &gt;= 500k tham gia v&ograve;ng quay &ldquo;Tr&uacute;ng Thỏ Lĩnh Thưởng&rdquo;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f51/1/16/2714.png\" style=\"height:16px; width:16px\" />&nbsp;Khởi động cổ tay, tập trung to&agrave;n lực nhắm tr&uacute;ng &ocirc; Thỏ Trắng &ldquo;Chia Đ&ocirc;i H&oacute;a Đơn&rdquo;<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f51/1/16/2714.png\" style=\"height:16px; width:16px\" />&nbsp;Chờ đợi v&ograve;ng quay kết th&uacute;c để&nbsp;<a href=\"https://www.facebook.com/hashtag/l%C4%A9nhth%C6%B0%E1%BB%9Fng?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">#LĩnhThưởng</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/chia%C4%91%C3%B4ih%C3%B3a%C4%91%C6%A1n?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">#ChiaĐ&ocirc;iH&oacute;aĐơn</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/gi%E1%BA%A3m?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">#Giảm</a>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f5b/1/16/30_20e3.png\" style=\"height:16px; width:16px\" />️% tr&ecirc;n tổng Bill hoặc voucher mua h&agrave;ng 100k, 50k c&ugrave;ng nhiều ưu đ&atilde;i giảm gi&aacute; 10%, 5%, 20k, 10k&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/fbd/1/16/1f4a2.png\" style=\"height:16px; width:16px\" />&nbsp;<strong>Thời gian tham gia:</strong>&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f7a/1/16/31_20e3.png\" style=\"height:16px; width:16px\" />️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f15/1/16/36_20e3.png\" style=\"height:16px; width:16px\" />/️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f72/1/16/39_20e3.png\" style=\"height:16px; width:16px\" />-️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f99/1/16/32_20e3.png\" style=\"height:16px; width:16px\" />️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff6/1/16/35_20e3.png\" style=\"height:16px; width:16px\" />️/<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f72/1/16/39_20e3.png\" style=\"height:16px; width:16px\" /><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f3c/1/16/1f4a1.png\" style=\"height:16px; width:16px\" />&nbsp;<strong>Mẹo tham gia:</strong>&nbsp;<a href=\"https://www.facebook.com/hashtag/tag?source=feed_text&amp;__xts__%5B0%5D=68.ARDskNwwc6CGvYbdWn8F7dhmN1P67Ai9kqWCPZ2Efe98QN-AxpZnkITTrEcqOiD3I3HEQEKSJ9cLrd4DUek5n1WHod39SDV-uSiDeA9c6ZtuFXDL0K-Ps63Pn8jlQ7IG7ojZE2QZxCe_Ujff31drI2_c7l7ggISuwFO89GuHve4Y9-LtCO34zA&amp;__tn__=%2ANK-R\">#TAG</a>&nbsp;rủ r&ecirc; đồng bọn tham gia, c&agrave;ng nhiều người tham gia, khả năng Chia Đ&ocirc;i H&oacute;a Đơn c&agrave;ng cao, chơi c&agrave;ng vui v&agrave; mua đồ c&agrave;ng rẻ&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2/1/16/1f60d.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f2/1/16/1f60d.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>║<strong>Hẹn Trung Thu sum vầy b&ecirc;n bạn</strong>.&nbsp;<br />\r\n║<strong>Hẹn TOTO ng&agrave;y chia đ&ocirc;i H&oacute;a Đơn</strong>&nbsp;nh&eacute;&nbsp;<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/feb/1/16/2763.png\" style=\"height:16px; width:16px\" /><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/feb/1/16/2763.png\" style=\"height:16px; width:16px\" /><br />\r\n-----------------<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/2716.png\" style=\"height:16px; width:16px\" />&nbsp;Chương tr&igrave;nh kh&ocirc;ng &aacute;p dụng Online<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/2716.png\" style=\"height:16px; width:16px\" />&nbsp;Kh&ocirc;ng &aacute;p dụng chung với Thẻ VIP v&agrave; c&aacute;c CTKM kh&aacute;c (nếu c&oacute;)</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f53/1/16/2716.png\" style=\"height:16px; width:16px\" />&nbsp;Giảm tối đa 250k/H&oacute;a đơn</p>\r\n\r\n<p><em>Lưu &yacute;: Kh&aacute;ch VIP tham gia v&ograve;ng quay, nếu quay tr&uacute;ng &ocirc; giảm gi&aacute; thấp hơn mức chiết khấu VIP th&igrave; giữ nguy&ecirc;n mức ưu đ&atilde;i VIP của Kh&aacute;ch.</em><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />Hotline: 0938.803.633<br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />Than phiền/Khiếu nại:&nbsp;<a href=\"https://bit.ly/ToToCSKH\" target=\"_blank\">http://bit.ly/ToToCSKH</a><br />\r\n<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f4c/1/16/25aa.png\" style=\"height:16px; width:16px\" />Hệ thống cửa h&agrave;ng:&nbsp;<a href=\"https://bit.ly/HeThongToTo\" target=\"_blank\">http://bit.ly/HeThongToTo</a></p>\r\n\r\n<p>&quot;&gt;</p>\r\n', '<p>TR&Uacute;NG THỦ LĨNH CHIA Đ&Ocirc;I H&Oacute;A ĐƠN</p>\r\n', '<p><img src=\"http://cdn.nhanh.vn/cdn/store/7136/art/article_1536725331_581.png\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `id_cuahang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_cuahang`) VALUES
(1, 'vohoai', 12345, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cuahang`
--
ALTER TABLE `cuahang`
  ADD PRIMARY KEY (`id_cuahang`);

--
-- Chỉ mục cho bảng `ds_size`
--
ALTER TABLE `ds_size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`id_huyen`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `kho_sp`
--
ALTER TABLE `kho_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_image`
--
ALTER TABLE `list_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`id_tinh`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cuahang`
--
ALTER TABLE `cuahang`
  MODIFY `id_cuahang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ds_size`
--
ALTER TABLE `ds_size`
  MODIFY `id_size` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `huyen`
--
ALTER TABLE `huyen`
  MODIFY `id_huyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kho_sp`
--
ALTER TABLE `kho_sp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `list_image`
--
ALTER TABLE `list_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT cho bảng `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tinh`
--
ALTER TABLE `tinh`
  MODIFY `id_tinh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
