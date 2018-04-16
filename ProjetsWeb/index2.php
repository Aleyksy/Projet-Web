<?php
    session_start(); 
    if (!isset($_SESSION['pseudo'])) {
       header ('Location: index.php');
       exit(); 
    } 

    else 
    {
    		echo  '<p class="hello">' .' salut les gas le site marche de ouff ' . '</p>' ;

			echo $_SESSION['pseudo'];
    }

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css"/>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<title>Acceuil</title>
</head>
<body>
	<header>

	 
		<img src="Image/exia.png">

		<?php 


		include('header.php');

		?>


	</header>


	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>