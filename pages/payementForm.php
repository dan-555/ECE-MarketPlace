<?php 
@session_start();
require_once('../includes/connexion.php');



@$nom = isset($_POST["nom"])? $_POST["nom"] : "";
@$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
@$email = isset($_POST["email"])? $_POST["email"] : "";
@$adresse1 = isset($_POST["adresse1"])? $_POST["adresse1"] : "";
@$adresse2 = isset($_POST["adresse2"])? $_POST["adresse2"] : "";
@$ville = isset($_POST["ville"])? $_POST["ville"] : "";
@$pays = isset($_POST["ville"])? $_POST["ville"] : "";

@$codepostal = isset($_POST["codepostal"])? $_POST["codepostal"] : "";
@$tel = isset($_POST["tel"])? $_POST["tel"] : "";
@$carte = isset($_POST["typeCarte"])? $_POST["typeCarte"] : "";

@$carteNom = isset($_POST["carteNom"])? $_POST["carteNom"] : "";
@$carteNumero = isset($_POST["carteNumero"])? $_POST["carteNumero"] : "";
@$carteExp = isset($_POST["carteExp"])? $_POST["carteExp"] : "";
@$carteCVC = isset($_POST["carteCVC"])? $_POST["carteCVC"] : "";


if (isset($_POST["button"])) 
{

if (!($nom=="" || $prenom== "" ||$email== "" ||$adresse1== "" ||$adresse2== "" ||$ville=="" ||$pays== "" ||$codepostal== "" ||$tel== "" ||$carte== "" ||$carteNom== "" ||$carteNumero== "" ||$carteExp== "" ||$carteCVC== ""))
{
	echo "defrgthytgfrdes";
	echo $nom;
//creer le payement
$sql = "INSERT INTO payement (Nom,Prenom,Adresse1,Adresse2,Ville,CodePostal,Pays,Telephone,TypeCarte,NomDeLaCarte,NumeroCarte,DateExpiration,CVC)   
VALUES ('$nom ','$prenom','$adresse1','$adresse2','$ville','$codepostal','$pays','$tel','$carte','$carteNom','$carteNumero','$carteExp','$carteCVC')";
$result = $mysqli->query($sql);

//id du payement
$idPayement = mysqli_insert_id($mysqli);

$idCompteAcheteur=$_SESSION['idCompteAcheteur'];

//creer la commande
$sql2 = "INSERT INTO commande (payement_idPayement,compteacheteur_idCompteAcheteur,DateCommande,PrixCommande)   
VALUES ('$idPayement ','$idCompteAcheteur',CURRENT_TIMESTAMP,'$prixTotal')";
$result2 = $mysqli->query($sql2);

//id du commande
$idCommande = mysqli_insert_id($mysqli);

//num com dans item --> charger tt les items de l'acheteur

$sql3="SELECT item_idItem from panierItem WHERE compteacheteur_idCompteAcheteur='$idCompteAcheteur'";
$result3 = $mysqli->query($sql3);

while($row3 = $result3->fetch_assoc()) 
{
	$idItem=$row3["item_idItem"];

	$sql4="UPDATE `item` SET `commande_idCommande` = '$idCommande' WHERE `idItem` = '$idItem'";
	$result4 = $mysqli->query($sql4);

	$sql5="DELETE FROM panierItem WHERE item_idItem='$idItem'";
	$result5 = $mysqli->query($sql5);



}


echo '<script language="Javascript">
document.location.replace("commandePage.php");
</script>';
}

}

 ?>