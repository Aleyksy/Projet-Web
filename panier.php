
<?php  
  session_start();
    if (!isset($_SESSION['Nom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css"/>
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

	<article>
		
		 <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Votre panier : </h1>
    </div> 
<div class = "containerpanier">  
  <div class="row">  

  <?php

  $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');


$tab = array();

  $panier = $bdd->query('SELECT Article,Prix, Url, ID_Article, ID_Utilisateurs, COUNT(ID_Article) AS nombre from panier INNER JOIN article on article.id = panier.ID_Article Group by ID_Article');

  while ($donnes = $panier->fetch())


  {


  ?>





      <div class="col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Image/<?php echo $donnes['Url']; ?>" alt=""></a> <!-- image etc..-->
                <div class="card-body">
                  <h4 class="card-title">
                   <?php echo $donnes['Article']; ?>
                  </h4>
                  <h5><em>  <?php  $valeur = $donnes['Prix'] * $donnes['nombre'] ;
                  echo  $donnes['Prix'].  ' x ' . $donnes['nombre'] .  ' = ' . $valeur; ?> €   </em> </h5> 
                  <button type="button" class="btn btn-danger active btn-lg">Retirer </button>
                  <p class="card-text"></p>  <!-- description de l'article -->
                </div>
              </div>
            </div>
    <!-- fin a copier -->

<script type="text/javascript"  src="ajax.js"></script>
<script type="text/javascript">

var ajouts= document.querySelectorAll("button");




for(var i =0; i<ajouts.length; i++)

{
  var ajout = ajouts[i];


  ajout.addEventListener('click',function(e){



   var httpRequest = getXMLHttpRequest();
    httpRequest.onreadystatechange = function () {
     
      if (httpRequest.readyState ===4){


        alert('Vous avais retirer un article ');
       
       plop.innerHTML = httpRequest.responseText;
  }
    }
        
httpRequest.open('GET','retirerpanier.php?produitID=<?php  echo $donnees['ID'] ?>&id=<?php  echo $_SESSION['id']?>' ,true);
//httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  

httpRequest.send('');
  });

}
</script>



 
<?php
array_push($tab,$valeur);

 }

$value= 0;

foreach ($tab as $key ) 

{

  $value = $value + $key;
  
}



?>

  </div>
</div> 



  
     <div class ="containersolde">
        <p><i class="glyphicon glyphicon-shopping-cart fa-5x "></i>
          <h4> <?php echo $value; ?> € </h4> </p> <!-- total a payer -->
          <button type="button" class="btn btn-danger active btn-lg">Payer<i class="glyphicon glyphicon-euro  "></i></button>
      </div>
     
   





</article>
	
	<footer>
		<?php
		include('footer.php');
				?>
	</footer>



</body>
</html>