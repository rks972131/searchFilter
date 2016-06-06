-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 10:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_omd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businesstypes`
--

CREATE TABLE IF NOT EXISTS `tbl_businesstypes` (
  `buz_id` int(11) NOT NULL AUTO_INCREMENT,
  `buz_title` varchar(200) NOT NULL,
  `buz_desc` text NOT NULL,
  PRIMARY KEY (`buz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_businesstypes`
--

INSERT INTO `tbl_businesstypes` (`buz_id`, `buz_title`, `buz_desc`) VALUES
(1, 'Medicine', 'medicine business shop front office'),
(2, 'Grocery', 'grocery shops'),
(3, 'Garments', 'All kind of Garment Business'),
(4, 'Food', 'All kind of food business on counter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts_mst`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts_mst` (
  `cont_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `cont_phone` varchar(20) NOT NULL,
  `enq_detail` text NOT NULL,
  `i_date` datetime NOT NULL,
  `u_date` datetime DEFAULT NULL,
  `u_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`cont_id`),
  UNIQUE KEY `contact_email` (`contact_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contacts_mst`
--

INSERT INTO `tbl_contacts_mst` (`cont_id`, `contact_name`, `contact_email`, `cont_phone`, `enq_detail`, `i_date`, `u_date`, `u_by`) VALUES
(1, 'abhinaya', 'abhi@yahoo.co.in', '9878787898', 'enhancement request for a report plz connect with me', '2015-11-23 00:38:29', NULL, NULL),
(2, 'rjath', 'rjath.t@gmail.com', '9898878776', 'this is a test message', '2015-11-29 22:03:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_licence`
--

CREATE TABLE IF NOT EXISTS `tbl_licence` (
  `licence_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `devicenum` varchar(100) NOT NULL,
  `org_id` int(11) NOT NULL,
  `licence_num` text NOT NULL,
  `activation_date` datetime NOT NULL,
  `active_days` int(11) NOT NULL,
  `i_by` int(11) NOT NULL,
  `i_date` datetime NOT NULL,
  `u_by` int(11) NOT NULL,
  `u_date` datetime NOT NULL,
  `licence_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`licence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE IF NOT EXISTS `tbl_organization` (
  `org_id` int(11) NOT NULL AUTO_INCREMENT,
  `buz_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `org_owner` varchar(100) NOT NULL,
  `org_email` varchar(200) NOT NULL,
  `org_phone` varchar(12) NOT NULL,
  `org_ref` int(11) NOT NULL,
  `org_status` tinyint(4) NOT NULL,
  `i_date` datetime NOT NULL,
  PRIMARY KEY (`org_id`),
  UNIQUE KEY `org_name` (`org_name`,`org_ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`org_id`, `buz_id`, `org_name`, `org_owner`, `org_email`, `org_phone`, `org_ref`, `org_status`, `i_date`) VALUES
(1, 1, 'omd retail', 'abhinaya panigrahi', 'panigrahi.abhinaya@gmail.com', '9538982801', 1000, 1, '2015-11-29 01:11:18'),
(8, 4, 'org 4', 'abhinash', 'abhinash@mail.com', '0898877687', 1001, 1, '2015-11-29 21:40:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
