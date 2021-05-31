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

</script>


<?php 

$idEnchereArray= Array(2);
$idCompteAcheteurArray=  Array(2);
$PrixProposeArray=  Array(2);

$newPrix=0;
$i=0;

 ?>

</head>
<body>
	    
        <div classe="container-fluid">
		<?php require '../../includes/header.php'; ?>
		
		<h2>Gestion des enchères &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
	 <div class='container content'>

<div class='table-wrapper-scroll-y my-custom-scrollbar  '>
  
  	<div class="container" style="margin-top: 50px;">
	
    </div>


                      <table style='background-color: white' class='table table-bordered table-hover table-striped'>
                        <thead>
                                                                        <tr>
                                <th scope='col'>idItem</th>
                                <th scope='col'>Dernier Prix</th>
                                <th scope='col'>Date de Fin </th>
                                <th scope='col'>Id dernier Acheteur </th>

                                <th scope='col ' style='width: 1%;'>Terminer</th>
                                                                        </tr>
                                                </thead>
                                                
                <tbody id='myTable'>
                   <?php                                                
                                                            
                        $sql8 = "SELECT idItem, DateExpiration from item WHERE categorieachat_CategorieAchat='Meilleure Offre'
                        AND DateExpiration < NOW()";

                        $result8 = $mysqli->query($sql8);  


                      if ($result8->num_rows > 0) {

                        while($row8 = $result8->fetch_assoc()) //pour chaque item
                       { 
                            $idItem=$row8["idItem"];  
                            $DateExpiration=$row8["DateExpiration"];
                            $date_exp = date( 'Y-m-d', strtotime($DateExpiration) );

                             $sql9 = "SELECT idEnchere,item_idItem,compteacheteur_idCompteAcheteur,PrixProposeAcheteur from enchere WHERE item_idItem='$idItem' ORDER BY PrixProposeAcheteur DESC";


                             $result9 = $mysqli->query($sql9);


                            if ($result9->num_rows==0) //On fait rien ya pas d'offres
                            {
                                break;
                            }

                            elseif ($result9->num_rows==1) { //Ya une offre

                                while($row9 = $result9->fetch_assoc()) //determiner l'offre la plus chere
                                  {
                                  $idEnchere=$row9["idEnchere"];
                                  $idCompteAcheteur=$row9["compteacheteur_idCompteAcheteur"];
                                  $PrixProposeAcheteur=$row9["PrixProposeAcheteur"];                                
                                  
                            echo "      <tr>
                  
                            <td>". $idItem."</td>
                            <td>". $PrixProposeAcheteur."</td>
                            <td>". $date_exp."</td>

                            <td>". $idCompteAcheteur."</td>";
                            ?>
                            <td> 
                            <button class='btn' onclick='terminerEnchere(<?php echo $idItem; ?>,<?php echo $idCompteAcheteur; ?>,<?php echo $PrixProposeAcheteur; ?>)'> <a class='delete' title='Delete' data-toggle='tooltip'><i class="fas fa-check"></i></a></button>
                            </td>


                            <?php

                                  }
                             } 
                            
                             elseif ($result9->num_rows >= 2) // Plus de 2 offre 
                             {

                             $i=0;
                            $newPrix=0;

                                 
                                  while($row9 = $result9->fetch_assoc()) //determiner l'offre la plus chere
                                  {
                                  $idEnchereArray[$i]=$idEnchere=$row9["idEnchere"];
                                  $idCompteAcheteurArray[$i]=$row9["compteacheteur_idCompteAcheteur"];
                                  $PrixProposeArray[$i]=$row9["PrixProposeAcheteur"];    
                                  $i=$i+1; 
                                 
                                  if ($i==2)
                                  {
                                    break;
                                  }

                                  }

                                $newPrix=$PrixProposeArray[1] +1; 
                                $idCompteAcheteur=$idCompteAcheteurArray[0];

                             echo " <tr>
                  
                            <td>". $idItem."</td>
                            <td>". $newPrix."</td>
                            <td>". $date_exp."</td>
                            <td>". $idCompteAcheteur."</td>";

                            ?>

                           <td> 
                            <button class='btn'onclick='terminerEnchere(<?php echo $idItem; ?>,<?php echo $idCompteAcheteur; ?>,<?php echo $newPrix; ?>)'> <a class='delete' title='Delete' data-toggle='tooltip'><i class="fas fa-check"></i></a></button>
                            </td>

                            <?php



                             }   

                        }   

}
?>
    
</div>
</div>
</div>


<script>
    
function terminerEnchere(idItem,idCompteAcheteur,dernierPrix)
{
var url= '../../pages/terminerEnchere.php';
$.ajax({

        type:"POST",
        url:url,
        data: {idItem: idItem,idCompteAcheteur:idCompteAcheteur, dernierPrix:dernierPrix },
        success: function(response){
        alert(response);
        }
        });
}

</script>
</script>



</body>
</html>