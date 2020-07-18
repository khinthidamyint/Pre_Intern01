-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 05:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddress`
--

CREATE TABLE `adddress` (
  `id` int(11) NOT NULL,
  `addressno` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `township` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adddress`
--

INSERT INTO `adddress` (`id`, `addressno`, `street`, `township`, `city`, `zipcode`, `telephone`, `mobile`, `facebook`, `email`, `fax`) VALUES
(1, 256, 'minmahaw', 'loikaw', 'loikaw', 0, '', '0945400969', '', 'kyawhtay@gmail.com', ''),
(2, 0, '', '', '', 0, '', '', '', '', ''),
(3, 0, '', 'loikaw', 'loikaw', 0, '', '0952600456', '', '', ''),
(4, 0, 'dawookhu', 'loikaw', 'loikaw', 0, '', '0945400782', '', 'buemyar@gmail.com', ''),
(5, 0, '', 'loikaw', 'loikaw', 0, '', '09789224156', '', '', ''),
(6, 0, '', 'Kyaut sel', 'mandalay', 0, '', '0925100400', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `mmname` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  `studyplace` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `mark` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `citizenid` varchar(255) NOT NULL,
  `passportid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `title`, `ename`, `mmname`, `gender`, `syllabus`, `studyplace`, `school`, `level`, `major`, `mark`, `birthday`, `nationality`, `citizenship`, `religion`, `bloodgroup`, `citizenid`, `passportid`, `status`, `mobile`, `facebook`) VALUES
(1, 'Mr', 'kyaw', 'htay', 'M', 'Computer Technology', 'Myanmar', 'Mandalay', 'Bachelor', 'Computer Science', 365, '1989-07-19', 'Kayah', 'Myanmar', 'Hinduism', 'A', '2/lakana(naing)056125', '', '', '0945400969', ''),
(2, 'Ms', 'Bue', 'Myar', 'F', 'Computer Science', 'Myanmar', 'Pyin Oo Lwin', 'Grade 11', 'Bio', 500, '1981-06-15', '', '', '', '', '7/phamana(naing)452154', '', '', '0945400782', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `parent_status` varchar(255) NOT NULL,
  `guardian_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `applicant_id`, `name`, `nationality`, `status`, `age`, `occupation`, `position`, `address_id`, `parent_status`, `guardian_status`) VALUES
(1, 1, 'Daw Htay Htay Soe', 'Kayah', 'mliving', 0, '', '', 3, '', 'mother'),
(2, 1, 'U Than Nyunt', 'Kayah', 'fdecesed', 0, '', '', 2, '', 'mother'),
(3, 2, 'U Shay Moe', 'Kayin', 'fliving', 0, '', '', 5, '', 'mother'),
(4, 2, 'Daw Byar Myar', 'Kayah', 'mliving', 0, '', '', 6, '', 'mother');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddress`
--
ALTER TABLE `adddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddress`
--
ALTER TABLE `adddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
