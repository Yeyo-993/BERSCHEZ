-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2022 a las 15:20:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `berschez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `nombre`, `correo`, `usuario`, `telefono`, `direccion`, `contrasena`, `created`, `modified`, `status`) VALUES
(1, 'prueba', 'prueba@gmail.com', 'Prueba', '3205656402', 'CALLE 34 #32-45 BOGOTA', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(2, 'Sergio Reinoso', 'slrs993@gmail.com', 'Sergio', '3204913893', 'calle 33 #2-15 torre8 apto103', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'Lezly ', 'Lezly@gmail.com', 'Lezly ', '8945230.65', 'calle 8521 Cali', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(1, 1, 80000.00, '2022-08-30 01:55:08', '2022-08-30 01:55:08', '1'),
(2, 1, 120000.00, '2022-08-30 03:10:35', '2022-08-30 03:10:35', '1'),
(3, 2, 80000.00, '2022-08-31 23:31:15', '2022-08-31 23:31:15', '1'),
(4, 2, 120000.00, '2022-09-01 00:31:52', '2022-09-01 00:31:52', '1'),
(5, 2, 20000.00, '2022-09-01 00:33:17', '2022-09-01 00:33:17', '1'),
(6, 2, 180000.00, '2022-09-01 23:01:29', '2022-09-01 23:01:29', '1'),
(7, 2, 540000.00, '2022-09-02 00:38:55', '2022-09-02 00:38:55', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 4),
(2, 2, 2, 1),
(3, 2, 1, 2),
(4, 3, 2, 1),
(5, 4, 2, 1),
(6, 4, 1, 2),
(7, 5, 1, 1),
(8, 6, 2, 2),
(9, 6, 1, 1),
(10, 7, 9, 2),
(11, 7, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `imagen`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'https://www.catalogodelasalud.com/documenta/imagenes/128747/bata-g.jpg', 'Bata para medico', 'Es una bata clasica de color blanco para medico', 20000.00, '2022-08-29 02:34:15', '2022-08-29 02:34:15', '1'),
(2, 'https://img2.freepng.es/20180401/wcq/kisspng-uniform-security-guard-security-company-clothing-uniform-5ac0a14ad9f472.2665963815225736428928.jpg', 'Uniforme para seguridad', 'Es un uniforme para hombre de seguridad privada', 80000.00, '2022-08-30 03:08:30', '2022-08-30 03:08:30', '1'),
(3, 'https://image.made-in-china.com/155f0j00QjlauRCsqhzp/Formal-Airline-Stewardess-Uniform-Red-Air-Hostess-Costume-for-Air-Hostess-Uniform.jpg', 'Uniforme de azafata', 'Es un uniforme de azafata azul', 150000.00, '2022-09-01 23:50:12', '2022-09-01 23:50:12', '1'),
(4, 'https://i.pinimg.com/236x/71/9c/da/719cda6ccd6a41adcd7eba0448631246.jpg', 'Vestido rosado de enfermera', 'Es un uniforme de enfermera de color rosado', 90000.00, '2022-09-01 23:51:23', '2022-09-01 23:51:23', '1'),
(5, 'https://disenosprofesionales.com.co/wp-content/uploads/2016/08/Ref-120.jpg', 'Uniforme para chef', 'Es un uniforme para chef de color blanco con franjas negras', 130000.00, '2022-09-01 23:55:00', '2022-09-01 23:55:00', '1'),
(6, 'https://ae01.alicdn.com/kf/Scd9a0167321d4f169a7690bedb22f115v/Ropa-de-trabajo-de-manga-larga-para-hombre-uniformes-reflectantes-de-polialgod-n-resistentes-al-desgaste.jpg_Q90.jpg_.webp', 'Uniformes para electricista ', 'Es un uniforme completo para electricista con reflectivos', 140000.00, '2022-09-01 23:56:45', '2022-09-01 23:56:45', '1'),
(7, 'https://ae01.alicdn.com/kf/Scd9a0167321d4f169a7690bedb22f115v/Ropa-de-trabajo-de-manga-larga-para-hombre-uniformes-reflectantes-de-polialgod-n-resistentes-al-desgaste.jpg_Q90.jpg_.webp', 'Uniformes para electricista ', 'Es un uniforme completo para electricista con reflectivos', 140000.00, '2022-09-01 23:56:45', '2022-09-01 23:56:45', '1'),
(8, 'https://image.jimcdn.com/app/cms/image/transf/dimension=406x10000:format=jpg/path/sd31f3a69d43a2bfa/image/i0068d27508db6c4b/version/1586969118/image.jpg', 'Uniforme para mujer', 'Es un uniforme para hoteles para mujer', 80000.00, '2022-09-01 23:59:45', '2022-09-01 23:59:45', '1'),
(9, 'https://i.pinimg.com/236x/3f/1d/db/3f1ddbaa672b156d494b560622537c30.jpg', 'Uniforme para niña de colegio', 'Uniforme de colegio para niñas con falda y saco', 110000.00, '2022-09-02 00:02:07', '2022-09-02 00:02:07', '1'),
(10, 'https://i.pinimg.com/originals/3e/8c/50/3e8c5064fa33423425392ff56ad329ee.jpg', 'Uniforme para barbero', 'Es un peto de cuero para barbero', 160000.00, '2022-09-02 00:07:16', '2022-09-02 00:07:16', '1'),
(11, 'https://img.freepik.com/foto-gratis/panadero-sexo-masculino-hermoso-joven-uniforme-blanco-que-opone-al-estante-hornada_23-2148189042.jpg?size=626&ext=jpg', 'Uniforme para panadero', 'Uniforme clásico para panadero', 95000.00, '2022-09-02 00:09:18', '2022-09-02 00:09:18', '1'),
(12, 'https://www.camilaycamila.com/images/productos/PRODUCTOS-2019/CHEF//Cintura-Chef-corta-1-1.jpg', 'Uniforme para chef mujer', 'Uniforme chef mujer de color blanco y negro', 120000.00, '2022-09-02 00:10:47', '2022-09-02 00:10:47', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
