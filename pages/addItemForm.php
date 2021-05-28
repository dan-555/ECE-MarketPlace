<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php

@$idItem=$_POST["idItem"];
@$idCompte=$_SESSION["compte"];
@$idLogin=$_SESSION['idLogin'];

	if($idCompte=="acheteur" || $idCompte=="vendeur")
		{
			$sql = "SELECT CompteAcheteur_idCompteAcheteur from loginclient WHERE idLogin='$idLogin'";
			$result = $mysqli->query($sql);								
			$row = $result->fetch_assoc();
			$idCompteAcheteur=$row["CompteAcheteur_idCompteAcheteur"];

			//SI L ITEM EXISTE DEJA
			$sql2="SELECT CompteAcheteur_idCompteAcheteur from panieritem WHERE item_idItem='$idItem'";
			$result2 = $mysqli->query($sql2);								
			
			if($result2->num_rows>0)
			{

				echo "Objet deja dans le panier";
			}
			else
			{
			$sql3 = "INSERT INTO panierItem (compteacheteur_idCompteAcheteur, item_idItem) VALUES ('$idCompteAcheteur', '$idItem')";
			
			echo "Objet ajouté";

			$result3 = $mysqli->query($sql3);		
			}

						
		


		}

		else {

					echo '<script language="javascript">';
					echo 'alert("Admin : Pas acheteur !")';
					echo '</script>';

		}



?>
