

   <?php

if (isset($_POST['e-mail']) AND isset($_POST['password']))
{
// echo '<p>'. ' salut mon pote' . '</p>';
    $bdd = new PDO('mysql:host=localhost;dbname=test','root','');



$pass_hache = md5($_POST['password'], PASSWORD_DEFAULT);
$pseudo = $_POST['e-mail'] ;



$req = $bdd->prepare('SELECT * FROM membre WHERE mail = :pseudo AND pass = :password');

$req->execute(array(

    'pseudo' => $pseudo,

    'password' => $pass_hache));


$resultat = $req->fetch();


if (!$resultat)

{

    echo 'Mauvais identifiant ou mot de passe !';
      include('index.php');

}

else

  {

   session_start();

    $_SESSION['id'] = $resultat['id'];

    $_SESSION['pseudo'] = $resultat['speudo'];
    
$req->closeCursor();


    header('Location: index.php');

	}	

}
   ?>