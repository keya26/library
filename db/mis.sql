-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 08:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'jahid', 'mahmud');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `book_copies`, `edition`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`) VALUES
(1, 'Computer Graphics', 3, 'Donald Hearn & Pauline Baker', 6, 'Second Edition', 'Pearson Education', '81-7808-794-4', 1997, '2014-11-13 03:00:00', 'Old'),
(2, 'Assembly Language Programming', 1, 'Charles Marut', 7, 'Second Edion', 'McGraw-Hill International Edition', '0-07-112896-4', 1992, '2015-09-18 04:00:00', 'new'),
(3, 'Digital Image Processing', 2, 'Rafael C Gonzalez & Richard E Wood', 4, 'Second Edition', 'Pearson Education', '81-7808-629-8', 2002, '2015-09-15 00:00:00', 'New'),
(4, 'Advanced Computer Architecture', 4, 'Kai Hwang', 10, 'Third Edition', 'McGraw Hill', '0-07-113342-9', 1993, '2014-12-15 00:00:00', 'Old'),
(5, 'Operating System Concepts', 5, 'Silberschatz , Galvin & Gagne', 8, 'Seventh Edition', 'John Wiley & Sons , Inc', '0-471-69466-5', 2005, '2015-12-01 00:00:00', 'New'),
(6, 'Data Communication & Networking', 6, 'Behrouz A Forouzan', 5, 'Fourth Edition', 'McGraw Hill', '0-07-063414-9', 2006, '2014-10-06 00:00:00', 'Old'),
(7, 'Discrete-Event System Simulation', 3, 'Jerry Banks,John S Carson & Barry L Nelson', 6, 'Second Edition', 'Prentice Hall', '9-78-013606-21-27', 2002, '2014-01-01 00:00:00', 'Old'),
(8, 'Laravel Php Web Framwork', 1, 'Nuruzzaman Milon', 5, 'First Edition', 'Dimic Prakashani', '978-984-33-9190-2', 2015, '2015-12-13 00:00:00', 'New'),
(9, 'Web Standard Programmer''s Reference', 1, 'Steven M Schafer', 5, 'Second Edition', 'Wiley Publishing Inc', '81-265-0620-2', 2005, '2015-11-01 00:00:00', 'New'),
(10, 'Introduction to Information System', 7, 'Cristine Redoblo', 5, 'Third Edition', 'Brian INC', '123-132', 2013, '2015-09-08 00:00:00', 'New'),
(11, 'Science and Invention Encyclopedia', 8, 'Clarke Donald & Dartford Mark', 7, 'Second Edion', 'H.S. Stuttman inc.', '0-87475-450-x', 1992, '2013-09-09 00:00:00', 'Old'),
(12, 'Integrated Science Textbook', 8, 'Merde C. Tan', 12, 'Second Edition', 'Vibal Publishing House Inc', '971-570-124-8', 2009, '2015-09-07 00:00:00', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `borrow_id` int(11) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=492 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`) VALUES
(490, 8, '2015-12-14 02:41:25', '14/12/2015'),
(491, 4, '2015-12-14 11:21:17', '15/12/2015'),
(489, 1, '2015-12-14 02:39:23', '17/12/2015');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE IF NOT EXISTS `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(171, 2, 491, 'returned', '2015-12-14 11:21:27'),
(169, 2, 489, 'pending', ''),
(170, 1, 490, 'returned', '2015-12-14 02:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=801 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'Programming'),
(3, 'Graphics Design'),
(2, 'Image Processing'),
(4, 'Architecture'),
(5, 'Operating System'),
(6, 'Networking'),
(7, 'References'),
(8, 'Encyclopedia');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `username`, `gender`, `address`, `roll`, `contact`, `type`, `year_level`, `password`) VALUES
(1, 'jahid', 'mahmud', 'jahidd26', 'male', 'latif hall', '12035426', '01677091339', 'Student', 'Fourth Year', '123456'),
(2, 'Masuma', 'Sultana', 'keya07', 'Female', 'Rokeya Hall', '12215407', '01685139426', 'Student', 'Fourth Year', '123456'),
(3, 'Aminul', 'Islam', 'aminul32', 'Male', 'Nawal Abdul Latif Hall', '12035432', '01739103913', 'Student', 'Fourth Year', '123456'),
(4, 'Mokhlesur', 'Rahman', 'mokhles08', 'Male', 'ziaur rahman hall', '12105408', '01516125641', 'Student', 'First Year', '12345678'),
(8, 'Rafiqul', 'Islam', 'rafiq04', 'Male', 'Vodra Moore', '12045404', '01689754534', 'Student', 'Third Year', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `borrowertype` varchar(50) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `borrowertype`) VALUES
(1, 'student'),
(2, 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`), ADD KEY `borrowerid` (`member_id`), ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_id` (`category_id`), ADD KEY `classid` (`category_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`), ADD KEY `borrowertype` (`borrowertype`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=492;
--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  MODIFY `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=801;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
