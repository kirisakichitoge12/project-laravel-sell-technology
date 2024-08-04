-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2024 lúc 10:25 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `internship`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `state`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', 3, '2024-06-07 23:47:28', '2024-06-07 16:47:28'),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', 0, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', 0, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', 0, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'COD', 'e', 0, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(16, 16, '2024-06-04', 49780000, 'tiền mặt', '', 0, '2024-06-04 02:02:33', '2024-06-04 02:02:33'),
(17, 17, '2024-06-05', 45280000, 'tiền mặt', '', 0, '2024-06-04 17:58:17', '2024-06-04 17:58:17'),
(18, 18, '2024-06-08', 21490000, 'tiền mặt', '', 3, '2024-06-08 02:37:31', '2024-06-07 19:37:31'),
(19, 19, '2024-06-08', 7990000, 'tiền mặt', '', 1, '2024-06-08 02:36:54', '2024-06-07 19:36:54'),
(20, 20, '2024-06-08', 12180000, 'tiền mặt', '', 1, '2024-06-08 02:36:30', '2024-06-07 19:36:30'),
(21, 21, '2024-06-08', 32980000, 'tiền mặt', '', 0, '2024-06-07 21:39:38', '2024-06-07 21:39:38'),
(22, 22, '2024-06-13', 7990000, 'tiền mặt', '', 0, '2024-06-12 22:59:55', '2024-06-12 22:59:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(19, 16, 1, 1, 24990000, '2024-06-04 02:02:33', '2024-06-04 02:02:33'),
(20, 16, 2, 1, 24790000, '2024-06-04 02:02:33', '2024-06-04 02:02:33'),
(21, 17, 1, 4, 6247500, '2024-06-04 17:58:17', '2024-06-04 17:58:17'),
(22, 17, 6, 1, 20290000, '2024-06-04 17:58:17', '2024-06-04 17:58:17'),
(23, 18, 16, 5, 4298000, '2024-06-07 18:59:56', '2024-06-07 18:59:56'),
(24, 19, 11, 2, 7990000, '2024-06-07 19:09:57', '2024-06-07 19:09:57'),
(25, 20, 11, 3, 7990000, '2024-06-07 19:28:37', '2024-06-07 19:28:37'),
(26, 20, 26, 2, 4190000, '2024-06-07 19:28:37', '2024-06-07 19:28:37'),
(27, 21, 15, 1, 7990000, '2024-06-07 21:39:38', '2024-06-07 21:39:38'),
(28, 21, 1, 1, 24990000, '2024-06-07 21:39:38', '2024-06-07 21:39:38'),
(29, 22, 11, 2, 7990000, '2024-06-12 22:59:55', '2024-06-12 22:59:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL DEFAULT 'Vui lòng chuyển đúng hạn',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(15, 'ê', 'Nữ', 'huongnguyen@gmail.com', 'e', 'e', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(14, 'hhh', 'nam', 'huongnguyen@gmail.com', 'Lê thị riêng', '99999999999999999', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '23456789', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 'Khoa phạm', 'Nam', 'khoapham@gmail.com', 'Lê thị riêng', '1234567890', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', '234567890-', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(16, 'trường thinh', 'nam', 'truongthinhkv123@gmail.com', 'số 1 đường nguyễn văn a, Cao Lãnh, Đồng Tháp, Vietnam', '12345678', '', '2024-06-04 02:02:33', '2024-06-04 02:02:33'),
(17, 'trường thinh', 'nam', 'truongthinhkv123@gmail.com', 'số 1 đường nguyễn văn a, Cao Lãnh, Đồng Tháp, Vietnam', '12345678', '', '2024-06-04 17:58:17', '2024-06-04 17:58:17'),
(18, 'trường thinh', 'nam', 'hotruongthinhkv147@gmail.com', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', '086984507', '', '2024-06-07 18:59:56', '2024-06-07 18:59:56'),
(19, 'trường thinh', 'nam', 'hotruongthinhkv147@gmail.com', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', '086984507', '', '2024-06-07 19:09:57', '2024-06-07 19:09:57'),
(20, 'trường thinh', 'nam', 'hotruongthinhkv147@gmail.com', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', '086984507', '', '2024-06-07 19:28:37', '2024-06-07 19:28:37'),
(21, 'trường thinh', 'nam', 'hotruongthinhkv147@gmail.com', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', '086984507', '', '2024-06-07 21:39:38', '2024-06-07 21:39:38'),
(22, 'trường thinh', 'nam', 'hotruongthinhkv147@gmail.com', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', '086984507', '', '2024-06-12 22:59:55', '2024-06-12 22:59:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2017-03-11 06:20:23', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `trademark` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `new`, `trademark`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 15 Pro 128GB', 1, '- Chính hãng, Mới 100%, Nguyên seal\n- Màn hình: OLED Super Retina XDR\n- Camera sau: 48MP, 12MP\n- Camera trước: 12MP\n- CPU: Apple A17 Bionic\n- Bộ nhớ: 128GB\n- Hệ điều hành: iOS\n', 28990000, 24990000, 'img-product-1.jpg', 1, 'Apple', '2024-04-22 02:59:18', '2024-04-22 02:59:18'),
(2, 'iPhone 15 Pro 128GB', 1, '- Chính hãng, Mới 100%, Nguyên seal\n- Màn hình: OLED Super Retina XDR\n- Camera sau: 48MP, 12MP\n- Camera trước: 12MP\n- CPU: Apple A17 Bionic\n- Bộ nhớ: 128GB\n- Hệ điều hành: iOS\n', 28990000, 24790000, 'img-product-2.jpg', 1, 'Apple', '2024-04-22 03:45:41', '2024-04-22 03:45:41'),
(3, 'iPhone 15 Pro 128GB', 1, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: OLED Super Retina XDR\r\n- Camera sau: 48MP, 12MP\r\n- Camera trước: 12MP\r\n- CPU: Apple A17 Bionic\r\n- Bộ nhớ: 128GB\r\n- Hệ điều hành: iOS\r\n', 28990000, 24990000, 'img-product-3.jpg', 1, 'Apple', '2024-04-22 03:45:41', '2024-04-22 03:45:41'),
(4, 'iPhone 15 Plus 128GB', 1, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: OLED Super Retina XDR\r\n- Camera sau: 48MP, 12MP\r\n- Camera trước: 12MP\r\n- CPU: Apple A17 Bionic\r\n- Bộ nhớ: 128GB\r\n- Hệ điều hành: iOS\r\n', 28990000, 24990000, 'img-product-4.jpg', 1, 'Apple', '2024-04-22 03:45:41', '2024-04-22 03:45:41'),
(5, 'iPhone 15 Pro 128GB', 1, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: OLED Super Retina XDR\r\n- Camera sau: 48MP, 12MP\r\n- Camera trước: 12MP\r\n- CPU: Apple A17 Bionic\r\n- Bộ nhớ: 128GB\r\n- Hệ điều hành: iOS\r\n', 28990000, 24990000, 'img-product-5.jpg', 1, 'Apple', '2024-04-22 03:45:41', '2024-04-22 03:45:41'),
(6, 'iPad Pro 11 inch 2022 M2 Wifi 128GB', 2, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: 11\" Liquid Retina\r\n- Camera sau: 12MP, 10MP\r\n- Camera trước: 12MP\r\n- CPU: Apple M2\r\n- Bộ nhớ: 128GB\r\n- RAM: 8GB\r\n- Hệ điều hành: iPadOS\r\n', 23990000, 20290000, 'img-product-6.jpg', 1, 'Apple', '2024-04-22 04:20:26', '2024-04-22 04:20:26'),
(7, 'iPad Gen 10 10.9 inch 2022 Wifi 64GB', 2, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: 11\" Liquid Retina\r\n- Camera sau: 12MP, 10MP\r\n- Camera trước: 12MP\r\n- CPU: Apple M2\r\n- Bộ nhớ: 128GB\r\n- RAM: 8GB\r\n- Hệ điều hành: iPadOS\r\n', 12990000, 9790000, 'img-product-7.jpg', 1, 'Apple', '2024-04-22 04:20:26', '2024-04-22 04:20:26'),
(8, 'iPad Air 5 10.9 inch 2022 M1 Wifi 64GB', 2, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: 11\" Liquid Retina\r\n- Camera sau: 12MP, 10MP\r\n- Camera trước: 12MP\r\n- CPU: Apple M2\r\n- Bộ nhớ: 128GB\r\n- RAM: 8GB\r\n- Hệ điều hành: iPadOS\r\n', 17490000, 14190000, 'img-product-8.jpg', 1, 'Apple', '2024-04-22 04:20:26', '2024-04-22 04:20:26'),
(9, 'iPad Air 5 10.9 inch 2022 M1 Wifi 128GB', 2, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: 11\" Liquid Retina\r\n- Camera sau: 12MP, 10MP\r\n- Camera trước: 12MP\r\n- CPU: Apple M2\r\n- Bộ nhớ: 128GB\r\n- RAM: 8GB\r\n- Hệ điều hành: iPadOS\r\n', 17490000, 15190000, 'img-product-9.jpg', 1, 'Apple', '2024-04-22 04:20:26', '2024-04-22 04:20:26'),
(10, 'iPad Air 5 10.9 inch 2022 M1 Wifi 64GB', 2, '- Chính hãng, Mới 100%, Nguyên seal\r\n- Màn hình: 11\" Liquid Retina\r\n- Camera sau: 12MP, 10MP\r\n- Camera trước: 12MP\r\n- CPU: Apple M2\r\n- Bộ nhớ: 128GB\r\n- RAM: 8GB\r\n- Hệ điều hành: iPadOS\r\n', 17490000, 14190000, 'img-product-10.jpg', 1, 'Apple', '2024-04-22 04:20:26', '2024-04-22 04:20:26'),
(11, 'Smart Tivi LG 4K 50 inch 50UQ7050PSA', 3, 'Kích thước: 50\"\nĐộ phân giải: 3840 x 2160 / Ultra HD (4K)\nHệ điều hành: WebOS 23\nKết nối mạng: LAN, WiFi, Bluetooth\nCổng xuất hình: 3 x HDMI                                                                                                   ', 12490000, 7990000, 'img-product-11.jpg', 1, 'Samsung', '2024-04-22 04:52:22', '2024-04-22 04:52:22'),
(12, 'Smart Tivi Samsung 4K UHD 50 inch UA50AU7700', 3, 'Kích thước: 50\"\nĐộ phân giải: 3840 x 2160 / Ultra HD (4K)\nHệ điều hành: WebOS 23\nKết nối mạng: LAN, WiFi, Bluetooth\nCổng xuất hình: 3 x HDMI                                                                                                   ', 10900000, 8690000, 'img-product-12.jpg', 1, 'Samsung', '2024-04-22 04:52:22', '2024-04-22 04:52:22'),
(13, 'Smart Tivi Samsung 4K Crystal UHD 50 inch UA50BU8000', 3, 'Kích thước: 50\"\nĐộ phân giải: 3840 x 2160 / Ultra HD (4K)\nHệ điều hành: WebOS 23\nKết nối mạng: LAN, WiFi, Bluetooth\nCổng xuất hình: 3 x HDMI                                                                                                   ', 11700000, 9490000, 'img-product-13.jpg', 1, 'Samsung', '2024-04-22 04:52:22', '2024-04-22 04:52:22'),
(14, 'Smart Tivi NanoCell LG 4K 55 inch 55NANO76SQA', 3, 'Kích thước: 50\"\nĐộ phân giải: 3840 x 2160 / Ultra HD (4K)\nHệ điều hành: WebOS 23\nKết nối mạng: LAN, WiFi, Bluetooth\nCổng xuất hình: 3 x HDMI                                                                                                   ', 15890000, 11490000, 'img-product-14.jpg', 1, 'Samsung', '2024-04-22 04:52:22', '2024-04-22 04:52:22'),
(15, 'Google Tivi TCL 4K 55 inch 55P745', 3, '\nKích thước: 50\"\nĐộ phân giải: 3840 x 2160 / Ultra HD (4K)\nHệ điều hành: WebOS 23\nKết nối mạng: LAN, WiFi, Bluetooth\nCổng xuất hình: 3 x HDMI                                                                                                   ', 12990000, 7990000, 'img-product-15.jpg', 1, 'Samsung', '2024-04-22 04:52:22', '2024-04-22 04:52:22'),
(16, 'Laptop Acer Nitro 5 Tiger AN515-58-52SP (i5-12500H/RAM 8GB/RTX 3050/512GB SSD/ Windows 11)', 4, '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n', 29490000, 21490000, 'img-product-16.jpg', 1, 'Acer', '2024-04-22 07:26:48', '2024-04-22 07:26:48'),
(17, 'Laptop Acer Nitro 16 Phoenix AN16-41-R5M4 (NH.QKBSV.003) (AMD Ryzen 5-7535HS) (Đen)', 4, '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n', 29490000, 25690000, 'img-product-17.jpg', 1, 'Acer', '2024-04-22 07:26:48', '2024-04-22 07:26:48'),
(18, 'Laptop ACER Aspire 7 A715-43G-R8GA', 4, '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n', 21990000, 20990000, 'img-product-18.jpg', 1, 'Acer', '2024-04-22 07:26:48', '2024-04-22 07:26:48'),
(19, 'Laptop Acer Swift Go AI 2024 Gen 2 SFG14-73-53X7', 4, '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n', 25990000, 23990000, 'img-product-19.jpg', 1, 'Acer', '2024-04-22 07:26:48', '2024-04-22 07:26:48'),
(20, 'Laptop ASUS ZenBook 14 OLED UX3402ZA-KM220W', 4, '- CPU: Intel Core i5-12500H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n', 26990000, 22590000, 'img-product-20.jpg', 1, 'Asus', '2024-04-22 07:26:48', '2024-04-22 07:26:48'),
(21, 'Chuột gaming không dây Logitech G903 Hero', 5, '- Chính hãng, Mới 100%, Nguyên seal\r\nChuột chơi game không dây Lightspeed G903\r\nKết nối không dây Lightspeed\r\nCảm biến HERO 25K độ phân giải lên đến 25.600 DPI\r\nThiết kế đối xứng, nút bấm có thể lập trình lên đến 11 nút\r\n', 3790000, 1799000, 'img-product-21.jpg', 1, 'Gaming', '2024-04-22 08:43:58', '2024-04-22 08:43:58'),
(22, 'Tai nghe HyperX Cloud Stinger Core', 5, '- Âm thanh để nâng cao trải nghiệm chơi game \r\n- Micrô để trò chuyện trong trò chơi tốt hơn\r\n- Điều khiển âm thanh dễ truy cập\r\n- Tương thích PC\r\n', 920000, 739000, 'img-product-22.jpg', 1, 'Gaming', '2024-04-22 08:43:58', '2024-04-22 08:43:58'),
(23, 'Chuột gaming Logitech G102 Gen2 Lightsync', 5, '- DPI tối đa 8000 \r\n- Lightsync RGB chiếu sáng \r\n- Thiết kế cổ điển \r\n- Kết nối USB \r\n- Tùy chỉnh bằng Logitech G HUB\r\n', 589000, 399000, 'img-product-23.jpg', 1, 'Gaming', '2024-04-22 08:43:58', '2024-04-22 08:43:58'),
(24, 'Tai nghe gaming có dây HYPERX CLOUD EARBUDS', 5, '- DPI tối đa 8000 \r\n- Lightsync RGB chiếu sáng \r\n- Thiết kế cổ điển \r\n- Kết nối USB \r\n- Tùy chỉnh bằng Logitech G HUB\r\n', 990000, 399000, 'img-product-24.jpg', 1, 'Gaming', '2024-04-22 08:43:58', '2024-04-22 08:43:58'),
(25, 'Tai nghe gaming có dây CLOUD EA', 5, '- Đệm tai nghe làm bằng vải tổng hợp và mút hoạt tính\n- Kết nối USB với độ dài dây đến 1.8m\n- Micro có thế uốn cong cùng nút bật tắt và điều chỉnh âm lượng tiện lợi\n- Tương thích với máy tính và PS4', 990000, 849000, 'img-product-25.jpg', 1, 'Gaming', '2024-04-22 08:43:58', '2024-04-22 08:43:58'),
(26, 'CPU INTEL Core i5-12400 (6C/12T, 2.50 GHz - 4.40 GHz, 18MB) - 1700', 6, '- Socket: 1700, Intel Core thế hệ thứ 12\r\n- Tốc độ: 2.50 GHz - 4.40 GHz (6 nhân, 12 luồng)\r\n- Bộ nhớ đệm: 18MB\r\n- Chip đồ họa tích hợp: Intel UHD Graphics 730\r\n', 6439000, 4190000, 'img-product-26.jpg', 1, 'Linh kiện', '2024-04-22 08:52:25', '2024-04-22 08:52:25'),
(27, 'Tai nghe HyperX Cloud Stinger Core II', 6, '- Âm thanh để nâng cao trải nghiệm chơi game \r\n- Micrô để trò chuyện trong trò chơi tốt hơn\r\n- Điều khiển âm thanh dễ truy cập\r\n- Tương thích PC\r\n', 920000, 739000, 'img-product-27.jpg', 1, 'Linh kiện', '2024-04-22 08:52:25', '2024-04-22 08:52:25'),
(28, 'Mainboard GIGABYTE B760M DS3H DDR4', 6, '- Chuẩn mainboard: Micro-ATX\r\n- Socket: 1700 , Chipset: B760\r\n- Hỗ trợ RAM: 4 khe DDR4, tối đa 128GB\r\n- Lưu trữ: 4 x SATA 3 6Gb/s, 2 x M.2 NVMe\r\n- Cổng xuất hình: 1 x HDMI, 2 x DisplayPort, 1 x VGA/D-sub\r\n', 589000, 399000, 'img-product-28.jpg', 1, 'Linh kiện', '2024-04-22 08:52:25', '2024-04-22 08:52:25'),
(29, 'Ổ cứng gắn trong/ SSD Kingston NV2 500GB M.2 2280 PCIe Gen 4.0 NVMe (SNV2S/500G)', 6, 'Hiệu năng của NVMe PCIe Gen 4x4\r\nTốc độ Đọc tối đa 3.500 MB/giây\r\nTốc độ Ghi tối đa 2.100 MB/giây\r\nChuẩn M.2 NVMe\r\n', 9900000, 3990000, 'img-product-29.jpg', 1, 'Linh kiện', '2024-04-22 08:52:25', '2024-04-22 08:52:25'),
(30, 'Nguồn máy tính MSI MAG A650BN - 650W - 80 Plus Bronze', 6, 'Công suất: 650W\r\nChuẩn hiệu suất: 80 Plus Bronze\r\nQuạt: 1 x 120 mm\r\n', 1590000, 1229000, 'img-product-30.jpg', 1, 'Linh kiện', '2024-04-22 08:52:25', '2024-04-22 08:52:25'),
(46, 'Máy lạnh Sharp Inverter 1 HP AH-X10ZEW', 7, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 10690000, 7990000, 'img-product-31.jpg', 0, 'Panasonic', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(47, 'Máy lạnh LG Inverter 1.5 HP V13WIN1', 7, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 12290000, 8990000, 'img-product-32.jpg', 0, 'Panasonic', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(48, 'Máy lạnh LG Inverter 1 HP V10WIN1', 7, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 10690000, 7990000, 'img-product-33.jpg', 0, 'Panasonic', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(49, 'Máy lạnh Sharp Inverter 1.5 HP AH-X13ZEW', 7, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 9690000, 7990000, 'img-product-34.jpg', 0, 'Panasonic', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(50, 'Máy lạnh Nagakawa 1 HP NS-C09R2T30', 7, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 890000, 790000, 'img-product-35.jpg', 0, 'Panasonic', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(51, 'Tai nghe Bluetooth Disney QS30 - Beige', 8, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 990000, 790000, 'img-product-36.jpg', 0, 'Phụ kiện', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(52, 'Tai nghe In-Ear JBL C200SI', 8, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 890000, 790000, 'img-product-37.jpg', 0, 'Phụ kiện', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(53, 'Tai nghe In-Ear JBL C200SI', 8, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 890000, 790000, 'img-product-38.jpg', 0, 'Phụ kiện', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(54, 'Tai nghe Bluetooth Disney QS16 - Pink', 8, 'Làm mát hiệu quả trong không gian dưới 15m²\r\nTiết kiệm điện năng với công nghệ Dual inverter và Energy Ctrl\r\nLàm lạnh nhanh chóng với công nghệ Jet Cool\r\nBộ lọc PM 2.5 giúp lọc bụi, diệt khuẩn và khử mùi tối ưu\r\nChức năng thổi gió dễ chịu cho người già và trẻ em', 890000, 590000, 'img-product-39.jpg', 0, 'Phụ kiện', '2024-05-03 08:57:39', '2024-05-03 08:57:39'),
(55, 'Tai nghe Soundmax AH 306S', 8, '<p>giá rẻ bao ngon</p>', 860000, 780000, '1717662394-products.webp', 1, 'Phụ kiện', '2024-05-03 08:57:39', '2024-06-06 01:26:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(20) NOT NULL,
  `img3` varchar(20) NOT NULL,
  `img4` varchar(20) NOT NULL,
  `ram1` int(20) NOT NULL,
  `ram2` int(20) NOT NULL,
  `ram3` int(20) NOT NULL,
  `colorphone1` text NOT NULL,
  `colorphone2` text NOT NULL,
  `colorphone3` text NOT NULL,
  `colorphone4` text NOT NULL,
  `kt1` int(20) NOT NULL,
  `kt2` int(20) NOT NULL,
  `kt3` int(20) NOT NULL,
  `giamgia1` text NOT NULL,
  `giamgia2` text NOT NULL,
  `giamgia3` longtext NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id`, `name`, `img1`, `img2`, `img3`, `img4`, `ram1`, `ram2`, `ram3`, `colorphone1`, `colorphone2`, `colorphone3`, `colorphone4`, `kt1`, `kt2`, `kt3`, `giamgia1`, `giamgia2`, `giamgia3`, `description`, `video`) VALUES
(1, 'iphone', 'bluephone.jpg', 'naturephone.jpg', 'whitephone.jpg', 'blackphone.jpg', 128, 256, 512, 'Blue', 'Nature', 'White', 'Black', 0, 0, 0, '1x Mã giảm thêm 100.000đ cho phần mềm M365 Personal hoặc Family', '1x Mã giảm thêm 150.000đ cho phần mềm Office Home và Student 2021', '[{       \"Mota1\": {\n            \"tt1\": \"iPhone 15 Pro Max - Thiết kế bo tròn 4 góc, đa dạng các màu sắc Titanium sang trọng\",\n            \"mota1\": \"Nhìn tổng thể iPhone 15 Pro Max được thiết kế bo tròn 4 góc tinh tế nhỉnh hơn các thế hệ trước mang đến cảm giác mới mẻ, lạ mắt. Tuy nhiên, ở phiên bản này sẽ được thiết kế tối ưu cùng gọn nhẹ hơn giúp máy trở nên nhẹ nhàng. Không những thế, 15 Pro Max sở hữu khung viền titanium rất chắc chắn chống va đập mạnh giữ cho khung viền không bị hỏng hóc.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Cấu hình mạnh mẽ chip A17 Bionic, công nghệ wifi 6E xuất hiện trên iPhone 15 Pro Max\",\n            \"mota2\": \"Một điều đặc biệt ở chiếc iPhone 15 Pro Max này chính là con chip A17 Bionic có hiệu suất GPU với 6 lõi mới nhanh hơn tới 20% nhờ đó mà khả năng chơi game cũng được cải thiện đáng kể cho phép bạn chơi những tựa game có cấu hình nặng hiện nay và đặc biệt là chỉnh sửa hình ảnh, thiết kế đồ họa hay dựng các video ngắn trên iPhone trở nên mượt mà và vượt trội hơn.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"iPhone 15 Pro Max sở hữu camera zoom quang học 5x cùng cụm Camera đa kết nối\",\n            \"mota3\": \"iPhone 15 Pro Max chính thức được Apple trang bị camera tiềm vọng với khả năng zoom quang học 5X, sự đổi mới này sẽ giúp chiếc iPhone có thể đem đến những hình ảnh sắc nét dù ở cự ly xa. Không những thế, 15 Pro Max còn được trang bị cụm camera sau 48MP cùng 12MP và cụm camera trước 12MP hỗ trợ khả năng chụp ảnh đỉnh cao cho với góc siêu rộng và khả năng chụp thiếu sáng tuyệt vời.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Màn hình 6.7 inch sắc nét cùng tấm màn OLED Super Retina XDR, thay đổi cổng USB Type-C mới\",\n            \"mota4\": \"iPhone 15 Pro Max sở hữu màn hình OLED Super Retina XDR 6.7inch với độ phân giải 2796 x 1290 pixels mang đến trải nghiệm làm việc và giải trí sống động, chân thực. Bên cạnh đó, 15 Pro Max còn được phủ lớp kính cường lực Ceramic Shield cao cấp và là chiếc iPhone sở hữu viền màn hình khá mỏng từ hãng.\"\n        }\n    }\n]\n', '[{   \"Thương hiệu\": \"APPLE\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Điện thoại\",     \"Tên\": \"iPhone 15 Pro Max\",     \"Series\": \"iPhone 15\",     \"Màu sắc\": \"Titan Trắng White Titanium\"   },   \"Màn hình\": {     \"Loại màn hình\": \"OLED Super Retina XDR\",     \"Độ phân giải\": \"6.7\\\" 2796 x 1290\"   },   \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB\",     \"Hệ điều hành\": \"iOS\",     \"Chip\": \"Apple A17 Bionic\"   },   \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",       \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },   \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"48MP, 12MP\",     \"Camera trước\": \"12MP\"   },   \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",     \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",     \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/UAPboKeUl1c\" title=\"Đánh giá chi tiết iPhone 15 Pro Max: Rất ngon chỉ một điểm trừ!\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(2, 'Ipad', 'ipad1.jpg', 'ipad2.jpg', 'ipad3.jpg', 'ipad4.jpg', 128, 256, 512, 'Gray', 'Sliver', 'chuaco', 'chuaco', 0, 0, 0, '1x Mã giảm thêm 100.000đ cho phần mềm M365 Personal hoặc Family', '1x Mã giảm thêm 150.000đ cho phần mềm Office Home và Student 2021', '[\n {      \n\"Mota1\": {           \"tt1\": \"Apple\",\n            \"mota1\": \"Máy tính bảng Apple Ipad Gen 9th (2021) 10.2inch Wifi 64GB (MK2K3ZA/A) (Space Gray) là dòng iPad thế hệ thứ 9 của Apple được trang bị chip mạnh mẽ,hệ điều hành mới nhất cùng bộ nhớ ROM lớn. Đáp ứng tốt cho mọi nhu cầu làm việc trong các lĩnh vực hay học tập của tất cả người dùng.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Thiết kế vỏ nhôm unibody, trọng lượng nhẹ\",\n            \"mota2\": \"Apple Ipad Gen 9th với thiết kế vỏ nhôm unibody và bo cong ra sau cùng với tông màu xám đen, mang đến vẻ sang trọng và hiện đại. Apple đã sử dụng kính và màn hình tách rời với dòng iPad mới này để tiết kiệm chi phí sửa chữa.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Chip A13 Bionic đem đến hiệu năng vượt trội, ROM 64GB \",\n            \"mota3\": \"Apple đã không ngần ngại trang bị vào chiếc iPad 2021 của mình chip A13 Bionic mạnh mẽ, giúp cho mọi thao tác trên iPad được nhanh nhạy hơn. Đồng thời, đem đến hiệu năng vượt trội giúp sử dụng các ứng dụng Adobe Fresco và Procreate mượt mà hơn.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Trải nghiệm dùng hoàn hảo với màn hình cảm ứng 10.2 inch, Retina display - IPS\",\n            \"mota4\": \"Các chi tiết và hình ảnh sẽ được hiển thị rất rõ nét với màu sắc sống động trên màn hình iPad Gen 9th 2021 với kích thước 10.2 inch. cho trải nghiệm giải trí, học tập hay làm việc hoàn hảo nhất. True Tone giúp bạn dễ dàng điều chỉnh độ sáng màn hình giúp xem thoải mái dưới mọi cường độ ánh sáng.\"\n        }\n    }\n]\n', '\n[{   \"Thương hiệu\": \"APPLE\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Máy tính bảng\",  \n   \"Tên\": \"iPhone 15 Pro Max\",     \"Series\": \"iPad Gen Series\",     \"Màu sắc\": \"Bạc Silver\"   }, \n  \"Màn hình\": {     \"Loại màn hình\": \"OLED Super Retina XDR\",     \"Độ phân giải\": \"6.7\\\" 2796 x 1290\"   },  \n \"Cấu hình\": {     \"Dung lượng (ROM)\": \"64GB\",     \"Hệ điều hành\": \"iPadOS\",     \"Chip\": \"Apple A17 Bionic\"   },  \n \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",    \n   \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },  \n \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   }, \n  \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",  \n   \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",  \n   \"Khối lượng\": \"221 g\"   } }]\n', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/yHXnDeeMycA\" title=\"Đánh giá iPad Pro M2 11inch: Hiệu năng tốt, thiết kế đẹp, giá quá ngon!\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(3, 'Tivi', 'tv1.jpg', 'tv2.jpg', 'tv3.jpg', 'tv4.jpg', 0, 0, 0, 'chuaco', 'chuaco', 'chuaco', 'chuaco', 55, 60, 65, '1x Mã giảm thêm 10% mua khung treo Tivi North Bayou', '1x Mã Giảm thêm 5% mua Loa Thanh, Loa Tháp Samsung', '[\n {      \n  \"Mota1\": {\n            \"tt1\": \"Samsung\",\n            \"mota1\": \"Smart Tivi UHD 4K 55 inch UA55AU7002KXXV đến từ thương hiệu Samsung nổi tiếng có lẽ không còn xa lạ gì với mọi người. Smart Tivi có diện mạo sang trọng phù hợp với mọi không gian nội thất. Tivi thông minh UA55AU7002KXXV có chất lượng hình ảnh hiển thị sắc nét, sống động đem đến cho bạn những giây phút thư giãn thoải mái nhất.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Thiết kế tô điểm nội thất - Màn hình chuyển động mượt mà \",\n            \"mota2\": \"Tivi Samsung UHD với lớp vỏ màu đen làm bằng chất liệu cao cấp giúp tô điểm thêm vẻ sang trọng cho đa dạng không gian sống khác nhau. Tivi có kích thước 1450.7 x 907.1 x 284.1mm và khối lượng 20.9kg bao gồm chân đế tạo cảm giác chắc chắn khi đặt trên mặt phẳng.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Công nghệ hình ảnh và âm thanh sinh động \",\n            \"mota3\": \"Công nghệ Crystal Processor 4K có trên tivi UA55AU7002KXXV giúp tự động cân chỉnh màu sắc, tối ưu hình ảnh lên 4K chất lượng, rõ nét. Công nghệ HDR 10+ tăng chiều sâu của hình ảnh, đảm bảo những thước ảnh cung cấp đều đạt chuẩn.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Hệ điều hành Tizen - Thư viện ứng dụng đa dạng\",\n            \"mota4\": \"Samsung UHD 4K 55 inch được hỗ trợ hệ điều hành Tizen với giao diện gọn gàng thân thiện với người dùng, truy cập các ứng dụng với tốc độ nhanh chóng, không bị gián đoạn, cho bạn những giây phút thoải mái nhất khi sử dụng. \"\n        }\n    }\n]\n', '[{   \"Thương hiệu\": \"SAMSUNG\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Tivi\",      \"Tên\": \"chua co\",     \"Series\": \"iPad Gen Series\",     \"Màu sắc\": \"Đen\"   },    \"Màn hình\": {     \"Loại màn hình\": \"OLED Super Retina XDR\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },    \"Cấu hình\": {     \"Dung lượng (ROM)\": \"64GB\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },    \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",        \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },    \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },    \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",      \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",      \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/o99r2mTwSc0\" title=\"Lần đầu dùng màn hình Philips và cái kết...\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(4, 'Laptop', 'laptop1.jpg', 'laptop2.jpg', 'laptop3.jpg', 'laptop4.jpg', 0, 0, 0, 'chuaco', 'chuaco', 'chuaco', 'chuaco', 0, 0, 0, '1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli', '1x Mã ưu đãi mua chuột Logitech G903 Hero với giá 1.5 Triệu đồng', '[\n {      \n  \"Mota1\": {\n            \"tt1\": \"Acer\",\n            \"mota1\": \"ACER Gaming Nitro V ANV15-51-58AN là một sản phẩm laptop cao cấp từ hãng ACER - một trong những thương hiệu hàng đầu và được tin dùng trong lĩnh vực công nghệ. Điểm đặc biệt của sản phẩm này là sự kết hợp giữa hiệu suất mạnh mẽ và thiết kế nhỏ gọn, phù hợp với nhu cầu di động của người dùng hiện đại.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Nhẹ nhàng, di động với thiết kế nhỏ gọn\",\n            \"mota2\":\"Với kích thước 362.3 x 239.89 x 22.9/26.9 mm và trọng lượng 2.1 kg, ACER Gaming Nitro V ANV15-51-58AN là một trong những chiếc laptop nhẹ nhàng và dễ dàng mang theo bên mình. Thiết kế nhỏ gọn này giúp sản phẩm trở thành người bạn đồng hành lý tưởng cho cả công việc và giải trí di động.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Hiệu suất mạnh mẽ với chip Intel Core i5-13420H và chip đồ hoạ rời RTX 2050\",\n            \"mota3\": \"ACER Gaming Nitro V ANV15-51-58AN được trang bị chip CPU Intel Core thế hệ thứ 13, cụ thể là Intel Core i5-13420H với hiệu suất mạnh mẽ. Với 8 nhân, 12 luồng và tốc độ từ 2.1 GHz lên đến 4.6 GHz, chip này đảm bảo xử lý tác vụ đa nhiệm một cách mượt mà. Laptop sử dụng cả chip đồ hoạ rời RTX 2050 4GB GDDR6 và chip tích hợp Intel UHD Graphics, đảm bảo khả năng xử lý đồ hoạ mạnh mẽ và trải nghiệm game mượt mà.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \",\n            \"mota4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \"\n        }\n    }\n]\n\n\n', '[{   \"Thương hiệu\": \"ACER\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Laptop\",       \"Tên\": \"chua co\",     \"Series\": \"Series laptop\",     \"Màu sắc\": \"Đen\"   },     \"Màn hình\": {     \"Loại màn hình\": \"16 ( 1920 x 1200 ) WUXGA IPS 165Hz , không cảm ứng , HD webcam\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },     \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB SSD M.2 NVMe\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },     \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",         \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },     \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },     \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",       \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",       \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/yhD-kHCVeI0\" title=\"Những điểm thích/không thích trên Acer Nitro 5 Tiger sau nữa năm dùng!\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(5, 'Game', 'chuaco', 'chuaco', 'chuaco', 'chuaco', 0, 0, 0, 'chuaco', 'chuaco', 'chuaco', 'chuaco', 0, 0, 0, '1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli', '1x Mã ưu đãi mua chuột Logitech G903 Hero với giá 1.5 Triệu đồng', '[\n {      \n  \"Mota1\": {\n            \"tt1\": \"Acer\",\n            \"mota1\": \"ACER Gaming Nitro V ANV15-51-58AN là một sản phẩm laptop cao cấp từ hãng ACER - một trong những thương hiệu hàng đầu và được tin dùng trong lĩnh vực công nghệ. Điểm đặc biệt của sản phẩm này là sự kết hợp giữa hiệu suất mạnh mẽ và thiết kế nhỏ gọn, phù hợp với nhu cầu di động của người dùng hiện đại.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Nhẹ nhàng, di động với thiết kế nhỏ gọn\",\n            \"mota2\":\"Với kích thước 362.3 x 239.89 x 22.9/26.9 mm và trọng lượng 2.1 kg, ACER Gaming Nitro V ANV15-51-58AN là một trong những chiếc laptop nhẹ nhàng và dễ dàng mang theo bên mình. Thiết kế nhỏ gọn này giúp sản phẩm trở thành người bạn đồng hành lý tưởng cho cả công việc và giải trí di động.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Hiệu suất mạnh mẽ với chip Intel Core i5-13420H và chip đồ hoạ rời RTX 2050\",\n            \"mota3\": \"ACER Gaming Nitro V ANV15-51-58AN được trang bị chip CPU Intel Core thế hệ thứ 13, cụ thể là Intel Core i5-13420H với hiệu suất mạnh mẽ. Với 8 nhân, 12 luồng và tốc độ từ 2.1 GHz lên đến 4.6 GHz, chip này đảm bảo xử lý tác vụ đa nhiệm một cách mượt mà. Laptop sử dụng cả chip đồ hoạ rời RTX 2050 4GB GDDR6 và chip tích hợp Intel UHD Graphics, đảm bảo khả năng xử lý đồ hoạ mạnh mẽ và trải nghiệm game mượt mà.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \",\n            \"mota4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \"\n        }\n    }\n]\n\n\n', '  [{   \"Thương hiệu\": \"Game\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Gaming\",       \"Tên\": \"chua co\",     \"Series\": \"Series laptop\",     \"Màu sắc\": \"Đen\"   },     \"Màn hình\": {     \"Loại màn hình\": \"16 ( 1920 x 1200 ) WUXGA IPS 165Hz , không cảm ứng , HD webcam\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },     \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB SSD M.2 NVMe\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },     \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",         \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },     \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },     \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",       \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",       \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/TD4VcliAyjk\" title=\"Trên tay Combo Logitech x G Pro League of Legends\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(6, 'Linh kiện', 'chuaco', 'chuaco', 'chuaco', 'chuaco', 0, 0, 0, 'chuaco', 'chuaco', 'chuaco', 'chuaco', 0, 0, 0, '1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli', 'Giảm thêm đến 350.000đ dành cho Học sinh - sinh viên', '[\n {      \n  \"Mota1\": {\n            \"tt1\": \"Acer\",\n            \"mota1\": \"ACER Gaming Nitro V ANV15-51-58AN là một sản phẩm laptop cao cấp từ hãng ACER - một trong những thương hiệu hàng đầu và được tin dùng trong lĩnh vực công nghệ. Điểm đặc biệt của sản phẩm này là sự kết hợp giữa hiệu suất mạnh mẽ và thiết kế nhỏ gọn, phù hợp với nhu cầu di động của người dùng hiện đại.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Nhẹ nhàng, di động với thiết kế nhỏ gọn\",\n            \"mota2\":\"Với kích thước 362.3 x 239.89 x 22.9/26.9 mm và trọng lượng 2.1 kg, ACER Gaming Nitro V ANV15-51-58AN là một trong những chiếc laptop nhẹ nhàng và dễ dàng mang theo bên mình. Thiết kế nhỏ gọn này giúp sản phẩm trở thành người bạn đồng hành lý tưởng cho cả công việc và giải trí di động.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Hiệu suất mạnh mẽ với chip Intel Core i5-13420H và chip đồ hoạ rời RTX 2050\",\n            \"mota3\": \"ACER Gaming Nitro V ANV15-51-58AN được trang bị chip CPU Intel Core thế hệ thứ 13, cụ thể là Intel Core i5-13420H với hiệu suất mạnh mẽ. Với 8 nhân, 12 luồng và tốc độ từ 2.1 GHz lên đến 4.6 GHz, chip này đảm bảo xử lý tác vụ đa nhiệm một cách mượt mà. Laptop sử dụng cả chip đồ hoạ rời RTX 2050 4GB GDDR6 và chip tích hợp Intel UHD Graphics, đảm bảo khả năng xử lý đồ hoạ mạnh mẽ và trải nghiệm game mượt mà.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \",\n            \"mota4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \"\n        }\n    }\n]\n\n\n', ' [{\"Thương hiệu\": \"Linh kiện\",   \"Bảo hành\": \"6 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Linh kiện\",       \"Tên\": \"chua co\",     \"Series\": \"Series laptop\",     \"Màu sắc\": \"Blue\"   },     \"Màn hình\": {     \"Loại màn hình\": \"16 ( 1920 x 1200 ) WUXGA IPS 165Hz , không cảm ứng , HD webcam\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },     \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB SSD M.2 NVMe\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },     \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",         \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },     \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },     \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",       \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",       \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/Tw1-GeVPl3c\" title=\"Tin Nóng Tuần | Samsung Galaxy S25 ra chip riêng, công bố AMD Ryzen 7000\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(7, 'Máy lạnh', 'chuaco', 'chưa có', 'chưa có', 'chưa có', 0, 0, 0, 'chưa có', 'chưa có', 'chưa có', 'chưa có', 0, 0, 0, 'chưa có', 'chưa có', '[\n    {      \n        \"Mota1\": {\n            \"tt1\": \"Máy lạnh\",\n            \"mota1\": \"Với Máy lạnh LG Inverter 1 HP V10WIN1, bạn sẽ được trải nghiệm không gian mát mẻ và thoải mái ngay tức thì. Công nghệ Inverter giúp máy hoạt động ổn định, duy trì nhiệt độ mong muốn mà không cần phải thường xuyên bật tắt. Điều này không chỉ giúp tiết kiệm điện năng mà còn giảm chi phí sử dụng.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Thiết kế hiện đại và chất lượng\",\n            \"mota2\": \"Máy lạnh LG Inverter 1 HP V10WIN mang lại sự sang trọng cho không gian phòng. Sản phẩm sử dụng môi chất lạnh R32 thân thiện với môi trường, giảm tác động đến tầng ozon và hiệu ứng nhà kính. Với công suất làm lạnh 1HP, đây là lựa chọn hoàn hảo cho không gian dưới 15m2 như phòng ngủ, phòng khách nhỏ, phòng làm việc riêng…\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Công nghệ Dual Inverter Compressor tiết kiệm điện\",\n            \"mota3\": \"Máy lạnh LG Inverter 1 HP V10WIN1 được trang bị công nghệ Dual Inverter, giúp vận hành máy nén mượt mà và ổn định, đảm bảo làm lạnh với hiệu suất tối ưu và giảm tiêu thụ điện năng đến 70%. Với chế độ Energy Ctrl, người dùng có thể kiểm soát công suất lành lạnh theo 4 mức khác nhau: 100%, 80%, 60%, 40%, giúp tiết kiệm năng lượng hiệu quả hơn. Máy lạnh có nhãn năng lượng 5 sao (hiệu suất năng lượng 4.28), tiêu thụ điện năng chỉ 0.92 kW/h. Sử dụng gas R32 giúp máy lạnh làm lạnh nhanh, hiệu quả và tiết kiệm năng lượng, giảm lượng khí thải đến 75% và bảo vệ môi trường tự nhiên.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Chế độ hướng gió dễ chịu\",\n            \"mota4\": \"Trong chế độ thổi gió dễ chịu của máy lạnh LG Inverter 1 HP V10WIN1, sau khi phòng đã đạt được nhiệt độ mong muốn, cánh đảo gió sẽ tự động hướng luồng không khí lên trần và xuống, giúp phân tán hơi lạnh đều khắp không gian mà không làm bạn cảm thấy khó chịu.\"\n        }\n    }\n]\n', '[{   \"Thương hiệu\": \"Panasonic\",   \"Bảo hành\": \"12 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Máy lạnh\",       \"Tên\": \"chua co\",     \"Series\": \"V10WIN1\",     \"Màu sắc\": \"Trắng\"   },     \"Màn hình\": {     \"Loại màn hình\": \"16 ( 1920 x 1200 ) WUXGA IPS 165Hz , không cảm ứng , HD webcam\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },     \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB SSD M.2 NVMe\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },     \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",         \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },     \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },     \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",       \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",       \"Khối lượng\": \"221 g\"   } }]', ' <img src=\"resources/frontend/assets/img/product_maylanh.jpg\" class=\"img-fluid w-100 h-50\" >'),
(8, 'Phụ kiện cá nhân', 'chuaco', 'chưa có', 'chưa có', 'chưa có', 0, 0, 0, 'chưa có', 'chưa có', 'chưa có', 'chưa có', 0, 0, 0, 'chưa có', 'chưa có', '[\n {      \n  \"Mota1\": {\n            \"tt1\": \"Acer\",\n            \"mota1\": \"ACER Gaming Nitro V ANV15-51-58AN là một sản phẩm laptop cao cấp từ hãng ACER - một trong những thương hiệu hàng đầu và được tin dùng trong lĩnh vực công nghệ. Điểm đặc biệt của sản phẩm này là sự kết hợp giữa hiệu suất mạnh mẽ và thiết kế nhỏ gọn, phù hợp với nhu cầu di động của người dùng hiện đại.\"\n        },\n        \"Mota2\": {\n            \"tt2\": \"Nhẹ nhàng, di động với thiết kế nhỏ gọn\",\n            \"mota2\":\"Với kích thước 362.3 x 239.89 x 22.9/26.9 mm và trọng lượng 2.1 kg, ACER Gaming Nitro V ANV15-51-58AN là một trong những chiếc laptop nhẹ nhàng và dễ dàng mang theo bên mình. Thiết kế nhỏ gọn này giúp sản phẩm trở thành người bạn đồng hành lý tưởng cho cả công việc và giải trí di động.\"\n        },\n        \"Mota3\": {\n            \"tt3\": \"Hiệu suất mạnh mẽ với chip Intel Core i5-13420H và chip đồ hoạ rời RTX 2050\",\n            \"mota3\": \"ACER Gaming Nitro V ANV15-51-58AN được trang bị chip CPU Intel Core thế hệ thứ 13, cụ thể là Intel Core i5-13420H với hiệu suất mạnh mẽ. Với 8 nhân, 12 luồng và tốc độ từ 2.1 GHz lên đến 4.6 GHz, chip này đảm bảo xử lý tác vụ đa nhiệm một cách mượt mà. Laptop sử dụng cả chip đồ hoạ rời RTX 2050 4GB GDDR6 và chip tích hợp Intel UHD Graphics, đảm bảo khả năng xử lý đồ hoạ mạnh mẽ và trải nghiệm game mượt mà.\"\n        },\n        \"Mota4\": {\n            \"tt4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \",\n            \"mota4\": \"Xử lý đa nhiệm linh hoạt và lưu trữ nhanh chóng \"\n        }\n    }\n]\n\n\n', ' [{\"Thương hiệu\": \"Phụ kiện cá nhân\",   \"Bảo hành\": \"6 tháng\",   \"Thông tin chung\": {     \"Nhóm sản phẩm\": \"Phụ kiện\",       \"Tên\": \"chua co\",     \"Series\": \"Series laptop\",     \"Màu sắc\": \"Blue\"   },     \"Màn hình\": {     \"Loại màn hình\": \"16 ( 1920 x 1200 ) WUXGA IPS 165Hz , không cảm ứng , HD webcam\",     \"Độ phân giải\": \"3840 x 2160 / Ultra HD (4K)\"   },     \"Cấu hình\": {     \"Dung lượng (ROM)\": \"512GB SSD M.2 NVMe\",     \"Hệ điều hành\": \"Tizen\",     \"Chip\": \"Apple A17 Bionic\"   },     \"Pin\": {     \"Loại\": \"Lithium-ion\",     \"Công nghệ pin\": [       \"Sạc không dây MagSafe lên đến 15W\",         \"Sạc không dây Qi lên đến 7,5W\"     ],     \"Cổng sạc\": \"USB Type-C\"   },     \"Mạng di động\": \"GSM / CDMA / HSPA / EVDO / LTE / 5G\",   \"Camera\": {     \"Camera sau\": \"12MP\",     \"Camera trước\": \"12MP\"   },     \"Kết nối\": {     \"Wifi\": \"Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\",     \"GPS\": \"GPS, GLONASS, GALILEO, BDS, QZSS\",       \"Bluetooth\": \"Bluetooth 5.3\",     \"Jack tai nghe\": \"USB Type-C\"   },   \"Thiết kế & trọng lượng\": {     \"Kích thước\": \"159.9 x 76.7 x 8.25 mm\",       \"Khối lượng\": \"221 g\"   } }]', '<iframe width=\"670\" height=\"400\" src=\"https://www.youtube.com/embed/Tw1-GeVPl3c\" title=\"Tin Nóng Tuần | Samsung Galaxy S25 ra chip riêng, công bố AMD Ryzen 7000\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_detail` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `id_detail`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Iphone', 'Sản phẩm của Apple', '<img src=\"https://lh3.googleusercontent.com/E7coVNI7mvCGp5GASzte71-stIZAYet_sozvQ0A1D_GJfvW1IFJGzymplqvm4A5upZV6ONPQtjgloVYzpHSG09lmQBrEDLU=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(2, 2, 'Máy tinh bảng', 'chưa có', '<img src=\"https://lh3.googleusercontent.com/dkzFFaKYmPLLkPnC-cyefC1u1Qh0Iy_6Loz7adsbIMs-KAK8FA_PwUOklM3gEppESc1uSeaTa63U4Vejifo=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(3, 3, 'Tivi', 'Tv sam sung', '<img src=\"https://lh3.googleusercontent.com/1rbqboPNTH2Gyx3dS28kewywgX0ovZAZHBcstS4KjeJO8j6Qc6Kn19xJH0XpaiqCAj4a-xf_EeAZjlARKaI9mQNBhlHDp6o=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(4, 4, 'Laptop', 'Laptop acer', '<img src=\"https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(5, 5, 'Game', 'Phụ kiện', '<img src=\"https://lh3.googleusercontent.com/qtC62XnXkTsyJbMok7Z7Uu5GOPvhqslzU5YscZZ0HvorTWRs0Qg5s8gWU6l6CTcmc-pQA2y1myJCZ92t9VDq=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(6, 6, 'Linh kiện', 'Linh kiện máy tính laptop ', '<img src=\"https://lh3.googleusercontent.com/slg-pspnUXN25zVZdp_qRMwaTIj008i3gckyGvSYLepffuJZIHNvVo7unNfzkCJZdJw0Om4vMTDttW9z1LZ8ojgVerpfxxM=rw\" loading=\"lazy\" decoding=\"async\" style=\"width: 100%; height: 100%;\">', '2024-04-23 02:09:58', '2024-04-23 02:09:58'),
(7, 7, 'Máy lạnh', 'chưa có', 'chưa có', '2024-05-03 08:57:13', '2024-05-03 08:57:13'),
(8, 8, 'Phụ kiện cá nhân', 'chưa có', 'chưa có', '2024-05-03 08:57:13', '2024-05-03 08:57:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `code` int(10) NOT NULL DEFAULT 0,
  `birdthday` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `quyen` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `code`, `birdthday`, `gender`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'trường thinh', 'hotruongthinhkv147@gmail.com', '$2y$10$9jL8MwyVVi8wtX/2byx5F.cDQyhiVzvYMz5oSetbFYrtai4vxAn1i', '086984507', 'số 1 đường nguyễn văn b, Cao Lãnh, Đồng Tháp, Vietnam', 1, '2024-06-12', 'nam', 1, NULL, '2024-05-21 21:30:10', '2024-06-07 18:59:28'),
(6, 'trường thinh', 'truongthinhkv123@gmail.com', '$2y$10$Ouie6IIK3UlFMKbm/FfSBOpkdudIKSRuzN/aGSxiHOyJ9ekWYRAbu', '12345678', 'số 1 đường nguyễn văn a, Cao Lãnh, Đồng Tháp, Vietnam', 1, '2024-06-21', 'nam', 0, NULL, '2024-05-21 21:33:45', '2024-06-07 16:13:51'),
(9, 'bluecheeta', 'bluecheetah1470@gmail.com', '$2y$10$8cqBPtvTHQoLqVbdzAalhuLVI5pLnCOf3wFi4or/fH7OHMce3vZCu', '0333199066', 'số 6 đường nguyễn văn a, Ho Chi Minh City, Hồ Chí Minh, Vietnam', 0, '2024-06-14', 'nam', 0, NULL, '2024-06-04 20:40:33', '2024-06-07 16:13:36'),
(13, 'trường thinh nè', 'vercelwebsite@gmail.com', '$2y$10$6j5..pbNz9VsKwu1cxQ/7.v4oxuPwlnZSsh8.by5076jAn76iQG/K', 'chưa có', 'chuaco', 1, NULL, NULL, 0, NULL, '2024-06-12 22:54:43', '2024-06-12 22:56:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_detail` (`id_detail`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);

--
-- Các ràng buộc cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD CONSTRAINT `type_products_ibfk_1` FOREIGN KEY (`id_detail`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
