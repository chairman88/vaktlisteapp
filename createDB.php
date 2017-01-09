
<?php


$query = "CREATE SCHEMA IF NOT EXISTS `heroku_8ecd2cc03a114b6` DEFAULT CHARACTER SET utf8 ;
USE `heroku_8ecd2cc03a114b6` ;

CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`brukere` (
  `personid` INT AUTO_INCREMENT NOT NULL,
  `brukernavn` VARCHAR(45) NULL,
  `passord` VARCHAR(45) NULL,
  PRIMARY KEY (`personid`)
  )";
$sth = $db->prepare($query);
$sth->execute();


$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`adresse` (
  `adresseid` INT AUTO_INCREMENT NOT NULL,
  `postnummer` INT(4) NOT NULL,
  `poststed` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  PRIMARY KEY (`adresseid`)
  )";
$sth = $db->prepare($query);
$sth->execute();


$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`person` (
  `entryid` INT AUTO_INCREMENT NOT NULL,
  `personid` INT NULL,
  `fornavn` VARCHAR(45) NULL,
  `etternavn` VARCHAR(45) NULL,
  `adresseid` INT NULL,
  `telefonnummer` VARCHAR(45) NULL,
  `epostadresse` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  INDEX `adresseid_idx` (`adresseid` ASC),
  PRIMARY KEY (`entryid`),
  INDEX `personid_idx` (`personid` ASC),
  CONSTRAINT `adresseid`
    FOREIGN KEY (`adresseid`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`adresse` (`adresseid`)
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


$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`vakt` (
  `vaktid` INT NOT NULL,
  `fra` TIME NULL,
  `til` TIME NULL,
  PRIMARY KEY (`vaktid`)
  )";
$sth = $db->prepare($query);
$sth->execute();


$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`vaktliste` (
  `vaktlisteid` INT AUTO_INCREMENT NOT NULL,
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


?>