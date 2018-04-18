<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Acceuil</title>
</head>
<body>
	<header>

		<?php 

		include('header.php');

		?>


	</header>
<body>
<div class= "row">
	<div class="col-sm-12 col-md-push-3">
<div class="carrou" style="width: 50%; background: #A52A2A;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="Image/cube.png" class="img-responsive center-block" alt="First Slide">
            </div>
            <div class="item">
                <img src="Image/course.png" class="img-responsive center-block" alt="Second Slide">
            </div>
            <div class="item">
                <img src="Image/equipe.png" class="img-responsive center-block" alt="Third Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</div>
</div>

<div class ="row">
	<div class="col-sm-4 col-sm-push-4">
	<div class="card">
  <div class="card-body">
    <h1> Titre </h1>
    <p> description </p>
  </div>
</div>
<button type="button" class="btn btn-outline-light"> 5 <!-- compteur --><span class="glyphicon glyphicon-thumbs-up"></span></button>
	</div>
</div>

<div class="row">
	<div class="col-md-8 col-md-push-2">
<div class="card">
  <div class="card-header"  style="background: #A52A2A; color: white;">
   <h4> Nom & Prenom </h4>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=phpweb;charset=utf8', 'root', '');
            
            $requete = $bdd->query("Select Prenom, Commentaire FROM commentaire_evenement INNER JOIN utilisateurs ON commentaire_evenement.ID_Utilisateurs = utilisateurs.ID");

        while ($Reader = $requete->fetch() ) {

      ?>

        <p>
            <?php echo $Reader["Prenom"]; ?></br>
            <?php echo $Reader["Commentaire"]; ?>
        </p>
        </br>
        </br>
        <?php 
            }
        ?>

    </blockquote>
  </div>
</div>
		
	</div>	
</div>

<div class="row">
	<div class="col-md-8 col-md-push-2">
  <div class="card">
  <div class="card-header" style="background: silver;">
    Dis nous ce que tu en penses
  </div>
  <div class="card-body">
    <p class="card-text"> 
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Argumente</label>

<!-- Envoyer les parametres (ID Session, ID_Event) au script php -->

<form method="post" action="Event_com.php?id_event=5&id_user=2&">

    <input type="text" size="30" style="width:600px;" name="Commentaire"/>

    </br>
    
    <input type="submit" value="Commente">
  
  </div>
</form> </p>

  </div>
</div>
		
	</div>	
</div>


</body>

	
	<footer>
		<?php
		include('footer.php');
				?>
	</footer>



</body>
</html>