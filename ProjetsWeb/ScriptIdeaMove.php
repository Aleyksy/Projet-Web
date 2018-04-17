<?php

    $ID = $_GET['id'];
    
    $mode = $_GET['mode']; 
/*		## mode 1 valide l'idée et mode 0 delete l'idée ##				*/

    $bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');

    if ($mode == 0)
    {
	    if(!$bdd->query("Call deplace_idee(".$ID.")"))
		{
			echo "ça marche pas : " . $ID;
		}
		else 
		{
			echo "ça marche : " . $ID;
			header('Location: boiteaidee.php');
		}
	}
	if ($mode == 1)
    {
	    if(!$bdd->query("Call Suppr_idea(".$ID.")"))
		{
			echo "ça marche pas : " . $ID;
		}
		else 
		{
			echo "ça marche : " . $ID;
			header('Location: boiteaidee.php');
		}
	}
   
?>