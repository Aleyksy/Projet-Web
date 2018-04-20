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
			<div class="card text-center" style="background: 	#F8F8FF;">

			<div class="card-header" style="color: white; background: #A52A2A;">
				<div class="row">	
					<div class=" col-lg-2">
	    				<p class="Idea_ID"> ID : <?php echo $Reader["ID"]; ?> </p>
	    			</div>
	    			<div class=" col-lg-2 col-lg-push-8">
	    				<p class="Idea_Date">Date : <?php echo $Reader["Date_Soumission"]; ?> </p>
	    				</div>
	    			<div class="col-lg-2 col-lg-push-1">
	    				<p></p>
	    			</div>
	    		</div>

	    	</div>

	    		<div class="card-body" style="margin-bottom: 3%;">

	    			<h3 class="card-title"> Objet : <?php echo $Reader["Objet"]; ?>  </h3>
					<p class="card-text">Description : <?php echo $Reader["Description"]; ?> </p>

					<button type="button" class="btn btn-outline-light"> 5 <!-- compteur --><span class="glyphicon glyphicon-thumbs-up"></span></button>
					<a href = "ScriptIdeaMove.php?mode=0&id=<?php echo $Reader["ID"];?>"  class="btn btn-primary btn-success active">Valider</a>
					<a href="modif.php?id=<?php echo $Reader["ID"];?>" class="btn btn-primary btn-btn-primary active">Modifier</a>
					<a href = "ScriptIdeaMove.php?mode=1&id=<?php echo $Reader["ID"];?>" class="btn btn-primary btn-warning active">Suppr</a>
					


					

				</div>
				</div>
			</div>
	</div>
		

<?php  
		}

	?>

<form method="post" action="Add_Idea.php">
	<div class="row">
		 <div class="form-group" >
	 		<div class="col-lg-6 col-lg-push-3">
	 			<label for="formGroupExampleInput"></label>
	 		<div class="col-lg-6 col-lg-push-3">
		 		<h3> Ajout d'Objet</h3>
			 		<input type="text" class="form-control" name="Objet" placeholder="Objet"/>
				</br>
			</div>
			<div class="col-lg-12">
				<h3>Description</h3>
				<input type="text" class="form-control" name="Description" placeholder="Description..."/>
    			</br>
    		</div>
    		<div class="col-lg-4 col-lg-push-4">
   					 <button type="submit" class="btn btn-danger active">Ajout d'idée</button>
   			</div>
   			</div>
  		</div>
	</div>
</form> </p>




	


	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>