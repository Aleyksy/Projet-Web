-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 avr. 2018 à 07:57
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpweb`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `deplace_idee`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deplace_idee` (IN `id_idee` INT)  BEGIN
    INSERT INTO evenement
        SELECT NULL, Objet, Description, Date_Soumission
        FROM boite_idees
        WHERE ID = id_idee;
      
    DELETE FROM boite_idees WHERE ID = id_idee;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `aime`
--

DROP TABLE IF EXISTS `aime`;
CREATE TABLE IF NOT EXISTS `aime` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Utilisateurs` int(11) NOT NULL,
  `ID_Boite_idees` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Like_ID_Utilisateurs` (`ID_Utilisateurs`),
  KEY `FK_Like_ID_Boite_idees` (`ID_Boite_idees`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aime`
--

INSERT INTO `aime` (`ID`, `ID_Utilisateurs`, `ID_Boite_idees`) VALUES
(4, 2, 8),
(5, 2, 11),
(10, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Article` varchar(25) DEFAULT NULL,
  `Url` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Prix` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ID`, `Article`, `Url`, `Description`, `Prix`) VALUES
(1, 'Coca', 'coca.jpg', ' petite boissoin sucre donnant le cancer', 35),
(2, 'Oasis', 'oasis.jpg', 'boisoin sucre au goue de fruit ', 9.65);

-- --------------------------------------------------------

--
-- Structure de la table `boite_idees`
--

DROP TABLE IF EXISTS `boite_idees`;
CREATE TABLE IF NOT EXISTS `boite_idees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(50) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Date_Soumission` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boite_idees`
--

INSERT INTO `boite_idees` (`ID`, `Objet`, `Description`, `Date_Soumission`) VALUES
(5, 'Bowling', 'On va faire un bowling !', '2018-04-10'),
(8, 'Karting', 'On va faire un Karting !', '2018-04-10'),
(9, 'Piscine', 'On va faire a la  Piscine !', '2018-04-10'),
(10, 'Tennis', 'On va faire un Tennis !', '2018-04-10'),
(11, 'Volet', 'salut', '2018-04-18');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_evenement`
--

DROP TABLE IF EXISTS `commentaire_evenement`;
CREATE TABLE IF NOT EXISTS `commentaire_evenement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Commentaire` varchar(500) DEFAULT NULL,
  `ID_Evenement` int(11) DEFAULT NULL,
  `ID_Utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Commentaire_Evenement_ID_Evenement` (`ID_Evenement`),
  KEY `FK_Commentaire_Evenement_ID_Utilisateurs` (`ID_Utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire_evenement`
--

INSERT INTO `commentaire_evenement` (`ID`, `Commentaire`, `ID_Evenement`, `ID_Utilisateurs`) VALUES
(1, 'fezgegezgezg', 4, 3),
(2, 'efegehgegesggeg', 1, 3),
(3, 'fezgegezgezg', 4, 3),
(4, 'efegehgegesggeg', 1, 3),
(5, 'egeg', 1, 1),
(6, 'egg', 1, 1),
(7, 'egggeg', 1, 1),
(8, 'coucou', 1, 1),
(9, 'salut ', 1, 1),
(10, 'coment sa vas ', 1, 1),
(11, 'bolos', 2, 1),
(12, 'bien et toi ? ', 1, 1),
(13, 'rht', 1, 1),
(14, 'dvdv', 2, 1),
(15, 'y,u,g', 1, 1),
(16, 'j,j,j', 1, 1),
(17, 'J..YIL', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `ID_eve` int(11) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Date_Soumission` date NOT NULL,
  PRIMARY KEY (`ID_eve`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`ID_eve`, `Objet`, `Description`, `Date_Soumission`) VALUES
(1, 'Test', 'Coucou c\'Tes', '2018-04-19'),
(2, 'Test', 'Coucou c\'Tes', '2018-04-08'),
(4, 'Test', 'test', '2018-04-19'),
(5, 'Paintball', 'On va faire un Paintball !', '2018-04-30'),
(6, 'Cube', 'On va faire le Cube !', '2018-04-10'),
(7, 'Bowling', 'On va faire un bowling !', '2018-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) DEFAULT NULL,
  `Link` varchar(500) DEFAULT NULL,
  `ID_Evenement` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Images_ID_Evenement` (`ID_Evenement`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`ID`, `Nom`, `Link`, `ID_Evenement`) VALUES
(1, 'bolos', 'event2.jpg', 5),
(3, 'sympas', 'event2.jpg', 1),
(4, 'sympastic', 'event2.jpg', 4),
(5, 'sympasto', 'event2.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `like_evenement`
--

DROP TABLE IF EXISTS `like_evenement`;
CREATE TABLE IF NOT EXISTS `like_evenement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Evenement` int(11) DEFAULT NULL,
  `ID_Utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Like_Evenement_ID_Evenement` (`ID_Evenement`),
  KEY `FK_Like_Evenement_ID_Utilisateurs` (`ID_Utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `like_evenement`
--

INSERT INTO `like_evenement` (`ID`, `ID_Evenement`, `ID_Utilisateurs`) VALUES
(1, 5, 2),
(2, 5, 1),
(6, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Quantite` int(11) DEFAULT NULL,
  `ID_Article` int(11) DEFAULT NULL,
  `ID_Utilisateurs` int(11) NOT NULL,
  `Date_commande` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_Panier_ID_Article` (`ID_Article`),
  KEY `FK_Panier_ID_Utilisateurs` (`ID_Utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID`, `Quantite`, `ID_Article`, `ID_Utilisateurs`, `Date_commande`) VALUES
(31, NULL, 2, 1, '2018-04-19 09:14:10'),
(32, NULL, 1, 1, '2018-04-19 09:31:15'),
(33, NULL, 2, 1, '2018-04-19 09:31:15');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Image` varchar(50) DEFAULT NULL,
  `Mail` varchar(100) NOT NULL,
  `Admin` int(11) NOT NULL DEFAULT '1',
  `Password` varchar(50) NOT NULL,
  `Date_Inscription` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `Nom`, `Image`, `Mail`, `Admin`, `Password`, `Date_Inscription`) VALUES
(1, 'nico', NULL, 'corentin.paul@viacesi.fr', 1, 'AÁQS¦ßð¾ØQFs	¼½', '2018-04-10'),
(2, 'paul', NULL, 'antoine.paul@viacesi.fr', 1, 'lc!*´Ž„êöµ›•Ø©', '2018-04-10'),
(3, 'coco', NULL, 'corentin.paul@viacesi.fr', 1, '¬\rßžeÕ{jV²E3†Í]µ', '2018-04-14');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aime`
--
ALTER TABLE `aime`
  ADD CONSTRAINT `FK_Like_ID_Boite_idees` FOREIGN KEY (`ID_Boite_idees`) REFERENCES `boite_idees` (`ID`),
  ADD CONSTRAINT `FK_Like_ID_Utilisateurs` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`);

--
-- Contraintes pour la table `commentaire_evenement`
--
ALTER TABLE `commentaire_evenement`
  ADD CONSTRAINT `FK_Commentaire_Evenement_ID_Evenement` FOREIGN KEY (`ID_Evenement`) REFERENCES `evenement` (`ID_eve`),
  ADD CONSTRAINT `FK_Commentaire_Evenement_ID_Utilisateurs` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_Images_ID_Evenement` FOREIGN KEY (`ID_Evenement`) REFERENCES `evenement` (`ID_eve`);

--
-- Contraintes pour la table `like_evenement`
--
ALTER TABLE `like_evenement`
  ADD CONSTRAINT `FK_Like_Evenement_ID_Evenement` FOREIGN KEY (`ID_Evenement`) REFERENCES `evenement` (`ID_eve`),
  ADD CONSTRAINT `FK_Like_Evenement_ID_Utilisateurs` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_Panier_ID_Article` FOREIGN KEY (`ID_Article`) REFERENCES `article` (`ID`),
  ADD CONSTRAINT `FK_Panier_ID_Utilisateurs` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
