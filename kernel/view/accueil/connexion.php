<?php
echo "<body>
<head>
		<link rel='stylesheet' type='text/css' href='".CSS."connexion.css'>
		<meta charset='utf-8'>
		<title></title>
	</head>
	<div id='connexion'>
		<div id='panel'>
			<form method='POST' action='".WEBROOT."/accueil/connexion'>
				<label id='Lpseudo'>
					Pseudo :
				</label>
				<input type='text' name='pseudo' placeholder='pseudo'></input> 
				</br>
				<label id='Lmdp'>
					Mot de passe :
				</label>
				<input type='password' name='mdp' placeholder='mod de passe'></input>
				</br>
				<input type='submit' id='co_deco' value='Connexion' ></input>
			</form>
			<a href='".WEBROOT."accueil/enregistrer'><input type='button' id='nouveau' value='nouveau'></input></a>
		</div>
	</div>
	</body>";
?>