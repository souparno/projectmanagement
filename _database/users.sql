-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 11:53 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nisbetao_clubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `active` varchar(3) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `email`, `first_name`, `last_name`, `active`, `created`, `modified`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@admin.com', 'Admin', NULL, '0', '2013-04-07 21:26:49', '2014-07-17 11:39:12'),
(11, 2, 'sbsc@gmail.com', 'e0688d13958a19e087e123148555e4b4', 'sbsc@gmail.com', 'SBSC', NULL, '1', '2014-07-23 02:45:39', '2014-07-23 02:47:27'),
(12, 4, 'usersbsc@gmail.com', '7a6a74cbe87bc60030a4bd041dd47b78', 'usersbsc@gmail.com', 'userofsbscclub', NULL, '1', '2014-07-23 03:13:22', '2014-07-23 03:13:38'),
(13, 2, 'sports@gmail.com', 'ae5e3ce40e0404a45ecacaaf05e5f735', 'sports@gmail.com', 'Sports', NULL, '1', '2014-07-23 05:32:38', '2014-07-23 05:32:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
