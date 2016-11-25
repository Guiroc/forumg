<?php
	
	class sujet extends model{
		
		//variable
		protected $sujet_id;
		protected $sujet_titre;
		protected $sujet_description;
		protected $sujet_utilisateur_id;
		
		//constructeur
		public function __construct($id=null, $titre=null, $description=null, $utilisateur_id=null){
			parent::__construct( "sujet", "sujet_id", true, array('Utilisateur' => 'sujet_utilisateur_id'));
			$this->sujet_id = $id;
			$this->sujet_titre = $titre;
			$this->sujet_description = $description;
			$this->sujet_utilisateur_id = $utilisateur_id;
		}
		
		//get
		public function get_sujet_id(){
			return $this->sujet_id;
		}
		
		public function get_sujet_titre(){
			return $this->sujet_titre;
		}
		
		public function get_sujet_description(){
			return $this->sujet_description;
		}
		
		public function get_sujet_utilisateur_id(){
			return $this->sujet_utilisateur_id;
		}
		
		//set
		public function set_sujet_id($id){
			$this->sujet_id = $id;
		}
		
		public function set_sujet_titre($titre){
			$this->sujet_titre = $titre;
		}
		
		public function set_sujet_description($description){
			$this->sujet_description = $description;
		}
		
		public function set_sujet_utilisateur_id($utilisateur_id){
			$this->sujet_utilisateur_id = $utilisateur_id;
		}
	}
?>