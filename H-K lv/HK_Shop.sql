-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 17. Mai 2018 um 15:42
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `HK_Shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `adminEmail` varchar(60) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Allerei`
--

CREATE TABLE `Allerei` (
  `aId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Deko`
--

CREATE TABLE `Deko` (
  `dId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `diskont`
--

CREATE TABLE `drogerie` (
  `drId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Haushalt`
--

CREATE TABLE `Haushalt` (
  `hId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kleidung`
--

CREATE TABLE `Kleidung` (
  `kId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Taschen`
--

CREATE TABLE `Taschen` (
  `tId` int(11) NOT NULL,
  `hName` varchar(130) NOT NULL,
  `beschreibung` varchar(855) NOT NULL,
  `Foto` varchar(555) NOT NULL,
  `alterPreis` int(20) NOT NULL,
  `neuerPreis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indizes für die Tabelle `Allerei`
--
ALTER TABLE `Allerei`
  ADD PRIMARY KEY (`aId`);

--
-- Indizes für die Tabelle `Deko`
--
ALTER TABLE `Deko`
  ADD PRIMARY KEY (`dId`);

--
-- Indizes für die Tabelle `diskont`
--
ALTER TABLE `drogerie`
  ADD PRIMARY KEY (`drId`);

--
-- Indizes für die Tabelle `Haushalt`
--
ALTER TABLE `Haushalt`
  ADD PRIMARY KEY (`hId`);

--
-- Indizes für die Tabelle `Kleidung`
--
ALTER TABLE `Kleidung`
  ADD PRIMARY KEY (`kId`);


--
-- Indizes für die Tabelle `Taschen`
--
ALTER TABLE `Taschen`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Allerei`
--
ALTER TABLE `Allerei`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Deko`
--
ALTER TABLE `Deko`
  MODIFY `dId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `diskont`
--
ALTER TABLE `drogerie`
  MODIFY `drId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Haushalt`
--
ALTER TABLE `Haushalt`
  MODIFY `hId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `Kleidung`
--
ALTER TABLE `Kleidung`
  MODIFY `kId` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT für Tabelle `Taschen`
--
ALTER TABLE `Taschen`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
