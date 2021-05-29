<?php
@session_start();
?>
<?php require_once('../includes/connexion.php'); ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Objet</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../jQuery/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
	<script src="../js/getParameterByName.js"></script>
	<link href="../css/pages/item.css" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

	<style>
	</style>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Detail de l'objet &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
		<?php
			echo "
			<div class='container content'>";
				
					$idItem=$_GET['id'];
					$sql = "SELECT Nom, Description,Photos,Video,Prix,DatePublication,Marque from item WHERE idItem='{$idItem}'";
					$result = $mysqli->query($sql);
						
							$row = $result->fetch_assoc();
							$nom=$row["Nom"];
							$video=$row["Video"];
							$description=$row["Description"];
							$prix=$row["Prix"];
							$datePub=$row["DatePublication"];
							$marque=$row["Marque"];
							$date_time = date( 'Y-m-d', strtotime($datePub) );
			
				echo "
				<div style='margin-left:25%;margin-right: 25%; padding-top: ' class='card h-100'>
					
				<img src=data:image/jpeg;charset=utf8;base64," .base64_encode($row["Photos"]) ."  class='card-img-top'>
							<div  class='card-body d-flex flex-column'>
								<h3 class='card-title'>" .$nom ."</span>&nbsp;</h3>
								<div class='space'></div>
								<h4>Marque : ".$marque."</h4>
								<div class='space'></div>
								<h4>Description : ".$description."</h4>
								<div class='space'></div>
								<h4>Video :</h4>
						
						
								<div class='space'></div>
								<p class='card-text'>Prix : <span class='prix'></span>&nbsp;€</p>
								<div class='space'></div>
								<h4>Marque : ".$marque."</h4>
								<h4>Date de publication : ".$date_time."</h4>";
								
								if(isset($_SESSION['idLogin']))
								{
									$idLogin=$_SESSION['idLogin'];
									?>
									
									<button name='bouton' onclick='addItem( <?php echo $idItem; ?>)' type='submit' class='p-2 bg-info btn btn-card mt-auto' ><i class='fas fa-shopping-cart'></i>&nbsp;Ajouter au Panier</button>
								
								<?php
								}
								
								else {
									echo " <button class='p-2 bg-info btn btn-card mt-auto  disabled' ><i class='fas fa-shopping-cart'></i>&nbsp;Vous devez vous connecter pour ajouter au Panier</button>";
								}
								
								echo"
						</div>
						</div>";
		?>
	</div>
	<div class="space"> </div>
	<div class="container" style="margin-top: 50px;">
		<?php require '../includes/footer.php'; ?>
	</div>
</div>
<script>

function addItem(idItem)
{
var url= '../pages/addItemForm.php';

$.ajax({

type:"POST",
url:url,
data : 'idItem='+idItem,
success: function(response){
                alert(response);                                   
}
});
}


</script>
</body>
</html>