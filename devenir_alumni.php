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
                     
                     <div class="txtcenter"> 
                         <p class="centre">Name </p> 
                     </div> 
                     <input class="" type="text" name="Nom">
                     
                     <div class="txtcenter"> 
                         <p class="centre">Surname </p>
                     </div>
                    <input class="" type="text" name="Prenom"> 
                     
                </section>

                <section class="autogrid has-gutter">
                    
                    <div class="txtcenter">
                        <p class="centre"> Date of birth </p> 
                    </div> 
                    <input class="" type="text" name="Date_naissance"> 
                   
                    <div class="txtcenter"> 
                        <p class="centre"> Current e-mail address  </p> 
                    </div>
                    <input class="" type="text" name="Adresse_email" >

                </section>

                <section class="autogrid has-gutter">
                    
                    <div class="txtcenter"> 
                        <p class="centre">Graduating MITAT year  </p> 
                    </div> 
                    
                    <div class="" >
                        <input class="" name="Année_MITAT" type="text"> 
                    </div> 
                    
                    <div class="txtcenter"> 
                        <p class="centre">Past diploma(s) </p> 
                    </div> 
                    
                    <div class="" >
                        <input class="" name="Dernier_diplôme" type="text" >
                    </div>
                </section>

                <section class="autogrid has-gutter">
                    <div class="txtcenter">
                        <p class="centre">Past internship  </p> 
                    </div> 
                    <div class="" >
                        <input class="" name="Dernier_stage" type="text">
                    </div>
                </section>

                <section class="autogrid has-gutter">
                    <div class="txtcenter">
                        <p class="centre">Past job </p> 
                    </div> 
                    <div class="">
                        <input class="petit" name="Poste_précédent" type="text">
                    </div>
                    <div class="txtcenter">
                        <p class="centre">Current job </p> 
                    </div> 
                    <div class="">
                        <input class="petit" name="Poste_actuel" type="text">
                    </div>
                </section>

                <section class="autogrid has-gutter">
                    <div class="txtcenter">
                        <p class="centre">Phone number </p>
                    </div> 
                    <div class="">
                        <input class="" name="Numéro_téléphone" type="text">
                    </div>
                    <div class="txtcenter">
                        <p class="centre">Mobile phone number </p> 
                    </div> 
                    <div class="">
                        <input class="" name="Numéro_téléphone_portable" type="text">
                    </div>
                </section>

                <section class="autogrid has-gutter">
                    
                    <div class="txtcenter">
                        <p class="centre">Current adress</p> 
                    </div> 
                    
                    <div class="">
                        <input class="" name="Adresse" type="text">
                    </div>
                </section>

                <section class="autogrid has-gutter">
                    <div class="txtcenter">
                        <p class="centre">LinkedIn link</p> 
                    </div> 
                    <div class="">
                        <input class="" name="Profil_LinkedIn" type="text">
                    </div>
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
                    <input class="Bouton" type="submit" name="Valider">
                </section>

            </form>
        </section>
    </div>

</body>
</html>
