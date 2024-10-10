-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Temps de generació: 09-10-2024 a les 09:40:13
-- Versió del servidor: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- Versió de PHP: 8.1.2-1ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `museu`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `Autors`
--

CREATE TABLE `Autors` (
  `AutorID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `Autors`
--

INSERT INTO `Autors` (`AutorID`, `Nombre`) VALUES
(1, 'Pablo Picasso'),
(2, 'Salvador Dalí'),
(3, 'Joan Miró'),
(4, 'Francisco Goya'),
(5, 'El Greco');

-- --------------------------------------------------------

--
-- Estructura de la taula `Clasificaciones`
--

CREATE TABLE `Clasificaciones` (
  `ClasificacionID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `EstadosConservacion`
--

CREATE TABLE `EstadosConservacion` (
  `EstadoConservacionID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Exposiciones`
--

CREATE TABLE `Exposiciones` (
  `ExposicionID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `TipoExposicion` varchar(255) DEFAULT NULL,
  `LugarExposicion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Materiales`
--

CREATE TABLE `Materiales` (
  `MaterialID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Museos`
--

CREATE TABLE `Museos` (
  `MuseoID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fotografia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `ObjetoExposicion`
--

CREATE TABLE `ObjetoExposicion` (
  `ObjetoExposicionID` int(11) NOT NULL,
  `ObjetoID` int(11) DEFAULT NULL,
  `ExposicionID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Objetos`
--

CREATE TABLE `Objetos` (
  `ObjetoID` int(11) NOT NULL,
  `RegistroNº` varchar(6) NOT NULL,
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
  `AnyInicial` date DEFAULT NULL,
  `AnyFinal` date DEFAULT NULL,
  `Datacion` varchar(255) DEFAULT NULL,
  `UbicacionActualID` int(11) DEFAULT NULL,
  `FechaRegistro` datetime NOT NULL,
  `NumeroEjemplares` int(11) DEFAULT NULL,
  `FormaIngreso` varchar(255) DEFAULT NULL,
  `FechaIngreso` datetime DEFAULT NULL,
  `FuenteIngreso` varchar(255) DEFAULT NULL,
  `Baja` varchar(255) DEFAULT NULL,
  `CausaBaja` varchar(255) DEFAULT NULL,
  `FechaBaja` datetime DEFAULT NULL,
  `PersonaAutorizadaBaja` varchar(255) DEFAULT NULL,
  `EstadoConservacionID` int(11) DEFAULT NULL,
  `LugarEjecucion` varchar(255) DEFAULT NULL,
  `LugarProcedencia` varchar(255) DEFAULT NULL,
  `NumeroTiraje` varchar(255) DEFAULT NULL,
  `OtrosNrosIdentificacion` varchar(255) DEFAULT NULL,
  `ValoracionEconomica` decimal(10,2) DEFAULT NULL,
  `CodigoRestauracion` varchar(255) DEFAULT NULL,
  `FechaInicioRestauracion` datetime DEFAULT NULL,
  `FechaFinRestauracion` datetime DEFAULT NULL,
  `Bibliografia` text DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `HistoriaObjeto` varchar(255) DEFAULT NULL,
  `MuseoID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `Objetos`
--

INSERT INTO `Objetos` (`ObjetoID`, `RegistroNº`, `Imagen`, `Nombre`, `ClasificacionGenericaID`, `ColeccionProcedencia`, `Altura`, `Anchura`, `Profundidad`, `MaterialID`, `TecnicaID`, `AutorID`, `Titulo`, `AnyInicial`, `AnyFinal`, `Datacion`, `UbicacionActualID`, `FechaRegistro`, `NumeroEjemplares`, `FormaIngreso`, `FechaIngreso`, `FuenteIngreso`, `Baja`, `CausaBaja`, `FechaBaja`, `PersonaAutorizadaBaja`, `EstadoConservacionID`, `LugarEjecucion`, `LugarProcedencia`, `NumeroTiraje`, `OtrosNrosIdentificacion`, `ValoracionEconomica`, `CodigoRestauracion`, `FechaInicioRestauracion`, `FechaFinRestauracion`, `Bibliografia`, `Descripcion`, `HistoriaObjeto`, `MuseoID`) VALUES
(3, '001003', 'images', 'Las Meninas', NULL, 'Colección Goya', '3.20', '6.50', '0.50', NULL, NULL, 4, 'Las Meninas', NULL, NULL, 'Óleo sobre lienzo', 1, '2020-01-01 00:00:00', 1, 'Donación', '2020-01-01 00:00:00', 'Fundación Goya', NULL, NULL, NULL, NULL, NULL, 'Madrid', 'España', NULL, NULL, '800000.00', NULL, NULL, NULL, 'Bibliografía de Las Meninas', 'Descripción de Las Meninas', 'Historia de Las Meninas', NULL),
(4, '001004', 'images', 'Las Meninas', NULL, 'Colección Goya', '3.20', '6.50', '0.50', NULL, NULL, 4, 'Las Meninas', NULL, NULL, 'Óleo sobre lienzo', 1, '2020-01-01 00:00:00', 1, 'Donación', '2020-01-01 00:00:00', 'Fundación Goya', NULL, NULL, NULL, NULL, NULL, 'Madrid', 'España', NULL, NULL, '800000.00', NULL, NULL, NULL, 'Bibliografía de Las Meninas', 'Descripción de Las Meninas', 'Historia de Las Meninas', NULL),
(5, '001005', NULL, 'El caballero con la mano en el pecho', NULL, 'Colección El Greco', '1.80', '4.20', '0.50', NULL, NULL, 5, 'El caballero con la mano en el pecho', NULL, NULL, 'Óleo sobre lienzo', 2, '2020-06-01 00:00:00', 1, 'Compra', '2020-06-01 00:00:00', 'Galería de arte antiguo', NULL, NULL, NULL, NULL, NULL, 'Toledo', 'España', NULL, NULL, '300000.00', NULL, NULL, NULL, 'Bibliografía de El caballero con la mano en el pecho', 'Descripción de El caballero con la mano en el pecho', 'Historia de El caballero con la mano en el pecho', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `Restauraciones`
--

CREATE TABLE `Restauraciones` (
  `RestauracionID` int(11) NOT NULL,
  `ObjetoID` int(11) DEFAULT NULL,
  `CodigoRestauracion` varchar(255) DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `ComentarioRestauracion` text DEFAULT NULL,
  `NombreRestaurador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Tecnicas`
--

CREATE TABLE `Tecnicas` (
  `TecnicaID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Ubicaciones`
--

CREATE TABLE `Ubicaciones` (
  `UbicacionID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `FechaInicioUbicacion` datetime DEFAULT NULL,
  `FechaFinUbicacion` datetime DEFAULT NULL,
  `ComentarioUbicacion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `Ubicaciones`
--

INSERT INTO `Ubicaciones` (`UbicacionID`, `Nombre`, `FechaInicioUbicacion`, `FechaFinUbicacion`, `ComentarioUbicacion`) VALUES
(1, 'Sala 1', '2020-01-01 00:00:00', '2025-01-01 00:00:00', 'Sala principal del museo'),
(2, 'Sala 2', '2020-06-01 00:00:00', '2025-06-01 00:00:00', 'Sala de arte moderno'),
(3, 'Almacén 1', '2020-01-01 00:00:00', NULL, 'Almacén de objetos en restauración'),
(4, 'Sala 3', '2020-09-01 00:00:00', '2025-09-01 00:00:00', 'Sala de arte contemporáneo'),
(5, 'Depósito', '2020-01-01 00:00:00', NULL, 'Depósito de objetos en reserva');

-- --------------------------------------------------------

--
-- Estructura de la taula `Usuarios`
--

CREATE TABLE `Usuarios` (
  `UsuarioID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Contraseña` varchar(255) DEFAULT NULL,
  `Rol` enum('Administració','Tècnic','Convidat') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `Usuarios`
--

INSERT INTO `Usuarios` (`UsuarioID`, `Nombre`, `Contraseña`, `Rol`) VALUES
(1, 'admin', '1234', 'Administració'),
(2, 'tecnic', '1234', 'Tècnic'),
(3, 'convidat', '1234', 'Convidat');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `Autors`
--
ALTER TABLE `Autors`
  ADD PRIMARY KEY (`AutorID`);

--
-- Índexs per a la taula `Clasificaciones`
--
ALTER TABLE `Clasificaciones`
  ADD PRIMARY KEY (`ClasificacionID`);

--
-- Índexs per a la taula `EstadosConservacion`
--
ALTER TABLE `EstadosConservacion`
  ADD PRIMARY KEY (`EstadoConservacionID`);

--
-- Índexs per a la taula `Exposiciones`
--
ALTER TABLE `Exposiciones`
  ADD PRIMARY KEY (`ExposicionID`);

--
-- Índexs per a la taula `Materiales`
--
ALTER TABLE `Materiales`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Índexs per a la taula `Museos`
--
ALTER TABLE `Museos`
  ADD PRIMARY KEY (`MuseoID`);

--
-- Índexs per a la taula `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  ADD PRIMARY KEY (`ObjetoExposicionID`),
  ADD KEY `ObjetoID` (`ObjetoID`),
  ADD KEY `ExposicionID` (`ExposicionID`);

--
-- Índexs per a la taula `Objetos`
--
ALTER TABLE `Objetos`
  ADD PRIMARY KEY (`ObjetoID`),
  ADD UNIQUE KEY `RegistroNº` (`RegistroNº`),
  ADD KEY `ClasificacionGenericaID` (`ClasificacionGenericaID`),
  ADD KEY `MaterialID` (`MaterialID`),
  ADD KEY `TecnicaID` (`TecnicaID`),
  ADD KEY `AutorID` (`AutorID`),
  ADD KEY `UbicacionActualID` (`UbicacionActualID`),
  ADD KEY `EstadoConservacionID` (`EstadoConservacionID`),
  ADD KEY `MuseoID` (`MuseoID`);

--
-- Índexs per a la taula `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD PRIMARY KEY (`RestauracionID`),
  ADD KEY `ObjetoID` (`ObjetoID`);

--
-- Índexs per a la taula `Tecnicas`
--
ALTER TABLE `Tecnicas`
  ADD PRIMARY KEY (`TecnicaID`);

--
-- Índexs per a la taula `Ubicaciones`
--
ALTER TABLE `Ubicaciones`
  ADD PRIMARY KEY (`UbicacionID`);

--
-- Índexs per a la taula `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `ObjetoExposicion`
--
ALTER TABLE `ObjetoExposicion`
  ADD CONSTRAINT `ObjetoExposicion_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`),
  ADD CONSTRAINT `ObjetoExposicion_ibfk_2` FOREIGN KEY (`ExposicionID`) REFERENCES `Exposiciones` (`ExposicionID`);

--
-- Restriccions per a la taula `Objetos`
--
ALTER TABLE `Objetos`
  ADD CONSTRAINT `Objetos_ibfk_1` FOREIGN KEY (`ClasificacionGenericaID`) REFERENCES `Clasificaciones` (`ClasificacionID`),
  ADD CONSTRAINT `Objetos_ibfk_2` FOREIGN KEY (`MaterialID`) REFERENCES `Materiales` (`MaterialID`),
  ADD CONSTRAINT `Objetos_ibfk_3` FOREIGN KEY (`TecnicaID`) REFERENCES `Tecnicas` (`TecnicaID`),
  ADD CONSTRAINT `Objetos_ibfk_4` FOREIGN KEY (`AutorID`) REFERENCES `Autors` (`AutorID`),
  ADD CONSTRAINT `Objetos_ibfk_5` FOREIGN KEY (`UbicacionActualID`) REFERENCES `Ubicaciones` (`UbicacionID`),
  ADD CONSTRAINT `Objetos_ibfk_6` FOREIGN KEY (`EstadoConservacionID`) REFERENCES `EstadosConservacion` (`EstadoConservacionID`),
  ADD CONSTRAINT `Objetos_ibfk_7` FOREIGN KEY (`MuseoID`) REFERENCES `Museos` (`MuseoID`);

--
-- Restriccions per a la taula `Restauraciones`
--
ALTER TABLE `Restauraciones`
  ADD CONSTRAINT `Restauraciones_ibfk_1` FOREIGN KEY (`ObjetoID`) REFERENCES `Objetos` (`ObjetoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;