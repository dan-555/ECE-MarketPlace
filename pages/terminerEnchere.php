<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php 
@$compte=$_SESSION['compte'];

@$idItem=$_POST["idItem"];
@$dernierPrix=$_POST["dernierPrix"];
@$idCompteAcheteur=$_POST["idCompteAcheteur"];

			//Update prix  article
	
			$sql="UPDATE `item` SET `Prix` = '$dernierPrix' WHERE (`idItem` = '$idItem')";
			$result = $mysqli->query($sql);	


			//Ajout Panier acheteur

			$sql2="INSERT INTO `panieritem` (`compteacheteur_idCompteAcheteur`, `item_idItem`) VALUES ('$idCompteAcheteur', '$idItem')";
			$result2 = $mysqli->query($sql2);	


			////Supprimer tt les encheres
			$sql3="DELETE FROM `enchere` WHERE (`item_idItem` = '$idItem')";
			$result3 = $mysqli->query($sql3);

			echo "Enchere attribuée au panier de l'acheteur";

?>