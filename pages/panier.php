<?php 
session_start();
 ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Mon Panier</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<link href="../css/pages/panier.css" rel="stylesheet">
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Mon Panier &nbsp;<i class="fas fa-shopping-bag"></i></h2>
		<?php 
				

				// Si connecté
	         	if(isset($_SESSION['idLogin']))
					{

						if($_SESSION['compte']=="admin")
						{

						    	echo' <h1 style="text-align:center; color:white">Compte Admin pas de panier</h1>';

						}

						else {


							echo" 		<div class='container content'>
			
			<div class='table-wrapper-scroll-y my-custom-scrollbar  '>
				<table style='background-color: white' class='table table-bordered table-hover table-striped'>
					<thead>
						<tr>
							<th scope='col'>#Objet</th>
							<th scope='col'>Photo</th>
							<th scope='col'>Nom</th>
							<th scope='col'>Type d'achat</th>
							<th scope='col'>Prix</th>
							<th scope='col ' style='width: 1%;''>Retirer</th>
						</tr>
					</thead>
					
					<tbody>";

				
			$sql = "SELECT item_idItem from panieritem WHERE compteacheteur_idCompteAcheteur='$_SESSION['idCompte']'";
			$result = $mysqli->query($sql);

		if ($result->num_rows > 0) { //Si ya des articles

			while($row = $result->fetch_assoc()) {	//Pour chaque article

			}



				/*	<tr>
							<th scope='row'>1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td><a role='button' class='btn btn-danger' href=''>Supprimer</a></td>
						</tr>

*/

				echo"	</tbody>
				</table>
			</div>
			<div class='space'></div>
			<div class='checkout' style='float: right;''>
				<span style='color:white;font-size:18px;margin-right: 240px;''>Total :</span>  
				<span id='Total'></span>
				<a role='button' class='btn' style='background-color:white;color: #007179' href=''>Passer commande</a>
			</div>
		</div>
			
</div>";





			}

	}

				else {

				echo' <h1 style="text-align:center; color:white">Veuillez vous connecter</h1>';

				}




		 ?>
		





		<div class="space"> </div>
		<div class="container" style="margin-top: 50px;">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>