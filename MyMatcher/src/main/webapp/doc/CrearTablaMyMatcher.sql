usuariosdrop database if exists MyMatcher;
CREATE DATABASE MyMatcher;

use MyMatcher;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `MyMatcher`
--

-- ----------------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  	`User` varchar(20) NOT NULL,
  	`Password` varchar(20),
  	`usuariosNombre` varchar(25),
  	`Apellidos` varchar(25),
	`Fechanac` date,
	`Correo` varchar(40),
	`Descripcion` varchar(100),
	`Atributo1` varchar(20),
	`Atributo2` varchar(20),
	`Atributo3` varchar(20),
	`Atributo4` varchar(20),
	`Atributo5` varchar(20),
	`Atributo6` varchar(20),
	`Atributo7` varchar(20),
	`Atributo8` varchar(20),
	`Atributo9` varchar(20),
	`Atributo10` varchar(20),
	`Atributo11` varchar(20),
	`Atributo12` varchar(20),
	`Atributo13` varchar(20),
	`Atributo14` varchar(20),
	`Atributo15` varchar(20),

	PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;