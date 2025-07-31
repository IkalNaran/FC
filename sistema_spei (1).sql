-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2025 a las 02:13:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_spei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blm`
--

CREATE TABLE `blm` (
  `id_blm` int(11) NOT NULL,
  `create_date_blm` date NOT NULL DEFAULT current_timestamp(),
  `num_blm` int(11) NOT NULL,
  `descripcion_blm` varchar(255) NOT NULL,
  `comment_blm` varchar(255) NOT NULL,
  `amount_blm` double NOT NULL,
  `attends_blm` varchar(255) NOT NULL DEFAULT 'Fincomún',
  `evidence_blm` varchar(255) DEFAULT NULL,
  `resolution_date_blm` date DEFAULT NULL,
  `resolution_fincomun_blm` varchar(255) NOT NULL,
  `status_blm` varchar(255) NOT NULL,
  `account_fincomun` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blm`
--

INSERT INTO `blm` (`id_blm`, `create_date_blm`, `num_blm`, `descripcion_blm`, `comment_blm`, `amount_blm`, `attends_blm`, `evidence_blm`, `resolution_date_blm`, `resolution_fincomun_blm`, `status_blm`, `account_fincomun`, `user_id`) VALUES
(1, '2025-06-17', 0, 'Tiene ComentarioSSSS', 'Tiene un Comentario nuevo', 12.51, '', '', '2025-06-11', '', 'Abierto', 14685268, 1),
(4, '2025-06-17', 1, 'rqewrerq', 'wqrewqr', 0, '', '', NULL, '', 'Abierto', 6468132, 1),
(5, '2025-06-17', 321, 'No se encuentra', 'Cerrado', 23113, 'ffw', '', NULL, '', 'Cancelado', 21351, 1),
(6, '2025-06-17', 2132, 'ewefewfef', 'eewfewf', 3121, 'fwefe', '', NULL, '', 'Cerrado', 32113, 1),
(7, '2025-06-17', 516, '', '', 0, '', '', NULL, '', 'Activo', 0, 1),
(8, '2025-06-17', 3534, 'hola', '', 2543, '', 'jjhgj', NULL, '', 'Activo', 31323513, 1),
(10, '2025-06-17', 42, '325b', 'fhfhtfh', 235, 'gfghhh', 'fthtfd', NULL, '', 'Activo', 234324, 1),
(12, '2025-06-17', 1234, 'sad', 'sad', 4562, 'Gama', '', NULL, '', 'Abierto', 1235, 1),
(13, '2025-06-17', 123456, 'Hola', 'Hola', 153.548, 'FINCOMUN', 'Captura de pantalla 2025-05-13 162644.png', NULL, '', 'Abierto', 156483321, 1),
(14, '2025-06-18', 74243, 'grdgrdg', 'rgrg', 45660.456, 'hjuhji', NULL, NULL, '6464', 'Abierto', 563456, 1),
(15, '2025-06-18', 67674, '757', '57575', 7457, '5745', '', NULL, '75757', 'Abierto', 57567657, 1),
(16, '2025-06-18', 3453, '4534534', '3434', 4534, '3453', '', NULL, '3434', 'Abierto', 343453, 1),
(17, '2025-06-18', 453255, '54353', '535345', 235, '4523', '', NULL, '345353', 'Abierto', 4354353, 1),
(18, '2025-06-18', 21, 'Neutro12', 'Neutro', 24750.24, '456', '', NULL, 'Finalizado', 'Abierto', 685745, 1),
(22, '2025-06-19', 123456, 'Hola soy descripcion', 'Desconozco', 1234.1234, 'Fincomun 2 ', '', NULL, 'No se pudo completar por falta de personal', 'Abierto', 1524875, 1),
(23, '2025-06-19', 321, 'Hola', 'Hola', 454.45, 'Fincomún', '', NULL, 'No se pudo completar por falta de personal', 'Abierto', 12305, 1),
(24, '2025-06-23', 123, '12', '12', 1234.156, 'Fincomún', '', NULL, 'Sin solucion', 'Abierto', 315618132, 1),
(25, '2025-06-23', 1234, '1234', '1234', 1234, 'Fincomún', '', NULL, '1234', 'Abierto', 1234, 1),
(26, '2025-06-23', 321, '2', '2', 1, 'Fincomún', '', NULL, '', 'Abierto', 0, 1),
(27, '2025-06-23', 321, '2', '2', 1, 'Fincomún', '', NULL, '', 'Abierto', 0, 1),
(28, '2025-06-24', 321, '321', '321', 321, 'Fincomún', '', NULL, '321', 'Abierto', 312123, 2),
(29, '2025-06-26', 3116, '123', '315', 643.4565, 'Fincomún', '', NULL, '', 'Abierto', 0, 1),
(30, '2025-06-30', 12321, '321321', '3213213', 21321321, 'Fincomún', NULL, NULL, '3123213', 'Abierto', 213213, 1),
(31, '2025-06-30', 321, '321', '321', 321.2321, 'Fincomún', NULL, NULL, '321', 'Abierto', 0, 1),
(32, '2025-06-30', 123, '123', '123', 123, 'Fincomún', NULL, NULL, '123', 'Abierto', 123, 1),
(33, '2025-06-30', 135, '135', '135', 135, 'Fincomún', NULL, NULL, '135', 'Abierto', 0, 1),
(34, '2025-06-30', 45, '45', '45', 45, 'Fincomún', '686320bcc697c_Captura de pantalla 2025-05-28 144441.png', NULL, '45', 'Abierto', 45, 1),
(35, '2025-06-30', 789, '789', '789', 789, 'Fincomún', NULL, NULL, '798', 'Abierto', 789, 1),
(36, '2025-06-30', 789, '789', '789', 789, 'Fincomún', 'C:\\xampp\\htdocs\\proyecto_tconecta\\src\\controllers/../uploads/Captura de pantalla 2025-05-13 163845.png', NULL, '798', 'Abierto', 798, 1),
(37, '2025-06-30', 987, '987', '987', 987, 'Fincomún', NULL, NULL, '987', 'Abierto', 987, 1),
(38, '2025-06-30', 432, '432', '432', 432, 'Fincomún', 'C:\\xampp\\htdocs\\proyecto_tconecta\\src\\controllers/../uploads/Captura de pantalla 2025-05-19 170119.png', NULL, '432', 'Abierto', 432, 1),
(39, '2025-06-30', 765, '765', '765', 765, 'Fincomún', 'uploads/Captura de pantalla 2025-05-19 171551.png', NULL, '765', 'Abierto', 765, 1),
(40, '2025-06-30', 543, '543', '543', 543, 'Fincomún', NULL, NULL, '543', 'Abierto', 543, 1),
(41, '2025-06-30', 543, '435', '543', 543, 'Fincomún', NULL, NULL, '543', 'Abierto', 543453, 1),
(42, '2025-06-30', 543, '534', '543', 543, 'Fincomún', 'src/uploads/Captura de pantalla 2025-05-19 170119.png', NULL, '', 'Abierto', 0, 1),
(43, '2025-06-30', 98, '4124', '8098', 4214, 'Fincomún', NULL, NULL, '', 'Abierto', 0, 1),
(44, '2025-06-30', 543, 'Hola acabo de ser modificado', '543', 543, 'Fincomún', '686330f86a5db_Captura de pantalla 2025-05-19 171551.png', NULL, '543', 'Abierto', 543, 1),
(45, '2025-06-30', 123, '1233', '123', 123, 'Fincomún', NULL, NULL, '2123', 'Abierto', 123, 1),
(46, '2025-07-01', 213, '213', '213', 213, 'Fincomún', '68645dae40ae8_Captura de pantalla 2025-05-13 162644.png', NULL, '', 'Abierto', 0, 3),
(47, '2025-07-01', 123123, '123123', '123123', 123123, 'Fincomún', '68645e5264a0b_Captura de pantalla 2025-06-19 185427.png', NULL, '', 'Abierto', 0, 3),
(48, '2025-07-01', 877084388, 'ERIKA HERNANDEZ MORALES  CEL669441357 270625 21:23', 'TRANSFERENCIA REALIZADA DE FINCOMUN A OTROS BANCOS ', 160, 'Fincomún', '6864778ea4022_Captura de pantalla 2025-05-13 162644.png', NULL, 'spei recibido por 200, por favor enviar comprobante del monto de 160.00', 'Abierto', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `id_type` int(11) NOT NULL,
  `type_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`id_type`, `type_user`) VALUES
(1, 'fincomun'),
(2, 'tconecta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(20) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `type_user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `email_user`, `pass_user`, `type_user_fk`) VALUES
(1, 'Mauricio', 'bc.ivelazquez@fincomun.com.mx', '$2a$12$hdn6sxSFhpVakrzXqK7Sb.1SyQgRYUW01xjNJO4KuEGavrRCt/g2C', 1),
(2, 'Gama', 'gfedericoc@fincomun.com.mx', '$2y$10$b4ppR4TABaDBN2KxLQbwF.X9pnfZ9yU6VkgF9hE4bQXri8gu3g2C.', 1),
(3, 'testTconecta', 'tconecta@tconecta.com', '$2y$10$BiG.YqUAjlA7iKCAAZ1F.eLvAAWd6YtVS3ugGYZ9H4C0BU1D3sLwW', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blm`
--
ALTER TABLE `blm`
  ADD PRIMARY KEY (`id_blm`),
  ADD KEY `users_id_user` (`user_id`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type`),
  ADD UNIQUE KEY `type_user` (`type_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `EMAIL_USER` (`email_user`),
  ADD UNIQUE KEY `NAME_USER` (`name_user`) USING BTREE,
  ADD KEY `type_user_type_user` (`type_user_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blm`
--
ALTER TABLE `blm`
  MODIFY `id_blm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blm`
--
ALTER TABLE `blm`
  ADD CONSTRAINT `users_id_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `type_user_type_user` FOREIGN KEY (`type_user_fk`) REFERENCES `type_user` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
