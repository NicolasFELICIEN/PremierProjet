<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>GSB</title>
    <link href="ajout.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <header class="page-header">
        <div class='logo'>
            <img src="gsb.png" class="img" class="img" onclick="window.location.href='acceuil.html'"/>
            <h1 class="titre">GSB</h1>
        </div>
    </header>
	</br></br><br/><br/><br/></br></br><br/><br/><br/>
	<form action="action.php" method="post">
		<div class="oeoe">
			<p>Date : <input type="date" name="mois" /></p>
			</br>
			<p>Raison : <input type="text" name="age" /></p>
			</br>
			<p>Etape : <input type="text" name="etape" /></p>
			</br>
			<p>Repas : <input type="text" name="repas" /></p>
			</br>
			<p>Nuité : <input type="text" name="nuit" /></p>
			</br>
			<p>Montant : <input type="text" name="montant" /></p>
			</br>
			<p>Etat : <input type="text" name="etat" /></p>
			</br>
			<p><input type="submit" value="Valider"></p>
		</div>
	</form>
  </body>
</html>