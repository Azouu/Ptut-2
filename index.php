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
		require('menu_footer.php');
	?>

			<!-- Slideshow -->

	<div class="slideshow-container">

		<div class="slides fade">
		  <img src="" class="slides-img">
		  <div class="slides-text">Le Master 2 professionnel et recherche Management International du Transport Aérien et du Tourisme (MITAT) est une spécialité du domaine du Droit Économie Gestion mention Management des Systèmes d'Information. Intégralement enseignée en langue anglaise, cette formation de niveau BAC+5 (niveau I du RNCP) est unique en France par sa stratégie d'ouverture internationale et double formation, à la fois en Tourisme et en Transport Aérien.</div>
		</div>

		<div class="slides fade">
		  <img src="" class="slides-img">
		  <div class="slides-text">Lorem Ipsum</div>
		</div>

		<div class="slides fade">
		  <img src="" class="slides-img">
		  <div class="slides-text">lorem Ipsum</div>
		</div>

		<a class="slides-previous" onclick="plusSlides(-1)">&#10094;</a>
		<a class="slides-next" onclick="plusSlides(1)">&#10095;</a>

		<div class="slides-dots">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>

	</div>

		<!-- ------------- -->
		<!-- FIN Slideshow -->
		<!-- ------------- -->

		<!-- ------------- -->
		<!-- Chiffres clés -->
		<!-- ------------- -->

	<div class="key-informations grid-5 has-gutter">

		<div></div>

		<div class="key-information txtcenter">
			<div class="key-information-icon"><i class="fa fa-graduation-cap" style="font-size: 4em"></i></div>
			<p class="key-information-title">48</p>
			<p class="key-information-text">Etudiants diplômés</p>
		</div>


		<div class="key-information txtcenter" >
			<div class="key-information-icon"><i class="fa fa-black-tie" style="font-size: 4em"></i></div>
			<p class="key-information-title">88,9%</p>
			<p class="key-information-text">De diplômés en situation potentielle d'emploi</p>
		</div>


		<div class="key-information txtcenter">
			<div class="key-information-icon"><i class="fa fa-trophy" style="font-size: 4em"></i></div>
			<p class="key-information-title">Rang A</p>
			<p class="key-information-text">Excellence en 2011 par le Ministère
				de l'Enseignement Supérieur</p>
		</div>

		<div></div>

	</div>

	<!-- ------------- ------->
	<!-- Fin chiffres clés --->
	<!-- ------------- ------->



	<!-- ------------- ----->
	<!-- Début HeroImg ----->
	<!-- ------------- ----->

	<div class="hero-img">
		<p class="hero-img-text center"> Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; deinde cum similis sensus exstitit amoris, si aliquem nacti sumus cuius cum moribus et natura congruamus, quod in eo quasi lumen aliquod probitatis et virtutis perspicere videamur. </p>

		<a href="#"><button class="hero-img-button"><span>Découvrez la formation</span></button></a>
	</div>

	<!-- ------------- ----->
	<!-- Fin HeroImg ------->
	<!-- ------------- ----->

	<!-- ------------- ------------>
	<!-- Début feeds ------->
	<!-- -------------------- ----->

	<div class="newsfeed grid-6 has gutter">


			<div class="latest-news col-4">
				<p class="latest-news-title txtcenter"><i class="fa fa-newspaper-o"></i>Dernières actualités</p>
				<div class="last-news">
					<?php
					require('connexion.php');
					$req = $link->prepare('select * from news order by date desc limit 3');
					$req->execute();


					while($data = $req->fetch()){
						$list = date_parse($data['date']);
						//Pour afficher les mois en français ERREUR
						setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
						?>
						<article class="news">
							<h1><?php echo utf8_encode($data['title']); ?> </h1>
							<p class="date">Écrit le <b><?php echo $list['day'].' '.ucfirst(strftime("%B",$list['month'])).' '. $list['year']; ?></b></p>

							<p class="news_contenu"> <?php echo utf8_encode(substr($data['contenu'],0, 300));?> . . .
							<a href="actualité.php?id_news=<?php echo $data['id_news']; ?>">Voir plus d'informations</a>
							</p>
						</article>
						<?php
					}//Fin news
					$req->closeCursor();
					?>
				</div>
				<a href="actualites.php" class="hero-img-button newsfeed-btn"><span>Toutes les actualités</span></a>
			</div>

			<div class="twitter col-2 right">
				<article class="news_twitter">

					<a class="twitter-timeline" data-lang="fr" data-width="302" data-height = "600"
						href ="https://twitter.com/ups_amitat?lang=fr">Twitter feed</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

				</article>
			</div>

	</div>




<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("slides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	}
</script>

</body>
</html>
