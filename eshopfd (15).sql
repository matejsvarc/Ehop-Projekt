-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 06:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopfd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannery`
--

CREATE TABLE `bannery` (
  `id_banneru` int(11) NOT NULL,
  `obrazek` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bannery`
--

INSERT INTO `bannery` (`id_banneru`, `obrazek`) VALUES
(15, 'IMG-62a52473b650e9.58082378.jpg'),
(17, 'IMG-62a5249fb6a3b3.44176487.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_komentare`
--

CREATE TABLE `blog_komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_prispevku` int(11) NOT NULL,
  `id_uzivatele` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_prispevek`
--

CREATE TABLE `blog_prispevek` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `obrazek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_prispevek`
--

INSERT INTO `blog_prispevek` (`id`, `title`, `content`, `obrazek`) VALUES
(70, 'Testovací příspěvek', '<p>zmrde</p>', 'IMG-63bfdf8d14e239.50796004.png'),
(73, 'test', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas sollicitudin. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nulla est. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Suspendisse nisl. Duis viverra diam non justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Vivamus porttitor turpis ac leo. Fusce aliquam vestibulum ipsum. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean fermentum risus id tortor. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Integer malesuada.</p>\r\n<p>&nbsp;</p>\r\n<p>Nullam at arcu a est sollicitudin euismod. Quisque porta. Aenean id metus id velit ullamcorper pulvinar. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. In enim a arcu imperdiet malesuada. Maecenas libero. Mauris tincidunt sem sed arcu. Vivamus ac leo pretium faucibus. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Sed convallis magna eu sem. Etiam quis quam. Nullam at arcu a est sollicitudin euismod. Integer imperdiet lectus quis justo. Aenean placerat. Nullam rhoncus aliquam metus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit.</p>\r\n<p>&nbsp;</p>\r\n<p>Aenean placerat. Duis viverra diam non justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Donec quis nibh at felis congue commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam posuere lacus quis dolor. Integer in sapien. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Donec vitae arcu. Ut tempus purus at lorem. Suspendisse nisl.</p>\r\n<p>&nbsp;</p>\r\n<p>Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent dapibus. Nulla quis diam. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. In convallis. Duis condimentum augue id magna semper rutrum. Duis risus. Phasellus et lorem id felis nonummy placerat. Integer in sapien.</p>\r\n<p>&nbsp;</p>\r\n<p>Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Fusce wisi. Aliquam ante. Sed convallis magna eu sem. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Aliquam ante. Duis risus. Fusce wisi. Nullam at arcu a est sollicitudin euismod. Aliquam erat volutpat. Aliquam erat volutpat. Aliquam erat volutpat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est.</p>', 'IMG-63c70f9d124eb0.99581968.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id_tag` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_kategorie`
--

CREATE TABLE `forum_kategorie` (
  `id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `popis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_kategorie`
--

INSERT INTO `forum_kategorie` (`id_kategorie`, `nazev`, `popis`) VALUES
(21, 'xdfaaa', 'xdfd');

-- --------------------------------------------------------

--
-- Table structure for table `forum_komentare`
--

CREATE TABLE `forum_komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_prispevku` int(11) NOT NULL,
  `id_odpoved` int(11) NOT NULL,
  `uzivatel` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_komentare`
--

INSERT INTO `forum_komentare` (`id_komentare`, `id_prispevku`, `id_odpoved`, `uzivatel`, `komentar`) VALUES
(273, 39, 269, 'admin', 'gf');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `id_post` int(11) NOT NULL,
  `id_kategorie` int(11) NOT NULL,
  `nazev_post` varchar(255) NOT NULL,
  `obsah` text NOT NULL,
  `uzivatel` varchar(255) NOT NULL,
  `datum_pridani` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`id_post`, `id_kategorie`, `nazev_post`, `obsah`, `uzivatel`, `datum_pridani`) VALUES
(39, 21, 'addaad', '<p>adadada</p>', 'admin', '2023-01-17 21:25:48'),
(40, 21, 'kekeke', '<p>kekekekekekeke</p>', 'pepik', '2023-01-17 22:04:45'),
(41, 21, 'fdfdfdfdfd', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas sollicitudin. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nulla est. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Suspendisse nisl. Duis viverra diam non justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Vivamus porttitor turpis ac leo. Fusce aliquam vestibulum ipsum. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean fermentum risus id tortor. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Integer malesuada.</p>\r\n<p>&nbsp;</p>\r\n<p>Nullam at arcu a est sollicitudin euismod. Quisque porta. Aenean id metus id velit ullamcorper pulvinar. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. In enim a arcu imperdiet malesuada. Maecenas libero. Mauris tincidunt sem sed arcu. Vivamus ac leo pretium faucibus. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Sed convallis magna eu sem. Etiam quis quam. Nullam at arcu a est sollicitudin euismod. Integer imperdiet lectus quis justo. Aenean placerat. Nullam rhoncus aliquam metus. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit.</p>\r\n<p>&nbsp;</p>\r\n<p>Aenean placerat. Duis viverra diam non justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Donec quis nibh at felis congue commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam posuere lacus quis dolor. Integer in sapien. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Donec vitae arcu. Ut tempus purus at lorem. Suspendisse nisl.</p>\r\n<p>&nbsp;</p>\r\n<p>Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent dapibus. Nulla quis diam. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. In convallis. Duis condimentum augue id magna semper rutrum. Duis risus. Phasellus et lorem id felis nonummy placerat. Integer in sapien.</p>\r\n<p>&nbsp;</p>\r\n<p>Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Fusce wisi. Aliquam ante. Sed convallis magna eu sem. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Aliquam ante. Duis risus. Fusce wisi. Nullam at arcu a est sollicitudin euismod. Aliquam erat volutpat. Aliquam erat volutpat. Aliquam erat volutpat. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est.</p>', 'admin', '2023-01-17 22:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `kategorie`
--

CREATE TABLE `kategorie` (
  `Id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`Id_kategorie`, `nazev`) VALUES
(26, 'CBD Oleje & Kapsle'),
(27, 'CBD Kvety'),
(28, 'CBD Vaporizery'),
(29, 'Kratom'),
(68, 'Doplňky');

-- --------------------------------------------------------

--
-- Table structure for table `komentare`
--

CREATE TABLE `komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_produkt` int(11) NOT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `uzivatel` varchar(255) NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kosik`
--

CREATE TABLE `kosik` (
  `id_produkt` int(11) NOT NULL,
  `jmeno_produktu` varchar(255) NOT NULL,
  `cena` int(9) NOT NULL,
  `obrazek` varchar(255) NOT NULL,
  `quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objednavky`
--

CREATE TABLE `objednavky` (
  `id_objednavky` int(11) NOT NULL,
  `jmeno` varchar(50) NOT NULL,
  `prijmeni` varchar(50) NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `metoda` varchar(50) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `mesto` varchar(255) NOT NULL,
  `kraj` varchar(255) NOT NULL,
  `zeme` varchar(255) NOT NULL,
  `PSC` int(11) NOT NULL,
  `objednane_produkty` varchar(1024) NOT NULL,
  `cena` int(11) NOT NULL,
  `stav_objednavky` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objednavky`
--

INSERT INTO `objednavky` (`id_objednavky`, `jmeno`, `prijmeni`, `telefon`, `email`, `metoda`, `adresa`, `mesto`, `kraj`, `zeme`, `PSC`, `objednane_produkty`, `cena`, `stav_objednavky`) VALUES
(181, 'hdfghfdghdfg', 'dfgdfgdf', 654345, 'mates.svarc@gmail.com', 'Dobirka', '', 'fsfdsfdsfds', 'fsdfds', 'fgdfgdf', 7878, '696969 (1) ', 696, ''),
(182, '', '', 0, '', '', '', '', '', '', 0, 'IOUFGADSOŮJKHDGSAF (1) , dsfsdfds (1) ', 378, ''),
(183, 'test', 'test', 869455361, 'mates.svarc@gmail.com', 'Kreditni karta', 'test', 'testovací město', 'test', 'test', 0, 'dsfsdfds (1) , White Russian (1) ', 248, ''),
(184, 'matej', 'kara', 60473144, 'mates.svarc@gmail.com', 'Dobirka', 'test1', 'švarc', 'kara', 'par', 0, 'IOUFGADSOŮJKHDGSAF (1) , dsfsdfds (1) , White Russian (1) ', 503, ''),
(185, 'ggdfgdf', 'gdfgdfgdf', 897415602, 'mates.svarc@gmail.comg', 'Dobirka', '', 'dfgdfgdf', 'Liberecký', 'gdfgdfg', 0, 'White Russian (1) ', 125, '');

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `id_produkt` int(11) NOT NULL,
  `jmeno_produktu` varchar(255) NOT NULL,
  `popis_produktu` varchar(600) NOT NULL,
  `obrazek` varchar(255) NOT NULL,
  `Id_kategorie` int(11) NOT NULL,
  `cena` varchar(255) NOT NULL,
  `Id_subkategorie` int(11) NOT NULL,
  `quantity` int(1) NOT NULL,
  `id_komentare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produkt`, `jmeno_produktu`, `popis_produktu`, `obrazek`, `Id_kategorie`, `cena`, `Id_subkategorie`, `quantity`, `id_komentare`) VALUES
(101, 'CBD olej 25%', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Nejvy&scaron;&scaron;&iacute; obsah kanabinoidů v nab&iacute;dce</span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Obsahuje 5 kanabinoidů</span></li>\r\n<li style=\"box-sizing: borde', 'IMG-62a5211dcaa953.94185447.jpg', 26, '2490', 67, 0, 0),
(102, 'Velká váza', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Origin&aacute;ln&iacute; kus uměn&iacute;</span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Pr&eacute;miov&yacute; dabbovac&iacute; rig</span></li>\r\n<li style=\"box-sizing: border-', 'IMG-62a5214591e081.23987477.jpg', 68, '24990', 67, 0, 0),
(103, 'Drtička', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box; font-family: helvetica;\">kvalitn&iacute; plastov&aacute; drtička, se z&aacute;sobn&iacute;kem</span></span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\"><span style=\"box-sizing: border-box; font-size: 12pt;\"><span style=\"box-sizing: border-box; font-family: helvetica;\">průměr ', 'IMG-62a521727bc6f5.29098797.jpg', 68, '149', 67, 0, 0),
(104, 'Kratom Green Dragon', '<p><span style=\"box-sizing: border-box; color: #666666; background-color: #ffffff; font-family: helvetica; font-size: 12pt;\"><strong style=\"box-sizing: border-box;\">Původ</strong>: Indon&eacute;sie</span><br style=\"box-sizing: border-box; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; color: #666666; background-color: #ffffff; font-family: helvetica; font-size: 12pt;\"><strong style=\"box-sizing: border-box;\">Klasifikace</strong>: Sběratelsk&yacute; produkt</span></p>', 'IMG-62a521b5a6d236.52266232.jpg', 29, '180', 67, 0, 0),
(106, 'Bohemian Pioneer', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Nejsilněj&scaron;&iacute; model v nab&iacute;dce</span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">Vypěstov&aacute;no v Česku</span></li>\r\n<li style=\"box-sizing: border-box; paddi', 'IMG-62a52253d44a43.80830190.jpg', 27, '620', 67, 0, 0),
(107, 'Kratom Green Passion Fruit', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li id=\"tw-target-text\" class=\"tw-data-text tw-text-large XcVN5d tw-ta\" dir=\"ltr\" style=\"box-sizing: border-box; padding-bottom: 5px;\" data-placeholder=\"Překlad\"><span class=\"Y2IQFc\" lang=\"cs\" style=\"box-sizing: border-box; font-family: helvetica; font-size: 12pt;\">s aroma marakuji</span></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 19px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-col', 'IMG-62a5228781ea09.55502690.jpg', 29, '490', 67, 0, 0),
(108, 'Girl Scout Cookies', '<ul style=\"box-sizing: border-box; padding-left: 15px; color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Model s nejdel&scaron;&iacute;mi bliznami</span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: border-box; font-size: 12pt;\">Pěstov&aacute;no v ČR</span></li>\r\n<li style=\"box-sizing: border-box; padding-bottom: 5px;\" aria-level=\"1\"><span style=\"box-sizing: bor', 'IMG-62a522b407f965.54337805.jpg', 27, '570', 68, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subkategorie`
--

CREATE TABLE `subkategorie` (
  `Id_subkategorie` int(11) NOT NULL,
  `Id_kat` int(11) NOT NULL,
  `nazev_subkategorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkategorie`
--

INSERT INTO `subkategorie` (`Id_subkategorie`, `Id_kat`, `nazev_subkategorie`) VALUES
(67, 27, 'Cali květy'),
(68, 27, 'České indoor květy'),
(69, 26, 'Canabee oleje');

-- --------------------------------------------------------

--
-- Table structure for table `uzivatele`
--

CREATE TABLE `uzivatele` (
  `Id_zakaznika` int(11) NOT NULL,
  `jmeno` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `registrovan` timestamp NOT NULL DEFAULT current_timestamp(),
  `telefon` int(11) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `mesto` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `id_topics` int(11) NOT NULL,
  `id_forum_prispevky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uzivatele`
--

INSERT INTO `uzivatele` (`Id_zakaznika`, `jmeno`, `password`, `email`, `role`, `registrovan`, `telefon`, `adresa`, `mesto`, `stat`, `zip_code`, `id_topics`, `id_forum_prispevky`) VALUES
(41, 'admin', '8bab4699c7a6d9c23f00c9608106757a', 'mate.svarc@gmail.com', 'admin', '2021-11-23 16:41:16', 0, '', '', '', 0, 0, 0),
(44, 'xxx', '9dd4e461268c8034f5c8564e155c67a6', 'admin@gmf.com', 'uzivatel', '2021-11-28 16:36:26', 0, '', '', '', 0, 0, 0),
(45, 'xddx', '4a8a08f09d37b73795649038408b5f33', 'xd@cf.com', 'uzivatel', '2021-12-09 20:10:02', 0, '', '', '', 0, 0, 0),
(46, 'xd', '7f30eefe5c51e1ae0939dab2051db75f', 'xd@gmail.com', 'uzivatel', '2021-12-19 17:16:01', 0, '', '', '', 0, 0, 0),
(53, 'ads', '9336ebf25087d91c818ee6e9ec29f8c1', 'fgdssdf', 'uzivatel', '2022-01-20 09:08:39', 0, '', '', '', 0, 0, 0),
(54, 'sxADFY', 'c81e728d9d4c2f636f067f89cc14862c', 'cvxy', 'uzivatel', '2022-01-20 09:10:08', 0, '', '', '', 0, 0, 0),
(55, 'pepik', '8827d52c113d97159c79be8c745f42b0', 'pepazdepa@seznam.cz', 'uzivatel', '2022-06-01 20:17:17', 0, '', '', '', 0, 0, 0),
(56, 'honzik', '202cb962ac59075b964b07152d234b70', 'honzik123@gmail.com', 'uzivatel', '2022-11-05 20:36:16', 0, '', '', '', 0, 0, 0),
(57, 'pepik2', '8827d52c113d97159c79be8c745f42b0', 'pepik2@gmail.com', 'uzivatel', '2023-01-17 21:06:19', 0, '', '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannery`
--
ALTER TABLE `bannery`
  ADD PRIMARY KEY (`id_banneru`);

--
-- Indexes for table `blog_komentare`
--
ALTER TABLE `blog_komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_prispevku` (`id_prispevku`),
  ADD KEY `id_uzivatele` (`id_uzivatele`);

--
-- Indexes for table `blog_prispevek`
--
ALTER TABLE `blog_prispevek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `forum_kategorie`
--
ALTER TABLE `forum_kategorie`
  ADD PRIMARY KEY (`id_kategorie`);

--
-- Indexes for table `forum_komentare`
--
ALTER TABLE `forum_komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_prispevku` (`id_prispevku`),
  ADD KEY `uzivatel` (`uzivatel`),
  ADD KEY `id_odpoved` (`id_odpoved`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategorie` (`id_kategorie`);

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`Id_kategorie`);

--
-- Indexes for table `komentare`
--
ALTER TABLE `komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_produkt` (`id_produkt`);

--
-- Indexes for table `kosik`
--
ALTER TABLE `kosik`
  ADD UNIQUE KEY `id_produkt` (`id_produkt`);

--
-- Indexes for table `objednavky`
--
ALTER TABLE `objednavky`
  ADD PRIMARY KEY (`id_objednavky`);

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produkt`),
  ADD KEY `Id_subkategorie` (`Id_subkategorie`),
  ADD KEY `Id_kategorie` (`Id_kategorie`) USING BTREE,
  ADD KEY `id_komentare` (`id_komentare`);

--
-- Indexes for table `subkategorie`
--
ALTER TABLE `subkategorie`
  ADD PRIMARY KEY (`Id_subkategorie`) USING BTREE,
  ADD KEY `id_kategorie` (`Id_kat`) USING BTREE;

--
-- Indexes for table `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`Id_zakaznika`),
  ADD UNIQUE KEY `jmeno` (`jmeno`),
  ADD KEY `id_topics` (`id_topics`,`id_forum_prispevky`),
  ADD KEY `id_forum_prispevky` (`id_forum_prispevky`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bannery`
--
ALTER TABLE `bannery`
  MODIFY `id_banneru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_komentare`
--
ALTER TABLE `blog_komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_prispevek`
--
ALTER TABLE `blog_prispevek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_kategorie`
--
ALTER TABLE `forum_kategorie`
  MODIFY `id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `forum_komentare`
--
ALTER TABLE `forum_komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `Id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `komentare`
--
ALTER TABLE `komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `objednavky`
--
ALTER TABLE `objednavky`
  MODIFY `id_objednavky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `subkategorie`
--
ALTER TABLE `subkategorie`
  MODIFY `Id_subkategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `Id_zakaznika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_komentare`
--
ALTER TABLE `blog_komentare`
  ADD CONSTRAINT `blog_komentare_ibfk_1` FOREIGN KEY (`id_prispevku`) REFERENCES `blog_prispevek` (`id`),
  ADD CONSTRAINT `blog_komentare_ibfk_2` FOREIGN KEY (`id_uzivatele`) REFERENCES `uzivatele` (`Id_zakaznika`);

--
-- Constraints for table `forum_komentare`
--
ALTER TABLE `forum_komentare`
  ADD CONSTRAINT `forum_komentare_ibfk_1` FOREIGN KEY (`id_prispevku`) REFERENCES `forum_post` (`id_post`);

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post_ibfk_2` FOREIGN KEY (`id_kategorie`) REFERENCES `forum_kategorie` (`id_kategorie`);

--
-- Constraints for table `komentare`
--
ALTER TABLE `komentare`
  ADD CONSTRAINT `komentare_ibfk_1` FOREIGN KEY (`id_produkt`) REFERENCES `produkty` (`id_produkt`);

--
-- Constraints for table `kosik`
--
ALTER TABLE `kosik`
  ADD CONSTRAINT `kosik_ibfk_1` FOREIGN KEY (`id_produkt`) REFERENCES `produkty` (`id_produkt`);

--
-- Constraints for table `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_3` FOREIGN KEY (`Id_kategorie`) REFERENCES `kategorie` (`Id_kategorie`),
  ADD CONSTRAINT `produkty_ibfk_4` FOREIGN KEY (`Id_subkategorie`) REFERENCES `subkategorie` (`Id_subkategorie`);

--
-- Constraints for table `subkategorie`
--
ALTER TABLE `subkategorie`
  ADD CONSTRAINT `subkategorie_ibfk_1` FOREIGN KEY (`Id_kat`) REFERENCES `kategorie` (`Id_kategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
