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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`professor` (
  `prof_numero` INT NOT NULL,
  `prof_nome` VARCHAR(45) NULL,
  `prof_rua` VARCHAR(45) NULL,
  `prof_cidade` VARCHAR(45) NULL,
  PRIMARY KEY (`prof_numero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`aluno` (
  `aluno_numero` INT NOT NULL,
  `aluno_nome` VARCHAR(45) NULL,
  `aluno_rua` VARCHAR(45) NULL,
  `aluno_cidade` VARCHAR(45) NULL,
  PRIMARY KEY (`aluno_numero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`disciplina` (
  `disc_codigo` INT NOT NULL,
  `disc_nome` VARCHAR(45) NULL,
  `curso_nome` VARCHAR(45) NULL,
  `qtd_aulas` INT NULL,
  PRIMARY KEY (`disc_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`matricula` (
  `aluno_codigo` INT NOT NULL,
  `disc_codigo` INT NOT NULL,
  `ano` INT NULL,
  PRIMARY KEY (`aluno_codigo`, `disc_codigo`),
  INDEX `fk_disciplina_has_aluno_aluno1_idx` (`disc_codigo` ASC),
  INDEX `fk_disciplina_has_aluno_disciplina_idx` (`aluno_codigo` ASC),
  CONSTRAINT `fk_disciplina_has_aluno_disciplina`
    FOREIGN KEY (`aluno_codigo`)
    REFERENCES `mydb`.`disciplina` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_has_aluno_aluno1`
    FOREIGN KEY (`disc_codigo`)
    REFERENCES `mydb`.`aluno` (`aluno_numero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`professor_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`professor_disciplina` (
  `prof_numero` INT NOT NULL,
  `disc_codigo` INT NOT NULL,
  `ano` INT NULL,
  PRIMARY KEY (`prof_numero`, `disc_codigo`),
  INDEX `fk_professor_has_disciplina_disciplina1_idx` (`disc_codigo` ASC),
  INDEX `fk_professor_has_disciplina_professor1_idx` (`prof_numero` ASC),
  CONSTRAINT `fk_professor_has_disciplina_professor1`
    FOREIGN KEY (`prof_numero`)
    REFERENCES `mydb`.`professor` (`prof_numero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_professor_has_disciplina_disciplina1`
    FOREIGN KEY (`disc_codigo`)
    REFERENCES `mydb`.`disciplina` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
