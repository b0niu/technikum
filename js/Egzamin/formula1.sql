-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Sty 2018, 08:31
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `formula1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kierowcy`
--

CREATE TABLE IF NOT EXISTS `kierowcy` (
  `kierowca` varchar(13) DEFAULT NULL,
  `team` varchar(2) DEFAULT NULL,
  `pkt` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kierowcy`
--

INSERT INTO `kierowcy` (`kierowca`, `team`, `pkt`) VALUES
('L.Hamilton ', 'MS', 363),
('S.Vettel ', 'FR', 317),
('V.Bottas ', 'MS', 305),
('K.Raikkonen ', 'FR', 205),
('D.Ricciardo ', 'RB', 200),
('M.Verstappen ', 'RB', 168),
('S.Perez ', 'FI', 100),
('E.Ocon ', 'FI', 87),
('C.Sainz Jr ', 'RT', 54),
('N.Hulkenberg ', 'RT', 43),
('F.Massa ', 'WS', 43),
('L.Stroll ', 'WS', 40),
('R.Grosjean ', 'HS', 28),
('K.Magnussen ', 'HS', 19),
('F.Alonso ', 'MN', 17),
('S.Vandoorne ', 'MN', 13),
('J.Palmer ', 'RT', 8),
('P.Werhlein ', 'SR', 5),
('D.Kwiat ', 'TR', 5),
('M.Ericsson ', 'SR', 0),
('P.Gasly ', 'TR', 0),
('A.Giovinazzi ', 'SR', 0),
('B.Hartley ', 'TR', 0),
('J.Button ', 'MN', 0),
('P. di Resta', 'WS', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zespoly`
--

CREATE TABLE IF NOT EXISTS `zespoly` (
  `id` varchar(2) DEFAULT NULL,
  `team` varchar(12) DEFAULT NULL,
  `pkt` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zespoly`
--

INSERT INTO `zespoly` (`id`, `team`, `pkt`) VALUES
('MS', 'Mercedes ', 668),
('FR', 'Ferrari ', 522),
('RB', 'Red Bull ', 368),
('FI', 'Force India ', 187),
('WS', 'Williams ', 83),
('RT', 'Renault ', 57),
('TR', 'Toro Rosso ', 53),
('HS', 'Haas ', 47),
('MN', 'McLaren ', 30),
('SR', 'Sauber ', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
