<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php 


@$idCompteVendeur=$_POST["idCompteVendeur"];
@$compte=$_SESSION['compte'];

if ($_SESSION['idCompteVendeur']==$idCompteVendeur) {

echo "Vous nous pouvez pas supprimer votre compte";

}

else {
	
			if(isset($idCompteVendeur))
			{
				echo $idCompteVendeur;

			$sql="DELETE FROM `comptevendeur` WHERE (`idCompteVendeur` = '$idCompteVendeur')";


			$result = $mysqli->query($sql);	
			echo "Vendeur supprimé";
			}

}


?>