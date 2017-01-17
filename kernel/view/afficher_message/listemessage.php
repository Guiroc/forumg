<?php
echo'<head>
		<link rel="stylesheet" type="text/css" href="'.CSS.'listemessage.css">
		<meta charset="utf-8">
		<title></title>
	</head>
	<div id="content1">';
	//var_dump($this->viewvar);
			echo'<h1>'.$this->viewvar[1]['sujet_titre'].'</h1>
			<div id="annonce">';
			echo $this->viewvar[2];
			echo'</div>';
			if ($this->viewvar[0]!= array(array(0=>null))){
		foreach ($this->viewvar[0] as $message){
			echo'<div class="message">'.
				@$message["message_contenu"].'<br>
			</div>';
		}
		}else{
			echo'<div class="message">
				Pas de message<br>
			</div>';
			}
			if (isset($_SESSION['connect']) and $_SESSION['connect']){
		echo'<div>
			<form action="'.WEBROOT.'/afficher_message/viewajout/'.$this->viewvar[1]['sujet_id'].'" method="post">
			<textarea id="nouveau" name="nouveau"></textarea>
			<input type="submit">
			</form>
		</div>';
			}
		echo'<div>
				<form action="'.WEBROOT.'">
					<input type="submit" value="retour">
				</form>
		</div>
	</div>';
?>