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

<?php /*
    session_start(); 
    if (!isset($_SESSION['pseudo'])) {
       header ('Location: index.php');
       exit(); 
    } 

    else 
    {
    		echo  '<p class="hello">' .' salut les gas le site marche de ouff' . '</p>';
    }
*/
?>
	<section>
		<div id="defile">	
			<marquee direction="left">Bienvenue sur le site du BDE de l'Exia-Cesi de Reims</marquee>	
		</div>
	</section>	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>