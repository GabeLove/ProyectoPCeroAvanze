-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2022 a las 09:53:08
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
(2, 'AMD Procesador AMD Ryzen 7 5700G ', 'Frecuencia del procesador: 3.8 GHZ\nSocket de procesador: Socket AM4\nNúmero de núcleos: 8', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-7-5700G-S-AM4-3-80GHz-8-Core-16MB-L3-Cache-incluye-Disipador-Wraith-Stealth.html', 3, 'procesador', 'procesador02.jpg'),
(3, 'Procesador AMD Ryzen 3 4100', 'Frecuencia del procesador: 3.8 GHZ\nSocket de procesador: Socket AM4 <br>\nNúmero de núcleos: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-3-4100-S-AM4-3-80GHz-Quad-Core-4MB-L3-con-Disipador-Wraith-Stealth.html', 1, 'procesador', 'procesador03.jpg'),
(4, 'Procesador Intel Core i7-12700K', 'Frecuencia del procesador: 3,6 GHz\r\nSocket de procesador: LGA 1700\r\nNúmero de núcleos: 12', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i7-12700K-Intel-UHD-Graphics-770-S-1700-3-60GHz-12-Core-25MB-Smart-Cache-12va-Generacion-Alder-Lake.html', 3, 'procesador', 'procesador04.png'),
(5, 'Procesador Intel Core i5-12400F', 'Frecuencia del procesador: 2.5 GHz\r\nSocket de procesador: LGA 1700\r\nNúmero de núcleos: 6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i5-12400F-S-1700-2-50GHz-6-Core-18MB-Smart-Cache-12va-Generacion-Alder-Lake.html', 2, 'procesador', 'procesador05.png'),
(6, 'Procesador Intel Core i3-9100', 'Frecuencia del procesador: 3.6 GHz\nSocket de procesador: LGA1151 <br>\nNúmero de núcleos: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i3-9100-S-1151-3-60GHz-Quad-Core-6MB-Smart-Cache-9na-Generacion-Coffee-Lake.html', 1, 'procesador', 'procesador06.png'),
(7, 'Tarjeta Madre ASUS Micro ATX PRIME B550M-A AC', 'Familia de procesador: AMD\r\nCircuito integrado de tarjeta madre: AMD B550\r\nSocket de procesador: Socket AM4\r\nCircuito integrado: AMD B550\r\nMemoria interna, máxima: 128 GB\r\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-ASUS-ATX-PRIME-B550M-A-AC-S-AM4-AMD-B550-HDMI-128GB-DRR4-para-AMD.html', 3, 'tarjetamadre', 'tarjeta01.png'),
(8, 'Tarjeta Madre ASUS Micro ATX PRIME A520M-A', 'Familia de procesador: AMD\nCircuito integrado de tarjeta madre: AMD B550\nSocket de procesador: Socket AM4\nCircuito integrado: AMD B550\nMemoria interna, máxima: 128 GB\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-ASUS-Micro-ATX-PRIME-A520M-A-II-CSM-S-AM4-A520-HDMI-128GB-DDR4-para-AMD.html', 2, 'tarjetamadre', 'tarjeta02.png'),
(9, 'Tarjeta Madre Gigabyte Micro ATX B550M DS3H', 'Familia de procesador: AMD\r\nCircuito integrado de tarjeta madre: AMD B550\r\nSocket de procesador: Socket AM4\r\nCircuito integrado: AMD B550\r\nMemoria interna, máxima: 128 GB\r\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-Gigabyte-Micro-ATX-B550M-DS3H-S-AM4-AMD-B550-HDMI-128GB-DDR4-para-AMD-Requiere-Actualizacion-de-BIOS-para-la-Serie-Ryzen-5000.html', 3, 'tarjetamadre', 'tarjeta03.png\r\n'),
(10, 'Tarjeta Madre ASUS micro ATX MB PRIME A320M-K', 'Familia de procesador: AMD <br>\nCircuito integrado de tarjeta madre: AMD A320 <br>\nSocket de procesador: Socket AM4 <br>\nCircuito integrado: AMD A320 <br>\nMemoria interna, máxima: 32 GB <br>\nTipo de memoria: DDR4-SDRAM\n', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-ASUS-micro-ATX-MB-PRIME-A320M-K-S-AM4-AMD-A320-HDMI-32GB-DDR4-para-AMD.html', 1, 'tarjetamadre', 'tarjeta04.png'),
(11, 'Memoria RAM Adata DDR4', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 4 GB\r\nDiseño de memoria: 1 x 4 GB\r\nVelocidad de memoria del reloj: 2666 MHz\r\nLatencia CAS: 19', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Memoria-RAM-Adata-DDR4-2666GHz-4GB-Non-ECC-CL19.html', 1, 'ram', 'ram01.png'),
(12, 'Memoria RAM Kingston FURY Beast Black', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 8 GB\r\nDiseño de memoria: 1 x 8 GB\r\nVelocidad de memoria del reloj: 3200 MHz\r\nLatencia CAS: 16', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Memoria-RAM-Kingston-FURY-Beast-Black-DDR4-3200MHz-8GB-Non-ECC-CL16-XMP.html', 2, 'ram', 'ram02.png'),
(13, 'Memoria RAM XPG Gammix D10 Black', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 8 GB\r\nDiseño de memoria: 1 x 8 GB\r\nVelocidad de memoria del reloj: 3200 MHz\r\nLatencia CAS: 16', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Memoria-RAM-XPG-Gammix-D10-Black-DDR4-3200MHz-8GB-Non-ECC-CL16-XMP.html', 2, 'ram', 'ram03.png'),
(14, 'Memoria RAM Kingston FURY BEAST', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 16 GB\r\nDiseño de memoria: 1 x 16 GB\r\nVelocidad de memoria del reloj: 3200 MHz\r\nLatencia CAS: 16', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Memoria-RAM-Kingston-FURY-BEAST-DDR4-3200MHz-16GB-Non-ECC-CL16-XMP.html', 3, 'ram', 'ram04.png'),
(15, 'Memoria RAM XPG Spectrix D50 RGB White', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 8 GB\r\nDiseño de memoria: 2 x 8 GB\r\nVelocidad de memoria del reloj: 3200 MHz\r\nLatencia CAS: 16', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Kit-Memoria-RAM-XPG-Spectrix-D50-RGB-White-DDR4-3200MHz-16GB-2-x-8GB-Non-ECC-CL16-XMP.html', 3, 'ram', 'ram05.png'),
(16, 'Memoria RAM XPG Spectrix D50', 'Tipo de memoria interna: DDR4\r\nMemoria interna: 8 GB\r\nDiseño de memoria: 1 x 8 GB\r\nVelocidad de memoria del reloj: 3200 MHz\r\nLatencia CAS: 16', 'https://www.cyberpuerta.mx/Computo-Hardware/Memorias-RAM-y-Flash/Memorias-RAM-para-PC/Memoria-RAM-XPG-Spectrix-D50-DDR4-3200MHz-8GB-Non-ECC-XMP.html', 1, 'ram', 'ram06.png'),
(18, 'Tarjeta Madre Gigabyte Micro ATX GA-A320M-H', 'Familia de procesador: AMD <br>\nCircuito integrado de tarjeta madre: AMD A320<br>\nSocket de procesador: Socket AM4<br>\nCircuito integrado: AMD A320<br>\nMemoria interna, máxima: 32 GB<br>\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-Gigabyte-Micro-ATX-GA-A320M-H-S-AM4-AMD-A320-HDMI-32GB-DDR4-para-AMD.html', 1, 'tarjetamadre', 'tarjeta05.png'),
(19, 'Tarjeta Madre ECS Micro ATX H310CH5-M2', 'Familia de procesador: Intel <br>\r\nCircuito integrado de tarjeta madre: Intel H310 <br>\r\nSocket de procesador: LGA1151 <br>\r\nCircuito integrado: Intel H310 <br>\r\nMemoria interna, máxima: 32 GB <br>\r\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-ECS-Micro-ATX-H310CH5-M2-S-1151-Intel-H310-HDMI-32GB-DDR4-para-Intel.html', 1, 'tarjetamadre', 'tarjeta06.png'),
(20, 'Tarjeta Madre Biostar Micro ATX H310MHP', 'Familia de procesador: Intel <br>\r\nCircuito integrado de tarjeta madre: Intel H310<br>\r\nSocket de procesador: LGA1151<br>\r\nCircuito integrado: Intel H310<br>\r\nMemoria interna, máxima: 32 GB<br>\r\nTipo de memoria: DDR4-SDRAM', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-Madre/Tarjeta-Madre-Biostar-Micro-ATX-H310MHP-S-1151-Intel-H310-HDMI-32GB-DDR4-para-Intel.html', 1, 'tarjetamadre', 'tarjeta07.png'),
(21, 'SSD Kingston A400', 'Capacidad: 240 GB <br>\r\nInterface: Serial ATA III <br>\r\nVelocidad de lectura: 500 MB/s <br>\r\nVelocidad de escritura: 350 MB/s <br>', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Kingston-A400-240GB-SATA-III-2-5-7mm.html', 1, 'disco', 'disco01.png'),
(22, 'SSD Adata Ultimate SU630 QLC 3D', 'Capacidad: 240 GB <br>\r\nInterface: Serial ATA III <br>\r\nVelocidad de lectura: 520 MB/s <br>\r\nVelocidad de escritura: 450 MB/s', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Adata-Ultimate-SU630-QLC-3D-240GB-SATA-2-5-7mm.html', 1, 'disco', 'disco02.png'),
(23, 'SSD Kingston A400', 'Capacidad: 480 GB <br>\r\nInterface: Serial ATA III <br>\r\nVelocidad de lectura: 500 MB/s <br>\r\nVelocidad de escritura: 450 MB/s', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Kingston-A400-480GB-SATA-III-2-5-7-mm.html', 2, 'disco', 'disco03.png'),
(24, 'SSD Kingston NV1 NVMe', 'Capacidad: 500 GB\r\nInterface: M.2,PCI Express 3.0\r\nVelocidad de lectura: 2100 MB/s\r\nVelocidad de escritura: 1700 MB/s', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Kingston-NV1-NVMe-500GB-PCI-Express-3-0-M-2.html', 3, 'disco', 'disco04.png'),
(25, 'SSD Western Digital WD Green SN350 NVMe', 'Capacidad: 1000 GB\r\nInterface: M.2,PCI Express 3.0\r\nVelocidad de lectura: 3200 MB/s\r\nVelocidad de escritura: 2500 MB/s', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Western-Digital-WD-Green-SN350-NVMe-1TB-PCI-Express-M-2.html', 3, 'disco', 'disco05.png'),
(26, 'SSD Western Digital WD Green', 'Capacidad: 1000 GB\r\nInterface: Serial ATA III\r\nVelocidad de lectura: 545 MB/s', 'https://www.cyberpuerta.mx/Computo-Hardware/Discos-Duros-SSD-NAS/SSD/SSD-Western-Digital-WD-Green-1TB-SATA-III-2-5-7mm-cp2.html', 3, 'disco', 'disco06.png'),
(27, 'Fuente de Poder Game Factor PSG650 80 PLUS Bronze', 'Potencia nominal: 650 W <br>\r\nDiámetro de ventilador: 12 cm <br>\r\nFactor de forma: ATX <br>\r\nAlimentador de energía: 24-pin ATX <br>\r\nNúmero de conectores SATA: 5\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Game-Factor-PSG650-80-PLUS-Bronze-20-4-pin-ATX-120mm-650W-Negro.html', 2, 'fuente', 'fuente01.png'),
(28, 'Fuente de Poder Gigabyte P750GM 80 PLUS Gold', 'Potencia nominal: 750 W\r\nDiámetro de ventilador: 12 cm\r\nFactor de forma: ATX\r\nAlimentador de energía: 24-pin ATX\r\nNúmero de conectores SATA: 8\r\nCertificación 80 PLUS: 80 PLUS Gold', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Gigabyte-P750GM-80-PLUS-Gold-20-4-pin-ATX-120mm-750W.html', 3, 'fuente', 'fuente02.png'),
(29, 'Fuente de Poder Corsair CX650M 80 PLUS Bronze', 'Potencia nominal: 650 W <br>\r\nDiámetro de ventilador: 12 cm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pines ATX<br>\r\nNúmero de conectores SATA: 6\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Corsair-CX650M-POWER-80-PLUS-Bronze-24-pin-ATX-120mm-650W.html', 2, 'fuente', 'fuente03.png'),
(30, 'Fuente de Poder Gigabyte P650B 80 PLUS Bronze', 'Potencia nominal: 650 W<br>\r\nDiámetro de ventilador: 12 cm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pin ATX<br>\r\nNúmero de conectores SATA: 6\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Gigabyte-P650B-80-PLUS-Bronze-20-4-pin-ATX-120mm-650W.html', 2, 'fuente', 'fuente04.png'),
(31, 'Fuente de Poder EVGA 750 BQ 80 PLUS Bronze', 'Potencia nominal: 750 W <br>\r\nDiámetro de ventilador: 14 cm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pin ATX<br>\r\nNúmero de conectores SATA: 9\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-EVGA-750-BQ-80-PLUS-Bronze-24-pin-ATX-140mm-750W.html', 3, 'fuente', 'fueete05.png'),
(32, 'Fuente de Poder ASUS TUF Gaming 550B 80 PLUS Bronze', 'Potencia nominal: 550 W <br>\r\nDiámetro de ventilador: 13.5 cm <br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pines ATX<br>\r\nNúmero de conectores SATA: 5<br>\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-ASUS-TUF-Gaming-550B-80-PLUS-Bronze-20-4-pin-ATX-150mm-550W.html', 3, 'fuente', 'fuente06.png'),
(33, 'Fuente de Poder Gigabyte P450B 80 PLUS Bronze', 'Potencia nominal: 450 W<br>\r\nDiámetro de ventilador: 12 cm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pin ATX<br>\r\nNúmero de conectores SATA: 6<br>\r\nCertificación 80 PLUS: 80 PLUS Bronze', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Gigabyte-P450B-80-PLUS-Bronze-20-4-pin-ATX-120mm-450W.html', 1, 'fuente', 'fuente07.png'),
(34, 'Fuente de Poder Corsair VS600 80 Plus White', 'Potencia nominal: 600 W <br>\r\nDiámetro de ventilador: 12 cm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pines ATX<br>\r\nNúmero de conectores SATA: 6<br>\r\nCertificación 80 PLUS: 80 PLUS', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Corsair-VS600-80-Plus-White-24-pin-ATX-120mm-600W.html', 2, 'fuente', 'fuente08.png'),
(35, 'Fuente de Poder Vorago PSU-101', 'Potencia nominal: 500 W <br>\r\nDiámetro de ventilador: 80 mm<br>\r\nFactor de forma: ATX<br>\r\nAlimentador de energía: 24-pin ATX<br>\r\nNúmero de conectores SATA: 2', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Vorago-PSU-101-ATX-500W.html', 1, 'fuente', 'fuente09.png'),
(36, 'Fuente de Poder Balam Rush GR850FM 80 PLUS Gold', 'Potencia nominal: 850 W\r\nDiámetro de ventilador: 140 mm\r\nFactor de forma: ATX\r\nAlimentador de energía: 24-pin ATX\r\nNúmero de conectores SATA: 9\r\nCertificación 80 PLUS: 80 PLUS Gold', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Balam-Rush-GR850FM-80-PLUS-Gold-20-4-pin-ATX-850W.html', 3, 'fuente', 'fuente10.png'),
(37, 'Fuente de Poder Yeyian Thunder Serie 500 80 PLUS White', 'Potencia nominal: 500 W\r\nDiámetro de ventilador: 12 cm\r\nFactor de forma: ATX\r\nAlimentador de energía: 24-pin ATX\r\nNúmero de conectores SATA: 4\r\nCertificación 80 PLUS: 80 PLUS White', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-Yeyian-Thunder-Serie-500-80-PLUS-White-20-4-pin-ATX-120mm-500W.html', 1, 'fuente', 'fuente11.png'),
(38, 'Fuente de Poder EVGA 100-N1-0400-L1', 'Potencia nominal: 400 W\nDiámetro de ventilador: 12 cm\nFactor de forma: ATX\nAlimentador de energía: 24-pin ATX\nNúmero de conectores SATA: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Fuentes-de-Poder-para-PC-s/Fuente-de-Poder-EVGA-100-N1-0400-L1-ATX-120mm-400W.html', 1, 'fuente', 'fuente12.png'),
(39, 'Tarjeta de Video PowerColor Fighter AMD Radeon RX 6600', 'Frecuencia del procesador: 2044 MHz <br>\r\nFrecuencia boost: 2491 MHz <br>\r\nCantidad de puertos HDMI: 1 <br>\r\nCantidad de DisplayPorts: 3 <br>\r\n8GB 128-bit GDDR6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-PowerColor-Fighter-AMD-Radeon-RX-6600-8GB-128-bit-GDDR6-PCI-Express-4-0.html', 3, 'video', 'video01.png'),
(40, 'Tarjeta de Video PNY NVIDIA GeForce RTX 3050', '8GB 128-bit GDDR6 <br>\r\nFrecuencia del procesador: 1552 MHz<br>\r\n', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-PNY-NVIDIA-GeForce-RTX-3050-8GB-UPRISING-Dual-Fan-8GB-128-bit-GDDR6-PCI-Express-x16-4-0.html', 3, 'video', 'video02.png'),
(41, 'Tarjeta de Video Gigabyte NVIDIA GeForce RTX 2060', '6GB 192-bit GDDR6\r\nPCI Express x16 3.0', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Gigabyte-NVIDIA-GeForce-RTX-2060-D6-6G-rev-1-0-6GB-192-bit-GDDR6-PCI-Express-x16-3-0.html#emdetails_attributes', 2, 'video', 'video03.png'),
(42, 'Tarjeta de Video MSI NVIDIA GeForce RTX 3060 VENTUS', '12GB 192-bit GDDR6\r\nPCI Express 4.0', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-MSI-NVIDIA-GeForce-RTX-3060-VENTUS-2X-12G-OC-12GB-192-bit-GDDR6-PCI-Express-4-0.html', 3, 'video', 'video04.png'),
(43, 'Tarjeta de Video Zotac NVIDIA GeForce RTX 2060', '6GB 192-bit GDDR6\r\nPCI Express 3.0\r\nFrecuencia boost: 1680 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Zotac-NVIDIA-GeForce-RTX-2060-Black-Gaming-6GB-192-bit-GDDR6-PCI-Express-3-0.html', 2, 'video', 'video05.png'),
(44, 'Tarjeta de Video Sapphire PULSE AMD Radeon RX 6800', '16GB 256-bit GDDR6\r\nPCI Express 4.0\r\nFrecuencia boost: 2170 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Sapphire-PULSE-AMD-Radeon-RX-6800-16GB-256-bit-GDDR6-PCI-Express-4-0.html', 3, 'video', 'video06.png'),
(45, 'Tarjeta de Video Sapphire AMD Radeon RX 6500 XT', '4GB 64 bit GDDR6\r\nPCI Express 4.0\r\nFrecuencia boost: 2825 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Sapphire-AMD-Radeon-RX-6500-XT-4GB-64-bit-GDDR6-PCI-Express-4-0.html', 1, 'video', 'video07.png'),
(46, 'Tarjeta de Video ASUS NVIDIA GeForce RTX 2060 Dual OC EVO', 'GB 192-bit GDDR6\r\nPCI Express 3.0Frecuencia del procesador: 1365 MHz\r\nFrecuencia boost: 1755 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-ASUS-NVIDIA-GeForce-RTX-2060-Dual-OC-EVO-6GB-192-bit-GDDR6-PCI-Express-3-0.html', 1, 'video', 'video08.png'),
(47, 'Tarjeta de Video Gigabyte AMD Radeon RX 6600 Eagle ', '8GB 128-bit GDDR6\r\nPCI Express x8 4.0\r\nFrecuencia boost: 2491 MHz\r\n', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Gigabyte-AMD-Radeon-RX-6600-Eagle-8G-8GB-128-bit-GDDR6-PCI-Express-x8-4-0.html', 3, 'video', 'video09.png'),
(48, 'Tarjeta de Video Asus NVIDIA GeForce GTX 1050 Ti Phoenix', '4GB 128-bit GDDR5\r\nPCI Express 3.0\r\nFrecuencia del procesador: 1290 MHz\r\nFrecuencia boost: 1392 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Asus-NVIDIA-GeForce-GTX-1050-Ti-Phoenix-4GB-128-bit-GDDR5-PCI-Express-3-0.html', 1, 'video', 'video10.png'),
(49, 'Tarjeta de Video Gigabyte NVIDIA GeForce RTX 3060 GAMING OC', '2GB 192-bit GDDR6\r\nPCI Express x16 4.0\r\nFrecuencia boost: 1837 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Gigabyte-NVIDIA-GeForce-RTX-3060-GAMING-OC-rev-2-0-12GB-192-bit-GDDR6-PCI-Express-x16-4-0.html', 3, 'video', 'video11.png'),
(50, 'Tarjeta de Video PNY NVIDIA GeForce GTX 1650 Dual Fan', '4GB 128-bit GDDR6\r\nPCI Express x16', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-PNY-NVIDIA-GeForce-GTX-1650-Dual-Fan-4GB-128-bit-GDDR6-PCI-Express-x16.html', 1, 'video', 'video12.png'),
(51, 'Tarjeta de Video Sapphire Pulse AMD Radeon RX 6600', '8GB 128-bit DDR6\r\nPCI Express 4.0\r\nFrecuencia boost: 2491 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Sapphire-Pulse-AMD-Radeon-RX-6600-8GB-128-bit-DDR6-PCI-Express-4-0.html', 2, 'video', 'video13.png'),
(52, 'Tarjeta de Video Gigabyte NVIDIA GeForce RTX 2060', '6GB 192-bit GDDR6\r\nPCI Express x16 3.0\r\nFrecuencia del procesador: 1680 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Gigabyte-NVIDIA-GeForce-RTX-2060-D6-6G-rev-2-0-6GB-192-bit-GDDR6-PCI-Express-x16-3-0.html', 3, 'video', 'video14.png'),
(53, 'Tarjeta de Video MSI NVIDIA GeForce GT 730', '2GB 64-bit GDDR3\r\nPCI Express 2.0\r\nFrecuencia boost: 902 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-MSI-NVIDIA-GeForce-GT-730-2GB-64-bit-GDDR3-PCI-Express-2-0.html', 1, 'video', 'video15.png'),
(54, 'Tarjeta de Video Palit NVIDIA GeForce GT 710', '2GB 64-bit DDR3\r\nPCI Express 2.0 x 8\r\nFrecuencia del procesador: 954 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-Palit-NVIDIA-GeForce-GT-710-2GB-64-bit-DDR3-PCI-Express-2-0-x-8.html', 1, 'video', 'video16.png'),
(55, 'Tarjeta de Video MSI NVIDIA GeForce GT 710,', '2GB 64-bit GDDR3\r\nPCI Express 2.0\r\nFrecuencia del procesador: 954 MHz', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Tarjetas-de-Video/Tarjeta-de-Video-MSI-NVIDIA-GeForce-GT-710-2GB-64-bit-GDDR3-PCI-Express-2-0.html', 1, 'video', 'video17.png'),
(56, 'Procesador AMD Ryzen 5 4600G', 'Familia de procesador: AMD Ryzen™ 5<br>\r\nModelo del procesador: 4600G<br>\r\nFrecuencia del procesador: 3,7 GHz<br>\r\nSocket de procesador: Socket AM4<br>\r\nNúmero de núcleos: 6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-5-4600G-Radeon-Graphics-S-AM4-3-70GHz-Six-Core-8MB-L3-Cache.html', 3, 'procesador', 'procesador07.png'),
(57, 'Procesador Intel Celeron 430', 'Familia de procesador: Intel Celeron<br>\r\nModelo del procesador: 430<br>\r\nFrecuencia del procesador: 1,8 GHz<br>\r\nSocket de procesador: Socket T (LGA 775)<br>\r\nNúmero de núcleos: 1', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Celeron-430-S-775-1-80GHz-Single-Core-0-5MB-Cache.html', 1, 'procesador', 'procesador08.png'),
(58, 'Procesador Intel Core i3-540', 'Familia de procesador: Intel Core i3-xxx<br>\r\nModelo del procesador: i3-540\r\nSocket de procesador: Socket H (LGA 1156)<br>\r\nNúmero de núcleos: 2 <br>', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Core-i3-540-S-1156-3-06GHz-Dual-Core-4MB-L3-Cache.html', 1, 'procesador', 'procesador09.png'),
(59, 'Procesador Intel Pentium G3250', 'Familia de procesador: Intel Pentium G<br>\r\nModelo del procesador: G3250<br>\r\nFrecuencia del procesador: 3,2 GHz<br>\r\nSocket de procesador: LGA1150<br>\r\nNúmero de núcleos: 2', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-Intel-Pentium-G3250-S-1150-3-20GHz-Dual-Core-3MB-L3-Cache.html', 2, 'procesador', 'procesador10.png'),
(60, 'Procesador AMD FX 4100', 'Familia de procesador: AMD FX<br>\r\nModelo del procesador: FX 4100<br>\r\nSocket de procesador: Socket AM3+<br>\r\nNúmero de núcleos: 4', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-FX-4100-S-AM3-3-60GHz-8MB-L3-Cache.html', 2, 'procesador', 'procesador11.png'),
(61, 'Procesador AMD Ryzen 5 4500', 'Familia de procesador: AMD Ryzen™ 5<br>\r\nModelo del procesador: 4500<br>\r\nFrecuencia del procesador: 3,6 GHz<br>\r\nSocket de procesador: Socket AM4<br>\r\nNúmero de núcleos: 6', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-Ryzen-5-4500-S-AM4-3-60GHz-Six-Core-8MB-L3-Cache-con-Disipador-Wraith-Stealth.html', 2, 'procesador', 'procesador12.png'),
(62, 'Procesador AMD FX 8-Core Black Edition FX-8350,', 'Familia de procesador: AMD FX<br>\r\nModelo del procesador: FX-8350<br>\r\nFrecuencia del procesador: 4 GHz<br>\r\nSocket de procesador: Socket AM3+<br>\r\nNúmero de núcleos: 8', 'https://www.cyberpuerta.mx/Computo-Hardware/Componentes/Procesadores/Procesadores-para-PC/Procesador-AMD-FX-8-Core-Black-Edition-FX-8350-S-AM3-4-00GHz-8MB-L2-cache.html', 3, 'procesador', 'procesador13.png');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
