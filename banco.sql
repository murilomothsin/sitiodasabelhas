-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32-0ubuntu0.12.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-09-12 13:14:05
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for fotoboth
CREATE DATABASE IF NOT EXISTS `fotoboth` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fotoboth`;


-- Dumping structure for table fotoboth.albums
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(30) NOT NULL,
  `photographer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `when` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table fotoboth.albums: ~3 rows (approximately)
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` (`id`, `title`, `description`, `place`, `photographer`, `model`, `when`, `category_id`, `created`, `modified`, `user_id`) VALUES
	(7, 'Book 1', 'Uma descriÃ§Ã£o que nem vai aparecer', 'Rolante', 'FotoBoth', 'Modelos 1', '2013-09-06', 1, '2013-09-07 02:16:54', '2013-09-07 02:16:54', 2),
	(8, 'Book 2', 'testes', 'Riozinho', 'Both', 'Alguem', '2013-09-02', 3, '2013-09-07 02:19:32', '2013-09-07 02:19:32', 2),
	(9, 'Evento de teste', '1', 'Clube de pesca', 'Murilo', 'Asdrubal', '2013-09-11', 2, '2013-09-12 09:26:38', '2013-09-12 09:26:38', 2);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;


-- Dumping structure for table fotoboth.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table fotoboth.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category`, `description`, `created`, `modified`) VALUES
	(1, 'Book', 'Book.', '2013-07-22 23:36:28', '2013-07-22 23:36:28'),
	(2, 'Eventos', 'Eventos.', '2013-07-22 23:36:38', '2013-07-22 23:36:38'),
	(3, 'Externas', 'Externas', '2013-08-31 15:28:23', '2013-08-31 15:28:23'),
	(4, 'Videos', 'Videos', '2013-08-31 15:28:38', '2013-08-31 15:28:38');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table fotoboth.pictures
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `picture_path` varchar(200) NOT NULL,
  `file_size` varchar(250) NOT NULL,
  `is_principal` tinyint(4) DEFAULT NULL,
  `capa` tinyint(4) DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- Dumping data for table fotoboth.pictures: ~51 rows (approximately)
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` (`id`, `title`, `dir`, `picture_path`, `file_size`, `is_principal`, `capa`, `album_id`, `created`, `modified`) VALUES
	(13, 'qwqwqwqwqw', 'files', 'foto-coelhoMDAzNjAy.jpg', '6.87 KB', NULL, NULL, 0, '2013-07-08 00:36:02', '2013-07-08 00:36:02'),
	(24, '', '25082013192903', 'CompraGitHub.png', '102.20 KB', 1, NULL, 4, '2013-08-25 19:30:21', '2013-08-25 19:30:21'),
	(25, '', '25082013192903', 'Screenshot from 2013-06-21 22:36:17.png', '58.94 KB', NULL, NULL, 4, '2013-08-25 19:30:21', '2013-08-25 19:30:21'),
	(26, '', '25082013192903', 'foto-coelho.jpg', '6.87 KB', NULL, NULL, 4, '2013-08-25 19:30:21', '2013-08-25 19:30:21'),
	(27, '', '25082013192903', 'images.jpg', '4.87 KB', NULL, NULL, 4, '2013-08-25 19:30:21', '2013-08-25 19:30:21'),
	(28, '', '25082013192903', 'images1.jpg', '10.92 KB', NULL, NULL, 4, '2013-08-25 19:30:21', '2013-08-25 19:30:21'),
	(39, 'primeira e melhor foto', '07092013020143', '010.jpg', '510.53 KB', 1, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(40, '', '07092013020143', '002.jpg', '523.89 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(41, '', '07092013020143', '003.jpg', '477.57 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(42, '', '07092013020143', '004.jpg', '367.38 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(43, '', '07092013020143', '005.jpg', '637.01 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(44, '', '07092013020143', '006.jpg', '610.86 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(45, '', '07092013020143', '007.jpg', '740.23 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(46, '', '07092013020143', '008.jpg', '549.63 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(47, '', '07092013020143', '009.jpg', '619.15 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(48, '', '07092013020143', '011.jpg', '546.88 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(49, '', '07092013020143', '012.jpg', '530.15 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(50, '', '07092013020143', '013.jpg', '693.95 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(51, '', '07092013020143', '014.jpg', '349.81 KB', NULL, NULL, 7, '2013-09-07 02:16:54', '2013-09-07 02:16:54'),
	(52, 'First', '07092013021709', '008.jpg', '1,001.53 KB', 1, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(53, '', '07092013021709', '002.jpg', '739.71 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(54, '', '07092013021709', '003.jpg', '639.38 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(55, '', '07092013021709', '004.jpg', '533.76 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(56, '', '07092013021709', '005.jpg', '752.81 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(57, '', '07092013021709', '006.jpg', '770.85 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(58, '', '07092013021709', '007.jpg', '846.96 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(59, '', '07092013021709', '009.jpg', '859.89 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(60, '', '07092013021709', '010.jpg', '707.13 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(61, '', '07092013021709', '011.jpg', '566.10 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(62, '', '07092013021709', '012.jpg', '1,248.26 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(63, '', '07092013021709', '013.jpg', '412.60 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(64, '', '07092013021709', '014.jpg', '547.99 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(65, '', '07092013021709', '015.jpg', '487.80 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(66, '', '07092013021709', '016.jpg', '453.33 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(67, '', '07092013021709', '017.jpg', '474.56 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(68, '', '07092013021709', '019.jpg', '577.00 KB', NULL, NULL, 8, '2013-09-07 02:19:32', '2013-09-07 02:19:32'),
	(69, 'Principal', '12092013092419', '012.jpg', '337.80 KB', 1, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(70, '', '12092013092419', '002.jpg', '513.27 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(71, '', '12092013092419', '003.jpg', '627.74 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(72, '', '12092013092419', '004.jpg', '684.63 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(73, '', '12092013092419', '005.jpg', '665.38 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(74, '', '12092013092419', '006.jpg', '758.37 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(75, '', '12092013092419', '007.jpg', '836.25 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(76, '', '12092013092419', '008.jpg', '459.78 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(77, '', '12092013092419', '009.jpg', '569.56 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(78, '', '12092013092419', '010.jpg', '469.91 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(79, '', '12092013092419', '011.jpg', '804.94 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(80, '', '12092013092419', '013.jpg', '366.28 KB', NULL, NULL, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(81, '', '12092013092419', '014.jpg', '313.32 KB', NULL, 1, 9, '2013-09-12 09:26:38', '2013-09-12 09:26:38'),
	(82, 'Capa teste', 'files', '003.jpg', '402.25 KB', NULL, 1, 0, '2013-09-12 10:57:09', '2013-09-12 10:57:09'),
	(83, 'Capa 2', 'files', '003.jpg', '353.69 KB', NULL, 1, 0, '2013-09-12 12:40:22', '2013-09-12 12:40:22');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;


-- Dumping structure for table fotoboth.users
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table fotoboth.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `group_id`, `email`, `created`, `modified`) VALUES
	(1, 'Murilo Mothsin', 'murilo', '5a1d2685cd443bf8e249c34802d4c2ca', 'author', 1, 'mothsin@hotmail.com', '2013-07-02 23:51:40', '2013-07-07 21:33:14'),
	(2, 'admin', 'admin', '806775a274e47ffa4a7ca45083725261', 'admin', 1, 'admin@email.com', '2013-07-03 00:22:44', '2013-07-07 21:33:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table fotoboth.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(50) NOT NULL,
  `embed` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table fotoboth.videos: ~4 rows (approximately)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `video`, `embed`, `created`, `modified`) VALUES
	(1, 'Video 1', '<iframe width="640" height="480" src="//www.youtube.com/embed/GQGIeNaz0fo?rel=0" frameborder="0" allowfullscreen></iframe>', '2013-09-06 20:35:09', '2013-09-06 20:35:09'),
	(2, 'All we need is love', '<iframe width="853" height="480" src="//www.youtube.com/embed/10TDlUVGwMk?rel=0" frameborder="0" allowfullscreen></iframe>', '2013-09-07 00:31:56', '2013-09-07 00:31:56'),
	(3, 'Trash the Dress - Roberto & Marcela - Mostardas/RS', '<iframe width="640" height="480" src="//www.youtube.com/embed/0tQDISNjIms?rel=0" frameborder="0" allowfullscreen></iframe>', '2013-09-07 01:51:58', '2013-09-07 01:51:58'),
	(4, 'HD', '<iframe width="960" height="720" src="//www.youtube.com/embed/0tQDISNjIms?rel=0" frameborder="0" allowfullscreen></iframe>', '2013-09-07 01:52:30', '2013-09-07 01:52:30');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
