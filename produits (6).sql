-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 jan. 2023 à 00:52
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

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
(1, 'lit1.png', 'lit', 3000, 20, 0, 'home', 100, 'chambres', 'lits'),
(2, 'lit.png', 'lit', 1000, 0, 0, 'home', 100, 'chambres', 'lits'),
(3, 'lit2.png', 'lit', 2000, 20, 0, 'home', 100, 'chambres', 'lits'),
(4, 'couverture3.png', 'couverture', 600, 20, 0, 'home', 100, 'chambres', 'couvertures'),
(5, 'casseroles.png', 'casserole', 200, 0, 0, 'home', 100, 'cuisine', 'arts de table'),
(6, 'cocotte.png', 'cocotte', 180, 0, 0, 'home', 100, 'cuisine', 'arts de table'),
(7, 'ensembe.jpg', 'ensemble blanc', 300, 0, 0, 'home', 100, 'cuisine', 'arts de table'),
(8, 'couverture4.png', 'couverture', 200, 0, 0, 'home', 100, 'chambres', 'couvertures'),
(9, 'forchette.png', 'forchette', 100, 0, 0, 'home', 100, 'cuisine', 'arts de table'),
(10, 'rideaux1.png', 'Rideaux', 200, 0, 0, 'home', 100, 'chambres', 'Rideaux'),
(11, 'rideaux4.png', 'Rideaux', 500, 0, 0, 'home', 0, 'chambres', 'Rideaux'),
(12, 'rideaux5.png', 'Rideaux', 400, 0, 0, 'home', 0, 'chambres', 'Rideaux'),
(13, 'matelas1.png', 'matelas', 900, 0, 0, 'home', 0, 'chambres', 'matelas'),
(14, 'matelas2.png', 'matelas', 800, 0, 0, 'home', 0, 'chambres', 'matelas'),
(15, 'matelas3.png', 'matelas', 700, 0, 0, 'home', 0, 'chambres', 'matelas'),
(16, 'gadgets4.jpeg', 'gadget', 100, 0, 0, 'home', 200, 'cuisine', 'gadgets'),
(17, 'gadgets2.png', 'gadget', 200, 0, 0, 'home', 200, 'cuisine', 'gadgets'),
(18, 'gadgets3.png', 'gadget', 150, 0, 0, 'home', 200, 'cuisine', 'gadgets'),
(19, 'appareil de cuisine.png', 'appareil de cuisine', 300, 0, 0, 'home', 200, 'cuisine', 'gadgets'),
(20, 'lavelinge.png', 'lave linge', 4000, 0, 0, 'home', 100, 'cuisine', 'machine'),
(21, 'frigo.png', 'frigo', 5000, 0, 0, 'home', 0, 'cuisine', 'machine'),
(22, 'silvercrest robot de cuisine.png', 'machine', 1700, 0, 0, 'home', 100, 'cuisine', 'machine'),
(23, 'machine a jus.png', 'machine a jus', 2600, 0, 0, 'home', 100, 'cuisine', 'machine'),
(24, 'pantalonh1.png', 'pantalon', 200, 10, 0, 'vetement', 200, 'hommes', 'pantalons'),
(25, 'pantalonh2.png', 'pantalon', 180, 0, 0, 'vetement', 300, 'hommes', 'pantalons'),
(26, 'pantalonh3.png', 'pantalon noir', 1220, 0, 0, 'vetement', 300, 'hommes', 'pantalons'),
(27, 'veste1.png', 'veste', 300, 0, 0, 'vetement', 300, 'hommes', 'vestes'),
(28, 'veste2.png', 'veste', 400, 20, 0, 'vetement', 300, 'hommes', 'vestes'),
(29, 'veste3.png', 'veste', 430, 10, 0, 'vetement', 300, 'hommes', 'vestes'),
(30, 'chemise1.png', 'chemise', 220, 0, 0, 'vetement', 300, 'hommes', 'chemises'),
(31, 'chemise2.png', 'chemise', 150, 0, 0, 'vetement', 300, 'hommes', 'chemises'),
(32, 'chemise3.png', 'chemise', 200, 0, 0, 'vetement', 300, 'hommes', 'chemises'),
(33, 'chemise4.png', 'chemise', 180, 0, 0, 'vetement', 300, 'hommes', 'chemises'),
(34, 'chromebook.webp', 'chrome book', 7000, 0, 0, 'electro', 60, 'informatique', 'ordinateur'),
(35, 'Macdesktop.jpg', 'mac desktop ', 10000, 0, 0, 'electro', 40, 'informatique', 'ordinateur'),
(36, 'MSIordi1.png', 'msiordi', 13000, 0, 0, 'electro', 40, 'informatique', 'ordinateur'),
(37, 'imprimante1.jpg', 'imprimante', 8000, 0, 0, 'electro', 20, 'informatique', 'imprimantes'),
(38, 'imprimante3d.jpg', 'imprimante 3d', 20000, 0, 0, 'electro', 0, 'informatique', 'imprimantes'),
(39, 'ipadm.jpeg', 'ipadm', 9000, 0, 0, 'electro', 0, 'mobile', 'Tablettes'),
(40, 'epson.jpg', 'epson', 7000, 0, 0, 'electro', 0, 'informatique', 'imprimantes'),
(41, '', 'camera', 9000, 0, 0, 'electro', 0, 'camera et drones', 'Caméras'),
(42, 'dji.webp', 'dron', 13000, 0, 0, 'electro', 0, 'camera et drones', 'Drones'),
(43, 'bomaker.webp', 'bomaker', 9000, 0, 0, 'electro', 100, 'camera et drones', 'Caméras'),
(44, 'ipadp.jpeg', 'ipadp', 9000, 0, 0, 'electro', 100, 'mobile', 'Tablettes'),
(45, 'awatch8.jpeg', 'awatch', 400, 0, 0, 'electro', 100, 'mobile', 'Objets Connectés'),
(46, 'apwatch.jpeg', 'apwatch', 500, 0, 0, 'electro', 200, 'mobile', 'Accessoirestv'),
(47, 'awatch8.jpeg', 'awatch', 500, 0, 0, 'electro', 200, 'mobile', 'Accessoirestv'),
(48, 'clavier.webp', 'clavier', 500, 0, 0, 'electro', 200, 'informatique', 'périphérique'),
(49, 'huawei.webp', 'huawei', 5000, 0, 0, 'electro', 0, 'mobile', 'Smartphones'),
(50, 'convhdmi.jpg', 'video projecteur', 6000, 0, 0, 'electro', 799, 'Tv', 'Vidéoprojecteurs'),
(52, 'nikonn.jpg', 'camera nikon', 8000, 0, 0, 'electro', 222, 'camera et drones', 'Caméras'),
(53, 'LG86.webp', 'camera nikon', 7000, 0, 0, 'electro', 222, 'Tv', 'Téléviseurs'),
(54, 'philips.webp', 'television', 7000, 0, 0, 'electro', 222, 'Tv', 'Téléviseurs'),
(55, 'rokutcl.jpeg', 'television', 6000, 0, 0, 'electro', 222, 'Tv', 'Téléviseurs'),
(56, 'skyrider.jpeg', 'skyrider', 5000, 0, 0, 'electro', 200, 'camera et drones', 'Drones'),
(57, 'souris.jpg', 'souris', 200, 0, 0, 'electro', 200, 'informatique', 'périphérique'),
(58, 'casque.webp', 'casque', 300, 0, 0, 'electro', 200, 'informatique', 'périphérique');

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
