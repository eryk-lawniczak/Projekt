-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Gru 2018, 08:41
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(5) NOT NULL,
  `tytul` varchar(30) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `rok_wydania` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `autor`, `rok_wydania`) VALUES
(1, 'Biały rosjanin', 'Nieznajomy Nauczyciel', '2018'),
(2, 'Harry Potter i komnata tajemni', 'J.K.Rowlling', '2011'),
(4, 'Kubuś puchatek i hefalumpy', 'Walt Disney', '2005'),
(5, 'Hobbit - tam i spowrotem', 'J.R.R Tolkien', '2000'),
(6, 'Harry Potter i kamień filozofi', 'J.K.Rowlling', '2005'),
(7, 'Jak nie palić e-petów', 'Mateusz Maćkowski', '2016'),
(8, 'Podstawy żywienia', 'Kasia warzywo', '2017'),
(9, 'PHP dla opornych', 'Mariusz Nowak', '2016');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `naglowek` varchar(70) NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id_news`, `naglowek`, `tresc`) VALUES
(2, 'Start!', ' Strona w pełni funkcjonalna! Można zacząć czytać!'),
(3, 'Młodzież nie umie czytać', ' Okazuje się, że młodzież nie umie czytać poleceń przez co dostają jedynki ze sprawdzianów'),
(5, 'Dlaczego znaczniki html działają w textarea', 'Zastanawiające pytanie, które jest very intimidating for everyone. Czy można przez to dropnąć bazę?'),
(6, 'Spotkanie z ważnym człowiekiem', 'W naszej bibliotece będzie organizowane spotkanie dotyczące twórczości Krzysztofa Kamila Baczyńskiego. Jest on uznawany za jednego z najwybitniejszych poetów swojego pokolenia oraz za niesamowicie ważną personę z tamtego okresu. <br> Serdecznie zapraszamy do naszej biblioteki w każdy czwartek grudnia 2018 roku w godzinach pracy biblioteki.'),
(7, 'Nowy wykład teorytyczny z zakresu języka PHP', 'Innowacja! Odkryto, że można prowadzić lekcje teoretyczną tak aby miła sens. Nauczyciel zdecydował się przekazać wiedzę użyteczną zamiast powtarzać bez sensu informacje, któe zostały już przekazane na ćwiczeniach.'),
(8, 'Lekcja o obiektach', 'Miałem nadzieję na użyteczną lekcję. Jednak sposób jej przeprowadzania jest bezużyteczny, niezachęcający i ogólnie rzecz biorąc nietreściwy. Zdecydowanie lepiej jest zająć się samo-edukacją w tym kierunku'),
(9, 'Samoedukacja dla opornych', 'Samoedukacja to neologiczne pojęcie oznaczające czynności które jednostka zażenowana poziomem edukacji w swoim otoczeniu musi podjąć w celu zdobycia wiedzy i umiejętności potrzebnych do zaliczenia semestru i nie tylko.\r\n\r\nDziwnym przypadkiem zjawisko to zaobserwowane zostało najczęściej w ostatnim miesiącu na części teoretycznej Witryn i aplikacji w sekcji PHP'),
(10, 'Testowa zmiana', ' Większość ludzi nie wie  czym jest kopia zapasowa, a Ci którzy wiedzą są niechętni do ich tworzenia. W tą środę w naszej bibliotece odbędzie się prelekcja odnośnie przydatności i procedur oraz nowoczesnych rozwiązań dotyczących tworzenia i utrzymywania kopii zapasowych do wielu elementów naszej pracy'),
(11, 'Kolejna testowa wiadomośc', 'Test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_roli` int(11) NOT NULL,
  `rola` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_roli`, `rola`) VALUES
(1, 'admin'),
(2, 'moderator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(60) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(30) DEFAULT NULL,
  `id_roli` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `id_roli`) VALUES
(1, 'admin', '$2y$10$ZrhdZTGzRW/.lyR6wrgVGePGBDipbtGgKCQhI9YdviQ1gLVlPnNg6', 'biblioteka@lawnika.pl', 'Eryk', 'Ławniczak', 1),
(9, 'Przemeks', '$2y$10$oJJDuRRvtDHSt3sVwV1bvOq7jkf16YNTw/y7lguqwdUzikZpj/mfK', 'email@e.pl', 'Przemek', 'Skrętkowski', 3),
(13, 'Dango', '$2y$10$.6wMnIPtZZNwg15ra5G6ZuZxVE9gHA7RmrXXHAS34feTqiq9A4ej6', 'daniel@czajkowski.pl', 'Daniel', 'Czajkowski', 3),
(14, 'MatiMaćko', '$2y$10$CKvYiTyTEFyHmLfvX0B0OuyYfl.8wiWxBzuI0Ee7H1K/OAMtfhZOy', 'mmackow@gmail.com', 'Mateusz', 'Maćkowski', 3),
(15, 'Makaj', '$2y$10$WtBEe5Z7MMEU5Jjk4zd9fulgKyTyxOnMVK/56Ea05w21/rsufIurO', 'mikismochy@gmail.com', 'Mikołaj', 'Koszyc', 3),
(16, 'Janusz', '$2y$10$8ZYwjSjI4x.YN0/O0vzq1OyJgy70R6MDy3QpTSRXEkwOCWduNY1za', 'jan@nowak.pl', 'Jan', 'Nowak', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`);

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_roli`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_roli` (`id_roli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_roli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_ibfk_1` FOREIGN KEY (`id_roli`) REFERENCES `role` (`id_roli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
