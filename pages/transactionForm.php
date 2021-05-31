<?php 
@session_start();
require_once('../includes/connexion.php');

@$idCompteAcheteur=$_SESSION["idCompteAcheteur"];
@$idLogin=$_SESSION['idLogin'];
@$compte=$_SESSION['compte'];


@$prixTransac=$_POST["prixTransac"];
@$idItem=$_POST["idItem"];
@$idCompteVendeur=$_POST["idCompteVendeur"];

if($compte=="acheteur" || $compte=="vendeur")
{
$sql = "SELECT compteacheteur_idCompteAcheteur from transaction WHERE compteacheteur_idCompteAcheteur='$idCompteAcheteur'";
$result = $mysqli->query($sql);




if ($result->num_rows==0){

//si l'acheteur N a pas deja fait une proposition
$row = $result->fetch_assoc();


	$sql2 = "INSERT INTO `transaction` (`item_idItem`, `compteacheteur_idCompteAcheteur`, `comptevendeur_idCompteVendeur`, `NbrePropositionAcheteur`, `PrixProposeAcheteur`) VALUES ('$idItem', '$idCompteAcheteur', '$idCompteVendeur', '1', '$prixTransac')";

	$result2 = $mysqli->query($sql2);

} 

else {//Si acheteur deja  proposition

	//Attrapper le nbre de porposition deja faite
	$sql3 = "SELECT NbrePropositionAcheteur from `transaction` where item_idItem='$idItem' AND compteacheteur_idCompteAcheteur='$idCompteAcheteur' AND comptevendeur_idCompteVendeur='$idCompteVendeur'";
	$result3 = $mysqli->query($sql3);
	$row3 = $result3->fetch_assoc();

	$NbrePropositionAcheteur=$row3["NbrePropositionAcheteur"];



	if($NbrePropositionAcheteur>5)
	{
		echo "Impossible, vous avez deja fait 5 proposition";
	}

	else //Moins de 5 prop
	{
		echo "Proposition envoyée !";

		$NbrePropositionAcheteur+=1;

		$sql4 = " UPDATE `transaction` SET `NbrePropositionAcheteur` = '$NbrePropositionAcheteur', `PrixProposeAcheteur` = '$prixTransac' WHERE (`item_idItem` = '$idItem') and (`compteacheteur_idCompteAcheteur` = '$idCompteAcheteur') and (`comptevendeur_idCompteVendeur` = '$idCompteVendeur')";
		$result4 = $mysqli->query($sql4);

	}








}

}
		else {

					echo 'Admin: Pas acheteur';

		}

?>