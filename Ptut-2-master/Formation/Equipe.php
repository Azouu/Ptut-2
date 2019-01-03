<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="script.js">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="tabs.js"></script>
</head>
<body>
    
    <?php
		require('menu_footer.php');
	?>
    
       <div class="container tabs js-tabs">
            <div class="row txtcenter rubrique" > 
                    <p class="rubrique-title"> Equipe pédagogique </p>  
            </div>
         
           <section class="grid-4 has-gutter">

                <div class="col-8 center">                    
                         <nav class="col-1 tabs-menu">
                            <a href="#tab1" class="lien tabs-menu-link is-active" style="text-decoration:none;">Origine des membres académiques et non-académiques</a>
                            <a href="#tab2" class="lien tabs-menu-link" style="text-decoration:none;">Partenariats pédagogiques</a>
                            <a href="#tab3" class="lien tabs-menu-link" style="text-decoration:none;">Accords internationaux avec des universités étrangères</a>
                         </nav>
                    
                        <div class="tabs-content tab-inscription" >
                            
                            <div id="tab1" class="tabs-content-item" >
                                <ul >
                                    <li>La Faculté des Sciences Economiques de l'Université des Sciences Sociales -Toulouse I</li>
                                    <li><a class="lien" href="http://www.enac.fr/"> l'Ecole Nationale d'Aviation Civile - ENAC </a></li>
                                    <li><a class="lien" href="https://www.icao.int/Pages/FR/default_FR.aspx">l'Organisations de l'Aviation Civile Internationale - OACI</a></li>
                                    <li><a class="lien" href="http://www.ecologique-solidaire.gouv.fr/direction-generale-laviation-civile-dgac">la Direction Générale de l'Aviation Civile Internationale - DGAC</a></li>
                                </ul>
                            </div>
                            
                            <div id="tab2" class="tabs-content-item" >
                                <ul >
                                    <li ><a class="lien" href="http://www.univ-tlse3.fr/" > L'université Paul Sabatier, Toulouse III</a></li>
                                    <li><a class="lien" href="http://www.ut-capitole.fr/">L'université Toulouse Capitole I</a> </li>
                                    <li><a class="lien" href="https://www.univ-tlse2.fr/">L'université Toulouse - Jean-Jaurès</a> </li>
                                    <li><a class="lien" href="http://www.meteofrance.com/">Météo France</a> </li>
                                    <li><a class="lien" href="http://www.enac.fr/">l'Ecole Nationale d'Aviation Civile - ENAC</a> </li>
                                    <li><a class="lien" href="http://www.ecologique-solidaire.gouv.fr/direction-generale-laviation-civile-dgac">Experts internationaux de la DGAC</a> </li>
                                    <li>Experts internationaux de l'Organisation Mondiale du Tourisme</li>
                                    <li><a class="lien" href="http://www.toulouse.aeroport.fr/">Aéroport de Toulouse Blagnac</a> </li>
                                    <li><a class="lien" href="http://www.toulouse.cci.fr/">CCI de Toulouse</a> </li>
                                    <li>Compagnies aériennes </li>
                                    <li>Compagnies de location de véhicules partenaires de compagnies aériennes</li>
                                    <li>Partenaires universitaires internationaux</li>
                                    <li>Experts d'entreprises locales dans le domaine du tourisme et du transport aérien</li>   
                                </ul>
                            </div>
                            
                           <div id="tab3" class="tabs-content-item">
                               <ul>
                                   <li><a class="lien" href="http://www.en.psu.ac.th/">Université Prince of Songkla -Phuket </a></li>
                                   <li><a class="lien" href="http://tueng.tu.ac.th/">Université Thamassat - Bangkok</a></li>
                                   <li><a class="lien" href="https://masonkorea.gmu.edu/">Université d'Incheon - Corée du Sud</a></li>
                                   <li><a class="lien" href="https://www.leeds.ac.uk/">Université de Leeds - Angleterre</a></li>
                                   <li><a class="lien" href="https://www.uclm.es/?sc_lang=en">Université de Castilla la Mancha - Espagne</a></li>
                                   <li><a class="lien" href="https://www.urjc.es/en/">Université Rey Juan Carlos - Espagne</a></li>
                                </ul>
                               
                                <div class="col-2">
                                   <div class="alert--success center"> 
                                       <p>Des coopérations se mettent en place avec le réseau international des universités de l'Organisations Mondiale du Tourisme -OMT</p>
                                   </div>    
                                </div>
                               
                            </div>
                      </div>
               </div>
            <div class="col-1"></div>
        </section>
             
   </div>          
</body>
</html>