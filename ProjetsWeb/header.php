
<nav class="navbar navbar-inverse navbar-fixed-top"> 											

			<ul>	

    			<li class="log2">	<a href="index.php">Acceuil</a> 	</li>
    			<li class="log2">    <a href="boutique.php">Boutique</a> </li>
    			<li class="log2">    <a href="evenement.php">Evenement</a> </li>
    			<li class="log2">    <a href="boiteaidee.php">Boite a idées</a> </li>

    			<?php if(isset($_SESSION['pseudo']))
    			{?>
    				<li class="log1"> <a href="deconnexion.php">Déconnexion</a> </li>

    				<?php
    			}

    			else
    			{
    				?>
					<li class="log1">    <a   href="inscription">Inscription</a> </li>
    				<li class="log1">    <a   href="connextion.php">Connextion</a> </li>
    				<?php
    			}
    			
    			?>
    			
    		</ul>
    	</nav>
        <img  src="Image/exia.png"  style="margin-top: 50px;">