-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 03:06:27
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `timbraje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl`
--

CREATE TABLE IF NOT EXISTS `acl` (
  `ai` int(10) unsigned NOT NULL,
  `action_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_actions`
--

CREATE TABLE IF NOT EXISTS `acl_actions` (
  `action_id` int(10) unsigned NOT NULL,
  `action_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  `category_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_categories`
--

CREATE TABLE IF NOT EXISTS `acl_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_sessions`
--

CREATE TABLE IF NOT EXISTS `auth_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes_timbraje`
--

CREATE TABLE IF NOT EXISTS `comprobantes_timbraje` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(255) DEFAULT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comprobantes_timbraje`
--

INSERT INTO `comprobantes_timbraje` (`id`, `fecha`, `id_usuario`, `id_empresa`, `numero`) VALUES
(1, '0000-00-00', 1, 1, 1212),
(2, '0000-00-00', 1, 1, 12121),
(3, '0000-00-00', 1, 1, 12121),
(4, '0000-00-00', 1, 1, 121);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denied_access`
--

CREATE TABLE IF NOT EXISTS `denied_access` (
  `ai` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  `reason_code` tinyint(1) unsigned DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` bigint(20) NOT NULL,
  `rut` int(20) NOT NULL,
  `dv` varchar(2) NOT NULL,
  `razon_social` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `rut`, `dv`, `razon_social`) VALUES
(1, 76593017, '0', 'SERVICIOS INFORMATICOS SEBASTIAN GAUTIER MONTERO EIRL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips_on_hold`
--

CREATE TABLE IF NOT EXISTS `ips_on_hold` (
  `ai` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_errors`
--

CREATE TABLE IF NOT EXISTS `login_errors` (
  `ai` int(10) unsigned NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login_errors`
--

INSERT INTO `login_errors` (`ai`, `username_or_email`, `ip_address`, `time`) VALUES
(1, 'se', '192.168.0.162', '2020-09-24 03:48:25'),
(2, 'se', '192.168.0.162', '2020-09-24 03:48:41'),
(3, 'seb', '192.168.0.162', '2020-09-24 03:49:13'),
(4, 'skunkbot', '192.168.0.162', '2020-09-24 03:50:36'),
(5, 'skungbot', '192.168.0.162', '2020-09-24 03:52:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timbraje`
--

CREATE TABLE IF NOT EXISTS `timbraje` (
  `id` bigint(20) NOT NULL,
  `id_tipo_libro` int(11) NOT NULL,
  `nulo` tinyint(1) NOT NULL,
  `id_cliente` bigint(20) NOT NULL,
  `desde` int(11) NOT NULL,
  `hasta` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `id_comprobante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_libros`
--

CREATE TABLE IF NOT EXISTS `tipos_libros` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_libros`
--

INSERT INTO `tipos_libros` (`id`, `nombre`, `activo`) VALUES
(1, 'VENTAS', 1),
(2, 'COMPRAS', 1),
(3, 'REMUNERACIONES', 1),
(4, 'FUT', 1),
(5, 'INVENTARIO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username_or_email_on_hold`
--

CREATE TABLE IF NOT EXISTS `username_or_email_on_hold` (
  `ai` int(10) unsigned NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `auth_level` tinyint(3) unsigned NOT NULL,
  `banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL,
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` datetime DEFAULT NULL,
  `passwd_modified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(2147484848, 'skunkbot', 'skunkbot@example.com', 1, '0', '$2y$11$f9baVqrhsDir9sAIWnTDtOhmMUZDsz8/z5tCiZjK6rrvXDaSE.B0O', NULL, NULL, NULL, '2020-09-24 03:50:58', '2020-09-24 03:47:03', '2020-09-24 01:50:58');

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users`
 FOR EACH ROW IF ((NEW.passwd <=> OLD.passwd) = 0) THEN
        SET NEW.passwd_modified_at = NOW();
    END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `clave` varchar(256) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kn_borrar_timbraje` tinyint(1) NOT NULL DEFAULT '1',
  `kn_edit_timbraje` tinyint(1) NOT NULL DEFAULT '1',
  `correo` varchar(255) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `clave`, `activo`, `email`, `kn_borrar_timbraje`, `kn_edit_timbraje`, `correo`, `nombre`, `img`) VALUES
(1, 'sgautier', '37b5605fc0b47b494afde377e8815c3c45000df6b78b1282724fd8262913d9cb', 1, 'sebastian.gautier@gmail.com', 1, 1, 'sebastian.gautier@gmail.com', 'Sebastian Gautier', 'user-1.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`ai`), ADD KEY `action_id` (`action_id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD PRIMARY KEY (`action_id`), ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_code` (`category_code`), ADD UNIQUE KEY `category_desc` (`category_desc`);

--
-- Indices de la tabla `auth_sessions`
--
ALTER TABLE `auth_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `comprobantes_timbraje`
--
ALTER TABLE `comprobantes_timbraje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `timbraje`
--
ALTER TABLE `timbraje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_libros`
--
ALTER TABLE `tipos_libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acl`
--
ALTER TABLE `acl`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  MODIFY `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comprobantes_timbraje`
--
ALTER TABLE `comprobantes_timbraje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `timbraje`
--
ALTER TABLE `timbraje`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_libros`
--
ALTER TABLE `tipos_libros`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acl`
--
ALTER TABLE `acl`
ADD CONSTRAINT `acl_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acl_actions` (`action_id`) ON DELETE CASCADE,
ADD CONSTRAINT `acl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
ADD CONSTRAINT `acl_actions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `acl_categories` (`category_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
