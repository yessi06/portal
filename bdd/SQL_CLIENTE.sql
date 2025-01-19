SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema clientes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clientes` DEFAULT CHARACTER SET utf8 ;
USE `clientes` ;

-- -----------------------------------------------------
-- Table `clientes`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clientes`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `asesor` VARCHAR(45) NULL,
  `origen_lit` VARCHAR(45) NULL,
  `nombre` VARCHAR(30) NULL,
  `correo` VARCHAR(30) NULL,
  `celular` VARCHAR(15) NULL,
  `pais` VARCHAR(20) NULL,
  `ciudad` VARCHAR(30) NULL,
  `direccion` VARCHAR(45) NULL,
  `fecha_de_registro` TIMESTAMP NULL,
  `estado_cliente` VARCHAR(45) NULL,
  `observacion` TEXT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
