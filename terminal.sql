-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2021 a las 13:34:29
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(11) NOT NULL,
  `rubro` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nit` int(11) NOT NULL,
  `detalle` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `mesanine` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `fechainit` date NOT NULL,
  `fechalim` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `rubro`, `nombre`, `nit`, `detalle`, `mesanine`, `tipo`, `fechainit`, `fechalim`, `fecha`, `estado`, `user_id`, `cliente_id`) VALUES
(2, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 8882, 'OFICINA # 56', 'on', 'LIMITE', '2020-01-23', '2021-03-31', '2021-03-21 15:34:10', 1, 1, 0),
(3, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 90435, 'OFICINA # 57', '', 'LIMITE', '2021-03-01', '2021-03-31', '2021-03-21 15:34:51', 1, 1, 0),
(4, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 89348, 'OFICINA # 55', 'on', 'INDEFINIDO', '2020-09-01', '0000-00-00', '2021-03-21 21:37:09', 1, 1, 0),
(5, 'KIOSKOS', 'EXPRESO TARIJA', 0, 'OFICINA # 41 y BG 41-62', '', '', '0000-00-00', '0000-00-00', '2021-03-22 00:12:39', 0, 1, 0),
(6, 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 0, 'CAJERO AUTOMATICO', '', '', '0000-00-00', '0000-00-00', '2021-03-22 18:27:33', 1, 1, 0),
(7, 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 0, 'ESTIVADOR', '', '', '0000-00-00', '0000-00-00', '2021-03-22 18:54:59', 1, 1, 0),
(8, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 0, 'OFICINA # 57', '', '', '0000-00-00', '0000-00-00', '2021-03-22 21:25:06', 1, 1, 0),
(9, 'OFICINAS DE TRANSPORTE', 'ANTONIA CRUZ HANNOVER', 0, 'OFICINA # 48', 'on', '', '0000-00-00', '0000-00-00', '2021-03-22 21:26:49', 1, 1, 0),
(10, 'KIOSKOS', 'BACILIA CONDORI MORA', 898932, 'KIOSKO # 4 FRONTIS BODEGA #43', '', 'LIMITE', '2019-03-01', '2021-04-30', '2021-03-22 21:31:10', 1, 1, 0),
(11, 'OFICINAS DE TRANSPORTE', 'AIR BUS CORAL S.R.L.', 8908089, 'OFICINA # 7 Y BG 7', '', 'LIMITE', '2021-01-01', '2021-03-30', '2021-03-23 10:05:56', 1, 1, 0),
(12, 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 953, 'VENTA DE REFRESCO ', '', 'LIMITE', '2019-03-01', '2021-03-31', '2021-03-23 10:19:57', 1, 1, 0),
(13, 'COMERCIANTES', 'RITA MAMANI CONDORI', 878676, 'VENTA DE GELATINA ', '', 'LIMITE', '2020-12-01', '2021-03-31', '2021-03-23 12:21:23', 1, 1, 0);

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
  `nit` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `replegal` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `ncontrato` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `ci`, `nombres`, `apellidos`, `razon`, `nit`, `fecha`, `estado`, `replegal`, `celular`, `ncontrato`, `direccion`) VALUES
(1, '1010', 'ALBETO JUAN', 'ALCACHOFA', '1010', 9999, '2021-03-19 00:18:31', 1, 'alex', 898989, '8934/8', 'PANDO'),
(2, '2020', 'JUAN PEDRO ', 'PICA', '220', 1010, '2021-03-19 00:25:29', 1, 'MARIO LOPEZ', 8903248, '98798/9', 'BOLIVAR #90'),
(3, '3030', 'VILMA', 'PICAPIERDA', 'ANDINA', 8089, '2021-03-19 00:27:25', 1, 'MARIO LOPEZ', 8782, '98798/9', 'BOLIVAR #90'),
(6, '5050', 'jose', 'chunco', '5050', 0, '2021-03-19 00:43:06', 0, '', 0, '', ''),
(7, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:12', 1, '', 0, '', ''),
(8, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:12', 1, '', 0, '', ''),
(9, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:12', 1, '', 0, '', ''),
(10, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:12', 1, '', 0, '', ''),
(11, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(12, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(13, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(14, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(15, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(16, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(17, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(18, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(19, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 1, '', 0, '', ''),
(20, '12321', 'asdas', 'asdsa', '12321', 0, '2021-03-19 00:43:20', 0, '', 0, '', ''),
(21, '53453453', 'JUAN ', 'Mollo', 'Mari juana', 0, '2021-03-19 15:09:06', 1, '', 0, '', ''),
(22, '5778877', 'PEDRO ', 'CALLE', 'andina', 0, '2021-03-19 15:21:25', 1, '', 0, '', ''),
(23, '53453453', 'CARLOS', 'MOLLO', 'NASER', 5050, '2021-03-19 15:27:51', 1, 'CARLOS LOPEZ', 9090, '879/09', 'BOLIVAR #40'),
(24, '53453453', 'RONALD', 'CALLE MOLLO', 'CRUZ DEL SUR', 9595949, '2021-03-20 12:54:54', 1, 'RAMIRO ALI', 89284, '349/9', 'BOLIVAR #20'),
(25, '53453453', 'BACILIA', 'CONDORI MORA', 'BACILIA CONDORI MORA', 53453453, '2021-03-22 21:53:32', 1, 'BACILIA CONDORI MORA', 898989, '040/2019', 'BOLIVAR #90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `monto` double(11,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ambiente_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` int(20) NOT NULL,
  `anio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fechapago` date NOT NULL,
  `factura` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `periodo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `rubro` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `monto`, `fecha`, `ambiente_id`, `user_id`, `mes`, `anio`, `fechapago`, `factura`, `periodo`, `rubro`, `nombre`, `detalle`) VALUES
(1, 1800.00, '2021-03-21 23:37:45', 2, 1, 3, '2021', '2021-03-22', 'F-123456', 'mar-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56'),
(2, 4000.00, '2021-03-21 23:37:54', 2, 1, 5, '2021', '2021-03-22', 'F-001', 'may-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56'),
(3, 1800.00, '2021-03-21 23:38:05', 2, 1, 4, '2021', '2021-03-22', 'F-001', 'abr-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56'),
(4, 4000.00, '2021-03-21 23:38:27', 3, 1, 8, '2021', '2021-03-22', 'F-123456', 'ago-21', 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 'OFICINA # 57'),
(5, 1800.00, '2021-03-21 23:38:37', 3, 1, 7, '2021', '2021-03-22', 'F-001', 'jul-21', 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 'OFICINA # 57'),
(6, 1800.00, '2021-03-22 00:13:33', 5, 1, 3, '2021', '2021-03-22', 'F-123456', 'mar-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62'),
(7, 4000.00, '2021-03-22 00:13:48', 5, 1, 4, '2021', '2021-03-22', 'F-001', 'abr-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62'),
(8, 4000.00, '2021-03-22 00:14:25', 5, 1, 5, '2021', '2021-03-22', 'F-123445', 'may-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62'),
(9, 1000.00, '2021-03-22 00:29:32', 5, 3, 6, '2021', '2021-03-22', 'F-123456785', 'jun-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62'),
(10, 800.00, '2021-03-22 18:28:34', 6, 1, 3, '2021', '2021-03-22', 'F-897', 'mar-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO'),
(11, 100.00, '2021-03-22 18:57:42', 7, 1, 1, '2021', '2021-03-22', 'F-50', 'ene-21', 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 'ESTIVADOR'),
(12, 100.00, '2021-03-22 21:28:32', 9, 1, 9, '2019', '2021-03-22', 'F-797', 'sep-19', 'OFICINAS DE TRANSPORTE', 'ANTONIA CRUZ HANNOVER', 'OFICINA # 48'),
(13, 100.00, '2021-03-22 21:28:52', 9, 1, 10, '2019', '2021-03-22', 'F-877', 'oct-19', 'OFICINAS DE TRANSPORTE', 'ANTONIA CRUZ HANNOVER', 'OFICINA # 48'),
(14, 100.00, '2021-03-22 22:21:05', 10, 1, 3, '2021', '2021-03-22', 'R-8798', 'mar-21', 'KIOSKOS', 'BACILIA CONDORI MORA', 'KIOSKO # 4 FRONTIS BODEGA #43');

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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `fecha`) VALUES
(1, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-18 23:03:49'),
(2, 'SOLEDAD', 'soledad@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-22 00:16:46'),
(3, 'juana', 'juana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SECRETARIA', '2021-03-22 00:17:28'),
(4, 'HELEN', 'helen@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-22 19:10:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambiente_id` (`ambiente_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `ambientes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`ambiente_id`) REFERENCES `ambientes` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
