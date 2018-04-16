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



<?php


$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

/*
SELECT ID,Objet,Description,Date_Soumission,ID_Utilisateurs FROM evenement INNER JOIN like_evenement ON evenement.ID_eve = like_evenement.ID_Evenement WHERE NOW()< Date_Soumission*/

// INNER JOIN like_evenement ON evenement.ID_eve = like_evenement.ID_Evenement GROUP BY ID_eve

$afficher = $bdd->query('SELECT * FROM evenement ');

  while ($donnes = $afficher->fetch())

{

	?> 

	<section class="sec">




	<div class="div1">
	
	
	<p><?php echo $donnes['Objet'];  ?></p>
	<p><?php echo $donnes['Description'];  ?></p>
	<p><?php echo $donnes['ID_eve'];  ?></p>

	<p class="overflow-ellipsis"> 
	 </p>
	</div>
		

	<div  class="div2">
	
    <h2> Donner votre avis : </h2> 
   
  <?php  $likes = $bdd->prepare('SELECT COUNT(ID_Utilisateurs) AS participant FROM evenement INNER JOIN like_evenement ON evenement.ID_eve = like_evenement.ID_Evenement WHERE ID_eve =?'); 


    $likes->execute(array($donnes['ID_eve']));

 $date = $likes->fetch(); ?>



<p >  nombre de like :</p>  <p id="plop"><?php echo $date['participant'];  ?></p> <a class="imglike" href="fullbidon"><img  style="width: 7%" src="Image/like.png" ></a> 


  <script type="text/javascript"  src="ajax.js"></script>


<script>
var result =document.getElementById('plop');


    

    
    var links =document.querySelectorAll('.imglike');
for(var i =0; i<links.length; i++)

{
  var link =links[i];

  link.addEventListener('click',function(e){
 e.preventDefault();


 <?php 
 ?> 

 


    var httpRequest = getXMLHttpRequest();
    httpRequest.onreadystatechange = function () {
     
      if (httpRequest.readyState ===4){
       

        document.getElementById('plop').innerHTML = httpRequest.responseText;
  }
    }
        
      
  

httpRequest.open('GET','ajaxlike.php',true);
httpRequest.send();
  });
}
</script>










 

    





    
		
	
	</div>
		
</section>

<?php

}


?>













	
	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
</html>