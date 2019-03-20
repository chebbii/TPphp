
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `ma_db`;
USE `ma_db`;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `identifiant` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` int(20) NOT NULL,
  PRIMARY KEY (`identifiant`),
  KEY `author` (`author`),
  CONSTRAINT `article_k_1` FOREIGN KEY (`author`) REFERENCES `user` (`identifiant`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `article` (`identifiant`, `title`, `content`, `author`) VALUES
(14,	'1', 1),
(15,	'2 ',1),
(16,	'3 ',1),
(17,	'4 ',1),
(18,	'5 ',1),
(20,	'6 ',1);

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE `commentaire` (
  `identifiant` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `article` int(20) NOT NULL,
  PRIMARY KEY (`identifiant`),
  KEY `article` (`article`),
  CONSTRAINT `commentaire_k_1` FOREIGN KEY (`article`) REFERENCES `article` (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `commentaire` (`identifiant`, `username`, `content`, `article`) VALUES
(3,	'kaouther',	'commentaire',	20);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`identifiant`, `username`, `password`) VALUES
(1,	'x',	'$2y$10$voOp8TL4x1uT.jrUK/fNaODxwmORBKEnN/aDvGLMKBn29rulJVjZq'),
(8,	'az',	'$2y$10$2iVo9MRmy1G4UssQHh.nxubALHyqz3hOYR2iatDJsyEZxN1JRts4q');

-- 2019-03-19 21:19: