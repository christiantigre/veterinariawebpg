-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2017 a las 14:50:30
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u873982574_austr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `educacion` text COLLATE utf8mb4_unicode_ci,
  `frase` text COLLATE utf8mb4_unicode_ci,
  `abrev` text COLLATE utf8mb4_unicode_ci,
  `pais` text COLLATE utf8mb4_unicode_ci,
  `ciudad` text COLLATE utf8mb4_unicode_ci,
  `nameimg` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `nombres`, `apellidos`, `fecha_nacimiento`, `telefono`, `celular`, `domicilio`, `email`, `img`, `educacion`, `frase`, `abrev`, `pais`, `ciudad`, `nameimg`, `password`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Austrogen', NULL, NULL, NULL, NULL, NULL, NULL, 'austrogen.sv@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$t0ny7y.Ix7w9TOtcmz5.buM6CjcjmdlQ9vc/WUe2byRasyG6MWMPi', 1, 'geMxPrERALtknP4eA2zacLyDvQJ8FwzdwOXGXHptVPOqonor4AOgyUs3cJqG', '2017-09-28 00:23:01', '2017-09-28 00:23:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `subtitle2` text COLLATE utf8mb4_unicode_ci,
  `subtitle3` text COLLATE utf8mb4_unicode_ci,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `paragraph` text COLLATE utf8mb4_unicode_ci,
  `detall` text COLLATE utf8mb4_unicode_ci,
  `linkcard` text COLLATE utf8mb4_unicode_ci,
  `img` text COLLATE utf8mb4_unicode_ci,
  `imgHeader` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `title`, `subtitle`, `subtitle2`, `subtitle3`, `intro`, `paragraph`, `detall`, `linkcard`, `img`, `imgHeader`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Peluqueria', 'Estilo canino', 'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización', 'Los cortes de la actualidad', NULL, 'Realizamos el corte de lana de tus mascotas al estilo que tu quieras.', NULL, NULL, NULL, NULL, 1, '2017-09-28 03:20:48', '2017-09-28 04:10:32'),
(2, 'Medicación', 'Salud', 'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización', 'Medicación para tus mascotas.', NULL, 'Medicación para tus mascotas.', NULL, NULL, NULL, NULL, 1, '2017-09-28 03:21:40', '2017-09-28 04:10:24'),
(3, 'Esterilización', 'Esterilización', 'Medicación para tus mascotas. Esterilización Medicación para tus mascotas, esterilización', NULL, NULL, 'Realizamos la esterilización de toda mascota', NULL, NULL, NULL, NULL, 1, '2017-09-28 03:22:20', '2017-09-28 03:57:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Sanidad animal', NULL, 0, '2017-09-29 17:53:09', '2017-10-15 11:32:45'),
(2, 'Entretenimiento', NULL, 0, '2017-09-29 17:53:14', '2017-09-30 11:53:18'),
(3, 'Fotografía', NULL, 0, '2017-09-29 17:53:19', '2017-09-30 11:53:22'),
(4, 'Reproducción animal', NULL, 0, '2017-09-29 17:53:27', '2017-10-28 18:03:47'),
(5, 'Medicina', NULL, 0, '2017-09-29 17:53:34', '2017-09-30 11:53:33'),
(6, 'Nutrición', NULL, 0, '2017-09-29 17:53:40', '2017-09-30 11:53:39'),
(7, 'Equipos de trabajo', NULL, 1, '2017-09-30 11:52:30', '2017-10-15 10:55:17'),
(8, 'Medicina', NULL, 0, '2017-09-30 11:52:37', '2017-10-28 18:03:29'),
(9, 'Mascotas', NULL, 0, '2017-09-30 11:52:44', '2017-10-15 11:33:01'),
(10, 'Eventos', NULL, 0, '2017-09-30 11:52:50', '2017-10-28 18:02:34'),
(11, 'Cursos', NULL, 1, '2017-09-30 11:53:00', '2017-10-14 05:49:08'),
(12, 'Ventas', NULL, 1, '2017-10-15 10:51:33', '2017-10-15 10:51:33'),
(13, 'Acesoría técnica', NULL, 0, '2017-10-15 10:54:33', '2017-10-28 18:04:18'),
(14, 'Varios', NULL, 0, '2017-10-15 10:55:43', '2017-10-28 18:03:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_province` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasification_courses`
--

CREATE TABLE `clasification_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `clasification` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `typecourse_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clasification_courses`
--

INSERT INTO `clasification_courses` (`id`, `clasification`, `body`, `slug`, `visible`, `typecourse_id`, `created_at`, `updated_at`) VALUES
(1, 'Pastos y forrajes', NULL, NULL, 1, 5, '2017-10-15 08:31:14', '2017-10-27 02:23:28'),
(2, 'Reproducción animal', NULL, NULL, 0, 1, '2017-10-15 08:31:34', '2017-10-15 08:31:34'),
(3, 'Sanidad animal', NULL, NULL, 0, 1, '2017-10-15 08:31:44', '2017-10-15 08:31:44'),
(4, 'Proyectos agropecuarios', NULL, NULL, 0, 1, '2017-10-15 08:31:57', '2017-10-15 08:31:57'),
(5, 'Porcinos', NULL, NULL, 0, 1, '2017-10-15 08:33:08', '2017-10-15 08:33:08'),
(6, 'Ovinos', NULL, NULL, 0, 1, '2017-10-15 08:33:16', '2017-10-15 08:33:16'),
(7, 'Aves', NULL, NULL, 0, 1, '2017-10-15 08:33:23', '2017-10-15 08:33:23'),
(8, 'Caprinos', NULL, NULL, 0, 1, '2017-10-15 08:33:32', '2017-10-15 08:33:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `iso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `iso`, `country`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afganistán', NULL, NULL),
(2, 'AX', 'Islas Gland', NULL, NULL),
(3, 'AL', 'Albania', NULL, NULL),
(4, 'DE', 'Alemania', NULL, NULL),
(5, 'AD', 'Andorra', NULL, NULL),
(6, 'AO', 'Angola', NULL, NULL),
(7, 'AI', 'Anguilla', NULL, NULL),
(8, 'AQ', 'Antártida', NULL, NULL),
(9, 'AG', 'Antigua y Barbuda', NULL, NULL),
(10, 'AN', 'Antillas Holandesas', NULL, NULL),
(11, 'SA', 'Arabia Saudí', NULL, NULL),
(12, 'DZ', 'Argelia', NULL, NULL),
(13, 'AR', 'Argentina', NULL, NULL),
(14, 'AM', 'Armenia', NULL, NULL),
(15, 'AW', 'Aruba', NULL, NULL),
(16, 'AU', 'Australia', NULL, NULL),
(17, 'AT', 'Austria', NULL, NULL),
(18, 'AZ', 'Azerbaiyán', NULL, NULL),
(19, 'BS', 'Bahamas', NULL, NULL),
(20, 'BH', 'Bahréin', NULL, NULL),
(21, 'BD', 'Bangladesh', NULL, NULL),
(22, 'BB', 'Barbados', NULL, NULL),
(23, 'BY', 'Bielorrusia', NULL, NULL),
(24, 'BE', 'Bélgica', NULL, NULL),
(25, 'BZ', 'Belice', NULL, NULL),
(26, 'BJ', 'Benin', NULL, NULL),
(27, 'BM', 'Bermudas', NULL, NULL),
(28, 'BT', 'Bhután', NULL, NULL),
(29, 'BO', 'Bolivia', NULL, NULL),
(30, 'BA', 'Bosnia y Herzegovina', NULL, NULL),
(31, 'BW', 'Botsuana', NULL, NULL),
(32, 'BV', 'Isla Bouvet', NULL, NULL),
(33, 'BR', 'Brasil', NULL, NULL),
(34, 'BN', 'Brunéi', NULL, NULL),
(35, 'BG', 'Bulgaria', NULL, NULL),
(36, 'BF', 'Burkina Faso', NULL, NULL),
(37, 'BI', 'Burundi', NULL, NULL),
(38, 'CV', 'Cabo Verde', NULL, NULL),
(39, 'KY', 'Islas Caimán', NULL, NULL),
(40, 'KH', 'Camboya', NULL, NULL),
(41, 'CM', 'Camerún', NULL, NULL),
(42, 'CA', 'Canadá', NULL, NULL),
(43, 'CF', 'República-Centroafricana', NULL, NULL),
(44, 'TD', 'Chad', NULL, NULL),
(45, 'CZ', 'República Checa', NULL, NULL),
(46, 'CL', 'Chile', NULL, NULL),
(47, 'CN', 'China', NULL, NULL),
(48, 'CY', 'Chipre', NULL, NULL),
(49, 'CX', 'Isla de Navidad', NULL, NULL),
(50, 'VA', 'Ciudad del Vaticano', NULL, NULL),
(51, 'CC', 'Islas Cocos', NULL, NULL),
(52, 'CO', 'Colombia', NULL, NULL),
(53, 'KM', 'Comoras', NULL, NULL),
(54, 'CD', 'República-Democrática del Congo', NULL, NULL),
(55, 'CG', 'Congo', NULL, NULL),
(56, 'CK', 'Islas Cook', NULL, NULL),
(57, 'KP', 'Corea del Norte', NULL, NULL),
(58, 'KR', 'Corea del Sur', NULL, NULL),
(59, 'CI', 'Costa de Marfil', NULL, NULL),
(60, 'CR', 'Costa Rica', NULL, NULL),
(61, 'HR', 'Croacia', NULL, NULL),
(62, 'CU', 'Cuba', NULL, NULL),
(63, 'DK', 'Dinamarca', NULL, NULL),
(64, 'DM', 'Dominica', NULL, NULL),
(65, 'DO', 'República Dominicana', NULL, NULL),
(66, 'EC', 'Ecuador', NULL, NULL),
(67, 'EG', 'Egipto', NULL, NULL),
(68, 'SV', 'El Salvador', NULL, NULL),
(69, 'AE', 'Emiratos Árabes Unidos', NULL, NULL),
(70, 'ER', 'Eritrea', NULL, NULL),
(71, 'SK', 'Eslovaquia', NULL, NULL),
(72, 'SI', 'Eslovenia', NULL, NULL),
(73, 'ES', 'España', NULL, NULL),
(74, 'UM', 'Islas ultramarinas de Estados Unidos', NULL, NULL),
(75, 'US', 'Estados Unidos', NULL, NULL),
(76, 'EE', 'Estonia', NULL, NULL),
(77, 'ET', 'Etiopía', NULL, NULL),
(78, 'FO', 'Islas Feroe', NULL, NULL),
(79, 'PH', 'Filipinas', NULL, NULL),
(80, 'FI', 'Finlandia', NULL, NULL),
(81, 'FJ', 'Fiyi', NULL, NULL),
(82, 'FR', 'Francia', NULL, NULL),
(83, 'GA', 'Gabón', NULL, NULL),
(84, 'GM', 'Gambia', NULL, NULL),
(85, 'GE', 'Georgia', NULL, NULL),
(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur', NULL, NULL),
(87, 'GH', 'Ghana', NULL, NULL),
(88, 'GI', 'Gibraltar', NULL, NULL),
(89, 'GD', 'Granada', NULL, NULL),
(90, 'GR', 'Grecia', NULL, NULL),
(91, 'GL', 'Groenlandia', NULL, NULL),
(92, 'GP', 'Guadalupe', NULL, NULL),
(93, 'GU', 'Guam', NULL, NULL),
(94, 'GT', 'Guatemala', NULL, NULL),
(95, 'GF', 'Guayana Francesa', NULL, NULL),
(96, 'GN', 'Guinea', NULL, NULL),
(97, 'GQ', 'Guinea Ecuatorial', NULL, NULL),
(98, 'GW', 'Guinea-Bissau', NULL, NULL),
(99, 'GY', 'Guyana', NULL, NULL),
(100, 'HT', 'Haití', NULL, NULL),
(101, 'HM', 'Islas Heard y McDonald', NULL, NULL),
(102, 'HN', 'Honduras', NULL, NULL),
(103, 'HK', 'Hong Kong', NULL, NULL),
(104, 'HU', 'Hungría', NULL, NULL),
(105, 'IN', 'India', NULL, NULL),
(106, 'ID', 'Indonesia', NULL, NULL),
(107, 'IR', 'Irán', NULL, NULL),
(108, 'IQ', 'Iraq', NULL, NULL),
(109, 'IE', 'Irlanda', NULL, NULL),
(110, 'IS', 'Islandia', NULL, NULL),
(111, 'IL', 'Israel', NULL, NULL),
(112, 'IT', 'Italia', NULL, NULL),
(113, 'JM', 'Jamaica', NULL, NULL),
(114, 'JP', 'Japón', NULL, NULL),
(115, 'JO', 'Jordania', NULL, NULL),
(116, 'KZ', 'Kazajstán', NULL, NULL),
(117, 'KE', 'Kenia', NULL, NULL),
(118, 'KG', 'Kirguistán', NULL, NULL),
(119, 'KI', 'Kiribati', NULL, NULL),
(120, 'KW', 'Kuwait', NULL, NULL),
(121, 'LA', 'Laos', NULL, NULL),
(122, 'LS', 'Lesotho', NULL, NULL),
(123, 'LV', 'Letonia', NULL, NULL),
(124, 'LB', 'Líbano', NULL, NULL),
(125, 'LR', 'Liberia', NULL, NULL),
(126, 'LY', 'Libia', NULL, NULL),
(127, 'LI', 'Liechtenstein', NULL, NULL),
(128, 'LT', 'Lituania', NULL, NULL),
(129, 'LU', 'Luxemburgo', NULL, NULL),
(130, 'MO', 'Macao', NULL, NULL),
(131, 'MK', 'ARY Macedonia', NULL, NULL),
(132, 'MG', 'Madagascar', NULL, NULL),
(133, 'MY', 'Malasia', NULL, NULL),
(134, 'MW', 'Malawi', NULL, NULL),
(135, 'MV', 'Maldivas', NULL, NULL),
(136, 'ML', 'Malí', NULL, NULL),
(137, 'MT', 'Malta', NULL, NULL),
(138, 'FK', 'Islas Malvinas', NULL, NULL),
(139, 'MP', 'Islas Marianas del Norte', NULL, NULL),
(140, 'MA', 'Marruecos', NULL, NULL),
(141, 'MH', 'Islas Marshall', NULL, NULL),
(142, 'MQ', 'Martinica', NULL, NULL),
(143, 'MU', 'Mauricio', NULL, NULL),
(144, 'MR', 'Mauritania', NULL, NULL),
(145, 'YT', 'Mayotte', NULL, NULL),
(146, 'MX', 'México', NULL, NULL),
(147, 'FM', 'Micronesia', NULL, NULL),
(148, 'MD', 'Moldavia', NULL, NULL),
(149, 'MC', 'Mónaco', NULL, NULL),
(150, 'MN', 'Mongolia', NULL, NULL),
(151, 'MS', 'Montserrat', NULL, NULL),
(152, 'MZ', 'Mozambique', NULL, NULL),
(153, 'MM', 'Myanmar', NULL, NULL),
(154, 'NA', 'Namibia', NULL, NULL),
(155, 'NR', 'Nauru', NULL, NULL),
(156, 'NP', 'Nepal', NULL, NULL),
(157, 'NI', 'Nicaragua', NULL, NULL),
(158, 'NE', 'Níger', NULL, NULL),
(159, 'NG', 'Nigeria', NULL, NULL),
(160, 'NU', 'Niue', NULL, NULL),
(161, 'NF', 'Isla Norfolk', NULL, NULL),
(162, 'NO', 'Noruega', NULL, NULL),
(163, 'NC', 'Nueva Caledonia', NULL, NULL),
(164, 'NZ', 'Nueva Zelanda', NULL, NULL),
(165, 'OM', 'Omán', NULL, NULL),
(166, 'NL', 'Países Bajos', NULL, NULL),
(167, 'PK', 'Pakistán', NULL, NULL),
(168, 'PW', 'Palau', NULL, NULL),
(169, 'PS', 'Palestina', NULL, NULL),
(170, 'PA', 'Panamá', NULL, NULL),
(171, 'PG', 'Papúa Nueva Guinea', NULL, NULL),
(172, 'PY', 'Paraguay', NULL, NULL),
(173, 'PE', 'Perú', NULL, NULL),
(174, 'PN', 'Islas Pitcairn', NULL, NULL),
(175, 'PF', 'Polinesia Francesa', NULL, NULL),
(176, 'PL', 'Polonia', NULL, NULL),
(177, 'PT', 'Portugal', NULL, NULL),
(178, 'PR', 'Puerto Rico', NULL, NULL),
(179, 'QA', 'Qatar', NULL, NULL),
(180, 'GB', 'Reino Unido', NULL, NULL),
(181, 'RE', 'Reunión', NULL, NULL),
(182, 'RW', 'Ruanda', NULL, NULL),
(183, 'RO', 'Rumania', NULL, NULL),
(184, 'RU', 'Rusia', NULL, NULL),
(185, 'EH', 'Sahara Occidental', NULL, NULL),
(186, 'SB', 'Islas Salomón', NULL, NULL),
(187, 'WS', 'Samoa', NULL, NULL),
(188, 'AS', 'Samoa Americana', NULL, NULL),
(189, 'KN', 'San Cristóbal y Nevis', NULL, NULL),
(190, 'SM', 'San Marino', NULL, NULL),
(191, 'PM', 'San Pedro y Miquelón', NULL, NULL),
(192, 'VC', 'San Vicente y las Granadinas', NULL, NULL),
(193, 'SH', 'Santa Helena', NULL, NULL),
(194, 'LC', 'Santa Lucía', NULL, NULL),
(195, 'ST', 'Santo Tomé y Príncipe', NULL, NULL),
(196, 'SN', 'Senegal', NULL, NULL),
(197, 'CS', 'Serbia y Montenegro', NULL, NULL),
(198, 'SC', 'Seychelles', NULL, NULL),
(199, 'SL', 'Sierra Leona', NULL, NULL),
(200, 'SG', 'Singapur', NULL, NULL),
(201, 'SY', 'Siria', NULL, NULL),
(202, 'SO', 'Somalia', NULL, NULL),
(203, 'LK', 'Sri Lanka', NULL, NULL),
(204, 'SZ', 'Suazilandia', NULL, NULL),
(205, 'ZA', 'Sudáfrica', NULL, NULL),
(206, 'SD', 'Sudán', NULL, NULL),
(207, 'SE', 'Suecia', NULL, NULL),
(208, 'CH', 'Suiza', NULL, NULL),
(209, 'SR', 'Surinam', NULL, NULL),
(210, 'SJ', 'Svalbard y Jan Mayen', NULL, NULL),
(211, 'TH', 'Tailandia', NULL, NULL),
(212, 'TW', 'Taiwán', NULL, NULL),
(213, 'TZ', 'Tanzania', NULL, NULL),
(214, 'TJ', 'Tayikistán', NULL, NULL),
(215, 'IO', 'Territorio Británico del Océano Índico', NULL, NULL),
(216, 'TF', 'Territorios Australes Franceses', NULL, NULL),
(217, 'TL', 'Timor Oriental', NULL, NULL),
(218, 'TG', 'Togo', NULL, NULL),
(219, 'TK', 'Tokelau', NULL, NULL),
(220, 'TO', 'Tonga', NULL, NULL),
(221, 'TT', 'Trinidad y Tobago', NULL, NULL),
(222, 'TN', 'Túnez', NULL, NULL),
(223, 'TC', 'Islas Turcas y Caicos', NULL, NULL),
(224, 'TM', 'Turkmenistán', NULL, NULL),
(225, 'TR', 'Turquía', NULL, NULL),
(226, 'TV', 'Tuvalu', NULL, NULL),
(227, 'UA', 'Ucrania', NULL, NULL),
(228, 'UG', 'Uganda', NULL, NULL),
(229, 'UY', 'Uruguay', NULL, NULL),
(230, 'UZ', 'Uzbekistán', NULL, NULL),
(231, 'VU', 'Vanuatu', NULL, NULL),
(232, 'VE', 'Venezuela', NULL, NULL),
(233, 'VN', 'Vietnam', NULL, NULL),
(234, 'VG', 'Islas Vírgenes Británicas', NULL, NULL),
(235, 'VI', 'Isla Vírgene Estados Unidos', NULL, NULL),
(236, 'WF', 'Wallis y Futuna', NULL, NULL),
(237, 'YE', 'Yemen', NULL, NULL),
(238, 'DJ', 'Yibuti', NULL, NULL),
(239, 'ZM', 'Zambia', NULL, NULL),
(240, 'ZW', 'Zimbabue', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duration` text COLLATE utf8mb4_unicode_ci,
  `hours` text COLLATE utf8mb4_unicode_ci,
  `hourdesde` text COLLATE utf8mb4_unicode_ci,
  `hourhasta` text COLLATE utf8mb4_unicode_ci,
  `dais` text COLLATE utf8mb4_unicode_ci,
  `precio` text COLLATE utf8mb4_unicode_ci,
  `precio_teorico` text COLLATE utf8mb4_unicode_ci,
  `precio_practico` text COLLATE utf8mb4_unicode_ci,
  `fechainit` date DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `visibleslider` tinyint(1) NOT NULL DEFAULT '1',
  `nameslider` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponibles` int(11) DEFAULT NULL,
  `clasification_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `title`, `subtitle`, `content`, `description`, `duration`, `hours`, `hourdesde`, `hourhasta`, `dais`, `precio`, `precio_teorico`, `precio_practico`, `fechainit`, `img`, `nameimg`, `video`, `link`, `visible`, `visibleslider`, `nameslider`, `disponibles`, `clasification_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'TEÓRICO - SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES', 'TEÓRICO', '<p style=\"text-align: justify;\">El primer Seminario Internacional de pastos y forrajes se realizar&aacute; en la ciudad de Cuenca - Ecuador, los d&iacute;as mi&eacute;rcoles 06, jueves 07, viernes 08 y s&aacute;bado 09 de diciembre del 2017, en el paraninfo de la Escuela de Medicina Veterinaria de la Universidad Cat&oacute;lica de Cuenca.</p>\r\n<p style=\"text-align: justify;\">El objetivo del seminario es difundir investigaciones de campo realizadas&nbsp; en el manejo y producci&oacute;n de pastos y forrajes de manera Agroempresarial, para incrementar la producci&oacute;n de leche y carne</p>\r\n<p style=\"text-align: center;\"><strong>AGENDA DEL EVENTO</strong></p>\r\n<table style=\"width: 595px; background-color: #9ee8dc; border-color: #000000; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>MI&Eacute;RCOLES&nbsp; 06 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 581px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>7:00 - 8:00 </strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p>Registro de participantes y entrega de participantes</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>8:00 - 8:30</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p>Bienvenida e Inauguraci&oacute;n del evento</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>8:30 - 10:30</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>La Realidad de nuestra ganader&iacute;a en los &uacute;ltimos 25 a&ntilde;os y los retos hacia una agro ganader&iacute;a empresarial sostenible en carne y leche.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Dr. Juan Pablo Garz&oacute;n</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>10:30 - 11:00</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>11:00 - 12:45</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Resultados de investigaciones en la producci&oacute;n de leche mediante la alimentaci&oacute;n del sistema pastoril.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing.&nbsp; Juan Pedro Alvarado</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>12:45 -14:00</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 581px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>14:00 - 16:00 </strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Programa de mecanizaci&oacute;n y acondicionadores de suelo en producci&oacute;n de forraje.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing. Paul Francis Gibson.</p>\r\n<p>Ing. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>16:00 - 16:30</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>16:30 - 18:30</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Fertilizaci&oacute;n y sistemas de riego dentro de la empresa&nbsp; de&nbsp; forrajes de alta calidad.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing. Paul Francis Gibson.</p>\r\n<p>Ing. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<table style=\"width: 592px; background-color: #6ee676; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>JUEVES 07 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 578px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>7:30 - 9:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>La producci&oacute;n de forrajes en cantidad y calidad como base para el desarrollo del potencial gen&eacute;tico&nbsp; en producci&oacute;n de carne y leche.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>09:30 - 10:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>10:00 - 12:00</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Programa de establecimiento de pasturas tecnificadas dentro de la ganader&iacute;a agro empresarial.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>12:00 - 13:30</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 578px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>13:30 - 15:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Plan de acci&oacute;n de una finca ganadera &nbsp;- Conversatorio</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>15:30 - 16:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>16:00 - 18:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Investigaciones de campo en fertilizaci&oacute;n de suelos para la producci&oacute;n forrajera.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pelaez.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<table style=\"width: 587px; background-color: #999ce8; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>VIERNES&nbsp; 08 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 245px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 577px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>7:30 - 9:30</strong></p>\r\n</td>\r\n<td style=\"width: 245px;\">\r\n<p>Estado &oacute;ptimo del forraje para el aprovechamiento nutricional en la alimentaci&oacute;n del ganado bovino</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>09:30 - 10:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>10:00 - 12:00</strong></p>\r\n</td>\r\n<td style=\"width: 245px;\">\r\n<p>Como administrar potreros como verdaderas empresas y pastos como verdaderos cultivos.</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>12:00 - 13:30</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 577px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>13:30 - 15:30</strong></p>\r\n</td>\r\n<td style=\"width: 245px;\">\r\n<p>Producci&oacute;n de carne y leche&nbsp; por &aacute;rea con pasturas tecnificadas para llegar a ser a agricultores empresarios ganaderos.</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>15:30-16:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 111px;\">\r\n<p><strong>16:00 17:00</strong></p>\r\n</td>\r\n<td style=\"width: 245px;\">\r\n<p>Conversatorio y Preguntas de los temas tratados</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pelaez.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<h4 style=\"text-align: justify;\"><strong>PONENTES</strong></h4>\r\n<h4 style=\"text-align: justify;\"><strong>ING. AGR. &Aacute;LVARO RODAS PEL&Aacute;EZ.</strong></h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Ingeniero agropecuario por la Universidad de Caldas &ndash; Colombia</h4>\r\n</li>\r\n<li>\r\n<h4>Gerente: Tierra Pastos &amp; Ganado Ltda.</h4>\r\n</li>\r\n<li>\r\n<h4>Investigador en Suelos, Pastos y Forrajes</h4>\r\n</li>\r\n<li>\r\n<h4>Conferencista Internacional en Suelos Pastos y Forrajes</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>ING. AGR. PAUL FRANCIS GIBSON. &nbsp;- ING. AGR. PETER NEALE&nbsp; HAPETA</strong>.</h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>T&eacute;cnicos Neozelandeses especialistas en manejo de pastos</h4>\r\n</li>\r\n<li>\r\n<h4>Senior Advisor.</h4>\r\n</li>\r\n<li>\r\n<h4>Production Management - Dairy Farming Level 5</h4>\r\n</li>\r\n<li>\r\n<h4>Offshore Farm Development Manager, Dairy Solutionz</h4>\r\n</li>\r\n<li>\r\n<h4>Empresa consultora de pastos - Kiwi Farming Associates</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>DR. MVZ. MSC. JUAN PABLO GARZ&Oacute;N PRADO</strong></h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Doctor en Medicina Veterinaria y Zootecnia por la Universidad Central de Ecuador</h4>\r\n</li>\r\n</ul>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Master en Reproducci&oacute;n Animal por la Universidad de Cuenca</h4>\r\n</li>\r\n<li>\r\n<h4>Diplomado en Pedagog&iacute;as Innovadoras</h4>\r\n</li>\r\n<li>\r\n<h4>Investigador Agropecuario</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>ING. MSC. JUAN PEDRO ALVARADO MOLINA</strong></h4>\r\n<ul>\r\n<li style=\"text-align: justify;\">\r\n<h4>Ingeniero Agropecuario por la Universidad Polit&eacute;cnica Salesiana</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Magister en Producci&oacute;n Animal - Escuela Superior del Ej&eacute;rcito</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Egresado en la Especializaci&oacute;n en Nutrici&oacute;n Animal con &Eacute;nfasis en Rumiantes</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Egresado en la Maestr&iacute;a de Reproducci&oacute;n Animal &ndash; Universidad de Cuenca</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Especializaci&oacute;n en Ecofisiolog&iacute;a Aplicada al Manejo de Pasturas - Universidad de Mar del Plata - Argentina</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Doctorando en Ciencias Animales, en Curso - Universidad de Rosario -Argentina</h4>\r\n</li>\r\n</ul>', '40', NULL, '07:00', '18:00', 'Miércoles - Jueves - Viernes', '120', '120', '0', '2017-12-06', 'uploads/courses/DEI1.PNG', 'DEI1.PNG', '', NULL, 1, 1, 'SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES', 398, 1, 1, '2017-10-27 01:10:05', '2017-11-06 05:11:04'),
(2, 'TEORÍA MAS PRÁCTICA - SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES', 'TEORÍA MAS PRÁCTICA', '<p>El primer Seminario Internacional de pastos y forrajes se realizar&aacute; en la ciudad de Cuenca - Ecuador, los d&iacute;as mi&eacute;rcoles 06, jueves 07, viernes 08 y s&aacute;bado 09 de diciembre del 2017, en el paraninfo de la Escuela de Medicina Veterinaria de la Universidad Cat&oacute;lica de Cuenca.</p>\r\n<p>El objetivo del seminario es difundir investigaciones de campo realizadas&nbsp; en el manejo y producci&oacute;n de pastos y forrajes de manera Agroempresarial, para incrementar la producci&oacute;n de leche y carne</p>\r\n<p style=\"text-align: center;\"><strong>AGENDA DEL EVENTO</strong></p>\r\n<table style=\"width: 595px; background-color: #9ee8dc; border-color: #000000; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>MI&Eacute;RCOLES&nbsp; 06 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 581px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>7:00 - 8:00 </strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p>Registro de participantes y entrega de participantes</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>8:00 - 8:30</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p>Bienvenida e Inauguraci&oacute;n del evento</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>8:30 - 10:30</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>La Realidad de nuestra ganader&iacute;a en los &uacute;ltimos 25 a&ntilde;os y los retos hacia una agro ganader&iacute;a empresarial sostenible en carne y leche.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Dr. Juan Pablo Garz&oacute;n</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>10:30 - 11:00</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>11:00 - 12:45</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Resultados de investigaciones en la producci&oacute;n de leche mediante la alimentaci&oacute;n del sistema pastoril.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing.&nbsp; Juan Pedro Alvarado</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>12:45 -14:00</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 581px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>14:00 - 16:00 </strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Programa de mecanizaci&oacute;n y acondicionadores de suelo en producci&oacute;n de forraje.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing. Paul Francis Gibson.</p>\r\n<p>Ing. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>16:00 - 16:30</strong></p>\r\n</td>\r\n<td style=\"width: 464px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 117px;\">\r\n<p><strong>16:30 - 18:30</strong></p>\r\n</td>\r\n<td style=\"width: 250px;\">\r\n<p>Fertilizaci&oacute;n y sistemas de riego dentro de la empresa&nbsp; de&nbsp; forrajes de alta calidad.</p>\r\n</td>\r\n<td style=\"width: 214px;\">\r\n<p>Ing. Paul Francis Gibson.</p>\r\n<p>Ing. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<table style=\"width: 592px; background-color: #6ee676; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>JUEVES 07 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 578px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>7:30 - 9:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>La producci&oacute;n de forrajes en cantidad y calidad como base para el desarrollo del potencial gen&eacute;tico&nbsp; en producci&oacute;n de carne y leche.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>09:30 - 10:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>10:00 - 12:00</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Programa de establecimiento de pasturas tecnificadas dentro de la ganader&iacute;a agro empresarial.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>12:00 - 13:30</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 578px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>13:30 - 15:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Plan de acci&oacute;n de una finca ganadera &nbsp;- Conversatorio</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>15:30 - 16:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 112px;\">\r\n<p><strong>16:00 - 18:30</strong></p>\r\n</td>\r\n<td style=\"width: 249px;\">\r\n<p>Investigaciones de campo en fertilizaci&oacute;n de suelos para la producci&oacute;n forrajera.</p>\r\n</td>\r\n<td style=\"width: 217px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pelaez.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<table style=\"width: 587px; background-color: #999ce8; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 111px; height: 46px;\">\r\n<p><strong>FECHA:</strong></p>\r\n</td>\r\n<td style=\"width: 466px; height: 46px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>VIERNES&nbsp; 08 DE DICIEMBRE 2017</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 111px; height: 46px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 245px; height: 46px;\">\r\n<p style=\"text-align: center;\"><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 221px; height: 46px;\">\r\n<p><strong>RESPONSABLE</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 577px; height: 46px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>MA&Ntilde;ANA</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 82px;\">\r\n<td style=\"width: 111px; height: 82px;\">\r\n<p><strong>7:30 - 9:30</strong></p>\r\n</td>\r\n<td style=\"width: 245px; height: 82px;\">\r\n<p>Estado &oacute;ptimo del forraje para el aprovechamiento nutricional en la alimentaci&oacute;n del ganado bovino</p>\r\n</td>\r\n<td style=\"width: 221px; height: 82px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 111px; height: 46px;\">\r\n<p><strong>09:30 - 10:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px; height: 46px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 82px;\">\r\n<td style=\"width: 111px; height: 82px;\">\r\n<p><strong>10:00 - 12:00</strong></p>\r\n</td>\r\n<td style=\"width: 245px; height: 82px;\">\r\n<p>Como administrar potreros como verdaderas empresas y pastos como verdaderos cultivos.</p>\r\n</td>\r\n<td style=\"width: 221px; height: 82px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 111px; height: 46px;\">\r\n<p><strong>12:00 - 13:30</strong></p>\r\n</td>\r\n<td style=\"width: 466px; height: 46px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>RECESO PARA EL ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 577px; height: 46px;\" colspan=\"3\">\r\n<p style=\"text-align: center;\"><strong>TARDE</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 100px;\">\r\n<td style=\"width: 111px; height: 100px;\">\r\n<p><strong>13:30 - 15:30</strong></p>\r\n</td>\r\n<td style=\"width: 245px; height: 100px;\">\r\n<p>Producci&oacute;n de carne y leche&nbsp; por &aacute;rea con pasturas tecnificadas para llegar a ser a agricultores empresarios ganaderos.</p>\r\n</td>\r\n<td style=\"width: 221px; height: 100px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pel&aacute;ez.</p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 111px; height: 46px;\">\r\n<p><strong>15:30-16:00</strong></p>\r\n</td>\r\n<td style=\"width: 466px; height: 46px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>BREAK</strong></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 58px;\">\r\n<td style=\"width: 111px; height: 58px;\">\r\n<p><strong>16:00 17:00</strong></p>\r\n</td>\r\n<td style=\"width: 245px; height: 58px;\">\r\n<p>Conversatorio y Preguntas de los temas tratados</p>\r\n</td>\r\n<td style=\"width: 221px; height: 58px;\">\r\n<p>Ing. Agr. &Aacute;lvaro Rodas Pelaez.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style=\"background-color: #ebeb4b; width: 584px; height: 370px; margin-left: auto; margin-right: auto;\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>FECHA</strong></p>\r\n</td>\r\n<td style=\"width: 458px;\" colspan=\"2\">\r\n<p><strong>S&Aacute;BADO 09 DE DICIEMBRE 2017( PRACTICA EN CAMPO)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>HORA</strong></p>\r\n</td>\r\n<td style=\"width: 237px;\">\r\n<p><strong>ACTIVIDADES</strong></p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p><strong>RESPONSABLE:</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>7:00 - 8:30 </strong></p>\r\n</td>\r\n<td style=\"width: 237px;\">\r\n<p>Traslado al lugar de la practica</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>T&eacute;cnicos Austrogen</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>8:30 - 12:00</strong></p>\r\n</td>\r\n<td style=\"width: 237px;\">\r\n<p>An&aacute;lisis visual de pasturas y suelos en campo</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. Paul Francis Gibson.</p>\r\n<p>Ing. Agr. Peter Neale&nbsp; Hapeta.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>12:00 -13:00</strong></p>\r\n</td>\r\n<td style=\"width: 458px;\" colspan=\"2\">\r\n<p style=\"text-align: center;\"><strong>ALMUERZO</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 108px;\">\r\n<p><strong>13:00 - 16:00</strong></p>\r\n</td>\r\n<td style=\"width: 237px;\">\r\n<p>Caracterizaci&oacute;n y diferenciaci&oacute;n en el manejo en las explotaciones ganaderas</p>\r\n</td>\r\n<td style=\"width: 221px;\">\r\n<p>Ing. Agr. &nbsp;&Aacute;lvaro Rodas Pel&aacute;ez. Ing. Agr. Paul Francis Gibson.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<h4 style=\"text-align: justify;\"><strong>PONENTES</strong></h4>\r\n<h4 style=\"text-align: justify;\"><strong>ING. AGR. &Aacute;LVARO RODAS PEL&Aacute;EZ.</strong></h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Ingeniero agropecuario por la Universidad de Caldas &ndash; Colombia</h4>\r\n</li>\r\n<li>\r\n<h4>Gerente: Tierra Pastos &amp; Ganado Ltda.</h4>\r\n</li>\r\n<li>\r\n<h4>Investigador en Suelos, Pastos y Forrajes</h4>\r\n</li>\r\n<li>\r\n<h4>Conferencista Internacional en Suelos Pastos y Forrajes</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>ING. AGR. PAUL FRANCIS GIBSON. &nbsp;- ING. AGR. PETER NEALE&nbsp; HAPETA</strong>.</h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>T&eacute;cnicos Neozelandeses especialistas en manejo de pastos</h4>\r\n</li>\r\n<li>\r\n<h4>Senior Advisor.</h4>\r\n</li>\r\n<li>\r\n<h4>Production Management - Dairy Farming Level 5</h4>\r\n</li>\r\n<li>\r\n<h4>Offshore Farm Development Manager, Dairy Solutionz</h4>\r\n</li>\r\n<li>\r\n<h4>Empresa consultora de pastos - Kiwi Farming Associates</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>DR. MVZ. MSC. JUAN PABLO GARZ&Oacute;N PRADO</strong></h4>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Doctor en Medicina Veterinaria y Zootecnia por la Universidad Central de Ecuador</h4>\r\n</li>\r\n</ul>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<h4>Master en Reproducci&oacute;n Animal por la Universidad de Cuenca</h4>\r\n</li>\r\n<li>\r\n<h4>Diplomado en Pedagog&iacute;as Innovadoras</h4>\r\n</li>\r\n<li>\r\n<h4>Investigador Agropecuario</h4>\r\n</li>\r\n</ul>\r\n<h4 style=\"text-align: justify;\"><strong>ING. MSC. JUAN PEDRO ALVARADO MOLINA</strong></h4>\r\n<ul>\r\n<li style=\"text-align: justify;\">\r\n<h4>Ingeniero Agropecuario por la Universidad Polit&eacute;cnica Salesiana</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Magister en Producci&oacute;n Animal - Escuela Superior del Ej&eacute;rcito</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Egresado en la Especializaci&oacute;n en Nutrici&oacute;n Animal con &Eacute;nfasis en Rumiantes</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Egresado en la Maestr&iacute;a de Reproducci&oacute;n Animal &ndash; Universidad de Cuenca</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Especializaci&oacute;n en Ecofisiolog&iacute;a Aplicada al Manejo de Pasturas - Universidad de Mar del Plata - Argentina</h4>\r\n</li>\r\n<li style=\"text-align: justify;\">\r\n<h4>Doctorando en Ciencias Animales, en Curso - Universidad de Rosario -Argentina</h4>\r\n</li>\r\n</ul>', '40', NULL, '07:00', '18:00', 'Miércoles - Jueves - Viernes - Sábado', '160', '160', '0', '2017-12-06', 'uploads/courses/DEI1.PNG', 'DEI1.PNG', '', NULL, 1, 1, 'SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES', 43, 1, 1, '2017-10-27 02:34:56', '2017-11-08 03:18:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer_password_resets`
--

CREATE TABLE `customer_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_password_resets`
--

CREATE TABLE `employee_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files_courses`
--

CREATE TABLE `files_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `intro`, `content`, `img`, `nameimg`, `link`, `visible`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Inseminación artificial', 'Biotecnología y Servicios veterinarios', '<hr />\r\n<p style=\"text-align: justify;\">La inseminaci&oacute;n artificial (IA) es el m&eacute;todo de la reproducci&oacute;n que ha permitido elevar los niveles de mejoramiento gen&eacute;tico y productividad en las especies animales. En el caso del ganado bovino permite acceder a reproductores de alto valor, &ldquo;toros mejoradores&rdquo; de calidad gen&eacute;tica superior (probados), sin la necesidad de importarlos y aprovecharlos para poder inseminar varias vacas por toro, abaratar costos y simplificar el trabajo, realizar el cruzamiento a gran escala y controlar enfermedades ven&eacute;reas.</p>\r\n<hr />\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/photos/shares/20170322_092533.jpg\" alt=\"imagen\" width=\"168\" height=\"168\" />&nbsp;</p>', 'uploads/galery/20170322_092512.jpg', NULL, NULL, 0, 11, '2017-10-15 08:52:11', '2017-10-28 17:56:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `genero` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Masculino', '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(2, 'Femenino', '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(3, 'Otro', '2017-10-26 22:14:58', '2017-10-26 22:14:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `parent`, `order`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Opción 1', 'opcion1', 0, 0, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(2, 'Opción 2', 'opcion2', 0, 1, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(3, 'Opción 3', 'opcion3', 0, 2, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(4, 'Opción 4', 'opcion4', 0, 3, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(5, 'Opción 1.1', 'opcion-1.1', 1, 0, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(6, 'Opción 1.2', 'opcion-1.2', 1, 1, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(7, 'Opción 3.1', 'opcion-3.1', 3, 0, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(8, 'Opción 3.2', 'opcion-3.2', 3, 1, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(9, 'Opción 4.1', 'opcion-4.1', 4, 0, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(10, 'Opción 3.2.1', 'opcion-3.2.1', 3, 0, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(11, 'Opción 3.2.2', 'opcion-3.2.2', 3, 1, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58'),
(12, 'Opción 3.2.3', 'opcion-3.2.3', 3, 2, 1, '2017-10-26 22:14:58', '2017-10-26 22:14:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_09_24_233110_create_menus_table', 1),
(3, '2017_09_26_134314_create_admins_table', 1),
(4, '2017_09_26_134315_create_admin_password_resets_table', 1),
(5, '2017_09_26_134342_create_employees_table', 1),
(6, '2017_09_26_134343_create_employee_password_resets_table', 1),
(7, '2017_09_26_134351_create_customers_table', 1),
(8, '2017_09_26_134352_create_customer_password_resets_table', 1),
(9, '2017_09_26_163616_create_veterinaries_table', 1),
(10, '2017_09_27_002950_create_sliders_table', 1),
(11, '2017_09_27_171034_create_cards_table', 1),
(12, '2017_09_27_183657_create_socios_table', 1),
(13, '2017_09_27_221000_create_notices_table', 1),
(14, '2017_09_28_160948_create_categories_table', 1),
(15, '2017_09_28_163550_create_subcategories_table', 1),
(16, '2017_09_28_193442_create_galleries_table', 1),
(17, '2017_09_28_213407_create_posts_table', 1),
(18, '2017_09_28_214239_create_tags_table', 1),
(19, '2017_09_28_220809_create_post_tag_table', 1),
(20, '2017_10_05_222247_create_notes_table', 1),
(21, '2017_10_09_182556_create_type_courses_table', 1),
(22, '2017_10_09_225317_create_modalidads_table', 1),
(23, '2017_10_10_011436_create_services_table', 1),
(24, '2017_10_10_013113_create_typeproducts_table', 1),
(25, '2017_10_10_025609_create_clasification_courses_table', 1),
(26, '2017_10_10_025826_create_tutors_table', 1),
(27, '2017_10_10_133353_create_courses_table', 1),
(28, '2017_10_10_142341_create_files_courses_table', 1),
(29, '2017_10_12_133447_create_products_table', 1),
(30, '2017_10_13_151608_create_section_titles_table', 1),
(31, '2017_10_17_042128_create_genders_table', 1),
(32, '2017_10_17_042208_create_countries_table', 1),
(33, '2017_10_17_042249_create_provinces_table', 1),
(34, '2017_10_17_042317_create_cities_table', 1),
(35, '2017_10_17_045534_create_user_table', 1),
(36, '2017_10_24_182407_create_typesuscriptions_table', 1),
(37, '2017_10_24_200436_create_suscribirs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidads`
--

CREATE TABLE `modalidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `modalidad` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgHeader` text COLLATE utf8mb4_unicode_ci,
  `nameimg` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) DEFAULT NULL,
  `webvisible` tinyint(1) DEFAULT NULL,
  `visit` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `share` int(11) DEFAULT '1',
  `tag_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `admins_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `backgroud` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colortext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notes`
--

INSERT INTO `notes` (`id`, `title`, `subtitle`, `intro`, `description`, `link`, `name`, `imgHeader`, `nameimg`, `visible`, `webvisible`, `visit`, `like`, `share`, `tag_id`, `admins_id`, `backgroud`, `colortext`, `created_at`, `updated_at`) VALUES
(1, 'Salud mi mascota', NULL, NULL, '<p>cuida la salud de tu mascota con estos tips que te comparto</p>', 'tipssalud.com', 'Austrogen', NULL, NULL, 1, 1, NULL, NULL, 1, 1, 1, '#006A32', '#dddddd', '2017-09-28 07:35:47', '2017-10-31 05:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` double(15,2) DEFAULT NULL,
  `asistire` int(11) DEFAULT NULL,
  `prec` int(11) DEFAULT NULL,
  `mens` int(11) DEFAULT NULL,
  `fechainit` date DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compfb` text COLLATE utf8mb4_unicode_ci,
  `comptw` text COLLATE utf8mb4_unicode_ci,
  `compgg` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) DEFAULT '1',
  `admins_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `backgroud` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colortext` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notices`
--

INSERT INTO `notices` (`id`, `title`, `intro`, `content`, `link`, `precio`, `asistire`, `prec`, `mens`, `fechainit`, `img`, `nameimg`, `day`, `month`, `compfb`, `comptw`, `compgg`, `visible`, `admins_id`, `backgroud`, `colortext`, `created_at`, `updated_at`) VALUES
(1, 'TEORÍA MAS PRÁCTICA - SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES.', 'El primer Seminario Internacional de pastos y forrajes se realizará en la ciudad de Cuenca - Ecuador, los días miércoles 06, jueves 07, viernes 08 y sábado 09 de diciembre del 2017, en el paraninfo de la Escuela de Medicina Veterinaria de la Universidad Católica de Cuenca.', '<p>&nbsp;TEOR&Iacute;A MAS PR&Aacute;CTICA - SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES.</p>\r\n<hr />\r\n<p><iframe src=\"https://www.youtube.com/embed/X1xb5yAb2dk\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', 'https://www.austrogen.com/DetallCourses/2', 160.00, NULL, NULL, NULL, '2017-12-06', 'uploads/notices/11111.PNG', '11111.PNG', '6', 'Diciembre', NULL, NULL, NULL, 1, 1, '#93CB00', '#000000', '2017-09-29 00:02:16', '2017-10-31 21:13:34'),
(2, 'TIERRA PASTOS Y GANADO', 'En el Primer seminario internacional de pastos y forrajes estará presente el Ing. Alvaro Rodas de Tierra pastos y ganado desde Colombia.\r\nLugar: Escuela de Medicina Veterinaria - Universidad Católica de Cuenca\r\nFecha: 6, 7, 8 y 9 de diciembre 2017', '<p><a title=\"Promo Ecuador Dic2017 Cuenca\" href=\"https://youtu.be/X1xb5yAb2dk\">https://youtu.be/X1xb5yAb2dk</a></p>', 'https://youtu.be/X1xb5yAb2dk', 160.00, NULL, NULL, NULL, '2017-12-06', 'uploads/notices/Tierra pastos y ganado - Colombia.jpg', 'Tierra pastos y ganado - Colombia.jpg', '6', 'diciembre', NULL, NULL, NULL, 1, 1, NULL, NULL, '2017-11-05 03:33:37', '2017-11-06 05:14:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `precio_compra` double(15,2) DEFAULT NULL,
  `precio_venta` double(15,2) DEFAULT NULL,
  `porcent_descuento` double(15,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `vendidos` int(11) DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `visible_slider` tinyint(1) NOT NULL DEFAULT '1',
  `promocion` tinyint(1) NOT NULL DEFAULT '1',
  `nuevo` tinyint(1) NOT NULL DEFAULT '1',
  `oferta` tinyint(1) NOT NULL DEFAULT '1',
  `tipeproduct_id` int(10) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_country` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provinces`
--

INSERT INTO `provinces` (`id`, `province`, `postal`, `id_country`, `created_at`, `updated_at`) VALUES
(1, 'AZUAY', NULL, 66, NULL, NULL),
(2, 'BOLIVAR', NULL, 66, NULL, NULL),
(3, 'CAÑAR', NULL, 66, NULL, NULL),
(4, 'CARCHI', NULL, 66, NULL, NULL),
(5, 'COTOPAXI', NULL, 66, NULL, NULL),
(6, 'CHIMBORAZO', NULL, 66, NULL, NULL),
(7, 'EL ORO', NULL, 66, NULL, NULL),
(8, 'ESMERALDAS', NULL, 66, NULL, NULL),
(9, 'GUAYAS', NULL, 66, NULL, NULL),
(10, 'IMBABURA', NULL, 66, NULL, NULL),
(11, 'LOJA', NULL, 66, NULL, NULL),
(12, 'LOS RIOS', NULL, 66, NULL, NULL),
(13, 'MANABI', NULL, 66, NULL, NULL),
(14, 'MORONA SANTIAGO', NULL, 66, NULL, NULL),
(15, 'NAPO', NULL, 66, NULL, NULL),
(16, 'PASTAZA', NULL, 66, NULL, NULL),
(17, 'PICHINCHA', NULL, 66, NULL, NULL),
(18, 'TUNGURAHUA', NULL, 66, NULL, NULL),
(19, 'ZAMORA CHINCHIPE', NULL, 66, NULL, NULL),
(20, 'GALAPAGOS', NULL, 66, NULL, NULL),
(21, 'SUCUMBIOS', NULL, 66, NULL, NULL),
(22, 'ORELLANA', NULL, 66, NULL, NULL),
(23, 'SANTO DOMINGO DE LOS TSACHILAS', NULL, 66, NULL, NULL),
(24, 'SANTA ELENA', NULL, 66, NULL, NULL),
(25, 'ZONAS NO DELIMITADAS', NULL, 66, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_titles`
--

CREATE TABLE `section_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `section_titles`
--

INSERT INTO `section_titles` (`id`, `section`, `title`, `subtitle`, `color`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'slider', '<h3 style=\"text-align: left;\"><strong>BIOTECNOLOGIA Y SERVICIOS VETERINARIOS</strong></h3>', '<h4 style=\"text-align: center;\"><em>Soluciones t&eacute;cnicas, mejores resultados</em></h4>', NULL, 1, '2017-10-14 01:40:24', '2017-10-28 17:37:29'),
(2, 'cursos carrusel', '<p>Nuestros cursos son muy reconocidos en el mercado nacional por nuestro profesionalismo</p>', '<h3 style=\"text-align: center;\">Cursos y Seminarios vigentes te los mostramos en este sitio web</h3>', NULL, 1, '2017-10-14 01:43:24', '2017-10-28 17:45:33'),
(3, 'notas', '<p>ALGUNOS TEMAS NOVEDOSOS DE LA ACTUALIDAD QUE TE PUEDEN INTERESAR</p>', '<p>Temas de salud y cuidado de mi mascota y ganaderia</p>', NULL, 0, '2017-10-14 01:48:24', '2017-10-20 23:44:46'),
(4, 'noticias', '<p>MANTENTE ACTUALIZADO DE NUESTROS EVENTOS, CURSOS, SEMINARIOS, CAPACITACIONES Y MUCHAS NOVEDADES MAS</p>', NULL, NULL, 0, '2017-10-14 01:53:29', '2017-10-20 23:44:30'),
(5, 'galeria', '<p>RECOPILACI&Oacute;N DE FOTOGRAF&Iacute;AS DE NUESTROS EVENTOS, EQUIPOS, MASCOTAS Y NOVEDADES.</p>', NULL, NULL, 0, '2017-10-14 01:54:47', '2017-10-28 17:47:11'),
(6, 'equipo', '<p>EL MEJOR EQUIPO HUMANO A SU SERVICIO</p>', '<p>Tenemos una convicci&oacute;n firme de que nuestro equipo debe de tener experiencia, ambici&oacute;n, con el fin de aportar y apoyar al sector ganadero de la regi&ograve;n y del pais.</p>\r\n<p>A continuaci&oacute;n puede leer un poco acerca de nuestro grupo de trabajo.</p>', NULL, 1, '2017-10-14 01:57:26', '2017-10-28 17:55:18'),
(7, 'pagina cursos', 'ELIJE TU CURSO', NULL, NULL, 1, '2017-10-14 01:59:26', '2017-10-14 01:59:26'),
(8, 'contacto', 'Agradecemos tu visita', 'Nos gustaría saber sobre tus dudas o sugerencias. gracias por visitarnos..', NULL, 1, '2017-10-14 02:00:47', '2017-10-14 02:00:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `precio_venta` double(15,2) DEFAULT NULL,
  `porcent_descuento` double(15,2) DEFAULT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_slider` tinyint(1) NOT NULL DEFAULT '1',
  `promocion` tinyint(1) NOT NULL DEFAULT '1',
  `nuevo` tinyint(1) NOT NULL DEFAULT '1',
  `oferta` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `admins_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `service`, `slug`, `description`, `precio_venta`, `porcent_descuento`, `img`, `nameimg`, `visible_slider`, `promocion`, `nuevo`, `oferta`, `is_active`, `admins_id`, `created_at`, `updated_at`) VALUES
(2, 'Asesoramiento técnico Veterinario', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2017-10-10 11:23:45', '2017-10-10 11:23:45'),
(3, 'Inseminación artificial en bovinos y porcinos', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2017-10-10 11:24:11', '2017-10-10 11:24:11'),
(4, 'Lavado y transferencia de embriones bovinos', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2017-10-10 11:24:19', '2017-10-10 11:24:19'),
(5, 'Implementación de programas sanitarios en hatos', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2017-10-10 11:24:27', '2017-10-10 11:24:27'),
(6, 'Elaboración de Proyectos Agropecuarios', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2017-10-10 11:24:37', '2017-10-10 11:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `subtittle` text COLLATE utf8mb4_unicode_ci,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `linkinfo` text COLLATE utf8mb4_unicode_ci,
  `visible_slider` tinyint(1) NOT NULL DEFAULT '1',
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `nameimg`, `title`, `subtittle`, `intro`, `body`, `linkinfo`, `visible_slider`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'uploads/slider/fondo-1-final(1)-min.png', 'fondo-1-final(1)-min.png', 'Austrogen', 'Nuestra empresa', 'Biotecnología y Servicios Veterinarios', '<p>Austrogen, es una asociaci&oacute;n de t&eacute;cnicos encaminados a satisfacer las necesidades del sector pecuario mediante la implementaci&oacute;n de los &nbsp;programas de mejoramiento y mantenimiento de biodiversidad gen&eacute;tica, prevenci&oacute;n de enfermedades, implementaci&oacute;n y ejecuci&oacute;n de proyectos agropecuarios, capacitaci&oacute;n e innovaci&oacute;n de tecnolog&iacute;as. Orientados a mantener el bienestar animal, preservando el medio ambiente y dinamizando la producci&oacute;n que garantice el buen vivir del ganadero.</p>', 'http://localhost:8000/courses', 1, 1, '2017-09-28 06:31:58', '2017-10-28 21:59:24'),
(3, 'uploads/slider/curs-min.jpg', 'curs-min.jpg', 'Curso de Inseminación artificial', NULL, 'Primer curso de Inseminación artificial en bovinos, realizado en el cantón Biblián, los días 22,23 y 24 de marzo 2017', '<p>La inseminaci&oacute;n artificial (IA) es el m&eacute;todo de la reproducci&oacute;n que ha permitido elevar los niveles de mejoramiento gen&eacute;tico y productividad en las especies animales. En el caso del ganado bovino permite acceder a reproductores de alto valor, &ldquo;toros mejoradores&rdquo; de calidad gen&eacute;tica superior (probados), sin la necesidad de importarlos y aprovecharlos para poder inseminar varias vacas por toro, abaratar costos y simplificar el trabajo, realizar el cruzamiento a gran escala y controlar enfermedades ven&eacute;reas.</p>', 'http://localhost:8000/DetallCourses/1', 1, 1, '2017-09-28 06:32:33', '2017-10-28 21:01:42'),
(4, 'uploads/slider/IMG-20170710-WA0000-min.jpg', 'IMG-20170710-WA0000-min.jpg', 'Asesoramiento técnico', NULL, 'Manejo pasturas y forrajes', '<p>Las vacas que est&aacute;n en producci&oacute;n l&aacute;ctea, diariamente consumen de 15 a 18 kilos de materia seca, de las cu&aacute;les el 80 a 90% se compone de pastos y forrajes.</p>', NULL, 1, 1, '2017-10-15 09:50:24', '2017-10-28 20:57:16'),
(6, 'uploads/slider/Castracion cuy-min.jpg', 'Castracion cuy-min.jpg', 'Castración química en cuyes', NULL, NULL, '<p>Castraci&oacute;n qu&iacute;mica en cuyes con &aacute;cido l&aacute;ctico al 10%<br />Beneficios&nbsp;<br />- Inhibe la producci&oacute;n de la testosterona y espermas<br />- Ganancia de peso<br />- Mejor canal de la carne<br />- Disminuci&oacute;n de agresividad</p>', NULL, 1, 1, '2017-10-18 02:21:25', '2017-10-28 20:54:16'),
(7, 'uploads/slider/foto seminario.jpg', 'foto seminario.jpg', 'PRIMER SEMINARIO INTERNACIONAL DE PASTOS Y FORRAJES', 'PARA UNA GANADERÍA AGROEMPRESARIAL', NULL, NULL, 'http://www.austrogen.com/courses', 1, 1, '2017-10-29 01:44:18', '2017-10-29 02:04:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameimg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `abrevTitulo` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lk` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especialitation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplacelink` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplace` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id`, `img`, `nameimg`, `description`, `abrevTitulo`, `name`, `lastname`, `fb`, `tw`, `in`, `gg`, `lk`, `especialitation`, `blog`, `workplacelink`, `workplace`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'uploads/socios/SocioManuelGuachun.jpg', NULL, '<p>Medico Veterinario y zootecnista especialista en reproducci&oacute;n porcina. Master en reproducci&oacute;n animal. se pueden contactar al correo electr&oacute;nico <a href=\"mailto:manuelhgy@gmail.com\">manuelhgy@gmail.com</a> contactos 0993463289 domicilio 3014693</p>', 'Mg.Sc. Mvz', 'Manuel Humberto', 'Guachún Yanza', 'https://www.facebook.com/manuelhumberto.guachunyanza', NULL, NULL, NULL, NULL, 'Especialista en reproducción porcina', NULL, NULL, 'MG-Genética', 1, '2017-09-28 10:00:55', '2017-10-15 10:34:21'),
(2, 'uploads/socios/22522191_10210369867752130_797641926_o.jpg', NULL, '<p>Medico Veterinario y Zootecnista. Magister en reproducci&oacute;n animal y especialista en sanidad animal. para contactos por correo <a href=\"mailto:matianmg777@hotmail.com\">matianmg777@hotmail.com</a> y a los numeros de celular 0984271836.</p>', 'Mvz.Mg.Sc.', 'Segundo Matias', 'Mainato Guamán', 'https://www.facebook.com/profile.php?id=1505743735', 'https://twitter.com/matiasmainatog', 'https://www.instagram.com/mathias_mainato/', NULL, 'https://www.linkedin.com/in/segundo-matias-mainato-guam%C3%A1n-a8699912a', 'Especialista en sanidad animal', NULL, NULL, 'Austrogen', 1, '2017-10-15 10:23:41', '2017-10-15 10:39:33'),
(3, 'uploads/socios/victorlema.jpg', NULL, '<p>Medico Veterinario y Zootecnista. Magister en reproducci&oacute;n animal y&nbsp;especializado en&nbsp;cirug&iacute;a e ecograf&iacute;a para contactos por correo vicole_1020@yahoo.com y&nbsp;a los n&uacute;meros de celular <span class=\"_5yl5\">0998360974 y domicilio 2232134</span>.</p>\\r\\n<p><span class=\"_5yl5\">Domicilio Cant&oacute;n Bibli&aacute;n<br /></span></p>', 'Mvz.Mg.Sc.', 'Victor Manuel', 'Lema Guaman', 'https://www.facebook.com/victor.lemaguaman', NULL, NULL, NULL, NULL, 'Especialista en Cirugía y Ecografia', NULL, NULL, 'Austrogen', 1, '2017-10-15 10:44:44', '2017-10-15 10:49:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(1) DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategory`, `content`, `visible`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Caninos', NULL, 0, 2, '2017-09-29 03:56:43', '2017-10-28 17:04:51'),
(2, 'gatos', NULL, 0, 6, '2017-09-29 05:20:49', '2017-10-28 17:05:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscribirs`
--

CREATE TABLE `suscribirs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` text COLLATE utf8mb4_unicode_ci,
  `telefono` text COLLATE utf8mb4_unicode_ci,
  `comprobante` text COLLATE utf8mb4_unicode_ci,
  `name_comprobante` text COLLATE utf8mb4_unicode_ci,
  `numero_control` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_depositante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_teorico` decimal(15,2) DEFAULT NULL,
  `precio_practico` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `valor_depositado` double(15,2) DEFAULT NULL,
  `fecha_deposito` date DEFAULT NULL,
  `fecha_suscripcion` date DEFAULT NULL,
  `orden_cupo` int(11) DEFAULT NULL,
  `separarcupos` int(11) NOT NULL DEFAULT '1',
  `tipesuscription_id` int(10) UNSIGNED NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscribirs`
--

INSERT INTO `suscribirs` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `telefono`, `comprobante`, `name_comprobante`, `numero_control`, `nombre_depositante`, `precio_teorico`, `precio_practico`, `total`, `valor_depositado`, `fecha_deposito`, `fecha_suscripcion`, `orden_cupo`, `separarcupos`, `tipesuscription_id`, `curso_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Adan', 'Guallpa', 'dr_guallpal@hotmail.com', '0998068020', '2231610', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27', '2017-10-27', 1, 1, 2, 1, 3, '2017-10-27 03:49:13', '2017-10-27 03:59:32'),
(2, 'Delia Josefina', 'Núñez Gudalupe', 'deliajosefina777@gmail.com', '0990154116', '043855031', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-29', '2017-10-29', 1, 1, 2, 2, 5, '2017-10-29 15:57:28', '2017-10-29 17:10:52'),
(3, 'JOSE BERMEJO - CARLOS GUARQUILA', 'GLORIA BERMEJO', 'joseph.485@hotmail.com', '0984446974', NULL, NULL, NULL, NULL, NULL, '120.00', '0.00', '120.00', 360.00, '2017-10-30', '2017-10-30', 2, 1, 2, 1, 6, '2017-10-30 02:27:03', '2017-10-30 02:39:30'),
(4, 'Vicente', 'Guzman Ordoñez', 'cafeconchumales1@outlook.es', '0968500485', '2319123', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-30', '2017-10-30', 2, 1, 2, 2, 7, '2017-10-30 17:24:56', '2017-10-30 19:59:28'),
(5, 'Juan Carlos', 'Vega', 'jhoncharlesv@hotmail.com', '0999974782', NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-30', '2017-10-30', 3, 1, 2, 2, 8, '2017-10-30 20:52:01', '2017-10-30 21:15:06'),
(6, 'Jose Mauricio', 'Cisneros Montenegro', 'jmcism97@gmail.com', '3163313056', '3163313056', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-30', '2017-10-30', 4, 1, 2, 2, 9, '2017-10-30 23:30:19', '2017-10-31 01:02:46'),
(7, 'Oscar Polidoro', 'Hidalgo Vásquez', 'oskarhva1993@gmail.com', NULL, '23031472', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-31', '2017-10-31', 5, 1, 2, 2, 10, '2017-10-31 00:15:29', '2017-10-31 02:32:54'),
(8, 'Jose Mauricio', 'Cisneros Rivera', 'maurocis70b1@hotmail.com', '3163290606', NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-10-31', '2017-10-31', 6, 1, 2, 2, 11, '2017-10-31 00:31:20', '2017-10-31 02:35:00'),
(9, 'MIGUEL ÁNGEL', 'VALENCIA', 'miguel28valencia@gmail.com', '0998684071', '0984254456', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-01', '2017-11-01', 7, 2, 2, 2, 16, '2017-11-01 19:51:17', '2017-11-02 02:06:29'),
(10, 'CARLOS ALBERTO', 'VILLAFUERTE MUÑOZ', 'gerencia@pielactive.com', '0958941211', '062616190', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-01', '2017-11-01', 8, 1, 2, 2, 17, '2017-11-01 22:04:22', '2017-11-02 02:14:06'),
(11, 'Christian David', 'Pacheco  Jaramillo', 'crisschicho@hotmail.com', '0990892708', '072 740053', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-02', '2017-11-02', 9, 1, 2, 2, 18, '2017-11-02 01:52:16', '2017-11-02 02:15:57'),
(12, 'Jaime', 'Siguencia', 'jamesiguencia.1982@hotmail.com', '0992978399', NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-02', '2017-11-02', 10, 1, 2, 2, 19, '2017-11-02 23:04:52', '2017-11-03 14:17:25'),
(13, 'Camilo', 'Torres', 'camilo_torres2@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-04', '2017-11-04', 11, 1, 2, 2, 14, '2017-11-04 00:32:12', '2017-11-04 19:18:01'),
(14, 'layla nicole', 'Cevallos yoza', 'laylabella1997@hotmail.com', '0995462355', '052430075', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-06', '2017-11-06', 12, 1, 2, 2, 22, '2017-11-06 01:23:56', '2017-11-06 01:29:15'),
(15, 'Juan Carlos', 'Mendoza López', 'juan.mendoza@udlanet.ec', '0991463104', '2339795', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-07', '2017-11-07', 13, 1, 2, 2, 25, '2017-11-07 01:51:54', '2017-11-07 03:27:55'),
(16, 'Ricardo Augusto', 'Ponce Jaramillo', 'ovinagro@hotmail.com', NULL, '0998485074', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-07', '2017-11-07', 14, 1, 2, 2, 26, '2017-11-07 15:40:39', '2017-11-07 21:25:30'),
(17, 'CARLOS PATRICIO', 'MEDINA TENE', 'patriciomedina662@gmail.com', '0993907391', NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-08', '2017-11-08', 15, 1, 2, 2, 28, '2017-11-08 01:37:25', '2017-11-08 01:38:01'),
(18, 'Alexander Javier', 'Garzón Guzmán', 'javier.300192@gmail.com', '0985003049', NULL, NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, '2017-11-08', '2017-11-08', 16, 1, 2, 2, 29, '2017-11-08 02:45:35', '2017-11-08 02:45:58'),
(19, 'EDWIN SAMUEL', 'MARTINEZ GAVILANES', 'samuelinmartinez1@gmail.com', '0990335182', '062853194', NULL, NULL, NULL, NULL, '160.00', '0.00', '160.00', NULL, NULL, '2017-11-08', 17, 1, 2, 2, 30, '2017-11-08 03:15:02', '2017-11-08 03:18:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `tag`, `description`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Salud', 'description', 1, '2017-09-30 09:03:31', '2017-09-30 09:05:58'),
(4, 'Fotografia', NULL, 1, '2017-09-30 09:06:07', '2017-09-30 09:06:07'),
(5, 'Tips', NULL, 1, '2017-09-30 09:06:12', '2017-09-30 09:06:12'),
(6, 'Novedades', NULL, 1, '2017-09-30 09:06:17', '2017-09-30 09:06:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutors`
--

CREATE TABLE `tutors` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lk` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especialitation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenac` date DEFAULT NULL,
  `workplace` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeproducts`
--

CREATE TABLE `typeproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `typeproduct` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `typeproducts`
--

INSERT INTO `typeproducts` (`id`, `typeproduct`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Implementos veterinarios', 1, '2017-10-10 11:37:06', '2017-10-10 11:37:06'),
(2, 'Equipos de Inseminación artificial para bovinos y porcinos', 1, '2017-10-10 11:39:34', '2017-10-10 11:39:34'),
(3, 'Semen de bovinos y porcinos', 1, '2017-10-10 11:39:49', '2017-10-10 11:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typesuscriptions`
--

CREATE TABLE `typesuscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `typesuscriptions`
--

INSERT INTO `typesuscriptions` (`id`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Solicitando cupo', 1, '2017-10-25 04:33:10', '2017-10-25 04:33:10'),
(2, 'Aprobado', 1, '2017-10-25 04:33:28', '2017-10-25 04:33:28'),
(3, 'Finalizado', 1, '2017-10-25 04:33:28', '2017-10-25 04:33:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_courses`
--

CREATE TABLE `type_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_courses`
--

INSERT INTO `type_courses` (`id`, `type`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 0, '2017-10-10 16:48:38', '2017-10-27 02:20:45'),
(2, 'Seminario', NULL, 0, '2017-10-10 16:50:20', '2017-10-27 02:17:22'),
(3, 'Capacitación', NULL, 0, '2017-10-10 16:50:26', '2017-10-27 02:17:43'),
(4, 'Taller', NULL, 0, '2017-10-10 16:50:30', '2017-10-27 02:18:53'),
(5, 'SEMINARIO', NULL, 1, '2017-10-15 08:29:33', '2017-10-27 02:26:52'),
(6, 'Zootecnia', NULL, 0, '2017-10-15 08:32:46', '2017-10-27 02:21:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `nameimg` text COLLATE utf8mb4_unicode_ci,
  `history` text COLLATE utf8mb4_unicode_ci,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `notificame` tinyint(1) NOT NULL DEFAULT '1',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_country` int(10) UNSIGNED NOT NULL,
  `id_province` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `id_gender` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `nombres`, `apellidos`, `fecha_nacimiento`, `telefono`, `celular`, `domicilio`, `img`, `nameimg`, `history`, `activo`, `notificame`, `email`, `password`, `id_country`, `id_province`, `id_gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'christian', 'Christian Andres', 'Tigre Condo', '1991-12-17', '2203-584', '+593992702599', 'El Cabo - Paute', 'uploads/users/programador.jpg', 'programador.jpg', NULL, 1, 1, 'andrescondo17@gmail.com', '$2y$10$YZex7MwuTx6cui958uXMAeXkELntmmdtvqnzT2kKa2kqqfyiAObvi', 66, 1, 1, 'POBncW8HKCDQY4kmtNrYYzBaASZCDbxrOK1aPGdI5yubHggPLilrWVL4wvX0', '2017-10-26 17:44:31', '2017-10-30 13:53:00'),
(2, 'Victor lema', 'Victor lema', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'granjavet2014@gmail.com', '$2y$10$VoMSk.74BmAdNO4kN6pPl.V6LAM5NBJLzttwGe4sRp/xh9qi5E1P6', 66, 1, 1, NULL, '2017-10-27 03:14:56', '2017-10-27 03:14:56'),
(3, 'Adan Guallpa Lema', 'Adan Guallpa Lema', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'dr_guallpal@hotmail.com', '$2y$10$lDCyRfwW8nLo3uhbtOPbgOmfKsSTKItjWgnIoo4oCkeepozvpcE/u', 66, 1, 1, 'XXjobuvag3GqehEZxBa4KHsaLeQeyUnahW3z7rw0s17WqqwBTEXsAARrpeXE', '2017-10-27 03:33:56', '2017-11-07 15:54:01'),
(4, 'Norma Gordillo', 'Norma Gordillo', NULL, NULL, '2828130', NULL, NULL, 'uploads/users/IMG_20150508_201822.jpg', 'IMG_20150508_201822.jpg', NULL, 1, 1, 'alegl1416@gmail.com', '$2y$10$Ns7.8jPAFfq5PNa00KMrP.WK54qfSv5/Rx0OcBOTKVYhZ6MdrMcsW', 66, 1, 2, NULL, '2017-10-28 00:45:39', '2017-10-28 00:55:43'),
(5, 'Delia Nuñez Guadalupe', 'Delia Nuñez Guadalupe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'deliajosefina777@gmail.com', '$2y$10$d1o8lCmtY0b4n1sqg9Y9m.57e96HRS0Tc3lo4nvOQ2tiaN5Eb9KZ6', 66, 1, 1, NULL, '2017-10-29 15:50:03', '2017-10-29 15:50:03'),
(6, 'JOSE BERMEJO', 'JOSE BERMEJO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'joseph.485@hotmail.com', '$2y$10$W7Hkf9E5yr5lDUS3FW/Lw.baGPFR7Ico.giehIc03n004JLic8V6q', 66, 1, 1, 'Kr6W8oMgbjfdHZMlgrwzBU3mTOju8MtcsiveQ5WXO3qlstHhbCL7Ph1HEjWu', '2017-10-30 02:24:43', '2017-10-30 02:24:43'),
(7, 'Vicente', 'Vicente', 'Guzman Ordoñez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'cafeconchumales1@outlook.es', '$2y$10$MSpGNxLQM3cN8nBDHJvClOI8MFqLABvszAVeJzpOMputbu/tC.QHS', 66, 1, 1, NULL, '2017-10-30 17:20:30', '2017-10-30 17:20:30'),
(8, 'Juan Carlos', 'Juan Carlos', 'Vega', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'jhoncharlesv@hotmail.com', '$2y$10$wO62p/wGDlV4kf7mvDtdQuMeURyzSvi0wgE7ApwocyvHiaVkezqkW', 66, 1, 1, NULL, '2017-10-30 20:49:44', '2017-10-30 20:49:44'),
(9, 'Jose Mauricio', 'Jose Mauricio', 'Cisneros Montenegro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'jmcism97@gmail.com', '$2y$10$e0/NnYodTtRotZuUCqhvEe/q7iQsT3SnjF8zrWRcRUTNdSFUi0smu', 66, 1, 1, NULL, '2017-10-30 23:28:01', '2017-10-30 23:28:01'),
(10, 'Oscar Polidoro', 'Oscar Polidoro', 'Hidalgo Vásquez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'oskarhva1993@gmail.com', '$2y$10$Rua5JhTbTiuGLVyfWWIbEOPfPq3oM8UfZWa3W4Qx9b3dNRrh5JAmC', 66, 1, 1, NULL, '2017-10-31 00:10:17', '2017-10-31 00:10:17'),
(11, 'Jose Mauricio', 'Jose Mauricio', 'Cisneros Rivera', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'maurocis70b1@hotmail.com', '$2y$10$1SoJT2KLKA42N.CgCwIP2uE9eW.zd2WomGA5ibFCC2zSIDi2.foom', 66, 1, 1, NULL, '2017-10-31 00:25:41', '2017-10-31 00:25:41'),
(12, 'Manuel Humberto', 'Manuel Humberto', 'Guachun Yanza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'manuelhgy@gmail.com', '$2y$10$1ArnPI3nIXi5OmGpYVJREu9Vdt2JL6uKDGL5oI7t6T4sZoYOj4PSO', 66, 1, 1, NULL, '2017-10-31 01:00:05', '2017-10-31 01:00:05'),
(13, 'Alexander Javier', 'Alexander Javier', 'Garzón Guzmán', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'alexander.garzong@ucuenca.ec', '$2y$10$VQWUYtHldvr2uqPERPgq8O/X5pBLiOBKKaWG5qizVx.hRXj8fOyp6', 66, 1, 1, NULL, '2017-11-01 02:29:32', '2017-11-01 02:29:32'),
(14, 'Camilo', 'Camilo', 'Torres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'camilo_torres2@hotmail.com', '$2y$10$/tG1LrdP9DSqa1boArv9F.5PxQrGY/4gWLtU8T4NlxVHzSo8IZ68i', 66, 1, 1, 'c79zfHtW49rIriuy0KS7hkmvU6UkMzlXdxzEySkuzLBtz2pVrZbr7xS9vWNC', '2017-11-01 03:24:25', '2017-11-01 03:24:25'),
(15, 'Jose Arturo', 'Jose Arturo', 'Alvarez Gordillo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'jose.alvarezgordillo@gmail.com', '$2y$10$H80yQN2usd/CS4wRV21sN.gjgyxsYx4RTY.gcij5ptPuvCzkTQrnW', 66, 1, 1, NULL, '2017-11-01 15:35:48', '2017-11-01 15:35:48'),
(16, 'MIGUEL ÁNGEL', 'MIGUEL ÁNGEL', 'VALENCIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'miguel28valencia@gmail.com', '$2y$10$fsqukkCpuAoQZ2Weauhdwu12UR41u/3g8ALGrk5KV5xPuDJCxot4W', 66, 1, 1, NULL, '2017-11-01 19:46:30', '2017-11-01 19:46:30'),
(17, 'CARLOS ALBERTO', 'CARLOS ALBERTO', 'VILLAFUERTE MUÑOZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'gerencia@pielactive.com', '$2y$10$f8KiQhhlomeYGBtzVRksG.fwKNOvtuDzIa5E9T5X2M.zw4QkCkap.', 66, 1, 1, NULL, '2017-11-01 22:01:35', '2017-11-01 22:01:35'),
(18, 'Christian David', 'Christian David', 'Pacheco  Jaramillo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'crisschicho@hotmail.com', '$2y$10$OGHNz/d0hduRlUy3NUKlPOlNqFqDOFH5LAkpl4QhnExefArriyBe6', 66, 1, 1, 'qwRfHBkNWbHK15FE9m4WYKJhDkBnuCttqbvWERt7iMbIaAOGlWWRwhzZGyv1', '2017-11-02 01:50:42', '2017-11-02 01:50:42'),
(19, 'Jaime', 'Jaime', 'Siguencia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'jamesiguencia.1982@hotmail.com', '$2y$10$zyQZ4w5pEKHcdG/vExYTw.Q6ggHoHZlBSegCAr28c1ro91HBFCVEW', 66, 1, 1, 'KsjEntHsNDY4j8PN5fXWjKoDlDrWaQaWvWl3nqA4LPKNDD85TIxyCcaLhfMt', '2017-11-02 22:58:57', '2017-11-02 22:58:57'),
(20, 'Jaime', 'Jaime', 'Siguencia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'jaimesiguencia.1982@hotmail.com', '$2y$10$e7qs2QRaMlPxy5KfwdBhVeNaV04zdd72ltcD1DUQMx5d/xf3fgB2m', 66, 1, 1, 'wgG4nw1cO5PPiTUvnpvosW0gazQrDCAVIT1EGkI5AXJtJeXpEvYotwb1zz8w', '2017-11-02 23:21:13', '2017-11-02 23:21:13'),
(21, 'Jhandry Israel', 'Jhandry Israel', 'Cevallos Cevallos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'cevallitos1989@yahoo.es', '$2y$10$YD7Lt0FtI3GFyyuNt4uBV.WVNzzI4Y/Eci3FbkomgNIMj7WKsHODq', 66, 1, 1, NULL, '2017-11-03 12:46:13', '2017-11-03 12:46:13'),
(22, 'layla nicole', 'layla nicole', 'Cevallos yoza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'laylabella1997@hotmail.com', '$2y$10$k1sKVNJLHlHgWFkpGsweceE2LsRQtqIQOlG4q/5.E.f4Bd57jSViu', 66, 1, 1, '7K5ANb5lzYerQAgwEmoIW09dGSM2YmvTrobECGkP3nsLah56bn07UUkucP3i', '2017-11-04 21:22:51', '2017-11-04 21:22:51'),
(23, 'Jaison Paterson', 'Jaison Paterson', 'Reasco Cuero', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'naneycita_3srd@hotmail.com', '$2y$10$6yYsOgH0.EqGh1g2gq1J8OdV3Z3q5DHrk9U.489M2nibVzAr2opCC', 66, 1, 1, NULL, '2017-11-05 03:55:45', '2017-11-05 03:55:45'),
(24, 'JUAN CARLOS', 'JUAN CARLOS', 'MEDINA FONSECA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'juan.medina@agrocalidad.gob.com', '$2y$10$I04QeanpD7mtNIuyW0t7AehwoLp0eG3NebF5pKIfxVAWtldKHV3Bi', 66, 1, 1, NULL, '2017-11-06 21:31:30', '2017-11-06 21:31:30'),
(25, 'Juan Carlos', 'Juan Carlos', 'Mendoza López', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'juankamendoza_transporte@hotmail.com', '$2y$10$l1t4VegPf4lxExRBjkmEmODXGeLfDMA/zoZFE2oQ3Ky51OueYp1Ya', 66, 1, 1, 'c0zzCNdioWkoEZMocNZEJc8y0IYRssDofSHSkPoysMd6HkaL4NfSLbmH2WZe', '2017-11-06 21:56:01', '2017-11-06 21:56:01'),
(26, 'Ricardo Augusto', 'Ricardo Augusto', 'Ponce Jaramillo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'ovinagro@hotmail.com', '$2y$10$Or0F4Gd3P4L4sBHtQJDTguOyIkS2eWuGbGxM8Xvb9zOmTm4ZAG82S', 66, 1, 1, NULL, '2017-11-07 15:36:36', '2017-11-07 15:36:36'),
(27, 'Francisco Reinaldo', 'Francisco Reinaldo', 'Armijos Ordoñez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'frao001@hotmail.com', '$2y$10$.Mzynj2ZpK7w5X5Kdpm//OZWLmHSIBZ4Me1UDY62e9bt4PgyHV1re', 66, 1, 1, NULL, '2017-11-07 19:35:16', '2017-11-07 19:35:16'),
(28, 'CARLOS PATRICIO', 'CARLOS PATRICIO', 'MEDINA TENE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'patriciomedina662@gmail.com', '$2y$10$mxmPoPJhPpQaOIZ/GSHZue.U8IO7dGWZ8MBopYE1WsLfio2Bir9Xa', 66, 1, 1, 'gT6wihWCK40BSoUpuL6HWpn4DHLSy7zc0eMQXOZN2kDuwnhISjxz6xrtrPeQ', '2017-11-08 01:34:38', '2017-11-08 01:34:38'),
(29, 'Alexander Javier', 'Alexander Javier', 'Garzón Guzmán', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'javier.300192@gmail.com', '$2y$10$mRQU012saKnyDJODZsAT9.fjByS0JVr.CaIk2Au9K/k0mmMp/LKxS', 66, 1, 1, NULL, '2017-11-08 02:44:31', '2017-11-08 02:44:31'),
(30, 'EDWIN SAMUEL', 'EDWIN SAMUEL', 'MARTINEZ GAVILANES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'samuelinmartinez1@gmail.com', '$2y$10$OQtqL1XrYrqrRIo7sCzNR.SWKQKmlteGBEkUa9f9rBjZhstLTfd8i', 66, 1, 1, NULL, '2017-11-08 02:57:28', '2017-11-08 02:57:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinaries`
--

CREATE TABLE `veterinaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlf1` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlf2` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cel1` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cel2` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkweb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prop` text COLLATE utf8mb4_unicode_ci,
  `gerent` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `namelogo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datestart` date DEFAULT NULL,
  `ruc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razonsocial` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gg` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitud` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitud` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mision` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `veterinaries`
--

INSERT INTO `veterinaries` (`id`, `name`, `address`, `tlf1`, `tlf2`, `cel1`, `cel2`, `mail`, `linkweb`, `prop`, `gerent`, `area`, `description`, `logo`, `namelogo`, `datestart`, `ruc`, `razonsocial`, `fb`, `tw`, `in`, `yt`, `gg`, `latitud`, `longitud`, `mision`, `vision`, `fax`, `created_at`, `updated_at`) VALUES
(1, 'Austrogen', 'Calle Bolívar Montero (Barrio San Roque) Biblián – Ecuador', '072231610', '-073014693', '0993463289', '-0984271836', 'austrogen.sv@gmail.com', 'www.austrogen.com', 'Austrogen', 'Dr. Manuel Humberto Guachún Yanza', 'BIOTECNOLOGÍA  Y SERVICIOS VETERINARIOS', '<p style=\"text-align: justify;\">Austrogen, es una asociaci&oacute;n de t&eacute;cnicos pecuarios encaminados a satisfacer las necesidades del sector agropecuario mediante la implementaci&oacute;n de los diferentes programas de mejoramiento y mantenimiento de biodiversidad gen&eacute;tica, prevenci&oacute;n de enfermedades, implementaci&oacute;n y ejecuci&oacute;n de proyectos agropecuarios, capacitaci&oacute;n e innovaci&oacute;n de tecnolog&iacute;as. Orientados a mantener el bienestar animal, preservando el medio ambiente y dinamizando la producci&oacute;n que garantice el buen vivir.</p>', 'uploads/logos/fondo-1-final.png', 'fondo-1-final.png', '2017-01-27', NULL, 'Austrogen', 'https://www.facebook.com/Austrogen/', 'https://twitter.com/Austrogen1?lang=es', 'https://www.instagram.com/austrogen.sv/?hl=es', 'https://www.youtube.com/channel/UChbGGIIVpR3jaXM1sljPqfA', 'https://www.youtube.com/channel/UChbGGIIVpR3jaXM1sljPqfA', NULL, NULL, '<p>Desarrollar servicios biotecnol&oacute;gicos y soluciones veterinarias de alta calidad para impulsar la sostenibilidad del sector agropecuario.</p>', '<p>Ser l&iacute;der en brindar los servicios de biotecnolog&iacute;a y veterinaria en la regi&oacute;n y el pa&iacute;s, de manera eficaz y oportuna, en conjunto con las organizaciones p&uacute;blicas y privadas.</p>\r\n<p>Valores</p>\r\n<ol>\r\n<li>Responsabilidad</li>\r\n<li>Honestidad</li>\r\n<li>Compromiso</li>\r\n<li>Inclusivo</li>\r\n</ol>', NULL, '2017-10-10 16:22:53', '2017-10-27 02:53:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visits`
--

CREATE TABLE `visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `visits`
--

INSERT INTO `visits` (`id`, `ip`, `created_at`, `updated_at`) VALUES
(1, '190.152.143.224', '2017-10-27 05:37:22', '2017-10-27 05:37:22'),
(2, '200.7.247.198', '2017-10-27 12:18:18', '2017-10-27 12:18:18'),
(3, '181.112.140.146', '2017-10-27 13:10:28', '2017-10-27 13:10:28'),
(4, '191.97.65.3', '2017-10-27 13:44:22', '2017-10-27 13:44:22'),
(5, '34.204.72.207', '2017-10-27 15:54:12', '2017-10-27 15:54:12'),
(6, '180.76.15.157', '2017-10-27 16:42:19', '2017-10-27 16:42:19'),
(7, '186.47.22.90', '2017-10-27 16:45:08', '2017-10-27 16:45:08'),
(8, '186.69.249.100', '2017-10-27 18:15:59', '2017-10-27 18:15:59'),
(9, '66.249.66.75', '2017-10-27 18:40:45', '2017-10-27 18:40:45'),
(10, '66.249.66.76', '2017-10-27 18:46:48', '2017-10-27 18:46:48'),
(11, '173.252.92.24', '2017-10-27 22:32:33', '2017-10-27 22:32:33'),
(12, '173.252.95.11', '2017-10-27 22:32:33', '2017-10-27 22:32:33'),
(13, '186.43.143.16', '2017-10-28 00:31:54', '2017-10-28 00:31:54'),
(14, '142.4.222.147', '2017-10-28 03:58:35', '2017-10-28 03:58:35'),
(15, '190.152.178.43', '2017-10-28 04:07:32', '2017-10-28 04:07:32'),
(16, '181.113.74.141', '2017-10-28 04:48:56', '2017-10-28 04:48:56'),
(17, '181.211.231.236', '2017-10-28 05:30:35', '2017-10-28 05:30:35'),
(18, '190.152.243.232', '2017-10-28 07:17:16', '2017-10-28 07:17:16'),
(19, '173.252.90.81', '2017-10-28 14:45:02', '2017-10-28 14:45:02'),
(20, '31.13.114.8', '2017-10-28 14:45:27', '2017-10-28 14:45:27'),
(21, '66.249.88.54', '2017-10-28 14:45:56', '2017-10-28 14:45:56'),
(22, '181.211.232.152', '2017-10-28 19:57:20', '2017-10-28 19:57:20'),
(23, '181.112.100.37', '2017-10-28 20:01:14', '2017-10-28 20:01:14'),
(24, '66.249.88.83', '2017-10-28 21:08:20', '2017-10-28 21:08:20'),
(25, '191.100.154.106', '2017-10-28 23:40:47', '2017-10-28 23:40:47'),
(26, '179.49.41.233', '2017-10-29 00:45:15', '2017-10-29 00:45:15'),
(27, '200.7.247.94', '2017-10-29 01:37:37', '2017-10-29 01:37:37'),
(28, '190.12.5.238', '2017-10-29 02:11:04', '2017-10-29 02:11:04'),
(29, '50.16.44.89', '2017-10-29 04:42:52', '2017-10-29 04:42:52'),
(30, '186.42.239.107', '2017-10-29 15:06:31', '2017-10-29 15:06:31'),
(31, '181.196.143.30', '2017-10-29 15:46:49', '2017-10-29 15:46:49'),
(32, '181.198.94.70', '2017-10-29 17:19:43', '2017-10-29 17:19:43'),
(33, '181.211.228.219', '2017-10-29 18:53:18', '2017-10-29 18:53:18'),
(34, '66.249.88.87', '2017-10-29 22:23:40', '2017-10-29 22:23:40'),
(35, '66.249.64.150', '2017-10-29 23:19:46', '2017-10-29 23:19:46'),
(36, '200.7.247.64', '2017-10-30 01:56:01', '2017-10-30 01:56:01'),
(37, '200.107.40.46', '2017-10-30 02:26:07', '2017-10-30 02:26:07'),
(38, '66.87.117.57', '2017-10-30 03:21:29', '2017-10-30 03:21:29'),
(39, '181.112.135.134', '2017-10-30 03:37:56', '2017-10-30 03:37:56'),
(40, '200.85.80.94', '2017-10-30 04:21:09', '2017-10-30 04:21:09'),
(41, '186.47.225.162', '2017-10-30 11:35:55', '2017-10-30 11:35:55'),
(42, '180.76.15.135', '2017-10-30 11:59:00', '2017-10-30 11:59:00'),
(43, '180.76.15.155', '2017-10-30 12:32:20', '2017-10-30 12:32:20'),
(44, '200.7.247.81', '2017-10-30 13:03:30', '2017-10-30 13:03:30'),
(45, '66.249.64.152', '2017-10-30 14:02:52', '2017-10-30 14:02:52'),
(46, '66.249.64.211', '2017-10-30 14:23:27', '2017-10-30 14:23:27'),
(47, '190.94.134.18', '2017-10-30 17:01:54', '2017-10-30 17:01:54'),
(48, '181.39.29.254', '2017-10-30 17:20:31', '2017-10-30 17:20:31'),
(49, '200.85.83.141', '2017-10-30 18:37:27', '2017-10-30 18:37:27'),
(50, '186.71.235.194', '2017-10-30 20:33:38', '2017-10-30 20:33:38'),
(51, '181.112.84.75', '2017-10-30 20:49:44', '2017-10-30 20:49:44'),
(52, '181.112.25.109', '2017-10-30 23:12:09', '2017-10-30 23:12:09'),
(53, '190.90.5.116', '2017-10-30 23:25:31', '2017-10-30 23:25:31'),
(54, '190.63.150.47', '2017-10-30 23:26:37', '2017-10-30 23:26:37'),
(55, '66.249.88.53', '2017-10-31 00:10:18', '2017-10-31 00:10:18'),
(56, '66.249.88.55', '2017-10-31 00:12:30', '2017-10-31 00:12:30'),
(57, '190.152.142.22', '2017-10-31 00:57:40', '2017-10-31 00:57:40'),
(58, '181.113.70.140', '2017-10-31 01:00:58', '2017-10-31 01:00:58'),
(59, '66.249.64.148', '2017-10-31 01:25:48', '2017-10-31 01:25:48'),
(60, '181.196.175.246', '2017-10-31 02:24:49', '2017-10-31 02:24:49'),
(61, '190.152.205.134', '2017-10-31 03:22:47', '2017-10-31 03:22:47'),
(62, '181.112.24.221', '2017-10-31 04:14:18', '2017-10-31 04:14:18'),
(63, '181.199.144.57', '2017-10-31 12:07:39', '2017-10-31 12:07:39'),
(64, '181.112.27.7', '2017-10-31 12:16:32', '2017-10-31 12:16:32'),
(65, '200.7.247.38', '2017-10-31 12:17:09', '2017-10-31 12:17:09'),
(66, '138.201.60.47', '2017-10-31 13:07:41', '2017-10-31 13:07:41'),
(67, '181.188.201.94', '2017-10-31 15:29:53', '2017-10-31 15:29:53'),
(68, '201.97.175.183', '2017-10-31 16:24:26', '2017-10-31 16:24:26'),
(69, '181.211.75.159', '2017-10-31 16:24:56', '2017-10-31 16:24:56'),
(70, '181.188.200.39', '2017-10-31 17:40:56', '2017-10-31 17:40:56'),
(71, '216.145.14.142', '2017-10-31 21:26:42', '2017-10-31 21:26:42'),
(72, '181.211.127.190', '2017-11-01 00:32:33', '2017-11-01 00:32:33'),
(73, '181.211.233.127', '2017-11-01 00:37:17', '2017-11-01 00:37:17'),
(74, '54.197.74.50', '2017-11-01 01:16:24', '2017-11-01 01:16:24'),
(75, '186.43.202.28', '2017-11-01 02:29:33', '2017-11-01 02:29:33'),
(76, '200.7.247.115', '2017-11-01 03:24:25', '2017-11-01 03:24:25'),
(77, '66.249.64.215', '2017-11-01 07:47:11', '2017-11-01 07:47:11'),
(78, '54.145.134.118', '2017-11-01 08:14:52', '2017-11-01 08:14:52'),
(79, '181.112.100.184', '2017-11-01 11:56:06', '2017-11-01 11:56:06'),
(80, '123.191.136.32', '2017-11-01 14:57:49', '2017-11-01 14:57:49'),
(81, '181.113.27.230', '2017-11-01 15:05:18', '2017-11-01 15:05:18'),
(82, '186.46.202.217', '2017-11-01 16:05:46', '2017-11-01 16:05:46'),
(83, '173.252.95.12', '2017-11-01 16:19:30', '2017-11-01 16:19:30'),
(84, '181.198.94.76', '2017-11-01 16:19:31', '2017-11-01 16:19:31'),
(85, '107.21.1.8', '2017-11-01 18:07:19', '2017-11-01 18:07:19'),
(86, '186.71.202.130', '2017-11-01 19:44:17', '2017-11-01 19:44:17'),
(87, '186.4.181.36', '2017-11-01 21:48:51', '2017-11-01 21:48:51'),
(88, '54.67.67.222', '2017-11-01 23:11:14', '2017-11-01 23:11:14'),
(89, '181.188.201.10', '2017-11-01 23:14:49', '2017-11-01 23:14:49'),
(90, '190.63.119.23', '2017-11-01 23:53:27', '2017-11-01 23:53:27'),
(91, '191.100.72.2', '2017-11-02 01:35:55', '2017-11-02 01:35:55'),
(92, '190.152.137.89', '2017-11-02 01:53:26', '2017-11-02 01:53:26'),
(93, '207.46.13.36', '2017-11-02 17:46:17', '2017-11-02 17:46:17'),
(94, '180.76.15.136', '2017-11-02 19:01:06', '2017-11-02 19:01:06'),
(95, '218.241.108.158', '2017-11-02 20:54:24', '2017-11-02 20:54:24'),
(96, '104.239.149.11', '2017-11-02 22:37:48', '2017-11-02 22:37:48'),
(97, '200.107.45.244', '2017-11-02 22:55:11', '2017-11-02 22:55:11'),
(98, '180.76.15.23', '2017-11-02 23:58:42', '2017-11-02 23:58:42'),
(99, '180.76.15.25', '2017-11-03 00:32:01', '2017-11-03 00:32:01'),
(100, '190.63.119.169', '2017-11-03 00:36:20', '2017-11-03 00:36:20'),
(101, '157.100.230.77', '2017-11-03 01:30:02', '2017-11-03 01:30:02'),
(102, '66.249.64.213', '2017-11-03 10:26:50', '2017-11-03 10:26:50'),
(103, '190.57.168.158', '2017-11-03 12:46:14', '2017-11-03 12:46:14'),
(104, '52.38.149.151', '2017-11-03 17:19:39', '2017-11-03 17:19:39'),
(105, '54.171.19.22', '2017-11-03 19:19:30', '2017-11-03 19:19:30'),
(106, '66.249.88.59', '2017-11-03 22:09:36', '2017-11-03 22:09:36'),
(107, '186.47.248.25', '2017-11-03 23:25:26', '2017-11-03 23:25:26'),
(108, '186.68.69.116', '2017-11-04 00:28:28', '2017-11-04 00:28:28'),
(109, '218.241.108.76', '2017-11-04 01:41:24', '2017-11-04 01:41:24'),
(110, '180.76.15.22', '2017-11-04 12:24:00', '2017-11-04 12:24:00'),
(111, '192.0.112.114', '2017-11-04 15:34:09', '2017-11-04 15:34:09'),
(112, '181.211.122.150', '2017-11-04 17:49:35', '2017-11-04 17:49:35'),
(113, '173.252.92.245', '2017-11-04 19:16:14', '2017-11-04 19:16:14'),
(114, '181.113.181.28', '2017-11-04 21:22:51', '2017-11-04 21:22:51'),
(115, '181.211.121.170', '2017-11-04 22:36:59', '2017-11-04 22:36:59'),
(116, '181.196.4.131', '2017-11-05 03:33:42', '2017-11-05 03:33:42'),
(117, '181.211.127.139', '2017-11-05 16:49:03', '2017-11-05 16:49:03'),
(118, '181.199.6.76', '2017-11-05 22:11:07', '2017-11-05 22:11:07'),
(119, '167.114.55.123', '2017-11-05 22:57:33', '2017-11-05 22:57:33'),
(120, '186.178.179.209', '2017-11-06 00:42:46', '2017-11-06 00:42:46'),
(121, '169.57.165.93', '2017-11-06 01:20:54', '2017-11-06 01:20:54'),
(122, '37.235.48.55', '2017-11-06 01:27:28', '2017-11-06 01:27:28'),
(123, '191.100.158.2', '2017-11-06 02:47:01', '2017-11-06 02:47:01'),
(124, '200.7.247.150', '2017-11-06 05:14:51', '2017-11-06 05:14:51'),
(125, '200.107.40.195', '2017-11-06 11:43:57', '2017-11-06 11:43:57'),
(126, '181.49.102.34', '2017-11-06 13:35:19', '2017-11-06 13:35:19'),
(127, '66.249.88.13', '2017-11-06 14:56:25', '2017-11-06 14:56:25'),
(128, '52.91.6.79', '2017-11-06 18:41:09', '2017-11-06 18:41:09'),
(129, '186.46.86.36', '2017-11-06 21:23:24', '2017-11-06 21:23:24'),
(130, '181.196.204.115', '2017-11-06 21:40:05', '2017-11-06 21:40:05'),
(131, '186.70.97.133', '2017-11-06 21:45:19', '2017-11-06 21:45:19'),
(132, '186.5.79.134', '2017-11-06 21:56:01', '2017-11-06 21:56:01'),
(133, '181.211.226.199', '2017-11-06 22:06:55', '2017-11-06 22:06:55'),
(134, '200.85.80.139', '2017-11-07 01:05:29', '2017-11-07 01:05:29'),
(135, '190.152.243.137', '2017-11-07 02:26:52', '2017-11-07 02:26:52'),
(136, '190.152.139.170', '2017-11-07 02:40:47', '2017-11-07 02:40:47'),
(137, '190.152.177.115', '2017-11-07 03:12:46', '2017-11-07 03:12:46'),
(138, '186.47.221.57', '2017-11-07 10:33:10', '2017-11-07 10:33:10'),
(139, '190.152.233.198', '2017-11-07 14:40:07', '2017-11-07 14:40:07'),
(140, '182.228.197.133', '2017-11-07 15:01:41', '2017-11-07 15:01:41'),
(141, '200.7.247.244', '2017-11-07 15:35:34', '2017-11-07 15:35:34'),
(142, '200.7.247.27', '2017-11-07 15:35:35', '2017-11-07 15:35:35'),
(143, '181.211.78.220', '2017-11-07 15:35:53', '2017-11-07 15:35:53'),
(144, '186.5.62.8', '2017-11-07 15:40:30', '2017-11-07 15:40:30'),
(145, '66.102.7.149', '2017-11-07 19:35:16', '2017-11-07 19:35:16'),
(146, '66.102.7.151', '2017-11-07 19:36:36', '2017-11-07 19:36:36'),
(147, '64.233.172.230', '2017-11-07 19:36:36', '2017-11-07 19:36:36'),
(148, '66.102.7.147', '2017-11-07 19:36:39', '2017-11-07 19:36:39'),
(149, '66.249.88.7', '2017-11-07 19:37:31', '2017-11-07 19:37:31'),
(150, '186.46.222.114', '2017-11-07 21:13:00', '2017-11-07 21:13:00'),
(151, '200.125.245.149', '2017-11-07 22:49:19', '2017-11-07 22:49:19'),
(152, '186.46.174.117', '2017-11-07 23:34:32', '2017-11-07 23:34:32'),
(153, '200.7.247.89', '2017-11-08 01:25:23', '2017-11-08 01:25:23'),
(154, '186.46.174.52', '2017-11-08 01:58:16', '2017-11-08 01:58:16'),
(155, '190.152.129.79', '2017-11-08 02:57:28', '2017-11-08 02:57:28'),
(156, '157.55.39.245', '2017-11-08 03:38:07', '2017-11-08 03:38:07'),
(157, '112.169.246.50', '2017-11-08 12:47:59', '2017-11-08 12:47:59'),
(158, '190.152.135.39', '2017-11-08 14:48:23', '2017-11-08 14:48:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_city_unique` (`city`),
  ADD UNIQUE KEY `cities_postal_unique` (`postal`),
  ADD KEY `cities_id_province_foreign` (`id_province`);

--
-- Indices de la tabla `clasification_courses`
--
ALTER TABLE `clasification_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clasification_courses_typecourse_id_foreign` (`typecourse_id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_iso_unique` (`iso`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_clasification_id_foreign` (`clasification_id`),
  ADD KEY `courses_admin_id_foreign` (`admin_id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indices de la tabla `customer_password_resets`
--
ALTER TABLE `customer_password_resets`
  ADD KEY `customer_password_resets_email_index` (`email`),
  ADD KEY `customer_password_resets_token_index` (`token`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indices de la tabla `employee_password_resets`
--
ALTER TABLE `employee_password_resets`
  ADD KEY `employee_password_resets_email_index` (`email`),
  ADD KEY `employee_password_resets_token_index` (`token`);

--
-- Indices de la tabla `files_courses`
--
ALTER TABLE `files_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_courses_course_id_foreign` (`course_id`);

--
-- Indices de la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidads`
--
ALTER TABLE `modalidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_tag_id_foreign` (`tag_id`),
  ADD KEY `notes_admins_id_foreign` (`admins_id`);

--
-- Indices de la tabla `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_admins_id_foreign` (`admins_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_tipeproduct_id_foreign` (`tipeproduct_id`),
  ADD KEY `products_admins_id_foreign` (`admins_id`);

--
-- Indices de la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinces_province_unique` (`province`),
  ADD KEY `provinces_id_country_foreign` (`id_country`);

--
-- Indices de la tabla `section_titles`
--
ALTER TABLE `section_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_admins_id_foreign` (`admins_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `suscribirs`
--
ALTER TABLE `suscribirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suscribirs_tipesuscription_id_foreign` (`tipesuscription_id`),
  ADD KEY `suscribirs_curso_id_foreign` (`curso_id`),
  ADD KEY `suscribirs_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typeproducts`
--
ALTER TABLE `typeproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `typesuscriptions`
--
ALTER TABLE `typesuscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_courses`
--
ALTER TABLE `type_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_country_foreign` (`id_country`),
  ADD KEY `users_id_province_foreign` (`id_province`),
  ADD KEY `users_id_gender_foreign` (`id_gender`);

--
-- Indices de la tabla `veterinaries`
--
ALTER TABLE `veterinaries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clasification_courses`
--
ALTER TABLE `clasification_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `files_courses`
--
ALTER TABLE `files_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `modalidads`
--
ALTER TABLE `modalidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `section_titles`
--
ALTER TABLE `section_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `suscribirs`
--
ALTER TABLE `suscribirs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `typeproducts`
--
ALTER TABLE `typeproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `typesuscriptions`
--
ALTER TABLE `typesuscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `type_courses`
--
ALTER TABLE `type_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `veterinaries`
--
ALTER TABLE `veterinaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_id_province_foreign` FOREIGN KEY (`id_province`) REFERENCES `provinces` (`id`);

--
-- Filtros para la tabla `clasification_courses`
--
ALTER TABLE `clasification_courses`
  ADD CONSTRAINT `clasification_courses_typecourse_id_foreign` FOREIGN KEY (`typecourse_id`) REFERENCES `type_courses` (`id`);

--
-- Filtros para la tabla `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `courses_clasification_id_foreign` FOREIGN KEY (`clasification_id`) REFERENCES `clasification_courses` (`id`);

--
-- Filtros para la tabla `files_courses`
--
ALTER TABLE `files_courses`
  ADD CONSTRAINT `files_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Filtros para la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_admins_id_foreign` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `notes_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Filtros para la tabla `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_admins_id_foreign` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_admins_id_foreign` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `products_tipeproduct_id_foreign` FOREIGN KEY (`tipeproduct_id`) REFERENCES `typeproducts` (`id`);

--
-- Filtros para la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_id_country_foreign` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`);

--
-- Filtros para la tabla `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_admins_id_foreign` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`);

--
-- Filtros para la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `suscribirs`
--
ALTER TABLE `suscribirs`
  ADD CONSTRAINT `suscribirs_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `suscribirs_tipesuscription_id_foreign` FOREIGN KEY (`tipesuscription_id`) REFERENCES `typesuscriptions` (`id`),
  ADD CONSTRAINT `suscribirs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_country_foreign` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `users_id_gender_foreign` FOREIGN KEY (`id_gender`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `users_id_province_foreign` FOREIGN KEY (`id_province`) REFERENCES `provinces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
