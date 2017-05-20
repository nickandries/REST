-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mei 2017 om 16:11
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monkeybusiness`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `documenten`
--

CREATE TABLE `documenten` (
  `documentNummer` int(11) NOT NULL,
  `type` text NOT NULL,
  `aanmaakDatum` datetime NOT NULL,
  `vervalDatum` datetime NOT NULL,
  `klantNummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `documenten`
--

INSERT INTO `documenten` (`documentNummer`, `type`, `aanmaakDatum`, `vervalDatum`, `klantNummer`) VALUES
(1, 'pdf', '2017-05-20 00:00:00', '2017-05-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `beginDatum` datetime NOT NULL,
  `eindDatum` datetime NOT NULL,
  `klantId` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenement`
--

INSERT INTO `evenement` (`id`, `naam`, `beginDatum`, `eindDatum`, `klantId`, `prijs`) VALUES
(1, 'Dwars door hasselt', '2017-05-20 00:00:00', '2017-05-20 00:00:00', 1, 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klantNummer` int(11) NOT NULL,
  `klantNaam` text NOT NULL,
  `klantVoornaam` text NOT NULL,
  `klantPostcode` int(11) NOT NULL,
  `klantGemeente` text NOT NULL,
  `klantStraat` text NOT NULL,
  `klantHuisnummer` int(11) NOT NULL,
  `klantTelefoonnummer` int(11) NOT NULL,
  `klantGsmNummer` int(11) NOT NULL,
  `klantEmailadres` text NOT NULL,
  `getekendeOfferte` text NOT NULL,
  `getekendContract` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klantNummer`, `klantNaam`, `klantVoornaam`, `klantPostcode`, `klantGemeente`, `klantStraat`, `klantHuisnummer`, `klantTelefoonnummer`, `klantGsmNummer`, `klantEmailadres`, `getekendeOfferte`, `getekendContract`) VALUES
(1, 'Andries', 'Nick', 3690, 'Zutendaal', 'Sint-Rochusstraat', 9, 89614920, 472889019, 'nick.andries@student.pxl.be', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leverancier`
--

CREATE TABLE `leverancier` (
  `nummer` int(11) NOT NULL,
  `naam` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `gemeente` text NOT NULL,
  `straat` text NOT NULL,
  `huisnr` int(11) NOT NULL,
  `telefoonnr` int(11) NOT NULL,
  `gsmnr` int(11) NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leverancier`
--

INSERT INTO `leverancier` (`nummer`, `naam`, `postcode`, `gemeente`, `straat`, `huisnr`, `telefoonnr`, `gsmnr`, `email`, `type`) VALUES
(1, 'LeverancierChris', 3369, 'Tongerloo', 'Tongersestraat', 57, 0, 472735669, 'chris@leverancier.be', 'post');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personeel`
--

CREATE TABLE `personeel` (
  `nummer` int(11) NOT NULL,
  `naam` text NOT NULL,
  `voornaam` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `gemeente` text NOT NULL,
  `straat` text NOT NULL,
  `huisnr` int(11) NOT NULL,
  `telefoonnr` int(11) NOT NULL,
  `gsmnr` int(11) NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `personeel`
--

INSERT INTO `personeel` (`nummer`, `naam`, `voornaam`, `postcode`, `gemeente`, `straat`, `huisnr`, `telefoonnr`, `gsmnr`, `email`, `type`) VALUES
(1, 'Mars', 'Bruno', 2299, 'Ohio', 'Ohiostraat', 12, 12345678, 1234567890, 'bruno.mars@personeel.be', 'Manager');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project`
--

CREATE TABLE `project` (
  `projectNummer` int(11) NOT NULL,
  `projectNaam` text NOT NULL,
  `beginDatum` datetime NOT NULL,
  `eindDatum` datetime NOT NULL,
  `klantNummer` int(11) NOT NULL,
  `bezetting` text NOT NULL,
  `kost` int(11) NOT NULL,
  `materialen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `project`
--

INSERT INTO `project` (`projectNummer`, `projectNaam`, `beginDatum`, `eindDatum`, `klantNummer`, `bezetting`, `kost`, `materialen`) VALUES
(1, 'Save_Nick', '2017-05-20 00:00:00', '2017-05-23 00:00:00', 1, 'bezetting', 300, 'Laptop en vriendschap');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `documenten`
--
ALTER TABLE `documenten`
  ADD PRIMARY KEY (`documentNummer`),
  ADD KEY `klantNummer` (`klantNummer`),
  ADD KEY `klantNummer_2` (`klantNummer`);

--
-- Indexen voor tabel `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klantId` (`klantId`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantNummer`);

--
-- Indexen voor tabel `leverancier`
--
ALTER TABLE `leverancier`
  ADD PRIMARY KEY (`nummer`);

--
-- Indexen voor tabel `personeel`
--
ALTER TABLE `personeel`
  ADD PRIMARY KEY (`nummer`);

--
-- Indexen voor tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectNummer`),
  ADD KEY `klantNummer` (`klantNummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `documenten`
--
ALTER TABLE `documenten`
  MODIFY `documentNummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klantNummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `leverancier`
--
ALTER TABLE `leverancier`
  MODIFY `nummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `personeel`
--
ALTER TABLE `personeel`
  MODIFY `nummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `project`
--
ALTER TABLE `project`
  MODIFY `projectNummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `documenten`
--
ALTER TABLE `documenten`
  ADD CONSTRAINT `documentklant` FOREIGN KEY (`klantNummer`) REFERENCES `klant` (`klantNummer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `klant` FOREIGN KEY (`klantId`) REFERENCES `klant` (`klantNummer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `klantNummer` FOREIGN KEY (`klantNummer`) REFERENCES `klant` (`klantNummer`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
