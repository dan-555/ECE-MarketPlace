<?php 
session_start();
 ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Tout Parcourir</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/toutParcourir.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<?php require '../includes/header.php'; ?>
		<h2>Les Catégories &nbsp;<i class="fa fa-list-alt" aria-hidden="true"></i></h2>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card h-100" style="width: 19rem;" >
						<img src="//localhost//ECE-MarketPlace/img/objets-arts.jpg" class="card-img-top justify-content-center" alt="Meubles et objets d’art">
						<div class="card-body d-flex flex-column">
							<h5 class="card-title">Meubles et objets d’art</h5>
							<p class="card-text">Le plus vaste choix de meubles et d'objets d'art en vente. Achetez des objets d'art d'époque, garantis par les antiquaires.</p>
							<a href="./category/meublesObjetsArts.php" class="btn btn-card mt-auto">Voir</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100" style="width: 19rem;">
						<img src="//localhost//ECE-MarketPlace/img/bijoux.jpg" class="card-img-top" alt="bijoux">
						<div class="card-body d-flex flex-column">
							<h5 class="card-title">Accessoire VIP</h5>
							<p class="card-text">Vous y trouverez un large choix d'accessoires VIP tel que des Bijoux, Montres, ceintures etc, authentifiés par nos soins </p>
							<a href="./category/accessoireVIP.php" class="btn btn-card mt-auto">Voir</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100" style="width: 19rem;">
						<img src="//localhost//ECE-MarketPlace/img/cahiers.jpg" class="card-img-top" alt="cahiers">
						<div class="card-body d-flex flex-column">
							<h5 class="card-title">Matériels scolaires</h5>
							<p class="card-text">Equipez-vous pour vos fournitures de bureaux avec un large choix.<br> Vous retrouvez tout types de marques correspondants a vos attentes</p>
							<a href="./category/materielsScolaires.php" class="btn btn-card mt-auto">Voir</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="space"> </div>
		<h2>Meilleure offre &nbsp;<i class="fa fa-gavel" aria-hidden="true"></i></h2>
		<div class="container">
			<div class="row">
				
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
			</div>
			<div class="space"> </div>

			<a href="./buyType/meilleureOffre.php"><button class="btn btn-more">Voir plus</button></a>

		</div>
		<div class="space"> </div>
		
		<h2>Transaction Vendeur-Client &nbsp;<i class="fas fa-dollar-sign"></i></h2>
		<div class="container">
			<div class="row">
				
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
			</div>
			<div class="space"> </div>
			<a href="./buyType/vendeurClient.php"><button class="btn btn-more">Voir plus</button></a>		</div>
		<div class="space"> </div>
		
		
		<h2>Achetez-le Maintenant &nbsp;<i class="fas fa-shopping-cart"></i></h2>
		<div class="container">
			<div class="row">
				
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="..." class="card-img-top" alt="...">
						<div  class="card-body d-flex flex-column">
							<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
							<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto">Voir</a>
							<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
							
						</div>
					</div>
				</div>
			</div>
			<div class="space"> </div>
			<a href="./buyType/achatImmediat.php"><button class="btn btn-more">Voir plus</button></a>
		</div>
		<div class="space"> </div>
		<div class="space"> </div>
		<div class="space"> </div>
		<div class="space"> </div>
		
		<div class="container">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>