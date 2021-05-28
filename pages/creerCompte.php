<?php require '../pages/creerCompteForm.php'; ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Creer un compte</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/creerCompte.css" rel="stylesheet">
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Creer un Compte &nbsp;<i class="fas fa-sign-in-alt"></i></h2>
		
		<div class="container">
			
			<form method="POST">
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Nom: </span>
					<input required type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" name="nom">
				</div>
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">Prenom:</span>
					<input required type="text" class="form-control" placeholder="Prenom" aria-label="Prenom" aria-describedby="basic-addon1" name="prenom">
				</div>
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-house-user"></i></span>
					<input required type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" aria-describedby="basic-addon1" name="adresse">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
					<input required type="number" class="form-control" placeholder="Tel" aria-label="Tel" aria-describedby="basic-addon1" name="tel">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
					<input required type="text" class="form-control" placeholder="Mail" aria-label="Mail" aria-describedby="basic-addon1" name="mail">
				</div>
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
					<input required type="password" class="form-control" placeholder="Mot de passe" aria-label="mdp" aria-describedby="basic-addon1" name="mdp">
				</div>
				
				<div class="centrerbouton text-center">

					<button class="btn btn-warning" name="bouton">Creer un compte</button>
				</div>
			</form>
		</div>
		
		
		<div class="space"> </div>
		<div class="container" style="margin-top: 50px;">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>