-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.37-0ubuntu0.13.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2014-12-09 21:25:22
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for sitio
CREATE DATABASE IF NOT EXISTS `sitio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sitio`;


-- Dumping structure for table sitio.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(30) NOT NULL,
  `ticket` double DEFAULT NULL,
  `when` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sitio.events: ~0 rows (approximately)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;


-- Dumping structure for table sitio.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sitio.hotel: ~0 rows (approximately)
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;


-- Dumping structure for table sitio.leisures
CREATE TABLE IF NOT EXISTS `leisures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sitio.leisures: ~0 rows (approximately)
/*!40000 ALTER TABLE `leisures` DISABLE KEYS */;
/*!40000 ALTER TABLE `leisures` ENABLE KEYS */;


-- Dumping structure for table sitio.pictures
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `picture_path` varchar(200) NOT NULL,
  `file_size` varchar(250) NOT NULL,
  `is_principal` tinyint(4) DEFAULT NULL,
  `capa` tinyint(4) DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sitio.pictures: ~0 rows (approximately)
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;


-- Dumping structure for table sitio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table sitio.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `group_id`, `email`, `created`, `modified`) VALUES
	(1, 'Murilo Mothsin', 'murilo', '1dbbab28fb023c2f284dc3ebdf85c421', 'author', 1, 'mothsin@hotmail.com', '2013-07-02 23:51:40', '2013-07-07 21:33:14'),
	(2, 'admin', 'admin', '806775a274e47ffa4a7ca45083725261', 'admin', 1, 'admin@email.com', '2013-07-03 00:22:44', '2013-07-07 21:33:09'),
	(3, 'teste', 'teste', 'a3c17bc1ea27979d0b0c268534b6b759', 'admin', 0, 'mothsin@hotmail.com', '2014-12-09 21:12:15', '2014-12-09 21:12:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
