-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 03:16 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `web-wikim_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `wlm_mail`
--

CREATE TABLE IF NOT EXISTS `wlm_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User Identifier',
  `email` tinytext NOT NULL COMMENT 'User''s Email',
  `subID` tinytext NOT NULL COMMENT 'Submission ID',
  `voteID` tinytext NOT NULL COMMENT 'Vote ID',
  `verifyID` tinytext NOT NULL COMMENT 'Verification ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wlm_submission`
--

CREATE TABLE IF NOT EXISTS `wlm_submission` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Photo ID',
  `subID` tinytext NOT NULL COMMENT 'Submitter''s ID',
  `commonsLink` text NOT NULL COMMENT 'Photo''s Wikimedia Common''s Link',
  `authorName` text NOT NULL COMMENT 'Name of Author',
  `verifyCode` varchar(32) NOT NULL COMMENT 'Photo Verification Status',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wlm_votes`
--

CREATE TABLE IF NOT EXISTS `wlm_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Vote ID',
  `voteID` varchar(32) NOT NULL COMMENT 'Voter ID',
  `photoID` int(11) NOT NULL COMMENT 'Photo ID',
  `verify` tinytext NOT NULL COMMENT 'Vote Verification Status',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
