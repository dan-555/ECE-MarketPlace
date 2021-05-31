<?php
@session_start();
require_once('../../includes/connexion.php');
$idCompteVendeur=$_SESSION['idCompteVendeur']
?>

<?php 
  $msg = "";
@$cat = isset($_POST["cat"])? $_POST["cat"] : "";
@$souscat = isset($_POST["souscat"])? $_POST["souscat"] : "";
@$dateFin = isset($_POST["dateFin"])? $_POST["dateFin"] : "";
@$description = isset($_POST["description"])? $_POST["description"] : "";
@$marque = isset($_POST["marque"])? $_POST["marque"] : "";
@$prix = isset($_POST["prix"])? $_POST["prix"] : "";
@$photo = isset($_POST["photo"])? $_POST["photo"] : "";
@$nom = isset($_POST["nom"])? $_POST["nom"] : "";

@$fileName = basename($_FILES["image"]["name"]); 
@$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
@$image = $_FILES['image']['tmp_name']; 


if (isset($_POST["button1"])) {

if ($cat=="Transaction Vendeur-Client") { //transac vendeur client
		     		  
$imgContent = addslashes(file_get_contents($image)); 

$sql6="set foreign_key_checks=0";
$result6=$mysqli->query($sql6);

	$sql="INSERT INTO `item` (`categorieachat_CategorieAchat`, `categorieitem_CategorieItem`, `comptevendeur_idCompteVendeur`, `Nom`, `Description`,`DatePublication`, `Photos`, `Marque`) VALUES ('$cat', '$souscat ', '$idCompteVendeur ', '$nom', '$description', NOW(), '$imgContent', '$marque')";
	$result = $mysqli->query($sql);	
}


if ($cat=="Meilleure Offre") { //transac vendeur client

		     		  
$imgContent = addslashes(file_get_contents($image)); 

$sql6="set foreign_key_checks=0";
$result6=$mysqli->query($sql6);

	$sql2="INSERT INTO `item` (`categorieachat_CategorieAchat`, `categorieitem_CategorieItem`, `DateExpiration`,`comptevendeur_idCompteVendeur`, `Nom`, `Description`,`DatePublication`, `Photos`, `Marque`) VALUES ('$cat', '$souscat ', '$dateFin ', '$idCompteVendeur ', '$nom', '$description', NOW(), '$imgContent', '$marque')";
	$result2 = $mysqli->query($sql2);	

}

if ($cat=="Achetez-le Maintenant") { //transac vendeur client

		     		  
$imgContent = addslashes(file_get_contents($image)); 

$sql6="set foreign_key_checks=0";
$result6=$mysqli->query($sql6);

	$sql2="INSERT INTO `item` (`categorieachat_CategorieAchat`, `categorieitem_CategorieItem`, `Prix`,`comptevendeur_idCompteVendeur`, `Nom`, `Description`,`DatePublication`, `Photos`, `Marque`) VALUES ('$cat', '$souscat ', '$prix ', '$idCompteVendeur ', '$nom', '$description', NOW(), '$imgContent', '$marque')";
	$result2 = $mysqli->query($sql2);	
	
}




}




			



?>