-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2020 a las 06:47:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `udc_jdng`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos_jdng`
--

CREATE TABLE `administrativos_jdng` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativos_jdng`
--

INSERT INTO `administrativos_jdng` (`id`, `identificacion`, `name`, `lastName`) VALUES
(2, 123456789, 'User Admin', 'administrativo'),
(6, 1234567890, 'MIGUEL', 'ROMERO PEÑARANDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio_jdng`
--

CREATE TABLE `barrio_jdng` (
  `id` int(11) NOT NULL,
  `nombre_barrio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrio_jdng`
--

INSERT INTO `barrio_jdng` (`id`, `nombre_barrio`) VALUES
(1, 'JUAN XXIII'),
(2, 'ALTO BOSQUE'),
(3, 'ALTOS DE SAN ISIDRO'),
(4, 'AMBERES'),
(5, 'ARMENIA'),
(6, 'BARRIO CHINO'),
(7, 'BOCAGRANDE'),
(8, 'BOSQUECITO'),
(9, 'BRUSELAS'),
(10, 'BUENOS AIRES'),
(11, 'CALAMARES'),
(12, 'CAMAGUEY'),
(13, 'CANAPOTE'),
(14, 'CASTILLOGRANDE'),
(15, 'CENTRO'),
(16, 'CERRO DE LA POPA'),
(17, 'CHAMBACU'),
(18, 'CRESPO'),
(19, 'DANIEL LEMAITRE'),
(20, 'BOSQUE'),
(21, 'EL CABRERO'),
(22, 'EL CARMEN'),
(23, 'EL COUNTRY'),
(24, 'EL LAGUITO'),
(25, 'EL PRADO'),
(26, 'ESCALLON VILLA'),
(27, 'ESPAÑA'),
(28, 'ESPINAL'),
(29, 'GETSEMANI'),
(30, 'JOSE ANTONIO GALAN'),
(31, 'JUNIN'),
(32, 'LA CAMPIÑA'),
(33, 'LA MATUNA'),
(34, 'LA PAZ'),
(35, 'LA TRONCAL'),
(36, 'LAS BRISAS'),
(37, 'LAS DELICIAS'),
(38, 'LO AMADOR'),
(39, 'LOMA FRESCA'),
(40, 'LOS ANGELES'),
(41, 'LOS CERROS'),
(42, 'LOS COMUNEROS'),
(43, 'LOS EJECUTIVOS'),
(44, 'MANGA'),
(45, 'MARBELLA'),
(46, 'MARTINEZ MARTELO'),
(47, 'NARIÑO'),
(48, 'NUEVA GRANADA'),
(49, 'NUEVE DE ABRIL'),
(50, 'NUEVO BOSQUE'),
(51, 'PABLO VI - I'),
(52, 'PABLO VI - II'),
(53, 'PALESTINA'),
(54, 'PARAGUAY'),
(55, 'PARAISO II'),
(56, 'PEDRO SALAZAR'),
(57, 'PETARE'),
(58, 'PIE DE LA POPA'),
(59, 'PIE DEL CERRO'),
(60, 'PIEDRA DE BOLIVAR'),
(61, 'REPUBLICA DE CHILE '),
(62, 'REPUBLICA DEL CARIBE'),
(63, 'RUBI'),
(64, 'SAN BERNARDO'),
(65, 'SAN DIEGO'),
(66, 'SAN FRANCISCO'),
(67, 'SAN ISIDRO'),
(68, 'SAN PEDRO Y LIBERTAD'),
(69, 'SANTA MARIA'),
(70, 'SIETE DE AGOSTO'),
(71, 'TACARIGUA'),
(72, 'TORICES'),
(73, 'VILLA SANDRA'),
(74, 'ZARAGOCILLA'),
(75, 'ISLA FUERTE'),
(76, 'ISLOTE'),
(77, 'ISLAS DEL ROSARIO'),
(78, 'BOCACHICA'),
(79, 'CAÑO DEL ORO'),
(80, 'TIERRA BOMBA'),
(81, 'PUNTA ARENAS'),
(82, 'SANTANA'),
(83, 'ARARCA'),
(84, 'BARU'),
(85, 'LA MARIA'),
(86, 'LA QUINTA'),
(87, 'BARRIO OBRERO'),
(88, 'LA ESPERANZA'),
(89, 'ALCIBIA'),
(90, 'BOSTON'),
(91, 'LA CANDELARIA'),
(92, 'TESCA VIEJO'),
(93, 'TESCA NUEVO'),
(94, 'REPUBLICA DEL LIBANO'),
(95, 'OLAYA HERRERA'),
(96, 'CHIQUINQUIRA'),
(97, 'FREDONIA'),
(98, 'NUEVO PARAISO'),
(99, 'LAS AMERICAS'),
(100, 'VILLA ESTRELLA'),
(101, 'EL POZON'),
(102, '13 DE JUNIO'),
(103, 'REPUBLICA DE VENEZUELA'),
(104, 'LAS GAVIOTAS'),
(105, 'LA FLORESTA'),
(106, 'CHIPRE'),
(107, 'LA CASTELLANA'),
(108, 'LOS ALPES'),
(109, 'EL GALLO'),
(110, 'VIEJO PORVENIR'),
(111, 'NUEVO PORVENIR'),
(112, 'LAS PALMERAS'),
(113, 'LAS PALMAS'),
(114, 'BOQUILLA'),
(115, 'PUNTA CANOA'),
(116, 'PONTEZUELA'),
(117, 'BAYUNCA'),
(118, 'ARROYO DE PIEDRA'),
(119, 'ARROYO GRANDE'),
(120, 'ALAMEDA LA VICTORIA'),
(121, 'ALBORNOZ'),
(122, 'ALMIRANTE COLON'),
(123, 'ANITA'),
(124, 'ANTONIO JOSE DE SUCRE'),
(125, 'ARROZ BARATO'),
(126, 'BELLAVISTA'),
(127, 'BLAS DE LEZO'),
(128, 'CAMILO TORRES'),
(129, 'CEBALLOS'),
(130, 'CESAR FLOREZ'),
(131, 'CIUDADELA 11 DE NOVIEMBRE'),
(132, 'CIUDADELA 2000'),
(133, 'EL CAMPESTRE'),
(134, 'EL CARMELO'),
(135, 'EL EDUCADOR'),
(136, 'EL LIBERTADOR'),
(137, 'EL MILAGRO'),
(138, 'EL RECREO'),
(139, 'EL REPOSO'),
(140, 'EL SOCORRO'),
(141, 'HENEQUEN'),
(142, 'JAIME PARDO LEAL'),
(143, 'JORGE ELIECER GAITAN'),
(144, 'LA CENTRAL '),
(145, 'LA CONCEPCION'),
(146, 'LA CONSOLATA'),
(147, 'LA ESMERALDA I'),
(148, 'LA ESMERALDA II'),
(149, 'LA FLORIDA'),
(150, 'LA SIERRITA'),
(151, 'LA VICTORIA'),
(152, 'LOS CARACOLES'),
(153, 'LOS CORALES'),
(154, 'LOS JARDINES'),
(155, 'LOS SANTANDERES'),
(156, 'LUIS CARLOS GALAN'),
(157, 'MANUELA VERGARA DE CURI'),
(158, 'MARIA CANO'),
(159, 'NAZARENO'),
(160, 'NUEVA DELHI'),
(161, 'NUEVA JERUSALEN'),
(162, 'POLICARPA'),
(163, 'PROVIDENCIA'),
(164, 'PUERTA DE HIERRO'),
(165, 'ROSSEDAL'),
(166, 'SAN FERNANDO '),
(167, 'SAN JOSE DE LOS CAMPANOS'),
(168, 'SAN PEDRO'),
(169, 'SAN PEDRO MARTIR'),
(170, 'SANTA CLARA'),
(171, 'SANTA LUCIA'),
(172, 'SANTA MONICA'),
(173, 'SECTORES UNIDOS'),
(174, 'TERNERA'),
(175, 'URBANIZACION SIMON BOLIVAR'),
(176, 'VEINTE DE JULIO SUR'),
(177, 'VILLA BARRAZA'),
(178, 'VILLA FANNY'),
(179, 'VILLA HERMOSA'),
(180, 'VILLA ROSA'),
(181, 'VILLA ROSITA'),
(182, 'VILLA RUBIA'),
(183, 'VISTA HERMOSA'),
(184, 'PASACABALLOS'),
(185, 'RECREO'),
(186, 'MEMBRILLAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_nivel_educacion_jdng`
--

CREATE TABLE `calificacion_nivel_educacion_jdng` (
  `id` int(11) NOT NULL,
  `nombre_calificacion_nivel_educacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion_nivel_educacion_jdng`
--

INSERT INTO `calificacion_nivel_educacion_jdng` (`id`, `nombre_calificacion_nivel_educacion`) VALUES
(1, 'Excelente'),
(2, 'Muy Bueno'),
(3, 'Bueno'),
(4, 'Regular'),
(5, 'Deficiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_jdng`
--

CREATE TABLE `encuesta_jdng` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` date NOT NULL,
  `genero` int(1) NOT NULL,
  `estado_civil` int(1) NOT NULL,
  `nivel_ingresos` int(1) NOT NULL,
  `programa_formacion` int(1) NOT NULL,
  `asignaturas_matriculadas` int(1) NOT NULL,
  `tipo_institucion_procedencia` int(1) NOT NULL,
  `calificacion_nivel_educacion` int(1) NOT NULL,
  `fecha_graduacion` int(4) NOT NULL,
  `localidad` int(1) NOT NULL,
  `barrio` int(3) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo_vivienda` int(1) NOT NULL,
  `nivel_educativo_padre` int(1) NOT NULL,
  `nivel_educativo_madre` int(1) NOT NULL,
  `profecion_padre` varchar(50) NOT NULL,
  `profecion_madre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuesta_jdng`
--

INSERT INTO `encuesta_jdng` (`id`, `nombre`, `apellido`, `edad`, `genero`, `estado_civil`, `nivel_ingresos`, `programa_formacion`, `asignaturas_matriculadas`, `tipo_institucion_procedencia`, `calificacion_nivel_educacion`, `fecha_graduacion`, `localidad`, `barrio`, `direccion`, `tipo_vivienda`, `nivel_educativo_padre`, `nivel_educativo_madre`, `profecion_padre`, `profecion_madre`) VALUES
(1, 'Juan', 'García', '2002-02-14', 1, 8, 2, 5, 7, 3, 4, 2008, 2, 102, 'xxxxxxxxxxxxxx', 3, 3, 2, 'abc', 'abc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil_jdng`
--

CREATE TABLE `estado_civil_jdng` (
  `id` int(11) NOT NULL,
  `nombre_estado_civil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_civil_jdng`
--

INSERT INTO `estado_civil_jdng` (`id`, `nombre_estado_civil`) VALUES
(1, 'Solter@'),
(2, 'Comprometid@'),
(3, 'En Relacion'),
(4, 'Casad@'),
(5, 'Union Libre'),
(6, 'Separad@'),
(7, 'Divorciad@'),
(8, 'Viud@'),
(9, 'Noviazgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_jdng`
--

CREATE TABLE `estudiantes_jdng` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes_jdng`
--

INSERT INTO `estudiantes_jdng` (`id`, `identificacion`, `name`, `lastName`) VALUES
(1, 1461098862, 'VERONICA YISEL', 'ACEVEDO VASQUEZ'),
(2, 1461093179, 'MICHELLE CAROLINA', 'ALVARADO CHIQUILLO'),
(3, 1461088539, 'JOSE MANUEL', 'ARAGON RIVERO'),
(4, 2147483647, 'ANA ISABEL', 'BANQUEZ DIAZ'),
(5, 1411158511, 'ALEXANDER', 'BARRIOS JULIO'),
(6, 1466337559, 'ELOISA BARRIOS', 'BARRIOS PALMA'),
(7, 1410121922, 'LUIS CARLOS', 'BATISTA PEDROZA'),
(8, 1592110052, 'DIANA CAROLINA', 'BENITEZ SIMANCA'),
(9, 1401615008, 'JOHN DARIO', 'BOLIVAR ZARAZA'),
(10, 1467809701, 'WENDY YULEISIS', 'CUETO HERNANDEZ'),
(11, 1401615604, 'CARLOS MANUEL', 'DIAZ ANGULO'),
(12, 1411160955, 'NEISER ALBERTO', 'DIAZ GUTIERREZ'),
(13, 1467840345, 'FABIAN DIAZ', 'DIAZ ROJAS'),
(14, 1671003270, 'CAMILO ANDRES', 'ESSALAS ESPEJO'),
(15, 1453161753, 'LUIS ESTEBAN', 'GALEANO GOMEZ'),
(16, 2147483647, 'DANIELA', 'GARCIA CASTILLO'),
(17, 1466321952, 'JORGE LUIS', 'GARCIA DE LEON'),
(18, 1461098173, 'GENESIS NAZARETH', 'GAVIRIA TEHERAN'),
(19, 1461093928, 'DANNA', 'GOMEZ PACHECO'),
(20, 1461092137, 'AURA CRISTINA', 'HERNANDEZ GARCIA'),
(21, 1458761322, 'LAURA MICHEL', 'HERRERA GONZALES'),
(22, 1542016608, 'YORYANIS JIMENEZ', 'JIMENEZ RAMOS'),
(23, 1579263822, 'YARLEIDIS KATERIN', 'JULIO GUZMAN'),
(24, 1501149990, 'LORENA LOZANO', 'LOZANO RIVERO'),
(25, 123456, 'User Admin', 'Estudiante Hombre'),
(26, 123, 'User Admin', 'Estudiante Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_jdng`
--

CREATE TABLE `genero_jdng` (
  `id` int(11) NOT NULL,
  `nombre_genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero_jdng`
--

INSERT INTO `genero_jdng` (`id`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades_jdng`
--

CREATE TABLE `localidades_jdng` (
  `id` int(11) NOT NULL,
  `nombre_localidades` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidades_jdng`
--

INSERT INTO `localidades_jdng` (`id`, `nombre_localidades`) VALUES
(1, 'Historica y del Caribe Norte'),
(2, 'Virgen y Turistica'),
(3, 'Industrial de la Bahía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_educativo_padres_jdng`
--

CREATE TABLE `nivel_educativo_padres_jdng` (
  `id` int(11) NOT NULL,
  `nombre_nivel_educativo_padres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel_educativo_padres_jdng`
--

INSERT INTO `nivel_educativo_padres_jdng` (`id`, `nombre_nivel_educativo_padres`) VALUES
(1, 'Primaria'),
(2, 'Secundaria'),
(3, 'Media Academica'),
(4, 'Educacion superior'),
(5, 'Analfabeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_ingresos_jdng`
--

CREATE TABLE `nivel_ingresos_jdng` (
  `id` int(11) NOT NULL,
  `nombre_nivel_ingresos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nivel_ingresos_jdng`
--

INSERT INTO `nivel_ingresos_jdng` (`id`, `nombre_nivel_ingresos`) VALUES
(1, 'Menos de 251.000'),
(2, 'Entre 251.000 y 609.029'),
(3, 'Entre 609.029 y 3.045.147'),
(4, 'Mas de 3.045.147');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion_jdng`
--

CREATE TABLE `programa_formacion_jdng` (
  `id` int(11) NOT NULL,
  `nombre_programa_formacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa_formacion_jdng`
--

INSERT INTO `programa_formacion_jdng` (`id`, `nombre_programa_formacion`) VALUES
(1, 'Seguridad Industrial'),
(2, 'Construcciones Civiles'),
(3, 'Mantenimiento Electronico Industrial'),
(4, 'Mantenimiento Mecanico Industrial'),
(5, 'Analisis Quimico Industrial'),
(6, 'Operacion de Procesos Industriales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_jdng`
--

CREATE TABLE `registro_jdng` (
  `id` int(11) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rol` int(1) NOT NULL,
  `encuesta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_jdng`
--

INSERT INTO `registro_jdng` (`id`, `identificacion`, `name`, `lastName`, `phone`, `email`, `password`, `rol`, `encuesta`) VALUES
(1, 123456, 'User Admin', 'Estudiante Hombre', 123, 'admin2@hotmail.com', '123', 1, 1),
(2, 123456789, 'User Admin', 'Administrativo', 123, 'admin@hotmail.com', '123', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_institucion_procedencia_jdng`
--

CREATE TABLE `tipo_institucion_procedencia_jdng` (
  `id` int(11) NOT NULL,
  `nombre_tipo_institucion_procedencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_institucion_procedencia_jdng`
--

INSERT INTO `tipo_institucion_procedencia_jdng` (`id`, `nombre_tipo_institucion_procedencia`) VALUES
(1, 'Privada'),
(2, 'Publica'),
(3, 'Mixta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda_jdng`
--

CREATE TABLE `tipo_vivienda_jdng` (
  `id` int(11) NOT NULL,
  `nombre_tipo_vivienda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_vivienda_jdng`
--

INSERT INTO `tipo_vivienda_jdng` (`id`, `nombre_tipo_vivienda`) VALUES
(1, 'Propia'),
(2, 'Alquilada'),
(3, 'Familiar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos_jdng`
--
ALTER TABLE `administrativos_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `barrio_jdng`
--
ALTER TABLE `barrio_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacion_nivel_educacion_jdng`
--
ALTER TABLE `calificacion_nivel_educacion_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuesta_jdng`
--
ALTER TABLE `encuesta_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_civil_jdng`
--
ALTER TABLE `estado_civil_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes_jdng`
--
ALTER TABLE `estudiantes_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero_jdng`
--
ALTER TABLE `genero_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades_jdng`
--
ALTER TABLE `localidades_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_educativo_padres_jdng`
--
ALTER TABLE `nivel_educativo_padres_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_ingresos_jdng`
--
ALTER TABLE `nivel_ingresos_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa_formacion_jdng`
--
ALTER TABLE `programa_formacion_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_jdng`
--
ALTER TABLE `registro_jdng`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `tipo_institucion_procedencia_jdng`
--
ALTER TABLE `tipo_institucion_procedencia_jdng`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vivienda_jdng`
--
ALTER TABLE `tipo_vivienda_jdng`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos_jdng`
--
ALTER TABLE `administrativos_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `barrio_jdng`
--
ALTER TABLE `barrio_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de la tabla `calificacion_nivel_educacion_jdng`
--
ALTER TABLE `calificacion_nivel_educacion_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `encuesta_jdng`
--
ALTER TABLE `encuesta_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `estado_civil_jdng`
--
ALTER TABLE `estado_civil_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estudiantes_jdng`
--
ALTER TABLE `estudiantes_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `genero_jdng`
--
ALTER TABLE `genero_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `localidades_jdng`
--
ALTER TABLE `localidades_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nivel_educativo_padres_jdng`
--
ALTER TABLE `nivel_educativo_padres_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nivel_ingresos_jdng`
--
ALTER TABLE `nivel_ingresos_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programa_formacion_jdng`
--
ALTER TABLE `programa_formacion_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registro_jdng`
--
ALTER TABLE `registro_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipo_institucion_procedencia_jdng`
--
ALTER TABLE `tipo_institucion_procedencia_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_vivienda_jdng`
--
ALTER TABLE `tipo_vivienda_jdng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
