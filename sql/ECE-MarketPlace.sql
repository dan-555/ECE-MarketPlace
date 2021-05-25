-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ECEMarketPlace
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ECEMarketPlace
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ECEMarketPlace` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema ece-marketplace
-- -----------------------------------------------------
USE `ECEMarketPlace` ;

-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`CatégorieItem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`CatégorieItem` (
  `Titre` VARCHAR(45) NOT NULL,
  `SousCategorie` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Titre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`Panier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`Panier` (
  `idPanier` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Quantite` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idPanier`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`CatégorieAchat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`CatégorieAchat` (
  `Titre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Titre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`CompteAcheteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`CompteAcheteur` (
  `idCompteAcheteur` INT NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Prenom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idCompteAcheteur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`Payement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`Payement` (
  `idPayement` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Prenom` VARCHAR(45) NOT NULL,
  `Adresse 1` VARCHAR(45) NOT NULL,
  `Adresse 2` VARCHAR(45) NOT NULL,
  `Ville` VARCHAR(45) NOT NULL,
  `Code Postal` INT UNSIGNED NOT NULL,
  `Pays` VARCHAR(45) NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  `TypeCarte` VARCHAR(45) NOT NULL,
  `Nom de la carte` VARCHAR(45) NOT NULL,
  `NumeroCarte` INT UNSIGNED NOT NULL,
  `DateExpiration` DATETIME NOT NULL,
  `CVC` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idPayement`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`Commande`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`Commande` (
  `NumCommande` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `CompteAcheteur_idCompteAcheteur` INT NOT NULL,
  `Payement_idPayement` INT UNSIGNED NOT NULL,
  `DateCommande` DATETIME NOT NULL,
  `PrixCommande` DOUBLE UNSIGNED NOT NULL,
  PRIMARY KEY (`NumCommande`, `CompteAcheteur_idCompteAcheteur`, `Payement_idPayement`),
  INDEX `fk_Commande_CompteAcheteur1_idx` (`CompteAcheteur_idCompteAcheteur` ASC) ,
  INDEX `fk_Commande_Payement1_idx` (`Payement_idPayement` ASC) ,
  CONSTRAINT `fk_Commande_CompteAcheteur1`
    FOREIGN KEY (`CompteAcheteur_idCompteAcheteur`)
    REFERENCES `ECEMarketPlace`.`CompteAcheteur` (`idCompteAcheteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Commande_Payement1`
    FOREIGN KEY (`Payement_idPayement`)
    REFERENCES `ECEMarketPlace`.`Payement` (`idPayement`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`Item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`Item` (
  `idItem` INT NOT NULL AUTO_INCREMENT,
  `CatégorieItem_Titre` VARCHAR(45) NOT NULL,
  `CatégorieAchat_Titre` VARCHAR(45) NOT NULL,
  `Commande_NumCommande` INT UNSIGNED NOT NULL,
  `Panier_idPanier` INT UNSIGNED NOT NULL,
  `Nom` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(45) NOT NULL,
  `Photos` LONGBLOB NOT NULL,
  `Video` LONGBLOB NOT NULL,
  `Prix` DOUBLE NOT NULL,
  `DatePublication` DATETIME NOT NULL,
  `Marque` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idItem`, `CatégorieItem_Titre`, `CatégorieAchat_Titre`),
  INDEX `fk_Item_CatégorieItem1_idx` (`CatégorieItem_Titre` ASC) ,
  INDEX `fk_Item_Panier1_idx` (`Panier_idPanier` ASC) ,
  INDEX `fk_Item_CatégorieAchat1_idx` (`CatégorieAchat_Titre` ASC) ,
  INDEX `fk_Item_Commande1_idx` (`Commande_NumCommande` ASC) ,
  CONSTRAINT `fk_Item_CatégorieItem1`
    FOREIGN KEY (`CatégorieItem_Titre`)
    REFERENCES `ECEMarketPlace`.`CatégorieItem` (`Titre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_Panier1`
    FOREIGN KEY (`Panier_idPanier`)
    REFERENCES `ECEMarketPlace`.`Panier` (`idPanier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_CatégorieAchat1`
    FOREIGN KEY (`CatégorieAchat_Titre`)
    REFERENCES `ECEMarketPlace`.`CatégorieAchat` (`Titre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_Commande1`
    FOREIGN KEY (`Commande_NumCommande`)
    REFERENCES `ECEMarketPlace`.`Commande` (`NumCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`CompteAdministrateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`CompteAdministrateur` (
  `idCompteAdministrateur` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCompteAdministrateur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`CompteVendeur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`CompteVendeur` (
  `idCompteVendeur` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Pseudo` VARCHAR(45) NOT NULL,
  `image de fond` LONGBLOB NOT NULL,
  `Code Postal` INT UNSIGNED NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  `Photo` LONGBLOB NOT NULL,
  PRIMARY KEY (`idCompteVendeur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`LoginClient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`LoginClient` (
  `IdCompte` VARCHAR(45) NOT NULL,
  `CompteAcheteur_idCompteAcheteur` INT NOT NULL,
  `CompteAdministrateur_idCompteAdministrateur` INT UNSIGNED NOT NULL,
  `CompteVendeur_idCompteVendeur` INT UNSIGNED NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  `MotDePasse` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdCompte`, `CompteAcheteur_idCompteAcheteur`),
  INDEX `fk_LoginClient_CompteAdministrateur1_idx` (`CompteAdministrateur_idCompteAdministrateur` ASC) ,
  INDEX `fk_LoginClient_CompteVendeur1_idx` (`CompteVendeur_idCompteVendeur` ASC) ,
  INDEX `fk_LoginClient_CompteAcheteur1_idx` (`CompteAcheteur_idCompteAcheteur` ASC) ,
  CONSTRAINT `fk_LoginClient_CompteAdministrateur1`
    FOREIGN KEY (`CompteAdministrateur_idCompteAdministrateur`)
    REFERENCES `ECEMarketPlace`.`CompteAdministrateur` (`idCompteAdministrateur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LoginClient_CompteVendeur1`
    FOREIGN KEY (`CompteVendeur_idCompteVendeur`)
    REFERENCES `ECEMarketPlace`.`CompteVendeur` (`idCompteVendeur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LoginClient_CompteAcheteur1`
    FOREIGN KEY (`CompteAcheteur_idCompteAcheteur`)
    REFERENCES `ECEMarketPlace`.`CompteAcheteur` (`idCompteAcheteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ECEMarketPlace`.`Commande_copy1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ECEMarketPlace`.`Commande_copy1` (
  `NumCommande` INT NOT NULL,
  `DateCommande` INT NOT NULL,
  `Date` DATETIME NOT NULL,
  PRIMARY KEY (`NumCommande`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
