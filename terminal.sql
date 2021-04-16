-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2021 a las 15:44:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1,
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
(7, 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 34423, 'ESTIVADOR', '', '', '2021-09-01', '0000-00-00', 80, '2021-03-23 02:54:59', 1, 1, 1),
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
(34, 'OFICINAS DE TRANSPORTE', 'TRANS DEL SUR 1', 5778877, 'OFICINA y BG # 28', 'on', 'INDEFINIDO', '2020-02-01', '0000-00-00', 1200, '2021-03-25 19:51:43', 1, 1, 28),
(35, 'PERNOCTE Y PARQUEO', '', 0, 'reposicion', '', 'INDEFINIDO', '2021-01-01', '0000-00-00', 0, '2021-04-07 20:44:11', 1, 1, 29),
(36, 'BODEGAS Y ALMACENES', '1010', 89348, 'of #10', '', 'LIMITE', '2021-04-01', '2021-04-30', 100, '2021-04-15 15:58:53', 1, 1, 1);

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(1) NOT NULL DEFAULT 1,
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
(28, '5778877', 'RAUL TOMAS', 'ALI FLORES', 'TRANS DEL SUR 1', 5778877, '2021-03-25 15:50:28', 1, 'SANTIAGO MOLLO LOPEZ', 80979, '8934/8', 'PANDO #5'),
(29, '0', 'Otros', 'varios', '0', 0, '2021-04-07 20:41:29', 1, 'varios', 0, '0', 'sin dir.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dpagos`
--

CREATE TABLE `dpagos` (
  `id` int(11) NOT NULL,
  `monto` decimal(11,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `dpagos`
--

INSERT INTO `dpagos` (`id`, `monto`, `created_at`, `dia`) VALUES
(21, '1030.00', '2021-04-13 11:14:41', '2021-04-12'),
(22, '3030.00', '2021-04-13 11:15:42', '2021-04-13'),
(23, '1410.00', '2021-04-15 08:22:10', '2021-04-14'),
(24, '5290.00', '2021-04-15 10:47:09', '2021-04-15'),
(25, '5390.00', '2021-04-16 00:46:17', '2021-04-16');

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
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
(26, '03:00 - 11:00', 3, 11, 1, 200, 200, 1, 200, '2021-04-02 15:38:50', '2021-04-02', 1, 'MINGITORIO'),
(27, '03:00 - 11:00', 3, 6, 60, 2000, 1941, 2, 3882, '2021-04-06 18:53:40', '2021-04-06', 1, 'USO TERMINAL'),
(28, '03:00 - 11:00', 3, 14, 1, 200, 200, 1, 200, '2021-04-06 18:54:28', '2021-04-06', 1, 'MINGITORIO'),
(29, '11:00 - 19:00', 3, 14, 201, 218, 18, 1, 18, '2021-04-06 18:55:29', '2021-04-06', 1, 'MINGITORIO'),
(30, '03:00 - 11:00', 3, 3, 7011, 7019, 9, 2, 18, '2021-04-08 11:32:41', '2021-04-08', 1, 'USO TERMINAL'),
(31, '03:00 - 11:00', 3, 11, 201, 210, 10, 1, 10, '2021-04-08 11:33:02', '2021-04-08', 1, 'MINGITORIO'),
(32, '11:00 - 19:00', 3, 11, 211, 220, 10, 1, 10, '2021-04-08 11:33:28', '2021-04-08', 1, 'MINGITORIO'),
(33, '09:00 - 15:00', 3, 3, 7020, 7030, 11, 2, 22, '2021-04-15 17:46:13', '2021-04-15', 1, 'USO TERMINAL'),
(34, 'OFICINA # 57', 3, 3, 7031, 7032, 2, 2, 4, '2021-04-13 14:58:12', '2021-04-13', 1, 'USO TERMINAL'),
(35, 'OFICINA # 57', 3, 6, 2001, 2100, 100, 2, 200, '2021-04-13 15:01:43', '2021-04-13', 1, 'USO TERMINAL'),
(36, '03:00 - 11:00', 3, 7, 1, 20, 20, 6, 120, '2021-04-15 16:00:57', '2021-04-15', 1, 'USO CARRIL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hpagos`
--

CREATE TABLE `hpagos` (
  `id` int(11) NOT NULL,
  `monto` decimal(11,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `mes` int(11) NOT NULL,
  `anio` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hpagos`
--

INSERT INTO `hpagos` (`id`, `monto`, `created_at`, `mes`, `anio`) VALUES
(21, '604.00', '2021-04-13 10:56:05', 3, 2021),
(22, '-1461.00', '2021-04-13 11:02:56', 4, 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `monto` double(11,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `ambiente_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` int(20) NOT NULL,
  `anio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fechapago` date NOT NULL,
  `factura` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `periodo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `rubro` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` enum('INGRESO','EGRESO') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'INGRESO',
  `valor_idtipopago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `monto`, `fecha`, `ambiente_id`, `user_id`, `mes`, `anio`, `fechapago`, `factura`, `periodo`, `rubro`, `nombre`, `detalle`, `tipo`, `valor_idtipopago`) VALUES
(1, 15.00, '2021-04-07 20:44:36', 35, 1, 4, '2021', '2021-04-07', 'R-123', 'abr-21', 'PERNOCTE Y PARQUEO', '0', 'pernocte', 'INGRESO', 0),
(2, 15.00, '2021-04-08 11:24:43', 35, 1, 5, '2021', '2021-04-08', 'R-123', 'may-21', 'PERNOCTE Y PARQUEO', '', 'reposicion', 'INGRESO', 0),
(3, 178.29, '2021-04-08 12:35:34', 0, 1, 4, '2021', '2021-04-08', 'F-05454', 'abr-21', 'OBLIGACIONES SOCIALES ', 'ADALID AVILA HERBAS', 'SUELDOS DEL MES DE FEBRERO ', 'EGRESO', 1),
(4, 1500.00, '2021-04-08 12:41:12', 10, 1, 4, '2021', '2021-04-08', 'F-123456', 'abr-21', 'KIOSKOS', 'BACILIA CONDORI MORA', 'KIOSKO # 4 FRONTIS BODEGA #43', 'INGRESO', 0),
(5, 21034.00, '2021-04-08 12:42:48', 0, 1, 4, '2021', '2021-04-08', 'R-1546', 'mar-2021', 'SERVICIOS BASICOS', 'ADALID AVIL A HERBAS \r\n', 'SUELDO NO COBRADOS DEL MES DE SEP\r\n', 'EGRESO', 4),
(13, 100.00, '2021-04-09 21:15:51', 2, 1, 4, '2021', '2021-04-09', 'R-1237', 'abr-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(14, 700.00, '2021-04-10 18:56:09', 0, 1, 4, '2021', '2021-04-10', 'F-8788', 'abr-21', 'OBLIGACIONES SOCIALES', 'DAVID', 'CAMINOS', 'EGRESO', 1),
(15, 500.00, '2021-04-10 19:03:55', 0, 1, 4, '2021', '2021-04-10', 'R-123', 'abr-21', 'OBLIGACIONES SOCIALES', 'DAVID ALI', 'EMAO', 'EGRESO', 1),
(16, 15.00, '2021-04-10 20:14:15', 35, 1, 4, '2021', '2021-04-10', 'F-123456', 'abr-21', 'PERNOCTE Y PARQUEO', '', 'reposicion', 'INGRESO', 0),
(17, 100.00, '2021-04-10 20:18:54', 12, 1, 4, '2021', '2021-04-10', 'F-123456', 'abr-21', 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 'VENTA DE REFRESCO ', 'INGRESO', 0),
(18, 200.00, '2021-04-10 20:31:29', 2, 1, 5, '2021', '2021-04-10', 'F-123456', 'may-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(19, 1800.00, '2021-04-10 20:31:39', 4, 1, 1, '2021', '2021-04-10', 'F-123456', 'ene-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 55', 'INGRESO', 0),
(20, 100.00, '2021-04-10 20:34:40', 4, 1, 3, '2021', '2021-04-10', 'F-123456', 'mar-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 55', 'INGRESO', 0),
(21, 200.00, '2021-04-10 20:34:55', 4, 1, 4, '2021', '2021-04-10', 'F-123456', 'abr-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 55', 'INGRESO', 0),
(22, 100.00, '2021-04-10 20:35:22', 4, 1, 2, '2021', '2021-04-10', 'F-123456', 'feb-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 55', 'INGRESO', 0),
(23, 100.00, '2021-04-10 20:35:47', 4, 1, 5, '2021', '2021-04-10', 'F-123456', 'may-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 55', 'INGRESO', 0),
(24, 100.00, '2021-04-10 20:38:51', 2, 1, 6, '2021', '2021-04-10', 'F-123456', 'jun-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(25, 100.00, '2021-04-10 20:39:21', 2, 1, 7, '2021', '2021-04-10', 'F-123456', 'jul-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(32, 100.00, '2021-04-10 23:39:24', 6, 1, 4, '2021', '2021-04-10', 'F-123456', 'abr-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(33, 100.00, '2021-04-10 23:40:15', 6, 1, 1, '2021', '2021-04-10', 'F-001', 'ene-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(34, 300.00, '2021-04-10 23:40:26', 6, 1, 2, '2021', '2021-04-10', 'F-123456', 'feb-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(35, 100.00, '2021-04-10 23:41:45', 6, 1, 3, '2021', '2021-04-10', 'F-001', 'mar-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(36, 300.00, '2021-04-10 23:42:02', 6, 1, 5, '2021', '2021-04-10', 'F-123456', 'may-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(37, 100.00, '2021-04-10 23:42:32', 6, 1, 6, '2021', '2021-04-10', 'F-123456', 'jun-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(38, 1800.00, '2021-04-10 23:48:36', 6, 1, 7, '2021', '2021-04-10', 'F-123456', 'jul-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(44, 100.00, '2021-04-11 00:01:31', 6, 1, 8, '2021', '2021-04-10', 'R-123456', 'ago-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(45, 200.00, '2021-04-11 00:01:52', 6, 1, 9, '2021', '2021-04-10', 'F-123456', 'sep-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(46, 100.00, '2021-04-11 17:25:06', 6, 1, 10, '2021', '2021-04-11', 'F-123456', 'oct-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(47, 100.00, '2021-04-11 17:45:13', 6, 1, 11, '2021', '2021-04-11', 'R-123456', 'nov-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(48, 100.00, '2021-04-11 17:59:35', 2, 1, 3, '2021', '2021-04-11', 'F-123456', 'mar-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(49, 1800.00, '2021-04-11 18:02:14', 0, 1, 4, '2021', '2021-04-11', 'F-123456', 'abr-21', 'SUBSIDIOS', 'JUAN LOPEZ', 'OFICINA # 55', 'EGRESO', 2),
(50, 100.00, '2021-04-11 20:57:55', 2, 1, 8, '2021', '2021-04-11', 'F-123456', 'ago-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(51, 100.00, '2021-04-13 14:56:05', 2, 1, 9, '2021', '2021-04-13', 'F-123456', 'sep-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(52, 500.00, '2021-04-13 14:57:11', 2, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(53, 200.00, '2021-04-13 15:02:08', 0, 1, 4, '2021', '2021-04-13', 'F-123456', 'abr-21', 'OBLIGACIONES SOCIALES', 'JUAN LOPEZ', 'OFICINA # 57', 'EGRESO', 1),
(54, 100.00, '2021-04-13 15:02:56', 2, 1, 10, '2021', '2021-04-13', 'F-123456', 'oct-21', 'BODEGAS Y ALMACENES', 'TRANSPORTE FENIX S.R.L.', 'OFICINA # 56', 'INGRESO', 0),
(55, 15.00, '2021-04-13 15:09:48', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(56, 15.00, '2021-04-13 15:09:56', 35, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', '', 'reposicion', 'INGRESO', 0),
(57, 15.00, '2021-04-13 15:10:10', 35, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', '', 'reposicion', 'INGRESO', 0),
(58, 15.00, '2021-04-13 15:12:01', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(59, 15.00, '2021-04-13 15:12:20', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(60, 15.00, '2021-04-13 15:13:32', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(61, 15.00, '2021-04-13 15:13:59', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(62, 15.00, '2021-04-13 15:14:41', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(63, 15.00, '2021-04-13 15:14:49', 33, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'PERNOCTE Y PARQUEO', 'RAMIRO GONZALES ALI', 'PARQUEO', 'INGRESO', 0),
(64, 1000.00, '2021-04-13 15:15:15', 12, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 'VENTA DE REFRESCO ', 'INGRESO', 0),
(65, 2000.00, '2021-04-13 15:15:42', 13, 1, 1, '2021', '2021-04-13', 'F-123456', 'ene-21', 'COMERCIANTES', 'RITA MAMANI CONDORI', 'VENTA DE GELATINA ', 'INGRESO', 0),
(66, 100.00, '2021-04-13 16:11:40', 0, 1, 4, '2021', '2021-04-13', 'F-8788', 'abr-21', 'SUBSIDIOS', 'HELEN CHAMBI', 'ENDE', 'EGRESO', 2),
(67, 100.00, '2021-04-15 14:20:04', 0, 1, 4, '2021', '2021-04-15', 'F-8788', 'abr-21', 'OBLIGACIONES SOCIALES', 'HELEN CHAMBI', 'EMAO', 'EGRESO', 1),
(68, 80.00, '2021-04-15 14:47:08', 7, 1, 4, '2021', '2021-04-15', '90', 'abr-21', 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 'ESTIVADOR', 'INGRESO', 0),
(69, 2000.00, '2021-04-15 14:52:02', 7, 1, 5, '2021', '2021-04-15', 'F-8788', 'may-21', 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 'ESTIVADOR', 'INGRESO', 0),
(70, 2000.00, '2021-04-15 14:52:52', 7, 1, 6, '2021', '2021-04-15', 'F-8788', 'jun-21', 'ESTIVADORES', 'DANIEL UMAÑA LAUREANO', 'ESTIVADOR', 'INGRESO', 0),
(71, 100.00, '2021-04-15 14:55:55', 13, 1, 4, '2021', '2021-04-14', 'F-8788', 'abr-21', 'COMERCIANTES', 'RITA MAMANI CONDORI', 'VENTA DE GELATINA ', 'INGRESO', 0),
(72, 100.00, '2021-04-15 15:19:59', 5, 1, 4, '2021', '2021-04-14', 'R-123', 'abr-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62', 'INGRESO', 0),
(73, 100.00, '2021-04-15 15:21:28', 5, 1, 3, '2021', '2021-04-14', 'F-8788', 'mar-21', 'KIOSKOS', 'EXPRESO TARIJA', 'OFICINA # 41 y BG 41-62', 'INGRESO', 0),
(74, 100.00, '2021-04-15 15:53:38', 6, 1, 12, '2021', '2021-04-14', 'F-8788', 'dic-21', 'CAJEROS AUTOMATICOS', 'BANCO DE CREDITO DE BOLIVIA S.A.', 'CAJERO AUTOMATICO', 'INGRESO', 0),
(75, 200.00, '2021-04-15 15:59:27', 12, 1, 2, '2021', '2021-04-15', 'F-8788', 'feb-21', 'COMERCIANTES', 'KARINA MAMANI FERNANDEZ', 'VENTA DE REFRESCO ', 'INGRESO', 0),
(76, 2000.00, '2021-04-15 16:02:30', 0, 1, 5, '2021', '2021-04-15', 'R-1234', 'may-21', 'GASTOS OPERATIVOS', 'HELEN CHAMBI', 'COMPRA DE MATERIAL', 'EGRESO', 5),
(79, 1000.00, '2021-04-15 23:26:45', 0, 1, 4, '2021', '2021-04-15', 'F-8788', 'abr-21', 'FINIQUITOS', 'PAGO', 'ARIEL', 'EGRESO', 3),
(81, 200.00, '2021-04-16 04:06:00', 0, 1, 4, '2021', '2021-04-16', 'F-8788', 'abr-21', '3', 'PAGO SUELDO', 'DAVID', 'EGRESO', 0),
(82, 100.00, '2021-04-16 04:46:17', 3, 1, 4, '2021', '2021-04-16', 'F-8788', 'abr-21', 'OFICINAS DE TRANSPORTE', 'LINEA SINDICAL TRANS IMPERIAL', 'OFICINA # 57', 'INGRESO', 0),
(83, 100.00, '2021-04-16 13:32:05', 0, 1, 4, '2021', '2021-04-16', 'F-8788', 'abr-21', 'OBLIGACIONES SOCIALES', 'NOELIA', 'reposicion', 'EGRESO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ci` int(11) NOT NULL,
  `fnac` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
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
  `precio` double(11,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `porton`
--

INSERT INTO `porton` (`id`, `nombre`, `precio`, `fecha`, `tipo`, `orden`) VALUES
(3, 'PORTON INGRESO - SUC. 2', 2.00, '2021-03-26 16:13:04', 'USO TERMINAL', 1),
(4, 'PORTON SALIDA', 2.00, '2021-03-26 16:14:53', 'USO TERMINAL', 1),
(5, 'PORTON LLEGADA SALIDA', 2.00, '2021-03-26 16:14:53', 'USO TERMINAL', 1),
(6, 'CABINA CENTRAL SUC. 1', 2.00, '2021-03-26 16:14:53', 'USO TERMINAL', 1),
(7, 'PLATAFORMA 1 PORTON SALIDA', 6.00, '2021-03-26 16:16:53', 'USO CARRIL', 2),
(8, 'PLATAFORMA 3 PORTON LLEGADA SALIDA', 6.00, '2021-03-26 16:16:53', 'USO CARRIL', 2),
(9, 'PLATAFORMA 2 PORTON LLEGADA INGRESO', 3.00, '2021-03-26 16:16:53', 'PARTICULARES', 3),
(10, 'PLATAFORMA 4 PORTON INGRESO', 3.00, '2021-03-26 16:16:53', 'PARTICULARES', 3),
(11, 'BAÑO CENTRAL MUJERES', 1.00, '2021-03-26 16:18:37', 'MINGITORIO', 4),
(12, 'BAÑO LLEGADA MUJERES', 1.00, '2021-03-26 16:18:37', 'MINGITORIO', 4),
(13, 'BAÑO CENTRAL VARONES', 1.00, '2021-03-26 16:18:37', 'MINGITORIO', 4),
(14, 'BAÑO LLEGADA VARONES', 1.00, '2021-03-26 16:18:37', 'MINGITORIO', 4),
(15, 'PARQUEO', 3.00, '2021-03-26 16:20:45', 'PARQUEO TERMINAL', 5),
(16, 'TAXIS', 1.50, '2021-03-26 16:20:45', 'TAXIS TERMINAL', 6),
(17, 'GUARDA EQUIPAJE', 0.00, '2021-03-26 16:20:45', 'GUARDA EQUIPAJE TERMINAL', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipogasto`
--

CREATE TABLE `tipogasto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipogasto`
--

INSERT INTO `tipogasto` (`id`, `nombre`, `fecha`) VALUES
(1, 'OBLIGACIONES SOCIALES', '2021-04-08 12:10:51'),
(2, 'SUBSIDIOS', '2021-04-08 12:11:41'),
(3, 'FINIQUITOS', '2021-04-08 12:11:41'),
(4, 'SERVICIOS BASICOS', '2021-04-08 12:12:42'),
(5, 'GASTOS OPERATIVOS', '2021-04-08 12:12:42'),
(6, 'GASTOS ADMINISTRATIVOS', '2021-04-08 12:12:42'),
(7, 'IMPOSITIVOS', '2021-04-08 12:12:42'),
(8, 'DEPOSITO BANCO', '2021-04-10 13:58:53'),
(9, 'OTROS', '2021-04-15 16:32:49');

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
(1, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR', '2021-03-19 03:03:49'),
(2, 'SOLEDAD', 'soledad@gmail.com', '4d186321c1a7f0f354b297e8914ab240', 'ADMINISTRADOR2', '2021-03-22 04:16:46'),
(3, 'juana', 'juana@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'SECRETARIA', '2021-03-22 04:17:28'),
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
-- Indices de la tabla `dpagos`
--
ALTER TABLE `dpagos`
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
-- Indices de la tabla `hpagos`
--
ALTER TABLE `hpagos`
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
-- Indices de la tabla `porton`
--
ALTER TABLE `porton`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `dpagos`
--
ALTER TABLE `dpagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `hpagos`
--
ALTER TABLE `hpagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `porton`
--
ALTER TABLE `porton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `tipogasto`
--
ALTER TABLE `tipogasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
