-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jun 2017 om 09:02
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
-- Tabelstructuur voor tabel `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `answers`
--

INSERT INTO `answers` (`id`, `subject_id`, `question_id`, `student_id`, `answer`, `date`) VALUES
(1, 1, 3, 99033883, 'Ik vond het een geweldig filmpje.', '03-12-17'),
(2, 1, 4, 99033883, 'Ik vond het een geweldig plaatje.', '03-12-17'),
(3, 1, 5, 99033883, '', '03-12-17');

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
(5, 'Economie-opdracht.csv', '12 kb', '30-05-2017', b'0'),
(6, 'SampleCSVFile_2kb.csv', '1.07', '16-06-2017', b'1'),
(7, 'Samp2kb.csv', '1.15', '16-06-2017', b'1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question`) VALUES
(3, 1, 'Wat is er niet netjes aan het filmp'),
(4, 1, 'Wat is er niet netjes aan het plaatje?'),
(8, 1, 'Bent u een jongen of een meisje?'),
(6, 3, 'Leg uit wat jij doet aan vitaliteit.'),
(7, 3, 'Welke dag is het morgen.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `students`
--

CREATE TABLE `students` (
  `name` varchar(250) NOT NULL,
  `ov_number` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `students`
--

INSERT INTO `students` (`name`, `ov_number`) VALUES
('Fenno Sebrechts ', 99033823),
('Eddy de Lange', 99033883),
('Furkan Dogan', 99231832),
('Vincent Schaddelee', 12345678);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `subtopic` varchar(250) NOT NULL,
  `display` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `subtopic`, `display`) VALUES
(1, 'dummy', 'Politics', '0'),
(2, 'beurs', 'Economie', '0'),
(3, 'vitaal burgerschap', 'Burgschap', '1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subject_done`
--

CREATE TABLE `subject_done` (
  `id` int(11) NOT NULL,
  `student_id` varchar(259) NOT NULL,
  `subject_id` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `subject_done`
--

INSERT INTO `subject_done` (`id`, `student_id`, `subject_id`, `done`) VALUES
(1, '99033883', '1', 'No'),
(2, '99033883', '2', 'Yes');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ov_number`);

--
-- Indexen voor tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `subject_done`
--
ALTER TABLE `subject_done`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `imports`
--
ALTER TABLE `imports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `students`
--
ALTER TABLE `students`
  MODIFY `ov_number` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99231833;
--
-- AUTO_INCREMENT voor een tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `subject_done`
--
ALTER TABLE `subject_done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
