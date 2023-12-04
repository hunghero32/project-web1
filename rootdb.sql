-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 02:18 PM
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
-- Table structure for table `corp`
--

CREATE TABLE `corp` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `activeYear` int(2) NOT NULL,
  `size` int(10) NOT NULL,
  `introduce` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `benefits` text NOT NULL,
  `workingday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `salary` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `introduce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datafilter`
--

CREATE TABLE `datafilter` (
  `id` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `progLang` varchar(255) NOT NULL,
  `typeRecr` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datafilter`
--

INSERT INTO `datafilter` (`id`, `age`, `gender`, `address`, `exp`, `job`, `level`, `salary`, `progLang`, `typeRecr`, `date`) VALUES
(1, '18 - 23', 'Nam', 'Hà Nội', 'Chưa có kinh nghiệm', '.NET Developer', 'Internship / Fresher', '5 ~ 8 tr / tháng', 'Angular', 'Remote', '1 tuần trước'),
(2, '> 23', 'Nữ', 'TP. Hồ Chí Minh', '6 tháng ~ 2 năm', 'Agile Scrum', 'Junior Developer', '8 ~ 15 tr / tháng', 'AngularJS', 'Fulltime', '2 tuần trước'),
(3, '> 30', 'Khác', 'Đà Nẵng', '2 năm ~ 5 năm', 'AI Engineer', 'Mid-level Developer', '15 ~ 23 tr / tháng', 'ASP.NET', 'Partime', '1 tháng trước'),
(4, '', '', '', 'Trên 5 năm', 'Android App Developer', 'Senior Developer', '23 ~ 40 tr / tháng', 'C#', 'Freelance', '3 tháng trước'),
(5, '', '', '', 'Trên 10 năm', 'Android Developer', 'Tech Lead', '40 ~ 60 tr / tháng', 'C++', 'Trial and Error Work', ''),
(6, '', '', '', '', 'Back End Developer', 'Architect', '60 ~ 100 tr / tháng', 'C', 'Team-Based Work', ''),
(7, '', '', '', '', 'Back End Web Developer', '', '> 100 tr / tháng', 'COBOL', 'Project-Based Work', ''),
(8, '', '', '', '', 'Blockchain Developer', '', 'Trả theo giờ (Offer)', 'CSS', 'Internship', ''),
(9, '', '', '', '', 'Bridge Engineer', '', 'Trả theo tuần (Offer)', 'Dart', '', ''),
(10, '', '', '', '', 'Business Analyst', '', '', 'Django', '', ''),
(11, '', '', '', '', 'C++ Developer', '', '', 'Drupal', '', ''),
(12, '', '', '', '', 'Dev-Ops', '', '', 'Flutter', '', ''),
(13, '', '', '', '', 'Embedded Engineer', '', '', 'Golang', '', ''),
(14, '', '', '', '', 'Front End Developer', '', '', 'HTML5', '', ''),
(15, '', '', '', '', 'Front End Web Developer', '', '', 'J2EE', '', ''),
(16, '', '', '', '', 'Full Stack Developer', '', '', 'Java', '', ''),
(17, '', '', '', '', 'Full Stack Web Developer', '', '', 'JavaScript', '', ''),
(18, '', '', '', '', 'Games Developer', '', '', 'JQuery', '', ''),
(19, '', '', '', '', 'IT Support', '', '', 'JSON', '', ''),
(20, '', '', '', '', 'iOS Developer', '', '', 'Kotlin', '', ''),
(21, '', '', '', '', 'Java Developer', '', '', 'Laravel', '', ''),
(22, '', '', '', '', 'Java Web Developer', '', '', 'MySQL', '', ''),
(23, '', '', '', '', 'Mobile Apps Developer', '', '', '.NET', '', ''),
(24, '', '', '', '', 'NodeJS Developer', '', '', 'NodeJS', '', ''),
(25, '', '', '', '', 'PHP Developer', '', '', 'NoSQL', '', ''),
(26, '', '', '', '', 'Product Manager', '', '', 'Objective C', '', ''),
(27, '', '', '', '', 'Product Owner', '', '', 'OOP', '', ''),
(28, '', '', '', '', 'Project Manager', '', '', 'Oracle', '', ''),
(29, '', '', '', '', 'Python Developer', '', '', 'PHP', '', ''),
(30, '', '', '', '', 'Python Web Developer', '', '', 'PostgreSql', '', ''),
(31, '', '', '', '', 'QA QC', '', '', 'Python', '', ''),
(32, '', '', '', '', 'Security', '', '', 'ReactJS', '', ''),
(33, '', '', '', '', 'Software Engineer', '', '', 'React Native', '', ''),
(34, '', '', '', '', 'Software Architect', '', '', 'Ruby', '', ''),
(35, '', '', '', '', 'Solution Architect', '', '', 'Ruby on Rails', '', ''),
(36, '', '', '', '', 'System Administrator', '', '', 'Scala', '', ''),
(37, '', '', '', '', 'System Engineer', '', '', 'Solidity', '', ''),
(38, '', '', '', '', 'Team Leader', '', '', 'Spring', '', ''),
(39, '', '', '', '', 'Tester', '', '', 'SQL', '', ''),
(40, '', '', '', '', 'UX UI Designer', '', '', 'Swift', '', ''),
(41, '', '', '', '', '', '', '', 'Unity', '', ''),
(42, '', '', '', '', '', '', '', 'VueJS', '', ''),
(43, '', '', '', '', '', '', '', 'Angular', '', ''),
(44, '', '', '', '', '', '', '', 'AngularJS', '', ''),
(45, '', '', '', '', '', '', '', 'ASP.NET', '', ''),
(46, '', '', '', '', '', '', '', 'C#', '', ''),
(47, '', '', '', '', '', '', '', 'C++', '', ''),
(48, '', '', '', '', '', '', '', 'C', '', ''),
(49, '', '', '', '', '', '', '', 'COBOL', '', ''),
(50, '', '', '', '', '', '', '', 'CSS', '', ''),
(51, '', '', '', '', '', '', '', 'Dart', '', ''),
(52, '', '', '', '', '', '', '', 'Django', '', ''),
(53, '', '', '', '', '', '', '', 'Drupal', '', ''),
(54, '', '', '', '', '', '', '', 'Flutter', '', ''),
(55, '', '', '', '', '', '', '', 'Golang', '', ''),
(56, '', '', '', '', '', '', '', 'HTML5', '', ''),
(57, '', '', '', '', '', '', '', 'J2EE', '', ''),
(58, '', '', '', '', '', '', '', 'Java', '', ''),
(59, '', '', '', '', '', '', '', 'JavaScript', '', ''),
(60, '', '', '', '', '', '', '', 'JQuery', '', ''),
(61, '', '', '', '', '', '', '', 'JSON', '', ''),
(62, '', '', '', '', '', '', '', 'Kotlin', '', ''),
(63, '', '', '', '', '', '', '', 'Laravel', '', ''),
(64, '', '', '', '', '', '', '', 'MySQL', '', ''),
(65, '', '', '', '', '', '', '', '.NET', '', ''),
(66, '', '', '', '', '', '', '', 'NodeJS', '', ''),
(67, '', '', '', '', '', '', '', 'NoSQL', '', ''),
(68, '', '', '', '', '', '', '', 'Objective C', '', ''),
(69, '', '', '', '', '', '', '', 'OOP', '', ''),
(70, '', '', '', '', '', '', '', 'Oracle', '', ''),
(71, '', '', '', '', '', '', '', 'PHP', '', ''),
(72, '', '', '', '', '', '', '', 'PostgreSql', '', ''),
(73, '', '', '', '', '', '', '', 'Python', '', ''),
(74, '', '', '', '', '', '', '', 'ReactJS', '', ''),
(75, '', '', '', '', '', '', '', 'React Native', '', ''),
(76, '', '', '', '', '', '', '', 'Ruby', '', ''),
(77, '', '', '', '', '', '', '', 'Ruby on Rails', '', ''),
(78, '', '', '', '', '', '', '', 'Scala', '', ''),
(79, '', '', '', '', '', '', '', 'Solidity', '', ''),
(80, '', '', '', '', '', '', '', 'Spring', '', ''),
(81, '', '', '', '', '', '', '', 'SQL', '', ''),
(82, '', '', '', '', '', '', '', 'Swift', '', ''),
(83, '', '', '', '', '', '', '', 'TypeScript', '', ''),
(84, '', '', '', '', '', '', '', 'VueJS', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expcv`
--

CREATE TABLE `expcv` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `level` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `corp` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
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

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `idrec` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recr`
--

CREATE TABLE `recr` (
  `id` int(10) NOT NULL,
  `idcorp` int(10) NOT NULL,
  `job` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `progLang` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skillcv`
--

CREATE TABLE `skillcv` (
  `id` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `progLang` varchar(255) NOT NULL,
  `percent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Indexes for dumped tables
--

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
-- Indexes for table `datafilter`
--
ALTER TABLE `datafilter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_degree_cv` (`idcv`);

--
-- Indexes for table `expcv`
--
ALTER TABLE `expcv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_expCv_cv` (`idcv`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_gallery_user` (`iduser`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_info_cv` (`idcv`),
  ADD KEY `FK_info_recr` (`idrec`);

--
-- Indexes for table `recr`
--
ALTER TABLE `recr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rerc_corp` (`idcorp`);

--
-- Indexes for table `skillcv`
--
ALTER TABLE `skillcv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_skillCv_cv` (`idcv`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corp`
--
ALTER TABLE `corp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `datafilter`
--
ALTER TABLE `datafilter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `expcv`
--
ALTER TABLE `expcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recr`
--
ALTER TABLE `recr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `skillcv`
--
ALTER TABLE `skillcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `FK_degree_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expcv`
--
ALTER TABLE `expcv`
  ADD CONSTRAINT `FK_expCv_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `FK_gallery_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `FK_info_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_info_recr` FOREIGN KEY (`idrec`) REFERENCES `recr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recr`
--
ALTER TABLE `recr`
  ADD CONSTRAINT `FK_rerc_corp` FOREIGN KEY (`idcorp`) REFERENCES `corp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skillcv`
--
ALTER TABLE `skillcv`
  ADD CONSTRAINT `FK_skillCv_cv` FOREIGN KEY (`idcv`) REFERENCES `cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
