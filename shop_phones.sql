-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2021 a las 02:56:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shop_phones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_battery`
--

CREATE TABLE `tb_battery` (
  `id_battery` bigint(20) NOT NULL,
  `capacity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_battery`
--

INSERT INTO `tb_battery` (`id_battery`, `capacity`) VALUES
(1, '500mAh'),
(2, '2900mAh'),
(3, '1000mAh'),
(4, '5020mAh'),
(5, '4097mAh'),
(6, '4297mAh'),
(7, '4292mAh'),
(8, '1500 mAh'),
(9, '30000mAh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id_brand` bigint(20) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `type` text NOT NULL,
  `fec_cre` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_brand`
--

INSERT INTO `tb_brand` (`id_brand`, `brand_name`, `type`, `fec_cre`) VALUES
(1, 'Apple', '1,2', '2021-06-11 19:01:15'),
(2, 'Samsung', '1,2', '2021-06-11 19:06:13'),
(3, 'Motorola', '1,2', '2021-06-11 19:38:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_color`
--

CREATE TABLE `tb_color` (
  `id_color` bigint(20) NOT NULL,
  `color_name` varchar(20) NOT NULL,
  `fec_cre` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_color`
--

INSERT INTO `tb_color` (`id_color`, `color_name`, `fec_cre`) VALUES
(1, 'Amarillo', '2021-06-11 19:26:36'),
(2, 'Azul', '2021-06-11 19:38:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_gender`
--

CREATE TABLE `tb_gender` (
  `id_gender` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fec_cre` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_graphic`
--

CREATE TABLE `tb_graphic` (
  `id_graphic` bigint(20) NOT NULL,
  `graphic_name` varchar(50) NOT NULL,
  `description` text NOT NULL DEFAULT 'Sin descipcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_operating_system`
--

CREATE TABLE `tb_operating_system` (
  `id_os` bigint(20) NOT NULL,
  `name_os` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_phone`
--

CREATE TABLE `tb_phone` (
  `id_phone` bigint(20) NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `phone_model` varchar(30) NOT NULL,
  `sd_slot` tinyint(1) NOT NULL DEFAULT 1,
  `dual_sim` tinyint(1) NOT NULL DEFAULT 1,
  `fast_charge` tinyint(1) NOT NULL DEFAULT 1,
  `id_color` bigint(20) DEFAULT NULL,
  `id_brand` bigint(20) DEFAULT NULL,
  `id_ram_memory` bigint(20) DEFAULT NULL,
  `id_rom_memory` bigint(20) DEFAULT NULL,
  `id_battery` bigint(20) DEFAULT NULL,
  `id_processor` bigint(20) DEFAULT NULL,
  `id_operating_system` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_processor`
--

CREATE TABLE `tb_processor` (
  `id_processor` bigint(20) NOT NULL,
  `processor_name` varchar(50) NOT NULL,
  `description` text NOT NULL DEFAULT 'Sin descripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ram_memory`
--

CREATE TABLE `tb_ram_memory` (
  `id_ram_memory` bigint(20) NOT NULL,
  `ram_capacity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rom_memory`
--

CREATE TABLE `tb_rom_memory` (
  `id_rom_memory` bigint(20) NOT NULL,
  `rom_capacity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_screen_size`
--

CREATE TABLE `tb_screen_size` (
  `id_screen_size` bigint(20) NOT NULL,
  `inches` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sim_type`
--

CREATE TABLE `tb_sim_type` (
  `id_sim_type` bigint(20) NOT NULL,
  `type_sim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` bigint(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `id_gender` bigint(20) DEFAULT NULL,
  `tyc` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nombre`, `apellido`, `correo`, `fec_nac`, `id_gender`, `tyc`) VALUES
(1, 'Andres', 'fonseca', 'a@correo.com', '1996-02-15', 1, 1),
(2, 'Andres', 'fonseca', 'a@correo.com', '1996-02-15', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_battery`
--
ALTER TABLE `tb_battery`
  ADD PRIMARY KEY (`id_battery`);

--
-- Indices de la tabla `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indices de la tabla `tb_color`
--
ALTER TABLE `tb_color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `tb_gender`
--
ALTER TABLE `tb_gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indices de la tabla `tb_graphic`
--
ALTER TABLE `tb_graphic`
  ADD PRIMARY KEY (`id_graphic`);

--
-- Indices de la tabla `tb_operating_system`
--
ALTER TABLE `tb_operating_system`
  ADD PRIMARY KEY (`id_os`);

--
-- Indices de la tabla `tb_phone`
--
ALTER TABLE `tb_phone`
  ADD PRIMARY KEY (`id_phone`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_ram_memory` (`id_ram_memory`),
  ADD KEY `id_rom_memory` (`id_rom_memory`),
  ADD KEY `id_battery` (`id_battery`),
  ADD KEY `id_processor` (`id_processor`),
  ADD KEY `id_operating_system` (`id_operating_system`);

--
-- Indices de la tabla `tb_processor`
--
ALTER TABLE `tb_processor`
  ADD PRIMARY KEY (`id_processor`);

--
-- Indices de la tabla `tb_ram_memory`
--
ALTER TABLE `tb_ram_memory`
  ADD PRIMARY KEY (`id_ram_memory`);

--
-- Indices de la tabla `tb_rom_memory`
--
ALTER TABLE `tb_rom_memory`
  ADD PRIMARY KEY (`id_rom_memory`);

--
-- Indices de la tabla `tb_screen_size`
--
ALTER TABLE `tb_screen_size`
  ADD PRIMARY KEY (`id_screen_size`);

--
-- Indices de la tabla `tb_sim_type`
--
ALTER TABLE `tb_sim_type`
  ADD PRIMARY KEY (`id_sim_type`);

--
-- Indices de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_battery`
--
ALTER TABLE `tb_battery`
  MODIFY `id_battery` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id_brand` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_color`
--
ALTER TABLE `tb_color`
  MODIFY `id_color` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_gender`
--
ALTER TABLE `tb_gender`
  MODIFY `id_gender` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_graphic`
--
ALTER TABLE `tb_graphic`
  MODIFY `id_graphic` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_operating_system`
--
ALTER TABLE `tb_operating_system`
  MODIFY `id_os` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_phone`
--
ALTER TABLE `tb_phone`
  MODIFY `id_phone` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_processor`
--
ALTER TABLE `tb_processor`
  MODIFY `id_processor` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_ram_memory`
--
ALTER TABLE `tb_ram_memory`
  MODIFY `id_ram_memory` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_rom_memory`
--
ALTER TABLE `tb_rom_memory`
  MODIFY `id_rom_memory` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_screen_size`
--
ALTER TABLE `tb_screen_size`
  MODIFY `id_screen_size` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_sim_type`
--
ALTER TABLE `tb_sim_type`
  MODIFY `id_sim_type` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_phone`
--
ALTER TABLE `tb_phone`
  ADD CONSTRAINT `tb_phone_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `tb_color` (`id_color`),
  ADD CONSTRAINT `tb_phone_ibfk_10` FOREIGN KEY (`id_battery`) REFERENCES `tb_battery` (`id_battery`),
  ADD CONSTRAINT `tb_phone_ibfk_11` FOREIGN KEY (`id_processor`) REFERENCES `tb_processor` (`id_processor`),
  ADD CONSTRAINT `tb_phone_ibfk_12` FOREIGN KEY (`id_operating_system`) REFERENCES `tb_operating_system` (`id_os`),
  ADD CONSTRAINT `tb_phone_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `tb_brand` (`id_brand`),
  ADD CONSTRAINT `tb_phone_ibfk_3` FOREIGN KEY (`id_ram_memory`) REFERENCES `tb_ram_memory` (`id_ram_memory`),
  ADD CONSTRAINT `tb_phone_ibfk_4` FOREIGN KEY (`id_rom_memory`) REFERENCES `tb_rom_memory` (`id_rom_memory`),
  ADD CONSTRAINT `tb_phone_ibfk_5` FOREIGN KEY (`id_battery`) REFERENCES `tb_battery` (`id_battery`),
  ADD CONSTRAINT `tb_phone_ibfk_6` FOREIGN KEY (`id_processor`) REFERENCES `tb_processor` (`id_processor`),
  ADD CONSTRAINT `tb_phone_ibfk_7` FOREIGN KEY (`id_brand`) REFERENCES `tb_brand` (`id_brand`),
  ADD CONSTRAINT `tb_phone_ibfk_8` FOREIGN KEY (`id_ram_memory`) REFERENCES `tb_ram_memory` (`id_ram_memory`),
  ADD CONSTRAINT `tb_phone_ibfk_9` FOREIGN KEY (`id_rom_memory`) REFERENCES `tb_rom_memory` (`id_rom_memory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
