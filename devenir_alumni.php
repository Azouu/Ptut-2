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
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

	<?php
		require('menu_footer.php');
	?>

    <div class="container">

        <div class="txtcenter rubrique">
                <p class="rubrique-title"> Devenir ALUMNI </p>
        </div>
        <section class="grid-4">
            <div></div>
            <form action="" method="post" name="DevenirALUMNI" class="col-2">

                <section class="autogrid has-gutter ">
                    <p class="champ marge">Name <input class="droite" type="text" name="Nom">  </p>
                    <p class="champ marge">Surname <input class="droite" type="text" name="Prenom"> </p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge"> Date of birth <input class="droite" type="date" name="Date_naissance"> </p>
                    <p class="champ marge"> Current e-mail address <input class="droite" type="email" name="Adresse_email" ></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">Graduating MITAT year <input class="droite" name="Année_MITAT" type="number"></p>
                    <p class="champ marge">Past diploma(s) <input class="droite" name="Dernier_diplôme" type="text"></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">Past internship <input class="droite" name="Dernier_stage" type="text"></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">Past job <input class="droite" name="Poste_précédent" type="text"></p>
                    <p class="champ marge">Current job <input class="droite" name="Poste_actuel" type="text"></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">Phone number <input class="droite" name="Numéro_téléphone" type="tel"></p>
                    <p class="champ marge">Mobile phone number <input class="droite" name="Numéro_téléphone_portable" type="tel"></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">Current adress<input class="droite" name="Adresse" type="text"></p>
                </section>

                <section class="grid-2 has-gutter">
                    <p class="champ marge">LinkedIn link<input class="droite" name="Profil_LinkedIn" type="text"></p>
                </section>

                <div class="txtcenter rubrique large">
                    <label for="switch" class="champ">Would you accept to be an intermediary between your company and MITAT students?</label>
                    <input type="checkbox" class="switch" id="switch" name="Intermediaire"> <br>
                    <label for="switch" class="champ">Would you be interested in giving lectures about your past experiences?</label>
                    <input type="checkbox" class="switch" id="switch" name="Retour_Experience"> <br>
                    <label for="switch" class="champ" >Do you wish to write down a testimony of your experience during your MITAT year?</label>
                    <input type="checkbox" class="switch" id="switch" name="Temoignage"> <br>
                </div>

                <section class="grid-2 has-gutter captcha">
                    <span class="captcha">
                        <input class="captcha" type="text" id="validation" name="validation" value="" title="Veuillez entrer le mot qui apparait dans l'image" required="required" />
                        <br />
                        <img src="/captcha?image" alt="" class="captcha" />
                        <a href="/captcha?audio" title="fichier mp3, 10 Ko" onclick="javascript:window.open(this.href, 'Mot &agrave; saisir', ''); return false;" class="lien_interne">&eacute;coutez le mot &agrave; saisir</a>
                    </span>
                    <input type="submit" name="Valider">
                </section>

            </form>
        </section>
    </div>

</body>
</html>
