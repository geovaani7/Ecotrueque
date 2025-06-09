-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2024 a las 18:57:02
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecotrueque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizar`
--

CREATE TABLE `actualizar` (
  `IDusuarios` int(50) NOT NULL,
  `Usuario Anterior` varchar(50) NOT NULL,
  `Usuario  Nuevo` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(8) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `edad` int(50) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cantidad` int(25) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`nombre`, `apellido_paterno`, `apellido_materno`, `contraseña`, `edad`, `curp`, `correo`, `telefono`, `tipo`, `cantidad`, `metodo_pago`, `id`) VALUES
('Geovanni ', 'Roque', 'Roque', '282828', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 10, 'Efectivo', 8),
('Geovanni ', 'Roque', 'Roque', '1124124', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 10, 'Tarjeta_de_credito_o_debito', 9),
('Geovanni ', 'Roque', 'Roque', '282828', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'vidrio', 90, 'Tarjeta_de_credito_o_debito', 10),
('Geovanni ', 'Roque', 'Roque', '282828', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'vidrio', 90, 'Tarjeta_de_credito_o_debito', 11),
('Geovanni ', 'Roque', 'Roque', '12345', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 90, 'Tarjeta_de_credito_o_debito', 12),
('Geovanni ', 'Roque', 'Roque', '12', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 90, 'Tarjeta_de_credito_o_debito', 13),
('Geovanni ', 'Roque', 'Roque', '12345', 18, ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 90, 'Tarjeta_de_credito_o_debito', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `curp` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`nombre`, `apellido_paterno`, `apellido_materno`, `curp`, `correo`, `telefono`, `tipo`, `cantidad`, `id`) VALUES
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 12),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 13),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 14),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 15),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 16),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 17),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 50, 18),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'vidrio', 190, 19),
('Geovanni Martin', 'Roque', 'Roque', ' RORG070228HMCQQVA7', 'geovanniroque76@gmail.com', '5634673825', 'plástico', 190, 20),
('Alexis', 'Reyes', 'Gonzales', 'ALEX0098MMCQQV7', 'elzapto@gmail.com', '5634673825', 'plástico', 1000000, 21),
('Alexis', 'Reyes', 'Gonzales', 'ALEX0098MMCQQV7', 'elzapto@gmail.com', '5634673825', 'plástico', 1000000, 22),
('Alexis', 'Reyes', 'Gonzales', 'ALEX0098MMCQQV7', 'elzapto@gmail.com', '5634673825', 'plástico', 1000000, 23),
('Alexis', 'Reyes', 'Gonzales', 'ALEX0098MMCQQV7', 'elzapto@gmail.com', '5634673825', 'plástico', 1000000, 24),
('Alexis', 'Reyes', 'Gonzales', 'ALEX0098MMCQQV7', 'elzapto@gmail.com', '5634673825', 'plástico', 9, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `usuario`, `contrasena`, `telefono`, `id`) VALUES
('Leonardo', 'Solis', 'leoblink@outlook.com', 'LeoBlink', '12345', '5512102307', 16),
('Geovanni Martin', 'Roque Roque', 'geovanniroque76@gmail.com', 'violetkloi', '', '5634673825', 20),
('Geovanni ', 'Roque ', 'geovanniroque76@gmail.com', 'violetkloi', '', '5634673825', 21),
('martin', 'roque', 'martingeovanni3@gmail.com', 'elzapato', '282828', '5634673825', 22),
('martin', 'martinez', 'martingeovanni3@gmail.com', 'elzapato', '12345', '5634673825', 23),
('martin', 'martinez', 'martingeovanni3@gmail.com', 'elzapato', '', '5634673825', 24),
('Alexis', 'Reyes Gonzales', 'elzapato@gmail.com', '@alexxtumbado', '12345', '5634673825', 25),
('toño', 'hdz', 'pitogrande69@gmail.com', 'el follador loco 69', '123456789', '5634673825', 26),
('Geovanni Martin', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '12345', '5634673825', 27),
('Geovanni Martin', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '', '5634673825', 28),
('Geovanni Martin', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '', '5634673825', 29),
('elzapato', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '', '5634673825', 30),
('elzapato', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '', '5634673825', 31),
('elzapato', 'Roque Roque', 'elbro@gmail.com', 'elzapato', '282828', '5634673825', 32);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
