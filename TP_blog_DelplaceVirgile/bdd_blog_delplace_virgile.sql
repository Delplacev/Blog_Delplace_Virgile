-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Février 2016 à 14:45
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_blog_delplace_virgile`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `nomImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `date`, `nomImage`) VALUES
(1, 'Article 123456', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dignissim est, et dictum ante. Nullam rhoncus sagittis sapien vel egestas. Etiam tristique orci ac felis vulputate viverra. Sed feugiat urna sit amet ipsum commodo viverra. Donec pulvinar tempor blandit. Donec et urna velit. Vestibulum nec semper velit. Vestibulum et orci consequat, laoreet neque eu, ultricies enim. Maecenas mollis risus enim, eu bibendum quam fringilla vel. Proin maximus sollicitudin velit, id tristique mauris efficitur in.\r\n\r\nMauris molestie auctor urna, et sollicitudin mi laoreet sit amet. Vestibulum ut elementum nunc. Proin ut ligula ultricies, iaculis nunc ac, aliquet tellus. Donec consequat mi enim, in porta odio imperdiet ut. Vivamus bibendum neque nisl, a efficitur tortor ultrices eget. Nullam sed nunc volutpat, scelerisque enim ac, luctus orci. Donec a neque efficitur ex imperdiet tempor vitae eu ante.\r\n\r\nSuspendisse potenti. Mauris auctor nec dolor sed dignissim. ''''Pellentesque tristique fermentum dolor, vel auctor justo ultrices nec. Etiam fermentum vehicula finibus. Cras dictum, diam non iaculis tempus, elit nunc tempus metus, in sagittis sapien libero sit amet quam. Nulla id justo metus. Morbi malesuada augue sed est sodales, ac bibendum dui scelerisque.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut accumsan felis. Mauris id efficitur tellus, eu mollis nisl. Ut dapibus dictum neque, in sodales magna hendrerit at. Etiam id metus egestas, mattis mauris sed, pharetra lectus. Duis gravida turpis enim, quis faucibus lorem convallis nec. Etiam sed vulputate lorem. Cras eget rutrum nisl. Praesent sodales rutrum nisi euismod tristique. Maecenas volutpat nec ante id ullamcorper. Sed gravida quam suscipit aliquet luctus. Nam tincidunt semper mollis. In condimentum, sapien vestibulum gravida commodo, mi nibh iaculis dui, et congue velit massa quis purus. Donec luctus, augue eu finibus rutrum, ligula massa ultrices quam, a pharetra neque nisl vel ante. Nulla nec felis libero. Sed eleifend, nisl vitae malesuada volutpat, sapien ante aliquet lectus, non iaculis tellus nibh non tortor.\r\n\r\nDuis nec erat volutpat, venenatis ante nec, ornare erat. Suspendisse pretium, lectus eu euismod ornare, nibh nisl dignissim nisi, quis pretium erat augue sed nulla. Ut a urna cursus, scelerisque mauris hendrerit, convallis nisl. Pellentesque hendrerit enim nisi. Pellentesque dapibus sapien sed ante pharetra, sit amet vehicula sem tempus. Pellentesque mattis sapien ex, at blandit ipsum porttitor non. Morbi quis enim erat.', '2016-01-26', '10321028_10152344887791356_8909292059785536061_o.jpg'),
(2, 'Article 23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dignissim est, et dictum ante. Nullam rhoncus sagittis sapien vel egestas. Etiam tristique orci ac felis vulputate viverra. Sed feugiat urna sit amet ipsum commodo viverra. Donec pulvinar tempor blandit. Donec et urna velit. Vestibulum nec semper velit. Vestibulum et orci consequat, laoreet neque eu, ultricies enim. Maecenas mollis risus enim, eu bibendum quam fringilla vel. Proin maximus sollicitudin velit, id tristique mauris efficitur in.\r\n\r\nMauris molestie auctor urna, et sollicitudin mi laoreet sit amet. Vestibulum ut elementum nunc. Proin ut ligula ultricies, iaculis nunc ac, aliquet tellus. Donec consequat mi enim, in porta odio imperdiet ut. Vivamus bibendum neque nisl, a efficitur tortor ultrices eget. Nullam sed nunc volutpat, scelerisque enim ac, luctus orci. Donec a neque efficitur ex imperdiet tempor vitae eu ante.\r\n\r\nSuspendisse potenti. Mauris auctor nec dolor sed dignissim. Pellentesque tristique fermentum dolor, vel auctor justo ultrices nec. Etiam fermentum vehicula finibus. Cras dictum, diam non iaculis tempus, elit nunc tempus metus, in sagittis sapien libero sit amet quam. Nulla id justo metus. Morbi malesuada augue sed est sodales, ac bibendum dui scelerisque.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut accumsan felis. Mauris id efficitur tellus, eu mollis nisl. Ut dapibus dictum neque, in sodales magna hendrerit at. Etiam id metus egestas, mattis mauris sed, pharetra lectus. Duis gravida turpis enim, quis faucibus lorem convallis nec. Etiam sed vulputate lorem. Cras eget rutrum nisl. Praesent sodales rutrum nisi euismod tristique. Maecenas volutpat nec ante id ullamcorper. Sed gravida quam suscipit aliquet luctus. Nam tincidunt semper mollis. In condimentum, sapien vestibulum gravida commodo, mi nibh iaculis dui, et congue velit massa quis purus. Donec luctus, augue eu finibus rutrum, ligula massa ultrices quam, a pharetra neque nisl vel ante. Nulla nec felis libero. Sed eleifend, nisl vitae malesuada volutpat, sapien ante aliquet lectus, non iaculis tellus nibh non tortor.\r\n\r\nDuis nec erat volutpat, venenatis ante nec, ornare erat. Suspendisse pretium, lectus eu euismod ornare, nibh nisl dignissim nisi, quis pretium erat augue sed nulla. Ut a urna cursus, scelerisque mauris hendrerit, convallis nisl. Pellentesque hendrerit enim nisi. Pellentesque dapibus sapien sed ante pharetra, sit amet vehicula sem tempus. Pellentesque mattis sapien ex, at blandit ipsum porttitor non. Morbi quis enim erat.', '2015-11-30', '1655376_10153038626239420_3269248180010339541_o.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`, `nom`, `prenom`) VALUES
(1, 'vd@vd.fr', 'e10adc3949ba59abbe56e057f20f883e', 'cacbcaff31fb532dcf22b46e23361bb3', 'delplace', 'virgile'),
(7, 'cv@cv.fr', '912e79cd13c64069d91da65d62fbb78c', 'bb33d86de100323beaa1e7a08b76740e', 'chris', 'vil');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
