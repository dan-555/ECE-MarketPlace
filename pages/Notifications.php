<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Notifications</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/notifications.css" rel="stylesheet">
	<script src="../js/pages/notifications.js"></script>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		<h2>Rechercher un objet ! &nbsp;<i class="fas fa-search"></i></h2>
		



		<div class="container">
			

			<form action="">
			
				<div class="input-group" style="margin:0;padding: 0;">
					<input type="text" class="form-control" placeholder="Saisir votre Recherche..." aria-label="Recipient's username" aria-describedby="basic-addon2">
					
					
					<button style="color:white;" class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Toutes Catégories</button>
					
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="#">Meubles et objets d'arts</a></li>
						<li><a class="dropdown-item" href="#">Accessoire VIP</a></li>
						<li><a class="dropdown-item" href="#">Materiels scolaire</a></li>
					</ul>
   					 <button class="btn btn-primary" type="button" id="button-addon2"><i style="color:white" class="fas fa-search"></i></button>

				</div>
				
			</form>


		</div>
		<div class="space"></div>
		<div class="space"></div>
		<div class="wrapper">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3 style="font-size: 20px;">Séléctionnez les différents critères</h3>
				</div>
				<div class="">
					
				</div>
				<form action="">
					<ul class="list-unstyled components">
						<div class="typeAchat">
							<div class="titreDesCriteres">Types d'achat :</div>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="meilleureOffre" id="meilleureOffre"/>
								<label class="form-check-label" for="meilleureOffre">
									Meilleure offre
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="vendeurClient" id="vendeurClient"/>
								<label class="form-check-label" for="vendeurClient">
									Vendeur-client
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="flexCheckDefault" id="flexCheckDefault"/>
								<label class="form-check-label" for="flexCheckDefault">
									Achat immédiat
								</label>
							</div>
						</div>
						<div style="height: 10px;"></div>
						
						<div class="marque">
							<div class="titreDesCriteres">Marques :</div>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="meilleureOffre" id="meilleureOffre"/>
								<label class="form-check-label" for="meilleureOffre">
									Marque
								</label>
							</div>
						</div>
						
						<div style="height: 10px;"></div>
						
						<div class="prixcontainer" style="height: 160px !important;">
							
							<div class="titreDesCriteres">Prix Min :</div>
							<div class="input-group input-group-sm mb-3">
								<input type="number" class="form-control" placeholder="0" aria-label="prixMinim" aria-describedby="prixMinim">
								<span class="input-group-text" id="euro"><i class="fas fa-euro-sign"></i></span>
							</div>
							
							<div class="titreDesCriteres">Prix Max :</div>
							<div class="input-group input-group-sm mb-3">
								<input type="number" class="form-control" placeholder="0" aria-label="prixMinim" aria-describedby="prixMinim">
								<span class="input-group-text" id="euro"><i class="fas fa-euro-sign"></i></span>
							</div>
						</div>
						<div style="height: 10px;"></div>
						<div class="tri">
							<div class="titreDesCriteres">Trier par :</div>
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							Tri
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#">Prix croissant</a></li>
								<li><a class="dropdown-item" href="#">Prix décroissant</a></li>
								<li><a class="dropdown-item" href="#">Date d'ajout</a></li>
							</ul>
						</div>
						
					</ul>
					
					<div class="bntsubmit col-md-12 text-center">
						
						<button class="btn btn-submit" type="submit">Filtrer !</button>
					</div>
				</form>
				
			</nav>
			<!-- Page Content  -->
			<div id="content">
				<nav class="navbar navbar-expand-lg navcolor">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: white">
						<i class="fas fa-align-left"></i>
						<span>Filtres</span>
						</button>
						<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-align-justify"></i>
						</button>
						<ul class="nav navbar-nav">
							<li><span style="color:white;">Resultats de la recherche :</span></li>
						</ul>
						<div></div>
					</div>
				</nav>
				<!-- ITEMS -->
				<div class="container">
					<div class="space"></div>
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
						<div class="space"> </div>
					</div>
				</div>

			</div>
		</div>
				<div class="container" style="margin-top: 50px;">
					<?php require '../includes/footer.php'; ?>
				</div>	


	</div>
</body>
</html>