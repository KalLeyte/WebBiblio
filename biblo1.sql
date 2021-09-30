-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 04:27:37
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblo1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `cod_libro` int(11) NOT NULL,
  `area` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `materia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edicion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `paginas` int(11) NOT NULL,
  `tema` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`cod_libro`, `area`, `materia`, `clasificacion`, `cantidad`, `nombre`, `autor`, `editorial`, `edicion`, `fecha`, `paginas`, `tema`) VALUES
(13, 'tecnologicas', 'modulo', '0001', 31, 'ecosistemas de MÃ©xico', '4-JM', 'cbta', '5Â°edicion', '2019', 200, 'PHP, Bootstrap, Jquery Mobile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Alejandro K. Leyte', 'warriors7'),
(2, 'itzel torres', 'teamo'),
(3, 'fernando josue', 'soydios1'),
(4, 'jesus salvador', 'loli'),
(5, 'imanol herrera', 'felix'),
(6, 'sergio eduardo turrubiates lir', 'enlace'),
(7, 'biblioteca', 'cbta35'),
(8, 'julius ', 'pink floyd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`cod_libro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `cod_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
