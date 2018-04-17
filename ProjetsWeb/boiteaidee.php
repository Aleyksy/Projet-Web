<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/boiteaidee_style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<title>Acceuil</title>
</head>
<body>
	<header>


		<?php 


		include('header.php');

		?>


	</header>

	<?php

		$bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');
			
		$requete = $bdd->query("SELECT * FROM boite_idees");

		while ($Reader = $requete->fetch() ) {
	?>
			<div class="Idea">

				<div class="Idea_ID_Date">

	    			<p class="Idea_ID"> ID : <?php echo $Reader["ID"]; ?> </p>
	    			<p class="Idea_Date">Date : <?php echo $Reader["Date_Soumission"]; ?> </p>

	    		</div>

	    		<div>

	    			<p class="Idea_Objet"> Objet : <?php echo $Reader["Objet"]; ?>  </p>
					<p class="Idea_Description">Description : <?php echo $Reader["Description"]; ?> </p>

				</div>

				<div>

					<a href = "ScriptIdeaMove.php?mode=0&id=<?php echo $Reader["ID"];?>"  class="Idea_Valider">Valider</a>
					<a href = "ScriptIdeaMove.php?mode=1&id=<?php echo $Reader["ID"];?>" class="Idea_Suppr" style="background-color: red;">Suppr</a>

				</div>
				
			</div>
	<?php  
		}

	?>

	<script type="text/javascript">
		function test()
		{
			alert("test");
		}
	</script>

	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>