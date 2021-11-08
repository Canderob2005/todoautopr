
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `nombre_usuario` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `id_rol_usuaro` int(11) DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `token_password` varchar(255) DEFAULT NULL,
  `password_request` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

INSERT IGNORE INTO `usuario` (`idusuario`, `nombre`, `apellido`, `nombre_usuario`, `email`, `pass`, `telefono`, `id_rol_usuaro`, `activacion`, `token`, `token_password`, `password_request`) VALUES
(1, 'carlos', NULL, 'user88', 'mail@mail.com', '$2y$10$rABv/kD87V6kroKId6mptepa42CgzrLMLWYqZCDTzFQMKQoKWt436', NULL, NULL, 0, '093d2f732dfd40e036a008bd2382dcf441794fa8dfc6e811b5889529e270eb72013300b546cb3770894be611fdc006a035ffdedaecf0d97cea48d2e6894894ebff584db1b6f3c33f90069a4d61bc', NULL, 0);
