
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema boutique
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `boutique` ;

-- -----------------------------------------------------
-- Schema boutique
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `boutique` DEFAULT CHARACTER SET utf8 ;
USE `boutique` ;

-- -----------------------------------------------------
-- Table `boutique`.`commandes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`commandes` ;

CREATE TABLE IF NOT EXISTS `boutique`.`commandes` (
  `id` INT NOT NULL,
  `total` DECIMAL(5,2) NOT NULL,
  `statut` VARCHAR(45) NOT NULL,
  `numero_commande` INT NOT NULL,
  `created` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`clients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`clients` ;

CREATE TABLE IF NOT EXISTS `boutique`.`clients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `date_naissance` DATE NULL,
  `adresse` VARCHAR(200) NOT NULL,
  `cp` CHAR(5) NOT NULL,
  `ville` VARCHAR(45) NOT NULL,
  `tel` VARCHAR(20) NOT NULL,
  `created` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`clients_commandes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`clients_commandes` ;

CREATE TABLE IF NOT EXISTS `boutique`.`clients_commandes` (
  `clients_id` INT NOT NULL,
  `commandes_id` INT NOT NULL,
  PRIMARY KEY (`clients_id`, `commandes_id`),
  INDEX `fk_clients_commandes_commandes1_idx` (`commandes_id` ASC),
  INDEX `fk_clients_commandes_clients_idx` (`clients_id` ASC),
  CONSTRAINT `fk_clients_commandes_clients`
    FOREIGN KEY (`clients_id`)
    REFERENCES `boutique`.`clients` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clients_commandes_commandes1`
    FOREIGN KEY (`commandes_id`)
    REFERENCES `boutique`.`commandes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`albums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`albums` ;

CREATE TABLE IF NOT EXISTS `boutique`.`albums` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(100) NOT NULL,
  `duree` INT NOT NULL,
  `annee` INT NOT NULL,
  `qualite` VARCHAR(20) NOT NULL,
  `prix` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`chansons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`chansons` ;

CREATE TABLE IF NOT EXISTS `boutique`.`chansons` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(100) NOT NULL,
  `duree` INT NOT NULL,
  `annee` INT NOT NULL,
  `qualite` VARCHAR(20) NOT NULL,
  `prix` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`artistes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`artistes` ;

CREATE TABLE IF NOT EXISTS `boutique`.`artistes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`users` ;

CREATE TABLE IF NOT EXISTS `boutique`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `created` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`albums_chansons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`albums_chansons` ;

CREATE TABLE IF NOT EXISTS `boutique`.`albums_chansons` (
  `albums_id` INT NOT NULL,
  `chansons_id` INT NOT NULL,
  PRIMARY KEY (`albums_id`, `chansons_id`),
  INDEX `fk_albums_chansons_chansons1_idx` (`chansons_id` ASC),
  INDEX `fk_albums_chansons_albums1_idx` (`albums_id` ASC),
  CONSTRAINT `fk_albums_chansons_albums1`
    FOREIGN KEY (`albums_id`)
    REFERENCES `boutique`.`albums` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_albums_chansons_chansons1`
    FOREIGN KEY (`chansons_id`)
    REFERENCES `boutique`.`chansons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`artistes_chansons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`artistes_chansons` ;

CREATE TABLE IF NOT EXISTS `boutique`.`artistes_chansons` (
  `artistes_idartistes` INT NOT NULL,
  `chansons_id` INT NOT NULL,
  PRIMARY KEY (`artistes_idartistes`, `chansons_id`),
  INDEX `fk_artistes_chansons_chansons1_idx` (`chansons_id` ASC),
  INDEX `fk_artistes_chansons_artistes1_idx` (`artistes_idartistes` ASC),
  CONSTRAINT `fk_artistes_chansons_artistes1`
    FOREIGN KEY (`artistes_idartistes`)
    REFERENCES `boutique`.`artistes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_artistes_chansons_chansons1`
    FOREIGN KEY (`chansons_id`)
    REFERENCES `boutique`.`chansons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`commandes_albums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`commandes_albums` ;

CREATE TABLE IF NOT EXISTS `boutique`.`commandes_albums` (
  `commandes_id` INT NOT NULL,
  `albums_id` INT NOT NULL,
  PRIMARY KEY (`commandes_id`, `albums_id`),
  INDEX `fk_commandes_albums_albums1_idx` (`albums_id` ASC),
  INDEX `fk_commandes_albums_commandes1_idx` (`commandes_id` ASC),
  CONSTRAINT `fk_commandes_albums_commandes1`
    FOREIGN KEY (`commandes_id`)
    REFERENCES `boutique`.`commandes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_commandes_albums_albums1`
    FOREIGN KEY (`albums_id`)
    REFERENCES `boutique`.`albums` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`commandes_chansons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`commandes_chansons` ;

CREATE TABLE IF NOT EXISTS `boutique`.`commandes_chansons` (
  `commandes_id` INT NOT NULL,
  `chansons_id` INT NOT NULL,
  PRIMARY KEY (`commandes_id`, `chansons_id`),
  INDEX `fk_commandes_chansons_chansons1_idx` (`chansons_id` ASC),
  INDEX `fk_commandes_chansons_commandes1_idx` (`commandes_id` ASC),
  CONSTRAINT `fk_commandes_chansons_commandes1`
    FOREIGN KEY (`commandes_id`)
    REFERENCES `boutique`.`commandes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_commandes_chansons_chansons1`
    FOREIGN KEY (`chansons_id`)
    REFERENCES `boutique`.`chansons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`categories` ;

CREATE TABLE IF NOT EXISTS `boutique`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `libelle` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`categories_artistes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`categories_artistes` ;

CREATE TABLE IF NOT EXISTS `boutique`.`categories_artistes` (
  `categories_id` INT NOT NULL,
  `artistes_id` INT NOT NULL,
  PRIMARY KEY (`categories_id`, `artistes_id`),
  INDEX `fk_categories_artistes_artistes1_idx` (`artistes_id` ASC),
  INDEX `fk_categories_artistes_categories1_idx` (`categories_id` ASC),
  CONSTRAINT `fk_categories_artistes_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `boutique`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_artistes_artistes1`
    FOREIGN KEY (`artistes_id`)
    REFERENCES `boutique`.`artistes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`categories_chansons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`categories_chansons` ;

CREATE TABLE IF NOT EXISTS `boutique`.`categories_chansons` (
  `categories_id` INT NOT NULL,
  `chansons_id` INT NOT NULL,
  PRIMARY KEY (`categories_id`, `chansons_id`),
  INDEX `fk_categories_chansons_chansons1_idx` (`chansons_id` ASC),
  INDEX `fk_categories_chansons_categories1_idx` (`categories_id` ASC),
  CONSTRAINT `fk_categories_chansons_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `boutique`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_chansons_chansons1`
    FOREIGN KEY (`chansons_id`)
    REFERENCES `boutique`.`chansons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`categories_albums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`categories_albums` ;

CREATE TABLE IF NOT EXISTS `boutique`.`categories_albums` (
  `categories_id` INT NOT NULL,
  `albums_id` INT NOT NULL,
  PRIMARY KEY (`categories_id`, `albums_id`),
  INDEX `fk_categories_albums_albums1_idx` (`albums_id` ASC),
  INDEX `fk_categories_albums_categories1_idx` (`categories_id` ASC),
  CONSTRAINT `fk_categories_albums_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `boutique`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_albums_albums1`
    FOREIGN KEY (`albums_id`)
    REFERENCES `boutique`.`albums` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `boutique`.`newsletters`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boutique`.`newsletters` ;

CREATE TABLE IF NOT EXISTS `boutique`.`newsletters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NOT NULL,
  `contenu` LONGTEXT NOT NULL,
  `publish` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
