

CREATE TABLE usuario (
    idusuario int(11) not null,
    nombre varchar(20),
    apellido varchar(20),
    nombre_usuario varchar(20),
    email varchar(30),
    pass varchar(30),
    telefono int(10),
    id_rol_usuaro int(11),
    activacion int(11) NOT NULL DEFAULT '0',
    token varchar(40) NOT NULL,
    token_password varchar(100) DEFAULT NULL,
    password_request int(11) DEFAULT '0',
); 

ALTER TABLE usuario (
    ADD activacion int(11) NOT NULL DEFAULT '0'
    ADD token varchar(40) NOT NULL
    ADD token_password varchar(100) DEFAULT NULL
    ADD password_request int(11) DEFAULT '0'
);

-- //////////////////////////////////////////////
--  Fracmento de base dedatos pre confiogurado 
-- ------------------------------------------
-- CREATE TABLE IF NOT EXISTS `usuarios` (
--   `id` int(11) NOT NULL,
--   `usuario` varchar(30) NOT NULL,
--   `password` varchar(130) NOT NULL,
--   `nombre` varchar(100) NOT NULL,
--   `correo` varchar(80) NOT NULL,
--   `last_session` datetime DEFAULT NULL,
--   `activacion` int(11) NOT NULL DEFAULT '0',
--   `token` varchar(40) NOT NULL,
--   `token_password` varchar(100) DEFAULT NULL,
--   `password_request` int(11) DEFAULT '0',
--   `id_tipo` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- //////////////////////////////////////////////

CREATE TABLE usuario_aunncios (
idusuario_aunncios int(11) not null,
Fecha date,
idanuncio int(11),

); 

CREATE TABLE rol_usuaro (
id_rol_usuaro int(11) not null,
nombre_rol varchar(20),
); 



CREATE TABLE preguntas_seguridad (
idusuario int(11) not null,
idpregunta int(11) not null,
pregunta varchar(255),
respuesta varchar(255),
); 


CREATE TABLE ficha_seguridad (
id_ficha_int(11) not null,
idusuario int(11) not null,
fecha date,
); 


CREATE TABLE ficha_recuperacion (
ficha_recuperacion(11) not null,
cpdigo int(11) not null,
idusuario int(11) not null,
); 













CREATE TABLE xxxxxx (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 

CREATE TABLE xxxxxx (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 

CREATE TABLE xxxxxx (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
); 

