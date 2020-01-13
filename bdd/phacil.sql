-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 jan. 2020 à 10:21
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phacil`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajout_medicament`
--

DROP TABLE IF EXISTS `ajout_medicament`;
CREATE TABLE IF NOT EXISTS `ajout_medicament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_medicament` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ajout_medicament`
--

INSERT INTO `ajout_medicament` (`id`, `nom_medicament`, `stock`, `photo`, `info`) VALUES
(4, 'Test 2', '30', 'medicaments.jpg', 'Deuxième test'),
(3, 'Test 1', '10', 'test.jpg', 'Premier test');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptionmed`
--

DROP TABLE IF EXISTS `inscriptionmed`;
CREATE TABLE IF NOT EXISTS `inscriptionmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `nummed` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscriptionmed`
--

INSERT INTO `inscriptionmed` (`id`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `nummed`, `email`, `mdp`) VALUES
(2, 'Ouzid', 'Yanny', '8 Avenue Jean Rostand', '95460', 'Ézanville', '5151371', 'yanny.ouzid@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptionphar`
--

DROP TABLE IF EXISTS `inscriptionphar`;
CREATE TABLE IF NOT EXISTS `inscriptionphar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscriptionphar`
--

INSERT INTO `inscriptionphar` (`id`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `email`, `mdp`) VALUES
(1, 'Ouzid', 'Yanny', '8 Avenue Jean Rostand', '95460', 'Ézanville', 'yanny.ouzid@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `postal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `num_med` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `adresse`, `postal`, `ville`, `num_med`, `phone`, `mail`) VALUES
(2, 'Ouzid', 'Yanny', '8 Avenue Jean Rostand', 95460, 'Ézanville', '12353111', '0649604676', 'yanny.ouzid@hotmail.com'),
(3, 'test', 'deuxieme', '8 projet', 89652, 'paris', '123456789', '063525458', 'test@test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
