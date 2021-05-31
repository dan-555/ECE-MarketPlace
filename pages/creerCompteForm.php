<?php 
require_once('../includes/connexion.php');
?>


<?php
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";




if (isset($_POST["bouton"])) {


$sql="SELECT Mail from compteacheteur WHERE Mail='$mail'";
$result = $mysqli->query($sql);
								//echo "number of row".$result->num_rows;
								
	if ($result->num_rows > 0) {

					echo '<script language="javascript">';
					echo 'alert("Le mail existe deja, veuillez en choisir un autre")';
					echo '</script>';
			}
					
else{
	
	
	

$sql1="INSERT INTO `compteacheteur` (`Nom`, `Prenom`, `adresse`, `Telephone`,`Mail`) VALUES ('$nom', '$prenom', '$adresse', '$tel','$mail')";
$result1=$mysqli->query($sql1);



$sql2="SELECT * from compteacheteur WHERE Mail='$mail'";
$result2=$mysqli->query($sql2);

while($row = $result2->fetch_assoc()) {
$idCompteAcheteur=$row["idCompteAcheteur"];
}

$sql6="set foreign_key_checks=0";
$result6=$mysqli->query($sql6);

$sql10="INSERT INTO `loginclient` (`CompteAcheteur_idCompteAcheteur`, `Mail`, `MotDePasse`) VALUES ('$idCompteAcheteur', '$mail', '$mdp')";



$result10=$mysqli->query($sql10);



					echo '<script language="javascript">';
					echo 'alert("Compte crée")';
					echo '</script>';
header('Location: ../index.php');

}
//fermer la connexion
}
$mysqli->close();

?>