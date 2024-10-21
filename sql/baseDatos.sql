-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 16, 2024 at 08:26 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Autors`
--

CREATE TABLE `Autors` (
  `AutorID` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Exposiciones`
--

CREATE TABLE `Exposiciones` (
  `ExposicionID` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `TipoExposicionID` int NOT NULL,
  `LugarExposicion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Exposiciones` (`ExposicionID`, `Nombre`, `FechaInicio`, `FechaFin`, `TipoExposicionID`, `LugarExposicion`) VALUES 
(2, 'Exposición de arte contemporáneo', '2024-10-01 00:00:00', '2024-10-31 00:00:00 ', 1, 'Museo de Arte Contemporáneo');

-- --------------------------------------------------------

--
-- Table structure for table `Museos`
--

CREATE TABLE `Museos` (
  `MuseoID` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Fotografia` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ObjetoExposicion`
--

CREATE TABLE `ObjetoExposicion` (
  `ObjetoExposicionID` int NOT NULL,
  `ObjetoID` int DEFAULT NULL,
  `ExposicionID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO  `ObjetoExposicion` (`ObjetoExposicionID`, `ObjetoID`,  `ExposicionID`) VALUES 
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Objetos`
--

CREATE TABLE `Objetos` (
  `ObjetoID` int NOT NULL,
  `RegistroNº` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ClasificacionGenericaID` int DEFAULT NULL,
  `ColeccionProcedencia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Altura` decimal(10,2) DEFAULT NULL,
  `Anchura` decimal(10,2) DEFAULT NULL,
  `Profundidad` decimal(10,2) DEFAULT NULL,
  `MaterialID` int DEFAULT NULL,
  `TecnicaID` int DEFAULT NULL,
  `AutorID` int DEFAULT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DatacionID` int DEFAULT NULL,
  `UbicacionActualID` int DEFAULT NULL,
  `FechaRegistro` datetime NOT NULL,
  `NumeroEjemplares` int DEFAULT NULL,
  `FormaIngresoID` int DEFAULT NULL,
  `FechaIngreso` datetime DEFAULT NULL,
  `FuenteIngreso` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BajaID` int DEFAULT NULL,
  `CausaBajaID` int DEFAULT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `PersonaAutorizadaBaja` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `EstadoConservacionID` int DEFAULT NULL,
  `LugarEjecucion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LugarProcedencia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NumeroTiraje` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `OtrosNrosIdentificacion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ValoracionEconomica` decimal(10,2) DEFAULT NULL,
  `Bibliografia` text COLLATE utf8mb4_general_ci,
  `Descripcion` text COLLATE utf8mb4_general_ci,
  `HistoriaObjeto` text COLLATE utf8mb4_general_ci,
  `MuseoID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ObjetosPrueba`
--

CREATE TABLE `ObjetosPrueba` (
  `ObjetoID` int NOT NULL,
  `Registro` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Autor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Datacio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Ubicacio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ObjetosPrueba`
--

INSERT INTO `ObjetosPrueba` (`ObjetoID`, `Registro`, `Imagen`, `Nombre`, `Titulo`, `Autor`, `Datacio`, `Ubicacio`) VALUES
(1, '001001', '1', 'Las Meninas', 'Las Meninas', 'Francisco Goya', 'Siglo XIX', 'Sala 1'),
(2, '001002', '2', 'Las Meninas', 'Las Meninas', 'Francisco Goya', 'Siglo XIX', 'Sala 1'),
(3, '001003', '3', 'El caballero con la mano en el pecho', 'El caballero con la mano en el pecho', 'El Greco', 'Siglo XIX', 'Sala 2'),
(4, '001004', '4', 'Las Meninas', 'Las Meninas', 'Francisco Goya', 'Siglo XIX', 'Sala 1'),
(5, '001005', '5', 'Las Meninas', 'Las Meninas', 'Francisco Goya', 'Siglo XIX', 'Sala 1'),
(6, '001006', '6', 'El caballero con la mano en el pecho', 'El caballero con la mano en el pecho', 'El Greco', 'Siglo XIX', 'Sala 2');

-- --------------------------------------------------------

--
-- Table structure for table `Restauraciones`
--

CREATE TABLE `Restauraciones` (
  `RestauracionID` int NOT NULL,
  `ObjetoID` int DEFAULT NULL,
  `CodigoRestauracion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `ComentarioRestauracion` text COLLATE utf8mb4_general_ci,
  `NombreRestaurador` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Ubicaciones`
--

CREATE TABLE `Ubicaciones` (
  `UbicacionID` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `UbicacionPadre` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `UbicacionObjeto`
--

CREATE TABLE `UbicacionObjeto` (
  `UbicacionObjetoID` int NOT NULL,
  `UbicacionID` int NOT NULL,
  `ObjetoID` int NOT NULL,
  `FechaInicioUbicacion` datetime DEFAULT NULL,
  `FechaFinUbicacion` datetime DEFAULT NULL,
  `ComentarioUbicacion` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `UsuarioID` int NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL UNIQUE,
  `Contraseña` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Rol` enum('admin','tecnic','convidat') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`UsuarioID`, `Nombre`, `Contraseña`, `Rol`) VALUES
(1, 'admin', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Vocabularios`
--

CREATE TABLE `Vocabularios` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci,
  `padre_id` int DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Vocabularios`
--

INSERT INTO `Vocabularios` (`nombre`, `descripcion`, `padre_id`) VALUES
('classificacio', 'Classificació genèrica', NULL),
('material', 'Material', NULL),
('codi_material', 'Codi Getty material', NULL),
('tecnica', 'Tècnica', NULL),
('codi_tecnica', 'Codi Getty tècnica', NULL),
('codi_autor', 'Codi autor', NULL),
('forma_ingres', 'Forma d\'ingrés', NULL),
('baixa', 'Baixa', NULL),
('causa_baixa', 'Causa de baixa', NULL),
('estat_conservacio', 'Estat de conservació', NULL),
('tipus_exposicio', 'Tipus exposició', NULL),
('datacio', 'Datació', NULL),
('any_inici', 'Any d\'inici', 12),
('any_final', 'Any final', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Vocabulario_valores`
--

CREATE TABLE `Vocabulario_valores` (
  `id` int NOT NULL,
  `vocabulario_id` int DEFAULT NULL,
  `valor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(7, 'cessió'),
(7, 'comodat'),
(7, 'compra'),
(7, 'dació'),
(7, 'desconeguda'),
(7, 'dipòsit'),
(7, 'donació'),
(7, 'entrega obligatòria'),
(7, 'excavació'),
(7, 'expropiació'),
(7, 'herència'),
(7, 'intercanvi'),
(7, 'llegat'),
(7, 'ocupació'),
(7, 'ofrena'),
(7, 'permuta'),
(7, 'premi'),
(7, 'propietat directa'),
(7, 'recol.lecció'),
(7, 'recuperació'),
(7, 'successió interadministrativa');

-- Inserts para Baixa (vocabulario_id = 8)
INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(8, 'No'),
(8, 'Sí');

-- Inserts para Causa de baixa (vocabulario_id = 9)
INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(9, 'Confiscació'),
(9, 'Destrucció'),
(9, 'Estat de conservació molt deficient'),
(9, 'Manteniment i restauració onerós'),
(9, 'Pèrdua'),
(9, 'Robatori'),
(9, 'Successió interadministrativa'),
(9, 'Valor patrimonial insuficient');

-- Inserts para Estat de conservació (vocabulario_id = 10)
INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(10, 'Bo'),
(10, 'Dolent'),
(10, 'Excel·lent'),
(10, 'Indeterminat'),
(10, 'desconeguda'),
(10, 'Regular');

-- Inserts para Tipus exposició (vocabulario_id = 11)
INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(11, 'Aliena'),
(11, 'Pròpia');

-- Inserts para Datació (vocabulario_id = 12), Any d'inici (vocabulario_id = 13) y Any final (vocabulario_id = 14)
-- Estas son solo algunas de las entradas representativas de los muchos valores
INSERT INTO `Vocabulario_valores` (`vocabulario_id`, `valor`) VALUES
(12, 'segle IV ante'),
(13, '-400'),
(14, '-301'),
(12, 'primera meitat segle IV ante'),
(13, '-400'),
(14, '-351'),
(12, 'primer quart segle IV ante'),
(13, '-400'),
(14, '-376'),
(12, 'segon quart segle IV ante'),
(13, '-375'),
(14, '-351'),
(12, 'segona meitat segle IV ante'),
(13, '-350'),
(14, '-301'),
(12, 'tercer quart segle IV ante'),
(13, '-350'),
(14, '-326'),
(12, 'últim quart segle IV ante'),
(13, '-325'),
(14, '-301'),
(12, 'segle III ante'),
(13, '-300'),
(14, '-201'),
(12, 'primera meitat segle III ante'),
(13, '-300'),
(14, '-251'),
(12, 'primer quart segle III ante'),
(13, '-300'),
(14, '-276'),
(12, 'segon quart segle III ante'),
(13, '-275'),
(14, '-251'),
(12, 'segona meitat segle III ante'),
(13, '-250'),
(14, '-201'),
(12, 'tercer quart segle III ante'),
(13, '-250'),
(14, '-226'),
(12, 'últim quart segle III ante'),
(13, '-225'),
(14, '-201'),
(12, 'segle II ante'),
(13, '-200'),
(14, '-101'),
(12, 'primera meitat segle II ante'),
(13, '-200'),
(14, '-151'),
(12, 'primer quart segle II ante'),
(13, '-200'),
(14, '-176'),
(12, 'segon quart segle II ante'),
(13, '-175'),
(14, '-151'),
(12, 'segona meitat segle II ante'),
(13, '-150'),
(14, '-101'),
(12, 'tercer quart segle II ante'),
(13, '-150'),
(14, '-126'),
(12, 'últim quart segle II ante'),
(13, '-125'),
(14, '-101'),
(12, 'segle I ante'),
(13, '-100'),
(14, '-1'),
(12, 'primera meitat segle I ante'),
(13, '-100'),
(14, '-51'),
(12, 'primer quart segle I ante'),
(13, '-100'),
(14, '-76'),
(12, 'segon quart segle I ante'),
(13, '-75'),
(14, '-51'),
(12, 'segona meitat segle I ante'),
(13, '-50'),
(14, '-1'),
(12, 'tercer quart segle I ante'),
(13, '-50'),
(14, '-26'),
(12, 'últim quart segle I ante'),
(13, '-25'),
(14, '-1'),
(12, 'segle I'),
(13, '1'),
(14, '100'),
(12, 'primera meitat segle I'),
(13, '1'),
(14, '50'),
(12, 'primer quart segle I'),
(13, '1'),
(14, '25'),
(12, 'segon quart segle I'),
(13, '26'),
(14, '50'),
(12, 'segona meitat segle I'),
(13, '51'),
(14, '100'),
(12, 'tercer quart segle I'),
(13, '51'),
(14, '75'),
(12, 'últim quart segle I'),
(13, '76'),
(14, '100'),
(12, 'segle II'),
(13, '101'),
(14, '200'),
(12, 'primera meitat segle II'),
(13, '101'),
(14, '150'),
(12, 'primer quart segle II'),
(13, '101'),
(14, '125'),
(12, 'segon quart segle II'),
(13, '126'),
(14, '150'),
(12, 'segona meitat segle II'),
(13, '151'),
(14, '200'),
(12, 'tercer quart segle II'),
(13, '151'),
(14, '175'),
(12, 'últim quart segle II'),
(13, '176'),
(14, '200'),
(12, 'segle III'),
(13, '201'),
(14, '300'),
(12, 'primera meitat segle III'),
(13, '201'),
(14, '250'),
(12, 'primer quart segle III'),
(13, '201'),
(14, '225'),
(12, 'segon quart segle III'),
(13, '226'),
(14, '250'),
(12, 'segona meitat segle III'),
(13, '251'),
(14, '300'),
(12, 'tercer quart segle III'),
(13, '251'),
(14, '275'),
(12, 'últim quart segle III'),
(13, '276'),
(14, '300'),
(12, 'segle IV'),
(13, '301'),
(14, '400'),
(12, 'primera meitat segle IV'),
(13, '301'),
(14, '350'),
(12, 'primer quart segle IV'),
(13, '301'),
(14, '325'),
(12, 'segon quart segle IV'),
(13, '326'),
(14, '350'),
(12, 'segona meitat segle IV'),
(13, '351'),
(14, '400'),
(12, 'tercer quart segle IV'),
(13, '351'),
(14, '375'),
(12, 'últim quart segle IV'),
(13, '376'),
(14, '400'),
(12, 'segle V'),
(13, '401'),
(14, '500'),
(12, 'primera meitat segle V'),
(13, '401'),
(14, '450'),
(12, 'primer quart segle V'),
(13, '401'),
(14, '425'),
(12, 'segon quart segle V'),
(13, '426'),
(14, '450'),
(12, 'segona meitat segle V'),
(13, '451'),
(14, '500'),
(12, 'tercer quart segle V'),
(13, '451'),
(14, '475'),
(12, 'últim quart segle V'),
(13, '476'),
(14, '500'),
(12, 'segle VI'),
(13, '501'),
(14, '600'),
(12, 'primera meitat segle VI'),
(13, '501'),
(14, '550'),
(12, 'primer quart segle VI'),
(13, '501'),
(14, '525'),
(12, 'segon quart segle VI'),
(13, '526'),
(14, '550'),
(12, 'segona meitat segle VI'),
(13, '551'),
(14, '600'),
(12, 'tercer quart segle VI'),
(13, '551'),
(14, '575'),
(12, 'últim quart segle VI'),
(13, '576'),
(14, '600'),
(12, 'segle VII'),
(13, '601'),
(14, '700'),
(12, 'primera meitat segle VII'),
(13, '601'),
(14, '650'),
(12, 'primer quart segle VII'),
(13, '601'),
(14, '625'),
(12, 'segon quart segle VII'),
(13, '626'),
(14, '650'),
(12, 'segona meitat segle VII'),
(13, '651'),
(14, '700'),
(12, 'tercer quart segle VII'),
(13, '651'),
(14, '675'),
(12, 'últim quart segle VII'),
(13, '676'),
(14, '700'),
(12, 'segle VIII'),
(13, '701'),
(14, '800'),
(12, 'primera meitat segle VIII'),
(13, '701'),
(14, '750'),
(12, 'primer quart segle VIII'),
(13, '701'),
(14, '725'),
(12, 'segon quart segle VIII'),
(13, '726'),
(14, '750'),
(12, 'segona meitat segle VIII'),
(13, '751'),
(14, '800'),
(12, 'tercer quart segle VIII'),
(13, '751'),
(14, '775'),
(12, 'últim quart segle VIII'),
(13, '776'),
(14, '800'),
(12, 'segle IX'),
(13, '801'),
(14, '900'),
(12, 'primera meitat segle IX'),
(13, '801'),
(14, '850'),
(12, 'primer quart segle IX'),
(13, '801'),
(14, '825'),
(12, 'segon quart segle IX'),
(13, '826'),
(14, '850'),
(12, 'segona meitat segle IX'),
(13, '851'),
(14, '900'),
(12, 'tercer quart segle IX'),
(13, '851'),
(14, '875'),
(12, 'últim quart segle IX'),
(13, '876'),
(14, '900'),
(12, 'segle X'),
(13, '901'),
(14, '1000'),
(12, 'primera meitat segle X'),
(13, '901'),
(14, '950'),
(12, 'primer quart segle X'),
(13, '901'),
(14, '925'),
(12, 'segon quart segle X'),
(13, '926'),
(14, '950'),
(12, 'segona meitat segle X'),
(13, '951'),
(14, '1000'),
(12, 'tercer quart segle X'),
(13, '951'),
(14, '975'),
(12, 'últim quart segle X'),
(13, '976'),
(14, '1000'),
(12, 'segle XI'),
(13, '1001'),
(14, '1100'),
(12, 'primera meitat segle XI'),
(13, '1001'),
(14, '1050'),
(12, 'primer quart segle XI'),
(13, '1001'),
(14, '1025'),
(12, 'segon quart segle XI'),
(13, '1026'),
(14, '1050'),
(12, 'segona meitat segle XI'),
(13, '1051'),
(14, '1100'),
(12, 'tercer quart segle XI'),
(13, '1051'),
(14, '1075'),
(12, 'últim quart segle XI'),
(13, '1076'),
(14, '1100'),
(12, 'segle XII'),
(13, '1101'),
(14, '1200'),
(12, 'primera meitat segle XII'),
(13, '1101'),
(14, '1150'),
(12, 'primer quart segle XII'),
(13, '1101'),
(14, '1125'),
(12, 'segon quart segle XII'),
(13, '1126'),
(14, '1150'),
(12, 'segona meitat segle XII'),
(13, '1151'),
(14, '1200'),
(12, 'tercer quart segle XII'),
(13, '1151'),
(14, '1175'),
(12, 'últim quart segle XII'),
(13, '1176'),
(14, '1200'),
(12, 'segle XIII'),
(13, '1201'),
(14, '1300'),
(12, 'primera meitat segle XIII'),
(13, '1201'),
(14, '1250'),
(12, 'primer quart segle XIII'),
(13, '1201'),
(14, '1225'),
(12, 'segon quart segle XIII'),
(13, '1226'),
(14, '1250'),
(12, 'segona meitat segle XIII'),
(13, '1251'),
(14, '1300'),
(12, 'tercer quart segle XIII'),
(13, '1251'),
(14, '1275'),
(12, 'últim quart segle XIII'),
(13, '1276'),
(14, '1300'),
(12, 'segle XIV'),
(13, '1301'),
(14, '1400'),
(12, 'primera meitat segle XIV'),
(13, '1301'),
(14, '1350'),
(12, 'primer quart segle XIV'),
(13, '1301'),
(14, '1325'),
(12, 'segon quart segle XIV'),
(13, '1326'),
(14, '1350'),
(12, 'segona meitat segle XIV'),
(13, '1351'),
(14, '1400'),
(12, 'tercer quart segle XIV'),
(13, '1351'),
(14, '1375'),
(12, 'últim quart segle XIV'),
(13, '1376'),
(14, '1400'),
(12, 'segle XV'),
(13, '1401'),
(14, '1500'),
(12, 'primera meitat segle XV'),
(13, '1401'),
(14, '1450'),
(12, 'primer quart segle XV'),
(13, '1401'),
(14, '1425'),
(12, 'segon quart segle XV'),
(13, '1426'),
(14, '1450'),
(12, 'segona meitat segle XV'),
(13, '1451'),
(14, '1500'),
(12, 'tercer quart segle XV'),
(13, '1451'),
(14, '1475'),
(12, 'últim quart segle XV'),
(13, '1476'),
(14, '1500'),
(12, 'segle XVI'),
(13, '1501'),
(14, '1600'),
(12, 'primera meitat segle XVI'),
(13, '1501'),
(14, '1550'),
(12, 'primer quart segle XVI'),
(13, '1501'),
(14, '1525'),
(12, 'segon quart segle XVI'),
(13, '1526'),
(14, '1550'),
(12, 'segona meitat segle XVI'),
(13, '1551'),
(14, '1600'),
(12, 'tercer quart segle XVI'),
(13, '1551'),
(14, '1575'),
(12, 'últim quart segle XVI'),
(13, '1576'),
(14, '1600'),
(12, 'segle XVII'),
(13, '1601'),
(14, '1700'),
(12, 'primera meitat segle XVII'),
(13, '1601'),
(14, '1650'),
(12, 'primer quart segle XVII'),
(13, '1601'),
(14, '1625'),
(12, 'segon quart segle XVII'),
(13, '1626'),
(14, '1650'),
(12, 'segona meitat segle XVII'),
(13, '1651'),
(14, '1700'),
(12, 'tercer quart segle XVII'),
(13, '1651'),
(14, '1675'),
(12, 'últim quart segle XVII'),
(13, '1676'),
(14, '1700'),
(12, 'segle XVIII'),
(13, '1701'),
(14, '1800'),
(12, 'primera meitat segle XVIII'),
(13, '1701'),
(14, '1750'),
(12, 'primer quart segle XVIII'),
(13, '1701'),
(14, '1725'),
(12, 'segon quart segle XVIII'),
(13, '1726'),
(14, '1750'),
(12, 'segona meitat segle XVIII'),
(13, '1751'),
(14, '1800'),
(12, 'tercer quart segle XVIII'),
(13, '1751'),
(14, '1775'),
(12, 'últim quart segle XVIII'),
(13, '1776'),
(14, '1800'),
(12, 'segle XIX'),
(13, '1801'),
(14, '1900'),
(12, 'primera meitat segle XIX'),
(13, '1801'),
(14, '1850'),
(12, 'primer quart segle XIX'),
(13, '1801'),
(14, '1825'),
(12, 'segon quart segle XIX'),
(13, '1826'),
(14, '1850'),
(12, 'segona meitat segle XIX'),
(13, '1851'),
(14, '1900'),
(12, 'tercer quart segle XIX'),
(13, '1851'),
(14, '1875'),
(12, 'últim quart segle XIX'),
(13, '1876'),
(14, '1900'),
(12, 'segle XX'),
(13, '1901'),
(14, '2000'),
(12, 'primera meitat segle XX'),
(13, '1901'),
(14, '1950'),
(12, 'primer quart segle XX'),
(13, '1901'),
(14, '1925'),
(12, 'segon quart segle XX'),
(13, '1926'),
(14, '1950'),
(12, 'segona meitat segle XX'),
(13, '1951'),
(14, '2000'),
(12, 'tercer quart segle XX'),
(13, '1951'),
(14, '1975'),
(12, 'últim quart segle XX'),
(13, '1976'),
(14, '2000'),
(12, 'segle XXI'),
(13, '2001'),
(14, '2100'),
(12, 'primera meitat segle XXI'),
(13, '2001'),
(14, '2050'),
(12, 'primer quart segle XXI'),
(13, '2001'),
(14, '2025'),
(12, 'segon quart segle XXI'),
(13, '2026'),
(14, '2050'),
(12, 'segona meitat segle XXI'),
(13, '2051'),
(14, '2100'),
(12, 'tercer quart segle XXI'),
(13, '2051'),
(14, '2075'),
(12, 'últim quart segle XXI'),
(13, '2076'),
(14, '2100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Autors`
--
ALTER TABLE `Autors`
  ADD PRIMARY KEY (`AutorID`);

--
-- Indexes for table `Exposiciones`
--
ALTER TABLE `Exposiciones`
  ADD PRIMARY KEY (`ExposicionID`);

--
-- Indexes for table `Museos`
--
ALTER TABLE `Museos`
  ADD PRIMARY KEY (`MuseoID`);

--
-- Indexes for table `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  ADD PRIMARY KEY (`ObjetoExposicionID`),
  ADD KEY `ObjetoExposicion_ibfk_1` (`ObjetoID`),
  ADD KEY `ObjetoExposicion_ibfk_2` (`ExposicionID`);

--
-- Indexes for table `Objetos`
--
ALTER TABLE `Objetos`
  ADD PRIMARY KEY (`ObjetoID`),
  ADD KEY `Objetos_ibfk_1` (`ClasificacionGenericaID`),
  ADD KEY `Objetos_ibfk_2` (`MaterialID`),
  ADD KEY `Objetos_ibfk_3` (`TecnicaID`),
  ADD KEY `Objetos_ibfk_4` (`AutorID`),
  ADD KEY `Objetos_ibfk_5` (`UbicacionActualID`),
  ADD KEY `Objetos_ibfk_6` (`EstadoConservacionID`),
  ADD KEY `Objetos_ibfk_7` (`MuseoID`),
  ADD KEY `Objetos_ibfk_8` (`DatacionID`),
  ADD KEY `Objetos_ibfk_9` (`BajaID`),
  ADD KEY `Objetos_ibfk_10` (`CausaBajaID`),
  ADD KEY `Objetos_ibfk_11` (`FormaIngresoID`);

--
-- Indexes for table `ObjetosPrueba`
--
ALTER TABLE `ObjetosPrueba`
  ADD PRIMARY KEY (`ObjetoID`);

--
-- Indexes for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD PRIMARY KEY (`RestauracionID`),
  ADD KEY `Restauraciones_ibfk_1` (`ObjetoID`);

--
-- Indexes for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  ADD PRIMARY KEY (`UbicacionID`),
  ADD KEY `UbicacionPadre` (`UbicacionPadre`);

--
-- Indexes for table `UbicacionObjeto`
--
ALTER TABLE `UbicacionObjeto`
  ADD PRIMARY KEY (`UbicacionObjetoID`),
  ADD KEY `UbicacionID` (`UbicacionID`),
  ADD KEY `ObjetoID` (`ObjetoID`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- Indexes for table `Vocabularios`
--
ALTER TABLE `Vocabularios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `padre_id` (`padre_id`);
--
-- Indexes for table `Vocabulario_valores`
--
ALTER TABLE `Vocabulario_valores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vocabulario_id` (`vocabulario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Autors`
--
ALTER TABLE `Autors`
  MODIFY `AutorID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Exposiciones`
--
ALTER TABLE `Exposiciones`
  MODIFY `ExposicionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Museos`
--
ALTER TABLE `Museos`
  MODIFY `MuseoID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  MODIFY `ObjetoExposicionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Objetos`
--
ALTER TABLE `Objetos`
  MODIFY `ObjetoID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ObjetosPrueba`
--
ALTER TABLE `ObjetosPrueba`
  MODIFY `ObjetoID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  MODIFY `RestauracionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  MODIFY `UbicacionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `UbicacionObjeto`
--
ALTER TABLE `UbicacionObjeto`
  MODIFY `UbicacionObjetoID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `UsuarioID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Vocabularios`
--
ALTER TABLE `Vocabularios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Vocabulario_valores`
--
ALTER TABLE `Vocabulario_valores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  ADD CONSTRAINT `ObjetoExposicion_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`),
  ADD CONSTRAINT `ObjetoExposicion_ibfk_2` FOREIGN KEY (`ExposicionID`) REFERENCES `Exposiciones` (`ExposicionID`);

--
-- Constraints for table `Objetos`
--
ALTER TABLE `Objetos`
  ADD CONSTRAINT `Objetos_ibfk_1` FOREIGN KEY (`ClasificacionGenericaID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_10` FOREIGN KEY (`CausaBajaID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_11` FOREIGN KEY (`FormaIngresoID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_2` FOREIGN KEY (`MaterialID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_3` FOREIGN KEY (`TecnicaID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_4` FOREIGN KEY (`AutorID`) REFERENCES `Autors` (`AutorID`),
  ADD CONSTRAINT `Objetos_ibfk_5` FOREIGN KEY (`UbicacionActualID`) REFERENCES `Ubicaciones` (`UbicacionID`),
  ADD CONSTRAINT `Objetos_ibfk_6` FOREIGN KEY (`EstadoConservacionID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_7` FOREIGN KEY (`MuseoID`) REFERENCES `Museos` (`MuseoID`),
  ADD CONSTRAINT `Objetos_ibfk_8` FOREIGN KEY (`DatacionID`) REFERENCES `Vocabulario_valores` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_9` FOREIGN KEY (`BajaID`) REFERENCES `Vocabulario_valores` (`id`);

--
-- Constraints for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD CONSTRAINT `Restauraciones_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`);

--
-- Constraints for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  ADD CONSTRAINT `Ubicaciones_ibfk_1` FOREIGN KEY (`UbicacionPadre`) REFERENCES `Ubicaciones` (`UbicacionID`) ON DELETE CASCADE;

--
-- Constraints for table `UbicacionObjeto`
--
ALTER TABLE `UbicacionObjeto`
  ADD CONSTRAINT `UbicacionObjeto_ibfk_1` FOREIGN KEY (`UbicacionID`) REFERENCES `Ubicaciones` (`UbicacionID`),
  ADD CONSTRAINT `UbicacionObjeto_ibfk_2` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`);

ALTER TABLE `Vocabularios`
  ADD CONSTRAINT `Vocabularios_ibfk_1` FOREIGN KEY (`padre_id`) REFERENCES `Vocabularios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Vocabulario_valores`
--
ALTER TABLE `Vocabulario_valores`
  ADD CONSTRAINT `Vocabulario_valores_ibfk_1` FOREIGN KEY (`vocabulario_id`) REFERENCES `Vocabularios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;