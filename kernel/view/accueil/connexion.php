<?php
echo "<body>
<head>
		<link rel='stylesheet' type='text/css' href='".CSS."connexion.css'>
		<meta charset='utf-8'>
		<title></title>
	</head>
	<div id='connexion'>
		<form method='POST' action='".WEBROOT."/accueil/connexion'>
			<label>
				Pseudo :
			</label>
			<input type='text' name='pseudo'></input> 
			</br>
			<label>
				Mot de passe :
			</label>
			<input type='text' name='mdp'></input>
			</br>
			<input type='submit' name='co_deco' value='Connexion'></input>
		</form>
		<a href='".WEBROOT."accueil/enregistrer'><input type='button' name='nouveau' value='nouveau'></input></a>
	</div>
	</body>";
?>