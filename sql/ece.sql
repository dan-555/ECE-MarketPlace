-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ece-marketplace
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ecemarketplace
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ecemarketplace
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ecemarketplace` DEFAULT CHARACTER SET utf8 ;
USE `ecemarketplace` ;

-- -----------------------------------------------------
-- Table `ecemarketplace`.`categorieachat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`categorieachat` (
  `CategorieAchat` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CategorieAchat`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`categorieitem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`categorieitem` (
  `CategorieItem` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CategorieItem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`compteacheteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`compteacheteur` (
  `idCompteAcheteur` INT(11) NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Prenom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idCompteAcheteur`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`payement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`payement` (
  `idPayement` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NOT NULL,
  `Prenom` VARCHAR(45) NOT NULL,
  `Adresse 1` VARCHAR(45) NOT NULL,
  `Adresse 2` VARCHAR(45) NOT NULL,
  `Ville` VARCHAR(45) NOT NULL,
  `Code Postal` INT(10) UNSIGNED NOT NULL,
  `Pays` VARCHAR(45) NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  `TypeCarte` VARCHAR(45) NOT NULL,
  `Nom de la carte` VARCHAR(45) NOT NULL,
  `NumeroCarte` INT(10) UNSIGNED NOT NULL,
  `DateExpiration` DATETIME NOT NULL,
  `CVC` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idPayement`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`commande`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`commande` (
  `NumCommande` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CompteAcheteur_idCompteAcheteur` INT(11) NOT NULL,
  `Payement_idPayement` INT(10) UNSIGNED NOT NULL,
  `DateCommande` DATETIME NOT NULL,
  `PrixCommande` DOUBLE UNSIGNED NOT NULL,
  PRIMARY KEY (`NumCommande`, `CompteAcheteur_idCompteAcheteur`, `Payement_idPayement`),
  INDEX `fk_Commande_CompteAcheteur1_idx` (`CompteAcheteur_idCompteAcheteur` ASC) ,
  INDEX `fk_Commande_Payement1_idx` (`Payement_idPayement` ASC) ,
  CONSTRAINT `fk_Commande_CompteAcheteur1`
    FOREIGN KEY (`CompteAcheteur_idCompteAcheteur`)
    REFERENCES `ecemarketplace`.`compteacheteur` (`idCompteAcheteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Commande_Payement1`
    FOREIGN KEY (`Payement_idPayement`)
    REFERENCES `ecemarketplace`.`payement` (`idPayement`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`compteadministrateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`compteadministrateur` (
  `idCompteAdministrateur` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCompteAdministrateur`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`comptevendeur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`comptevendeur` (
  `idCompteVendeur` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Pseudo` VARCHAR(45) NOT NULL,
  `image de fond` LONGBLOB NOT NULL,
  `Code Postal` INT(10) UNSIGNED NOT NULL,
  `Telephone` VARCHAR(10) NOT NULL,
  `Photo` LONGBLOB NOT NULL,
  PRIMARY KEY (`idCompteVendeur`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`panier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`panier` (
  `idPanier` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Quantite` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idPanier`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`item` (
  `idItem` INT(11) NOT NULL AUTO_INCREMENT,
  `Commande_NumCommande` INT(10) UNSIGNED NOT NULL,
  `Panier_idPanier` INT(10) UNSIGNED NOT NULL,
  `categorieachat_CategorieAchat` VARCHAR(45) NOT NULL,
  `categorieitem_CategorieItem` VARCHAR(45) NOT NULL,
  `Nom` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(45) NOT NULL,
  `Photos` LONGBLOB NOT NULL,
  `Video` LONGBLOB NOT NULL,
  `Prix` DOUBLE NOT NULL,
  `DatePublication` DATETIME NOT NULL,
  `Marque` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idItem`, `categorieachat_CategorieAchat`, `categorieitem_CategorieItem`),
  INDEX `fk_Item_Panier1_idx` (`Panier_idPanier` ASC) ,
  INDEX `fk_Item_Commande1_idx` (`Commande_NumCommande` ASC) ,
  INDEX `fk_item_categorieitem1_idx` (`categorieitem_CategorieItem` ASC) ,
  INDEX `fk_item_categorieachat1_idx` (`categorieachat_CategorieAchat` ASC) ,
  CONSTRAINT `fk_Item_Commande1`
    FOREIGN KEY (`Commande_NumCommande`)
    REFERENCES `ecemarketplace`.`commande` (`NumCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_Panier1`
    FOREIGN KEY (`Panier_idPanier`)
    REFERENCES `ecemarketplace`.`panier` (`idPanier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_categorieitem1`
    FOREIGN KEY (`categorieitem_CategorieItem`)
    REFERENCES `ecemarketplace`.`categorieitem` (`CategorieItem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_categorieachat1`
    FOREIGN KEY (`categorieachat_CategorieAchat`)
    REFERENCES `ecemarketplace`.`categorieachat` (`CategorieAchat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`loginclient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`loginclient` (
  `IdCompte` VARCHAR(45) NOT NULL,
  `CompteAcheteur_idCompteAcheteur` INT(11) NOT NULL,
  `CompteAdministrateur_idCompteAdministrateur` INT(10) UNSIGNED NOT NULL,
  `CompteVendeur_idCompteVendeur` INT(10) UNSIGNED NOT NULL,
  `Mail` VARCHAR(45) NOT NULL,
  `MotDePasse` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdCompte`, `CompteAcheteur_idCompteAcheteur`),
  INDEX `fk_LoginClient_CompteAdministrateur1_idx` (`CompteAdministrateur_idCompteAdministrateur` ASC) ,
  INDEX `fk_LoginClient_CompteVendeur1_idx` (`CompteVendeur_idCompteVendeur` ASC) ,
  INDEX `fk_LoginClient_CompteAcheteur1_idx` (`CompteAcheteur_idCompteAcheteur` ASC) ,
  CONSTRAINT `fk_LoginClient_CompteAcheteur1`
    FOREIGN KEY (`CompteAcheteur_idCompteAcheteur`)
    REFERENCES `ecemarketplace`.`compteacheteur` (`idCompteAcheteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LoginClient_CompteAdministrateur1`
    FOREIGN KEY (`CompteAdministrateur_idCompteAdministrateur`)
    REFERENCES `ecemarketplace`.`compteadministrateur` (`idCompteAdministrateur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LoginClient_CompteVendeur1`
    FOREIGN KEY (`CompteVendeur_idCompteVendeur`)
    REFERENCES `ecemarketplace`.`comptevendeur` (`idCompteVendeur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ecemarketplace`.`souscategorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecemarketplace`.`souscategorie` (
  `sousCategorie` VARCHAR(45) NOT NULL,
  `categorieitem_CategorieItem` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`sousCategorie`, `categorieitem_CategorieItem`),
  INDEX `fk_souscategorie_categorieitem1_idx` (`categorieitem_CategorieItem` ASC) ,
  CONSTRAINT `fk_souscategorie_categorieitem1`
    FOREIGN KEY (`categorieitem_CategorieItem`)
    REFERENCES `ecemarketplace`.`categorieitem` (`CategorieItem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
