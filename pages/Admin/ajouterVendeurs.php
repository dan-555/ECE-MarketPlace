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
<script>

    $(document).on("click", ".delete", function(){
    
    $(this).parents("tr").remove();
    $(".add-new").removeAttr("disabled");
    });

    $(document).on("btnOrder", function(){

        $(this).remove();
    });

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>
</head>
<body>
	
	<div classe="container-fluid">
		<?php require '../../includes/header.php'; ?>
		
		<h2>Ajouter Vendeurs &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
	 <div class='container content'>

                                <div class='table-wrapper-scroll-y my-custom-scrollbar  '>
                                 <h4 style='color:white'>Recherchez un acheteur:</h4>  

  <input class='form-control' id='myInput' type='text' placeholder='Search..'>
  	<div class="container" style="margin-top: 50px;">
	</div>
                      <table style='background-color: white' class='table table-bordered table-hover table-striped'>
                                                <thead>
                                                                        <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Nom</th>
                                <th scope='col'>Prenom</th>
                                <th scope='col'>Adresse</th>                             
                                <th scope='col'>Telephone </th>
                                <th scope='col'>Mail </th>

                                <th scope='col ' style='width: 1%;'>Ajouter</th>
                                                                        </tr>
                                                </thead>
                                                
                 <tbody id='myTable'>
                   <?php                                                
                                                            
                         $sql8 = "SELECT idCompteAcheteur, Nom, Prenom, adresse, Telephone, Mail from compteacheteur";
                        $result8 = $mysqli->query($sql8);                                           

                
                                         

                         $id=0; //incrementer les id
                        while($row8 = $result8->fetch_assoc()) {




                                $idCompteAcheteur=$row8["idCompteAcheteur"];
                                $nom=$row8["Nom"];
                                $prenom=$row8["Prenom"];
                                $adresse=$row8["adresse"];
                                $telephone=$row8["Telephone"];
                                $mail=$row8["Mail"];
                                
                         $sql9 = "SELECT CompteVendeur_idCompteVendeur from loginclient WHERE Mail='$mail' and CompteVendeur_idCompteVendeur is NULL";

                                $result9 = $mysqli->query($sql9); 

                                if ($result9->num_rows > 0) {
                                
                                echo "      <tr>
               <td>   <input  disabled id='idCompteAcheteur".$id ."' size='5' type='text' value='".$idCompteAcheteur."'></td>
               
               <td>   <input  disabled id='nom".$id ."' size='5' type='text' value='".$nom."'></td>
               <td>   <input disabled id='prenom".$id ."'  size='15' type='text' value='".$prenom."'></td>
               <td>   <input disabled id='adresse".$id ."' size='15' type='text' value='".$adresse."'></td>
               <td>   <input disabled id='telephone".$id ."' size='15' type='number' value='".$telephone."'></td>
               <td>   <input disabled id='mail".$id ."' size='15' type='text' value='".$mail."'></td>

               ";


                              

?>
<td> 
    <button class='btn' onclick='ajouterVendeur(<?php echo $idCompteAcheteur;?>,<?php echo $id;?>,"<?php echo $mail;?>")'> <i class="fas fa-plus"></i></a></button>
    <?php $id+=1; ?>

</td>
                          

<?php

     }      
}                    
?>
    
</div>
</div>
</div>


<script>
    
function ajouterVendeur(idCompteAcheteur,id,mail)
{
    var mail = document.getElementById("mail"+id).value;

var url= '../../pages/ajouterVendeur.php';
$.ajax({

        type:"POST",
        url:url,
        data: {idCompteAcheteur: idCompteAcheteur,mail : mail },
        success: function(response){
        alert(response);
        }
        });
}

</script>



</body>
</html>