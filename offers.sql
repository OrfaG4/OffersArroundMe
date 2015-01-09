-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 09 Ιαν 2015 στις 16:06:23
-- Έκδοση διακομιστή: 5.6.20
-- Έκδοση PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `offers`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`) VALUES
(1, 2, 'This is a comment'),
(2, 2, 'This is another comment'),
(3, 2, 'Comment Comment Comment!!!!'),
(4, 3, 'comment in a row'),
(5, 2360, 'test Comment from testing process'),
(6, 2360, 'test Comment from testing process'),
(7, 2360, 'test Comment from testing process'),
(8, 2360, 'test Comment from testing process'),
(9, 2360, 'test Comment from testing process'),
(10, 0, 'this is a comment coming from the testing proccess'),
(11, 2360, 'test Comment from testing process'),
(12, 2360, 'test Comment from testing process'),
(13, 2360, 'test Comment from testing process'),
(14, 2360, 'test Comment from testing process'),
(15, 2360, 'test Comment from testing process'),
(16, 2360, 'test Comment from testing process'),
(17, 2360, 'test Comment from testing process'),
(18, 2360, 'test Comment from testing process'),
(19, 2360, 'test Comment from testing process'),
(20, 2360, 'test Comment from testing process'),
(21, 2360, 'test Comment from testing process'),
(22, 2360, 'test Comment from testing process'),
(23, 2360, 'test Comment from testing process'),
(24, 2360, 'test Comment from testing process'),
(25, 2360, 'test Comment from testing process'),
(26, 2360, 'test Comment from testing process'),
(27, 2360, 'test Comment from testing process'),
(28, 2360, 'test Comment from testing process'),
(29, 2360, 'test Comment from testing process'),
(30, 2360, 'test Comment from testing process'),
(31, 2360, 'test Comment from testing process'),
(32, 2360, 'test Comment from testing process'),
(33, 2360, 'test Comment from testing process'),
(34, 0, 'this is a comment coming from the testing proccess'),
(35, 2360, 'test Comment from testing process'),
(36, 2360, 'test Comment from testing process'),
(37, 2360, 'test Comment from testing process'),
(38, 2360, 'test Comment from testing process'),
(39, 2360, 'test Comment from testing process'),
(40, 2360, 'test Comment from testing process'),
(41, 2360, 'test Comment from testing process'),
(42, 2360, 'test Comment from testing process'),
(43, 2360, 'test Comment from testing process'),
(44, 2360, 'test Comment from testing process'),
(45, 2360, 'test Comment from testing process'),
(46, 2360, 'test Comment from testing process'),
(47, 2360, 'test Comment from testing process'),
(48, 2360, 'test Comment from testing process'),
(49, 2360, 'test Comment from testing process'),
(50, 2360, 'test Comment from testing process'),
(51, 2360, 'test Comment from testing process'),
(52, 2360, 'test Comment from testing process'),
(53, 2360, 'test Comment from testing process'),
(54, 2360, 'test Comment from testing process'),
(55, 2360, 'test Comment from testing process'),
(56, 2360, 'test Comment from testing process'),
(57, 2360, 'test Comment from testing process'),
(58, 2360, 'test Comment from testing process'),
(59, 2360, 'test Comment from testing process'),
(60, 2360, 'test Comment from testing process'),
(61, 2360, 'test Comment from testing process'),
(62, 2360, 'test Comment from testing process'),
(63, 1, 'this is a comment coming from the testing proccess'),
(64, 2, 'hi');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `store_id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `percent` double NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Άδειασμα δεδομένων του πίνακα `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `desc`, `store_id`, `lat`, `long`, `percent`, `user_id`) VALUES
(3, 'Discounts up to 30 percent', 'All tablets and minipads up to 30%', 1, 41.0819892, 23.5443227, 30, 2),
(4, 'Offers up to 10%', 'All electrical devices up to 10%', 2, 41.085865, 23.547482, 10, 2),
(5, 'up to 50 percent off!!!', 'Playstation 3 up to 50%', 2, 41.087684, 23.540953, 50, 3),
(6, 'Offer 5', 'Pitsos Miele Boss 20%', 5, 41.092712, 23.559458, 20, 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Άδειασμα δεδομένων του πίνακα `stores`
--

INSERT INTO `stores` (`id`, `name`, `user_id`) VALUES
(1, 'store1', 0),
(2, 'store1', 0),
(3, 'store3', 0),
(4, 'store4', 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'alex', '1111', 'email@email.com', 'user'),
(2, 'Kotsovolos', '1111', 'email@email.com', 'store'),
(3, 'Plaisio', '1111', 'email@email.com', 'store'),
(4, 'billy', '1111', 'email@email.com', 'user'),
(5, 'sheba', '1111', 'email@email.com', 'user'),
(6, 'Public', '1111', 'email@email.com', 'store'),
(8, 'stavros', '1111', 'email@email.com', 'user'),
(9, 'testName', '1111', 'test@email.com', 'user'),
(10, 'testName', '1111', 'test@email.com', 'user');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `discounts`
--
ALTER TABLE `discounts`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `stores`
--
ALTER TABLE `stores`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT για πίνακα `discounts`
--
ALTER TABLE `discounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT για πίνακα `stores`
--
ALTER TABLE `stores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
