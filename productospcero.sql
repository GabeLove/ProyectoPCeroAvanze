-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 09:18:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productospcero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `caracteristicas` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `nivel` int(2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `caracteristicas`, `link`, `nivel`, `categoria`, `imagen`) VALUES
(1, 'AMD Procesador AMD Ryzen 5 5600G ', 'Frecuencia del procesador: 3.9 GHZ\nSocket de procesador: Socket AM4\nNúmero de núcleos: 6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-5-5600G-con-Graficos-Radeon-7-S-AM4-3-90GHz-Six-Core-16MB-L3-Cache-incluye-Disipador-Wraith-Stealth.html', 2, 'procesador', 'procesador01.jpg'),
(2, 'AMD Procesador AMD Ryzen 7 5700G ', 'Frecuencia del procesador: 3.8 GHZ\r\nSocket de procesador: Socket AM4\r\nNúmero de núcleos: 8', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-7-5700G-S-AM4-3-80GHz-8-Core-16MB-L3-Cache-incluye-Disipador-Wraith-Stealth.html', 3, 'procesador', 'procesador02.jpg'),
(3, 'Procesador AMD Ryzen 3 4100', 'Frecuencia del procesador: 3.8 GHZ\r\nSocket de procesador: Socket AM4\r\nNúmero de núcleos: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-3-4100-S-AM4-3-80GHz-Quad-Core-4MB-L3-con-Disipador-Wraith-Stealth.html', 1, 'procesador', 'procesador03.jpg'),
(4, 'Procesador Intel Core i7-12700K', 'Frecuencia del procesador: 3,6 GHz\r\nSocket de procesador: LGA 1700\r\nNúmero de núcleos: 12', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i7-12700K-Intel-UHD-Graphics-770-S-1700-3-60GHz-12-Core-25MB-Smart-Cache-12va-Generacion-Alder-Lake.html', 3, 'procesador', 'procesador04.png'),
(5, 'Procesador Intel Core i5-12400F', 'Frecuencia del procesador: 2.5 GHz\r\nSocket de procesador: LGA 1700\r\nNúmero de núcleos: 6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i5-12400F-S-1700-2-50GHz-6-Core-18MB-Smart-Cache-12va-Generacion-Alder-Lake.html', 2, 'procesador', 'procesador05.png'),
(6, 'Procesador Intel Core i3-9100', 'Frecuencia del procesador: 3.6 GHz\r\nSocket de procesador: LGA1151\r\nNúmero de núcleos: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i3-9100-S-1151-3-60GHz-Quad-Core-6MB-Smart-Cache-9na-Generacion-Coffee-Lake.html', 1, 'procesador', 'procesador06.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
