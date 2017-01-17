<?php
echo "<body>
<head>
		<link rel='stylesheet' type='text/css' href='".CSS."connect.css'>
		<meta charset='utf-8'>
		<title></title>
	</head>
	<div id='connexion'>
		<div id='panel'>
			<form method='POST' action='".WEBROOT."/accueil/connexion'>
				<label>
					".$_SESSION['pseudo']."
				</label>
				</br>
			</form>
			<a href='".WEBROOT."accueil/deconnexion'><input type='button' name='Déconnexion' value='Déconnexion'></input></a>
		</div>
	</div>
	</body>";
?>