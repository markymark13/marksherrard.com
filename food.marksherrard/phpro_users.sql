-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 02:08 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winterma_tnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpro_users`
--

CREATE TABLE IF NOT EXISTS `phpro_users` (
  `phpro_user_id` int(11) NOT NULL,
  `phpro_username` varchar(20) NOT NULL,
  `phpro_password` char(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpro_users`
--

INSERT INTO `phpro_users` (`phpro_user_id`, `phpro_username`, `phpro_password`) VALUES
(1, 'Mark', 'f1b5a91d4d6ad523f2610114591c007e75d15084'),
(2, 'testlast', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(3, 'mark1', 'f1b5a91d4d6ad523f2610114591c007e75d15084'),
(4, 'mark2', 'f1b5a91d4d6ad523f2610114591c007e75d15084'),
(5, 'david', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
(6, 'theonewiththehats', 'adfb8e25eb3643e62a1a75562a232478d1933ce2'),
(7, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(8, 'Trinity', 'c3e996ed9831809e4be989c797757db62e42a4c9'),
(9, 'test4', '911ddc3b8f9a13b5499b6bc4638a2b4f3f68bf23'),
(10, 'mark5', 'f1b5a91d4d6ad523f2610114591c007e75d15084'),
(11, 'mark9', 'f1b5a91d4d6ad523f2610114591c007e75d15084');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpro_users`
--
ALTER TABLE `phpro_users`
  ADD PRIMARY KEY (`phpro_user_id`), ADD UNIQUE KEY `phpro_username` (`phpro_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpro_users`
--
ALTER TABLE `phpro_users`
  MODIFY `phpro_user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
