-- phpMyAdmin SQL Dump
-- version 2.6.0-rc2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 12, 2005 at 03:36 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=15 ;

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
) ENGINE=MyISAM AUTO_INCREMENT=14 ;

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
) ENGINE=MyISAM AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `role`
-- 

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL auto_increment,
  `role` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`idrole`)
) ENGINE=MyISAM AUTO_INCREMENT=4 ;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 ;
