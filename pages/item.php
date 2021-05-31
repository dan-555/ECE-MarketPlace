<?php
@session_start();
?>
<?php require_once('../includes/connexion.php'); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Objet</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<script src="../js/getParameterByName.js"></script>
	<link href="../css/pages/item.css" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

	<style>
	</style>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Detail de l'objet &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
		<?php
			echo "
			<div class='container content'>";
				
					$idItem=$_GET['id'];
					
					$sql = "SELECT Nom, Description,Photos,Video,Prix,DatePublication,DateExpiration,Marque,categorieachat_CategorieAchat,categorieitem_CategorieItem from item WHERE idItem='{$idItem}'";
					       $result = $mysqli->query($sql);
						
							$row = $result->fetch_assoc();
							
							$nom=$row["Nom"];
							$video=$row["Video"];
							$description=$row["Description"];
							$prix=$row["Prix"];
							$marque=$row["Marque"];
							$catAchat=$row["categorieachat_CategorieAchat"];
							$catItem=$row["categorieitem_CategorieItem"];
							
							$datePub=$row["DatePublication"];
							$date_time = date( 'Y-m-d', strtotime($datePub) );
						
							$dateExp=$row["DateExpiration"];
							$date_time2 = date( 'Y-m-d', strtotime($dateExp) );

					$sql2 = "SELECT comptevendeur_idCompteVendeur from item WHERE idItem='{$idItem}'";
					$result2 = $mysqli->query($sql2);
					$row2 = $result2->fetch_assoc();
					
					$compteVendeur=$row2["comptevendeur_idCompteVendeur"];


					$sql3 = "SELECT Pseudo from comptevendeur WHERE idCompteVendeur='{$compteVendeur}'";
					$result3 = $mysqli->query($sql3);
					$row3 = $result3->fetch_assoc();
					
					$pseudo=$row3["Pseudo"];


				echo "
				<div style='margin-left:25%;margin-right: 25%; padding-top: ' class='card h-100'>
					
								<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row["Photos"]) ."  class='card-img-top'>
							<div  class='card-body d-flex flex-column'>
								<h3 class='card-title'>" .$nom ."</span>&nbsp;</h3>
								<div class='space'></div>
								<h4>Marque : </h4>
								<p> ".$marque." </p>
								<h4>Description :</h4>
								<p> ".$description." </p>
								<h4>Type d'achat:</h4>
								<p> ".$catAchat." </p>
								<h4>Catégorie:</h4>
								<p> ".$catItem." </p>
								";

								if ($catAchat=='Achetez-le Maintenant') {
									echo "<p class='card-text'>Prix : ".$prix ."&nbsp;€</p>";

								}


							echo "
								<h4>Date de publication : </h4>
								<p> ".$date_time." </p>

								<h4>Pseudo du vendeur : </h4>
								<p> ".$pseudo." </p>";

								if(isset($_SESSION['idLogin']))
								{
									$idLogin=$_SESSION['idLogin'];
									
if($catAchat=='Transaction Vendeur-Client')
	{



?>

<div class='input-group mb-3' style="margin-top:10px;">
  
  <div class='input-group-prepend'>
    <span class='input-group-text'>Faire une offre :</span>
  </div>
  <input name='price' id='prixTransac' type='number' min='0' class='form-control' aria-label='Amount (to the nearest dollar)'>
  <div class='input-group-append'>
    <span class='input-group-text'>€</span>
  </div>
 
 <button name='boutonTransac' onclick='demandeOffre( <?php echo $idItem; ?>,<?php echo $compteVendeur; ?>)' type='submit' class='bg-info btn btn-card' >Go !</button>
</div>

<!-- Vendeur -->
<?php 

$idCompteAcheteur=$_SESSION['idCompteAcheteur'];
$compte=$_SESSION['compte'];

if($compte=="acheteur" ||$compte=="vendeur" )
{


$sql4 = "SELECT OffreVendeur from `transaction` where item_idItem='$idItem' AND compteacheteur_idCompteAcheteur='$idCompteAcheteur' AND comptevendeur_idCompteVendeur='$compteVendeur'";
$result4 = $mysqli->query($sql4);

if ($result4->num_rows > 0) {

$row4 = $result4->fetch_assoc();

if (is_null($row4["OffreVendeur"])) {
	// Rien afficher
}
else {
$offreVendeur=$row4["OffreVendeur"];

 ?>
<div class='input-group mb-3' style="margin-top:20px;">
  
  <div class='input-group-prepend'>
    <span class='input-group-text'>Offre du vendeur :</span>
  </div>
  <input disabled placeholder='<?php echo $offreVendeur; ?>' name='OffreVendeur' id='OffreVendeur' type='number' min='0' class='form-control' aria-label='Amount (to the nearest dollar)'>
  <div class='input-group-append'>
    <span class='input-group-text'>€</span>
  </div>
 
<button name='bouton' onclick='addItem( <?php echo $idItem; ?>)' type='submit' class='bg-info btn btn-card' ><i class='fas fa-shopping-cart'></i>&nbsp;Ajouter au Panier</button>


</div>
<!-- Vendeur -->
<?php
}
}
}

}

			elseif ($catAchat=='Achetez-le Maintenant') {

			?>
			
			<button name='bouton' onclick='addItem( <?php echo $idItem; ?>)' type='submit' class='p-2 bg-info btn btn-card mt-auto' ><i class='fas fa-shopping-cart'></i>&nbsp;Ajouter au Panier</button>
		
		<?php

			}
			
			elseif ($catAchat=='Meilleure Offre') {

			?>
			
<div class='input-group mb-3' style="margin-top:20px;">
  
  <div class='input-group-prepend'>
    <span class='input-group-text'>Enchère :</span>
  </div>
  
  <input  name='enchere' id='enchere' type='number' min='0' class='form-control'>
 
  <div class='input-group-append'>
    <span class='input-group-text'>€</span>
  </div>
 
<button name='bouton' onclick='placerEnchere( <?php echo $idItem; ?>,<?php echo $compteVendeur; ?>)' type='submit' class='bg-info btn btn-card' ><i class="fa fa-gavel" aria-hidden="true"></i>
&nbsp;Go !</button>
</div>
<?php

								
				echo "<h4>Fin d'enchère : </h4>
				<p> ".$date_time2." </p>	";

			}			
}

else {
	echo " <button class='p-2 bg-info btn btn-card mt-auto  disabled' ><i class='fas fa-shopping-cart'></i>&nbsp;Vous devez vous connecter pour ajouter au Panier</button>";
}
			
			echo"
	</div>
	</div>";
		?>
	</div>
	<div class="space"> </div>
	<div class="container" style="margin-top: 50px;">
		<?php require '../includes/footer.php'; ?>
	</div>
</div>
<script>


//demandeOffre
function demandeOffre(idItem,compteVendeur)
{
var price = document.getElementById('prixTransac').value;
var url= '../pages/transactionForm.php';
$.ajax({
		type:"POST",
		url:url,
		data: {idItem: idItem, prixTransac: price, idCompteVendeur:compteVendeur},
		success: function(response){
		alert(response);
		}
		});
}



//placerEnchere
function placerEnchere(idItem,compteVendeur)
{

var enchere = document.getElementById("enchere").value;
console.log(enchere);

var url= '../pages/placerEnchereForm.php';

$.ajax({

type:"POST",
url:url,
data: {idItem: idItem, prixEnchere: enchere, idCompteVendeur:compteVendeur},
success: function(response){
                alert(response);                                   
}
});
}

function addItem(idItem)
{
var url= '../pages/addItemForm.php';

$.ajax({

type:"POST",
url:url,
data : 'idItem='+idItem,
success: function(response){
                alert(response);                                   
}
});
}


</script>
</body>
</html>