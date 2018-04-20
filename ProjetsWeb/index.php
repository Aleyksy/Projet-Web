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
	<div class="card mb-3" >	
		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');

			$requete = $bdd->query("SELECT Objet , Link , COUNT(Objet) AS nbr FROM `like_evenement` INNER JOIN evenement ON like_evenement.ID_Evenement = evenement.ID_eve INNER JOIN images ON like_evenement.ID_Evenement = images.ID_Evenement GROUP BY Objet, Link   LIMIT 1");

			$result = $requete->fetch();

			if (!$result) 
			{
				 
			}
			else 
			{
			?>
				
			<img class="card-img-top" src="<?php echo "Image/".$result["Link"]; ?>"  alt="Card image cap">
			<div class="card-body">
				<p class="card-title" style="font-size: 35px; margin-top: 2%;">Top Event</p>
				 <p class="card-text" style="font-size: 20px;"> <?php echo $result["Objet"]; ?>
				 	<?php echo $result["nbr"]; ?> <span class="glyphicon glyphicon-thumbs-up"></span> 
				</p>
				<?php 

			}
		?>
		</div>
	</div>

	<div class="card">	
		
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
			<div class="card-body">
				<p class="card-title" style="font-size: 35px;">Top Idée</p>

				<p class="card-text" style="font-size: 25px;"> <?php echo $result["Objet"]; ?> </br>
				<?php echo $result["Description"]; ?>
				<p><?php echo $result["nbr"]; ?> <span class="glyphicon glyphicon-thumbs-up"></span></p>
				   
				<?php 
			}
		?>
		</div>
	</div>


	<footer>
		<?php
			include('footer.php');
		?>
	</footer>



</body>
</html>