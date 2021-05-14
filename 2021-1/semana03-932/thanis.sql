-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 20:47:18
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `thanis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `dni`) VALUES
(1, 'David', 'Perez', 'Castro', '54784741');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Fecha_de_emisión` date NOT NULL,
  `Tipo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Serie_Número` varchar(9) COLLATE latin1_spanish_ci NOT NULL,
  `Cliente_Receptor` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Moneda` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Subtotal` float NOT NULL,
  `IGV` float NOT NULL,
  `Total` float NOT NULL,
  `Estado` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`Fecha_de_emisión`, `Tipo`, `Serie_Número`, `Cliente_Receptor`, `Moneda`, `Subtotal`, `IGV`, `Total`, `Estado`) VALUES
('2021-04-30', 'Factura', 'FFA1-0001', 'Erick Chavez Ururi', 'Soles', 100, 18, 118, 'Emitido'),
('0000-00-00', 'FACTURA', 'FFA1-0002', '', 'SOLES', 100, 18, 118, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `Nombre`, `apellidoPaterno`, `apellidoMaterno`) VALUES
(1, 'Alejandro', 'Diaz', 'Quiroz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Guia` int(11) NOT NULL,
  `Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Orden_de_Compra` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Guia`, `Cliente`, `Producto`, `Orden_de_Compra`) VALUES
(1, 'Clínica Sanna', 'Candesartan Cilexetil (100 mg)', 'PO2021/0254');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talento`
--

CREATE TABLE `talento` (
  `NPostulante` int(11) NOT NULL,
  `NConvocatoria` int(11) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `NivelEstudios` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PuestoInteres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `CV` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `talento`
--

INSERT INTO `talento` (`NPostulante`, `NConvocatoria`, `Nombres`, `apellidoPaterno`, `apellidoMaterno`, `NivelEstudios`, `Carrera`, `PuestoInteres`, `CV`, `Estado`) VALUES
(1, 1, 'Fidel', 'Avendaño', 'Romero', 'Universitarios', 'Ingeniería Industrial', 'Gerente General', 'CV Fidel.pdf', 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thanis`
--

CREATE TABLE `thanis` (
  `id` int(11) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `thanis`
--

INSERT INTO `thanis` (`id`, `nickname`, `password`) VALUES
(1, 'dallasi', 'ads123'),
(2, 'lvargas', 'ads123'),
(3, 'adiaz', 'ads123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nickname`, `password`) VALUES
(1, 'dallasi', 'ads123'),
(2, 'lvargas', 'ads123'),
(3, 'adiaz', 'ads123'),
(4, 'favendaño', 'ads123'),
(5, 'echavez', 'ads123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Serie_Número`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talento`
--
ALTER TABLE `talento`
  ADD PRIMARY KEY (`NPostulante`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `talento`
--
ALTER TABLE `talento`
  MODIFY `NPostulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
