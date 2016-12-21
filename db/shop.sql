-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2014 at 04:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_stda`
--

CREATE TABLE IF NOT EXISTS `data_stda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adr` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `cartlist` varchar(200) NOT NULL DEFAULT 'none',
  `jt` int(11) NOT NULL,
  `checked` varchar(200) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `data_stda`
--

INSERT INTO `data_stda` (`id`, `user`, `pass`, `email`, `adr`, `phone`, `state`, `image`, `cartlist`, `jt`, `checked`) VALUES
(8, 'Ami', '47bce5c74f589f4867dbd57e9ca9f808', 'sdfkjd', 'sfd', 'sdfd', 0, 'pro.jpg', 'none', 0, '2'),
(9, 'Tumi', '9990775155c3518a0d7917f7780b24aa', 'sfj', 'sdfsd', 'sfds', 1, '10150116_10203523018056019_1784587371_a.png', 'none', 0, 'no'),
(10, '@admin', '9ce7d8135916f3d4dcc638c7b8279419', 'shafiqrobin9@gmail.com', 'dhaka', '0179999999', 1, 'image.jpg', 'none', 0, 'no'),
(11, 'Shafiq', '202cb962ac59075b964b07152d234b70', 'someone@gmail.com', 'dhaka', '0175', 1, 'blank.jpg', '2,1,2', 0, '2,1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(100) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cid`, `nam`, `mail`, `com`) VALUES
(4, 'about', 'shafiqbucc@gmail.com', 'Nice one'),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mes` text,
  `fr` varchar(100) NOT NULL,
  `tom` varchar(100) NOT NULL,
  `sent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pquan` varchar(50) NOT NULL,
  `pdes` text NOT NULL,
  `pimg` varchar(200) NOT NULL DEFAULT 'blank.jpg',
  `vote` int(11) NOT NULL,
  `person` int(11) NOT NULL,
  `rate` double NOT NULL,
  `raters` longtext NOT NULL,
  `waitlist` longtext NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
