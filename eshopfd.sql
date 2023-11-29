-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 09:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bannery`
--

INSERT INTO `bannery` (`id_banneru`, `obrazek`) VALUES
(19, 'IMG-65679f1f51b885.69232668.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_komentare`
--

CREATE TABLE `blog_komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_prispevku` int(11) NOT NULL,
  `id_uzivatele` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_prispevek`
--

CREATE TABLE `blog_prispevek` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `obrazek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id_tag` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_kategorie`
--

CREATE TABLE `forum_kategorie` (
  `id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `popis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_kategorie`
--

INSERT INTO `forum_kategorie` (`id_kategorie`, `nazev`, `popis`) VALUES
(22, 'Testovací kategorie', 'test');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`id_post`, `id_kategorie`, `nazev_post`, `obsah`, `uzivatel`, `datum_pridani`) VALUES
(43, 22, '', '', 'admin', '2023-11-29 21:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `kategorie`
--

CREATE TABLE `kategorie` (
  `Id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`Id_kategorie`, `nazev`) VALUES
(79, 'test ');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produkt`, `jmeno_produktu`, `popis_produktu`, `obrazek`, `Id_kategorie`, `cena`, `Id_subkategorie`, `quantity`, `id_komentare`) VALUES
(113, 'Jack Herer CBD', '<p>Lorem Impsum</p>', 'IMG-65679ee5c5a5c7.44100702.png', 79, '249', 70, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subkategorie`
--

CREATE TABLE `subkategorie` (
  `Id_subkategorie` int(11) NOT NULL,
  `Id_kat` int(11) NOT NULL,
  `nazev_subkategorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subkategorie`
--

INSERT INTO `subkategorie` (`Id_subkategorie`, `Id_kat`, `nazev_subkategorie`) VALUES
(70, 79, 'testovací podkategorie');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_banneru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `forum_komentare`
--
ALTER TABLE `forum_komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `Id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `subkategorie`
--
ALTER TABLE `subkategorie`
  MODIFY `Id_subkategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

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
