-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2022 lúc 07:16 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mvcgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Hoang Chau', 'wildrichair123@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `brandId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `description`, `content`, `brandId`, `image`, `status`) VALUES
(6, 'What’s New About the Nike Air Zoom Alphafly NEXT% 2', '<h2 class=\"story__headline\">What&rsquo;s New About the Nike Air Zoom Alphafly NEXT% 2</h2>', '<div class=\"story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"overlay overlay--nav overlay--image-gallery\">\r\n<div class=\"c-global-navigation c-global-navigation--white\"><nav class=\"c-nav\"><header class=\"c-header c-header--white\">\r\n<div class=\"c-utility__container\">\r\n<div class=\"c-hamburger__lines\">&nbsp;</div>\r\n</div>\r\n</header>\r\n<div class=\"c-nav__contents story__container\">&nbsp;</div>\r\n</nav></div>\r\n</div>\r\n<div class=\"js-infinite-scroll\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<ul>\r\n<li>\r\n<p class=\"text--p\"><span>Nike Air Zoom Alphafly NEXT% 2 được thiết kế để vượt qua ranh giới của hiệu suất trong cuộc đua marathon v&agrave; đường d&agrave;i.</span></p>\r\n</li>\r\n<li>\r\n<p class=\"text--p\"><span>Hệ thống bao gồm đế giữa bằng bọt Nike ZoomX c&oacute; chiều d&agrave;i đầy đủ, một tấm carbon cong, phần tr&ecirc;n Atomknit 2.0, đế ngo&agrave;i bằng cao su mỏng v&agrave; phần g&oacute;t rộng.</span></p>\r\n</li>\r\n<li>\r\n<p class=\"text--p\"><span>Alphafly NEXT% 2 được x&acirc;y dựng dựa tr&ecirc;n những b&agrave;i học từ Alphafly ban đầu, đ&aacute;nh dấu một chương kh&aacute;c trong sự tập trung kh&ocirc;ng ngừng của Nike v&agrave;o việc thiết kế cho vận động vi&ecirc;n chạy bộ.</span></p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<p class=\"text--p\"><span>Đ&aacute;nh dấu chương tiếp theo của sự tập trung kh&ocirc;ng ngừng của Nike v&agrave;o việc thiết kế cho người chạy bộ, Nike Air Zoom Alphafly NEXT% 2 ho&agrave;n to&agrave;n mới được chế tạo để đạt hiệu suất cao nhất cho c&aacute;c cuộc đua marathon v&agrave; đường d&agrave;i.&nbsp;Một thiết kế s&aacute;ng tạo được x&acirc;y dựng dựa tr&ecirc;n những b&agrave;i học từ lần lặp lại đầu ti&ecirc;n của gi&agrave;y đua đỉnh cao của Nike, Alphafly NEXT% 2 hiện phục vụ cho tương lai của những vận động vi&ecirc;n chạy bộ ở mọi cấp độ.</span></p>\r\n<p class=\"text--p\"><span>C&aacute;c bản cập nhật cho Alphafly NEXT% 2 tập trung v&agrave;o việc tinh chỉnh kết cấu của gi&agrave;y để đưa tất cả c&aacute;c vận động vi&ecirc;n vượt qua qu&atilde;ng đường marathon với độ ổn định v&agrave; khả năng chuyển tiếp được cải thiện.</span></p>\r\n<p class=\"text--p\"><span>Đ&uacute;ng như&nbsp;</span><a class=\"text--link\" href=\"https://news.nike.com/news/what-to-know-about-nike-next\" target=\"_blank\" rel=\"noopener\"><span>nguồn gốc của n&oacute;</span></a><span>&nbsp;, đế giữa của Alphafly NEXT% 2 được l&agrave;m từ sự kết hợp của bọt ZoomX to&agrave;n chiều d&agrave;i (loại bọt nhẹ nhất v&agrave; đ&agrave;n hồi nhất của Nike), một tấm carbon cong c&oacute; chiều d&agrave;i đầy đủ v&agrave; c&aacute;c pod Zoom Air k&eacute;p - cung cấp cho người chạy một lực đẩy, nhẹ v&agrave; hỗ trợ đi xe.</span></p>\r\n<p class=\"text--p\"><span>Lớp bọt bổ sung đ&atilde; được th&ecirc;m v&agrave;o b&ecirc;n dưới c&aacute;c vỏ Zoom Air ở b&agrave;n ch&acirc;n trước, mang lại nhiều năng lượng hơn v&agrave; gi&uacute;p đảm bảo qu&aacute; tr&igrave;nh chuyển đổi su&ocirc;n sẻ từ g&oacute;t ch&acirc;n sang b&agrave;n ch&acirc;n trước khi người chạy thực hiện bước đi của họ.&nbsp;G&oacute;t ch&acirc;n rộng hơn một ch&uacute;t gi&uacute;p cải thiện sự ổn định v&agrave; chuyển tiếp khi thay đổi nhịp độ.&nbsp;Phần tr&ecirc;n hiện c&oacute; Atomknit 2.0, được thiết kế để ngăn ở b&agrave;n ch&acirc;n trước, khả năng thở ở tr&ecirc;n c&aacute;c ng&oacute;n ch&acirc;n v&agrave; đệm thoải m&aacute;i dưới d&acirc;y buộc.</span></p>\r\n<p class=\"text--p\"><span>Lấy cảm hứng từ c&aacute;c vận động vi&ecirc;n marathon ưu t&uacute; của Nike, đường phối m&agrave;u nguy&ecirc;n mẫu của Alphafly NEXT% 2 l&agrave; một sự gật đầu cho qu&aacute; tr&igrave;nh ph&aacute;t triển thử nghiệm của Nike với c&aacute;c vận động vi&ecirc;n.&nbsp;Đường m&agrave;u n&agrave;y c&oacute; số kiểm tra độ m&ograve;n ở mặt giữa c&ugrave;ng với c&aacute;c mảng m&agrave;u l&agrave;m nổi bật t&uacute;i Zoom Air k&eacute;p.</span></p>\r\n<p class=\"text--p\"><span>Elliott Heath, Gi&aacute;m đốc Sản phẩm Gi&agrave;y chạy bộ của Nike cho biết: &ldquo;Alphafly NEXT% 2 được thiết kế d&agrave;nh cho c&aacute;c vận động vi&ecirc;n nỗ lực hết m&igrave;nh trong cuộc đua marathon.&nbsp;&ldquo;Kể từ khi ra đời, Alphafly đ&atilde; được truyền cảm hứng từ những vận động vi&ecirc;n ưu t&uacute; nhất đang theo đuổi c&aacute;c kỷ lục thế giới.&nbsp;C&aacute;c cập nhật m&agrave; ch&uacute;ng t&ocirc;i đ&atilde; thực hiện trong lần lặp thứ hai tiếp tục trang bị cho c&aacute;c vận động vi&ecirc;n ưu t&uacute; cạnh tranh tr&ecirc;n đấu trường thế giới nhưng tập trung v&agrave;o việc cải thiện trải nghiệm đua cho tất cả c&aacute;c vận động vi&ecirc;n theo đuổi th&agrave;nh t&iacute;ch c&aacute; nh&acirc;n của họ. \"</span></p>\r\n<p class=\"text--p\"><span>Đường phối m&agrave;u nguy&ecirc;n mẫu của Nike Air Zoom Alphafly NEXT% 2 được ph&aacute;t h&agrave;nh với số lượng hạn chế bắt đầu từ ng&agrave;y 15 th&aacute;ng 6. Sẽ c&oacute; nhiều đường phối m&agrave;u kh&aacute;c theo sau.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '63395e688f.jpg', 0),
(8, 'Bộ sưu tập Converse Pride 2022 kỷ niệm \"Gia đình được thành lập\"', '<p>&nbsp;</p>\r\n<h2 class=\"story__headline\"><span>Bộ sưu tập Converse Pride 2022 kỷ niệm \"Gia đ&igrave;nh được th&agrave;nh lập\"</span></h2>', '<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<ul>\r\n<li><span>Bộ sưu tập Converse Pride năm nay được thiết kế xoay quanh chủ đề \"Gia đ&igrave;nh s&aacute;ng lập\", t&ocirc;n vinh những c&aacute; nh&acirc;n n&acirc;ng đỡ lẫn nhau tr&ecirc;n nhiều ng&atilde; tư của cộng đồng LGBTQIA +.</span></li>\r\n<li>\r\n<p class=\"text--p\"><span>C&aacute;c b&oacute;ng bao gồm Run Star Motion, Chuck 70 Hi, Chuck Taylor Hi v&agrave; Lift Ox, One Star v&agrave; All Star Slide.</span></p>\r\n</li>\r\n<li>\r\n<p class=\"text--p\"><span>Ra mắt c&ugrave;ng với việc ph&aacute;t h&agrave;nh bộ sưu tập l&agrave; một trải nghiệm thư viện kỹ thuật số giới thiệu những c&acirc;u chuyện c&aacute; nh&acirc;n của hơn 50 c&aacute; nh&acirc;n trong cộng đồng LGBTQIA + của thương hiệu v&agrave; một bộ phim đầu tay của Richie Shazam.</span></p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<p class=\"text--p\"><span>Bộ sưu tập Converse Pride 2022 được thống nhất bằng c&aacute;ch xử l&yacute; đồ họa đại diện cho sự đa dạng tuyệt đẹp của cộng đồng LGBTQIA +.&nbsp;C&acirc;u thần ch&uacute; của m&ugrave;a, &ldquo;Family, Unity,&rdquo; xuất hiện tr&ecirc;n c&aacute;c b&oacute;ng như Chuck 70, Chuck Taylor All Star v&agrave; Run Star Motion, cũng như Chuck Taylor All Star Lift Ox, All Star Slide v&agrave; lần đầu ti&ecirc;n, Một Ng&ocirc;i sao, cũng như nhiều loại quần &aacute;o v&agrave; mũ n&oacute;n.&nbsp;Một thiết kế chắp v&aacute;, được m&ocirc; phỏng theo bản in khăn rằn cầu vồng dốc, gợi l&ecirc;n cảm gi&aacute;c ấm &aacute;p, gia đ&igrave;nh v&agrave; th&acirc;n thuộc.&nbsp;Đồ họa cầu vồng v&agrave; đường n&eacute;t uyển chuyển được t&igrave;m thấy tr&ecirc;n khắp c&aacute;c mẫu gi&agrave;y d&eacute;p của bộ sưu tập.&nbsp;</span></p>\r\n<p class=\"text--p\"><span>Converse By You, nền tảng c&aacute; nh&acirc;n h&oacute;a sản phẩm của thương hiệu, cung cấp c&aacute;c t&ugrave;y chọn c&oacute; thể t&ugrave;y chỉnh bao gồm miếng d&aacute;n, biển số v&agrave; d&acirc;y buộc &ldquo;All Star&rdquo; - lấy cảm hứng từ niềm tự h&agrave;o, song t&iacute;nh, lưỡng t&iacute;nh, đồng t&iacute;nh nữ, kh&ocirc;ng nhị ph&acirc;n v&agrave; chuyển giới v&agrave; cờ đo&agrave;n kết cho thể hiện c&aacute; nh&acirc;n một c&aacute;ch to&agrave;n diện hơn.</span></p>\r\n<p class=\"text--p\"><span>Bộ sưu tập đi k&egrave;m với một chiến dịch kỹ thuật số c&oacute; t&ecirc;n &ldquo;Found Family&rdquo;, giới thiệu những c&acirc;u chuyện v&agrave; nội dung từ trong cộng đồng LGBTQIA + của thương hiệu, bao gồm c&aacute;c th&agrave;nh vi&ecirc;n của mạng lưới nh&acirc;n vi&ecirc;n Converse\'s Pride, Cộng đồng All Star cơ sở v&agrave; từ&nbsp;</span><a class=\"text--link\" href=\"https://www.converse.com/c/pride\" target=\"_blank\" rel=\"noopener\"><span>c&aacute;c đối t&aacute;c t&aacute;c động đến cộng đồng v&agrave; x&atilde; hội của n&oacute;</span></a><span>&nbsp;.</span></p>\r\n<p class=\"text--p\"><span>Hơn 50 nh&agrave; s&aacute;ng tạo từ cộng đồng LGBTQIA + của Converse tr&ecirc;n khắp thế giới, từ Detroit đến Seoul, đ&atilde; đ&oacute;ng g&oacute;p những c&acirc;u chuyện Found Family của họ cho chiến dịch Pride năm nay.&nbsp;C&ugrave;ng với nhau, những c&acirc;u chuyện của họ - được kể qua ảnh, chữ viết, đoạn &acirc;m thanh v&agrave; t&aacute;c phẩm nghệ thuật - được sắp xếp v&agrave;o một ph&ograve;ng trưng b&agrave;y kỹ thuật số, hiện được trưng b&agrave;y tại&nbsp;</span><a class=\"text--link\" href=\"https://converse.gallery/found-family/\" target=\"_blank\" rel=\"noopener\"><span>Converse.Gallery/found-family</span></a><span>&nbsp;.&nbsp;Một bộ phim sắp tới của Richie Shazam, được thực hiện c&ugrave;ng với Converse, kể về c&acirc;u chuyện của Gia đ&igrave;nh S&aacute;ng lập của c&ocirc; v&agrave; sẽ c&ocirc;ng chiếu trong Li&ecirc;n hoan phim Tribeca ở Th&agrave;nh phố New York.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 6, '883aaa7f1e.jpg', 0),
(9, 'Bộ sưu tập Be True Summer 2022 tôn vinh sự lưu loát của cộng đồng', '<p>&nbsp;</p>\r\n<h2 class=\"story__headline\"><span>Bộ sưu tập Be True Summer 2022 t&ocirc;n vinh sự lưu lo&aacute;t của cộng đồng</span></h2>', '<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<ul>\r\n<li>\r\n<p class=\"text--p\"><a class=\"text--link\" href=\"https://www.nike.com/BeTrue\" target=\"_blank\" rel=\"noopener\"><span>Bộ sưu tập Be True</span></a><span>&nbsp;của Nike&nbsp;t&ocirc;n vinh những vận động vi&ecirc;n đang mở rộng thể thao cho thế hệ tiếp theo - trong v&agrave; ngo&agrave;i s&acirc;n cỏ - v&agrave; truyền cảm hứng cho những người kh&aacute;c cảm thấy niềm vui khi được sống ch&acirc;n thực. &nbsp;</span></p>\r\n</li>\r\n<li>\r\n<p class=\"text--p\"><span>Bộ sưu tập m&ugrave;a h&egrave; 2022 bao gồm một SB Dunk Low, một Cortez, một sandal Oneonta v&agrave; một số trang phục chọn lọc.</span></p>\r\n</li>\r\n<li>\r\n<p class=\"text--p\"><span>Từ việc hỗ trợ nh&acirc;n vi&ecirc;n của Nike bằng c&aacute;c c&ocirc;ng cụ như ch&iacute;nh s&aacute;ch v&agrave; hướng dẫn về Nhận dạng Giới v&agrave; Chuyển đổi của c&ocirc;ng ty, đến việc hợp t&aacute;c với c&aacute;c tổ chức như Chiến dịch Nh&acirc;n quyền, GenderCool v&agrave; GLAAD, để n&acirc;ng cao tiếng n&oacute;i của c&aacute;c vận động vi&ecirc;n, Nike đang h&agrave;nh động để tạo ra một thế giới tốt đẹp hơn v&agrave; cam kết hỗ trợ s&acirc;u sắc cộng đồng LGBTQIA2S +.</span></p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"story__container story__container\">\r\n<div class=\"row justify-content-md-center\">\r\n<div class=\"story__column\">\r\n<div class=\"se-copy text--p\">\r\n<p class=\"text--p\"><span>Bộ sưu tập Nike Be True d&agrave;nh cho m&ugrave;a h&egrave; 2022 tạo ra khả năng hiển thị cho cộng đồng v&agrave; gi&uacute;p tất cả c&aacute;c vận động vi&ecirc;n thể hiện niềm tự h&agrave;o được l&agrave; ch&iacute;nh m&igrave;nh.&nbsp;Nh&igrave;n xa hơn cầu vồng truyền thống, c&aacute;c thiết kế của sản phẩm pha trộn m&agrave;u sắc để thể hiện quan điểm đa dạng của cộng đồng LGBTQIA2S +.</span></p>\r\n<p class=\"text--p\"><span>Sự ủng hộ của Nike kh&ocirc;ng chỉ l&agrave; sản phẩm.&nbsp;Kể từ năm 2019, NIKE, Inc. đ&atilde; cung cấp 2,7 triệu đ&ocirc; la hỗ trợ cho c&aacute;c hoạt động LGBTQIA2S + nhằm th&uacute;c đẩy sự h&ograve;a nhập v&agrave; t&ocirc;n vinh niềm đam m&ecirc; thể thao của tất cả c&aacute;c vận động vi&ecirc;n.&nbsp;C&aacute;c tổ chức n&agrave;y bao gồm c&aacute;c nh&agrave; l&atilde;nh đạo phi lợi nhuận trong kh&ocirc;ng gian thể thao v&agrave; b&igrave;nh đẳng cho người chuyển giới bao gồm Athlete Ally, Out Foundation, GenderCool Project, LGBT SportSafe v&agrave; GLSEN.</span></p>\r\n<p class=\"text--p\"><span>Nike Oneonta Be True v&agrave; Nike SB Dunk Low ph&aacute;t h&agrave;nh ng&agrave;y 22 th&aacute;ng 6 qua SNKRS v&agrave; một số nh&agrave; b&aacute;n lẻ chọn lọc.&nbsp;Trang phục Be True ph&aacute;t h&agrave;nh ng&agrave;y 22 th&aacute;ng 6 tr&ecirc;n Nike.com, Ứng dụng Nike v&agrave; một số nh&agrave; b&aacute;n lẻ chọn lọc.&nbsp;Nike Cortez Be True ph&aacute;t h&agrave;nh v&agrave;o một ng&agrave;y sau đ&oacute;.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 2, '850f43dcfe.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(6, 'Converse'),
(9, 'New balance'),
(10, 'Vans');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(11, 15, 'ai48vo9mbdk89lsqbn6hn8jh32', 'NIKE SACAI', '2900000', 1, 'ac38c55724.png'),
(18, 14, 'oeua3le22c3kju5po8cjebvonq', 'NEW BALANCE KAWHI', '1500000', 1, '0e05c5dbd1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(4, 'Trẻ em');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `binhluan_id` int(11) NOT NULL,
  `tenbinhluan` varchar(255) NOT NULL,
  `binhluan` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(1, 'Nguyễn Hoàng Châu', '123 cộng hòa', 'Việt Nam', 'Việt Nam', '1000000', '0123456789', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(9, 14, 'NEW BALANCE KAWHI', 1, 1, '1500000', '0e05c5dbd1.png', 0, '2022-06-26 22:50:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(14, 'NEW BALANCE KAWHI', 2, 9, '<p><span>New Balance được th&agrave;nh lập v&agrave;o năm 1903 bởi một người Anh nhập cư William J. Riley tại Boston, Massachusetts.&nbsp;</span><span>Người thợ đ&oacute;ng gi&agrave;y 33 tuổi muốn gi&uacute;p đỡ những người gặp vấn đề với b&agrave;n ch&acirc;n của họ bằng c&aacute;ch ph&aacute;t triển đế khảm v&agrave; những đ&ocirc;i gi&agrave;y đặc biệt.</span></p>', 0, '1500000', '0e05c5dbd1.png'),
(15, 'NIKE SACAI', 2, 2, '<p>Gi&agrave;y Nike SB Dunk Low Street Hawker sử dụng chất liệu ch&iacute;nh h&atilde;ng, chuẩn 99% swagger cam kết chất lượng tốt nhất hiện nay</p>', 0, '2900000', 'ac38c55724.png'),
(16, 'VANS', 1, 10, '<p><span>Một m&oacute;n đồ quan trọng trong tủ quần &aacute;o, đ&ocirc;i gi&agrave;y thể thao Vans Old Skool n&agrave;y l&agrave; một sự bổ sung cổ điển cho bộ sưu tập của bạn.&nbsp;</span><span>Gh&eacute;p nối ch&uacute;ng với mọi thứ, từ mồ h&ocirc;i đến v&aacute;y v&agrave; bất cứ thứ g&igrave; ở giữa để th&ecirc;m yếu tố v&aacute;n trượt v&agrave;o vẻ ngo&agrave;i của bạn.</span></p>', 0, '1800000', '65cc464e42.jpg'),
(17, 'NIKE SB DUNK', 1, 2, '<p>NBA x Dunk Low EMB GS \'75th Anniversary -&lsquo;Chicago\' c&oacute; phối m&agrave;u trẻ trung, năng động chưa bao giờ lỗi thời, gi&uacute;p bạn kết hợp với những outfit kh&aacute;c nhau dễ d&agrave;ng - H&atilde;y gh&eacute; Minhshop để c&oacute; cơ hội trải nghiệm cũng như nhận được những mức gi&aacute; ưu đ&atilde;i tốt nhất nh&eacute;.</p>', 0, '3000000', '02a5595b85.jpg'),
(18, 'ADIDAS XPLR', 1, 1, '<p>Mua gi&agrave;y Adidas X PLR Shoes White CQ2964 ch&iacute;nh h&atilde;ng 100% c&oacute; sẵn tại Authentic Shoes. Giao h&agrave;ng miễn ph&iacute; trong 1 ng&agrave;y. Cam kết đền tiền X5 nếu ph&aacute;t hiện Fake. Đổi trả miễn ph&iacute; size. FREE vệ sinh gi&agrave;y trọn đời. MUA NGAY!</p>', 1, '2500000', '2273d259ac.jpg'),
(19, 'CONVERSE CHUCK TAYLOR', 1, 6, '<p><em><strong>Gi&agrave;y Converse Run Star Hike</strong></em>&nbsp;l&agrave; d&ograve;ng sản phẩm được kết hợp giữa&nbsp;<em><strong>Converse&nbsp;</strong></em>c&ugrave;ng JW Anderson. Trước đ&oacute;, sự kết hợp n&agrave;y đ&atilde; tr&igrave;nh l&agrave;ng những sản phẩm gi&agrave;y mang nhiều cải tiến để th&iacute;ch hợp hơn với bộ m&ocirc;n leo n&uacute;i. Ch&iacute;nh từ nguồn cảm hứng đ&oacute;, Run Star Hike đ&atilde; ra đời v&agrave; như một n&eacute;t chấm ph&aacute; trong phong c&aacute;ch quen thuộc thường thấy của Converse. Với những ưu điểm nổi bật về khả năng b&aacute;m bề mặt vừa mang t&iacute;nh thời trang với phần đế độc đ&aacute;o, những nh&agrave; nhận định thời trang nổi tiếng cũng phải thừa nhận rằng đ&acirc;y l&agrave; những sản phẩm đi trước thời đại. Phải chăng, v&igrave; thế m&agrave; những đ&ocirc;i&nbsp;<em><strong>gi&agrave;y Converse Run Star Hike</strong></em>&nbsp;đ&atilde; thừa thắng x&ocirc;ng l&ecirc;n tr&ecirc;n to&agrave;n thế giới với những ưu &aacute;i của idol H&agrave;n Quốc hay những stylist, fashionista nổi tiếng nhất.</p>', 0, '2900000', 'b921d38ec0.jpg'),
(21, 'CONVERSE X CTM X NBA X JEFF HAMILTON CHUCK', 1, 6, '<p>Converse Chuck Taylor l&agrave; một trong những đ&ocirc;i gi&agrave;y thể thao nổi tiếng nhất từng được sản xuất.&nbsp;Được đặt theo t&ecirc;n của cầu thủ b&oacute;ng rổ, loại gi&agrave;y n&agrave;y đ&atilde; trở th&agrave;nh một mặt h&agrave;ng chủ lực trong thời trang v&agrave; văn h&oacute;a đại ch&uacute;ng.</p>', 0, '2000000', '1747136c31.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(2, 1, 19, 'CONVERSE CHUCK TAYLOR', '2900000', 'b921d38ec0.jpg'),
(3, 1, 17, 'NIKE SB DUNK', '3000000', '02a5595b85.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`binhluan_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `binhluan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
