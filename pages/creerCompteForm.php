
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


$sql2="SELECT idCompteAcheteur from compteacheteur WHERE Mail='$mail'";

$result2=$mysqli->query($sql2);

while($row = $result2->fetch_assoc()) {
		$idCompteAcheteur=$row["idCompteAcheteur"];
}

$result2=$mysqli->query($sql2);

 $sql3="INSERT INTO `loginclient` (`CompteAcheteur_idCompteAcheteur`,`Mail`,`MotDePasse`) VALUES ('$idCompteAcheteur','$mail','$mdp')";



$sql3="INSERT INTO `loginclient` (`CompteAcheteur_idCompteAcheteur`, `Mail`, `MotDePasse`) VALUES ('$idCompteAcheteur', '$mail', 'mdp')";


$result3=$mysqli->query($sql3);

					echo '<script language="javascript">';
					echo 'alert("Compte crée")';
					echo '</script>';
header('Location: ../index.php');
}
//fermer la connexion
}
$mysqli->close();
?>