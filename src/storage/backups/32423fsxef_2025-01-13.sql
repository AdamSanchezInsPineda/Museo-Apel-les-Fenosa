/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.6.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: museu
-- ------------------------------------------------------
-- Server version	10.6.18-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Autors`
--

DROP TABLE IF EXISTS `Autors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Autors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Autors`
--

LOCK TABLES `Autors` WRITE;
/*!40000 ALTER TABLE `Autors` DISABLE KEYS */;
INSERT INTO `Autors` VALUES (1,'Jose Francisco Franco'),(2,'Pablo Picasso'),(3,'Vincent van Gogh'),(4,'Frida Kahlo'),(5,'Leonardo da Vinci'),(6,'Claude Monet'),(7,'Georgia OKeeffe'),(8,'Salvador Dalí'),(9,'Andy Warhol'),(10,'Jackson Pollock'),(11,'Henri Matisse');
/*!40000 ALTER TABLE `Autors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Baja`
--

DROP TABLE IF EXISTS `Baja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Baja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Baja`
--

LOCK TABLES `Baja` WRITE;
/*!40000 ALTER TABLE `Baja` DISABLE KEYS */;
INSERT INTO `Baja` VALUES (1,'No'),(2,'Sí');
/*!40000 ALTER TABLE `Baja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CausaBaja`
--

DROP TABLE IF EXISTS `CausaBaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CausaBaja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CausaBaja`
--

LOCK TABLES `CausaBaja` WRITE;
/*!40000 ALTER TABLE `CausaBaja` DISABLE KEYS */;
INSERT INTO `CausaBaja` VALUES (1,'Confiscació'),(2,'Destrucció'),(3,'Estat de conservació molt deficient'),(4,'Manteniment i restauració onerós'),(5,'Pèrdua'),(6,'Robatori'),(7,'Successió interadministrativa'),(8,'Valor patrimonial insuficient');
/*!40000 ALTER TABLE `CausaBaja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Classificacion`
--

DROP TABLE IF EXISTS `Classificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classificacion`
--

LOCK TABLES `Classificacion` WRITE;
/*!40000 ALTER TABLE `Classificacion` DISABLE KEYS */;
INSERT INTO `Classificacion` VALUES (1,'Mayor edat'),(2,'Pintura'),(3,'Escultura'),(4,'Fotografia'),(5,'Arts decoratives'),(6,'Art tèxtil'),(7,'Ceràmica'),(8,'Mobiliari'),(9,'Numismàtica'),(10,'Documents històrics');
/*!40000 ALTER TABLE `Classificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CodigoGetty`
--

DROP TABLE IF EXISTS `CodigoGetty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CodigoGetty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('autor','material','tecnica') NOT NULL,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CodigoGetty`
--

LOCK TABLES `CodigoGetty` WRITE;
/*!40000 ALTER TABLE `CodigoGetty` DISABLE KEYS */;
INSERT INTO `CodigoGetty` VALUES (1,'autor','AAT300025103 - Picasso, Pablo'),(2,'material','AAT300014078 - Oli'),(3,'tecnica','AAT300054216 - Pintura a l\'oli'),(4,'autor','AAT300018133 - Van Gogh, Vincent'),(5,'material','AAT300010439 - Marbre'),(6,'tecnica','AAT300053789 - Escultura'),(7,'autor','AAT300018002 - Da Vinci, Leonardo'),(8,'material','AAT300014109 - Aquarel·la'),(9,'tecnica','AAT300054328 - Gravat'),(10,'autor','AAT300018519 - Dalí, Salvador');
/*!40000 ALTER TABLE `CodigoGetty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Datacion`
--

DROP TABLE IF EXISTS `Datacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Datacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `any_inicial` int(11) NOT NULL,
  `any_final` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Datacion`
--

LOCK TABLES `Datacion` WRITE;
/*!40000 ALTER TABLE `Datacion` DISABLE KEYS */;
INSERT INTO `Datacion` VALUES (1,'segle IV ante',-400,-301),(2,'primera meitat segle IV ante',-400,-351),(3,'primer quart segle IV ante',-400,-376),(4,'segon quart segle IV ante',-375,-351),(5,'segona meitat segle IV ante',-350,-301),(6,'tercer quart segle IV ante',-350,-326),(7,'últim quart segle IV ante',-325,-301),(8,'segle III ante',-300,-201),(9,'primera meitat segle III ante',-300,-251),(10,'primer quart segle III ante',-300,-276),(11,'segon quart segle III ante',-275,-251),(12,'segona meitat segle III ante',-250,-201),(13,'tercer quart segle III ante',-250,-226),(14,'últim quart segle III ante',-225,-201),(15,'segle II ante',-200,-101),(16,'primera meitat segle II ante',-200,-151),(17,'primer quart segle II ante',-200,-176),(18,'segon quart segle II ante',-175,-151),(19,'segona meitat segle II ante',-150,-101),(20,'tercer quart segle II ante',-150,-126),(21,'últim quart segle II ante',-125,-101),(22,'segle I ante',-100,-1),(23,'primera meitat segle I ante',-100,-51),(24,'primer quart segle I ante',-100,-76),(25,'segon quart segle I ante',-75,-51),(26,'segona meitat segle I ante',-50,-1),(27,'tercer quart segle I ante',-50,-26),(28,'últim quart segle I ante',-25,-1),(29,'segle I',1,100),(30,'primera meitat segle I',1,50),(31,'primer quart segle I',1,25),(32,'segon quart segle I',26,50),(33,'segona meitat segle I',51,100),(34,'tercer quart segle I',51,75),(35,'últim quart segle I',76,100),(36,'segle II',101,200),(37,'primera meitat segle II',101,150),(38,'primer quart segle II',101,125),(39,'segon quart segle II',126,150),(40,'segona meitat segle II',151,200),(41,'tercer quart segle II',151,175),(42,'últim quart segle II',176,200),(43,'segle III',201,300),(44,'primera meitat segle III',201,250),(45,'primer quart segle III',201,225),(46,'segon quart segle III',226,250),(47,'segona meitat segle III',251,300),(48,'tercer quart segle III',251,275),(49,'últim quart segle III',276,300),(50,'segle IV',301,400),(51,'primera meitat segle IV',301,350),(52,'primer quart segle IV',301,325),(53,'segon quart segle IV',326,350),(54,'segona meitat segle IV',351,400),(55,'tercer quart segle IV',351,375),(56,'últim quart segle IV',376,400),(57,'segle V',401,500),(58,'primera meitat segle V',401,450),(59,'primer quart segle V',401,425),(60,'segon quart segle V',426,450),(61,'segona meitat segle V',451,500),(62,'tercer quart segle V',451,475),(63,'últim quart segle V',476,500),(64,'segle VI',501,600),(65,'primera meitat segle VI',501,550),(66,'primer quart segle VI',501,525),(67,'segon quart segle VI',526,550),(68,'segona meitat segle VI',551,600),(69,'tercer quart segle VI',551,575),(70,'últim quart segle VI',576,600),(71,'segle VII',601,700),(72,'primera meitat segle VII',601,650),(73,'primer quart segle VII',601,625),(74,'segon quart segle VII',626,650),(75,'segona meitat segle VII',651,700),(76,'tercer quart segle VII',651,675),(77,'últim quart segle VII',676,700),(78,'segle VIII',701,800),(79,'primera meitat segle VIII',701,750),(80,'primer quart segle VIII',701,725),(81,'segon quart segle VIII',726,750),(82,'segona meitat segle VIII',751,800),(83,'tercer quart segle VIII',751,775),(84,'últim quart segle VIII',776,800),(85,'segle IX',801,900),(86,'primera meitat segle IX',801,850),(87,'primer quart segle IX',801,825),(88,'segon quart segle IX',826,850),(89,'segona meitat segle IX',851,900),(90,'tercer quart segle IX',851,875),(91,'últim quart segle IX',876,900),(92,'segle X',901,1000),(93,'primera meitat segle X',901,950),(94,'primer quart segle X',901,925),(95,'segon quart segle X',926,950),(96,'segona meitat segle X',951,1000),(97,'tercer quart segle X',951,975),(98,'últim quart segle X',976,1000),(99,'segle XI',1001,1100),(100,'primera meitat segle XI',1001,1050),(101,'primer quart segle XI',1001,1025),(102,'segon quart segle XI',1026,1050),(103,'segona meitat segle XI',1051,1100),(104,'tercer quart segle XI',1051,1075),(105,'últim quart segle XI',1076,1100),(106,'segle XII',1101,1200),(107,'primera meitat segle XII',1101,1150),(108,'primer quart segle XII',1101,1125),(109,'segon quart segle XII',1126,1150),(110,'segona meitat segle XII',1151,1200),(111,'tercer quart segle XII',1151,1175),(112,'últim quart segle XII',1176,1200),(113,'segle XIII',1201,1300),(114,'primera meitat segle XIII',1201,1250),(115,'primer quart segle XIII',1201,1225),(116,'segon quart segle XIII',1226,1250),(117,'segona meitat segle XIII',1251,1300),(118,'tercer quart segle XIII',1251,1275),(119,'últim quart segle XIII',1276,1300),(120,'segle XIV',1301,1400),(121,'primera meitat segle XIV',1301,1350),(122,'primer quart segle XIV',1301,1325),(123,'segon quart segle XIV',1326,1350),(124,'segona meitat segle XIV',1351,1400),(125,'tercer quart segle XIV',1351,1375),(126,'últim quart segle XIV',1376,1400),(127,'segle XV',1401,1500),(128,'primera meitat segle XV',1401,1450),(129,'primer quart segle XV',1401,1425),(130,'segon quart segle XV',1426,1450),(131,'segona meitat segle XV',1451,1500),(132,'tercer quart segle XV',1451,1475),(133,'últim quart segle XV',1476,1500),(134,'segle XVI',1501,1600),(135,'primera meitat segle XVI',1501,1550),(136,'primer quart segle XVI',1501,1525),(137,'segon quart segle XVI',1526,1550),(138,'segona meitat segle XVI',1551,1600),(139,'tercer quart segle XVI',1551,1575),(140,'últim quart segle XVI',1576,1600),(141,'segle XVII',1601,1700),(142,'primera meitat segle XVII',1601,1650),(143,'primer quart segle XVII',1601,1625),(144,'segon quart segle XVII',1626,1650),(145,'segona meitat segle XVII',1651,1700),(146,'tercer quart segle XVII',1651,1675),(147,'últim quart segle XVII',1676,1700),(148,'segle XVIII',1701,1800),(149,'primera meitat segle XVIII',1701,1750),(150,'primer quart segle XVIII',1701,1725),(151,'segon quart segle XVIII',1726,1750),(152,'segona meitat segle XVIII',1751,1800),(153,'tercer quart segle XVIII',1751,1775),(154,'últim quart segle XVIII',1776,1800),(155,'segle XIX',1801,1900),(156,'primera meitat segle XIX',1801,1850),(157,'primer quart segle XIX',1801,1825),(158,'segon quart segle XIX',1826,1850),(159,'segona meitat segle XIX',1851,1900),(160,'tercer quart segle XIX',1851,1875),(161,'últim quart segle XIX',1876,1900),(162,'segle XX',1901,2000),(163,'primera meitat segle XX',1901,1950),(164,'primer quart segle XX',1901,1925),(165,'segon quart segle XX',1926,1950),(166,'segona meitat segle XX',1951,2000),(167,'tercer quart segle XX',1951,1975),(168,'últim quart segle XX',1976,2000);
/*!40000 ALTER TABLE `Datacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EstadoConservacion`
--

DROP TABLE IF EXISTS `EstadoConservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EstadoConservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EstadoConservacion`
--

LOCK TABLES `EstadoConservacion` WRITE;
/*!40000 ALTER TABLE `EstadoConservacion` DISABLE KEYS */;
INSERT INTO `EstadoConservacion` VALUES (1,'Bo'),(2,'Dolent'),(3,'Excel·lent'),(4,'Indeterminat'),(5,'desconeguda'),(6,'Regular');
/*!40000 ALTER TABLE `EstadoConservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Exposiciones`
--

DROP TABLE IF EXISTS `Exposiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Exposiciones` (
  `ExposicionID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `TipoExposicionID` int(11) NOT NULL,
  `LugarExposicion` varchar(255) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ExposicionID`),
  KEY `TipoExposicionID` (`TipoExposicionID`),
  CONSTRAINT `Exposiciones_ibfk_1` FOREIGN KEY (`TipoExposicionID`) REFERENCES `TiposExposicion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Exposiciones`
--

LOCK TABLES `Exposiciones` WRITE;
/*!40000 ALTER TABLE `Exposiciones` DISABLE KEYS */;
INSERT INTO `Exposiciones` VALUES (1,'Picasso: Obra Completa','2024-03-01 10:00:00','2024-06-30 20:00:00',6,'Sala Principal - Museu d\'Art Modern',NULL),(2,'Exposición de arte contemporáneo','2024-10-01 00:00:00','2024-10-31 00:00:00',1,'Museo de Arte Contemporáneo',NULL),(3,'Retrospectiva Dalí','2024-05-01 10:00:00','2024-09-30 18:00:00',5,'Sala Salvador Dalí',NULL),(4,'Impressionisme i Llum','2024-06-01 09:30:00','2024-10-31 20:00:00',2,'Palau de les Arts',NULL),(5,'Art Digital Interactiu','2024-07-15 10:00:00','2024-11-15 19:00:00',9,'Espai Digital',NULL),(6,'Escultures del Segle XX','2024-08-01 09:00:00','2024-12-31 18:00:00',1,'Jardins del Museu',NULL),(7,'Fotografia Contemporània','2024-09-15 10:00:00','2025-01-15 20:00:00',7,'Sala d\'Exposicions Temporals',NULL),(8,'25 Anys d\'Art Local','2024-10-01 09:30:00','2025-02-28 19:00:00',10,'Centre Cultural Municipal',NULL),(9,'Art en Moviment','2024-11-15 10:00:00','2025-03-15 18:00:00',3,'Diverses Localitzacions',NULL),(10,'Exposició Virtual d\'Art Modern','2024-12-01 00:00:00','2025-04-30 23:59:59',4,'Plataforma Virtual del Museu',NULL);
/*!40000 ALTER TABLE `Exposiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FormaIngreso`
--

DROP TABLE IF EXISTS `FormaIngreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FormaIngreso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FormaIngreso`
--

LOCK TABLES `FormaIngreso` WRITE;
/*!40000 ALTER TABLE `FormaIngreso` DISABLE KEYS */;
INSERT INTO `FormaIngreso` VALUES (1,'cessió'),(2,'comodat'),(3,'compra'),(4,'dació'),(5,'desconeguda'),(6,'dipòsit'),(7,'donació'),(8,'entrega obligatòria'),(9,'excavació'),(10,'expropiació'),(11,'herència'),(12,'intercanvi'),(13,'llegat'),(14,'ocupació'),(15,'ofrena'),(16,'permuta'),(17,'premi'),(18,'propietat directa'),(19,'recol.lecció'),(20,'recuperació'),(21,'successió interadministrativa');
/*!40000 ALTER TABLE `FormaIngreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Material`
--

DROP TABLE IF EXISTS `Material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Material`
--

LOCK TABLES `Material` WRITE;
/*!40000 ALTER TABLE `Material` DISABLE KEYS */;
INSERT INTO `Material` VALUES (1,'Madera'),(2,'Bronze'),(3,'Marbre'),(4,'Vidre'),(5,'Ceràmica'),(6,'Tela'),(7,'Pedra'),(8,'Metall'),(9,'Paper'),(10,'Plàstic'),(11,'Or');
/*!40000 ALTER TABLE `Material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Museos`
--

DROP TABLE IF EXISTS `Museos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Museos` (
  `MuseoID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Fotografia` text DEFAULT NULL,
  PRIMARY KEY (`MuseoID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Museos`
--

LOCK TABLES `Museos` WRITE;
/*!40000 ALTER TABLE `Museos` DISABLE KEYS */;
INSERT INTO `Museos` VALUES (1,'Apel.les Fenosa','1'),(2,'Museu Nacional d\'Art de Catalunya','2'),(3,'Museu Dalí de Figueres','3'),(4,'Museu de la Ciència i de la Tècnica de Catalunya','4'),(5,'Museu d\'Història de Girona','5'),(6,'Museu de Lleida','6'),(7,'Museu d\'Art Modern de Tarragona','7'),(8,'Museu Picasso','8'),(9,'Museu Marítim de Barcelona','9'),(10,'Museu de la Música de Barcelona','10');
/*!40000 ALTER TABLE `Museos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ObjetoExposicion`
--

DROP TABLE IF EXISTS `ObjetoExposicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ObjetoExposicion` (
  `ObjetoExposicionID` int(11) NOT NULL AUTO_INCREMENT,
  `ObjetoID` int(11) DEFAULT NULL,
  `ExposicionID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ObjetoExposicionID`),
  KEY `ObjetoExposicion_ibfk_1` (`ObjetoID`),
  KEY `ObjetoExposicion_ibfk_2` (`ExposicionID`),
  CONSTRAINT `ObjetoExposicion_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`) ON DELETE CASCADE,
  CONSTRAINT `ObjetoExposicion_ibfk_2` FOREIGN KEY (`ExposicionID`) REFERENCES `Exposiciones` (`ExposicionID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ObjetoExposicion`
--

LOCK TABLES `ObjetoExposicion` WRITE;
/*!40000 ALTER TABLE `ObjetoExposicion` DISABLE KEYS */;
INSERT INTO `ObjetoExposicion` VALUES (16,1,5),(17,2,5),(18,3,5),(19,4,5),(20,1,8),(21,2,8),(22,4,8),(23,5,8),(24,9,5),(25,13,5);
/*!40000 ALTER TABLE `ObjetoExposicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Objetos`
--

DROP TABLE IF EXISTS `Objetos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Objetos` (
  `ObjetoID` int(11) NOT NULL AUTO_INCREMENT,
  `RegistroNº` varchar(6) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL,
  `Nombre` varchar(255) NOT NULL,
  `ClasificacionGenericaID` int(11) DEFAULT NULL,
  `ColeccionProcedencia` varchar(255) DEFAULT NULL,
  `Altura` decimal(10,2) DEFAULT NULL,
  `Anchura` decimal(10,2) DEFAULT NULL,
  `Profundidad` decimal(10,2) DEFAULT NULL,
  `MaterialID` int(11) DEFAULT NULL,
  `TecnicaID` int(11) DEFAULT NULL,
  `AutorID` int(11) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `DatacionID` int(11) DEFAULT NULL,
  `FechaRegistro` datetime NOT NULL,
  `NumeroEjemplares` int(11) DEFAULT NULL,
  `FormaIngresoID` int(11) DEFAULT NULL,
  `FechaIngreso` datetime DEFAULT NULL,
  `FuenteIngreso` varchar(255) DEFAULT NULL,
  `BajaID` int(11) DEFAULT NULL,
  `CausaBajaID` int(11) DEFAULT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `PersonaAutorizadaBaja` varchar(255) DEFAULT NULL,
  `EstadoConservacionID` int(11) DEFAULT NULL,
  `LugarEjecucion` varchar(255) DEFAULT NULL,
  `LugarProcedencia` varchar(255) DEFAULT NULL,
  `NumeroTiraje` varchar(255) DEFAULT NULL,
  `OtrosNrosIdentificacion` varchar(255) DEFAULT NULL,
  `ValoracionEconomica` decimal(10,2) DEFAULT NULL,
  `Bibliografia` text DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `HistoriaObjeto` text DEFAULT NULL,
  `MuseoID` int(11) DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`ObjetoID`),
  KEY `Objetos_ibfk_1` (`ClasificacionGenericaID`),
  KEY `Objetos_ibfk_2` (`MaterialID`),
  KEY `Objetos_ibfk_3` (`TecnicaID`),
  KEY `Objetos_ibfk_4` (`AutorID`),
  KEY `Objetos_ibfk_6` (`EstadoConservacionID`),
  KEY `Objetos_ibfk_7` (`MuseoID`),
  KEY `Objetos_ibfk_8` (`DatacionID`),
  KEY `Objetos_ibfk_9` (`BajaID`),
  KEY `Objetos_ibfk_10` (`CausaBajaID`),
  KEY `Objetos_ibfk_11` (`FormaIngresoID`),
  KEY `Objetos_ibfk_12` (`UsuarioID`),
  CONSTRAINT `Objetos_ibfk_1` FOREIGN KEY (`ClasificacionGenericaID`) REFERENCES `Classificacion` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_10` FOREIGN KEY (`CausaBajaID`) REFERENCES `CausaBaja` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_11` FOREIGN KEY (`FormaIngresoID`) REFERENCES `FormaIngreso` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_2` FOREIGN KEY (`MaterialID`) REFERENCES `Material` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_3` FOREIGN KEY (`TecnicaID`) REFERENCES `Tecnica` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_4` FOREIGN KEY (`AutorID`) REFERENCES `Autors` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_6` FOREIGN KEY (`EstadoConservacionID`) REFERENCES `EstadoConservacion` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_7` FOREIGN KEY (`MuseoID`) REFERENCES `Museos` (`MuseoID`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_8` FOREIGN KEY (`DatacionID`) REFERENCES `Datacion` (`id`) ON DELETE SET NULL,
  CONSTRAINT `Objetos_ibfk_9` FOREIGN KEY (`BajaID`) REFERENCES `Baja` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Objetos`
--

LOCK TABLES `Objetos` WRITE;
/*!40000 ALTER TABLE `Objetos` DISABLE KEYS */;
INSERT INTO `Objetos` VALUES (1,'123456',1,'1','Violin',1,'Pellentesque ipsum.',150.00,160.00,50.00,1,1,1,'Pellentesque vestibulum velit ipsum.',4,'2024-10-25 08:58:39',1,6,'2024-10-25 08:58:39','Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ',1,NULL,'2024-10-25 08:58:39','Alguien quizas',4,'Vivamus porta arcu','Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ','1',NULL,10000000.00,'Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n','Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n','Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n',1,1),(2,'000002',1,'2','La persistència de la memòria',2,'Col·lecció Dalí',24.10,33.00,0.00,6,8,8,'La persistència de la memòria',164,'2023-02-20 00:00:00',1,7,'2023-02-20 00:00:00','Donació Fundació Dalí',1,NULL,NULL,NULL,3,'Figueres','Catalunya',NULL,'FD-1931-02',10000.00,'Catàleg Raonat de Pintures de Salvador Dalí','Famosa obra surrealista amb rellotges tous','Creat el 1931, representa la distorsió del temps',3,1),(3,'000003',1,'3','Els Gira-sols',2,'Col·lecció Van Gogh',92.10,73.00,0.00,6,8,3,'Els Gira-sols',161,'2023-03-10 00:00:00',1,3,'2023-03-10 00:00:00','Adquisició internacional',1,NULL,NULL,NULL,3,'Arles','França',NULL,'VG-1888-03',80000.00,'Van Gogh: La Vida i l\'Obra','Sèrie de pintures de gira-sols','Part de la famosa sèrie pintada a Arles',2,1),(4,'000004',1,'4','El Pensador',3,'Col·lecció Rodin',180.00,98.00,145.00,2,6,1,'El Pensador',161,'2023-04-05 00:00:00',1,3,'2023-04-05 00:00:00','Compra subhasta',1,NULL,NULL,NULL,3,'París','França','3/25','RD-1902-04',40000.00,'Rodin: Escultura Moderna','Figura masculina en bronze asseguda en reflexió','Originalment part de Les Portes de l\'Infern',4,1),(5,'000005',1,'5','Autoretrat amb Collaret d\'Espines',2,'Col·lecció Kahlo',63.50,49.50,0.00,6,8,4,'Autoretrat amb Collaret d\'Espines',164,'2023-05-15 00:00:00',1,7,'2023-05-15 00:00:00','Donació privada',1,NULL,NULL,NULL,3,'Ciutat de Mèxic','Mèxic',NULL,'FK-1940-05',30000.00,'Frida Kahlo: Vida i Art','Autoretrat amb elements simbòlics','Pintat durant el seu període més productiu',5,1),(6,'000006',1,'6','La Gioconda',2,'Col·lecció Reial',77.00,53.00,0.00,6,8,5,'La Gioconda',134,'2023-06-20 00:00:00',1,3,'2023-06-20 00:00:00','Adquisició històrica',1,NULL,NULL,NULL,3,'Florència','Itàlia',NULL,'LV-1503-06',85000.00,'Leonardo: Mestre del Renaixement','Retrat femení amb somriure enigmàtic','Obra mestra del Renaixement italià',6,1),(7,'000007',1,'7','Nenúfars',2,'Col·lecció Impressionista',200.00,425.00,0.00,6,8,6,'Nenúfars',162,'2023-07-25 00:00:00',1,3,'2023-07-25 00:00:00','Compra galeria',1,NULL,NULL,NULL,3,'Giverny','França',NULL,'CM-1920-07',70000.00,'Monet i l\'Impressionisme','Gran panell de nenúfars sobre l\'aigua','Part de la sèrie pintada al seu jardí de Giverny',7,1),(8,'000008',1,'8','Flor de Georgia',2,'Col·lecció O\'Keeffe',91.40,76.20,0.00,6,8,7,'Flor de Georgia',164,'2023-08-30 00:00:00',1,7,'2023-08-30 00:00:00','Donació museu',1,NULL,NULL,NULL,3,'Nou Mèxic','Estats Units',NULL,'GO-1932-08',25000.00,'O\'Keeffe: Pionera Modernista','Representació ampliada d\'una flor','Exemple característic del seu estil botànic',8,1),(9,'000009',1,'9','Marilyn Díptic',2,'Col·lecció Pop Art',205.40,144.80,0.00,6,9,9,'Marilyn Díptic',167,'2023-09-10 00:00:00',1,3,'2023-09-10 00:00:00','Compra col·leccionista',1,NULL,NULL,NULL,3,'Nova York','Estats Units',NULL,'AW-1962-09',20000.00,'Andy Warhol: El Pop Art','Obra icònica que representa la cultura de masses','Creada en 1962, simbolitza la fama i la comercialització',9,1),(10,'000010',1,'10','La Nit Estelada',2,'Col·lecció Van Gogh',73.70,92.10,0.00,6,8,3,'La Nit Estelada',161,'2023-10-05 00:00:00',1,3,'2023-10-05 00:00:00','Adquisició internacional',1,NULL,NULL,NULL,3,'Saint-Rémy-de-Provence','França',NULL,'VG-1889-10',10000.00,'Van Gogh: La Vida i l\'Obra','Pintura emblemàtica del postimpressionisme','Pintada durant la seva estada en un sanatori',3,0),(11,'000010',1,'10','La Nit Estelada',2,'Col·lecció Van Gogh',73.70,92.10,0.00,6,8,3,'La Nit Estelada',161,'2023-10-05 00:00:00',1,3,'2023-10-05 00:00:00','Adquisició internacional',1,NULL,NULL,NULL,3,'Saint-Rémy-de-Provence','França',NULL,'VG-1889-10',10000.00,'Van Gogh: La Vida i l\'Obra','Pintura emblemàtica del postimpressionisme','Pintada durant la seva estada en un sanatori',3,0),(12,'000010',1,'10','La Nit Estelada',2,'Col·lecció Van Gogh',73.70,92.10,0.00,6,8,3,'La Nit Estelada',161,'2023-10-05 00:00:00',1,3,'2023-10-05 00:00:00','Adquisició internacional',1,NULL,NULL,NULL,3,'Saint-Rémy-de-Provence','França',NULL,'VG-1889-10',10000.00,'Van Gogh: La Vida i l\'Obra','Pintura emblemàtica del postimpressionisme','Pintada durant la seva estada en un sanatori',3,0),(13,'123456',1,'1','Violin',1,'Pellentesque ipsum.',150.00,160.00,50.00,1,1,1,'Pellentesque vestibulum velit ipsum.',4,'2024-10-25 08:58:39',1,6,'2024-10-25 08:58:39','Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ',1,NULL,'2024-10-25 08:58:39','Alguien quizas',4,'Vivamus porta arcu','Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ','1',NULL,10000000.00,'Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n','Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n','Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n',1,1);
/*!40000 ALTER TABLE `Objetos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Restauraciones`
--

DROP TABLE IF EXISTS `Restauraciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Restauraciones` (
  `RestauracionID` int(11) NOT NULL AUTO_INCREMENT,
  `ObjetoID` int(11) DEFAULT NULL,
  `CodigoRestauracion` varchar(255) DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `ComentarioRestauracion` text DEFAULT NULL,
  `NombreRestaurador` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RestauracionID`),
  KEY `Restauraciones_ibfk_1` (`ObjetoID`),
  CONSTRAINT `Restauraciones_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Restauraciones`
--

LOCK TABLES `Restauraciones` WRITE;
/*!40000 ALTER TABLE `Restauraciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `Restauraciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tecnica`
--

DROP TABLE IF EXISTS `Tecnica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tecnica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tecnica`
--

LOCK TABLES `Tecnica` WRITE;
/*!40000 ALTER TABLE `Tecnica` DISABLE KEYS */;
INSERT INTO `Tecnica` VALUES (1,'Oleo'),(2,'Acuarela'),(3,'Dibujo'),(4,'Grabado'),(5,'Lacado'),(6,'Pintura'),(7,'Tintas'),(8,'Pintura al óleo'),(9,'Pintura al acuarela'),(10,'Pintura al óleo y acuarela');
/*!40000 ALTER TABLE `Tecnica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TiposExposicion`
--

DROP TABLE IF EXISTS `TiposExposicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TiposExposicion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TiposExposicion`
--

LOCK TABLES `TiposExposicion` WRITE;
/*!40000 ALTER TABLE `TiposExposicion` DISABLE KEYS */;
INSERT INTO `TiposExposicion` VALUES (1,'Aliena'),(2,'Pròpia'),(3,'Itinerant'),(4,'Virtual'),(5,'Retrospectiva'),(6,'Monogràfica'),(7,'Col·lectiva'),(8,'Antològica'),(9,'Interactiva'),(10,'Commemorativa');
/*!40000 ALTER TABLE `TiposExposicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UbicacionObjeto`
--

DROP TABLE IF EXISTS `UbicacionObjeto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UbicacionObjeto` (
  `UbicacionObjetoID` int(11) NOT NULL AUTO_INCREMENT,
  `UbicacionID` int(11) NOT NULL,
  `ObjetoID` int(11) NOT NULL,
  `FechaInicioUbicacion` datetime DEFAULT NULL,
  `FechaFinUbicacion` datetime DEFAULT NULL,
  `ComentarioUbicacion` text DEFAULT NULL,
  PRIMARY KEY (`UbicacionObjetoID`),
  KEY `UbicacionID` (`UbicacionID`),
  KEY `ObjetoID` (`ObjetoID`),
  CONSTRAINT `UbicacionObjeto_ibfk_1` FOREIGN KEY (`UbicacionID`) REFERENCES `Ubicaciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `UbicacionObjeto_ibfk_2` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UbicacionObjeto`
--

LOCK TABLES `UbicacionObjeto` WRITE;
/*!40000 ALTER TABLE `UbicacionObjeto` DISABLE KEYS */;
INSERT INTO `UbicacionObjeto` VALUES (1,2,6,'2024-11-01 11:48:53',NULL,NULL),(2,11,7,'2024-11-01 11:50:27',NULL,NULL),(3,2,2,'2024-12-09 10:27:30','2024-12-09 10:27:30',NULL),(4,3,3,'2024-12-09 10:27:47','2024-12-09 10:27:47',NULL),(5,5,5,'2024-12-09 10:27:47','2024-12-09 10:27:47',NULL),(6,4,4,'2024-12-09 10:28:22','2024-12-09 10:28:22',NULL),(7,8,8,'2024-12-09 10:28:22','2024-12-09 10:28:22',NULL);
/*!40000 ALTER TABLE `UbicacionObjeto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ubicaciones`
--

DROP TABLE IF EXISTS `Ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ubicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `UbicacionPadre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UbicacionPadre` (`UbicacionPadre`),
  CONSTRAINT `Ubicaciones_ibfk_1` FOREIGN KEY (`UbicacionPadre`) REFERENCES `Ubicaciones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ubicaciones`
--

LOCK TABLES `Ubicaciones` WRITE;
/*!40000 ALTER TABLE `Ubicaciones` DISABLE KEYS */;
INSERT INTO `Ubicaciones` VALUES (1,'Sotano',NULL),(2,'Piso 1',1),(3,'Piso 2',2),(4,'Piso 3',1),(5,'Piso 4',1),(6,'Piso 5',1),(7,'Piso 6',3),(8,'Piso 7',3),(9,'Piso 8',8),(11,'Piso 9',9),(12,'Principal',NULL),(13,'Desban',12);
/*!40000 ALTER TABLE `Ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `UsuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Rol` enum('admin','tecnic','convidat') NOT NULL,
  PRIMARY KEY (`UsuarioID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'admin','1234','admin'),(4,'admin','1234','admin'),(5,'Arnau','1234','tecnic'),(6,'Arnau','123','convidat');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-13 10:27:06
