-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2022 a las 22:10:05
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `go`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nombre_menu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre_menu`, `perfil`, `link`) VALUES
(1, 'Inicio', 1, 'index.php'),
(2, 'Zonas Residenciales', 1, 'AdministracionResidenciales.php'),
(3, 'Accesos', 1, 'AccesosAdmin.php'),
(4, 'Administración', 1, 'Administracion.php'),
(5, 'Inicio', 3, 'index.php'),
(6, 'Accesos', 3, 'AccesosAdmin.php'),
(7, 'Información de Zona Residencial', 3, 'InfoZR.php'),
(8, 'Datos de Contacto', 3, ''),
(9, 'Administración', 3, ''),
(10, 'Propietarios', 3, ''),
(11, 'Vigilantes', 3, ''),
(12, 'Proveedores', 3, ''),
(13, 'Noticias', 3, ''),
(14, 'Eventos', 3, ''),
(15, 'Votaciones', 3, ''),
(16, 'Inicio', 2, ''),
(17, 'Zonas Residenciales', 2, ''),
(18, 'Administración', 2, ''),
(19, 'Eventos', 2, ''),
(20, 'Noticias', 2, ''),
(21, 'Proveedores', 2, ''),
(22, 'Inicio', 4, ''),
(23, 'Información de Zona Residencial', 4, ''),
(24, 'Accesos', 4, ''),
(25, 'Datos de Contacto', 4, ''),
(26, 'Administración', 4, ''),
(27, 'Eventos', 4, ''),
(28, 'Votaciones', 4, ''),
(29, 'Vigilantes', 4, ''),
(30, 'Propietarios', 4, ''),
(31, 'Proveedores', 4, ''),
(32, 'Noticias', 4, ''),
(33, 'Inicio', 5, ''),
(34, 'Datos de Contacto', 5, ''),
(35, 'Información de Zona Residencial', 5, ''),
(36, 'Accesos', 5, ''),
(37, 'Noticias', 5, ''),
(38, 'Propietarios', 5, ''),
(39, 'Votaciones', 5, ''),
(40, 'Inicio', 6, ''),
(41, 'Información de Zona Residencial', 6, ''),
(42, 'Accesos', 6, ''),
(43, 'Datos de Contacto', 6, ''),
(44, 'Noticias', 6, ''),
(45, 'Inicio', 7, ''),
(46, 'Accesos', 7, ''),
(47, 'Eventos', 7, ''),
(48, 'Noticias', 7, ''),
(49, 'Proveedores', 7, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(18) COLLATE utf16_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'admin@1', '123456789', 1),
(2, 'admin2@2', '123456789', 2),
(3, 'admin3@3', '123456789', 3),
(4, 'admin4@4', '123456789', 4),
(5, 'admin6@6', '123456789', 6),
(6, 'admin5@5', '123456789', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
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
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
