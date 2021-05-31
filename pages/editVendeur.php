<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php 
@$compte=$_SESSION['compte'];


@$idCompteVendeur=$_POST["idCompteVendeur"];
@$pseudo=$_POST["pseudo"];
@$codePostal=$_POST["codePostal"];
@$telephone=$_POST["telephone"];
@$mail=$_POST["mail"];


if ($_SESSION['idCompteVendeur']===$idCompteVendeur) {

echo "Vous nous pouvez pas modifier votre compte";

}

else {
	
			$sql="UPDATE `comptevendeur` SET `Pseudo` = '$pseudo', `CodePostal` = '$codePostal', `Telephone` = '$telephone', `Mail` = '$mail' WHERE (`idCompteVendeur` = '$idCompteVendeur')";

			$result = $mysqli->query($sql);	

			////Udpdate loginclient

			$sql2="UPDATE `loginclient` SET `Mail` = '$mail' WHERE (`CompteVendeur_idCompteVendeur` = '$idCompteVendeur')";

			$result2 = $mysqli->query($sql2);

			
			///get id acheteur


			$sql3="SELECT CompteAcheteur_idCompteAcheteur FROM `loginclient` WHERE (`CompteVendeur_idCompteVendeur` = '$idCompteVendeur')";

			$result3 = $mysqli->query($sql3);
			$row3 = $result3->fetch_assoc();
			$idSelectCompteAcheteur=$row3["CompteAcheteur_idCompteAcheteur"];

			//// Update compteacheteur

			$sql4="UPDATE `compteacheteur` SET `Mail` = '$mail' WHERE (`idCompteAcheteur` = '$idSelectCompteAcheteur')";

			$result4 = $mysqli->query($sql4);
		
			echo "Vendeur modifié";
			
			

}


?>