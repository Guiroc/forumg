<?php
echo'<div id="content2">
	<h1>sujet</h1>
	<div>';
		if (isset($_SESSION['connect']) and $_SESSION['connect']){
			echo'<a href="'.WEBROOT.'csujet/nouveau/">Nouveau</a><br>
	</div>';
		}
	foreach($this->viewvar as $sujet){
		echo'<div class="sujet">
			<a href="'.WEBROOT.'afficher_message/view/'.$sujet["sujet_id"].'">'.$sujet["sujet_titre"].'</a><br>'.
			$sujet["sujet_description"].'<br>
		</div>';
	}	
echo'</div>';
?>