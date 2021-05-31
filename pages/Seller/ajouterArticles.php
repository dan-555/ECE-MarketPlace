<?php
@session_start();
?>
<?php require_once('../../includes/connexion.php'); ?>
<?php require_once('../../pages/Seller/ajouterArticleForm.php'); ?>

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
		
		<h2>Ajouter Articles &nbsp;<i class="fas fa-shopping-basket"></i></h2>

        <div class="container">

            <form method="POST" enctype="multipart/form-data">

               <h4>Catégorie Achat :</h4>
              <select name="cat" id="cat" aria-label="Default select example" onchange="showDiv('hidden_div', this)">
              <option selected>Open this select menu</option>
              <option selected="selected" value="Transaction Vendeur-Client">Transaction Vendeur-Client</option>
              <option value="Meilleure Offre">Meilleure Offre</option>
              <option value="Achetez-le Maintenant">Achetez-le Maintenant</option>
              </select>
               <h4>Sous catégorie :</h4>
              <select name="souscat" id="souscat" aria-label="Default select example">
              <option selected>Open this select menu</option>
            
              <option selected="selected" value="Accessoire VIP">Accessoire VIP</option>
              <option value="Materiels scolaires">Materiels scolaires</option>
              <option value="Meubles et objets d’art">Meubles et objets d’art</option>
              </select>

            <div id="hidden_div">
            <h4>Fin enchère :</h4>
            <input  name="dateFin" class="form-control" type="datetime-local">
            </div>
            <h4>Nom : </h4>
            <input required name="nom" class="form-control" type="text">
            <h4>Description : </h4>
            <input required name="description" class="form-control" type="text">
            <h4>Marque : </h4>
            <input required name="marque" class="form-control" type="text">
            
            <div id="hidden_div2">
            <h4>Prix :</h4>
            <input name="prix" class="form-control" type="number">          
            </div>

              <h4>Photo :</h4>
              <input  type="file" name="image" >
              
              <div style="margin-top:40px;">
              <button name="button1" type="submit" class="btn btn-primary">Ajouter !</button>   
              </div>

            </div>
            </form>
        </div>
		
    <div class="space"></div>
</div>
</div>
</div>

<style>
h4 
{color: white;
    margin-top: 20px;

}

.space
{
    margin-bottom: 50px;
}

#hidden_div {
    display: none;
}
#hidden_div2
{
    display: none;

}

</style>
<script>
    
function showDiv(divId, element)
{
   document.getElementById(divId).style.display = element.value == "Meilleure Offre" ? 'block' : 'none';
   document.getElementById('hidden_div2').style.display = element.value == "Achetez-le Maintenant" ? 'block' : 'none';   
}
</script>

</script>


</body>
</html>