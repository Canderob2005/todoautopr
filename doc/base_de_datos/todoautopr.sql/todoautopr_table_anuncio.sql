
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pagado` varchar(2) NOT NULL,
  `direccion` int(11) DEFAULT 0,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `idmodelo` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `idclasificacion` int(11) DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idtransmission` int(11) DEFAULT NULL,
  `licencia` varchar(2) NOT NULL,
  `multas` varchar(2) NOT NULL,
  `millage` int(11) NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL,
  `imagen` int(11) DEFAULT 0,
  `full_lablel` varchar(2) DEFAULT NULL,
  `idpueblo` int(11) DEFAULT NULL,
  `precio` decimal(15,2) NOT NULL,
  `mejoroferta` varchar(2) DEFAULT NULL,
  `aprobado` varchar(2) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `anuncio`
--

TRUNCATE TABLE `anuncio`;
--
-- Volcado de datos para la tabla `anuncio`
--

INSERT IGNORE INTO `anuncio` (`idanuncio`, `nombre`, `pagado`, `direccion`, `telefono`, `email`, `idcategoria`, `idmarca`, `idmodelo`, `year`, `idclasificacion`, `idcondicion`, `idtransmission`, `licencia`, `multas`, `millage`, `descripcion`, `imagen`, `full_lablel`, `idpueblo`, `precio`, `mejoroferta`, `aprobado`) VALUES
(107, 'Carlos', 'si', 0, '1111111111', 'mail@mail.com', 7, 1, 2, 2023, 1, 1, 1, 'si', 'si', 112455, 'Descripcion ', 0, 'si', 1, '231321.00', 'si', 'si'),
(108, 'Carlos', 'si', 0, '9392777333', 'mail@mail.com', 2, 1, 11, 2014, 1, 1, 1, 'si', 'si', 4555, 'b sdgfnbfgsnfg', 0, 'si', 10, '4556.00', 'si', 'no'),
(109, 'Carlos Aleman', 'si', 0, '9392777333', 'caleman9791@gmial.com', 2, 1, 2, 2023, 1, 1, 1, 'si', 'no', 231123, 'Descripción del vehículo ', 0, 'si', 71, '132231.00', 'si', 'no');
