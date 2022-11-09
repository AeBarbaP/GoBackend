-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 10:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
(19, 'Luciana', 'Mendoza', 'Barba', '', '', NULL, 5, NULL, NULL, 2, 6, 6, 1),
(20, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(21, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(22, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(23, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(24, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(25, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(26, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(27, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(28, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(29, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(30, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(31, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(32, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(33, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(34, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(35, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(36, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(37, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(38, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(39, 'jesus', 'lea?os', 'villegas', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(40, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(41, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(42, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(43, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(44, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(45, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(46, 'Ana Elisa', 'barba', 'pinedo', '4927951930', 'aebarbap@gmail.com', 3, 4, NULL, NULL, 1, NULL, 5, NULL),
(47, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(48, 'ana ', 'barba', 'pinedo', '492795193', '', 0, 0, NULL, NULL, 1, NULL, 5, NULL),
(49, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(50, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(51, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(52, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(53, 'ana ', 'barba', 'pinedo', '4927951930', 'gold.axs.systems@gmail.com', 0, 0, NULL, NULL, 1, NULL, 5, NULL),
(54, 'ana ', 'barba', 'pinedo', '4927951930', 'anny_anny_82@hotmail.com', 0, 0, NULL, NULL, 1, NULL, 5, NULL),
(55, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(56, 'ana ', 'barba', 'pinedo', '4927951930', 'aebarbap@gmail.com', 3, 5, NULL, NULL, 1, NULL, 5, NULL),
(57, 'ana ', 'barba', 'pinedo', '4927951930', '', NULL, NULL, NULL, NULL, 1, NULL, 5, NULL),
(58, 'Mariana', 'González', 'Barba', '4921001418', 'mariana.glezbarba@gmail.com', NULL, 4, NULL, '', 1, NULL, 5, NULL),
(59, 'Barba', 'Andrea', 'González', '4921001418', 'andrea.glzbarba@gmail.com', NULL, 4, 'QR/codes//4_ds57i0row_4.png', '', 1, NULL, 4, NULL),
(60, 'Barba', 'Andrea', 'González', '4921001418', 'andrea.glzbarba@gmail.com', NULL, 4, 'QR/codes//4_92bxujtm5_4.png', '', 1, NULL, 4, NULL),
(61, 'Barba', 'Fernando', 'González', '4925686893', 'fernando10@gmail.com', NULL, 6, 'QR/codes//4_iv89aneb5_6.png', '', 1, NULL, 4, NULL),
(62, 'Barba', 'Fernando', 'González', '4925686893', 'fernando10@gmail.com', NULL, 6, 'QR/codes//4_r0ipim4id_6.png', '', 1, NULL, 4, NULL),
(63, 'Barba', 'Fernando', 'González', '4925686893', 'fernando10@gmail.com', NULL, 6, 'QR/codes//4_95j6piquo_6.png', '', 1, NULL, 4, NULL),
(64, 'Barba', 'Fernando', 'González', '4925686893', 'fernando10@gmail.com', NULL, 6, 'QR/codes//4_lpidbahiv_6.png', '', 1, NULL, 4, NULL),
(65, 'Barba', 'Fernando', 'González', '4925686893', 'fernando10@gmail.com', NULL, 6, 'QR/codes//4_ophcol4t2_6.png', '', 1, NULL, 4, NULL);

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
  `perfil` int(11) NOT NULL,
  `estatus` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `pwd`, `perfil`, `estatus`) VALUES
(1, 'admin', '123456789', 1, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
