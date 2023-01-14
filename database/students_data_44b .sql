-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220726.01cf9ce82e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_data#44b`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin2537`
--

CREATE TABLE `adminlogin2537` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `AdminId` varchar(20) NOT NULL,
  `Password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin2537`
--

INSERT INTO `adminlogin2537` (`Id`, `Name`, `AdminId`, `Password`) VALUES
(1, 'SannidhanKr', '4nmsannidhan258', 'asdf12345');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL,
  `clubs` varchar(255) NOT NULL,
  `USN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `clubs`, `USN`) VALUES
(1, ',,', '2023-01-13 21:28:40', '1', 'FLC,Authorcraft', '4nm21cs210'),
(2, ',,', '2023-01-13 22:01:19', '1', 'FLC,Stereo', ''),
(3, ',,', '2023-01-13 22:12:44', '1', 'Aero,Ace', ''),
(4, ',,', '2023-01-14 18:23:36', '1', 'FLC,Aero,Ace', '4nm21cs469'),
(5, ',,', '2023-01-14 18:26:04', '1', 'FLC,Authorcraft,Ace', '4nm21cs469'),
(6, 'codeforces834.pdf,contest137.pdf,Web+Dev+Syllabus.pdf', '2023-01-14 23:44:24', '1', ' FLC,Authorcraft,Ace,Rachana', '4nm21cs569'),
(7, 'codeforces834.pdf,contest137.pdf,contest137.pdf', '2023-01-14 23:45:58', '1', 'FLC,Stereo,Ace,NitteBlues', '4nm21cs669'),
(8, ',,', '2023-01-15 00:38:47', '1', ' FLC,Stereo,Aero,Ace,NitteBlues', '4nm21cs365'),
(9, 'MCQ_UHV_2.pdf,contest137.pdf,codeforces834.pdf', '2023-01-15 01:14:48', '1', 'FLC,Stereo,Aero,Ace', '4nm21cs366'),
(10, 'codeforces834.pdf,contest137.pdf,MCQ_UHV_2.pdf', '2023-01-15 01:25:11', '1', 'FLC,Authorcraft,Stereo,Ace,Robotics', '4nm21cs367'),
(11, 'AppBreweryCornellNotesTemplate.pdf,Web Dev Syllabus.pdf,codeforces834.pdf', '2023-01-15 01:35:16', '1', 'FLC,Stereo,Ace,Robotics', '4nm21cs368');

-- --------------------------------------------------------

--
-- Table structure for table `logindetail966`
--

CREATE TABLE `logindetail966` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `USN` varchar(20) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `RegisteredDate` datetime NOT NULL DEFAULT current_timestamp(),
  `keyshow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetail966`
--

INSERT INTO `logindetail966` (`Id`, `Name`, `USN`, `Password`, `RegisteredDate`, `keyshow`) VALUES
(9, 'shashi', '4nm21cs215', '$2y$10$QLPznONNVnYpYE4cc9aeIeZA3eTt6kZw4QQyptMcs6IOWvwYCuFVu', '2022-12-22 23:10:38', ''),
(10, 'vivek kumar', '4nm21cs210', '$2y$10$qiWOsh1o9uTQahavk7tQfufQObb4h1LAadClFOLQTQZp8nXxFhjPK', '2022-12-23 01:06:12', '4nm21cs210'),
(11, 'vishal kumar', '4nm21cs209', '$2y$10$MqrCQW9INdtyvxaPOg1NHuMQu6XN8nOIYojnFuAibcke4E2m2Oxwy', '2022-12-23 01:09:18', '4nm21cs209'),
(12, 'Nitin', '4nm21is098', '$2y$10$rVzmsuvt8AG.KtVJX.9eKulVlGsEppyMI25N9w8M1cI8GXwvLZzsm', '2022-12-23 22:53:40', '4nm21is098'),
(13, 'vinit raj', '4nm21cs090', '$2y$10$U0bix5/llzXkbnQSEjviDuXWX.6sJT/A5YnuL.U6CmfTZytD0kjwO', '2022-12-26 17:16:14', '4nm21cs090'),
(14, '', '', '', '2023-01-14 13:53:13', '4nm21is090'),
(15, 'viva singh', '4nm21cs169', '$2y$10$p2EsTw/RXVSpiD4MRU/KuON572THq59Mzmn4HkHWxsrIIzvkrsBzG', '2023-01-14 14:21:00', '4nm21cs169'),
(16, 'tejash rao', '4nm21cs269', '$2y$10$WyhOkgVhK2qmthMF42PxseYsh2qoI84nhQc5aEQDVxmZzLPau/YK2', '2023-01-14 14:29:22', '4nm21cs269'),
(17, 'vimal rao', '4nm21cs369', '$2y$10$jt8sOYVZK32D15Ud59WiJeLLRR83Smnea.PozQVeQN5Nt7.Kc6IOK', '2023-01-14 14:33:59', '4nm21cs369'),
(18, 'pranav', '4nm21cs469', '$2y$10$NE4.yVFI0xwivmRUQnuHa.GDzj3xmGD6Y4GpIDDGkvoIBsNSXO6vm', '2023-01-14 15:22:37', '4nm21cs469'),
(19, 'golu', '4nm21cs569', '$2y$10$fSnyh2NuivpwTxPKhka.SeuWEbp62VHv1aVDrb33dfYvqzcCdTkau', '2023-01-14 21:02:07', '4nm21cs569'),
(20, 'chhotu', '4nm21cs669', '$2y$10$aXMJjUk71sUxlsNZ3vI7peWtirndaTFIPJ1jNocsbu11pjPqqNGKa', '2023-01-14 23:41:42', '4nm21cs669'),
(21, 'pravin kumar', '4nm21cs365', '$2y$10$fgsV991te76fY3DB6/0ArO3htU70LWU08ZO.QbG1H13anP9logbKq', '2023-01-15 00:27:26', '4nm21cs365'),
(22, 'vimal raj', '4nm21cs366', '$2y$10$1E6TL4PzoMVaThmmcXvktOWmhA5wzSrDEzVeYsxcIz7sOX6CKt2WG', '2023-01-15 01:06:27', '4nm21cs366'),
(23, 'vinit raj', '4nm21cs367', '$2y$10$uTs/INbO9.zaBXje3WXzy.kuDCnmWoVIGlcqPBgfYWWuicvh0xi1u', '2023-01-15 01:23:03', '4nm21cs367'),
(24, 'vinit raj', '4nm21cs368', '$2y$10$HTDeg6H2jiRIaxZ4Q77Y2e.c0A4KuK2VIC7Y5V.B0/5kjGGgm965G', '2023-01-15 01:33:31', '4nm21cs368');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name1` varchar(255) NOT NULL,
  `USN` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `emailurl` varchar(255) NOT NULL,
  `linkedinurl` varchar(255) NOT NULL,
  `githuburl` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name1`, `USN`, `description1`, `emailurl`, `linkedinurl`, `githuburl`, `photo`) VALUES
('vivek kumar', '4nm21cs210', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'abc.jpg'),
('vishal kumar', '4nm21cs210', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3957.jpg'),
('vishal kumar', '4nm21cs210', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3957.jpg'),
('vinit kumar', '4nm21is090', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3930.HEIC'),
('vrashab', '4nm21cs209', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3964.jpg'),
('vivek kumar', '4nm21cs210', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3964.jpg'),
('viva kumar', '4nm21cs169', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_4006.jpg'),
('tejas rao', '4nm21cs269', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_4006.jpg'),
('vimal rao', '4nm21cs369', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3958.HEIC'),
('vinit raj', '4nm21cs090', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3929.HEIC'),
('vivek kumar', '4nm21cs210', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3950.HEIC'),
('Nitin', '4nm21is098', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3930.HEIC'),
('Nitin', '4nm21is098', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3930.HEIC'),
('Nitin', '4nm21is098', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3930.HEIC'),
('vishal kumar', '4nm21cs209', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'IMG_3930.HEIC'),
('pranav', '4nm21cs469', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'abc.jpg'),
('viva singh', '4nm21cs169', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'WhatsApp Image 2022-02-22 at 9.27.15 PM.jpeg'),
('viva singh', '4nm21cs169', 'student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'WhatsApp Image 2022-02-22 at 9.27.15 PM.jpeg'),
('golu', '4nm21cs569', 'went home', ' vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'unnamed.jpg'),
('chhotu', '4nm21cs669', 'leave in patna', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'DSC_0401.JPG'),
('pravin kumar', '4nm21cs365', 'went home', ' vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'unnamed.jpg'),
('vimal raj', '4nm21cs366', 'student in nitte', ' vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'DSC_0058.JPG'),
('vinit raj', '4nm21cs367', 'cse student in nitte', 'vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'a.jpg'),
('vinit raj', '4nm21cs368', 'student in nitte', ' vkumar1972003@gmail.com', 'https://www.linkedin.com/in/vivek-kumar-b91155247/', 'https://github.com/Vive007', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students_detail34`
--

CREATE TABLE `students_detail34` (
  `id` int(11) NOT NULL,
  `StudentName` text NOT NULL,
  `USN` varchar(50) NOT NULL,
  `SECTION` text NOT NULL,
  `TeacherName` text NOT NULL,
  `UpdatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `21CS301` int(11) NOT NULL,
  `21CS302` int(11) NOT NULL,
  `21CS303` int(11) NOT NULL,
  `21CS304` int(11) NOT NULL,
  `21HU312` int(11) NOT NULL,
  `CIE` int(11) NOT NULL,
  `Obtained` int(11) NOT NULL,
  `PERCENTAGE` int(11) NOT NULL,
  `CLASS_HELD` int(11) NOT NULL,
  `CLASSES_ATTENDED` int(11) NOT NULL,
  `21cs301a` int(200) NOT NULL,
  `21cs302a` int(200) NOT NULL,
  `21cs303a` int(200) NOT NULL,
  `21cs304a` int(200) NOT NULL,
  `21hu312a` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_detail34`
--

INSERT INTO `students_detail34` (`id`, `StudentName`, `USN`, `SECTION`, `TeacherName`, `UpdatedAt`, `21CS301`, `21CS302`, `21CS303`, `21CS304`, `21HU312`, `CIE`, `Obtained`, `PERCENTAGE`, `CLASS_HELD`, `CLASSES_ATTENDED`, `21cs301a`, `21cs302a`, `21cs303a`, `21cs304a`, `21hu312a`) VALUES
(40, '.vimal raj.', '.4nm21cs366.', '.d.', '..', '2023-01-15 01:15:57', 36, 45, 46, 47, 48, 250, 222, 88, 50, 8, 20, 22, 25, 24, 23),
(41, '.vinit raj.', '.4nm21cs367.', '.t.', '..', '2023-01-15 01:27:06', 45, 46, 47, 48, 49, 250, 235, 94, 50, 9, 25, 35, 36, 37, 38),
(42, '.vinit raj.', '.4nm21cs368.', 'd', '', '2023-01-15 01:37:41', 36, 48, 45, 49, 50, 250, 228, 91, 50, 9, 36, 47, 45, 46, 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin2537`
--
ALTER TABLE `adminlogin2537`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindetail966`
--
ALTER TABLE `logindetail966`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students_detail34`
--
ALTER TABLE `students_detail34`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin2537`
--
ALTER TABLE `adminlogin2537`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logindetail966`
--
ALTER TABLE `logindetail966`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students_detail34`
--
ALTER TABLE `students_detail34`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
