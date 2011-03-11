-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2011 at 10:30 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spark1`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `url`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Bilabong Surfwear', 'Advert for new Bilabong watches', 'www.bilabong.com', 'bilabong.gif', '2011-03-04 21:44:52', '2011-03-04 21:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `advert_index`
--

CREATE TABLE IF NOT EXISTS `advert_index` (
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `field` varchar(50) NOT NULL DEFAULT '',
  `position` bigint(20) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyword`,`field`,`position`,`id`),
  KEY `advert_index_id_advert_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert_index`
--

INSERT INTO `advert_index` (`keyword`, `field`, `position`, `id`) VALUES
('advert', 'description', 0, 1),
('bilabong', 'description', 3, 1),
('bilabong', 'title', 0, 1),
('surfwear', 'title', 1, 1),
('watches', 'description', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `advert_network`
--

CREATE TABLE IF NOT EXISTS `advert_network` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `advert_id` bigint(20) DEFAULT NULL,
  `network_id` bigint(20) DEFAULT NULL,
  `click_count` bigint(20) NOT NULL DEFAULT '2',
  `position` bigint(20) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `advert_id_idx` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert_network`
--

INSERT INTO `advert_network` (`id`, `advert_id`, `network_id`, `click_count`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 1, 1, '2011-03-04 21:44:52', '2011-03-04 21:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `application_error`
--

CREATE TABLE IF NOT EXISTS `application_error` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` text,
  `type` varchar(100) DEFAULT NULL,
  `file` text,
  `line` bigint(20) DEFAULT NULL,
  `trace` longtext,
  `code` bigint(20) DEFAULT NULL,
  `module` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `uri` text,
  `user` varchar(100) DEFAULT NULL,
  `comment` longtext,
  `severity` varchar(255) DEFAULT 'medium',
  `user_agent` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `application_error`
--

INSERT INTO `application_error` (`id`, `message`, `type`, `file`, `line`, `trace`, `code`, `module`, `action`, `uri`, `user`, `comment`, `severity`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.14) Gecko/20110218 Firefox/3.6.14', '2011-03-04 21:46:02', '0000-00-00 00:00:00'),
(2, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.14) Gecko/20110218 Firefox/3.6.14', '2011-03-04 21:48:19', '0000-00-00 00:00:00'),
(3, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.14) Gecko/20110218 Firefox/3.6.14', '2011-03-05 00:48:59', '0000-00-00 00:00:00'),
(4, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-07 19:58:02', '0000-00-00 00:00:00'),
(5, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-07 20:09:37', '0000-00-00 00:00:00'),
(6, 'Call to a member function getUsername() on a non-object', 'PHP error', 'C:xampphtdocsspark1pluginssfDoctrineGuardPluginlibusersfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-07 20:10:02', '0000-00-00 00:00:00'),
(7, 'Call to a member function getObject() on a non-object', 'PHP error', 'C:xampphtdocsspark1appsfrontendmodulessfGuardAuthactionsactions.class.php', 26, NULL, 1, NULL, NULL, '/favicon.ico', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-08 22:17:40', '0000-00-00 00:00:00'),
(8, 'Call to a member function getObject() on a non-object', 'PHP error', 'C:xampphtdocsspark1appsfrontendmodulessfGuardAuthactionsactions.class.php', 26, NULL, 1, NULL, NULL, '/favicon.ico', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-08 22:17:43', '0000-00-00 00:00:00'),
(9, 'Call to a member function getObject() on a non-object', 'PHP error', 'C:xampphtdocsspark1appsfrontendmodulessfGuardAuthactionsactions.class.php', 26, NULL, 1, NULL, NULL, '/favicon.ico', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-09 19:48:49', '0000-00-00 00:00:00'),
(10, 'Call to a member function getObject() on a non-object', 'PHP error', 'C:xampphtdocsspark1appsfrontendmodulessfGuardAuthactionsactions.class.php', 26, NULL, 1, NULL, NULL, '/favicon.ico', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-09 19:49:02', '0000-00-00 00:00:00'),
(11, 'Call to a member function getUser() on a non-object', 'PHP error', 'C:xampphtdocsspark1appsfrontendmodulesfriendactionsactions.class.php', 17, NULL, 1, NULL, NULL, '/frontend_dev.php/Friends/picnpay_network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-09 22:14:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `network_count` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `fullname`, `logo`, `url`, `email`, `description`, `token`, `is_activated`, `created_at`, `updated_at`, `network_count`) VALUES
(1, 3, 'Pic N Pay Stores', NULL, 'www.picnpay.com', 'raymond@picnpay.com', 'The Pic N Pay Client', 'picnpay_client', 1, '2010-09-10 00:00:00', '2011-03-04 21:44:52', 1),
(2, 2, 'Nine Miles Surf', NULL, 'www.ninemiles.com', 'faizel@ninemiles.com', 'Nine Miles Client', 'ninemiles_client', 1, '2010-09-10 00:00:00', '2011-03-04 21:44:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `record_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `record_id` bigint(20) NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_delete` tinyint(1) DEFAULT '0',
  `edition_reason` longtext COLLATE utf8_unicode_ci,
  `reply` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `record_model_record_id_idx` (`record_model`,`record_id`),
  KEY `reply_idx` (`reply`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `comment_report`
--

CREATE TABLE IF NOT EXISTS `comment_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `reason` longtext COLLATE utf8_unicode_ci NOT NULL,
  `referer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'untreated',
  `id_comment` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_comment_idx` (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment_report`
--


-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `owner_id` bigint(20) DEFAULT NULL,
  `reciever_id` bigint(20) DEFAULT NULL,
  `type_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id_idx` (`type_id`),
  KEY `state_id_idx` (`state_id`),
  KEY `owner_id_idx` (`owner_id`),
  KEY `reciever_id_idx` (`reciever_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id`, `owner_id`, `reciever_id`, `type_id`, `state_id`) VALUES
(1, 1, 2, 1, 1),
(2, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `connection_state`
--

CREATE TABLE IF NOT EXISTS `connection_state` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `connection_state`
--

INSERT INTO `connection_state` (`id`, `title`) VALUES
(1, 'accepted'),
(2, 'pending'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `connection_type`
--

CREATE TABLE IF NOT EXISTS `connection_type` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `connection_type`
--

INSERT INTO `connection_type` (`id`, `title`) VALUES
(1, 'friend');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `title`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Messages', 'The messaging system for the network', 'message_index', '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(2, 'Photos', 'This allows the user to upload and view photos shared on the network', 'photo_index', '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(3, 'Friends', 'This allows the user to manage ther friends', 'networkuser_index', '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(4, 'Speakout', 'This allows the user to speak about topics and categoires', 'speakout_index', '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(5, 'Videos', 'This allows the user to upload and view videos shared on the network', 'video_index', '2011-03-04 21:44:52', '2011-03-04 21:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `title`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `htmlbody` varchar(255) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `network_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `network_id_idx` (`network_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `subject`, `body`, `htmlbody`, `networkuser_id`, `network_id`, `created_at`, `updated_at`) VALUES
(1, 'hello', 'hello', 'hello', 1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53'),
(2, 'where are you', 'where are you', 'where are you', 1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `message_reciever`
--

CREATE TABLE IF NOT EXISTS `message_reciever` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `messagestatus_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `message_id_idx` (`message_id`),
  KEY `messagestatus_id_idx` (`messagestatus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message_reciever`
--


-- --------------------------------------------------------

--
-- Table structure for table `message_status`
--

CREATE TABLE IF NOT EXISTS `message_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_status`
--

INSERT INTO `message_status` (`id`, `title`) VALUES
(1, 'unread'),
(2, 'read');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE IF NOT EXISTS `network` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) NOT NULL,
  `networktype_id` bigint(20) NOT NULL,
  `networkcategory_id` bigint(20) NOT NULL,
  `subdomain` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature_count` bigint(20) DEFAULT '3',
  `user_count` bigint(20) DEFAULT '0',
  `logo` varchar(255) DEFAULT NULL,
  `accesskey` varchar(255) DEFAULT '0',
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subdomain_index_idx` (`subdomain`),
  UNIQUE KEY `slug_index_idx` (`slug`,`id`),
  UNIQUE KEY `network_sluggable_idx` (`slug`),
  KEY `client_id_idx` (`client_id`),
  KEY `networktype_id_idx` (`networktype_id`),
  KEY `networkcategory_id_idx` (`networkcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `client_id`, `networktype_id`, `networkcategory_id`, `subdomain`, `title`, `description`, `feature_count`, `user_count`, `logo`, `accesskey`, `is_public`, `is_activated`, `expires_at`, `created_at`, `updated_at`, `slug`) VALUES
(1, 1, 2, 6, 'picnpay', 'Pic N Pay Group Buying', 'This is the Pic N Pay Group buying network used to send deals to all is users', 4, 2, NULL, '0', 1, 1, '2012-09-10 00:00:00', '2010-09-10 00:00:00', '2011-03-04 21:44:52', 'picnpay_network'),
(2, 2, 2, 4, 'ninemiles', 'Nine Miles Surf', 'This the Nine miles surfing community', 0, 1, NULL, '0', 1, 1, '2012-09-10 00:00:00', '2010-09-10 00:00:00', '2011-03-04 21:44:52', 'ninemiles_network');

-- --------------------------------------------------------

--
-- Table structure for table `network_category`
--

CREATE TABLE IF NOT EXISTS `network_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `network_category`
--

INSERT INTO `network_category` (`id`, `title`) VALUES
(1, 'Music'),
(2, 'Dating'),
(3, 'Places'),
(4, 'Sport'),
(5, 'Online Store'),
(6, 'Group Buying');

-- --------------------------------------------------------

--
-- Table structure for table `network_feature`
--

CREATE TABLE IF NOT EXISTS `network_feature` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `network_id` bigint(20) DEFAULT NULL,
  `feature_id` bigint(20) DEFAULT NULL,
  `active` bigint(20) NOT NULL DEFAULT '2',
  `position` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `feature_id_idx` (`feature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `network_feature`
--

INSERT INTO `network_feature` (`id`, `network_id`, `feature_id`, `active`, `position`) VALUES
(1, 1, 3, 1, 10),
(3, 1, 1, 1, 30),
(4, 1, 2, 2, 40),
(5, 1, 4, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `network_type`
--

CREATE TABLE IF NOT EXISTS `network_type` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `network_type`
--

INSERT INTO `network_type` (`id`, `title`) VALUES
(1, 'Enterprise'),
(2, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `network_user`
--

CREATE TABLE IF NOT EXISTS `network_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `network_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `is_private` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `network_user`
--

INSERT INTO `network_user` (`id`, `network_id`, `user_id`, `is_private`) VALUES
(1, 1, 3, 0),
(2, 1, 4, 0),
(3, 2, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `url`, `networkuser_id`, `created_at`, `updated_at`) VALUES
(1, 'e8e86c408f477770deee4f413a9100e60bcd6da0.png', 1, '2011-03-08 21:44:27', '2011-03-08 21:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `photo_comment`
--

CREATE TABLE IF NOT EXISTS `photo_comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `htmlbody` varchar(255) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `photolink_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `photolink_id_idx` (`photolink_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `photo_count` bigint(20) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo_link`
--

CREATE TABLE IF NOT EXISTS `photo_link` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `photo_id` bigint(20) DEFAULT NULL,
  `gallery_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_id_idx` (`photo_id`),
  KEY `gallery_id_idx` (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_link`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo_view`
--

CREATE TABLE IF NOT EXISTS `photo_view` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `network_id` bigint(20) DEFAULT NULL,
  `photo_id` bigint(20) DEFAULT NULL,
  `has_viewed` bigint(20) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `photo_id_idx` (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_view`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_forgot_password`
--

CREATE TABLE IF NOT EXISTS `sf_guard_forgot_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sf_guard_forgot_password`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'The main admin group for Spark', '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(2, 'client', 'The main client group for Spark', '2011-03-04 21:44:52', '2011-03-04 21:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_group_permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sf_guard_permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sf_guard_remember_key`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `first_name`, `last_name`, `email_address`, `username`, `algorithm`, `salt`, `password`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'shadley', 'wentzel', 'shad6ster@gmail.com', 'sanjuro', 'sha1', 'e8c147dfe56c911f4e34f898ddcdd231', '23221e34cff83eaf3852280a6bdc052a5da561c9', 1, 1, '2011-03-09 20:08:15', '2011-03-04 21:44:52', '2011-03-09 20:08:15'),
(2, 'faizel', 'farat', 'faizel@gmail.com', 'faizel', 'sha1', '9a2fd797fbd4772228b18246c7449a0a', '053c9f1454d84367aeb5a7d2d6c6e5f82c62b6bb', 1, 1, '2011-03-09 19:50:05', '2011-03-04 21:44:52', '2011-03-09 19:50:05'),
(3, 'raymond', 'ackerman', 'raymond@gmail.com', 'raymond', 'sha1', '1f69f0e8390c3b1f28a2f9b5c28e60ae', '37f3b7e3e219d35e3088b5d3efa937c64d03381d', 1, 0, '2011-03-09 22:14:20', '2011-03-04 21:44:52', '2011-03-09 22:14:20'),
(4, 'salie', 'moosa', 'salie@gmail.com', 'salie', 'sha1', '82261787f1b98ae6cd8ef863e8eed7b3', 'b7342e5742db006f42e8eb6e5efee5f9c603099c', 1, 0, NULL, '2011-03-04 21:44:52', '2011-03-04 21:44:52'),
(5, 'durrie', 'moosa', 'durrie@gmail.com', 'durrie', 'sha1', 'd9cce66d4a4d1d6135eb5a66673b926d', 'd640a60c8e4e1440da9cb66cdba8479f7d816498', 1, 0, NULL, '2011-03-04 21:44:52', '2011-03-04 21:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53'),
(2, 2, '2011-03-04 21:44:53', '2011-03-04 21:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `sf_multisite_theme_profile`
--

CREATE TABLE IF NOT EXISTS `sf_multisite_theme_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) NOT NULL,
  `sf_multisite_theme_theme_info_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_name` (`site_name`),
  KEY `sf_multisite_theme_theme_info_id_idx` (`sf_multisite_theme_theme_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sf_multisite_theme_profile`
--

INSERT INTO `sf_multisite_theme_profile` (`id`, `site_name`, `sf_multisite_theme_theme_info_id`, `created_at`, `updated_at`) VALUES
(1, 'Pic N Pay Group Buying Network', 3, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(2, 'Nine Miles Surf', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `sf_multisite_theme_profile_host`
--

CREATE TABLE IF NOT EXISTS `sf_multisite_theme_profile_host` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sf_multisite_theme_profile_id` bigint(20) NOT NULL,
  `host_uri` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sf_multisite_theme_profile_id_idx` (`sf_multisite_theme_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sf_multisite_theme_profile_host`
--

INSERT INTO `sf_multisite_theme_profile_host` (`id`, `sf_multisite_theme_profile_id`, `host_uri`, `created_at`, `updated_at`) VALUES
(1, 1, 'picnpay.spark1.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(2, 1, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(3, 1, 'picnpay.spark1.com', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(4, 2, 'ninemiles.spark1.localhost', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(5, 2, '10.32.1.235', '2011-01-31 13:17:29', '2011-01-31 13:17:29'),
(6, 2, 'ninemiles.spark1.com', '2011-01-31 13:17:29', '2011-01-31 13:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `sf_multisite_theme_theme_info`
--

CREATE TABLE IF NOT EXISTS `sf_multisite_theme_theme_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) NOT NULL,
  `theme_enabled` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sf_multisite_theme_theme_info`
--

INSERT INTO `sf_multisite_theme_theme_info` (`id`, `theme_name`, `theme_enabled`, `created_at`, `updated_at`) VALUES
(1, 'blueocean', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(2, 'redsea', 1, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(3, 'blackandwhite', 1, '2011-03-04 17:34:41', '2011-03-04 17:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `speakout_category`
--

CREATE TABLE IF NOT EXISTS `speakout_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `network_id` bigint(20) DEFAULT NULL,
  `topic_count` bigint(20) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `network_id_idx` (`network_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `speakout_category`
--

INSERT INTO `speakout_category` (`id`, `title`, `description`, `network_id`, `topic_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Events', 'Events that are coming up', 1, 0, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(2, 'Incidents', 'Incidents that are have happened', 1, 0, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_category_index`
--

CREATE TABLE IF NOT EXISTS `speakout_category_index` (
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `field` varchar(50) NOT NULL DEFAULT '',
  `position` bigint(20) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyword`,`field`,`position`,`id`),
  KEY `speakout_category_index_id_speakout_category_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakout_category_index`
--

INSERT INTO `speakout_category_index` (`keyword`, `field`, `position`, `id`) VALUES
('coming', 'description', 3, 1),
('events', 'description', 0, 1),
('events', 'title', 0, 1),
('happened', 'description', 4, 2),
('incidents', 'description', 0, 2),
('incidents', 'title', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_reply`
--

CREATE TABLE IF NOT EXISTS `speakout_reply` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` varchar(255) DEFAULT NULL,
  `htmlbody` varchar(255) DEFAULT NULL,
  `topic_id` bigint(20) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id_idx` (`topic_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `speakout_reply`
--

INSERT INTO `speakout_reply` (`id`, `body`, `htmlbody`, `topic_id`, `networkuser_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is a test reply', 'This is a test reply', 1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(2, 'This is a test reply2', 'This is a test reply2', 2, 2, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(3, 'This is a test reply3', 'This is a test reply3', 3, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(4, 'This is a test reply4', 'This is a test reply4', 3, 2, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_topic`
--

CREATE TABLE IF NOT EXISTS `speakout_topic` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `networkuser_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `speakout_topic`
--

INSERT INTO `speakout_topic` (`id`, `title`, `description`, `category_id`, `networkuser_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Monthly Workshop', 'This is the topic for the Monthly Workshop', 1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(2, 'Annual AGM', 'This is the topic for the annual AGM', 1, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(3, 'Accident at Trainline', 'This is the topic for the Accident at Trainline', 2, 2, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL),
(4, 'N2 Accident', 'This is the topic for the N2 Accident', 2, 1, '2011-03-04 21:44:53', '2011-03-04 21:44:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_topic_index`
--

CREATE TABLE IF NOT EXISTS `speakout_topic_index` (
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `field` varchar(50) NOT NULL DEFAULT '',
  `position` bigint(20) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyword`,`field`,`position`,`id`),
  KEY `speakout_topic_index_id_speakout_topic_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakout_topic_index`
--

INSERT INTO `speakout_topic_index` (`keyword`, `field`, `position`, `id`) VALUES
('monthly', 'description', 6, 1),
('monthly', 'title', 0, 1),
('topic', 'description', 3, 1),
('workshop', 'description', 7, 1),
('workshop', 'title', 1, 1),
('agm', 'description', 7, 2),
('agm', 'title', 1, 2),
('annual', 'description', 6, 2),
('annual', 'title', 0, 2),
('topic', 'description', 3, 2),
('accident', 'description', 6, 3),
('accident', 'title', 0, 3),
('topic', 'description', 3, 3),
('trainline', 'description', 8, 3),
('trainline', 'title', 2, 3),
('accident', 'description', 7, 4),
('accident', 'title', 1, 4),
('n2', 'description', 6, 4),
('n2', 'title', 0, 4),
('topic', 'description', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sfuser_id` bigint(20) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `gender_id` bigint(20) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `birthday` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sfuser_id_idx` (`sfuser_id`),
  KEY `gender_id_idx` (`gender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `sfuser_id`, `mobile_no`, `description`, `profile_pic`, `gender_id`, `city`, `country`, `birthday`) VALUES
(1, 3, '110796', 'Loves small bunnies', 'salie.png', 1, 'Cape Town', 'South Africa', '0000-00-00 00:00:00'),
(2, 4, '110796', 'Loves small bunnies', 'salie.png', 1, 'Cape Town', 'South Africa', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_index`
--

CREATE TABLE IF NOT EXISTS `user_profile_index` (
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `field` varchar(50) NOT NULL DEFAULT '',
  `position` bigint(20) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`keyword`,`field`,`position`,`id`),
  KEY `user_profile_index_id_user_profile_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile_index`
--

INSERT INTO `user_profile_index` (`keyword`, `field`, `position`, `id`) VALUES
('110796', 'mobile_no', 0, 1),
('3', 'sfuser_id', 0, 1),
('110796', 'mobile_no', 0, 2),
('4', 'sfuser_id', 0, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advert_index`
--
ALTER TABLE `advert_index`
  ADD CONSTRAINT `advert_index_id_advert_id` FOREIGN KEY (`id`) REFERENCES `advert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `advert_network`
--
ALTER TABLE `advert_network`
  ADD CONSTRAINT `advert_network_advert_id_advert_id` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `advert_network_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_reply_comment_id` FOREIGN KEY (`reply`) REFERENCES `comment` (`id`);

--
-- Constraints for table `comment_report`
--
ALTER TABLE `comment_report`
  ADD CONSTRAINT `comment_report_id_comment_comment_id` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_owner_id_network_user_id` FOREIGN KEY (`owner_id`) REFERENCES `network_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `connection_reciever_id_network_user_id` FOREIGN KEY (`reciever_id`) REFERENCES `network_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `connection_state_id_connection_state_id` FOREIGN KEY (`state_id`) REFERENCES `connection_state` (`id`),
  ADD CONSTRAINT `connection_type_id_connection_type_id` FOREIGN KEY (`type_id`) REFERENCES `connection_type` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`),
  ADD CONSTRAINT `message_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`);

--
-- Constraints for table `network`
--
ALTER TABLE `network`
  ADD CONSTRAINT `network_client_id_client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `network_networkcategory_id_network_category_id` FOREIGN KEY (`networkcategory_id`) REFERENCES `network_category` (`id`),
  ADD CONSTRAINT `network_networktype_id_network_type_id` FOREIGN KEY (`networktype_id`) REFERENCES `network_type` (`id`);

--
-- Constraints for table `network_feature`
--
ALTER TABLE `network_feature`
  ADD CONSTRAINT `network_feature_feature_id_feature_id` FOREIGN KEY (`feature_id`) REFERENCES `feature` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `network_feature_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `network_user`
--
ALTER TABLE `network_user`
  ADD CONSTRAINT `network_user_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `network_user_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`);

--
-- Constraints for table `photo_comment`
--
ALTER TABLE `photo_comment`
  ADD CONSTRAINT `photo_comment_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`),
  ADD CONSTRAINT `photo_comment_photolink_id_photo_link_id` FOREIGN KEY (`photolink_id`) REFERENCES `photo_link` (`id`);

--
-- Constraints for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD CONSTRAINT `photo_gallery_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`);

--
-- Constraints for table `photo_link`
--
ALTER TABLE `photo_link`
  ADD CONSTRAINT `photo_link_gallery_id_photo_gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `photo_gallery` (`id`),
  ADD CONSTRAINT `photo_link_photo_id_photo_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Constraints for table `photo_view`
--
ALTER TABLE `photo_view`
  ADD CONSTRAINT `photo_view_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `photo_view_photo_id_feature_id` FOREIGN KEY (`photo_id`) REFERENCES `feature` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_forgot_password`
--
ALTER TABLE `sf_guard_forgot_password`
  ADD CONSTRAINT `sf_guard_forgot_password_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sf_multisite_theme_profile`
--
ALTER TABLE `sf_multisite_theme_profile`
  ADD CONSTRAINT `sssi` FOREIGN KEY (`sf_multisite_theme_theme_info_id`) REFERENCES `sf_multisite_theme_theme_info` (`id`);

--
-- Constraints for table `sf_multisite_theme_profile_host`
--
ALTER TABLE `sf_multisite_theme_profile_host`
  ADD CONSTRAINT `sssi_1` FOREIGN KEY (`sf_multisite_theme_profile_id`) REFERENCES `sf_multisite_theme_profile` (`id`);

--
-- Constraints for table `speakout_category`
--
ALTER TABLE `speakout_category`
  ADD CONSTRAINT `speakout_category_network_id_network_id` FOREIGN KEY (`network_id`) REFERENCES `network` (`id`);

--
-- Constraints for table `speakout_category_index`
--
ALTER TABLE `speakout_category_index`
  ADD CONSTRAINT `speakout_category_index_id_speakout_category_id` FOREIGN KEY (`id`) REFERENCES `speakout_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `speakout_reply`
--
ALTER TABLE `speakout_reply`
  ADD CONSTRAINT `speakout_reply_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `speakout_reply_topic_id_speakout_topic_id` FOREIGN KEY (`topic_id`) REFERENCES `speakout_topic` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `speakout_topic`
--
ALTER TABLE `speakout_topic`
  ADD CONSTRAINT `speakout_topic_category_id_speakout_category_id` FOREIGN KEY (`category_id`) REFERENCES `speakout_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `speakout_topic_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`);

--
-- Constraints for table `speakout_topic_index`
--
ALTER TABLE `speakout_topic_index`
  ADD CONSTRAINT `speakout_topic_index_id_speakout_topic_id` FOREIGN KEY (`id`) REFERENCES `speakout_topic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_gender_id_gender_id` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`),
  ADD CONSTRAINT `user_profile_sfuser_id_sf_guard_user_id` FOREIGN KEY (`sfuser_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profile_index`
--
ALTER TABLE `user_profile_index`
  ADD CONSTRAINT `user_profile_index_id_user_profile_id` FOREIGN KEY (`id`) REFERENCES `user_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
