-- MySQL dump 10.13  Distrib 5.1.46, for suse-linux-gnu (i686)
--
-- Host: localhost    Database: egoclubdb
-- ------------------------------------------------------
-- Server version	5.1.46-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sucursal_id` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `nombre_apellido` varchar(100) DEFAULT NULL,
  `sexo_id` int(11) DEFAULT '1',
  `fecha_cumpleanos` date DEFAULT NULL,
  `telefonos` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `acepta_ego_club` tinyint(1) DEFAULT '0',
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Clientes suscritos en EGO Club';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club`
--

LOCK TABLES `club` WRITE;
/*!40000 ALTER TABLE `club` DISABLE KEYS */;
INSERT INTO `club` VALUES (1,1,'CLU1342','00112999941','Pavel Nunez',1,'2011-10-03','8095751026','pndeschamps@gmail.com',1,1),(2,1,'CLU2011100313176118731352','00112999941','Carlos Peralta Ramos',1,'2011-10-03','8095751125','pndeschamps@gmail.com',0,1),(3,3,'CLU2011100313176120219061','0114456664','Rafelina Valerio',2,'2011-10-03','8095751127','pndeschamps@gmail.com',0,1);
/*!40000 ALTER TABLE `club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  `clave_rol` enum('root','cms','web') DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Roles de los usuarios del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Root','root',1),(2,'Usuario Web','web',1),(3,'Usuario CMS','cms',1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexos`
--

DROP TABLE IF EXISTS `sexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Sexos que maneja el sistema.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(5) DEFAULT NULL,
  `sucursal` varchar(100) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(15) DEFAULT NULL,
  `activa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='Sucursales de la tienda EGO';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` VALUES (1,213,'Acropolis Center','Santo Domingo, Acropolis Center','',1),(2,209,'Conde Peatonal','Santo Domingo, Conde Peatonal','809.221.2882',1),(3,208,'Diamond Mall','Santo Domingo, Diamond Mall','809.566.6176',1),(4,204,'Megacentro, Pasillo Plaza del Mar','Santo Domingo, Megacentro','809.596.6176',1),(5,206,'Megacentro, Pasillo Plaza del Sol','Santo Domingo, Megacentro','809.595.7161',1),(6,207,'Plaza Central, Primer Nivel','Santo Domingo, Plaza Central','809.872.0404',1),(7,210,'Plaza Central, Segundo Nivel','Santo Domingo, Plaza Central','809.565.0279',1),(8,203,'Plaza Las Americas','Santo Domingo, Plaza Las Americas','809.381.1600',1),(9,202,'La Vega','La Vega','809.242.4704',1),(10,218,'Las Colinas Mall','Santiago, Las Colinas Mall','829.760.7753',1),(11,205,'Plaza Internacional','Santiago, Plaza Internacional','809.581.3012',1),(12,215,'Higuey Taveras Center','Higuey, Taveras Center','809.554.6732',1),(13,212,'San Juan Shopping Center, Bavaro','Higuey (Bavaro), San Juan Shopping Center','809.552.0542',1),(14,211,'Palma Real Shopping Center, Bavaro','Higuey (Bavaro), Palma Real Shopping Center','829.760.7762',1);
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useres`
--

DROP TABLE IF EXISTS `useres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_generada` varchar(45) DEFAULT 'WEB_123940',
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `creado_en` date DEFAULT NULL,
  `ultima_sesion_en` date DEFAULT NULL,
  `rol_id` int(11) DEFAULT '3',
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rol_usuario_2` (`rol_id`),
  CONSTRAINT `rol_usuario_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useres`
--

LOCK TABLES `useres` WRITE;
/*!40000 ALTER TABLE `useres` DISABLE KEYS */;
/*!40000 ALTER TABLE `useres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_generada` varchar(45) DEFAULT 'WEB_123940',
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `creado_en` date DEFAULT NULL,
  `ultima_sesion_en` date DEFAULT NULL,
  `rol_id` int(11) DEFAULT '3',
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rol_usuario_1` (`rol_id`),
  CONSTRAINT `rol_usuario_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'USU2011082313141276618876','root','e6ddb1d5f735a621889aa53135df5284',NULL,NULL,1,0),(2,'USU2011082313141280384809','mdelarosa','e63b670ecf0d75dea62914c17d08b324','2011-08-23',NULL,3,1),(3,'USU201108231314128067417','pnunez','e63b670ecf0d75dea62914c17d08b324','2011-08-23','2011-10-03',3,1),(4,'USU2011082413142147181922','wdiaz','e63b670ecf0d75dea62914c17d08b324','2011-08-24',NULL,3,1),(5,'USU2011082413142157036369','arodriguez','e63b670ecf0d75dea62914c17d08b324','2011-08-24',NULL,3,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-10-03  0:48:21
