-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 29, 2024 at 07:42 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `Autors`
--

CREATE TABLE `Autors` (
  `id` int NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Autors`
--

INSERT INTO `Autors` (`id`, `Nombre`) VALUES
(1, 'Jose Francisco Franco');

-- --------------------------------------------------------

--
-- Table structure for table `Baja`
--

CREATE TABLE `Baja` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Baja`
--

INSERT INTO `Baja` (`id`, `valor`) VALUES
(1, 'No'),
(2, 'Sí');

-- --------------------------------------------------------

--
-- Table structure for table `CausaBaja`
--

CREATE TABLE `CausaBaja` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CausaBaja`
--

INSERT INTO `CausaBaja` (`id`, `valor`) VALUES
(1, 'Confiscació'),
(2, 'Destrucció'),
(3, 'Estat de conservació molt deficient'),
(4, 'Manteniment i restauració onerós'),
(5, 'Pèrdua'),
(6, 'Robatori'),
(7, 'Successió interadministrativa'),
(8, 'Valor patrimonial insuficient');

-- --------------------------------------------------------

--
-- Table structure for table `Classificacion`
--

CREATE TABLE `Classificacion` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Classificacion`
--

INSERT INTO `Classificacion` (`id`, `valor`) VALUES
(1, 'Mayor edat');

-- --------------------------------------------------------

--
-- Table structure for table `CodigoGetty`
--

CREATE TABLE `CodigoGetty` (
  `id` int NOT NULL,
  `tipo` enum('autor','material','tecnica') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Datacion`
--

CREATE TABLE `Datacion` (
  `id` int NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `any_inicial` int NOT NULL,
  `any_final` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Datacion`
--

INSERT INTO `Datacion` (`id`, `descripcion`, `any_inicial`, `any_final`) VALUES
(1, 'segle IV ante', -400, -301),
(2, 'primera meitat segle IV ante', -400, -351),
(3, 'primer quart segle IV ante', -400, -376),
(4, 'segon quart segle IV ante', -375, -351),
(5, 'segona meitat segle IV ante', -350, -301),
(6, 'tercer quart segle IV ante', -350, -326),
(7, 'últim quart segle IV ante', -325, -301),
(8, 'segle III ante', -300, -201),
(9, 'primera meitat segle III ante', -300, -251),
(10, 'primer quart segle III ante', -300, -276),
(11, 'segon quart segle III ante', -275, -251),
(12, 'segona meitat segle III ante', -250, -201),
(13, 'tercer quart segle III ante', -250, -226),
(14, 'últim quart segle III ante', -225, -201),
(15, 'segle II ante', -200, -101),
(16, 'primera meitat segle II ante', -200, -151),
(17, 'primer quart segle II ante', -200, -176),
(18, 'segon quart segle II ante', -175, -151),
(19, 'segona meitat segle II ante', -150, -101),
(20, 'tercer quart segle II ante', -150, -126),
(21, 'últim quart segle II ante', -125, -101),
(22, 'segle I ante', -100, -1),
(23, 'primera meitat segle I ante', -100, -51),
(24, 'primer quart segle I ante', -100, -76),
(25, 'segon quart segle I ante', -75, -51),
(26, 'segona meitat segle I ante', -50, -1),
(27, 'tercer quart segle I ante', -50, -26),
(28, 'últim quart segle I ante', -25, -1),
(29, 'segle I', 1, 100),
(30, 'primera meitat segle I', 1, 50),
(31, 'primer quart segle I', 1, 25),
(32, 'segon quart segle I', 26, 50),
(33, 'segona meitat segle I', 51, 100),
(34, 'tercer quart segle I', 51, 75),
(35, 'últim quart segle I', 76, 100),
(36, 'segle II', 101, 200),
(37, 'primera meitat segle II', 101, 150),
(38, 'primer quart segle II', 101, 125),
(39, 'segon quart segle II', 126, 150),
(40, 'segona meitat segle II', 151, 200),
(41, 'tercer quart segle II', 151, 175),
(42, 'últim quart segle II', 176, 200),
(43, 'segle III', 201, 300),
(44, 'primera meitat segle III', 201, 250),
(45, 'primer quart segle III', 201, 225),
(46, 'segon quart segle III', 226, 250),
(47, 'segona meitat segle III', 251, 300),
(48, 'tercer quart segle III', 251, 275),
(49, 'últim quart segle III', 276, 300),
(50, 'segle IV', 301, 400),
(51, 'primera meitat segle IV', 301, 350),
(52, 'primer quart segle IV', 301, 325),
(53, 'segon quart segle IV', 326, 350),
(54, 'segona meitat segle IV', 351, 400),
(55, 'tercer quart segle IV', 351, 375),
(56, 'últim quart segle IV', 376, 400),
(57, 'segle V', 401, 500),
(58, 'primera meitat segle V', 401, 450),
(59, 'primer quart segle V', 401, 425),
(60, 'segon quart segle V', 426, 450),
(61, 'segona meitat segle V', 451, 500),
(62, 'tercer quart segle V', 451, 475),
(63, 'últim quart segle V', 476, 500),
(64, 'segle VI', 501, 600),
(65, 'primera meitat segle VI', 501, 550),
(66, 'primer quart segle VI', 501, 525),
(67, 'segon quart segle VI', 526, 550),
(68, 'segona meitat segle VI', 551, 600),
(69, 'tercer quart segle VI', 551, 575),
(70, 'últim quart segle VI', 576, 600),
(71, 'segle VII', 601, 700),
(72, 'primera meitat segle VII', 601, 650),
(73, 'primer quart segle VII', 601, 625),
(74, 'segon quart segle VII', 626, 650),
(75, 'segona meitat segle VII', 651, 700),
(76, 'tercer quart segle VII', 651, 675),
(77, 'últim quart segle VII', 676, 700),
(78, 'segle VIII', 701, 800),
(79, 'primera meitat segle VIII', 701, 750),
(80, 'primer quart segle VIII', 701, 725),
(81, 'segon quart segle VIII', 726, 750),
(82, 'segona meitat segle VIII', 751, 800),
(83, 'tercer quart segle VIII', 751, 775),
(84, 'últim quart segle VIII', 776, 800),
(85, 'segle IX', 801, 900),
(86, 'primera meitat segle IX', 801, 850),
(87, 'primer quart segle IX', 801, 825),
(88, 'segon quart segle IX', 826, 850),
(89, 'segona meitat segle IX', 851, 900),
(90, 'tercer quart segle IX', 851, 875),
(91, 'últim quart segle IX', 876, 900),
(92, 'segle X', 901, 1000),
(93, 'primera meitat segle X', 901, 950),
(94, 'primer quart segle X', 901, 925),
(95, 'segon quart segle X', 926, 950),
(96, 'segona meitat segle X', 951, 1000),
(97, 'tercer quart segle X', 951, 975),
(98, 'últim quart segle X', 976, 1000),
(99, 'segle XI', 1001, 1100),
(100, 'primera meitat segle XI', 1001, 1050),
(101, 'primer quart segle XI', 1001, 1025),
(102, 'segon quart segle XI', 1026, 1050),
(103, 'segona meitat segle XI', 1051, 1100),
(104, 'tercer quart segle XI', 1051, 1075),
(105, 'últim quart segle XI', 1076, 1100),
(106, 'segle XII', 1101, 1200),
(107, 'primera meitat segle XII', 1101, 1150),
(108, 'primer quart segle XII', 1101, 1125),
(109, 'segon quart segle XII', 1126, 1150),
(110, 'segona meitat segle XII', 1151, 1200),
(111, 'tercer quart segle XII', 1151, 1175),
(112, 'últim quart segle XII', 1176, 1200),
(113, 'segle XIII', 1201, 1300),
(114, 'primera meitat segle XIII', 1201, 1250),
(115, 'primer quart segle XIII', 1201, 1225),
(116, 'segon quart segle XIII', 1226, 1250),
(117, 'segona meitat segle XIII', 1251, 1300),
(118, 'tercer quart segle XIII', 1251, 1275),
(119, 'últim quart segle XIII', 1276, 1300),
(120, 'segle XIV', 1301, 1400),
(121, 'primera meitat segle XIV', 1301, 1350),
(122, 'primer quart segle XIV', 1301, 1325),
(123, 'segon quart segle XIV', 1326, 1350),
(124, 'segona meitat segle XIV', 1351, 1400),
(125, 'tercer quart segle XIV', 1351, 1375),
(126, 'últim quart segle XIV', 1376, 1400),
(127, 'segle XV', 1401, 1500),
(128, 'primera meitat segle XV', 1401, 1450),
(129, 'primer quart segle XV', 1401, 1425),
(130, 'segon quart segle XV', 1426, 1450),
(131, 'segona meitat segle XV', 1451, 1500),
(132, 'tercer quart segle XV', 1451, 1475),
(133, 'últim quart segle XV', 1476, 1500),
(134, 'segle XVI', 1501, 1600),
(135, 'primera meitat segle XVI', 1501, 1550),
(136, 'primer quart segle XVI', 1501, 1525),
(137, 'segon quart segle XVI', 1526, 1550),
(138, 'segona meitat segle XVI', 1551, 1600),
(139, 'tercer quart segle XVI', 1551, 1575),
(140, 'últim quart segle XVI', 1576, 1600),
(141, 'segle XVII', 1601, 1700),
(142, 'primera meitat segle XVII', 1601, 1650),
(143, 'primer quart segle XVII', 1601, 1625),
(144, 'segon quart segle XVII', 1626, 1650),
(145, 'segona meitat segle XVII', 1651, 1700),
(146, 'tercer quart segle XVII', 1651, 1675),
(147, 'últim quart segle XVII', 1676, 1700),
(148, 'segle XVIII', 1701, 1800),
(149, 'primera meitat segle XVIII', 1701, 1750),
(150, 'primer quart segle XVIII', 1701, 1725),
(151, 'segon quart segle XVIII', 1726, 1750),
(152, 'segona meitat segle XVIII', 1751, 1800),
(153, 'tercer quart segle XVIII', 1751, 1775),
(154, 'últim quart segle XVIII', 1776, 1800),
(155, 'segle XIX', 1801, 1900),
(156, 'primera meitat segle XIX', 1801, 1850),
(157, 'primer quart segle XIX', 1801, 1825),
(158, 'segon quart segle XIX', 1826, 1850),
(159, 'segona meitat segle XIX', 1851, 1900),
(160, 'tercer quart segle XIX', 1851, 1875),
(161, 'últim quart segle XIX', 1876, 1900),
(162, 'segle XX', 1901, 2000),
(163, 'primera meitat segle XX', 1901, 1950),
(164, 'primer quart segle XX', 1901, 1925),
(165, 'segon quart segle XX', 1926, 1950),
(166, 'segona meitat segle XX', 1951, 2000),
(167, 'tercer quart segle XX', 1951, 1975),
(168, 'últim quart segle XX', 1976, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `EstadoConservacion`
--

CREATE TABLE `EstadoConservacion` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `EstadoConservacion`
--

INSERT INTO `EstadoConservacion` (`id`, `valor`) VALUES
(1, 'Bo'),
(2, 'Dolent'),
(3, 'Excel·lent'),
(4, 'Indeterminat'),
(5, 'desconeguda'),
(6, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `Exposiciones`
--

CREATE TABLE `Exposiciones` (
  `ExposicionID` int NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `TipoExposicionID` int NOT NULL,
  `LugarExposicion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Exposiciones`
--

INSERT INTO `Exposiciones` (`ExposicionID`, `Nombre`, `FechaInicio`, `FechaFin`, `TipoExposicionID`, `LugarExposicion`, `Activo`) VALUES
(2, 'Exposición de arte contemporáneo', '2024-10-01 00:00:00', '2024-10-31 00:00:00', 1, 'Museo de Arte Contemporáneo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `FormaIngreso`
--

CREATE TABLE `FormaIngreso` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `FormaIngreso`
--

INSERT INTO `FormaIngreso` (`id`, `valor`) VALUES
(1, 'cessió'),
(2, 'comodat'),
(3, 'compra'),
(4, 'dació'),
(5, 'desconeguda'),
(6, 'dipòsit'),
(7, 'donació'),
(8, 'entrega obligatòria'),
(9, 'excavació'),
(10, 'expropiació'),
(11, 'herència'),
(12, 'intercanvi'),
(13, 'llegat'),
(14, 'ocupació'),
(15, 'ofrena'),
(16, 'permuta'),
(17, 'premi'),
(18, 'propietat directa'),
(19, 'recol.lecció'),
(20, 'recuperació'),
(21, 'successió interadministrativa');

-- --------------------------------------------------------

--
-- Table structure for table `Material`
--

CREATE TABLE `Material` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Material`
--

INSERT INTO `Material` (`id`, `valor`) VALUES
(1, 'Madera');

-- --------------------------------------------------------

--
-- Table structure for table `Museos`
--

CREATE TABLE `Museos` (
  `MuseoID` int NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Fotografia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Museos`
--

INSERT INTO `Museos` (`MuseoID`, `Nombre`, `Fotografia`) VALUES
(1, 'Apel.les Fenosa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ObjetoExposicion`
--

CREATE TABLE `ObjetoExposicion` (
  `ObjetoExposicionID` int NOT NULL,
  `ObjetoID` int DEFAULT NULL,
  `ExposicionID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ObjetoExposicion`
--

INSERT INTO `ObjetoExposicion` (`ObjetoExposicionID`, `ObjetoID`, `ExposicionID`) VALUES
(1, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Objetos`
--

CREATE TABLE `Objetos` (
  `ObjetoID` int NOT NULL,
  `RegistroNº` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UsuarioID` int NOT NULL,
  `Imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ClasificacionGenericaID` int DEFAULT NULL,
  `ColeccionProcedencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Altura` decimal(10,2) DEFAULT NULL,
  `Anchura` decimal(10,2) DEFAULT NULL,
  `Profundidad` decimal(10,2) DEFAULT NULL,
  `MaterialID` int DEFAULT NULL,
  `TecnicaID` int DEFAULT NULL,
  `AutorID` int DEFAULT NULL,
  `Titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DatacionID` int DEFAULT NULL,
  `UbicacionActualID` int DEFAULT NULL,
  `FechaRegistro` datetime NOT NULL,
  `NumeroEjemplares` int DEFAULT NULL,
  `FormaIngresoID` int DEFAULT NULL,
  `FechaIngreso` datetime DEFAULT NULL,
  `FuenteIngreso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BajaID` int DEFAULT NULL,
  `CausaBajaID` int DEFAULT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `PersonaAutorizadaBaja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `EstadoConservacionID` int DEFAULT NULL,
  `LugarEjecucion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LugarProcedencia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NumeroTiraje` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `OtrosNrosIdentificacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ValoracionEconomica` decimal(10,2) DEFAULT NULL,
  `Bibliografia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `Descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `HistoriaObjeto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `MuseoID` int DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Objetos`
--

INSERT INTO `Objetos` (`ObjetoID`, `RegistroNº`, `UsuarioID`, `Imagen`, `Nombre`, `ClasificacionGenericaID`, `ColeccionProcedencia`, `Altura`, `Anchura`, `Profundidad`, `MaterialID`, `TecnicaID`, `AutorID`, `Titulo`, `DatacionID`, `UbicacionActualID`, `FechaRegistro`, `NumeroEjemplares`, `FormaIngresoID`, `FechaIngreso`, `FuenteIngreso`, `BajaID`, `CausaBajaID`, `FechaBaja`, `PersonaAutorizadaBaja`, `EstadoConservacionID`, `LugarEjecucion`, `LugarProcedencia`, `NumeroTiraje`, `OtrosNrosIdentificacion`, `ValoracionEconomica`, `Bibliografia`, `Descripcion`, `HistoriaObjeto`, `MuseoID`, `Activo`) VALUES
(1, '123456', 1, '123456', 'Violin', 1, 'Pellentesque ipsum.', 150.00, 160.00, 50.00, 1, 1, 1, 'Pellentesque vestibulum velit ipsum.', 4, 1, '2024-10-25 08:58:39', 1, 6, '2024-10-25 08:58:39', 'Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ', 1, NULL, '2024-10-25 08:58:39', 'Alguien quizas', 4, 'Vivamus porta arcu', 'Aenean erat felis, pretium quis tincidunt ut, aliquam vel eros. ', '1', NULL, 10000000.00, 'Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n', 'Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n', 'Aenean a sem id sem faucibus viverra vel at magna. In placerat sapien sed ex varius, in lacinia velit eleifend. Fusce dui ligula, pretium in erat ac, cursus mattis purus. Morbi condimentum vehicula risus. Donec scelerisque nec libero eget elementum. Phasellus et elit felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate convallis congue. Vestibulum mattis, elit vitae interdum condimentum, ligula neque egestas massa, quis viverra odio nibh ac lorem. Aenean placerat nulla eros, ut tempus purus dapibus ac. Maecenas sagittis sagittis nunc sed volutpat. Sed vel eros at sapien pulvinar mattis ut ut magna. Integer scelerisque sed felis convallis accumsan. Ut et eros finibus, euismod elit et, placerat risus.\r\n\r\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Restauraciones`
--

CREATE TABLE `Restauraciones` (
  `RestauracionID` int NOT NULL,
  `ObjetoID` int DEFAULT NULL,
  `CodigoRestauracion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `ComentarioRestauracion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `NombreRestaurador` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Tecnica`
--

CREATE TABLE `Tecnica` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tecnica`
--

INSERT INTO `Tecnica` (`id`, `valor`) VALUES
(1, 'Oleo');

-- --------------------------------------------------------

--
-- Table structure for table `TiposExposicion`
--

CREATE TABLE `TiposExposicion` (
  `id` int NOT NULL,
  `valor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `TiposExposicion`
--

INSERT INTO `TiposExposicion` (`id`, `valor`) VALUES
(1, 'Aliena'),
(2, 'Pròpia');

-- --------------------------------------------------------

--
-- Table structure for table `Ubicaciones`
--

CREATE TABLE `Ubicaciones` (
  `id` int NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UbicacionPadre` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Ubicaciones`
--

INSERT INTO `Ubicaciones` (`id`, `Nombre`, `UbicacionPadre`) VALUES
(1, 'Sotano', NULL);

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
  `ComentarioUbicacion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `UsuarioID` int NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contraseña` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Rol` enum('admin','tecnic','convidat') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`UsuarioID`, `Nombre`, `Contraseña`, `Rol`) VALUES
(1, 'admin', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Autors`
--
ALTER TABLE `Autors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Baja`
--
ALTER TABLE `Baja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CausaBaja`
--
ALTER TABLE `CausaBaja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Classificacion`
--
ALTER TABLE `Classificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CodigoGetty`
--
ALTER TABLE `CodigoGetty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Datacion`
--
ALTER TABLE `Datacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `EstadoConservacion`
--
ALTER TABLE `EstadoConservacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Exposiciones`
--
ALTER TABLE `Exposiciones`
  ADD PRIMARY KEY (`ExposicionID`),
  ADD KEY `TipoExposicionID` (`TipoExposicionID`);

--
-- Indexes for table `FormaIngreso`
--
ALTER TABLE `FormaIngreso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `Objetos_ibfk_11` (`FormaIngresoID`),
  ADD KEY `Objetos_ibfk_12` (`UsuarioID`);

--
-- Indexes for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD PRIMARY KEY (`RestauracionID`),
  ADD KEY `Restauraciones_ibfk_1` (`ObjetoID`);

--
-- Indexes for table `Tecnica`
--
ALTER TABLE `Tecnica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TiposExposicion`
--
ALTER TABLE `TiposExposicion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Autors`
--
ALTER TABLE `Autors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Baja`
--
ALTER TABLE `Baja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `CausaBaja`
--
ALTER TABLE `CausaBaja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Classificacion`
--
ALTER TABLE `Classificacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `CodigoGetty`
--
ALTER TABLE `CodigoGetty`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Datacion`
--
ALTER TABLE `Datacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `EstadoConservacion`
--
ALTER TABLE `EstadoConservacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Exposiciones`
--
ALTER TABLE `Exposiciones`
  MODIFY `ExposicionID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `FormaIngreso`
--
ALTER TABLE `FormaIngreso`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Material`
--
ALTER TABLE `Material`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Museos`
--
ALTER TABLE `Museos`
  MODIFY `MuseoID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  MODIFY `ObjetoExposicionID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Objetos`
--
ALTER TABLE `Objetos`
  MODIFY `ObjetoID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  MODIFY `RestauracionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tecnica`
--
ALTER TABLE `Tecnica`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TiposExposicion`
--
ALTER TABLE `TiposExposicion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UbicacionObjeto`
--
ALTER TABLE `UbicacionObjeto`
  MODIFY `UbicacionObjetoID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `UsuarioID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Exposiciones`
--
ALTER TABLE `Exposiciones`
  ADD CONSTRAINT `Exposiciones_ibfk_1` FOREIGN KEY (`TipoExposicionID`) REFERENCES `TiposExposicion` (`id`);

--
-- Constraints for table `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  ADD CONSTRAINT `ObjetoExposicion_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`) ON DELETE CASCADE,
  ADD CONSTRAINT `ObjetoExposicion_ibfk_2` FOREIGN KEY (`ExposicionID`) REFERENCES `Exposiciones` (`ExposicionID`) ON DELETE CASCADE;

--
-- Constraints for table `Objetos`
--
ALTER TABLE `Objetos`
  ADD CONSTRAINT `Objetos_ibfk_1` FOREIGN KEY (`ClasificacionGenericaID`) REFERENCES `Classificacion` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_10` FOREIGN KEY (`CausaBajaID`) REFERENCES `CausaBaja` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_11` FOREIGN KEY (`FormaIngresoID`) REFERENCES `FormaIngreso` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_12` FOREIGN KEY (`UsuarioID`) REFERENCES `Usuarios` (`UsuarioID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Objetos_ibfk_2` FOREIGN KEY (`MaterialID`) REFERENCES `Material` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_3` FOREIGN KEY (`TecnicaID`) REFERENCES `Tecnica` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_4` FOREIGN KEY (`AutorID`) REFERENCES `Autors` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_5` FOREIGN KEY (`UbicacionActualID`) REFERENCES `Ubicaciones` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_6` FOREIGN KEY (`EstadoConservacionID`) REFERENCES `EstadoConservacion` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_7` FOREIGN KEY (`MuseoID`) REFERENCES `Museos` (`MuseoID`),
  ADD CONSTRAINT `Objetos_ibfk_8` FOREIGN KEY (`DatacionID`) REFERENCES `Datacion` (`id`),
  ADD CONSTRAINT `Objetos_ibfk_9` FOREIGN KEY (`BajaID`) REFERENCES `Baja` (`id`);

--
-- Constraints for table `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD CONSTRAINT `Restauraciones_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`);

--
-- Constraints for table `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  ADD CONSTRAINT `Ubicaciones_ibfk_1` FOREIGN KEY (`UbicacionPadre`) REFERENCES `Ubicaciones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `UbicacionObjeto`
--
ALTER TABLE `UbicacionObjeto`
  ADD CONSTRAINT `UbicacionObjeto_ibfk_1` FOREIGN KEY (`UbicacionID`) REFERENCES `Ubicaciones` (`id`),
  ADD CONSTRAINT `UbicacionObjeto_ibfk_2` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;