-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 fév. 2021 à 14:50
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `comouv`
--

-- --------------------------------------------------------

--
-- Structure de la table `participations`
--

CREATE TABLE `participations` (
  `id` int(11) NOT NULL,
  `trajet_id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participations`
--

INSERT INTO `participations` (`id`, `trajet_id`, `nom`, `prenom`, `email`) VALUES
(1, 9, 'DENIS', 'Alain', 'alain.denis@gmail.com'),
(3, 5, 'DENIS', 'Mario', 'alain.denis@gmail.com'),
(4, 5, 'Villa', 'Alain', 'mario@test.fr'),
(5, 18, 'Dickinson', 'Woodrow', 'your.email+fakedata92419@gmail.com'),
(6, 5, 'Erdman', 'Zackary', 'your.email+fakedata61446@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `trajets`
--

CREATE TABLE `trajets` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `ville_depart` varchar(255) NOT NULL,
  `ville_arrivee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trajets`
--

INSERT INTO `trajets` (`id`, `nom`, `prenom`, `email`, `modele`, `marque`, `date_depart`, `heure_depart`, `ville_depart`, `ville_arrivee`) VALUES
(5, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Renault', 'Twingo', '2021-02-26', '09:00:00', 'Nancy', 'Metz'),
(6, 'MARTIN', 'Syvlie', 'martinsylvie@mail.mail', 'Peugeot', '307', '2021-03-10', '15:00:00', 'Paris', 'Rennes'),
(7, 'MARTIN', 'Syvlie', 'martinsylvie@mail.mail', 'Logan', 'Dacia', '2020-03-10', '15:00:00', 'Paris', 'Rennes'),
(8, 'MARTIN', 'Syvlie', 'martinsylvie@mail.mail', 'Logan', 'Dacia', '2021-02-18', '08:00:00', 'Paris', 'Nantes'),
(9, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Renault', 'Twingo', '2021-02-26', '09:00:00', 'Lyon', 'Marseille'),
(10, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Clio', '', '0000-00-00', '00:00:00', '', ''),
(11, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Clio', '', '0000-00-00', '00:00:00', '', ''),
(12, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Clio', '', '0000-00-00', '00:00:00', '', ''),
(13, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', 'Clio', '', '0000-00-00', '00:00:00', '', ''),
(14, 'MARTIN', 'Julien', 'julien@gmail.com', 'Picasso', '', '0000-00-00', '00:00:00', '', ''),
(15, 'MARTIN', 'Julien', 'test@test', 'Clio', '', '0000-00-00', '00:00:00', '', ''),
(16, 'FRANCOIS', 'Gilles', 'gilles.francois@sopress.net', '', '', '0000-00-00', '00:00:00', '', ''),
(17, 'Gorczany', 'Orlo', 'your.email+fakedata73560@gmail.com', 'C3', '', '0000-00-00', '00:00:00', '', ''),
(18, 'Gorczany', 'Orlo', 'your.email+fakedata73560@gmail.com', 'i8', 'BMW', '2021-11-08', '17:30:00', 'Daltontown', 'Lake Delphia');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `participations`
--
ALTER TABLE `participations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trajets`
--
ALTER TABLE `trajets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `participations`
--
ALTER TABLE `participations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `trajets`
--
ALTER TABLE `trajets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
