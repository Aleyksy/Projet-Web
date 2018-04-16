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

	<article>
		
		 <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Votre panier : </h1>
    </div> 
<div class = "containerpanier">  
  <div class="row">  

  <!-- debut a copier -->          
      <div class="col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Image/coca.png" alt=""></a> <!-- image etc..-->
                <div class="card-body">
                  <h4 class="card-title">
                    Cola <!-- Titre de l'article -->
                  </h4>
                  <h5>1000€</h5> <!-- prix de l'article -->
                  <p class="card-text">Soda a base de cola</p>  <!-- description de l'article -->
                </div>
              </div>
            </div>
    <!-- fin a copier -->

  </div>
</div> 


  
     <div class ="containersolde">
        <p><i class="glyphicon glyphicon-shopping-cart fa-5x "></i>
          <h4> le solde </h4> </p> <!-- total a payer -->
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