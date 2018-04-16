<?php

$bdd = new PDO('mysql:host=localhost;dbname=test','root','');

$req=$bdd->query('SELECT * FROM membre');


while($donnees = $req->fetch())
{

	echo   $donnees['id'];?> </br>
<?php
}



$req->closeCursor();

?>