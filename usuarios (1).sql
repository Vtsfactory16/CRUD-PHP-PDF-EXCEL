-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2024 a las 12:00:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `email`) VALUES
(2, 'Paula', 'Molina', 'La Zubia', '677777777', 'paula@example.com'),
(3, 'Having', 'Aguilar', 'Loja', '6888888888', 'javi@example.com'),
(4, 'Reduan', 'Kaddur', 'Hijar', '68878787', 'vtsfactory16@gmail.com'),
(5, 'Raul', 'Pacheco', 'Cordoba', '99999999', 'raulpacheco@gmail.com'),
(11, 'Red', 'kadd', 'trewew4tw', '678177405', 'saxovtsfactory16@gmail.com'),
(15, 'Juan', 'Gómez', 'Calle 123, Ciudad A', '123456789', 'juan.gomez@email.com'),
(16, 'María', 'López', 'Avenida 456, Ciudad B', '987654321', 'maria.lopez@email.com'),
(17, 'Pedro', 'Rodríguez', 'Calle 789, Ciudad C', '654321987', 'pedro.rodriguez@email.com'),
(18, 'Ana', 'Martínez', 'Avenida XYZ, Ciudad D', '456123789', 'ana.martinez@email.com'),
(19, 'Eduardo', 'Sánchez', 'Calle ABC, Ciudad E', '789654321', 'eduardo.sanchez@email.com'),
(20, 'Laura', 'Pérez', 'Avenida 789, Ciudad F', '987123654', 'laura.perez@email.com'),
(21, 'Carlos', 'Fernández', 'Calle XYZ, Ciudad G', '321456789', 'carlos.fernandez@email.com'),
(22, 'Isabel', 'García', 'Avenida 123, Ciudad H', '654987321', 'isabel.garcia@email.com'),
(23, 'Miguel', 'Hernández', 'Calle 456, Ciudad I', '789321654', 'miguel.hernandez@email.com'),
(24, 'Sofía', 'Díaz', 'Avenida ABC, Ciudad J', '321789456', 'sofia.diaz@email.com'),
(25, 'Alejandro', 'Gutiérrez', 'Calle XYZ, Ciudad K', '456789321', 'alejandro.gutierrez@email.com'),
(26, 'Lucía', 'Santos', 'Avenida 789, Ciudad L', '321654987', 'lucia.santos@email.com'),
(27, 'Rafael', 'Moreno', 'Calle 123, Ciudad M', '789123654', 'rafael.moreno@email.com'),
(28, 'Carmen', 'Torres', 'Avenida 456, Ciudad N', '321987456', 'carmen.torres@email.com'),
(29, 'Francisco', 'Vega', 'Calle 789, Ciudad O', '987654123', 'francisco.vega@email.com'),
(30, 'Elena', 'Ramírez', 'Avenida XYZ, Ciudad P', '654321789', 'elena.ramirez@email.com'),
(31, 'Alberto', 'Fuentes', 'Calle ABC, Ciudad Q', '789123456', 'alberto.fuentes@email.com'),
(32, 'Silvia', 'Ortega', 'Avenida 123, Ciudad R', '654789321', 'silvia.ortega@email.com'),
(33, 'Javier', 'Núñez', 'Calle 456, Ciudad S', '321654789', 'javier.nunez@email.com'),
(34, 'Raquel', 'Molina', 'Avenida XYZ, Ciudad T', '987321654', 'raquel.molina@email.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
