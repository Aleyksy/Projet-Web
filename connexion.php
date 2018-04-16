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

	<body>
<article>
<h1><span> Connectez vous !</span></h1>
<form>


<div class="form-group">
	<div class="col-md-12">
		<div>
    		<label for="exampleInputEmail1">Email address</label>
		</div>
		<div class="col-md-6 col-md-push-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    	</div>
  </div>
</div>

   	 <div class="form-group">
   	 	<div class="col-md-12">
   	 		<div>
    			<label for="exampleInputPassword1">Password</label>
			</div>
			<div class="col-md-6 col-md-push-3">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordHelp" class="form-text text-muted">Ton mots de passe ne concerne que toi !</small>
    	</div>
  </div>
</div>
   			 <button type="submit" class="btn btn-primary btn-danger active">Submit</button>
		
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