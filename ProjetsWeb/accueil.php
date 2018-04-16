<?php
    session_start(); 
    if (!isset($_SESSION['Nom'])) {
       header ('Location: index.php');
       exit(); 
    } 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Accueil</title>
</head>
<body>
	<header>

	 

		<?php 


		include('header.php');

		?>


	</header>

	<section>
		<div id="defile">	
			<p>Bienvenue sur le site du BDE de l'Exia-Cesi de Reims</p>
		</div>
	</section>	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>