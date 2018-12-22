<?php
	
	try{
		$link = new PDO('mysql:host=localhost;dbname=ptut','root','$iutinfo');
	}catch(Exception $e){
		die('Erreur :'. $e->getMessage());
	}

?>