-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 05 fév. 2018 à 21:19
-- Version du serveur :  10.1.25-MariaDB
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
-- Base de données :  `gesadra`
--

-- --------------------------------------------------------

--
-- Structure de la table `cadre_activation`
--

CREATE TABLE `cadre_activation` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cadre_activation`
--

INSERT INTO `cadre_activation` (`id`, `type`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Structure de la table `main_courante`
--

CREATE TABLE `main_courante` (
  `date_heure` varchar(30) NOT NULL,
  `recu_de` varchar(30) NOT NULL,
  `emis_vers` varchar(30) NOT NULL,
  `degre_urgence` varchar(30) NOT NULL,
  `mode_transmission` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(15) NOT NULL,
  `nom_membre` varchar(15) NOT NULL,
  `prenom_membre` varchar(15) NOT NULL,
  `indicatif_membre` varchar(15) NOT NULL,
  `tel_fixe_perso` varchar(15) NOT NULL,
  `tel_portable_perso` varchar(15) NOT NULL,
  `mail_perso` varchar(40) NOT NULL,
  `tel_fixe_pro` varchar(15) NOT NULL,
  `tel_portable_pro` varchar(15) NOT NULL,
  `mail_pro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membres_reseau`
--

CREATE TABLE `membres_reseau` (
  `id` int(11) NOT NULL,
  `indicatif` varchar(10) NOT NULL,
  `alias_tactique` varchar(15) NOT NULL,
  `operateur` varchar(15) NOT NULL,
  `etat` varchar(15) NOT NULL,
  `commentaire` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `releve_sater`
--

CREATE TABLE `releve_sater` (
  `date_heure` varchar(20) NOT NULL,
  `emeteur` varchar(20) NOT NULL,
  `syst_coor` varchar(100) NOT NULL,
  `datum` varchar(10) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `direction` varchar(30) NOT NULL,
  `signal_releve` varchar(30) NOT NULL,
  `commentaire` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `station_locale`
--

CREATE TABLE `station_locale` (
  `id` int(11) NOT NULL,
  `indicatif` varchar(10) NOT NULL,
  `service` varchar(15) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `departement` varchar(15) NOT NULL,
  `site_implentation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `station_locale`
--

INSERT INTO `station_locale` (`id`, `indicatif`, `service`, `ville`, `departement`, `site_implentation`) VALUES
(1, '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cadre_activation`
--
ALTER TABLE `cadre_activation`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `main_courante`
--
ALTER TABLE `main_courante`
  ADD UNIQUE KEY `date_heure` (`date_heure`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `membres_reseau`
--
ALTER TABLE `membres_reseau`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `releve_sater`
--
ALTER TABLE `releve_sater`
  ADD UNIQUE KEY `date_heure` (`date_heure`);

--
-- Index pour la table `station_locale`
--
ALTER TABLE `station_locale`
  ADD PRIMARY KEY (`indicatif`),
  ADD UNIQUE KEY `indicatif` (`indicatif`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres_reseau`
--
ALTER TABLE `membres_reseau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
