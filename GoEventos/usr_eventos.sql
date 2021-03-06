-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2022 at 05:00 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usr_eventos`
--

-- --------------------------------------------------------

--
-- Table structure for table `estatus_eventos`
--

CREATE TABLE `estatus_eventos` (
  `id` int(11) NOT NULL,
  `estatus_e` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estatus_eventos`
--

INSERT INTO `estatus_eventos` (`id`, `estatus_e`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Cancelado'),
(4, 'Bloqueado'),
(5, 'Finalizado');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre_e` varchar(50) NOT NULL,
  `tipo_e` int(11) NOT NULL,
  `no_invitados` int(11) NOT NULL,
  `no_confirmados` int(11) NOT NULL,
  `status_e` int(11) NOT NULL,
  `fecha_e` date NOT NULL,
  `id_organizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id`, `nombre_e`, `tipo_e`, `no_invitados`, `no_confirmados`, `status_e`, `fecha_e`, `id_organizador`) VALUES
(1, 'Boda Xxx', 1, 50, 50, 3, '2022-05-20', 1),
(2, 'Boda Xxx 2', 1, 50, 50, 2, '2022-05-20', 1),
(3, 'Boda Xxx 3', 2, 50, 50, 4, '2022-05-20', 1),
(4, 'Boda Brenda & Juan Pablo', 1, 250, 235, 1, '2022-05-28', 1),
(5, 'Bautizo María José', 1, 100, 100, 5, '2022-05-31', 1),
(6, 'Quince Alondra', 1, 250, 240, 1, '2022-06-18', 1),
(7, 'Congreso Nacional Charro', 2, 2000, 2000, 1, '2022-07-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invitados`
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
  `etiqueta` varchar(50) DEFAULT NULL,
  `tipo_invitado` int(11) DEFAULT NULL,
  `invitado_eje` int(11) DEFAULT NULL COMMENT 'Para ligar al invitado eje con el secundario',
  `id_evento` int(11) DEFAULT NULL,
  `confirmacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `apellido_p`, `apellido_m`, `celular`, `email`, `no_invitados`, `mesa`, `qr`, `etiqueta`, `tipo_invitado`, `invitado_eje`, `id_evento`, `confirmacion`) VALUES
(1, 'Jesús Rodolfo', 'Leaños', 'Villegas', '4927951930', 'jesusrlvrojo@gmail.com', 2, 9, NULL, NULL, 1, 0, 1, 1),
(2, 'Rodolfo', 'Villegas', 'Leaños', '4915000', 'jesusrlv_rojo@hotmail.com', NULL, 9, NULL, NULL, 2, 1, 1, 1),
(3, 'Ana Elisa', 'Barba', 'Pinedo', '4915000', 'aepbarbanosequemas@gmail.com', NULL, 3, NULL, NULL, 2, 18, 7, 1),
(4, 'Elisa', 'Pinedo', 'Barba', '4915000', 'aepbarbanosequemas@outlook.com', NULL, 3, NULL, NULL, 1, 0, 1, 1),
(5, 'Héctor Mario', 'Mendoza', 'Bañuelos', '4920001111', 'hec_mb@gmail.com', NULL, 3, NULL, NULL, 1, 0, 7, 1),
(6, 'Francisco Rosendo', 'Barba', 'Vizcaíno', '3314083502', 'franbavi@yahoo.com', NULL, 3, NULL, NULL, 1, NULL, 6, 1),
(7, 'Ma de la Luz', 'Pinedo', 'Vega', '4925689127', 'luzmapinedovega@yahoo.com', NULL, 2, NULL, NULL, 2, 12, 4, 1),
(8, 'José Luis', 'Pinedo', 'Vega', '4925687951', 'jlpinedo@gmail.com', NULL, NULL, NULL, NULL, 2, 12, 4, 1),
(9, 'Anali', 'Infante', 'Morales', '4927895641', 'analiim@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 5, 1),
(10, 'Nidia', 'Torres', 'Torres', '4927895646', 'ninitt@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 5, 1),
(11, 'Haydee', 'Barrón', 'Herrera', '4921564879', 'haydeebarron@gmail.com', NULL, 5, NULL, NULL, 2, 15, 4, 1),
(12, 'Ma de la Luz', 'Pinedo', 'Vega', '4925689127', 'luzmapinedov@yahoo.com', NULL, 3, NULL, NULL, 1, NULL, 4, 1),
(13, 'Ma. de la Luz', 'Pinedo', 'Vega', '4925689127', 'luzmapinedovega@yahoo.com', NULL, 2, NULL, NULL, 2, 7, 4, 1),
(14, 'Armilde', 'Rivera', 'Huizar', '4926548795', 'armilderh@gmail.com', NULL, NULL, NULL, NULL, 2, 8, 6, 1),
(15, 'Haydee Alejandra', 'Barrón', 'Herrera', '4921564879', 'haydeebarron@gmail.com', NULL, 5, NULL, NULL, 1, NULL, 4, 1),
(16, 'Alexandra Graciela', 'Barr', 'Herrera', '4921359842', 'gracebh@gmail.com', NULL, NULL, NULL, NULL, 2, 17, 6, 1),
(17, 'Cristian', 'Guillén', '.', '4925897977', 'cristianguillen@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 6, 1),
(18, 'Luis Fernando', 'González', 'Álvarez', '4925833614', 'ferdi10@hotmail.com', NULL, 3, NULL, NULL, 1, NULL, 7, 1),
(19, 'Luciana', 'Mendoza', 'Barba', '', '', NULL, 5, NULL, NULL, 2, 6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invitados_secundarios`
--

CREATE TABLE `invitados_secundarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `clave_ext` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mesas`
--

CREATE TABLE `mesas` (
  `id_mesa` int(11) NOT NULL,
  `no_mesa_e` int(11) NOT NULL,
  `no_sillas` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `mapa_e` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organizadores`
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

--
-- Dumping data for table `organizadores`
--

INSERT INTO `organizadores` (`id`, `apellido_p`, `apellido_m`, `nombres`, `telefono`, `correo_e`, `rfc`, `razon_social`) VALUES
(1, 'Salmón', 'Trujillo', 'María del Sol Alejandra', '4921112233', 'alejandra.salmon@gmail.com', 'SATS810101XXX', 'C&M'),
(2, 'Vera', 'Dávila', 'Mario Alberto', '4921111111', 'mario.vera@eventos.com', 'VEXM800202XXX', 'Mario Vera Trendy Events');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `tipo`) VALUES
(1, 'Evento social'),
(2, 'Evento deportivo'),
(3, 'Evento masivo'),
(4, 'Congreso/Convención'),
(5, 'Reunión');

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `nombre` varchar(72) NOT NULL,
  `pwd` varchar(72) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `pwd`, `perfil`) VALUES
(1, 'admin', '123456789', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estatus_eventos`
--
ALTER TABLE `estatus_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indexes for table `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estatus_eventos`
--
ALTER TABLE `estatus_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
