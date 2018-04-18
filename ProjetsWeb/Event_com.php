<?php

    $ID_event = $_GET['id_event'];
    
    $ID_user = $_GET['id_user']; 

    $Commentaire = $_POST['Commentaire'];

    $Commentaire = str_replace("'", "''", $Commentaire);
    	# code...
    
     $bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');

	
	if(!$bdd->query("INSERT INTO commentaire_evenement VALUES (NULL, '".$Commentaire."', ".$ID_event.", ".$ID_user.")"))
		{
			echo "ça marche pas : " ; 
		    echo $Commentaire;
		    echo $ID_event; 
		    echo $ID_user;
		}
		else 
		{
			echo "ok";
			header('Location: evenement_id.php');
		}

   
?>