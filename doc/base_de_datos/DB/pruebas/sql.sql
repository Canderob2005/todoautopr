CREATE TABLE usuarios (
    id_usuario int(11) not null,
    id_tipo_usuario int(11) not null,
    numbre varchar(255)  null,
    usuario varchar(255) not null,
    correo varchar(255) not null,
    pass varchar(255) not null,

); 

CREATE TABLE tipo_usuario (
    id_tipo_usuario int(11) not null,
    tipo_usuario varchar not null

); 

CREATE TABLE ficha (
    id_ficha int(11) not null,
    id_usuario int(11) not null,
    fecha int(11) not null,

);

CREATE TABLE inicio_sesion (
    id_inicio int(11) not null,
    id_usuario int(11) not null,
    fecha int(11) not null,
); 

