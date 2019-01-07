<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Espace membre</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="assets/scripts/script.js">

</head>

<body>
  <?php
	require('session.php');
	require('connexion.php');
	require('menu_footer.php');
?>

<div class="espace-container">

	<a href="deconnexion.php" class=" disconnect fl"><i class="fa fa-eject" aria-hidden="true"></i>Déconnexion</a>
	<div class="cards-container">
		<div class="row">
	  <div class="column">
	    <a href="publier.php"> <div class="card">
			<h3>Publier une offre de stage</h3>
		</div> </a>
	  </div>
	  <div class="column">
	    <a href="visualiser_offres.php"> <div class="card">
			<h3>Visualiser les offres de stage</h3></div> </a>
	  </div>
	</div>
</div>


</div>


</body>

</html>
