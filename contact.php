<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Contact</title>
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



	<div class="contact-container ">

		<div class="contact-infos right">
		<p class="contact-info-title">Secrétariat MITAT</p>
		<p class="contact-info">
              Université Paul Sabatier Toulouse III <br/>
              118, route de Narbonne <br/>
              31062 TOULOUSE Cedex 9 <br/>
              Département Langues et Gestion -Bâtiment  4A - 1er étage
              </p>

             <p><i class='fa fa-phone'></i>+33 (0)5 61 55 69 34</p>
             <p><i class='fa fa-fax'></i>+33 (0)5 61 55 83 58</p>
             <p><i class='fa fa-envelope'></i>seclv@adm.ups-tlse.fr</p>


             <p class="contact-info-title">Université Paul Sabatier (Accueil Général)</p>

             <p><i class='fa fa-phone'></i>+33 (0)5 61 55 66 11</p>
             <p><i class='fa fa-envelope'></i>Scolarité et inscriptions : info-inscriptions@adm.ups-tlse.fr</p>
             <p><i class='fa fa-envelope'></i>Etudiants étrangers : etudiants.etrangers@adm.ups-tlse.fr</p>
		</div>

		<div class="form-container left">

			<p class="contact-title">Contactez-nous</p>

			<form action="submit_mail.php">

				<div class="contact-form">
					<label for="fname">Prénom</label>
					<input type="text" class="contact-input fname" name="prenom" placeholder="Votre prénom" required>
				</div>

				<div class="contact-form">
					<label for="lname">Nom</label>
					<input type="text" class="contact-input lname" name="prenom" placeholder="Votre nom"required>
				</div class="contact-form">

				<div class="contact-form">
					<label for="lname">Pays</label>
					<input type="text" class="contact-input country" name="country" placeholder="Votre pays" required>
				</div>


				<div class="contact-form">
					<label for="email">Email</label>
					<input type="mail" class="contact-input mail" name="email" placeholder="Votre email" required>
				</div>

				<div class="contact-form">
					<label for="object">Objet</label>
					<input type="text" class="contact-input object" name="object" placeholder="L'objet du mail" required>
				</div>


				<div class="contact-form">
					<label for="subject">Sujet</label>
					<textarea class="contact-input subject" name="subject" placeholder="Ecrivez quelque chose..." required></textarea>
				</div>

				<input type="submit" name="send" value="Envoyer" class="contact-submit fr">
			</form>
		</div>
	</div>

</body>
</html>
