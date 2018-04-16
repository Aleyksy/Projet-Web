

   <?php

if (isset($_POST['e-mail']) AND isset($_POST['password']))
{
// echo '<p>'. ' salut mon pote' . '</p>';
    $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



$pass_hache = md5($_POST['password'], PASSWORD_DEFAULT);
$mail = $_POST['e-mail'] ;

echo $mail;
echo $pass_hache;

$reqe = $bdd->prepare('SELECT * FROM utilisateurs WHERE Mail = :mail AND Password = :password');

$reqe->execute(array(

    'mail' => $mail,

    'password' => $pass_hache));


$resultat = $reqe->fetch();


if (!$resultat)

{
 
    echo 'Mauvais identifiant ou mot de passe !';



}

else

  {

   session_start();

    $_SESSION['id'] = $resultat['ID'];

    $_SESSION['pseudo'] = $resultat['Nom'];
    

$req->closeCursor();

    header('Location: index2.php');

	}	

}
   ?>