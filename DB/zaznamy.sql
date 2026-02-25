-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Stř 25. úno 2026, 19:48
-- Verze serveru: 5.7.24
-- Verze PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `formular`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `zaznamy`
--

CREATE TABLE `zaznamy` (
  `ID` int(11) NOT NULL,
  `Jmeno` text NOT NULL,
  `Prijmeni` text NOT NULL,
  `Koment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `zaznamy`
--

INSERT INTO `zaznamy` (`ID`, `Jmeno`, `Prijmeni`, `Koment`) VALUES
(8, 'David', 'Šticha', 'xyxyxyx'),
(9, 'David', 'Šticha', 'dadsa'),
(10, 'Bagr', 'Vopršálek', '8888');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `zaznamy`
--
ALTER TABLE `zaznamy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `zaznamy`
--
ALTER TABLE `zaznamy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
