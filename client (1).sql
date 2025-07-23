-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 29 jan. 2023 à 15:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id-client` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` char(50) NOT NULL,
  `telephone` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `poste` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id-client`, `nom`, `prenom`, `email`, `telephone`, `password`, `poste`) VALUES
(27, 'imane', 'amrani', 'imaneamrani@gmail.com', 604053298, 'imane123', NULL),
(28, 'inas', 'ahmadi', 'inas21@gmail.com', 75645125, '0000000', NULL),
(29, 'ali', 'bakkali', 'alibakkali@gmail.com', 604589872, '00000', NULL),
(30, 'salim', 'naimi', 'salim200@gmail.com', 21264869, '00000', NULL),
(31, 'salman', 'nabil', 'salman12@gmail.com', 14586, '0000', NULL),
(32, 'bolif', 'khouloud', 'khouloudbolif@gmail.com', 70456892, '123456', 'admin'),
(33, 'anas', 'amrani', 'anas@gmail.com', 75896412, '123456', NULL),
(34, 'amal', 'omari', 'amalomari1@gmail.com', 745689533, '123456', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id-client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id-client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
