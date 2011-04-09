-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2011 at 09:59 PM
-- Server version: 5.0.92
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yuowebco_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `description` varchar(200) default NULL,
  `url` varchar(200) default NULL,
  `image_path` varchar(200) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `url`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Bilabong Surfwear', 'Advert for new Bilabong watches', 'www.bilabong.com', 'bilabong.gif', '2011-03-07 16:55:29', '2011-03-07 16:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `advert_index`
--

CREATE TABLE IF NOT EXISTS `advert_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `advert_id` bigint(20) default NULL,
  `network_id` bigint(20) default NULL,
  `click_count` bigint(20) NOT NULL default '2',
  `position` bigint(20) default NULL,
  `is_active` tinyint(1) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `advert_id_idx` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert_network`
--

INSERT INTO `advert_network` (`id`, `advert_id`, `network_id`, `click_count`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 1, 1, '2011-03-07 16:55:29', '2011-03-07 16:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `application_error`
--

CREATE TABLE IF NOT EXISTS `application_error` (
  `id` bigint(20) NOT NULL auto_increment,
  `message` text,
  `type` varchar(100) default NULL,
  `file` text,
  `line` bigint(20) default NULL,
  `trace` longtext,
  `code` bigint(20) default NULL,
  `module` varchar(100) default NULL,
  `action` varchar(100) default NULL,
  `uri` text,
  `user` varchar(100) default NULL,
  `comment` longtext,
  `severity` varchar(255) default 'medium',
  `user_agent` varchar(100) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `application_error`
--

INSERT INTO `application_error` (`id`, `message`, `type`, `file`, `line`, `trace`, `code`, `module`, `action`, `uri`, `user`, `comment`, `severity`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 26, NULL, 1, NULL, NULL, '/index.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-19 18:41:24', '0000-00-00 00:00:00'),
(2, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-19 21:00:37', '0000-00-00 00:00:00'),
(3, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-19 21:01:38', '0000-00-00 00:00:00'),
(4, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-19 21:02:38', '0000-00-00 00:00:00'),
(5, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-19 21:03:39', '0000-00-00 00:00:00'),
(6, 'syntax error, unexpected T_ECHO', 'PHP error', '/home/yuowebco/plugins/sfMultisiteThemePlugin/lib/view/sfMultisiteThemeView.class.php', 42, NULL, 4, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-19 23:30:22', '0000-00-00 00:00:00'),
(7, 'Call to a member function getLast() on a non-object', 'PHP error', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Hydrator/RecordDriver.php', 110, NULL, 1, NULL, NULL, '/index.php/Show-Friend/?user=3&network_id=1', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-19 23:52:54', '0000-00-00 00:00:00'),
(8, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 01:09:02', '0000-00-00 00:00:00'),
(9, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 01:10:04', '0000-00-00 00:00:00'),
(10, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 01:11:06', '0000-00-00 00:00:00'),
(11, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 01:12:11', '0000-00-00 00:00:00'),
(12, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 05:55:07', '0000-00-00 00:00:00'),
(13, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 05:56:09', '0000-00-00 00:00:00'),
(14, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 05:57:09', '0000-00-00 00:00:00'),
(15, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 05:58:10', '0000-00-00 00:00:00'),
(16, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 07:11:28', '0000-00-00 00:00:00'),
(17, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 09:48:19', '0000-00-00 00:00:00'),
(18, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 09:49:19', '0000-00-00 00:00:00'),
(19, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 09:50:21', '0000-00-00 00:00:00'),
(20, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 09:51:22', '0000-00-00 00:00:00'),
(21, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 13:35:26', '0000-00-00 00:00:00'),
(22, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 13:36:27', '0000-00-00 00:00:00'),
(23, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 13:37:29', '0000-00-00 00:00:00'),
(24, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 13:38:30', '0000-00-00 00:00:00'),
(25, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 17:16:23', '0000-00-00 00:00:00'),
(26, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 17:17:26', '0000-00-00 00:00:00'),
(27, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 17:18:27', '0000-00-00 00:00:00'),
(28, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 17:19:28', '0000-00-00 00:00:00'),
(29, 'Call to a member function getId() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 125, NULL, 1, NULL, NULL, '/index.php/Join/kustom-cruisers-car-club', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-20 17:50:48', '0000-00-00 00:00:00'),
(30, 'Call to a member function getLast() on a non-object', 'PHP error', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Hydrator/RecordDriver.php', 110, NULL, 1, NULL, NULL, '/index.php/Show-Friend/?user=3&network_id=1', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-20 17:53:24', '0000-00-00 00:00:00'),
(31, 'Call to a member function getLast() on a non-object', 'PHP error', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Hydrator/RecordDriver.php', 110, NULL, 1, NULL, NULL, '/index.php/Show-Friend/?user=3&network_id=1', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-20 18:25:56', '0000-00-00 00:00:00'),
(32, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 19:46:07', '0000-00-00 00:00:00'),
(33, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 20:54:16', '0000-00-00 00:00:00'),
(34, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 20:55:18', '0000-00-00 00:00:00'),
(35, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 20:56:20', '0000-00-00 00:00:00'),
(36, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 20:57:22', '0000-00-00 00:00:00'),
(37, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 23:56:32', '0000-00-00 00:00:00'),
(38, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 23:57:33', '0000-00-00 00:00:00'),
(39, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 23:58:34', '0000-00-00 00:00:00'),
(40, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-20 23:59:35', '0000-00-00 00:00:00'),
(41, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 03:58:11', '0000-00-00 00:00:00'),
(42, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 03:59:11', '0000-00-00 00:00:00'),
(43, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 04:00:12', '0000-00-00 00:00:00'),
(44, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 04:01:12', '0000-00-00 00:00:00'),
(45, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 07:27:14', '0000-00-00 00:00:00'),
(46, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 07:28:14', '0000-00-00 00:00:00'),
(47, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 07:29:15', '0000-00-00 00:00:00'),
(48, 'Call to a member function getObject() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php', 25, NULL, 1, NULL, NULL, '/', NULL, NULL, 'medium', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2011-03-21 07:30:15', '0000-00-00 00:00:00'),
(49, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/index.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:10:33', '0000-00-00 00:00:00'),
(50, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:11:49', '0000-00-00 00:00:00'),
(51, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:16:43', '0000-00-00 00:00:00'),
(52, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:16:54', '0000-00-00 00:00:00'),
(53, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:23:43', '0000-00-00 00:00:00'),
(54, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:24:43', '0000-00-00 00:00:00'),
(55, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 08:26:43', '0000-00-00 00:00:00'),
(56, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signout'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signout', 'http://marcovie.yuoweb.com/index.php/guard/logout', 'marcovie', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-21 08:55:40', '2011-03-21 08:55:40'),
(57, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signout'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signout', 'http://marcovie.yuoweb.com/index.php/guard/logout', 'marcovie', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-21 09:10:15', '2011-03-21 09:10:15'),
(58, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signout'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signout', 'http://marcovie.yuoweb.com/index.php/guard/logout', 'marcovie', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-21 09:11:03', '2011-03-21 09:11:03'),
(59, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signout'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signout', 'http://marcovie.yuoweb.com/index.php/guard/logout', 'marcovie', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-21 09:15:13', '2011-03-21 09:15:13'),
(60, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signout'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signout', 'http://marcovie.yuoweb.com/index.php/guard/logout', 'marcovie', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-21 09:15:28', '2011-03-21 09:15:28'),
(61, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 12:01:18', '0000-00-00 00:00:00'),
(62, 'Call to a member function getId() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 125, NULL, 1, NULL, NULL, '/index.php/Join/uscape-network', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-21 12:04:58', '0000-00-00 00:00:00'),
(63, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/index.php/guard/login', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:24:36', '0000-00-00 00:00:00'),
(64, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/index.php/guard/login', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:24:52', '0000-00-00 00:00:00'),
(65, 'The route "network_logout" does not exist.', 'sfConfigurationException', '/home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php', 3101, '#0 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2250): sfPatternRouting->generate(''network_logout'', Array, false)\n#1 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(88): sfWebController->genUrl(Array, false)\n#2 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(83): url_for1(Array, false)\n#3 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(119): url_for2(''network_logout'')\n#4 /home/yuowebco/apps/frontend/modules/footer/templates/_default.php(1): url_for()\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(3842): require(''/home/yuowebco/...'')\n#6 /home/yuowebco/lib/vendor/symfony/lib/view/sfPartialView.class.php(110): sfPHPView->renderFile(''url_for2'', Array)\n#7 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(155): sfPartialView->render(''network_logout'')\n#8 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(68): get_component(''/home/yuowebco/...'')\n#9 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(38): get_component_slot()\n#10 /home/yuowebco/public_html/themes/blueocean/layout.php(49): include_component_slot()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(3842): require(''/home/yuowebco/...'')\n#12 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(3877): sfPHPView->renderFile(''footer'', ''default'', Array)\n#13 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(3909): sfPHPView->decorate(''footer'', Array)\n#14 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(979): sfPHPView->render(''footer'')\n#15 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(966): sfExecutionFilter->executeView(''/home/yuowebco/...'')\n#16 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(934): sfExecutionFilter->handleView(''????????<h3>???...'')\n#17 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute()\n#18 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute(''network'', ''index'', ''Success'', Array)\n#19 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain), Object(networkActions), ''Success'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute(Object(sfFilterChain))\n#21 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfBasicSecurityFilter->execute()\n#22 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute(Object(sfFilterChain))\n#23 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute()\n#24 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute(Object(sfFilterChain))\n#25 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward()\n#26 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch(Object(sfFilterChain))\n#27 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#28 {main}', 0, 'network', 'index', 'http://calalilly.yuoweb.com/index.php/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:36:01', '2011-03-22 11:36:01'),
(66, 'The route "network_logout" does not exist.', 'sfConfigurationException', '/home/yuowebco/lib/vendor/symfony/lib/routing/sfPatternRouting.class.php', 313, '#0 /home/yuowebco/lib/vendor/symfony/lib/controller/sfWebController.class.php(74): sfPatternRouting->generate(''network_logout'', Array, false)\n#1 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(88): sfWebController->genUrl(Array, false)\n#2 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(83): url_for1(Array, false)\n#3 /home/yuowebco/lib/vendor/symfony/lib/helper/UrlHelper.php(119): url_for2(''network_logout'')\n#4 /home/yuowebco/apps/frontend/modules/footer/templates/_default.php(1): url_for()\n#5 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(75): require(''/home/yuowebco/...'')\n#6 /home/yuowebco/lib/vendor/symfony/lib/view/sfPartialView.class.php(110): sfPHPView->renderFile(''url_for2'', Array)\n#7 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(155): sfPartialView->render(''network_logout'')\n#8 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(68): get_component(''/home/yuowebco/...'')\n#9 /home/yuowebco/lib/vendor/symfony/lib/helper/PartialHelper.php(38): get_component_slot()\n#10 /home/yuowebco/public_html/themes/blueocean/layout.php(49): include_component_slot()\n#11 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(75): require(''/home/yuowebco/...'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(146): sfPHPView->renderFile(''footer'', ''default'', Array)\n#13 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(196): sfPHPView->decorate(''footer'', Array)\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(155): sfPHPView->render(''footer'')\n#15 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(116): sfExecutionFilter->executeView(''/home/yuowebco/...'')\n#16 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(47): sfExecutionFilter->handleView(''????????<h3>???...'')\n#17 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute()\n#18 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute(''network'', ''index'', ''Success'', Array)\n#19 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain), Object(networkActions), ''Success'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute(Object(sfFilterChain))\n#21 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfBasicSecurityFilter->execute()\n#22 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute(Object(sfFilterChain))\n#23 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute()\n#24 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute(Object(sfFilterChain))\n#25 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward()\n#26 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch(Object(sfFilterChain))\n#27 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#28 {main}', 0, 'network', 'index', 'http://calalilly.yuoweb.com/frontend_dev.php/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:37:25', '2011-03-22 11:37:25'),
(67, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/calalilly.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://calalilly.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://calalilly.yuoweb.com/images/adverts/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:42:40', '2011-03-22 11:42:40'),
(68, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/calalilly.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://calalilly.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://calalilly.yuoweb.com/images/adverts/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:42:44', '2011-03-22 11:42:44'),
(69, 'The decorator template "layout_frontpage.php" does not exist or is unreadable in "/home/yuowebco/public_html/themes/blueocean".', 'sfRenderException', '/home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php', 142, '#0 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(196): sfPHPView->decorate(''<div id="conten...'')\n#1 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(155): sfPHPView->render()\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(116): sfExecutionFilter->executeView(''frontpage'', ''homepage'', ''Success'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(47): sfExecutionFilter->handleView(Object(sfFilterChain), Object(frontpageActions), ''Success'')\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#5 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#6 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#9 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''frontpage'', ''homepage'')\n#11 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#12 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#13 {main}', 0, 'frontpage', 'homepage', 'http://calalilly.yuoweb.com/frontend_dev.php/Homepage/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:43:38', '2011-03-22 11:43:38'),
(70, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/calalilly.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://calalilly.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://calalilly.yuoweb.com/images/adverts/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:43:50', '2011-03-22 11:43:50'),
(71, 'The decorator template "layout_frontpage.php" does not exist or is unreadable in "/home/yuowebco/public_html/themes/blueocean".', 'sfRenderException', '/home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php', 142, '#0 /home/yuowebco/lib/vendor/symfony/lib/view/sfPHPView.class.php(196): sfPHPView->decorate(''<div id="conten...'')\n#1 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(155): sfPHPView->render()\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(116): sfExecutionFilter->executeView(''frontpage'', ''homepage'', ''Success'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(47): sfExecutionFilter->handleView(Object(sfFilterChain), Object(frontpageActions), ''Success'')\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#5 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(44): sfFilterChain->execute()\n#6 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#9 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''frontpage'', ''homepage'')\n#11 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#12 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#13 {main}', 0, 'frontpage', 'homepage', 'http://calalilly.yuoweb.com/frontend_dev.php/Homepage/', 'johhny', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 11:43:55', '2011-03-22 11:43:55'),
(72, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Homepage/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 13:44:04', '0000-00-00 00:00:00'),
(73, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 13:44:06', '0000-00-00 00:00:00'),
(74, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 13:44:09', '0000-00-00 00:00:00'),
(75, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 13:47:08', '0000-00-00 00:00:00'),
(76, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 14:33:37', '0000-00-00 00:00:00'),
(77, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 14:38:07', '0000-00-00 00:00:00'),
(78, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 14:50:39', '0000-00-00 00:00:00'),
(79, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 14:50:58', '0000-00-00 00:00:00'),
(80, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 14:56:30', '0000-00-00 00:00:00'),
(81, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 15:17:53', '0000-00-00 00:00:00');
INSERT INTO `application_error` (`id`, `message`, `type`, `file`, `line`, `trace`, `code`, `module`, `action`, `uri`, `user`, `comment`, `severity`, `user_agent`, `created_at`, `updated_at`) VALUES
(82, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 15:18:56', '0000-00-00 00:00:00'),
(83, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 15:38:21', '0000-00-00 00:00:00'),
(84, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 15:38:45', '0000-00-00 00:00:00'),
(85, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 15:38:46', '0000-00-00 00:00:00'),
(86, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 15:38:58', '0000-00-00 00:00:00'),
(87, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 15:39:00', '0000-00-00 00:00:00'),
(88, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 16:20:18', '0000-00-00 00:00:00'),
(89, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 16:20:50', '0000-00-00 00:00:00'),
(90, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 16:50:33', '0000-00-00 00:00:00'),
(91, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 16:57:30', '0000-00-00 00:00:00'),
(92, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 16:59:57', '0000-00-00 00:00:00'),
(93, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 18:34:23', '0000-00-00 00:00:00'),
(94, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 19:19:49', '0000-00-00 00:00:00'),
(95, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 19:26:40', '0000-00-00 00:00:00'),
(96, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 19:51:42', '0000-00-00 00:00:00'),
(97, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 20:16:00', '0000-00-00 00:00:00'),
(98, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 20:16:30', '0000-00-00 00:00:00'),
(99, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 20:16:36', '0000-00-00 00:00:00'),
(100, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 20:16:38', '0000-00-00 00:00:00'),
(101, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 20:31:17', '0000-00-00 00:00:00'),
(102, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-22 20:31:50', '0000-00-00 00:00:00'),
(103, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15', '2011-03-22 20:32:12', '0000-00-00 00:00:00'),
(104, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-23 08:45:45', '0000-00-00 00:00:00'),
(105, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 08:41:51', '0000-00-00 00:00:00'),
(106, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 08:42:31', '0000-00-00 00:00:00'),
(107, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 09:16:46', '0000-00-00 00:00:00'),
(108, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 09:16:56', '0000-00-00 00:00:00'),
(109, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 12:12:19', '0000-00-00 00:00:00'),
(110, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 16:33:53', '0000-00-00 00:00:00'),
(111, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-25 16:34:17', '0000-00-00 00:00:00'),
(112, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-28 07:42:56', '0000-00-00 00:00:00'),
(113, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-28 07:44:57', '0000-00-00 00:00:00'),
(114, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 10:11:37', '0000-00-00 00:00:00'),
(115, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In?', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 10:12:15', '0000-00-00 00:00:00'),
(116, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In?', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 10:12:18', '0000-00-00 00:00:00'),
(117, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 10:12:21', '0000-00-00 00:00:00'),
(118, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 10:13:20', '0000-00-00 00:00:00'),
(119, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-28 11:23:58', '0000-00-00 00:00:00'),
(120, 'Invalid argument supplied for foreach()', 'PHP error', '/home/yuowebco/apps/frontend/modules/photo/templates/_photos.iphone.php', 2, NULL, 2, NULL, NULL, '/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-28 12:54:13', '0000-00-00 00:00:00'),
(121, 'The decorator template "layout_frontpage.php" does not exist or is unreadable in "/home/yuowebco/public_html/themes/kustomcruise".', 'sfRenderException', '/home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php', 3875, '#0 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(3909): sfPHPView->decorate(''<div id="conten...'')\n#1 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(979): sfPHPView->render()\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(966): sfExecutionFilter->executeView(''frontpage'', ''homepage'', ''Success'', Array)\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(934): sfExecutionFilter->handleView(Object(sfFilterChain), Object(frontpageActions), ''Success'')\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#5 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#6 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''frontpage'', ''homepage'')\n#11 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#12 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#13 {main}', 0, 'frontpage', 'homepage', 'http://kcruise.yuoweb.com/Homepage/', 'craigd', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-29 11:19:42', '2011-03-29 11:19:42'),
(122, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-in/', NULL, NULL, 'medium', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.16) Gecko/20110323 Ubuntu/10.10 (maverick) Firefox/', '2011-03-30 13:31:02', '0000-00-00 00:00:00'),
(123, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(91): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#11 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/frontend_dev.php/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.16) Gecko/20110323 Ubuntu/10.10 (maverick) Firefox/', '2011-03-30 13:41:52', '2011-03-30 13:41:52'),
(124, 'Empty module and/or action after parsing the URL "/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://kcruise.yuoweb.com/frontend_dev.php', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.16) Gecko/20110323 Ubuntu/10.10 (maverick) Firefox/', '2011-03-30 13:42:16', '2011-03-30 13:42:16'),
(125, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-in/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-03-31 13:14:45', '0000-00-00 00:00:00'),
(126, 'SQLSTATE[42S22]: Column not found: 1054 Unknown column ''f.feedtype_id'' in ''field list''', 'Doctrine_Connection_Mysql_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php', 1082, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection/Statement.php(269): Doctrine_Connection->rethrowException(Object(PDOException), Object(Doctrine_Connection_Statement))\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php(1006): Doctrine_Connection_Statement->execute(Array)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(976): Doctrine_Connection->execute(''SELECT f.id AS ...'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(1026): Doctrine_Query_Abstract->_execute(Array)\n#4 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query.php(267): Doctrine_Query_Abstract->execute(Array, 3)\n#5 /home/yuowebco/lib/model/doctrine/NetworkUser.class.php(69): Doctrine_Query->fetchArray()\n#6 /home/yuowebco/apps/frontend/modules/feed/actions/actions.class.php(27): NetworkUser->getFeeds()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(459): feedActions->executeIndex(Object(sfWebRequest))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(952): sfActions->execute(Object(sfWebRequest))\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(feedActions))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(feedActions))\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#12 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#13 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute()\n#15 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfBasicSecurityFilter->execute(Object(sfFilterChain))\n#16 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#17 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#18 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#19 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''feed'', ''index'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#21 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#22 {main}', 42, 'feed', 'index', 'http://kcruise.yuoweb.com/Feeds/kustom-cruisers-car-club', 'craigd', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-31 17:38:28', '2011-03-31 17:38:28'),
(127, 'SQLSTATE[42S22]: Column not found: 1054 Unknown column ''f.feedtype_id'' in ''field list''', 'Doctrine_Connection_Mysql_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php', 1082, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection/Statement.php(269): Doctrine_Connection->rethrowException(Object(PDOException), Object(Doctrine_Connection_Statement))\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php(1006): Doctrine_Connection_Statement->execute(Array)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(976): Doctrine_Connection->execute(''SELECT f.id AS ...'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(1026): Doctrine_Query_Abstract->_execute(Array)\n#4 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query.php(267): Doctrine_Query_Abstract->execute(Array, 3)\n#5 /home/yuowebco/lib/model/doctrine/NetworkUser.class.php(69): Doctrine_Query->fetchArray()\n#6 /home/yuowebco/apps/frontend/modules/feed/actions/actions.class.php(27): NetworkUser->getFeeds()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(459): feedActions->executeIndex(Object(sfWebRequest))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(952): sfActions->execute(Object(sfWebRequest))\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(feedActions))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(feedActions))\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#12 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#13 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute()\n#15 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfBasicSecurityFilter->execute(Object(sfFilterChain))\n#16 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#17 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#18 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#19 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''feed'', ''index'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#21 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#22 {main}', 42, 'feed', 'index', 'http://fonk.yuoweb.com/Feeds/fonk-network', 'Johnny', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-31 17:59:40', '2011-03-31 17:59:40'),
(128, 'Cannot modify header information - headers already sent by (output started at /home/yuowebco/config/ProjectConfiguration.class.php:10)', 'PHP error', '/home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php', 3452, NULL, 2, NULL, NULL, '/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-31 19:29:08', '0000-00-00 00:00:00'),
(129, 'Cannot modify header information - headers already sent by (output started at /home/yuowebco/config/ProjectConfiguration.class.php:10)', 'PHP error', '/home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php', 3452, NULL, 2, NULL, NULL, '/Sign-In/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-31 19:29:09', '0000-00-00 00:00:00'),
(130, 'SQLSTATE[42S22]: Column not found: 1054 Unknown column ''f.feedtype_id'' in ''field list''', 'Doctrine_Connection_Mysql_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php', 1082, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection/Statement.php(269): Doctrine_Connection->rethrowException(Object(PDOException), Object(Doctrine_Connection_Statement))\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php(1006): Doctrine_Connection_Statement->execute(Array)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(976): Doctrine_Connection->execute(''SELECT f.id AS ...'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(1026): Doctrine_Query_Abstract->_execute(Array)\n#4 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query.php(267): Doctrine_Query_Abstract->execute(Array, 3)\n#5 /home/yuowebco/lib/model/doctrine/NetworkUser.class.php(69): Doctrine_Query->fetchArray()\n#6 /home/yuowebco/apps/frontend/modules/feed/actions/actions.class.php(27): NetworkUser->getFeeds()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(459): feedActions->executeIndex(Object(sfWebRequest))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(952): sfActions->execute(Object(sfWebRequest))\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(feedActions))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(feedActions))\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#12 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#13 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute()\n#15 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfBasicSecurityFilter->execute(Object(sfFilterChain))\n#16 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#17 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#18 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#19 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''feed'', ''index'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#21 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#22 {main}', 42, 'feed', 'index', 'http://kcruise.yuoweb.com/Feeds/kustom-cruisers-car-club', 'craigd', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-31 19:30:03', '2011-03-31 19:30:03'),
(131, 'SQLSTATE[42S22]: Column not found: 1054 Unknown column ''f.feedtype_id'' in ''field list''', 'Doctrine_Connection_Mysql_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php', 1082, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection/Statement.php(269): Doctrine_Connection->rethrowException(Object(PDOException), Object(Doctrine_Connection_Statement))\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php(1006): Doctrine_Connection_Statement->execute(Array)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(976): Doctrine_Connection->execute(''SELECT f.id AS ...'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(1026): Doctrine_Query_Abstract->_execute(Array)\n#4 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query.php(267): Doctrine_Query_Abstract->execute(Array, 3)\n#5 /home/yuowebco/lib/model/doctrine/NetworkUser.class.php(69): Doctrine_Query->fetchArray()\n#6 /home/yuowebco/apps/frontend/modules/feed/actions/actions.class.php(27): NetworkUser->getFeeds()\n#7 /home/yuowebco/lib/vendor/symfony/lib/action/sfActions.class.php(60): feedActions->executeIndex(Object(sfWebRequest))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(92): sfActions->execute(Object(sfWebRequest))\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(feedActions))\n#10 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(feedActions))\n#11 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#12 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#13 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute()\n#15 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfBasicSecurityFilter->execute(Object(sfFilterChain))\n#16 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#17 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#18 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#19 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''feed'', ''index'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#21 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#22 {main}', 42, 'feed', 'index', 'http://kcruise.yuoweb.com/frontend_dev.php/Feeds/kustom-cruisers-car-club', 'craigd', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-31 19:30:20', '2011-03-31 19:30:20'),
(132, 'SQLSTATE[42S22]: Column not found: 1054 Unknown column ''f.feedtype_id'' in ''field list''', 'Doctrine_Connection_Mysql_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php', 1082, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection/Statement.php(269): Doctrine_Connection->rethrowException(Object(PDOException), Object(Doctrine_Connection_Statement))\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Connection.php(1006): Doctrine_Connection_Statement->execute(Array)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(976): Doctrine_Connection->execute(''SELECT f.id AS ...'', Array)\n#3 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query/Abstract.php(1026): Doctrine_Query_Abstract->_execute(Array)\n#4 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Query.php(267): Doctrine_Query_Abstract->execute(Array, 3)\n#5 /home/yuowebco/lib/model/doctrine/NetworkUser.class.php(69): Doctrine_Query->fetchArray()\n#6 /home/yuowebco/apps/frontend/modules/feed/actions/actions.class.php(27): NetworkUser->getFeeds()\n#7 /home/yuowebco/lib/vendor/symfony/lib/action/sfActions.class.php(60): feedActions->executeIndex(Object(sfWebRequest))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(92): sfActions->execute(Object(sfWebRequest))\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(feedActions))\n#10 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(feedActions))\n#11 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#12 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#13 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute()\n#15 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfBasicSecurityFilter->execute(Object(sfFilterChain))\n#16 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#17 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#18 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#19 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''feed'', ''index'')\n#20 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#21 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#22 {main}', 42, 'feed', 'index', 'http://kcruise.yuoweb.com/frontend_dev.php/Feeds/kustom-cruisers-car-club', 'craigd', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-03-31 19:36:42', '2011-03-31 19:36:42'),
(133, 'Invalid argument supplied for foreach()', 'PHP error', '/home/yuowebco/apps/frontend/modules/photo/templates/_photos.iphone.php', 2, NULL, 2, NULL, NULL, '/fonk-network', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-03-31 19:41:00', '0000-00-00 00:00:00'),
(134, 'Call to a member function getUser() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/message/actions/actions.class.php', 17, NULL, 1, NULL, NULL, '/Messages/kustom-cruisers-car-club', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-04-01 18:55:06', '0000-00-00 00:00:00'),
(135, 'Call to a member function getUser() on a non-object', 'PHP error', '/home/yuowebco/apps/frontend/modules/message/actions/actions.class.php', 17, NULL, 1, NULL, NULL, '/Show-Message/4', NULL, NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Ge', '2011-04-03 17:05:27', '0000-00-00 00:00:00'),
(136, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:09:19', '2011-04-04 22:09:19'),
(137, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(951): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(947): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(933): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(995): sfFilterChain->execute()\n#9 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(1031): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(665): sfFilterChain->execute()\n#11 /home/yuowebco/cache/frontend/prod/config/config_core_compile.yml.php(2352): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/index.php(7): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:09:33', '2011-04-04 22:09:33'),
(138, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(91): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#11 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/frontend_dev.php/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:10:25', '2011-04-04 22:10:25'),
(139, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(91): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#11 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/frontend_dev.php/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:10:46', '2011-04-04 22:10:46');
INSERT INTO `application_error` (`id`, `message`, `type`, `file`, `line`, `trace`, `code`, `module`, `action`, `uri`, `user`, `comment`, `severity`, `user_agent`, `created_at`, `updated_at`) VALUES
(140, 'You must specify the value to findOneBy', 'Doctrine_Table_Exception', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Table.php', 2819, '#0 [internal function]: Doctrine_Table->__call(''findOneById'', Array)\n#1 /home/yuowebco/apps/frontend/modules/sfGuardAuth/actions/actions.class.php(25): NetworkTable->findOneById(NULL)\n#2 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(91): sfGuardAuthActions->preExecute()\n#3 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(sfGuardAuthActions))\n#4 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(sfFilterChain), Object(sfGuardAuthActions))\n#5 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain))\n#6 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute()\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute(Object(sfFilterChain))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute()\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute(Object(sfFilterChain))\n#10 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute()\n#11 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward(''sfGuardAuth'', ''signin'')\n#12 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#13 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#14 {main}', 0, 'sfGuardAuth', 'signin', 'http://kcruise.yuoweb.com/frontend_dev.php/guard/login', 'sanjuro', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:11:04', '2011-04-04 22:11:04'),
(141, 'Empty module and/or action after parsing the URL "/Dashboard/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/Dashboard/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:16', '2011-04-04 22:12:16'),
(142, 'Empty module and/or action after parsing the URL "/Dashboard/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/Dashboard/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:17', '2011-04-04 22:12:17'),
(143, 'Empty module and/or action after parsing the URL "/Messages/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/Messages/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:33', '2011-04-04 22:12:33'),
(144, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:42', '2011-04-04 22:12:42'),
(145, 'Empty module and/or action after parsing the URL "/Photos/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/Photos/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:46', '2011-04-04 22:12:46'),
(146, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:51', '2011-04-04 22:12:51'),
(147, 'Empty module and/or action after parsing the URL "/Speak-Out/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/Speak-Out/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:12:55', '2011-04-04 22:12:55'),
(148, 'Empty module and/or action after parsing the URL "/<br /><b>Notice</b>:  Undefined offset:  0 in <b>/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php</b> on line <b>119</b><br />http:/fonk.yuoweb.com/images/adverts/" (/).', 'sfError404Exception', '/home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php', 44, '#0 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch()\n#1 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#2 {main}', 0, NULL, NULL, 'http://fonk.yuoweb.com/frontend_dev.php/%3Cbr%20/%3E%3Cb%3ENotice%3C/b%3E:%20%20Undefined%20offset:%20%200%20in%20%3Cb%3E/home/yuowebco/lib/vendor/symfony/lib/escaper/sfOutputEscaperArrayDecorator.class.php%3C/b%3E%20on%20line%20%3Cb%3E119%3C/b%3E%3Cbr%20/%3Ehttp://fonk.yuoweb.com/images/adverts/', 'Jacky', NULL, 'medium', 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like ', '2011-04-04 22:13:01', '2011-04-04 22:13:01'),
(149, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:05:26', '0000-00-00 00:00:00'),
(150, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:06:55', '0000-00-00 00:00:00'),
(151, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:12:36', '0000-00-00 00:00:00'),
(152, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:15:24', '0000-00-00 00:00:00'),
(153, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:18:16', '0000-00-00 00:00:00'),
(154, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-05 09:18:19', '0000-00-00 00:00:00'),
(155, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-06 20:40:39', '0000-00-00 00:00:00'),
(156, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-06 21:13:52', '0000-00-00 00:00:00'),
(157, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/frontend_dev.php/Homepage', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.6', '2011-04-06 21:19:16', '0000-00-00 00:00:00'),
(158, 'Call to a member function getUsername() on a non-object', 'PHP error', '/home/yuowebco/plugins/sfDoctrineGuardPlugin/lib/user/sfGuardSecurityUser.class.php', 233, NULL, 1, NULL, NULL, '/index.php/Sign-Up/', NULL, NULL, 'medium', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.5072', '2011-04-07 08:57:35', '0000-00-00 00:00:00'),
(159, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 8192 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/index.php/Upload-Photo/', NULL, NULL, 'medium', 'BlackBerry9700/5.0.0.351 Profile/MIDP-2.1 Configuration/CLDC-1.1 VendorID/173', '2011-04-08 16:51:21', '0000-00-00 00:00:00'),
(160, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 8192 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/index.php/Upload-Photo/', NULL, NULL, 'medium', 'BlackBerry9700/5.0.0.351 Profile/MIDP-2.1 Configuration/CLDC-1.1 VendorID/173', '2011-04-08 16:52:14', '0000-00-00 00:00:00'),
(161, 'Unknown record property / related component "recent_photos" on "Network"', 'Doctrine_Record_UnknownPropertyException', '/home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Record/Filter/Standard.php', 55, '#0 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Record.php(1395): Doctrine_Record_Filter_Standard->filterGet(Object(Network), ''recent_photos'')\n#1 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/vendor/doctrine/Doctrine/Record.php(1350): Doctrine_Record->_get(''recent_photos'', true)\n#2 /home/yuowebco/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/record/sfDoctrineRecord.class.php(186): Doctrine_Record->get(''recent_photos'')\n#3 [internal function]: sfDoctrineRecord->__call(Array, Array)\n#4 /home/yuowebco/apps/frontend/modules/network/actions/actions.class.php(37): Network->getRecentPhotos(''getRecentPhotos'', Array)\n#5 /home/yuowebco/lib/vendor/symfony/lib/action/sfActions.class.php(60): networkActions->executeIndex()\n#6 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(92): sfActions->execute(Object(sfWebRequest))\n#7 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(78): sfExecutionFilter->executeAction(Object(sfWebRequest))\n#8 /home/yuowebco/lib/vendor/symfony/lib/filter/sfExecutionFilter.class.php(42): sfExecutionFilter->handleAction(Object(networkActions))\n#9 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfExecutionFilter->execute(Object(sfFilterChain), Object(networkActions))\n#10 /home/yuowebco/plugins/sfMultisiteThemePlugin/lib/filter/sfMultisiteThemeFilter.class.php(43): sfFilterChain->execute(Object(sfFilterChain))\n#11 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfMultisiteThemeFilter->execute()\n#12 /home/yuowebco/lib/vendor/symfony/lib/filter/sfBasicSecurityFilter.class.php(72): sfFilterChain->execute(Object(sfFilterChain))\n#13 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfBasicSecurityFilter->execute()\n#14 /home/yuowebco/lib/vendor/symfony/lib/filter/sfRenderingFilter.class.php(33): sfFilterChain->execute(Object(sfFilterChain))\n#15 /home/yuowebco/lib/vendor/symfony/lib/filter/sfFilterChain.class.php(53): sfRenderingFilter->execute()\n#16 /home/yuowebco/lib/vendor/symfony/lib/controller/sfController.class.php(238): sfFilterChain->execute(Object(sfFilterChain))\n#17 /home/yuowebco/lib/vendor/symfony/lib/controller/sfFrontWebController.class.php(48): sfController->forward()\n#18 /home/yuowebco/lib/vendor/symfony/lib/util/sfContext.class.php(170): sfFrontWebController->dispatch(''network'', ''index'')\n#19 /home/yuowebco/public_html/frontend_dev.php(13): sfContext->dispatch()\n#20 {main}', 0, 'network', 'index', 'http://ptalk.yuoweb.com/frontend_dev.php/Dashboard/', 'eslin', NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 09:26:25', '2011-04-09 09:26:25'),
(162, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 2048 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/index.php/Upload-Photo/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 10:05:24', '0000-00-00 00:00:00'),
(163, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 2048 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/index.php/Upload-Photo/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 10:08:29', '0000-00-00 00:00:00'),
(164, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 2048 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/index.php/Upload-Photo/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 10:14:41', '0000-00-00 00:00:00'),
(165, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 8192 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/frontend_dev.php/Upload-Photo/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 10:44:47', '0000-00-00 00:00:00'),
(166, 'Allowed memory size of 33554432 bytes exhausted (tried to allocate 8192 bytes)', 'PHP error', '/home/yuowebco/plugins/sfImageTransformPlugin/lib/adapters/sfImageTransformGDAdapter.class.php', 458, NULL, 1, NULL, NULL, '/frontend_dev.php/Upload-Photo/', NULL, NULL, 'medium', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16', '2011-04-09 10:47:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `logo` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  `token` varchar(255) default NULL,
  `is_activated` tinyint(1) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `network_count` bigint(20) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `fullname`, `logo`, `url`, `email`, `description`, `token`, `is_activated`, `created_at`, `updated_at`, `network_count`) VALUES
(1, 3, 'Kustom Cruisers', NULL, 'www.kcruise.com', 'craigd@kcruise.com', 'The Kustom Cruiser Car Club', 'kustomcruisers_client', 1, '2010-09-10 00:00:00', '2011-03-07 16:55:29', 1),
(3, 8, 'Marcovie@gmail.com', NULL, NULL, 'marcovie@gmail.com', '', '', 1, '2011-03-18 15:22:47', '2011-03-18 15:22:47', 1),
(5, 17, 'Frostyfish@rocketmail.com', NULL, NULL, 'frostyfish@rocketmail.com', 'The Urban Scapes project', 'urbanscapes_client', 1, '2011-03-21 08:28:30', '2011-03-21 08:28:30', 1),
(6, 19, 'Radhia Wentzel', NULL, NULL, 'radhiaw@gmail.com', NULL, 'radhia_client', 1, '2011-03-22 10:58:51', '2011-03-22 10:58:51', 1),
(7, 21, 'Les Andrews', NULL, NULL, 'les@gmail.com', 'Bredarsdorp ', 'les-client', 1, '2011-03-28 11:23:28', '2011-03-28 11:23:28', 1),
(11, 27, 'Radio 786 ', NULL, 'www.radio786.co.za', 'zubieda@gmail.com', 'Community Radio station', 'zubieda-client', 1, '2011-04-05 09:14:52', '2011-04-05 09:14:52', 1),
(12, 30, 'Frank Wentzel', NULL, NULL, 'frank@gmail.com', 'Frank Wentzel Client', 'frank-client', 1, '2011-04-06 21:13:22', '2011-04-06 21:13:22', 1),
(14, 33, 'Junaid Osman', NULL, NULL, 'juju.505@gmail.com', 'Junaid Osmand Client', 'juju-505-client', 1, '2011-04-07 08:57:04', '2011-04-07 08:57:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` bigint(20) NOT NULL auto_increment,
  `record_model` varchar(255) collate utf8_unicode_ci NOT NULL,
  `record_id` bigint(20) NOT NULL,
  `author_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `author_email` varchar(255) collate utf8_unicode_ci default NULL,
  `author_website` varchar(255) collate utf8_unicode_ci default NULL,
  `body` longtext collate utf8_unicode_ci NOT NULL,
  `is_delete` tinyint(1) default '0',
  `edition_reason` longtext collate utf8_unicode_ci,
  `reply` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `record_model_record_id_idx` (`record_model`,`record_id`),
  KEY `reply_idx` (`reply`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `record_model`, `record_id`, `author_name`, `author_email`, `author_website`, `body`, `is_delete`, `edition_reason`, `reply`, `created_at`, `updated_at`) VALUES
(1, 'Photo', 4, 'craigd', 'craig@gmail.com', NULL, 'Yo nice Barracuda', 0, NULL, NULL, '2011-04-01 14:12:10', '2011-04-01 14:12:10'),
(2, 'Photo', 4, 'craigd', 'craig@gmail.com', NULL, 'Nice barracuda', 0, NULL, NULL, '2011-04-01 18:55:54', '2011-04-01 18:55:54'),
(3, 'Photo', 6, 'eslin', 'eslin@gmail.com', NULL, 'Where is the pic', 0, NULL, NULL, '2011-04-08 18:02:12', '2011-04-08 18:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `comment_report`
--

CREATE TABLE IF NOT EXISTS `comment_report` (
  `id` bigint(20) NOT NULL auto_increment,
  `reason` longtext collate utf8_unicode_ci NOT NULL,
  `referer` varchar(255) collate utf8_unicode_ci default NULL,
  `state` varchar(255) collate utf8_unicode_ci default 'untreated',
  `id_comment` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `owner_id` bigint(20) default NULL,
  `reciever_id` bigint(20) default NULL,
  `type_id` bigint(20) default NULL,
  `state_id` bigint(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id_idx` (`type_id`),
  KEY `state_id_idx` (`state_id`),
  KEY `owner_id_idx` (`owner_id`),
  KEY `reciever_id_idx` (`reciever_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id`, `owner_id`, `reciever_id`, `type_id`, `state_id`) VALUES
(1, 1, 2, 1, 1),
(2, 2, 1, 1, 1),
(3, 13, 14, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `connection_state`
--

CREATE TABLE IF NOT EXISTS `connection_state` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `connection_type`
--

INSERT INTO `connection_type` (`id`, `title`) VALUES
(1, 'friend');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` bigint(20) NOT NULL auto_increment,
  `networkuser_id` bigint(20) default NULL,
  `network_id` bigint(20) default NULL,
  `eventtype_id` bigint(20) default NULL,
  `title` varchar(100) default NULL,
  `description` varchar(200) default NULL,
  `accept_count` bigint(20) default NULL,
  `accept_limit` bigint(20) default NULL,
  `address` varchar(200) default NULL,
  `g_lat` bigint(20) default NULL,
  `g_long` bigint(20) default NULL,
  `contact_no` varchar(200) default NULL,
  `start_at` datetime default NULL,
  `end_at` datetime default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime default NULL,
  `slug` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `event_sluggable_idx` (`slug`),
  KEY `network_id_idx` (`network_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_index`
--

CREATE TABLE IF NOT EXISTS `event_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_index`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_invite`
--

CREATE TABLE IF NOT EXISTS `event_invite` (
  `id` bigint(20) NOT NULL auto_increment,
  `event_id` bigint(20) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `event_id_idx` (`event_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event_invite`
--


-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event_type`
--


-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `title`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Messages', 'The messaging system for the network', 'message_index', '2011-03-28 16:43:15', '2011-03-28 16:43:15'),
(2, 'Friends', 'This allows the user to manage ther friends', 'networkuser_index', '2011-03-28 16:43:15', '2011-03-28 16:43:15'),
(3, 'Feeds', 'This allows the user to get live status updates of their friends', 'feed_index', '2011-03-28 16:43:15', '2011-03-28 16:43:15'),
(4, 'Photos', 'This allows the user to upload and view photos shared on the network', 'photo_index', '2011-03-28 16:43:15', '2011-03-28 16:43:15'),
(5, 'Speakout', 'This allows the user to speak about topics and categoires', 'speakout_index', '2011-03-28 16:43:15', '2011-03-28 16:43:15'),
(6, 'Webuy', 'This allows the user to add Group Buying to their networks', 'webuy_index', '2011-04-04 14:36:52', '2011-04-04 14:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` bigint(20) NOT NULL auto_increment,
  `networkuser_id` bigint(20) default NULL,
  `feedtype_id` bigint(20) default NULL,
  `body` varchar(160) default NULL,
  `htmlbody` varchar(255) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `feedtype_id_idx` (`feedtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `networkuser_id`, `feedtype_id`, `body`, `htmlbody`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Just got back from McDonalds', 'Just got back from McDonalds', '2011-04-03 17:06:53', '2011-04-03 17:06:53'),
(2, 2, 1, 'heeloo', 'heeloo', '2011-04-04 09:54:53', '2011-04-04 09:54:53'),
(3, 2, 1, 'hell', 'hell', '2011-04-04 10:04:50', '2011-04-04 10:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `feed_type`
--

CREATE TABLE IF NOT EXISTS `feed_type` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(160) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feed_type`
--

INSERT INTO `feed_type` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Status', '2011-03-31 20:32:21', '2011-03-31 20:32:21'),
(2, 'Friend', '2011-03-31 20:32:21', '2011-03-31 20:32:21'),
(3, 'Network Join', '2011-03-31 20:32:21', '2011-03-31 20:32:21'),
(4, 'Photo', '2011-03-31 20:32:21', '2011-03-31 20:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` bigint(20) NOT NULL auto_increment,
  `subject` varchar(100) default NULL,
  `body` varchar(255) default NULL,
  `htmlbody` varchar(255) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `network_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `network_id_idx` (`network_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `subject`, `body`, `htmlbody`, `networkuser_id`, `network_id`, `created_at`, `updated_at`) VALUES
(1, 'hello', 'hello', 'hello', 1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30'),
(2, 'where are you', 'where are you', 'where are you', 1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30'),
(3, 'TEst', 'Amsdkas sad ', 'Amsdkas sad ', 1, 1, '2011-03-07 21:28:48', '2011-03-07 21:28:48'),
(4, 'asd', 'asdsa', 'asdsa', 1, 1, '2011-03-10 21:05:44', '2011-03-10 21:05:44'),
(5, 'Hi', 'I just joined', 'I just joined', 2, 1, '2011-03-20 18:32:53', '2011-03-20 18:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `message_reciever`
--

CREATE TABLE IF NOT EXISTS `message_reciever` (
  `id` bigint(20) NOT NULL auto_increment,
  `message_id` bigint(20) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `messagestatus_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`),
  KEY `message_id_idx` (`message_id`),
  KEY `messagestatus_id_idx` (`messagestatus_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `message_reciever`
--

INSERT INTO `message_reciever` (`id`, `message_id`, `networkuser_id`, `messagestatus_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 2, '2011-03-07 21:28:48', '2011-03-19 23:52:25'),
(2, 4, 2, 2, '2011-03-10 21:05:44', '2011-03-20 17:52:38'),
(3, 5, 1, 1, '2011-03-20 18:32:53', '2011-03-20 18:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `message_status`
--

CREATE TABLE IF NOT EXISTS `message_status` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` bigint(20) NOT NULL auto_increment,
  `client_id` bigint(20) NOT NULL,
  `networktype_id` bigint(20) NOT NULL,
  `networkcategory_id` bigint(20) NOT NULL,
  `subdomain` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature_count` bigint(20) default '3',
  `user_count` bigint(20) default '0',
  `logo` varchar(255) default NULL,
  `accesskey` varchar(255) default '0',
  `is_public` tinyint(1) NOT NULL default '1',
  `is_activated` tinyint(1) NOT NULL default '0',
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `subdomain_index_idx` (`subdomain`),
  UNIQUE KEY `slug_index_idx` (`slug`,`id`),
  UNIQUE KEY `network_sluggable_idx` (`slug`),
  KEY `client_id_idx` (`client_id`),
  KEY `networktype_id_idx` (`networktype_id`),
  KEY `networkcategory_id_idx` (`networkcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `client_id`, `networktype_id`, `networkcategory_id`, `subdomain`, `title`, `description`, `feature_count`, `user_count`, `logo`, `accesskey`, `is_public`, `is_activated`, `expires_at`, `created_at`, `updated_at`, `slug`) VALUES
(1, 1, 2, 4, 'kcruise', 'Kustom Cruisers Car Club', 'This is Kustom Cruisers Classic Car Club', 3, 1, NULL, '0', 1, 1, '2012-09-10 00:00:00', '2010-09-10 00:00:00', '2011-03-19 23:43:28', 'kustomcruisers-network'),
(4, 3, 2, 3, 'marcovie', 'marcovie Network', 'marcovie Network', 3, 0, NULL, '0', 1, 1, '2011-03-18 15:22:47', '2011-03-18 15:22:47', '2011-03-18 15:59:01', 'marcovie-network'),
(6, 5, 2, 1, 'uscape', 'urbanscapes Network', 'Urbanscapes Network', 4, 0, NULL, '0', 1, 1, '2011-03-21 08:28:30', '2011-03-21 08:28:30', '2011-03-21 08:28:30', 'uscape-network'),
(7, 6, 2, 1, 'calalilly', 'Cala Lilly Network', 'Cala Lilly Network', 4, 0, NULL, '0', 1, 0, '2011-03-22 10:58:51', '2011-03-22 10:58:51', '2011-03-22 10:58:51', 'cala-lilly-network'),
(8, 7, 2, 1, 'fonk', 'Fonk Network', 'fonk Network', 4, 2, NULL, '0', 1, 0, '2011-03-28 11:23:28', '2011-03-28 11:23:28', '2011-03-28 11:23:28', 'fonk-network'),
(9, 11, 2, 8, 'radio786', 'Radio786', 'Radio786 is a community based Radio station', 4, 1, NULL, '0', 1, 0, '0000-00-00 00:00:00', '2011-04-05 09:32:53', '0000-00-00 00:00:00', 'radio786-network'),
(10, 12, 2, 4, 'ptalk', 'Peninsula Talk', 'Sport network for the Peninsula Soccer team', 4, 4, NULL, '0', 1, 1, '0000-00-00 00:00:00', '2011-04-06 21:15:01', '2011-04-06 21:15:01', 'ptalk-network'),
(11, 14, 2, 3, 'juju', 'Junaid Network', 'Junaid Network', 4, 0, NULL, '0', 1, 1, '0000-00-00 00:00:00', '2011-04-07 09:42:15', '2011-04-07 09:42:15', 'juju-network');

-- --------------------------------------------------------

--
-- Table structure for table `network_category`
--

CREATE TABLE IF NOT EXISTS `network_category` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `network_category`
--

INSERT INTO `network_category` (`id`, `title`) VALUES
(1, 'Music'),
(2, 'Dating'),
(3, 'Places'),
(4, 'Sport'),
(5, 'Online Store'),
(6, 'Group Buying'),
(7, 'Community'),
(8, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `network_feature`
--

CREATE TABLE IF NOT EXISTS `network_feature` (
  `id` bigint(20) NOT NULL auto_increment,
  `network_id` bigint(20) default NULL,
  `feature_id` bigint(20) default NULL,
  `active` bigint(20) NOT NULL default '2',
  `position` bigint(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `feature_id_idx` (`feature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `network_feature`
--

INSERT INTO `network_feature` (`id`, `network_id`, `feature_id`, `active`, `position`) VALUES
(25, 1, 1, 1, 30),
(26, 1, 2, 1, 40),
(27, 1, 3, 1, 10),
(28, 1, 4, 1, 50),
(30, 6, 1, 1, 10),
(31, 6, 2, 1, 20),
(32, 6, 3, 1, 30),
(33, 6, 4, 1, 40),
(34, 8, 1, 1, 10),
(35, 8, 2, 1, 20),
(36, 8, 3, 1, 30),
(37, 8, 4, 1, 40),
(38, 8, 5, 1, 50),
(49, 9, 1, 1, 10),
(50, 9, 2, 1, 20),
(51, 9, 3, 1, 30),
(52, 9, 4, 1, 40),
(53, 10, 1, 1, 10),
(54, 10, 2, 1, 20),
(55, 10, 3, 1, 30),
(56, 10, 4, 1, 40),
(61, 11, 1, 1, 10),
(62, 11, 2, 1, 20),
(63, 11, 3, 1, 30),
(64, 11, 4, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `network_type`
--

CREATE TABLE IF NOT EXISTS `network_type` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
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
  `id` bigint(20) NOT NULL auto_increment,
  `network_id` bigint(20) default NULL,
  `user_id` bigint(20) default NULL,
  `is_private` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `network_id_idx` (`network_id`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `network_user`
--

INSERT INTO `network_user` (`id`, `network_id`, `user_id`, `is_private`) VALUES
(1, 1, 3, 0),
(2, 1, 4, 0),
(5, 4, 8, 0),
(6, 1, 9, 0),
(8, 7, 20, 0),
(9, 8, 22, 0),
(10, 8, 23, 0),
(11, 1, 28, 0),
(12, 9, 29, 0),
(13, 10, 32, 0),
(14, 10, 34, 0),
(15, 10, 35, 0),
(16, 10, 36, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` bigint(20) NOT NULL auto_increment,
  `url` varchar(100) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `url`, `networkuser_id`, `created_at`, `updated_at`) VALUES
(2, '0522f61494d53d7b069bdb9971be3131c65cfe29.jpg', 2, '2011-04-09 16:35:21', '2011-04-09 16:35:21'),
(3, '766ff6ed0ad76b2ced2945bbefa6829789ac17bd.jpg', 2, '2011-04-09 16:37:22', '2011-04-09 16:37:22'),
(4, '141b4015ed1c460cf264097753d06f440b207c24.jpg', 2, '2011-04-09 16:37:43', '2011-04-09 16:37:43'),
(5, 'b57d6b1ebe894aff6f6c37985925f79dab7d4fe1.jpg', 13, '2011-04-09 16:39:13', '2011-04-09 16:39:13'),
(6, '68fe592297ce2fca0e1cf4bb0d7ccedd827cad62.jpg', 13, '2011-04-09 16:39:59', '2011-04-09 16:39:59'),
(7, '0bbbcf46c500f0ac1eeb065f3c905794dbe8cd1b.jpg', 13, '2011-04-09 16:40:38', '2011-04-09 16:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `photo_comment`
--

CREATE TABLE IF NOT EXISTS `photo_comment` (
  `id` bigint(20) NOT NULL auto_increment,
  `body` varchar(255) default NULL,
  `htmlbody` varchar(255) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `photolink_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `photo_count` bigint(20) default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `photo_id` bigint(20) default NULL,
  `gallery_id` bigint(20) default NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `network_id` bigint(20) default NULL,
  `photo_id` bigint(20) default NULL,
  `has_viewed` bigint(20) NOT NULL default '2',
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) default NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'The main admin group for Spark', '2011-03-07 16:55:29', '2011-03-07 16:55:29'),
(2, 'client', 'The main client group for Spark', '2011-03-07 16:55:29', '2011-03-07 16:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL default '0',
  `permission_id` bigint(20) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`group_id`,`permission_id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) default NULL,
  `remember_key` varchar(32) default NULL,
  `ip_address` varchar(50) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `first_name` varchar(255) default NULL,
  `last_name` varchar(255) default NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL default 'sha1',
  `salt` varchar(128) default NULL,
  `password` varchar(128) default NULL,
  `is_active` tinyint(1) default '1',
  `is_super_admin` tinyint(1) default '0',
  `last_login` datetime default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `first_name`, `last_name`, `email_address`, `username`, `algorithm`, `salt`, `password`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'shadley', 'wentzel', 'shad6ster@gmail.com', 'sanjuro', 'sha1', '2ebcdf2a4698b11a3a1740eb1bc4f6d4', '96a33c7053b6a200735f736e891faffb91d58c6d', 1, 1, '2011-04-07 09:09:32', '2011-03-07 16:55:29', '2011-04-07 09:09:33'),
(3, 'wally', 'abrahams', 'wally@gmail.com', 'wally', 'sha1', '78a25fcba51b29fb2bfeae7e6e21c569', '22d782d3a9e0e0131b09e5b45570c9add2473599', 1, 0, '2011-03-31 13:52:48', '2011-03-07 16:55:29', '2011-03-31 13:52:48'),
(4, 'craigd', 'damon', 'craig@gmail.com', 'craigd', 'sha1', '2ebcdf2a4698b11a3a1740eb1bc4f6d4', '96a33c7053b6a200735f736e891faffb91d58c6d', 1, 0, '2011-04-09 16:26:49', '2011-03-07 16:55:29', '2011-04-09 16:26:49'),
(5, 'durrie', 'moosa', 'durrie@gmail.com', 'durrie', 'sha1', '017be80051d4274527b609828c74538c', '60294fe41167761e39b45cc6006f522007ba2532', 1, 0, NULL, '2011-03-07 16:55:29', '2011-03-07 16:55:29'),
(8, 'Marco', 'de Frano', 'marcovie@gmail.com', 'marcovie', 'sha1', '4c9e491946f5c77c766bbaa2ddc5ced8', 'f918a7828d81765cc21ae010af088a4b22c0ea60', 1, 0, '2011-03-21 08:51:09', '2011-03-18 15:22:47', '2011-03-21 08:51:09'),
(9, 'Shadley', 'Wentzel', 'Shad6ster@gmail.con', 'Shadley', 'sha1', 'e4ad901067d6c9b7e71a49b0d54935aa', 'ab97fdc57626ce10d750faa215b271461eab6092', 1, 0, NULL, '2011-03-20 17:50:48', '2011-03-20 17:50:48'),
(17, 'tasneem', 'wentzel', 'frostyfish@rocketmail.com', 'frostyfish@rocketmail.com', 'sha1', 'a5833606bb5cb0e1dccccc3300a7674f', '802d915ca0bf6409d855a3593103fa983f0010d0', 1, 1, NULL, '2011-03-21 08:28:30', '2011-03-21 08:28:30'),
(19, NULL, NULL, 'radhiaw@gmail.com', 'radhiaw@gmail.com', 'sha1', 'db2d94996e0dac4c283bc20190518d16', '51e6dd3bf6f95fe1784dc77988fada03f1cc0998', 1, 0, NULL, '2011-03-22 10:58:51', '2011-03-22 10:58:51'),
(20, NULL, '', 'shadley@eset.co.za', 'johhny', 'sha1', '62a53adebe726a54c48a9620c54ae4c3', 'f029008776c7a0ebc73d48c643c228ea46bb4388', 1, 0, '2011-03-22 11:36:00', '2011-03-22 11:36:00', '2011-03-22 11:36:00'),
(21, NULL, NULL, 'les@gmail.com', 'les@gmail.com', 'sha1', '7f9ef65328335d714e358b1e4d0282d8', '378877846e863f9fb2d394fe230bb096639549cc', 1, 0, NULL, '2011-03-28 11:23:28', '2011-03-28 11:23:28'),
(22, NULL, '', 'Johnny@gmail.com', 'Johnny', 'sha1', '3eed47a372623f57069fa2fa815848e4', '85c350ca92f20dddf01f9a049ea796ca4afa3152', 1, 0, '2011-03-31 17:58:11', '2011-03-31 17:58:11', '2011-03-31 17:58:11'),
(23, NULL, '', 'Jackie@gmail.com', 'Jacky', 'sha1', 'a7b454044571092f42bcfb91f56689bf', '2b62347d041e29bef297597d3d2b2db0a7509b0f', 1, 0, '2011-04-04 22:12:13', '2011-04-04 22:12:13', '2011-04-04 22:12:13'),
(27, NULL, NULL, 'zubieda@gmail.com', 'zubieda@gmail.com', 'sha1', '819ce6efa4b57a10254abefd731adace', '5646db3ce4300cd59d5d1adf46c01157b8427aca', 1, 0, NULL, '2011-04-05 09:14:52', '2011-04-05 09:14:52'),
(28, NULL, '', 'tracyhe@tfg.co.za', 'vlam', 'sha1', 'a50e314a01d4bc69acb2499abe6cd255', '31f599e87288e509b147426e30db97da63df6504', 1, 0, '2011-04-05 14:16:05', '2011-04-05 14:12:44', '2011-04-05 14:16:05'),
(29, NULL, '', 'Gadija@radio786.co.za', 'Gadija', 'sha1', 'edeedc531baaad4c48fcf0444ee227d6', '2dcc356c79965a9fa8bfdd4c0f9134098995255a', 1, 0, '2011-04-05 18:39:56', '2011-04-05 17:45:46', '2011-04-05 18:39:56'),
(30, 'frank', 'wentzel', 'frank@gmail.com', 'frank@gmail.com', 'sha1', 'c13717043fd16da9419e05c818005419', '945af4410836c3c33d940ef4f7fd693a1cf8a520', 1, 0, NULL, '2011-04-06 21:13:22', '2011-04-06 21:13:22'),
(32, NULL, '', 'eslin@gmail.com', 'eslin', 'sha1', '64c8f4e1b05ee916ff888c7f8b0985f6', '31c879a5bf7b8d5fc6b11be9905e0113a54acc64', 1, 0, '2011-04-09 16:38:53', '2011-04-06 22:29:07', '2011-04-09 16:38:53'),
(33, 'Junaid', 'Osman', 'juju.505@gmail.com', 'juju.505@gmail.com', 'sha1', 'f810a853be70e1abcd4bf9e537fbd29a', '75a5235a9f965be7a9bf2ac3fe33c5fe0c7036e6', 1, 0, NULL, '2011-04-07 08:57:04', '2011-04-07 08:57:04'),
(34, NULL, '', 'frank.wentzel@capetown.gov.zs', 'frankwentzel', 'sha1', '35368ed059f08d45886c34c4d29e398d', 'a72825904dc6fb526e4a26bc05f39b727f1f5121', 1, 0, '2011-04-08 16:41:05', '2011-04-08 16:41:05', '2011-04-08 16:41:05'),
(35, NULL, '', 'damianwentzel@yahoo.com', 'damianwentzel', 'sha1', 'ac1702e537ee9f30bffaccaddaed9535', '5b55f70f3e0f759643b15db147f3456e4a129308', 1, 0, '2011-04-08 17:05:59', '2011-04-08 17:05:59', '2011-04-08 17:05:59'),
(36, NULL, '', 'daanyaal@gmail.com', 'Daanyal', 'sha1', '4d047c38828106289cd3f68abea4a595', '7e7e5fc4f33f7aa73e25f53d72a21a4b1eb57f43', 1, 0, '2011-04-08 18:49:39', '2011-04-08 18:49:38', '2011-04-08 18:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL default '0',
  `group_id` bigint(20) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL default '0',
  `permission_id` bigint(20) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`user_id`,`permission_id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `site_name` varchar(255) NOT NULL,
  `sf_multisite_theme_theme_info_id` bigint(20) NOT NULL default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `site_name` (`site_name`),
  KEY `sf_multisite_theme_theme_info_id_idx` (`sf_multisite_theme_theme_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sf_multisite_theme_profile`
--

INSERT INTO `sf_multisite_theme_profile` (`id`, `site_name`, `sf_multisite_theme_theme_info_id`, `created_at`, `updated_at`) VALUES
(1, 'kustomcruisers-network', 5, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(4, 'marcovie-network', 1, '2011-03-18 15:22:47', '2011-03-18 15:22:47'),
(5, 'uscape-network', 6, '2011-03-21 08:28:30', '2011-03-21 08:28:30'),
(6, 'cala-lilly-network', 1, '2011-03-22 10:58:51', '2011-03-22 10:58:51'),
(7, 'fonk-network', 7, '2011-03-28 11:23:28', '2011-03-28 11:23:28'),
(9, 'radio786-network', 8, '2011-04-05 09:14:52', '2011-04-05 09:14:52'),
(10, 'ptalk-network', 9, '2011-04-06 21:13:22', '2011-04-06 21:13:22'),
(12, 'juju-network', 1, '2011-04-07 08:57:04', '2011-04-07 08:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `sf_multisite_theme_profile_host`
--

CREATE TABLE IF NOT EXISTS `sf_multisite_theme_profile_host` (
  `id` bigint(20) NOT NULL auto_increment,
  `sf_multisite_theme_profile_id` bigint(20) NOT NULL,
  `host_uri` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `sf_multisite_theme_profile_id_idx` (`sf_multisite_theme_profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sf_multisite_theme_profile_host`
--

INSERT INTO `sf_multisite_theme_profile_host` (`id`, `sf_multisite_theme_profile_id`, `host_uri`, `created_at`, `updated_at`) VALUES
(1, 1, 'kcruise.yuoweb.com', '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(4, 4, 'marcovie.yuoweb.com', '2011-03-18 15:50:15', '2011-03-18 15:50:15'),
(5, 5, 'uscape.yuoweb.com', '2011-03-21 08:31:15', '2011-03-21 08:31:19'),
(6, 6, 'calalilly.yuoweb.com', '2011-03-22 11:15:37', '2011-03-22 11:15:37'),
(7, 7, 'fonk.yuoweb.com', '2011-03-28 11:25:08', '2011-03-28 11:25:08'),
(8, 9, 'radio786.yuoweb.com', '2011-04-05 09:17:40', '2011-04-05 09:17:40'),
(9, 10, 'ptalk.yuoweb.com', '2011-04-06 21:15:01', '2011-04-06 21:15:01'),
(10, 12, 'juju.yuoweb.com', '2011-04-07 09:43:50', '2011-04-07 09:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `sf_multisite_theme_theme_info`
--

CREATE TABLE IF NOT EXISTS `sf_multisite_theme_theme_info` (
  `id` bigint(20) NOT NULL auto_increment,
  `theme_name` varchar(255) NOT NULL,
  `theme_enabled` tinyint(1) default '0',
  `is_private` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sf_multisite_theme_theme_info`
--

INSERT INTO `sf_multisite_theme_theme_info` (`id`, `theme_name`, `theme_enabled`, `is_private`, `created_at`, `updated_at`) VALUES
(1, 'blueocean', 1, 0, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(2, 'redsea', 1, 0, '2011-01-26 21:29:43', '2011-01-26 21:29:43'),
(3, 'blackandwhite', 1, 0, '2011-03-04 17:34:41', '2011-03-04 17:34:41'),
(4, 'greendragon', 1, 0, '2011-01-31 11:57:19', '2011-01-31 11:57:19'),
(5, 'kustomcruise', 1, 1, '2011-03-19 20:11:32', '2011-03-19 20:11:32'),
(6, 'urbanscapes', 1, 1, '2011-03-21 08:31:49', '2011-03-21 08:31:52'),
(7, 'fonk', 1, 1, '2011-03-29 08:52:11', '2011-03-29 08:52:11'),
(8, 'radio786', 1, 1, '2011-04-05 09:34:25', '2011-04-05 09:34:25'),
(9, 'ptalk', 1, 1, '2011-04-06 21:15:01', '2011-04-06 21:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `speakout_category`
--

CREATE TABLE IF NOT EXISTS `speakout_category` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `description` varchar(200) default NULL,
  `network_id` bigint(20) default NULL,
  `topic_count` bigint(20) default '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `network_id_idx` (`network_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `speakout_category`
--

INSERT INTO `speakout_category` (`id`, `title`, `description`, `network_id`, `topic_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Events', 'Events that are coming up', 1, 0, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(2, 'Incidents', 'Incidents that are have happened', 1, 0, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_category_index`
--

CREATE TABLE IF NOT EXISTS `speakout_category_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `body` varchar(255) default NULL,
  `htmlbody` varchar(255) default NULL,
  `topic_id` bigint(20) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `topic_id_idx` (`topic_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `speakout_reply`
--

INSERT INTO `speakout_reply` (`id`, `body`, `htmlbody`, `topic_id`, `networkuser_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is a test reply', 'This is a test reply', 1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(2, 'This is a test reply2', 'This is a test reply2', 2, 2, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(3, 'This is a test reply3', 'This is a test reply3', 3, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(4, 'This is a test reply4', 'This is a test reply4', 3, 2, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_topic`
--

CREATE TABLE IF NOT EXISTS `speakout_topic` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `description` varchar(200) default NULL,
  `category_id` bigint(20) default NULL,
  `networkuser_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `category_id_idx` (`category_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `speakout_topic`
--

INSERT INTO `speakout_topic` (`id`, `title`, `description`, `category_id`, `networkuser_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Monthly Workshop', 'This is the topic for the Monthly Workshop', 1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(2, 'Annual AGM', 'This is the topic for the annual AGM', 1, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(3, 'Accident at Trainline', 'This is the topic for the Accident at Trainline', 2, 2, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL),
(4, 'N2 Accident', 'This is the topic for the N2 Accident', 2, 1, '2011-03-07 16:55:30', '2011-03-07 16:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakout_topic_index`
--

CREATE TABLE IF NOT EXISTS `speakout_topic_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`),
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
  `id` bigint(20) NOT NULL auto_increment,
  `sfuser_id` bigint(20) default NULL,
  `mobile_no` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  `profile_pic` varchar(255) default NULL,
  `gender_id` bigint(20) default NULL,
  `city` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `birthday` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `sfuser_id_idx` (`sfuser_id`),
  KEY `gender_id_idx` (`gender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `sfuser_id`, `mobile_no`, `description`, `profile_pic`, `gender_id`, `city`, `country`, `birthday`) VALUES
(1, 3, '110796', 'Loves small bunnies', 'salie.png', 1, 'Cape Town', 'South Africa', '0000-00-00 00:00:00'),
(2, 4, '110796', 'Loves small bunnies', 'salie.png', 1, 'Cape Town', 'South Africa', '0000-00-00 00:00:00'),
(4, 9, NULL, NULL, NULL, 1, 'Cape Town', 'South Africa', '2006-12-04 06:02:00'),
(6, 20, NULL, NULL, NULL, 1, 'Cape Town', NULL, '0000-00-00 00:00:00'),
(7, 22, NULL, NULL, NULL, 1, 'Cape town', NULL, '0000-00-00 00:00:00'),
(8, 23, NULL, NULL, NULL, 1, 'Cape town', NULL, '0000-00-00 00:00:00'),
(9, 28, NULL, NULL, NULL, 2, 'CT', NULL, '0000-00-00 00:00:00'),
(10, 29, NULL, NULL, NULL, 2, 'Cape Town', NULL, '0000-00-00 00:00:00'),
(11, 32, NULL, NULL, NULL, 1, 'cape town', NULL, '0000-00-00 00:00:00'),
(12, 34, NULL, NULL, NULL, 1, 'cape town', NULL, '0000-00-00 00:00:00'),
(13, 35, NULL, NULL, NULL, 1, 'cape town', NULL, '0000-00-00 00:00:00'),
(14, 36, NULL, NULL, NULL, 1, 'Cape town', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_index`
--

CREATE TABLE IF NOT EXISTS `user_profile_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`),
  KEY `user_profile_index_id_user_profile_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile_index`
--

INSERT INTO `user_profile_index` (`keyword`, `field`, `position`, `id`) VALUES
('110796', 'mobile_no', 0, 1),
('3', 'sfuser_id', 0, 1),
('110796', 'mobile_no', 0, 2),
('4', 'sfuser_id', 0, 2),
('9', 'sfuser_id', 0, 4),
('20', 'sfuser_id', 0, 6),
('22', 'sfuser_id', 0, 7),
('23', 'sfuser_id', 0, 8),
('28', 'sfuser_id', 0, 9),
('29', 'sfuser_id', 0, 10),
('32', 'sfuser_id', 0, 11),
('34', 'sfuser_id', 0, 12),
('35', 'sfuser_id', 0, 13),
('36', 'sfuser_id', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `webuy_category`
--

CREATE TABLE IF NOT EXISTS `webuy_category` (
  `id` bigint(20) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_deal`
--

CREATE TABLE IF NOT EXISTS `webuy_deal` (
  `id` bigint(20) NOT NULL auto_increment,
  `product_id` bigint(20) default NULL,
  `network_id` bigint(20) default NULL,
  `title` varchar(150) default NULL,
  `full_price` decimal(10,2) default NULL,
  `deal_price` decimal(10,2) default NULL,
  `discount_percent` decimal(10,2) default NULL,
  `buyer_count` bigint(20) default '0',
  `tipping_count` bigint(20) default '0',
  `status` bigint(20) default '0',
  `g_lat` bigint(20) default '0',
  `g_long` bigint(20) default '0',
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `webuy_deal_sluggable_idx` (`slug`),
  KEY `product_id_idx` (`product_id`),
  KEY `network_id_idx` (`network_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_deal`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_deal_attribute`
--

CREATE TABLE IF NOT EXISTS `webuy_deal_attribute` (
  `id` bigint(20) NOT NULL auto_increment,
  `deal_id` bigint(20) default NULL,
  `attribute_name` varchar(155) default NULL,
  `attribute_value` varchar(255) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `deal_id_idx` (`deal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_deal_attribute`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_deal_index`
--

CREATE TABLE IF NOT EXISTS `webuy_deal_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webuy_deal_index`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_network_user`
--

CREATE TABLE IF NOT EXISTS `webuy_network_user` (
  `id` bigint(20) NOT NULL auto_increment,
  `networkuser_id` bigint(20) default NULL,
  `deal_id` bigint(20) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `deal_id_idx` (`deal_id`),
  KEY `networkuser_id_idx` (`networkuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_network_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_product`
--

CREATE TABLE IF NOT EXISTS `webuy_product` (
  `id` bigint(20) NOT NULL auto_increment,
  `category_id` bigint(20) default NULL,
  `supplier_id` bigint(20) default NULL,
  `title` varchar(150) default NULL,
  `description` varchar(255) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `supplier_id_idx` (`supplier_id`),
  KEY `category_id_idx` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_product`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_product_index`
--

CREATE TABLE IF NOT EXISTS `webuy_product_index` (
  `keyword` varchar(200) NOT NULL default '',
  `field` varchar(50) NOT NULL default '',
  `position` bigint(20) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`keyword`,`field`,`position`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webuy_product_index`
--


-- --------------------------------------------------------

--
-- Table structure for table `webuy_supplier`
--

CREATE TABLE IF NOT EXISTS `webuy_supplier` (
  `id` bigint(20) NOT NULL auto_increment,
  `fullname` varchar(255) default NULL,
  `product_count` bigint(20) default '0',
  `contact_number` varchar(100) default NULL,
  `address` varchar(255) default NULL,
  `g_lat` bigint(20) default '0',
  `g_long` bigint(20) default '0',
  `logo` varchar(255) default NULL,
  `url` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `webuy_supplier_sluggable_idx` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `webuy_supplier`
--


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
-- Constraints for table `feed`
--
ALTER TABLE `feed`
  ADD CONSTRAINT `feed_feedtype_id_feed_type_id` FOREIGN KEY (`feedtype_id`) REFERENCES `feed_type` (`id`),
  ADD CONSTRAINT `feed_networkuser_id_network_user_id` FOREIGN KEY (`networkuser_id`) REFERENCES `network_user` (`id`);

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
