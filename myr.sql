-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2021 a las 02:40:31
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16964684_root`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `accesorio` varchar(30) NOT NULL,
  `medida_alto` varchar(5) NOT NULL,
  `medida_ancho` varchar(5) NOT NULL,
  `cuadricula` varchar(5) NOT NULL,
  `color_vidrio` varchar(30) NOT NULL,
  `color_aluminio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id`, `nombre`, `correo_electronico`, `telefono`, `accesorio`, `medida_alto`, `medida_ancho`, `cuadricula`, `color_vidrio`, `color_aluminio`) VALUES
(2, 'Maria Perez', 'jazmin.brv@gmail.com', '5587392031', 'Ventana', '21', '53.3', 'No', 'Claro', 'Blanco'),
(3, 'Jose Lopez', 'jazmin.brv@hotmail.com', '55933920202', 'Puerta', '24', '23', 'Si', 'Claro', 'Blanco'),
(4, 'Pedro', 'jazmin.brv@hotmail.com', '55933920202', 'Puerta', '24', '23', 'No', 'Claro', 'Blanco'),
(5, 'Jose', 'jazmin.brv@gmail.com', '5512435678', 'Puerta', '244', '233', 'Si', 'Claro', 'Blanco'),
(7, 'Biseida', 'Briseidi@mail.com', '66723949423', 'Puerta', '545', '523', 'Si', 'Claro', 'Blanco'),
(8, 'Mariana', 'mariana@hotmail.com', '55637492830', 'Puerta', '234', '2', 'Si', 'Claro', 'Blanco'),
(9, 'Jose flores', 'flores@gmail.com', '5637830231', 'Puerta', '24.5', '23.5', 'Si', 'Claro', 'Blanco'),
(10, 'Rocio', 'rocio@hotmail.com', '5678394910', 'Ventana', '64', '34', 'No', 'Claro', 'Blanco'),
(11, 'Rosa', 'rosa@hotmail.com', '445723041', 'Puerta', '656', '546', 'Si', 'Claro', 'Blanco'),
(12, 'Lupita', 'mariana@hotmail.com', '55637492830', 'Ventana', '234', '23.5', 'No', 'Claro', 'Blanco'),
(13, 'Lupitaa', 'mjjjj', '5512435678', 'Puerta', '234', '2', 'Si', 'Claro', 'Blanco'),
(15, 'Gerardo Lopez', 'gera@gmail.com', '5546633235', 'Puerta', '324', '324', 'Si', 'Claro', 'Blanco'),
(17, 'rererere', 'ererer', 'ererer', 'Puerta', 'eere', 'rer', 'No', 'Claro', 'Champange'),
(18, 'Prueba', 'prueba@gmail.com', '56273812', 'Ventana', '35.5', '1.034', 'No', 'Oscuro', 'Champange'),
(19, 'Adrian', 'adrian@hotmail.com', '343434343', 'Puerta', '23', '24', 'Si', 'Claro', 'Blanco'),
(20, 'Rosalba Torres', 'rosalba@gmail.com', '5543423232', 'Ventana', '34', '2323', 'No', 'Oscuro', 'Champange'),
(21, 'Elena Duarte', 'elena@gmail.com', '55783948203', 'Ventana', '67', '45', 'Si', 'Oscuro', 'Champange'),
(22, 'Jazmin Ag', 'jazmin.brv@mail.com', '556677435566', 'CancelBanio', '546', '64', 'Si', 'EspejoClaro', 'MaderaOscuro'),
(23, 'Jose L', 'mariana@hotmail.com', '55637492830', 'Cancel de baño', '545', '24', 'No', 'Verde', 'Madera oscuro'),
(24, 'Persona 1', 'person2@gmail.com', '34234', 'Puerta', '24.5', '24', 'Si', 'Claro', 'Madera claro'),
(25, 'Karla', 'karla@gmail.com', '5527383910', 'CancelAcceso', '24.5', '34', 'No', 'EspejoClaro', 'Champange'),
(45, 'Jazmincita piciosa', 'jazmin.brv@hotmail.com', '55332', 'Puerta', '333', '222', 'Si', 'Claro', 'Blanco'),
(48, 'Antonio', 'correo', '678', 'Puerta', '545', '23.5', 'Si', 'Claro', 'Blanco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
