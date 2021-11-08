
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `modelo`
--

TRUNCATE TABLE `modelo`;
--
-- Volcado de datos para la tabla `modelo`
--

INSERT IGNORE INTO `modelo` (`idmodelo`, `nombre`, `idmarca`) VALUES
(1, 'Toyota Wigo', 1),
(2, 'Toyota Yaris', 1),
(3, 'Toyota FJ Cruiser', 1),
(4, 'Toyota Fortuner', 1),
(5, 'Toyota Rush', 1),
(6, 'Toyota Prado', 1),
(7, 'Toyota Rav4', 1),
(8, 'Toyota Land Cruiser', 1),
(9, 'Toyota Avanza', 1),
(10, 'Toyota Avanza Veloz', 1),
(11, 'Toyota Innova', 1),
(12, 'Toyota Wish', 1),
(13, 'Toyota Alphard', 1),
(14, 'Ford EcoSport', 5),
(15, 'Ford Everest', 5),
(16, 'Ford Expedition', 5),
(17, 'Toyota Avensis', 1),
(18, 'Acord', 9);
