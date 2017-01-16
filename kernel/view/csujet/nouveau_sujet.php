<?php
echo"<head>
		<link rel='stylesheet' type='text/css' href='".CSS."nouveau_sujet.css'>
		<meta charset='utf-8'>
		<title>Ajout d'une sujet</title>
	</head>";
	echo'<div id="sujet">
			<form action="'.WEBROOT.'/csujet/ajout" method="post">
				<libel>Titre</libel>
				<input id="titre" type="text" name="titre"></input>
				</br>
				<libel>Message</libel>
				<textarea id="nouveau" name="nouveau"></textarea>
				<input type="submit">
			</form>
			<form action="'.WEBROOT.'">
					<input type="submit" value="retour">
			</form>
		</div>';
?>