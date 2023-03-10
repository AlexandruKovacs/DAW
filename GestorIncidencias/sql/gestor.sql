-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2023 a las 17:02:10
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
-- Base de datos: `id20430323_gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas_estancias`
--

CREATE TABLE `aulas_estancias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aulas_estancias`
--

INSERT INTO `aulas_estancias` (`id`, `nombre`) VALUES
(1, 'Despacho Jefatura'),
(2, 'Despacho Dirección'),
(3, 'Depacho Secretaría'),
(4, 'Sala de Profesores'),
(5, 'Biblioteca'),
(6, 'Secretaría'),
(7, 'Conserjería'),
(8, 'Salón de Actos'),
(9, 'Gimnasio'),
(10, 'Sala Emprendimiento'),
(11, 'Aula B.1'),
(12, 'Aula B.2'),
(13, 'Aula B.3'),
(14, 'Aula B.4'),
(15, 'Aula B.5'),
(16, 'Aula B.7'),
(17, 'Aula B.9'),
(18, 'Aula B.11'),
(19, 'Aula B.13'),
(20, 'Aula 1.1'),
(21, 'Aula 1.2'),
(22, 'Aula 1.3'),
(23, 'Aula 1.4'),
(24, 'Aula 1.5'),
(25, 'Aula 1.6'),
(26, 'Aula 1.7'),
(27, 'Aula 1.8'),
(28, 'Aula 1.9'),
(29, 'Aula 1.10'),
(30, 'Aula 1.11'),
(31, 'Aula 1.12'),
(32, 'Aula 1.13'),
(33, 'Aula 1.14'),
(34, 'Aula 1.15'),
(35, 'Aula 1.16'),
(36, 'Aula 1.17'),
(37, 'Aula 1.18'),
(38, 'Aula 1.19'),
(39, 'Aula 1.20'),
(40, 'Aula 1.21'),
(41, 'Aula 1.22'),
(42, 'Aula 1.23'),
(43, 'Aula 2.1'),
(44, 'Aula 2.2'),
(45, 'Aula 2.3'),
(46, 'Aula 2.4'),
(47, 'Aula 2.5'),
(48, 'Aula 2.6'),
(49, 'Aula 2.7'),
(50, 'Aula 2.8'),
(51, 'Aula 2.9'),
(52, 'Aula 2.11'),
(53, 'Aula 2.13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nombre_departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre_departamento`) VALUES
(1, 'Servicios a la comunidad'),
(2, 'Administración y gestión'),
(3, 'Comercio y marketing'),
(4, 'Informática y comunicaciones'),
(5, 'Inglés'),
(6, 'Formación y orientación laboral'),
(7, 'Orientación'),
(8, 'ACE'),
(9, 'Actividades físicas y deportivas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`) VALUES
(1, 'Grupo 1º COMERCIO INTERNACIONAL-DUAL'),
(2, 'Grupo 1º ASIR-DUAL'),
(3, 'Grupo 1º APD'),
(4, 'Grupo 1º AEI'),
(5, 'Grupo 1º FPB AF'),
(6, 'Grupo 1º CI'),
(7, 'Grupo 2º CI-DISTANCIA'),
(8, 'Grupo 1º FPB'),
(9, 'Grupo 2º FPB'),
(10, 'Grupo 1º COM'),
(11, 'Grupo 1º COM V'),
(12, 'Grupo 2º COM'),
(13, 'Grupo 2º COM V'),
(14, 'Grupo 1º AFD A'),
(15, 'Grupo 1º AFD B'),
(16, 'Grupo 2º AFD A'),
(17, 'Grupo 2º AFD B'),
(18, 'Grupo 1º IS A'),
(19, 'Grupo 1º IS V'),
(20, 'Grupo 1º IS B'),
(21, 'Grupo 2º IS V'),
(22, 'Grupo 2º IS A'),
(23, 'Grupo 1º GUIA'),
(24, 'Grupo 2º GUIA'),
(25, 'Grupo 2º EI A'),
(26, 'Grupo 2º EI B'),
(27, 'Grupo 1º JARD'),
(28, 'Grupo 2º JARD'),
(29, 'Grupo ACEPELU'),
(30, 'Grupo ACE MBE'),
(31, 'Grupo 1º B EI'),
(32, 'Grupo 1º DAW'),
(33, 'Grupo 1º DAM'),
(34, 'Grupo 2º DAW'),
(35, 'Grupo 2º DAM'),
(36, 'Grupo 1º SMR'),
(37, 'Grupo 2º SMR'),
(38, 'Grupo 1º AF'),
(39, 'Grupo 2º AF'),
(40, 'Grupo 1º ASDI'),
(41, 'Grupo 1º AGM'),
(42, 'Grupo 2º AGM'),
(43, 'Grupo 2º MC A'),
(44, 'Grupo 2º MC B'),
(45, 'Grupo 1º MC A'),
(46, 'Grupo 1º MC B'),
(47, 'Grupo 2º APD'),
(48, 'Grupo 2º IS B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `id` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `idAula` int(11) NOT NULL,
  `idGrupo` int(11) DEFAULT NULL,
  `tipoIncidencia` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `estado` varchar(20) NOT NULL,
  `comentarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `idProfesor`, `idAula`, `idGrupo`, `tipoIncidencia`, `descripcion`, `fechaCreacion`, `estado`, `comentarios`) VALUES
(1, 2, 18, 15, 1, 'Descripcion de la incidencia recien creda', '2023-02-26', 'Creada', 'Comentarios de la incidencia número 1.'),
(2, 2, 2, NULL, 2, 'Descripcion de la incidencia recien creda', '2023-02-24', 'Terminada', 'Estos son los comentarios de la segunda incidencia.'),
(3, 2, 4, NULL, 4, 'Hola, esto es una breve descripción sobre la incidencia ', '2023-03-22', 'En proceso', 'Se ha finalizado la incidencia correctamente y felizmente.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellidos`, `idDepartamento`, `usuario`, `password`, `correo`) VALUES
(1, 'Administrador', '', 2, 'CTIC', '37020b6432dc64c537dbfdfbcdae83f6a0b3fda37e4ee105dcf6f508bc53072e56c3809e0bc421d0b405296003f6b5c38557a55271f97c1c3cd546319ad0c41b', 'ctic.piobaroja@educa.madrid.org'),
(2, 'Alexandru', 'Kovacs', 4, 'AlexKovacs27', '365cf08c538a66e7adcc4630f492ec9892755a7809f7126281f189d921b5a9ab51b9edc37195fab6d69cd7d39f474e50bcb77da2201e22567a1923e74f95346c', 'alexandru.kovacs@educa.madrid.org');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_incidencias`
--

CREATE TABLE `tipos_incidencias` (
  `id` int(11) NOT NULL,
  `tipoIncidencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_incidencias`
--

INSERT INTO `tipos_incidencias` (`id`, `tipoIncidencia`) VALUES
(1, 'Hardware'),
(2, 'Software'),
(3, 'Conectividad'),
(4, 'Recursos EducaMadrid'),
(5, 'PDI'),
(6, 'Impresión');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aulas_estancias`
--
ALTER TABLE `aulas_estancias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAula` (`idAula`),
  ADD KEY `idProfesor` (`idProfesor`) USING BTREE,
  ADD KEY `incidencias_ibfk_3` (`idGrupo`),
  ADD KEY `incidencias_ibfk_4` (`tipoIncidencia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `tipos_incidencias`
--
ALTER TABLE `tipos_incidencias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_incidencias`
--
ALTER TABLE `tipos_incidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incidencias_ibfk_2` FOREIGN KEY (`idAula`) REFERENCES `aulas_estancias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incidencias_ibfk_3` FOREIGN KEY (`idGrupo`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `incidencias_ibfk_4` FOREIGN KEY (`tipoIncidencia`) REFERENCES `tipos_incidencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
