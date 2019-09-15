-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 09:09 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE IF NOT EXISTS `login_detail` (
`login_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL COMMENT 'foreign_key_user',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`login_id`, `u_id`, `last_login`) VALUES
(1, 1, '2017-10-13 16:01:25'),
(2, 12, '2017-10-13 16:01:42'),
(3, 1, '2017-10-13 16:01:50'),
(4, 12, '2017-10-13 16:03:19'),
(7, 1, '2017-10-13 16:05:07'),
(10, 1, '2017-10-13 16:05:43'),
(12, 1, '2017-10-13 16:06:50'),
(16, 1, '2017-10-13 16:08:13'),
(17, 1, '2017-10-13 17:21:18'),
(18, 1, '2017-10-13 17:25:06'),
(19, 1, '2017-10-13 17:36:20'),
(20, 1, '2017-10-14 09:49:29'),
(21, 1, '2017-10-15 04:32:25'),
(22, 1, '2017-10-15 13:11:36'),
(23, 1, '2017-10-15 13:35:52'),
(24, 12, '2017-10-15 13:37:37'),
(25, 12, '2017-10-15 13:39:12'),
(26, 23, '2017-10-15 13:41:53'),
(27, 1, '2017-10-16 13:13:08'),
(28, 24, '2017-10-16 13:22:00'),
(29, 1, '2017-10-16 17:24:34'),
(30, 1, '2017-10-17 09:30:21'),
(31, 1, '2017-10-17 09:31:29'),
(32, 1, '2017-10-23 06:23:04'),
(33, 1, '2017-11-04 06:11:21'),
(34, 1, '2017-11-19 07:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `type` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `desc`, `type`, `status`, `addedon`) VALUES
(1, 'vikas', 'vikas', 'hey this is vikas sharma', 'Super Admin', 0, '2017-10-15 04:32:48'),
(2, 'aakash', 'aakash', 'full name is aakash bhardwaj', 'Employee', 0, '2017-10-13 09:45:19'),
(12, 'Anoop', '12345', 'Hii my name is anoop singh', 'Student', 0, '2017-10-13 11:26:23'),
(23, 'sonu', '123', 'this is sonu sharma', 'Student', 0, '2017-11-19 08:00:27'),
(24, 'sunny', 'saini', 'helooo everyone', 'Retailer', 0, '2017-10-15 13:39:56'),
(25, 'jyotin', 'jyitb', 'heyyy', 'Admin', 0, '2017-10-15 13:40:20'),
(28, 'aman', '8520', 'i am tyagi ji', 'Student', 0, '2017-11-04 06:12:12'),
(29, 'sachin', 'gupta', 'HELLOO GUYZZZ', 'Student', 0, '2017-10-23 06:23:31'),
(30, 'Krishna', 'singh', 'This is Krishna orf Anoop Singh', 'Admin', 0, '2017-11-19 08:03:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
 ADD PRIMARY KEY (`login_id`), ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_detail`
--
ALTER TABLE `login_detail`
ADD CONSTRAINT `user_logindetail_fk` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
