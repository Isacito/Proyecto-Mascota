-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP database if exists `veterinaria` ;
CREATE DATABASE `veterinaria` ;
USE `veterinaria` ;

-- -----------------------------------------------------
-- Table `mydb`.`Vacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`Vacuna` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TipoMascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`TipoMascota` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL,
  `EdadEquivalenteJoven` INT NULL,
  `EdadEquivalenteAdulto` INT NULL,
  `EdadAdulto` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Raza`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`Raza` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL,
  `TipoMascota_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Raza_TipoMascota_idx` (`TipoMascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Raza_TipoMascota`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `veterinaria`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`Role` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`User` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `Role_id` INT NOT NULL,
  `foto` BLOB NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_User_Role1_idx` (`Role_id` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  CONSTRAINT `fk_User_Role1`
    FOREIGN KEY (`Role_id`)
    REFERENCES `veterinaria`.`Role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Mascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`Mascota` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL,
  `FechaNacimiento` DATETIME NULL,
  `foto` BLOB NULL,
  `User_id` INT NOT NULL,
  `TipoMascota_id` INT NOT NULL,
  `Raza_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Mascota_User1_idx` (`User_id` ASC) VISIBLE,
  INDEX `fk_Mascota_TipoMascota1_idx` (`TipoMascota_id` ASC) VISIBLE,
  INDEX `fk_Mascota_Raza1_idx` (`Raza_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `veterinaria`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_TipoMascota1`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `veterinaria`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_Raza1`
    FOREIGN KEY (`Raza_id`)
    REFERENCES `veterinaria`.`Raza` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ControlVacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veterinaria`.`ControlVacuna` (
  `Mascota_id` INT NOT NULL,
  `Vacuna_id` INT NOT NULL,
  `fecha` DATETIME NULL,
  PRIMARY KEY (`Mascota_id`, `Vacuna_id`),
  INDEX `fk_Mascota_has_Vacuna_Vacuna1_idx` (`Vacuna_id` ASC) VISIBLE,
  INDEX `fk_Mascota_has_Vacuna_Mascota1_idx` (`Mascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_has_Vacuna_Mascota1`
    FOREIGN KEY (`Mascota_id`)
    REFERENCES `veterinaria`.`Mascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_has_Vacuna_Vacuna1`
    FOREIGN KEY (`Vacuna_id`)
    REFERENCES `veterinaria`.`Vacuna` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
