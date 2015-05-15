-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 15. Mai 2015 um 12:25
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `watchmaker`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `smart`
--

CREATE TABLE IF NOT EXISTS `smart` (
  `smart_ID` bigint(3) NOT NULL,
  `smart_name` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `smart_hersteller` varchar(20) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `smart`
--

INSERT INTO `smart` (`smart_ID`, `smart_name`, `smart_hersteller`) VALUES
(1, 'Moto360', 'Motorola'),
(2, 'LG G R', 'LG');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(10) NOT NULL,
  `user_firstname` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `user_lastname` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `user_name` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_password` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_mail` varchar(50) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_ID`, `user_firstname`, `user_lastname`, `user_name`, `user_password`, `user_mail`) VALUES
(1, 'Marcel', 'Finkbeiner', 'Finki', 'hallo', 'test@hallo.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `watch`
--

CREATE TABLE IF NOT EXISTS `watch` (
  `watch_ID` int(10) NOT NULL,
  `watch_name` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `watch_description` varchar(50) COLLATE latin1_german1_ci NOT NULL,
  `user_ID` int(11) NOT NULL,
  `smart_ID` bigint(3) NOT NULL,
  `watch_public` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `watch`
--

INSERT INTO `watch` (`watch_ID`, `watch_name`, `watch_description`, `user_ID`, `smart_ID`, `watch_public`) VALUES
(1, 'First Face', 'mein erstes Face', 1, 1, 1),
(2, 'test', 'test', 1, 2, 0),
(3, 'name', 'beschreibung', 1, 1, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `smart`
--
ALTER TABLE `smart`
  ADD PRIMARY KEY (`smart_ID`),
  ADD KEY `smart_ID` (`smart_ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `user_ID_2` (`user_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `user_ID_3` (`user_ID`);

--
-- Indizes für die Tabelle `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`watch_ID`),
  ADD UNIQUE KEY `watch_ID_3` (`watch_ID`),
  ADD KEY `watch_ID` (`watch_ID`),
  ADD KEY `watch_ID_2` (`watch_ID`),
  ADD KEY `watch_ID_4` (`watch_ID`),
  ADD KEY `watch_ID_5` (`watch_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `smart_ID` (`smart_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `smart`
--
ALTER TABLE `smart`
  MODIFY `smart_ID` bigint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `watch`
--
ALTER TABLE `watch`
  MODIFY `watch_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `watch`
--
ALTER TABLE `watch`
  ADD CONSTRAINT `watch_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `watch_ibfk_2` FOREIGN KEY (`smart_ID`) REFERENCES `smart` (`smart_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
