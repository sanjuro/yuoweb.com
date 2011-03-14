-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2011 at 09:24 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yuoweb`
--

--
-- Dumping data for table `sf_multisite_theme_profile`
--

INSERT INTO `sf_multisite_theme_profile` (`id`, `site_name`, `sf_multisite_theme_theme_info_id`, `created_at`, `updated_at`) VALUES
(1, 'Pic N Pay Group Buying', 1, '2011-02-08 23:22:00', '2011-02-08 23:22:00');

--
-- Dumping data for table `sf_multisite_theme_profile_host`
--

INSERT INTO `sf_multisite_theme_profile_host` (`id`, `sf_multisite_theme_profile_id`, `host_uri`, `created_at`, `updated_at`) VALUES
(1, 1, 'picnpay.yuoweb.localhost', '2011-02-08 23:22:00', '2011-02-08 23:22:00');

--
-- Dumping data for table `sf_multisite_theme_theme_info`
--

INSERT INTO `sf_multisite_theme_theme_info` (`id`, `theme_name`, `theme_enabled`, `created_at`, `updated_at`) VALUES
(1, 'blueocean', 1, '2011-02-08 23:22:00', '2011-02-08 23:22:00'),
(2, 'redsea', 1, '2011-02-08 23:22:00', '2011-02-08 23:22:00');
