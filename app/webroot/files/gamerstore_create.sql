CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `descuentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compraminima` int(11) DEFAULT NULL,
  `porcentaje` decimal(3,2) DEFAULT NULL,
  `fechainicio` date DEFAULT NULL,
  `fechatermino` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tiporeclamos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto` longblob,
  `tipo` enum('Admin','Vendedor','Repartidor','Cliente') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `categorias_descuentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `descuento_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria` (`categoria_id`),
  KEY `fk_descuento` (`descuento_id`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_descuento` FOREIGN KEY (`descuento_id`) REFERENCES `descuentos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `reclamos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prueba` longblob,
  `tiporeclamo_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `solucion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `estado` enum('Pendiente','Finalizado') NOT NULL DEFAULT 'Pendiente',
  PRIMARY KEY (`id`),
  KEY `fk_reclamo_tipo` (`tiporeclamo_id`),
  CONSTRAINT `fk_reclamo_tipo` FOREIGN KEY (`tiporeclamo_id`) REFERENCES `tiporeclamos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ciudads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_region` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `proveedors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruc` int(11) DEFAULT NULL,
  `razonsocial` varchar(40) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prov_ciud_idx` (`ciudad_id`),
  CONSTRAINT `fk_prov_ciud` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `imagen` blob,
  `caracteristica` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `preciounitario` decimal(10,0) DEFAULT NULL,
  `precioenviolocal` decimal(10,0) DEFAULT NULL,
  `precioenvioprovincia` decimal(10,0) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `proveedor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_categoria` (`categoria_id`),
  KEY `fk_producto_proveedor` (`proveedor_id`),
  CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_producto_proveedor` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `descuentos_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descuento_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_desc_prod_des` (`descuento_id`),
  KEY `fk_desc_prod_prod` (`producto_id`),
  CONSTRAINT `fk_desc_prod_des` FOREIGN KEY (`descuento_id`) REFERENCES `descuentos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_desc_prod_prod` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `permisos_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permiso_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_permiso_user_per` (`permiso_id`),
  KEY `fk_permiso_user_user` (`user_id`),
  CONSTRAINT `fk_permiso_user_per` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_permiso_user_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_cliente` (`user_id`),
  CONSTRAINT `fk_user_cliente` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tarjetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) DEFAULT NULL,
  `fechavencimiento` date DEFAULT NULL,
  `ccv` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_tarjetas` (`cliente_id`),
  CONSTRAINT `fk_cliente_tarjetas` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `direccions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primeralinea` varchar(20) DEFAULT NULL,
  `segundalinea` varchar(20) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  `codigopostal` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dir_client` (`cliente_id`),
  KEY `fk_dir_ciud_idx` (`ciudad_id`),
  CONSTRAINT `fk_dir_ciud` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudads` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_dir_client` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `disenios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` blob,
  `descripcion` varchar(40) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dis_prod` (`producto_id`),
  KEY `fk_dis_cliente` (`cliente_id`),
  CONSTRAINT `fk_dis_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_dis_prod` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `calificacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calificacion` int(11) DEFAULT NULL,
  `disenio_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calif_cliente` (`cliente_id`),
  KEY `fk_disenio` (`disenio_id`),
  CONSTRAINT `fk_calif_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_disenio` FOREIGN KEY (`disenio_id`) REFERENCES `disenios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechacompra` date DEFAULT NULL,
  `fechaentrega` date DEFAULT NULL,
  `numerotarjeta` varchar(20) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente` (`cliente_id`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `disenios_ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preciounitario` decimal(10,0) DEFAULT NULL,
  `cantidad` int(2) DEFAULT NULL,
  `precioenvio` decimal(10,0) DEFAULT NULL,
  `disenio_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `reclamo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dis_vent_dis` (`disenio_id`),
  KEY `fk_dis_vent_vent` (`venta_id`),
  KEY `fk_dis_vent_recl` (`reclamo_id`),
  CONSTRAINT `fk_dis_vent_dis` FOREIGN KEY (`disenio_id`) REFERENCES `disenios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_dis_vent_recl` FOREIGN KEY (`reclamo_id`) REFERENCES `reclamos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_dis_vent_vent` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
