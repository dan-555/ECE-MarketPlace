<?php
session_start();
require_once('../includes/connexion.php');
if (isset($_GET['id']) AND $_GET['id']>0)
{
	$getid=intval($_GET['id']);
									$sql = "SELECT * from loginclient WHERE idLogin='$getid'";
	
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$idLogin=$row["idLogin"];
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Mon profil</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<script src="../js/getParameterByName.js"></script>
	<link href="../css/pages/item.css" rel="stylesheet">
</head>
<body>

	<div classe="container-fluid">
	<?php require '../includes/header.php'; ?>
		
		<h2>Mon Profil :  &nbsp;<i class="fas fa-user"></i></h2>
		
		<!-- Si admin charger ca -->
		<?php
			if($_SESSION['compte']=="admin")
			{
			
			if($idLogin==$_SESSION['idLogin'])
			{
			echo"<div class='container'>
			
			<h1>Type compte : admin</h1>
			<h1>idCompte :" . $_SESSION['idCompte'] ."</h1>
			<br>
			<h1>idLogin :" . $idLogin ."</h1>
			<br>
			<h1>Mail :".$_SESSION['mail'] ."</h1>
			<br>
			<h1>mdp :". $_SESSION['mdp'] ."</h1>
		    
				<a href='deconnexion.php'><button type='button' class='btn btn-primary'>Se deconnecter</button></a>
		    </div>";
		   }
		
		}

			if($_SESSION['compte']=="vendeur")
			{
			
			if($idLogin==$_SESSION['idLogin'])
			{
			echo"<div class='container'>
	
			<h1>Type compte : vendeur</h1>
			<h1>idCompte :" . $_SESSION['idCompte'] ."</h1>
			<br>
			<h1>idLogin :" . $idLogin ."</h1>
			<br>
			<h1>Mail :".$_SESSION['mail'] ."</h1>
			<br>
			<h1>mdp :". $_SESSION['mdp'] ."</h1>
				<a href='deconnexion.php'><button type='button' class='btn btn-primary'>Se deconnecter</button></a>

		    </div>";
		
		   }
		
		}

			if($_SESSION['compte']=="acheteur")
			{
			
			if($idLogin==$_SESSION['idLogin'])
			{
			echo"<div class='container'>
			
			<h1>Type compte : acheteur</h1>
			<h1>idCompte :" . $_SESSION['idCompte'] ."</h1>
			<br>
			<h1>idLogin :" . $idLogin ."</h1>
			<br>
			<h1>Mail :".$_SESSION['mail'] ."</h1>
			<br>
			<h1>mdp :". $_SESSION['mdp'] ."</h1>
				<a href='deconnexion.php'><button type='button' class='btn btn-primary'>Se deconnecter</button></a>

		    </div>";
		
		   }
		
		}









		?>
		<div class="container content">
		</div>
		
		<div class="space"> </div>
		<div class="container" style="margin-top: 50px;">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>
<?php
}
}
?>