-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 02:40:39
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `cod_item` int(10) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `cod_item` int(10) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `nropag` int(10) DEFAULT NULL,
  `idioma` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `document`
--

INSERT INTO `document` (`cod_item`, `titulo`, `nropag`, `idioma`) VALUES
(1, 'RASGA CORAZON', 23, 'espaniol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento`
--

CREATE TABLE IF NOT EXISTS `elemento` (
  `cod_item` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `elemento`
--

INSERT INTO `elemento` (`cod_item`, `fecha_ingreso`) VALUES
(1, '2019-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libreto`
--

CREATE TABLE IF NOT EXISTS `libreto` (
  `cod_item` int(10) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libreto`
--

INSERT INTO `libreto` (`cod_item`, `fecha_creacion`, `tipo`) VALUES
(1, '2012-10-12', 'drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `cod_item` int(10) NOT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `editorial` varchar(20) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE IF NOT EXISTS `multimedia` (
  `cod_item` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `duracion` time DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE IF NOT EXISTS `revista` (
  `cod_item` int(10) NOT NULL,
  `editorial` varchar(20) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `password`) VALUES
(1, 'admin', 'test', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `cod_item` int(10) NOT NULL,
  `locacion` varchar(20) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`cod_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `multimedia` (`cod_item`);

--
-- Filtros para la tabla `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `elemento` (`cod_item`);

--
-- Filtros para la tabla `libreto`
--
ALTER TABLE `libreto`
  ADD CONSTRAINT `libreto_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `document` (`cod_item`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `document` (`cod_item`);

--
-- Filtros para la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD CONSTRAINT `multimedia_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `elemento` (`cod_item`);

--
-- Filtros para la tabla `revista`
--
ALTER TABLE `revista`
  ADD CONSTRAINT `revista_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `document` (`cod_item`);

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`cod_item`) REFERENCES `multimedia` (`cod_item`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
