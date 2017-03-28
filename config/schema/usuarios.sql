

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  `clave_rol` enum('root','cms','web') DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='Roles de los usuarios del sistema';

INSERT INTO roles VALUES(null, 'Root', 'root', 1);
INSERT INTO roles VALUES(null, 'Usuario Web', 'web', 1);
INSERT INTO roles VALUES(null, 'Usuario CMS', 'cms', 1);

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_generada` varchar(45) DEFAULT 'web',
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `creado_en` date DEFAULT NULL,
  `ultima_sesion_en` date DEFAULT NULL,
  `rol_id` int(11) DEFAULT '3',
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rol_usuario_1` (`rol_id`),
  CONSTRAINT `rol_usuario_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='Tabla de usuarios del sistema';

INSERT INTO usuarios VALUES(null, 'root', 'root', '******', null, null, 1, 1);