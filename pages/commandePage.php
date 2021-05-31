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
	body
{
background-color: #007179;
}
h2 {
width: 100%;
margin: 0;
padding: 0;
text-align: center;
color: white;
padding-top: 30px;
padding-bottom: 40px;
}
h2:after {
display: inline-block;
margin: 0 0 8px 20px;
height: 3px;
content: " ";
text-shadow: none;
background-color: white;
width: 140px;
}
h2:before {
display: inline-block;
margin: 0 20px 8px 0;
height: 3px;
content: " ";
text-shadow: none;
background-color: white;
width: 140px;
}
	</style>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../includes/header.php'; ?>
		
		<h2>Merci de votre commande et à bientot sur le site !</h2>
		
		
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