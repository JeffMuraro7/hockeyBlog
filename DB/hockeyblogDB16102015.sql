-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Octobre 2015 à 15:55
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hockeyblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `hockeyblogusers`
--

CREATE TABLE IF NOT EXISTS `hockeyblogusers` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `prenomUsers` varchar(100) NOT NULL,
  `nomUsers` varchar(100) NOT NULL,
  `emailUsers` varchar(250) NOT NULL,
  `birthdayUsers` date NOT NULL,
  `pseudoUsers` varchar(100) NOT NULL,
  `mdpUsers` varchar(250) NOT NULL,
  `statutUsers` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `pseudoUsers` (`pseudoUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
