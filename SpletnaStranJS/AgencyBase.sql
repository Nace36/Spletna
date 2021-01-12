-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `AgencyBase` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `AgencyBase`;

CREATE TABLE `prijava` (
  `Ime` varchar(100) NOT NULL,
  `Koda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `prijava` (`Ime`, `Koda`) VALUES
('James Bond',	'007');

CREATE TABLE `register` (
  `Ime` varchar(100) NOT NULL,
  `Priimek` varchar(100) NOT NULL,
  `Agencija` varchar(100) NOT NULL,
  `Država` varchar(100) NOT NULL,
  `Starost` int(11) NOT NULL,
  `StMisij` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `register` (`Ime`, `Priimek`, `Agencija`, `Država`, `Starost`, `StMisij`) VALUES
('Johny',	'English',	'KGB',	'Slovenia',	32,	2),
('Johny',	'English',	'KGB',	'Sloveniaasd',	32,	2);

-- 2021-01-12 18:44:55
