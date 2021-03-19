-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 02:04:53
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `terminal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `ci` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `razon` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `fechanac` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `ci`, `nombres`, `apellidos`, `razon`, `fechanac`, `fecha`, `estado`) VALUES
(1, '1010', 'JUANITO ALBETITO', 'ALCACHOFA', '1010', '2021-03-03', '2021-03-19 00:18:31', 1),
(2, '2020', 'PEDRO', 'PICAPIEDRA', '220', '2000-01-01', '2021-03-19 00:25:29', 1),
(3, '3030', 'VILMA', 'PICAPIERDA', '4040', '2000-01-01', '2021-03-19 00:27:25', 1),
(6, '5050', 'jose', 'chunco', '5050', '2021-03-09', '2021-03-19 00:43:06', 0),
(7, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:12', 1),
(8, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:12', 1),
(9, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:12', 1),
(10, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:12', 1),
(11, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(12, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(13, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(14, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(15, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(16, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(17, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(18, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(19, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1),
(20, '12321', 'asdas', 'asdsa', '12321', '2021-03-09', '2021-03-19 00:43:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hambientes`
--

CREATE TABLE `hambientes` (
  `id` int(11) NOT NULL,
  `rubros` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `planta` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `tiempo` date NOT NULL,
  `tipo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'ADMIN',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `fecha`) VALUES
(1, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', '2021-03-18 23:03:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hambientes`
--
ALTER TABLE `hambientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `hambientes`
--
ALTER TABLE `hambientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hambientes`
--
ALTER TABLE `hambientes`
  ADD CONSTRAINT `hambientes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `hambientes_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
