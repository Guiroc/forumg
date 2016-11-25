<?php

	class utilisateur extends model{
		
		//variable
		protected $utilisateur_id;
		protected $utilisateur_pseudo;
		protected $utilisateur_e_mail;
		protected $utilisateur_mot_passe;
		
		//constructeur
		public function __construct($id=null,$pseudo=null,$e_mail=null,$mot_passe=null){
			parent::__construct("utilisateur","utilisateur_id",true,null);
			$this->utilisateur_id=$id;
			$this->utilisateur_pseudo=$pseudo;
			$this->utilisateur_e_mail=$e_mail;
			$this->utilisateur_mot_passe=$mot_passe;
		}

		//get
		public function get_utilisateur_id(){
			return($this->utilisateur_id);
		}
		
		public function get_utilisateur_pseudo(){
			return($this->utilisateur_pseudo);
		}
		
		public function get_utilisateur_e_mail(){
			return($this->utilisateur_e_mail);
		}
		
		public function get_utilisateur_mot_passe(){
			return($this->utilisateur_mot_passe);
		}
		
		public function get_total(){
			return($this->utilisateur_id.', '.$this->utilisateur_pseudo.', '.$this->utilisateur_e_mail.', '.$this->utilisateur_mot_passe);
		}
		
		//set
		public function set_utilisateur_id($utilisateur_id){
			$this->utilisateur_id=$utilisateur_id;
		}
		
		public function set_utilisateur_pseudo($utilisateur_pseudo){
			$this->utilisateur_pseudo=$utilisateur_pseudo;
		}

		public function set_utilisateur_e_mail($utilisateur_e_mail){
			$this->utilisateur_e_mail=$utilisateur_e_mail;
		}
		
		public function set_utilisateur_mot_passe($utilisateur_mot_passe){
			$this->utilisateur_mot_passe=$utilisateur_mot_passe;
		}	
}
?>