<?php



 $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



if (isset($_POST['Nom']) AND isset($_POST['Prenom']) AND isset($_POST['password']) AND isset($_POST['repassword']) AND isset($_POST['e-mail']))
{
   


   if ($_POST['password'] == $_POST['repassword'] AND preg_match('#^[\w.-]+@viacesi\.fr#i', $_POST['e-mail']))
   {
    
echo '<p>'.'Votre compte a bien était créer' . '</p>';
echo $_POST['password'] .'</br>' ;
$pass_hache = md5($_POST['password'], PASSWORD_DEFAULT);
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$email = $_POST['e-mail'] ;


echo $pass_hache .'</br>' ;

$req = $bdd->prepare('INSERT INTO utilisateurs(Nom, Prenom, Password, Mail, Date_Inscription) VALUES(:Nom, :Prenom,  :password, :email, CURDATE())');

$req->execute(array(

    'Nom' => $nom,

    'Prenom' => $prenom,

    'password' => $pass_hache,

    'email' => $email));



header('Location: index.php');
}
elseif ($_POST['password'] != $_POST['repassword']) {
	header('Location: inscription.php?errorpswd');
}



  
  else 
{ 

	header('Location: inscription.php?error');
   

}



}



?>

