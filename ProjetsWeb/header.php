		<img src="Image/exia.png">
<nav> 

			<div class="head">
    		<div class="acc">
    			
    		<a <?php if(isset($_SESSION['Nom'])){?>  href="accueil.php" <?php } else{?> href ="index.php" <?php  } ?> class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-home"></span> Accueil</a>

			<a href="boutique.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-usd"></span> Boutique</a>
			
			<a href="evenement.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-calendar"></span> Evenement</a>
			
			<a href="boiteaidee.php" class="btn btn-primary btn-danger active"><span class="glyphicon glyphicon-thumbs-up"></span> Boite à idée</a>

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