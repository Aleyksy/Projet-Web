<?php

    $ID = $_GET['id'];
    
    $user = $_GET['user']; 

    echo $ID;
    echo $user;

    $bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');
			
	$requete = $bdd->query("SELECT * FROM like_evenement WHERE ID_Utilisateurs = ".$user." AND ID_Evenement = ".$ID."");
	$result = $requete->fetch(); //Si il trouve qql chose il le tej
	
	if($result)
	{
		if(!$bdd->query("DELETE FROM like_evenement WHERE ID_Evenement = ".$ID." AND ID_Utilisateurs = ".$user))
		{
			echo "ça marche pas de delete: " . $ID;
		}
		else 
		{
			echo "ça marche de delete: " . $ID;
			header('Location: evenement.php');
		}
	}
	else // Sinon il l'ajoute
	{
		if(!$bdd->query("INSERT INTO like_evenement VALUES(NULL, ".$ID." , ".$user.");"))
		{
			echo "ça marche pas d'insert: " .$ID;
		}
		else 
		{
			echo "ça marche d'insert: " .$ID;
			header('Location: evenement.php');
		}
	}
   
?>