<?php
$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT * FROM article WHERE Article LIKE :term'); 
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); 

while($donnee = $requete->fetch()) 
{
    array_push($array, $donnee['Article']); 
}

echo json_encode($array); 

?>