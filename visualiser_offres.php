<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Offres de stages disponibles</title>
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

	<div class="stage">
		<?php
		
		//Stage sélectionné
		if(isset($_GET['id_offre'])){
			$req_offre = $link->prepare('SELECT * from offre where id_offre = :id_offre');
			$req_offre->execute(array( 'id_offre' => $_GET['id_offre']));
			$offre = $req_offre->fetch();
			
			?>
			
			<article class="offre">
				<h1> <?php echo utf8_encode($offre['sujet'])?></h1>
				
				<p>Entreprise : <b><?php echo utf8_encode($offre['nom_entreprise']);?></b></p>
				<br />
				<p><?php echo utf8_encode($offre['description']); ?></p>
				
				<a href="visualiser_offres">Retour aux offres </a>
			</article>
			
			<?php
			
		}else{
			$nb_offres_affiche = 10;
			
			//Nombre d'offres
			$req_nb_offre = $link->prepare("Select Count(*) as nb_offres from offre");
			$req_nb_offre->execute();
			$nb_offres = $req_nb_offre-> fetch()['nb_offres'];
			
			if(isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nb_offres){
				$pag_cour = $_GET['page'];
			}else{
				$pag_cour = 1;
			}
			
			$req_all_offre = $link->prepare('SELECT * from offre ORDER by id_offre desc LIMIT '.(($pag_cour-1)*$nb_offres_affiche).', '.$nb_offres_affiche);
			$req_all_offre->execute();
			?>
			<h1> Offres de stages disponibles  : </h1>
			<?php while($offre = $req_all_offre->fetch()){
			?>
				<div class="offre">
					<article>
						<h1><?php echo utf8_encode($offre['sujet']);?></h1>
						<p>Entreprise : <b><?php echo utf8_encode($offre['nom_entreprise']);?></b></p>
						<a href="visualiser_offres?id_offre=<?php echo $offre['id_offre']?>">Voir plus d'informations sur le stage</a>
					</article>
				</div>
			<?php
			}
			
			$nbpages = ceil($nb_offres/$nb_offres_affiche);
			
			?><br /><?php
			for($i = 1; $i<=$nbpages;$i++){
				?>
				
				<a href='visualiser_offres?page=<?php echo $i;?>'> <?php echo $i; ?></a>
				<?php
			}

			$req_all_offre->closeCursor();
			
		}//Fin else
		
		?>
	
	</div>


</body>

</html>
