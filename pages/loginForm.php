<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php
@$mail = isset($_POST["mail"])? $_POST["mail"] : "";
@$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";


if (isset($_POST["bouton"])) {

//verifier si admin
$sql="SELECT CompteAdministrateur_idCompteAdministrateur,CompteVendeur_idCompteVendeur, idLogin from loginclient WHERE CompteAdministrateur_idCompteAdministrateur is not NULL and Mail='$mail' and MotDePasse='$mdp'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
	//c est un compte admin
		 
		$row = $result->fetch_assoc();
		$idLogin=$row["idLogin"];
		$idCompteAdmin=$row["CompteAdministrateur_idCompteAdministrateur"];

					echo $idLogin;
		
					echo '<script language="javascript">';
					echo 'alert("admin")';
					echo '</script>';	

					$_SESSION['idLogin']=$idLogin;								
					$_SESSION['mail']=$mail;
					$_SESSION['mdp']=$mdp;
					$_SESSION['compte']="admin";	
					$_SESSION['idCompteAdmin']=$idCompteAdmin;
					$_SESSION['idCompteVendeur']=$row["CompteVendeur_idCompteVendeur"];


					header("Location: profil.php?id=".$_SESSION['idLogin']);		
}

else
{  //Verifier compte vendeur
	$sql2="SELECT CompteVendeur_idCompteVendeur, CompteAcheteur_idCompteAcheteur, idLogin from loginclient  WHERE CompteAdministrateur_idCompteAdministrateur is NULL and CompteVendeur_idCompteVendeur is not null and Mail='$mail' and MotDePasse='$mdp'";	

	$result2 = $mysqli->query($sql2);

	if ($result2->num_rows > 0)
	 {
	    $row = $result2->fetch_assoc();
	 	$idLogin=$row["idLogin"];
		
		//c est un compte vendeur				
					$_SESSION['idLogin']=$idLogin;			
					$_SESSION['mail']=$mail;
					$_SESSION['mdp']=$mdp;
					$_SESSION['compte']="vendeur";

					$_SESSION['idCompteVendeur']=$row["CompteVendeur_idCompteVendeur"];
					$_SESSION['idCompteAcheteur']=$row["CompteAcheteur_idCompteAcheteur"];


		 			header("Location: profil.php?id=".$_SESSION['idLogin']);		

	}

	else
	{//Verifier compte acheteur
	
	$sql3="SELECT CompteAcheteur_idCompteAcheteur, idLogin from loginclient WHERE Mail='$mail' and MotDePasse='$mdp'";
	$result3 = $mysqli->query($sql3);

		if ($result3->num_rows > 0) 
		{

		//c est un compte acheteur
		$row = $result3->fetch_assoc();	 	
	 	$idLogin=$row["idLogin"];
		$idCompteAcheteur=$row["CompteAcheteur_idCompteAcheteur"];
					
					$_SESSION['idLogin']=$idLogin;							
					$_SESSION['mail']=$mail;
					$_SESSION['mdp']=$mdp;
					$_SESSION['compte']="acheteur";	
					$_SESSION['idCompteAcheteur']=$idCompteAcheteur;

					header("Location: profil.php?id=".$_SESSION['idLogin']);		
					
		}
		else
		{
		//Pas de compte
					echo '<script language="javascript">';
					echo 'alert("Impossible de vs authentifiez, si vs avez pas de compte creez en un ")';
					echo '</script>';
		}
	}



}



}	
$mysqli->close();
?>