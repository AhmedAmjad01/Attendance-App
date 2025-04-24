-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 07:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `roll_no`, `name`, `email_id`) VALUES
(1, '2022063', 'Ahmed Amjad', 'u2022063@giki.edu.pk'),
(2, '2022566', 'Haris Shah', 'u2022566@giki.edu.pk'),
(3, '2022000', 'Aqib', '2022000@giki.edu.pk'),
(4, '2022001', 'Mursaleen', '2022001@giki.edu.pk'),
(5, '2020003', 'Senior', 'u2020003@giki.edu.pk'),
(6, '2022359', 'Muhammed Bilal', 'u2022359@giki.edu.pk'),
(7, '2022004', 'Haya Khan', 'u2022004@giki.edu.pk'),
(8, '2022005', 'Hassan Shah', 'u2022005@giki.edu.pk'),
(9, '2021335', 'Ahmed Naveed Qazi', 'u2021335@giki.edu.pk'),
(10, '2022107', 'Areeb Majeed', 'u2022107@giki.edu.pk'),
(11, '2022438', 'Muhammad Shoaib', 'u2022438@giki.edu.pk'),
(12, '2022538', 'Shaheer Naveed', 'u2022538@giki.edu.pk'),
(13, '2019095', 'Awaiz Adnan', 'u2019095@giki.edu.pk'),
(14, '2020901', 'Basil Shaqeeq', 'u2020901@giki.edu.pk'),
(15, '2021020', 'Abdul Rafay', 'u2021020@giki.edu.pk'),
(16, '2021204', 'Haris Ahmed', 'u2021204@giki.edu.pk'),
(17, '2021500', 'Musaab Ali', 'u2021500@giki.edu.pk'),
(18, '2022039', 'Abu Bakr Mazhar', 'u2022039@giki.edu.pk'),
(19, '2022279', 'Manal Ahsan', 'u2022279@giki.edu.pk'),
(20, '2022349', 'Muhammad Aqeeb', 'u2022349@giki.edu.pk'),
(21, '2022905', 'Syed Ahmer Hussain', 'u2022905@giki.edu.pk'),
(22, '2021016', 'Abdul Moiz Javed', 'u2021016@giki.edu.pk'),
(23, '2021414', 'Muhammad Mashood Malik', 'u2021414@giki.edu.pk'),
(24, '2022185', 'Haider Ali Khan Babar', 'u2022185@giki.edu.pk'),
(25, '2022259', 'Lov Aashram', 'u2022259@giki.edu.pk'),
(26, '2022267', 'Mahad Azhar Sheikh', 'u2022267@giki.edu.pk'),
(27, '2022647', 'Muhammad Shumail Amir', 'u2022647@giki.edu.pk'),
(28, '2023222', 'Hamza Saeed', 'u2023222@giki.edu.pk'),
(29, '2023287', 'Mahad Ismail', 'u2023287@giki.edu.pk'),
(30, '2023696', 'Syed Rayyan Hussain', 'u2023696@giki.edu.pk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
