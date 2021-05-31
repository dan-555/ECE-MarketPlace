<?php
@session_start();
require_once('../includes/connexion.php');

@$idCompteAcheteur=$_SESSION["idCompteAcheteur"];
@$idLogin=$_SESSION['idLogin'];
@$compte=$_SESSION['compte'];


@$prixEnchere=$_POST["prixEnchere"];
@$idItem=$_POST["idItem"];
@$idCompteVendeur=$_POST["idCompteVendeur"];
if($compte=="acheteur" || $compte=="vendeur")
{


//VERIFIER si ACHETEUR pas deja fait d'enchere avant 
$sql = "SELECT compteacheteur_idCompteAcheteur, item_idItem from enchere WHERE compteacheteur_idCompteAcheteur='$idCompteAcheteur' AND item_idItem='$idItem'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) { //SI deja enchere meme objet on rafraichit le prix

	$row = $result->fetch_assoc();

	$sql2 = "UPDATE `enchere` SET `PrixProposeAcheteur` = '$prixEnchere' WHERE (`compteacheteur_idCompteAcheteur` = '$idCompteAcheteur') and (`comptevendeur_idCompteVendeur` = '$idCompteVendeur') and (`item_idItem` = '$idItem')";
	$result2 = $mysqli->query($sql2);
}
else 
{
	$sql3 = "INSERT INTO `enchere` (`item_idItem`, `compteacheteur_idCompteAcheteur`, `comptevendeur_idCompteVendeur`, `PrixProposeAcheteur`) VALUES ('$idItem', '$idCompteAcheteur', '$idCompteVendeur', '$prixEnchere')";
	$result3 = $mysqli->query($sql3);
}

echo "Enchère placée";


}
		else {
					echo 'Admin: Pas acheteur';
		}
?>