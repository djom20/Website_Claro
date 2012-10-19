-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2012 a las 05:25:55
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
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `pcomprar` int(11) NOT NULL COMMENT 'posible compra',
  `paquete_servicio` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  KEY `paquete_servicio` (`paquete_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `ususario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ubicacion` (`ubicacion`),
  KEY `ususario` (`ususario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descricion` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `descricion`, `precio`) VALUES
(1, '', '40 min', 15000),
(2, '', '80 min', 60000),
(3, '', '120 min', 90000),
(4, '', '180 min', 135000),
(5, '', '1 MB', 150000),
(6, '', '2 MB', 160000),
(7, '', '1 MB', 60000),
(8, '', '2 MB', 80000),
(9, '', '2 MB', 45000),
(10, '', '4 MB', 70000),
(11, '', '8 MB', 120000),
(12, '', '1 GB', 250000),
(13, '', '2 GB', 450000),
(14, '', '4 GB', 800000),
(15, '', 'Digital', 60000),
(16, '', 'Digital Avanzada', 95000),
(17, '', 'Full HD', 160000),
(18, '', '150 min', 25000),
(19, '', '500 min', 40000),
(20, '', 'Ilimitado', 85000),
(21, '', '450 min', 150000),
(22, '', '900 min', 180000),
(23, '', 'Ilimitado', 120000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `paquetes_servicios`
--

INSERT INTO `paquetes_servicios` (`id`, `paquete`, `servicio`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 4),
(8, 8, 4),
(9, 9, 5),
(10, 10, 5),
(11, 11, 5),
(12, 12, 6),
(13, 13, 6),
(14, 14, 6),
(15, 15, 7),
(16, 16, 7),
(17, 17, 7),
(18, 18, 8),
(19, 19, 8),
(20, 20, 8),
(21, 21, 9),
(22, 22, 9),
(23, 23, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasies`
--

CREATE TABLE IF NOT EXISTS `pasies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `pasies`
--

INSERT INTO `pasies` (`id`, `nombre`, `estado`) VALUES
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
(1254854795, 'Yaledys', 'Paola', 'Machacon', 'Garces', 'yaledyspaola@gmail.com', 'calle 74 - 1 # 70 - 14 - 2', 13, 1458552458),
(1547625435, 'Norman', 'de jesus', 'Henriquez', 'Rosales', 'nor_man89@hotmail.com', 'Calle 74-1 # 70 - 14 - 3', 13, 1547625435),
(1548847878, 'Brayan', 'Rafael', 'Torne', 'Barraza', 'bratus@gmail.com', 'Calle 74-1 # 70 - 14 - 4', 13, 1548847878);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `estado`) VALUES
(1, 'telefonia movil (prepago)', 1),
(2, 'telefonia movil (postpago)', 1),
(3, 'internet movil (prepago)', 1),
(4, 'internet movil (postpago)', 1),
(5, 'internet banda ancha (personal)', 1),
(6, 'internet banda ancha (empresarial)', 1),
(7, 'television (personal)', 1),
(8, 'telefonia fija (personal)', 1),
(9, 'telefonia fija (empresarial)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `online` int(11) NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `tipo`, `online`, `estado`) VALUES
(1140820188, 'djom20', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(1234567890, 'sharon', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(1234567899, 'sharo2', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(1458552458, 'yale', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(1547625435, 'norman', 'e10adc3949ba59abbe56e057f20f883e', 3, 0, 1),
(1548847878, 'bratus', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1);

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
(1, 'visitante', NULL, 1),
(2, 'registrado', NULL, 1),
(3, 'administrador', NULL, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `cotizaciones_ibfk_2` FOREIGN KEY (`paquete_servicio`) REFERENCES `paquetes_servicios` (`id`);

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
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`ubicacion`) REFERENCES `pasies` (`id`),
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`ususario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_4` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `paquetes_servicios`
--
ALTER TABLE `paquetes_servicios`
  ADD CONSTRAINT `paquetes_servicios_ibfk_2` FOREIGN KEY (`paquete`) REFERENCES `paquetes` (`id`),
  ADD CONSTRAINT `paquetes_servicios_ibfk_3` FOREIGN KEY (`servicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`ubicacion`) REFERENCES `pasies` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `usuarios_tipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
