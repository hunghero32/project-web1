-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 05:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adscv`
--

CREATE TABLE `adscv` (
  `id` int(11) NOT NULL,
  `idads` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adsrec`
--

CREATE TABLE `adsrec` (
  `id` int(11) NOT NULL,
  `idads` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adsrec`
--

INSERT INTO `adsrec` (`id`, `idads`, `day`, `cost`) VALUES
(1, 1, 30, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `corp`
--

CREATE TABLE `corp` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `major` varchar(255) NOT NULL,
  `totalStaff` int(10) NOT NULL,
  `description` text NOT NULL,
  `subimg1` varchar(255) NOT NULL,
  `subimg2` varchar(255) NOT NULL,
  `subimg3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corp`
--

INSERT INTO `corp` (`id`, `iduser`, `exp`, `major`, `totalStaff`, `description`, `subimg1`, `subimg2`, `subimg3`) VALUES
(1, 1, 10, 'FE', 0, 'test query 4 table', '', '', ''),
(4, 7, 10, 'be', 0, 'test query 20 table', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `exp` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `description` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `iduser`, `img`, `gender`, `age`, `degree`, `major`, `exp`, `skill`, `level`, `salary`, `description`, `view`) VALUES
(1, 1, '', '', 0, '', 'Web Progamming', 12, '', '', 0, 'Tốt nghiệp FPT College, chuyên ngành Web BE', 0),
(2, 2, '', '', 0, '', 'WEB Development', 10, '', '', 0, 'Hưng 365 - Thegioiso365.vn', 0),
(3, 4, '', '', 0, '', 'Web Progamming', 12, '', '', 0, 'tuanapple222', 0),
(4, 3, '', '', 0, '', 'Web developer', 10, '', '', 0, 'Tốt nghiệp loại Giỏi khoa Công nghệ Thông tin, Đại học Bách khoa Hà Nội. Được đào tạo chuyên sâu về tổ chức và quản lý công nghệ phần mềm và có kinh nghiệm quản lý dự án trong vai trò thành viên Câu lạc bộ HUST Developers. Luôn chủ động học hỏi và tham gia các chương trình tập huấn chuyên môn để nâng cao trình độ và thực hành kỹ năng. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `idcv` int(11) NOT NULL,
  `idrec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recr`
--

CREATE TABLE `recr` (
  `id` int(11) NOT NULL,
  `idcorp` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `exp` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `major` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `totalCV` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recr`
--

INSERT INTO `recr` (`id`, `idcorp`, `title`, `img`, `exp`, `level`, `salary`, `major`, `skill`, `type`, `totalCV`, `description`, `date`, `view`, `status`) VALUES
(1, 1, 'Tuyển dụng nhân sự IT, Các vị trí FE & BE, DevOps', '', 2, '0', 0, 'FE, BE, DevOps', '', '', 10, 'Ưu tiên các ứng viên có ngoại ngữ, các ứng viên có độ tuổi từ 20 - 30', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `name`, `img`, `email`, `phone`, `address`, `role`) VALUES
(1, 'long123', '123', 'SSP Company', '', 'longhoang0002@gmail.com', '0346540479', 'Hà Nội', 3),
(2, 'admin', '123456', '', '', 'admin@gmail.com', '0123456789', '', 1),
(3, 'dungnt', 'dungph31678', '', '', 'dung@gmail.com', '0346246396', '', 1),
(4, 'tuan8386', '8386', '', '', 'tuannaph38619@fpt.edu.vn', '0567575222', '', 1),
(7, 'long', '123', 'FPoly Company', 'img.img', 'longlhph31572@fpt.edu.vn', '0346540479', 'Đà Nẵng', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adscv`
--
ALTER TABLE `adscv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_adsCv_cv` (`idads`);

--
-- Indexes for table `adsrec`
--
ALTER TABLE `adsrec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_adsRec_rerc` (`idads`);

--
-- Indexes for table `corp`
--
ALTER TABLE `corp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_corp_user` (`iduser`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cv_user` (`iduser`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1_info_cv` (`idcv`),
  ADD KEY `FK2_info_rerc` (`idrec`);

--
-- Indexes for table `recr`
--
ALTER TABLE `recr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rerc_corp` (`idcorp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adscv`
--
ALTER TABLE `adscv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adsrec`
--
ALTER TABLE `adsrec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `corp`
--
ALTER TABLE `corp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recr`
--
ALTER TABLE `recr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adscv`
--
ALTER TABLE `adscv`
  ADD CONSTRAINT `FK_adsCv_cv` FOREIGN KEY (`idads`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adsrec`
--
ALTER TABLE `adsrec`
  ADD CONSTRAINT `FK_adsRec_rerc` FOREIGN KEY (`idads`) REFERENCES `recr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `corp`
--
ALTER TABLE `corp`
  ADD CONSTRAINT `FK_corp_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_cv_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `FK1_info_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2_info_rerc` FOREIGN KEY (`idrec`) REFERENCES `recr` (`id`);

--
-- Constraints for table `recr`
--
ALTER TABLE `recr`
  ADD CONSTRAINT `FK_rerc_corp` FOREIGN KEY (`idcorp`) REFERENCES `corp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
