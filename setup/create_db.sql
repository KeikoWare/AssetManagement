-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 29. 04 2015 kl. 08:25:09
-- Serverversion: 5.5.43-0+deb8u1
-- PHP-version: 5.6.7-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assetmanager`
--
CREATE DATABASE IF NOT EXISTS `assetmanager` DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci;
USE `assetmanager`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `asset`
--

DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
`id` int(11) NOT NULL,
  `asset_tag` varchar(250) COLLATE utf8_danish_ci NOT NULL,
  `serial` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `model` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `supplier` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `order_number` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `purchase_cost` float DEFAULT NULL,
  `warranty_in_months` int(11) DEFAULT NULL,
  `asset_status` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `notes` text COLLATE utf8_danish_ci,
  `loaction` varchar(250) COLLATE utf8_danish_ci DEFAULT NULL,
  `asset_created_date` datetime DEFAULT NULL,
  `asset_updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `retired` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `asset`
--

INSERT INTO `asset` (`id`, `asset_tag`, `serial`, `name`, `model`, `purchase_date`, `supplier`, `order_number`, `purchase_cost`, `warranty_in_months`, `asset_status`, `notes`, `loaction`, `asset_created_date`, `asset_updated_date`, `retired`) VALUES
(1, 'srv_ncis_ldap_01', '123456879', 'SRV_NCIS_LDAP01', 'HP DL360', '2014-07-09', 'Atea', '7890', 15, 36, 'Drift', NULL, 'ØB127RCK3U45', '0000-00-00 00:00:00', '2015-04-28 11:26:52', 0),
(3, 'swi_ncis_local', '3240924324', 'SWI_NCIS01', 'Cisco 2443', '2014-07-14', 'Atea', '32476', 37, 12, 'Drift', NULL, 'ØB127RCK4U34', '0000-00-00 00:00:00', '2015-04-28 11:48:45', 0);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `asset`
--
ALTER TABLE `asset`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `asset_tag` (`asset_tag`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `asset`
--
ALTER TABLE `asset`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE USER 'assetmanager'@'localhost' IDENTIFIED BY '4t6ZsSqZp5tceqKU';
GRANT ALL PRIVILEGES ON 'assetmanager'.* TO 'assetmanager'@'localhost' WITH GRANT OPTION; 
