-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 mars 2023 à 08:09
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
-- Base de données : `chatapp`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
