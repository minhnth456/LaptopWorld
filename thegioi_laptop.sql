-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 10:57 AM
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
-- Cơ sở dữ liệu: `thegioi_laptop`
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
(32, '2896_2277_nitro_5_2020.png', 30),
(44, 'Frame 18.png', 34),
(49, '2803_2.png', 34),
(50, '2803_3.png', 34),
(51, '2803_4.png', 34),
(52, '2803_6.png', 34),
(58, 'm18r1.jpg', 32),
(60, '3116_dell_alienware_m18_r1_laptopaz_2.jpg', 32),
(61, '3116_dell_alienware_m18_r1_laptopaz_3.jpg', 32),
(62, '3116_dell_alienware_m18_r1_laptopaz_4.jpg', 32),
(63, '3116_dell_alienware_m18_r1_laptopaz_5.jpg', 32),
(64, '3087_2434_laptopaz_lenovo_ideapad_5_pro_14ach_1.jpg', 35),
(65, '3087_2434_laptopaz_lenovo_ideapad_5_pro_14ach_2.jpg', 35),
(66, '3087_s_l960__5_.jpg', 35),
(67, '3087_s_l960__4_.jpg', 35),
(68, '3087_s_l960__6_.jpg', 35),
(69, '3087_s_l960__11_.jpg', 35),
(70, '2759_2719_1.png', 36),
(71, '2759_2719_7.png', 36),
(72, '2759_2719_6.png', 36),
(73, '2759_2719_5.png', 36),
(74, '2759_2719_3.png', 36),
(75, '2759_2719_2.png', 36),
(77, '2324_laptopaz_asus_tuf_f15_fx506lh_hn188w_1.jpg', 37),
(78, '2324_5.jpg', 37),
(79, '2324_4.jpg', 37),
(80, '2324_3.jpg', 37),
(81, '2324_2.jpg', 37),
(82, '2324_1.jpg', 37),
(83, '2331_laptopaz_asus_vivobook_15_r565ea_uh31t_1.jpg', 38),
(84, '2331_16.jpg', 38),
(85, '2331_14.jpg', 38),
(86, '2331_13.jpg', 38),
(87, '2331_11.jpg', 38),
(88, 'Frame 19.png', 39),
(89, '1848_asus_vivobook_s433ea_eb100t_i5_1_1_.jpg', 39),
(90, '1848_asus_vivobook_s433ea_eb100t_i5_1_3_.jpg', 39),
(91, '1848_6948_asus_vivobook_s14_s433ea_eb100t_1.jpg', 39),
(92, '1848_6948_asus_vivobook_s14_s433ea_eb100t_4.jpg', 39),
(93, '1848_6948_asus_vivobook_s14_s433ea_eb100t_3.jpg', 39),
(94, '2896_2277_6.jpg', 30),
(95, '2896_2277_5.jpg', 30),
(96, '2896_2277_4.jpg', 30),
(97, '2896_2277_3.jpg', 30),
(98, '2896_2277_2.jpg', 30),
(99, '2932_hp_omen_2023_laptopaz_0.jpg', 40),
(100, '2301_laptopaz_hp_omen_16_b0013dx_1.jpg', 41),
(101, '2301_34.jpg', 41),
(102, '2301_33.jpg', 41),
(103, '2301_32.jpg', 41),
(104, '2301_31.jpg', 41),
(105, '2932_hp_omen_2023_laptopaz_5.png', 40),
(106, '2932_hp_omen_2023_laptopaz_4.png', 40),
(107, '2932_hp_omen_2023_laptopaz_3.png', 40),
(108, '2932_hp_omen_2023_laptopaz_2.png', 40),
(109, '2932_hp_omen_2023_laptopaz_1.png', 40),
(110, '2835_1.png', 42),
(111, '2835_2.png', 42),
(112, '2835_5.png', 42),
(113, '2835_7.png', 42),
(114, '2835_6.png', 42),
(115, '2194_laptopaz_hp_envy_x360_13_bd0063dx_1.jpg', 43),
(116, '2194_6.jpg', 43),
(117, '2194_5.jpg', 43),
(118, '2194_3.jpg', 43),
(119, '2194_2.jpg', 43),
(130, '2018_acer_aspire_a515_56_51ae_core_i5_sua_bo_vien.png', 46),
(131, '2018_5_s.jpg', 46),
(132, '2018_2s.jpg', 46),
(133, '2018_1.jpeg', 46),
(134, '2018_1_s.jpg', 46);

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
(6, 'abc xyz', 28, '12:47 21-11-2023', 4),
(7, 'alo', 30, '12:56 25-11-2023', 4),
(8, 'laptop gia re qua', 28, '13:24 25-11-2023', 2);

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
(23, 'Lenovo ThinkPad', 3),
(24, 'Asus TUF', 4),
(25, 'Asus Vivobook', 4);

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

--
-- Đang đổ dữ liệu cho bảng `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`id_ctgiohang`, `img_spct`, `tensp`, `giasp`, `giasp2`, `soluong`, `total`, `total_vn`, `id_pro`, `id_chitiet`, `id_giohang`) VALUES
(136, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5 - 5600U, 16GB, 512GB, RTX 1650Ti)', '17.900.000', 17900000.00, 1, 17900000.00, '17.900.000', 28, 12, 52);

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
  `id_dmc` int(11) DEFAULT NULL,
  `id_chitiet` int(11) DEFAULT NULL,
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id_cthoadon`, `img_sp`, `tensp`, `giasp`, `giasp2`, `soluong`, `total`, `total_vn`, `id_dmc`, `id_chitiet`, `id_hoadon`) VALUES
(50, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 1, 9890000.00, '9.890.000', 2, 19, 34),
(51, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i5-1135G7, 8G, 256G, Iris Xe Graphics)', '7.890.000', 7890000.00, 3, 23670000.00, '23.670.000', 2, 14, 34),
(52, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 1, 21980000.00, '21.980.000', 1, 20, 35),
(53, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 7-7800U, 32G, 2T, RTX 4050Ti)', '25.890.000', 25890000.00, 1, 25890000.00, '25.890.000', 1, 22, 35),
(54, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 2, 43960000.00, '43.960.000', 1, 20, 36),
(55, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 2, 19780000.00, '19.780.000', 2, 21, 37),
(56, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5-7500U, 32G, 1T, RTX 2050)', '1.200', 1200.00, 1, 1200.00, '1.200', 1, 13, 38),
(57, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 1, 9890000.00, '9.890.000', 2, 19, 39),
(58, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5-5600U, 16G, 512G, RTX 1650Ti)', '17.900.000', 17900000.00, 1, 17900000.00, '17.900.000', 1, 12, 40),
(59, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 7-7800U, 32G, 2T, RTX 4050Ti)', '25.890.000', 25890000.00, 2, 51780000.00, '51.780.000', 1, 22, 41),
(60, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 2, 21, 42),
(61, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 7-7800U, 32G, 2T, RTX 4050Ti)', '25.890.000', 25890000.00, 2, 51780000.00, '51.780.000', 1, 22, 43),
(62, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i5-1135G7, 8G, 256G, Iris Xe Graphics)', '7.890.000', 7890000.00, 1, 7890000.00, '7.890.000', 2, 14, 44),
(63, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 7-7800U, 32G, 2T, RTX 4050Ti)', '25.890.000', 25890000.00, 2, 51780000.00, '51.780.000', 1, 22, 45),
(64, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 3, 65940000.00, '65.940.000', 1, 20, 46),
(65, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 AN515-58-56HM (Ryzen 5-5600U, 16G, 512G, RTX 1650Ti)', '17.900.000', 17900000.00, 1, 17900000.00, '17.900.000', 1, 12, 47),
(66, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 2, 19, 48),
(67, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i5-1135G7, 8G, 256G, Iris Xe Graphics)', '7.890.000', 7890000.00, 1, 7890000.00, '7.890.000', 2, 14, 49),
(76, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 1, 21980000.00, '21.980.000', 1, 20, 57),
(77, 'aspire6.jpg', '[New Outlet] Acer Aspire 5 A515-56T-55FB (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 3, 29670000.00, '29.670.000', 2, 19, 58),
(78, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 2, 43960000.00, '43.960.000', 1, 20, 59),
(79, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 2, 19780000.00, '19.780.000', 2, 21, 60),
(80, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16G, 512G, RTX 3050Ti)', '21.980.000', 21980000.00, 2, 43960000.00, '43.960.000', 1, 20, 61),
(81, 'nitro1.jpg', '[New Outlet] Acer Nitro 5 Pro (Core i3-1135G7, 16G, 512G, Iris Xe Graphics)', '9.890.000', 9890000.00, 2, 19780000.00, '19.780.000', 2, 21, 62),
(82, '2896_2277_nitro_5_2020.png', '[New Outlet] Acer Nitro 5 Pro (Ryzen 5-5600U, 16GB, 512GB, RTX 3050Ti)', '21.980.000', 21980000.00, 1, 21980000.00, '21.980.000', 1, 20, 63),
(83, '2932_hp_omen_2023_laptopaz_0.jpg', '[New Outlet] HP Omen 16 2023 (Core i7 - 13620H, 16GB, 1TB, RTX 4050 6GB)', '27.990.000', 27990000.00, 1, 27990000.00, '27.990.000', 7, 44, 64);

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
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `id_pro` int(11) NOT NULL,
  `id_dmc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_sanpham`
--

INSERT INTO `chitiet_sanpham` (`id_chitiet`, `cpu`, `ram`, `ssd`, `giasp`, `giasp2`, `soluong`, `cardVGA`, `luotxem`, `id_pro`, `id_dmc`) VALUES
(11, 'Core i5 - 12500H', '4GB', '256GB', '21.590.000', 21590000.00, 2, 'RTX 4050', 6, 28, 1),
(12, 'Ryzen 5 - 5600U', '16GB', '512GB', '17.900.000', 17900000.00, 1, 'RTX 1650Ti', 31, 28, 1),
(14, 'Core i5 - 1135G7', '8GB', '256GB', '7.890.000', 7890000.00, 5, 'Iris Xe Graphics', 18, 29, 2),
(19, 'Core i3 - 1135G7', '16GB', '512GB', '9.890.000', 9890000.00, 1, 'Iris Xe Graphics', 12, 29, 2),
(20, 'Ryzen 5 - 5600U', '16GB', '512GB', '21.980.000', 21980000.00, 1, 'RTX 3050Ti', 44, 30, 1),
(21, 'Core i3 - 1135G7', '16GB', '512GB', '9.890.000', 9890000.00, 2, 'Iris Xe Graphics', 7, 30, 1),
(22, 'Ryzen 7 - 7800U', '32GB', '2TB', '25.890.000', 25890000.00, 3, 'RTX 4050Ti', 8, 30, 1),
(25, 'Ryzen 7 - 5800H', '16GB', '256GB', '45.990.000', 45990000.00, 2, 'RTX 3060', 6, 32, 3),
(29, 'Core i7 - 1255U', '8GB', '512GB', '22.990.000', 22990000.00, 3, 'MX550 2GB', 5, 34, 4),
(30, 'Ryzen 5 - 3500U', '8GB', '256GB', '15.890.000', 15890000.00, 3, 'Radeon Graphics', 3, 34, 4),
(31, 'Core i3 - 1115G4', '8GB', '256GB', '9.890.000', 9890000.00, 5, 'Iris Xe Graphics', 2, 34, 4),
(32, 'Core i9 - 13900HX', '64GB', '2TB', '85.990.000', 85990000.00, 4, 'RTX 4090', 14, 32, 3),
(33, 'Ryzen 5 - 5600U', '16GB', '512GB', '14.890.000', 14890000.00, 3, 'Radeon Graphics', 2, 35, 5),
(34, 'Ryzen 5 PRO 4650U', '16GB', '256GB', '17.890.000', 17890000.00, 3, 'Radeon Graphics', 3, 35, 5),
(35, 'Core i5 - 12600HX', '16GB', '256GB', '38.000.000', 38000000.00, 2, 'RTX A1000 4GB', 3, 36, 23),
(36, 'Core i7 - 12850HX', '32GB', '512GB', '43.890.000', 43890000.00, 4, 'RTX A2000 8GB', 5, 36, 23),
(37, 'Core i5 - 11400H', '8GB', '512GB', '16.890.000', 16890000.00, 6, 'RTX 2050', 3, 37, 24),
(38, 'Core i7 - 11800H', '16GB', '512GB', '20.890.000', 20890000.00, 2, 'RTX 3060', 0, 37, 24),
(39, 'Core i7 - 12700H', '16GB', '1TB', '25.990.000', 25990000.00, 2, 'RTX 3060', 0, 37, 24),
(40, 'Core i3 - 1115G4', '4GB', '128GB', '12.490.000', 12490000.00, 12, 'Intel UHD Graphics', 2, 38, 25),
(41, 'Ryzen 7 - 4700U', '8GB', '512GB', '17.490.000', 17490000.00, 3, 'Radeon Graphics', 0, 38, 25),
(42, 'Core i5 - 1135G7', '8GB', '512GB', '13.490.000', 13490000.00, 3, 'Iris Xe Graphics', 4, 39, 25),
(43, 'Core i5 - 13420H', '16GB', '512GB', '26.490.000', 26490000.00, 4, 'RTX 4050', 0, 40, 7),
(44, 'Core i7 - 13620H', '16GB', '1TB', '27.990.000', 27990000.00, 2, 'RTX 4050', 4, 40, 7),
(45, 'Core i9 - 13900HX', '16GB', '1TB', '31.290.000', 31290000.00, 4, 'RTX 4060', 0, 40, 7),
(46, 'Core i7 - 11800H', '16GB', '1TB', '25.490.000', 25490000.00, 3, 'RTX 3070', 1, 41, 7),
(47, 'Core i7 - 11800H', '16GB', '512GB', '23.190.000', 23190000.00, 3, 'RTX 3060', 0, 41, 7),
(48, 'Core i5 - 1335U', '8GB', '512GB', '14.290.000', 14290000.00, 3, 'Iris Xe Graphics', 12, 42, 8),
(49, 'Ryzen 5 - 7530U', '8GB', '256GB', '13.890.000', 13890000.00, 4, 'Radeon Graphics', 3, 42, 8),
(50, 'Core i7 - 1250U', '8GB', '512GB', '15.890.000', 15890000.00, 2, 'Iris Xe Graphics', 1, 42, 8),
(51, 'Core i5 - 1135G7', '8GB', '256GB', '14.490.000', 14490000.00, 7, 'Iris Xe Graphics', 0, 43, 8),
(60, 'Core i5 - 1235U', '8GB', '256GB', '8.490.000', 8490000.00, 2, 'Iris Xe Graphics', 0, 46, 2);

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
(9, 'HP');

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
(18, 9890000.00, '9.890.000', NULL, 1, 4),
(47, 51780000.00, '51.780.000', NULL, 1, 3),
(50, 27990000.00, '27.990.000', NULL, 1, 2),
(51, 43960000.00, '43.960.000', NULL, 1, 84),
(52, 17900000.00, '17.900.000', NULL, 1, 1),
(53, 43960000.00, '43.960.000', NULL, 1, 85),
(54, 19780000.00, '19.780.000', NULL, 1, 86);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `nn_name` varchar(255) NOT NULL,
  `nn_address` varchar(255) NOT NULL,
  `nn_tel` varchar(250) NOT NULL,
  `nn_email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `date5` varchar(255) DEFAULT NULL,
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

INSERT INTO `hoadon` (`id_hoadon`, `nn_name`, `nn_address`, `nn_tel`, `nn_email`, `date`, `date2`, `date3`, `date4`, `date5`, `trangthai`, `pttt`, `tongtien`, `tongtien_vn`, `ghichu`, `id_user`) VALUES
(34, 'hoangminh', 'me tri ha noi', '090909009', 'hoangminh@gmail.com', '14:18 28-11-2023', '16:08 28-11-2023', '16:08 28-11-2023', '17:45 30-11-2023', '2023-01-25', 4, 1, 33560000.00, '33.560.000', 'test id dmc va id chi tiet', 2),
(35, 'hia', 'ha noi', '091039013', 'hai@gmail.com', '14:42 28-11-2023', '16:08 28-11-2023', '16:08 28-11-2023', '17:45 30-11-2023', '2023-04-24', 4, 1, 47870000.00, '47.870.000', '', 4),
(36, 'van hai', 'ha noi', '0989898753', 'hai@gmail.com', '18:20 28-11-2023', '18:21 28-11-2023', '18:21 28-11-2023', '17:45 30-11-2023', '2023-02-23', 4, 1, 43960000.00, '43.960.000', '', 4),
(37, 'luong', 'ha noi', '0102392323', 'luong@gmail.com', '13:26 30-11-2023', '13:26 30-11-2023', '13:27 30-11-2023', '17:45 30-11-2023', '2023-12-2', 4, 1, 19780000.00, '19.780.000', 'hang ngon', 2),
(38, 'luong', 'ha noi', '0102392323', 'luong@gmail.com', '15:26 30-11-2023', '15:27 30-11-2023', '15:27 30-11-2023', '17:45 30-11-2023', '2023-11-4', 4, 1, 1200.00, '1.200', 'dep nna', 4),
(39, 'luong', 'ha noi', '0102392323', 'luong@gmail.com', '18:17 30-11-2023', '18:18 30-11-2023', '18:18 30-11-2023', '18:18 30-11-2023', '2023-03-12', 4, 1, 9890000.00, '9.890.000', 'adu tang tit', 4),
(40, 'minh', 'ha noi', '0909090099', 'minh@gmail.com', '20:51 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '2023-05-18', 4, 1, 17900000.00, '17.900.000', '', 3),
(41, 'minh', '230 me tri', '0909090909', 'minh@gmail.com', '20:51 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '2023-06-24', 4, 1, 51780000.00, '51.780.000', '', 3),
(42, 'vanhai', 'me tri ha noi', '0963987818', 'minhnthph33626@fpt.edu.vn', '20:51 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '2023-07-13', 4, 1, 29670000.00, '29.670.000', '', 3),
(43, 'minh', '230 me tri', '0909090909', 'minh@gmail.com', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '2023-08-15', 4, 1, 51780000.00, '51.780.000', '', 3),
(44, 'minh', 'ha noi', '0963987818', 'vanhai@gmail.com', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '20:52 30-11-2023', '2023-09-02', 4, 1, 7890000.00, '7.890.000', '', 3),
(45, 'minh', '230 me tri', '0909090909', 'minh@gmail.com', '20:52 30-11-2023', '20:53 30-11-2023', '20:53 30-11-2023', '20:53 30-11-2023', '2023-10-10', 4, 1, 51780000.00, '51.780.000', '', 3),
(46, 'minh', 'ha noi', '0963987818', 'xinphepgiauten456@gmail.com', '09:50 01-12-2023', '09:51 01-12-2023', '14:25 01-12-2023', '14:25 01-12-2023', '2023-01-10', 4, 1, 65940000.00, '65.940.000', '', 2),
(47, 'minh', 'ha noi', '0909090099', 'minh@gmail.com', '18:55 01-12-2023', '18:56 01-12-2023', '18:56 01-12-2023', '18:56 01-12-2023', '2023-07-24', 4, 1, 17900000.00, '17.900.000', '', 2),
(48, 'vanhai', 'me tri ha noi', '0963987818', 'minhnthph33626@fpt.edu.vn', '18:55 01-12-2023', '18:56 01-12-2023', '18:56 01-12-2023', '18:56 01-12-2023', '2023-07-26', 4, 1, 29670000.00, '29.670.000', '', 2),
(49, 'minh', 'ha noi', '0963987818', 'vanhai@gmail.com', '19:01 01-12-2023', '19:02 01-12-2023', '19:02 01-12-2023', '19:02 01-12-2023', '2023-01-01', 4, 1, 7890000.00, '7.890.000', '', 2),
(57, 'minh', 'ha noi', '0963987818', 'xinphepgiauten456@gmail.com', '23:51 01-12-2023', '23:52 01-12-2023', '23:52 01-12-2023', '23:52 01-12-2023', '2023-11-29', 4, 1, 21980000.00, '21.980.000', '', 84),
(58, 'vanhai', 'me tri ha noi', '0963987818', 'minhnthph33626@fpt.edu.vn', '23:53 01-12-2023', '23:53 01-12-2023', '23:53 01-12-2023', '23:53 01-12-2023', '2023-12-01', 4, 1, 29670000.00, '29.670.000', '', 2),
(59, 'minh', 'ha noi', '0963987818', 'xinphepgiauten456@gmail.com', '11:52 02-12-2023', '11:53 02-12-2023', '11:53 02-12-2023', '11:53 02-12-2023', '2023-12-02', 4, 1, 43960000.00, '43.960.000', '', 84),
(60, 'vanhai', 'me tri ha noi', '0963987818', 'minhnthph33626@fpt.edu.vn', '12:47 02-12-2023', NULL, NULL, NULL, NULL, 1, 1, 19780000.00, '19.780.000', '', 1),
(61, 'minh', 'hanoi', '0909090099', 'minhhh@gmail.com', '12:47 02-12-2023', '12:51 02-12-2023', '12:51 02-12-2023', '13:06 02-12-2023', '2023-12-02', 4, 1, 43960000.00, '43.960.000', '', 85),
(62, 'hAI', 'HA NOI', '09230920323', 'HAI@GMAIL.COM', '13:24 02-12-2023', '13:26 02-12-2023', '13:26 02-12-2023', '13:27 02-12-2023', '2023-12-02', 4, 1, 19780000.00, '19.780.000', 'ha ', 86),
(63, 'minh', 'hanoi', '0963987818', 'vanhai@gmail.com', '13:25 05-12-2023', NULL, NULL, NULL, NULL, 0, 3, 21980000.00, '21.980.000', 'hang dep wa', 2),
(64, 'minh', 'HA NOI', '0963987818', 'minh@fpt.edu.vn', '13:28 05-12-2023', NULL, NULL, NULL, NULL, 0, 3, 27990000.00, '27.990.000', 'AVD Ư ', 2);

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
(10, 'Thanks !', '17:42 24-11-2023', 1, 4),
(11, 'alo cai gi', '12:56 25-11-2023', 4, 7),
(12, 'ban quan tam san pham nay a', '12:56 25-11-2023', 3, 7),
(13, 'Cam on quy khach', '13:25 25-11-2023', 1, 8),
(14, 'Cam on quy khac aj', '13:25 25-11-2023', 1, 6),
(15, 'Ngon', '16:57 07-12-2023', 2, 5);

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
(30, 'Acer Nitro 5 Pro', 0, 'LaptopGaming', 1),
(32, 'Dell Alienware M15 Ryzen Edition', 0, 'Nếu bạn là một tín đồ của Alienware thì chắn hẳn bạn không thể bỏ qua thông tin Alienware đã cho ra mắt Alienware M15 R5 Ryzen Edition – sản phẩm đầu tiên của công ty sở hữu APU Ryzen 5000 dòng H từ AMD. Hãy cùng LaptopWorld đi tìm hiểu chi tiết về chiếc máy này để xem sự thay đổi của nó sẽ làm chúng ta bất ngờ đến đâu?', 2),
(34, 'Dell Vostro 3420 V4I7310W1', 0, 'Nhắc đến các dòng laptop Ultrabook của Dell thì không thể không nhắc đến dòng Dell Vostro đình đám với thiết kế tinh tế, bền bỉ. Với xu hướng hiện nay các dòng laptop văn phòng đều hướng đến sự nhỏ gọn và yếu tố di động, Dell cho ra mắt Laptop Dell Vostro 3420 mang lại sự sang trọng và kèm theo đó là một cấu hình mạnh mẽ mà các laptop văn phòng trong cùng phân khúc phải dè chừng.', 2),
(35, 'Lenovo IdeaPad 5 Pro 14ACN6', 0, 'Nếu đang tìm kiếm một chiếc máy tính xách tay có thể phục vụ nhanh mượt mọi công việc thì máy tính Lenovo Ideapad 5 Pro là sự lựa chọn cực tốt trong tầm giá 15 triệu. Laptop Lenovo Ideapad 5 Pro là một sản phẩm “hoàn hảo\" từ thiết kế thông minh, tinh tế đến cấu hình mạnh mẽ của chip Ryzen 5, đáp ứng mọi nhu cầu cho bạn từ tác vụ văn phòng đến đồ họa chuyên nghiệp, giải trí, chơi game đơn giản, rất xứng đáng để bạn sở hữu ngay.', 3),
(36, 'Lenovo ThinkPad P16', 0, 'Khi nhu cầu di chuyển càng ngày càng nhiều, cần phải linh động hơn, thì dòng máy trạm đang được thiết kế ngày càng gọn gàng, nhẹ nhàng và tiện lợi hơn. Để giúp cho khách hàng có nhiều sự lựa chọn hơn thì Lenovo đã kết hợp những điểm nổi bật của dòng Thinkpad', 3),
(37, 'Asus TUF Gaming F15 FX506HF-HN014W', 0, 'Nếu bạn là một chiến binh thực thụ thì chắc chắn bạn sẽ không ngạc nhiên khi cho rằng chiếc laptop Asus TUF Gaming F15 FX506HF với CPU Intel Core i5-11400H và GPU GeForce RTX™ 2050 mới nhất là trợ thủ đắc lực và khó mà thể thay thế với khoản đầu tư trong phân khúc 18 triệu đồng. Hãy cùng LaptopWorld đi tìm hiểu chi tiết chiếc máy đang có độ \"Hot\" trong bài viết nhé!', 4),
(38, 'Asus Vivobook 15 R565EA-UH31T', 0, 'Laptop Asus Vivobook với trọng lượng 1.65kg được áp dụng lối thiết kế độc đáo, hơi hướng trẻ trung và cá tính. Kiểu dáng vô cùng sang trọng. Thiết kế này dường như đã làm nên một cuộc cách mạng trong thế hệ Z', 4),
(39, 'Asus VivoBook S14 S433EA-EB100T Trắng', 0, 'VivoBook S13/S14/S15 năm nay (S333/S433/S533) mang đến thiết kế trẻ trung, phản ánh những sắc màu cá tính độc đáo của Gen Z, đồng thời đáp ứng được yêu cầu về hiệu năng của một thiết bị công nghệ dành cho lối sống năng động của giới trẻ, giúp Gen Z tỏa sáng & trở thành tâm điểm.', 4),
(40, 'HP Omen 16 2023', 0, 'Khi nhắc đến những chiếc laptop gaming của nhà HP, không thể không nhắc đến dòng OMEN - dòng sản phẩm cực kỳ cao cấp và đáng chú ý. Năm 2023, HP Omen 16 vẫn tiếp tục được \"định vị\" là một chiếc laptop dành riêng cho game thủ, nhà thiết kế và những người sáng tạo. Với cấu hình mạnh mẽ và thiết kế tinh tế, dòng laptop này tiếp tục đáp ứng các yêu cầu cao cấp của những người dùng yêu thích công nghệ và đam mê sáng tạo.', 9),
(41, 'HP Omen 16', 0, 'Là một laptop Gaming,‌ ‌chiếc‌ ‌máy‌ ‌hướng‌ ‌tới‌ ‌đối‌ ‌tượng‌ ‌người‌ ‌dùng‌ ‌chơi‌ ‌game‌ ‌bán‌ ‌chuyên,‌ ‌cũng‌ ‌như‌ ‌những‌ ‌đối‌ ‌tượng‌ ‌thiết‌ ‌kế‌ ‌đồ‌ ‌họa‌ ‌với‌ ‌chi‌ ‌phí‌ ‌hợp lí.‌ ‌', 9),
(42, 'HP Envy x360 2023', 0, 'Bạn đang tìm kiếm một chiếc laptop có thể đáp ứng tốt đa dạng nhu cầu học tập, làm việc đa nhiệm với thiết kế sang trọng, lịch lãm nhưng vẫn sở hữu mức giá hợp lý? Thì đừng quên bỏ qua chiếc Laptop HP Envy x360 2023 đang được bày bán tại hệ thống các của hàng của LaptopWorld! Hãy đọc bài đánh giá của LaptopWorld để biết chi tiết và có cái nhìn khách quan về sản phẩm này nhé!', 9),
(43, 'HP Envy x360 13-bd0063dx', 0, 'HP Envy 13 là một trong những laptop được đánh giá cao trên thị trường, sở hữu tính năng tuyệt vời và giá cả phải chăng. Envy 13 với thiết kế cực gọn nhẹ là sự lựa chọn tốt cho sinh viên và người dùng phổ thông.', 9),
(46, 'Acer Aspire 3 A315-59-53ER', 0, 'Acer Aspire 3 sở hữu thiết kế nhỏ gọn, thân máy mỏng tuyệt đẹp, tối ưu hóa với phần khung được làm từ chất liệu nhựa đặc biệt vừa có sự bền bỉ mà còn nhẹ hơn nhiều so với khung kim loại. Với Aspire 3 bạn có thể làm việc ở bất kỳ đâu, chưa hết trên bề mặt laptop còn được phủ thêm một lớp bảo vệ khỏi những yếu tố bên ngoài môi trường. Bản lề công thái học giúp hút khí bổ sung bên dưới. Dòng laptop gọn nhẹ này phù hợp cho tất cả mọi người từ học sinh, sinh viên đến nhân viên văn phòng nhờ sự thân thiện, bền bỉ mà giá cả lại còn phải chăng.', 1);

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
(2, NULL, 'user', 'c6f7bcdb37f9dba782e8.jpg', 'user@gmail.com', '123', '', 0, 1),
(3, NULL, 'hoangminh2', 'user.png', 'hoangminh2@gmail.com', '123', NULL, NULL, 1),
(4, NULL, 'hai', 'user.png', 'vanhai@gmail.com', '123', NULL, NULL, 2),
(84, NULL, 'hoangminh', 'user.png', 'minhnth345@gmail.com', '123', '', 0, 1),
(85, NULL, 'minh2024', 'user.png', 'minhaiywgdiayd@gmail.com', '123', '', 0, 1),
(86, NULL, 'hai', 'user.png', 'hai@gmail.com', '1', '', 0, 1);

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
(45),
(46),
(47),
(48),
(49),
(50),
(51);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `chitiet_danhmuc`
--
ALTER TABLE `chitiet_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_ctgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `id_cthoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `chitiet_sanpham`
--
ALTER TABLE `chitiet_sanpham`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `rep_bl`
--
ALTER TABLE `rep_bl`
  MODIFY `id_repbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `taikhoan_clone`
--
ALTER TABLE `taikhoan_clone`
  MODIFY `id_clone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
