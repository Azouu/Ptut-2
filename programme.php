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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="assets/scripts/tabs.js"></script>
</head>
<body>

	<?php
		require('menu_footer.php');
	?>

      <div class="container tabs js-tabs">
            <div class="row txtcenter rubrique">
                    <p class="rubrique-title"> Programme </p>
            </div>

            <img src="images/skills.jpg" style='float:right; margin-top:5%; margin-right:10%; width:25%; height:25%;'>
            <div class="conteneur">
                  <nav class="tabs-menu">
                    <a href="#tab1" class="lien tabs-menu-link is-active" >Programme</a>
                    <a href="#tab2" class="lien tabs-menu-link">Compétences visées</a>
                  </nav>

                <div class="tabs-content tab-programme" >

                    <div id="tab1" class="tabs-content-item">
                      <p>Le programme s'organise en deux semestres comprenant des modules obligatoires. </p>

                    <section class="autogrid">
                        <div class="center">
                            <table class="table" summary="">
                                        <caption  style="color:white;">répartition des enseignements de S1</caption>
                                        <thead>
                                            <tr>
                                                <th scope="h5-like" class="txtcenter h5-like">Semestre 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <p class="h6-like"> UE 1. (9 ECTS) </p>
                                                    <p class="contenu">Méthodes et outils de communication
                                                    Anglais et Langue Vivante 2 ou TOEIC </p></td>
                                            </tr>
                                            <tr>
                                                <td> <p class="h6-like"> UE 2. (6 ECTS) </p>
                                                    <p class="contenu"> Économie du Transport Aérien et du Tourisme </p> </td>
                                            </tr>
                                             <tr>
                                                <td> <p class="h6-like"> UE 3. (9 ECTS) </p>
                                                    <p class="contenu"> Gestion du Transport Aérien et du Tourisme </p>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td> <p class="h6-like"> UE 4. (6 ECTS) </p>
                                                    <p class="contenu"> Projet de professionnalisation </p> </td>
                                            </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="center">
                                <table class="table" summary="">
                                        <caption  style="color:white;">répartition des enseignements de S2</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5-like">Semestre 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <p class="h6-like"> UE 5. (30 ECTS) </p>
                                                    <p class="contenu"> Stage professionnalisant d'une durée minimale de 4 mois et maximale de 6 mois (stage à l'étranger fortement recommandé)
                                                    </p>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                            </div>
                    </section>
                    <div class="alert--warning center">
                        <p class="h6-like"> Modalités concernant le stage </p>
                        <p>
                            Afin de valider le second semestre, un stage d'une durée de <strong>4 à 6 mois</strong> doit être effectué dans une entreprise en lien avec le Tourisme ou le Transport Aérien.
                            Il peut intégrer des missions de marketing, de management, d'administration ou de commercialisation.</p>

                        <p>
                            Ce stage à visée d'insertion professionnelle donne lieu à un <strong>rapport de stage</strong> ainsi qu'une <strong>soutenance orale</strong> devant deux membres de l'équipe pédagogique et un représentant de son entreprise.
                        </p>

                        <p>
                            Le stage doit être réalisé dans le respect d'un cahier des charges et de la convention tripartite entre l'Université Paul Sabatier, l'entreprise d'accueil et l'étudiant. </p>

                        <p>
                            Pendant le stage, le stagiaire doit être suivi par son tuteur de stage ainsi que son tuteur pédagogique. </p>

                        <p>La notation du travail de l'étudiant sera articulée autour de trois axes: la qualité de la réalisation des tâches qui lui ont été confiées durant le stage, la qualité du rapport écrit, et la qualité de sa présentation orale en langue anglaise. </p>
                        <img src="images/stagesmitatpromo.png" alt="Repartition des stages des étudiants">
                     </div>

                    <div class="alert--success center">
                        <p class="h6-like "> Notation </p>
                        <p>Les connaissances de l'étudiant seront évalués tout au long de l'année en contrôle continu et lors d'examens finaux. Pour valider une UE, les notes de l'étudiant doivent être supérieures à 10/20.</p>
                        <p>Le diplôme est obtenu dès lors que toutes les UE des deux semestres ont été validées.</p>
                    </div>
                </div>

                <div id="tab2" class="tabs-content-item">

                    <p>Le Master 2 « Management International du Transport Aérien et du Tourisme » (MITAT) permet au diplômé d'acquérir des compétences riches et variées:</p>
                    <h4 class="titre_paragraphe">Compétences scientifiques et/ou techniques</h4>
                    <ul>
                        <li>Acquisition des outils d'analyses indispensables à l'exercice d'une profession liée aux secteurs aéronautique et touristique.</li>
                    </ul>

                    <h4 class="titre_paragraphe">Compétences transversales</h4>
                    <ul>
                        <li>Comprendre les mécanismes du secteur du tourisme, associés aux deux dimensions que sont la promotion et la communication</li>
                        <li>Gérer et exprimer son propre potentiel dans un contexte de globalisation</li>
                        <li>Maîtrise de la langue anglaise, indispensable dans les domaines du transport aérien et du tourisme : capacité à comprendre, lire, participer et présenter une description ou une argumentation claire et fluide dans un style adapté au contexte, construire une présentation de façon logique en langue anglaise</li>
                        <li>Compétence à « gérer les marchés » par l'acquisition des connaissances de spécialisation et d'étude des outils et pratiques spécifiques au transport aérien en langue anglaise</li>
                        <li>Capacité à acquérir une vision globale du transport aérien international sous l'aspect stratégique et prospectif en présentant les principales contraintes et enjeux actuels</li>
                    </ul>

                    <h4 class="titre_paragraphe">Compétences complémentaires</h4>
                    <ul>
                        <li>Maîtriser les outils de communication d'aujourd'hui et de demain grâce à l'utilisation quotidienne des ressources TICE (video-conférences, outils informatiques) lors de l'enseignement théorique, professionnel et du stage.</li>
                    </ul>

                    <h4 class="titre_paragraphe">Professionnalisation soutenue</h4>
                    <ul>
                        <li>Le cursus est fortement professionnalisant grâce notamment à la combinaison, tout au long du parcours, de stages intensifs en entreprise, en bureaux d'études et d'une formation académique et professionnelle de haut niveau.</li>
                        <li>Les relations internationales avec les universités asiatiques favorisent l'accès au milieu professionnel dans un contexte international.</li>
                    </ul>
                    <p>La spécialité MITAT n'a pas pour vocation directe de former à la recherche. Cependant, le travail à ce niveau Master 2 mobilise les productions scientifiques sur et autour de la spécialité pour former des experts capables eux-mêmes, à leur niveau et dans leur contexte de travail, de développer des savoirs inédits ou de faire évoluer les savoirs codifiés au service des projets qu'ils portent.</p>
                </div>
            </div>
        </div>
     </div>
    </body>
</html>
