-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 07:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(20) NOT NULL,
  `catdes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`, `catdes`) VALUES
(1, 'Sports', 'Sports news'),
(2, 'International', 'International News'),
(3, 'sdfsdf', 'sdfsdf'),
(4, 'sdfsdf', 'sdfsdf'),
(5, 'tteegggeg', 'wgwgwhwhhwh'),
(6, 'tteegggeg', 'wgwgwhwhhwh'),
(7, 'tteegggeg', 'wgwgwhwhhwh'),
(8, 'tteegggeg', 'wgwgwhwhhwh'),
(9, 'rrerereteetete', 'ytredsdjjmn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` varchar(32) NOT NULL,
  `staff_name_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `headline` varchar(128) NOT NULL,
  `news` text NOT NULL,
  `Is_Active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newsdate`, `staff_name_id`, `category_id`, `subcat_id`, `headline`, `news`, `Is_Active`) VALUES
(1, '2019-12-04', 1, 6, 1, 'dreydrystg', 'hhdhhgg', 1),
(2, '2019-11-04', 2, 3, 2, 'dreydrystg', 'etetterete', 0),
(3, '2019-12-03', 2, 2, 3, 'weqwe', 'ytyyeyeyrf', 0),
(4, '2019-12-04', 1, 1, 1, 'Asia Become Most Populated Area', 'The quick brown fox jump over the lazy dog. The quick brown fox jump over the lazy dog. The quick brown fox jump over the lazy dog. The quick brown fox jump over the lazy dog. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orginfo`
--

CREATE TABLE IF NOT EXISTS `orginfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `manager` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orginfo`
--

INSERT INTO `orginfo` (`id`, `name`, `address`, `website`, `email`, `manager`, `phone`) VALUES
(1, 'abcd234', 'tryuu234', 'rerer234', 'abcd@gmail.com234', 'ftghy234', '01745234'),
(5, 'yeyy', 'yeyyeey', 'yeyrytrtt', 'ryrurtyuru@gdgd', 'yyrytrtyry', 'rtyrtyrtyrtyrty');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(90) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `staffid` varchar(25) NOT NULL,
  `staffpass` varchar(12) NOT NULL,
  `staffemail` varchar(25) NOT NULL,
  `staffaddress` varchar(90) NOT NULL,
  `staffphone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffname`, `designation`, `staffid`, `staffpass`, `staffemail`, `staffaddress`, `staffphone`) VALUES
(1, 'Rakibul Islam rty', 'Senior Staff', 'C1023', '1234', 'rakibul@gmail.com', 'Dhaka', '0170525252'),
(2, 'Shariful Islam', 'Junior Staff', 'C2536', '4321', 'shariful@gmail.com', 'Barishal', '018252525'),
(8, 'john cina', 'Roman reigns', 'C12345', '12345', 'J@cina.com', 'out of galaxy', '9875654321');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcatname` varchar(20) NOT NULL,
  `subcatdes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`id`, `subcatname`, `subcatdes`) VALUES
(1, 'Football', 'Football new'),
(2, 'Cricket', 'Cricket sports'),
(3, 'Asia', 'International');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
