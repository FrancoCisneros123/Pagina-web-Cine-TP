-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 01:24:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficio`
--

CREATE TABLE `beneficio` (
  `id_beneficio` int(11) NOT NULL,
  `nombre_beneficio` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `beneficio`
--

INSERT INTO `beneficio` (`id_beneficio`, `nombre_beneficio`, `descripcion`) VALUES
(1, 'Beneficio mayores de 60 años', 'Descuento del 20% en la entrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Drama'),
(2, 'Comedia'),
(3, 'Aventura'),
(4, 'Suspenso'),
(5, 'Terror'),
(6, 'Acción'),
(7, 'Animación'),
(8, 'Superheroés'),
(9, 'Biografía'),
(10, 'Historico'),
(11, 'Basada en hechos reales'),
(12, 'Próximamente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

CREATE TABLE `complejo` (
  `id_complejo` int(11) NOT NULL,
  `nombre_complejo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`id_complejo`, `nombre_complejo`) VALUES
(1, 'Canning'),
(2, 'Puerto Madero'),
(3, 'Lomas de Zamora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_entrada`
--

CREATE TABLE `compra_entrada` (
  `id_compra` int(11) NOT NULL,
  `cant_entradas` int(11) NOT NULL,
  `precio_total` float NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_funcion` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_funcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_beneficio`
--

CREATE TABLE `entrada_beneficio` (
  `id` int(11) NOT NULL,
  `id_beneficio` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id_formato` int(11) NOT NULL,
  `nombre_formato` varchar(100) NOT NULL,
  `precio_base` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`id_formato`, `nombre_formato`, `precio_base`) VALUES
(1, '2D', 1500),
(2, '3D', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_funcion` int(11) NOT NULL,
  `horario_entrada` varchar(100) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_formato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_funcion`, `horario_entrada`, `id_sala`, `id_pelicula`, `id_formato`) VALUES
(1, '16:00hs', 1, 1, 1),
(2, '16:00hs', 2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_notificacion` int(11) NOT NULL,
  `nombre_notificacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre_pelicula` varchar(200) NOT NULL,
  `duracion` varchar(100) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `nombre_imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre_pelicula`, `duracion`, `fecha_estreno`, `fecha_baja`, `nombre_imagen`) VALUES
(1, 'Argentina 1985', '1 hora y 30 minutos', '2022-10-21', '2023-12-23', 'argentina1985_cartelera.jpg'),
(2, 'Barbie', '1 hora y 55 minutos', '2023-08-08', '2023-12-15', 'barbie_cartelera.jpg'),
(3, 'Cacería en Venecia', '1 hora y 20 minutos', '2023-09-14', '2023-12-01', 'caceria_en_venecia_cartelera.jpg'),
(4, 'El Conformista', '2 horas y 20 minutos', '2023-09-28', '2023-12-04', 'el_conformista_cartelera.jpg'),
(5, 'Elementos', '1 hora', '2023-06-15', '2023-12-23', 'elemental_cartelera.jpg'),
(6, 'El exorcista 2023', '2 horas', '2023-10-06', '2023-12-20', 'el_exorcista_cartelera.jpg'),
(7, 'Five nigths at Freddy s', '1 hora y 20 minutos', '2023-10-27', '2023-12-31', 'five_nigths_cartelera.jpg'),
(8, 'Flash', '1 hora y 50 minutos', '2023-06-15', '2023-11-30', 'flash_cartelera.jpg'),
(9, 'La monja 2', '2 horas y 20 minutos', '2023-09-08', '2023-11-29', 'la_monja2_cartelera.jpg'),
(10, 'Oppenheimer', '3 horas y 20 minutos', '2023-11-21', '2023-12-31', 'openhaimer_cartelera.jpg'),
(11, 'PAW Patrol', '1 hora', '2023-09-28', '2023-11-29', 'pow_patrol_cartelera.jpg'),
(12, 'Saw X', '1 hora y 58 minutos', '2023-09-28', '2023-12-26', 'saw_cartelera.jpg'),
(13, 'Scream 6', '1 hora y 20 minutos', '2023-03-09', '2023-11-29', 'scream_cartelera.jpg'),
(14, 'Sonido de la libertad', '1 hora y 20 minutos', '2023-08-31', '2023-11-30', 'sonido_de_libertad_cartelera.jpg'),
(15, 'Spider-man across the Spider verse', '1 hora y 20 minutos', '2023-06-01', '2023-11-22', 'spiderman_cartelera.jpg'),
(16, 'Tortugas Ninjas Caos Mutante', '1 hora y 20 minutos', '2023-08-17', '2023-11-18', 'tortugas_ninja_caos_mutante_cartelera.jpg'),
(17, 'EL JUSTICIERO 3', '2 horas', '2023-09-21', '2023-11-30', 'eljusticiero.webp'),
(18, 'LOS JUEGOS DEL HAMBRE', '2 horas y 30 minutos', '2023-11-16', '2024-01-01', 'los_juegos_del_hambre_proximamente.jpg'),
(19, 'AQUAMAN 2', '1 hora y 40 minutos', '2023-12-22', '2024-01-12', 'aquaman2_proximamente.jpg'),
(20, 'TRANSFORMERS', '3 horas', '2023-06-09', '2023-12-29', 'transformers_proximamente.jpg'),
(21, 'EL DUELO', '2 horas y 30 minutos', '2023-10-12', '2023-12-28', 'elduelo.png'),
(22, 'MILAGRO', '2 horas', '2023-09-05', '2023-11-30', 'milagro.jpg'),
(23, 'THE MARVELS', '1 hora y 20 minutos', '2023-11-09', '2023-12-29', 'the_marvels_proximamente.jpg'),
(24, 'AFTER PARA SIEMPRE', '2 horas', '2023-11-03', '2023-12-29', 'after_proximamente.jpg'),
(25, 'BLUE BETTLE', '1 hora y 50 minutos', '2023-08-18', '2023-11-23', 'bluebettle_proximamente.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_categoria`
--

CREATE TABLE `pelicula_categoria` (
  `id` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula_categoria`
--

INSERT INTO `pelicula_categoria` (`id`, `id_pelicula`, `id_categoria`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 4, 1),
(6, 6, 5),
(7, 5, 6),
(8, 5, 7),
(9, 5, 3),
(10, 7, 5),
(11, 8, 6),
(12, 8, 3),
(13, 8, 8),
(14, 9, 5),
(15, 10, 1),
(16, 10, 9),
(17, 10, 10),
(18, 11, 7),
(19, 11, 3),
(20, 12, 5),
(21, 14, 1),
(22, 14, 11),
(23, 15, 6),
(24, 15, 8),
(25, 15, 3),
(26, 16, 7),
(27, 16, 3),
(28, 16, 8),
(29, 13, 5),
(30, 24, 12),
(31, 19, 12),
(32, 25, 12),
(33, 21, 12),
(34, 17, 12),
(35, 18, 12),
(36, 22, 12),
(37, 23, 12),
(38, 20, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `descripcion_permiso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `descripcion_permiso`) VALUES
(1, 'Agregar nueva película'),
(2, 'Editar película'),
(3, 'Eliminar película'),
(4, 'Crear nueva función'),
(5, 'Editar función'),
(6, 'Eliminar función'),
(7, 'Crear nueva sala'),
(8, 'Editar sala'),
(9, 'Eliminar sala'),
(10, 'Agregar asiento'),
(11, 'Quitar asiento'),
(12, 'Crear beneficio'),
(13, 'Editar beneficio'),
(14, 'Eliminar beneficio'),
(15, 'Crear notificación'),
(16, 'Editar notificación'),
(17, 'Eliminar notificación'),
(18, 'Registrar usuario gerente'),
(19, 'Registrar usuario administrador'),
(20, 'Dar de baja usuario'),
(21, 'Editar perfil de usuario gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

CREATE TABLE `rol_permisos` (
  `id` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_permisos`
--

INSERT INTO `rol_permisos` (`id`, `id_tipo_usuario`, `id_permiso`) VALUES
(1, 2, 20),
(2, 2, 21),
(3, 2, 19),
(4, 2, 18),
(5, 3, 10),
(6, 3, 1),
(7, 3, 12),
(8, 3, 15),
(9, 3, 4),
(10, 3, 7),
(11, 3, 13),
(12, 3, 5),
(13, 3, 16),
(14, 3, 2),
(15, 3, 8),
(16, 3, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(11) NOT NULL,
  `cant_asientos` int(11) NOT NULL,
  `estado_disponible` tinyint(1) NOT NULL,
  `id_complejo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id_sala`, `cant_asientos`, `estado_disponible`, `id_complejo`) VALUES
(1, 70, 1, 1),
(2, 80, 1, 1),
(3, 90, 1, 1),
(4, 70, 1, 2),
(5, 80, 1, 2),
(6, 90, 1, 2),
(7, 70, 1, 3),
(8, 80, 1, 3),
(9, 90, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre_tipo_usuario`) VALUES
(1, 'Cliente'),
(2, 'Administrador'),
(3, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nro_telefono` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `nombre`, `apellido`, `nro_telefono`, `fecha_nacimiento`, `genero`, `id_tipo_usuario`) VALUES
(1, 'clienteTest@gmail.com', 'clienteTest1', 'cliente', 'test', '123456789', '2015-10-14', 'Masculino', 1),
(2, 'gerenteTest@gmail.com', 'gerenteTest', 'gerente', 'test', '123456789', '2003-11-04', 'Masculino', 3),
(3, 'adminTest@gmail.com', 'adminTest', 'admin', 'test', '123456789', '2004-11-10', 'Maculino', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_notificacion`
--

CREATE TABLE `usuario_notificacion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_notificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficio`
--
ALTER TABLE `beneficio`
  ADD PRIMARY KEY (`id_beneficio`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `complejo`
--
ALTER TABLE `complejo`
  ADD PRIMARY KEY (`id_complejo`);

--
-- Indices de la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_funcion` (`id_funcion`);

--
-- Indices de la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_beneficio` (`id_beneficio`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_funcion`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_formato` (`id_formato`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_notificacion`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_genero` (`id_categoria`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD KEY `id_complejo` (`id_complejo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario_notificacion`
--
ALTER TABLE `usuario_notificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_notificacion` (`id_notificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficio`
--
ALTER TABLE `beneficio`
  MODIFY `id_beneficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `complejo`
--
ALTER TABLE `complejo`
  MODIFY `id_complejo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `id_funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_notificacion`
--
ALTER TABLE `usuario_notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  ADD CONSTRAINT `compra_entrada_ibfk_2` FOREIGN KEY (`id_funcion`) REFERENCES `funcion` (`id_funcion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_entrada_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  ADD CONSTRAINT `entrada_beneficio_ibfk_1` FOREIGN KEY (`id_beneficio`) REFERENCES `beneficio` (`id_beneficio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrada_beneficio_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `compra_entrada` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `funcion_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcion_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcion_ibfk_3` FOREIGN KEY (`id_formato`) REFERENCES `formato` (`id_formato`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  ADD CONSTRAINT `pelicula_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelicula_categoria_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `rol_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permiso` (`id_permiso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_permisos_ibfk_2` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`id_complejo`) REFERENCES `complejo` (`id_complejo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_notificacion`
--
ALTER TABLE `usuario_notificacion`
  ADD CONSTRAINT `usuario_notificacion_ibfk_1` FOREIGN KEY (`id_notificacion`) REFERENCES `notificacion` (`id_notificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_notificacion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
