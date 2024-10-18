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
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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

INSERT INTO `Vocabularios` (`id`, `nombre`, `descripcion`, `padre_id`) VALUES
(1, 'classificacio', 'Classificació genèrica', NULL),
(2, 'material', 'Material', NULL),
(3, 'codi_material', 'Codi Getty material', NULL),
(4, 'tecnica', 'Tècnica', NULL),
(5, 'codi_tecnica', 'Codi Getty tècnica', NULL),
(6, 'codi_autor', 'Codi autor', NULL),
(7, 'forma_ingres', 'Forma d\'ingrés', NULL),
(8, 'baixa', 'Baixa', NULL),
(9, 'causa_baixa', 'Causa de baixa', NULL),
(10, 'estat_conservacio', 'Estat de conservació', NULL),
(11, 'tipus_exposicio', 'Tipus exposició', NULL),
(12, 'datacio', 'Datació', NULL),
(13, 'any_inici', 'Any d\'inici', 12),
(14, 'any_final', 'Any final', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Vocabulario_valores`
--

CREATE TABLE `Vocabulario_valores` (
  `id` int NOT NULL,
  `vocabulario_id` int DEFAULT NULL,
  `valor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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