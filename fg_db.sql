-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 03:40:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fg_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `idCatPadre` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `idCatPadre`, `nombre`) VALUES
(1, NULL, 'Hombre'),
(2, NULL, 'Niños'),
(3, NULL, 'Mujer'),
(4, 1, 'Bermudas hombre'),
(5, 1, 'Chaquetas hombre'),
(6, 1, 'Remeras hombre'),
(7, 2, 'Camperas niños'),
(8, 2, 'Faldas niños'),
(9, 2, 'Pijamas niños'),
(10, 3, 'Abrigos mujer'),
(11, 3, 'Faldas mujer'),
(12, 3, 'Remeras mujer'),
(13, 3, 'Vestidos mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `idPerfil` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`idPerfil`, `descripcion`) VALUES
(1, 'Admin'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `idPrenda` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(200) NOT NULL,
  `idColor` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`idPrenda`, `idCategoria`, `descripcion`, `precio`, `img`, `idColor`) VALUES
(1, 4, 'Bermuda de verano azul', 1299, 'bermudaazul1.jpg', '#1700c7'),
(2, 4, 'Bermuda de verano rayada', 1800, 'bermudarayada1.jpg', '#c2c2c2'),
(5, 6, 'Remera basica', 1400, 'remeranegra1.jpg', '#000000'),
(6, 6, 'Remera basica', 1400, 'remeraazul1.jpg', '#0c136e'),
(8, 7, 'Campera \"pink\" niña', 5599, 'camperaniña1.jpg', '#ffe5e5'),
(9, 7, 'Chaleco \"dots\" niña', 4500, 'chaleconiña.jpg', '#ffffff'),
(10, 8, 'Falda jean niña', 3000, 'faldadenimkids1.jpg', '#6877b1'),
(11, 8, 'Falda jean blanca', 3100, 'faldakids1.jpg', '#ffffff'),
(12, 8, 'Falda cuero', 4000, 'faldakidscuero1.jpg', '#000000'),
(13, 8, 'Falda cuero con accesorios', 4200, 'faldakidscuero2.jpg', '#000000'),
(14, 9, 'Pijama de algodon', 1250, 'pijamaalgodon1.jpg', '#2c3fa0'),
(16, 9, 'Pijama celeste', 1200, 'pijamaceleste1.jpg', '#ccfff7'),
(17, 9, 'Pijama de lunares', 1200, 'pijamalunares1.jpg', '#f2f2f2'),
(18, 10, 'Abrigo \"winter\"', 8000, 'abrigo1.jpg', '#c8a892'),
(19, 11, 'Falda jean negro', 4500, 'falda-jean-negro.jpg', '#000000'),
(20, 11, 'Falda de cuero negra', 5000, 'faldacuero1.jpg', '#000000'),
(21, 11, 'Falda denim negra', 4600, 'faldadenim1.jpg', '#000000'),
(22, 11, 'Falda de jean', 3900, 'falda1.jpg', '#d1f0ff'),
(23, 11, 'Mini falda de cuero', 4300, 'minifalda1.jpg', '#000000'),
(24, 12, 'Remera blanca', 1300, 'remerablanca1.jpg', '#ffffff'),
(25, 12, 'Top crochet', 1600, 'topcrochet1.jpg', '#912222'),
(26, 12, 'Top marron', 1600, 'topmarron1.jpg', '#ac6c2f'),
(27, 13, 'Vestido negro floreado', 7500, 'vestidonegro.jpg', '#262626'),
(29, 13, 'Vestido rosa ', 7300, 'vestido-rosa1.jpg', '#df9090'),
(30, 13, 'Vestido de jean', 7700, 'women-jean1.jpg', '#90a8d5'),
(31, 5, 'Chaqueta \"dirt\"', 8000, 'chaquetamarron1.jpg', '#ae8132'),
(33, 4, 'Bermuda de verano gris', 1200, 'bermudagris1.jpg', '#bfbfbf'),
(34, 6, 'Remera basica', 1400, 'remeragris1.jpg', '#c2c2c2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `email`, `nombre`, `password`, `idPerfil`) VALUES
(1, 'agustingrigaliunas@gmail.com', 'Agustin Grigaliunas', '$2y$10$MEyW7vELlWthYkZSzDZigen0dIRBr2d0HAtKXaFG8ANZ9l23lCpiu', 1),
(2, 'ferraritomas17@gmail.com', 'Tomas Ferrari', '$2y$10$qFNYGgVFCG7JiO3u8Hdmy.kF1oxBrbxnj9Apd/7lGJLYk7.aYOSrG', 1),
(3, 'lautarojimenez@gmail.com', 'Lautaro', '$2y$10$6zyEEtrIpL8ijoBTBdCL3eksLIxh3nL6WFcxbbRxqtx8JhgGUttWW', 2),
(4, 'gabriela@gmail.com', 'Gabriela', '$2y$10$MQvsgulzkpVah3KUa15FSOnZhvCSXUYpLS2ZvMT/cXmu4RcADHjX2', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `idCatPadre` (`idCatPadre`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`idPrenda`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `idPrenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`idCatPadre`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD CONSTRAINT `prendas_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`idPerfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
