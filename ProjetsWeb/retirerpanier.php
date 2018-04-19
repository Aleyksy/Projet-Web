

<?php 
 
  session_start();
    if (!isset($_SESSION['Nom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }


$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

 $boutique = $bdd->prepare('DELETE from panier where

 	ID_Utilisateurs = :ID_Utilisateurs AND ID_Article = :ID_Article

 	LIMIT 1');

$boutique->execute(array(

    

    'ID_Article' => $_GET['produitID'],

    'ID_Utilisateurs' => $_SESSION['id']

    
    ));




 header('Location: panier.php');






?>
      


