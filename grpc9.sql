-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 19:15
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpc9`
--
CREATE DATABASE IF NOT EXISTS `grpc9` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grpc9`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `h1` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  `p3` varchar(50) NOT NULL,
  `button` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`h1`, `p1`, `p2`, `p3`, `button`) VALUES
('uwu', 'oui', 'oui', 'uoi', 'uoi');

-- --------------------------------------------------------

--
-- Structure de la table `homepage`
--

CREATE TABLE `homepage` (
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `img_projet` varchar(200) NOT NULL,
  `button` varchar(50) NOT NULL,
  `parallax` varchar(200) NOT NULL,
  `img_card1` varchar(200) NOT NULL,
  `img_card2` varchar(200) NOT NULL,
  `span_card1` varchar(50) NOT NULL,
  `span_card2` varchar(50) NOT NULL,
  `p_card1` text NOT NULL,
  `p_card2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `homepage`
--

INSERT INTO `homepage` (`h1`, `h2`, `img_projet`, `button`, `parallax`, `img_card1`, `img_card2`, `span_card1`, `span_card2`, `p_card1`, `p_card2`) VALUES
('', '', '', '', 'img/667.png', 'img/', 'img/', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `objet` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mail`
--

INSERT INTO `mail` (`mail_id`, `email`, `objet`, `content`) VALUES
(1, '', '', 'j\'ai un pbl avec mon caca'),
(2, 'exemple@mail.com', 'caca', 'j\'ai un pbl avec mon caca'),
(3, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(4, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(5, 'exemple@mail.com', 'hgvhvj', ''),
(6, '', '', ''),
(7, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(8, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(13, '', 'hgvhvj', 'jkjj'),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, 'gfddfgdfg', '', ''),
(19, 'gfdfdgfgd', 'fdgdgfd', ''),
(20, 'exemple@mail.com', 'caca', 'j\'ai un pbl avec mon caca'),
(21, 'gfddfgdfg', 'caca', 'j\'ai un pbl avec mon caca'),
(22, 'exemple@mail.com', 'hgvhvj', 'jkjj'),
(23, 'gfdfdgfgd', 'hgvhvj', 'j\'ai un pbl avec mon caca'),
(24, '', 'fdgdgfd', 'j\'ai un pbl avec mon caca'),
(25, 'gfddfgdfg', 'caca', 'j\'ai un pbl avec mon caca'),
(26, '', 'jhgjhg', 'jgjghjg'),
(27, 'exemple@mail.com', 'caca', 'j\'ai un pbl avec mon caca'),
(28, 'gfddfgdfg', '', 'jgjghjg'),
(29, 'gfddfgdfg', 'caca', 'j\'ai un pbl avec mon caca'),
(30, 'gfddfgdfg', '', 'jkjj'),
(31, 'exemple@mail.com', 'caca', '');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(11) NOT NULL,
  `parallax1` varchar(200) NOT NULL,
  `h1` varchar(50) NOT NULL,
  `h2_title` varchar(50) NOT NULL,
  `p1` text NOT NULL,
  `img_card` varchar(200) NOT NULL,
  `p_card` text NOT NULL,
  `parallax2` varchar(200) NOT NULL,
  `img_game` varchar(200) NOT NULL,
  `h2_game` varchar(50) NOT NULL,
  `p2` text NOT NULL,
  `pagination_href` varchar(50) NOT NULL,
  `pagination_content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `second_name` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `first_name`, `second_name`, `admin`) VALUES
(10, 'antonio', 'd7dc3791cbb0ed55b5db2333d8eddb6cfa4d2c13', 'exemple@mail.com', 'Antoine', 'Diroberto', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
