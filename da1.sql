-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 05, 2023 lúc 07:37 AM
-- Phiên bản máy phục vụ: 8.0.34
-- Phiên bản PHP: 8.1.16

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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adsCV`
--

CREATE TABLE `adsCV` (
  `id` int NOT NULL,
  `idads` int NOT NULL,
  `day` int NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adsRec`
--

CREATE TABLE `adsRec` (
  `id` int NOT NULL,
  `idads` int NOT NULL,
  `day` int NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `adsRec`
--

INSERT INTO `adsRec` (`id`, `idads`, `day`, `cost`) VALUES
(1, 1, 30, 500000),
(2, 3, 30, 10000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `corp`
--

CREATE TABLE `corp` (
  `id` int NOT NULL,
  `idcorp` int NOT NULL,
  `exp` int NOT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `corp`
--

INSERT INTO `corp` (`id`, `idcorp`, `exp`, `major`, `description`) VALUES
(1, 1, 10, 'IT Software', '10 Years in IT Sofware '),
(2, 3, 10, 'DEVOPS ENGINEER', 'DEVOPS ENGINEER 10 năm'),
(3, 4, 12, 'IT Software', '10 Years in IT Sofware ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` int NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`id`, `iduser`, `img`, `major`, `exp`, `level`, `salary`, `description`, `view`) VALUES
(1, 1, '', 'Web Progamming', 12, '', 0, 'Tốt nghiệp FPT College, chuyên ngành Web BE', 0),
(2, 2, '', 'WEB Development', 10, '', 0, 'Hưng 365 - Thegioiso365.vn', 0),
(3, 4, '', 'Web Progamming', 12, '', 0, 'tuanapple222', 0),
(4, 3, '', 'Web developer', 10, '', 0, 'Tốt nghiệp loại Giỏi khoa Công nghệ Thông tin, Đại học Bách khoa Hà Nội. Được đào tạo chuyên sâu về tổ chức và quản lý công nghệ phần mềm và có kinh nghiệm quản lý dự án trong vai trò thành viên Câu lạc bộ HUST Developers. Luôn chủ động học hỏi và tham gia các chương trình tập huấn chuyên môn để nâng cao trình độ và thực hành kỹ năng. ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int NOT NULL,
  `idcv` int NOT NULL,
  `idrec` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recr`
--

CREATE TABLE `recr` (
  `id` int NOT NULL,
  `idcorp` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` int NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` int NOT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) NOT NULL,
  `totalCV` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `view` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recr`
--

INSERT INTO `recr` (`id`, `idcorp`, `title`, `img`, `exp`, `level`, `salary`, `major`, `type`, `totalCV`, `description`, `date`, `view`, `status`) VALUES
(1, 1, 'Tuyển dụng nhân sự IT, Các vị trí FE & BE, DevOps', '', 2, '0', 0, 'FE, BE, DevOps', '', 10, 'Ưu tiên các ứng viên có ngoại ngữ, các ứng viên có độ tuổi từ 20 - 30', '0000-00-00', 0, 1),
(3, 3, 'Tuyển dụng bán hàng Apple', '', 2, '0', 0, 'Thu ngân , giới thiệu sản phẩm', '', 2, 'Ưu tiên các ứng viên có ngoại ngữ, các ứng viên có độ tuổi từ 20 - 30', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `name`, `img`, `email`, `phone`, `address`, `role`) VALUES
(1, 'long123', '123', 'Lương Hoàng Long', '', 'longhoang0002@gmail.com', '0346540479', '', 1),
(2, 'admin', '123456', '', '', 'admin@gmail.com', '0123456789', '', 1),
(3, 'dungnt', 'dungph31678', '', '', 'dung@gmail.com', '0346246396', '', 1),
(4, 'tuan8386', '8386', '', '', 'tuannaph38619@fpt.edu.vn', '0567575222', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_admin_user` (`iduser`);

--
-- Chỉ mục cho bảng `adsCV`
--
ALTER TABLE `adsCV`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_adsCv_cv` (`idads`);

--
-- Chỉ mục cho bảng `adsRec`
--
ALTER TABLE `adsRec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_adsRec_rerc` (`idads`);

--
-- Chỉ mục cho bảng `corp`
--
ALTER TABLE `corp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_corp_user` (`idcorp`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cv_user` (`iduser`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1_info_cv` (`idcv`),
  ADD KEY `FK2_info_rerc` (`idrec`);

--
-- Chỉ mục cho bảng `recr`
--
ALTER TABLE `recr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rerc_corp` (`idcorp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `adsCV`
--
ALTER TABLE `adsCV`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `adsRec`
--
ALTER TABLE `adsRec`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `corp`
--
ALTER TABLE `corp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recr`
--
ALTER TABLE `recr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `adsCV`
--
ALTER TABLE `adsCV`
  ADD CONSTRAINT `FK_adsCv_cv` FOREIGN KEY (`idads`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `adsRec`
--
ALTER TABLE `adsRec`
  ADD CONSTRAINT `FK_adsRec_rerc` FOREIGN KEY (`idads`) REFERENCES `recr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `corp`
--
ALTER TABLE `corp`
  ADD CONSTRAINT `FK_corp_user` FOREIGN KEY (`idcorp`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_cv_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `FK1_info_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2_info_rerc` FOREIGN KEY (`idrec`) REFERENCES `recr` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `recr`
--
ALTER TABLE `recr`
  ADD CONSTRAINT `FK_rerc_corp` FOREIGN KEY (`idcorp`) REFERENCES `corp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
