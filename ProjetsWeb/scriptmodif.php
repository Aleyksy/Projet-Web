<?php

 $ID = $_GET['id'];

if (isset($_POST['nom_event'])AND isset($_POST['description']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



$req = $bdd->prepare('UPDATE boite_idees SET Objet = :objet, Description = :description WHERE ID='.$ID.'');


$req->execute(array(

    'objet' => $_POST['nom_event'],
    'description' => $_POST['description']
       ));


header('Location: boiteaidee.php');
}
else{
	echo "entre tous les champs";
}
?> 