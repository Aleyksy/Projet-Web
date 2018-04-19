<?php  
  session_start();
    if (!isset($_SESSION['Nom'])) {
      echo "connecte toi connard";
    } 
    else{
      
      
    }
?>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Css/style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
  <script  src="autobarre.js"></script>
	<title>Boutique</title>
</head>
<body>
	<header>


	 
		

		<?php 


		include('header.php');

		?>
    <form id="ajax-contact" class="form-inline" method="post">
    
      <input class="form-control mr-sm-2" type="search" name="recherche" id="recherche" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit">Search</button>
    </form>
    </header>

	<article>
		
		 <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Boutique</h1>
      <p class="lead">Bienvenue dans la boutique du BDE, qui contient des articles ( snack et boisson ) et des goodies !</p>
    </div>  



          <div id="plop">

       

          </div> 

<?php
    $bdd = new PDO('mysql:host=localhost;dbname=phpweb','root','');




    $boutique = $bdd->query('SELECT * FROM article');


   while ( $donnees = $boutique->fetch())
    { 

      ?>
  
<div class="row">
                    <!-- debut a copier -->
            <div class="col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="Image/<?php echo $donnees['Url'] ?>" alt=""></a> <!-- image etc..-->
                <div class="card-body">
                  <h4 class="card-title">
                    <?php  echo $donnees['Article'] ?> <!-- Titre de l'article -->
                  </h4>
                  <h5><?php  echo $donnees['Prix'] ?> €</h5> <!-- prix de l'article -->
                  <p class="card-text"><?php echo $donnees['Description'] ?></p>  <!-- description de l'article -->
                </div>
                <div class="card-footer"><div class="btn-group" role="group">
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Quantité</label>
                     <!--la quantité de l'article -->
                    
                            <select  name="site" class="form-control" id="exampleFormControlSelect1">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                            </select>

                  </div>
                 <button type="button" id="salut" class="btn btn-danger active">Achéte !</button>

          </div>
          </div>
            </div>
          </div>


      


<script type="text/javascript"  src="ajax.js"></script>
<script type="text/javascript">
var plop  = document.getElementById('plop'); 
var ajouts= document.querySelectorAll("button");
var options= document.querySelectorAll("option");


for(var i =0; i<options.length; i++)

{
  var option = options[i];



}

for(var i =0; i<ajouts.length; i++)

{
  var ajout = ajouts[i];


  ajout.addEventListener('click',function(e){



   var httpRequest = getXMLHttpRequest();
    httpRequest.onreadystatechange = function () {
     
      if (httpRequest.readyState ===4){


        alert('ploop');
       
       plop.innerHTML = httpRequest.responseText;
  }
    }
        
     
  

httpRequest.open('GET','ajoutpanier.php?produitID=<?php  echo $donnees['ID'] ?>&id=<?php  echo $_SESSION['id']?>' ,true);
//httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  


httpRequest.send('');
  });



}


</script>



<?php
    }

?>

          
   
    </div>




</article>
<?php    if($_SESSION['Admin'] == 1 ){  ?>
<form method="post" action="add_article.php" >
    <p>Nom article</p>
    <input type="text" size="20" name="article">
    <p>Prix</p>
      <input type="text" size="30" style="width:600px;" name="prix"/>
    <p>URL</p>
      <input type="file" name="url"/>

      <p>Description</p>
      <input type="text" size="30" style="width:600px;" name="description"/>

      </br>
    
    <input type="submit" value="Commente">
  
  </div>
</form> 

<?php } ?>
<!--<div id="ajout" style="margin-top: 10px">
<form action="add_article.php" method="post">




<div class="form-group">
  <div class="col-md-12">
    <div>
        <label>Nom de l'article</label>
    </div>
    <div class="col-md-6 col-md-push-3">
    <input type="text" name="article" class="form-control" id="article"  placeholder="Nom de l'article">
      </div>
  </div>
</div>

     <div class="form-group">
      <div class="col-md-12">
        <div>
          <label>Prix</label>
      </div>
      <div class="col-md-6 col-md-push-3">
    <input type="text" name="prix" class="form-control" id="prix" placeholder="€">
      </div>
  </div>
</div>

    <div class="form-group">
      <div class="col-md-12">
        <div>
          <label>Description</label>
      </div>
      <div class="col-md-6 col-md-push-3">
    <input type="text" name="description" class="form-control" id="description" placeholder="Description">
      </div>
  </div>
</div>
         <button type="submit" class="btn btn-primary btn-danger active">Valider</button>
    
    </div>
 
  </form>

</div>-->

	<footer>
		<?php
		include('footer.php');
?>
	</footer>



</body>
