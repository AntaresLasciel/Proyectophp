-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 02:07:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_Cat` varchar(15) NOT NULL,
  `nombre_Cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Cat`, `nombre_Cat`) VALUES
('20', 'sellado'),
('30', 'abierto'),
('40', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cl` varchar(15) NOT NULL,
  `nombre_cl` varchar(30) NOT NULL,
  `apellido_cl` varchar(30) NOT NULL,
  `correo_cl` varchar(50) NOT NULL,
  `ciudad_cl` varchar(30) NOT NULL,
  `direccion_cl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cl`, `nombre_cl`, `apellido_cl`, `correo_cl`, `ciudad_cl`, `direccion_cl`) VALUES
('11111', 'jonathan', 'perez', 'jonathan@test.com', 'medellin', 'cl 42'),
('15667', 'angel', 'hidalgo', 'angelh@hddhdh-cm', 'madrid', 'cl 2'),
('33333', 'jesus', 'perez', 'hghghg@hdhdh.com', 'medellin', 'cl4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Num_Pedido` int(11) NOT NULL,
  `Id_cl` varchar(15) NOT NULL,
  `Id_Producto` varchar(15) NOT NULL,
  `Cantidad_del_Producto` int(11) NOT NULL,
  `Fecha_Ped` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Num_Pedido`, `Id_cl`, `Id_Producto`, `Cantidad_del_Producto`, `Fecha_Ped`) VALUES
(4, '11111', '200', 5, '2023-10-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` varchar(15) NOT NULL,
  `Id_TipoProduc` varchar(15) NOT NULL,
  `id_CAT` varchar(15) NOT NULL,
  `Nombre_Producto` varchar(30) NOT NULL,
  `Cantidad_Disponible` varchar(200) NOT NULL,
  `Foto_Producto` varchar(255) DEFAULT NULL,
  `Precio_Producto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `Id_TipoProduc`, `id_CAT`, `Nombre_Producto`, `Cantidad_Disponible`, `Foto_Producto`, `Precio_Producto`) VALUES
('200', '2', '30', 'Monopolio', '5', '/php/proyectophp/tienda/img/monopoly.jpg', '50000'),
('400', '1', '30', 'Booster Box Magic Eldrain', '40', '/php/proyectophp/tienda/img/boosterbox.jpg\r\n', '47000'),
('600', '1', '30', 'force of will', '2', '/php/proyectophp/tienda/img/forceofwill.jpg', '27000'),
('800', '1', '30', 'Avacyn angel of hope', '6', '/php/proyectophp/tienda/img/avacynangelofhope.jpg', '180000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeproductos`
--

CREATE TABLE `tiposdeproductos` (
  `Id_tipoProduc` varchar(15) NOT NULL,
  `tipo_Producto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposdeproductos`
--

INSERT INTO `tiposdeproductos` (`Id_tipoProduc`, `tipo_Producto`) VALUES
('1', 'carta coleccionable'),
('10', 'test'),
('2', 'juego de mesa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_Cat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cl`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Num_Pedido`),
  ADD KEY `Id_cl` (`Id_cl`,`Id_Producto`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Id_TipoProduc` (`Id_TipoProduc`,`id_CAT`),
  ADD KEY `id_CAT` (`id_CAT`);

--
-- Indices de la tabla `tiposdeproductos`
--
ALTER TABLE `tiposdeproductos`
  ADD PRIMARY KEY (`Id_tipoProduc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Num_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`Id_cl`) REFERENCES `clientes` (`id_cl`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_TipoProduc`) REFERENCES `tiposdeproductos` (`Id_tipoProduc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_CAT`) REFERENCES `categoria` (`id_Cat`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
