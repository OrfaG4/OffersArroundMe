-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2014 at 01:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offers`
--

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `store_id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `percent` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `desc`, `store_id`, `lat`, `long`, `percent`) VALUES
(3, 'Discounts up to 30 %', 'Discounts up to 30 % Discounts up to 30 % Discounts up to 30 % Discounts up to 30 % Discounts up to 30 % Discounts up to 30 %Discounts up to 30 %Discounts up to 30 %Discounts up to 30 %Discounts up to 30 %', 1, 41.0819892, 23.5443227, 30),
(4, 'Offers up to 90%', 'Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%Offers up to 90%', 2, 41.085865, 23.547482, 90),
(5, 'up to 50 percent off!!!', 'up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!up to 50 percent off!!!', 2, 41.087684, 23.540953, 50);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`) VALUES
(1, 'store1'),
(2, 'store1'),
(3, 'store3'),
(4, 'store4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'alex', '1111'),
(2, 'dale', '1111'),
(3, 'ashley', '1111'),
(4, 'billy', '1111'),
(5, 'sheba', '1111'),
(6, 'tabby', '1111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
