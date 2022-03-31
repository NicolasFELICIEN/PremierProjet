<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link href="AP.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
		<?php
               session_start();
               if($_SESSION['username'] !== ""){
                   $user = $_SESSION['username'];
                    // afficher un message
                   echo "Bonjour $user, vous êtes connecté";
               }
        ?>
    <header class="page-header">
        <div class='logo'>
            <img src="gsb.png" class="img" class="img" onclick="window.location.href='acceuil.html'"/>
            <h1 class="titre">GSB</h1>
        </div>
    </header>
	</br></br></br></br></br></br>
	<div class="bouton">
		<button onclick=window.location.href='ajout.php' class="ajout">+</button>  
		<p>Ajouter une note de frais</p>
	</div>
  </body>
</html>