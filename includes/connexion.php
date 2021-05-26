<?php

	session_start();
	echo"Bienvenue"; 
	// Variable connexion
	$user = "root";
	$mdp = "";
	$addr = "localhost";

	// Connect to MySQL server
	$db_handle = mysqli_connect($addr,$user, $mdp);

	if($db_handle) {
		echo "Connected ! <br>";
	} else {
		die("Unable to connect. ERROR" . mysqli_error($db_handle));
	}

	$sql = "SET NAMES utf8";
	$result = mysqli_query($db_handle, $sql);


	$db_found = mysqli_select_db($db_handle, "ecemarketplace");

	if($db_found){
		
		$sql = "
				SELECT * FROM ecemarketplace.categorieachat;
			";

		$sql = "
			
				SELECT * FROM ecemarketplace.categorieitem;
			";

	
		$sql = "

			SELECT * FROM ecemarketplace.commande;

			";
		
		$sql = "
				SELECT * FROM ecemarketplace.compteacheteur;
			";

		$sql = "
				SELECT * FROM ecemarketplace.compteadministrateur;
			";

		$sql = "
				SELECT * FROM ecemarketplace.comptevendeur;
			";

		$sql = "
				SELECT * FROM ecemarketplace.item;
			";
		$sql = "
				SELECT * FROM ecemarketplace.loginclient;
			";
		$sql = "
				SELECT * FROM ecemarketplace.panier;
			";
		$sql = "
				SELECT * FROM ecemarketplace.payement;
			";
		$sql = "
				SELECT * FROM ecemarketplace.souscategorie;
			";
			
		$result = mysqli_query($db_handle, $sql);

		while($data = mysqli_fetch_assoc($result)) {
			foreach($data as $key => $value){
						echo $key . " : " . $value . "<br>";
						$_SESSION['$key']='$value'; 
						echo $key . " : " . $_SESSION . "<br>";
			}	
			echo "----------------------- <br>";
		}

	} else {
		echo "DB not found";
	}

	mysqli_close($db_handle);
	echo "connection closed.";

?>