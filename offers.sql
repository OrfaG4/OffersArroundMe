

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 15 Ιαν 2015 στις 23:48:03
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`) VALUES
(1, 2, 'This is a comment'),
(2, 2, 'This is another comment'),
(3, 2, 'Comment Comment Comment!!!!'),
(4, 3, 'comment in a row'),
(5, 3, 'this comment sucks'),
(6, 1, 'this is a comment coming from the testing proccess'),
(7, 0, 'this is a comment coming from the testing proccess'),
(8, 1, 'this is a comment coming from the testing proccess'),
(9, 3, 'third comment in a row'),
(10, 2, 'comment');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Άδειασμα δεδομένων του πίνακα `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `desc`, `store_id`, `lat`, `long`, `percent`, `user_id`) VALUES
(3, 'Public', 'Panisxiri karta grafikwn Ati Radeon R9 280X Vapor-X mono gia liges meres -20%', 1, 41.0819892, 23.5443227, 20, 2),
(4, 'Plaisio', 'Poikilia diaforwn diskwn se asinagwnistes prosfores ews 50%', 2, 41.087684, 23.540953, 50, 2),
(5, 'Plaisio', 'Karekles grafeiou se polla sxedia kai diafora xrwmata me ekptwsi 40%', 2, 41.087684, 23.540953, 40, 3),
(6, 'Kotsovolos', 'Me agores 3 vivliwn pernete allo 1 dwro', 4, 41.092712, 23.559458, 25, 3),
(8, 'Electronet', 'Epwnima Plintira se prosfora ews 30%', 5, 41.0829092, 23.5443837, 30, 2),
(10, 'MediaMarkt', 'Oles oi tileoraseis me 10%', 6, 41.095112, 23.55545, 10, 6),
(12, 'WelcomeStores', 'Videogames Used or New up to 80%!', 7, 41.084953, 23.534129, 80, 9),
(15, 'MediaMarkt', 'Psigeia me ekptwseis mexri 20%', 6, 41.0745236, 23.5514227, 20, 6);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `opinions`
--

CREATE TABLE IF NOT EXISTS `opinions` (
`id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Άδειασμα δεδομένων του πίνακα `opinions`
--

INSERT INTO `opinions` (`id`, `user_id`, `reason`, `comment`) VALUES
(1, 2, 'Late Delivery', 'The Shop1 delayed my delivery'),
(2, 2, 'Bad Attitude', 'The cashier was very rude');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Άδειασμα δεδομένων του πίνακα `stores`
--

INSERT INTO `stores` (`id`, `name`, `user_id`) VALUES
(1, 'Public', 0),
(2, 'Plaisio', 3),
(3, 'Multirama', 3),
(4, 'Kotsovolos', 0),
(5, 'Electronet', 2),
(6, 'MediaMarkt', 6),
(7, 'WelcomeStores', 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'admin', '1111', 'email@email.com', 'user'),
(2, 'dale', '1111', 'email@email.com', 'store'),
(3, 'plaisio', '1111', 'email@email.com', 'store'),
(4, 'billy', '1111', 'email@email.com', 'user'),
(5, 'sheba', '1111', 'email@email.com', 'user'),
(6, 'mediamarkt', '1111', 'email@email.com', 'store'),
(8, 'stavros', '1111', 'email@email.com', 'user'),
(9, 'welcomestores', '1111', 'email@email.com', 'store');

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
-- Ευρετήρια για πίνακα `opinions`
--
ALTER TABLE `opinions`
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
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT για πίνακα `discounts`
--
ALTER TABLE `discounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT για πίνακα `opinions`
--
ALTER TABLE `opinions`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `stores`
--
ALTER TABLE `stores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
