 <!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/javascript" href="script.js">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="assets/scripts/tabs.js"></script>
    </head>
    <body>

        <?php
            require('menu_footer.php');
        ?>

        <div class="container tabs js-tabs">
            <div class="row txtcenter rubrique" >
                    <p class="rubrique-title"> Inscriptions </p>
            </div>
              <img src="images/University-Application-000036808402_Large.jpg" style='float:right; margin-top:3%; margin-right:10%; width:25%; height:25%;'>
                <div class="conteneur">
                      <nav class="tabs-menu">
                        <a href="#tab1" class="lien tabs-menu-link is-active" >Qui peut postuler ?</a>
                        <a href="#tab2" class="lien tabs-menu-link">Procédure d'inscription</a>
                        <a href="#tab3" class="lien tabs-menu-link">Renseignement</a>
                      </nav>

                      <div class="tabs-content tab-inscription" >
                        <div id="tab1" class="tabs-content-item">
                            <ul >
                                <li>Aux étudiants français et internationaux</li>
                                <li>Aux titulaires d'un diplôme de Master 1 ou équivalent dans les domaines suivants: langues étrangères appliquées, marketing, communication, management, environnement, informatique, systèmes et réseaux d'information et de télécommunication, économie, hôtellerie-restauration-tourisme, aéronautique.</li>
                                <li>Aux ingénieurs.</li>
                                <li>Aux professionnels, en formation continue, par le biais de l'Organisme Paritaire Collecteur Agrée (OPCA) ou du plan de formation de leur entreprise.</li>
                                <li>Aux personnes ayant un niveau B2 en langue anglaise (selon le Cadre Européen Commun de Référence).</li>
                            </ul>
                        </div>
                        <div id="tab2" class="tabs-content-item">
                            <ul >
                                <li> Dates de dépôt de candidatures du 3 avril au 21 mai en ligne via <a href="http://www.univ-tlse3.fr/la-formation/vous-souhaitez-candidater-en-m2-216447.kjsp?RH=1181046850877"> ce lien </a> </li>

                                <li> Date limite de réponse aux candidats : 22 juin </li>

                                <li> 2 semaines pour confirmer votre acceptation</li>

                                <li> Période d'inscriptions : 5 juillet au 21 juillet</li>
                            </ul>
                        </div>
                       <div id="tab3" class="tabs-content-item">
                            <p>Si vous avez besoin d'un renseignement, veuillez contacter : <br>
                            <br>
                            Madame Ghaffour Isabelle,
                            Secrétaire Pédagogique <br>

                            <p>
                            UNIVERSITE TOULOUSE III - Paul Sabatier <br>
                            Faculté des Sciences et d'Ingénierie <br>
                            Division de la Formation <br>
                            Bâtiment U3 Porte 105 </p>
                            <br>

                           <p>
                            118 Route de Narbonne <br>
                            31062 TOULOUSE Cedex 09 <br>
                            +33 5 61 55 69 34<br>
                           isabelle.ghaffour@univ-tlse3.fr</p>
                        </div>
                      </div>

                    </div>
            </div>

     </body>
</html>
