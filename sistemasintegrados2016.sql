-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 17:49:52
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemasintegrados2016`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comcompras`
--

CREATE TABLE `comcompras` (
  `IdCompra` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `NumeroArticulo` int(4) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdProveedor` int(6) DEFAULT NULL,
  `IdEgreso` int(6) DEFAULT NULL,
  `IdMetodoPago` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comdetallecompras`
--

CREATE TABLE `comdetallecompras` (
  `IdDetalleCompra` int(6) NOT NULL,
  `IdCompra` int(6) NOT NULL,
  `IdProducto` int(6) NOT NULL,
  `PrecioUnitario` decimal(10,2) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Descuento` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compedidos`
--

CREATE TABLE `compedidos` (
  `IdPedido` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdProveedor` int(6) NOT NULL,
  `IdProducto` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comproveedores`
--

CREATE TABLE `comproveedores` (
  `IdProveedor` int(6) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `DomicilioFiscal` varchar(50) NOT NULL,
  `DomicilioParticular` varchar(50) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `Telefono` int(13) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comproveedores`
--

INSERT INTO `comproveedores` (`IdProveedor`, `Nombre`, `DomicilioFiscal`, `DomicilioParticular`, `RFC`, `Telefono`, `Correo`, `Status`) VALUES
(1, 'qq', 'qq', 'qq', 'qq', 1, 'asas@ass.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fincuentasporcobrar`
--

CREATE TABLE `fincuentasporcobrar` (
  `IdCuentaPorCobrar` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Plazo` date NOT NULL,
  `Tasa` decimal(4,2) DEFAULT NULL,
  `IdVenta` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fincuentasporpagar`
--

CREATE TABLE `fincuentasporpagar` (
  `IdCuentaPorPagar` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Plazo` date NOT NULL,
  `Tasa` decimal(4,2) DEFAULT NULL,
  `IdCompra` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finegresos`
--

CREATE TABLE `finegresos` (
  `IdEgreso` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdSuministro` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finformasdepago`
--

CREATE TABLE `finformasdepago` (
  `IdFormaPago` int(2) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Observacion` varchar(50) DEFAULT NULL,
  `IdVenta` int(6) DEFAULT NULL,
  `IdCompra` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finingresos`
--

CREATE TABLE `finingresos` (
  `IdIngreso` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finmetodosdepago`
--

CREATE TABLE `finmetodosdepago` (
  `IdMetodoPago` int(2) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Observacion` varchar(50) DEFAULT NULL,
  `IdCliente` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invactivosfijos`
--

CREATE TABLE `invactivosfijos` (
  `IdActivo` int(4) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Caracteristicas` varchar(100) DEFAULT NULL,
  `Estado` varchar(20) NOT NULL,
  `TipoActivo` varchar(20) DEFAULT NULL,
  `IdSucursal` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invcategoriasproductos`
--

CREATE TABLE `invcategoriasproductos` (
  `IdCategoria` int(2) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdProducto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invnominas`
--

CREATE TABLE `invnominas` (
  `IdNomina` int(6) NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `FechaPago` date NOT NULL,
  `MotivoPago` varchar(30) NOT NULL,
  `Dias` int(2) DEFAULT NULL,
  `Status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invproductos`
--

CREATE TABLE `invproductos` (
  `IdProducto` int(6) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Marca` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(20) DEFAULT NULL,
  `Existencia` int(4) DEFAULT NULL,
  `UnidadMedicion` varchar(5) DEFAULT NULL,
  `Categoria` varchar(15) DEFAULT NULL,
  `PrecioCompra` decimal(10,2) DEFAULT NULL,
  `PrecioVenta` decimal(10,2) DEFAULT NULL,
  `Descuento` decimal(10,2) DEFAULT NULL,
  `ImpuestoEspecial` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invsuministros`
--

CREATE TABLE `invsuministros` (
  `IdSuministro` int(4) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Caracteristicas` varchar(100) DEFAULT NULL,
  `Estado` varchar(20) NOT NULL,
  `TipoSuministro` varchar(20) DEFAULT NULL,
  `IdSucursal` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logentregas`
--

CREATE TABLE `logentregas` (
  `IdEntrega` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Observaciones` varchar(80) DEFAULT NULL,
  `NombreReceptor` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logenvios`
--

CREATE TABLE `logenvios` (
  `IdEnvio` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Observaciones` varchar(80) DEFAULT NULL,
  `DomicilioEntrega` varchar(80) DEFAULT NULL,
  `IdFormaEnvio` int(2) DEFAULT NULL,
  `IdEntrega` int(6) DEFAULT NULL,
  `IdVenta` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logformasdeenvio`
--

CREATE TABLE `logformasdeenvio` (
  `IdFormaEnvio` int(2) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Observacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhdepartamentos`
--

CREATE TABLE `rhdepartamentos` (
  `IdDepartamentos` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Localizacion` varchar(15) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rhdepartamentos`
--

INSERT INTO `rhdepartamentos` (`IdDepartamentos`, `Nombre`, `Localizacion`, `Status`) VALUES
(2, 'Eric', '', 1),
(3, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhempleados`
--

CREATE TABLE `rhempleados` (
  `IdEmpleado` int(6) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` int(13) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `FechaContratacion` date NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `IMSS` int(11) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `EstadoCivil` varchar(10) DEFAULT NULL,
  `CURP` varchar(18) NOT NULL,
  `IdDepartamento` int(3) DEFAULT NULL,
  `IdPuesto` int(6) DEFAULT NULL,
  `IdNomina` int(6) DEFAULT NULL,
  `IdCuenta` varchar(30) DEFAULT NULL,
  `IdDepartamentos` int(3) DEFAULT NULL,
  `IdTurno` int(3) DEFAULT NULL,
  `IdCompra` int(6) DEFAULT NULL,
  `IdVenta` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhpuestos`
--

CREATE TABLE `rhpuestos` (
  `IdPuesto` int(6) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Nivel` varchar(10) DEFAULT NULL,
  `PersonalRequerido` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rhpuestos`
--

INSERT INTO `rhpuestos` (`IdPuesto`, `Nombre`, `Status`, `Descripcion`, `Nivel`, `PersonalRequerido`) VALUES
(1, 'Eric', 1, '1', '1', 1),
(2, 'Eric', 1, '1', '1', 1),
(3, 'Eric', 1, '', '', 0),
(4, 'gerente', 1, 'nada', '2', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhsucursales`
--

CREATE TABLE `rhsucursales` (
  `IdSucursal` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Localizacion` varchar(50) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Telefono` int(13) DEFAULT NULL,
  `DomicilioFiscal` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rhsucursales`
--

INSERT INTO `rhsucursales` (`IdSucursal`, `Nombre`, `Localizacion`, `Status`, `Telefono`, `DomicilioFiscal`) VALUES
(1, '1', '1', 1, 2147483647, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rhturnos`
--

CREATE TABLE `rhturnos` (
  `IdTurno` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  `DiasLaborales` varchar(20) DEFAULT NULL,
  `TipoJornada` varchar(20) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `syscuentas`
--

CREATE TABLE `syscuentas` (
  `IdCuenta` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `TipoCuenta` varchar(10) NOT NULL,
  `Intentos` int(2) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL,
  `FechaUltimoAcceso` date DEFAULT NULL,
  `IdTipo` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `syspermisos`
--

CREATE TABLE `syspermisos` (
  `IdPermiso` int(6) NOT NULL,
  `TipoPermiso` varchar(20) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `FechaOtorgacion` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `systiposcuentas`
--

CREATE TABLE `systiposcuentas` (
  `IdTipo` int(2) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `IdPermiso` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venclientes`
--

CREATE TABLE `venclientes` (
  `IdCliente` int(6) NOT NULL,
  `Nombre` varbinary(50) NOT NULL,
  `DomicilioFiscal` varchar(50) NOT NULL,
  `DomicilioParticular` varchar(50) DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `Telefono` int(13) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendetalleventas`
--

CREATE TABLE `vendetalleventas` (
  `IdDetalleVenta` int(6) NOT NULL,
  `IdVenta` int(6) NOT NULL,
  `IdProducto` int(6) NOT NULL,
  `PrecioUnitario` decimal(10,2) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Descuento` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendevoluciones`
--

CREATE TABLE `vendevoluciones` (
  `IdDevolucion` int(4) NOT NULL,
  `Fecha` date NOT NULL,
  `Motivo` varchar(50) DEFAULT NULL,
  `IdVenta` int(6) DEFAULT NULL,
  `IdCompra` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venventas`
--

CREATE TABLE `venventas` (
  `IdVenta` int(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Monto` decimal(10,2) NOT NULL,
  `NumeroArticulo` int(4) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdCliente` int(6) DEFAULT NULL,
  `IdIngreso` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comcompras`
--
ALTER TABLE `comcompras`
  ADD PRIMARY KEY (`IdCompra`),
  ADD KEY `IX_Relationship16` (`IdProveedor`),
  ADD KEY `IX_Relationship20` (`IdEgreso`),
  ADD KEY `IX_Relationship25` (`IdMetodoPago`);

--
-- Indices de la tabla `comdetallecompras`
--
ALTER TABLE `comdetallecompras`
  ADD PRIMARY KEY (`IdDetalleCompra`),
  ADD KEY `IX_Relationship9` (`IdCompra`),
  ADD KEY `IX_Relationship10` (`IdProducto`);

--
-- Indices de la tabla `compedidos`
--
ALTER TABLE `compedidos`
  ADD PRIMARY KEY (`IdPedido`),
  ADD KEY `IX_Relationship26` (`IdProveedor`),
  ADD KEY `IX_Relationship27` (`IdProducto`);

--
-- Indices de la tabla `comproveedores`
--
ALTER TABLE `comproveedores`
  ADD PRIMARY KEY (`IdProveedor`);

--
-- Indices de la tabla `fincuentasporcobrar`
--
ALTER TABLE `fincuentasporcobrar`
  ADD PRIMARY KEY (`IdCuentaPorCobrar`),
  ADD KEY `IX_Relationship23` (`IdVenta`);

--
-- Indices de la tabla `fincuentasporpagar`
--
ALTER TABLE `fincuentasporpagar`
  ADD PRIMARY KEY (`IdCuentaPorPagar`),
  ADD KEY `IX_Relationship22` (`IdCompra`);

--
-- Indices de la tabla `finegresos`
--
ALTER TABLE `finegresos`
  ADD PRIMARY KEY (`IdEgreso`),
  ADD KEY `IX_Relationship5` (`IdSuministro`);

--
-- Indices de la tabla `finformasdepago`
--
ALTER TABLE `finformasdepago`
  ADD PRIMARY KEY (`IdFormaPago`),
  ADD KEY `IX_Relationship6` (`IdVenta`),
  ADD KEY `IX_Relationship7` (`IdCompra`);

--
-- Indices de la tabla `finingresos`
--
ALTER TABLE `finingresos`
  ADD PRIMARY KEY (`IdIngreso`);

--
-- Indices de la tabla `finmetodosdepago`
--
ALTER TABLE `finmetodosdepago`
  ADD PRIMARY KEY (`IdMetodoPago`),
  ADD KEY `IX_Relationship8` (`IdCliente`);

--
-- Indices de la tabla `invactivosfijos`
--
ALTER TABLE `invactivosfijos`
  ADD PRIMARY KEY (`IdActivo`),
  ADD KEY `IX_Relationship3` (`IdSucursal`);

--
-- Indices de la tabla `invcategoriasproductos`
--
ALTER TABLE `invcategoriasproductos`
  ADD PRIMARY KEY (`IdCategoria`),
  ADD KEY `IX_Relationship31` (`IdProducto`);

--
-- Indices de la tabla `invnominas`
--
ALTER TABLE `invnominas`
  ADD PRIMARY KEY (`IdNomina`);

--
-- Indices de la tabla `invproductos`
--
ALTER TABLE `invproductos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `invsuministros`
--
ALTER TABLE `invsuministros`
  ADD PRIMARY KEY (`IdSuministro`),
  ADD KEY `IX_Relationship2` (`IdSucursal`);

--
-- Indices de la tabla `logentregas`
--
ALTER TABLE `logentregas`
  ADD PRIMARY KEY (`IdEntrega`);

--
-- Indices de la tabla `logenvios`
--
ALTER TABLE `logenvios`
  ADD PRIMARY KEY (`IdEnvio`),
  ADD KEY `IX_Relationship1` (`IdFormaEnvio`),
  ADD KEY `IX_Relationship5` (`IdEntrega`),
  ADD KEY `IX_Relationship3` (`IdVenta`);

--
-- Indices de la tabla `logformasdeenvio`
--
ALTER TABLE `logformasdeenvio`
  ADD PRIMARY KEY (`IdFormaEnvio`);

--
-- Indices de la tabla `rhdepartamentos`
--
ALTER TABLE `rhdepartamentos`
  ADD PRIMARY KEY (`IdDepartamentos`);

--
-- Indices de la tabla `rhempleados`
--
ALTER TABLE `rhempleados`
  ADD PRIMARY KEY (`IdEmpleado`),
  ADD KEY `IX_Relationship3` (`IdPuesto`),
  ADD KEY `IX_Relationship5` (`IdNomina`),
  ADD KEY `IX_Relationship6` (`IdCuenta`),
  ADD KEY `IX_Relationship7` (`IdDepartamentos`),
  ADD KEY `IX_Relationship8` (`IdTurno`),
  ADD KEY `IX_Relationship13` (`IdCompra`),
  ADD KEY `IX_Relationship14` (`IdVenta`);

--
-- Indices de la tabla `rhpuestos`
--
ALTER TABLE `rhpuestos`
  ADD PRIMARY KEY (`IdPuesto`);

--
-- Indices de la tabla `rhsucursales`
--
ALTER TABLE `rhsucursales`
  ADD PRIMARY KEY (`IdSucursal`);

--
-- Indices de la tabla `rhturnos`
--
ALTER TABLE `rhturnos`
  ADD PRIMARY KEY (`IdTurno`);

--
-- Indices de la tabla `syscuentas`
--
ALTER TABLE `syscuentas`
  ADD PRIMARY KEY (`IdCuenta`),
  ADD KEY `IX_Relationship4` (`IdTipo`);

--
-- Indices de la tabla `syspermisos`
--
ALTER TABLE `syspermisos`
  ADD PRIMARY KEY (`IdPermiso`);

--
-- Indices de la tabla `systiposcuentas`
--
ALTER TABLE `systiposcuentas`
  ADD PRIMARY KEY (`IdTipo`),
  ADD KEY `IX_Relationship4` (`IdPermiso`);

--
-- Indices de la tabla `venclientes`
--
ALTER TABLE `venclientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `vendetalleventas`
--
ALTER TABLE `vendetalleventas`
  ADD PRIMARY KEY (`IdDetalleVenta`),
  ADD KEY `Relationship11` (`IdVenta`),
  ADD KEY `Relationship12` (`IdProducto`);

--
-- Indices de la tabla `vendevoluciones`
--
ALTER TABLE `vendevoluciones`
  ADD PRIMARY KEY (`IdDevolucion`),
  ADD KEY `IX_Relationship28` (`IdVenta`),
  ADD KEY `IX_Relationship29` (`IdCompra`);

--
-- Indices de la tabla `venventas`
--
ALTER TABLE `venventas`
  ADD PRIMARY KEY (`IdVenta`),
  ADD KEY `IX_Relationship15` (`IdCliente`),
  ADD KEY `IX_Relationship21` (`IdIngreso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comcompras`
--
ALTER TABLE `comcompras`
  MODIFY `IdCompra` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comdetallecompras`
--
ALTER TABLE `comdetallecompras`
  MODIFY `IdDetalleCompra` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compedidos`
--
ALTER TABLE `compedidos`
  MODIFY `IdPedido` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comproveedores`
--
ALTER TABLE `comproveedores`
  MODIFY `IdProveedor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fincuentasporcobrar`
--
ALTER TABLE `fincuentasporcobrar`
  MODIFY `IdCuentaPorCobrar` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fincuentasporpagar`
--
ALTER TABLE `fincuentasporpagar`
  MODIFY `IdCuentaPorPagar` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `finegresos`
--
ALTER TABLE `finegresos`
  MODIFY `IdEgreso` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `finformasdepago`
--
ALTER TABLE `finformasdepago`
  MODIFY `IdFormaPago` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `finingresos`
--
ALTER TABLE `finingresos`
  MODIFY `IdIngreso` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `finmetodosdepago`
--
ALTER TABLE `finmetodosdepago`
  MODIFY `IdMetodoPago` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invactivosfijos`
--
ALTER TABLE `invactivosfijos`
  MODIFY `IdActivo` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invcategoriasproductos`
--
ALTER TABLE `invcategoriasproductos`
  MODIFY `IdCategoria` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invnominas`
--
ALTER TABLE `invnominas`
  MODIFY `IdNomina` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invproductos`
--
ALTER TABLE `invproductos`
  MODIFY `IdProducto` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `invsuministros`
--
ALTER TABLE `invsuministros`
  MODIFY `IdSuministro` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `logentregas`
--
ALTER TABLE `logentregas`
  MODIFY `IdEntrega` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `logenvios`
--
ALTER TABLE `logenvios`
  MODIFY `IdEnvio` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `logformasdeenvio`
--
ALTER TABLE `logformasdeenvio`
  MODIFY `IdFormaEnvio` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rhdepartamentos`
--
ALTER TABLE `rhdepartamentos`
  MODIFY `IdDepartamentos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rhempleados`
--
ALTER TABLE `rhempleados`
  MODIFY `IdEmpleado` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rhpuestos`
--
ALTER TABLE `rhpuestos`
  MODIFY `IdPuesto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `rhsucursales`
--
ALTER TABLE `rhsucursales`
  MODIFY `IdSucursal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rhturnos`
--
ALTER TABLE `rhturnos`
  MODIFY `IdTurno` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `syspermisos`
--
ALTER TABLE `syspermisos`
  MODIFY `IdPermiso` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `systiposcuentas`
--
ALTER TABLE `systiposcuentas`
  MODIFY `IdTipo` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venclientes`
--
ALTER TABLE `venclientes`
  MODIFY `IdCliente` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendetalleventas`
--
ALTER TABLE `vendetalleventas`
  MODIFY `IdDetalleVenta` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendevoluciones`
--
ALTER TABLE `vendevoluciones`
  MODIFY `IdDevolucion` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venventas`
--
ALTER TABLE `venventas`
  MODIFY `IdVenta` int(6) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comcompras`
--
ALTER TABLE `comcompras`
  ADD CONSTRAINT `Relacion M a M` FOREIGN KEY (`IdMetodoPago`) REFERENCES `finmetodosdepago` (`IdMetodoPago`),
  ADD CONSTRAINT `Relationship16` FOREIGN KEY (`IdProveedor`) REFERENCES `comproveedores` (`IdProveedor`),
  ADD CONSTRAINT `Relationship20` FOREIGN KEY (`IdEgreso`) REFERENCES `finegresos` (`IdEgreso`);

--
-- Filtros para la tabla `comdetallecompras`
--
ALTER TABLE `comdetallecompras`
  ADD CONSTRAINT `Relationship10` FOREIGN KEY (`IdProducto`) REFERENCES `invproductos` (`IdProducto`),
  ADD CONSTRAINT `Relationship9` FOREIGN KEY (`IdCompra`) REFERENCES `comcompras` (`IdCompra`);

--
-- Filtros para la tabla `compedidos`
--
ALTER TABLE `compedidos`
  ADD CONSTRAINT `Relationship26` FOREIGN KEY (`IdProveedor`) REFERENCES `comproveedores` (`IdProveedor`),
  ADD CONSTRAINT `Relationship27` FOREIGN KEY (`IdProducto`) REFERENCES `invproductos` (`IdProducto`);

--
-- Filtros para la tabla `fincuentasporcobrar`
--
ALTER TABLE `fincuentasporcobrar`
  ADD CONSTRAINT `Relationship23` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`);

--
-- Filtros para la tabla `fincuentasporpagar`
--
ALTER TABLE `fincuentasporpagar`
  ADD CONSTRAINT `Relationship22` FOREIGN KEY (`IdCompra`) REFERENCES `comcompras` (`IdCompra`);

--
-- Filtros para la tabla `finegresos`
--
ALTER TABLE `finegresos`
  ADD CONSTRAINT `Relationship24` FOREIGN KEY (`IdSuministro`) REFERENCES `invsuministros` (`IdSuministro`);

--
-- Filtros para la tabla `finformasdepago`
--
ALTER TABLE `finformasdepago`
  ADD CONSTRAINT `Relationship25` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`),
  ADD CONSTRAINT `Relationship7` FOREIGN KEY (`IdCompra`) REFERENCES `comcompras` (`IdCompra`);

--
-- Filtros para la tabla `finmetodosdepago`
--
ALTER TABLE `finmetodosdepago`
  ADD CONSTRAINT `Relationship33` FOREIGN KEY (`IdCliente`) REFERENCES `venclientes` (`IdCliente`);

--
-- Filtros para la tabla `invactivosfijos`
--
ALTER TABLE `invactivosfijos`
  ADD CONSTRAINT `Relationship30` FOREIGN KEY (`IdSucursal`) REFERENCES `rhsucursales` (`IdSucursal`);

--
-- Filtros para la tabla `invcategoriasproductos`
--
ALTER TABLE `invcategoriasproductos`
  ADD CONSTRAINT `Relationship31` FOREIGN KEY (`IdProducto`) REFERENCES `invproductos` (`IdProducto`);

--
-- Filtros para la tabla `invsuministros`
--
ALTER TABLE `invsuministros`
  ADD CONSTRAINT `Relationship2` FOREIGN KEY (`IdSucursal`) REFERENCES `rhsucursales` (`IdSucursal`);

--
-- Filtros para la tabla `logenvios`
--
ALTER TABLE `logenvios`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`IdFormaEnvio`) REFERENCES `logformasdeenvio` (`IdFormaEnvio`),
  ADD CONSTRAINT `Relationship17` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`),
  ADD CONSTRAINT `Relationship19` FOREIGN KEY (`IdEntrega`) REFERENCES `logentregas` (`IdEntrega`);

--
-- Filtros para la tabla `rhempleados`
--
ALTER TABLE `rhempleados`
  ADD CONSTRAINT `Relationship13` FOREIGN KEY (`IdCompra`) REFERENCES `comcompras` (`IdCompra`),
  ADD CONSTRAINT `Relationship14` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`),
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`IdPuesto`) REFERENCES `rhpuestos` (`IdPuesto`),
  ADD CONSTRAINT `Relationship32` FOREIGN KEY (`IdDepartamentos`) REFERENCES `rhdepartamentos` (`IdDepartamentos`),
  ADD CONSTRAINT `Relationship5` FOREIGN KEY (`IdNomina`) REFERENCES `invnominas` (`IdNomina`),
  ADD CONSTRAINT `Relationship6` FOREIGN KEY (`IdCuenta`) REFERENCES `syscuentas` (`IdCuenta`),
  ADD CONSTRAINT `Relationship8` FOREIGN KEY (`IdTurno`) REFERENCES `rhturnos` (`IdTurno`);

--
-- Filtros para la tabla `syscuentas`
--
ALTER TABLE `syscuentas`
  ADD CONSTRAINT `Relationship4` FOREIGN KEY (`IdTipo`) REFERENCES `systiposcuentas` (`IdTipo`);

--
-- Filtros para la tabla `systiposcuentas`
--
ALTER TABLE `systiposcuentas`
  ADD CONSTRAINT `Relationship18` FOREIGN KEY (`IdPermiso`) REFERENCES `syspermisos` (`IdPermiso`);

--
-- Filtros para la tabla `vendetalleventas`
--
ALTER TABLE `vendetalleventas`
  ADD CONSTRAINT `Relationship11` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`),
  ADD CONSTRAINT `Relationship12` FOREIGN KEY (`IdProducto`) REFERENCES `invproductos` (`IdProducto`);

--
-- Filtros para la tabla `vendevoluciones`
--
ALTER TABLE `vendevoluciones`
  ADD CONSTRAINT `Relationship28` FOREIGN KEY (`IdVenta`) REFERENCES `venventas` (`IdVenta`),
  ADD CONSTRAINT `Relationship29` FOREIGN KEY (`IdCompra`) REFERENCES `comcompras` (`IdCompra`);

--
-- Filtros para la tabla `venventas`
--
ALTER TABLE `venventas`
  ADD CONSTRAINT `Relationship15` FOREIGN KEY (`IdCliente`) REFERENCES `venclientes` (`IdCliente`),
  ADD CONSTRAINT `Relationship21` FOREIGN KEY (`IdIngreso`) REFERENCES `finingresos` (`IdIngreso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
