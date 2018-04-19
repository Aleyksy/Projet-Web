
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Acceuil</title>
</head>
<body>
	<header>

	 
		

		<?php 
		include('header.php');
		?>


	</header>
<article>

<div class="row">
<?php

	$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

	$afficher = $bdd->query('SELECT * FROM evenement INNER JOIN images on images.ID_Evenement =evenement.ID_eve
	' );

  	while ($donnes = $afficher->fetch())
	{
   		$likes = $bdd->prepare('SELECT COUNT(ID_Utilisateurs) AS participant FROM evenement INNER JOIN like_evenement ON evenement.ID_eve = like_evenement.ID_Evenement WHERE ID_eve =?'); 
    	$likes->execute(array($donnes['ID_eve']));
 		$date = $likes->fetch(); 
?> 

<!-- début a copier -->
	<div class="col-sm-4">
		<div class="cardevenement" style="width: 350px; background: silver; margin-bottom: 10%;">
 				 <img class="card-img-top" src="Image/<?php echo$donnes['Link'];?>" alt="Card image cap" style="width: 100%; height: 350px; ">  
 			 <div class="card-body">
   				 <h5 class="card-title"><?php echo $donnes['Objet'];  ?></h5> <!-- nom de l'event -->
  			</div>
 				 <ul class="list-group list-group-flush" >
   				 <li class="list-group-item" style="background: #F5F5F5;"><?php echo $donnes['Date_Soumission'];  ?></li><!-- date de l'event -->
    		 
  				</ul>
	  			<div class="card-body">

	  					<a href="Like_Event.php?id=<?php echo $donnes["ID_Evenement"];?>&user=3">
	  						<button  htype="button" class="btn btn-outline-light"><?php echo $date['participant']; ?> 
	  						<?php 

							$CountRequest = $bdd->query("SELECT COUNT(ID) AS nbr FROM like_evenement WHERE ID_Evenement = ".$donnes['ID_Evenement']);

							$count = $CountRequest->fetch();

							if($count)
							{
								echo $count["nbr"];
							}
							else 
							{
								echo "somthing went wrong"; 
							}


						?>
	  						<span class="glyphicon glyphicon-thumbs-up"></span></button></a>
	   				 <a href="infoeve.php?evenement=<?php echo $donnes['ID']  ?>" class="btn btn-primary btn-danger active">Photo et info</a> <!-- redirection vers la parge de l'event -->
	 			</div>
		</div>
	</div>



<?php
}
?>
</div>



</article>
	
	<footer>
		<?php
		include('footer.php');
				?>
	</footer>



</body>
</html>