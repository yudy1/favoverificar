-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 01:53:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopincart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `telefono`, `direccion`, `municipio`, `departamento`, `documento`, `email`, `fecha_nacimiento`) VALUES
(1, 'Maria', 'Sanchez', '3456788', 'cll4 norte', 'ipiales', 'nariño', '123456', 'maria@gmail.com', '23:04:2003'),
(2, 'Maria', 'Sanchez', '3456788', 'cll4 norte', 'ipiales', 'nariño', '123456', 'maria@gmail.com', '23:04:2003'),
(3, 'sebas', 'paja', '3114321221', '5-2', 'cajibio', 'cauca', '1002962699', 'sebastianbarrios@gmail.com', '2000-05-07'),
(4, 'Pedro', 'cruz', '765765567', '98-2', 'cajibio', 'cauca', '100296248', 'pedro@gmail.com', '2011-02-08'),
(5, 'Pedro', 'cruz', '765765567', '98-2', 'cajibio', 'cauca', '100296248', 'pedro@gmail.com', '2011-02-08'),
(6, 'luisa', 'grueso', '230956', '0912-2', 'Popayan', 'cauca', '96315978', 'luisa@gmail.com', '2011-01-03'),
(7, 'luisa', 'grueso', '230956', '0912-2', 'Popayan', 'cauca', '96315978', 'luisa@gmail.com', '2011-01-03'),
(8, 'luisa', 'grueso', '230956', '0912-2', 'Popayan', 'cauca', '96315978', 'luisa@gmail.com', '2011-01-03'),
(9, 'Juliana', 'Velasco', '3150981241', '45-2', 'piendamo', 'cauca', '1004062699', 'juliana@gmail.com', '2007-09-17'),
(10, 'Santiago', 'Iter', '5671209', '01-1', 'Timbio', 'cauca', '678790', 'santiago@gmail.com', '2024-02-13'),
(11, 'Martina', 'lopez', '3114321221', '0912-78', 'Cajibio', 'cauca', '100296247', 'martina@gmail.com', '2002-02-05'),
(12, 'jose', 'perez', '322332', '5-2#', 'piendamo', 'cauca', '432342342', 'jose@gmail.com', '2017-04-19'),
(13, 'Yudi', 'Velasco', '3487789342', '3-2#', 'balboa', 'cauca', '432234324', 'yudi@gmail.com', '2024-02-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
