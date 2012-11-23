-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2012 a las 04:02:29
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `claro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '0' COMMENT 'pagado o no pagado',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `usuario`, `fecha`, `total`, `estado`) VALUES
(1, 1140820188, '2012-10-24 03:58:35', 120000, 0),
(2, 1234567890, '2012-11-05 03:21:08', 1500000, 0),
(3, 1140820188, '2012-11-05 22:45:46', 395000, 0),
(4, 1547522200, '2012-11-08 19:12:59', 475000, 0),
(5, 1547522200, '2012-11-08 19:25:14', 480000, 1),
(6, 1458552458, '2012-11-09 23:48:47', 740000, 0),
(7, 0, '2012-11-16 00:43:57', 40000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `paquete` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  KEY `paquete` (`paquete`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id`, `usuario`, `paquete`, `precio`, `fecha`, `estado`) VALUES
(1, 1140820188, 1, 40000, '2012-11-09 03:19:06', 1),
(2, 1140820188, 2, 80000, '2012-11-09 03:19:50', 1),
(3, 1140820188, 7, 220000, '2012-11-05 22:45:47', 0),
(4, 1140820188, 3, 95000, '2012-11-05 22:45:47', 0),
(5, 1547522200, 2, 80000, '2012-11-08 19:13:00', 0),
(6, 1547522200, 5, 150000, '2012-11-08 19:13:00', 0),
(7, 1547522200, 5, 150000, '2012-11-08 19:13:00', 0),
(8, 1547522200, 3, 95000, '2012-11-08 19:13:00', 0),
(9, 1458552458, 2, 80000, '2012-11-09 23:48:47', 0),
(10, 1458552458, 7, 220000, '2012-11-09 23:48:47', 0),
(11, 1458552458, 1, 40000, '2012-11-16 00:53:54', 1),
(12, 1234567890, 2, 80000, '2012-11-08 18:47:02', 1),
(13, 1234567890, 7, 220000, '2012-11-08 18:47:05', 1),
(14, 1234567890, 3, 95000, '2012-11-08 18:47:09', 1),
(15, 1234567890, 4, 120000, '2012-11-08 18:47:13', 1),
(16, 1547522200, 2, 80000, '2012-11-09 03:20:00', 1),
(17, 1547522200, 6, 180000, '2012-11-08 19:24:59', 0),
(18, 1547522200, 7, 220000, '2012-11-08 19:24:59', 0),
(19, 1458552458, 7, 220000, '2012-11-09 23:48:47', 0),
(20, 1458552458, 6, 180000, '2012-11-09 23:48:47', 0),
(21, 1458552458, 2, 80000, '2012-11-12 22:59:51', 1),
(22, 0, 2, 80000, '2012-11-16 00:42:42', 0),
(23, 0, 1, 40000, '2012-11-16 00:43:57', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_compra`
--

CREATE TABLE IF NOT EXISTS `detalles_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compra` int(11) NOT NULL,
  `paquete` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`compra`),
  KEY `paquetes` (`paquete`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `detalles_compra`
--

INSERT INTO `detalles_compra` (`id`, `compra`, `paquete`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 2),
(4, 3, 7),
(5, 3, 3),
(6, 4, 2),
(7, 4, 5),
(8, 4, 5),
(9, 4, 3),
(10, 5, 2),
(11, 5, 6),
(12, 5, 7),
(13, 6, 2),
(14, 6, 7),
(15, 6, 1),
(16, 6, 7),
(17, 6, 6),
(18, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_factura`
--

CREATE TABLE IF NOT EXISTS `detalles_factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factura` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `factura` (`factura`),
  KEY `compra` (`compra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `detalles_factura`
--

INSERT INTO `detalles_factura` (`id`, `factura`, `compra`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 4),
(5, 4, 2),
(6, 5, 5),
(7, 6, 6),
(8, 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL COMMENT 'nit de la empresa',
  `nombre` varchar(255) NOT NULL,
  `representante` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `ubicacion` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ubicacion` (`ubicacion`),
  KEY `ususario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `representante`, `direccion`, `correo`, `ubicacion`, `usuario`) VALUES
(45488451, 'Sileco', 'Brayan Torne', 'calle 74 - 1 # 70 - 14', 'sileco@gmail.com', 14, 1458552458);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `usuario`, `fecha`) VALUES
(1, 1140820188, '2012-10-24 03:58:35'),
(2, 1140820188, '2012-11-05 22:45:47'),
(3, 1547522200, '2012-11-08 19:13:00'),
(4, 1234567890, '2012-11-08 19:15:12'),
(5, 1547522200, '2012-11-08 19:24:59'),
(6, 1458552458, '2012-11-09 23:48:47'),
(7, 0, '2012-11-16 00:43:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `estado`) VALUES
(1, 'Argentina', 1),
(2, 'Brasil', 1),
(3, 'Peru', 1),
(4, 'Chile', 1),
(5, 'Guatemala', 1),
(6, 'Paraguay', 1),
(7, 'Puerto Rico', 1),
(8, 'Republica Dominicana', 1),
(9, 'Uruguay', 1),
(10, ' El Salvador', 1),
(11, 'Honduras', 1),
(12, 'Nicaragua', 1),
(13, 'Colombia', 1),
(14, 'Costa Rica', 1),
(15, 'Ecuador', 1),
(16, 'Panama', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `precio`, `estado`) VALUES
(1, 'Personal', 40000, 1),
(2, 'Basico', 80000, 1),
(3, 'Premium', 95000, 1),
(4, 'Gold', 120000, 1),
(5, 'Profesional', 150000, 1),
(6, 'Empresarial', 180000, 1),
(7, 'Xtreme', 220000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes_servicios`
--

CREATE TABLE IF NOT EXISTS `paquetes_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paquete` int(11) NOT NULL,
  `servicio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paquete` (`paquete`),
  KEY `servicio` (`servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `paquetes_servicios`
--

INSERT INTO `paquetes_servicios` (`id`, `paquete`, `servicio`) VALUES
(1, 1, 1),
(2, 1, 5),
(3, 2, 1),
(4, 2, 5),
(5, 2, 15),
(6, 3, 1),
(7, 3, 7),
(8, 3, 15),
(9, 4, 1),
(10, 4, 6),
(11, 4, 18),
(12, 5, 2),
(13, 5, 5),
(14, 5, 16),
(15, 5, 20),
(16, 6, 3),
(17, 6, 13),
(18, 6, 16),
(19, 6, 22),
(20, 7, 4),
(21, 7, 8),
(22, 7, 14),
(23, 7, 23),
(24, 7, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL COMMENT 'cedula de la persona',
  `nombre` varchar(255) NOT NULL,
  `nombre2` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) NOT NULL,
  `apellido2` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ubicacion` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `direccion` (`direccion`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `nombre_2` (`nombre`,`apellido`,`apellido2`),
  UNIQUE KEY `nombre` (`nombre`,`nombre2`,`apellido`,`apellido2`),
  KEY `ubicacion` (`ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `nombre2`, `apellido`, `apellido2`, `correo`, `direccion`, `ubicacion`, `usuario`) VALUES
(1140820188, 'Jonathan', NULL, 'Olier', 'Miranda', 'djom202@gmail.com', 'calle 74 - 1 # 70 - 14', 13, 1140820188),
(1234567890, 'Sharon', '', 'Olier', 'Miranda', 'sharon@gmail.com', 'Calle 74-1 # 70 - 14 - 6', 13, 1234567890),
(1458552458, 'Yaledys', 'Paola', 'Machacon', 'Garces', 'yaledyspaola@gmail.com', 'calle 74 - 1 # 70 - 14 - 2', 13, 1458552458),
(1547522200, 'Claudia', '', 'Manotas', 'Santrich', 'clau@gmail.com', 'Calle 74-1 # 70 - 14 - 10', 13, 1547522200),
(1547625435, 'Norman', 'de jesus', 'Henriquez', 'Rosales', 'nor_man89@hotmail.com', 'Calle 74-1 # 70 - 14 - 3', 13, 1547625435),
(1548847878, 'Brayan', 'Rafael', 'Torne', 'Barraza', 'bratus@gmail.com', 'Calle 74-1 # 70 - 14 - 4', 13, 1548847878),
(2147483647, 'Katina', 'Miranda', 'Charris', 'Garces', 'katina@gmail.com', 'Calle 74-1 # 70 - 14 - 8', 13, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `precio`, `estado`) VALUES
(1, 'telefonia movil (prepago)', '40 min', 15000, 1),
(2, 'telefonia movil (postpago)', '80 min', 60000, 1),
(3, 'telefonia movil (postpago) 2', '120 min', 90000, 1),
(4, 'telefonia movil (postpago) 3', '180 min', 135000, 1),
(5, 'internet movil (prepago)', '1MB', 150000, 1),
(6, 'internet movil (prepago) 2', '2 MB', 160000, 1),
(7, 'internet movil (postpago)', '1 MB', 60000, 1),
(8, 'internet movil (postpago) 2', '2 MB', 80000, 1),
(9, 'internet banda ancha (personal)', '2 MB', 45000, 1),
(10, 'internet banda ancha (personal) 2', '4 MB', 70000, 1),
(11, 'internet banda ancha (personal) 3', '8 MB', 120000, 1),
(12, 'internet banda ancha (empresarial)', '1 GB', 250000, 1),
(13, 'internet banda ancha (empresarial) 2', '2 GB', 450000, 1),
(14, 'internet banda ancha (empresarial) 3', '4 GB', 800000, 1),
(15, 'television (personal)', 'digital', 60000, 1),
(16, 'television (personal) 2', 'digital avanzada', 95000, 1),
(17, 'television (personal) 3', 'Full HD', 130000, 1),
(18, 'telefonia fija (personal)', '150 min', 25000, 1),
(19, 'telefonia fija (personal) 2', '500 min', 40000, 1),
(20, 'telefonia fija (personal) 3', 'ilimitado', 85000, 1),
(21, 'telefonia fija (empresarial)', '450 min', 150000, 1),
(22, 'telefonia fija (empresarial) 2', '900 min', 180000, 1),
(23, 'telefonia fija (empresarial) 3', 'ilimitado', 220000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `online` int(11) NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tipo` (`tipo`),
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `ip`, `tipo`, `online`, `estado`) VALUES
(0, 'milfranb', '5ae36aef046ed7471835d5816558e6a2', '127.0.0.1', 2, 0, 1),
(1, 'unregistered1', NULL, '127.0.0.1', 1, 0, 1),
(2, 'unregistered2', NULL, '127.0.0.1', 1, 0, 0),
(3, 'unregistered3', NULL, '127.0.0.1', 1, 0, 0),
(4, 'unregistered4', NULL, '127.0.0.1', 1, 0, 0),
(5, 'unregistered5', NULL, '127.0.0.1', 1, 0, 0),
(6, 'unregistered6', NULL, '127.0.0.1', 1, 0, 0),
(7, 'unregistered7', NULL, '127.0.0.1', 1, 0, 0),
(8, 'unregistered8', NULL, '127.0.0.1', 1, 0, 0),
(9, 'unregistered9', NULL, '127.0.0.1', 1, 0, 0),
(10, 'unregistered10', NULL, '127.0.0.1', 1, 1, 0),
(11, 'unregistered11', NULL, '127.0.0.1', 1, 0, 1),
(1140820188, 'djom20', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 3, 1, 1),
(1234567890, 'sharon', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 2, 0, 1),
(1234567899, 'sharo2', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 2, 0, 0),
(1458552458, 'yale', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 2, 0, 1),
(1547522200, 'claudia1', '46c0b823fc72c86211b6ebf887ab4b63', '127.0.0.1', 2, 0, 1),
(1547625435, 'norman', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 3, 0, 1),
(1548847878, 'bratus', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 2, 0, 0),
(2147483647, 'kata12', '8fea77c48649b2556953f461781295e8', '', 2, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_tipo`
--

CREATE TABLE IF NOT EXISTS `usuarios_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios_tipo`
--

INSERT INTO `usuarios_tipo` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'visitante', NULL, 0),
(2, 'registrado', NULL, 1),
(3, 'administrador', NULL, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `cotizaciones_ibfk_2` FOREIGN KEY (`paquete`) REFERENCES `paquetes` (`id`);

--
-- Filtros para la tabla `detalles_compra`
--
ALTER TABLE `detalles_compra`
  ADD CONSTRAINT `detalles_compra_ibfk_1` FOREIGN KEY (`compra`) REFERENCES `compras` (`id`),
  ADD CONSTRAINT `detalles_compra_ibfk_2` FOREIGN KEY (`paquete`) REFERENCES `paquetes` (`id`);

--
-- Filtros para la tabla `detalles_factura`
--
ALTER TABLE `detalles_factura`
  ADD CONSTRAINT `detalles_factura_ibfk_1` FOREIGN KEY (`factura`) REFERENCES `facturas` (`id`),
  ADD CONSTRAINT `detalles_factura_ibfk_2` FOREIGN KEY (`compra`) REFERENCES `compras` (`id`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`ubicacion`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_4` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `paquetes_servicios`
--
ALTER TABLE `paquetes_servicios`
  ADD CONSTRAINT `paquetes_servicios_ibfk_1` FOREIGN KEY (`paquete`) REFERENCES `paquetes` (`id`),
  ADD CONSTRAINT `paquetes_servicios_ibfk_2` FOREIGN KEY (`servicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`ubicacion`) REFERENCES `paises` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `usuarios_tipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
