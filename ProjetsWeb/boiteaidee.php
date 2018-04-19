<?php  
  session_start();
    if (!isset($_SESSION['Nom']) AND !isset($_SESSION['Prenom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" type="text/css" href="Css/boiteaidee_style.css">
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<title>Boite à idées</title>
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
	    			<p class="IDEA_Name"> Nom : <?php echo $_SESSION['Nom'];  ?></p>
	    			<p class="IDEA_Surname"> Prenom : <?php echo $_SESSION['Prenom'];  ?></p>
	    			<p class="Idea_Date">Date : <?php echo $Reader["Date_Soumission"]; ?> </p>

	    		</div>

	    		<div>

	    			<p class="Idea_Objet"> Objet : <?php echo $Reader["Objet"]; ?>  </p>
					<p class="Idea_Description">Description : <?php echo $Reader["Description"]; ?> </p>

				</div>

				<div>
					<a href="Like_Idea.php?id=<?php echo $Reader["ID"];?>&user=2">Like</a>
					<?php    if($_SESSION['Admin'] == 1 ){  ?>
					<a href="modif.php?id=<?php echo $Reader["ID"];?>"" class="Idea_Modifier">Modifier</a>
					<a href = "ScriptIdeaMove.php?mode=0&id=<?php echo $Reader["ID"];?>"  class="Idea_Valider">Valider</a>
					<a href = "ScriptIdeaMove.php?mode=1&id=<?php echo $Reader["ID"];?>" class="Idea_Suppr" style="background-color: red;">Suppr</a>
					<?php } ?>

				</div>
				
			</div>
	<?php  
		}

	?>
 
	<form method="post" action="Add_Idea.php">
		<p>Objet</p>
		<input type="text" size="20" name="Objet">
		<p>Description</p>
    	<input type="text" size="30" style="width:600px;" name="Description"/>

    	</br>
    
    <input type="submit" value="Commente">
  
  
</form> 

	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>