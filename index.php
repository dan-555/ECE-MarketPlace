<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>ECE MarketPlace !</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<?php require 'includes/header.php'; ?>
<h2>Notre selection du jour ❤️ !</h2>

<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/oppo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/fete-des-meres.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/msi.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<?php require 'includes/footer.php'; ?>
</div>


<h3 id="venteFlash">Ventes flash ⚡ ! </h2>

<div class="countdown" id="countdown1">
<span class="border"> 
  <span class="timeel days"></span>
  <span class="timeColor timeRefDays">Jours</span>
  <span class="timeel hours"></span>
  <span class="timeColor timeRefHours">Heures</span>
  <span class="timeel minutes"></span>
  <span class="timeColor timeRefMinutes">Minutes</span>
  <span class="timeel seconds"></span>
  <span class="timeColor timeRefSecondes">Secondes</span>

  </span>
</div>

<link href="css/index.css" rel="stylesheet">
<script src="js/countDownToTime.js"></script>

</body>
</html>