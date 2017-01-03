
<?php

-- MySQL Script generated by MySQL Workbench
-- 12/14/16 12:13:49
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema heroku_8ecd2cc03a114b6
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema heroku_8ecd2cc03a114b6
-- -----------------------------------------------------
    
-- -----------------------------------------------------
-- Table `heroku_8ecd2cc03a114b6`.`brukere`
-- -----------------------------------------------------

$query = "CREATE SCHEMA IF NOT EXISTS `heroku_8ecd2cc03a114b6` DEFAULT CHARACTER SET utf8 ;
USE `heroku_8ecd2cc03a114b6` ;

CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`brukere` (
  `personid` INT NOT NULL,
  `brukernavn` VARCHAR(45) NULL,
  `passord` VARCHAR(45) NULL,
  PRIMARY KEY (`personid`)
  )";
$sth = $db->prepare($query);
$sth->execute();

ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heroku_8ecd2cc03a114b6`.`adresse`
-- -----------------------------------------------------
$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`adresse` (
  `postnummer` INT(4) NOT NULL,
  `poststed` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  PRIMARY KEY (`postnummer`)
  )";
$sth = $db->prepare($query);
$sth->execute();


ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heroku_8ecd2cc03a114b6`.`person`
-- -----------------------------------------------------
$=query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`person` (
  `entryid` INT NOT NULL,
  `personid` INT NULL,
  `fornavn` VARCHAR(45) NULL,
  `etternavn` VARCHAR(45) NULL,
  `postnummer` INT(4) NULL,
  `telefonnummer` VARCHAR(45) NULL,
  `epostadresse` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  INDEX `postnummer_idx` (`postnummer` ASC),
  PRIMARY KEY (`entryid`),
  INDEX `personid_idx` (`personid` ASC),
  CONSTRAINT `postnummer`
    FOREIGN KEY (`postnummer`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`adresse` (`postnummer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `personid`
    FOREIGN KEY (`personid`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`brukere` (`personid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    )";
$sth = $db->prepare($query);
$sth->execute();

ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heroku_8ecd2cc03a114b6`.`vakt`
-- -----------------------------------------------------
$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`vakt` (
  `vaktid` INT NOT NULL,
  `fra` TIME NULL,
  `til` TIME NULL,
  PRIMARY KEY (`vaktid`)
  )";
$sth = $db->prepare($query);
$sth->execute();

ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `heroku_8ecd2cc03a114b6`.`vaktliste`
-- -----------------------------------------------------
$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`vaktliste` (
  `vaktlisteid` INT NOT NULL,
  `vaktid` INT NULL,
  `personid` INT NULL,
  `dato` DATE NULL,
  PRIMARY KEY (`vaktlisteid`),
  INDEX `vaktid_idx` (`vaktid` ASC),
  INDEX `brukernavn_idx` (`personid` ASC),
  CONSTRAINT `vaktid`
    FOREIGN KEY (`vaktid`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`vakt` (`vaktid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `personid1`
    FOREIGN KEY (`personid`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`brukere` (`personid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    )";
$sth = $db->prepare($query);
$sth->execute();

ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

?>