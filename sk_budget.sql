-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 07 Août 2013 à 15:58
-- Version du serveur: 5.1.69
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sk_budget`
--

-- --------------------------------------------------------

--
-- Structure de la table `sk_budgettxt`
--

CREATE TABLE IF NOT EXISTS `sk_budget_txt` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr` text COLLATE utf8_unicode_ci NOT NULL,
  `en` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `sk_budget_txt`
--

INSERT INTO `sk_budget_txt` (`id`, `fr`, `en`) VALUES
('top_menu_home', 'accueil', 'home'),
('top_menu_blog', 'forum', 'blog'),
('sitename', 'skriptkoder', 'skriptkoder'),
('browser_title', 'Gestionnaire de Budget', 'Budget Manager'),
('username', 'utilisateur', 'username'),
('password', 'mot de passe', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_timesheet_budget_member`
--

CREATE TABLE IF NOT EXISTS `tbl_timesheet_budget_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_number` int(11) DEFAULT NULL,
  `revenu_per_week` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbl_timesheet_budget_member`
--

INSERT INTO `tbl_timesheet_budget_member` (`id`, `employee_number`, `revenu_per_week`) VALUES
(5, 857, 400),
(6, 900, 500);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_timesheet_budget_product`
--

CREATE TABLE IF NOT EXISTS `tbl_timesheet_budget_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_number` int(11) NOT NULL,
  `product_name` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `price_per_week` int(11) NOT NULL,
  `payment_date` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=27 ;

--
-- Contenu de la table `tbl_timesheet_budget_product`
--

INSERT INTO `tbl_timesheet_budget_product` (`id`, `employee_number`, `product_name`, `price_per_week`, `payment_date`) VALUES
(1, 857, 'videotron', 50, 25),
(3, 857, 'Ethylo', 30, 28),
(4, 857, 'Universitas', 25, 25),
(16, 857, 'Pret', 45, 5),
(21, 857, 'Visa', 30, 5),
(25, 857, 'Mastercard', 60, 5),
(26, 857, 'test', 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_timesheet_techs`
--

CREATE TABLE IF NOT EXISTS `tbl_timesheet_techs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `hashed_password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `employee_number` int(6) NOT NULL,
  `employee_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index` (`id`,`username`,`employee_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=80 ;

--
-- Contenu de la table `tbl_timesheet_techs`
--

INSERT INTO `tbl_timesheet_techs` (`id`, `username`, `hashed_password`, `employee_number`, `employee_name`) VALUES
(48, 'skript', '9d11fc6b9e7a343a2e23b95d715df8727d408228', 857, 'Skript Koder'),
(50, 'new01', 'fa7c141f242bd24963f31e0e323f2f96cbbce36a', 900, 'new test01'),
(54, 'tech', '9d11fc6b9e7a343a2e23b95d715df8727d408228', 915, 'Tech Art'),
(72, 'tech2', 'fa3abec7ffc000fb54a0d786b0de1f8f5bed98e8', 345, 'tech3'),
(73, 'wdw', '6c55b2992955920d019d19e2111c3f71ff9eb81a', 33, '3esdwe'),
(74, 'qwerty', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 23, 'qwerty'),
(68, 'new02', 'fa7c141f242bd24963f31e0e323f2f96cbbce36a', 301, 'new test02'),
(70, 'user01', '8d04988d9fe579c54c9c4296239aaf1574039ae2', 10001, 'mPhilion user 01'),
(71, 'user02', '8d04988d9fe579c54c9c4296239aaf1574039ae2', 10002, 'mPhilion user02'),
(77, 'lon_usr01', '3fbe59b561f76b37ff31c6dca4d72a0399487eb5', 220, 'lon_usr01'),
(78, 'lon_usr02', 'c67b9c6f9ab08f49dd893eaaa0f11f6e7aad9226', 221, 'lon_usr02'),
(79, 'johnny01', '512215ad421c32eaee4f6009f16732aaacba87de', 821, 'johnny01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
