<?php
@session_start();
?>
<?php require_once('../includes/connexion.php'); 
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="../jQuery/jquery-3.6.0.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/aa064fe470.js" crossorigin="anonymous"></script>
  <link href="../css/pages/payement.css" rel="stylesheet">

</head>
<body>
</head>
<body>
<div class="container-fluid">
  <?php require '../includes/header.php'; ?>



  <?php 

if($_GET['id']==$_SESSION['idCompteAcheteur'])
  {

                              $idCompteAcheteur=  $_SESSION['idCompteAcheteur'];


                              $sql = "SELECT item_idItem from panieritem WHERE compteacheteur_idCompteAcheteur='$idCompteAcheteur'";
                              $result = $mysqli->query($sql);

                            //calcul prix total

                          require '../includes/prixTotal.php';


if($prixTotal!=0)
{
?>

<div class="container">
          <h2>Payement 💳 !</h2>

</div>
<div id="payementSection" class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span style="color:white;">Articles</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (EURO)</span>
              <strong> <?php echo $prixTotal ." €"; ?></strong>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" method="POST" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nom</label>
                <input name="nom" type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Le nom est requis
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Prenom</label>
                <input  name="prenom" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Le prenom es requis
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input  name="email" type="email" class="form-control" id="email" placeholder="vous@ece.fr">
              <div class="invalid-feedback">
                Entrez un mail valide.
              </div>
            </div>

            <div class="mb-3">
              <label for="adresse1">Address 1</label>
              <input  name="adresse1" type="text" class="form-control" id="adresse1" placeholder="" required>
              <div class="invalid-feedback">
                Entrez une adresse valide.
              </div>
            </div>

            <div class="mb-3">
              <label   for="adresse2">Address 2 <span class="text-muted"></span></label>
              <input name="adresse2" type="text" class="form-control" id="adresse2" placeholder="">
            </div>
            <div class="mb-3">
              <label   for="pays">Pays <span class="text-muted"></span></label>
              <input name="pays" type="text" class="form-control" id="pays" placeholder="">
            </div>
            <div class="mb-3">
              <label for="ville">Ville</label>
              <input name="ville"  type="text" class="form-control" id="ville" placeholder="" required>
              <div class="invalid-feedback">
                Entrez une ville valide.
              </div>
            </div>
            <div class="mb-3">
              <label for="codepostal">Code postal</label>
              <input name="codepostal"  type="number" class="form-control" id="codePostal" placeholder="" required>
              <div class="invalid-feedback">
                Entrez un code postal valide
              </div>
            </div>
            <div class="mb-3">
              <label for="tel">Telephone</label>
              <input name="tel" type="number" class="form-control" id="tel" placeholder="" required>
              <div class="invalid-feedback">
                Entrez un telephone valide
              </div>
            </div>
            <hr style="color:white" class="mb-4">

            <h4 style="color:white" class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input value="Visa" name="typeCarte" id="visa" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="visa">Visa</label>
              </div>
              <div class="custom-control custom-radio">
                <input value="Master Card" name="typeCarte" id="master" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="master">Master Card</label>
              </div>
              <div class="custom-control custom-radio">
                <input value="Paypal" name="typeCarte" id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nom de la carte</label>
                <input name="carteNom" type="text" class="form-control" id="cc-name" placeholder="" required>
                <small style="color:white;" >Nom entier sur la carte</small>
                <div class="invalid-feedback">
                  Le nom de la carte est requis
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numéro carte de crédit</label>
                <input name="carteNumero" type="number" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Le numéro de carte est requis
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input name="carteExp" type="date" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  La date d'expiration de la carte est requis
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVC</label>
                <input name="carteCVC" type="text" class="form-control" id="cc-cvv" placeholder=".../..." required >
                <div class="invalid-feedback">
                  Code de sécurité requis
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button name="button" class="btn" style="color:#007179;background-color:white;" type="submit">Payer</button>
          </form>
        </div>
      </div>
    </div>


<?php







}
else
{
    echo" <h1 style='text-align:center; color:white'>Vous n'avez pas d'articles dans votre panier</h1>";

}
}
  else
  {
   echo' <h1 style="text-align:center; color:white">Veuillez vous connecter</h1>';
  }


   ?>

  <?php require 'payementForm.php'; ?>

</div>
  <div class="container" style="margin-top: 50px;">
      <?php require '../includes/footer.php'; ?>
    </div>

</div>

<script type="text/javascript">
 
function payementDone()
  {

      console.log('test')
  }

</script>

</body>
</html>