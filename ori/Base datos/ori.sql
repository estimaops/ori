

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ORI3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ORI3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `ORI3`.`Universidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Universidad` (
  `IDUNIVERSIDAD` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NOMBRE` VARCHAR(500) NULL COMMENT '',
  `PAIS` VARCHAR(500) NULL COMMENT '',
  `CIUDAD` VARCHAR(1000) NULL COMMENT '',
  `ENLACE` VARCHAR(500) NULL COMMENT '',
  PRIMARY KEY (`IDUNIVERSIDAD`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Alumno` (
  `IDALUMNO` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NOMBRE` VARCHAR(500) NULL COMMENT '',
  `APELLIDO` VARCHAR(500) NULL COMMENT '',
  `RUT` VARCHAR(500) NULL COMMENT '',
  `CORREO` VARCHAR(500) NULL COMMENT '',
  `CARRERA` VARCHAR(500) NULL COMMENT '',
  `DESTINO` VARCHAR(500) NULL COMMENT '',
  `FECHA` VARCHAR(5000) NULL COMMENT '',
  `POSTULACION` VARCHAR(5000) NULL COMMENT '',
  `Universidad_IDUNIVERSIDAD` INT NULL COMMENT '',
  PRIMARY KEY (`IDALUMNO`)  COMMENT '',
  CONSTRAINT `fk_Alumno_Universidad1`
    FOREIGN KEY (`Universidad_IDUNIVERSIDAD`)
    REFERENCES `ORI3`.`Universidad` (`IDUNIVERSIDAD`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Becas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Becas` (
  `IDBECA` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NOMBRE` VARCHAR(500) NULL COMMENT '',
  `DESCRIPCION` VARCHAR(10000) NULL COMMENT '',
  `BENEFICIO` VARCHAR(10000) NULL COMMENT '',
  `imagen` VARCHAR(500) NULL COMMENT '',
  PRIMARY KEY (`IDBECA`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Usuario` (
  `USER` VARCHAR(10) NOT NULL COMMENT '',
  `PASSWORD` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`USER`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Noticias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Noticias` (
  `IDNOTICIA` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `TITULO` VARCHAR(5000) NULL COMMENT '',
  `CUERPO` VARCHAR(40000) NULL COMMENT '',
  `IMAGEN` VARCHAR(5000) NULL COMMENT '',
  `ENLACE` VARCHAR(3000) NULL COMMENT '',
  `SUBTITULO` VARCHAR(5000) NULL COMMENT '',
  `Usuario_USER` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`IDNOTICIA`)  COMMENT '',
  CONSTRAINT `fk_Noticias_Usuario1`
    FOREIGN KEY (`Usuario_USER`)
    REFERENCES `ORI3`.`Usuario` (`USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Postulacion_Extranjero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Postulacion_Extranjero` (
  `IDEX` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NOMBRE` VARCHAR(500) NULL COMMENT '',
  `APELLIDO` VARCHAR(500) NULL COMMENT '',
  `SEXO` VARCHAR(500) NULL COMMENT '',
  `FECHA` VARCHAR(500) NULL COMMENT '',
  `PAIS` VARCHAR(500) NULL COMMENT '',
  `UNIVERSIDAD` VARCHAR(500) NULL COMMENT '',
  `CORREO` VARCHAR(500) NULL COMMENT '',
  `POSTULACION` VARCHAR(5000) NULL COMMENT '',
  `DOCUMENTOANEXO` VARCHAR(5000) NULL COMMENT '',
  PRIMARY KEY (`IDEX`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Reglamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Reglamento` (
  `IDREGLAMENTO` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `DESCRIPCION` VARCHAR(50000) NULL COMMENT '',
  `Nombre` VARCHAR(5000) NULL COMMENT '',
  `DOCUMENTO` VARCHAR(5000) NULL COMMENT '',
  `Usuario_USER` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`IDREGLAMENTO`)  COMMENT '',
  CONSTRAINT `fk_Reglamento_Usuario1`
    FOREIGN KEY (`Usuario_USER`)
    REFERENCES `ORI3`.`Usuario` (`USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ORI3`.`Preguntas_Frecuentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ORI3`.`Preguntas_Frecuentes` (
  `IDPREGUNTA` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `PREGUNTA` VARCHAR(10000) NULL COMMENT '',
  `RESPUESTA` VARCHAR(10000) NULL COMMENT '',
  `Usuario_USER` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`IDPREGUNTA`)  COMMENT '',
  CONSTRAINT `fk_Preguntas_Frecuentes_Usuario1`
    FOREIGN KEY (`Usuario_USER`)
    REFERENCES `ORI3`.`Usuario` (`USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;







SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
