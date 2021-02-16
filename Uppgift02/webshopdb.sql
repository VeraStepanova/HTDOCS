-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 15 feb 2021 kl 10:15
-- Serverversion: 5.7.24
-- PHP-version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `webshopdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `books`
--

INSERT INTO `books` (`book_id`, `image`, `title`, `description`, `price`) VALUES
(1, '/Uppgift02/img/1.jpg', 'Skärmhjärnan : hur en hjärna i osynk med sin tid kan göra oss stressade, deprimerade och ångestfyllda av Anders Hansen', 'Den psykiska ohälsan håller på att ta över som det stora hälsohotet i vår tid. Ett högt tempo, konstant stress och en digital livsstil med ständig uppkoppling börjar få konsekvenser för vår hjärna. För hur mycket du än gillar att kolla bildflödet på instagram, nyheterna i mobilen eller filmer på plattan, är din hjärna inte anpassad till det som dagens samhälle för med sig. Den är helt enkelt i osynk med vår tid!', 111),
(2, '/Uppgift02/img/2.jpg', 'Databasteknik av Thomas Padron-Mccarthy, Tore Risch', 'Databasteknik används nästan överallt i dag där data behöver lagras och bearbetas. Allt från webbplatser till mobilappar lagrar sina data i databaser. Databaser har därför blivit ett av de områden inom datatekniken som man har störst nytta av att kunna, vare sig man är användare, datatekniker eller programmerare.', 548),
(3, '/Uppgift02/img/3.jpg', 'Designing User Experience A guide to HCI, UX and interaction design av David Benyon', 'Designing User Experience presents a comprehensive introduction to the practical issue of creating interactive systems, services and products from a human-centred perspective. It develops the principles and methods of humancomputer interaction (HCI) and Interaction Design (ID) to deal with the design of twenty-first-century computing and the demands for improved user experience (UX).', 619),
(4, '/Uppgift02/img/4.jpg', 'Webbredaktörens skrivhandbok : klarspråk på nätet av Karin Guldbrand, Helena Englund Hjalmarsson', 'Webbredaktörens skrivhandbok är en praktisk handbok för dig som arbetar med texter, mikrocopy och form för webb, surfplattor och mobiltelefoner. Författarna tar ett språkligt grepp på användbarhet och visar hur språket samspelar med andra element på sidan. Boken ger dig vägledning och konkreta tips och råd för alla delar av textproduktionen, i utvecklingsfasen såväl som i förvaltningsfasen.', 429),
(5, '/Uppgift02/img/5.jpg', 'Webbutveckling med PHP och MySQL av Montathar Faraon', 'PHP är ett av de ledande programmeringsspråken för webbutveckling. Det är ett flexibelt och enkelt språk som används för att skapa dyna miska webbplatser. Denna bok ger en lättillgänglig introduktion till PHP och databashantering. Läsaren får den kunskap som krävs för att snabbt utveckla egna webbapplikationer.', 391),
(6, '/Uppgift02/img/6.jpg', 'Artificial Intelligence: A Modern Approach, Global Edition av Stuart Russell', 'For one or two-semester, undergraduate or graduate-level courses in Artificial Intelligence. The long-anticipated revision of this best-selling text offers the most comprehensive, up-to-date introduction to the theory and practice of artificial intelligence.', 659),
(7, '/Uppgift02/img/7.jpg', 'Learning Web Design 5e av Jennifer Niederst Robbins', 'Do you want to build web pages but have no prior experience? This friendly guide is the perfect place to start. You will begin at square one, learning how the web and web pages work, and then steadily build from there. By the end of the book, you will have the skills to create a simple site with multicolumn pages that adapt for mobile devices. Each chapter provides exercises to help you learn various techniques and short quizzes to make sure you understand key concepts.', 499),
(8, '/Uppgift02/img/8.jpg', 'The Pragmatic Programmer av David Thomas', 'The bestselling software development guide more than 200,000 sold now thoroughly updated by its world-class author team. Todays best approaches to transforming requirements into working, maintainable code that delights users. Thoroughly revised with 10 new sections, extensive new coverage, new examples throughout and future-proofed with greater technology-independence. Brings together pragmatic advice on everything from personal career fulfillment to more effective architecture', 290),
(9, '/Uppgift02/img/9.jpg', 'Java - steg för steg av Jan Skansholm', 'Denna bok är tänkt att passa som kurslitteratur i grundläggande programmeringskurser, till exempel i en första kurs på universitet eller högskolan. På gymnasiet kan den användas i kurserna Programmering 1 och Programmering 2 samt i de matematikkurser som innehåller programmering som ett moment.', 370),
(10, '/Uppgift02/img/10.jpg', 'Web Design with HTML, CSS, JavaScript and jQuery Set av Jon Duckett', 'A two-book set for web designers and front-end developers This two-book set combines the titles HTML & CSS: Designing and Building Web Sites and JavaScript & jQuery: Interactive Front-End Development. Together these two books form an ideal platform for anyone who wants to master HTML and CSS before stepping up to JavaScript and jQuery.', 399);

-- --------------------------------------------------------

--
-- Tabellstruktur `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(19, 'Vera Stepanova', 'stepa.vera@gmail.com', 'jhjh'),
(20, 'Vera Stepanova', 'stepa.vera@gmail.com', 'hff'),
(21, 'Vera Stepanova', 'stepa.vera@gmail.com', 'hff'),
(22, 'Vera Stepanova', 'stepa.vera@gmail.com', 'hff');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Index för tabell `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT för tabell `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
