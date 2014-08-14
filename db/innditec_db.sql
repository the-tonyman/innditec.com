-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2014 a las 00:02:26
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `innditec_db`
--
CREATE DATABASE IF NOT EXISTS `innditec_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `innditec_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocenos`
--

CREATE TABLE IF NOT EXISTS `conocenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ocupacion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `red_social` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `conocenos`
--

INSERT INTO `conocenos` (`id`, `imagen`, `nombre`, `ocupacion`, `red_social`, `descripcion`) VALUES
(1, 'imagenes/Chrysanthemum.jpg', 'Lorenzo Capuena Arirama', 'Desarrollador', 'facebook, Twiter', 'desarrollador en aplicacion web 2.0'),
(2, 'imagenes/adm.jpg', 'Erica Sandoval', 'DiseÃ±adora web', 'Facebook', 'Es una de la diseÃ±adoras mas destacamente en el mundo del diseÃ±o web, una de las mejores y pocas diseÃ±adporas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `novedadID` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaID` int(11) DEFAULT NULL,
  `novedad` varchar(100) DEFAULT NULL,
  `detalle` text,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`novedadID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades_categorias`
--

CREATE TABLE IF NOT EXISTS `novedades_categorias` (
  `categoriaID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`categoriaID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `novedades_categorias`
--

INSERT INTO `novedades_categorias` (`categoriaID`, `categoria`) VALUES
(1, 'qui dolorem ipsum quia dolor sit'),
(2, 'The three Cs - customers, competi'),
(3, 'exploitation of core compe'),
(4, 'Sed ut perspiciatis unde omnis Q'),
(5, 'taking full cogn'),
(6, 'Let me not to the marriag'),
(7, 'to ensure that non-operating cas'),
(8, 'defensive reasoning, the doom '),
(9, 'Within his bending sickl'),
(10, 'building flexibility ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `productoID` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaID` int(11) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `detalle_home` varchar(200) DEFAULT NULL,
  `detalle_interior` text,
  `foto_home` varchar(100) DEFAULT NULL,
  `foto_listado` varchar(100) DEFAULT NULL,
  `foto_interior` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `destacado` char(1) DEFAULT '0',
  PRIMARY KEY (`productoID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE IF NOT EXISTS `productos_categorias` (
  `categoriaID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(200) DEFAULT NULL,
  `visible` char(1) DEFAULT '0',
  PRIMARY KEY (`categoriaID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos_categorias`
--

INSERT INTO `productos_categorias` (`categoriaID`, `categoria`, `visible`) VALUES
(1, 'categoría 1', '0'),
(2, 'categoría 2', '1'),
(3, 'categoría 3', '0'),
(4, 'categoría 4', '1'),
(5, 'categoría 5', '0'),
(6, 'categoría 6', '0'),
(7, 'categoría 7', '1'),
(8, 'categoría 8', '0'),
(9, 'categoría 9', '1'),
(10, 'categoría 10', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `proyectoID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(100) DEFAULT NULL,
  `img_proyecto` varchar(100) DEFAULT NULL,
  `descrip_proyecto` varchar(200) DEFAULT NULL,
  `descrip_proyecto_portada` varchar(200) DEFAULT NULL,
  `url_proyecto` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`proyectoID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`proyectoID`, `nombre_proyecto`, `img_proyecto`, `descrip_proyecto`, `descrip_proyecto_portada`, `url_proyecto`, `estado`) VALUES
(1, 'Meduca.com', 'img_proyectos/Lighthouse.jpg', 'soluciÃ³n', 'Nos pueden ubicar en nuestro sitio web y al movil ', 'www.medusa.com', 'ready'),
(2, 'Meduca.com', 'img_proyectos/311729_197707603642621_343561664_n.jpg', 'ola', 'Nos pueden ubicar en nuestro sitio web y al movil ', 'www.medusa.com', 'ready'),
(35, 'ejemplo2', 'img_proyectos/Hydrangeas.jpg', 'reosa jhnmn', 'ejemlklÃ±k', 'www.jklj.com', NULL),
(36, 'ctm', 'img_proyectos/adm.jpg', 'hjkhjhj dasdas', 'klklj jklj lkjlk j', 'wwkjmn', NULL),
(3, 'Meduca.com', 'img_proyectos/311729_197707603642621_343561664_n.jpg', 'ola', 'Nos pueden ubicar en nuestro sitio web y al movil ', 'www.medusa.com', 'ready'),
(4, 'Meduca.com', 'img_proyectos/311729_197707603642621_343561664_n.jpg', 'ola', 'Nos pueden ubicar en nuestro sitio web y al movil ', 'www.medusa.com', 'ready'),
(34, 'otro ejemplo', 'img_proyectos/Tulips.jpg', 'flor ctm', 'flor cagada', 'www.ejemplo.com', NULL),
(31, 'Meduca.com', 'img_proyectos/311729_197707603642621_343561664_n.jpg', 'ola', 'Nos pueden ubicar en nuestro sitio web y al movil ', 'www.medusa.com', NULL),
(30, 'Pinguino.com', 'img_proyectos/Penguins.jpg', 'Ola soy el pinguino la cagada', 'Nos pueden ubicar en nuestro sitio web y al movil', 'www.pinguino.com', NULL),
(32, 'Faro', 'img_proyectos/Lighthouse.jpg', 'es el faro ctm', 'faro ctv', 'www.faro.com', NULL),
(33, 'ejemplo', 'img_proyectos/Chrysanthemum.jpg', 'rosa ctn', 'ctv cagada', 'www.rosa.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `slideID` int(11) NOT NULL AUTO_INCREMENT,
  `img_slide` varchar(100) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `visible` char(1) DEFAULT NULL,
  PRIMARY KEY (`slideID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `slideshow`
--

INSERT INTO `slideshow` (`slideID`, `img_slide`, `caption`, `visible`) VALUES
(1, 'soporte-tecnico-innditec.com.jpg', 'La solucion a los problemas con sus equipos de cómputo', '1'),
(2, 'diseno-grafico-iquitos-innditec.jpg', 'Logotipos, tarjetas de presentacion y mucho mas a su disposición', '1'),
(3, 'desarrollo-web-iquitos-innditec.jpg', 'Lo mejor de la tecnologia web a su alcance ahora en Iquitos', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE IF NOT EXISTS `testimonios` (
  `testimonioID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `testimonio` varchar(200) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `visible` char(1) DEFAULT '0',
  PRIMARY KEY (`testimonioID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1006 ;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`testimonioID`, `testimonio`, `autor`, `visible`) VALUES
(1, 'Lorem ipsum dolor sit amet, in reprehenderit in voluptate ut enim ad minim veniam. Quis nostrud exercitation ut aliquip ex ea commodo consequat. ', 'Nombre Apellido, CEO Empresa1', '1'),
(2, 'Ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, in reprehenderit in voluptate eu fugiat nulla pariatur. ', 'Nombre Apellido, CTO Empresa 2', '1'),
(3, 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut enim ad minim veniam. Cupidatat non proident, lorem ipsum dolor sit amet, ullamco laboris nisi. ', 'Apodo', '0'),
(4, 'Cupidatat non proident, lorem ipsum dolor sit amet, ullamco laboris nisi. Sunt in culpa ut labore et dolore magna aliqua. ', 'Nombre "Apodo" Apellido, Developer', '0'),
(6, 'Morbi quis augue a justo tincidunt fermentum. Fusce tincidunt ante non nunc fermentum id malesuada leo consectetur. Maecenas et vehicula nisi? Quisque scelerisque sapien vitae mauris tristique element', 'Alejandro', '0'),
(7, 'Duis lorem neque, sollicitudin et sodales sit amet, consequat ac augue. Fusce euismod turpis vitae lacus tincidunt eget aliquam mauris placerat. Integer et tellus non magna eleifend fermentum. Nunc la', 'Alejandro Magno', '0'),
(8, 'Mauris mollis sodales arcu, eu dapibus augue porttitor at. Aliquam tortor felis, faucibus vitae rutrum ac, lacinia sit amet dui. Suspendisse augue risus, congue eu accumsan eget, convallis bibendum di', 'Video2Brain', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `privilegios` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT 'Administrador',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `imagen`, `nombre`, `apellido`, `usuario`, `password`, `privilegios`) VALUES
(1, 'imagenes/Mirlita.jpg', 'Lorenzo', 'capuena arirama', 'lorcap', 'd1b21b982a4a6d590dda32697045525a', 'Administrador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
