<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="script.js">
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


		<!-- ------------- -->
		<!-- Témoignages -->
		<!-- ------------- -->

	<div class="witnesses grid-6 has-gutter"> 
		<div></div>
	
		<div></div>

		<div class="witness txtcenter">
			<div class="witness-img"><i class="fa fa-user-circle-o" style="font-size:4em"></i></div>
			<p class="witness-text"><i class='fa fa-quote-left'></i>
			Témoignage
			<i class='fa fa-quote-right'></i></p>
		</div>

	

		<div class="witness txtcenter" >
			<div class="witness-img"><i class="fa fa-user-circle-o" style="font-size:4em"></i></div>
			<p class="witness-text"><i class='fa fa-quote-left'></i>
			Témoignage
			<i class='fa fa-quote-right'></i></p>
		</div>

		<div></div>
	<div></div>

	</div>

	<!-- ------------- ----->
	<!-- Fin Témoignages --->
	<!-- ------------- ----->


	<!-- ------------- ----->
	<!-- Début HeroImg ----->
	<!-- ------------- ----->

	<div class="hero-img">
		<p class="hero-img-text center"> Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; deinde cum similis sensus exstitit amoris, si aliquem nacti sumus cuius cum moribus et natura congruamus, quod in eo quasi lumen aliquod probitatis et virtutis perspicere videamur. </p>

		<a href="#"><button class="hero-img-button"><span>Découvrez la formation</span></button></a>
	</div>

	<!-- ------------- ----->
	<!-- Fin HeroImg ----->
	<!-- ------------- ----->


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