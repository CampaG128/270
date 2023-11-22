-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2023 a las 09:22:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `270`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `num_folio` int(100) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `nacimiento_alumno` date NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `nombre_padre` varchar(100) NOT NULL,
  `nombre_madre` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`num_folio`, `curp`, `nombre_alumno`, `apellido_paterno`, `apellido_materno`, `nacimiento_alumno`, `telefono`, `nombre_padre`, `nombre_madre`, `correo`) VALUES
(4, '123456789009876543', 'Luis', 'Sainz', 'Perez', '2023-11-07', '656 222 3333', 'Juan Sainz Montoya', 'Maria diaz Perez', 'luis@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `num_folio` int(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `pais_nac` varchar(100) NOT NULL,
  `estado_nac` varchar(100) NOT NULL,
  `municipio_nac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`num_folio`, `domicilio`, `pais_nac`, `estado_nac`, `municipio_nac`) VALUES
(2, 'higueras #111', 'méxico', 'chihuahua', 'juarez'),
(3, 'Rfasfs', 'Rfasfs', 'Rfasfs', 'Rfasfs'),
(4, 'Riveras #231', 'México', 'Chihuahua', 'Juarez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolares`
--

CREATE TABLE `escolares` (
  `num_folio` int(100) NOT NULL,
  `carrera1` varchar(100) NOT NULL,
  `carrera2` varchar(100) NOT NULL,
  `carrera3` varchar(100) NOT NULL,
  `secundaria` varchar(100) NOT NULL,
  `calificacion` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escolares`
--

INSERT INTO `escolares` (`num_folio`, `carrera1`, `carrera2`, `carrera3`, `secundaria`, `calificacion`) VALUES
(2, 'programacion', 'logistica', 'fuentes alternas de energia', 'federal #1', 9.50),
(3, 'saSAD', 'SDA', 'DSAD', 'DASD', 5.00),
(4, 'electricidad', 'programacion', 'logistica', 'Federal #1', 8.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `num_folio` int(100) NOT NULL,
  `seguro_social` int(11) NOT NULL,
  `tipo_sangre` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salud`
--

INSERT INTO `salud` (`num_folio`, `seguro_social`, `tipo_sangre`) VALUES
(2, 2147483647, 'A+'),
(3, 123456789, 'b-'),
(4, 345678900, 'b+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `num_folio` int(100) NOT NULL,
  `tutor` varchar(100) NOT NULL,
  `ocupacion_tutor` varchar(50) NOT NULL,
  `nac_tutor` date NOT NULL,
  `telefono_tutor` varchar(30) NOT NULL,
  `curp_tutor` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`num_folio`, `tutor`, `ocupacion_tutor`, `nac_tutor`, `telefono_tutor`, `curp_tutor`) VALUES
(4, 'Juan Sainz Montoya', 'vendedor', '2023-11-11', '656 555 5555', '333333333333333333');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`num_folio`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`num_folio`);

--
-- Indices de la tabla `escolares`
--
ALTER TABLE `escolares`
  ADD PRIMARY KEY (`num_folio`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`num_folio`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`num_folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `num_folio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `num_folio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `escolares`
--
ALTER TABLE `escolares`
  MODIFY `num_folio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `num_folio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `num_folio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
