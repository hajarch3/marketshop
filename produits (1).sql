-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 jan. 2023 à 03:14
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
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_prod` int(200) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(200) NOT NULL,
  `promo` int(10) NOT NULL,
  `id_client` int(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantite` int(100) NOT NULL,
  `souscategory` varchar(100) NOT NULL,
  `sscategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_prod`, `img`, `nom`, `prix`, `promo`, `id_client`, `category`, `quantite`, `souscategory`, `sscategory`) VALUES
(1, 'lit1.png', 'Lits', 400, 0, 0, 'home', 10, 'cuisine', 'arts de table'),
(14, 'frigo.png', 'salam', 1456, 0, 0, 'home', 12, 'chambres', 'lits'),
(112, '', ',,', 0, 0, 0, 'electro', 0, 'cuisine', 'cuisine'),
(122, 'appareil.png', '124', 145, 0, 0, 'electro', 0, 'Tv', 'Accessoirestv'),
(123, 'apwatch.jpeg', 'jj jj', 1569, 0, 0, 'home', 2, 'chambres', 'matelas'),
(144, 'apwatch.jpeg', 'nnbcc', 11, 0, 0, 'electro', 0, 'mobile', 'Smartphones'),
(188, 'Capture d’écran 2023-01-24 145016.png', 'll', 145, 0, 0, 'electro', 0, 'informatique', 'périphérique'),
(999, 'apwatch.jpeg', 'nnbcc', 11, 0, 0, 'electro', 0, 'camera et drones', 'Caméras'),
(1225, 'casque.webp', 'mmm', 54156, 0, 0, 'vetement', 0, 'hommes', 'vestes'),
(1235, 'appareil.png', 'pp', 1, 0, 0, 'electro', 0, 'informatique', 'imprimantes'),
(1254, 'clavier.webp', 'mmm', 100, 0, 0, 'electro', 1236, 'Tv', 'Téléviseurs'),
(1459, 'appareil de cuisine.png', 'kk', 1569, 0, 0, 'home', 2, 'chambres', 'couvertures'),
(2455, 'artliiien.jpg', 'll', 178, 0, 0, 'electro', 1, 'Tv', 'Vidéoprojecteurs'),
(4569, 'apwatch.jpeg', '124', 458, 0, 0, 'electro', 132, 'Tv', 'Accessoires'),
(12365, 'gadgets2.png', 'mmm', 11, 14, 0, 'home', 0, 'chambres', 'Rideaux'),
(12533, 'clavier.webp', 'mmm', 100, 0, 0, 'electro', 1236, 'Tv', 'Téléviseurs'),
(14414, 'apwatch.jpeg', 'nnbcc', 11, 0, 0, 'electro', 0, 'mobile', 'Tablettes'),
(14789, 'chemise3.png', 'kk', 1569, 0, 0, 'vetement', 2, 'hommes', 'chemises'),
(99988, 'apwatch.jpeg', 'nnbcc', 11, 0, 0, 'electro', 0, 'camera et drones', 'Caméras'),
(145900, 'chemise3.png', 'kk', 1569, 0, 0, 'vetement', 2, 'hommes', 'pantalons'),
(145978, 'artliiien.jpg', 'kk', 1569, 0, 0, 'home', 2, 'chambres', 'rideaux'),
(456917, 'apwatch.jpeg', '124', 458, 0, 0, 'electro', 132, 'Tv', 'Accessoires'),
(1236988, 'bomaker.webp', 'kkh', 12, 0, 0, 'electro', 0, 'informatique', 'ordinateur'),
(12345677, 'assiette.png', 'nnkl', 0, 0, 0, 'electro', 0, 'camera et drones', 'Smartphones'),
(14414145, 'apwatch.jpeg', 'nnbcc', 11, 0, 0, 'electro', 0, 'mobile', 'Objets Connectés'),
(123456771, 'assiette.png', 'nnkl', 0, 0, 0, 'electro', 0, 'mobile', 'Smartphones');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `index` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
