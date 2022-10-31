-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 01:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thiet_bi_ve_sinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_image` varchar(100) DEFAULT NULL,
  `brand_description` varchar(200) DEFAULT NULL,
  `in_promotion` tinyint(1) NOT NULL DEFAULT 0,
  `brand_status` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `path`, `brand_name`, `brand_image`, `brand_description`, `in_promotion`, `brand_status`, `updated_at`, `created_at`) VALUES
(1, 'lao2', 'Lào2', '4OvtagcwqkU5rlhmTsWAu8Gk6IPCKgjKJhNYNAGf.jpg', 'Nhà cung cấp thuốc lào nổi tiếng', 1, 1, '2022-10-28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `category_path` varchar(255) DEFAULT NULL,
  `category_parent_id` int(11) DEFAULT 0,
  `category_image` varchar(255) DEFAULT NULL,
  `category_status` tinyint(1) NOT NULL COMMENT '1: active, 0: inactive',
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_path`, `category_parent_id`, `category_image`, `category_status`, `updated_at`, `created_at`) VALUES
(4, 'tets', '<p>tets</p>', 'tets', NULL, 'Qhlh6DOrPY5cC8m9XIkGfmV8q3ggiwggAJPW8PWt.jpg', 1, '2022-10-24', '2022-10-20'),
(5, 'tests2', '<p>111</p>', 'tests2', 4, 'l3Vr3BHaR8uXp5LnDzUWxAoKXYrDM1VbcNCFraGW.jpg', 1, '2022-10-20', '2022-10-20'),
(6, '11', '<p>11</p>', '11', NULL, NULL, 1, '2022-10-20', '2022-10-20'),
(7, 'ettata', '<p>asdadasd</p>', 'ettata', 4, 'AlhBgIcnSlqcMsLN4zmkMrIMoXWihI8Zk0ZnVJvI.jpg', 1, '2022-10-24', '2022-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_path` varchar(200) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `footer_info`
--

CREATE TABLE `footer_info` (
  `footer_info_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `phone2` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_info`
--

INSERT INTO `footer_info` (`footer_info_id`, `name`, `address`, `phone`, `phone2`, `email`, `map`, `status`, `updated_at`, `created_at`) VALUES
(1, 'test', '111', '11111', '1111', '1111@1111', '1111', 1, '2022-10-30', '2022-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `cost` double DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `date`, `user_id`, `cost`, `status`, `updated_at`, `created_at`) VALUES
(7, '2022-08-16', 1, 1500000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_per_product`
--

CREATE TABLE `invoice_per_product` (
  `invoice_per_product_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `p_cost` double NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `nav_id` int(11) NOT NULL,
  `nav_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nav_path` varchar(200) DEFAULT NULL,
  `order_nth` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT 0,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`nav_id`, `nav_name`, `nav_path`, `order_nth`, `status`, `parent_id`, `updated_at`, `created_at`) VALUES
(6, 'Giới thiệu', 'about-us', 0, 1, NULL, NULL, NULL),
(7, 'Liên hệ', 'contact', 0, 1, NULL, NULL, NULL),
(8, 'Tin tức', 'news', 0, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_path` varchar(200) DEFAULT NULL,
  `news_keyword` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_image` varchar(300) DEFAULT NULL,
  `news_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_status` tinyint(1) NOT NULL COMMENT '0: ẩn, 1: hiện',
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_path`, `news_keyword`, `news_image`, `news_title`, `news_content`, `news_description`, `news_status`, `updated_at`, `created_at`) VALUES
(1, 'thuoc-lao-lam-tu-gi-va-co-hai-khong', 'Thuốc lào làm từ gì và có hại không?', '24-5f5a1e0dcff11__880124684edcd25765f.jpg', 'Thuốc lào làm từ gì và có hại không?', '<h1>Thuốc l&agrave;o l&agrave;m từ g&igrave; v&agrave; c&oacute; hại kh&ocirc;ng?</h1>\r\n\r\n<p>Share:</p>\r\n\r\n<p><strong>B&agrave;i viết được tham vấn chuy&ecirc;n m&ocirc;n c&ugrave;ng ThS.BS Nguyễn Huy Nhật - Khoa Kh&aacute;m bệnh &amp; Nội khoa - Bệnh viện Đa khoa Quốc tế Vinmec Đ&agrave; Nẵng.</strong></p>\r\n\r\n<p><strong>Kh&oacute;i thuốc l&agrave;o chứa những yếu tố nguy hiểm g&acirc;y ra bệnh nhồi m&aacute;u cơ tim v&agrave; ảnh hưởng xấu đến tuần ho&agrave;n, h&ocirc; hấp, đường ruột v&agrave; hệ thống b&agrave;i tiết của người h&uacute;t chủ động v&agrave; bị động.</strong></p>\r\n\r\n<h2>1. Thuốc l&agrave;o l&agrave; g&igrave;?</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&acirc;y thuốc l&agrave;o c&oacute; t&ecirc;n khoa học l&agrave; Nicotiana rustica L, l&agrave; một lo&agrave;i thực vật thuộc chi Thuốc l&aacute; (Nicotiana), họ C&agrave; Solanaceae. Lo&agrave;i n&agrave;y c&oacute; h&agrave;m lượng nicotin rất cao. L&aacute; của n&oacute; ngo&agrave;i việc d&ugrave;ng để h&uacute;t c&ograve;n sử dụng rộng r&atilde;i trong việc sản xuất c&aacute;c thuốc trừ dịch hại hữu cơ. C&acirc;y th&acirc;n thảo, mọc quanh năm, cao chừng 1m, thấp hơn c&acirc;y thuốc l&aacute;.</p>\r\n\r\n<p>Ở Việt Nam, c&acirc;y thuốc l&agrave;o được trồng chủ yếu để h&uacute;t theo tập qu&aacute;n của người Việt v&ugrave;ng đồng bằng, trung du Bắc Bộ đến Đ&egrave;o Ngang (tỉnh Quảng B&igrave;nh) v&agrave; c&aacute;c d&acirc;n tộc thiểu số từ miền n&uacute;i ph&iacute;a bắc đến miền t&acirc;y Thanh H&oacute;a - Nghệ An. Sau n&agrave;y, n&oacute; được trồng rộng r&atilde;i ở khắp nơi nhưng chỉ v&agrave;i v&ugrave;ng được xem l&agrave; cho sản phẩm thuốc l&agrave;o nổi tiếng như Hải Ph&ograve;ng v&agrave; Thanh H&oacute;a. Ngo&agrave;i ra, thuốc l&agrave;o c&ograve;n d&ugrave;ng l&agrave;m phụ gia khi ăn trầu.</p>\r\n\r\n<p><img alt=\"Cây thuốc lào\" src=\"https://vinmec-prod.s3.amazonaws.com/images/20190613_102931_514175_cay-thuoc-lao.max-1800x1800.jpg\" /></p>\r\n\r\n<p>C&acirc;y thuốc l&agrave;o được trồng rất phổ biến ở Việt Nam</p>\r\n\r\n<h2>2. Thuốc l&agrave;o l&agrave;m từ g&igrave;?</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thuốc l&agrave;o sau khi gieo trồng v&agrave; thu hoạch chủ yếu được chế biến thủ c&ocirc;ng, l&aacute; được rửa, lau sạch sau đ&oacute; được th&aacute;i, xắt nhỏ ra, phơi kh&ocirc; rồi hồ để tiện cho việc đ&oacute;ng th&agrave;nh b&aacute;nh. H&uacute;t thuốc l&agrave;o sử dụng dụng cụ gọi l&agrave; điếu, c&oacute; 3 loại điếu ch&iacute;nh:</p>\r\n\r\n<ul>\r\n	<li>Điếu c&agrave;y: th&acirc;n điếu h&igrave;nh ống (bằng tre, nứa, kim loại nhẹ) d&agrave;i khoảng 40 &ndash; 60cm, một đầu của th&acirc;n điếu phải k&iacute;n để th&acirc;n điếu c&oacute; thể chứa nước, đầu kia hở d&ugrave;ng để h&uacute;t. Vị tr&iacute; gần ph&iacute;a đầu k&iacute;n của th&acirc;n điếu được khoan một lỗ gọi l&agrave; n&otilde; điếu để tra thuốc l&agrave;o v&agrave;o h&uacute;t.</li>\r\n	<li>Điếu b&aacute;t: gồm c&oacute; b&aacute;t điếu (bằng gốm, sứ) l&agrave; nơi chứa nước, n&otilde; điếu lắp ở ph&iacute;a tr&ecirc;n. Điếu b&aacute;t kh&ocirc;ng thuận lợi khi mang x&aacute;ch n&ecirc;n thường d&ugrave;ng để h&uacute;t ở nh&agrave;.</li>\r\n	<li>Điếu ống chạm bạc c&ograve;n gọi l&agrave; điếu d&oacute;ng: tương tự điếu c&agrave;y nhưng ngắn v&agrave; to hơn, l&agrave;m bằng gỗ qu&yacute;, xương ống của động vật hoặc bằng ng&agrave;... Loại điếu n&agrave;y hiện nay hầu như kh&ocirc;ng c&ograve;n được sử dụng để h&uacute;t thuốc l&agrave;o nữa.</li>\r\n</ul>\r\n\r\n<p>Ngo&agrave;i ra khi kh&ocirc;ng c&oacute; sẵn điếu, người ta c&oacute; thể d&ugrave;ng l&aacute; chuối, giấy cuộn lại, miệng ngậm một ngụm nước l&agrave; c&oacute; thể h&uacute;t được thuốc l&agrave;o.</p>\r\n\r\n<p>Sợi thuốc l&agrave;o được v&ecirc; tr&ograve;n lại th&agrave;nh vi&ecirc;n cỡ đầu ng&oacute;n tay &uacute;t v&agrave; tra v&agrave;o n&otilde; điếu. Sau đ&oacute; d&ugrave;ng lửa để đốt cho thuốc ch&aacute;y tạo th&agrave;nh kh&oacute;i đồng thời d&ugrave;ng miệng để h&uacute;t. Ngo&agrave;i c&aacute;ch h&uacute;t thuốc, thuốc l&agrave;o c&ograve;n d&ugrave;ng để nhai giống như trong trường hợp ăn trầu. Khi nhai ri&ecirc;ng th&igrave; gọi l&agrave; thuốc r&ecirc; v&agrave; người &quot;ăn&quot; sẽ ngậm một nh&uacute;m thuốc l&agrave;o kh&ocirc; trong miệng, kẹp giữa răng v&agrave; m&aacute;, thỉnh thoảng nhai để chắt lấy nước chứ thực ra kh&ocirc;ng nuốt phần b&atilde; thuốc.</p>\r\n', 'Thuốc lào làm từ gì và có hại không?', 1, NULL, '2022-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nav_id` int(11) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `nav_id`, `updated_at`, `created_at`) VALUES
(3, 'Liên hệ', 7, NULL, NULL),
(4, 'Giới thiệu', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_detail`
--

CREATE TABLE `page_detail` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_keyword` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_image` varchar(300) DEFAULT NULL,
  `page_status` tinyint(1) NOT NULL COMMENT '0: ẩn, 1: hiện',
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_detail`
--

INSERT INTO `page_detail` (`id`, `page_id`, `page_title`, `page_keyword`, `page_description`, `page_content`, `page_image`, `page_status`, `updated_at`, `created_at`) VALUES
(16, 3, 'Trang liên hệ pipe_tobacco', 'contact,pipe_tobacco', 'Thông tin liên hệ pipe_tobacco đại lý chuyên cung cấp thuốc lào lớn nhất đông nam Á', '<p>ĐỊA CHỈ 1</p>\r\n\r\n<p>91 ng&otilde; 87 Tam Trinh, Mai Động, Ho&agrave;ng Mai, H&agrave; Nội</p>\r\n\r\n<p><a href=\"https://g.page/donghophanhien?share\">ĐỊA CHỈ 2</a></p>\r\n\r\n<p><a href=\"https://g.page/donghophanhien?share\">Số 7 Trần Ph&uacute;, Ba Đ&igrave;nh, H&agrave; Nội (Đồng hồ FAN HIỀN)</a></p>\r\n\r\n<p><a href=\"https://g.page/NeonQ6?share\">ĐỊA CHỈ 3</a></p>\r\n\r\n<p><a href=\"https://g.page/NeonQ6?share\">491 Hậu Giang, P11, Q6, TP HCM (CC Him Lam Chợ Lớn)</a></p>\r\n\r\n<p><a href=\"tel:0936403931\">SỐ ĐIỆN THOẠI MOBI</a></p>\r\n\r\n<p><a href=\"tel:0936403931\">Tel: 0936403931 (c&oacute; zalo)</a></p>\r\n\r\n<p><a href=\"tel:0977734743\">SỐ ĐIỆN THOẠI VIETTEL</a></p>\r\n\r\n<p><a href=\"tel:0977734743\">Tel: 0977734743</a></p>\r\n\r\n<p>THỜI GIAN L&Agrave;M VIỆC</p>\r\n\r\n<p><strong>H&agrave; Nội:</strong><br />\r\nKho Tam Trinh:<br />\r\nThứ hai - Chủ Nhật: 08:00 - 21:00<br />\r\nKho Trần Ph&uacute;:<br />\r\nThứ hai - Chủ Nhật: 09:00 - 11:30 v&agrave; 15:00 - 21:00<br />\r\n<strong>S&agrave;i G&ograve;n:</strong><br />\r\nKho Hậu Giang:<br />\r\nThứ hai - Chủ Nhật: 08:00 - 21:00</p>\r\n\r\n<p>DỊCH VỤ CHUY&Ecirc;N NGHIỆP</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n online, đừng ngần ngại gọi cho ch&uacute;ng t&ocirc;i bất cứ l&uacute;c n&agrave;o.</p>\r\n\r\n<h3>Mong nhận được phản hồi từ bạn</h3>\r\n\r\n<p>T&ecirc;n của bạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Email của bạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tin nhắn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Enter the code in the box below</p>\r\n\r\n<p><img alt=\"\" src=\"https://neon.vn/index.php?route=extension/captcha/basic/captcha\" /></p>\r\n\r\n<p>T&ocirc;i đ&atilde; đọc v&agrave; đồng &yacute; với điều khoản&nbsp;<a href=\"https://neon.vn/index.php?route=information/information/agree&amp;information_id=3\"><strong>Privacy Policy</strong></a></p>\r\n\r\n<p>GỬI ĐI</p>\r\n', '2022-08-12-10-38-19-', 1, NULL, NULL),
(17, 4, 'Giới thiệu về pipe_tobacco Việt Nam', 'pipe_tobacco ,about-us', 'Giới thiệu về pipe_tobacco Việt Nam', '<p>Theo khuyến c&aacute;o của WHO, những người h&uacute;t thuốc c&oacute; nguy cơ biến chứng nghi&ecirc;m trọng do Covid - 19 cao hơn so với những người kh&ocirc;ng h&uacute;t thuốc.</p>\r\n\r\n<p>Nhớ ai như nhớ thuốc l&agrave;o&nbsp;&nbsp;<br />\r\nĐ&atilde; ch&ocirc;n điếu xuống, lại đ&agrave;o điếu l&ecirc;n...&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp; Thuốc l&agrave;o, thuốc l&aacute;, thuốc r&ecirc;, thuốc l&aacute; điện tử&hellip;l&agrave; những chất g&acirc;y nghiện phổ biến trong cộng đồng. Ng&agrave;y nay, dẫu chưa dứt hẳn, nhưng lượng người d&ugrave;ng chất g&acirc;y nghiện n&agrave;y cũng đ&atilde; c&oacute; giảm thiểu khi cảnh b&aacute;o về t&aacute;c hại của ch&uacute;ng được đẩy mạnh tr&ecirc;n c&aacute;c phương tiện truyền th&ocirc;ng.<br />\r\n<br />\r\n&nbsp;Trong kh&oacute;i thuốc l&aacute; n&oacute;i chung chứa hơn 4.000 loại ho&aacute; chất,&nbsp; trong đ&oacute; c&oacute; hơn 200 loại c&oacute; hại cho sức khoẻ, bao gồm chất g&acirc;y nghiện v&agrave; c&aacute;c chất g&acirc;y độc, gồm 4 nh&oacute;m ch&iacute;nh: Nicotin, kh&iacute; CO, c&aacute;c ph&acirc;n tử nhỏ v&agrave; chất g&acirc;y ung thư.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\" Khói thuốc lá có hơn 200 loại có hại cho sức \" src=\"https://www.minhanhhospital.com.vn/uploads/news/2021_06/khoi-thuoc-la-co-hon-200-loai-co-hai-cho-suc-khoe.jpg\" style=\"height:315px; width:600px\" /></p>\r\n\r\n<p>&nbsp;Kh&oacute;i thuốc l&aacute; c&oacute; hơn 200 loại h&oacute;a chất c&oacute; hại cho sức khỏe</p>\r\n\r\n<p>&nbsp; V&igrave; độc hại như vậy, n&ecirc;n với những người h&uacute;t thuốc l&aacute; được xem l&agrave; những người đầu độc tự nguyện. Tuy nhi&ecirc;n thực tế họ đ&acirc;u chỉ tự đầu độc m&igrave;nh, khi đ&acirc;y đ&oacute;, những l&agrave;n kh&oacute;i thuốc vẫn c&ograve;n v&ocirc; tư lan tỏa tại c&aacute;c nơi c&ocirc;ng cộng &ndash; nơi tập trung kh&ocirc;ng &iacute;t&nbsp; trẻ em, người gi&agrave;, phụ nữ &hellip;<br />\r\n<br />\r\n&nbsp; Theo Tổ chức Y tế Thế giới ( WHO ) th&igrave; thuốc l&aacute; giết chết hơn 8 triệu người tr&ecirc;n to&agrave;n cầu mỗi năm. Trong đ&oacute; hơn 7 triệu người tử vong do sử dụng thuốc l&aacute; trực tiếp v&agrave; khoảng 1,2 triệu người tử vong d&ugrave; kh&ocirc;ng h&uacute;t thuốc nhưng tiếp x&uacute;c với kh&oacute;i thuốc một c&aacute;ch thụ động.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.minhanhhospital.com.vn/uploads/news/2021_06/dung-de-khoi-thuoc-gay-hai-den-cac-thien-than-nho-be-cua-chung-ta.jpg\" style=\"height:350px; width:600px\" /></p>\r\n\r\n<p>Đừng để kh&oacute;i thuốc đầu độc c&aacute;c thi&ecirc;n thần nhỏ b&eacute; của ch&uacute;ng ta</p>\r\n\r\n<p>&nbsp; V&agrave; trong cơn đại dịch COVID &ndash; 19 n&agrave;y, v&igrave; sao WHO đưa ra TUY&Ecirc;N BỐ : H&Uacute;T THUỐC L&Aacute; V&Agrave; COVID &ndash; 19? V&igrave; theo đ&aacute;nh gi&aacute; của hội đồng c&aacute;c chuy&ecirc;n gia y tế c&ocirc;ng cộng được WHO triệu tập v&agrave;o ng&agrave;y 29 th&aacute;ng 4 năm 2020 cho thấy: những người h&uacute;t thuốc c&oacute; nguy cơ mắc c&aacute;c biến chứng nghi&ecirc;m trọng về sức khỏe do COVID-19 cao hơn so với những người kh&ocirc;ng h&uacute;t thuốc.</p>\r\n\r\n<p>&nbsp; COVID-19 l&agrave; một bệnh truyền nhiễm chủ yếu tấn c&ocirc;ng phổi. H&uacute;t thuốc l&aacute; l&agrave;m suy yếu chức năng phổi khiến cơ thể kh&oacute; chống lại vi r&uacute;t corona v&agrave; c&aacute;c bệnh kh&aacute;c. H&uacute;t thuốc l&aacute; cũng l&agrave; yếu tố nguy cơ ch&iacute;nh đối với c&aacute;c bệnh kh&ocirc;ng l&acirc;y nhiễm như bệnh tim mạch, ung thư, bệnh h&ocirc; hấp v&agrave; đ&aacute;i th&aacute;o đường, khiến những người mắc c&aacute;c bệnh n&agrave;y c&oacute; nguy cơ mắc bệnh nặng hơn khi bị nhiễm COVID-19. C&aacute;c nghi&ecirc;n cứu cho thấy những người h&uacute;t thuốc khi mắc COVID-19 c&oacute; nguy cơ mắc bệnh nặng v&agrave; tử vong cao hơn .</p>\r\n\r\n<p><br />\r\n&nbsp; WHO khuyến c&aacute;o người h&uacute;t thuốc n&ecirc;n bắt đầu thực hiện ngay c&aacute;c bước để bỏ thuốc, &nbsp;bằng c&aacute;ch sử dụng c&aacute;c phương ph&aacute;p đ&atilde; được chứng minh, như tư vấn bỏ thuốc qua số điện thoại miễn ph&iacute; (ở Việt Nam l&agrave; số 18006606), chương tr&igrave;nh nhắn tin gi&uacute;p bỏ thuốc qua điện thoại di động v&agrave; liệu ph&aacute;p thay thế nicotin.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp; Khi đề cập đến chuyện bỏ thuốc l&aacute;, hẳn sẽ c&oacute; những &yacute; kiến cho rằng thuốc l&aacute; kh&oacute; bỏ lắm. Thực sự th&igrave; cũng c&oacute; người tự nguyện bỏ nhưng bỏ kh&ocirc;ng được, hoặc bỏ rồi, lại h&uacute;t lại&hellip;T&ocirc;i c&oacute; một đồng nghiệp, bản th&acirc;n anh cũng l&agrave; người hay ph&igrave; ph&egrave;o thuốc l&aacute;,&nbsp; một ng&agrave;y kia anh gặp mọi người v&agrave; khoe một sản phẩm cai thuốc l&aacute; tuyệt vời lắm, ảnh mới d&ugrave;ng ng&agrave;y đầu m&agrave; đ&atilde; kh&ocirc;ng c&ograve;n thấy th&egrave;m thuốc l&aacute; nữa. Vậy m&agrave;, tuần sau, t&ocirc;i lại đ&atilde; thấy điếu thuốc tr&ecirc;n tay anh. Anh thố lộ thuốc l&aacute; kh&oacute; bỏ qu&aacute;&hellip;</p>\r\n\r\n<p>&nbsp; Bản th&acirc;n t&ocirc;i cũng l&agrave; kẻ nghiện thuốc l&aacute;, thuốc l&aacute; nặng mới đủ đ&ocirc;. V&agrave; t&ocirc;i bỏ thuốc l&aacute;. &nbsp;Kh&ocirc;ng cần hứa, kh&ocirc;ng cần tuy&ecirc;n bố, t&ocirc;i bỏ c&aacute;i rụp, cho đến tận giờ cũng 30 năm hơn&hellip;Ng&agrave;y ấy, thời gian đầu cũng bức rức, kh&oacute; chịu lắm, nhưng t&ocirc;i cứ &acirc;m thầm đếm ng&agrave;y vượt qua, 1 tuần, 2 tuần&hellip;rồi 1 th&aacute;ng, 2 th&aacute;ng&hellip;Vượt qua th&aacute;ng thứ 1 đ&atilde; cảm thấy tr&iacute; &oacute;c thảnh thơi, th&aacute;ng thứ 2 coi như chắc chắn.&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp; V&igrave; sao t&ocirc;i bỏ thuốc l&aacute;? Đơn giản th&ocirc;i, chỉ v&igrave; vợ, v&igrave; con. T&ocirc;i kh&ocirc;ng muốn vợ con bị ảnh hưởng bởi kh&oacute;i thuốc.</p>\r\n\r\n<p>&nbsp; Bỏ thuốc l&aacute; rồi, ngồi caf&eacute; với bạn b&egrave;, h&iacute;t phải kh&oacute;i thuốc của người xung quanh, t&ocirc;i mới hiểu sự chịu đựng của những người kh&ocirc;ng h&uacute;t thuốc ( m&agrave; bản th&acirc;n t&ocirc;i &nbsp;cũng từng v&ocirc; tư thả kh&oacute;i như vậy).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.minhanhhospital.com.vn/uploads/news/2021_06/van-con-nhung-phu-nu-phai-di-dieu-tri-vi-khoi-thuoc-la.jpg\" style=\"height:1200px; width:800px\" /></p>\r\n\r\n<p>Vẫn c&ograve;n những phụ nữ phải đi điều trị v&igrave; kh&oacute;i thuốc l&aacute;</p>\r\n\r\n<p>&nbsp; Giờ đ&acirc;y, trước diễn biến phức tạp của đại dịch COVID &ndash; 19, kh&ocirc;ng &iacute;t những người h&uacute;t thuốc l&aacute; phải ở nh&agrave; v&igrave; gi&atilde;n c&aacute;ch x&atilde; hội, kh&ocirc;ng c&ograve;n dịp b&ugrave; kh&uacute; với bạn b&egrave; qua c&aacute;c buổi cafe, hay cuộc nhậu. Vậy chăng n&ecirc;n xem thời gian đ&acirc;y l&agrave; cơ hội để bỏ thuốc l&aacute;, để bảo vệ sức khỏe, vợ con, cha mẹ, những người xung quanh, v&agrave; ch&iacute; &iacute;t l&agrave; bản th&acirc;n m&igrave;nh, &nbsp;khi người h&uacute;t thuốc l&aacute; l&agrave; đối tượng dễ gục ng&atilde; trước con COVID &ndash; 19.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0f6145ddff640a403cf9e1576381a129.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `product_name` varchar(400) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_path` varchar(255) NOT NULL,
  `qr_code` text DEFAULT NULL,
  `hot` tinyint(1) DEFAULT 0 COMMENT '0: không, 1: có',
  `origin` text DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL COMMENT 'gram',
  `unit_cost` int(11) DEFAULT NULL,
  `real_cost` int(11) DEFAULT NULL,
  `selled` int(11) DEFAULT NULL,
  `product_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_image_slide` varchar(600) DEFAULT NULL,
  `product_status` tinyint(1) NOT NULL COMMENT '1: active, 0: inactive',
  `product_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `discount`, `product_name`, `brand_id`, `category_id`, `product_path`, `qr_code`, `hot`, `origin`, `amount`, `weight`, `unit_cost`, `real_cost`, `selled`, `product_title`, `product_description`, `product_image`, `product_image_slide`, `product_status`, `product_content`, `updated_at`, `created_at`) VALUES
(1, 0, 'Thuốc Lào Yên Lãng Loại Vip+ (1 lạng)', 1, 4, 'thuoc-lao-yen-lang-loai-vip-1-lang', '0', 1, NULL, 0, 100, 150000, NULL, NULL, 'Thuốc Lào Yên Lãng Loại Vip+ (1 lạng)', '<h1>Thuốc L&agrave;o Y&ecirc;n L&atilde;ng Loại Vip+ (1 lạng)</h1>', 'thuoc-lao-nam-de-300x300.jpg', '2022-08-17-18-24-57-', 1, '<p>&nbsp;Đậm &ndash; Say: Khi r&iacute;t ở kh&oacute;i đầu c&oacute; thể cảm nhận ngay được, lưỡi c&oacute; cảm gi&aacute;c bị ch&igrave;m xuống, đi đến đ&acirc;u l&agrave; biết đến đấy nếu kh&ocirc;ng quen sẽ l&acirc;ng l&acirc;ng ngay từ Nặng.</p>\r\n\r\n<ul>\r\n	<li><strong><em>Mua 1 lạng: 150.000 VNĐ</em></strong></li>\r\n	<li><strong><em>Mua 2 lạng: miễn ph&iacute; vận chuyển</em></strong></li>\r\n	<li><strong><em>Mua 6 lạng: Tặng th&ecirc;m 1 lạng</em></strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-10-24', NULL),
(3, 0, 'Thuốc Lào Yên Lãng Loại Đặc Biệt (1 lạng)', 1, 4, 'thuoc-lao-yen-lang-loai-dac-biet-1-lang', '0', 1, NULL, 0, 0, 200000, NULL, NULL, 'Thuốc Lào Yên Lãng Loại Đặc Biệt (1 lạng)', '<h1>Thuốc L&agrave;o Y&ecirc;n L&atilde;ng Loại Đặc Biệt (1 lạng)</h1>\r\n', '2022-08-17-18-14-16-thuoc-lao-nam-de-1-1.jpg', '2022-08-17-18-24-36-', 1, '<p>-&nbsp; &Ecirc;m: Ngấm từ từ v&agrave; c&oacute; hậu, c&oacute; tuyết.</p>\r\n\r\n<p>- Ngọt: Rất đ&aacute;ng để thưởng thức v&igrave; khi sử dụng sẻ phải k&eacute;o rất chậm tay cầm điếu c&oacute; cảm gi&aacute;c rung rung nhẹ theo tiếng k&ecirc;u của n&otilde; điếu, để lại cho sự cảm nhận r&otilde; n&eacute;t nhất l&agrave; c&oacute; vị ngọt khi h&uacute;t v&agrave;o củng như thở ra, r&otilde; nhất l&agrave; hơi kh&oacute;i cuối c&ugrave;ng khi thở ra.</p>\r\n\r\n<p>- Giai: D&agrave;y kh&oacute;i. c&oacute; thể kiểm so&aacute;t được lượng kh&oacute;i.</p>\r\n\r\n<ul>\r\n	<li><strong><em>Mua 1 hộp: 200.000 VNĐ</em></strong></li>\r\n	<li><strong><em>Mua 2 hộp: miễn ph&iacute; vận chuyển</em></strong></li>\r\n	<li><strong><em>Mua 6 hộp: Tặng th&ecirc;m 1 hộp</em></strong></li>\r\n</ul>\r\n', NULL, NULL),
(4, 0, 'Thuốc Lào mộc Vĩnh Bảo ( rất êm và thơm)', 1, 4, 'thuoc-lao-moc-vinh-bao-rat-em-va-thom', '0', 0, NULL, 0, 0, 150000, NULL, NULL, '', '<h1>Thuốc L&agrave;o mộc Vĩnh Bảo</h1>\r\n', 'Screenshot 2022-08-17 190844.png', '2022-08-17-19-14-33-', 1, '<p>Thuốc mộc sạch, Say &ecirc;m,c&oacute; hậu, rất thơm.</p>\r\n', NULL, NULL),
(5, 0, 'Thuốc Lào mộc Hoằng Hóa (say sốc, đậm, thơm)', 1, 4, 'thuoc-lao-moc-hoang-hoa-say-soc-dam-thom', '0', 0, NULL, 0, 0, 200000, NULL, NULL, '', '<h1>Thuốc L&agrave;o mộc Hoằng H&oacute;a</h1>\r\n', '2022-08-17-19-16-50-Screenshot 2022-08-17 191524.png', '2022-08-17-19-16-50-', 1, '<p>Thuốc l&agrave;o mộc, &ecirc;m, say bốc.</p>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(11) NOT NULL,
  `site_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `site_email` varchar(100) DEFAULT NULL,
  `promo` text DEFAULT NULL,
  `site_phone` varchar(100) DEFAULT NULL,
  `site_phone_2` varchar(15) DEFAULT NULL,
  `site_address` varchar(100) DEFAULT NULL,
  `site_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_copyright` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_working_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `working_mobile` varchar(255) DEFAULT NULL,
  `site_logo` varchar(200) DEFAULT NULL,
  `site_favicon` varchar(200) DEFAULT NULL,
  `site_facebook` varchar(200) DEFAULT NULL,
  `site_twitter` varchar(200) DEFAULT NULL,
  `site_google` varchar(200) DEFAULT NULL,
  `site_youtube` varchar(200) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_name`, `website_url`, `site_email`, `promo`, `site_phone`, `site_phone_2`, `site_address`, `site_description`, `site_keywords`, `site_copyright`, `footer_working_image`, `working_mobile`, `site_logo`, `site_favicon`, `site_facebook`, `site_twitter`, `site_google`, `site_youtube`, `updated_at`, `created_at`) VALUES
(1, 'Thiết bị vệ sinh', 'thietbivesinh.vn', 'pipe_tobacco@pipe_tobacco.com', 'Giao hàng MIỄN PHÍ 1 hãng trên 1.900.000đ tại TPHCM, Hà Nội. Có dịch vụ lắp đặt.', '0326152310', '0326152310', 'http://localhost/pipe_tobacco', 'Đại lý thuốc lào lớn nhất thế giới', 'pipe_tobacco', 'pipe_tobacco Hoàng Tâm', '', NULL, 'logo.png', 'favicon.png', 'goddie9x3', 'goddie9x', 'goddie9x', 'goddie9x', '2022-10-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_path` varchar(255) NOT NULL DEFAULT '',
  `slide_image` varchar(200) DEFAULT NULL,
  `slide_status` tinyint(4) NOT NULL COMMENT '0: ẩn, 1: hiện',
  `for_page` varchar(100) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_name`, `slide_path`, `slide_image`, `slide_status`, `for_page`, `updated_at`, `created_at`) VALUES
(1, 'test', '', 'thuoc-lao-hoang-gia-goi-zip--1537445202.jpg', 1, 'home', NULL, NULL),
(2, '1', '', 'sp2.2.jpg', 1, 'home', NULL, NULL),
(3, '2', '', 'img-bgt-2021-img-bgt-2021-3-1625747037-width1200height630-1625747486-width1200height630.jpg', 1, 'home', NULL, NULL),
(4, '3', '', 'deo-khau-trang-di-cho-tet-phu-nu-muong-hut-chung-ong-dieu-2.jpg', 1, 'home', NULL, NULL),
(5, '4', '', 'images1359970_Cat_thuoc.jpg', 1, 'home', NULL, NULL),
(6, '5', '', '20190613_102931_514175_cay-thuoc-lao.max-1800x1800.jpg', 1, 'home', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `account` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT '1: Nữ, 2: Nam, 3: giới tính khác',
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `role` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: admin, 1: customer',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` text DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `account`, `user_image`, `gender`, `address`, `phone`, `banned`, `role`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'user_name', 'user_name', NULL, NULL, NULL, NULL, 0, 0, 'user_name@yahoo.com', '$2y$10$1d66jUN/sT//QpNbSL/zf.ZZxyYJ32o5st1d8QRH46FegvLINNbQ6', 'rPrxB7sdDWjg7iMjrvmWG48bNHVcbW1hrboMGaZ0biKQoDG6pcRzS1p9WPvG', '2022-10-17', '2022-10-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `path` (`path`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_parent_id` (`category_parent_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `footer_info`
--
ALTER TABLE `footer_info`
  ADD PRIMARY KEY (`footer_info_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `invoice_per_product`
--
ALTER TABLE `invoice_per_product`
  ADD PRIMARY KEY (`invoice_per_product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `nav_id` (`nav_id`);

--
-- Indexes for table `page_detail`
--
ALTER TABLE `page_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_path` (`product_path`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_info`
--
ALTER TABLE `footer_info`
  MODIFY `footer_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice_per_product`
--
ALTER TABLE `invoice_per_product`
  MODIFY `invoice_per_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_detail`
--
ALTER TABLE `page_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`category_parent_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `invoice_per_product`
--
ALTER TABLE `invoice_per_product`
  ADD CONSTRAINT `invoice_per_product_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`),
  ADD CONSTRAINT `invoice_per_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`nav_id`) REFERENCES `nav` (`nav_id`);

--
-- Constraints for table `page_detail`
--
ALTER TABLE `page_detail`
  ADD CONSTRAINT `page_detail_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
