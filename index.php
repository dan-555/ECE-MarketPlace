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
					<div class="col-sm-6 col-lg-4 mb-4">
						
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div  class="card-body d-flex flex-column">
								<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
								<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto" style="margin-bottom: 10px;">Voir </a>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
								
							</div>
						</div>

					</div>
					
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card p-3" style="background-color: red" >
							<figure class="p-3 mb-0">
								<blockquote class="blockquote">
									<p style="color:white;">Profitez des offres allant jusqu'a -50%</p>
								</blockquote>
								<!--<figcaption class="blockquote-footer mb-0 text-muted">
								Someone famous in <cite title="Source Title">Source Title</cite>
								</figcaption> -->
							</figure>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div  class="card-body d-flex flex-column">
								<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
								<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto" style="margin-bottom: 10px;">Voir </a>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
								
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card bg-warning text-white p-3">
							<img src="..." class="card-img-top" alt="...">
							<div  class="card-body d-flex flex-column">
								<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
								<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto" style="margin-bottom: 10px;">Voir </a>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
								
							</div>
						</div>
					</div>

					
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card h-100">
							<img src="..." class="card-img-top" alt="...">
							<div  class="card-body d-flex flex-column">
								<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
								<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto" style="margin-bottom: 10px;">Voir </a>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
								
							</div>
						</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="card text-end">
							<img src="..." class="card-img-top" alt="...">
							<div  class="card-body d-flex flex-column">
								<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
								<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto" style="margin-bottom: 10px;">Voir </a>
								<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
								
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card p-3" style="background-color: red" >
							<figure class="p-3 mb-0">
								<blockquote class="blockquote">
									<p style="color:white;">Rejoignez la plus grande plateforme de e-commerce en ligne.<br>Decouvrez des centaines d'objets mis en ligne par notre grande communotée </p>
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