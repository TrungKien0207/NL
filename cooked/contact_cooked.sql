-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2020 lúc 05:14 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `contact_cooked`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_tenkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `c_ten`, `c_tenkd`, `c_img`, `created_at`, `updated_at`) VALUES
(1, 'Gỏi', 'goi', 'salad.png', '2020-03-19 03:31:56', '2020-03-19 03:31:56'),
(2, 'Kho', 'kho', 'hotspot.png', '2020-03-19 07:34:14', '2020-03-19 07:34:14'),
(3, 'Chiên', 'chien', 'breakfast.png', '2020-03-19 08:06:34', '2020-03-19 08:06:34'),
(4, 'Canh', 'canh', 'sauce.png', '2020-03-19 09:30:09', '2020-03-19 09:30:09'),
(5, 'Mứt', 'mut', 'snack.png', '2020-03-19 12:33:37', '2020-03-19 12:33:37'),
(6, 'Luộc - Hấp', 'luoc-hap', 'pasta.png', '2020-03-19 12:53:56', '2020-03-19 12:54:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idPro`, `contentC`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'wow! món này ngon tuyệt :3', '2020-03-19 03:50:35', '2020-03-19 03:50:35'),
(2, '2', '1', 'Cách làm hay quá :D', '2020-03-19 03:54:38', '2020-03-19 03:54:38'),
(3, '2', '4', 'ngon quá', '2020-04-16 08:53:16', '2020-04-16 08:53:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idproduct` tinyint(4) NOT NULL,
  `step` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentkd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail`
--

INSERT INTO `detail` (`id`, `idproduct`, `step`, `content`, `contentkd`, `note`, `bg`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '500gr chân gà rửa sạch, bắc nồi nước luộc chín chân gà khoảng 10 phút rồi vớt ra.', '500gr-chan-ga-rua-sach-bac-noi-nuoc-luoc-chin-chan-ga-khoang-10-phut-roi-vot-ra', 'Ngâm chân gà trong nước đá 10 phút giữ độ dai giòn.', 'goi-chan-ga-sot-thai-bg.jpg', 'goi-chan-ga-sot-thai-1-1.jpg', 'goi-chan-ga-sot-thai-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 03:41:52', '2020-03-19 03:41:52'),
(2, 1, '2', 'Cho vào cối giã nhuyễn 15gr hành tím, 20gr ớt khô, 20gr ớt hiểm. Trộn đều cùng 1 muỗng canh đường thốt nốt, 2 muỗng canh nước mắm ngon, 1 muỗng canh mắm nêm trộn thật đều, cuối cùng cho thêm 2 quả chanh cắt nhỏ vắt nước cốt.', 'cho-vao-coi-gia-nhuyen-15gr-hanh-tim-20gr-ot-kho-20gr-ot-hiem-tron-deu-cung-1-muong-canh-duong-thot-not-2-muong-canh-nuoc-mam-ngon-1-muong-canh-mam-nem-tron-that-deu-cuoi-cung-cho-them-2-qua-chanh-cat-nho-vat-nuoc-cot', NULL, NULL, 'goi-chan-ga-sot-thai-2-1.jpg', 'goi-chan-ga-sot-thai-2-2.jpg', 'goi-chan-ga-sot-thai-2-3.jpg', 'goi-chan-ga-sot-thai-2-4.jpg', NULL, NULL, '2020-03-19 03:46:57', '2020-03-19 03:46:57'),
(3, 1, '3', 'Đổ nước trộn gỏi vào tô lớn thêm 50gr đu đủ bào sợi, 50gr cà rốt bào sợi, 30gr rau ngò gai cắt nhỏ, 30gr đậu đũa cắt khúc, 2 trái cà chua bổ hình múi cau. Sau đó xếp chân gà và 50gr cóc rồi trộn đều.', 'do-nuoc-tron-goi-vao-to-lon-them-50gr-du-du-bao-soi-50gr-ca-rot-bao-soi-30gr-rau-ngo-gai-cat-nho-30gr-dau-dua-cat-khuc-2-trai-ca-chua-bo-hinh-mui-cau-sau-do-xep-chan-ga-va-50gr-coc-roi-tron-deu', 'Nếu chưa dùng ngay bạn có thể cất vào ngăn mát giữ được độ ngon và thấm đều gia vị hơn.', NULL, 'goi-chan-ga-sot-thai-3-1.jpg', 'goi-chan-ga-sot-thai-3-2.jpg', 'goi-chan-ga-sot-thai-3-3.jpg', 'goi-chan-ga-sot-thai-3-4.jpg', NULL, NULL, '2020-03-19 03:48:18', '2020-03-19 03:48:18'),
(4, 1, '4', 'Món gỏi chân gà sốt Thái là món ăn bắt mắt và được nhiều người ưa thích. Đây có thề vừa dùng làm món ăn chơi, món nhậu hay món gỏi cho bữa cơm gia đình mình thêm sắc màu và phong vị.', 'mon-goi-chan-ga-sot-thai-la-mon-an-bat-mat-va-duoc-nhieu-nguoi-ua-thich-day-co-the-vua-dung-lam-mon-an-choi-mon-nhau-hay-mon-goi-cho-bua-com-gia-dinh-minh-them-sac-mau-va-phong-vi', NULL, NULL, 'goi-chan-ga-sot-thai-4-1.jpg', 'goi-chan-ga-sot-thai-4-2.jpg', 'goi-chan-ga-sot-thai-4-3.jpg', 'goi-chan-ga-sot-thai-4-4.jpg', NULL, NULL, '2020-03-19 03:49:13', '2020-03-19 03:49:13'),
(5, 2, '1', 'Tôm rửa sạch rồi hấp hoặc luộc chín, đem bóc vỏ, bỏ chỉ tôm. Thịt lợn rửa sạch, luộc chín, cắt miếng mỏng vừa ăn.', 'tom-rua-sach-roi-hap-hoac-luoc-chin-dem-boc-vo-bo-chi-tom-thit-lon-rua-sach-luoc-chin-cat-mieng-mong-vua-an', NULL, 'goi-cuon-tom-thit-MN-bg.jpg', 'goi-cuon-tom-thit-MN-1-1.jpg', 'goi-cuon-tom-thit-MN-1-2.jpg', 'goi-cuon-tom-thit-MN-1-3.jpg', NULL, NULL, NULL, '2020-03-19 05:29:11', '2020-03-19 05:30:27'),
(6, 2, '2', 'Rau xà lách, húng quế, hẹ rửa sạch. Dưa leo rửa sạch chẻ miếng dài nhỏ.', 'rau-xa-lach-hung-que-he-rua-sach-dua-leo-rua-sach-che-mieng-dai-nho', NULL, NULL, 'goi-cuon-tom-thit-MN-2-1.jpg', 'goi-cuon-tom-thit-MN-2-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 05:37:45', '2020-03-19 05:37:45'),
(7, 2, '3', 'Làm ẩm tay rồi vuốt nhẹ lên bánh tráng để tạo độ ẩm cho bánh, khiến bánh dễ cuốn chứ không giòn, dễ gẫy. Sau đó, lần lượt đặt lá xà lách lên bánh đa nem, tiếp theo là bún, thịt, lá bạc hà và dưa chuột rồi khéo léo cuộn bánh đa nem lại.', 'lam-am-tay-roi-vuot-nhe-len-banh-trang-de-tao-do-am-cho-banh-khien-banh-de-cuon-chu-khong-gion-de-gay-sau-do-lan-luot-dat-la-xa-lach-len-banh-da-nem-tiep-theo-la-bun-thit-la-bac-ha-va-dua-chuot-roi-kheo-leo-cuon-banh-da-nem-lai', NULL, NULL, 'goi-cuon-tom-thit-MN-3-1.jpg', 'goi-cuon-tom-thit-MN-3-3.jpg', NULL, NULL, NULL, NULL, '2020-03-19 05:38:44', '2020-03-19 05:38:44'),
(8, 2, '4', 'CCuốn được nửa vòng thì xếp tôm và lá hẹ vào, rồi cuốn hết bánh. Làm tương tự với phần bánh đa nem và các nguyên liệu còn lại. Vậy là xong phần gỏi cuốn.', 'ccuon-duoc-nua-vong-thi-xep-tom-va-la-he-vao-roi-cuon-het-banh-lam-tuong-tu-voi-phan-banh-da-nem-va-cac-nguyen-lieu-con-lai-vay-la-xong-phan-goi-cuon', 'Lưu ý, khi cuốn phải thật chặt tay thì lúc ăn sẽ cuốn sẽ không bị bung.', NULL, 'goi-cuon-tom-thit-MN-4-1.jpg', 'goi-cuon-tom-thit-MN-4-3.jpg', NULL, NULL, NULL, NULL, '2020-03-19 05:39:53', '2020-03-19 05:39:53'),
(9, 2, '5', 'Làm nước chấm: Trong chảo nhỏ, trộn 1 chén sốt tương đen với ¼ chén nước luộc thịt, tôm, ½ muỗng cà phê đường, 1 muỗng canh bơ đậu phộng, tỏi và tương hột. Đun nóng nước sốt trên ngọn lửa vừa cho đường tan (khoảng 1-2 phút). Sau đó tắt bếp. Cho nước sốt ra chén, rắc đậu phộng lên.', 'lam-nuoc-cham-trong-chao-nho-tron-1-chen-sot-tuong-den-voi-chen-nuoc-luoc-thit-tom-muong-ca-phe-duong-1-muong-canh-bo-dau-phong-toi-va-tuong-hot-dun-nong-nuoc-sot-tren-ngon-lua-vua-cho-duong-tan-khoang-1-2-phut-sau-do-tat-bep-cho-nuoc-sot-ra-chen-rac-dau-phong-len', NULL, NULL, 'goi-cuon-tom-thit-MN-5-1.jpg', 'goi-cuon-tom-thit-MN-5-2.jpg', 'goi-cuon-tom-thit-MN-5-3.jpg', NULL, NULL, NULL, '2020-03-19 05:54:29', '2020-03-19 05:57:44'),
(10, 2, '6', 'Khi ăn, chấm gỏi cuốn tôm thịt vào nước sốt tương đen nhé nhé! Nếu ăn cay thì cho tí xíu ớt băm vào sẽ ngon hơn nhé!', 'khi-an-cham-goi-cuon-tom-thit-vao-nuoc-sot-tuong-den-nhe-nhe-neu-an-cay-thi-cho-ti-xiu-ot-bam-vao-se-ngon-hon-nhe', NULL, NULL, 'goi-cuon-tom-thit-MN-6-1.jpg', 'goi-cuon-tom-thit-MN-6-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 05:59:19', '2020-03-19 05:59:19'),
(11, 3, '1', 'Thái mỏng hành tây, sau đó đem ngâm ngay vào tô nước đá lạnh. Cách làm này sẽ giúp hành tây hết hăng và giòn hơn hẳn. Rửa sạch để ráo nước và thái nhỏ rau răm.', 'thai-mong-hanh-tay-sau-do-dem-ngam-ngay-vao-to-nuoc-da-lanh-cach-lam-nay-se-giup-hanh-tay-het-hang-va-gion-hon-han-rua-sach-de-rao-nuoc-va-thai-nho-rau-ram', NULL, 'goi-ga-xe-phay-tron-dua-hanh-bg.jpg', 'goi-ga-xe-phay-tron-dua-hanh-1-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:34:10', '2020-03-19 06:34:10'),
(12, 3, '2', 'Xé nhỏ thịt gà đã luộc. Bạn có thể xé bằng tay hoặc dùng dao thái, nhưng thường thì xé bằng tay trông sẽ ngon mắt hơn nhé', 'xe-nho-thit-ga-da-luoc-ban-co-the-xe-bang-tay-hoac-dung-dao-thai-nhung-thuong-thi-xe-bang-tay-trong-se-ngon-mat-hon-nhe', NULL, NULL, 'goi-ga-xe-phay-tron-dua-hanh-2-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-2-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:34:50', '2020-03-19 06:34:50'),
(13, 3, '3', 'Cắt đôi hoặc cắt làm tư mỗi trái dưa leo (tuỳ kích cỡ). Cắt bỏ phần ruột của dưa, vì phần này thường ra rất nhiều nước, sẽ làm nộm dễ nát và không ngon. Cắt dưa leo thành miếng dài và mỏng (dài khoảng 4-5 cm)', 'cat-doi-hoac-cat-lam-tu-moi-trai-dua-leo-tuy-kich-co-cat-bo-phan-ruot-cua-dua-vi-phan-nay-thuong-ra-rat-nhieu-nuoc-se-lam-nom-de-nat-va-khong-ngon-cat-dua-leo-thanh-mieng-dai-va-mong-dai-khoang-4-5-cm', NULL, NULL, 'goi-ga-xe-phay-tron-dua-hanh-3-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-3-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:35:26', '2020-03-19 06:35:26'),
(14, 3, '4', 'Rửa sạch hành tây đã ngâm ban đầu, để ráo nước. Sau đó ướp với 1 muỗng cà phê đường và 1 muỗng canh giấm, trộn đều.', 'rua-sach-hanh-tay-da-ngam-ban-dau-de-rao-nuoc-sau-do-uop-voi-1-muong-ca-phe-duong-va-1-muong-canh-giam-tron-deu', NULL, NULL, 'goi-ga-xe-phay-tron-dua-hanh-4-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-4-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:36:59', '2020-03-19 06:36:59'),
(15, 3, '5', 'Các nguyên liệu đã được chuẩn bị đầy đủ, bạn cho vào 1 tô lớn và trộn đều. Ướp nộm với 2 muỗng canh đường, 1.5 muỗng cà phê bột canh và 3 muỗng canh giấm. Tiếp tục trộn đều các nguyên liệu với nhau, sau đó cho rau răm đã thái vào sau cùng. Lúc này chỉ cần trộn qua nhẹ nhàng thêm vài lần nữa, vậy là đã xong.', 'cac-nguyen-lieu-da-duoc-chuan-bi-day-du-ban-cho-vao-1-to-lon-va-tron-deu-uop-nom-voi-2-muong-canh-duong-15-muong-ca-phe-bot-canh-va-3-muong-canh-giam-tiep-tuc-tron-deu-cac-nguyen-lieu-voi-nhau-sau-do-cho-rau-ram-da-thai-vao-sau-cung-luc-nay-chi-can-tron-qua-nhe-nhang-them-vai-lan-nua-vay-la-da-xong', 'Tỉ lệ này có thể thay đổi theo trọng lượng của nguyên liệu bạn có nhé.', NULL, 'goi-ga-xe-phay-tron-dua-hanh-5-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-5-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:37:39', '2020-03-19 06:37:39'),
(16, 3, '6', 'Bày gỏi ra đĩa, cắt nhỏ thêm ít ớt trái lên trên mặt hoặc có thể rắc ít tiêu xay. Khi ăn thì trộn đều lên nhé! Có thể chấm ăn cùng với nước mắm mặn hoặc muối tiêu chanh.', 'bay-goi-ra-dia-cat-nho-them-it-ot-trai-len-tren-mat-hoac-co-the-rac-it-tieu-xay-khi-an-thi-tron-deu-len-nhe-co-the-cham-an-cung-voi-nuoc-mam-man-hoac-muoi-tieu-chanh', NULL, NULL, 'goi-ga-xe-phay-tron-dua-hanh-6-1.jpg', 'goi-ga-xe-phay-tron-dua-hanh-6-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:38:12', '2020-03-19 06:38:12'),
(17, 4, '1', 'Tai heo rửa với nước pha muối, cạo bỏ lớp dơ, xả lại nước lạnh thật sạch.', 'tai-heo-rua-voi-nuoc-pha-muoi-cao-bo-lop-do-xa-lai-nuoc-lanh-that-sach', NULL, 'goi-dua-leo-tai-heo-bg.jpg', 'goi-dua-leo-tai-heo-1-1.jpg', 'goi-dua-leo-tai-heo-1-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:56:46', '2020-03-19 06:56:46'),
(18, 4, '2', 'Dưa leo rửa sạch, chẻ đôi, bỏ phần ruột cắt lát xéo hơi dày 1 chút. Hành tím bóc vỏ, cắt lát mỏng.', 'dua-leo-rua-sach-che-doi-bo-phan-ruot-cat-lat-xeo-hoi-day-1-chut-hanh-tim-boc-vo-cat-lat-mong', NULL, NULL, 'goi-dua-leo-tai-heo-2-1.jpg', 'goi-dua-leo-tai-heo-2-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:57:30', '2020-03-19 06:57:30'),
(19, 4, '3', 'Rau răm nhặt lá non, rửa sạch và cắt nhỏ. Đậu phộng rang chín, sau đó giã nhỏ.', 'rau-ram-nhat-la-non-rua-sach-va-cat-nho-dau-phong-rang-chin-sau-do-gia-nho', NULL, NULL, 'goi-dua-leo-tai-heo-3-1.jpg', 'goi-dua-leo-tai-heo-3-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:58:09', '2020-03-19 06:58:09'),
(20, 4, '4', 'Nấu 2 lít nước, cho hết nguyên liệu: 1 miếng gừng, 1/2 muỗng cà phê muối, 1muỗng canh rượu trắng, 1 muỗng canh giấm, 1 củ hành tây vào nước luộc tai heo. Sau đó cho tai heo vào chung luộc khoảng 30-35 phút. Khi tai heo chín vớt ra xả qua nước lạnh cho hết chất nhờn.', 'nau-2-lit-nuoc-cho-het-nguyen-lieu-1-mieng-gung-12-muong-ca-phe-muoi-1muong-canh-ruou-trang-1-muong-canh-giam-1-cu-hanh-tay-vao-nuoc-luoc-tai-heo-sau-do-cho-tai-heo-vao-chung-luoc-khoang-30-35-phut-khi-tai-heo-chin-vot-ra-xa-qua-nuoc-lanh-cho-het-chat-nhon', NULL, NULL, 'goi-dua-leo-tai-heo-4-1.jpg', 'goi-dua-leo-tai-heo-4-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:58:51', '2020-03-19 06:58:51'),
(21, 4, '5', 'Cắt tai heo từng lát, lưu ý không cắt quá dày.', 'cat-tai-heo-tung-lat-luu-y-khong-cat-qua-day', NULL, NULL, 'goi-dua-leo-tai-heo-5-1.jpg', 'goi-dua-leo-tai-heo-5-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:59:22', '2020-03-19 06:59:22'),
(22, 4, '6', 'Cho tai heo vào âu, sau đó cho 1/3 muỗng cà phê muối, 1 muỗng canh nước mắm, 1 muỗng canh đường, 1 muỗng canh nước cốt chanh, 1/2 muỗng cà phê tiêu, trộn cùng dưa leo vào. Mang bao tay nhẹ nhàng trộn đều, sau đó cho rau răm, ớt, tỏi, hành tím, đậu phộng vào trộn chung.', 'cho-tai-heo-vao-au-sau-do-cho-13-muong-ca-phe-muoi-1-muong-canh-nuoc-mam-1-muong-canh-duong-1-muong-canh-nuoc-cot-chanh-12-muong-ca-phe-tieu-tron-cung-dua-leo-vao-mang-bao-tay-nhe-nhang-tron-deu-sau-do-cho-rau-ram-ot-toi-hanh-tim-dau-phong-vao-tron-chung', NULL, NULL, 'goi-dua-leo-tai-heo-6-1.jpg', 'goi-dua-leo-tai-heo-6-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 06:59:57', '2020-03-19 06:59:57'),
(23, 4, '7', 'Nêm nếm lại cho vừa ăn. Sau đó cho gỏi dưa leo tai heo ra đĩa và thưởng thức nhé!', 'nem-nem-lai-cho-vua-an-sau-do-cho-goi-dua-leo-tai-heo-ra-dia-va-thuong-thuc-nhe', NULL, NULL, 'goi-dua-leo-tai-heo-7-1.jpg', 'goi-dua-leo-tai-heo-7-1.jpg', NULL, NULL, NULL, NULL, '2020-03-19 07:00:42', '2020-03-19 07:00:42'),
(24, 5, '1', 'Ngâm tôm khô với nước kiệu chua đun ấm khoảng 10 phút cho mềm nở và ngấm vị chua ngọt. Củ kiệu cắt làm đôi hoặc làm ba tùy kích thước to nhỏ. Khô cá sặc đem chiên giòn rồi xé nhỏ. Cà rốt thái sợi mỏng, đem ngâm trong 200ml nước lạnh có pha với 1 muỗng cà phê muối và 2 muỗng canh đường khoảng 10 phút cho thấm rồi vớt ra vắt ráo.', 'ngam-tom-kho-voi-nuoc-kieu-chua-dun-am-khoang-10-phut-cho-mem-no-va-ngam-vi-chua-ngot-cu-kieu-cat-lam-doi-hoac-lam-ba-tuy-kich-thuoc-to-nho-kho-ca-sac-dem-chien-gion-roi-xe-nho-ca-rot-thai-soi-mong-dem-ngam-trong-200ml-nuoc-lanh-co-pha-voi-1-muong-ca-phe-muoi-va-2-muong-canh-duong-khoang-10-phut-cho-tham-roi-vot-ra-vat-rao', NULL, NULL, 'goi-cu-kieu-tom-kho-1-1.jpg', 'goi-cu-kieu-tom-kho-1-2.jpg', 'goi-cu-kieu-tom-kho-1-3.jpg', 'goi-cu-kieu-tom-kho-1-4.jpg', NULL, NULL, '2020-03-19 07:25:16', '2020-03-19 07:25:16'),
(25, 5, '2', 'Pha 2 muỗng canh nước mắm, 1.5 muỗng canh đường, 1 muỗng cà phê dầu mè, 10gr tỏi, 10gr ớt với nhau, vắt thêm nước cốt của 1/2 trái chanh rồi khuấy đều cho đường tan hết.', 'pha-2-muong-canh-nuoc-mam-15-muong-canh-duong-1-muong-ca-phe-dau-me-10gr-toi-10gr-ot-voi-nhau-vat-them-nuoc-cot-cua-12-trai-chanh-roi-khuay-deu-cho-duong-tan-het', NULL, 'goi-cu-kieu-tom-kho-bg.jpg', 'goi-cu-kieu-tom-kho-2-1.jpg', 'goi-cu-kieu-tom-kho-2-2.jpg', 'goi-cu-kieu-tom-kho-2-3.jpg', 'goi-cu-kieu-tom-kho-2-4.jpg', NULL, NULL, '2020-03-19 07:26:30', '2020-03-19 07:26:30'),
(26, 5, '3', 'Cho tất cả các nguyên liệu đã sơ chế vào trộn chung với nước mắm gỏi. Sau đó thêm rau răm cắt nhỏ, hành phi và đậu phộng rang đập giập, trộn tiếp 1 lần nữa rồi gắp ra dĩa thưởng thức nào.', 'cho-tat-ca-cac-nguyen-lieu-da-so-che-vao-tron-chung-voi-nuoc-mam-goi-sau-do-them-rau-ram-cat-nho-hanh-phi-va-dau-phong-rang-dap-giap-tron-tiep-1-lan-nua-roi-gap-ra-dia-thuong-thuc-nao', NULL, NULL, 'goi-cu-kieu-tom-kho-3-1.jpg', 'goi-cu-kieu-tom-kho-3-2.jpg', 'goi-cu-kieu-tom-kho-3-3.jpg', 'goi-cu-kieu-tom-kho-3-4.jpg', NULL, NULL, '2020-03-19 07:29:55', '2020-03-19 07:29:55'),
(27, 5, '4', 'Gỏi tôm khô củ kiệu với cách làm nhanh chóng, mùi vị chua cay mặn ngọt có đủ, sẽ là một món nhắm rất ngon trong dịp tết cổ truyền.', 'goi-tom-kho-cu-kieu-voi-cach-lam-nhanh-chong-mui-vi-chua-cay-man-ngot-co-du-se-la-mot-mon-nham-rat-ngon-trong-dip-tet-co-truyen', NULL, NULL, 'goi-cu-kieu-tom-kho-4-1.jpg', 'goi-cu-kieu-tom-kho-4-2.jpg', 'goi-cu-kieu-tom-kho-4-3.jpg', 'goi-cu-kieu-tom-kho-4-4.jpg', NULL, NULL, '2020-03-19 07:31:02', '2020-03-19 07:31:02'),
(28, 6, '1', 'Băm tỏi cho nhuyễn và rửa cá thật sạch rồi để ráo nước.', 'bam-toi-cho-nhuyen-va-rua-ca-that-sach-roi-de-rao-nuoc', NULL, 'ca-dieu-hong-kho-bg.jpg', 'ca-dieu-hong-kho-1.jpg', NULL, NULL, NULL, NULL, NULL, '2020-03-19 07:46:34', '2020-03-19 07:46:34'),
(29, 6, '2', 'Bắt chảo dầu và đợi dầu nóng lên rồi ta cho vào chảo 1 muỗng canh đường sau đó khuấy đều cho đến khi đường chuyển sang màu vàng thì ta cho tỏi và ớt vào phi cho đến khi tỏi hơi chuyển màu vàng thì đổ vào chảo 1 lượng nước (cỡ chừng ngang con cá) là được.', 'bat-chao-dau-va-doi-dau-nong-len-roi-ta-cho-vao-chao-1-muong-canh-duong-sau-do-khuay-deu-cho-den-khi-duong-chuyen-sang-mau-vang-thi-ta-cho-toi-va-ot-vao-phi-cho-den-khi-toi-hoi-chuyen-mau-vang-thi-do-vao-chao-1-luong-nuoc-co-chung-ngang-con-ca-la-duoc', 'Tùy theo khẩu vị từng người mà ta cho ớt nhiều hoặc không cho ớt cũng được.', NULL, 'ca-dieu-hong-kho-2.jpg', NULL, NULL, NULL, NULL, NULL, '2020-03-19 07:47:00', '2020-03-19 07:47:00'),
(30, 6, '3', 'Khi nước sôi thì ta cho cá vào và kho cho đến khi cá chín mềm thì ta rắc vào trong chảo 1 muỗng cafe tiêu sau đó ta nhắt chảo xuống bếp rồi múc ra đĩa thưởng thức thôi.', 'khi-nuoc-soi-thi-ta-cho-ca-vao-va-kho-cho-den-khi-ca-chin-mem-thi-ta-rac-vao-trong-chao-1-muong-cafe-tieu-sau-do-ta-nhat-chao-xuong-bep-roi-muc-ra-dia-thuong-thuc-thoi', NULL, NULL, 'ca-dieu-hong-kho-3.jpg', 'ca-dieu-hong-kho-bg.jpg', NULL, NULL, NULL, NULL, '2020-03-19 07:47:26', '2020-03-19 07:47:26'),
(31, 7, '1', 'Sả cây cắt lát xéo mỏng, áo sả với một lớp mỏng bột tẩm khô. Lấy 1/2 lá chanh băm nhỏ. Gà rửa sạch thấm khô, cắt gà thành những que dài, dày 1.5cm. Ướp gà với lá chanh băm nhỏ và ớt bột, bột khô. Trộn đều. Do bột khô đã có sẵn gia vị nên chúng ta không nêm gì cả nhé. Bắp cải và cà rốt bào sợi, dưa leo cắt khoanh. Cho salad vào đĩa bọc màng thực phẩm cất tử mát để giữ salad tươi giòn.', 'sa-cay-cat-lat-xeo-mong-ao-sa-voi-mot-lop-mong-bot-tam-kho-lay-12-la-chanh-bam-nho-ga-rua-sach-tham-kho-cat-ga-thanh-nhung-que-dai-day-15cm-uop-ga-voi-la-chanh-bam-nho-va-ot-bot-bot-kho-tron-deu-do-bot-kho-da-co-san-gia-vi-nen-chung-ta-khong-nem-gi-ca-nhe-bap-cai-va-ca-rot-bao-soi-dua-leo-cat-khoanh-cho-salad-vao-dia-boc-mang-thuc-pham-cat-tu-mat-de-giu-salad-tuoi-gion', NULL, 'ga-chien-chanh-xa-bg.jpg', 'ga-chien-chanh-xa-1-1.jpg', 'ga-chien-chanh-xa-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 08:14:50', '2020-03-19 08:14:50'),
(32, 7, '2', 'Với món gà chiên này chúng ta cần chiên ngập dầu. Các bạn có thể dùng chảo sâu lòng hoặc nồi nhỏ để tiết kiệm dầu nha. Đun nóng dầu và cho lá chanh vào chiên giòn, kế tiếp cho sả vào chiên giòn, cả 2 vớt ra cho lên đĩa có lót giấy thấm dầu. Kế tiếp cho gà vào chiên vàng giòn. Gắp ra rây cho ráo dầu.', 'voi-mon-ga-chien-nay-chung-ta-can-chien-ngap-dau-cac-ban-co-the-dung-chao-sau-long-hoac-noi-nho-de-tiet-kiem-dau-nha-dun-nong-dau-va-cho-la-chanh-vao-chien-gion-ke-tiep-cho-sa-vao-chien-gion-ca-2-vot-ra-cho-len-dia-co-lot-giay-tham-dau-ke-tiep-cho-ga-vao-chien-vang-gion-gap-ra-ray-cho-rao-dau', NULL, NULL, 'ga-chien-chanh-xa-2-1.jpg', 'ga-chien-chanh-xa-2-3.jpg', NULL, NULL, NULL, NULL, '2020-03-19 08:15:25', '2020-03-19 08:15:25'),
(33, 7, '3', 'Chúng ta sẽ chấm với xốt mayonaise, nếu các bạn thích vị ngọt chua cay nhẹ các bạn có thể pha 2 muỗng canh xốt mayonnaise, 1 muỗng canh tương ớt, 1 muỗng canh tương cà và trộn đều. Lấy đĩa sâu lòng, rải 1/2 sả chiên giòn, trang trí lá chanh lên, kế tiếp xếp gà chiên giòn, rải đều hết phần sả chiên còn lại và chén xốt mayonnaise. Dọn kèm đĩa salad là các bạn đã có một món ăn chơi cuối tuần cho cả nhà hoặc cho anh xã lai rai cuối tuần. Quan trọng là dùng làm món mặn ăn cơm cũng rất tuyệt nhé.', 'chung-ta-se-cham-voi-xot-mayonaise-neu-cac-ban-thich-vi-ngot-chua-cay-nhe-cac-ban-co-the-pha-2-muong-canh-xot-mayonnaise-1-muong-canh-tuong-ot-1-muong-canh-tuong-ca-va-tron-deu-lay-dia-sau-long-rai-12-sa-chien-gion-trang-tri-la-chanh-len-ke-tiep-xep-ga-chien-gion-rai-deu-het-phan-sa-chien-con-lai-va-chen-xot-mayonnaise-don-kem-dia-salad-la-cac-ban-da-co-mot-mon-an-choi-cuoi-tuan-cho-ca-nha-hoac-cho-anh-xa-lai-rai-cuoi-tuan-quan-trong-la-dung-lam-mon-man-an-com-cung-rat-tuyet-nhe', NULL, NULL, 'ga-chien-chanh-xa-3-1.jpg', 'ga-chien-chanh-xa-3-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 08:16:28', '2020-03-19 08:17:50'),
(34, 8, '1', 'Đầu tiên, chúng ta cắt đôi 50gr thanh cua và xé thành sợi nhỏ. Tán nhuyễn 200gr kem phô mai. Hành lá rửa sạch và cắt nhuyễn.', 'dau-tien-chung-ta-cat-doi-50gr-thanh-cua-va-xe-thanh-soi-nho-tan-nhuyen-200gr-kem-pho-mai-hanh-la-rua-sach-va-cat-nhuyen', NULL, 'cha-gio-chien-pho-mai-bg.jpg', 'cha-gio-chien-pho-mai-1-1.jpg', 'cha-gio-chien-pho-mai-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 08:40:44', '2020-03-19 08:40:44'),
(35, 8, '2', 'Sau khi sơ chế nguyên liệu thô, chúng ta ướp các nguyên liệu này với 10gr dầu hào MAGGI, 2gr mật ong, 5gr giấm. Trộn thật đều lên đến khi các gia vị tan đều.', 'sau-khi-so-che-nguyen-lieu-tho-chung-ta-uop-cac-nguyen-lieu-nay-voi-10gr-dau-hao-maggi-2gr-mat-ong-5gr-giam-tron-that-deu-len-den-khi-cac-gia-vi-tan-deu', NULL, NULL, 'cha-gio-chien-pho-mai-2-1.jpg', 'cha-gio-chien-pho-mai-2-2.jpg', 'cha-gio-chien-pho-mai-2-3.jpg', 'cha-gio-chien-pho-mai-2-4.jpg', NULL, NULL, '2020-03-19 08:41:52', '2020-03-19 08:41:52'),
(36, 8, '3', 'Tiếp theo dùng khuôn tròn kích thước 7cm, dùng dao hoặc kéo cắt bánh tráng Singapore ra theo hình tròn của khuôn. Trải bánh tráng ra 5 hoặc 10 cái 1 lần trên 1 mặt phẳng sạch. Đặt 10gr nhân phô mai vào giữa phần bánh tráng tròn, dùng trứng gà thoa đều xung quanh phần rìa bánh tráng còn lại, sau đó dùng 1 miếng bánh tráng tròn khác phủ lên trên mặt nhân. Dùng tay giữ xung quanh mép bánh tráng lại thành hình tròn vừa chặt tay, để khi chiên không bị bể nhân ra.', 'tiep-theo-dung-khuon-tron-kich-thuoc-7cm-dung-dao-hoac-keo-cat-banh-trang-singapore-ra-theo-hinh-tron-cua-khuon-trai-banh-trang-ra-5-hoac-10-cai-1-lan-tren-1-mat-phang-sach-dat-10gr-nhan-pho-mai-vao-giua-phan-banh-trang-tron-dung-trung-ga-thoa-deu-xung-quanh-phan-ria-banh-trang-con-lai-sau-do-dung-1-mieng-banh-trang-tron-khac-phu-len-tren-mat-nhan-dung-tay-giu-xung-quanh-mep-banh-trang-lai-thanh-hinh-tron-vua-chat-tay-de-khi-chien-khong-bi-be-nhan-ra', NULL, NULL, 'cha-gio-chien-pho-mai-3-1.jpg', 'cha-gio-chien-pho-mai-3-2.jpg', 'cha-gio-chien-pho-mai-3-3.jpg', 'cha-gio-chien-pho-mai-3-4.jpg', NULL, NULL, '2020-03-19 08:42:41', '2020-03-19 08:42:41'),
(37, 8, '4', 'Cho dầu ăn vào chảo, mở lửa đến khi dầu vừa nóng, chúng ta nhẹ nhàng cho từng cuốn chả giò vào. Chiên từ từ đến khi chả giò chín thì tăng lửa lớn để dầu không bị đọng lại trong cuốn chả giò.', 'cho-dau-an-vao-chao-mo-lua-den-khi-dau-vua-nong-chung-ta-nhe-nhang-cho-tung-cuon-cha-gio-vao-chien-tu-tu-den-khi-cha-gio-chin-thi-tang-lua-lon-de-dau-khong-bi-dong-lai-trong-cuon-cha-gio', NULL, NULL, 'cha-gio-chien-pho-mai-4-1.jpg', 'cha-gio-chien-pho-mai-4-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 08:43:17', '2020-03-19 08:43:17'),
(38, 8, '5', 'Sau cùng trình bày chả giò ra dĩa bắt mắt, có thể lót thêm 1 lớp khăn giấy bên dưới để thấm bớt phần dầu còn đọng trong chả giò. Ăn nóng với nước mắm chua ngọt và xà lách rau sống sẽ ngon hơn. Từng miếng chả giò phô mai có lớp vỏ ngoài giòn rụm, nhân thanh cua ngọt thơm thêm chút béo ngậy của phô mai lại càng hấp dẫn. Đã có công thức rồi, bạn còn chờ gì nữa mà không vào bếp ngay để trổ tài nấu nướng của mình nào!', 'sau-cung-trinh-bay-cha-gio-ra-dia-bat-mat-co-the-lot-them-1-lop-khan-giay-ben-duoi-de-tham-bot-phan-dau-con-dong-trong-cha-gio-an-nong-voi-nuoc-mam-chua-ngot-va-xa-lach-rau-song-se-ngon-hon-tung-mieng-cha-gio-pho-mai-co-lop-vo-ngoai-gion-rum-nhan-thanh-cua-ngot-thom-them-chut-beo-ngay-cua-pho-mai-lai-cang-hap-dan-da-co-cong-thuc-roi-ban-con-cho-gi-nua-ma-khong-vao-bep-ngay-de-tro-tai-nau-nuong-cua-minh-nao', NULL, NULL, 'cha-gio-chien-pho-mai-5-1.jpg', 'cha-gio-chien-pho-mai-5-2.jpg', 'cha-gio-chien-pho-mai-5-3.jpg', 'cha-gio-chien-pho-mai-5-4.jpg', NULL, NULL, '2020-03-19 08:43:54', '2020-03-19 08:43:54'),
(39, 10, '1', 'Chuẩn bị làm thịt kho tàu: Rửa sạch thịt heo, để ráo nước, thái thịt heo thành những khối to tùy thích (khoảng 4-5cm). Do món thịt kho tàu được nấu trong thời gian dài nên miếng thịt phải cắt to nhé!', 'chuan-bi-lam-thit-kho-tau-rua-sach-thit-heo-de-rao-nuoc-thai-thit-heo-thanh-nhung-khoi-to-tuy-thich-khoang-4-5cm-do-mon-thit-kho-tau-duoc-nau-trong-thoi-gian-dai-nen-mieng-thit-phai-cat-to-nhe', NULL, NULL, 'thit-kho-tau-1-1.jpg', 'thit-kho-tau-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:13:35', '2020-03-19 12:13:35'),
(40, 10, '2', 'Ướp thịt heo vừa cắt với 2 muỗng canh nước mắm, bột ngọt, 1/2 muỗng cà phê đường cho thấm. Hành tím cắt lát.', 'uop-thit-heo-vua-cat-voi-2-muong-canh-nuoc-mam-bot-ngot-12-muong-ca-phe-duong-cho-tham-hanh-tim-cat-lat', 'Để món thịt kho tàu ngon thì thời gian bạn nên dành một chút thời gian để ướp thịt heo trước khi đem đi kho nhé!', 'thit-kho-tau-bg.jpg', 'thit-kho-tau-2-1.jpg', 'thit-kho-tau-2-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:14:48', '2020-03-19 12:14:48'),
(41, 10, '3', 'Trứng vịt cho món kho tàu phải to, luộc chín rồi bóc vỏ phải còn nguyên vẹn thì món thịt kho tàu mới được đẹp.', 'trung-vit-cho-mon-kho-tau-phai-to-luoc-chin-roi-boc-vo-phai-con-nguyen-ven-thi-mon-thit-kho-tau-moi-duoc-dep', 'Món trứng kho tàu ngon đẹp mắt khi trứng luộc còn nguyên vẹn nhé! Bạn sẽ thêm vào nồi luộc trứng chút muối và giấm, trứng sẽ sẽ dễ bóc vỏ hơn và sẽ không bị nứt.', NULL, 'thit-kho-tau-3-1.jpg', 'thit-kho-tau-3-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:15:34', '2020-03-19 12:15:34'),
(42, 10, '4', 'Cách làm thịt kho tàu: Bắc nồi lên bếp phi thơm tỏi, cho thịt vào xào săn lại. Cho hành tím, nước màu, 2 muỗng canh nước mắm, 1/2 muỗng cà phê đường vào cùng.', 'cach-lam-thit-kho-tau-bac-noi-len-bep-phi-thom-toi-cho-thit-vao-xao-san-lai-cho-hanh-tim-nuoc-mau-2-muong-canh-nuoc-mam-12-muong-ca-phe-duong-vao-cung', 'Nên sử dụng nồi lớn có đáy dày để nấu thịt kho tàu nhé! Giúp nồi thịt kho được dẫn nhiệt đều và không bị khét ở đáy. Nếu không có sẵn nước màu bạn có thể tiến hành làm nước màu bằng cách tan chảy đường với nước cho đến khi có được màu cánh gián. Nước màu vàng đẹp, không đắng là chìa khóa để góp phần làm nên món thịt kho tàu hấp dẫn, ngon đúng điệu.', NULL, 'thit-kho-tau-4-1.jpg', 'thit-kho-tau-4-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:18:45', '2020-03-19 12:18:45'),
(43, 10, '5', 'Khi nồi thịt kho tàu sôi lên, đổ nước dừa tươi vào nồi. Tiếp đến cho trứng vịt luộc đã cắt vào, thêm ớt trái. Đun nhỏ lửa.', 'khi-noi-thit-kho-tau-soi-len-do-nuoc-dua-tuoi-vao-noi-tiep-den-cho-trung-vit-luoc-da-cat-vao-them-ot-trai-dun-nho-lua', 'Sử dụng nước dừa giúp cách làm thịt kho hột vịt được đậm đà và hấp dẫn hơn.', NULL, 'thit-kho-tau-5-1.jpg', 'thit-kho-tau-5-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:19:29', '2020-03-19 12:19:29'),
(44, 10, '6', 'Món thịt kho tàu chín mềm thì tắt bếp, múc ra tô lớn, ăn kèm với cơm trắng rất ngon đấy! Cách làm món thịt kho tàu với thịt kho chín mềm béo, đậm đà, trứng vịt bùi bùi rất hấp dẫn đưa cơm.', 'mon-thit-kho-tau-chin-mem-thi-tat-bep-muc-ra-to-lon-an-kem-voi-com-trang-rat-ngon-day-cach-lam-mon-thit-kho-tau-voi-thit-kho-chin-mem-beo-dam-da-trung-vit-bui-bui-rat-hap-dan-dua-com', 'Hãy chuẩn bị ngay cho gia đình với món ăn ngày Tết - thịt kho tàu ngon lành để dành dùng dần trong những ngày đầu năm đi nhé!', NULL, 'thit-kho-tau-6-1.jpg', NULL, NULL, NULL, NULL, NULL, '2020-03-19 12:19:58', '2020-03-19 12:19:58'),
(45, 11, '1', 'Cách làm được mứt dừa viên non và ngon thì cùi dừa phải được lựa chọn và sơ chế kỹ lưỡng. Cùi dừa rửa sạch, gọt bỏ lớp màu xám, thái thành khối vuông đều có cạnh khoảng 1cm. Đun sôi nồi nước, rồi pha với nước lạnh tại thành nước ấm. Chia nước ấm làm nhiều phần, rửa sạch cùi dừa cho đến khi nước được trong là được. Sau đó luộc cùi dừa khoảng 1-2 phút với nước sôi, vớt ra để ráo nước.', 'cach-lam-duoc-mut-dua-vien-non-va-ngon-thi-cui-dua-phai-duoc-lua-chon-va-so-che-ky-luong-cui-dua-rua-sach-got-bo-lop-mau-xam-thai-thanh-khoi-vuong-deu-co-canh-khoang-1cm-dun-soi-noi-nuoc-roi-pha-voi-nuoc-lanh-tai-thanh-nuoc-am-chia-nuoc-am-lam-nhieu-phan-rua-sach-cui-dua-cho-den-khi-nuoc-duoc-trong-la-duoc-sau-do-luoc-cui-dua-khoang-1-2-phut-voi-nuoc-soi-vot-ra-de-rao-nuoc', NULL, 'muc-dua-bg.jpg', 'muc-dua-1-1.jpg', 'muc-dua-1-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:38:23', '2020-03-19 12:38:23'),
(46, 11, '2', 'Cách làm mứt dừa viên nhiều màu: Chia đều mỗi tô 200g cùi dừa đã luộc và 100g đường trắng. Một tô trộn với 50ml sữa tươi không đường. Một tô thì trộn với nước cốt 2 trái chanh dây. Một tô khác thì trộn với 80ml nước cốt lá dứa. Tô cuối cùng trộn với 80ml nước cà phê hòa tan.', 'cach-lam-mut-dua-vien-nhieu-mau-chia-deu-moi-to-200g-cui-dua-da-luoc-va-100g-duong-trang-mot-to-tron-voi-50ml-sua-tuoi-khong-duong-mot-to-thi-tron-voi-nuoc-cot-2-trai-chanh-day-mot-to-khac-thi-tron-voi-80ml-nuoc-cot-la-dua-to-cuoi-cung-tron-voi-80ml-nuoc-ca-phe-hoa-tan', NULL, NULL, 'muc-dua-2-1.jpg', 'muc-dua-2-2.jpg', 'muc-dua-2-3.jpg', 'muc-dua-2-4.jpg', NULL, NULL, '2020-03-19 12:40:31', '2020-03-19 12:40:31'),
(47, 11, '3', 'Đợi cho đường tan hoàn hoàn thì đổ từng loại mứt vào các chảo khác nhau, sên mứt ở lửa vừa. Đảo đều tay cho các viên mứt dừa khô ráo, đường bám một lớp bên ngoài là hoàn tất.', 'doi-cho-duong-tan-hoan-hoan-thi-do-tung-loai-mut-vao-cac-chao-khac-nhau-sen-mut-o-lua-vua-dao-deu-tay-cho-cac-vien-mut-dua-kho-rao-duong-bam-mot-lop-ben-ngoai-la-hoan-tat', NULL, NULL, 'muc-dua-3-1.jpg', 'muc-dua-3-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:42:18', '2020-03-19 12:42:18'),
(48, 11, '4', 'Mứt dừa viên là món ăn chơi và đãi khách truyền thống của người Việt trong dịp Tết. Thay vì làm mứt dừa sợi quen thuộc thì bạn hãy biến tấu một chút với cách làm mứt dừa viên kiểu mới này, để có được bốn màu đua thắm nhé! Vị mứt dừa viên ngọt béo, thơm ngon cực kỳ luôn đấy!', 'mut-dua-vien-la-mon-an-choi-va-dai-khach-truyen-thong-cua-nguoi-viet-trong-dip-tet-thay-vi-lam-mut-dua-soi-quen-thuoc-thi-ban-hay-bien-tau-mot-chut-voi-cach-lam-mut-dua-vien-kieu-moi-nay-de-co-duoc-bon-mau-dua-tham-nhe-vi-mut-dua-vien-ngot-beo-thom-ngon-cuc-ky-luon-day', NULL, NULL, 'muc-dua-4-1.jpg', 'muc-dua-4-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 12:43:48', '2020-03-19 12:43:48'),
(49, 12, '1', 'Cách luộc gà ngon: Mua thịt gà ta đã làm sạch lông và nội tạng tại chợ đem về rửa sạch, xoa bóp với giấm và muối để khử mùi hôi. Chà thật nhẹ nhàng các miếng gừng đập dập đều khắp bên ngoài và bên trong thân gà để tránh làm gà luộc nứt da. Rửa lại thịt gà bằng nước lạnh cho sạch.', 'cach-luoc-ga-ngon-mua-thit-ga-ta-da-lam-sach-long-va-noi-tang-tai-cho-dem-ve-rua-sach-xoa-bop-voi-giam-va-muoi-de-khu-mui-hoi-cha-that-nhe-nhang-cac-mieng-gung-dap-dap-deu-khap-ben-ngoai-va-ben-trong-than-ga-de-tranh-lam-ga-luoc-nut-da-rua-lai-thit-ga-bang-nuoc-lanh-cho-sach', 'Bí quyết luộc gà ngon: Nên chọn con gà khoẻ mạnh, có lông bóng mượt và đều. Nếu chọn gà làm sẵn thì lựa những con có da màu vàng nhạt tự nhiên, sờ vào thấy thịt săn chắc, mỡ vàng ở cổ và đùi không quá nhiều. Chọn mua gà ta (hoặc gà thả vườn) để làm gà luộc sẽ cho thịt săn đẹp, da giòn. Trong khi luộc gà công nghiệp thì thịt gà luộc sẽ bị xơ mềm và bở, da mềm dễ tróc.', 'ga-luoc-bg.jpg', 'ga-luoc-1-1.jpg', 'ga-luoc-1-2.jpg', 'ga-luoc-1-3.jpg', 'ga-luoc-1-4.jpg', NULL, NULL, '2020-03-19 13:09:02', '2020-03-19 13:09:02'),
(50, 12, '2', 'Bắt chéo cánh gà xuyên qua mỏ, nhét 2 chân gà vào phía sau bụng để tạo thế cố định gà luộc trong nồi, đây là cách luộc gà ngon được tạo dáng đẹp mắt khi bày trí ra mâm cỗ cúng nhé.', 'bat-cheo-canh-ga-xuyen-qua-mo-nhet-2-chan-ga-vao-phia-sau-bung-de-tao-the-co-dinh-ga-luoc-trong-noi-day-la-cach-luoc-ga-ngon-duoc-tao-dang-dep-mat-khi-bay-tri-ra-mam-co-cung-nhe', NULL, NULL, 'ga-luoc-2-1.jpg', 'ga-luoc-2-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 13:09:53', '2020-03-19 13:09:53'),
(51, 12, '3', 'Cách luộc gà không bị rách da còn nguyên con, thì cần cho gà vào một chiếc nồi vừa đủ (không quá nhỏ cũng không quá lớn), đổ nước lạnh phủ xâm xấp mặt thịt gà. Nhớ đặt phần bụng gà xuống bên dưới. Cho thêm vài củ hành tím và vài nhánh đầu hành lá vào luộc chung (có thể cho thêm gừng đập dập) để thịt gà luộc được dậy lên mùi thơm tự nhiên. Luộc lửa vừa, nhớ vớt bọt thường xuyên để thịt gà không bị dịnh bọt dơ. Đến khi thấy nước luộc sôi lăn tăn thì hạ lửa xuống mức nhỏ nhất, luộc gà thêm 5 phút nữa. Theo cách luộc gà này, phần thịt ở đùi gà luộc sẽ không bị co tụt lên do nước sôi vì lửa quá lớn.', 'cach-luoc-ga-khong-bi-rach-da-con-nguyen-con-thi-can-cho-ga-vao-mot-chiec-noi-vua-du-khong-qua-nho-cung-khong-qua-lon-do-nuoc-lanh-phu-xam-xap-mat-thit-ga-nho-dat-phan-bung-ga-xuong-ben-duoi-cho-them-vai-cu-hanh-tim-va-vai-nhanh-dau-hanh-la-vao-luoc-chung-co-the-cho-them-gung-dap-dap-de-thit-ga-luoc-duoc-day-len-mui-thom-tu-nhien-luoc-lua-vua-nho-vot-bot-thuong-xuyen-de-thit-ga-khong-bi-dinh-bot-do-den-khi-thay-nuoc-luoc-soi-lan-tan-thi-ha-lua-xuong-muc-nho-nhat-luoc-ga-them-5-phut-nua-theo-cach-luoc-ga-nay-phan-thit-o-dui-ga-luoc-se-khong-bi-co-tut-len-do-nuoc-soi-vi-lua-qua-lon', 'Luộc gà đúng cách phải dùng nước lạnh để thịt gà luộc chín đều từ ngoài vào trong.', NULL, 'ga-luoc-3-1.jpg', 'ga-luoc-3-2.jpg', 'ga-luoc-3-3.jpg', 'ga-luoc-3-4.jpg', NULL, NULL, '2020-03-19 13:10:47', '2020-03-19 13:10:47'),
(52, 12, '4', 'Tắt lửa, đậy nắp thêm 20 phút để thịt gà luộc được chín hoàn toàn. Sau luộc gà hoàn tất thì vớt ra, cho vào thau nước đá lạnh để gà luộc nguội hoàn toàn, da gà co lại săn chắc và không bị bỡ, sẽ giòn và căng mộng hơn rất nhiều.', 'tat-lua-day-nap-them-20-phut-de-thit-ga-luoc-duoc-chin-hoan-toan-sau-luoc-ga-hoan-tat-thi-vot-ra-cho-vao-thau-nuoc-da-lanh-de-ga-luoc-nguoi-hoan-toan-da-ga-co-lai-san-chac-va-khong-bi-bo-se-gion-va-cang-mong-hon-rat-nhieu', 'Nếu gà luộc chưa nguội mà lấy ra khỏi nước đá lạnh sẽ dễ làm da gà bị xỉn màu và da gà bị khô. Cách luộc gà ngon chỉ đơn giản như thế đấy.', NULL, 'ga-luoc-4-1.jpg', 'ga-luoc-4-2.jpg', NULL, NULL, NULL, NULL, '2020-03-19 13:11:47', '2020-03-19 13:11:47'),
(53, 12, '5', 'Cách luộc gà ngon nhất có phần da vàng đẹp mắt thì bạn sẽ cạo vỏ nghệ, giã cho giập nát. Thắng lấy nước mỡ gà trộn đều với nghệ.', 'cach-luoc-ga-ngon-nhat-co-phan-da-vang-dep-mat-thi-ban-se-cao-vo-nghe-gia-cho-giap-nat-thang-lay-nuoc-mo-ga-tron-deu-voi-nghe', NULL, NULL, 'ga-luoc-5-1.jpg', 'ga-luoc-5-2.jpg', 'ga-luoc-5-3.jpg', 'ga-luoc-5-4.jpg', NULL, NULL, '2020-03-19 13:12:44', '2020-03-19 13:12:44'),
(54, 12, '6', 'Món gà luộc đã nguội hẳn thì dùng khăn giấy thấm cho khô da gà. Dùng cọ phết mỡ nghệ đều lên da gà để tạo màu vàng óng và sự căng mượt hấp dẫn.', 'mon-ga-luoc-da-nguoi-han-thi-dung-khan-giay-tham-cho-kho-da-ga-dung-co-phet-mo-nghe-deu-len-da-ga-de-tao-mau-vang-ong-va-su-cang-muot-hap-dan', NULL, NULL, 'ga-luoc-6-1.jpg', 'ga-luoc-6-2.jpg', 'ga-luoc-6-3.jpg', 'ga-luoc-6-4.jpg', NULL, NULL, '2020-03-19 13:14:43', '2020-03-19 13:14:43'),
(55, 12, '7', 'Qua những hướng dẫn cách luộc gà ngon đúng chuẩn và đẹp mắt trên đây từ Cooky, các chị em sẽ đỡ loay hoay trong công việc trong bếp núc nhé. Giải quyết được những thắc mắc về cách luộc gà ngon và đẹp cho các mâm cổ cúng ngày Tết cũng như các ngày quan trọng của gia đình rồi nhé.', 'qua-nhung-huong-dan-cach-luoc-ga-ngon-dung-chuan-va-dep-mat-tren-day-tu-cooky-cac-chi-em-se-do-loay-hoay-trong-cong-viec-trong-bep-nuc-nhe-giai-quyet-duoc-nhung-thac-mac-ve-cach-luoc-ga-ngon-va-dep-cho-cac-mam-co-cung-ngay-tet-cung-nhu-cac-ngay-quan-trong-cua-gia-dinh-roi-nhe', NULL, NULL, 'ga-luoc-7-1.jpg', 'ga-luoc-7-2.jpg', 'ga-luoc-7-3.jpg', 'ga-luoc-7-4.jpg', NULL, NULL, '2020-03-19 13:15:31', '2020-03-19 13:15:31'),
(56, 9, '1', 'Bắc nồi nóng, trụng sơ 300gr sườn non để khử mùi hôi và bụi bẩn.', 'bac-noi-nong-trung-so-300gr-suon-non-de-khu-mui-hoi-va-bui-ban', NULL, 'canh-suon-rau-cu-bg.jpg', 'canh-suon-rau-cu-1-1.jpg', 'canh-suon-rau-cu-1-2.jpg', NULL, NULL, NULL, NULL, '2020-04-17 13:55:04', '2020-04-17 13:55:04'),
(57, 9, '2', 'Cho vào nồi Tchef Casserole 2 lít nước, đậy nắp nồi, nấu đến khi sôi thì cho sườn vào hầm trong 10 phút cùng 1 muỗng cà phê muối.', 'cho-vao-noi-tchef-casserole-2-lit-nuoc-day-nap-noi-nau-den-khi-soi-thi-cho-suon-vao-ham-trong-10-phut-cung-1-muong-ca-phe-muoi', NULL, NULL, 'canh-suon-rau-cu-2-1.jpg', 'canh-suon-rau-cu-2-2.jpg', 'canh-suon-rau-cu-2-3.jpg', 'canh-suon-rau-cu-2-4.jpg', NULL, NULL, '2020-04-17 13:55:56', '2020-04-17 13:55:56'),
(58, 9, '3', 'Tiếp theo cho khoai tây đã cắt miếng vừa ăn và hạt sen vào hầm cùng trong 10 phút rồi nêm với 1 muỗng canh hạt nêm, 1/2 muỗng canh đường. Cuối cùng cho cà rốt vào nấu với lửa vừa đến khi các loại củ quả chín mềm là được.', 'tiep-theo-cho-khoai-tay-da-cat-mieng-vua-an-va-hat-sen-vao-ham-cung-trong-10-phut-roi-nem-voi-1-muong-canh-hat-nem-12-muong-canh-duong-cuoi-cung-cho-ca-rot-vao-nau-voi-lua-vua-den-khi-cac-loai-cu-qua-chin-mem-la-duoc', NULL, NULL, 'canh-suon-rau-cu-3-1.jpg', 'canh-suon-rau-cu-3-2.jpg', 'canh-suon-rau-cu-3-3.jpg', 'canh-suon-rau-cu-3-4.jpg', NULL, NULL, '2020-04-17 13:56:40', '2020-04-17 13:56:40'),
(59, 9, '4', 'Như vậy là chỉ với 30 phút và 3 bước làm đơn giản, món canh sườn hầm rau củ đã hoàn thành rồi, thật đơn giản phải không nào. Món canh này sẽ giúp bữa cơm nhà bạn trở nên rực rỡ hơn với màu sắc của các loại rau củ và cung cấp đầy đủ chất dinh dưỡng nữa. Bạn còn chần chừ gì mà không nấu ngay thôi?', 'nhu-vay-la-chi-voi-30-phut-va-3-buoc-lam-don-gian-mon-canh-suon-ham-rau-cu-da-hoan-thanh-roi-that-don-gian-phai-khong-nao-mon-canh-nay-se-giup-bua-com-nha-ban-tro-nen-ruc-ro-hon-voi-mau-sac-cua-cac-loai-rau-cu-va-cung-cap-day-du-chat-dinh-duong-nua-ban-con-chan-chu-gi-ma-khong-nau-ngay-thoi', NULL, NULL, 'canh-suon-rau-cu-4-1.jpg', 'canh-suon-rau-cu-4-2.jpg', 'canh-suon-rau-cu-4-3.jpg', 'canh-suon-rau-cu-4-4.jpg', NULL, NULL, '2020-04-17 13:57:25', '2020-04-17 13:57:25'),
(60, 13, '1', 'Cách làm củ kiệu ngâm: Rửa thật sạch củ kiệu. Hoà 30g muối với nước đun sôi để nguội, thả củ kiệu đã rửa sạch vào ngâm trong nước muối 1 đêm để củ kiệu tiết hết mùi hăng và khử sạch các chất bẩn còn bám trên củ kiệu. Sau khi ngâm, các bạn vớt kiệu ra, rửa thật sạch và để ráo nước. Rồi cắt phần rễ và đuôi, bạn chú ý không cắt phần đầu phạm vào trong nếu không kiệu sẽ ngấm nước mà mất đi độ giòn ngon của kiệu.', 'cach-lam-cu-kieu-ngam-rua-that-sach-cu-kieu-hoa-30g-muoi-voi-nuoc-dun-soi-de-nguoi-tha-cu-kieu-da-rua-sach-vao-ngam-trong-nuoc-muoi-1-dem-de-cu-kieu-tiet-het-mui-hang-va-khu-sach-cac-chat-ban-con-bam-tren-cu-kieu-sau-khi-ngam-cac-ban-vot-kieu-ra-rua-that-sach-va-de-rao-nuoc-roi-cat-phan-re-va-duoi-ban-chu-y-khong-cat-phan-dau-pham-vao-trong-neu-khong-kieu-se-ngam-nuoc-ma-mat-di-do-gion-ngon-cua-kieu', NULL, '', 'kieu-ngam-1.jpg', 'kieu-ngam-2.jpg', 'kieu-ngam-3.jpg', 'kieu-ngam-4.jpg', NULL, NULL, '2020-04-17 14:19:15', '2020-04-17 14:19:15'),
(61, 13, '2', 'Cách làm kiệu ngâm giòn: Pha nước và 50gr phèn chua rồi cho kiệu đã gọt sạch rễ vào ngâm 2 tiếng sau rồi rửa lại lần nữa cho sạch. Rồi đem kiệu phơi 2-3 nắng gắt cho đến khi kiệu khô lại, sơ chế lại kiệu thêm lần nữa, lột bớt màng kiệu và phần rễ khô còn sót lại.', 'cach-lam-kieu-ngam-gion-pha-nuoc-va-50gr-phen-chua-roi-cho-kieu-da-got-sach-re-vao-ngam-2-tieng-sau-roi-rua-lai-lan-nua-cho-sach-roi-dem-kieu-phoi-2-3-nang-gat-cho-den-khi-kieu-kho-lai-so-che-lai-kieu-them-lan-nua-lot-bot-mang-kieu-va-phan-re-kho-con-sot-lai', NULL, 'kieu-ngam-bg.jpg', 'kieu-ngam-2-1.jpg', 'kieu-ngam-2-2.jpg', 'kieu-ngam-2-3.jpg', 'kieu-ngam-2-4.jpg', NULL, NULL, '2020-04-17 14:21:20', '2020-04-17 14:21:20'),
(62, 13, '3', 'Cách làm củ kiệu ngâm đường: Xếp lần lượt 1 lớp đường - 1 lớp kiệu cho đến hết 300gr đường và kiệu (trên cùng là lớp đường). Đậy nắp lại ngâm củ kiệu từ 10 -14 ngày. Đây là cách làm kiệu không hăng, chua tự nhiên, vừa giúp kiệu giòn, có màu trong lại vừa để được lâu mà không sợ kiệu bị chua nhiều.', 'cach-lam-cu-kieu-ngam-duong-xep-lan-luot-1-lop-duong-1-lop-kieu-cho-den-het-300gr-duong-va-kieu-tren-cung-la-lop-duong-day-nap-lai-ngam-cu-kieu-tu-10-14-ngay-day-la-cach-lam-kieu-khong-hang-chua-tu-nhien-vua-giup-kieu-gion-co-mau-trong-lai-vua-de-duoc-lau-ma-khong-so-kieu-bi-chua-nhieu', NULL, NULL, 'kieu-ngam-3-1.jpg', 'kieu-ngam-3-2.jpg', 'kieu-ngam-3-3.jpg', 'kieu-ngam-3-4.jpg', NULL, NULL, '2020-04-17 14:28:31', '2020-04-17 14:28:31'),
(63, 13, '4', 'Củ kiệu ngâm đường 10 -14 ngày đã lên men và có thể thưởng thức. Vị củ kiệu ngâm chua ngọt, thơm giòn của kiệu chua ăn cùng với thịt kho hoặc kết hợp với trứng bách thảo tôm khô sẽ cực kì hấp dẫn.', 'cu-kieu-ngam-duong-10-14-ngay-da-len-men-va-co-the-thuong-thuc-vi-cu-kieu-ngam-chua-ngot-thom-gion-cua-kieu-chua-an-cung-voi-thit-kho-hoac-ket-hop-voi-trung-bach-thao-tom-kho-se-cuc-ki-hap-dan', 'Bạn có thể bắt tay làm củ kiệu ngâm đường vào giữa tháng Chạp để tranh thủ có món ngon chóng ngán cho những bữa cơm ngày Tết nhé.', NULL, 'kieu-ngam-4-1.jpg', 'kieu-ngam-4-2.jpg', 'kieu-ngam-4-3.jpg', 'kieu-ngam-4-4.jpg', NULL, NULL, '2020-04-17 14:29:35', '2020-04-17 14:29:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `id` int(10) UNSIGNED NOT NULL,
  `idPDuct` tinyint(4) NOT NULL,
  `l_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_tenkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`id`, `idPDuct`, `l_ten`, `l_tenkd`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dễ', 'de', '2020-03-19 03:40:45', '2020-03-19 03:40:45'),
(2, 2, 'Dễ', 'de', '2020-03-19 05:20:19', '2020-03-19 05:20:19'),
(3, 3, 'Dễ', 'de', '2020-03-19 06:33:17', '2020-03-19 06:33:17'),
(4, 4, 'Trung bình', 'trung-binh', '2020-03-19 06:55:05', '2020-03-19 06:55:05'),
(5, 5, 'Dễ', 'de', '2020-03-19 07:20:13', '2020-03-19 07:20:13'),
(6, 6, 'Trung bình', 'trung-binh', '2020-03-19 07:42:54', '2020-03-19 07:42:54'),
(7, 7, 'Dễ', 'de', '2020-03-19 08:10:37', '2020-03-19 08:10:37'),
(8, 8, 'Dễ', 'de', '2020-03-19 08:33:15', '2020-03-19 08:33:15'),
(9, 9, 'Dễ', 'de', '2020-03-19 09:31:58', '2020-03-19 09:31:58'),
(10, 10, 'Trung bình', 'trung-binh', '2020-03-19 12:12:28', '2020-03-19 12:12:28'),
(11, 11, 'Trung bình', 'trung-binh', '2020-03-19 12:35:07', '2020-03-19 12:35:07'),
(12, 12, 'Trung bình', 'trung-binh', '2020-03-19 13:00:54', '2020-03-19 13:00:54'),
(13, 13, 'Dễ', 'de', '2020-04-17 14:14:10', '2020-04-17 14:14:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `material`
--

CREATE TABLE `material` (
  `id` int(10) UNSIGNED NOT NULL,
  `idProduct` tinyint(4) NOT NULL,
  `r_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_tenkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `material`
--

INSERT INTO `material` (`id`, `idProduct`, `r_ten`, `r_tenkd`, `r_soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chân gà', 'chan-ga', '500 gram', '2020-03-19 03:34:50', '2020-03-19 03:34:50'),
(2, 1, 'Cóc non', 'coc-non', '50 gram', '2020-03-19 03:35:08', '2020-03-19 03:35:08'),
(3, 1, 'Đu đủ xanh', 'du-du-xanh', '50 gram', '2020-03-19 03:35:27', '2020-03-19 03:35:27'),
(4, 1, 'Cà rốt', 'ca-rot', '50 gram', '2020-03-19 03:35:40', '2020-03-19 03:35:40'),
(5, 1, 'Đậu đũa', 'dau-dua', '30 gram', '2020-03-19 03:35:57', '2020-03-19 03:35:57'),
(6, 1, 'Cà chua', 'ca-chua', '30 gram', '2020-03-19 03:36:17', '2020-03-19 03:36:17'),
(7, 1, 'Ngò gai', 'ngo-gai', '30 gram', '2020-03-19 03:36:37', '2020-03-19 03:36:37'),
(8, 2, 'Tôm tươi', 'tom-tuoi', '450 gram', '2020-03-19 05:20:45', '2020-03-19 05:20:45'),
(9, 2, 'Thịt ba chỉ', 'thit-ba-chi', '450 gram', '2020-03-19 05:20:58', '2020-03-19 05:20:58'),
(10, 2, 'Bún tươi', 'bun-tuoi', '240 gram', '2020-03-19 05:21:11', '2020-03-19 05:21:11'),
(11, 2, 'Giá đỗ', 'gia-do', '200 gram', '2020-03-19 05:21:22', '2020-03-19 05:21:22'),
(12, 2, 'Xà lách', 'xa-lach', '200 gram', '2020-03-19 05:21:35', '2020-03-19 05:21:35'),
(13, 2, 'Hẹ', 'he', '100 gram', '2020-03-19 05:21:47', '2020-03-19 05:21:47'),
(14, 2, 'Ngò rí', 'ngo-ri', '200 gram', '2020-03-19 05:22:53', '2020-03-19 05:22:53'),
(15, 2, 'Bánh tráng', 'banh-trang', '4 gói', '2020-03-19 05:23:08', '2020-03-19 05:23:08'),
(16, 3, 'Thịt gà', 'thit-ga', '300 gram', '2020-03-19 06:29:04', '2020-03-19 06:29:04'),
(17, 3, 'Hành tây', 'hanh-tay', '1 củ', '2020-03-19 06:29:19', '2020-03-19 06:29:19'),
(18, 3, 'Dưa leo', 'dua-leo', '2 trái', '2020-03-19 06:29:32', '2020-03-19 06:29:32'),
(19, 3, 'Rau răm', 'rau-ram', '1/2 nắm', '2020-03-19 06:29:51', '2020-03-19 06:29:51'),
(20, 4, 'Tai heo', 'tai-heo', '3 cái', '2020-03-19 07:03:45', '2020-03-19 07:03:45'),
(21, 4, 'Dưa leo', 'dua-leo', '2 trái', '2020-03-19 07:04:46', '2020-03-19 07:04:46'),
(22, 5, 'Củ kiệu', 'cu-kieu', '250 gram', '2020-03-19 07:20:29', '2020-03-19 07:20:29'),
(23, 5, 'Tôm khô', 'tom-kho', '50 gram', '2020-03-19 07:20:41', '2020-03-19 07:20:41'),
(24, 5, 'Cá khô', 'ca-kho', '1 con', '2020-03-19 07:20:52', '2020-03-19 07:20:52'),
(25, 5, 'Cà rốt', 'ca-rot', '1 củ', '2020-03-19 07:21:11', '2020-03-19 07:21:11'),
(26, 5, 'Rau răm', 'rau-ram', '10 gram', '2020-03-19 07:21:23', '2020-03-19 07:21:23'),
(27, 5, 'Đậu phộng', 'dau-phong', '10 gram', '2020-03-19 07:21:40', '2020-03-19 07:21:40'),
(28, 6, 'Cá diêu hồng', 'ca-dieu-hong', '1 con', '2020-03-19 07:43:15', '2020-03-19 07:43:15'),
(29, 7, 'Thịt gà', 'thit-ga', '500 gram', '2020-03-19 08:11:05', '2020-03-19 08:11:05'),
(30, 7, 'Sả', 'sa', '3 cây', '2020-03-19 08:11:16', '2020-03-19 08:11:16'),
(31, 7, 'Lá chanh', 'la-chanh', '20 lá', '2020-03-19 08:11:30', '2020-03-19 08:11:30'),
(32, 7, 'Bột chiên giòn', 'bot-chien-gion', '1 bịch', '2020-03-19 08:11:49', '2020-03-19 08:11:49'),
(33, 7, 'Bắp cải', 'bap-cai', '1/4', '2020-03-19 08:12:06', '2020-03-19 08:12:37'),
(34, 7, 'Dưa leo', 'dua-leo', '2 trái', '2020-03-19 08:12:59', '2020-03-19 08:12:59'),
(35, 7, 'Cà rốt', 'ca-rot', '1/2 củ', '2020-03-19 08:13:16', '2020-03-19 08:13:16'),
(36, 8, 'Bánh tráng đông lạnh Singapore', 'banh-trang-dong-lanh-singapore', '200 gram', '2020-03-19 08:33:36', '2020-03-19 08:33:36'),
(37, 8, 'Thanh cua', 'thanh-cua', '50 gram', '2020-03-19 08:34:11', '2020-03-19 08:34:11'),
(38, 8, 'Kem phô mai', 'kem-pho-mai', '200 gram', '2020-03-19 08:34:25', '2020-03-19 08:34:25'),
(39, 9, 'Sườn non', 'suon-non', '300 gram', '2020-03-19 09:32:26', '2020-03-19 09:32:26'),
(40, 9, 'Khoai tây', 'khoai-tay', '100 gram', '2020-03-19 09:33:53', '2020-03-19 09:33:53'),
(41, 9, 'Hạt sen tươi', 'hat-sen-tuoi', '100 gram', '2020-03-19 09:34:04', '2020-03-19 09:34:04'),
(42, 9, 'Cà rốt', 'ca-rot', '100 gram', '2020-03-19 09:35:04', '2020-03-19 09:35:04'),
(43, 10, 'Thịt ba chỉ', 'thit-ba-chi', '1,5 kg', '2020-03-19 10:58:29', '2020-03-19 10:58:29'),
(44, 10, 'Trứng vịt', 'trung-vit', '20 quả', '2020-03-19 10:58:48', '2020-03-19 10:58:48'),
(45, 10, 'Hành tím', 'hanh-tim', '4 củ', '2020-03-19 10:59:05', '2020-03-19 10:59:05'),
(46, 10, 'Nước dừa', 'nuoc-dua', '2 trái', '2020-03-19 10:59:23', '2020-03-19 10:59:23'),
(47, 11, 'Cùi dừa', 'cui-dua', '800 gram', '2020-03-19 12:35:41', '2020-03-19 12:35:41'),
(48, 12, 'Gà trống', 'ga-trong', '1 con', '2020-03-19 13:01:23', '2020-03-19 13:01:23'),
(49, 13, 'Củ kiệu', 'cu-kieu', '500 gram', '2020-04-17 14:12:16', '2020-04-17 14:12:16'),
(50, 13, 'Đường trắng', 'duong-trang', '300 gram', '2020-04-17 14:12:35', '2020-04-17 14:12:35'),
(51, 13, 'Phèn chua', 'phen-chua', '50 gram', '2020-04-17 14:13:05', '2020-04-17 14:13:05'),
(52, 13, 'Muối', 'muoi', '30 gram', '2020-04-17 14:13:17', '2020-04-17 14:13:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(187, '2020_03_02_215353_create_time_table', 1),
(419, '2014_10_12_000000_create_users_table', 2),
(420, '2014_10_12_100000_create_password_resets_table', 2),
(421, '2019_08_19_000000_create_failed_jobs_table', 2),
(422, '2020_03_02_212951_create_product_table', 2),
(423, '2020_03_02_214902_create_category_table', 2),
(424, '2020_03_02_215143_create_raw_material_table', 2),
(425, '2020_03_02_215322_create_level_table', 2),
(426, '2020_03_02_215353_create_timeCook_table', 2),
(427, '2020_03_02_215500_create_spice_table', 2),
(428, '2020_03_03_200453_create_detail_table', 2),
(429, '2020_03_03_203024_create_comment_table', 2),
(430, '2020_03_13_214747_create_type_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `idType` tinyint(4) DEFAULT NULL,
  `idCategory` tinyint(4) DEFAULT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenkd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `idType`, `idCategory`, `ten_sp`, `tenkd`, `anh_sp`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Gỏi chân gà sốt Thái', 'goi-chan-ga-sot-thai', 'goi-chan-ga-sot-thai.jpg', 'chân gà, cóc non, đu đủ xanh', '2020-03-19 03:32:32', '2020-03-19 03:32:32'),
(2, 1, 1, 'Gỏi cuốn tôm thịt miền Nam', 'goi-cuon-tom-thit-mien-nam', 'goi-cuon-tom-thit-MN.jpg', 'tôm tươi, thịt ba chỉ, bún tươi', '2020-03-19 05:19:29', '2020-03-19 05:19:29'),
(3, 1, 1, 'Gỏi gà xé phay trộn dưa hành', 'goi-ga-xe-phay-tron-dua-hanh', 'goi-ga-xe-phay-tron-dua-hanh.jpg', 'thịt gà, hành tây, dưa leo', '2020-03-19 06:28:01', '2020-03-19 06:28:01'),
(4, 1, 1, 'Gỏi dưa leo tai heo', 'goi-dua-leo-tai-heo', 'goi-tai-heo-tron-dua.jpg', 'tai heo dưa leo', '2020-03-19 06:54:39', '2020-03-19 06:54:39'),
(5, 1, 1, 'Gỏi củ kiệu tôm khô', 'goi-cu-kieu-tom-kho', 'goi-cu-kieu-tom-kho.jpg', 'tôm khô, củ kiệu', '2020-03-19 07:19:55', '2020-03-19 07:19:55'),
(6, 2, 2, 'Cá diêu hồng kho', 'ca-dieu-hong-kho', 'ca-dieu-hong-kho.jpg', 'cá diêu hồng', '2020-03-19 07:41:33', '2020-03-19 07:41:33'),
(7, 2, 3, 'Gà chiên sả lá chanh', 'ga-chien-sa-la-chanh', 'ga-chien-chanh-xa.jpg', 'gà, sả', '2020-03-19 08:10:09', '2020-03-19 08:10:09'),
(8, 2, 3, 'Chả giò phô mai', 'cha-gio-pho-mai', 'cha-gio-chien-pho-mai.jpg', 'bánh tráng đông lạnh singapore, kem phô mai', '2020-03-19 08:32:54', '2020-03-19 08:32:54'),
(9, 2, 4, 'Canh sườn rau củ', 'canh-suon-rau-cu', 'canh-suon-rau-cu.jpg', 'sườn heo, rau củ', '2020-03-19 09:31:29', '2020-03-19 09:31:29'),
(10, 3, 2, 'Thịt kho tàu', 'thit-kho-tau', 'thit-kho-tau.jpg', 'thịt heo, trứng vịt', '2020-03-19 10:58:07', '2020-03-19 10:58:07'),
(11, 3, 5, 'Mứt dừa viên ngày Tết', 'mut-dua-vien-ngay-tet', 'mut-dua.jpg', 'cùi dừa', '2020-03-19 12:34:36', '2020-03-19 12:34:36'),
(12, 3, 6, 'Gà luộc', 'ga-luoc', 'ga-luoc.jpg', 'gà', '2020-03-19 13:00:26', '2020-03-19 13:00:26'),
(13, 3, 1, 'Kiệu ngâm', 'kieu-ngam', 'kieu-ngam.jpg', 'củ kiệu', '2020-04-17 14:11:48', '2020-04-17 14:11:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spice`
--

CREATE TABLE `spice` (
  `id` int(10) UNSIGNED NOT NULL,
  `idPD` tinyint(4) NOT NULL,
  `s_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_tenkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spice`
--

INSERT INTO `spice` (`id`, `idPD`, `s_ten`, `s_tenkd`, `s_soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ớt hiểm', 'ot-hiem', '20 gram', '2020-03-19 03:37:21', '2020-03-19 03:37:21'),
(2, 1, 'Ớt khô', 'ot-kho', '20 gram', '2020-03-19 03:37:39', '2020-03-19 03:37:39'),
(3, 1, 'Hành tím', 'hanh-tim', '15 gram', '2020-03-19 03:39:40', '2020-03-19 03:39:40'),
(4, 1, 'Nước mắm', 'nuoc-mam', '2 muỗng canh', '2020-03-19 03:39:56', '2020-03-19 03:39:56'),
(5, 1, 'Mắm nêm', 'mam-nem', '1 muỗng cà phê', '2020-03-19 03:40:08', '2020-03-19 03:40:08'),
(6, 1, 'Chanh', 'chanh', '2 trái', '2020-03-19 03:40:22', '2020-03-19 03:40:22'),
(7, 2, 'Tương hột', 'tuong-hot', '100 gram', '2020-03-19 05:23:24', '2020-03-19 05:23:24'),
(8, 2, 'Ớt', 'ot', '3 muỗng cà phê', '2020-03-19 05:23:38', '2020-03-19 05:23:38'),
(9, 2, 'Đậu phộng', 'dau-phong', '10 gram', '2020-03-19 05:23:51', '2020-03-19 05:23:51'),
(10, 2, 'Tỏi', 'toi', '3 tép', '2020-03-19 05:24:00', '2020-03-19 05:24:00'),
(11, 2, 'Giấm', 'giam', '2 muỗng canh', '2020-03-19 05:24:10', '2020-03-19 05:24:10'),
(12, 2, 'Hạt nêm', 'hat-nem', '1 muỗng cà phê', '2020-03-19 05:24:37', '2020-03-19 05:24:37'),
(13, 2, 'Sốt tương đen', 'sot-tuong-den', '6 muỗng canh', '2020-03-19 05:24:50', '2020-03-19 05:24:50'),
(14, 2, 'Bơ đậu phộng', 'bo-dau-phong', '1 muỗng canh', '2020-03-19 05:25:01', '2020-03-19 05:25:01'),
(15, 3, 'Bột canh', 'bot-canh', '1,5 muỗng cà phê', '2020-03-19 06:30:34', '2020-03-19 06:30:34'),
(16, 3, 'Đường trắng', 'duong-trang', '7 muỗng cà phê', '2020-03-19 06:30:51', '2020-03-19 06:30:51'),
(17, 3, 'Giấm', 'giam', '4 muỗng cà phê', '2020-03-19 06:32:12', '2020-03-19 06:32:12'),
(18, 3, 'Ớt', 'ot', '2 trái', '2020-03-19 06:32:30', '2020-03-19 06:32:30'),
(19, 3, 'Tiêu', 'tieu', '1/4 muỗng cà phê', '2020-03-19 06:32:50', '2020-03-19 06:32:50'),
(20, 4, 'Ớt băm', 'ot-bam', '1 muỗng cà phê', '2020-03-19 07:05:09', '2020-03-19 07:05:09'),
(21, 4, 'Tỏi băm', 'toi-bam', '1 muỗng cà phê', '2020-03-19 07:05:22', '2020-03-19 07:05:22'),
(22, 4, 'Hành tím', 'hanh-tim', '2 củ', '2020-03-19 07:05:34', '2020-03-19 07:05:34'),
(23, 4, 'Đậu phộng', 'dau-phong', '15 gram', '2020-03-19 07:05:47', '2020-03-19 07:05:47'),
(24, 4, 'Gừng', 'gung', '1 miếng', '2020-03-19 07:06:04', '2020-03-19 07:06:04'),
(25, 4, 'Muối', 'muoi', '1 muỗng cà phê', '2020-03-19 07:06:14', '2020-03-19 07:06:14'),
(26, 4, 'Rượu trắng', 'ruou-trang', '1 muỗng canh', '2020-03-19 07:06:34', '2020-03-19 07:06:34'),
(27, 4, 'Hành tây', 'hanh-tay', '1 củ', '2020-03-19 07:06:47', '2020-03-19 07:06:47'),
(28, 4, 'Giấm', 'giam', '1 muỗng canh', '2020-03-19 07:07:03', '2020-03-19 07:07:03'),
(29, 4, 'Nước mắm', 'nuoc-mam', '1 muỗng canh', '2020-03-19 07:07:16', '2020-03-19 07:07:16'),
(30, 4, 'Đường trắng', 'duong-trang', '1 muỗng canh', '2020-03-19 07:07:41', '2020-03-19 07:07:41'),
(31, 4, 'Nước cốt chanh', 'nuoc-cot-chanh', '1 muỗng canh', '2020-03-19 07:07:56', '2020-03-19 07:07:56'),
(32, 4, 'Tiêu', 'tieu', '1 muỗng cà phê', '2020-03-19 07:08:08', '2020-03-19 07:08:08'),
(33, 5, 'Hành phi', 'hanh-phi', '20 gram', '2020-03-19 07:21:58', '2020-03-19 07:21:58'),
(34, 5, 'Muối', 'muoi', '1 muỗng cà phê', '2020-03-19 07:22:08', '2020-03-19 07:22:08'),
(35, 5, 'Đường trắng', 'duong-trang', '3,5 muỗng canh', '2020-03-19 07:22:27', '2020-03-19 07:22:27'),
(36, 5, 'Nước mắm', 'nuoc-mam', '2 muỗng canh', '2020-03-19 07:22:41', '2020-03-19 07:22:41'),
(37, 5, 'Dầu mè', 'dau-me', '1 muỗng canh', '2020-03-19 07:22:55', '2020-03-19 07:22:55'),
(38, 5, 'Ớt băm', 'ot-bam', '10 gram', '2020-03-19 07:23:08', '2020-03-19 07:23:08'),
(39, 5, 'Tỏi băm', 'toi-bam', '10 gram', '2020-03-19 07:23:20', '2020-03-19 07:23:20'),
(40, 5, 'Chanh', 'chanh', '0,5 trái', '2020-03-19 07:23:38', '2020-03-19 07:23:38'),
(41, 5, 'Ớt sừng', 'ot-sung', '1 trái', '2020-03-19 07:23:55', '2020-03-19 07:23:55'),
(42, 6, 'Canh bột nêm', 'canh-bot-nem', '1 muỗng canh', '2020-03-19 07:43:41', '2020-03-19 07:43:41'),
(43, 6, 'Đường trắng', 'duong-trang', '3 muỗng canh', '2020-03-19 07:44:01', '2020-03-19 07:44:01'),
(44, 6, 'Nước mắm', 'nuoc-mam', '150 ml', '2020-03-19 07:44:15', '2020-03-19 07:44:15'),
(45, 6, 'Tỏi', 'toi', '2 củ', '2020-03-19 07:44:32', '2020-03-19 07:44:32'),
(46, 6, 'Ớt', 'ot', '3 trái', '2020-03-19 07:44:42', '2020-03-19 07:44:42'),
(47, 6, 'Tiêu', 'tieu', '1 muỗng cà phê', '2020-03-19 07:44:52', '2020-03-19 07:44:52'),
(48, 7, 'Ớt bột', 'ot-bot', '1 muỗng cà phê', '2020-03-19 08:13:32', '2020-03-19 08:13:32'),
(49, 7, 'Dầu ăn', 'dau-an', '1 chén', '2020-03-19 08:13:41', '2020-03-19 08:13:41'),
(50, 7, 'Sốt Mayonnaise', 'sot-mayonnaise', '3 muỗng canh', '2020-03-19 08:14:00', '2020-03-19 08:14:00'),
(51, 8, 'Dầu hào', 'dau-hao', '200 gram', '2020-03-19 08:35:04', '2020-03-19 08:35:04'),
(52, 8, 'Hành lá', 'hanh-la', '5 gram', '2020-03-19 08:35:31', '2020-03-19 08:35:31'),
(53, 8, 'Giấm', 'giam', '5 gram', '2020-03-19 08:36:37', '2020-03-19 08:36:37'),
(54, 8, 'Mật ong', 'mat-ong', '2 gram', '2020-03-19 08:38:11', '2020-03-19 08:38:11'),
(55, 8, 'Lòng đỏ trứng gà', 'long-do-trung-ga', '1 cái', '2020-03-19 08:38:27', '2020-03-19 08:38:27'),
(56, 9, 'Hạt nêm', 'hat-nem', '1 muỗng canh', '2020-03-19 09:37:27', '2020-03-19 09:37:27'),
(57, 9, 'Muối', 'muoi', '1/2 muỗng canh', '2020-03-19 09:37:43', '2020-03-19 09:37:43'),
(58, 9, 'Nước', 'nuoc', '2 lít', '2020-03-19 09:37:53', '2020-03-19 09:37:53'),
(59, 10, 'Tỏi băm', 'toi-bam', '1 muỗng cà phê', '2020-03-19 11:00:07', '2020-03-19 11:00:07'),
(60, 10, 'Ớt', 'ot', '5 trái', '2020-03-19 11:00:17', '2020-03-19 11:00:17'),
(61, 10, 'Nước mắm', 'nuoc-mam', '4 muỗng can', '2020-03-19 11:00:36', '2020-03-19 11:00:36'),
(62, 10, 'Nước màu', 'nuoc-mau', '1/2 muỗng cà phê', '2020-03-19 11:00:56', '2020-03-19 11:00:56'),
(63, 10, 'Đường trắng', 'duong-trang', '1 muỗng cà phê', '2020-03-19 11:01:20', '2020-03-19 11:01:20'),
(64, 10, 'Bột ngọt', 'bot-ngot', '1/2 muỗng cà phê', '2020-03-19 11:01:38', '2020-03-19 11:01:38'),
(65, 10, 'Dầu ăn', 'dau-an', '3 muỗng canh', '2020-03-19 11:01:50', '2020-03-19 11:01:50'),
(66, 11, 'Đường trắng', 'duong-trang', '400 gram', '2020-03-19 12:35:57', '2020-03-19 12:35:57'),
(67, 11, 'Lá dứa', 'la-dua', '1 bó', '2020-03-19 12:36:11', '2020-03-19 12:36:11'),
(68, 11, 'Bột cà phê', 'bot-ca-phe', '15 gram', '2020-03-19 12:36:33', '2020-03-19 12:36:33'),
(69, 11, 'Chanh dây', 'chanh-day', '2 trái', '2020-03-19 12:36:50', '2020-03-19 12:36:50'),
(70, 11, 'Sữa tươi không đường', 'sua-tuoi-khong-duong', '50 ml', '2020-03-19 12:37:05', '2020-03-19 12:37:05'),
(71, 12, 'Muối', 'muoi', '20 gram', '2020-03-19 13:02:18', '2020-03-19 13:02:18'),
(72, 12, 'Giấm', 'giam', '30 ml', '2020-03-19 13:02:30', '2020-03-19 13:02:30'),
(73, 12, 'Gừng', 'gung', '1/2 củ', '2020-03-19 13:02:42', '2020-03-19 13:02:42'),
(74, 12, 'Hành lá', 'hanh-la', '20 gram', '2020-03-19 13:04:25', '2020-03-19 13:04:25'),
(75, 12, 'Hành tím', 'hanh-tim', '3 củ', '2020-03-19 13:05:11', '2020-03-19 13:05:11'),
(76, 12, 'Củ nghệ', 'cu-nghe', '1 củ', '2020-03-19 13:05:29', '2020-03-19 13:05:29'),
(77, 12, 'Mỡ gà', 'mo-ga', '50 gram', '2020-03-19 13:07:15', '2020-03-19 13:07:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timecook`
--

CREATE TABLE `timecook` (
  `id` int(10) UNSIGNED NOT NULL,
  `idProD` tinyint(4) NOT NULL,
  `t_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_tenkd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `timecook`
--

INSERT INTO `timecook` (`id`, `idProD`, `t_ten`, `t_tenkd`, `created_at`, `updated_at`) VALUES
(1, 1, '30', '30', '2020-03-19 03:40:36', '2020-03-19 03:40:36'),
(2, 2, '10', '10', '2020-03-19 05:20:10', '2020-03-19 05:20:10'),
(3, 3, '35', '35', '2020-03-19 06:33:05', '2020-03-19 06:33:05'),
(4, 4, '45', '45', '2020-03-19 06:54:57', '2020-03-19 06:54:57'),
(5, 5, '20', '20', '2020-03-19 07:20:04', '2020-03-19 07:20:04'),
(6, 6, '30', '30', '2020-03-19 07:42:44', '2020-03-19 07:42:44'),
(7, 7, '20', '20', '2020-03-19 08:10:22', '2020-03-19 08:10:22'),
(8, 8, '30', '30', '2020-03-19 08:33:05', '2020-03-19 08:33:05'),
(9, 9, '30', '30', '2020-03-19 09:31:45', '2020-03-19 09:31:45'),
(10, 10, '45', '45', '2020-03-19 12:12:22', '2020-03-19 12:12:22'),
(11, 11, '40', '40', '2020-03-19 12:34:58', '2020-03-19 12:34:58'),
(12, 12, '60', '60', '2020-03-19 13:00:45', '2020-03-19 13:00:45'),
(13, 13, '60', '60', '2020-04-17 14:13:49', '2020-04-17 14:13:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_ty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenkd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `ten_ty`, `tenkd`, `created_at`, `updated_at`) VALUES
(1, 'Truyền thống', 'truyen-thong', '2020-03-19 05:18:33', '2020-03-19 05:18:33'),
(2, 'Món ăn hàng ngày', 'mon-an-hang-ngay', '2020-03-19 07:33:43', '2020-03-19 08:31:56'),
(3, 'Món ăn ngày Tết', 'mon-an-ngay-tet', '2020-03-19 10:57:26', '2020-03-19 10:57:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Kiên', 'dtk5436@gmail.com', '$2y$10$PMHu/DJuFIDeIsBYt8n9fO5UgPPBXZKa6MzlIPyxbySN/jCUG5jk2', '0', '2020-03-19 03:49:47', '2020-03-19 03:49:47'),
(2, 'Tú Quỳnh', 'kien@gmail.com', '$2y$10$SIUN73/GgZzSeeWg.Doc2OMEHpvCOPQ9oRpEOwH7aRY96eey.Rz3a', '0', '2020-03-19 03:53:16', '2020-03-19 03:53:16'),
(3, 'P', 'kien123@gmail.com', '$2y$10$56/pi/pE1a3LCag2GEm5q.zyna3Wqzcgd9bh5Ffm/Op2l9mbQaso6', '0', '2020-04-16 16:18:06', '2020-04-16 16:30:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spice`
--
ALTER TABLE `spice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `timecook`
--
ALTER TABLE `timecook`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `material`
--
ALTER TABLE `material`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `spice`
--
ALTER TABLE `spice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `timecook`
--
ALTER TABLE `timecook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
