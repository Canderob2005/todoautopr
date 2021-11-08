-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-08-2021 a las 03:45:44
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: testveiculos
--
-- CREATE DATABASE IF NOT EXISTS testveiculos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
-- USE testveiculos;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla anuncio
--

CREATE TABLE IF NOT EXISTS anuncio (
  idanuncio int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  pagado varchar(2) NOT NULL,
  direccion text DEFAULT NULL,
  telefono varchar(20) NOT NULL,
  email varchar(50) NOT NULL,
  idcategoria int(11) DEFAULT NULL,
  idmarca int(11) DEFAULT NULL,
  idmodelo int(11) DEFAULT NULL,
  year int(11) DEFAULT NULL,
  idclasificacion int(11) DEFAULT NULL,
  idcondicion int(11) DEFAULT NULL,
  idtransmission int(11) DEFAULT NULL,
  licencia varchar(2) NOT NULL,
  multas varchar(2) NOT NULL,
  millage int(11) NOT NULL DEFAULT 0,
  descripcion text NOT NULL,
  imagen varchar(255) DEFAULT NULL,
  full_lablel varchar(2) DEFAULT NULL,
  idpueblo int(11) DEFAULT NULL,
  precio decimal(15,2) NOT NULL,
  mejoroferta varchar(2) DEFAULT NULL,
  PRIMARY KEY (idanuncio)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA anuncio:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla categoria
--

CREATE TABLE IF NOT EXISTS categoria (
  idcategoria int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (idcategoria)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA categoria:
--

--
-- Volcado de datos para la tabla categoria
--

INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(1, 'Van pasajero');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(2, 'Auto');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(3, 'Camiones');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(4, 'Motora');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(5, 'Pick-up');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(6, 'Polaris');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(7, 'Todo Rerreno ');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(8, 'Ucv');
INSERT IGNORE INTO categoria (idcategoria, nombre) VALUES(9, 'Van carga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla clasificacion
--

CREATE TABLE IF NOT EXISTS clasificacion (
  idclasificacion int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (idclasificacion)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA clasificacion:
--

--
-- Volcado de datos para la tabla clasificacion
--

INSERT IGNORE INTO clasificacion (idclasificacion, nombre) VALUES(1, 'Nuevo');
INSERT IGNORE INTO clasificacion (idclasificacion, nombre) VALUES(2, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla condicion
--

CREATE TABLE IF NOT EXISTS condicion (
  idcondicion int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  PRIMARY KEY (idcondicion)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA condicion:
--

--
-- Volcado de datos para la tabla condicion
--

INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(1, 'Como nuevo');
INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(2, 'Exelente');
INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(3, 'Muy Bueno');
INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(4, 'Regular');
INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(5, 'Malo');
INSERT IGNORE INTO condicion (idcondicion, nombre) VALUES(6, 'Para Piezas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla imagenes
--

CREATE TABLE IF NOT EXISTS imagenes (
  idimagen int(11) NOT NULL AUTO_INCREMENT,
  idanuncio int(11) NOT NULL,
  ruta_imagen varchar(255) NOT NULL,
  descripcion_imagen varchar(255) NOT NULL,
  nombre_directorio varchar(100) NOT NULL,
  numero_imagen int(11) DEFAULT NULL,
  PRIMARY KEY (idimagen)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA imagenes:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla marca
--

CREATE TABLE IF NOT EXISTS marca (
  idmarca int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  PRIMARY KEY (idmarca)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA marca:
--

--
-- Volcado de datos para la tabla marca
--

INSERT IGNORE INTO marca (idmarca, nombre) VALUES(1, 'Toyota');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(2, 'Nissan');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(3, 'Kia');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(4, 'Hyundai');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(5, 'Ford');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(6, 'Chrysler');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(7, 'Mitsubishi');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(8, 'Honda');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(9, 'Suzuki');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(10, 'Mazda');
INSERT IGNORE INTO marca (idmarca, nombre) VALUES(11, 'Nueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla modelo
--

CREATE TABLE IF NOT EXISTS modelo (
  idmodelo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  idmarca int(11) NOT NULL,
  PRIMARY KEY (idmodelo)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA modelo:
--

--
-- Volcado de datos para la tabla modelo
--

INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(1, 'Toyota Wigo', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(2, 'Toyota Yaris', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(3, 'Toyota FJ Cruiser', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(4, 'Toyota Fortuner', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(5, 'Toyota Rush', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(6, 'Toyota Prado', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(7, 'Toyota Rav4', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(8, 'Toyota Land Cruiser', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(9, 'Toyota Avanza', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(10, 'Toyota Avanza Veloz', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(11, 'Toyota Innova', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(12, 'Toyota Wish', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(13, 'Toyota Alphard', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(14, 'Ford EcoSport', 5);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(15, 'Ford Everest', 5);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(16, 'Ford Expedition', 5);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(17, 'Toyota Avensis', 1);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(18, 'Acord', 9);
INSERT IGNORE INTO modelo (idmodelo, nombre, idmarca) VALUES(19, 'Carro', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla pueblo
--

CREATE TABLE IF NOT EXISTS pueblo (
  idpueblo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) NOT NULL,
  PRIMARY KEY (idpueblo)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA pueblo:
--

--
-- Volcado de datos para la tabla pueblo
--

INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(1, 'Adjuntas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(2, 'Aguada');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(3, 'Aguadilla');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(4, 'Aguas Buenas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(5, 'Aibonito');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(6, 'Arecibo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(7, 'Arroyo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(8, 'Añasco');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(9, 'Barceloneta');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(10, 'Barranquitas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(11, 'Bayamón');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(12, 'Cabo Rojo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(13, 'Caguas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(14, 'Camuy');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(15, 'Canóvanas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(16, 'Carolina');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(17, 'Cataño');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(18, 'Cayey');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(19, 'Ceiba');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(20, 'Ciales');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(21, 'Cidra');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(22, 'Coamo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(23, 'Comerío');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(24, 'Corozal');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(25, 'Culebra');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(26, 'Dorado');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(27, 'Fajardo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(28, 'Florida');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(29, 'Guayama');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(30, 'Guayanilla');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(31, 'Guaynabo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(32, 'Gurabo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(33, 'Guánica');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(34, 'Hatillo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(35, 'Hormigueros');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(36, 'Humacao');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(37, 'Isabela');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(38, 'Jayuya');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(39, 'Juana Díaz');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(40, 'Juncos');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(41, 'Lajas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(42, 'Lares');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(43, 'Las Marías');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(44, 'Las Piedras');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(45, 'Loiza');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(46, 'Luquillo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(47, 'Manatí');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(48, 'Maricao');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(49, 'Maunabo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(50, 'Mayagüez');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(51, 'Moca');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(52, 'Morovis');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(53, 'Naguabo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(54, 'Naranjito');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(55, 'Orocovis');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(56, 'Patillas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(57, 'Peñuelas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(58, 'Ponce');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(59, 'Quebradillas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(60, 'Rincón');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(61, 'Rio Grande');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(62, 'Sabana Grande');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(63, 'Salinas');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(64, 'San Germán');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(65, 'San Juan');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(66, 'San Lorenzo');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(67, 'San Sebastián');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(68, 'Santa Isabel');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(69, 'Toa Alta');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(70, 'Toa Baja');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(71, 'Trujillo Alto');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(72, 'Utuado');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(73, 'Vega Alta');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(74, 'Vega Baja');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(75, 'Vieques');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(76, 'Villalba');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(77, 'Yabucoa');
INSERT IGNORE INTO pueblo (idpueblo, nombre) VALUES(78, 'Yauco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla transmission
--

CREATE TABLE IF NOT EXISTS transmission (
  idtransmission int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) NOT NULL.
  PRIMARY KEY (idtransmission)
)

--
-- RELACIONES PARA LA TABLA transmission:
--

--
-- Volcado de datos para la tabla transmission
--

INSERT IGNORE INTO transmission (idtransmission, nombre) VALUES(1, 'Automática');
INSERT IGNORE INTO transmission (idtransmission, nombre) VALUES(2, 'Standard');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
