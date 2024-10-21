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
-- Table structure for table `Vocabulario_valores`
--

INSERT INTO `FormaIngreso` (`valor`) VALUES
('cessió'),
('comodat'),
('compra'),
('dació'),
('desconeguda'),
('dipòsit'),
('donació'),
('entrega obligatòria'),
('excavació'),
('expropiació'),
('herència'),
('intercanvi'),
('llegat'),
('ocupació'),
('ofrena'),
('permuta'),
('premi'),
('propietat directa'),
('recol.lecció'),
('recuperació'),
('successió interadministrativa');

-- Inserts para Baixa (vocabulario_id = 8)
INSERT INTO `Baja` (`valor`) VALUES
('No'),
('Sí');

-- Inserts para Causa de baixa (vocabulario_id = 9)
INSERT INTO `CausaBaja` (`valor`) VALUES
('Confiscació'),
('Destrucció'),
('Estat de conservació molt deficient'),
('Manteniment i restauració onerós'),
('Pèrdua'),
('Robatori'),
('Successió interadministrativa'),
('Valor patrimonial insuficient');

-- Inserts para Estat de conservació (vocabulario_id = 10)
INSERT INTO `EstadoConservacion` (`valor`) VALUES
('Bo'),
('Dolent'),
('Excel·lent'),
('Indeterminat'),
('desconeguda'),
('Regular');

-- Inserts para Tipus exposició (vocabulario_id = 11)
INSERT INTO `TiposExposicion` (`valor`) VALUES
('Aliena'),
('Pròpia');

-- Inserts para Datació (vocabulario_id = 12), Any d'inici (vocabulario_id = 13) y Any final (vocabulario_id = 14)
-- Estas son solo algunas de las entradas representativas de los muchos valores
INSERT INTO `Datacion` (`descripcion`, `any_inicial`, `any_final`) VALUES
('segle IV ante', '-400', '-301'),
('primera meitat segle IV ante', '-400', '-351'),
('primer quart segle IV ante', '-400', '-376'),
('segon quart segle IV ante', '-375', '-351'),
('segona meitat segle IV ante', '-350', '-301'),
('tercer quart segle IV ante', '-350', '-326'),
('últim quart segle IV ante', '-325', '-301'),
('segle III ante', '-300', '-201'),
('primera meitat segle III ante', '-300', '-251'),
('primer quart segle III ante', '-300', '-276'),
('segon quart segle III ante', '-275', '-251'),
('segona meitat segle III ante', '-250', '-201'),
('tercer quart segle III ante', '-250', '-226'),
('últim quart segle III ante', '-225', '-201'),
('segle II ante', '-200', '-101'),
('primera meitat segle II ante', '-200', '-151'),
('primer quart segle II ante', '-200', '-176'),
('segon quart segle II ante', '-175', '-151'),
('segona meitat segle II ante', '-150', '-101'),
('tercer quart segle II ante', '-150', '-126'),
('últim quart segle II ante', '-125', '-101'),
('segle I ante', '-100', '-1'),
('primera meitat segle I ante', '-100', '-51'),
('primer quart segle I ante', '-100', '-76'),
('segon quart segle I ante', '-75', '-51'),
('segona meitat segle I ante', '-50', '-1'),
('tercer quart segle I ante', '-50', '-26'),
('últim quart segle I ante', '-25', '-1'),
('segle I', '1', '100'),
('primera meitat segle I', '1', '50'),
('primer quart segle I', '1', '25'),
('segon quart segle I', '26', '50'),
('segona meitat segle I', '51', '100'),
('tercer quart segle I', '51', '75'),
('últim quart segle I', '76', '100'),
('segle II', '101', '200'),
('primera meitat segle II', '101', '150'),
('primer quart segle II', '101', '125'),
('segon quart segle II', '126', '150'),
('segona meitat segle II', '151', '200'),
('tercer quart segle II', '151', '175'),
('últim quart segle II', '176', '200'),
('segle III', '201', '300'),
('primera meitat segle III', '201', '250'),
('primer quart segle III', '201', '225'),
('segon quart segle III', '226', '250'),
('segona meitat segle III', '251', '300'),
('tercer quart segle III', '251', '275'),
('últim quart segle III', '276', '300'),
('segle IV', '301', '400'),
('primera meitat segle IV', '301', '350'),
('primer quart segle IV', '301', '325'),
('segon quart segle IV', '326', '350'),
('segona meitat segle IV', '351', '400'),
('tercer quart segle IV', '351', '375'),
('últim quart segle IV', '376', '400'),
('segle V', '401', '500'),
('primera meitat segle V', '401', '450'),
('primer quart segle V', '401', '425'),
('segon quart segle V', '426', '450'),
('segona meitat segle V', '451', '500'),
('tercer quart segle V', '451', '475'),
('últim quart segle V', '476', '500'),
('segle VI', '501', '600'),
('primera meitat segle VI', '501', '550'),
('primer quart segle VI', '501', '525'),
('segon quart segle VI', '526', '550'),
('segona meitat segle VI', '551', '600'),
('tercer quart segle VI', '551', '575'),
('últim quart segle VI', '576', '600'),
('segle VII', '601', '700'),
('primera meitat segle VII', '601', '650'),
('primer quart segle VII', '601', '625'),
('segon quart segle VII', '626', '650'),
('segona meitat segle VII', '651', '700'),
('tercer quart segle VII', '651', '675'),
('últim quart segle VII', '676', '700'),
('segle VIII', '701', '800'),
('primera meitat segle VIII', '701', '750'),
('primer quart segle VIII', '701', '725'),
('segon quart segle VIII', '726', '750'),
('segona meitat segle VIII', '751', '800'),
('tercer quart segle VIII', '751', '775'),
('últim quart segle VIII', '776', '800'),
('segle IX', '801', '900'),
('primera meitat segle IX', '801', '850'),
('primer quart segle IX', '801', '825'),
('segon quart segle IX', '826', '850'),
('segona meitat segle IX', '851', '900'),
('tercer quart segle IX', '851', '875'),
('últim quart segle IX', '876', '900'),
('segle X', '901', '1000'),
('primera meitat segle X', '901', '950'),
('primer quart segle X', '901', '925'),
('segon quart segle X', '926', '950'),
('segona meitat segle X', '951', '1000'),
('tercer quart segle X', '951', '975'),
('últim quart segle X', '976', '1000'),
('segle XI', '1001', '1100'),
('primera meitat segle XI', '1001', '1050'),
('primer quart segle XI', '1001', '1025'),
('segon quart segle XI', '1026', '1050'),
('segona meitat segle XI', '1051', '1100'),
('tercer quart segle XI', '1051', '1075'),
('últim quart segle XI', '1076', '1100'),
('segle XII', '1101', '1200'),
('primera meitat segle XII', '1101', '1150'),
('primer quart segle XII', '1101', '1125'),
('segon quart segle XII', '1126', '1150'),
('segona meitat segle XII', '1151', '1200'),
('tercer quart segle XII', '1151', '1175'),
('últim quart segle XII', '1176', '1200'),
('segle XIII', '1201', '1300'),
('primera meitat segle XIII', '1201', '1250'),
('primer quart segle XIII', '1201', '1225'),
('segon quart segle XIII', '1226', '1250'),
('segona meitat segle XIII', '1251', '1300'),
('tercer quart segle XIII', '1251', '1275'),
('últim quart segle XIII', '1276', '1300'),
('segle XIV', '1301', '1400'),
('primera meitat segle XIV', '1301', '1350'),
('primer quart segle XIV', '1301', '1325'),
('segon quart segle XIV', '1326', '1350'),
('segona meitat segle XIV', '1351', '1400'),
('tercer quart segle XIV', '1351', '1375'),
('últim quart segle XIV', '1376', '1400'),
('segle XV', '1401', '1500'),
('primera meitat segle XV', '1401', '1450'),
('primer quart segle XV', '1401', '1425'),
('segon quart segle XV', '1426', '1450'),
('segona meitat segle XV', '1451', '1500'),
('tercer quart segle XV', '1451', '1475'),
('últim quart segle XV', '1476', '1500'),
('segle XVI', '1501', '1600'),
('primera meitat segle XVI', '1501', '1550'),
('primer quart segle XVI', '1501', '1525'),
('segon quart segle XVI', '1526', '1550'),
('segona meitat segle XVI', '1551', '1600'),
('tercer quart segle XVI', '1551', '1575'),
('últim quart segle XVI', '1576', '1600'),
('segle XVII', '1601', '1700'),
('primera meitat segle XVII', '1601', '1650'),
('primer quart segle XVII', '1601', '1625'),
('segon quart segle XVII', '1626', '1650'),
('segona meitat segle XVII', '1651', '1700'),
('tercer quart segle XVII', '1651', '1675'),
('últim quart segle XVII', '1676', '1700'),
('segle XVIII', '1701', '1800'),
('primera meitat segle XVIII', '1701', '1750'),
('primer quart segle XVIII', '1701', '1725'),
('segon quart segle XVIII', '1726', '1750'),
('segona meitat segle XVIII', '1751', '1800'),
('tercer quart segle XVIII', '1751', '1775'),
('últim quart segle XVIII', '1776', '1800'),
('segle XIX', '1801', '1900'),
('primera meitat segle XIX', '1801', '1850'),
('primer quart segle XIX', '1801', '1825'),
('segon quart segle XIX', '1826', '1850'),
('segona meitat segle XIX', '1851', '1900'),
('tercer quart segle XIX', '1851', '1875'),
('últim quart segle XIX', '1876', '1900'),
('segle XX', '1901', '2000'),
('primera meitat segle XX', '1901', '1950'),
('primer quart segle XX', '1901', '1925'),
('segon quart segle XX', '1926', '1950'),
('segona meitat segle XX', '1951', '2000'),
('tercer quart segle XX', '1951', '1975'),
('últim quart segle XX', '1976', '2000');

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