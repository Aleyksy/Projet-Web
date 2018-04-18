<?php

  session_start(); 
    if (!isset($_SESSION['Nom'])) {
       header ('Location: index.php');
       exit(); 
    } 



$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');






$task = "list";

if(array_key_exists("task", $_GET)){
  $task = $_GET['task'];
}

if($task == "write"){
  postMessage();

  
} else {
  getMessages();
}

// recup JSON plus symple 
function getMessages(){
  global $bdd;

 
  $resultats = $bdd->prepare("SELECT Nom, Commentaire FROM commentaire_evenement INNER JOIN utilisateurs ON commentaire_evenement.ID_Utilisateurs = utilisateurs.ID WHERE ID_Evenement = :id_eve ");

   $resultats->execute([
    "id_eve" => $_GET['id_eve']
   
  ]);

  
  $messages = $resultats->fetchAll();
 
  echo json_encode($messages);
}

function postMessage(){
  global $bdd;
  
  
  if(!array_key_exists('content', $_POST)){

    echo json_encode(["status" => "error", "message" => "Oublie de remplir des chant "]);
    return;

  }

  
  $Commentaire = $_POST['content'];

 
  $query = $bdd->prepare('INSERT INTO commentaire_evenement SET Commentaire = :Commentaire, ID_Evenement = :ID_Evenement , ID_Utilisateurs = :ID_Utilisateurs ');

  $query->execute([
  	"Commentaire" => $Commentaire,
  	"ID_Evenement" => $_GET['id_eve'],
  	"ID_Utilisateurs" => $_SESSION['id']
    ,
    
  ]);

 
  echo json_encode(["status" => "success"]);





}

?>