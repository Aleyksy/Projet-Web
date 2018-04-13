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