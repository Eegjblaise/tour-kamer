-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 30 juil. 2023 à 09:18
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `service`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `susbject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `susbject`, `message`) VALUES
(1, 'gauthier', 'gauthier', 'besoin un site', 'mercide vite me repondre'),
(16, 'jean', 'ekani@gmail.com', 'BESOIN D AIDE ', 'je ne retrouve pas l hotel saint claire');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `nom` varchar(32) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` text,
  `lien` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id`, `image`, `nom`, `prix`, `description`, `lien`) VALUES
(7, 'images/hotels/imf.jpg', 'Akwa hotel', 68385, 'Hôtel convivial avec chambres et suites sobres piscine extérieure.', 'http://localhost/visite/hoteldes3.php'),
(14, 'images/hotels/Hotel1.jpg', 'Hôtel Mont febe', 83151, 'L\'Hôtel Mont febe est situe a une altitude de 950m sur l\'une des collines de la ville', 'http://localhost/visite/hoteldes.php'),
(13, 'images/hotels/marriott.jpg', 'mariotte', 52200, 'Mariotte l\'un des 3 hôtels de luxe de la ville de Douala Capitale économique.', 'http://localhost/visite/hoteldes2.php'),
(12, 'images/hotels/maimg1.jpg', 'hilton', 239118, 'Situe au cœur du quartier des affaires, Hilton est situe a 5km de l\'aéroport.', 'http://localhost/visite/hoteldes1.php');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

DROP TABLE IF EXISTS `loisirs`;
CREATE TABLE IF NOT EXISTS `loisirs` (
  `ID` char(32) NOT NULL,
  `ID_ENREGISTRER` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `CATEGORIE` char(32) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `I_FK_LOISIRS_ADMINISTRATEUR` (`ID_ENREGISTRER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1503866374, 119269926, 'bonjour combie'),
(2, 119269926, 1503866374, 'yep'),
(3, 119269926, 667837990, 'bonjour mon petit'),
(4, 667837990, 1215332711, 'bonjour'),
(5, 1451821126, 1413797938, 'bonjour jean blaise'),
(6, 1413797938, 1451821126, 'oui frere comment tu vas??'),
(7, 1451821126, 1413797938, 'Toi tu es ou depuis per'),
(8, 1413797938, 1451821126, 'mouf ta soeur'),
(9, 1451821126, 1413797938, 'jfubffheufweufe');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `nom` varchar(32) DEFAULT NULL,
  `description` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `image`, `nom`, `description`, `lien`) VALUES
(3, 'images/restau/bacchus.jpg', 'bacchus', 'Est un restaurant bar a vin suisse qui offre a sa clientèle un très bel espace et lui permet de passer d\'agréables moment.\r\n', 'http://localhost/visite/restaudes3.php'),
(4, 'images/restau/kaela.jpg', 'kaela', 'En ce qui concerne le menu, le restaurant chez kaela mets a votre disposition des plats de la gastronomie camerounaise et internationale.', 'http://localhost/visite/restaudes1.php'),
(5, 'images/restau/ovive.jpg', 'Ovive', 'En ce qui concerne le menu, le restaurant O vive met a votre disposition des plats de la gastronomie camerounais.', NULL),
(6, 'images/restau/safoutier.jpg', 'Safoutier', 'Nomme d\'après le célèbre arbre fruitier du Cameroun, le Safoutier, est un restaurant contemporain et lumineux.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text,
  `nom` varchar(32) DEFAULT NULL,
  `description` text,
  `lien` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `image`, `nom`, `description`, `lien`) VALUES
(15, 'images/site/1.jpg', 'Musée National', 'Le Musée national est logé dans l’ancien palais présidentiel.', 'http://localhost/visite/tourdes1.php'),
(17, 'images/des/g2.jpg', 'Les gorges de Kola', 'sont situées sur le territoire de la commune de Guider dans le Nord Cameroun.', 'http://localhost/visite/tourdes3.php'),
(18, 'images/des/dja.jpg', 'Reserve du Dja', 'est une réserve de faune suivant la nomenclature dressée par l’article 24 ', 'http://localhost/visite/tourdes4.php'),
(19, 'images/site/2.jpg', 'Musée de Foumban', 'Encore appelé Le Musée des rois bamouns a une forme ou représente un serpent a 2 têtes.', 'http://localhost/visite/tour.php');

-- --------------------------------------------------------

--
-- Structure de la table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `image`) VALUES
(1, 'David', 'David - 2023.07.15 - 01.15.46pm.png');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `idtemoi` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `nom` text NOT NULL,
  `nationalite` text NOT NULL,
  `temoignage` text NOT NULL,
  PRIMARY KEY (`idtemoi`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`idtemoi`, `image`, `nom`, `nationalite`, `temoignage`) VALUES
(1, 'IMG-20230525-WA0028.jpg', 'jean', 'Camerounaise', 'merci'),
(2, 'IMG-20230525-WA0028.jpg', 'jean', 'Camerounaise', 'merci'),
(3, 'Récupéré.jpg', 'WSEW', 'Suedois', 'HOUPFID6'),
(4, 'PASTEUR.jpg', 'hilton', 'Italiens', 'ytygyun');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1503866374, 'qqqq', 'wwww', 'gauthierekan@gmail.com', '912ec803b2ce49e4a541068d495ab570', '167955388710-Best-Things-to-Do-in-Milan-What-is-Milan-Most-Famous-For-3FfwOMh2M23WdM.jpg', 'Offline now'),
(2, 119269926, 'alibaba', 'jsoos', 'gauthierekan9@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1679553949327063341_533985978709604_4683590134627445280_n.jpg', 'Offline now'),
(3, 667837990, 'jan', 'jsndd', 'gauthier@gmail.com', '08a119757b7c34bd6d549f4975d21ea6', '1679556194MOOMENDAMA.jpg', 'Offline now'),
(4, 1215332711, 'Igl3', 'babidi', 'gauthie@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '16795565092e531b2e-c62a-486f-b1f1-8b3925a54d2d.jpg', 'Offline now'),
(5, 1413797938, 'jean', 'abidi', 'jean@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1679556775MOOMENDAMA.jpg', 'Offline now'),
(6, 1451821126, 'jean ', 'blaise', 'ekani9@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1679556935e17da78e-8bbd-4b80-b577-712e0b7c8ff8.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'ekani', 'jean@gmail.com', '$2y$10$sv99jHtZazxDmV9B124Ugu5XsWwgr91S1heSV.ZzUykPg8DRSSteG', 846266, 'verified'),
(2, 'blaise', 'blaise@gmail.com', '$2y$10$7gpocCMfXcH.6KcTrP2dpeLgY/5BlO9ebrEOvEZyadVNuorXV7t5q', 0, 'verified'),
(3, 'ekani gauthier', 'blais@gmail.com', '$2y$10$OEDT.kVJUcBODgSygHf0muooi4LIVA7.zIAUpfNv8r.tBqgKyXL8G', 523639, 'notverified'),
(4, 'ekani', 'gaut@gmail.com', '$2y$10$DuqeC9v3yWjFBPkLAvWzhOhg1H9YsfmvFxw8c7pgFIUDm2Aaad7Sy', 0, 'verified'),
(5, 'ekani gauthier', 'ekani@gmail.com', '$2y$10$DAdQaNy0GsKCgMmyIOoKoO/gOHm.sgywL1.Wn4HyOKHfpumPS3jNa', 0, 'verified'),
(6, 'madjid', 'gauthie@gmail.com', '$2y$10$.9PenJYF1V4ClDYxbP4V1u6SEYPkTRlcUpR19gy9RIi5btx6NJlbm', 672560, 'notverified'),
(7, 'madjid', 'madjid@gmail.com', '$2y$10$z8hTW3SCbbJs350lvKfa1OzK2hMPdOLVMewNRnw9PWuNRtQIdEkte', 0, 'verified');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
