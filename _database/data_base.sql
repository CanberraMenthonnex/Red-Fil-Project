-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 02 déc. 2020 à 20:20
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetFilRouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers_survey`
--

CREATE TABLE `answers_survey` (
  `id` int(11) NOT NULL,
  `user_survey` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `message`) VALUES
(1, 'Salut !'),
(2, 'Salut bro !');

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `user_email`, `friend`) VALUES
(1, 'canberra@mail.com', 'lucas@mail.com'),
(2, 'lucas@mail.com', 'canberra@mail.com');

-- --------------------------------------------------------

--
-- Structure de la table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `survey`
--

INSERT INTO `survey` (`id`, `user`, `question`, `answer_1`, `answer_2`, `answer_3`, `answer_4`) VALUES
(1, 'canberra@mail.com', 'Que manger ce midi', 'Kebab', 'Burger', 'Sushi', 'Tacos'),
(2, 'canberra@mail.com', 'Quel match dois-je regarder ?', 'Foot', 'Rugby', 'Karting', 'Beyblade'),
(3, 'lucas@mail.com', 'Quel dragibus est le meilleur ?', 'Rouge', 'Vert', 'Bleu', 'Noir'),
(4, 'lucas@mail.com', 'Dois je la quitter ?', 'Absolument', 'Attends encore', 'Non', 'Bof'),
(5, 'canberra@mail.com', 'Que manger au mcdo ?', 'Big Mac', 'Frites', 'Glace', 'Potatoes'),
(6, 'canberra@mail.com', 'Qui sait mieux coder ?', 'Canberra', 'Armand', 'Lucas', 'Ugur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `pseudo`, `password`, `email`, `status`) VALUES
(1, 'test', 'testName', 'testPseudo', 'Test1', 'test@mail.com', 0),
(2, 'Canberra', 'Menthonnex', 'Patoche', '$2y$10$b4jqGVunPgTuYzAlqu5IKuFGCKI5D73325qnSjHVJDGtQawJs8KT6', 'canberra@mail.com', 0),
(3, 'Lucas', 'Daval', 'Lukaka', '$2y$10$pSals1W2Pacdk0FF5Xe/DusnNuiqqdJY.7moHjY/8hSxmLOMw0O0q', 'lucas@mail.com', 0),
(4, 'Armand', 'Dorard', 'Ericar', '$2y$10$RwtsptijgHuegwVSokWcj.xrUelSPbi8PN8hqiepHm/xvukg4mOSC', 'armand@mail.com', 0),
(5, 'Theo', 'Popelin', 'Teotop', '$2y$10$1lNpfIJFp5af4JnRzt5F6uJVTKNAl/4XaaUlhcTK8ncKyVnBWU1KG', 'theo@mail.com', 0),
(6, 'Jean', 'Neymar', 'Football', '$2y$10$phjJHUO3DZSIQBT8MzyDr.IX70/dKZ8FjjMfl8OnCi6OKW7.amJDi', 'jean@mail.com', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers_survey`
--
ALTER TABLE `answers_survey`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers_survey`
--
ALTER TABLE `answers_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
