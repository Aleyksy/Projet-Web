 <nav> 
 
			<div class="head">
    		<div class="acc">

    			<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    
 
    			
    		<a <?php if(isset($_SESSION['Nom'])){?>  href="accueil.php" <?php } else{?> href ="index.php" <?php  } ?> class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-home"></span> Accueil</a>

			<a href="boutique.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-usd"></span> Boutique</a>			
			<a href="evenement.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-calendar"></span> Evenement</a>
			
			<a href="boiteaidee.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-thumbs-up"></span> Boite à idée</a>

			<a href="boiteaidee.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-shopping-cart"></span> <!-- nombre d'article dans le panier --> Panier </a>
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 </form>
</nav>
		</div>
			
			<?php 
			if(isset($_SESSION['Nom'])){?>
				<div class="inscr">
					<a  href="deconnexion.php" class="btn btn-danger active">Déconnexion</a>
			</div>

    		<?php
    			}

    		else
    			{
    				?>
				<div class="inscr">
					<a  href="inscription.php" class="btn btn-danger active">Inscription</a>
					<a href="connexion.php" class="btn btn-danger active">Connexion</a>
			</div>
    				<?php
    			}
    			
    			?>
			
			
		</div>



   	</nav> 
 