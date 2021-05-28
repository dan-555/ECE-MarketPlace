<?php require 'loginForm.php'; ?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/login.css" rel="stylesheet">
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Connexion &nbsp;<i class="fas fa-sign-in-alt"></i></h2>
		
		<div class="container section">
			
			<form method="POST">
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
					<input required type="text" class="form-control" placeholder="Mail" aria-label="Mail" aria-describedby="basic-addon1" name="mail">
				</div>
				
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
					<input required type="password" class="form-control" placeholder="Mot de passe" aria-label="mdp" aria-describedby="basic-addon1"name="mdp">
				</div>
				<div class="centrerbouton text-center">
					<button class="btn btn-warning" name="bouton">Se connecter</button>
					<a role="button" class="btn btn-warning" href="creerCompte.php">Creer un compte</a>
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