-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2022 a las 07:31:05
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

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
  `qr` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `apellido_p`, `apellido_m`, `celular`, `email`, `no_invitados`, `mesa`, `qr`) VALUES
(1, 'Jesús Rodolfo', 'Leaños', 'Villegas', '4927951930', 'jesusrlvrojo@gmail.com', 2, 9, NULL),
(2, 'Rodolfo', 'Villegas', 'Leaños', '4915000', 'jesusrlv_rojo@hotmail.com', NULL, NULL, NULL),
(3, 'Ana Elisa', 'Barba', 'Pinedo', '4915000', 'aepbarbanosequemas@gmail.com', NULL, NULL, NULL),
(4, 'Elisa', 'Pinedo', 'Barba', '4915000', 'aepbarbanosequemas@outlook.com', NULL, NULL, NULL),
(5, 'JesusRLV', 'Leaños', 'Villegas', '4915000', 'jesusrlv_rojo@hotmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados_secundarios`
--

CREATE TABLE `invitados_secundarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` int(11) NOT NULL,
  `clave_ext` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
