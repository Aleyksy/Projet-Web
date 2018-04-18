<?php  
  session_start();
    if (!isset($_SESSION['Nom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="Css/style.css"/>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Acceuil</title>
</head>
<body>
  <header>

    <?php 
    include('header.php');
    ?>


  </header>




<div class= "row">
  <div class="col-sm-12 col-md-push-3">
<div class="carrou" style="width: 50%; background: #A52A2A;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           
        </ol>   
        
        <div class="carousel-inner">
            <div class="item active">
                <img src="Image/coca.jpg" class="img-responsive center-block" alt="First Slide">
            </div>
            
        </div>
        
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</div>
</div>


<?php

$bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');



$afficher = $bdd->prepare('SELECT * FROM evenement where ID_eve = :id_eve');

  $afficher->execute(array(

    'id_eve' => $_GET['evenement']
       ));


 $date = $afficher->fetch(); ?>



<div class ="row">
  <div class="col-sm-4 col-sm-push-4">
  <div class="card">
  <div class="card-body" >
    <h1> <?php echo $date['Objet'] ?></h1>
    <p> <?php echo $date['Description'] ?></p>
  </div>
</div>

<?php
$afficher->closeCursor();

$likes = $bdd->prepare('SELECT COUNT(ID_Utilisateurs) AS participant FROM evenement INNER JOIN like_evenement ON evenement.ID_eve = like_evenement.ID_Evenement WHERE ID_eve =?'); 


    $likes->execute(array($_GET['evenement']));

 $like = $likes->fetch(); 

 ?>
<button type="button" class="btn btn-outline-light" style="margin-bottom: 5%;"> <?php echo $like['participant'] ?> <span class="glyphicon glyphicon-thumbs-up"></span></button>
  </div>
</div>



  <section class="chat">
    <div class="messages">
     
    </div>
    <div class="user-inputs">
      <form action="chat.php?task=write&id_eve= <?php echo $_GET['evenement']?>" method="POST">
      
        <input type="text" id="content" name="content" placeholder="Type in your message right here bro !">
        <button type="submit"> Send !</button>
      </form>
    </div>
  </section>
      
<script >
  
function getMessages(){
 
  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open("GET", "chat.php?id_eve=<?php echo $_GET['evenement']?>");

  //il faut qu'elle les traite (en exploitant le JSON) et il faut qu'elle affiche ces données au format HTML
  requeteAjax.onload = function(){
    const resultat = JSON.parse(requeteAjax.responseText);
    
   

    const html = resultat.map(function(message){

      return  `

<div class="message">
          
          <span class="author">${message.Nom}</span> : 
          <span class="content">${message.Commentaire}</span>
        </div>
      `
    }).join('');



    const messages = document.querySelector('.messages');
    messages.innerHTML = html;

messages.scrollTop = messages.scrollHeight;


// substring(11, 16) pour limiter la récupération de date 

   

  }
  
  requeteAjax.send();
}



function postMessage(event){
 
  event.preventDefault();

 
  
  const content = document.querySelector('#content');

 
  const data = new FormData();
  
  data.append('content', content.value);

 
  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open('POST', 'chat.php?task=write&id_eve=<?php echo $_GET['evenement']?>');
  
  requeteAjax.onload = function(){
    content.value = '';
    content.focus();
    getMessages();
  }

  requeteAjax.send(data);
}

document.querySelector('form').addEventListener('submit', postMessage);

const interval = window.setInterval(getMessages, 3000);

getMessages();


</script>



   






  
  <footer>
    <?php
    include('footer.php');
        ?>
  </footer>



</body>
</html>