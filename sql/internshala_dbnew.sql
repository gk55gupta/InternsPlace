-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 02:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internshala_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `employer_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `org_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  PRIMARY KEY (`employer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `name`, `org_name`, `email_id`) VALUES
(1, 'xyz', 'xyz', 'xyz@xyz.com');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `position`, `skills`, `company`, `type`, `location`, `duration`, `description`) VALUES
(2, 'Web Developer', 'java, programming', 'xyz', 'Full - time', 'Delhi', '3 months', 'Require good knowledge of java'),
(6, 'Web Developer', 'php', 'abc', 'Full-time', 'delhi', '3 months', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `internship_application`
--

CREATE TABLE IF NOT EXISTS `internship_application` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(20) NOT NULL,
  `applied_student_id` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internship_application`
--

INSERT INTO `internship_application` (`id`, `position`, `applied_student_id`, `date`, `company`, `status`) VALUES
(1, 'Web Developer', 'gk55gupta@gmail.com', '2017-06-16 18:09:03', 'abc', 'Applied'),
(3, 'Web Developer', 'gk55gupta@gmail.com', '2017-06-16 18:20:15', 'abc', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email_id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `pass`, `user_type`) VALUES
('abc@abc.com', 'abc', 'student'),
('abhi@abc.com', 'abhi', 'student'),
('gk55gupta@gmail.com', '123gk', 'student'),
('xyz@xyz.com', 'xyz', 'employer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `highest_qualification` varchar(20) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `highest_qualification`, `college_name`, `email_id`) VALUES
(2, 'abhi', 'B.tech', 'Delhi University', 'abhi@abc.com'),
(3, 'abc', 'B.tech', 'abc', 'abc@abc.com');
