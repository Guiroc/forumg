<?php
echo'<head>
		<link rel="stylesheet" type="text/css" href="'.CSS.'liste_sujet.css">
		<meta charset="utf-8">
		<title></title>
	</head>
	<div id="liste_sujet">
	<h1>sujet</h1>
	<div id="nouveau">';
		if (isset($_SESSION['connect']) and $_SESSION['connect']){
			echo'<a href="'.WEBROOT.'csujet/nouveau/">Nouveau</a><br>
	</div>';
		}
		else{
			echo'<div id="nouveau">
			</div>';
		}
	foreach($this->viewvar as $sujet){
		echo'<a href="'.WEBROOT.'afficher_message/view/'.$sujet["sujet_id"].'"><div class="sujet">
			'.$sujet["sujet_titre"].'<br>'.
			$sujet["sujet_description"].'<br>
		</div></a>';
	}	
echo'</div>';
?>