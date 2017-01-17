<?php
	echo "<body>
<head>
		<link rel='stylesheet' type='text/css' href='".CSS."connexion.css'>
		<meta charset='utf-8'>
		<title></title>
	</head>
	<div id='nouveau_utilisateur'>
		<form method='POST' action='".WEBROOT."/accueil/nouveau_utilisateur'>
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
			<label>
				E_mail :
			</label>
			<input type='text' name='e_mail'></input>
			</br>
			<input type='submit' name='nouveau' value='enregistrer'></input>
		</form>
	</div>
	</body>";
?>