<html>

	<head>
		<title>Actualités</title>
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
		require('connexion.php');
		
		//Nombre de news à afficher au total
		
		
		//Si une news est sélectionné
		if(isset($_GET['id_news'])){
			$req_news = $link->prepare('SELECT * from news where id_news = :id_news');
			$req_news->execute(array( 'id_news' => $_GET['id_news']));
			$data = $req_news->fetch();
			?>
			<article class="choosen_news">
				<h1 class="title_news"><?php echo utf8_encode($data['title']);?></h1> 
				<br />		
				<p>Date de l'article : <?php echo $data['date']; ?></p>
				<br />
				<p class="contenu_article"> <?php echo utf8_encode($data['contenu']); ?></p>
			</article>
			<?php
			$req_news->closeCursor();
		}
		//Sinon affichage de toutes les news trié par date
		else{
			//Nombre de news affiché
			$nb_news_affiche = 10;
			
			//Nombre de news dans la bdd
			$req_nb_news = $link->prepare("Select Count(*) as nb_news from news"); 
			$req_nb_news->execute();
			$nb_news = $req_nb_news-> fetch()['nb_news'];
			
			//pages courantes si un entier et si inférieur nombre de page
			//Sécurité si on rentre n'import quoi dans l'url
			if(isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nb_news){
				$pag_cour = $_GET['page'];
			}else{
				$pag_cour = 1;
			}
			
			
			//affiche toute les news selon la page et le nombre de news
			$req_all_news = $link->prepare('SELECT * from news LIMIT '.(($pag_cour-1)*$nb_news_affiche).', '.$nb_news_affiche);
			$req_all_news->execute();
			?>
		
			<div class="all_news">
			<h1>Toutes les actualités</h1>
			<?php
				while($data = $req_all_news->fetch()){
					?>
					<article class="news">
							<h1><?php echo utf8_encode($data['title']); ?> </h1>
							<p class="date">Date de l'article : <?php echo $data['date']; ?></p>
							
							<p class="news_contenu"> <?php echo utf8_encode(substr($data['contenu'],0, 300));?> . . .
							<a href="actualité.php?id_news=<?php echo $data['id_news']; ?>">Voir plus d'informations</a>
							</p>
					</article>
				<?php
			}
			//Nombres de pages selon le nombres de news
			$nbpages = ceil($nb_news/$nb_news_affiche);
			
			for($i = 1; $i<=$nbpages;$i++){
				?>
				<a href='actualité.php?page=<?php echo $i;?>'> <?php echo $i; ?></a>
				<?php
			}
			
			$req_all_news->closeCursor();
			?>
			</div>
			<?php
		}
		?>
		
		
	
	</body>

</html>