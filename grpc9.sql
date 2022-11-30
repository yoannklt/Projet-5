-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 30 Novembre 2022 à 08:48
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
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `objet` int(15) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(11) NOT NULL,
  `parallax1` varchar(200) NOT NULL,
  `h1` varchar(30) NOT NULL,
  `h2_title` varchar(30) NOT NULL,
  `p1` text NOT NULL,
  `img_card` varchar(200) NOT NULL,
  `p_card` text NOT NULL,
  `parallax2` varchar(200) NOT NULL,
  `img_game` varchar(200) NOT NULL,
  `h2_game` varchar(30) NOT NULL,
  `p2` text NOT NULL,
  `pagination_href` varchar(30) NOT NULL,
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
  `email` varchar(30) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `second_name` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `first_name`, `second_name`, `admin`) VALUES
(1, 'dsfsdf', 'dsfsdfsdf', 'sdfsdfa@fdsfs.fr', 'fdsfds', 'dfsfds', 0),
(2, 'yoannklt', 'ouaismagueule', 'ykerlogot@gaming.tech', 'Kerlogot', 'Yoann', 0),
(3, 'eopfghazemnj', 'iofghaezhg', 'eopighazo@gmail.com', 'bzeoifbioza', 'gfzeofgi', 0),
(5, 'oehbogfiei', 'zbhfznfoi', 'zenhozen@gbaoizfb.comzif', 'Kerlogot', 'zoifhoizno', 0),
(6, '', '', '', '', '', 0),
(7, 'yoannklt1', '5898fc860300e228dcd54c0b1045b5fa0dcda502', 'yoannkerlogot9@gmail.com', 'Yoann', 'Kerlogot', 0);

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
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
