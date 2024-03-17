-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 05:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybershield`
--

-- --------------------------------------------------------

--
-- Table structure for table `casereporting`
--

CREATE TABLE `casereporting` (
  `CaseID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `CaseTitle` varchar(255) NOT NULL,
  `Description` text,
  `ReportDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(23, 9, 10, 'Hellow', '2024-02-17 18:51:42', 0),
(24, 0, 10, 'hellow', '2024-02-24 14:11:26', 1),
(25, 10, 9, 'hellow', '2024-02-24 14:50:03', 0),
(26, 10, 9, '', '2024-02-24 14:50:07', 0),
(27, 10, 11, 'Hi JAMES\n', '2024-03-13 15:34:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `ID` int(11) NOT NULL,
  `Sponsor_ID` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message_time` varchar(800) NOT NULL,
  `message_program` varchar(800) NOT NULL,
  `Role` enum('Enable','Dis Enable') NOT NULL,
  `industrycategory` enum('education','ecommerce','entrepreneur','businessman','other') DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`ID`, `Sponsor_ID`, `name`, `email`, `address`, `mobile`, `message_time`, `message_program`, `Role`, `industrycategory`, `date`) VALUES
(1, 0, 'ZEPHANIA JAMES', 'zephaniandoshi@gmail.com', 'MWANZA', '0759770984', 'one mounth', 'Yes,', '', 'entrepreneur', '2024-01-11 17:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `EmailID` varchar(110) NOT NULL,
  `SenderID` varchar(110) DEFAULT NULL,
  `RecipientID` varchar(110) DEFAULT NULL,
  `Subject` varchar(255) NOT NULL,
  `Body` text,
  `SendDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `EmailID`, `SenderID`, `RecipientID`, `Subject`, `Body`, `SendDate`) VALUES
(3, 'dinahmdollo@gmail.com', 'CYBER/PS/2024/00001', 'cyberShieldTM@gmail.com', 'Email check', ' \r\n                      <p>This is My email</p> \r\n                    ', '2024-03-15 09:52:55'),
(4, 'dinahmdollo@gmail.com', 'CYBER/PS/2024/00001', 'cyberShieldTM@gmail.com', 'CURRICURUM  VITAE FOR JAMES', ' \r\n                      <p>Hello Im heare</p> \r\n                    ', '2024-03-15 10:37:38'),
(5, 'dinahmdollo@gmail.com', 'CYBER/PS/2024/00001', 'info@cyberShield.ac.tz', 'Trainner Comment', 'Ineed Maintainance', '2024-03-15 10:38:46'),
(7, 'cyberShieldTM@gmail.com', 'CYBER/FC/2024/00001', 'dinahmdollo@gmail.com', 'To denner', ' \r\n                      <p>Conferm</p> \r\n                    ', '2024-03-15 14:28:23'),
(8, 'cyberShieldTM@gmail.com', 'CYBER/FC/2024/00001', 'dinahmdollo@gmail.com', 'Sorry For that', ' \r\n                      <p>Weconfimed lete</p> \r\n                    ', '2024-03-15 15:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(9, 'ALLY', '$2y$10$TQUokSB7bdVZ1SuLQ0ZOWOUSciPinvOMyl0DYRqEYx5FElfwHWIKS'),
(10, 'JAMES', '$2y$10$KuryXnYJ.FKSzSD3Vh9U.uUbrv9i9n1RiAWuJkm2XgjitnRKT.k7C'),
(11, 'VARINA', '$2y$10$46qkVFRR3Hqb.lMoqfy7L.NHl.XLl7p36UuRj7hWj.rIXBvLRFoNi');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2019-07-09 20:39:07', 'no'),
(2, 4, '2019-07-09 20:39:54', 'no'),
(3, 5, '2019-07-09 20:53:55', 'no'),
(4, 6, '2019-07-09 21:12:10', 'no'),
(5, 7, '2019-07-09 21:16:58', 'no'),
(6, 8, '2024-02-12 20:12:14', 'no'),
(7, 8, '2024-02-12 20:44:32', 'no'),
(8, 8, '2024-02-14 19:21:42', 'no'),
(9, 8, '2024-02-17 12:55:26', 'no'),
(10, 9, '2024-02-17 19:18:50', 'no'),
(11, 8, '2024-02-17 18:37:35', 'no'),
(12, 8, '2024-02-17 18:44:19', 'no'),
(13, 10, '2024-02-17 19:18:48', 'no'),
(14, 10, '2024-02-24 14:50:18', 'no'),
(15, 9, '2024-02-24 14:52:51', 'no'),
(16, 10, '2024-02-26 07:13:29', 'no'),
(17, 10, '2024-02-28 17:19:20', 'no'),
(18, 11, '2024-03-13 15:35:01', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `ResourceID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(15) NOT NULL,
  `Type` varchar(400) NOT NULL,
  `Cat` varchar(32) NOT NULL,
  `FilePath` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `UploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ResourceID`, `name`, `size`, `Type`, `Cat`, `FilePath`, `Description`, `UploadDate`, `UserID`) VALUES
(8, 'phishing simulation module.pdf', '98239', 'Incident Protocol', '', 'forms/phishing simulation module.pdf', 'Delve into our disaster recovery plan, a robust strategy for overcoming unforeseen disruptions', '2024-01-18 12:33:17', 1),
(11, 'NIST CYBERSECURITY FRAME WORK.pdf', '871529', 'Security Compliance', 'International standards', 'forms/CISControls.pdf', 'NIST Cybersecurity Framework', '2024-01-18 13:34:29', 1),
(12, 'CISControls.pdf', '871529', 'Security Compliance', 'International standards', 'forms/CISControls.pdf', 'CIS Critical Security Controls', '2024-01-18 13:36:51', 1),
(13, 'ISO 27001 BUSINESS CONTINUITY CHECKLIST.pdf', '344341', 'Security Compliance', 'Checklist', 'forms/ISO 27001 BUSINESS CONTINUITY CHECKLIST.pdf', 'ISO 27001 BUSINESS CONTINUITY CHECKLIST                    ', '2024-01-18 14:03:24', 1),
(16, 'Understanding the NIST Phish.pdf', '460296', 'Technical Desk', 'Cutting edge', 'forms/SHANGWE E SAID.pdf', 'Document for Understanding the NIST Phish Scale_FINAL', '2024-01-18 14:26:46', 1),
(17, 'NIST.CSWP Paper.pdf', '775990', 'Technical Desk', 'Cutting edge', 'forms/NIST.CSWP Paper.pdf', 'Document for NIST.CSWP Paper', '2024-01-18 14:28:42', 1),
(18, 'CSAC Annual Report CISA.pdf', '226652', 'Technical Desk', 'Cutting edge', 'forms/CSAC Annual Report CISA.pdf', 'Document for CSAC Annual Report CISA', '2024-01-18 14:29:28', 1),
(19, 'resilience_of physical critical_infrastructure strategic plan.pdf', '534265', 'Technical Desk', 'Cutting edge', 'forms/resilience_of physical critical_infrastructure strategic plan.pdf', 'resilience_of physical critical_infrastructure strategic plan', '2024-01-18 14:30:44', 1),
(20, 'ISO 27002 INFORMATION SECURITY.pdf', '496928', 'Security Compliance', 'Checklist', 'forms/ISO 27002 INFORMATION SECURITY.pdf', 'ISO 27002 INFORMATION SECURITY GUIDELINES CHECKLIST TEMPLATE                                               ', '2024-01-18 14:32:36', 1),
(22, 'Uncertain wire transfers Document.pdf', '250340', 'Incident Guidance', '', 'forms/Uncertain wire transfers Document.pdf', 'Uncertain wire transfers', '2024-01-19 16:30:02', 7),
(23, 'find your lost phone..pdf', '377486', 'Incident Guidance', '', 'forms/find your lost phone..pdf', 'Tracking the lost phone/ end device', '2024-01-19 16:33:31', 7),
(24, 'What to do once your device has been compromised with DOS.pdf', '216846', 'Incident Guidance', '', 'forms/What to do once your device has been compromised with DOS.pdf', 'Device compromise/DOS/DDOS', '2024-01-19 16:35:06', 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `SponsorID` int(11) NOT NULL,
  `SponsorName` varchar(100) NOT NULL,
  `SponsorType` varchar(50) DEFAULT NULL,
  `ContactPerson` varchar(100) DEFAULT NULL,
  `ContactEmail` varchar(100) DEFAULT NULL,
  `ContactPhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `trainingID` int(11) NOT NULL,
  `ResourceID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `Username` varchar(40) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `thumbnail` varchar(200) DEFAULT 'assets/img/logo_2.jpg',
  `vender` varchar(100) DEFAULT NULL,
  `terms` varchar(12) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Salt` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Role` enum('admin','user','Training') NOT NULL DEFAULT 'user',
  `Age` int(11) DEFAULT NULL,
  `CurrentLocation` varchar(100) DEFAULT NULL,
  `IndustrialCategory` enum('education','ecommerce','entrepreneur','businessman','other') DEFAULT NULL,
  `user_status` enum('Enable','Disable') DEFAULT 'Disable',
  `code` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `roll_number`, `Username`, `Email`, `gender`, `mobile`, `thumbnail`, `vender`, `terms`, `PasswordHash`, `Salt`, `FullName`, `Role`, `Age`, `CurrentLocation`, `IndustrialCategory`, `user_status`, `code`) VALUES
(1, 'CYBER/FC/2024/00001', 'JAMES', 'zephaniandoshi@gmail.com', 'MALE', '0757660790', '', '', 'agre', '81dc9bdb52d04dc20036dbd8313ed055', '', 'ZEPHANIA JAMES', 'admin', 28, 'MWANZA', 'education', 'Enable', 'cba2241fb16f9711fd41d1d4d4688eb4'),
(7, 'CYBER/FC/2024/00002', NULL, 'davisdil@gmail.com', 'MALE', '0759770988', '', '', 'agree', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Davis Dil', 'user', 26, 'Dodoma', 'education', 'Enable', ''),
(34, 'CYBER/FC/2024/00003', NULL, 'zam@gmail.com', '', '', NULL, NULL, 'agree', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Zamu James', 'user', NULL, NULL, NULL, 'Disable', ''),
(35, 'CYBER/TR/2024/00001', 'ASHA', 'asha@gmail.com', 'FEMALE', '0759770989', 'assets/img/logo_2.jpg', 'VODACOM', 'agree', '81b073de9370ea873f548e31b8adc081', '', 'ASHA EMMANUEL', 'Training', 26, 'Dodoma', 'businessman', 'Enable', ''),
(38, 'CYBER/TR/2024/00002', 'ZAINABU', 'zainabu@gmail.com', 'FEMALE', '0757660799', 'assets/img/logo_2.jpg', 'Aitel', 'agree', '25d55ad283aa400af464c76d713c07ad', '', 'ZAINABU ALLI', 'Training', 25, 'Dodoma', 'entrepreneur', 'Enable', '87d321d28a262da2b49c3fe2b4f8d9ba'),
(39, 'CYBER/TR/2024/00003', NULL, 'salum@gmail.com', '', '', 'assets/img/logo_2.jpg', NULL, 'agree', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Salum Daniel', 'Training', NULL, NULL, NULL, 'Disable', ''),
(41, 'CYBER/TR/2024/00004', 'James', 'james@gmail.com', 'MALE', '0757660792', 'assets/img/20240207_112713.jpg', 'Zejando', 'agree', '202cb962ac59075b964b07152d234b70', '', 'ZEPHANIA JAMES', 'Training', 25, 'Morogoro ', 'education', 'Enable', ''),
(42, 'CYBER/PS/2024/00001', 'whizzy', 'dinahmdollo@gmail.com', 'FEMALE', '0759770989', '../assets/img/IMG-20240110-WA0007.jpg', 'Aitel', '', '202cb962ac59075b964b07152d234b70', '', 'DINAH MDOLLO', 'user', 26, 'Dodoma', 'education', 'Enable', '14367a61c555a8b9a9419857d5983a76');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `UserRoleID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `RoleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `VolunteerID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ExperitseArea` varchar(255) NOT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casereporting`
--
ALTER TABLE `casereporting`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`),
  ADD UNIQUE KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Sponsor_ID` (`Sponsor_ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RecipientID` (`RecipientID`),
  ADD KEY `SenderID` (`SenderID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`ResourceID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`SponsorID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingID`),
  ADD KEY `ResourceID` (`ResourceID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `roll_number` (`roll_number`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`UserRoleID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`VolunteerID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casereporting`
--
ALTER TABLE `casereporting`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ResourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `SponsorID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `trainingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `UserRoleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `VolunteerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casereporting`
--
ALTER TABLE `casereporting`
  ADD CONSTRAINT `casereporting_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`SenderID`) REFERENCES `user` (`roll_number`) ON DELETE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`SponsorID`) REFERENCES `donate` (`Sponsor_ID`) ON DELETE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`ResourceID`) REFERENCES `resources` (`ResourceID`);

--
-- Constraints for table `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);

--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `volunteers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
