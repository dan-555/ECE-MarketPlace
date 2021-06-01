<?php 
session_start();
 ?>

<?php require_once('includes/connexion.php'); ?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>ECE MarketPlace !</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="css/index.css" rel="stylesheet">
	<script src="js/countDownToTime.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<?php require 'includes/header.php'; ?>
		<h2>Notre selection du jour ❤️ !</h2>
		<div class="container-fluid">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/oppo.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/fete-des-meres.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/msi.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
					</button>
			</div>
		</div>
		<div class="container">
			
			<h3 id="venteFlash">Ventes flash ⚡ ! <span style="font-size: 14px;">il reste :&nbsp;&nbsp;</span></h3>
			<div class="countdown" id="countdown1">
				<span class="border">
					<span class="timeel days"></span>
					<span class="timeColor timeRefDays">Jours</span>
					<span class="timeel hours"></span>
					<span class="timeColor timeRefHours">Heures</span>
					<span class="timeel minutes"></span>
					<span class="timeColor timeRefMinutes">Minutes</span>
					<span class="timeel seconds"></span>
					<span class="timeColor timeRefSecondes">Secondes</span>
				</span>
			</div>
			<div class="clear">
				<div class="space"></div>
				<div class="space"></div>
				

					<div class="row" data-masonry='{"percentPosition": true }'>
					
	<?php
								$sql = "SELECT idItem, Nom, Prix, Photos from item WHERE commande_idCommande is NULL and categorieachat_CategorieAchat='Achetez-le Maintenant' AND  idItem='39'";
											
								$result = $mysqli->query($sql);
								$row = $result->fetch_assoc();
								
								$nom=$row["Nom"];
								$id=$row["idItem"];
								$prix=$row["Prix"];							
							
			



?>



			<div class='col-sm-6 col-lg-4 mb-4'>

				<?php  	
						echo "<div class='card h-100'>
	<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row["Photos"]) ."  class='card-img-top'>
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom ."</span>&nbsp;</h5>
						<p class='card-text '>Prix : " .$prix ."</span>&nbsp;€</p>
						<a href='pages/item.php?id=" .$id ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>
								
							</div>
						</div>";
?>	
				</div>
					
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card p-3" style="background-color: red" >
							<figure class="p-3 mb-0">
								<blockquote class="blockquote">
									<p style="color:white;">Profitez des offres allant jusqu'a -50%</p>
								</blockquote>

							</figure>
						</div>
					</div>
	<?php
								$sql2 = "SELECT idItem, Nom, Prix, Photos from item WHERE commande_idCommande is NULL and categorieachat_CategorieAchat='Achetez-le Maintenant' AND  idItem='40'";
											
								$result2 = $mysqli->query($sql2);
								$row2 = $result2->fetch_assoc();
								
								$nom2=$row2["Nom"];
								$id2=$row2["idItem"];
								$prix2=$row2["Prix"];							
							
			



?>
					<div class="col-sm-6 col-lg-4 mb-4">

						<div class="card h-100">


											<?php  	
						echo "<div class='card h-100'>

	<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row2["Photos"]) ."  class='card-img-top'>
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom2 ."</span>&nbsp;</h5>
						<p class='card-text '>Prix : " .$prix2 ."</span>&nbsp;€</p>
						<a href='pages/item.php?id=" .$id2 ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>
								
							</div>
						</div>";
?>	

	<?php
								$sql3 = "SELECT idItem, Nom, Prix, Photos from item WHERE commande_idCommande is NULL and categorieachat_CategorieAchat='Achetez-le Maintenant' AND  idItem='41'";
											
								$result3 = $mysqli->query($sql3);
								$row3 = $result3->fetch_assoc();
								
								$nom3=$row3["Nom"];
								$id3=$row3["idItem"];
								$prix3=$row3["Prix"];							
	?>							
			

						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card bg-warning text-white p-3">
<?php 
								echo"<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row3["Photos"]) ."  class='card-img-top'>
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom3 ."</span>&nbsp;</h5>
						<p class='card-text '>Prix : " .$prix3 ."</span>&nbsp;€</p>
						<a href='pages/item.php?id=" .$id3 ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>";

	 ?>							
							</div>
						</div>
					</div>

			
	<?php
								$sql4 = "SELECT idItem, Nom, Prix, Photos from item WHERE commande_idCommande is NULL and categorieachat_CategorieAchat='Achetez-le Maintenant' AND  idItem='20'";
											
								$result4 = $mysqli->query($sql4);
								$row4 = $result4->fetch_assoc();
								
								$nom4=$row4["Nom"];
								$id4=$row4["idItem"];
								$prix4=$row4["Prix"];							
	?>	

					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card h-100">

<?php 
								echo"<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row4["Photos"]) ."  class='card-img-top'>
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom4 ."</span>&nbsp;</h5>
						<p class='card-text '>Prix : " .$prix4 ."</span>&nbsp;€</p>
						<a href='pages/item.php?id=" .$id4 ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>";

	 ?>		

	<?php
								$sql5 = "SELECT idItem, Nom, Prix, Photos from item WHERE commande_idCommande is NULL and categorieachat_CategorieAchat='Achetez-le Maintenant' AND  idItem='42'";
											
								$result5 = $mysqli->query($sql5);
								$row5 = $result5->fetch_assoc();
								
								$nom5=$row5["Nom"];
								$id5=$row5["idItem"];
								$prix5=$row5["Prix"];							
	?>

								
							</div>
						</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="card text-end">
						
<?php 
								echo"<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row5["Photos"]) ."  class='card-img-top'>
								<div  class='card-body d-flex flex-column' >
							<h5 class='card-title'>" .$nom5 ."</span>&nbsp;</h5>
						<p class='card-text '>Prix : " .$prix5 ."</span>&nbsp;€</p>
						<a href='pages/item.php?id=" .$id5 ."' class='p-2 bg-info btn btn-card mt-auto'>Voir</a>";

	 ?>		

								
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card p-3" style="background-color: red" >
							<figure class="p-3 mb-0">
								<blockquote class="blockquote">
									<p style="color:white;">Rejoignez la plus grande plateforme de e-commerce en ligne.<br>Decouvrez des centaines d'objets mis en ligne par notre grande communauté </p>
								</blockquote>
								<!--<figcaption class="blockquote-footer mb-0 text-muted">
								Someone famous in <cite title="Source Title">Source Title</cite>
								</figcaption> -->
							</figure>
						</div>
				</div>
			</div>
		</div>
	</div>

		<div class="container" style="margin-top: 50px;">
			<?php require 'includes/footer.php'; ?>
		</div>


</div>
</body>
</html>