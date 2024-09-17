-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 09:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paginamarcenac`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(4) NOT NULL,
  `tituloNoticia` varchar(60) NOT NULL,
  `descripcionNoticia` varchar(500) NOT NULL,
  `direccionImagen` varchar(100) DEFAULT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `descripcionNoticia`, `direccionImagen`, `Estado`) VALUES
(1, 'Mural', 'Aca esta la foto del mural como noticia', 'imagenes/imagenesNoticias/Mural.jpg', 1),
(3, 'Imagen mural 2', 'Imagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImagen2limittextImag', 'imagenes/imagenesNoticias/Imagen mural 2.', 1),
(5, 'IMagen mural 3', 'Por favor funciona o voy a explotar', 'imagenes/imagenesNoticias/IMagen mural 3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(3) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasenia` varchar(64) NOT NULL,
  `tipoUsuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `contrasenia`, `tipoUsuario`) VALUES
(2, 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
