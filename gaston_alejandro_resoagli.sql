-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 01:52:01
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gaston_alejandro_resoagli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `email`, `mensaje`) VALUES
(1, 'gaston', 'gaston_resoagli@hotmail.com', 'Hola tienen gorras en stock?'),
(2, 'facundo', 'gastongunz@hotmail.com', 'buenas tardes tienen alguna remera de punisher en stock?'),
(3, 'sebastian', 'gaston_resoagli@icloud.com', 'buenas tienen gorras negras en stock?'),
(4, 'gaston', 'gaston_resoagli@icloud.com', 'hola hacen banderas por las dudas?'),
(5, 'gaston', 'gaston_resoagli@hotmail.com', 'hola tienen stock de remeras?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `Tipo` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` int(20) NOT NULL,
  `stock` int(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `eliminado` varchar(10) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `Tipo`, `descripcion`, `precio`, `stock`, `imagen`, `eliminado`) VALUES
(8, '', 1, 'Remera negra S', 100, 9, 'assets/img/productos/gg.jpg', 'NO'),
(9, '', 1, 'Remera negras', 100, 9, 'assets/img/productos/gg.jpg', 'SI'),
(10, '', 1, 'Remera negra L', 100, 8, 'assets/img/productos/gg.jpg', 'NO'),
(11, '', 1, 'Remera blanca M', 100, 3, 'assets/img/productos/ggg.jpg', 'NO'),
(12, '', 1, 'Remera roja XL', 200, 2, 'assets/img/productos/gg5.png', 'NO'),
(13, '', 2, 'gorra gris', 200, 5, 'assets/img/productos/gg24.jpg', 'NO'),
(19, '', 1, 'Remera Punisher L', 450, 7, 'assets/img/productos/punisher2.jpg', 'NO'),
(22, '', 2, 'Gorra adidas', 300, 5, 'assets/img/productos/gorra adidas.jpg', 'SI'),
(23, '', 2, 'Gorra adidas', 300, 7, 'assets/img/productos/gorra adidas.jpg', 'SI'),
(24, '', 2, 'Gorra adidas negra', 300, 7, 'assets/img/productos/gorra1.jpg', 'NO'),
(25, '', 2, 'Gorra Nike Sb Bordo', 300, 5, 'assets/img/productos/gorra2.jpg', 'NO'),
(26, '', 1, 'Remera batman L', 300, 4, 'assets/img/productos/remerabatman.png', 'NO'),
(28, '', 2, 'Gorra estampa', 300, 5, 'assets/img/productos/gorraestampada.jpg', 'NO'),
(29, '', 2, 'Gorra Jordan', 400, 2, 'assets/img/productos/jordan2.jpg', 'NO'),
(30, '', 2, 'Gorra Nike blaca', 300, 3, 'assets/img/productos/gorrablanca.jpg', 'NO'),
(32, '', 1, 'Remera negra pool', 200, 3, 'assets/img/productos/redpool.jpg', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Gaston', 'Resoagli', 'gaston_resoagli@hotmail.com', 'Koz', 'rumble123', 1, 'NO'),
(2, 'facundo', 'almaraz', 'gastongunz@hotmail.com', 'fnaz', 'rumble123', 2, 'NO'),
(3, 'franco', 'gomez', 'gaston_resoagli@icloud.com', 'frank', 'rumble123', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `id` int(10) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta_cabecera`
--

INSERT INTO `venta_cabecera` (`id`, `fecha`, `usuario_id`, `total_venta`) VALUES
(3, '2021-06-21', 1, 100.00),
(4, '2021-06-22', 2, 100.00),
(9, '2021-06-22', 2, 100.00),
(10, '2021-06-22', 2, 100.00),
(11, '2021-06-22', 2, 600.00),
(12, '2021-06-22', 2, 100.00),
(13, '2021-06-22', 2, 100.00),
(14, '2021-06-22', 2, 100.00),
(15, '2021-06-22', 2, 100.00),
(16, '2021-06-22', 2, 100.00),
(17, '2021-06-22', 2, 100.00),
(18, '2021-06-22', 2, 0.00),
(19, '2021-06-22', 2, 100.00),
(20, '2021-06-22', 2, 0.00),
(21, '2021-06-22', 2, 0.00),
(22, '2021-06-22', 2, 0.00),
(23, '2021-06-22', 2, 0.00),
(24, '2021-06-22', 2, 0.00),
(25, '2021-06-22', 2, 0.00),
(26, '2021-06-22', 2, 0.00),
(27, '2021-06-22', 2, 100.00),
(28, '2021-06-23', 2, 950.00),
(29, '2021-06-23', 2, 1050.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id` int(10) NOT NULL,
  `venta_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta_detalle`
--

INSERT INTO `venta_detalle` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(3, 15, 10, 1, 100.00, 100.00),
(4, 16, 10, 1, 100.00, 100.00),
(5, 17, 10, 1, 100.00, 100.00),
(6, 19, 11, 1, 100.00, 100.00),
(7, 27, 8, 1, 100.00, 100.00),
(8, 28, 10, 1, 100.00, 100.00),
(9, 28, 19, 1, 450.00, 450.00),
(10, 28, 29, 1, 400.00, 400.00),
(11, 29, 26, 1, 300.00, 300.00),
(12, 29, 19, 1, 450.00, 450.00),
(13, 29, 12, 1, 200.00, 200.00),
(14, 29, 11, 1, 100.00, 100.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_venta_cabecera_usuarioid` (`usuario_id`);

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `venta_id` (`venta_id`,`producto_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD CONSTRAINT `FK_venta_cabecera_usuarioid` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `venta_detalle_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `venta_detalle_ibfk_2` FOREIGN KEY (`venta_id`) REFERENCES `venta_cabecera` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
