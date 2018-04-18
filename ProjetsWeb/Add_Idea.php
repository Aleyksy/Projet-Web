<?php

     $bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');

	
	if(!$bdd->query("INSERT INTO boite_idees VALUES (NULL, '".$_POST['Objet']."', '".$_POST['Description']."', NOW())"))
		{
			echo "ça marche pas." ; 
		}
		else 
		{
			echo "ok";
			header('Location: boiteaidee.php');
		}

   
?>