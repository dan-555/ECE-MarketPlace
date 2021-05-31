<?php
session_start();
?>
<?php require_once('../includes/connexion.php'); ?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/panier.css" rel="stylesheet">

</head>
<body>
	<script>
		var prixTotalJS=0;

	$(document).on("click", ".delete", function(){
	
	$(this).parents("tr").remove();
	$(".add-new").removeAttr("disabled");
	});

	$(document).on("btnOrder", function(){

		$(this).remove();



	});

	</script>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Mon Panier &nbsp;<i class="fas fa-shopping-bag"></i></h2>
		<?php				
				// Si connecté
		if(isset($_SESSION['idLogin']))
					{
						if($_SESSION['compte']=="admin")
						{
							echo' <h1 style="text-align:center; color:white">Compte Admin pas de panier</h1>';
						}
		else
		{
						
																								
/*	TAB */
										$idCompteAcheteur=$_SESSION['idCompteAcheteur'];
									$sql = "SELECT item_idItem from panieritem WHERE compteacheteur_idCompteAcheteur='$idCompteAcheteur'";
															$result = $mysqli->query($sql);
															
															$prixTotal=0;						
															if ($result->num_rows > 0){ 
															//Si ya des articles
																
														



echo" <div class='container content'>
								
								<div class='table-wrapper-scroll-y my-custom-scrollbar  '>
														<table style='background-color: white' class='table table-bordered table-hover table-striped'>
																				<thead>
																										<tr>
																																<th scope='col'>#Objet</th>
																																<th scope='col'>Photo</th>
																																<th scope='col'>Nom</th>
																																<th scope='col'>Cat. d'achat</th>
																																<th scope='col'>Prix</th>
																																<th scope='col ' style='width: 1%;''>Retirer</th>
																										</tr>
																				</thead>
																				
																				<tbody>";




															/* Calcul du prix tot*/
                   									       require '../includes/prixTotal.php';

																
?>
																<script>
																 prixTotalJS = <?php echo json_encode($prixTotal); ?>;
																</script>
<?php
											
											$result = $mysqli->query($sql);
											while($row = $result->fetch_assoc()) {
															
																//Pour chaque article de l'acheteur dans son panier
																$idItem=$row['item_idItem'];
														       
								  							 $sql2 = "SELECT idItem, Photos, Nom,categorieachat_CategorieAchat,Prix from item WHERE idItem='$idItem'";
															
															$result2 = $mysqli->query($sql2);
															$row2 = $result2->fetch_assoc();
															
															$photo=$row2['Photos'];
															$nom=$row2['Nom'];
															$catAchat=$row2['categorieachat_CategorieAchat'];
															$prix=$row2['Prix'];

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
															
															$prix=$row5['OffreVendeur'];	

														}
														else
														{
															$prix=$row2['Prix'];

														}											

													echo "<tr>
															<th scope='row'>" .$idItem ." &nbsp; <a href='item.php?id=".$idItem ."'> <button type='button' class='btn btn-primary'>Voir</button></a>
</th>
																	<td><img style='width:70px;height=50px;' src=data:image/jpeg;charset=utf8;base64," .base64_encode($photo) ."></td>
																								<td>".$nom ."</td>
																								<td>".$catAchat ."</td>
																								<td>".$prix ."</td>";

							?>
<td> <button class='btn' onclick='removeItem(<?php echo $idItem; ?>,<?php echo $idCompteAcheteur; ?>);actualiserPrix(<?php echo $prix; ?>);desaBouton();'> <a class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash'></i></a></button></td>
							<?php


													}

	

								echo"  </tr>";
					
																													
														echo"	</tbody>
																		</table>
						
							</div> 
											<div class='space'></div>
<div class='checkout' style=' color:white; font-size:18px; float: right;''>Total : &nbsp; <span id='total' style='color:white;font-size:18px;margin-right: 240px;'>". $prixTotal." &nbsp; €</span>";




 echo "<a href='payement.php?id=".$idCompteAcheteur."'><button class='btn' role='button' style='background-color:white;color: #007179'> Passer Commande</button> </a>
	

</div>
		</div>
	
      </div>";




	}													

else {


echo' <h1 style="text-align:center; color:white">Votre panier est vide</h1>';



}


}

/*TAB*/





}
else {

echo' <h1 style="text-align:center; color:white">Veuillez vous connecter</h1>';
}
?>



<div class="space"> </div>


</div>
</div>
</div>
<div class="container" style="margin-top: 50px;">
	<?php require '../includes/footer.php'; ?>

</div>

<script>
	
function removeItem(idItem,idCompteAcheteur)
{
var url= '../pages/deleteItem.php';
$.ajax({
		type:"POST",
		url:url,
		data: {idItem: idItem, idCompteAcheteur: idCompteAcheteur},
		success: function(response){
		alert(response);
		}
		});
}

function passerCommande(idItem,idCompteAcheteur)
{
var url= '../pages/deleteItem.php';
$.ajax({
		type:"POST",
		url:url,
		data: {idItem: idItem, idCompteAcheteur: idCompteAcheteur},
		success: function(response){
		alert(response);
		}
		});
}

function actualiserPrix(prix)
{
	prixTotalJS=prixTotalJS-prix;
	document.getElementById('total').innerHTML =prixTotalJS +" €" ;
	console.log(prixTotalJS);
}
function desaBouton()
{
	if(prixTotalJS==0)
	{
		

  			document.location.reload();
	

	}
}

</script>


</body>
</html>