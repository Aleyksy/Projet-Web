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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Acceuil</title>
</head>
<body>
	<header>

	 

		<?php 


		include('header.php');

		?>


	</header>

	<body>
<article>

<h1><span> Modification évenement</span></h1>
<form action="scriptmodif.php?id=<?php echo$_GET['id']?>" method="post">
 



<div class="form-group">
	<div class="col-md-12">

		<div>
    		<label for="exampleInputEmail1">Nom évenement</label>
		</div>
		<div>

		<div class="col-md-6 col-md-push-3">
    <input type="text" name="nom_event" class="form-control" id="nom_event" aria-describedby="emailHelp" placeholder="Nom évenement">
    	</div>
  </div>
</div>

   	 <div class="form-group">
   	 	<div class="col-md-12">
   	 		<div>
    			<label for="exampleInputPassword1">Description</label>
			</div>
			<div class="col-md-6 col-md-push-3">
    <textarea type="text" name="description" class="form-control" id="description" placeholder="Description"></textarea>

    	</div>
  </div>
</div>   	
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
      Transfère le fichier <input type="file" name="monfichier" />
      <input type="submit" /> 


   			 <input type="submit" value="Commente">
</div>

	</form>
</article>

	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>