-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2023 lúc 09:07 AM
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
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `corp`
--

CREATE TABLE `corp` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `activeYear` int(2) NOT NULL,
  `major` varchar(255) NOT NULL,
  `size` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `introduce` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `benefits` text NOT NULL,
  `workingday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `gender` int(2) NOT NULL,
  `birth` date NOT NULL,
  `salary` int(10) NOT NULL,
  `major` int(10) NOT NULL,
  `introduce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`id`, `iduser`, `gender`, `birth`, `salary`, `major`, `introduce`) VALUES
(1, 2, 1, '2023-11-22', 10000, 2, 'Một thằng User nghèo ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `degree`
--

CREATE TABLE `degree` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `degree`
--

INSERT INTO `degree` (`id`, `idcv`, `name`, `school`, `start`, `end`) VALUES
(1, 1, 'FPT polytechnic', 'Cao Đẳng', '2020-11-01', '2023-11-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expcv`
--

CREATE TABLE `expcv` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `job` varchar(255) NOT NULL,
  `corp` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `expcv`
--

INSERT INTO `expcv` (`id`, `idcv`, `level`, `job`, `corp`, `start`, `end`) VALUES
(1, 1, 1, 'Devops', 'Thegioiso365', '2021-11-01', '2022-11-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filtercv`
--

CREATE TABLE `filtercv` (
  `id` int(11) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filterrecr`
--

CREATE TABLE `filterrecr` (
  `id` int(11) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `progLang` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `thumbnail1` varchar(255) NOT NULL,
  `thumbnail2` varchar(255) NOT NULL,
  `thumbnail3` varchar(255) NOT NULL,
  `thumbnail4` varchar(255) NOT NULL,
  `thumbnail5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `iduser`, `avatar`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `thumbnail5`) VALUES
(1, 2, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `idrec` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recr`
--

CREATE TABLE `recr` (
  `id` int(10) NOT NULL,
  `idcorp` int(10) NOT NULL,
  `job` varchar(255) NOT NULL,
  `exp` int(2) NOT NULL,
  `level` int(2) NOT NULL,
  `salary` int(2) NOT NULL,
  `progLang` varchar(255) NOT NULL,
  `type` int(2) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skillcv`
--

CREATE TABLE `skillcv` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `skill` int(10) NOT NULL,
  `percent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `skillcv`
--

INSERT INTO `skillcv` (`id`, `idcv`, `skill`, `percent`) VALUES
(1, 1, 2, 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `name`, `email`, `phone`, `address`, `role`) VALUES
(1, 'admin', '123', 'ADMIN', 'admin@gmail.com', '0123456789', 'Admin', 1),
(2, 'user', '123', 'User', 'user@gmail.com', '0123456789', 'User', 2),
(3, 'corp', '123', 'Corp', 'corp@gmail.com', '0123456789', 'Corp', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `corp`
--
ALTER TABLE `corp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_corp_user` (`iduser`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cv_user` (`iduser`);

--
-- Chỉ mục cho bảng `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_degree_cv` (`idcv`);

--
-- Chỉ mục cho bảng `expcv`
--
ALTER TABLE `expcv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_expCv_cv` (`idcv`);

--
-- Chỉ mục cho bảng `filtercv`
--
ALTER TABLE `filtercv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `filterrecr`
--
ALTER TABLE `filterrecr`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_gallery_user` (`iduser`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_info_cv` (`idcv`),
  ADD KEY `FK_info_recr` (`idrec`);

--
-- Chỉ mục cho bảng `recr`
--
ALTER TABLE `recr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rerc_corp` (`idcorp`);

--
-- Chỉ mục cho bảng `skillcv`
--
ALTER TABLE `skillcv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_skillCv_cv` (`idcv`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `corp`
--
ALTER TABLE `corp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `expcv`
--
ALTER TABLE `expcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `filtercv`
--
ALTER TABLE `filtercv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `filterrecr`
--
ALTER TABLE `filterrecr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recr`
--
ALTER TABLE `recr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `skillcv`
--
ALTER TABLE `skillcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `corp`
--
ALTER TABLE `corp`
  ADD CONSTRAINT `FK_corp_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_cv_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `FK_degree_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `expcv`
--
ALTER TABLE `expcv`
  ADD CONSTRAINT `FK_expCv_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `FK_gallery_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `FK_info_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_info_recr` FOREIGN KEY (`idrec`) REFERENCES `recr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `recr`
--
ALTER TABLE `recr`
  ADD CONSTRAINT `FK_rerc_corp` FOREIGN KEY (`idcorp`) REFERENCES `corp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `skillcv`
--
ALTER TABLE `skillcv`
  ADD CONSTRAINT `FK_skillCv_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
