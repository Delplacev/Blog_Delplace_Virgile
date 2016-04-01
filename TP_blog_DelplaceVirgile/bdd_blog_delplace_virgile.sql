-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 23 Février 2016 à 16:44
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BDD_TP_LANNOY`
--
CREATE DATABASE IF NOT EXISTS `BDD_BLOG_DelplaceVirgile` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

GRANT USAGE ON *.* TO 'userBlog'@'localhost' IDENTIFIED BY PASSWORD '*D921A20CCFBF685C5F955F1F9AFF61B3FCD3DB98';

GRANT SELECT, INSERT, UPDATE, DELETE ON `bdd\_blog\_delplacevirgile`.* TO 'userBlog'@'localhost';
-- --------------------------------------------------------
USE `BDD_BLOG_DelplaceVirgile` ;
--
-- Structure de la table `article`
--
CREATE TABLE `article` (
`id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `nomImage` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `date`, `nomImage`) VALUES
(1, 'Article 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dignissim est, et dictum ante. Nullam rhoncus sagittis sapien vel egestas. Etiam tristique orci ac felis vulputate viverra. Sed feugiat urna sit amet ipsum commodo viverra. Donec pulvinar tempor blandit. Donec et urna velit. Vestibulum nec semper velit. Vestibulum et orci consequat, laoreet neque eu, ultricies enim. Maecenas mollis risus enim, eu bibendum quam fringilla vel. Proin maximus sollicitudin velit, id tristique mauris efficitur in.Mauris molestie auctor urna, et sollicitudin mi laoreet sit amet. Vestibulum ut elementum nunc. Proin ut ligula ultricies, iaculis nunc ac, aliquet tellus. Donec consequat mi enim, in porta odio imperdiet ut. Vivamus bibendum neque nisl, a efficitur tortor ultrices eget. Nullam sed nunc volutpat, scelerisque enim ac, luctus orci. Donec a neque efficitur ex imperdiet tempor vitae eu ante.Suspendisse potenti. Mauris auctor nec dolor sed dignissim. Pellentesque tristique fermentum dolor, vel auctor justo ultrices nec. Etiam fermentum vehicula finibus. Cras dictum, diam non iaculis tempus, elit nunc tempus metus, in sagittis sapien libero sit amet quam. Nulla id justo metus. Morbi malesuada augue sed est sodales, ac bibendum dui scelerisque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut accumsan felis. Mauris id efficitur tellus, eu mollis nisl. Ut dapibus dictum neque, in sodales magna hendrerit at. Etiam id metus egestas, mattis mauris sed, pharetra lectus. Duis gravida turpis enim, quis faucibus lorem convallis nec. Etiam sed vulputate lorem. Cras eget rutrum nisl. Praesent sodales rutrum nisi euismod tristique. Maecenas volutpat nec ante id ullamcorper. Sed gravida quam suscipit aliquet luctus. Nam tincidunt semper mollis. In condimentum, sapien vestibulum gravida commodo, mi nibh iaculis dui, et congue velit massa quis purus. Donec luctus, augue eu finibus rutrum, ligula massa ultrices quam, a pharetra neque nisl vel ante. Nulla nec felis libero. Sed eleifend, nisl vitae malesuada volutpat, sapien ante aliquet lectus, non iaculis tellus nibh non tortor.Duis nec erat volutpat, venenatis ante nec, ornare erat. Suspendisse pretium, lectus eu euismod ornare, nibh nisl dignissim nisi, quis pretium erat augue sed nulla. Ut a urna cursus, scelerisque mauris hendrerit, convallis nisl. Pellentesque hendrerit enim nisi. Pellentesque dapibus sapien sed ante pharetra, sit amet vehicula sem tempus. Pellentesque mattis sapien ex, at blandit ipsum porttitor non. Morbi quis enim erat.', '2016-01-26', '10321028_10152344887791356_8909292059785536061_o.jpg'),
(2, 'Article 23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dignissim est, et dictum ante. Nullam rhoncus sagittis sapien vel egestas. Etiam tristique orci ac felis vulputate viverra. Sed feugiat urna sit amet ipsum commodo viverra. Donec pulvinar tempor blandit. Donec et urna velit. Vestibulum nec semper velit. Vestibulum et orci consequat, laoreet neque eu, ultricies enim. Maecenas mollis risus enim, eu bibendum quam fringilla vel. Proin maximus sollicitudin velit, id tristique mauris efficitur in.Mauris molestie auctor urna, et sollicitudin mi laoreet sit amet. Vestibulum ut elementum nunc. Proin ut ligula ultricies, iaculis nunc ac, aliquet tellus. Donec consequat mi enim, in porta odio imperdiet ut. Vivamus bibendum neque nisl, a efficitur tortor ultrices eget. Nullam sed nunc volutpat, scelerisque enim ac, luctus orci. Donec a neque efficitur ex imperdiet tempor vitae eu ante.Suspendisse potenti. Mauris auctor nec dolor sed dignissim. Pellentesque tristique fermentum dolor, vel auctor justo ultrices nec. Etiam fermentum vehicula finibus. Cras dictum, diam non iaculis tempus, elit nunc tempus metus, in sagittis sapien libero sit amet quam. Nulla id justo metus. Morbi malesuada augue sed est sodales, ac bibendum dui scelerisque.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut accumsan felis. Mauris id efficitur tellus, eu mollis nisl. Ut dapibus dictum neque, in sodales magna hendrerit at. Etiam id metus egestas, mattis mauris sed, pharetra lectus. Duis gravida turpis enim, quis faucibus lorem convallis nec. Etiam sed vulputate lorem. Cras eget rutrum nisl. Praesent sodales rutrum nisi euismod tristique. Maecenas volutpat nec ante id ullamcorper. Sed gravida quam suscipit aliquet luctus. Nam tincidunt semper mollis. In condimentum, sapien vestibulum gravida commodo, mi nibh iaculis dui, et congue velit massa quis purus. Donec luctus, augue eu finibus rutrum, ligula massa ultrices quam, a pharetra neque nisl vel ante. Nulla nec felis libero. Sed eleifend, nisl vitae malesuada volutpat, sapien ante aliquet lectus, non iaculis tellus nibh non tortor.Duis nec erat volutpat, venenatis ante nec, ornare erat. Suspendisse pretium, lectus eu euismod ornare, nibh nisl dignissim nisi, quis pretium erat augue sed nulla. Ut a urna cursus, scelerisque mauris hendrerit, convallis nisl. Pellentesque hendrerit enim nisi. Pellentesque dapibus sapien sed ante pharetra, sit amet vehicula sem tempus. Pellentesque mattis sapien ex, at blandit ipsum porttitor non. Morbi quis enim erat.', '2015-11-30', '1655376_10153038626239420_3269248180010339541_o.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--
CREATE TABLE `utilisateurs` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'vd@vd.fr', 'e10adc3949ba59abbe56e057f20f883e', 'cacbcaff31fb532dcf22b46e23361bb3'),
(2, 'vd@vd.fr111', 'e10adc3949ba59abbe56e057f20f883e', '0048e9fa69f4f5a127e78123fd143cad'),
(4, 'vd@vd.fr123', 'e10adc3949ba59abbe56e057f20f883e', 'f1f2f8b95d540707d7f1ee93f43f26b8'),
(5, 'vd@vd.fr1', '202cb962ac59075b964b07152d234b70', 'ccc940ed67c5f2137f7e910c8e3b4402');
-- --------------------------------------------------------
--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` text NOT NULL,
`idAbo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`email`, `idAbo`) VALUES
('vd@vd.fr', 1),
('vd@cd.fr', 2),
('vd@vd.fr', 3),
('vd@vd.frf', 4);
-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `idVote` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `ipVote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vote`
--

INSERT INTO `vote` (`idVote`, `idArticle`, `ipVote`) VALUES
(4, 1, '12345'),
(5, 1, '12345'),
(6, 1, '12345'),
(7, 1, '::1'),
(8, 1, '::1'),
(9, 2, '::1');
-- --------------------------------------------------------
--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`id`);

 --
 -- Index pour la table `newsletter`
 --
 ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idAbo`);

--
-- Index pour la table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`idVote`);
--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `idAbo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
ALTER TABLE `vote`
  MODIFY `idVote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
