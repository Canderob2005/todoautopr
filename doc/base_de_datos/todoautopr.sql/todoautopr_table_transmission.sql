
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmission`
--

CREATE TABLE `transmission` (
  `idtransmission` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `transmission`
--

TRUNCATE TABLE `transmission`;
--
-- Volcado de datos para la tabla `transmission`
--

INSERT IGNORE INTO `transmission` (`idtransmission`, `nombre`) VALUES
(1, 'Automática'),
(2, 'Standard');
