-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 11. říj 2023, 23:48
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `eshopfd`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `bannery`
--

CREATE TABLE `bannery` (
  `id_banneru` int(11) NOT NULL,
  `obrazek` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `bannery`
--

INSERT INTO `bannery` (`id_banneru`, `obrazek`) VALUES
(15, 'IMG-62a52473b650e9.58082378.jpg'),
(17, 'IMG-62a5249fb6a3b3.44176487.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `blog_komentare`
--

CREATE TABLE `blog_komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_prispevku` int(11) NOT NULL,
  `id_uzivatele` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `blog_prispevek`
--

CREATE TABLE `blog_prispevek` (
  `id` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `obrazek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `blog_prispevek`
--

INSERT INTO `blog_prispevek` (`id`, `tags`, `title`, `content`, `obrazek`) VALUES
(88, 'testik lorem impsum ', 'Testik', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nullam rhoncus aliquam metus. Fusce tellus. Aliquam erat volutpat. Quisque porta. Praesent vitae arcu tempor neque lacinia pretium. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Integer pellentesque quam vel velit. Pellentesque ipsum. Pellentesque arcu. Vestibulum fermentum tortor id mi. Nulla quis diam. Vivamus luctus egestas leo.</p>\r\n<p>&nbsp;</p>\r\n<p>Curabitur sagittis hendrerit ante. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Mauris metus. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Aenean vel massa quis mauris vehicula lacinia. Vestibulum fermentum tortor id mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p>\r\n<p>&nbsp;</p>\r\n<p>Phasellus et lorem id felis nonummy placerat. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Donec quis nibh at felis congue commodo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Mauris metus. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Etiam neque. Nullam at arcu a est sollicitudin euismod. Integer vulputate sem a nibh rutrum consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce nibh. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Nullam eget nisl. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>&nbsp;</p>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Aliquam ornare wisi eu metus. Nullam at arcu a est sollicitudin euismod. Aliquam ante. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Aenean id metus id velit ullamcorper pulvinar. Curabitur sagittis hendrerit ante. Maecenas lorem. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nunc tincidunt ante vitae massa. Nulla est. Mauris dictum facilisis augue. Fusce nibh.</p>', 'IMG-65271389850ef0.68673384.jpg'),
(89, 'HHC CBD THC-P', 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nullam rhoncus aliquam metus. Fusce tellus. Aliquam erat volutpat. Quisque porta. Praesent vitae arcu tempor neque lacinia pretium. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Integer pellentesque quam vel velit. Pellentesque ipsum. Pellentesque arcu. Vestibulum fermentum tortor id mi. Nulla quis diam. Vivamus luctus egestas leo.</p>\r\n<p>&nbsp;</p>\r\n<p>Curabitur sagittis hendrerit ante. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Mauris metus. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Aenean vel massa quis mauris vehicula lacinia. Vestibulum fermentum tortor id mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis.</p>\r\n<p>&nbsp;</p>\r\n<p>Phasellus et lorem id felis nonummy placerat. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Donec quis nibh at felis congue commodo. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Mauris metus. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Etiam neque. Nullam at arcu a est sollicitudin euismod. Integer vulputate sem a nibh rutrum consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce nibh. Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien. Nullam eget nisl. Et harum quidem rerum facilis est et expedita distinctio.</p>\r\n<p>&nbsp;</p>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Aliquam ornare wisi eu metus. Nullam at arcu a est sollicitudin euismod. Aliquam ante. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Aenean id metus id velit ullamcorper pulvinar. Curabitur sagittis hendrerit ante. Maecenas lorem. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Nunc tincidunt ante vitae massa. Nulla est. Mauris dictum facilisis augue. Fusce nibh.</p>', 'IMG-652713a8b25295.72019484.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `forum_kategorie`
--

CREATE TABLE `forum_kategorie` (
  `id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `popis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `forum_kategorie`
--

INSERT INTO `forum_kategorie` (`id_kategorie`, `nazev`, `popis`) VALUES
(23, 'Kannabinoidy', ''),
(24, 'CBD', ''),
(25, 'Dodavatelé', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `forum_komentare`
--

CREATE TABLE `forum_komentare` (
  `id_komentare` int(11) NOT NULL,
  `id_prispevku` int(11) NOT NULL,
  `id_odpoved` int(11) NOT NULL,
  `uzivatel` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `datum_pridani` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `forum_komentare`
--

INSERT INTO `forum_komentare` (`id_komentare`, `id_prispevku`, `id_odpoved`, `uzivatel`, `komentar`, `datum_pridani`) VALUES
(323, 45, 316, 'pepik', 'dasdsa', '2023-04-13 01:18:52'),
(325, 45, 324, 'pepik', 'test', '2023-04-13 01:19:22'),
(331, 47, 0, 'admin', 'testovaci komentar\r\n', '2023-04-13 01:40:31'),
(332, 47, 331, 'pepik', 'test', '2023-04-13 01:40:47');

-- --------------------------------------------------------

--
-- Struktura tabulky `forum_post`
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
-- Vypisuji data pro tabulku `forum_post`
--

INSERT INTO `forum_post` (`id_post`, `id_kategorie`, `nazev_post`, `obsah`, `uzivatel`, `datum_pridani`) VALUES
(45, 24, 'nejlepší CBD strain?', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Donec iaculis gravida nulla. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nunc tincidunt ante vitae massa. Sed convallis magna eu sem. Morbi scelerisque luctus velit. Pellentesque pretium lectus id turpis. Etiam egestas wisi a erat. Donec vitae arcu. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nullam eget nisl. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam erat volutpat. Maecenas sollicitudin. Nulla non lectus sed nisl molestie malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat.</p>', 'admin', '2023-04-13 01:00:30'),
(47, 25, 'Nejlepší dodavatelé poměr cena výkon', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Phasellus rhoncus. Etiam egestas wisi a erat. In convallis. Duis condimentum augue id magna semper rutrum. Nullam sit amet magna in magna gravida vehicula. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Morbi scelerisque luctus velit. Vivamus porttitor turpis ac leo. Integer imperdiet lectus quis justo. Curabitur bibendum justo non orci. Suspendisse sagittis ultrices augue. Nullam at arcu a est sollicitudin euismod.</p>\r\n<p>&nbsp;</p>\r\n<p>Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Aenean vel massa quis mauris vehicula lacinia. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Etiam egestas wisi a erat. Nullam rhoncus aliquam metus. Etiam commodo dui eget wisi. Quisque tincidunt scelerisque libero. Mauris tincidunt sem sed arcu. Nullam sit amet magna in magna gravida vehicula. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. In convallis. Maecenas aliquet accumsan leo. Fusce tellus.</p>\r\n<p>&nbsp;</p>\r\n<p>Vivamus porttitor turpis ac leo. Curabitur sagittis hendrerit ante. Etiam dictum tincidunt diam. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Nulla non arcu lacinia neque faucibus fringilla. Mauris metus. Sed ac dolor sit amet purus malesuada congue. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Nullam faucibus mi quis velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis risus. Vestibulum fermentum tortor id mi. Fusce aliquam vestibulum ipsum. Etiam commodo dui eget wisi. Curabitur bibendum justo non orci. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>', 'admin', '2023-04-13 01:09:08');

-- --------------------------------------------------------

--
-- Struktura tabulky `kategorie`
--

CREATE TABLE `kategorie` (
  `Id_kategorie` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `kategorie`
--

INSERT INTO `kategorie` (`Id_kategorie`, `nazev`) VALUES
(26, 'CBD Oleje & Kapsle'),
(27, 'CBD Kvety'),
(28, 'CBD Vaporizery'),
(29, 'Kratom'),
(68, 'Doplňky');

-- --------------------------------------------------------

--
-- Struktura tabulky `komentare`
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
-- Struktura tabulky `kosik`
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
-- Struktura tabulky `objednavky`
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

--
-- Vypisuji data pro tabulku `objednavky`
--

INSERT INTO `objednavky` (`id_objednavky`, `jmeno`, `prijmeni`, `telefon`, `email`, `metoda`, `adresa`, `mesto`, `kraj`, `zeme`, `PSC`, `objednane_produkty`, `cena`, `stav_objednavky`) VALUES
(181, 'hdfghfdghdfg', 'dfgdfgdf', 654345, 'mates.svarc@gmail.com', 'Dobirka', '', 'fsfdsfdsfds', 'fsdfds', 'fgdfgdf', 7878, '696969 (1) ', 696, ''),
(182, '', '', 0, '', '', '', '', '', '', 0, 'IOUFGADSOŮJKHDGSAF (1) , dsfsdfds (1) ', 378, ''),
(183, 'test', 'test', 869455361, 'mates.svarc@gmail.com', 'Kreditni karta', 'test', 'testovací město', 'test', 'test', 0, 'dsfsdfds (1) , White Russian (1) ', 248, ''),
(184, 'matej', 'kara', 60473144, 'mates.svarc@gmail.com', 'Dobirka', 'test1', 'švarc', 'kara', 'par', 0, 'IOUFGADSOŮJKHDGSAF (1) , dsfsdfds (1) , White Russian (1) ', 503, ''),
(185, 'ggdfgdf', 'gdfgdfgdf', 897415602, 'mates.svarc@gmail.comg', 'Dobirka', '', 'dfgdfgdf', 'Liberecký', 'gdfgdfg', 0, 'White Russian (1) ', 125, '');

-- --------------------------------------------------------

--
-- Struktura tabulky `produkty`
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
-- Vypisuji data pro tabulku `produkty`
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
-- Struktura tabulky `subkategorie`
--

CREATE TABLE `subkategorie` (
  `Id_subkategorie` int(11) NOT NULL,
  `Id_kat` int(11) NOT NULL,
  `nazev_subkategorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `subkategorie`
--

INSERT INTO `subkategorie` (`Id_subkategorie`, `Id_kat`, `nazev_subkategorie`) VALUES
(67, 27, 'Cali květy'),
(68, 27, 'České indoor květy'),
(69, 26, 'Canabee oleje');

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
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
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`Id_zakaznika`, `jmeno`, `password`, `email`, `role`, `registrovan`, `telefon`, `adresa`, `mesto`, `stat`, `zip_code`, `id_topics`, `id_forum_prispevky`) VALUES
(44, 'xxx', '9dd4e461268c8034f5c8564e155c67a6', 'admin@gmf.com', 'uzivatel', '2021-11-28 16:36:26', 0, '', '', '', 0, 0, 0),
(45, 'xddx', '4a8a08f09d37b73795649038408b5f33', 'xd@cf.com', 'uzivatel', '2021-12-09 20:10:02', 0, '', '', '', 0, 0, 0),
(46, 'xd', '7f30eefe5c51e1ae0939dab2051db75f', 'xd@gmail.com', 'uzivatel', '2021-12-19 17:16:01', 0, '', '', '', 0, 0, 0),
(53, 'ads', '9336ebf25087d91c818ee6e9ec29f8c1', 'fgdssdf', 'uzivatel', '2022-01-20 09:08:39', 0, '', '', '', 0, 0, 0),
(54, 'sxADFY', 'c81e728d9d4c2f636f067f89cc14862c', 'cvxy', 'uzivatel', '2022-01-20 09:10:08', 0, '', '', '', 0, 0, 0),
(55, 'pepik', '8827d52c113d97159c79be8c745f42b0', 'pepazdepa@seznam.cz', 'uzivatel', '2022-06-01 20:17:17', 0, '', '', '', 0, 0, 0),
(56, 'honzik', '202cb962ac59075b964b07152d234b70', 'honzik123@gmail.com', 'uzivatel', '2022-11-05 20:36:16', 0, '', '', '', 0, 0, 0),
(57, 'pepik2', '8827d52c113d97159c79be8c745f42b0', 'pepik2@gmail.com', 'uzivatel', '2023-01-17 21:06:19', 0, '', '', '', 0, 0, 0),
(58, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', '2023-10-11 21:44:38', 0, '', '', '', 0, 0, 0);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `bannery`
--
ALTER TABLE `bannery`
  ADD PRIMARY KEY (`id_banneru`);

--
-- Indexy pro tabulku `blog_komentare`
--
ALTER TABLE `blog_komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_prispevku` (`id_prispevku`),
  ADD KEY `id_uzivatele` (`id_uzivatele`);

--
-- Indexy pro tabulku `blog_prispevek`
--
ALTER TABLE `blog_prispevek`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `forum_kategorie`
--
ALTER TABLE `forum_kategorie`
  ADD PRIMARY KEY (`id_kategorie`);

--
-- Indexy pro tabulku `forum_komentare`
--
ALTER TABLE `forum_komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_prispevku` (`id_prispevku`),
  ADD KEY `uzivatel` (`uzivatel`),
  ADD KEY `id_odpoved` (`id_odpoved`);

--
-- Indexy pro tabulku `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategorie` (`id_kategorie`);

--
-- Indexy pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`Id_kategorie`);

--
-- Indexy pro tabulku `komentare`
--
ALTER TABLE `komentare`
  ADD PRIMARY KEY (`id_komentare`),
  ADD KEY `id_produkt` (`id_produkt`);

--
-- Indexy pro tabulku `kosik`
--
ALTER TABLE `kosik`
  ADD UNIQUE KEY `id_produkt` (`id_produkt`);

--
-- Indexy pro tabulku `objednavky`
--
ALTER TABLE `objednavky`
  ADD PRIMARY KEY (`id_objednavky`);

--
-- Indexy pro tabulku `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produkt`),
  ADD KEY `Id_subkategorie` (`Id_subkategorie`),
  ADD KEY `Id_kategorie` (`Id_kategorie`) USING BTREE,
  ADD KEY `id_komentare` (`id_komentare`);

--
-- Indexy pro tabulku `subkategorie`
--
ALTER TABLE `subkategorie`
  ADD PRIMARY KEY (`Id_subkategorie`) USING BTREE,
  ADD KEY `id_kategorie` (`Id_kat`) USING BTREE;

--
-- Indexy pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`Id_zakaznika`),
  ADD UNIQUE KEY `jmeno` (`jmeno`),
  ADD KEY `id_topics` (`id_topics`,`id_forum_prispevky`),
  ADD KEY `id_forum_prispevky` (`id_forum_prispevky`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `bannery`
--
ALTER TABLE `bannery`
  MODIFY `id_banneru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pro tabulku `blog_komentare`
--
ALTER TABLE `blog_komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `blog_prispevek`
--
ALTER TABLE `blog_prispevek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pro tabulku `forum_kategorie`
--
ALTER TABLE `forum_kategorie`
  MODIFY `id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pro tabulku `forum_komentare`
--
ALTER TABLE `forum_komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT pro tabulku `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pro tabulku `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `Id_kategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pro tabulku `komentare`
--
ALTER TABLE `komentare`
  MODIFY `id_komentare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT pro tabulku `objednavky`
--
ALTER TABLE `objednavky`
  MODIFY `id_objednavky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT pro tabulku `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pro tabulku `subkategorie`
--
ALTER TABLE `subkategorie`
  MODIFY `Id_subkategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `Id_zakaznika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `blog_komentare`
--
ALTER TABLE `blog_komentare`
  ADD CONSTRAINT `blog_komentare_ibfk_1` FOREIGN KEY (`id_prispevku`) REFERENCES `blog_prispevek` (`id`),
  ADD CONSTRAINT `blog_komentare_ibfk_2` FOREIGN KEY (`id_uzivatele`) REFERENCES `uzivatele` (`Id_zakaznika`);

--
-- Omezení pro tabulku `forum_komentare`
--
ALTER TABLE `forum_komentare`
  ADD CONSTRAINT `forum_komentare_ibfk_1` FOREIGN KEY (`id_prispevku`) REFERENCES `forum_post` (`id_post`);

--
-- Omezení pro tabulku `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post_ibfk_2` FOREIGN KEY (`id_kategorie`) REFERENCES `forum_kategorie` (`id_kategorie`);

--
-- Omezení pro tabulku `komentare`
--
ALTER TABLE `komentare`
  ADD CONSTRAINT `komentare_ibfk_1` FOREIGN KEY (`id_produkt`) REFERENCES `produkty` (`id_produkt`);

--
-- Omezení pro tabulku `kosik`
--
ALTER TABLE `kosik`
  ADD CONSTRAINT `kosik_ibfk_1` FOREIGN KEY (`id_produkt`) REFERENCES `produkty` (`id_produkt`);

--
-- Omezení pro tabulku `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_3` FOREIGN KEY (`Id_kategorie`) REFERENCES `kategorie` (`Id_kategorie`),
  ADD CONSTRAINT `produkty_ibfk_4` FOREIGN KEY (`Id_subkategorie`) REFERENCES `subkategorie` (`Id_subkategorie`);

--
-- Omezení pro tabulku `subkategorie`
--
ALTER TABLE `subkategorie`
  ADD CONSTRAINT `subkategorie_ibfk_1` FOREIGN KEY (`Id_kat`) REFERENCES `kategorie` (`Id_kategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
