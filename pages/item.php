<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Objet</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/item.css" rel="stylesheet">
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Detail de l'objet &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
		
		<div class="container content">
			<div style="margin-left:25%;margin-right: 25%; padding-top: " class="card h-100">
				<img src="..." class="card-img-top" alt="...">
				<div  class="card-body d-flex flex-column">
					<h5 class="card-title"><span class="titre"></span>&nbsp;</h5>
					<p class="card-text ">Prix : <span class="prix"></span>&nbsp;€</p>
					<a href="#" class="p-2 bg-info btn btn-card mt-auto"><i class="fas fa-shopping-cart"></i>&nbsp;Ajouter au Panier</a>
					
				</div>
			</div>
		</div>
		
		<div class="space"> </div>
		<div class="container" style="margin-top: 50px;">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>