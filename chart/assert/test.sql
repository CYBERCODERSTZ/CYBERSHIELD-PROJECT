-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 11:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE IF NOT EXISTS `chat_message` (
  `chat_message_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`chat_message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 4, 'ðŸ˜ hih', '2019-07-09 20:35:35', 1),
(2, 3, 4, 'hi juma', '2019-07-09 20:36:48', 1),
(3, 3, 4, '', '2019-07-09 20:37:00', 1),
(4, 4, 5, 'hi james', '2019-07-09 20:41:12', 1),
(5, 4, 5, 'h wewe', '2019-07-09 20:41:51', 1),
(6, 6, 7, 'Hello', '2019-07-09 21:03:58', 0),
(7, 7, 6, 'hi eladðŸ˜‡ðŸ˜‡ðŸ˜‡', '2019-07-09 21:04:22', 0),
(8, 3, 7, 'Hi jumanne', '2019-07-09 21:07:19', 1),
(9, 6, 7, 'Hi juma', '2019-07-09 21:08:47', 0),
(10, 6, 7, 'Your a good  one', '2019-07-09 21:09:15', 0),
(11, 6, 7, 'Your a good  one', '2019-07-09 21:09:22', 0),
(12, 7, 6, 'oky dat', '2019-07-09 21:10:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(4, 'james', '$2y$10$/JKJ5dmgj6ANa.a3vABxUO.secbqfBeMBkjW9L/dr.GFYydmbvo3C'),
(5, 'wewe', '$2y$10$UsgwHUn46EosE/Ifs1qfX.TN3doh7W81dlUnM/4EyBYMvT21ikuve'),
(6, 'dada', '$2y$10$j49O.WARzZbmQrWQYga2/.wa2bQ5ETP.7DiRJNkDfwU.96MRiz8/6'),
(7, 'eladi george', '$2y$10$zRUMFCC5TyiB479nSXHuCON2Lh940fqnA1ecuAHume6GjDBwbKdGi');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `login_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL,
  PRIMARY KEY (`login_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2019-07-09 20:39:07', 'no'),
(2, 4, '2019-07-09 20:39:54', 'no'),
(3, 5, '2019-07-09 20:53:55', 'no'),
(4, 6, '2019-07-09 21:12:10', 'no'),
(5, 7, '2019-07-09 21:16:58', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE IF NOT EXISTS `myguests` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wewe`
--

CREATE TABLE IF NOT EXISTS `wewe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `student_reg` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
