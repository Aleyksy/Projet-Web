<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="Css/formulaire.css">
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

<div class="form-style-10">
<h1>Inscription<span> Inscrivez vous!</span></h1>
<form>
    <div class="section"><span>1</span>Nom &amp; Prenom</div>
    <div class="inner-wrap">
        <label>Nom <input type="text" name="field1" /></label>
        <label>Prenom <textarea name="field2"></textarea></label>
    </div>

    <div class="section"><span>2</span>Email </div>
    <div class="inner-wrap">
        <label>Adresse mail <input type="email" name="field3" /></label>
    </div>

    <div class="section"><span>3</span>Mot de passe</div>
        <div class="inner-wrap">
        <label>Mot de passe <input type="password" name="field5" /></label>
        <label>Confirmer le mot de passe <input type="password" name="field6" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="Sign Up" />
    </div>
</form>
</div>


	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>