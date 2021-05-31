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






</head>
<body>
	    
        <div classe="container-fluid">
		<?php require '../../includes/header.php'; ?>
		
		<h2>Modifier Vendeurs &nbsp;<i class="fas fa-shopping-basket"></i></h2>
		
	 <div class='container content'>

<div class='table-wrapper-scroll-y my-custom-scrollbar  '>
 <h4 style='color:white'>Recherchez un vendeur:</h4>  

  <input class='form-control' id='myInput' type='text' placeholder='Search..'>
  
  	<div class="container" style="margin-top: 50px;">
	
    </div>


                      <table style='background-color: white' class='table table-bordered table-hover table-striped'>
                        <thead>
                                                                        <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Pseudo</th>
                                <th scope='col'>code Postal</th>
                                <th scope='col'>Telephone </th>
                                <th scope='col'>Mail </th>

                                <th scope='col ' style='width: 1%;'>Modifier</th>
                                                                        </tr>
                                                </thead>
                                                
                <tbody id='myTable'>
                   <?php                                                
                                                            
                         $sql8 = "SELECT idCompteVendeur, Pseudo, CodePostal,Telephone, Mail from comptevendeur";
                        $result8 = $mysqli->query($sql8);                                           

                         $id=0; //incrementer les id
                        while($row8 = $result8->fetch_assoc()) {


                                $idCompteVendeur=$row8["idCompteVendeur"];
                                $pseudo=$row8["Pseudo"];
                                $codePostal=$row8["CodePostal"];
                                $telephone=$row8["Telephone"];
                                $mail=$row8["Mail"];
                        
                                                    
                                
                                echo "      <tr>
                               <td>". $idCompteVendeur."</td>
               
               <td>   <input  id='pseudo".$id ."' size='5' type='text' value='".$pseudo."'></td>
               <td>   <input id='codePostal".$id ."'  size='15' type='number' value='".$codePostal."'></td>
               <td>   <input id='telephone".$id ."' size='15' type='number' value='".$telephone."'></td>
               <td>   <input id='mail".$id ."' size='15' type='text' value='".$mail."'></td>";
             

?>
<td> 
    <button class='btn' onclick='suppVendeur(<?php echo $idCompteVendeur; ?>)'> <a class='delete' title='Delete' data-toggle='tooltip'><i class='fas fa-trash'></i></a></button>


    <button class='btn' onclick='editVendeur(<?php echo $idCompteVendeur; ?>,<?php echo $id; ?>);'> <a data-toggle='tooltip'><i class='fas fa-edit'></i></a></button>
    <?php $id+=1; ?>

</td>
                          

<?php
}                    
?>
    
</div>
</div>
</div>


<script>
    
function suppVendeur(idCompteVendeur,)
{
var url= '../../pages/supprimerVendeur.php';
$.ajax({

        type:"POST",
        url:url,
        data: {idCompteVendeur: idCompteVendeur},
        success: function(response){
        alert(response);
        }
        });
}



function editVendeur(idCompteVendeur,id)
{
var pseudo = document.getElementById("pseudo"+id).value;
var codePostal = document.getElementById("codePostal"+id).value;
var telephone = document.getElementById("telephone"+id).value;
var mail = document.getElementById("mail"+id).value;

    console.log(pseudo);
    console.log(codePostal);
    console.log(telephone);
    console.log(mail);




var url= '../../pages/editVendeur.php';
$.ajax({

        type:"POST",
        url:url,
        data: {idCompteVendeur: idCompteVendeur,pseudo: pseudo,codePostal: codePostal,telephone: telephone,mail: mail},
        success: function(response){
        alert(response);
        }
        });
}

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</script>



</body>
</html>