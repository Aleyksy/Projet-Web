<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
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
	<div class = "row">

		<div class=" col-lg-8 col-lg-push-2">
			<div class="card text-center">

				<div class="card-header" style="color: white; background: #A52A2A;">

	    			<p class="Idea_ID"> ID : <?php echo $Reader["ID"]; ?> </p>
	    			<p class="Idea_Date">Date : <?php echo $Reader["Date_Soumission"]; ?> </p>

	    		</div>

	    		<div class="card-body" style="margin-bottom: 3%;">

	    			<h3 class="card-title"> Objet : <?php echo $Reader["Objet"]; ?>  </h3>
					<p class="card-text">Description : <?php echo $Reader["Description"]; ?> </p>


					<a href = "ScriptIdeaMove.php?mode=0&id=<?php echo $Reader["ID"];?>"  class="btn btn-primary btn-success active">Valider</a>
					<a href = "ScriptIdeaMove.php?mode=1&id=<?php echo $Reader["ID"];?>" class="btn btn-primary btn-warning active">Suppr</a>

					

				</div>
				</div>
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