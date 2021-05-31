<?php
@session_start();
?>
<?php require_once('../../includes/connexion.php'); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Objet</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<script src="../../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<script src="../../js/getParameterByName.js"></script>
	<link href="../../css/pages/item.css" rel="stylesheet">
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../../includes/header.php'; ?>
		
		<h2>Info du compte</h2>


		<?php 

			echo"<div class='container'>
	
			<h1>Type compte : vendeur</h1>
			<h1>idCompte :" . $_SESSION['idCompteVendeur'] ."</h1>
			<br>
			<h1>idLogin :" . $idLogin ."</h1>
			<br>
			<h1>Mail :".$_SESSION['mail'] ."</h1>
			<br>
				<a href='deconnexion.php'><button type='button' class='btn btn-primary'>Se deconnecter</button></a>

		    </div>";
		    ?>

		
	</div>
	<div class="space"> </div>
	<div class="container" style="margin-top: 50px;">
		<?php require '../../includes/footer.php'; ?>
	</div>



<style>
	
h4 {

	color: white;
}


</style>
</body>
</html>