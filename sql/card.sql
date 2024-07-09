-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2024 a las 04:56:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `card`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(10, 'Zapatillas para losa'),
(11, 'Zapatillas para gras natural'),
(12, 'Zapatillas para gras sintético'),
(13, 'Calcetines'),
(14, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_normal` decimal(10,2) NOT NULL,
  `precio_rebajado` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_normal`, `precio_rebajado`, `cantidad`, `imagen`, `id_categoria`) VALUES
(15, 'PIVOT 2.0 NEGRO/NARANJA ', 'Zapatillas de fútbol para Grass Sintético \r\nCuero natural combinado con textil', 210.99, 159.00, 30, '20240709041752.jpg', 12),
(17, 'Precisión PLUS doradas', 'Calidad en la casa - Más doradas que nunca', 215.99, 159.00, 30, '20240709042941.jpg', 10),
(18, 'Precisión PLUS doradas', 'Calidad en la casa - Más doradas que nunca', 218.99, 159.00, 30, '20240709043010.jpg', 12),
(19, 'Guia de tallas', 'Guía de tallas - Tener en cuenta antes de comprar un producto por favor', 10.00, 10.00, 1, '20240709043156.jpg', 14),
(20, 'PIVOT Azul Agua Marina', '*Elaborado en cuero suave Agua Marina \r\n*Laterales de textil para reducir el peso y aumentar la ventilación.\r\n*Con refuerzo de piel volteada en la puntera\r\n*Planta de caucho antideslizante con cocada y entresuela de eva\r\n*Lengüeta ergonómica ', 200.99, 159.00, 30, '20240709043507.jpg', 12),
(21, 'Pivot Blanco', '*Acabas de encontrar una zapatilla de cuero ideal para el regreso a clase\r\n*Elaborada de cuero real\r\n*Forro Textil\r\n*Planta de caucho con tecnología eva', 180.50, 149.00, 30, '20240709043637.jpg', 10),
(22, 'PIVOT ROJO ESCARLATA', 'Las PIVOT color ROJO ESCARLATA vuelven a las canchas de loza. Más renovadas mas livianas y más resistentes.', 180.99, 159.00, 30, '20240709043813.jpg', 10),
(23, 'PRECISIÓN PLUS', 'Nuestras zapatillas PRECISIÓN PLUS se visten de gala para acompañar a los hinchas de la selección.\r\nEn esta versión encontramos perforaciones en la capellada para mejorar la transpirabilidad. También, reducimos el peso incluyendo sintético en la parte del acolchado y la lengüeta.', 190.00, 149.00, 30, '20240709044001.jpg', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`) VALUES
(1, 'admin', 'Administrador', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
