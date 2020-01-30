-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 30, 2020 lúc 04:12 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `camdovip`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donglais`
--

CREATE TABLE `donglais` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tien_lai` float NOT NULL DEFAULT 0,
  `phi_khac` float NOT NULL DEFAULT 0,
  `ngay_tra` date NOT NULL,
  `trang_thai_tra_lai` int(11) NOT NULL DEFAULT 0 COMMENT '0 : chưa trả, 1 đã trả',
  `quanly_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donglais`
--

INSERT INTO `donglais` (`id`, `ho_ten`, `tien_lai`, `phi_khac`, `ngay_tra`, `trang_thai_tra_lai`, `quanly_id`, `user_id`, `created`, `modified`) VALUES
(172, 'lê tuấn bảo', 1000000, 0, '2020-01-16', 0, 112, 3, '2020-01-17 11:24:09', '2020-01-17 14:27:31'),
(173, 'lê tuấn bảo', 1000000, 0, '2020-01-26', 0, 112, 3, '2020-01-17 11:24:09', '2020-01-17 14:27:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `user_id`, `name_group`, `permission`, `created`, `modified`) VALUES
(4, 0, 'admin', 1, '2020-01-04 11:17:20', '2020-01-04 11:17:52'),
(5, 0, 'chủ cửa hàng', 2, '2020-01-04 11:17:28', '2020-01-04 11:17:28'),
(6, 0, 'Supper Admin', 0, '2020-01-04 11:17:34', '2020-01-04 11:17:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieudonglais`
--

CREATE TABLE `kieudonglais` (
  `id` int(11) NOT NULL,
  `ten_kieu_dong_lai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dang_lai` int(10) NOT NULL DEFAULT 0 COMMENT '0 : % , 1 : n',
  `tinh_lai` int(11) NOT NULL DEFAULT 0 COMMENT '0 ngày, 1 tuần, 2 tháng',
  `he_so` int(11) NOT NULL DEFAULT 1 COMMENT '0 không nhân theo tiền vay, 1 có nhân theo tiền vay',
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kieudonglais`
--

INSERT INTO `kieudonglais` (`id`, `ten_kieu_dong_lai`, `dang_lai`, `tinh_lai`, `he_so`, `user_id`, `created`, `modified`) VALUES
(1, 'Lãi/triệu/ngày ', 1, 0, 1, 3, '2020-01-06 11:45:15', '2020-01-09 14:43:05'),
(2, 'Lãi/Ngày ', 1, 0, 0, 3, '2020-01-06 11:45:45', '2020-01-14 12:05:33'),
(6, 'Lãi tuần(VND)', 1, 1, 0, 3, '2020-01-14 08:38:21', '2020-01-14 12:05:40'),
(7, 'Lãi tuần(%)', 0, 1, 1, 3, '2020-01-14 08:38:32', '2020-01-14 08:39:13'),
(8, 'Lãi tháng(VND)', 1, 2, 0, 3, '2020-01-14 08:49:56', '2020-01-14 12:05:54'),
(9, 'Lãi tháng(%)', 0, 2, 1, 3, '2020-01-14 08:50:18', '2020-01-14 08:50:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlys`
--

CREATE TABLE `quanlys` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_cmt` int(11) NOT NULL,
  `ngay_cap` date NOT NULL,
  `noi_cap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL DEFAULT 0 COMMENT '0 : đang vay; 1 quá hạn; 2 : trả hết ; 3 nợ xấu;',
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_bat_dau_vay` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `thoi_gian_ket_thuc_vay` date NOT NULL,
  `so_tien_vay` float NOT NULL,
  `lai_xuat_ngay` float NOT NULL,
  `kieudonglai_id` int(11) NOT NULL,
  `ky_dong_lai` int(255) NOT NULL,
  `kieu_ky_dong_lai` int(11) NOT NULL DEFAULT 0 COMMENT '0 ngày, 1 tuần , 2 tháng',
  `so_ngay_vay` int(11) NOT NULL COMMENT 'tổng số ngày vay',
  `kieu_dong_lai` int(11) DEFAULT 0 COMMENT '0 : truoc,1: sau',
  `giay_to_the_chap` text COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL,
  `ten_tai_san` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_khung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_may` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bien_so` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imei` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_tai_san` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taisan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlys`
--

INSERT INTO `quanlys` (`id`, `ho_ten`, `ngay_sinh`, `so_cmt`, `ngay_cap`, `noi_cap`, `dia_chi`, `sdt`, `tinh_trang`, `img`, `thoi_gian_bat_dau_vay`, `user_id`, `created`, `modified`, `thoi_gian_ket_thuc_vay`, `so_tien_vay`, `lai_xuat_ngay`, `kieudonglai_id`, `ky_dong_lai`, `kieu_ky_dong_lai`, `so_ngay_vay`, `kieu_dong_lai`, `giay_to_the_chap`, `ghi_chu`, `ten_tai_san`, `so_khung`, `so_may`, `bien_so`, `imei`, `mat_khau`, `img_tai_san`, `taisan_id`) VALUES
(112, 'lê tuấn bảo', '2020-01-17', 0, '2020-01-17', '', '', 987654123, 0, 'khonganh', '2020-01-06', 3, '2020-01-17 11:17:25', '2020-01-17 11:41:23', '2020-01-26', 20000000, 5000, 1, 10, 0, 20, 1, '', '', '', '', '', '', '', '', 'khonganh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taisans`
--

CREATE TABLE `taisans` (
  `id` int(11) NOT NULL,
  `loai_tai_san` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taisans`
--

INSERT INTO `taisans` (`id`, `loai_tai_san`, `user_id`, `created`, `modified`) VALUES
(1, '*** Không Chọn ***', 3, '2020-01-05 10:59:25', '2020-01-05 10:59:25'),
(2, 'Ô Tô', 3, '2020-01-06 13:24:03', '2020-01-06 13:24:03'),
(3, 'Điện Thoại', 3, '2020-01-06 13:25:31', '2020-01-06 13:25:31'),
(4, 'Máy Tính', 3, '2020-01-06 13:25:43', '2020-01-06 13:25:43'),
(5, 'Xe Máy', 3, '2020-01-06 13:36:20', '2020-01-06 13:36:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pd_mobile` int(4) NOT NULL,
  `ngay_het_han` date NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `link_mobile`, `pd_mobile`, `ngay_het_han`, `sdt`, `dia_chi`, `group_id`, `created`, `modified`) VALUES
(3, 'admin', '$2y$10$X2k6LTy0kbP25CHHglqX7uuU.KByJpoMsdyT/Et5YEqaeIWsrvkyu', 'admin', 1, '2020-01-04', 1, '1', 4, '2020-01-04 13:50:45', '2020-01-04 13:51:13'),
(4, 'test', '$2y$10$X2k6LTy0kbP25CHHglqX7uuU.KByJpoMsdyT/Et5YEqaeIWsrvkyu', 'test', 1234, '2020-01-04', 987654123, '213213', 5, '2020-01-04 14:21:34', '2020-01-04 14:21:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donglais`
--
ALTER TABLE `donglais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quanly_id` (`quanly_id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `kieudonglais`
--
ALTER TABLE `kieudonglais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `quanlys`
--
ALTER TABLE `quanlys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `taisan_id` (`taisan_id`);

--
-- Chỉ mục cho bảng `taisans`
--
ALTER TABLE `taisans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donglais`
--
ALTER TABLE `donglais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `kieudonglais`
--
ALTER TABLE `kieudonglais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `quanlys`
--
ALTER TABLE `quanlys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `taisans`
--
ALTER TABLE `taisans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
