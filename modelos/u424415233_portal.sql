CREATE SCHEMA IF NOT EXISTS `u424415233_portal` DEFAULT CHARACTER SET utf8 ;
USE `u424415233_portal` ;


-- -----------------------------------------------------
-- Table `u424415233_portal`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u424415233_portal`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(45) NULL,
  `nombre` VARCHAR(30) NULL,
  `email` VARCHAR(30) NULL,
  `password` TEXT NULL,
  `fecha` TIMESTAMP NULL,
  `foto` TEXT NULL,
  `pais` TEXT NULL,
  `codigo_pais` TEXT NULL,
  `ciudad` TEXT NULL,
  `direccion` TEXT NULL,
  `telefono_movil` TEXT NULL,
  `verificacion` INT NULL,
  `email_encriptado` TEXT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;

INSERT INTO `usuarios` (`id_usuario`, `perfil`, `nombre`, `email`, `password`, `fecha`, `foto`, `pais`, `codigo_pais`, `ciudad`, `direccion`, `telefono_movil`, `verificacion`, `email_encriptado`) VALUES
(1, 'admin', 'Yessi', 'yessicac187@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/1/689.jpg', NULL, NULL, NULL, NULL, NULL, 1, '7f429a4aea4f0a7baa5d90c94d06d7b3'),
(2, 'admin', 'Sebas', 'sebas@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/16/353.jpg', NULL, NULL, NULL, NULL, NULL, 1, '7f429a4aea4f0a7baa5d90c94d06d7b3'),
(3, 'admin', 'Niko', 'niko@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/16/353.jpg', NULL, NULL, NULL, NULL, NULL, 1, 'b53cd9a1596e6564dc93e28ebebb707c'),
(4, 'usuario', 'Alexander Parra', 'alexander@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/2/559.png', NULL, NULL, NULL, NULL, NULL, 1, 'aaf98bbf03aff90b36e5f1343067d5e5'),
(5, 'usuario', 'Jaime Carrillo', 'jaime@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/5/911.jpg', NULL, NULL, NULL, NULL, NULL, 1, 'a6fa2ff49c6efcee56d5fc943ff6126e'),
(6, 'usuario', 'Ana Gonzalez', 'ana@gmail.co', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/5/911.jpg', NULL, NULL, NULL, NULL, NULL, 1, '55084db2f2547c5f8a3879a0b564a9de'),
(7, 'usuario', 'Lorena Perez', 'lorena@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/5/911.jpg', NULL, NULL, NULL, NULL, NULL, 1, '55084db2f2547c5f8a3879a0b564a9de'),
(8, 'usuario', 'Marta Alvarez', 'marta@yahoo.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', NULL, 'vistas/img/usuarios/16/353.jpg', NULL, NULL, NULL, NULL, NULL, 1, '7f429a4aea4f0a7baa5d90c94d06d7b3');