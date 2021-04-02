-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2021 a las 17:59:04
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
  `canon` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `rubro`, `nombre`, `nit`, `detalle`, `mesanine`, `tipo`, `fechainit`, `fechalim`, `canon`, `fecha`, `estado`, `user_id`, `cliente_id`) VALUES
(2, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 8882, 'OFICINA # 56', 'on', 'INDEFINIDO', '2020-01-23', '0000-00-00', 100, '2021-03-21 23:34:10', 1, 1, 1),
(3, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 90435, 'OFICINA # 57', '', 'LIMITE', '2021-03-01', '2021-03-31', 0, '2021-03-21 23:34:51', 1, 1, 1),
(4, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 89348, 'OFICINA # 55', 'on', 'INDEFINIDO', '2020-09-01', '0000-00-00', 900, '2021-03-22 05:37:09', 1, 1, 1),
(5, 'KIOSKOS', 'EXPRESO TARIJA', 0, 'OFICINA # 41 y BG 41-62', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-22 08:12:39', 0, 1, 1),
(6, 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 0, 'CAJERO AUTOMATICO', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 02:27:33', 1, 1, 1),
(7, 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 0, 'ESTIVADOR', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 02:54:59', 1, 1, 1),
(8, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 0, 'OFICINA # 57', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 05:25:06', 1, 1, 1),
(9, 'OFICINAS DE TRANSPORTE', 'ANTONIA CRUZ HANNOVER', 0, 'OFICINA # 48', 'on', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 05:26:49', 1, 1, 1),
(10, 'KIOSKOS', 'BACILIA CONDORI MORA', 898932, 'KIOSKO # 4 FRONTIS BODEGA #43', '', 'LIMITE', '2019-03-01', '2021-04-30', 0, '2021-03-23 05:31:10', 1, 1, 1),
(11, 'OFICINAS DE TRANSPORTE', 'AIR BUS CORAL S.R.L.', 8908089, 'OFICINA # 7 Y BG 7', '', 'LIMITE', '2021-01-01', '2021-03-30', 0, '2021-03-23 18:05:56', 1, 1, 1),
(12, 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 953, 'VENTA DE REFRESCO ', '', 'LIMITE', '2019-03-01', '2021-03-31', 0, '2021-03-23 18:19:57', 1, 1, 1),
(13, 'COMERCIANTES', 'RITA MAMANI CONDORI', 878676, 'VENTA DE GELATINA ', '', 'LIMITE', '2020-12-01', '2021-03-31', 100, '2021-03-23 20:21:23', 1, 1, 1),
(14, 'KIOSKOS', 'LIBERT VELAZQUEZ SANDOBAL', 878676, 'KIOSKO # 6', '', 'LIMITE', '2021-03-01', '2021-03-31', 0, '2021-03-23 22:10:04', 1, 1, 1),
(15, 'PLANTA BAJA', 'LILIAN CAMARA HERBAS', 897897, 'SNACK LA ESTACION', 'on', 'LIMITE', '2021-03-01', '2021-03-22', 0, '2021-03-24 00:30:22', 1, 1, 1),
(16, 'KIOSKOS', 'NOELIA', 878676, '0983', '', 'INDEFINIDO', '2021-03-31', '0000-00-00', 0, '2021-03-24 00:54:34', 1, 1, 1),
(17, 'PLANTA BAJA', 'JORGE SARMIENTO MAMANI', 878676, '4 CARRITOS MONEDEROS', '', 'INDEFINIDO', '2021-03-01', '0000-00-00', 500, '2021-03-24 01:01:28', 1, 1, 1),
(33, 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 53453453, 'PARQUEO', '', 'INDEFINIDO', '2010-01-01', '0000-00-00', 100, '2021-03-25 19:46:48', 1, 1, 27),
(34, 'OFICINAS DE TRANSPORTE', 'TRANS DEL SUR 1', 5778877, 'OFICINA y BG # 28', 'on', 'INDEFINIDO', '2020-02-01', '0000-00-00', 1200, '2021-03-25 19:51:43', 1, 1, 28);

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
(1, '1010', 'ALBETO JUAN', 'ALCACHOFA', '1010', 89348, '2021-03-19 00:18:31', 1, 'alex', 898989, '8934/8', 'PANDO'),
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
(25, '53453453', 'BACILIA', 'CONDORI MORA', 'BACILIA CONDORI MORA', 53453453, '2021-03-22 21:53:32', 1, 'BACILIA CONDORI MORA', 898989, '040/2019', 'BOLIVAR #90'),
(26, '5778877', 'JUAN ALBETITO', 'ALCACHOFA', 'NASER', 8882, '2021-03-23 14:06:57', 1, 'MARIO LOPEZ', 898989, '98798/9', 'BOLIVAR #40'),
(27, '53453453', 'RAMIRO', 'GONZALES ALI', 'RAMIRO GONZALES ALI', 53453453, '2021-03-25 15:34:26', 1, 'RAMIRO GONZALES', 79889, '98798/9', 'BOLIVAR ENTRE PANDO'),
(28, '5778877', 'RAUL TOMAS', 'ALI FLORES', 'TRANS DEL SUR 1', 5778877, '2021-03-25 15:50:28', 1, 'SANTIAGO MOLLO LOPEZ', 80979, '8934/8', 'PANDO #5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `detalle` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `persona_id` int(11) NOT NULL,
  `porton_id` int(11) NOT NULL,
  `ticketinicio` int(11) NOT NULL,
  `ticketfin` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechacreacion` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `detalle`, `persona_id`, `porton_id`, `ticketinicio`, `ticketfin`, `cantidad`, `precio`, `subtotal`, `fecha`, `fechacreacion`, `user_id`, `tipo`) VALUES
(4, '03:00 - 11:00', 3, 3, 27816, 0, 0, 0, 0, '2021-03-26 16:44:43', '2021-03-01', 1, 'USO TERMINAL'),
(8, '08:00 - 10:00', 3, 4, 7000, 7000, 0, 2, 0, '2021-03-30 00:27:30', '0000-00-00', 1, 'USO TERMINAL'),
(9, '03:00 - 11:00', 3, 6, 54, 59, 0, 2, 0, '2021-03-30 02:33:00', '0000-00-00', 1, 'USO TERMINAL'),
(11, '11:00 - 12:00', 3, 5, 2457, 2903, 446, 2, 892, '2021-03-30 02:55:25', '2020-02-02', 1, 'USO TERMINAL'),
(12, '03:00 - 20:00', 3, 15, 90, 99, 9, 2, 18, '2021-03-30 03:27:47', '2010-02-02', 1, 'PARQUEO TER'),
(13, '03:00 - 11:00', 3, 3, 100, 110, 10, 2, 20, '2021-03-30 12:39:27', '2021-02-02', 1, 'USO TERMINAL'),
(14, '03:00 - 11:00', 3, 3, 1000, 1200, 200, 2, 400, '2021-03-30 14:55:29', '2021-02-02', 1, 'USO TERMINAL'),
(15, '07:00 - 09:00', 3, 3, 1000, 1200, 200, 2, 400, '2021-03-30 23:11:31', '2021-02-02', 1, 'USO TERMINAL'),
(16, '08:00 - 09:00', 3, 3, 1001, 1010, 9, 2, 18, '2021-03-30 23:15:44', '2021-02-02', 1, 'USO TERMINAL'),
(18, '03:00 - 19:00', 3, 3, 0, 1021, 0, 2, 0, '2021-03-30 23:29:33', '2021-02-02', 1, 'USO TERMINAL'),
(19, '03:00 - 09:00', 3, 3, 1022, 1032, 10, 2, 20, '2021-03-30 23:30:31', '2021-02-02', 1, 'USO TERMINAL'),
(20, '03:00 - 11:00', 3, 4, 7001, 7010, 9, 2, 18, '2021-04-02 12:11:27', '2000-01-01', 1, 'USO TERMINAL'),
(21, '03:00 - 11:00', 3, 3, 1033, 7001, 5969, 2, 11938, '2021-04-02 12:47:34', '2021-04-02', 1, 'USO TERMINAL'),
(22, '03:00 - 11:00', 3, 3, 7002, 7009, 8, 2, 16, '2021-04-02 14:44:57', '2021-04-02', 1, 'USO TERMINAL'),
(23, '03:00 - 11:00', 3, 3, 7010, 7010, 0, 2, 2, '2021-04-02 14:47:03', '2021-04-02', 1, 'USO TERMINAL'),
(24, '03:00 - 11:00', 3, 17, 0, 0, 0, 0, 0, '2021-04-02 15:01:51', '2021-04-02', 1, 'GUARDA EQUIPAJE TERMINAL'),
(25, '11:00 - 19:00', 3, 15, 100, 7001, 6902, 3, 20706, '2021-04-02 15:03:01', '2021-04-02', 1, 'PARQUEO TERMINAL'),
(26, '03:00 - 11:00', 3, 11, 1, 200, 200, 1, 200, '2021-04-02 15:38:50', '2021-04-02', 1, 'MINGITORIO');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ci` int(11) NOT NULL,
  `fnac` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `ci`, `fnac`, `fecha`) VALUES
(3, 'ROSMERY VALVERDE', 53453453, '2010-01-01', '2021-03-26 15:20:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porton`
--

CREATE TABLE `porton` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `porton`
--

INSERT INTO `porton` (`id`, `nombre`, `precio`, `fecha`, `tipo`) VALUES
(3, 'PORTON INGRESO - SUC. 2', 2, '2021-03-26 16:13:04', 'USO TERMINAL'),
(4, 'PORTON SALIDA', 2, '2021-03-26 16:14:53', 'USO TERMINAL'),
(5, 'PORTON LLEGADA SALIDA', 2, '2021-03-26 16:14:53', 'USO TERMINAL'),
(6, 'CABINA CENTRAL SUC. 1', 2, '2021-03-26 16:14:53', 'USO TERMINAL'),
(7, 'PLATAFORMA 1 PORTON SALIDA', 6, '2021-03-26 16:16:53', 'USO CARRIL'),
(8, 'PLATAFORMA 2 PORTON LLEGADA INGRESO', 3, '2021-03-26 16:16:53', 'PARTICULARES'),
(9, 'PLATAFORMA 3 PORTON LLEGADA SALIDA', 6, '2021-03-26 16:16:53', 'USO CARRIL'),
(10, 'PLATAFORMA 4 PORTON INGRESO', 3, '2021-03-26 16:16:53', 'PARTICULARES'),
(11, 'BAÑO CENTRAL MUJERES', 1, '2021-03-26 16:18:37', 'MINGITORIO'),
(12, 'BAÑO LLEGADA MUJERES', 1, '2021-03-26 16:18:37', 'MINGITORIO'),
(13, 'BAÑO CENTRAL VARONES', 1, '2021-03-26 16:18:37', 'MINGITORIO'),
(14, 'BAÑO LLEGADA VARONES', 1, '2021-03-26 16:18:37', 'MINGITORIO'),
(15, 'PARQUEO', 3, '2021-03-26 16:20:45', 'PARQUEO TERMINAL'),
(16, 'TAXIS', 2, '2021-03-26 16:20:45', 'TAXIS TERMINAL'),
(17, 'GUARDA EQUIPAJE', 0, '2021-03-26 16:20:45', 'GUARDA EQUIPAJE TERMINAL');

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
(1, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-19 03:03:49'),
(2, 'SOLEDAD', 'soledad@gmail.com', '4d186321c1a7f0f354b297e8914ab240', 'ADMINISTRADOR2', '2021-03-22 04:16:46'),
(3, 'juana', 'juana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SECRETARIA', '2021-03-22 04:17:28'),
(4, 'HELEN', 'helen@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-22 23:10:40');

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
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historial_ibfk_1` (`user_id`),
  ADD KEY `historial_ibfk_2` (`porton_id`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambiente_id` (`ambiente_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `porton`
--
ALTER TABLE `porton`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `porton`
--
ALTER TABLE `porton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `ambientes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ambientes_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`porton_id`) REFERENCES `porton` (`id`),
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`persona_id`) REFERENCES `personal` (`id`);

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
