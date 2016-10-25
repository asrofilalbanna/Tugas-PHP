-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5119
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sekolah
DROP DATABASE IF EXISTS `sekolah`;
CREATE DATABASE IF NOT EXISTS `sekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sekolah`;

-- Dumping structure for table sekolah.matpel
DROP TABLE IF EXISTS `matpel`;
CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(50) NOT NULL AUTO_INCREMENT,
  `matpel` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.matpel: ~8 rows (approximately)
DELETE FROM `matpel`;
/*!40000 ALTER TABLE `matpel` DISABLE KEYS */;
INSERT INTO `matpel` (`id_matpel`, `matpel`) VALUES
	(1, 'Matematika'),
	(2, 'Bhs.Inggris'),
	(3, 'Bhs.Indonesia'),
	(4, 'Agama'),
	(5, 'Seni Budaya'),
	(8, 'JS'),
	(9, 'PHP'),
	(10, 'HTML');
/*!40000 ALTER TABLE `matpel` ENABLE KEYS */;

-- Dumping structure for table sekolah.nilai
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(50) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `id_matpel` int(50) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.nilai: ~7 rows (approximately)
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `nis`, `id_matpel`, `nilai`) VALUES
	(1, '1', 1, 59),
	(2, '1', 2, 40),
	(3, '2', 1, 100),
	(4, '2', 2, 10),
	(5, '3', 1, 100),
	(6, '4', 3, 100),
	(7, '1', 3, 10);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping structure for table sekolah.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telpn` varchar(50) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah.siswa: ~7 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `telpn`, `jk`) VALUES
	(1, 'asdasd', 'asdasd', 'asdasd', '1'),
	(2, 'sas', 'asas`', '111', NULL),
	(3, 'aaa', 'aaa', 'aaaa', '1'),
	(4, '01', '01', '01', '2'),
	(5, '01', '01', '01', '2'),
	(6, '00', '009', '0097', '2'),
	(7, 'aufar', 'sanan', '0019', '1');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
