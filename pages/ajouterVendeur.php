<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php 
@$compte=$_SESSION['compte'];


@$idSelectCompteAcheteur=$_POST["idCompteAcheteur"];
@$mail=$_POST["mail"];


echo $mail;


			$sql11="INSERT INTO `ecemarketplace`.`comptevendeur` (`Mail`) VALUES ('$mail')";

			echo $sql11;
			$result11 = $mysqli->query($sql11);	
			$last_id = mysqli_insert_id($mysqli);


			////Udpdate loginclient
			$sql2="UPDATE `loginclient` SET `CompteVendeur_idCompteVendeur` = '$last_id' WHERE (`CompteAcheteur_idCompteAcheteur` = '$idSelectCompteAcheteur')";
			$result2 = $mysqli->query($sql2);
		
			echo "Vendeur ajouté";
			
			



?>