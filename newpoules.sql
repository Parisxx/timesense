-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 15 dec 2022 om 13:43
-- Serverversie: 5.7.26
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newpoules`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_1`
--

DROP TABLE IF EXISTS `match_1`;
CREATE TABLE IF NOT EXISTS `match_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_1`
--

INSERT INTO `match_1` (`id`, `country`, `goals`) VALUES
(1, 'Croatia', 1),
(2, 'Brazil', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_2`
--

DROP TABLE IF EXISTS `match_2`;
CREATE TABLE IF NOT EXISTS `match_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `country` (`country`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_2`
--

INSERT INTO `match_2` (`id`, `country`, `goals`) VALUES
(1, 'Netherlands', 0),
(2, 'Argentina', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_3`
--

DROP TABLE IF EXISTS `match_3`;
CREATE TABLE IF NOT EXISTS `match_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_3`
--

INSERT INTO `match_3` (`id`, `country`, `goals`) VALUES
(1, 'Morocco', 0),
(2, 'Portugal', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_4`
--

DROP TABLE IF EXISTS `match_4`;
CREATE TABLE IF NOT EXISTS `match_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_4`
--

INSERT INTO `match_4` (`id`, `country`, `goals`) VALUES
(1, 'England', 0),
(2, 'France', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_5`
--

DROP TABLE IF EXISTS `match_5`;
CREATE TABLE IF NOT EXISTS `match_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_5`
--

INSERT INTO `match_5` (`id`, `country`, `goals`) VALUES
(1, 'Argentina', 0),
(2, 'Croatia', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_6`
--

DROP TABLE IF EXISTS `match_6`;
CREATE TABLE IF NOT EXISTS `match_6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_6`
--

INSERT INTO `match_6` (`id`, `country`, `goals`) VALUES
(1, 'France', 0),
(2, 'Morocco', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_7`
--

DROP TABLE IF EXISTS `match_7`;
CREATE TABLE IF NOT EXISTS `match_7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_7`
--

INSERT INTO `match_7` (`id`, `country`, `goals`) VALUES
(1, 'Croatia', 0),
(2, 'Morocco', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match_8`
--

DROP TABLE IF EXISTS `match_8`;
CREATE TABLE IF NOT EXISTS `match_8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `goals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `match_8`
--

INSERT INTO `match_8` (`id`, `country`, `goals`) VALUES
(1, 'Argentina', 0),
(2, 'France', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
