
CREATE TABLE IF NOT EXISTS anuncio (
idanuncio int(11) NOT NULL AUTO_INCREMENT,
nombre varchar(50) NOT NULL,
pagado varchar(5) NOT NULL,
-- direccion text DEFAULT NULL,
telefono varchar(20) NOT NULL,
email varchar(255) NOT NULL,
categoria varchar(50) DEFAULT NULL,
marca varchar(255) DEFAULT NULL,
modelo varchar(255) DEFAULT NULL,
ano int(11) DEFAULT NULL, 
---
clasificacion varchar(255) DEFAULT NULL,
condicion varchar(255) DEFAULT NULL,
transmission varchar(255) DEFAULT NULL,
licencia varchar(2) NOT NULL,
multas varchar(2) NOT NULL,
millage int(11) NOT NULL DEFAULT 0,
descripcion text NOT NULL,
-- imagen varchar(255) DEFAULT NULL,
full_lablel varchar(2) DEFAULT NULL,
pueblo varchar(255) DEFAULT NULL,
precio decimal(15,2) NOT NULL,
mejoroferta varchar(2) DEFAULT NULL,
PRIMARY KEY (idanuncio)
);


CREATE TABLE IF NOT EXISTS imagenes (
idimagen int(11) NOT NULL AUTO_INCREMENT,
idanuncio int(11) NOT NULL,
ruta_imagen varchar(255) NOT NULL,
descripcion_imagen varchar(255) NOT NULL,
nombre_directorio varchar(255) NOT NULL,
PRIMARY KEY (idimagen)
);

CREATE TABLE IF NOT EXISTS transmission (
idtransmission int(11) NOT NULL AUTO_INCREMENT,
nombre varchar(20) NOT NULL,
PRIMARY KEY (idtransmission)
);


-

CREATE TABLE IF NOT EXIST categoria (
idcategoria int(11) NOT NULL AUTO_INCREMENT,
`nombre` varchar(50) NOT NULL,
PRIMARY KEY (idcategoria)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE IF NOT EXIST clasificacion (
idclasificacion int(11) NOT NULL AUTO_INCREMENT,
nombre varchar(50) NOT NULL,
PRIMARY KEY (idclasificacion)
); 

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE IF NOT EXIST condicion (
idcondicion int(11) NOT NULL AUTO_INCREMENT,
nombre varchar(50) NOT NULL,
PRIMARY KEY (idcondicion)
); 

CREATE TABLE IF NOT EXISTS pueblo (
idpueblo int(11) NOT NULL AUTO_INCREMENT,
nombre varchar(20) NOT NULL,
PRIMARY KEY (idpueblo)

);

CREATE TABLE `marca` (
  idmarca int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  PRIMARY KEY (idmarca)
);

CREATE TABLE `modelo` (
  idmodelo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  idmarca int(11) NOT NULL,
  PRIMARY KEY (idmodelo)
);