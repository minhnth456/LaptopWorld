-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 12:23 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sp`
--

CREATE TABLE `anh_sp` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id_ctgiohang` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` double(10,2) NOT NULL,
  `soluong` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `id_giohang` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_sanpham`
--

CREATE TABLE `chitiet_sanpham` (
  `id_chitiet` int(11) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ssd` varchar(255) NOT NULL,
  `giasp` double(10,2) NOT NULL,
  `soluong` int(11) NOT NULL,
  `cardVGA` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name`) VALUES
(1, 'Acer'),
(2, 'Dell'),
(3, 'Lenovo'),
(4, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `pttt` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `nn_name` varchar(255) NOT NULL,
  `nn_address` varchar(255) NOT NULL,
  `nn_tel` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 1,
  `id_giohang` int(11) NOT NULL,
  `id_ctgh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pro` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `yeuthich` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pro`, `tensp`, `yeuthich`, `id_dm`) VALUES
(1, 'labtop acer', 0, 1),
(2, 'Asus 5 ngon ', 0, 4),
(3, 'laptop acer5', 0, 1),
(4, 'Del 5', 0, 2),
(5, 'Labtop acer 5', 1, 1),
(6, 'Dell 3', 1, 2),
(7, 'lenovo 2', 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD KEY `fk_sp_img` (`id_pro`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `fk_tk_binhluan` (`id_pro`),
  ADD KEY `fk_tk_bl` (`id_user`);

--
-- Chỉ mục cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id_ctgiohang`),
  ADD KEY `fk_ctgh_gh` (`id_giohang`),
  ADD KEY `fk_ctgh_sp` (`id_pro`);

--
-- Chỉ mục cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD PRIMARY KEY (`id_chitiet`),
  ADD KEY `fk_ctsp_sp` (`id_pro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `fk_gh_user` (`id_user`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `fk_hd_ctgh` (`id_ctgh`),
  ADD KEY `fk_hd_gh` (`id_giohang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `fk_dm_sp` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_ctgiohang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD CONSTRAINT `fk_sp_img` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_sp_binhluan` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`),
  ADD CONSTRAINT `fk_tk_bl` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD CONSTRAINT `fk_ctgh_gh` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id_giohang`),
  ADD CONSTRAINT `fk_ctgh_sp` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`);

--
-- Các ràng buộc cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD CONSTRAINT `fk_ctsp_sp` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_gh_user` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd_ctgh` FOREIGN KEY (`id_ctgh`) REFERENCES `chitiet_giohang` (`id_ctgiohang`),
  ADD CONSTRAINT `fk_hd_gh` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id_giohang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_dm_sp` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;