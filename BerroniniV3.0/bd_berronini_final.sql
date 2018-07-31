-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2017 a las 15:26:06
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_berronini_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `nombre`) VALUES
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(18, 'Captura de pantalla (1).png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iva`
--

CREATE TABLE `iva` (
  `VALOR` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iva`
--

INSERT INTO `iva` (`VALOR`) VALUES
(0.14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoproducto`
--

CREATE TABLE `pedidoproducto` (
  `idpedido` int(11) NOT NULL,
  `idproducto` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidoproducto`
--

INSERT INTO `pedidoproducto` (`idpedido`, `idproducto`, `cantidad`) VALUES
(1, 'V03', 5),
(2, 'Q02', 2),
(3, 'Q02', 1),
(4, 'Q02', 5),
(4, 'Q01', 1),
(4, 'V01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `estado` varchar(12) NOT NULL,
  `valortotal` float NOT NULL,
  `cedula` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `fecha`, `estado`, `valortotal`, `cedula`) VALUES
(1, '2017-01-29 00:00:00', 'PENDIENTE', 100, '1401163108'),
(2, '01/30/2017 11:58:32', 'PENDIENTE', 4, '1600538662'),
(3, '01/30/2017 12:36:09', 'PENDIENTE', 2, '1600211583'),
(4, '01/30/2017 02:04:24', 'PENDIENTE', 16.5, '1600211583');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `capacidadprod` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `foto` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `descripcion`, `precio`, `capacidadprod`, `tipo`, `foto`) VALUES
('Q01', 'Queso Sopero', 'Queso semimaduro, sal media, para sopas', 1.5, 100, 'Queso', 'queso_sopa.png'),
('Q02', 'Quesillo', 'Queso semimadura, bajo en sal, bajo en grasa', 2, 150, 'Queso', 'quesillo.jpg'),
('Q03', 'Queso Libreado', 'Queso semimaduro, sal media, para venta por libras', 3, 50, 'Queso', 'queso_libreado.jpg'),
('Y01', 'Yogurt de Mora', 'Yogurt artificial de mora en presentacion de 1 ltr', 2.5, 40, 'Yogurt', 'yogurt_mora.png'),
('Y02', 'Yogurt de Fresa', 'Yogurt artificial de fresa en presentacion de 1ltr', 2.5, 50, 'Yogurt', 'yogurt_frutilla.png'),
('V01', 'Suero', 'Suero fresco para uso industrial o alimenticio en presentacion de galones', 5, 1000, 'Varios', 'suero.png'),
('V02', 'Requeson', 'Requeson procesado del suero lacteo con altos contenidos nutricionales', 1.8, 100, 'Varios', 'requeson.jpg'),
('V03', 'Manjar', 'Manjar de leche  en presentaciones de 500 gramos', 2.5, 40, 'Varios', 'manjar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idpublic` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` longtext NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idpublic`, `titulo`, `fecha`, `descripcion`, `foto`) VALUES
(1, 'Propiedades Nutritivas del Queso', '2017-01-29', 'Los quesos son los lácteos más deliciosos, pero es un alimento con muchas calorías.Además contiene grasas saturadas, porque es un derivado de origen animal, así que si quieres cuidar tu dieta debes consumir los de bajas calorías y tenor graso.\r\n\r\nAdemás de calorías, el queso contiene los siguientes nutrientes:\r\n\r\n    Aporta vitaminas A, D, B12 y B2, que protegen de las infecciones, cuidan la piel, mejoran la cicatrización y favorecen el buen funcionamiento del sistema nervioso y cardiovascular.\r\n    Contiene proteínas de buena calidad, al igual que las carnes rojas, que ayudan a formar, reparar y mantener los tejidos del cuerpo.\r\n    Es rico en calcio y fósforo, que ayudan a la formación y cremiento de los huesos. Una porción de 100 gramos de queso equivale a un aporte de 1000 mg de calcio, más que suficiente para el requerimiento diario de este mineral.\r\n\r\nLa porción recomendada de queso al día es de 30 gramos, además de 1 vaso de leche o yogur desnatado. Los niños y adolescentes pueden consumir hasta una porción de 40 gramos de queso al día.', 'propiedadesdelqueso.jpeg'),
(2, 'Pizza de queso fresco ', '2017-01-29', 'Ingredientes\r\n\r\n    1 masa de pizza\r\n    200 gr salsa de tomate frito\r\n    100 gr queso fresco\r\n    4 anchoas\r\n    4 hojas albahaca fresca\r\n    60 gr queso Parmesano en polvos\r\n    100 gr queso Emmental rallado\r\n\r\nPasos\r\n\r\nPre-calentar el horno según fabricante.poner la masa sobre papel de hornear y untarla con la salsa de tomate.\r\nCortar el queso y distribuirlo por la pizza.\r\nPoner las anchoas.\r\nCortar la albahaca. Distribuirla por la pizza y cubrir, primero con el Parmesano, y luego, con el Emmental.\r\nHornear.\r\n', 'pizzadequesofresco.jpg'),
(3, 'sssssssss', '2017-01-30', 'sss', '12.png'),
(4, 'gilson', '2017-01-30', 'sssssssssssssssssssssss', 'web.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE `usuariorol` (
  `cedula` varchar(10) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariorol`
--

INSERT INTO `usuariorol` (`cedula`, `rol`) VALUES
('1401163108', 'cliente'),
('1600211583', 'administrador'),
('1600211583', 'cliente'),
('1600538662', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `cedula`, `ciudad`, `direccion`, `telefono`, `correo`, `password`, `foto`) VALUES
('Germxn Grx', '1600211583', 'Ambato', '4525 North Oracle Rd.', '055563258', 'germxn@gmail.com', 'germxn123', '992767_gleam.png'),
('German Francisco Ramos', '1600538662', 'Riobamba', 'Cdla. Juan Montalvo', '998418283', 'germxn1@gmail.com', 'Supermann18', 'default.png'),
('Gilson Quito', '1401163108', 'Macas', 'Sector la Politecnica', '0999999999', 'quitogilsoneduardo@hotmail.com', 'gilson1234', 'gilson.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD PRIMARY KEY (`idpedido`,`idproducto`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idpedido` (`idpedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idpublic`);

--
-- Indices de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD PRIMARY KEY (`cedula`,`rol`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idpublic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
