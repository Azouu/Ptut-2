<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="assets/scripts/script.js">

</head>

<body>
<?php
	ob_start();
  require('menu_footer.php');
	require('connexion.php');

	if (!empty($_POST)) {
			$pseudo = $_POST['login'];
			$req = $link->prepare('SELECT mdp FROM user WHERE pseudo = :pseudo');
			$req->execute(array('pseudo' => $pseudo));
			$res = $req->fetch();

			$mdpcorrect = password_verify($_POST['password'], $res['mdp']);

			if (!$res) {
				$erreur = true;
			} else {
					 if ($mdpcorrect) {
						 	header('Location: espace.php');
						 session_start();
						 $_SESSION['pseudo'] = $pseudo;
					 } else {
						 $erreur = true;
					 }
			}
		}
		ob_end_flush();
  ?>
  <div class="connexion-container">
	<form action="" method="post" >
    <img src='assets/img/logo.PNG'> <br />
    <p style="text-align : center;">Connexion à l'espace étudiant </p>
		Login  <input type="text" name="login" required class="connexion-form login">
		Mot de passe  <input type="password" name="password" required class="connexion-form mdp" style="padding: 0.75em;"> <br />
		<?php
			if (isset($erreur) and $erreur) {
				echo '<div class="erreur-connexion">Mauvais identifiant ou mot de passe</div>';
			}
		?>
		<br />
    <button><a href="index.php">Retour</a></button>

		<input type="submit" name="connexion" value="Connexion" class="connexion-form-btn fr">
	</form>
</div>

</body>

</html>
