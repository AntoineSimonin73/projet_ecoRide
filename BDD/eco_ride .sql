-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 18 juin 2025 à 12:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eco_ride`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `destinataire_id` int(11) DEFAULT NULL,
  `covoiturage_id` int(11) DEFAULT NULL,
  `note` int(11) NOT NULL,
  `commentaires` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `is_valide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `auteur_id`, `destinataire_id`, `covoiturage_id`, `note`, `commentaires`, `date`, `is_valide`) VALUES
(24, 247, 239, 516, 3, 'Repellat quo itaque aut numquam similique ducimus.', '2025-05-09', 1),
(25, 239, 243, 526, 4, 'Consequatur dicta est optio autem distinctio.', '2025-05-21', 1),
(26, 246, 245, 533, 2, 'In ut laudantium possimus tenetur et dolor debitis.', '2025-05-17', 1),
(28, 240, 244, 522, 3, 'Autem doloribus consectetur architecto veritatis et qui eaque.', '2025-04-26', 1),
(29, 238, NULL, 542, 5, '', '2025-05-27', 1),
(30, 238, NULL, 541, 4, '', '2025-05-27', 1),
(31, 238, 250, 543, 5, '', '2025-05-27', 1),
(32, 238, 250, 544, 5, 'Super !', '2025-05-27', 1),
(33, 238, 250, 545, 5, '', '2025-05-27', 1),
(34, 238, 250, 546, 5, '', '2025-05-27', 1),
(35, 238, 250, 547, 3, '', '2025-05-27', 1),
(36, 238, 250, 548, 4, '', '2025-05-27', 1),
(37, 238, 250, 549, 5, 'Super !', '2025-05-28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage`
--

CREATE TABLE `covoiturage` (
  `id` int(11) NOT NULL,
  `chauffeur_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `adresse_depart` varchar(255) NOT NULL,
  `adresse_arrivee` varchar(255) NOT NULL,
  `date_depart` datetime NOT NULL,
  `date_arrivee` datetime NOT NULL,
  `heure_depart` varchar(5) NOT NULL,
  `heure_arrivee` varchar(5) NOT NULL,
  `is_ecologique` tinyint(1) NOT NULL,
  `places_restantes` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'en_attente',
  `problemes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`problemes`)),
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `covoiturage`
--

INSERT INTO `covoiturage` (`id`, `chauffeur_id`, `vehicule_id`, `adresse_depart`, `adresse_arrivee`, `date_depart`, `date_arrivee`, `heure_depart`, `heure_arrivee`, `is_ecologique`, `places_restantes`, `prix`, `status`, `problemes`, `is_archived`) VALUES
(506, 239, 198, '12, avenue Ollivier\n30854 Faure-sur-Duhamel', '98, place Navarro\n37317 Delmas', '2025-06-12 15:45:00', '2025-06-12 19:45:00', '15h45', '19h45', 0, 3, 43, 'en_attente', '[]', 0),
(507, 241, 200, '4, avenue Camus\n00905 Andre-sur-Le Gall', 'avenue Jacques Lejeune\n92972 VasseurVille', '2025-06-17 11:45:00', '2025-06-17 12:45:00', '11h45', '12h45', 0, 1, 49, 'en_attente', '[]', 0),
(508, 240, 199, '19, rue Dubois\n59091 FrancoisBourg', '2, boulevard Leclercq\n47872 Roy', '2025-05-07 12:30:00', '2025-05-07 14:30:00', '12h30', '14h30', 0, 2, 30, 'en_attente', '[]', 0),
(509, 247, 206, 'rue Le Goff\n32375 Lacombe-sur-Prevost', '63, place de Launay\n03357 Boulanger-sur-Cousin', '2025-05-10 12:45:00', '2025-05-10 15:45:00', '12h45', '15h45', 0, 5, 32, 'en_attente', '[]', 0),
(510, 242, 201, '6, chemin Marcelle Delmas\n86611 Lambert', '76, impasse de Vincent\n28479 Delattre', '2025-05-08 10:30:00', '2025-05-08 14:30:00', '10h30', '14h30', 0, 2, 36, 'en_attente', '[]', 0),
(511, 246, 205, '993, chemin de Riou\n36308 MarquesVille', '92, avenue Denise Joubert\n47542 Lefebvre', '2025-05-09 17:00:00', '2025-05-09 22:00:00', '17h00', '22h00', 0, 2, 17, 'en_attente', '[]', 0),
(512, 242, 201, 'chemin Delmas\n73398 Parent-sur-Lenoir', '8, rue Launay\n21064 Blot', '2025-06-21 08:45:00', '2025-06-21 12:45:00', '08h45', '12h45', 0, 0, 8, 'en_attente', '[]', 0),
(513, 245, 204, 'place de Delattre\n12253 LeleuBourg', '72, impasse de Clerc\n40476 RiouVille', '2025-05-29 11:30:00', '2025-05-29 14:30:00', '11h30', '14h30', 0, 1, 20, 'en_attente', '[]', 0),
(514, 247, 206, '31, chemin de Caron\n96258 Duval', '3, rue de Germain\n62646 Rocher', '2025-05-24 12:15:00', '2025-05-24 14:15:00', '12h15', '14h15', 0, 1, 28, 'en_attente', '[]', 0),
(515, 246, 205, '27, chemin Arnaude Perrin\n13683 Germain', '75, place Danielle Schneider\n83306 Bazin-la-Forêt', '2025-06-05 17:15:00', '2025-06-05 22:15:00', '17h15', '22h15', 0, 2, 19, 'en_attente', '[]', 0),
(516, 239, 198, 'place Joséphine Benard\n56919 Ribeiro', '365, impasse Hélène Roger\n72900 Lenoir', '2025-05-20 10:00:00', '2025-05-20 14:00:00', '10h00', '14h00', 0, 2, 10, 'en_attente', '[]', 0),
(517, 240, 199, 'impasse Perrot\n71679 Masson', '66, chemin Jeanne Lemoine\n17415 Pruvost', '2025-05-04 09:30:00', '2025-05-04 11:30:00', '09h30', '11h30', 0, 0, 39, 'en_attente', '[]', 0),
(518, 245, 204, '31, impasse de Lagarde\n27308 Breton', '97, avenue de Schmitt\n45163 Pires-sur-Lebon', '2025-06-06 11:45:00', '2025-06-06 15:45:00', '11h45', '15h45', 0, 4, 20, 'en_attente', '[]', 0),
(519, 238, 197, '58, place de Rolland\n22920 Guichardboeuf', '463, chemin Philippe Didier\n84195 Lecomte-sur-Bonnin', '2025-05-04 06:45:00', '2025-05-04 07:45:00', '06h45', '07h45', 0, 5, 27, 'en_attente', '[]', 0),
(520, 240, 199, '6, rue Bigot\n14013 Chauveau', '64, place de Ramos\n70590 GalletBourg', '2025-05-26 07:45:00', '2025-05-26 10:45:00', '07h45', '10h45', 0, 1, 23, 'en_attente', '[]', 0),
(521, 242, 201, '36, rue Carre\n63833 Perrot', '68, place de Chevallier\n41078 Pinto-les-Bains', '2025-06-11 19:15:00', '2025-06-11 21:15:00', '19h15', '21h15', 0, 3, 40, 'en_attente', '[]', 0),
(522, 244, 203, '9, rue Courtois\n54408 RemyVille', '65, place Blanchet\n87029 Imbert', '2025-05-13 19:30:00', '2025-05-13 20:30:00', '19h30', '20h30', 0, 2, 33, 'en_attente', '[]', 0),
(523, 241, 200, '8, rue Carlier\n77821 Moreno', '9, rue Eugène Seguin\n31719 Baron', '2025-06-03 06:45:00', '2025-06-03 08:45:00', '06h45', '08h45', 0, 2, 45, 'en_attente', '[]', 0),
(524, 243, 202, '22, place Munoz\n87084 Dos Santos-la-Forêt', '7, rue Thérèse Normand\n29144 Garnier', '2025-05-10 15:45:00', '2025-05-10 20:45:00', '15h45', '20h45', 0, 5, 25, 'en_attente', '[]', 0),
(525, 245, 204, '303, chemin Thibault\n36892 Blot-sur-Dupont', '70, avenue de Boulay\n51155 Boutin-sur-Muller', '2025-05-11 11:45:00', '2025-05-11 12:45:00', '11h45', '12h45', 0, 0, 44, 'en_attente', '[]', 0),
(526, 243, 202, '48, rue de Picard\n27711 Martins-les-Bains', '874, rue de Marchal\n92659 Cohen', '2025-05-06 20:15:00', '2025-05-06 22:15:00', '20h15', '22h15', 0, 0, 22, 'en_attente', '[]', 0),
(527, 247, 206, '12, avenue de Martinez\n09249 Clement', '76, rue Le Gall\n95192 Millet', '2025-06-19 19:00:00', '2025-06-19 21:00:00', '19h00', '21h00', 0, 3, 20, 'en_attente', '[]', 0),
(528, 247, 206, '66, boulevard Gregoire\n59890 Albert', '4, place de Legros\n77001 Gaudin-sur-Mer', '2025-06-06 15:45:00', '2025-06-06 19:45:00', '15h45', '19h45', 0, 3, 31, 'en_attente', '[]', 0),
(529, 241, 200, '71, rue Philippe Begue\n36873 Coulon', 'avenue Nicolas Guillot\n26680 RenardBourg', '2025-06-14 06:00:00', '2025-06-14 07:00:00', '06h00', '07h00', 0, 1, 33, 'en_attente', '[]', 0),
(530, 247, 206, '50, chemin Moreno\n59793 Peltier', '4, rue de Blin\n53296 Chauvin', '2025-05-31 15:30:00', '2025-05-31 16:30:00', '15h30', '16h30', 0, 0, 30, 'en_attente', '[]', 0),
(531, 247, 206, '7, boulevard de Caron\n12302 SamsonVille', '74, impasse Édith Remy\n44504 Regnier', '2025-06-04 15:45:00', '2025-06-04 19:45:00', '15h45', '19h45', 0, 3, 40, 'en_attente', '[]', 0),
(532, 241, 200, '267, boulevard Pires\n32322 Roussel', 'impasse Claire Perrot\n67729 Le Rouxnec', '2025-06-20 15:45:00', '2025-06-20 17:45:00', '15h45', '17h45', 0, 1, 12, 'en_attente', '[]', 0),
(533, 245, 204, '8, impasse Diallo\n76755 GregoireVille', '768, chemin Claire Aubry\n65227 Chevallierdan', '2025-05-03 15:45:00', '2025-05-03 20:45:00', '15h45', '20h45', 0, 2, 10, 'en_attente', '[]', 0),
(534, 241, 200, '29, impasse de Monnier\n45384 Guerin', '91, place Gomez\n46347 Bousquetnec', '2025-05-29 11:45:00', '2025-05-29 12:45:00', '11h45', '12h45', 0, 1, 40, 'en_attente', '[]', 0),
(535, 243, 202, '4, avenue de Thibault\n40700 BergerVille', '519, rue Lemaire\n94246 MoulinVille', '2025-05-14 18:15:00', '2025-05-14 19:15:00', '18h15', '19h15', 0, 0, 15, 'en_attente', '[]', 0),
(536, 241, 200, '2, impasse Michelle Perret\n94552 Remy', '8, avenue Weber\n26195 Barbier-les-Bains', '2025-05-19 14:49:17', '2025-06-13 13:09:19', '18h15', '19h15', 0, 1, 11, 'probleme', '[]', 0),
(537, 239, 198, '5, avenue de Nguyen\n16287 Lagarde', '32, rue Lemaitre\n02034 Le Goff', '2025-04-27 15:53:10', '2025-06-16 22:43:48', '18h15', '19h15', 0, 1, 19, 'archived', '[]', 1),
(538, 238, 197, '62, boulevard de Jacob\n93252 Baron', '531, avenue Bernard Coste\n80455 Guilbert', '2025-05-02 10:03:30', '2025-06-01 00:09:48', '18h15', '19h15', 0, 3, 14, 'probleme', '[]', 1),
(539, 242, 203, '6, boulevard Camus\n03622 Lemaire', '60, place de Moreno\n73738 Guillaume', '2025-04-26 22:46:36', '2025-06-02 05:04:27', '18h15', '19h15', 0, 1, 36, 'probleme', '[]', 0),
(540, 245, 204, '93, avenue Tanguy\n29664 Maillard', '23, place Mercier\n30821 Moreau', '2025-05-03 04:03:18', '2025-06-24 07:29:49', '18h15', '19h15', 0, 0, 48, 'probleme', '[]', 0),
(541, 250, 207, 'Paris', 'Lyon', '2025-05-27 12:21:00', '2025-05-27 14:21:00', '13:35', '18:35', 0, 1, 5, 'termine', '[]', 1),
(542, 250, 207, 'Paris', 'Lyon', '2025-05-27 10:15:00', '2025-05-27 14:15:00', '10:15', '14:15', 1, 0, 5, 'termine', '[]', 0),
(543, 250, 207, 'Paris', 'Lyon', '2025-05-27 10:30:00', '2025-05-27 13:30:00', '10:30', '13:30', 1, 2, 1, 'termine', '[]', 0),
(544, 250, 207, 'Paris', 'Lyon', '2025-05-27 10:45:00', '2025-05-27 13:45:00', '10:45', '13:45', 1, 0, 1, 'termine', '[]', 0),
(545, 250, 207, 'Paris', 'Lyon', '2025-05-28 12:00:00', '2025-05-28 13:00:00', '12:00', '13:00', 1, 0, 1, 'termine', '[]', 0),
(546, 250, 207, 'Paris', 'Lyon', '2025-05-30 12:32:00', '2025-05-30 12:32:00', '12:32', '14:32', 1, 1, 10, 'termine', '[]', 0),
(547, 250, 207, 'Paris', 'Lyon', '2025-05-28 12:40:00', '2025-05-28 14:40:00', '12:40', '14:40', 1, 0, 1, 'termine', '[]', 0),
(548, 250, 207, 'Paris', 'Lyon', '2025-05-27 14:11:00', '2025-05-27 15:11:00', '14:11', '15:11', 1, 0, 1, 'termine', '[]', 1),
(549, 250, 207, 'Paris', 'Lyon', '2025-05-29 08:32:00', '2025-05-29 08:32:00', '08:32', '11:32', 1, 1, 5, 'termine', '[]', 1);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage_passagers`
--

CREATE TABLE `covoiturage_passagers` (
  `covoiturage_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `covoiturage_passagers`
--

INSERT INTO `covoiturage_passagers` (`covoiturage_id`, `utilisateur_id`) VALUES
(544, 238),
(545, 238),
(546, 238),
(547, 238),
(548, 238),
(549, 238);

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage_preference`
--

CREATE TABLE `covoiturage_preference` (
  `covoiturage_id` int(11) NOT NULL,
  `preference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `covoiturage_validations`
--

CREATE TABLE `covoiturage_validations` (
  `covoiturage_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250514082648', '2025-05-14 08:27:24', 178),
('DoctrineMigrations\\Version20250514083800', '2025-05-14 08:38:05', 51),
('DoctrineMigrations\\Version20250514091446', '2025-05-14 09:14:51', 43),
('DoctrineMigrations\\Version20250519070950', '2025-05-19 07:10:00', 132),
('DoctrineMigrations\\Version20250519084011', '2025-05-19 08:40:20', 44),
('DoctrineMigrations\\Version20250519085931', '2025-05-19 08:59:38', 77),
('DoctrineMigrations\\Version20250521081556', '2025-05-21 08:15:59', 88),
('DoctrineMigrations\\Version20250522073147', '2025-05-22 07:31:53', 43),
('DoctrineMigrations\\Version20250522080436', '2025-05-22 08:04:40', 39),
('DoctrineMigrations\\Version20250526054031', '2025-05-26 05:46:55', 50),
('DoctrineMigrations\\Version20250526055222', '2025-05-26 05:52:25', 24),
('DoctrineMigrations\\Version20250526055453', '2025-05-26 05:54:59', 28),
('DoctrineMigrations\\Version20250526071259', '2025-05-26 07:13:01', 62),
('DoctrineMigrations\\Version20250526082746', '2025-05-26 08:27:48', 123),
('DoctrineMigrations\\Version20250526102139', '2025-05-26 10:21:57', 80),
('DoctrineMigrations\\Version20250527075711', '2025-05-27 07:57:14', 105),
('DoctrineMigrations\\Version20250529083205', '2025-05-29 08:32:08', 71);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:70:\\\"Nom : Antoine Simonin\nEmail : lecouyon73@hotmail.fr\n\nMessage :\nCoucou \\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:21:\\\"lecouyon73@hotmail.fr\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:26:\\\"Nouveau message de contact\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-19 10:23:51', '2025-05-19 10:23:51', NULL),
(2, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;N;i:1;N;i:2;s:267:\\\"<p>Bonjour Antoine,</p>\n                        <p>Le trajet auquel vous avez participé vient d’être terminé. Veuillez vous rendre sur votre espace pour valider que tout s’est bien passé.</p>\n                        <p>Cordialement,<br>L’équipe EcoRide</p>\\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"noreply@ecoride.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:13:\\\"test@test.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:20:\\\"Validation du trajet\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-21 08:45:26', '2025-05-21 08:45:26', NULL),
(3, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;N;i:1;N;i:2;s:267:\\\"<p>Bonjour Antoine,</p>\n                        <p>Le trajet auquel vous avez participé vient d’être terminé. Veuillez vous rendre sur votre espace pour valider que tout s’est bien passé.</p>\n                        <p>Cordialement,<br>L’équipe EcoRide</p>\\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"noreply@ecoride.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:13:\\\"test@test.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:20:\\\"Validation du trajet\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-21 09:02:19', '2025-05-21 09:02:19', NULL),
(4, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:122:\\\"Bonjour Antoine,\n\nLe covoiturage prévu de Lyon à Paris a été annulé par le chauffeur.\n\nMerci de votre compréhension.\\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:13:\\\"test@test.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Annulation du covoiturage\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-24 09:10:23', '2025-05-24 09:10:23', NULL),
(5, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:142:\\\"Bonjour Antoine,\n\nLe covoiturage de Paris à Lyon est terminé. Veuillez vous rendre sur votre espace pour valider que tout s\\\'est bien passé.\\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:13:\\\"test@test.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Validation du covoiturage\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-26 06:36:16', '2025-05-26 06:36:16', NULL),
(6, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:142:\\\"Bonjour wfleury,\n\nLe covoiturage de Paris à Lyon est terminé. Veuillez vous rendre sur votre espace pour valider que tout s\\\'est bien passé.\\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mathilde.berger@leroux.fr\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Validation du covoiturage\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-27 07:17:34', '2025-05-27 07:17:34', NULL),
(7, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:142:\\\"Bonjour wfleury,\n\nLe covoiturage de Paris à Lyon est terminé. Veuillez vous rendre sur votre espace pour valider que tout s\\\'est bien passé.\\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mathilde.berger@leroux.fr\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Validation du covoiturage\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-27 08:06:42', '2025-05-27 08:06:42', NULL),
(8, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:142:\\\"Bonjour wfleury,\n\nLe covoiturage de Paris à Lyon est terminé. Veuillez vous rendre sur votre espace pour valider que tout s\\\'est bien passé.\\\";i:1;s:5:\\\"utf-8\\\";i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:19:\\\"ecoride@exemple.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"mathilde.berger@leroux.fr\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Validation du covoiturage\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2025-05-28 06:29:09', '2025-05-28 06:29:09', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `preference`
--

CREATE TABLE `preference` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `preference`
--

INSERT INTO `preference` (`id`, `utilisateur_id`, `name`) VALUES
(4, 250, 'Fumeurs acceptés'),
(5, 250, 'Animaux acceptés'),
(6, 250, 'Trajet en musique');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(72, 'ROLE_ADMIN'),
(73, 'ROLE_EMPLOYE'),
(71, 'ROLE_UTILISATEUR');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `credits` int(11) DEFAULT NULL,
  `note_moyenne` double DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_chauffeur` tinyint(1) NOT NULL,
  `is_passager` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `role_id`, `pseudo`, `email`, `password`, `credits`, `note_moyenne`, `photo`, `is_chauffeur`, `is_passager`, `is_active`) VALUES
(236, 72, 'admin', 'admin@example.com', '$2y$13$9Gl/XxZTQPgKdd8dEc70XedRqVEBQ6jmdA8yJfgyN/5FHjiJRST2.', 0, 0, NULL, 0, 0, 1),
(237, 73, 'employe', 'employe@example.com', '$2y$13$mZ.st9XpyVIyMzs6lTBAbOHaC7ovZopIUWfzAS/8z2e05FuwKD3Vy', 0, 0, NULL, 0, 0, 1),
(238, 71, 'wfleury', 'mathilde.berger@leroux.fr', '$2y$13$Erb.8Weup1yaWaQY4smejuRkOHqiSP/gMzSZbu73auJRx1rFQ3gn2', 70, 0, NULL, 1, 1, 0),
(239, 71, 'bernard40', 'chevalier.roger@breton.fr', '$2y$13$ZDaLrggz7at3jfH5uXia4u0ifM3eyXHAOJ1Y0eVax7skBoOTIPwfu', 42, 0, NULL, 1, 1, 1),
(240, 71, 'monique.nicolas', 'rnoel@renaud.com', '$2y$13$FPyJR0WzBzq2w1XQ199IwOldoGZmA671BAmJHOvA9ShEqBOiUr3kS', 98, 0, NULL, 1, 1, 1),
(241, 71, 'dufour.julie', 'bchevalier@ruiz.fr', '$2y$13$f8rmhG2S/n.RCtjf3./5Bu3I6jIYw31Gtidx8n0sYLJyQHQYnOpYW', 11, 0, NULL, 1, 1, 1),
(242, 71, 'gomes.antoinette', 'denis.vasseur@laposte.net', '$2y$13$1r6kLxW9..jhDHqiez7RuOrtEq/4YPdWhPDeSKd8BV1D/1KwGIpgm', 83, 0, NULL, 1, 1, 1),
(243, 71, 'agathe.gimenez', 'bazin.odette@auger.org', '$2y$13$PxmnE4Ol3BXVy1w7sfYUnOBtWMks5PSBU6S7s2NhqXH7XMdC2JC8K', 80, 0, NULL, 1, 1, 1),
(244, 71, 'brigitte.legoff', 'antoine.chauvet@club-internet.fr', '$2y$13$qgttwyp2iWJJOpW3.GigheWigI6U1Kn1RzOkp1crKMt0cm9lbTY5m', 49, 0, NULL, 1, 1, 1),
(245, 71, 'alix06', 'kgrondin@gmail.com', '$2y$13$x3cieSVbfkd35.ovMD2Deu1Ippy1bnNFdWasthqUeFKtDvzQuIbB.', 39, 0, NULL, 1, 1, 1),
(246, 71, 'roussel.charlotte', 'dacosta.anouk@club-internet.fr', '$2y$13$eHHBvMm7i74zCv/8LMCYjOuBNrk8qylXsdJPRYrs/YYimfqgt0fq6', 86, 0, NULL, 1, 1, 1),
(247, 71, 'ugiraud', 'xmaillard@sfr.fr', '$2y$13$FjERCPGPi.r080q56JR3Ju6j5ld6ETwHGZ1yiI9AK9dxgmfVZcuKm', 79, 0, NULL, 1, 1, 1),
(250, 71, 'Antoine', 'user1@example.com', '$2y$13$bqd3vwDqT3QqvrJJj3HFKO7slcacMQ97IK5xZH/Wuh1J9Ii5zYg6e', 20, 4.57, NULL, 1, 1, 1),
(253, 71, 'Test2', 'test2@test.com', '$2y$13$R.5lmB/I3Y7vxg5bbtGwuuEtgYcfsv1iCyFRjYUUu0mEyGfRKA8lu', 20, 0, NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `energie` varchar(50) NOT NULL,
  `places_dispo` int(11) NOT NULL,
  `immatriculation` varchar(10) NOT NULL,
  `date_premiere_immatriculation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `utilisateur_id`, `marque`, `modele`, `couleur`, `energie`, `places_dispo`, `immatriculation`, `date_premiere_immatriculation`) VALUES
(197, 238, 'Tesla', 'ut', 'noir', 'hybride', 5, 'YI-677-DO', '2022-11-11'),
(198, 239, 'Renault', 'autem', 'vert', 'hybride', 5, 'MR-889-NL', '2020-06-03'),
(199, 240, 'Tesla', 'delectus', 'turquoise', 'diesel', 2, 'QN-553-OO', '2020-08-25'),
(200, 241, 'Peugeot', 'est', 'bleu', 'electrique', 4, 'NQ-913-EQ', '2020-08-16'),
(201, 242, 'Tesla', 'id', 'violet', 'essence', 5, 'UX-709-TL', '2023-03-20'),
(202, 243, 'Renault', 'quia', 'turquoise', 'hybride', 5, 'MU-027-IY', '2024-06-29'),
(203, 244, 'Renault', 'et', 'jaune', 'electrique', 4, 'PF-702-XU', '2023-11-14'),
(204, 245, 'Peugeot', 'omnis', 'bleu', 'electrique', 4, 'DT-639-JD', '2021-12-07'),
(205, 246, 'Peugeot', 'non', 'olive', 'essence', 4, 'ET-568-LF', '2023-04-11'),
(206, 247, 'Tesla', 'quod', 'turquoise', 'essence', 5, 'BR-262-DD', '2020-07-27'),
(207, 250, 'Peugeot', '208', 'Bleu', 'electrique', 4, 'AB-123-CD', '2025-05-06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F91ABF060BB6FE6` (`auteur_id`),
  ADD KEY `IDX_8F91ABF0A4F84F6E` (`destinataire_id`),
  ADD KEY `IDX_8F91ABF062671590` (`covoiturage_id`);

--
-- Index pour la table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_28C79E8985C0B3BE` (`chauffeur_id`),
  ADD KEY `IDX_28C79E894A4A3511` (`vehicule_id`);

--
-- Index pour la table `covoiturage_passagers`
--
ALTER TABLE `covoiturage_passagers`
  ADD PRIMARY KEY (`covoiturage_id`,`utilisateur_id`),
  ADD KEY `IDX_1B8D425662671590` (`covoiturage_id`),
  ADD KEY `IDX_1B8D4256FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `covoiturage_preference`
--
ALTER TABLE `covoiturage_preference`
  ADD PRIMARY KEY (`covoiturage_id`,`preference_id`),
  ADD KEY `IDX_1BD9E40962671590` (`covoiturage_id`),
  ADD KEY `IDX_1BD9E409D81022C0` (`preference_id`);

--
-- Index pour la table `covoiturage_validations`
--
ALTER TABLE `covoiturage_validations`
  ADD PRIMARY KEY (`covoiturage_id`,`utilisateur_id`),
  ADD KEY `IDX_3AEA27B162671590` (`covoiturage_id`),
  ADD KEY `IDX_3AEA27B1FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5D69B053FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_57698A6A5E237E06` (`name`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`),
  ADD KEY `IDX_1D1C63B3D60322AC` (`role_id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_292FFF1DFB88E14F` (`utilisateur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `covoiturage`
--
ALTER TABLE `covoiturage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `preference`
--
ALTER TABLE `preference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF060BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FK_8F91ABF062671590` FOREIGN KEY (`covoiturage_id`) REFERENCES `covoiturage` (`id`),
  ADD CONSTRAINT `FK_8F91ABF0A4F84F6E` FOREIGN KEY (`destinataire_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD CONSTRAINT `FK_28C79E894A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `FK_28C79E8985C0B3BE` FOREIGN KEY (`chauffeur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `covoiturage_passagers`
--
ALTER TABLE `covoiturage_passagers`
  ADD CONSTRAINT `FK_1B8D425662671590` FOREIGN KEY (`covoiturage_id`) REFERENCES `covoiturage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1B8D4256FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `covoiturage_preference`
--
ALTER TABLE `covoiturage_preference`
  ADD CONSTRAINT `FK_1BD9E40962671590` FOREIGN KEY (`covoiturage_id`) REFERENCES `covoiturage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1BD9E409D81022C0` FOREIGN KEY (`preference_id`) REFERENCES `preference` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `covoiturage_validations`
--
ALTER TABLE `covoiturage_validations`
  ADD CONSTRAINT `FK_3AEA27B162671590` FOREIGN KEY (`covoiturage_id`) REFERENCES `covoiturage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3AEA27B1FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `preference`
--
ALTER TABLE `preference`
  ADD CONSTRAINT `FK_5D69B053FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `FK_292FFF1DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
