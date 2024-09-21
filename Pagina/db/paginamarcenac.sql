-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2024 a las 00:00:51
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
-- Base de datos: `paginamarcenac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(4) NOT NULL,
  `tituloNoticia` varchar(60) NOT NULL,
  `descripcionNoticia` varchar(500) NOT NULL,
  `direccionImagen` varchar(100) DEFAULT NULL,
  `Estado` tinyint(1) NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `descripcionNoticia`, `direccionImagen`, `Estado`, `fechaPublicacion`) VALUES
(1, 'Mural', 'Aca esta la foto del mural como noticia', 'imagenes/imagenesNoticias/Mural.jpg', 1, '2024-09-21 21:06:51'),
(3, 'Imagen mural 2', 'Imagen2', 'imagenes/imagenesNoticias/noticia2.jpeg', 1, '2024-09-21 21:43:22'),
(5, 'IMagen mural 3', 'Por favor funciona o voy a explotar', 'imagenes/imagenesNoticias/IMagen mural 3.jpg', 1, '2024-09-21 21:06:51'),
(7, 'noticia 4', 'skibidi', 'imagenes/imagenesNoticias/noticia 4.jpeg', 1, '2024-09-21 21:23:57'),
(8, 'noticia 5', 'notica 5', 'imagenes/imagenesNoticias/noticia 5.jpeg', 1, '2024-09-21 21:40:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(3) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasenia` varchar(64) NOT NULL,
  `tipoUsuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `contrasenia`, `tipoUsuario`) VALUES
(2, 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
