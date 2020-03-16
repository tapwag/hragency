-- phpMyAdmin SQL Dump
-- version 2.6.0-rc2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 12, 2005 at 03:38 PM
-- Server version: 4.0.21
-- PHP Version: 4.3.8
-- 
-- hragency v0.4 install script 
--  without demo data
-- 
-- 
-- Database: `hragency`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `idcont` int(6) NOT NULL auto_increment,
  `identr` int(6) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `firstname` varchar(50) NOT NULL default '',
  `adr1` varchar(50) NOT NULL default '',
  `adr2` varchar(50) NOT NULL default '',
  `nap` int(6) NOT NULL default '0',
  `city` varchar(50) NOT NULL default '',
  `teldir` varchar(20) NOT NULL default '',
  `mobile` varchar(20) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `birthdate` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`idcont`)
) ENIGNE=InnoDB AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` VALUES (9, 12, 'Melo', 'Marco', 'Rte de Venoge-sur-Saone', '', 1213, 'Onex', '+41 21 333 44 55', '+41 79 799 79 79', 'marco.melo@melotelecom.ch', '1980-11-22');
INSERT INTO `contact` VALUES (8, 11, 'Bronze', 'Ricardo', 'Montchoisi 32', '', 1006, 'Lausanne', '+41 21 648 22 33', '+41 76 222 11 22', 'ricardo.bronze@emi-consulting.ch', '1982-11-11');
INSERT INTO `contact` VALUES (7, 10, 'Gasser', 'Oliver', 'Rte du Pavement 81', '', 1018, 'Lausanne', '+41 21 345 00 06', '+41 79 815 57 25', 'oliver.gasser@emi-consulting.ch', '1970-04-20');
INSERT INTO `contact` VALUES (6, 10, 'Gasser-Hoti', 'Ermira', 'Rte du Pavement 81', '', 1018, 'Lausanne', '+41 21 646 28 84', '+41 76 333 44 55', 'ermira.gasser@hospvd.ch', '1970-05-26');
INSERT INTO `contact` VALUES (14, 13, 'Joquera', 'Sandra', 'Vallon 26', '', 1004, 'Lausanne', '', '', 'sandra.joquera@coeur-ouvert.ch', '1966-11-11');

-- --------------------------------------------------------

-- 
-- Table structure for table `enterprise`
-- 

CREATE TABLE `enterprise` (
  `identr` int(6) NOT NULL auto_increment,
  `enterprise` varchar(50) NOT NULL default '',
  `adr1` varchar(50) NOT NULL default '',
  `adr2` varchar(50) NOT NULL default '',
  `nap` int(10) NOT NULL default '0',
  `city` varchar(50) NOT NULL default '',
  `telcentr` varchar(20) NOT NULL default '',
  `fax` varchar(20) NOT NULL default '',
  `site` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`identr`)
) ENGINE=InnoDB AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `enterprise`
-- 

INSERT INTO `enterprise` VALUES (11, 'Jobbroker', 'Mauborget 1', '', 1003, 'Lausanne', '+41 21 345 00 06', '+41 21 345 00 01', 'www.jobbroker.ch');
INSERT INTO `enterprise` VALUES (12, 'Melo Telecom', 'Rte Venoge 21', '', 1122, 'Mont-sur-Venoge', '+41 21 333 44 55', '+41 21 341 85 07', 'www.melotelecom.ch');
INSERT INTO `enterprise` VALUES (10, 'EMI Consulting Group', 'Mauborget 1', '', 1003, 'Lausanne', '+41 21 345 00 06', '+41 21 345 00 01', 'www.emi-consulting.ch');
INSERT INTO `enterprise` VALUES (13, 'Coeur Ouvert', 'Mauborget 1', '', 1003, 'Lausanne', '+41 21 345 00 06', '+41 21 345 00 01', 'www.coeur-ouvert.ch');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `id` int(4) NOT NULL auto_increment,
  `idrole` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `firstname` varchar(50) NOT NULL default '',
  `entrattach` int(11) NOT NULL default '0',
  `login` varchar(20) NOT NULL default '',
  `pwd` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (1, 1, 'Gasser', 'Oliver', 10, 'gasserol', '37313731');
INSERT INTO `login` VALUES (3, 2, 'Bronze', 'Ricardo', 11, 'ricardo', 'ricardo82');

-- --------------------------------------------------------

-- 
-- Table structure for table `role`
-- 

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL auto_increment,
  `role` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`idrole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `role`
-- 

INSERT INTO `role` VALUES (1, 'admin');
INSERT INTO `role` VALUES (2, 'entreprise');
INSERT INTO `role` VALUES (3, 'candidat');

-- --------------------------------------------------------

-- 
-- Table structure for table `vacancy`
-- 

CREATE TABLE `vacancy` (
  `idvac` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `cat` varchar(50) NOT NULL default '',
  `skill1` varchar(50) NOT NULL default '',
  `skill2` varchar(50) NOT NULL default '',
  `skill3` varchar(50) NOT NULL default '',
  `place` varchar(50) NOT NULL default '',
  `start` date NOT NULL default '0000-00-00',
  `identr` int(11) NOT NULL default '0',
  `idcont` int(11) NOT NULL default '0',
  `descr` longtext NOT NULL,
  `typecontr` varchar(50) NOT NULL default '',
  `datereg` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`idvac`)
) ENGINE=InnoDB AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `vacancy`
-- 

INSERT INTO `vacancy` VALUES (1, 'UNIX Specialist', 'IT', 'UNIX', 'Network admin', 'Shell scripts', 'Vaud', '2005-01-15', 10, 7, 'Anforderungen:\nDevelopment of strategic P&L system.  \nArchitecture/Environment:\nSQL Server 2000, DTS ( Data Transformation Services )\nCO+/XML\nVB 6.0 for strategic client.\nMS Access and Excel for EUC and tactical systems.\nPlatform: NT 4 / 2000\n1* SQL Server Programmer\n2 years SQL Server programming experience required.\nDTS and scheduling knowledge required.\nDBA skills an advantage.\n1 * VB/VBA programmer\n2 Years VB programming experience required\nVBA programming experience required\nExperience of interfacing VB/VBA with SQL Server or Sybase/Oracle required.\nAbility to develop simple stored procedures/views on SQL Server required.\nServer/VB/VBA programmer ( Mixed Role )\n2 Years SQL Server or Sybase/Oracle programming experience required\n2 Years VB or VBA programming experience required\nnking experience preferred.', 'Permanent', '2005-01-06');
INSERT INTO `vacancy` VALUES (2, 'Test', 'IT', 'testt', 'test', 'test', 'Lausanne', '2005-01-31', 10, 8, 'test', 'permanent', '2005-01-07');
INSERT INTO `vacancy` VALUES (3, 'TestCoimm', 'Commerce', 'comm', 'comm', 'comm', 'Venoge sur Saone', '2020-01-20', 11, 6, 'commcommcommcommcommcommcomm', 'temporaire', '2005-01-04');
INSERT INTO `vacancy` VALUES (4, 'TestCoimm', 'Commerce', 'comm', 'comm', 'comm', 'Venoge sur Saone', '2005-01-31', 11, 7, 'commcommcommcommcommcommcomm', 'temporaire', '2005-01-02');
INSERT INTO `vacancy` VALUES (5, 'test2', 'Administration', 'test2', 'ts', 'test', 'Lugano', '2005-01-20', 12, 9, 'test', 'Festanstellung', '2005-01-10');
