<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="assets/scripts/script.js">
</head>
<body>
	<?php
		try{
			$link = new PDO("mysql:host=localhost;dbname=etudiants","root","");
		}catch(Exception $e) {
			die('Erreur : '. $e->getMessage());
		}
	?>
	
	<?php
		require('menu_footer.php');
	?>
	
	<div class="row txtcenter rubrique">
        <p class="rubrique-title"> Trombinoscope du M2 MITAT </p>
    </div>
	
	<?php
	
	$req = $link->prepare("select * from etudiants");
	$req->execute();
	while($data = $req->fetch()){
	
	?>
	<div class="clearfix" style="margin-top:30px;overflow: hidden; clear: both; display: inline-block; ">
		<div style="border:5px; background-color: #D7DADB; width:400px; high:800px; margin-left:35px; margin-bottom:25px; float:left;">
			<p style="text-align: center; margin-top:25px; margin-bottom:25px;"><img style="width:175px; high:200px; margin-top:15px;" src="<?php echo $data['photo'] ?> "></p>
			<p style="text-align: center;"><?php echo $data['nom']." ".$data['prenom']; ?></p>
			<p style="text-align: center;"> <?php echo $data['identifiant']; ?> </p>
			<p style="text-align: center;"><a style="margin-bottom:15px;" href="<?php echo $data['linkedin']; ?>" class="fa fa-linkedin"></a></p>
		</div>
	</div>
	<?php
	}
	
	$req->closeCursor();
	?> 
 
 
</body>
</html>
