
<?php


$query = "CREATE SCHEMA IF NOT EXISTS `heroku_8ecd2cc03a114b6` DEFAULT CHARACTER SET utf8 ;
USE `heroku_8ecd2cc03a114b6` ;


CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`person` (
  `personid` INT AUTO_INCREMENT NOT NULL,
  `fornavn` VARCHAR(45) NULL,
  `etternavn` VARCHAR(45) NULL,
  `postnummer` INT(4) NULL,
  `poststed` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `telefonnummer` VARCHAR(45) NULL,
  `epostadresse` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `brukernavn` VARCHAR(45) NULL,
  `passord` VARCHAR(45) NULL,
  PRIMARY KEY (`personid`)
      )";
$sth = $db->prepare($query);
$sth->execute();





$query = "CREATE TABLE IF NOT EXISTS `heroku_8ecd2cc03a114b6`.`vaktliste` (
  `vaktlisteid` INT AUTO_INCREMENT NOT NULL,
  `personid` INT NULL,
  `dato` DATE NULL,
  `fra` TIME NULL,
  `til` TIME NULL,
  PRIMARY KEY (`vaktlisteid`),
  INDEX `personid_idx` (`personid` ASC),
  CONSTRAINT `personid`
    FOREIGN KEY (`personid`)
    REFERENCES `heroku_8ecd2cc03a114b6`.`person` (`personid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    )";
$sth = $db->prepare($query);
$sth->execute();


?>