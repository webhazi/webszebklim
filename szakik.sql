-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 28. 20:33
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szakik`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `helység`
--

CREATE TABLE `helység` (
  `ID` int(11) NOT NULL,
  `Hely` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `helység`
--

INSERT INTO `helység` (`ID`, `Hely`) VALUES
(1, 'Budapest'),
(2, 'Pest ');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `mester`
--

CREATE TABLE `mester` (
  `ID` int(11) NOT NULL,
  `Szak` varchar(40) NOT NULL,
  `Név` varchar(30) NOT NULL,
  `Telefon` int(12) NOT NULL,
  `HelységID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `mester`
--

INSERT INTO `mester` (`ID`, `Szak`, `Név`, `Telefon`, `HelységID`) VALUES
(1, 'Ácsmester', 'Ács József', 61112345, 1),
(2, 'Ácsmester', 'Ács Gábor', 4312333, 2),
(3, 'Asztalos', 'Fa József', 61112345, 1),
(4, 'Asztalos', 'Fa Tivadar', 4312333, 2),
(5, 'Autófényező', 'Fes Lajos', 61112345, 1),
(6, 'Autófényező', 'Fes Feri', 4312333, 2),
(7, 'Autókaroszéria lakatos', 'Vas Peti', 61112345, 1),
(8, 'Autókaroszéria lakatos', 'Vas Roland', 4312333, 2),
(9, 'Autószerelő', 'Kerék gyula', 61112345, 1),
(10, 'Autószerelő', 'Kerék Antal', 4312333, 2),
(11, 'Betonozó', 'Beton Lajos', 61112345, 1),
(12, 'Betonozó', 'Kemény Dénes', 4312333, 2),
(13, 'Biztonsági szakember', 'Szemes Imre', 61112345, 1),
(14, 'Biztonsági szakember', 'Figyelő János', 4312333, 2),
(15, 'Bútorasztalos', 'Lakk Péter', 61112345, 1),
(16, 'Bútorasztalos', 'Szék Ferenc', 4312333, 2),
(17, 'Ékszerész', 'Gyémánt Karika', 61112345, 1),
(18, 'Ékszerész', 'Gyűrű Feri', 4312333, 2),
(19, 'Gipszkartonos', 'Gipsz Jakab', 61112345, 1),
(20, 'Gipszkartonos', 'Karton Feri', 4312333, 2),
(21, 'Gumiszerelő', 'Szelep Imre', 61112345, 1),
(22, 'Gumiszerelő', 'Tömlő Lajos', 4312333, 2),
(23, 'Homlokzatszigetelő', 'Homlok Huba', 61112345, 1),
(24, 'Homlokzatszigetelő', 'Szigetelő Szabolcs', 4312333, 2),
(25, 'Kárpitos', 'Anyag Zoltán', 61112345, 1),
(26, 'Kárpitos', 'Szövet Gabi', 4312333, 2),
(27, 'Kéményseprő', 'Fekete Péter', 61112345, 1),
(28, 'Kéményseprő', 'Kormos Karcsi', 4312333, 2),
(29, 'Kerékpárszerelő', 'Bicaj Béla', 61112345, 1),
(30, 'Kerékpárszerelő', 'Küllő Sándor', 4312333, 2),
(31, 'Kertész', 'Fű Sándor', 61112345, 1),
(32, 'Kertész', 'Gaz Zoltán', 4312333, 2),
(33, 'Kőműves', 'Tégla Tibor', 4312333, 1),
(34, 'Kőműves', 'Falazó Feri', 343593, 2),
(35, 'Könyvkötő', 'Olvas Orsolya', 326324, 1),
(36, 'Könyvkötő', 'Olvasó Sándor', 3133213, 2),
(37, 'Központifűtés-szerelő', 'Radiátor Róbert', 3123121, 1),
(38, 'Központifűtés-szerelő', 'Csőves Csaba', 321143434, 2),
(39, 'Lakatos', 'Vas Csaba', 2332121, 1),
(40, 'Lakatos', 'Hegesztő Lajos', 21321310, 2),
(41, 'Légkondicionáló-szerelő', 'Hideg Hugó', 2124324, 1),
(42, 'Légkondicionáló-szerelő', 'Meleg Csaba', 324255, 2),
(43, 'Lift karbantartó', 'Lépcső Lali', 343254, 1),
(44, 'Lift karbantartó', 'Lift Lajos', 2321433, 2),
(45, 'Mindenes', 'Lomis Lalika', 213121, 1),
(46, 'Mindenes', 'Seprűs Eszter', 33242, 2),
(47, 'Szakács', 'Lecsó László', 231321, 1),
(48, 'Szakács', 'Séf Kázmér', 21133, 2),
(49, 'Szobafestő', 'Festék Imre', 2121321, 1),
(50, 'Szobafestő', 'Lakk Gusztáv', 2111212, 2),
(51, 'Takarító', 'Seprű Irma', 12121, 1),
(52, 'Takarító', 'Felmosó Feri', 210, 2),
(53, 'Tetőfedő', 'Cserép Csaba', 222, 1),
(54, 'Tetőfedő', 'Pala Péter', 343593, 2),
(55, 'Üveges', 'Ablak Antal', 326324, 1),
(56, 'Üveges', 'Pohár Péter', 21212, 2),
(57, 'Villanyszerelő', 'Kábel Károly', 221121, 1),
(58, 'Villanyszerelő', 'Konnektor Imre', 10020, 2),
(59, 'Víz- és gázszerelő', 'Vízes Imre', 2121321, 1),
(60, 'Víz- és gázszerelő', 'Gázos Csabi', 2111212, 2);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `helység`
--
ALTER TABLE `helység`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `mester`
--
ALTER TABLE `mester`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `mester`
--
ALTER TABLE `mester`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
