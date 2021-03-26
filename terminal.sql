-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2021 a las 03:31:15
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
(2, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 8882, 'OFICINA # 56', 'on', 'INDEFINIDO', '2020-01-23', '0000-00-00', 100, '2021-03-21 19:34:10', 1, 1, 1),
(3, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 90435, 'OFICINA # 57', '', 'LIMITE', '2021-03-01', '2021-03-31', 0, '2021-03-21 19:34:51', 1, 1, 1),
(4, 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 89348, 'OFICINA # 55', 'on', 'INDEFINIDO', '2020-09-01', '0000-00-00', 900, '2021-03-22 01:37:09', 1, 1, 1),
(5, 'KIOSKOS', 'EXPRESO TARIJA', 0, 'OFICINA # 41 y BG 41-62', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-22 04:12:39', 0, 1, 1),
(6, 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 0, 'CAJERO AUTOMATICO', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-22 22:27:33', 1, 1, 1),
(7, 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 0, 'ESTIVADOR', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-22 22:54:59', 1, 1, 1),
(8, 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 0, 'OFICINA # 57', '', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 01:25:06', 1, 1, 1),
(9, 'OFICINAS DE TRANSPORTE', 'ANTONIA CRUZ HANNOVER', 0, 'OFICINA # 48', 'on', '', '0000-00-00', '0000-00-00', 0, '2021-03-23 01:26:49', 1, 1, 1),
(10, 'KIOSKOS', 'BACILIA CONDORI MORA', 898932, 'KIOSKO # 4 FRONTIS BODEGA #43', '', 'LIMITE', '2019-03-01', '2021-04-30', 0, '2021-03-23 01:31:10', 1, 1, 1),
(11, 'OFICINAS DE TRANSPORTE', 'AIR BUS CORAL S.R.L.', 8908089, 'OFICINA # 7 Y BG 7', '', 'LIMITE', '2021-01-01', '2021-03-30', 0, '2021-03-23 14:05:56', 1, 1, 1),
(12, 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 953, 'VENTA DE REFRESCO ', '', 'LIMITE', '2019-03-01', '2021-03-31', 0, '2021-03-23 14:19:57', 1, 1, 1),
(13, 'COMERCIANTES', 'RITA MAMANI CONDORI', 878676, 'VENTA DE GELATINA ', '', 'LIMITE', '2020-12-01', '2021-03-31', 100, '2021-03-23 16:21:23', 1, 1, 1),
(14, 'KIOSKOS', 'LIBERT VELAZQUEZ SANDOBAL', 878676, 'KIOSKO # 6', '', 'LIMITE', '2021-03-01', '2021-03-31', 0, '2021-03-23 18:10:04', 1, 1, 1),
(15, 'PLANTA BAJA', 'LILIAN CAMARA HERBAS', 897897, 'SNACK LA ESTACION', 'on', 'LIMITE', '2021-03-01', '2021-03-22', 0, '2021-03-23 20:30:22', 1, 1, 1),
(16, 'KIOSKOS', 'NOELIA', 878676, '0983', '', 'INDEFINIDO', '2021-03-31', '0000-00-00', 0, '2021-03-23 20:54:34', 1, 1, 1),
(17, 'PLANTA BAJA', 'JORGE SARMIENTO MAMANI', 878676, '4 CARRITOS MONEDEROS', '', 'INDEFINIDO', '2021-03-01', '0000-00-00', 500, '2021-03-23 21:01:28', 1, 1, 1),
(33, 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 53453453, 'PARQUEO', '', 'INDEFINIDO', '2010-01-01', '0000-00-00', 100, '2021-03-25 15:46:48', 1, 1, 27),
(34, 'OFICINAS DE TRANSPORTE', 'TRANS DEL SUR 1', 5778877, 'OFICINA y BG # 28', 'on', 'INDEFINIDO', '2020-02-01', '0000-00-00', 1200, '2021-03-25 15:51:43', 1, 1, 28);

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
(2, 'RAMON ALI QUISPE', 89090, '1990-01-01', '2021-03-25 18:09:01');

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
(2, 'SOLEDAD', 'soledad@gmail.com', '4d186321c1a7f0f354b297e8914ab240', 'ADMINISTRADOR2', '2021-03-22 00:16:46'),
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
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
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
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`ambiente_id`) REFERENCES `ambientes` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
