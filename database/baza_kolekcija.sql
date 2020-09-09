-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kolekcija
DROP DATABASE IF EXISTS `kolekcija`;
CREATE DATABASE IF NOT EXISTS `kolekcija` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `kolekcija`;

-- Dumping structure for table kolekcija.filmovis
DROP TABLE IF EXISTS `filmovis`;
CREATE TABLE IF NOT EXISTS `filmovis` (
  `film_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `naslov` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zanr_id` tinyint(4) NOT NULL,
  `godina` year(4) NOT NULL,
  `trajanje` smallint(5) unsigned NOT NULL,
  `slika` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`film_id`),
  KEY `filmovis_naslov_index` (`naslov`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kolekcija.filmovis: ~13 rows (approximately)
DELETE FROM `filmovis`;
/*!40000 ALTER TABLE `filmovis` DISABLE KEYS */;
INSERT INTO `filmovis` (`film_id`, `naslov`, `zanr_id`, `godina`, `trajanje`, `slika`, `created_at`, `updated_at`) VALUES
	(1, 'Antitrust', 3, '2001', 108, _binary 0x616E746974727573745F323030312E6A7067, NULL, NULL),
	(2, 'Firewall', 1, '2006', 105, _binary 0x6669726577616C6C5F323030362E6A7067, NULL, NULL),
	(3, 'Hackers', 3, '1995', 105, _binary 0x6861636B6572735F313939352E6A7067, NULL, NULL),
	(4, 'Operation Swordfish', 2, '2001', 99, _binary 0x6F7065726174696F6E5F73776F7264666973685F323030312E6A7067, NULL, NULL),
	(5, 'Operation Takedown', 7, '2000', 96, _binary 0x6F7065726174696F6E5F74616B65646F776E5F323030302E6A7067, NULL, NULL),
	(6, 'Pirates Of Sillicone Valley', 7, '1999', 95, _binary 0x706972617465735F6F665F73696C69636F6E655F76616C6C65795F313939392E6A7067, NULL, NULL),
	(7, 'The Social Network', 7, '2010', 120, _binary 0x7468655F736F6369616C5F6E6574776F726B5F323031302E6A7067, NULL, NULL),
	(8, 'TRON', 5, '1982', 96, _binary 0x74726F6E5F313938322E6A7067, NULL, NULL),
	(9, 'TRON: Legacy', 5, '2010', 125, _binary 0x74726F6E5F6C65676163795F323031302E6A7067, NULL, NULL),
	(10, 'War Games', 11, '1983', 114, _binary 0x7761725F67616D65735F313938332E6A7067, NULL, NULL),
	(11, 'Fargo', 3, '1996', 98, _binary 0x666172676F2E6A7067, '2020-09-09 10:53:13', '2020-09-09 10:53:13'),
	(12, '12 Monkeys', 5, '1995', 131, _binary 0x31325F6D6F6E6B6579732E6A7067, '2020-09-09 10:53:55', '2020-09-09 10:53:55'),
	(13, 'Matrix', 1, '1999', 150, _binary 0x6D61747269785F313939392E6A7067, '2020-09-09 13:09:52', '2020-09-09 13:09:52');
/*!40000 ALTER TABLE `filmovis` ENABLE KEYS */;

-- Dumping structure for table kolekcija.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kolekcija.migrations: ~4 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(25, '2020_07_07_092827_create_zanrs_table', 2),
	(26, '2020_07_07_092844_create_filmovis_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table kolekcija.zanrs
DROP TABLE IF EXISTS `zanrs`;
CREATE TABLE IF NOT EXISTS `zanrs` (
  `zanr_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`zanr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kolekcija.zanrs: ~11 rows (approximately)
DELETE FROM `zanrs`;
/*!40000 ALTER TABLE `zanrs` DISABLE KEYS */;
INSERT INTO `zanrs` (`zanr_id`, `naziv`, `created_at`, `updated_at`) VALUES
	(1, 'Akcija', NULL, NULL),
	(2, 'Triler', NULL, NULL),
	(3, 'Kriminalistički', NULL, NULL),
	(4, 'Dokumentarni', NULL, NULL),
	(5, 'Sci-Fi', NULL, NULL),
	(6, 'Horor', NULL, NULL),
	(7, 'Drama', NULL, NULL),
	(8, 'Mjuzikl', NULL, NULL),
	(9, 'Komedija', NULL, NULL),
	(10, 'Ljubavni', NULL, NULL),
	(11, 'Avanturistički', NULL, NULL);
/*!40000 ALTER TABLE `zanrs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
