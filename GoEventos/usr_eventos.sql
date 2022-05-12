-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2022 at 08:05 PM
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
-- Table structure for table `eventos`
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
  `etiqueta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `apellido_p`, `apellido_m`, `celular`, `email`, `no_invitados`, `mesa`, `qr`, `etiqueta`) VALUES
(1, 'Jesús Rodolfo', 'Leaños', 'Villegas', '4927951930', 'jesusrlvrojo@gmail.com', 2, 9, NULL, NULL),
(2, 'Rodolfo', 'Villegas', 'Leaños', '4915000', 'jesusrlv_rojo@hotmail.com', NULL, NULL, NULL, NULL),
(3, 'Ana Elisa', 'Barba', 'Pinedo', '4915000', 'aepbarbanosequemas@gmail.com', NULL, NULL, NULL, NULL),
(4, 'Elisa', 'Pinedo', 'Barba', '4915000', 'aepbarbanosequemas@outlook.com', NULL, NULL, NULL, NULL);

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
-- Table structure for table `organizadores`
--

CREATE TABLE `organizadores` (
  `id` int(11) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo_e` varchar(50) NOT NULL,
  `rfc` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for dumped tables
--

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
-- Indexes for table `organizadores`
--
ALTER TABLE `organizadores`
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
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invitados_secundarios`
--
ALTER TABLE `invitados_secundarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
