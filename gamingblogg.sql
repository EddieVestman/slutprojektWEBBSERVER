-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 04 maj 2021 kl 14:36
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
('David', 'david@gmail.com', '$2y$10$tQmAR27veZwPnk5a4DDueO2QpbaZCiI0OeSClixnMVzrznlOU7W4G', 1),
('eddan', 'eddie@gmail.com', '$2y$10$9MbmhLBr4pK3W7gvmRGUje.5q9cokxkOUzeO9jReZHTORtbxzVKeq', 1),
('edddddie', 'gegg@gmail.com', '$2y$10$g57rkoHzTReYjrV05mz7suZQ7VyEe021D5GFznN1GDKXhUb0TmtrC', 1),
('Eddie', 'edve02001@utb.vaxjo.se', '$2y$10$LgzhwCfoPyp65kUr5XmXw.7ybn/WoriGw8ib.15cM2Z92vuEcen8S', 1),
('kungen', 'lolman@gmail.com', '$2y$10$k6ipUXd0TufE10a80l5OpOVi3y7wPQHZQmR5ogoQaWYGzrHJEV/jC', 1),
('lolman', 'lol@gmail.com', '$2y$10$qa2rkxq/3pvjjbiiuoZktuhgvvLZAz..w09GmYvBwVvEWruhGkSDi', 1),
('ompah', 'ompah25@gmail.com', '$2y$10$yTlGCaPssPym3il.LvIMV.tRS6YQePJbHerH1zyHsdTNOzVeBo9vy', 1);

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
