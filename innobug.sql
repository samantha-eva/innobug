-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 mai 2021 à 14:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `innobug`
--

-- --------------------------------------------------------

--
-- Structure de la table `bug`
--

DROP TABLE IF EXISTS `bug`;
CREATE TABLE IF NOT EXISTS `bug` (
  `idBug` int(11) NOT NULL AUTO_INCREMENT,
  `idNiveau` int(11) NOT NULL,
  `idTicket` int(11) NOT NULL,
  PRIMARY KEY (`idBug`),
  KEY `idNiveau` (`idNiveau`),
  KEY `idTicket` (`idTicket`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idPersonne` int(11) NOT NULL,
  `statut_societe` varchar(50) DEFAULT NULL,
  `nom_contact` varchar(50) DEFAULT NULL,
  `prenon_contact` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idPersonne`, `statut_societe`, `nom_contact`, `prenon_contact`, `email_contact`) VALUES
(6, 'innosys', 'salinier', 'Francois', 'saliner@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `debugeur`
--

DROP TABLE IF EXISTS `debugeur`;
CREATE TABLE IF NOT EXISTS `debugeur` (
  `idPersonne` int(11) NOT NULL,
  `statut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `debugeur`
--

INSERT INTO `debugeur` (`idPersonne`, `statut`) VALUES
(1, ' ROLE_STAGIARE '),
(2, 'ROLE_SALARIÉ'),
(3, ' ROLE_APPRENTIE ');

-- --------------------------------------------------------

--
-- Structure de la table `developpeur`
--

DROP TABLE IF EXISTS `developpeur`;
CREATE TABLE IF NOT EXISTS `developpeur` (
  `idPersonne` int(11) NOT NULL,
  `specialite` varchar(50) DEFAULT NULL,
  `annee_exp` date DEFAULT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `developpeur`
--

INSERT INTO `developpeur` (`idPersonne`, `specialite`, `annee_exp`) VALUES
(4, ' BACK-END', '2021-05-07'),
(5, ' BACK-END', '2021-05-10');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210512212909', '2021-05-12 21:29:30', 82),
('DoctrineMigrations\\Version20210513234607', '2021-05-13 23:46:14', 104),
('DoctrineMigrations\\Version20210514002928', '2021-05-14 00:29:33', 68),
('DoctrineMigrations\\Version20210514004201', '2021-05-14 00:42:05', 32),
('DoctrineMigrations\\Version20210514141209', '2021-05-14 14:12:18', 104);

-- --------------------------------------------------------

--
-- Structure de la table `niveau_bug`
--

DROP TABLE IF EXISTS `niveau_bug`;
CREATE TABLE IF NOT EXISTS `niveau_bug` (
  `idNiveau` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNiveau`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `roles` varchar(255) NOT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `nom`, `email`, `password`, `adresse`, `telephone`, `roles`) VALUES
(1, 'Joyce Wu', 'wu@gmail.com', 'test', '20 rue auber', 670143587, 'debugeur'),
(2, 'Marcel bragance', 'mar@hotmail.fr', 'test', '20 rue du paradis', 670143584, 'debugeur'),
(3, 'samantha thiebaut', 'mar@hotmail.fr', 'test', '20 rue du paradis', 670143589, 'debugeur'),
(4, 'Benjamin macias', 'bmacias@gmail.com', 'test', '75 rue du soleil', 142103025, 'developpeur'),
(5, 'Eric Pruss', 'eric.pruss@gmail.com', 'test', '20 rue auber', 670143587, 'developpeur'),
(6, 'Assurmix', 'assurmix@hotmail.fr', 'test', '9 rue auber', 142359678, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

DROP TABLE IF EXISTS `piece_jointe`;
CREATE TABLE IF NOT EXISTS `piece_jointe` (
  `idPj` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `url_pj` varchar(50) DEFAULT NULL,
  `idRapport` int(11) NOT NULL,
  PRIMARY KEY (`idPj`),
  KEY `idRapport` (`idRapport`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `Id_Projet` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dateCreation` date DEFAULT NULL,
  `cloture` date DEFAULT NULL,
  `idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`Id_Projet`),
  KEY `idPersonne` (`idPersonne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `idRapport` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  `date_rapport` date DEFAULT NULL,
  `idTicket` int(11) NOT NULL,
  PRIMARY KEY (`idRapport`),
  KEY `idTicket` (`idTicket`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `idStatut` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idStatut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `idTicket` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `date_ticket` date DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `statut_acteul_id` int(11) DEFAULT NULL,
  `idStatut` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  `Id_Projet` int(11) NOT NULL,
  PRIMARY KEY (`idTicket`),
  KEY `idStatut` (`idStatut`),
  KEY `idPersonne` (`idPersonne`),
  KEY `Id_Projet` (`Id_Projet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `valider`
--

DROP TABLE IF EXISTS `valider`;
CREATE TABLE IF NOT EXISTS `valider` (
  `Id_Projet` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`Id_Projet`,`idPersonne`),
  KEY `idPersonne` (`idPersonne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
