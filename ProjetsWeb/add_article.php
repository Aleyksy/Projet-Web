<?php
  
  session_start();
    if (!isset($_SESSION['Nom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }

 



if (isset($_POST['article']) AND isset($_POST['prix']) AND isset($_POST['description']) AND isset($_POST['url']))
{
   
$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



$req = $bdd->prepare('INSERT INTO article (Article, Url, Description, Prix) VALUES(:article, :url, :description, :prix)');

$req->execute(array(
'article' => $_POST['article'],
'prix' => $_POST['prix'],
'description' => $_POST['description'] ,
'url' => $_POST['url']));

header('Location: boutique.php');
}
  
  else 
{ 

	header('Location: inscription.php?error');
   
}


?>


