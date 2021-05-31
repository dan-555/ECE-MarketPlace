<?php
/* Calcum du prix tot*/
$prixTotal=0;

/* Calcul du prix tot*/
while($row = $result->fetch_assoc())

{
$idItem=$row['item_idItem'];
$sql3 = "SELECT idItem, Photos, Nom,categorieachat_CategorieAchat,Prix from item WHERE idItem='$idItem'";

$result3 = $mysqli->query($sql3);
$row3 = $result3->fetch_assoc();
$catAchat=$row3['categorieachat_CategorieAchat'];

if ($catAchat=='Transaction Vendeur-Client') {

//Attraper id Vendeur
$sql6 = "SELECT comptevendeur_idCompteVendeur from item WHERE idItem='{$idItem}'";
$result6 = $mysqli->query($sql6);
$row6 = $result6->fetch_assoc();

$idCompteVendeur=$row6["comptevendeur_idCompteVendeur"];
//Attrapper Offre vendeur
$sql5 = "SELECT OffreVendeur from `transaction` where item_idItem='$idItem' AND compteacheteur_idCompteAcheteur='$idCompteAcheteur' AND comptevendeur_idCompteVendeur='$idCompteVendeur'";
$result5 = $mysqli->query($sql5);
$row5 = $result5->fetch_assoc();
$offreVendeur=$row5['OffreVendeur'];

if (empty($offreVendeur)) {
$prixTotal+=$row3['Prix'];
}
else
{
$prixTotal+=$row5['OffreVendeur'];

}
}

else
{
$prixTotal+=$row3['Prix'];
}

}
?>