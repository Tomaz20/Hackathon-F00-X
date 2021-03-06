-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hackathon
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hackathon
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hackathon` DEFAULT CHARACTER SET utf8 ;
USE `hackathon` ;

-- -----------------------------------------------------
-- Table `hackathon`.`Doenca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Doenca` (
  `id_doenca` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `categoria` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id_doenca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Sintoma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Sintoma` (
  `id_sintoma` INT NOT NULL,
  `nome` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id_sintoma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Doenca_Sintoma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Doenca_Sintoma` (
  `doenca` INT NOT NULL,
  `sintoma` INT NOT NULL,
  PRIMARY KEY (`doenca`, `sintoma`),
  INDEX `fk_Doenca_has_Sintoma_Sintoma1_idx` (`sintoma` ASC),
  INDEX `fk_Doenca_has_Sintoma_Doenca_idx` (`doenca` ASC),
  CONSTRAINT `fk_Doenca_has_Sintoma_Doenca`
    FOREIGN KEY (`doenca`)
    REFERENCES `hackathon`.`Doenca` (`id_doenca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Doenca_has_Sintoma_Sintoma1`
    FOREIGN KEY (`sintoma`)
    REFERENCES `hackathon`.`Sintoma` (`id_sintoma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Prevencao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Prevencao` (
  `id_prevencao` INT NOT NULL,
  `descricao` TEXT NOT NULL,
  PRIMARY KEY (`id_prevencao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Doenca_Medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Doenca_Medicamento` (
  `doenca` INT NOT NULL,
  `medicamento` INT NOT NULL,
  PRIMARY KEY (`doenca`, `medicamento`),
  INDEX `fk_Doenca_has_Medicamento_Medicamento1_idx` (`medicamento` ASC),
  INDEX `fk_Doenca_has_Medicamento_Doenca1_idx` (`doenca` ASC),
  CONSTRAINT `fk_Doenca_has_Medicamento_Doenca1`
    FOREIGN KEY (`doenca`)
    REFERENCES `hackathon`.`Doenca` (`id_doenca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Doenca_has_Medicamento_Medicamento1`
    FOREIGN KEY (`medicamento`)
    REFERENCES `hackathon`.`Prevencao` (`id_prevencao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Tratamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Tratamento` (
  `id_Tratamento` INT NOT NULL,
  `descricao` TEXT NOT NULL,
  PRIMARY KEY (`id_Tratamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Doenca_Tratamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Doenca_Tratamento` (
  `doenca` INT NOT NULL,
  `tratamento` INT NOT NULL,
  PRIMARY KEY (`doenca`, `tratamento`),
  INDEX `fk_Doenca_has_Tratamento_Tratamento1_idx` (`tratamento` ASC),
  INDEX `fk_Doenca_has_Tratamento_Doenca1_idx` (`doenca` ASC),
  CONSTRAINT `fk_Doenca_has_Tratamento_Doenca1`
    FOREIGN KEY (`doenca`)
    REFERENCES `hackathon`.`Doenca` (`id_doenca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Doenca_has_Tratamento_Tratamento1`
    FOREIGN KEY (`tratamento`)
    REFERENCES `hackathon`.`Tratamento` (`id_Tratamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Causa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Causa` (
  `id_Causa` INT NOT NULL,
  `designacao` TEXT NOT NULL,
  PRIMARY KEY (`id_Causa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackathon`.`Doenca_Causa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hackathon`.`Doenca_Causa` (
  `doenca` INT NOT NULL,
  `causa` INT NOT NULL,
  PRIMARY KEY (`doenca`, `causa`),
  INDEX `fk_Doenca_has_Causa_Causa1_idx` (`causa` ASC),
  INDEX `fk_Doenca_has_Causa_Doenca1_idx` (`doenca` ASC),
  CONSTRAINT `fk_Doenca_has_Causa_Doenca1`
    FOREIGN KEY (`doenca`)
    REFERENCES `hackathon`.`Doenca` (`id_doenca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Doenca_has_Causa_Causa1`
    FOREIGN KEY (`causa`)
    REFERENCES `hackathon`.`Causa` (`id_Causa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
