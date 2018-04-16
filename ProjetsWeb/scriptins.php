<?php



 $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



if (isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['repassword']) AND isset($_POST['e-mail']) AND strlen($_POST['pseudo']) > 3)
{
   echo '<p>' . ' Vous vous êtes trompé en retapant votre mot de passe' . '</p>';



   if ($_POST['password'] == $_POST['repassword'] AND preg_match('#^[\w.-]+@viacesi\.fr#i', $_POST['e-mail']))
   {
    
echo '<p>'.'Votre compte a bien était créer' . '</p>';
echo $_POST['password'] .'</br>' ;
$pass_hache = md5($_POST['password'], PASSWORD_DEFAULT);
$pseudo = $_POST['pseudo'] ;
$email = $_POST['e-mail'] ;


echo $pass_hache .'</br>' ;

$req = $bdd->prepare('INSERT INTO utilisateurs(Nom, Password, Mail, Date_Inscription) VALUES(:pseudo, :password, :email, CURDATE())');

$req->execute(array(

    'pseudo' => $pseudo,

    'password' => $pass_hache,

    'email' => $email));



header('Location: index.php');
}



  
  else 
{ 

 echo '<p>' .'Votre compte na pas était ajouter recommencer' . '</p>';

	header('Location: inscription.php');
   

}



}



?>

