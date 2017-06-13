-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 jun 2017 om 06:57
-- Serverversie: 5.7.14
-- PHP-versie: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `imports`
--

CREATE TABLE `imports` (
  `id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `file_size` varchar(250) NOT NULL,
  `file_date` varchar(250) NOT NULL,
  `file_active` bit(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `imports`
--

INSERT INTO `imports` (`id`, `filename`, `file_size`, `file_date`, `file_active`) VALUES
(1, 'dummy.csv', '556 kb', '25-05-2017', b'1'),
(5, 'dummy2.csv', '12 kb', '30-05-2017', b'1'),
(3, 'dummy3.csv', '78 kb', '25-06-2017', b'0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `imports`
--
ALTER TABLE `imports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
