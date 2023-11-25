-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2023 lúc 04:35 AM
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
-- Cơ sở dữ liệu: `laptopworld`
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

--
-- Đang đổ dữ liệu cho bảng `anh_sp`
--

INSERT INTO `anh_sp` (`id`, `img`, `id_pro`) VALUES
(17, 'nitro1.jpg', 28),
(18, 'nitro2.jpg', 28),
(19, 'nitro3.jpg', 28),
(20, 'nitro4.jpg', 28),
(21, 'nitro5.jpg', 28),
(22, 'aspire6.jpg', 29),
(27, 'aspire5.png', 29),
(28, 'aspire4.png', 29),
(29, 'aspire3.png', 29),
(30, 'aspire2.png', 29),
(32, 'nitro1.jpg', 30),
(33, 'nitro4.jpg', 30),
(34, 'nitro3.jpg', 30),
(35, 'nitro2.jpg', 30),
(36, 'nitro1.jpg', 30);

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

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `id_pro`, `ngaybinhluan`, `id_user`) VALUES
(4, 'Máy tính được đếy', 28, '09:40 21-11-2023', 2),
(5, 'Lap ngon chất lượng và được vệ sinh máy trọn đời nữa', 28, '09:49 21-11-2023', 3),
(6, 'abc xyz', 28, '12:47 21-11-2023', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_danhmuc`
--

CREATE TABLE `chitiet_danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_danhmuc`
--

INSERT INTO `chitiet_danhmuc` (`id`, `name`, `id_dm`) VALUES
(1, 'Acer Nitro', 1),
(2, 'Acer Aspire', 1),
(3, 'Dell Alienware', 2),
(4, 'Dell Vostro', 2),
(5, 'Lenovo Ideapad', 3),
(7, 'HP Omen', 9),
(8, 'HP Envy', 9),
(19, 'Dell con 1', 19),
(20, 'Dell con 2', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id_ctgiohang` int(11) NOT NULL,
  `img_spct` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` varchar(255) NOT NULL,
  `giasp2` double(12,2) NOT NULL,
  `soluong` int(11) NOT NULL,
  `total` double(12,2) DEFAULT NULL,
  `total_vn` varchar(255) DEFAULT NULL,
  `id_pro` int(11) NOT NULL,
  `id_chitiet` int(11) NOT NULL,
  `id_giohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `id_cthoadon` int(11) NOT NULL,
  `img_sp` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` varchar(255) NOT NULL,
  `giasp2` double(12,2) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `total` double(12,2) DEFAULT NULL,
  `total_vn` varchar(255) DEFAULT NULL,
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id_cthoadon`, `img_sp`, `tensp`, `giasp`, `giasp2`, `soluong`, `total`, `total_vn`, `id_hoadon`) VALUES
(17, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 2, 43960000.00, '43.960.000', 13),
(18, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 13),
(19, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 1, 9890000.00, '9.890.000', 14),
(20, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 15),
(30, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5-5600U, 16G, 512G, RTX 1650Ti)', '17.900.000', 17900000.00, 1, 17900000.00, '17.900.000', 22),
(31, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 5, 49450000.00, '49.450.000', 22),
(38, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5-5600U, 16G, 512G, RTX 1650Ti)', '17.900.000', 17900000.00, 2, 35800000.00, '35.800.000', 26),
(39, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_sanpham`
--

CREATE TABLE `chitiet_sanpham` (
  `id_chitiet` int(11) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ssd` varchar(255) NOT NULL,
  `giasp` varchar(255) NOT NULL,
  `giasp2` double(12,2) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `cardVGA` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_dmc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_sanpham`
--

INSERT INTO `chitiet_sanpham` (`id_chitiet`, `cpu`, `ram`, `ssd`, `giasp`, `giasp2`, `soluong`, `cardVGA`, `id_pro`, `id_dmc`) VALUES
(11, 'Core i5 - 12500H', '4G', '255G', '21.590.000', 21590000.00, 2, 'RTX 4050 6GB', 28, 1),
(12, 'Ryzen 5-5600U', '16G', '512G', '17.900.000', 17900000.00, 1, 'RTX 1650Ti', 28, 1),
(13, 'Ryzen 5-7500U', '32G', '1T', '1200', 1200.00, 1, 'RTX 2050', 28, 1),
(14, 'Core i5-1135G7', '8G', '256G', '7.890.000', 7890000.00, 5, 'Iris Xe Graphics', 29, 2),
(19, 'Core i3-1135G7', '16G', '512G', '9.890.000', 9890000.00, 1, 'Iris Xe Graphics', 29, 2),
(20, 'Ryzen 5-5600U', '16G', '512G', '21.980.000', 21980000.00, 1, 'RTX 3050Ti', 30, 1),
(21, 'Core i3-1135G7', '16G', '512G', '9.890.000', 9890000.00, 2, 'Iris Xe Graphics', 30, 2),
(22, 'Ryzen 7-7800U', '32G', '2T', '25.890.000', 25890000.00, 3, 'RTX 4050Ti', 30, 1);

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
(4, 'Asus'),
(9, 'HP'),
(19, 'Dell 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `tongtien` double(12,2) NOT NULL DEFAULT 0.00,
  `tongtien_vn` varchar(255) NOT NULL DEFAULT '0',
  `ghichu` varchar(255) DEFAULT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `tongtien`, `tongtien_vn`, `ghichu`, `pttt`, `id_user`) VALUES
(11, 0.00, '0', NULL, 1, 2),
(17, 7890000.00, '7.890.000', NULL, 1, 1),
(18, 27790000.00, '27.790.000', NULL, 1, 4),
(39, 0.00, '0', NULL, 1, 73),
(40, 61230000.00, '61.230.000', NULL, 1, 74),
(41, 0.00, '0', NULL, 1, 75),
(42, 0.00, '0', NULL, 1, 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `nn_name` varchar(255) NOT NULL,
  `nn_address` varchar(255) NOT NULL,
  `nn_tel` int(11) NOT NULL,
  `nn_email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 1,
  `pttt` tinyint(11) NOT NULL,
  `tongtien` double(12,2) DEFAULT NULL,
  `tongtien_vn` varchar(255) DEFAULT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `nn_name`, `nn_address`, `nn_tel`, `nn_email`, `date`, `trangthai`, `pttt`, `tongtien`, `tongtien_vn`, `ghichu`, `id_user`) VALUES
(13, 'minh', 'ha noi', 963987818, 'minh@gmail.com', '15:59 24-11-2023', 4, 1, 73630000.00, '73.630.000', 'lej lej', 1),
(14, 'minh', 'ha noi', 963987818, 'minh@gmail.com', '16:01 24-11-2023', 2, 1, 9890000.00, '9.890.000', 'mua thêm', 1),
(15, 'minh', 'ha noi', 963987818, 'minh@gmail.com', '16:08 24-11-2023', 0, 1, 29670000.00, '29.670.000', 'test', 1),
(22, 'minh', 'ha noi', 963987818, 'minh@gmail.com', '23:07 24-11-2023', 4, 1, 67350000.00, '67.350.000', 'minh mua tang vanhai ', 73),
(26, 'minh', 'ha noi', 963987818, 'minh@gmail.com', '10:09 25-11-2023', 2, 1, 65470000.00, '65.470.000', 'minh tặng thêm vanhai', 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rep_bl`
--

CREATE TABLE `rep_bl` (
  `id_repbl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rep_bl`
--

INSERT INTO `rep_bl` (`id_repbl`, `noi_dung`, `date`, `id_user`, `id_bl`) VALUES
(6, 'Hôm nay giảm giá đúng ko', '13:18 21-11-2023', 4, 5),
(7, 'nice!', '13:23 21-11-2023', 4, 4),
(8, 'tự trả lời', '13:23 21-11-2023', 4, 6),
(9, 'Lap ngon vậy sao?', '13:40 21-11-2023', 1, 5),
(10, 'Thanks !', '17:42 24-11-2023', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pro` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `yeuthich` int(11) NOT NULL,
  `mota` varchar(2555) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pro`, `tensp`, `yeuthich`, `mota`, `id_dm`) VALUES
(28, 'Acer Nitro 5 AN515-58-56HM', 0, 'Chiếc laptop Gaming Nitro 5 AN515-58 là chiếc laptop sở hữu cấu hình siêu khủng với với bộ CPU Intel Core i5 12500H Gen 12 mới nhất cùng card rời GeForce RTX 4050 6GB. Một miền đất đứa đối với các game thủ đúng không nào.', 1),
(29, 'Acer Aspire 5 A515-56T-55FB', 0, 'Thiết kế thanh lịch, tinh tế trong từng chi tiết với chất liệu kim loại sang trọng kết hợp cùng nhiều sự lựa chọn màu sắc, Aspire 5 hứa hẹn thể hiện đậm nét cá tính riêng dù bạn theo đuổi phong cách nào.', 1),
(30, 'Acer Nitro 5 Pro', 0, 'LaptopGaming', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `id_clone` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'user.png',
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `id_clone`, `name`, `img`, `email`, `pass`, `address`, `tel`, `role`) VALUES
(1, NULL, 'hoangMinh', 'user.png', 'minh@gmail.com', '24042004', '230 me tri', 123, 2),
(2, NULL, 'user', 'user.png', 'user@gmail.com', '123', '', 0, 1),
(3, NULL, 'hoangminh2', 'user.png', 'hoangminh2@gmail.com', '123', NULL, NULL, 1),
(4, NULL, 'vanhai', 'user.png', 'vanhai@gmail.com', '123', NULL, NULL, 1),
(73, 38, NULL, 'user.png', NULL, 'LaptopWorld', NULL, NULL, 1),
(74, 39, NULL, 'user.png', NULL, 'LaptopWorld', NULL, NULL, 1),
(75, 40, NULL, 'user.png', NULL, 'LaptopWorld', NULL, NULL, 1),
(76, 41, NULL, 'user.png', NULL, 'LaptopWorld', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_clone`
--

CREATE TABLE `taikhoan_clone` (
  `id_clone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan_clone`
--

INSERT INTO `taikhoan_clone` (`id_clone`) VALUES
(38),
(39),
(40),
(41);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_img` (`id_pro`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `fk_tk_binhluan` (`id_pro`),
  ADD KEY `fk_tk_bl` (`id_user`);

--
-- Chỉ mục cho bảng `chitiet_danhmuc`
--
ALTER TABLE `chitiet_danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dm_ctdm` (`id_dm`);

--
-- Chỉ mục cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id_ctgiohang`),
  ADD KEY `fk_ctgh_sp` (`id_pro`),
  ADD KEY `fk_ctgh_ctsp` (`id_chitiet`),
  ADD KEY `fk_ctgh_gh` (`id_giohang`);

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD PRIMARY KEY (`id_cthoadon`),
  ADD KEY `fk_hd_cthd` (`id_hoadon`);

--
-- Chỉ mục cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD PRIMARY KEY (`id_chitiet`),
  ADD KEY `fk_ctsp_sp` (`id_pro`),
  ADD KEY `fk_ctch_dmc` (`id_dmc`);

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
  ADD KEY `fk_hd_tk` (`id_user`);

--
-- Chỉ mục cho bảng `rep_bl`
--
ALTER TABLE `rep_bl`
  ADD PRIMARY KEY (`id_repbl`),
  ADD KEY `fk_repbl_bl` (`id_bl`),
  ADD KEY `fk_user_repbl` (`id_user`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_tk_tkcolne` (`id_clone`);

--
-- Chỉ mục cho bảng `taikhoan_clone`
--
ALTER TABLE `taikhoan_clone`
  ADD PRIMARY KEY (`id_clone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chitiet_danhmuc`
--
ALTER TABLE `chitiet_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_ctgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `id_cthoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `rep_bl`
--
ALTER TABLE `rep_bl`
  MODIFY `id_repbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `taikhoan_clone`
--
ALTER TABLE `taikhoan_clone`
  MODIFY `id_clone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- Các ràng buộc cho bảng `chitiet_danhmuc`
--
ALTER TABLE `chitiet_danhmuc`
  ADD CONSTRAINT `fk_dm_ctdm` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);

--
-- Các ràng buộc cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD CONSTRAINT `fk_ctgh_ctsp` FOREIGN KEY (`id_chitiet`) REFERENCES `chitiet_sanpham` (`id_chitiet`),
  ADD CONSTRAINT `fk_ctgh_gh` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id_giohang`),
  ADD CONSTRAINT `fk_ctgh_sp` FOREIGN KEY (`id_pro`) REFERENCES `sanpham` (`id_pro`);

--
-- Các ràng buộc cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD CONSTRAINT `fk_hd_cthd` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id_hoadon`);

--
-- Các ràng buộc cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  ADD CONSTRAINT `fk_ctch_dmc` FOREIGN KEY (`id_dmc`) REFERENCES `chitiet_danhmuc` (`id`),
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
  ADD CONSTRAINT `fk_hd_tk` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `rep_bl`
--
ALTER TABLE `rep_bl`
  ADD CONSTRAINT `fk_repbl_bl` FOREIGN KEY (`id_bl`) REFERENCES `binhluan` (`id_bl`),
  ADD CONSTRAINT `fk_user_repbl` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_dm_sp` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_tk_tkcolne` FOREIGN KEY (`id_clone`) REFERENCES `taikhoan_clone` (`id_clone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
