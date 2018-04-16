<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<title>Acceuil</title>
</head>
<body>
	<header>

	 

		<?php 


		include('header.php');

		?>


	</header>


<form action="scriptcon.php" method="post">
    <p>
     	<label>Mail        <input type="text" name="e-mail" required="required"  /></label>
     		 </br>
       
       <label>Passeword    <input type="password" name="password" required="required"  /></label>
      
      </br>
      
                        <input type=submit value="Valider"/>
    </p>


   </form>








	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>