<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Publier une offre de stage</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/knacss-unminified.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/javascript" href="assets/scripts/script.js">

</head>

<body>
  <?php
	require('session.php');
	require('connexion.php');
	require('menu_footer.php');
?>

<!-- Envoi de mail pour que le webmaster soit informé de ce qui est posté -->
<?php
if(isset($_POST['email'])) {

    $email_to = "webmaster@adm.ups-tlse.fr";
    $email_subject = $_POST['object'];
    $email_from = $_SESSION['pseudo'];
    $enterprise_location = $_POST['enterprise_location'];
    $enterprise_name = $_POST['enterprise_name'];
    $enteprise_contact = $_POST['email'];
    $stage_sujet= $_POST['object'];
    $stage_description = $_POST['description'];
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Nom de l'entreprise : ".clean_string($enterprise_name)."\n";
    $email_message .= "Lieu du stage : ".clean_string($enterprise_location)."\n";
    $email_message .= "Auteur de l'offre : ".clean_string($email_from)."\n";
    $email_message .= "Contact de l'entreprise : ".clean_string($enterprise_contact)."\n";
    $email_message .= "Sujet du stage : ".clean_string($stage_sujet)."\n";
    $email_message .= "Description du stage : ".clean_string($stage_description)."\n";


    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$auteur . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);



    // Ajout de l'offre à la base de données
    $reqInsert = $link->prepare("insert into offre(`nom_entreprise`, `lieu`, `contact`, `sujet`, `description`, `pseudo`) VALUES (:nom_entreprise, :lieu, :contact, :sujet, :description, :pseudo)");
            $reqInsert->execute(array('numLicence' => $licence,
                'nom_entreprise' => $_POST['enterprise_name'],
                'lieu' => $_POST['enterprise_location'],
                'contact' => $_POST['email'],
                'sujet' => $_POST['object'],
                'description' => $_POST['description'],
                'pseudo' => $_SESSION['pseudo']));

}



?>

<div class="vertical-menu fl">
  <a href="espace.php" class="left lien-espace">Aller à l'espace de connexion</a> <br/>
  <a href="deconnexion.php" class="left disconnect"><i class="fa fa-eject" aria-hidden="true"></i>Déconnexion</a>
</div>

  <div class="form-container center">

    <p class="contact-title">Publier une offre de stage</p>
    <p>Vous pouvez publier une offre de stage à l'attention des autres étudiants en remplissant le formulaire ci-dessous :</p>
    <form action="" method="post">

      <div class="contact-form">
        <label for="enterprise_name">Nom de l'entreprise</label>
        <input type="text" class="contact-input fname" name="enterprise_name" placeholder="Nom de l'entreprise" required>
      </div>

      <div class="contact-form">
        <label for="enterprise_location">Lieu</label>
        <input type="text" class="contact-input lname" name="enterprise_location" placeholder="Lieu du stage"required>
      </div class="contact-form">

      <div class="contact-form">
        <label for="email">Contact</label>
        <input type="text" class="mail" name="email" placeholder="Email de contact" required>
      </div>

      <div class="contact-form">
        <label for="object">Sujet</label>
        <input type="text" class="contact-input object" name="object" placeholder="Sujet du stage" required>
      </div>


      <div class="contact-form">
        <label for="subject">Description</label>
        <textarea class="contact-input subject" name="description" placeholder="Description du stage" required></textarea>
      </div>

      <input type="submit" name="send" value="Envoyer" class="contact-submit fr">
    </form>
  </div>


</div>


</body>

</html>
