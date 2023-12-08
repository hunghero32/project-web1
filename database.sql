-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 05:26 AM
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

--
-- Dumping data for table `corp`
--

INSERT INTO `corp` (`id`, `iduser`, `activeYear`, `size`, `introduce`, `link`, `benefits`, `workingday`) VALUES
(1, 5, 2017, 400, 'Thúc đẩy tham vọng của bạn\r\nNiteco là một cơ quan kỹ thuật số end-to-end toàn cầu hỗ trợ chuyển đổi kỹ thuật số của khách hàng trên toàn thế giới với các trang web đẳng cấp thế giới và khả năng phát triển thương mại điện tử, tiếp thị, thiết kế và dịch vụ quản lý ứng dụng.\r\n\r\nVới trọng tâm đổi mới, chúng tôi trao quyền cho hơn 70 thương hiệu toàn cầu—bao gồm Tập đoàn Electrolux, Heineken, Wilson Parking, Thịt và Gia súc Úc, Adairs, Grant Thornton, Hort Innovation và Panasonic—với các giải pháp kỹ thuật hàng đầu.\r\n\r\nNiteco tự hào có văn phòng trên khắp thế giới: Việt Nam, Úc, Anh, Mỹ, Thụy Điển và Hồng Kông. Với hơn 400 nhân viên, chúng tôi mong muốn đáp ứng nhu cầu của khách hàng suốt ngày đêm.', 'niteco.com', 'Mức lương hấp dẫn với đánh giá hai năm một lần, thưởng tháng 13, thưởng hiệu suất, thưởng ngày lễ, quà sinh nhật, thưởng dịch vụ nhân viên lên đến $ 1,000\r\nCơ hội tham gia các hội nghị kỹ thuật toàn cầu\r\nMột lộ trình sự nghiệp rõ ràng với các khóa đào tạo, hội thảo, kỳ thi chứng chỉ được tài trợ đầy đủ\r\nBảo hiểm y tế AON nâng cao (trong hợp đồng lao động) và bảo hiểm tai nạn (trong thời gian thử việc) ngoài các bảo hiểm theo quy định\r\nMôi trường làm việc chuyên nghiệp, linh hoạt & năng động, đa dạng', 'Thứ 2 - Thứ 6'),
(2, 6, 2015, 450, 'NFQ là một phần của Tập đoàn NFQ toàn cầu. Chúng tôi giúp đỡ các công ty khởi nghiệp quốc tế đầy tham vọng\r\nLà một phần của Tập đoàn NFQ toàn cầu với 20+ năm kinh nghiệm mở rộng quy mô các công ty và đội ngũ 800++ nhà phát triển trên toàn cầu, NFQ Việt Nam tập trung vào việc xây dựng các đội ngũ chuyên dụng hiệu suất cao cho các doanh nghiệp định hướng công nghệ đầy tham vọng ở Châu Âu và Châu Á.\r\nMỗi nhóm ở đây làm việc trực tiếp với khách hàng từ đầu đến cuối với tinh thần Agile. Thiết lập độc đáo này mang đến cho nhân viên của chúng tôi trải nghiệm làm việc cho một công ty sản phẩm thực sự, với ý thức thực sự về cam kết và quyền sở hữu đối với chính sản phẩm.\r\nNFQ Việt Nam có hơn 250+ kỹ sư làm việc tại các văn phòng Hồ Chí Minh, Đà Nẵng, Hà Nội & Cần Thơ. Chúng tôi được công nhận là nơi làm việc hàng đầu tại Việt Nam. THAM GIA VỚI CHÚNG TÔI!', 'www.nfq.com', 'Máy tính xách tay được cung cấp.\r\nHình thức làm việc kết hợp\r\nLớp học tiếng Anh để phát triển nghề nghiệp\r\nMột môi trường vui vẻ & năng động và tự do sáng tạo.\r\nVăn phòng hiện đại với khu vực thư giãn linh hoạt.\r\nLương tháng 13 (dựa trên chính sách của công ty và tình hình kinh doanh)\r\nĐánh giá hiệu quả công việc 2 lần/ năm.\r\nChăm sóc sức khỏe cao cấp & Kiểm tra sức khỏe hàng năm\r\nChương trình khách hàng thân thiết: bảo hiểm nhân thọ trị giá 1 tỷ đồng\r\n15 ngày nghỉ phép năm, làm việc từ thứ Hai đến thứ S', 'Thứ 2 - Thứ 6 [ OT ]'),
(3, 7, 2009, 1000, 'Công ty công nghệ toàn cầu nhanh nhẹn, sáng tạo & xuất sắc có nguồn gốc sâu xa tại Việt Nam\r\nĐược thành lập vào năm 2009, KMS Technology là một công ty kỹ thuật và dịch vụ có trụ sở tại Hoa Kỳ với các trung tâm phát triển tại Việt Nam. KMS Technology được khách hàng quốc tế tin tưởng bởi chất lượng sản phẩm vượt trội và chuyên môn của các kỹ sư Việt Nam.\r\n\r\nKMS xây dựng và ra mắt thành công các công ty phần mềm của riêng mình thông qua vườn ươm khởi nghiệp nội bộ, KMS Labs. Các công ty đáng chú ý nhất bao gồm QASymphony, Kobiton, Katalon và Grove. Dưới thương hiệu KMS Solutions, công ty phục vụ khu vực Châu Á Thái Bình Dương, cung cấp dịch vụ tư vấn giải pháp công nghệ và đưa những công nghệ tiên tiến và mới nhất đến thị trường châu Á.\r\n\r\nKMS cam kết tạo ra tác động xã hội lâu dài bằng cách hợp tác với các tổ chức phi lợi nhuận mang đến cho sinh viên có hoàn cảnh khó khăn cơ hội việc làm công bằng và tốt hơn. Công ty thường xuyên hợp tác với các trường đại học, tham gia các hoạt động đào tạ', 'kms-technology.com', 'Làm việc tại một trong những nơi tốt nhất để làm việc tại Việt Nam\r\nXây dựng các sản phẩm phần mềm quy mô lớn & toàn cầu\r\nLàm việc &; phát triển với đội ngũ đam mê & tài năng\r\nCơ hội nghề nghiệp đa dạng với Gia công phần mềm, Phát triển sản phẩm phần mềm, Giải pháp CNTT & Tư vấn\r\nMức lương và phúc lợi hấp dẫn\r\nHai lần đánh giá hiệu suất mỗi năm và thưởng hiệu suất\r\nLàm việc từ xa có sẵn và thời gian làm việc linh hoạt\r\nCơ hội tại chỗ: nhiệm vụ ngắn hạn và dài hạn tại Bắc Mỹ (Mỹ, Canada), Châu Âu, Châu ', 'Thứ 2 - Thứ 6'),
(4, 8, 2018, 1200, 'Zühlke là nhà cung cấp dịch vụ đổi mới toàn cầu. Chúng tôi dự tính ý tưởng và tạo ra các mô hình kinh doanh mới cho khách hàng của mình bằng cách phát triển các dịch vụ và sản phẩm dựa trên các công nghệ mới - từ tầm nhìn ban đầu thông qua phát triển đến triển khai, sản xuất và vận hành.\r\n\r\nChúng tôi chuyên về chiến lược và đổi mới kinh doanh, giải pháp kỹ thuật số và dịch vụ ứng dụng - ngoài kỹ thuật thiết bị và hệ thống. Các giải pháp nổi bật của chúng tôi cung cấp giá trị kinh doanh độc đáo và nền tảng đáng tin cậy cho sự thành công bền vững.\r\n\r\nZühlke được thành lập tại Thụy Sĩ vào năm 1968 và thuộc sở hữu của các đối tác. 1.200+ nhân viên của chúng tôi có trụ sở tại Áo, Bulgaria, Đức, Hồng Kông, Bồ Đào Nha, Serbia, Singapore, Thụy Sĩ và Vương quốc Anh, phục vụ khách hàng từ nhiều ngành công nghiệp. Ngoài ra, chi nhánh đầu tư mạo hiểm Zühlke Ventures của chúng tôi cung cấp tài chính khởi nghiệp trong lĩnh vực công nghệ cao.\r\n\r\nTrải qua 50 năm thành công tại châu Âu, Tập đoàn Zühlke vừa c', 'www.zuehlke.com/en', 'Cam kết phát triển: Chúng tôi dành 10% doanh thu của mình để hỗ trợ nhân viên tăng trưởng và phát triển các kỹ năng, để phù hợp với bạn và Zuhlke một cách hoàn hảo.\r\nCung cấp công việc có ý nghĩa: Kinh nghiệm làm việc trong các nhóm phân tán trong một công ty toàn cầu với 16 văn phòng làm việc với các khách hàng khu vực và toàn cầu trong các dự án chuyển đổi xuyên biên giới.\r\nCân bằng tốt giữa công việc và cuộc sống: Một nơi làm việc thân thiện với gia đình với khả năng làm việc tại nhà và 18 ngày', 'Thứ 2 - Thứ 6');

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
  `introduce` text NOT NULL,
  `attach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `iduser`, `gender`, `birth`, `salary`, `major`, `introduce`, `attach`) VALUES
(1, 1, 'Nữ', '2000-08-30', '15 ~ 23 tr / tháng', 'Front End Developer', 'Tôi là Long, một người trẻ trung và năng động, hiện đã 23 tuổi. Tôi luôn đam mê việc khám phá và học hỏi, xem mỗi thách thức là cơ hội để phát triển bản thân.\r\n\r\nKinh nghiệm và kiến thức của tôi không chỉ dừng lại ở lĩnh vực kỹ thuật máy tính, nơi tôi đã tập trung vào việc xây dựng ứng dụng và khám phá các công nghệ mới, mà còn lan rộng vào nhiều lĩnh vực khác. Tôi tin rằng việc học không bao giờ có hồi kết, và tôi luôn cố gắng cập nhật và nâng cao kiến thức của mình.\r\n\r\nTôi không chỉ là người đam mê công việc mà còn là người hướng ngoại, thích giao tiếp và tạo dựng mối quan hệ xã hội. Sự quan tâm và lòng tốt đối với mọi người luôn là ưu tiên hàng đầu của tôi. Tôi tin rằng chia sẻ kinh nghiệm và kiến thức có thể tạo ra một môi trường tích cực và hòa đồng hơn.\r\n\r\nBên cạnh đó, tôi luôn muốn góp phần vào cộng đồng và xã hội bằng cách tham gia các hoạt động tình nguyện và ủng hộ các dự án mang ý nghĩa xã hội. Tôi tin rằng mỗi cá nhân, dù nhỏ bé, cũng có thể làm thay đổi tích cực trong xã hội.', ''),
(2, 2, '', '0000-00-00', '', '', '', ''),
(3, 3, '', '0000-00-00', '', '', '', ''),
(4, 4, '', '0000-00-00', '', '', '', '');

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

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `idcv`, `name`, `school`, `year`) VALUES
(1, 1, 'Cao đẳng Cơ khí động lực', 'CĐ CNC Hà Nội', '2021'),
(2, 1, 'THPT', 'THPT Đại Mỗ', '2018'),
(3, 1, '', '', '0000'),
(4, 1, '', '', '0000'),
(5, 1, '', '', '0000'),
(6, 2, '', '', '0000'),
(7, 2, '', '', '0000'),
(8, 2, '', '', '0000'),
(9, 2, '', '', '0000'),
(10, 2, '', '', '0000'),
(11, 3, '', '', '0000'),
(12, 3, '', '', '0000'),
(13, 3, '', '', '0000'),
(14, 3, '', '', '0000'),
(15, 3, '', '', '0000'),
(16, 4, '', '', '0000'),
(17, 4, '', '', '0000'),
(18, 4, '', '', '0000'),
(19, 4, '', '', '0000'),
(20, 4, '', '', '0000');

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

--
-- Dumping data for table `expcv`
--

INSERT INTO `expcv` (`id`, `idcv`, `level`, `job`, `corp`, `start`, `end`) VALUES
(1, 1, 'Trưởng ca / Giám sát', 'Nhân viên quản lí ngành hàng', 'WINCOMMERCE', '2020-05-25', '2023-12-31'),
(2, 1, '', '', '', '0000-00-00', '0000-00-00'),
(3, 1, '', '', '', '0000-00-00', '0000-00-00'),
(4, 1, '', '', '', '0000-00-00', '0000-00-00'),
(5, 1, '', '', '', '0000-00-00', '0000-00-00'),
(6, 2, '', '', '', '0000-00-00', '0000-00-00'),
(7, 2, '', '', '', '0000-00-00', '0000-00-00'),
(8, 2, '', '', '', '0000-00-00', '0000-00-00'),
(9, 2, '', '', '', '0000-00-00', '0000-00-00'),
(10, 2, '', '', '', '0000-00-00', '0000-00-00'),
(11, 3, '', '', '', '0000-00-00', '0000-00-00'),
(12, 3, '', '', '', '0000-00-00', '0000-00-00'),
(13, 3, '', '', '', '0000-00-00', '0000-00-00'),
(14, 3, '', '', '', '0000-00-00', '0000-00-00'),
(15, 3, '', '', '', '0000-00-00', '0000-00-00'),
(16, 4, '', '', '', '0000-00-00', '0000-00-00'),
(17, 4, '', '', '', '0000-00-00', '0000-00-00'),
(18, 4, '', '', '', '0000-00-00', '0000-00-00'),
(19, 4, '', '', '', '0000-00-00', '0000-00-00'),
(20, 4, '', '', '', '0000-00-00', '0000-00-00');

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

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `iduser`, `avatar`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `thumbnail5`) VALUES
(1, 1, 'Counter)).jpg', '', '', '', '', ''),
(2, 2, '', '', '', '', '', ''),
(3, 3, '', '', '', '', '', ''),
(4, 4, '', '', '', '', '', ''),
(5, 5, 'z4950728667416_7c7a8d0c040e88037792987d3f2a98e4.jpg', 'z4950729745567_e446900ff729dfb0d9769d21de68213e.jpg', 'z4950730564284_bc291262188e75e14122f83393dbbb0e.jpg', 'z4950731104046_f7bb7e15cd4f2bf3ae4a2f638c4d98dd.jpg', '', ''),
(6, 6, 'z4950769526213_822bd0e5c57083af7ccab4b93fb3575d.jpg', 'z4950770628781_258811672a14bfe498b5fc8cda76dfb4.jpg', 'z4950771020687_ea9977afe0b6f3344c7f486444a0345b.jpg', 'z4950771709115_317fe04cf3c0aa6e4735e6e1f77eb59d.jpg', 'z4950772098022_c18699884909fa7f740aa9d901d4b55a.jpg', 'z4950772339916_b7e2e97b5189c97c488758a50cce1eca.jpg'),
(7, 7, 'kms.png', 'z4950790063708_d2456f279f5c37cb586ef3bf8ca1c4d1.jpg', 'z4950790678793_d5127c33553e72c0c5b26b1a4d6cdb23.jpg', 'z4950790967876_91121a255454e28043997e66097d14f0.jpg', 'z4950791324219_367f3ba3c3831473dbd2903765327027.jpg', ''),
(8, 8, 'z4950820798890_8a57a28c6327bb7b3f92eef0219ab4f0.jpg', 'z4950852509241_9d3a60c7572b9e34fb2f04fa9c11a1e2.jpg', 'z4950853037179_768d0878f2782586ee09057d38879e00.jpg', 'z4950852751723_14fb19a30ddaaaffab6d90fe06a8702f.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `idrec` int(10) NOT NULL,
  `idcv` int(10) NOT NULL,
  `attach` varchar(255) NOT NULL,
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

--
-- Dumping data for table `recr`
--

INSERT INTO `recr` (`id`, `idcorp`, `job`, `exp`, `level`, `salary`, `progLang`, `type`, `description`, `start`, `end`, `request`) VALUES
(1, 1, 'Front End Web Developer', '2 năm ~ 5 năm', 'Tech Lead', '15 ~ 23 tr / tháng', 'React , HTML , CSS', 'Fulltime', 'Là nhà lãnh đạo kỹ thuật làm việc với một khách hàng doanh nghiệp chuyên nghiệp, bạn có cơ hội tương tác với các bên liên quan ở tất cả các cấp của tổ chức khách hàng và bằng các hoạt động đó, bạn đóng góp vào các hoạt động để thu hẹp khoảng cách giữa kinh doanh và công nghệ, chuyển những thách thức và mục tiêu kinh doanh thành các giải pháp kỹ thuật hợp lý và vững chắc mang lại giá trị và giúp hỗ trợ các mục tiêu của khách hàng.\r\n\r\nTrong dự án này, bạn phải làm việc chặt chẽ với các nhóm và người quản lý khác và hiểu động lực kinh doanh và cung cấp hỗ trợ thích hợp từ góc độ kỹ thuật để đưa ra quyết định tốt nhất.\r\n\r\nLà Trưởng nhóm kỹ thuật, bạn được kỳ vọng sẽ trở thành người lãnh đạo có thể cung cấp hỗ trợ kỹ thuật, tạo điều kiện cho các sự cố kỹ thuật cũng như huấn luyện các thành viên khác trong nhóm trở nên trưởng thành hơn trong các hoạt động hàng ngày. Trưởng nhóm kỹ thuật cũng sẽ đóng một vai trò quan trọng để hỗ trợ nhóm xây dựng cách làm việc phù hợp để có thể áp dụng tất cả các thực hành kỹ thuật tốt nhất để đảm bảo hiệu lực và hiệu quả của các hoạt động phát triển phần mềm.', '2023-12-07', '2024-01-01', 'Kiến thức tốt về các công nghệ frontend bao gồm nhưng không giới hạn ở HTML, CSS (SASS, LESS, Critical), các framework / thư viện JS khác nhau.\r\nHiểu rõ về cách kết xuất trình duyệt hoạt động và cung cấp các chiến lược tối ưu hóa kết xuất giao diện người dùng khác nhau.\r\nLàm việc với cả thử nghiệm / cá nhân hóa phía máy khách và máy chủ và có thể cung cấp giải pháp tối ưu hóa cho từng vấn đề tương ứng.\r\nÍt nhất 4 năm kinh nghiệm làm việc trong một dự án phần mềm quốc tế.\r\nHiểu biết sâu sắc về OOD / OOP.\r\nCó kiến thức tốt trong việc xây dựng phần mềm có thể kiểm thử, các lớp trừu tượng và các đối tượng giả. Có kinh nghiệm tốt trong các khung kiểm tra đơn vị.\r\nCó cấu trúc, định hướng giải pháp, tư duy chất lượng riêng và có kỹ năng giải quyết vấn đề tốt.\r\nPhát triển tốt trong một môi trường sáng tạo và thay đổi.\r\nCó kỹ năng giao tiếp tốt, có kinh nghiệm với công việc huấn luyện và cố vấn kỹ thuật.\r\nTinh thần trách nhiệm cao và định hướng lãnh đạo.\r\nKỹ năng tiếng Anh tốt trong cả nói và viết.'),
(2, 1, 'Project Manager', 'Trên 5 năm', 'Tech Lead', '15 ~ 23 tr / tháng', 'English , Scrum', 'Fulltime', 'Quản lý dự án - quản lý các hoạt động dự án cho nhiều dự án trên tất cả các giai đoạn của dự án, bao gồm bắt đầu, lập kế hoạch, thực hiện, giám sát, kiểm soát và đóng cửa. Tạo, quản lý và theo dõi phương tiện dự án, bao gồm, nhưng không giới hạn ở: Lịch trình dự án, Kế hoạch dự án chi tiết, Báo cáo phạm vi dự án, Dự toán chi phí, Kế hoạch tài nguyên, Nhật ký rủi ro và sự cố, Báo cáo trạng thái.\r\nĐảm bảo tuân thủ các tiêu chuẩn và thực tiễn phát triển phần mềm. Xác định và giải quyết các rủi ro, vấn đề và xung đột để đảm bảo kiểm soát chất lượng trong suốt vòng đời dự án.\r\nBiết cách quản lý công việc, nhóm, khách hàng và cấu trúc báo cáo của Agile và Scrum Development Frameworks.\r\nLãnh đạo và thúc đẩy nhóm phát triển, giám sát và đánh giá các thành viên trong nhóm, cung cấp cho họ phản hồi hợp lệ và mang tính xây dựng, cố vấn hỗ trợ và chuyên nghiệp.\r\nTham gia vào quá trình lựa chọn tài năng cho công ty với tư cách là người phỏng vấn chức năng, chủ động cải thiện báo cáo, quy trình, quy trình làm việc và kết quả của khách hàng.\r\nTích cực tham gia với tư cách là người dẫn đầu trong cuộc sống công ty để góp phần xây dựng văn hóa công ty của Niteco.\r\nKinh nghiệm đã được chứng minh trong dự toán dự án, kiểm soát ngân sách, quản lý con người và quản lý rủi ro.', '2023-12-07', '2024-01-01', 'Ngôn ngữ: Tiếng Anh lưu loát xuất sắc trong các kỹ năng viết, nói và hiểu.\r\n\r\nTrình độ chuyên môn: Bằng Cử nhân, tốt nhất là trong lĩnh vực liên quan đến máy tính.\r\n\r\nKinh nghiệm cần thiết:\r\n\r\nÍt nhất 5 năm kinh nghiệm làm Quản lý dự án Phần mềm / CNTT trong một công ty CNTT.\r\nÍt nhất 2 năm kinh nghiệm làm trưởng nhóm dự án trong môi trường phát triển phần mềm Agile.\r\nCó kinh nghiệm quản lý dự án truyền thống cũng như các phương pháp Agile (Scrum, XP hoặc Kanban).\r\nKinh nghiệm đã được chứng minh trong dự toán dự án, kiểm soát ngân sách, quản lý con người và quản lý rủi ro.'),
(3, 1, '.NET Developer', 'Trên 5 năm', 'Tech Lead', '23 ~ 40 tr / tháng', 'ASP.NET , C#', 'Project-Based Work', 'Trong dự án này, bạn phải làm việc chặt chẽ với các nhóm và người quản lý khác và hiểu động lực kinh doanh và cung cấp hỗ trợ thích hợp từ góc độ kỹ thuật để đưa ra quyết định tốt nhất.\r\n\r\nLà Trưởng nhóm kỹ thuật, bạn được kỳ vọng sẽ trở thành người lãnh đạo có thể cung cấp hỗ trợ kỹ thuật, tạo điều kiện cho các sự cố kỹ thuật cũng như huấn luyện các thành viên khác trong nhóm trở nên trưởng thành hơn trong các hoạt động hàng ngày. Trưởng nhóm kỹ thuật cũng sẽ đóng một vai trò quan trọng để hỗ trợ nhóm xây dựng cách làm việc phù hợp để có thể áp dụng tất cả các thực hành kỹ thuật tốt nhất để đảm bảo hiệu lực và hiệu quả của các hoạt động phát triển phần mềm.', '2023-12-07', '2024-01-01', 'Có kinh nghiệm trong việc xây dựng giải pháp tìm kiếm có thể mở rộng đang được sử dụng trên các kênh, với các đối tượng tên miền phong phú.\r\nCó kinh nghiệm triển khai trải nghiệm tìm kiếm phù hợp cho các khu vực khác nhau, chẳng hạn như tìm kiếm toàn văn bản, bắt nguồn ngôn ngữ, cấu hình dựa trên ngôn ngữ.\r\nÍt nhất 8 năm kinh nghiệm trong C # thích hợp hơn ở phía máy chủ.\r\nHiểu biết sâu sắc . Kiến thức phát triển web dựa trên mạng. Hiểu biết về .Net Core là một lợi thế.\r\nCó kinh nghiệm trong các mô-đun dịch vụ vi mô như Đăng ký dịch vụ, Khám phá dịch vụ, Thành phần / Điều phối / Chuyển đổi, Giám sát, Cân bằng tải và mở rộng quy mô, HA và Chuyển đổi dự phòng, Quản trị\r\nÍt nhất 4 năm kinh nghiệm làm việc trong một dự án phần mềm quốc tế.\r\nHiểu biết sâu sắc về OOD / OOP.\r\nKinh nghiệm mạnh mẽ trong việc sử dụng các mẫu thiết kế như Dependency Injection, Inversion of Control, Singleton, Factory, Façade và các khung C # cung cấp hỗ trợ cho các mẫu mã hóa đó.\r\nCó kiến thức tốt trong việc xây dựng phần mềm có thể kiểm thử, các lớp trừu tượng và các đối tượng giả. Kinh nghiệm tốt trong các khung kiểm tra đơn vị (kiểm tra đơn vị Microsoft Visual Studio, NUnit, v.v.)\r\nKinh nghiệm tốt trong các chiến lược phân nhánh Git và CICD\r\nCó cấu trúc, định hướng giải pháp, tư duy chất lượng riêng và có kỹ năng giải quyết vấn đề tốt\r\nPhát triển tốt trong một môi trường sáng tạo và thay đổi\r\nCó kỹ năng giao tiếp tốt, có kinh nghiệm với công việc huấn luyện và cố vấn kỹ thuật\r\nTinh thần trách nhiệm cao và định hướng lãnh đạo\r\nKỹ năng tiếng Anh tốt trong cả nói và viết.\r\n'),
(4, 2, 'Project Manager', 'Trên 5 năm', 'Tech Lead', '23 ~ 40 tr / tháng', 'English , Waterfall , Scrum , Agile', 'Remote', 'Bạn sẽ tham gia một nhóm tuyệt vời để xây dựng các ứng dụng thú vị phục vụ hàng triệu người dùng, từ ý tưởng đến sản xuất.\r\nLàm việc với những khách hàng siêu tốt, đảm bảo rằng chúng tôi hiểu nhu cầu của họ và thực hiện ước mơ của họ.\r\nLàm việc với các công ty công nghệ tiên tiến, nơi bạn có thể góp phần biến ước mơ thành sản phẩm cùng với đội ngũ kỹ sư tuyệt vời.\r\nLà một đầu mối liên lạc trung tâm với khách hàng nước ngoài của chúng tôi, bạn sẽ có ảnh hưởng đáng kể đến thành công của công ty chúng tôi bằng cách sử dụng các kỹ năng giao tiếp tiếng Anh siêu tốt của bạn.\r\nNếu bạn biết thông tin chi tiết về Thương mại điện tử thì đó là một điểm cộng. Nếu bạn biết nhiều lĩnh vực kinh doanh khác - thậm chí còn tốt hơn. Nếu không, thì chúng tôi sẽ dạy bạn.\r\nNó không phải là khoa học tên lửa - miễn là bạn thông minh và sẵn sàng học hỏi.\r\nCơ hội đi du lịch và thăm khách hàng tại chỗ.', '2023-12-07', '2024-01-01', 'Có ít nhất 5 năm quản lý dự án trong ngành Phát triển phần mềm. Bạn biết công cụ của bạn và biết làm thế nào để đối phó với khách hàng khó tính, không phải là một bồi bàn, nhưng kinh nghiệm trong tư vấn hoặc tương tự chắc chắn.\r\nKỹ năng giao tiếp tiếng Anh hoàn hảo là một yêu cầu bắt buộc phải có.\r\nSử dụng thành thạo các phương pháp Waterfall, Scrum, Agile.\r\nCó kỹ năng trong các quy trình Yêu cầu thay đổi.\r\nCó kinh nghiệm trong bán hàng trước, đặc biệt là trong thị trường Phần mềm Việt Nam, đã làm việc với khách hàng Việt Nam hoặc Châu Á.\r\nBằng cấp sẽ rất tuyệt, tuy nhiên niềm đam mê, thái độ và kinh nghiệm quan trọng hơn.\r\nNhà tư tưởng phản biện với kỹ năng giải quyết vấn đề sáng tạo.\r\nTổ chức tuyệt vời, quản lý thời gian &; phát triển quan hệ khách hàng, và kiến thức vững chắc về quản lý dự án như lập kế hoạch, giám sát và kỹ năng kiểm soát.\r\nTư vấn chuyên môn và có kiến thức về AI là những điểm cộng.'),
(5, 3, 'Full Stack Developer', '2 năm ~ 5 năm', 'Mid-level Developer', '15 ~ 23 tr / tháng', 'NodeJS', 'Fulltime', 'Xử lý các yêu cầu báo cáo nội bộ của nhóm / khách hàng, cung cấp các giải pháp và giải pháp thay thế phù hợp trong thời hạn; theo dõi để đảm bảo giải quyết.\r\nTham khảo các phương pháp hay nhất và cách giải quyết nếu sản phẩm hiện tại không đáp ứng yêu cầu của khách hàng.\r\nSửa lỗi và phát triển các tính năng để đáp ứng nhu cầu của khách hàng dựa trên các yêu cầu và thiết kế đã xác định.\r\nĐọc tệp nhật ký và viết các tập lệnh kiểm tra tự động hóa để điều tra các vấn đề\r\nThực hiện theo các quy trình và hướng dẫn đã cho để tạo mã được thiết kế tốt, có thể kiểm tra và sạch.\r\nViết mẫu và tài liệu để hướng dẫn người dùng cuối.\r\nCó thể chuyển sang ngôn ngữ chéo cho các tác vụ full-stack\r\nThực hiện các nhiệm vụ khác theo sự phân công', '2023-12-07', '2024-01-01', 'Có khả năng có 6+ năm kinh nghiệm trong phát triển phần mềm.\r\nCó kinh nghiệm với Nodejs hoặc Javascript.\r\nKinh nghiệm trong một hoặc nhiều ngôn ngữ bao gồm nhưng không giới hạn ở Unix, C, C ++, C # và JavaScript, là một lợi thế.\r\nThể hiện sự quan tâm và khả năng học các ngôn ngữ mã hóa khác khi cần thiết.\r\nĐam mê lĩnh vực kiểm thử tự động hóa cho các ứng dụng dành cho máy tính để bàn và thiết bị di động.\r\nThoải mái làm việc trong môi trường phát triển sản phẩm\r\nChủ động, giao tiếp tốt và học hỏi nhanh'),
(6, 3, 'Tester', '2 năm ~ 5 năm', 'Senior Developer', '23 ~ 40 tr / tháng', 'Tự động hóa , QA , QC', 'Fulltime', 'Thực hiện tất cả các hoạt động thử nghiệm để cải thiện chất lượng sản phẩm, làm việc chặt chẽ với nhóm (nhà phát triển, phân tích kinh doanh, dịch vụ khách hàng, vận hành, v.v.) để mang lại thành công cho sản phẩm\r\nGiải quyết các nhu cầu tự động hóa kiểm thử một cách có hệ thống, định hướng chi tiết với sự trợ giúp của các kỹ năng phân tích mạnh mẽ và khả năng giải quyết vấn đề\r\nTự động hóa các bài kiểm tra chấp nhận chức năng, hồi quy và / hoặc hiệu suất\r\nCó trách nhiệm hoàn toàn trong việc tăng cường phạm vi kiểm tra tự động từ đầu đến cuối\r\nTham gia lập kế hoạch chạy nước rút và làm việc chặt chẽ với nhóm Scrum để phân tích các yêu cầu và đưa ra các khuyến nghị kiểm thử cần thiết', '2023-12-07', '2024-01-01', 'Kiến thức vững chắc về chuyên môn kiểm thử web / ứng dụng dành cho thiết bị di động\r\n3+ năm kinh nghiệm trong việc tạo và chạy thử nghiệm tự động trên web / ứng dụng di động bằng cách sử dụng các khung kiểm thử ứng dụng như Selenium / Appium / XCTest / XCUiTest, đặc biệt là Playwright (Typescript)\r\nKinh nghiệm thực hành trong việc sử dụng các công cụ kiểm tra như TestNG / Jasmine / Mocha / Nightwatch / Protractor / caWebdriverIO, v.v.\r\nKinh nghiệm kiểm thử vững chắc (chiến lược kiểm thử, phương pháp kiểm thử, kế hoạch kiểm thử, kỹ thuật kiểm tra bao gồm hộp đen, dựa trên rủi ro, thăm dò, thử nghiệm không giao diện người dùng, v.v.)\r\nCó kiến thức tốt về quy trình phát triển phần mềm, đặc biệt là quy trình kiểm thử phần mềm\r\nPhương pháp và định hướng chi tiết, với kỹ năng phân tích vững chắc và khả năng giải quyết vấn đề\r\nSự cống hiến mạnh mẽ cho chất lượng và thái độ tích cực, hợp tác và cách tiếp cận để thử nghiệm\r\nLà thành viên cao cấp của đội ngũ kỹ thuật, năng động; Có thể tìm thấy cơ hội để cải thiện và giải quyết'),
(7, 4, 'Software Architect', 'Trên 5 năm', 'Tech Lead', '23 ~ 40 tr / tháng', 'ReactJs , NextJs', 'Team-Based Work', 'Mục tiêu của chúng tôi rất đơn giản: trở thành một nhà xây dựng ngân hàng nối tiếp. Để đạt được điều này, Tyme đang tìm kiếm một Kỹ sư trưởng kỹ thuật (ReacJs / NextJs) để thúc đẩy sự đổi mới và chuyển đổi bằng cách nhấn mạnh vào nghề phát triển phần mềm và áp dụng các nguyên tắc kỹ thuật.\r\n\r\nVề cốt lõi, hoạt động kinh doanh của chúng tôi là ngân hàng, nhưng công nghệ rất quan trọng để phục vụ nhu cầu của hàng triệu khách hàng và thực hiện sứ mệnh toàn diện và hiểu biết về tài chính cho các thị trường mới nổi. Để đạt được mục tiêu này, TYME Global đã thành lập một Trung tâm Xuất sắc tại Việt Nam để trở thành một trung tâm công nghệ kỹ thuật số đẳng cấp thế giới.', '2023-12-07', '2024-01-01', 'Một tư duy thực dụng.\r\nKỹ năng giao tiếp tiếng Anh mạnh mẽ (cả bằng lời nói và bằng văn bản), đặc biệt là trong môi trường phát triển phần mềm toàn cầu.\r\nKinh nghiệm chuyên môn về ReactJS, NextJS và hệ sinh thái của nó (Hooks, Context, Redux, Redux-Thunk, thư viện Quản lý trạng thái...)\r\nThành thạo các ngôn ngữ front-end: HTML, CSS, JavaScript (ES6+)\r\nTrải nghiệm thực tế với Git\r\nThực hành với các API RESTful và xử lý yêu cầu không đồng bộ để cập nhật một phần trang\r\nKinh nghiệm với micro-frontend là cần thiết.\r\nCó kinh nghiệm trong kiểm thử đơn vị và các khung kiểm tra tự động là cần thiết.\r\nQuen thuộc với việc kiểm tra và gỡ lỗi trình duyệt như Chrome, Firefox, Edge, Safari...');

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

--
-- Dumping data for table `skillcv`
--

INSERT INTO `skillcv` (`id`, `idcv`, `progLang`, `percent`) VALUES
(1, 1, 'Excel', 80),
(2, 1, 'Word', 60),
(3, 1, 'HTML5', 70),
(4, 1, 'CSS', 65),
(5, 1, '', 0),
(6, 2, '', 0),
(7, 2, '', 0),
(8, 2, '', 0),
(9, 2, '', 0),
(10, 2, '', 0),
(11, 3, '', 0),
(12, 3, '', 0),
(13, 3, '', 0),
(14, 3, '', 0),
(15, 3, '', 0),
(16, 4, '', 0),
(17, 4, '', 0),
(18, 4, '', 0),
(19, 4, '', 0),
(20, 4, '', 0);

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `name`, `email`, `phone`, `address`, `role`) VALUES
(1, 'longlhph31572', '12345678', 'Lương Hoàng Long', 'longlhph31572@fpt.edu.vn', '0346540479', 'Văn Quán , Hà Nội', 2),
(2, 'dungntph31678', '12345678', 'Ngô Thị Dung', 'dungntph31678@fpt.edu.vn', '0346540478', '', 2),
(3, 'user', '123', 'Nguyễn Việt Hưng', 'hungnvph38409@fpt.edu.vn', '0375343852', '', 2),
(4, 'tuannaph38619', '12345678', 'Nguyễn Anh Tuấn', 'tuannaph38619@fpt.edu.vn', '0346540476', '', 2),
(5, 'nitecovietnam', '12345678', 'Niteco Vietnam Co', 'long1234@gmail.com', '0982130660', 'Hà Nội', 3),
(6, 'corp', '123', 'NFQ Asia', 'corp@gmail.com', '0982130661', 'TP. Hồ Chí Minh', 3),
(7, 'kmstech', '12345678', 'KMS Technology', 'kmstech@gmail.com', '0982130662', 'TP. Hồ Chí Minh', 3),
(8, 'zuhlkeco', '12345678', ' Zuhlke Engineering VIE', 'zuhlkeco@gmail.com', '0982130663', 'Đà Nẵng', 3),
(9, 'admin', '123', '', '', '', '', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datafilter`
--
ALTER TABLE `datafilter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expcv`
--
ALTER TABLE `expcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recr`
--
ALTER TABLE `recr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skillcv`
--
ALTER TABLE `skillcv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
