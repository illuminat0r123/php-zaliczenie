-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Kwi 2024, 09:40
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dziennik`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administracja`
--

CREATE TABLE `administracja` (
  `ID` int(11) DEFAULT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `rola` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `administracja`
--

INSERT INTO `administracja` (`ID`, `imie`, `nazwisko`, `rola`) VALUES
(1, 'Devland', 'Carrett', 'Dyrektor'),
(2, 'Rhona', 'Lieber', 'Sekretarka'),
(3, 'Gwennie', 'Tirte', 'Sekretarka'),
(4, 'Hugo', 'Behan', 'Woźny'),
(5, 'Chrissie', 'Le Ball', 'Wice-Dyrektor'),
(6, 'Tera', 'Coopman', 'Woźna'),
(7, 'Bernadette', 'Langtree', 'Administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `ID` int(11) DEFAULT NULL,
  `klasa` varchar(50) DEFAULT NULL,
  `wychowawca` varchar(50) DEFAULT NULL,
  `plan_lekcji_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`ID`, `klasa`, `wychowawca`, `plan_lekcji_ID`) VALUES
(1, '4A', 'Ostler', 10),
(2, '5B', 'Gibbon', 8),
(3, '2C', 'Chaster', 5),
(4, '3D', 'De Domenici', 3),
(5, '4A', 'Klicher', 9),
(6, '2E', 'Haking', 9),
(7, '2B', 'Hospital', 10),
(8, '4C', 'Onthank', 6),
(9, '5C', 'Abrahart', 1),
(10, '4E', 'Whetnall', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `ID` int(11) DEFAULT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `klasy_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `nauczyciele`
--

INSERT INTO `nauczyciele` (`ID`, `imie`, `nazwisko`, `klasy_ID`) VALUES
(1, 'Pammy', 'Buckhurst', 4),
(2, 'Etan', 'Vasilic', 3),
(3, 'Alvy', 'Vigus', 9),
(4, 'Kamil', 'Zbrzeźniak', 1),
(5, 'Harli', 'Lilie', 5),
(6, 'Linnie', 'Kummerlowe', 4),
(7, 'Brian', 'Faussett', 2),
(8, 'Katharine', 'Osinin', 4),
(9, 'Margareta', 'MacLeese', 10),
(10, 'Binnie', 'Laundon', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `ID` int(11) DEFAULT NULL,
  `Ocena` int(11) DEFAULT NULL,
  `przedmiot_ID` int(11) DEFAULT NULL,
  `klasy_ID` int(11) DEFAULT NULL,
  `uczniowie_ID` int(11) DEFAULT NULL,
  `nauczyciele_ID` int(11) DEFAULT NULL,
  `waga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`ID`, `Ocena`, `przedmiot_ID`, `klasy_ID`, `uczniowie_ID`, `nauczyciele_ID`, `waga`) VALUES
(1, 3, 10, 10, 8, 1, 3),
(2, 6, 8, 4, 22, 7, 4),
(3, 6, 6, 8, 28, 1, 3),
(4, 4, 4, 6, 49, 1, 2),
(5, 6, 7, 6, 44, 6, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan_lekcji`
--

CREATE TABLE `plan_lekcji` (
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `plan_lekcji`
--

INSERT INTO `plan_lekcji` (`ID`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `ID` int(11) DEFAULT NULL,
  `przedmiot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `przedmioty`
--

INSERT INTO `przedmioty` (`ID`, `przedmiot`) VALUES
(1, 'matematyka'),
(2, 'polski'),
(3, 'angielski'),
(4, 'chemia'),
(5, 'biologia'),
(6, 'geografia'),
(7, 'wf'),
(8, 'fizyka'),
(9, 'wos'),
(10, 'wdż');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `ID` int(11) DEFAULT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `klasy_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`ID`, `imie`, `nazwisko`, `klasy_ID`) VALUES
(1, 'Hali', 'Cowen', 2),
(2, 'Jeanna', 'Adacot', 4),
(3, 'Lianne', 'Harragin', 3),
(4, 'Juliette', 'Sugg', 2),
(5, 'Olivie', 'Slyne', 10),
(6, 'Sonja', 'Sealeaf', 4),
(7, 'Bonita', 'Skuse', 5),
(8, 'Mariette', 'Zukerman', 10),
(9, 'Alica', 'O\'Teague', 10),
(10, 'Marthe', 'Sidebottom', 8),
(11, 'Reina', 'Stappard', 6),
(12, 'Nicol', 'Garham', 5),
(13, 'Pen', 'Guerreru', 8),
(14, 'Wain', 'Harcase', 1),
(15, 'Jacky', 'Petegree', 8),
(16, 'Bertine', 'Rosengarten', 9),
(17, 'Nathanael', 'Antonelli', 5),
(18, 'Ely', 'Corzor', 5),
(19, 'Aldin', 'Comello', 10),
(20, 'Babbette', 'Minihan', 3),
(21, 'Clem', 'Twelve', 8),
(22, 'Korry', 'Palomba', 4),
(23, 'Maximilianus', 'Weare', 2),
(24, 'Grannie', 'Sothcott', 1),
(25, 'Bo', 'McClaughlin', 4),
(26, 'Beck', 'Millhouse', 2),
(27, 'Bette', 'Chansonnau', 7),
(28, 'Jessey', 'Grisenthwaite', 8),
(29, 'Georgine', 'Dwelling', 4),
(30, 'Kristina', 'Eyers', 6),
(31, 'Lavina', 'Kittless', 2),
(32, 'Mortimer', 'Collcott', 4),
(33, 'Lloyd', 'Mustarde', 9),
(34, 'Willamina', 'Breeder', 1),
(35, 'Obidiah', 'Medford', 10),
(36, 'Georas', 'Armin', 3),
(37, 'Amalee', 'Farlowe', 8),
(38, 'Tracey', 'Shermar', 7),
(39, 'Ruprecht', 'Leschelle', 6),
(40, 'Hobey', 'Toffalo', 5),
(41, 'Ernie', 'McGebenay', 10),
(42, 'Carmella', 'Rudolf', 2),
(43, 'Ancell', 'Rahlof', 8),
(44, 'Kakalina', 'Wilprecht', 6),
(45, 'Zarah', 'Edsall', 4),
(46, 'Berke', 'Baldrey', 9),
(47, 'Alameda', 'Yankin', 8),
(48, 'Cesar', 'Pimblotte', 1),
(49, 'Al', 'Ibbison', 6),
(50, 'Allianora', 'Bercher', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'kalbon0@rediff.com', '$2a$04$WdbgxrGKzzSut9REU4nDyu1j4efHxksdqL51.fTxPU6lBaLbz6Dea'),
(2, 'akervin1@pinterest.com', '$2a$04$9Vq2ttDJmvGHmARJlvhRzu3QGU.LQGj8JEyh9lAN4bmHnsBCg./Da'),
(3, 'aellson2@cnbc.com', '$2a$04$tGw3H0ig4zn20LrhBL.jce4G3edV5x2GPeRXHU2gLs3bQczkuyeKK'),
(4, 'dspere3@51.la', '$2a$04$SapTo/EBwGkJ5sV0lvxL/OvVsQHMMS/PoQcjzgFOGu4MzCwxYZZsO'),
(5, 'aboeter4@answers.com', '$2a$04$2mNFtS5DmciuQjpX.VwRUeZ475afrGTJURCftziLNsJ51pqvX1zGO'),
(6, 'csutherden5@chron.com', '$2a$04$AZHqVIg7Co4MImWz7jac6OAX5buQvPRW/B8l.n4PB2ra7LEEmEYKy'),
(7, 'lotterwell6@homestead.com', '$2a$04$MiABWV8UvH8BiHgp5sRMduFwMZV.pDK/hCps.XDy3C3plKxP/eSLu'),
(8, 'lohern7@wix.com', '$2a$04$MejoEw2iLO2rvKsM24UYyO7Qx9hRV4mugfq7IGc2NkesGRqAMKvRK'),
(9, 'vzannutti8@ifeng.com', '$2a$04$woMUuUcbm6A.mZk6XzHHbOuFBTwjoz4zcXt5c0/iG9X/FaUn1/nxG'),
(10, 'rstjohn9@dell.com', '$2a$04$DHtzHxxf/9Y2KL38MyvSt.cvQi/52ZdLsMJYiwg5pGHTweK3sA1Rq');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uwagi`
--

CREATE TABLE `uwagi` (
  `ID` int(11) DEFAULT NULL,
  `tresc` varchar(128) DEFAULT NULL,
  `nauczyciele_ID` int(11) DEFAULT NULL,
  `uczniowie_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uwagi`
--

INSERT INTO `uwagi` (`ID`, `tresc`, `nauczyciele_ID`, `uczniowie_ID`) VALUES
(1, 'Uczen przeszkadza na lekcji', 8, 5),
(2, 'Uczen pobil sie z kolega', 10, 29),
(3, 'Uczen przebywa w toalecie w 10 osob', 8, 27),
(4, 'Uczen robi dziwne odglosy na lekcji', 1, 39),
(5, 'Uczen karygodnie zachowuje sie na wycieczce', 2, 29);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomości`
--

CREATE TABLE `wiadomości` (
  `ID` int(11) DEFAULT NULL,
  `tresc` varchar(128) DEFAULT NULL,
  `nadawca` varchar(50) DEFAULT NULL,
  `klasy_ID` int(11) DEFAULT NULL,
  `odbiorca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wiadomości`
--

INSERT INTO `wiadomości` (`ID`, `tresc`, `nadawca`, `klasy_ID`, `odbiorca`) VALUES
(1, 'Lekcje sa odwolane', 'Nevins', 3, 'Rosiello'),
(2, 'Zapowiadam sprawdzian na przyszly wtorek', 'Clarabelle', 3, 'Goulborn'),
(3, 'Wycieczka do Zakopanego', 'Oliy', 2, 'Geroldini'),
(4, 'Wywiadowka odbedzie sie 20.03', 'Madelaine', 3, 'Leavry'),
(5, 'Prosze ograniczyc spoznianie sie na lekcje', 'Codie', 7, 'Coley');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
