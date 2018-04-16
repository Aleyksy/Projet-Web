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

	 
		<img src="Image/exia.png">

		<?php 


		include('header.php');

		?>


	</header>

	<?php

		$bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');
			
		$requete = $bdd->query("SELECT * FROM boite_idees");

		while ($test = $requete->fetch() ) {
	?>
			<div class="Idea">
				<div class="Idea_ID_Date">
	    			<p class="Idea_ID"> ID : <?php echo $test["ID"]; ?> </p>
	    			<p class="Idea_Date">Date : <?php echo $test["Date_Soumission"]; ?> </p>
	    		</div>
	    		<div>
	    			<p class="Idea_Objet"> Objet : <?php echo $test["Objet"]; ?>  </p>
					<p class="Idea_Description">Description : <?php echo $test["Description"]; ?> </p>
				</div>

				<?php 

				if(isset($_SESSION['id']))
				{


					?>

					<div>

						<a href = "" onclick="test()" class="Idea_Valider">Valider</a>

				</div>

				<?php

				}

				if(isset($_SESSION['id']))
				{


					?>

					<div>

						<a href = "" onclick="test()" class="Idea_Suppr" style="background-color: red;">Suppr</a>

				</div>

				<?php

				}
				?>
				
				
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