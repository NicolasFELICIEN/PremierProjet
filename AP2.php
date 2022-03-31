<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link href="AP2.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <header class="page-header">
        <div class='logo'>
            <img src="gsb.png" class="img" class="img" onclick="window.location.href='acceuil.html'"/>
            <h1 class="titre">GSB</h1>
        </div>
    </header>
	</br></br><br/><br/><br/></br></br><br/><br/><br/>
	<div class="connexion">
		<form action="verif.php" method="POST">
                <h1>Connexion</h2>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="visiteur" >
				</br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" >
				</br>
                <input type="submit" id='submit' value='LOGIN' >
           </form>
      </div>
  </body>
</html>