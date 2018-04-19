<?php 

$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

$Commentaire = $_POST['content'];


if (isset($_GET['produitID']) and isset($_GET['id']) )
{

  $boutique = $bdd->prepare('INSERT INTO panier(Quantite, ID_Article, ID_Utilisateurs, Date_commande) VALUES(:Quantite, :ID_Article,  :ID_Utilisateurs, NOW())');

$boutique->execute(array(

    'Quantite' =>  $Commentaire,

    'ID_Article' => $_GET['produitID'],

    'ID_Utilisateurs' => $_GET['id']

    
    ));



}





  


?>