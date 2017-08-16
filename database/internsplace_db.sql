-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 07:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internsplace_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(25) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `employer_id` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `position`, `skills`, `location`, `duration`, `employer_id`) VALUES
(1, 'Web Developer', 'HTML, css, js, php', 'New Delhi', '3 Months', 'xyz@xyz.com'),
(2, 'Web Designer', 'Photoshop, HTML, css, js', 'New Delhi', '3 Months', 'xyz@xyz.com'),
(3, 'Telecaller', 'Communication Skills', 'New Delhi', '2 Months', 'xyz@xyz.com'),
(4, 'Sales Officer', 'Sales, Business Communication', 'New Delhi', '2 Months', 'xyz@xyz.com');

-- --------------------------------------------------------

--
-- Table structure for table `internship_application`
--

CREATE TABLE `internship_application` (
  `id` int(10) NOT NULL,
  `position` varchar(25) NOT NULL,
  `applied_student_id` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_application`
--

INSERT INTO `internship_application` (`id`, `position`, `applied_student_id`, `status`) VALUES
(1, 'Sales Officer', 'xyz@xyz.com', 'Applied'),
(2, 'Sales Officer', 'xyz@xyz.com', 'Applied'),
(3, 'Sales Officer', 'xyz@xyz.com', 'Applied'),
(4, 'Sales Officer', 'xyz@xyz.com', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_id` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `user_type` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `pass`, `user_type`) VALUES
('xyz@xyz.com', 'xyz', 'employer'),
('abc@abc.com', 'abc', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_application`
--
ALTER TABLE `internship_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `internship_application`
--
ALTER TABLE `internship_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
