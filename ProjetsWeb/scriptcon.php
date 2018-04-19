

   <?php

if (isset($_POST['e-mail']) AND isset($_POST['password']))
{
// echo '<p>'. ' salut mon pote' . '</p>';
    $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



$pass_hache = md5($_POST['password'], PASSWORD_DEFAULT);
$mail = $_POST['e-mail'] ;



$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE Mail = :mail AND Password = :password');

$req->execute(array(

    'mail' => $mail,

    'password' => $pass_hache));


$resultat = $req->fetch();


if (!$resultat)

{ 
  header('Location: connexion.php?error');
   
  
}

else

  {

   session_start();

    $_SESSION['id'] = $resultat['ID'];
    $_SESSION['Admin'] = $resultat['Admin'];

    $_SESSION['Nom'] = $resultat['Nom'];
    $_SESSION['Prenom'] = $resultat['Prenom'];

    
$req->closeCursor();


    header('Location: accueil.php');

	}	

}
   ?>