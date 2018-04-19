<?php

  session_start();
    if (!isset($_SESSION['id'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }

$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');

$nom = $_POST['Nom'];




 
if(isset($_FILES['avatar'])) 
{
 
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) 
   {
    
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1)); // sstrtolower  ( mettre en petit ) substr (ignorer un caractére de la chaine ) strrchr ( renvoier l'extention du fichier avec le point )
      if(in_array($extensionUpload, $extensionsValides)) 
        {
         
         $chemin = "Image/".$_SESSION['id'].$nom.".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);

             if ($resultat)
            {
              
              
    $reqImage = $bdd->prepare('INSERT INTO  images SET  Nom= :Nom, Link = :Link, ID_Evenement = :ID_Evenement  ');

    $reqImage->execute(array(
            'Nom' =>$nom,
            'Link' => $_SESSION['id'].$nom.".".$extensionUpload,
            'ID_Evenement' => $_GET['evenement']
            ));



    header('Location: evenement.php');
            }


             
                     else 
                    {
                        $msg ="erreur durant l'importation";
                     
                    }
        }

            else {
                 $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
                 }
    }


            else  {
                  $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
                  }
}


?>