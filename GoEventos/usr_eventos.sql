-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-05-2022 a las 19:40:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usr_eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre_e` varchar(50) NOT NULL,
  `tipo_e` varchar(20) NOT NULL,
  `no_invitados` int(11) NOT NULL,
  `no_confirmados` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `fecha_e` date NOT NULL,
  `id_organizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre_e`, `tipo_e`, `no_invitados`, `no_confirmados`, `status`, `fecha_e`, `id_organizador`) VALUES
(1, 'Boda Xxx', '1', 50, 50, '1', '2022-05-20', 1),
(2, 'Boda Xxx 2', '1', 50, 50, '1', '2022-05-20', 2),
(3, 'Boda Xxx 3', '2', 50, 50, '1', '2022-05-20', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(72) NOT NULL,
  `apellido_p` varchar(54) NOT NULL,
  `apellido_m` varchar(54) NOT NULL,
  `celular` varchar(18) NOT NULL,
  `email` varchar(36) NOT NULL,
  `no_invitados` int(11) DEFAULT NULL,
  `mesa` int(11) DEFAULT NULL,
  `qr` varchar(90) DEFAULT NULL,
  `etiqueta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `apellido_p`, `apellido_m`, `celular`, `email`, `no_invitados`, `mesa`, `qr`, `etiqueta`) VALUES
(1, 'Jesús Rodolfo', 'Leaños', 'Villegas', '4927951930', 'jesusrlvrojo@gmail.com', 2, 9, NULL, NULL),
(2, 'Rodolfo', 'Villegas', 'Leaños', '4915000', 'jesusrlv_rojo@hotmail.com', NULL, NULL, NULL, NULL),
(3, 'Ana Elisa', 'Barba', 'Pinedo', '4915000', 'aepbarbanosequemas@gmail.com', NULL, NULL, NULL, NULL),
(4, 'Elisa', 'Pinedo', 'Barba', '4915000', 'aepbarbanosequemas@outlook.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados_secundarios`
--

CREATE TABLE `invitados_secundarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `clave_ext` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizadores`
--

CREATE TABLE `organizadores` (
  `id` int(11) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo_e` varchar(50) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `razon_social` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `tipo`) VALUES
(1, 'Evento social'),
(2, 'Evento deportivo'),
(3, 'Evento masivo'),
(4, 'Congreso/Convención'),
(5, 'Reunión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `nombre` varchar(72) NOT NULL,
  `pwd` varchar(72) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `pwd`, `perfil`) VALUES
(1, 'admin', '123456789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
