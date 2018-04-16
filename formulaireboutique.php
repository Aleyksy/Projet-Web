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
	<h1><span> Nouvel article :</span></h1>
	<form>
		 <div class ="form-row">
 				<div class="col-md-12">
   	<div class="form-group col-md-6 col-md-push-3">
      <input type="text" class="form-control" placeholder="nom de l'article">
    	</div>	 
	</div>
 </div>
		<div class ="form-row">
 				<div class="col-md-12">
   	<div class="form-group col-md-6 col-md-push-3">
      <input type="text" class="form-control" placeholder="description de l'artique">
    	</div>	 
	</div>
 </div>
  <div class="form-group col-md-4 col-md-push-4">
  	<div>
    <label for="exampleFormControlFile1">image de l'article</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </div>
		
	</form>

	<button type="button" class="btn btn-primary btn-danger active btn-lg">Ajouter article</button>
</article>

	
	<footer>
		<?php
		include('footer.php');
				?>
	</footer>



</body>
</html>