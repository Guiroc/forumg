<?php

class utilisateur{
	private $utilisateur_id,
	private $utilisateur_pseudo,
	private $utilisateur_e_mail,
	private $utilisateur_mot_passe,
	
	function utilisateur($id,$pseudo,$e_mail,$mot_passe){
		
		$this->utilisateur_id=$id;
		$this->utilisateur_pseudo=$pseudo;
		$this->utilisateur_e_mail=$e_mail;
		$this->utilisateur_mot_passe=$mot_passe;
	}
}
?>