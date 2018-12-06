-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.36-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5327
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Volcando datos para la tabla test.equipo: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` (`id_equipo`, `modelo`, `accesorios`, `marca`, `color`, `generacion`, `sistemaoperativo`, `precio`, `img`) VALUES
	(6, 'Xperya M2', 'audifonos', 'sony', 'negro', '3g', 'Kitkat', 360000, 'imgres.jpg'),
	(7, 'Moto g', 'cargador, auriculares', 'Motorola', 'negro', '3g', 'kitkat', 300000, '11142013102102AM_635_motorola-moto-g.jpeg'),
	(8, 'iphone 4', 'cargador auriculares', 'apple', 'blanco', '3g', 'iOS', 380000, '20150130154010.jpg'),
	(9, 'Galaxy ace', 'cargador', 'Samsung', 'negro', '3g', 'gingerbreak', 250000, 'imgrasdases.jpg'),
	(10, 'Samsung galaxy S3', 'manos libres, cargador', 'Samsung', 'blanco,azul', '3g', 'Kitkat', 340000, '3182014113250AM_635_samsung_galaxy_s3_slim.jpeg'),
	(11, 'Samsung Galaxy S4', 'Manos libres, Cargador', 'Samsung', 'blanco', '4g', 'Lollipop', 480000, 'celular-samsung-galaxy-s4-gt-i9505-2.jpg'),
	(12, 'Samsung galaxy S5', 'cargador, Manos libres', 'Samsung', 'blanco,azul', '4g', 'Lollipop', 580000, 'samsung-galaxy-s5-2.jpg'),
	(13, 'Samsung Galaxy S6', 'Cargador, Manos Libres', 'Samsung', 'blanco', '4g', 'lollipop', 1800000, 'e_1_edge_pc.jpg'),
	(15, 'Moto G2', 'manos libres, cargador', 'Motorola', 'negro', '4g', 'Lollipop', 420000, 'mp-2-chips-16gb-android-4-4-kit-kat-3g-wi-fi-photo27886379-12-2b-36.jpg'),
	(16, 'Xperia Z4', 'cargador,Manos libres', 'Sony', 'negro', '4g', 'lollipop', 1500000, 'maxresdefault.jpg'),
	(17, 'Xperia M2 Aqua', 'Manos libres,Cargador y manilla de control', 'Sony', 'blanco, negro', '4g', 'Kitkat', 450000, '819201442916PM_635_sony_xperia_m2_aqua.jpeg');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
