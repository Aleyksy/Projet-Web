<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Accueil</title>
</head>
<body>
	<header>

	 

		<?php 


		include('header.php');

		?>


	</header>

	<section>
		<div id="defile">	
			<p>Bienvenue sur le site du BDE de l'Exia-Cesi de Reims</p>
		</div>
	</section>	
	<div>	
		<h4><p>Top Event</p></h4>
		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');

			$requete = $bdd->query("SELECT Objet , Link , COUNT(Objet) AS nbr FROM `like_evenement` INNER JOIN evenement ON like_evenement.ID_Evenement = evenement.ID INNER JOIN images ON like_evenement.ID_Evenement = images.ID_Evenement GROUP BY Objet, Link   LIMIT 1");

			$result = $requete->fetch();

			if (!$result) 
			{
				echo "ça marche pas : " ; 
			}
			else 
			{
			?>
				<p><?php echo $result["Objet"]; ?></p>
				<img src="<?php echo "Image/".$result["Link"]; ?>" alt="Mountain View">
				<p><?php echo $result["nbr"]; ?></p>
				<?php 
			}
		?>
	</div>

	<div>	
		<h4><p>Top Idée</p></h4>
		<?php

			$requete = $bdd->query("SELECT Description, Objet, COUNT(Objet) AS nbr FROM `aime` INNER JOIN boite_idees ON aime.ID_Boite_idees = boite_idees.ID GROUP BY Objet, description LIMIT 1");

			$result = $requete->fetch();
			if (!$result) 
			{
				echo "Aucune idée aimé ";
			}
			else 
			{
			?>
				<p><?php echo $result["Objet"]; ?></p>
				<p><?php echo $result["Description"]; ?></p>
				<p><?php echo $result["nbr"]; ?></p>
				<?php 
			}
		?>
	</div>

	<footer>
		<?php
			include('footer.php');
		?>
	</footer>



</body>
</html>