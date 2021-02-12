-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           10.1.44-MariaDB-1~bionic - mariadb.org binary distribution
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour base-site
CREATE DATABASE IF NOT EXISTS `base-site` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `base-site`;

-- Listage de la structure de la table base-site. beatles
CREATE TABLE IF NOT EXISTS `beatles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `ordre` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table base-site.beatles : ~4 rows (environ)
/*!40000 ALTER TABLE `beatles` DISABLE KEYS */;
INSERT INTO `beatles` (`id`, `nom`, `prenom`, `photo`, `ordre`) VALUES
	(1, 'Lennon', 'John', 'https://img.allformusic.fr/artiste/j/john-lennon/1.jpg', 1),
	(2, 'McCartney', 'Paul', 'https://pbs.twimg.com/profile_images/572580869090750464/gGuaqvjN_400x400.jpeg', 2),
	(3, 'Starr', 'Ringo', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Ringo_Starr_NY_1964.png/200px-Ringo_Starr_NY_1964.png', 3),
	(4, 'Harrison', 'Geroge', 'http://4.bp.blogspot.com/-zX7N_g_9wkw/TleGdZuM9nI/AAAAAAAAC2M/pZpeMuiDGGI/s1600/beautifulbeautiful.jpg', 4);
/*!40000 ALTER TABLE `beatles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
