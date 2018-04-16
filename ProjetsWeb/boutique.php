<?php  
	session_start();
    if (!isset($_SESSION['Nom'])) {
   		echo "connecte toi connard";
    } 
    else{
    	
    	
    }

?>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="Css/formulaire.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Boutique</title>
</head>
<body>
	<header>

	 
		

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
