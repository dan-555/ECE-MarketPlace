<?php 
session_start();
 ?>
<?php require_once('../../includes/connexion.php'); ?>


<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Meilleure Offre</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<script src="../../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../../css/pages/buyType/buyType.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<?php require '../../includes/header.php'; ?>
		
		<h2>Meilleure offre &nbsp;<i class="fa fa-gavel" aria-hidden="true"></i></h2>
		<div class="container">
			<div class="space"></div>
			<div class="d-flex flex-wrap">
				
				
				<?php
								$sql = "SELECT idItem, Nom, Prix, Photos from item WHERE Commande_NumCommande is NULL and categorieachat_CategorieAchat='Meilleure offre'";
											
								$result = $mysqli->query($sql);
								//echo "number of row".$result->num_rows;
								
								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								$nom=$row["Nom"];
								$id=$row["idItem"];
								$prix=$row["Prix"];
					
							echo "<div class='col-3'>
													<div class='card h-100'>
	<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row["Photos"]) ."  class='card-img-top'>
								
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom ."</span>&nbsp;</h5>
																						<p class='card-text '>Prix : " .$prix ."</span>&nbsp;€</p>
										
						
						<a href='../item.php?id=" .$id ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>
						<a href='#' class='p-2 bg-info btn btn-card mt-auto'><i class='fas fa-shopping-cart'></i>&nbsp;Ajouter au Panier</a>
																			
																						
																	</div>
												</div>
								</div>";
							
							}
						}
					
							
							else {
							}
							$mysqli->close();
			?>
			<div class="space"> </div>
		</div>
	</div>
	<div class="container" style="margin-top: 50px;">
		<?php require '../../includes/footer.php'; ?>
	</div>
</div>
</body>
</html>