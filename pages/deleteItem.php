<?php
session_start();
require_once('../includes/connexion.php');
?>

<?php

@$idItem=$_POST["idItem"];
@$idCompte=$_POST["idCompteAcheteur"];


if(isset($idItem) AND isset($idCompte))
{

$sql = "DELETE FROM panierItem WHERE item_idItem='$idItem' AND compteacheteur_idCompteAcheteur='$idCompte'";
$result = $mysqli->query($sql);	
echo "SUCCESS";
}
?>
