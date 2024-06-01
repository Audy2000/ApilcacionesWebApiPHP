/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `aluve_actividades` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `aluve_actividades`;

CREATE TABLE IF NOT EXISTS `actividad` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `apertura` date NOT NULL,
  `vencimiento` date NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_tipo_actividad` int(11) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FK_actividad_materia` (`id_materia`),
  KEY `FK_actividad_tipo_actividad` (`id_tipo_actividad`),
  CONSTRAINT `FK_actividad_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_actividad_tipo_actividad` FOREIGN KEY (`id_tipo_actividad`) REFERENCES `tipo_actividad` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `actividad` (`codigo`, `descripcion`, `comentario`, `apertura`, `vencimiento`, `id_materia`, `id_tipo_actividad`) VALUES
	(1, 'Realizar una API para la semana siguiente', 'Utilizar Codeigniter', '2024-05-13', '2024-06-01', 2, 1);

CREATE TABLE IF NOT EXISTS `materia` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `materia` (`codigo`, `nombre`) VALUES
	(1, 'Sistemas Embebidos'),
	(2, 'Desarrollo aplicaciones WEB');

CREATE TABLE IF NOT EXISTS `tipo_actividad` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tipo_actividad` (`codigo`, `nombre`) VALUES
	(1, 'Tarea'),
	(2, 'Leccion'),
	(3, 'Examen'),
	(4, 'Trabajo Grupal'),
	(6, 'Trabajo Grupal');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
