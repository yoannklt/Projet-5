-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 21:53
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
('Pour nous contacter :', 'Qui souhaite nous contacter ?', 'Pourquoi voulez vous nous contacter ?', 'Comment pouvons nous vous aider ?', 'Envoyer');

-- --------------------------------------------------------

--
-- Structure de la table `homepage`
--

CREATE TABLE `homepage` (
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
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

INSERT INTO `homepage` (`h1`, `h2`, `button`, `parallax`, `img_card1`, `img_card2`, `span_card1`, `span_card2`, `p_card1`, `p_card2`) VALUES
('Samantha & Yoann', 'Nos Projets', 'Voir Plus', 'img/yoann-sam.jpg', 'img/sam-gang.jpg', 'img/yoan.png', 'Samantha', 'Yoann', 'Salut, moi c\'est ZanZam', 'Salut, moi c\'est Yoyo le desco');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `objet` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mail`
--

INSERT INTO `mail` (`mail_id`, `email`, `objet`, `content`) VALUES
(32, 'samantha@mail.com', 'Bonjour', 'Je suis ravie de vous rencontrer');

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
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`projects_id`, `parallax1`, `h1`, `h2_title`, `p1`, `img_card`, `p_card`, `parallax2`, `img_game`, `h2_game`, `p2`, `img`) VALUES
(1, 'img/programming.jpg', 'PROJET HTML & CSS', 'CRÉATION D\'UN SITE INTERNET SUR OVERWATCH', 'Ce projet est le premier de notre scolarité en tant qu\'élève GTech du Gaming Campus. Le but du projet était de réaliser un site internet de notre jeu vidéo préféré en utilisant les premiers langages de codage de page web : le HTML et le CSS. Venant de sortir, la suite du premier opus nous à redonner envie de jouer à celui-ci c\'est donc naturellement que nous avons choisis Overwatch 2. Le site était assez simple à créer mais les points ont surtout été perdu sur l\'optimisation. Nous avons beaucoup appris sur ces deux langages de programmation et même si le site est loin d\'être parfait on s\'est bien amusé et il nous tiens a coeur car c\'est le premier projet qu\'on à réalisé et on en était plutôt fièrs !', 'img/site-overwatch.png', 'Projet réalisé en coopération par Samantha et Yoann.', 'img/image-jeu-video-random.jpg', 'img/overwatch-team.jpg', 'SITE INTERNET SUR LE THÈME D\'OVERWATCH', 'Le site était censé être sur Zelda Breath of the Wild mais la sortie récente d\'Overwatch 2 nous a influencé dans sa création. Nous sommes fiers du rendu qui est propre et épuré.', 'img/overwatch2.png'),
(2, 'img/video-game-1.jpg', 'PROJET TIC-80 EN LUA', 'CRÉATION D\'UN JEU SUR TIC-80', 'Ce projet à démarré dans le cadre du bootcamp organisé par David Merkesa, du mardi et mercredi 4 et 5 octobre 2022. Lors de ce bootcamp, l\'intervenant est venu présenter le logiciel Tic-80, une simulation de console qui sert à créer des petits jeux vidéos. En effet, la finalité a été de commencer à réaliser jeu vidéo en lua. Mon concept est que nous sommes un petit cheval qui saute par dessus des obstacles. Le jeu n\'est pas du tout fini, les collisions ne sont pas faites mais ce bootcamp reste une exprérience très enrichissante.', 'img/logo-tic80.png', 'Projet réalisé par Samantha.', 'img/game-room.jpg', 'img/dino-game.png', 'INSPIRÉ DU JEU DU DINOSAURE DE GOOGLE', 'Je suis partie sur un remake du dinosaure de Google. Mais aussi, lorsque j\'étais en 4ème j\'avais créer un jeu sur scratch du même concept donc on peut dire que c\'est sa version améliorée.', 'img/tic-jeu-sam2.png'),
(3, 'img/video-game.jpg', 'PROJET TIC-80 EN LUA', 'CRÉATION D\'UN JEU SUR TIC-80', 'Ce projet à démarré dans le cadre du bootcamp organisé par David Merkesa, du mardi et mercredi 4 et 5 octobre 2022. Lors de ce bootcamp, l\'intervenant est venu présenter le logiciel Tic-80, une simulation de console qui sert à créer des petits jeux vidéos. En effet, la finalité a été de commencer à réaliser jeu vidéo en lua. La difficulté à été de programmer les ennemies à ce qu\'ils tirent des projectiles, qu\'ils soient indépendants et de faire des collisions entres les différents sprites.', 'img/logo-tic80.png', 'Projet réalisé par Yoann.', 'img/video-game-3.jpg', 'img/space-invader.jpg', ' INSPIRÉ DE SPACE INVADER', 'En effet le but était de créer un jeu simple, je suis donc parti sur un type de jeu d\'arcade avec peu d\'élément et un gameplay attractif.', 'img/tic-jeu-sam1.png');

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
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
