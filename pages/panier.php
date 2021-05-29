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

<<<<<<< HEAD
<<<<<<< HEAD
	// Delete row on delete button click
	$(document).on("click", ".delete", function()
	{
       $(this).parents("tr").remove();
=======
						if($_SESSION['compte']=="admin")
						{

						    	echo' <h1 style="text-align:center; color:white">Compte Admin pas de panier</h1>';

						}
>>>>>>> parent of f090e85 (deleteItem)
=======

	// Delete row on delete button click
	$(document).on("click", ".delete", function()
	{
        $(this).parents("tr").remove();

>>>>>>> parent of e57a931 (bug)

						else {

<<<<<<< HEAD
<<<<<<< HEAD
=======
    function removeItem(idItem)
    {






    }



>>>>>>> parent of e57a931 (bug)
});
	



	</script>
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
		else
		{
											echo" 		<div class='container content'>
					
					<div class='table-wrapper-scroll-y my-custom-scrollbar  '>
								<table style='background-color: white' class='table table-bordered table-hover table-striped'>
											<thead>
														<tr>
																	<th scope='col'>#Objet</th>
																	<th scope='col'>Photo</th>
																	<th scope='col'>Nom</th>
																	<th scope='col'>Cat. d'achat</th>
																	<th scope='col'>Prix</th>
																	<th scope='col ' style='width: 1%;''>Retirer</th>
														</tr>
											</thead>
											
											<tbody>";
												
						/*	TAB */
			$idCompte=$_SESSION['idCompte'];
			$sql = "SELECT item_idItem from panieritem WHERE compteacheteur_idCompteAcheteur='$idCompte'";
			$result = $mysqli->query($sql);
														
			if ($result->num_rows > 0)
																			
				{ //Si ya des articles
			while($row = $result->fetch_assoc()) {	
			//Pour chaque article de l'acheteur dans son panier
				$idItem=$row['item_idItem'];
=======

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


>>>>>>> parent of f090e85 (deleteItem)



<<<<<<< HEAD
			 $photo=$row2['Photos'];
			 $nom=$row2['Nom'];
			 $catAchat=$row2['categorieachat_CategorieAchat'];
			 $prix=$row2['Prix'];

<<<<<<< HEAD
			</th>
=======
			}

	}
>>>>>>> parent of f090e85 (deleteItem)
=======
>>>>>>> parent of e57a931 (bug)

				else {

<<<<<<< HEAD
<<<<<<< HEAD
=======
							
							echo "<tr>
									<th scope='row'>" .$idItem ."</th>
>>>>>>> parent of e57a931 (bug)
	<td><img style='width:70px;height=50px;' src=data:image/jpeg;charset=utf8;base64," .base64_encode($photo) ."></td>
									<td>".$nom ."</td>
									<td>".$catAchat ."</td>
									<td>".$prix ."</td>";
		

/*<td> <button class='btn' onclick='onclick='addItem( <?php echo $idItem; ?>)'> <a class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'><i class='fas fa-trash'></i></i></a></button>*/
	?>
	<td> <button class='btn' onclick='onclick=addItem(<?php echo $idItem; ?>,<?php echo $idCompte; ?>)'> <a class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash'></i></a></button>

<?php
				echo"  </tr>";
												}
																									
										echo"	</tbody>
																				</table>
																</div>
																<div class='space'></div>
																<div class='checkout' style='float: right;''><span style='color:white;font-size:18px;margin-right: 240px;''>Total :</span>
																		<span id='Total'></span>
					<a role='button' class='btn' style='background-color:white;color: #007179' href=''>Passer commande</a>
																</div>
													</div>
											
											</div>";
/*TAB*/

}

}
	}
	else {
	echo' <h1 style="text-align:center; color:white">Veuillez vous connecter</h1>';
	}
=======
				echo' <h1 style="text-align:center; color:white">Veuillez vous connecter</h1>';

				}
>>>>>>> parent of f090e85 (deleteItem)




		 ?>
		





		<div class="space"> </div>
		<div class="container" style="margin-top: 50px;">
			<?php require '../includes/footer.php'; ?>
		</div>
	</div>
</body>
</html>