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

	 
		<img src="Image/exia.png">

		<?php 


		include('header.php');

		?>


	</header>
<article>

<div class="row">
<!-- début a copier -->
	<div class="col-lg-4">
		<div class="cardevenement" style="width: 100%; background: silver; margin-bottom: 5%">
 				 <img class="card-img-top" src="Image/cube.png" alt="Card image cap" style="width: 100%;"> <!-- image de l'event -->
 			 <div class="card-body">
   				 <h5 class="card-title">Titre evenement</h5> <!-- nom de l'event -->
  			</div>
 				 <ul class="list-group list-group-flush" >
   				 <li class="list-group-item" style="background: #F5F5F5;">Date</li><!-- date de l'event -->
    			<li class="list-group-item" style="background: #F5F5F5;">Lieux</li> <!-- lieu de l'event -->
  				</ul>
  			<div class="card-body">
  					<button type="button" class="btn btn-outline-light"> 5 <!-- compteur --><span class="glyphicon glyphicon-thumbs-up"></span></button>
   				 <a href="#" class="btn btn-primary btn-danger active">Photo et plus</a> <!-- redirection vers la parge de l'event -->
 			</div>
		</div>
	</div>

<!-- fin a copier -->

</div>

</article>
	
	<footer>
		<?php
		include('footer.php');
				?>
	</footer>



</body>
</html>