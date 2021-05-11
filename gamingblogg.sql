-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 11 maj 2021 kl 14:34
-- Serverversion: 10.4.6-MariaDB
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `gamingblogg`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `anvandare`
--

CREATE TABLE `anvandare` (
  `anvnamn` varchar(20) NOT NULL,
  `epost` varchar(150) NOT NULL,
  `losenord` varchar(255) NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `anvandare`
--

INSERT INTO `anvandare` (`anvnamn`, `epost`, `losenord`, `status`) VALUES
('Eddie', 'ompah25@gmail.com', '$2y$10$nbYLhBHb2HSFA7Pea/ISJ.bzWZnb3XYnU9UDVYzw6uyGh8lE5dlSu', 2),
('eeddde', 'eddie123@gmail.com', '$2y$10$lkVMxXi66qKFT9cTRo8mlOFG.jXB36TREyC09JzseIQWpExIUUMXy', 1),
('elias', 'elias@gmail.com', '$2y$10$bnNJka57OT3UK2CGHD6AAO/I9K2MikYxrq3DEdWRXp91JGOhNNlDK', 1),
('gabbbbe', 'gabbe@gmail.com', '$2y$10$FpOKlBipF4iWshMCrobMX.cI7LaV7cUot.BE.JcWl79vtRye/oCce', 1),
('tjorven', 'tjorven@gmail.com', '$2y$10$NSMONqoxd7wI5/FmQcDC/ep4RHt8j7A6c/5VyMAZA0W7IiGmRjrqW', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `anvandare`
--
ALTER TABLE `anvandare`
  ADD PRIMARY KEY (`anvnamn`),
  ADD UNIQUE KEY `epost` (`epost`),
  ADD UNIQUE KEY `anvnamn` (`anvnamn`),
  ADD KEY `Lösenord` (`losenord`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
